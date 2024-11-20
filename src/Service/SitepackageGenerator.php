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

use App\Entity\Sitepackage;
use App\Utility\FileUtility;
use Symfony\Component\HttpKernel\KernelInterface;
use Twig\Environment;
use Twig\Loader\ArrayLoader;
use ZipArchive;

class SitepackageGenerator
{
    protected KernelInterface $kernel;
    protected string $zipPath;
    protected string $filename;

    public function __construct(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }

    public function create(Sitepackage $package): void
    {
        $extensionKey = $package->getExtensionKey();
        $this->filename = $extensionKey . '.zip';
        $sourceDir = $this->kernel->getProjectDir() . '/resources/packages/' . $package->getBasePackage() . '/' . (string)$package->getTypo3Version() . '/src/';
        $tempFileName = tempnam(sys_get_temp_dir(), $this->filename);
        if ($tempFileName === false) {
            throw new \RuntimeException(sprintf('Cannot create temporary name for %s/%s' . sys_get_temp_dir(), $this->filename), 1732123721);
        }
        $this->zipPath = $tempFileName;
        $fileList = FileUtility::listDirectory($sourceDir);

        $zipFile = new ZipArchive();
        $opened = $zipFile->open($this->zipPath, ZipArchive::CREATE);
        if ($opened === true) {
            foreach ($fileList as $file) {
                if ($file !== $this->zipPath && file_exists($file)) {
                    $baseFileName = $this->createRelativeFilePath($file, $sourceDir);
                    if (is_dir($file)) {
                        $zipFile->addEmptyDir($baseFileName);
                    } elseif (!$this->isTwigFile($file)) {
                        $zipFile->addFile($file, $baseFileName);
                    } else {
                        $content = $this->getFileContent($file, $package);
                        $nameInZip = $this->removeTwigExtension($baseFileName);
                        $zipFile->addFromString($nameInZip, $content);
                    }
                }
            }
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

    private function getFileContent(string $file, Sitepackage $package): string
    {
        $content = file_get_contents($file);
        $fileUniqueId = uniqid('file');
        $twig = new Environment(new ArrayLoader([$fileUniqueId => $content]));
        $rendered = $twig->render(
            $fileUniqueId,
            [
                'package' => $package,
                'timestamp' => time(),
            ]
        );

        return $rendered;
    }

    private function isTwigFile(string $file): bool
    {
        $extension = pathinfo($file, PATHINFO_EXTENSION);

        return $extension === 'twig';
    }

    protected function createRelativeFilePath(string $file, string $sourceDir): string
    {
        return substr($file, strlen($sourceDir));
    }

    protected function removeTwigExtension(string $baseFileName): string
    {
        return substr($baseFileName, 0, -5);
    }
}
