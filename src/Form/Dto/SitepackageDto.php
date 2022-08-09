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

use App\Package\Sitepackage;
use Symfony\Component\Validator\Constraints as Assert;

class SitepackageDto
{
    #[Assert\NotBlank]
    public string $basePackage = '';

    #[Assert\NotBlank]
    public int $typo3Version = 0;

    #[Assert\NotBlank(message: 'Please enter a title for your Sitepackage.')]
    #[Assert\Length(min: 3)]
    #[Assert\Regex(
        pattern: '/^[A-Za-z0-9\x7f-\xff .:&-]+$/',
        message: 'Only letters, numbers and spaces are allowed.'
    )]
    public ?string $title = null;

    #[Assert\Regex(
        pattern: '/^[A-Za-z0-9\x7f-\xff .,:!?&-]+$/',
        message: 'Only letters, numbers and spaces are allowed.'
    )]
    public ?string $description = null;

    #[Assert\Url]
    public ?string $repositoryUrl = null;

    #[Assert\Length(min: 3)]
    #[Assert\Regex(
        pattern: '/^[a-z][a-z0-9_]+$/',
        message: 'Only lower case letters, numbers and underscores are allowed.'
    )]
    public ?string $extensionKey = null;

    #[Assert\Regex(
        pattern: '/^[a-z0-9]([_.-]?[a-z0-9]+)*\/[a-z0-9](([_.]?|-{0,2})[a-z0-9]+)*$/',
        message: 'The name must be lowercased and consist of words separated by `-`, `.` or `_`.'
    )]
    public ?string $composerName = null;

    #[Assert\Regex(
        pattern: '/^[A-Z][A-Za-z0-9]+\\\[A-Z][A-Za-z0-9]+$/',
        message: 'Only letters and numbers are allowed.'
    )]
    public ?string $psr4Namespace = null;

    #[Assert\NotBlank(message: "Please enter the authors' name.")]
    #[Assert\Length(min: 3)]
    public ?string $name = null;

    #[Assert\NotBlank(message: "Please enter the authors' email address.")]
    #[Assert\Email(message: "The email '{{ value }}' is not a valid email.")]
    public ?string $email = null;

    #[Assert\NotBlank(message: "Please enter the authors' company.")]
    #[Assert\Length(min: 3)]
    #[Assert\Regex(
        pattern: '/^[A-Za-z0-9\x7f-\xff .:&-]+$/',
        message: 'Only letters, numbers and spaces are allowed.'
    )]
    public ?string $company = null;

    #[Assert\NotBlank(message: "Please enter the authors' homepage URL.")]
    #[Assert\Url]
    public ?string $homepage = null;

    public static function fromEntity(
        Sitepackage $entity
    ): self {
        $dto = new self();
        $dto->basePackage = $entity->getBasePackage();
        $dto->typo3Version = $entity->getTypo3Version();
        $dto->title = $entity->getTitle();
        $dto->description = $entity->getDescription();
        $dto->extensionKey = $entity->getExtensionKey();
        $dto->repositoryUrl = $entity->getRepositoryUrl();
        $dto->composerName = $entity->getComposerName();
        $dto->psr4Namespace = $entity->getPsr4Namespace();
        $dto->name = $entity->getAuthor()->getName();
        $dto->email = $entity->getAuthor()->getEmail();
        $dto->company = $entity->getAuthor()->getCompany();
        $dto->homepage = $entity->getAuthor()->getHomepage();

        return $dto;
    }
}
