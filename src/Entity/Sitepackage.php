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

use App\Entity\Package\Author;
use App\Utility\StringUtility;
use JMS\Serializer\Annotation as Serializer;
use Swagger\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Sitepackage
 */
class Sitepackage implements \JsonSerializable
{
    /**
     * @Assert\NotBlank
     * @Assert\Choice({
     *     10004000,
     *     9005000,
     *     8007000
     * })
     *
     * @SWG\Property(type="int", example="9005000")
     * @Serializer\Type("int")
     * @var int
     */
    private int $typo3Version = 10004000;

    /**
     * @Assert\NotBlank
     * @Assert\Choice({
     *     "bootstrap_package",
     *     "fluid_styled_content"
     * })
     *
     * @SWG\Property(type="string", example="bootstrap_package")
     * @Serializer\Type("string")
     * @var string
     */
    private string $basePackage = 'bootstrap_package';

    /**
     * @Assert\Length(
     *     allowEmptyString=true,
     *     min=3
     * )
     * @Assert\Regex(
     *     pattern="/^[A-Z][A-Za-z0-9]+$/",
     *     message="Only letters, numbers and spaces are allowed"
     * )
     * @SWG\Property(type="string", example="BK2K", default="generated from author->company if empty")
     * @Serializer\Type("string")
     * @var string
     */
    private string $vendorName = '';

    /**
     * @Assert\Length(
     *     allowEmptyString=true,
     *     min=3
     * )
     * @Assert\Regex(
     *     pattern="/^[a-z][a-z0-9-]+$/",
     *     message="Only letters, numbers and hyphens are allowed"
     * )
     * @SWG\Property(type="string", example="bk2k", default="generated from vendor name if empty")
     * @Serializer\Type("string")
     * @var string
     */
    private string $composerVendorName = '';

    /**
     * @Assert\NotBlank(
     *     message="Please enter a title for your Sitepackage"
     * )
     * @Assert\Length(
     *     min=3
     * )
     * @Assert\Regex(
     *     pattern="/^[A-Za-z0-9\x7f-\xff .:&-]+$/",
     *     message="Only letters, numbers and spaces are allowed"
     * )
     *
     * @SWG\Property(type="string", example="My Sitepackage")
     * @Serializer\Type("string")
     * @var string
     */
    private string $title;

    /**
     * @Assert\Regex(
     *     pattern="/^[A-Za-z0-9\x7f-\xff .,:!?&-]+$/",
     *     message="Only letters, numbers and spaces are allowed"
     * )
     *
     * @SWG\Property(type="string", example="Project Configuration for Client")
     * @Serializer\Type("string")
     * @var string
     */
    private string $description;

    /**
     * @Assert\Length(
     *     allowEmptyString=true,
     *     min=3
     * )
     * @Assert\Regex(
     *     pattern="/^[A-Z][A-Za-z0-9]+$/",
     *     message="Only letters and numbers are allowed"
     * )
     * @SWG\Property(type="string", example="MySitepackage", default="generated from title if empty")
     * @Serializer\Type("string")
     * @var string
     */
    private string $packageName = '';

    /**
     * @Assert\Length(
     *     allowEmptyString=true,
     *     min=3
     * )
     * @Assert\Regex(
     *     pattern="/^[a-z][a-z0-9-]+$/",
     *     message="Only lower case letters, numbers and hyphens are allowed"
     * )
     * @SWG\Property(type="string", example="my-sitepackage", default="generated from package name if empty")
     * @Serializer\Type("string")
     * @var string
     */
    private string $composerProjectName = '';

    /**
     * @Assert\Length(
     *     allowEmptyString=true,
     *     min=3
     * )
     * @Assert\Regex(
     *     pattern="/^[a-z][a-z0-9_]+$/",
     *     message="Only lower case letters, numbers and undscores are allowed"
     * )
     * @SWG\Property(type="string", example="my_sitepackage", default="generated from package name if empty")
     * @Serializer\Type("string")
     * @var string
     */
    private string $extensionKey = '';

    /**
     * @Assert\Url
     * @SWG\Property(type="string", example="https://github.com/benjaminkott/packagebuilder")
     *
     * @Serializer\Type("string")
     * @var string
     */
    private string $repositoryUrl = '';

    /**
     * @Assert\Valid
     * @Serializer\Type(Author::class)
     */
    private Author $author;

    public function __construct()
    {
        $this->author = new Author();
    }

    public function getTypo3Version(): int
    {
        return $this->typo3Version;
    }

    public function setTypo3Version(int $typo3Version): self
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
        if ($this->vendorName === '') {
            return StringUtility::stringToUpperCamelCase($this->getAuthor()->getCompany());
        }

        return $this->vendorName;
    }

    public function setVendorName(string $vendorName): self
    {
        if ($this->getVendorName() !== $vendorName) {
            $this->vendorName = StringUtility::stringToUpperCamelCase($vendorName);
        }

        return $this;
    }

    public function getComposerVendorName(): string
    {
        if ($this->composerVendorName === '') {
            return StringUtility::camelCaseToLowerCaseDashed($this->getVendorName());
        }

        return $this->composerVendorName;
    }

    public function setComposerVendorName(string $composerVendorName): self
    {
        if ($this->getComposerVendorName() !== $composerVendorName) {
            $this->composerVendorName = StringUtility::camelCaseToLowerCaseDashed($composerVendorName);
        }

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
        if ($this->packageName === '') {
            return StringUtility::stringToUpperCamelCase($this->getTitle());
        }

        return $this->packageName;
    }

    public function setPackageName(string $packageName): self
    {
        if ($this->getPackageName() !== $packageName) {
            $this->packageName = StringUtility::stringToUpperCamelCase($packageName);
        }

        return $this;
    }

    public function getComposerProjectName(): string
    {
        if ($this->composerProjectName === '') {
            return StringUtility::camelCaseToLowerCaseDashed($this->getPackageName());
        }

        return $this->composerProjectName;
    }

    public function setComposerProjectName(string $composerProjectName): self
    {
        if ($this->getComposerProjectName() !== $composerProjectName) {
            $this->composerProjectName = StringUtility::camelCaseToLowerCaseDashed($composerProjectName);
        }

        return $this;
    }

    public function getExtensionKey(): string
    {
        if ($this->extensionKey === '') {
            return StringUtility::camelCaseToLowerCaseUnderscored($this->getPackageName());
        }

        return $this->extensionKey;
    }

    public function setExtensionKey(string $extensionKey): self
    {
        if ($this->getExtensionKey() !== $extensionKey) {
            $this->extensionKey = StringUtility::camelCaseToLowerCaseUnderscored($extensionKey);
        }

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
     * @return array<string, Author|int|string>
     */
    public function jsonSerialize(): array
    {
        return [
            'typo3Version' => $this->getTypo3Version(),
            'basePackage' => $this->getBasePackage(),
            'vendorName' => $this->getVendorName(),
            'composerVendorName' => $this->getComposerVendorName(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'packageName' => $this->getPackageName(),
            'composerProjectName' => $this->getComposerProjectName(),
            'extensionKey' => $this->getExtensionKey(),
            'repositoryUrl' => $this->getRepositoryUrl(),
            'author' => $this->getAuthor(),
        ];
    }
}
