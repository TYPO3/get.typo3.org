<?php

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

use App\Enum\RequirementCategoryEnum;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use Swagger\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=RequirementRepository::class)
 */
class Requirement implements \JsonSerializable
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="MajorVersion", inversedBy="requirements")
     * @ORM\JoinColumn(name="version", referencedColumnName="version")
     */
    private MajorVersion $version;

    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     * @Serializer\Groups({"data", "content", "patch"})
     * @SWG\Property(example="database")
     * @Assert\Choice(callback={"App\Enum\RequirementCategoryEnum", "getAvailableOptions"})
     */
    private string $category;

    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     * @Serializer\Groups({"data", "content", "patch"})
     * @SWG\Property(example="mysql")
     */
    private string $name;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Serializer\Groups({"data", "content", "patch"})
     * @SWG\Property(example="5.5")
     */
    private ?string $min = null;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Serializer\Groups({"data", "content", "patch"})
     * @SWG\Property(example="5.7")
     */
    private ?string $max = null;

    public function __construct(
        MajorVersion $version,
        string $category,
        string $name,
        ?string $min = null,
        ?string $max = null
    ) {
        $this->setVersion($version);
        $this->setCategory($category);
        $this->setName($name);
        $this->setMin($min);
        $this->setMax($max);
    }

    public function setVersion(MajorVersion $version): void
    {
        $this->version = $version;
    }

    public function getVersion(): MajorVersion
    {
        return $this->version;
    }

    public function setCategory(string $category): void
    {
        if (!in_array($category, RequirementCategoryEnum::getAvailableOptions(), true)) {
            throw new \InvalidArgumentException('Invalid category');
        }
        $this->category = $category;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTitle(): string
    {
        // @todo Switch this to match() in PHP 8.0.
        switch ($this->getName()) {
            case 'php':
                return 'PHP';

            case 'ie':
                return 'Internet Explorer';

            case 'postgres':
                return 'PostgreSQL';
            case 'sqlsrv':
                return 'Microsoft SQL Server';
            case 'mysql':
                return 'MySQL';
            case 'mariadb':
                return 'MariaDB';
            case 'sqlite':
                return 'SQLite';

            case 'ram':
                return 'RAM';

            default:
                return \ucfirst($this->getName());
        }
    }

    public function setMin(?string $min): void
    {
        $this->min = $min;
    }

    public function getMin(): ?string
    {
        return $this->min;
    }

    public function setMax(?string $max): void
    {
        $this->max = $max;
    }

    public function getMax(): ?string
    {
        return $this->max;
    }

    /**
    * @return array<string, mixed>
    */
    public function jsonSerialize(): array
    {
        return [];
    }
}
