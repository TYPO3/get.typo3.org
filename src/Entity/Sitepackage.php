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

namespace App\Entity;

use App\Entity\Sitepackage\Author;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Sitepackage.
 */
class Sitepackage implements \JsonSerializable
{
    #[Assert\NotBlank]
    #[Assert\Choice(['bootstrap_package', 'fluid_styled_content'])]
    private string $basePackage = 'bootstrap_package';

    #[Assert\NotBlank]
    #[Assert\Choice([10.4, 11.5, 12.4, 13.4])]
    private float $typo3Version = 13.4;

    private string $vendorName;

    private string $vendorNameAlternative;

    #[Assert\NotBlank(message: 'Please enter a title for your site package')]
    #[Assert\Length(min: 3)]
    #[Assert\Regex(pattern: '/^[A-Za-z0-9\x7f-\xff .:&-]+$/', message: 'Only letters, numbers and spaces are allowed')]
    private string $title;

    #[Assert\Regex(pattern: '/^[A-Za-z0-9\x7f-\xff .,:!?&-]+$/', message: 'Only letters, numbers and spaces are allowed')]
    private string $description;

    private string $packageName;
    private string $packageNameAlternative;
    private string $extensionKey;

    #[Assert\Url]
    private string $repositoryUrl = '';

    #[Assert\Valid]
    private Author $author;

    public function getTypo3Version(): float
    {
        return $this->typo3Version;
    }

    public function setTypo3Version(float $typo3Version): self
    {
        $this->typo3Version = $typo3Version;

        return $this;
    }

    public function getBasePackage(): string
    {
        return $this->basePackage;
    }

    public function setBasePackage(string $basePackage): self
    {
        $this->basePackage = $basePackage;

        return $this;
    }

    public function getVendorName(): string
    {
        return $this->vendorName;
    }

    public function setVendorName(string $vendorName): self
    {
        $this->vendorName = $vendorName;

        return $this;
    }

    public function getVendorNameAlternative(): string
    {
        return $this->vendorNameAlternative;
    }

    public function setVendorNameAlternative(string $vendorNameAlternative): self
    {
        $this->vendorNameAlternative = $vendorNameAlternative;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPackageName(): string
    {
        return $this->packageName;
    }

    public function setPackageName(string $packageName): self
    {
        $this->packageName = $packageName;

        return $this;
    }

    public function getPackageNameAlternative(): string
    {
        return $this->packageNameAlternative;
    }

    public function setPackageNameAlternative(string $packageNameAlternative): self
    {
        $this->packageNameAlternative = $packageNameAlternative;

        return $this;
    }

    public function getExtensionKey(): string
    {
        return $this->extensionKey;
    }

    public function setExtensionKey(string $extensionKey): self
    {
        $this->extensionKey = $extensionKey;

        return $this;
    }

    public function getRepositoryUrl(): string
    {
        return $this->repositoryUrl;
    }

    public function setRepositoryUrl(string $repositoryUrl): self
    {
        $this->repositoryUrl = $repositoryUrl;

        return $this;
    }

    public function getAuthor(): Author
    {
        return $this->author;
    }

    public function setAuthor(Author $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return array{
     *     typo3Version: float,
     *     basePackage: string,
     *     vendorName: string,
     *     vendorNameAlternative: string,
     *     title: string,
     *     description: string,
     *     packageName: string,
     *     packageNameAlternative: string,
     *     extensionKey: string,
     *     repositoryUrl: string,
     *     author: Author
     * }
     */
    public function jsonSerialize(): array
    {
        return [
            'typo3Version' => $this->getTypo3Version(),
            'basePackage' => $this->getBasePackage(),
            'vendorName' => $this->getVendorName(),
            'vendorNameAlternative' => $this->getVendorNameAlternative(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'packageName' => $this->getPackageName(),
            'packageNameAlternative' => $this->getPackageNameAlternative(),
            'extensionKey' => $this->getExtensionKey(),
            'repositoryUrl' => $this->getRepositoryUrl(),
            'author' => $this->getAuthor(),
        ];
    }
}
