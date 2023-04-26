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

use App\EventListener\BasePackageListener;
use App\Repository\BasePackageRepository;
use Doctrine\ORM\Mapping as ORM;
use OpenApi\Attributes as OA;
use Symfony\Component\Validator\Constraints as Assert;
use JsonSerializable;
use Stringable;

#[OA\Schema(
    title: 'Base package',
    description: 'Base package available in the Tools'
)]
#[ORM\Entity(repositoryClass: BasePackageRepository::class)]
#[ORM\EntityListeners([BasePackageListener::class])]
#[ORM\Table(name: 'base_packages')]
class BasePackage implements JsonSerializable, Stringable
{
    public function __construct(
        #[Assert\NotBlank(message: 'Please enter a package name providing the base package.')]
        #[Assert\Regex(
            pattern: '/^[a-z0-9]([_.-]?[a-z0-9]+)*\/[a-z0-9](([_.]?|-{0,2})[a-z0-9]+)*$/',
            message: 'The name must be lowercased and consist of words separated by `-`, `.` or `_`.'
        )]
        #[OA\Property(example: 'typo3/base-package-bootstrap-package')]
        #[ORM\Id]
        #[ORM\Column(unique: true)]
        private string $name = '',
        #[OA\Property(example: 'false')]
        #[ORM\Column]
        private bool $active = false,
        #[OA\Property(example: 'false')]
        #[ORM\Column]
        private bool $official = false,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function isOfficial(): bool
    {
        return $this->official;
    }

    public function setOfficial(bool $official): self
    {
        $this->official = $official;

        return $this;
    }

    /**
     * @return array{name: string, active: bool, official: bool}
     */
    public function jsonSerialize(): array
    {
        return [
            'name' => $this->getName(),
            'active' => $this->isActive(),
            'official' => $this->isOfficial(),
        ];
    }

    public function __toString(): string
    {
        return $this->getName();
    }
}
