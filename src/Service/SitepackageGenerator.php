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

use App\Form\Dto\BasePackageDto;
use App\Package\Sitepackage;
use App\Utility\VersionUtility;
use RuntimeException;
use Symfony\Component\Finder\Finder;
use Twig\Environment;
use Twig\Loader\ArrayLoader;
use ZipArchive;

use function sprintf;
use function dirname;
use function rtrim;

final class SitepackageGenerator
{
    /**
     * @var array<string, BasePackageDto>
     */
    private array $basePackages = [];

    private string $zipPath;

    private string $filename;

    public function __construct(
        private readonly BasePackageService $basePackageService,
    ) {
    }

    public function create(Sitepackage $package): void
    {
        $this->filename = $package->getExtensionKey() . '.zip';
        $this->zipPath = ($zipPath = tempnam(sys_get_temp_dir(), $this->filename)) !== false
            ? $zipPath : $this->filename
        ;

        $zipFile = new ZipArchive();
        $opened = $zipFile->open($this->zipPath, ZipArchive::CREATE);
        if ($opened === true) {
            $sourceDir = $this->getSourceDir($package);
            $files = Finder::create()
                ->ignoreDotFiles(false)
                ->ignoreVCS(false)
                ->in($sourceDir)
            ;
            $this->addFiles($zipFile, $files, $package, $sourceDir);

            $sourceDir = dirname($sourceDir) . '/shared';
            $files = Finder::create()
                ->ignoreDotFiles(false)
                ->ignoreVCS(false)
                ->in($sourceDir)
            ;
            $this->addFiles($zipFile, $files, $package, $sourceDir);

            $zipFile->close();
        }
    }

    public function getZipPath(): string
    {
        return $this->zipPath;
    }

    public function getFilename(): string
    {
        return $this->filename;
    }

    private function getBasePackage(Sitepackage $package): BasePackageDto
    {
        if (!($this->basePackages[$package->getBasePackage()] ?? null) instanceof BasePackageDto) {
            $this->basePackages[$package->getBasePackage()] =
                $this->basePackageService->getInstalledBasePackage($package->getBasePackage());
        }

        return $this->basePackages[$package->getBasePackage()];
    }

    private function getSourceDir(Sitepackage $package): string
    {
        $basePackage = $this->getBasePackage($package);
        $version = $package->getTypo3Version();
        $versionDir = '';

        foreach ($basePackage->typo3Versions as $v) {
            if ($version < VersionUtility::versionToInt($v)) {
                continue;
            }

            $versionDir = $v;
            break;
        }

        if ($versionDir === '') {
            throw new RuntimeException(
                sprintf('Template for version "%s" not found.', $version),
                1_658_939_427
            );
        }

        return $basePackage->getInstallPath() . '/templates/skeletons/' . $versionDir;
    }

    private function getFileContent(string $file, string $baseDir, Sitepackage $package): string
    {
        $content = file_get_contents($file);
        $fileUniqueId = uniqid($this->createRelativeFilePath(
            $file,
            $baseDir
        ));
        $twig = new Environment(new ArrayLoader([$fileUniqueId => $content]), [
            'strict_variables' => true,
        ]);

        return $twig->render(
            $fileUniqueId,
            [
                'package' => $package,
                'timestamp' => time(),
            ]
        );
    }

    private function createRelativeFilePath(string $file, string $sourceDir): string
    {
        return substr($file, strlen(rtrim($sourceDir, '/')) + 1);
    }

    private function isTwigFile(string $extension): bool
    {
        return $extension === 'twig';
    }

    private function removeTwigExtension(string $baseFileName): string
    {
        return substr($baseFileName, 0, -5);
    }

    private function addFiles(
        ZipArchive $zipFile,
        Finder $files,
        Sitepackage $package,
        string $sourceDir
    ): void {
        $baseDir = dirname($sourceDir, 5);

        foreach ($files as $file) {
            $baseFileName = $this->createRelativeFilePath($file->getPathname(), $sourceDir);
            if ($file->isDir()) {
                $zipFile->addEmptyDir($baseFileName);
            } elseif (!$this->isTwigFile($file->getExtension())) {
                $zipFile->addFile($file->getPathname(), $baseFileName);
            } else {
                $content = $this->getFileContent($file->getPathname(), $baseDir, $package);
                $nameInZip = $this->removeTwigExtension($baseFileName);
                $zipFile->addFromString($nameInZip, $content);
            }
        }
    }
}
