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

namespace App\Package;

use App\Package\Manifest\BasePackageTemplateManifest;

use function sprintf;

class BasePackageTemplate
{
    public readonly BasePackageTemplateManifest $manifest;

    public function __construct(
        private readonly string $composerPackageInstallPath,
        private readonly BasePackage $basePackage,
        public readonly string $coreVersion,
    ) {
        $this->manifest = new BasePackageTemplateManifest(
            $this->composerPackageInstallPath,
            $coreVersion
        );
    }

    public function getAssetsDir(): string
    {
        return sprintf('%s/%s', $this->basePackage->getAssetsDir(), $this->coreVersion);
    }

    /**
     * @return array<string, string>
     */
    public function getAssetsGallery(): array
    {
        $gallery = [];
        $assetsDir = $this->getAssetsDir();

        foreach ($this->manifest->getGallery() as $imageFilename => $imageDescription) {
            $gallery[sprintf('%s/images/%s', $assetsDir, $imageFilename)] = $imageDescription;
        }

        return $gallery;
    }

    public function getPublicInstallPath(): string
    {
        return \sprintf('%s/templates/%s/public', $this->composerPackageInstallPath, $this->coreVersion);
    }

    public function getSkeletonInstallPath(): string
    {
        return \sprintf('%s/templates/%s/skeleton', $this->composerPackageInstallPath, $this->coreVersion);
    }

    public function getDescription(): string
    {
        return $this->manifest->getDescription();
    }

    /**
     * @return array<string|null>
     */
    public function getDependencies(): array
    {
        return $this->manifest->getDependencies();
    }

    /**
     * @return array<string, string>
     */
    public function getGallery(): array
    {
        return $this->manifest->getGallery();
    }
}
