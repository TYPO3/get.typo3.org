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

namespace App\Package\Package;

use JMS\Serializer\Annotation as Serializer;
use OpenApi\Attributes as OA;
use Symfony\Component\Validator\Constraints as Assert;
use JsonSerializable;

class Author implements JsonSerializable
{
    #[Assert\NotBlank(message: "Please enter the authors' name.")]
    #[Assert\Length(min: 3)]
    #[OA\Property(example: 'John Doe')]
    #[Serializer\Type('string')]
    private string $name = '';

    #[Assert\NotBlank(message: "Please enter the authors' email address.")]
    #[Assert\Email(message: "The email '{{ value }}' is not a valid email.")]
    #[OA\Property(example: 'john.doe@example.com')]
    #[Serializer\Type('string')]
    private string $email = '';

    #[Assert\NotBlank(message: "Please enter the authors' company.")]
    #[Assert\Length(min: 3)]
    #[Assert\Regex(
        pattern: '/^[A-Za-z0-9\x7f-\xff .:&-]+$/',
        message: 'Only letters, numbers and spaces are allowed.'
    )]
    #[OA\Property(example: 'My Company')]
    #[Serializer\Type('string')]
    private string $company = '';

    #[Assert\NotBlank(message: "Please enter the authors' homepage URL.")]
    #[Assert\Url]
    #[OA\Property(example: 'https://example.com')]
    #[Serializer\Type('string')]
    private string $homepage = '';

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function setCompany(string $company): static
    {
        $this->company = $company;

        return $this;
    }

    public function getHomepage(): string
    {
        return $this->homepage;
    }

    public function setHomepage(string $homepage): static
    {
        $this->homepage = $homepage;

        return $this;
    }

    /**
     * @return array{name: string, email: string, company: string, homepage: string}
     */
    public function jsonSerialize(): array
    {
        return [
            'name' => $this->getName(),
            'email' => $this->getEmail(),
            'company' => $this->getCompany(),
            'homepage' => $this->getHomepage(),
        ];
    }
}
