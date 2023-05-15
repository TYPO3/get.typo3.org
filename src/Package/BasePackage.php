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

use App\Entity\BasePackage as BasePackageEntity;
use App\Package\Manifest\BasePackageManifest;
use Composer\Package\PackageInterface as ComposerPackage;

use function explode;

class BasePackage
{
    /**
     * @var BasePackageTemplate[]
     */
    private array $templates = [];

    public readonly BasePackageManifest $manifest;

    public static function fromPackage(
        string $composerPackageInstallPath,
        ComposerPackage $composerPackage,
        ?BasePackageEntity $entity = null
    ): self {
        $basePackage = new self(
            $composerPackageInstallPath,
            $composerPackage->getName(),
            ($entity !== null) ? $entity->isActive() : true,
            $entity !== null && $entity->isOfficial(),
            ($entity === null)
        );

        return $basePackage;
    }

    public function __construct(
        private readonly string $composerPackageInstallPath,
        private readonly string  $composerPackageName,
        public readonly bool $active,
        public readonly bool $official,
        public readonly bool $thirdParty,
    ) {
        $this->manifest = new BasePackageManifest($this->composerPackageInstallPath);
    }

    public function getAssetsDir(): string
    {
        return str_replace('/', '-', strtolower($this->composerPackageName));
    }

    public function getAssetPreviewImage(): string
    {
        return \sprintf('%s/images/%s', $this->getAssetsDir(), $this->manifest->getPreviewImage());
    }

    public function getInstallPath(): string
    {
        return $this->composerPackageInstallPath;
    }

    public function getPublicInstallPath(): string
    {
        return \sprintf('%s/public', $this->composerPackageInstallPath);
    }

    public function getComposerPackageName(): string
    {
        return $this->composerPackageName;
    }

    public function getComposerVendorName(): string
    {
        return explode('/', strtolower($this->composerPackageName))[0];
    }

    public function getComposerProjectName(): string
    {
        return explode('/', strtolower($this->composerPackageName))[1];
    }

    public function getTitle(): string
    {
        return $this->manifest->getTitle();
    }

    public function getDescription(): string
    {
        return $this->manifest->getDescription();
    }

    /**
     * @return string[]
     */
    public function getTypo3Versions(): array
    {
        return $this->manifest->getTypo3Versions();
    }

    public function getPreviewImage(): string
    {
        return $this->manifest->getPreviewImage();
    }

    /**
     * @return BasePackageTemplate[]
     */
    public function getTemplates(): array
    {
        if ($this->templates === []) {
            foreach ($this->getTypo3Versions() as $typo3Version) {
                $this->templates[$typo3Version] = new BasePackageTemplate($this->composerPackageInstallPath, $this, $typo3Version);
            }
        }

        return $this->templates;
    }
}
