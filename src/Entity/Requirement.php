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

use App\Enum\RequirementCategoryEnum;
use App\EventListener\RequirementListener;
use App\Repository\RequirementRepository;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use OpenApi\Annotations as OA;
use Symfony\Component\Validator\Constraints as Assert;
use JsonSerializable;
use InvalidArgumentException;
use Stringable;

use function ucfirst;

/**
 * @OA\Schema(
 *     description="TYPO3 major version requirement",
 *     title="Requirement",
 * )
 */
#[ORM\Entity(repositoryClass: RequirementRepository::class)]
#[ORM\EntityListeners([RequirementListener::class])]
#[ORM\UniqueConstraint(columns: ['version', 'category', 'name'])]
class Requirement implements JsonSerializable, Stringable
{
    public static function create(MajorVersion $version = null): self
    {
        return new self(
            null,
            $version,
            '',
            ''
        );
    }

    public function __construct(
        #[ORM\Id]
        #[ORM\GeneratedValue]
        #[ORM\Column]
        private ?int $id,
        #[ORM\ManyToOne(targetEntity: MajorVersion::class, inversedBy: 'requirements')]
        #[ORM\JoinColumn(name: 'version', referencedColumnName: 'version')]
        private ?MajorVersion $version,
        /**
         * @noRector
         *
         * @OA\Property(example="database")
         */
        #[Assert\Choice(callback: [RequirementCategoryEnum::class, 'getAvailableOptions'])]
        #[ORM\Column(type: \Doctrine\DBAL\Types\Types::STRING)]
        #[Serializer\Groups(['data', 'content', 'patch'])]
        private string $category,
        /**
         * @OA\Property(example="mysql")
         */
        #[ORM\Column(type: \Doctrine\DBAL\Types\Types::STRING)]
        #[Serializer\Groups(['data', 'content', 'patch'])]
        private string $name,
        /**
         * @OA\Property(example="5.5")
         */
        #[ORM\Column(type: \Doctrine\DBAL\Types\Types::STRING, nullable: true)]
        #[Serializer\Groups(['data', 'content', 'patch'])]
        private ?string $min = null,
        /**
         * @OA\Property(example="5.7")
         */
        #[ORM\Column(type: \Doctrine\DBAL\Types\Types::STRING, nullable: true)]
        #[Serializer\Groups(['data', 'content', 'patch'])]
        private ?string $max = null,
    ) {}

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setVersion(MajorVersion $version): void
    {
        $this->version = $version;
    }

    public function getVersion(): ?MajorVersion
    {
        return $this->version;
    }

    public function setCategory(string $category): void
    {
        if (!in_array($category, RequirementCategoryEnum::getAvailableOptions(), true)) {
            throw new InvalidArgumentException('Invalid category');
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
        return match ($this->getName()) {
            'php' => 'PHP',
            'ie' => 'Internet Explorer',
            'postgres' => 'PostgreSQL',
            'sqlsrv' => 'Microsoft SQL Server',
            'mysql' => 'MySQL',
            'mariadb' => 'MariaDB',
            'sqlite' => 'SQLite',
            'ram' => 'RAM',
            default => ucfirst($this->getName()),
        };
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

    public function __toString(): string
    {
        $result = ucfirst($this->getCategory()) . ' / ' . $this->getTitle();

        if (($min = $this->getMin()) !== \null) {
            $result .= ': ' . $min;
        }

        if (($max = $this->getMax()) !== \null) {
            $result .= '-' . $max;
        }

        return $result;
    }
}
