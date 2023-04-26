<?php

declare(strict_types=1);

/*
 * This file is part of the package t3o/get.typo3.org.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace App\Service;

use App\Exception\IncompatiblePackageException;
use App\Exception\PackageNotInstalledException;
use App\Form\Dto\BasePackageDto;
use App\Repository\BasePackageRepository;
use Composer\Composer;
use Composer\Console\Application as ComposerApplication;
use Composer\Package\PackageInterface;
use Composer\Semver\Constraint\MatchAllConstraint;
use Composer\Util\Platform;
use RuntimeException;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Process\Process;
use Symfony\Contracts\Cache\ItemInterface;
use Symfony\Contracts\Cache\TagAwareCacheInterface;
use Throwable;

use function getcwd;
use function is_array;
use function rtrim;
use function is_string;
use function dirname;
use function usort;
use function strlen;
use function str_replace;
use function implode;
use function iterator_to_array;

class BasePackageService
{
    /**
     * @var string
     */
    private const PACKAGE_TYPE = 'typo3-base-package';

    /**
     * @var string[]
     */
    private const ALLOWED_FILE_TYPES = [
        // dot files
        '.editorconfig',
        '.gitignore',
        '.htaccess',
        // image files
        //'.gif',
        //'.jpg',
        '*.png',
        '*.ico',
        '*.svg',
        // json files
        '*.json',
        // css / sass files
        '*.css',
        '*.scss',
        // twig files
        '*.twig',
    ];

    private string $oldWorkingDir = '';

    public function __construct(
        private readonly string $projectDir,
        private readonly string $assetsDir,
        private readonly KernelInterface $kernel,
        private readonly TagAwareCacheInterface $cache,
        private readonly BasePackageRepository $basePackageRepository,
        private readonly Filesystem $filesystem,
        private readonly ComposerApplication $composerApplication,
    ) {
        $this->composerApplication->setAutoExit(false);
    }

    private function getProjectDir(): string
    {
        return rtrim($this->kernel->getProjectDir() . '/' . $this->projectDir, '/');
    }

    private function getRepositoryDir(): string
    {
        return rtrim($this->getProjectDir() . '/packages', '/');
    }

    private function changeToProjectDir(): void
    {
        $oldWorkingDir = (string)getcwd();
        //$oldWorkingDir = Platform::getCwd(true);

        if ($oldWorkingDir !== $this->getProjectDir()) {
            chdir($this->getProjectDir());
            $this->oldWorkingDir = $oldWorkingDir;
        }
    }

    private function restoreToWorkingDir(): void
    {
        if ($this->oldWorkingDir !== '') {
            chdir($this->oldWorkingDir);
            $this->oldWorkingDir = '';
        }
    }

    private function getPublicDir(): string
    {
        $defaultPublicDir = 'public';

        $composerFilePath = $this->kernel->getProjectDir() . '/composer.json';

        if (!file_exists($composerFilePath)) {
            return $defaultPublicDir;
        }

        if (!is_string($contents = file_get_contents($composerFilePath))) {
            return $defaultPublicDir;
        }

        if (!is_array($composerConfig = json_decode($contents, true, 512, JSON_THROW_ON_ERROR))) {
            return $defaultPublicDir;
        }

        return $composerConfig['extra']['public-dir'] ?? $defaultPublicDir;
    }

    private function getPublicAssetsDir(): string
    {
        $publicDir = $this->kernel->getProjectDir() . '/' . $this->getPublicDir();

        if (!is_dir($publicDir)) {
            throw new RuntimeException(sprintf('The target directory "%s" does not exist.', $publicDir));
        }

        return rtrim($publicDir . '/' . $this->assetsDir, '/');
    }

    /**
     * Creates symbolic link.
     *
     * @throws RuntimeException if link cannot be created
     */
    private function symlink(string $originDir, string $targetDir, bool $relative = false): void
    {
        if ($relative) {
            $this->filesystem->mkdir(dirname($targetDir));

            if (!is_string($absoluteTargetDir = realpath(dirname($targetDir)))) {
                throw new RuntimeException(
                    sprintf('Could not determine absolute path for "%s".', $targetDir),
                    1_658_923_646
                );
            }

            $originDir = $this->filesystem->makePathRelative($originDir, $absoluteTargetDir);
        }

        $this->filesystem->symlink($originDir, $targetDir);

        if (!file_exists($targetDir)) {
            throw new RuntimeException(
                sprintf('Symbolic link "%s" was created but appears to be broken.', $targetDir),
                1_658_923_653
            );
        }
    }

    private function installAssets(): void
    {
        $publicAssetsDir = $this->getPublicAssetsDir() . '/';
        $validAssetDirs = [];

        foreach ($this->getInstalledBasePackages() as $basePackage) {
            if (!is_dir($originDir = $basePackage->getInstallPath() . '/public')) {
                continue;
            }

            $assetDir = $basePackage->getAssetsDir();
            $targetDir = $publicAssetsDir . $assetDir;
            $validAssetDirs[] = $assetDir;

            $this->filesystem->remove($targetDir);
            $this->symlink($originDir, $targetDir, true);
        }

        // remove the assets of the bundles that no longer exist
        if (is_dir($publicAssetsDir)) {
            $dirsToRemove = Finder::create()->depth(0)->directories()->exclude($validAssetDirs)->in($publicAssetsDir);
            $this->filesystem->remove($dirsToRemove);
        }
    }

    private function getComposer(): Composer
    {
        $composer = $this->composerApplication->getComposer();

        if (!$composer instanceof \Composer\Composer) {
            throw new RuntimeException(
                \sprintf('Composer project is not setup in "%s".', $this->getProjectDir()),
                1_658_915_927
            );
        }

        return $composer;
    }

    private function cloneRepository(): void
    {
        $process = new Process(
            ['git', 'clone', 'https://github.com/GsTYPO3/base-packages.git', 'packages'],
            $this->getProjectDir()
        );
        if ($process->run() !== 0) {
            throw new RuntimeException(\sprintf(
                "Error while cloning repository.\n\nOutput:\n%s\n\nError Output:\n%s\n\Command:\n%s\n\nProject Dir:\n%s",
                $process->getOutput(),
                $process->getErrorOutput(),
                $process->getCommandLine(),
                $this->getProjectDir()
            ), 1_660_919_239);
        }
    }

    private function updateRepository(): void
    {
        $process = new Process(
            ['git', 'pull'],
            $this->getRepositoryDir()
        );
        if ($process->run() !== 0) {
            throw new RuntimeException(\sprintf(
                "Error while cloning repository:\n%s\n\n%s",
                $process->getOutput(),
                $process->getErrorOutput()
            ), 1_660_919_240);
        }
    }

    /**
     * @return array<int, string>
     */
    private function getComposerProjectFiles(): array
    {
        return [
            $this->getProjectDir() . '/vendor',
            $this->getProjectDir() . '/composer.json',
            $this->getProjectDir() . '/composer.lock',
        ];
    }

    private function initializeProject(bool $force = false): void
    {
        // Clone or update the base-packages repository
        if (!$this->filesystem->exists($this->getRepositoryDir() . '/.git')) {
            $this->cloneRepository();
        } else {
            $this->updateRepository();
        }

        // Remove previous installation
        if ($force) {
            $this->filesystem->remove($this->getComposerProjectFiles());
        }

        // Early return if project already exists
        if ($this->filesystem->exists($this->getComposerProjectFiles())) {
            return;
        }

        // Create project
        $output = new BufferedOutput();
        $input = new ArrayInput([
            'command' => 'init',
            '--name' => 't3o/base-packages',
            '--description' => 'Known base packages shown at the get.typo3.org Tools.',
            '--type' => 'project',
            '--stability' => 'dev',
            '--repository' => ['{"type": "path", "url": "packages/*/*"}', '{"packagist.org": false}'],
            '--ansi' => true,
            '--no-interaction' => true,
            '--working-dir' => $this->getProjectDir(),
        ]);

        if (($exitCode = $this->composerApplication->run($input, $output)) !== 0) {
            throw new RuntimeException(\sprintf('Composer failed:\n%s', $output->fetch()), $exitCode);
        }

        $this->cache->invalidateTags(['installed-base-packages']);
    }

    private function installBasePackages(): void
    {
        $this->initializeProject();

        // Prepare packages to require
        $requirements = [];
        foreach ($this->basePackageRepository->findAllActive() as $basePackage) {
            $requirements[] = \sprintf('%s:%s', $basePackage->getName(), '@dev');
        }

        // Require packages
        $output = new BufferedOutput();
        $input = new ArrayInput([
            'command' => 'require',
            '--no-progress' => true,
            //'--no-update' => true,
            //'--no-install' => true,
            '--update-with-all-dependencies' => true,
            '--ansi' => true,
            '--no-interaction' => true,
            '--working-dir' => $this->getProjectDir(),
            'packages' => $requirements,
        ]);

        if (($exitCode = $this->composerApplication->run($input, $output)) !== 0) {
            throw new RuntimeException(\sprintf('Composer failed:\n%s', $output->fetch()), $exitCode);
        }

        $this->cache->invalidateTags(['installed-base-packages']);

        $this->installAssets();
    }

    private function installBasePackage(string $packageName): void
    {
        $this->initializeProject();

        // Require package
        $output = new BufferedOutput();
        $input = new ArrayInput([
            'command' => 'require',
            '--no-progress' => true,
            //'--no-update' => true,
            //'--no-install' => true,
            '--update-with-all-dependencies' => true,
            '--ansi' => true,
            '--no-interaction' => true,
            '--working-dir' => $this->getProjectDir(),
            'packages' => [$packageName . ':*'],
        ]);

        if (($exitCode = $this->composerApplication->run($input, $output)) !== 0) {
            throw new RuntimeException(\sprintf('Composer failed:\n%s', $output->fetch()), $exitCode);
        }

        $this->cache->invalidateTags(['installed-base-packages']);

        $this->installAssets();
    }

    public function updateBasePackages(): void
    {
        // Install or update packages
        $output = new BufferedOutput();
        $input = new ArrayInput([
            'command' => 'update',
            '--no-progress' => true,
            '--with-all-dependencies' => true,
            '--ignore-platform-reqs' => true,
            '--prefer-stable' => true,
            '--ansi' => true,
            '--no-interaction' => true,
            '--working-dir' => $this->getProjectDir(),
        ]);

        if (($exitCode = $this->composerApplication->run($input, $output)) !== 0) {
            throw new RuntimeException(\sprintf('Composer failed:\n%s', $output->fetch()), $exitCode);
        }

        $this->cache->invalidateTags(['installed-base-packages']);

        $this->installAssets();
    }

    private function removeBasePackage(string $packageName): void
    {
        $this->initializeProject();

        // Require package
        $output = new BufferedOutput();
        $input = new ArrayInput([
            'command' => 'remove',
            '--no-progress' => true,
            //'--no-update' => true,
            //'--no-install' => true,
            '--update-with-all-dependencies' => true,
            '--unused' => true,
            '--ansi' => true,
            '--no-interaction' => true,
            '--working-dir' => $this->getProjectDir(),
            'packages' => [$packageName],
        ]);

        if (($exitCode = $this->composerApplication->run($input, $output)) !== 0) {
            throw new RuntimeException(\sprintf('Composer failed:\n%s', $output->fetch()), $exitCode);
        }

        $this->cache->invalidateTags(['installed-base-packages']);

        $this->installAssets();
    }

    /**
     * @return array<int, BasePackageDto>
     */
    public function getInstalledBasePackages(): array
    {
        return $this->cache->get('installed-base-packages-grouped-by-official', function (ItemInterface $item): array {
            $item->tag(['installed-base-packages', 'base-packages']);
            $installedBasePackages = [];

            $this->changeToProjectDir();

            try {
                try {
                    $composer = $this->getComposer();
                } catch (Throwable) {
                    return $installedBasePackages;
                }

                foreach ($composer->getRepositoryManager()->getLocalRepository()->getPackages() as $package) {
                    if ($package->getType() === self::PACKAGE_TYPE) {
                        $basePackageDto = BasePackageDto::fromPackage(
                            $composer->getInstallationManager()->getInstallPath($package),
                            $package,
                            $this->basePackageRepository->findOneBy([
                                'name' => $package->getName(),
                                'active' => true,
                            ])
                        );
                        $installedBasePackages[] = $basePackageDto;
                    }
                }

                usort($installedBasePackages, static function (BasePackageDto $a, BasePackageDto $b): int {
                    if ($a->official !== $b->official) {
                        if ($a->official) {
                            return -1;
                        }

                        return 1;
                    }

                    return $a->title <=> $b->title;
                });

                return $installedBasePackages;
            } finally {
                $this->restoreToWorkingDir();
            }
        });
    }

    public function getInstalledBasePackage(string $packageName): BasePackageDto
    {
        foreach ($this->getInstalledBasePackages() as $basePackage) {
            if ($basePackage->packageName === $packageName) {
                return $basePackage;
            }
        }

        throw new PackageNotInstalledException(\sprintf('Base package "%s" not found.', $packageName), 1_658_839_466);
    }

    /**
     * @return array<int, BasePackageDto>
     */
    public function getBasePackages(): array
    {
        return $this->cache->get('active-base-packages-grouped-by-official', function (ItemInterface $item): array {
            $item->tag(['active-base-packages', 'base-packages']);

            $basePackages = [];

            $this->changeToProjectDir();

            try {
                $this->installBasePackages();

                try {
                    $composer = $this->getComposer();
                } catch (Throwable) {
                    return $basePackages;
                }

                foreach ($this->basePackageRepository->findAllActiveGroupedByOfficial() as $basePackage) {
                    $package = $composer->getRepositoryManager()->getLocalRepository()->findPackage(
                        $basePackage->getName(),
                        new MatchAllConstraint()
                    );

                    if (!$package instanceof PackageInterface) {
                        throw new RuntimeException(
                            \sprintf('Package "%s" not found.', $basePackage->getName()),
                            1_658_944_953
                        );
                    }

                    $basePackageDto = BasePackageDto::fromPackage(
                        $composer->getInstallationManager()->getInstallPath($package),
                        $package,
                        $basePackage
                    );

                    $basePackages[] = $basePackageDto;
                }

                return $basePackages;
            } finally {
                $this->restoreToWorkingDir();
            }
        });
    }

    public function checkAndInstallMissingBasePackage(string $packageName): BasePackageDto
    {
        $this->changeToProjectDir();

        try {
            try {
                $basePackage = $this->getInstalledBasePackage($packageName);
            } catch (PackageNotInstalledException) {
                try {
                    $basePackage = $this->validate($packageName);
                } catch (Throwable $throwable) {
                    $this->removeBasePackage($packageName);

                    throw $throwable;
                }
            }

            return $basePackage;
        } finally {
            $this->restoreToWorkingDir();
        }
    }

    public function validate(string $packageName): BasePackageDto
    {
        $this->changeToProjectDir();

        try {
            try {
                $basePackage = $this->getInstalledBasePackage($packageName);
            } catch (PackageNotInstalledException) {
                $package = $this->getComposer()->getRepositoryManager()->findPackage(
                    $packageName,
                    new MatchAllConstraint()
                );

                if (!$package instanceof PackageInterface) {
                    throw new RuntimeException(
                        \sprintf('Package "%s" not found.', $packageName),
                        1_658_944_953
                    );
                }

                if ($package->getType() !== self::PACKAGE_TYPE) {
                    throw new IncompatiblePackageException(
                        \sprintf('Package "%s" is not of type "%s".', $packageName, self::PACKAGE_TYPE),
                        1_658_786_562
                    );
                }

                $this->installBasePackage($packageName);

                $basePackage = $this->getInstalledBasePackage($packageName);
            }
        } finally {
            $this->restoreToWorkingDir();
        }

        try {
            if (strlen($basePackage->title) < 5) {
                throw new IncompatiblePackageException(
                    \sprintf('Title "%s" must have 5 characters or more.', $basePackage->title),
                    1_658_945_128
                );
            }

            if (strlen($basePackage->description) < 10) {
                throw new IncompatiblePackageException(
                    \sprintf('Description "%s" must have 10 characters or more.', $basePackage->description),
                    1_658_945_398
                );
            }

            if ($basePackage->typo3Versions === []) {
                throw new IncompatiblePackageException(
                    'A base package must define one or more supported TYPO3 core versions.',
                    1_658_945_403
                );
            }

            if (!\file_exists($basePackage->getInstallPath() . '/public/' . $basePackage->previewImage)) {
                throw new IncompatiblePackageException(
                    'A base package must have a preview image.',
                    1_658_946_257
                );
            }

            $forbiddenFiles = Finder::create()
                ->ignoreDotFiles(false)
                ->files()
                ->notName(self::ALLOWED_FILE_TYPES)
                ->in($basePackage->getInstallPath()/* . '/templates/skeletons'*/)
            ;
            if ($forbiddenFiles->hasResults()) {
                throw new IncompatiblePackageException(
                    \sprintf(
                        'Package contains not allowed files: %s',
                        str_replace(
                            $basePackage->getInstallPath() . '/',
                            '',
                            implode(
                                ', ',
                                iterator_to_array($forbiddenFiles->getIterator())
                            )
                        )
                    ),
                    1_658_952_036
                );
            }

            return $basePackage;
        } catch (Throwable $throwable) {
            throw new IncompatiblePackageException(
                \sprintf('Package "%s" is not a valid base package. %s', $packageName, $throwable->getMessage()),
                1_658_949_297
            );
        }
    }

    public function resetCache(): void
    {
        $this->cache->invalidateTags(['base-packages']);
    }

    public function updatePackageRepository(): void
    {
        $this->updateRepository();
        $this->updateBasePackages();
        $this->cache->invalidateTags(['base-packages']);
    }
}
