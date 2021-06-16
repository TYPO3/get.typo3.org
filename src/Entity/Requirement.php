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
 * @ORM\Entity
 */
class Requirement implements \JsonSerializable
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="MajorVersion", inversedBy="requirements")
     * @ORM\JoinColumn(name="version", referencedColumnName="version")
     * @var string|\App\Entity\MajorVersion
     */
    private $version;

    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     * @var string
     * @Serializer\Groups({"data", "content", "patch"})
     * @SWG\Property(example="database")
     * @Assert\Choice(callback={"App\Enum\RequirementCategoryEnum", "getAvailableOptions"})
     */
    private $category;

    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     * @var string
     * @Serializer\Groups({"data", "content", "patch"})
     * @SWG\Property(example="mysql")
     */
    private $name;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string
     * @Serializer\Groups({"data", "content", "patch"})
     * @SWG\Property(example="5.5")
     */
    private $min;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string
     * @Serializer\Groups({"data", "content", "patch"})
     * @SWG\Property(example="5.7")
     */
    private $max;

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
        if (!in_array($category, RequirementCategoryEnum::getAvailableOptions())) {
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
     * Specify data which should be serialized to JSON
     *
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return [];
    }
}
