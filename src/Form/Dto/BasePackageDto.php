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

namespace App\Form\Dto;

use App\Entity\BasePackage as BasePackageEntity;
use App\Package\BasePackageManifest;
use Composer\Package\PackageInterface;
use Symfony\Component\Validator\Constraints as Assert;

use function explode;

class BasePackageDto
{
    #[Assert\NotBlank(message: 'Please enter a title for the base package.')]
    #[Assert\Length(min: 3)]
    #[Assert\Regex(
        pattern: '/^[A-Za-z0-9\x7f-\xff .:&-]+$/',
        message: 'Only letters, numbers and spaces are allowed.'
    )]
    public string $title = '';

    #[Assert\Regex(
        pattern: '/^[A-Za-z0-9\x7f-\xff .:&-]+$/',
        message: 'Only letters, numbers and spaces are allowed.'
    )]
    public string $description = '';

    #[Assert\NotBlank(message: 'Please enter a package name providing the base package.')]
    #[Assert\Regex(
        pattern: '/^[a-z0-9]([_.-]?[a-z0-9]+)*\/[a-z0-9](([_.]?|-{0,2})[a-z0-9]+)*$/',
        message: 'The name must be lowercased and consist of words separated by `-`, `.` or `_`.'
    )]
    public string $packageName = '';

    #[Assert\NotBlank(message: 'Please enter the package version of the package providing the base package.')]
    public string $packageVersion = '';

    public bool $active = false;

    public bool $official = false;

    public bool $thirdParty = false;

    /**
     * @var array<int, string>
     */
    public array $typo3Versions = [];

    #[Assert\NotBlank(message: 'Please enter a preview image for the base package.')]
    #[Assert\Length(min: 5)]
    public string $previewImage = 'images/preview.png';

    public static function fromPackage(string $installPath, PackageInterface $package, ?BasePackageEntity $entity = null): self
    {
        $dto = new self($installPath);
        $dto->loadManifest($package);

        $dto->active = ($entity !== null) ? $entity->isActive() : true;
        $dto->official = $entity !== null && $entity->isOfficial();
        $dto->thirdParty = ($entity === null);

        return $dto;
    }

    public function __construct(
        private readonly string $installPath,
    ) {
    }

    public function getInstallPath(): string
    {
        return $this->installPath;
    }

    public function getAssetsDir(): string
    {
        return str_replace('/', '-', strtolower($this->packageName));
    }

    public function getVendorName(): string
    {
        return explode('/', strtolower($this->packageName))[0];
    }

    public function getProjectName(): string
    {
        return explode('/', strtolower($this->packageName))[1];
    }

    private function loadManifest(PackageInterface $package): void
    {
        $manifest = new BasePackageManifest($package);

        $this->packageName = $package->getName();
        $this->packageVersion = $package->getVersion();
        $this->title = $manifest->getTitle();
        $this->description = $manifest->getDescription();
        $this->typo3Versions = $manifest->getCoreVersions();
        $this->previewImage = $manifest->getPreviewImage();
    }
}
