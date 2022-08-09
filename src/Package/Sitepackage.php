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

use App\Package\Package\Author;
use App\Utility\StringUtility;
use JMS\Serializer\Annotation as Serializer;
use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;
use JsonSerializable;

use function explode;

class Sitepackage implements JsonSerializable
{
    /**
     * @SWG\Property(type="string", example="typo3/base-package-bootstrap-package")
     */
    #[Assert\NotBlank]
    #[Serializer\Type('string')]
    private string $basePackage = 'typo3/base-package-bootstrap-package';

    /**
     * @SWG\Property(type="int", example="11005000")
     */
    #[Assert\NotBlank]
    #[Serializer\Type('int')]
    private int $typo3Version = 11_005_000;

    /**
     * @SWG\Property(type="string", example="My Sitepackage")
     */
    #[Assert\NotBlank(message: 'Please enter a title for your Sitepackage.')]
    #[Assert\Length(min: 3)]
    #[Assert\Regex(
        pattern: '/^[A-Za-z0-9\x7f-\xff .:&-]+$/',
        message: 'Only letters, numbers and spaces are allowed.'
    )]
    #[Serializer\Type('string')]
    private string $title;

    /**
     * @SWG\Property(type="string", example="Project Configuration for Client")
     */
    #[Assert\Regex(
        pattern: '/^[A-Za-z0-9\x7f-\xff .,:!?&-]+$/',
        message: 'Only letters, numbers and spaces are allowed.'
    )]
    #[Serializer\Type('string')]
    private string $description;

    /**
     * @SWG\Property(type="string", example="my_sitepackage", default="generated from package name if empty")
     */
    #[Assert\Length(min: 3)]
    #[Assert\Regex(
        pattern: '/^[a-z][a-z0-9_]+$/',
        message: 'Only lower case letters, numbers and underscores are allowed.'
    )]
    #[Serializer\Type('string')]
    private string $extensionKey = '';

    /**
     * @SWG\Property(type="string", example="https://github.com/mycompany/mysitepackage")
     */
    #[Assert\Url]
    #[Serializer\Type('string')]
    private string $repositoryUrl = '';

    /**
     * @SWG\Property(type="string", example="my-company/my-sitepackage", default="generated from author->company and title if empty")
     */
    #[Assert\Regex(
        pattern: '/^[a-z0-9]([_.-]?[a-z0-9]+)*\/[a-z0-9](([_.]?|-{0,2})[a-z0-9]+)*$/',
        message: 'The name must be lowercased and consist of words separated by `-`, `.` or `_`.'
    )]
    #[Serializer\Type('string')]
    private string $composerName = '';

    /**
     * @SWG\Property(type="string", example="MyCompany\MySitepackage", default="generated from author->company and title if empty")
     */
    #[Assert\Regex(
        pattern: '/^[A-Z][A-Za-z0-9]+\\\[A-Z][A-Za-z0-9]+$/',
        message: 'Only letters and numbers are allowed.'
    )]
    #[Serializer\Type('string')]
    private string $psr4Namespace = '';

    #[Assert\Valid]
    #[Serializer\Type(Author::class)]
    private Author $author;

    public function __construct()
    {
        $this->author = new Author();
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

    public function getTypo3Version(): int
    {
        return $this->typo3Version;
    }

    public function setTypo3Version(int $typo3Version): self
    {
        $this->typo3Version = $typo3Version;

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

    public function getExtensionKey(): string
    {
        if ($this->extensionKey === '') {
            return StringUtility::camelCaseToLowerCaseUnderscored($this->getTitle());
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

    public function getComposerName(): string
    {
        if ($this->composerName === '') {
            return StringUtility::camelCaseToLowerCaseDashed($this->getAuthor()->getCompany()) . '/' .
                StringUtility::camelCaseToLowerCaseDashed($this->getTitle());
        }

        return $this->composerName;
    }

    public function setComposerName(string $composerName): self
    {
        if ($this->getComposerName() !== $composerName) {
            $this->composerName = $composerName;
        }

        return $this;
    }

    public function getComposerVendorName(): string
    {
        return explode('/', $this->getComposerName())[0];
    }

    public function getComposerProjectName(): string
    {
        return explode('/', $this->getComposerName())[1];
    }

    public function getPsr4Namespace(): string
    {
        if ($this->psr4Namespace === '') {
            return StringUtility::stringToUpperCamelCase($this->getAuthor()->getCompany()) . '\\' .
                StringUtility::stringToUpperCamelCase($this->getTitle());
        }

        return $this->psr4Namespace;
    }

    public function setPsr4Namespace(string $psr4Namespace): self
    {
        if ($this->getPsr4Namespace() !== $psr4Namespace) {
            $this->psr4Namespace = $psr4Namespace;
        }

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
     *   basePackage: string,
     *   typo3Version: int,
     *   title: string,
     *   description: string,
     *   extensionKey: string,
     *   repositoryUrl: string,
     *   composerName: string,
     *   psr4Namespace: string,
     *   author: Author
     * }
     */
    public function jsonSerialize(): array
    {
        return [
            'basePackage' => $this->getBasePackage(),
            'typo3Version' => $this->getTypo3Version(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'extensionKey' => $this->getExtensionKey(),
            'repositoryUrl' => $this->getRepositoryUrl(),
            'composerName' => $this->getComposerName(),
            'psr4Namespace' => $this->getPsr4Namespace(),
            'author' => $this->getAuthor(),
        ];
    }
}
