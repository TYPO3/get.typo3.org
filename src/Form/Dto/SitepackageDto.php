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

use App\Entity\Sitepackage;
use App\Enum\BasePackageEnum;
use App\Enum\Typo3VersionEnum;
use Symfony\Component\Validator\Constraints as Assert;

class SitepackageDto
{
    /**
     * @Assert\NotBlank
     * @Assert\Choice(callback={"App\Enum\Typo3VersionEnum", "getAvailableOptions"})
     */
    public int $typo3Version = Typo3VersionEnum::OPTION_11;

    /**
     * @Assert\NotBlank
     * @Assert\Choice(callback={"App\Enum\BasePackageEnum", "getAvailableOptions"})
     */
    public string $basePackage = BasePackageEnum::OPTION_BOOTSTRAP_PACKAGE;

    /**
     * @Assert\Length(
     *     allowEmptyString=true,
     *     min=3
     * )
     * @Assert\Regex(
     *     pattern="/^[a-z0-9]([_.-]?[a-z0-9]+)*\/[a-z0-9](([_.]?|-{0,2})[a-z0-9]+)*$/",
     *     message="Only lower case letters, numbers, underscores, dots and hyphens are allowed"
     * )
     */
    public ?string $composerName;

    /**
     * @Assert\Length(
     *     allowEmptyString=true,
     *     min=3
     * )
     * @Assert\Regex(
     *     pattern="/^[A-Z][A-Za-z0-9]+\[A-Z][A-Za-z0-9]+$/",
     *     message="Only letters and numbers are allowed"
     * )
     */
    public ?string $psr4Namespace;

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
     */
    public ?string $title;

    /**
     * @Assert\Regex(
     *     pattern="/^[A-Za-z0-9\x7f-\xff .,:!?&-]+$/",
     *     message="Only letters, numbers and spaces are allowed"
     * )
     */
    public ?string $description;

    /**
     * @Assert\Url
     */
    public ?string $repositoryUrl;

    /**
     * @Assert\Length(
     *     allowEmptyString=true,
     *     min=3
     * )
     * @Assert\Regex(
     *     pattern="/^[a-z][a-z0-9_]+$/",
     *     message="Only lower case letters, numbers and undscores are allowed"
     * )
     */
    public ?string $extensionKey;

    /**
     * @Assert\NotBlank(message="Please enter the authors' name.")
     * @Assert\Length(
     *     min=3
     * )
     */
    public ?string $name;

    /**
     * @Assert\NotBlank(message="Please enter the authors' email address.")
     * @Assert\Email(
     *     message="The email '{{ value }}' is not a valid email.",
     * )
     */
    public ?string $email;

    /**
     * @Assert\NotBlank(message="Please enter the authors' company.")
     * @Assert\Length(
     *     min=3
     * )
     * @Assert\Regex(
     *     pattern="/^[A-Za-z0-9\x7f-\xff .:&-]+$/",
     *     message="Only letters, numbers and spaces are allowed"
     * )
     */
    public ?string $company;

    /**
     * @Assert\NotBlank(message="Please enter the authors' homepage URL.")
     * @Assert\Url
     */
    public ?string $homepage;

    public static function fromEntity(Sitepackage $entity): self
    {
        $dto = new self();
        $dto->typo3Version = $entity->getTypo3Version();
        $dto->basePackage = $entity->getBasePackage();
        $dto->vendorName = $entity->getVendorName();
        $dto->composerVendorName = $entity->getComposerVendorName();
        $dto->title = $entity->getTitle();
        $dto->description = $entity->getDescription();
        $dto->packageName = $entity->getPackageName();
        $dto->composerProjectName = $entity->getComposerProjectName();
        $dto->extensionKey = $entity->getExtensionKey();
        $dto->repositoryUrl = $entity->getRepositoryUrl();
        $dto->name = $entity->getAuthor()->getName();
        $dto->email = $entity->getAuthor()->getEmail();
        $dto->company = $entity->getAuthor()->getCompany();
        $dto->homepage = $entity->getAuthor()->getHomepage();

        return $dto;
    }
}
