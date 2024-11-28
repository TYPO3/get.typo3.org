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

namespace App\Entity\SitePackage;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Author.
 */
class Author implements \JsonSerializable
{
    #[Assert\NotBlank(message: "Please enter the authors' name.")]
    #[Assert\Length(min: 3)]
    private string $name;

    #[Assert\NotBlank(message: "Please enter the authors' email address.")]
    #[Assert\Email(message: "The email '{{ value }}' is not a valid email.")]
    private string $email;

    #[Assert\NotBlank(message: "Please enter the authors' company.")]
    #[Assert\Length(min: 3)]
    #[Assert\Regex(pattern: '/^[A-Za-z0-9\x7f-\xff .:&-]+$/', message: 'Only letters, numbers and spaces are allowed')]
    private string $company;

    #[Assert\NotBlank(message: "Please enter the authors' homepage URL.")]
    #[Assert\Url]
    private string $homepage;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getHomepage(): string
    {
        return $this->homepage;
    }

    public function setHomepage(string $homepage): self
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
