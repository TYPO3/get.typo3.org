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

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;

class BasePackage
{
    protected string $identifier;
    protected string $label;

    /**
     * @var ArrayCollection<int, BasePackageVersion>
     */
    protected ArrayCollection $versions;

    public function __construct()
    {
        $this->versions = new ArrayCollection();
    }

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function setIdentifier(string $identifier): self
    {
        $this->identifier = $identifier;

        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return ArrayCollection<int, BasePackageVersion>
     */
    public function getVersions(): ArrayCollection
    {
        return $this->versions->matching(new Criteria(null, ['version' => Criteria::DESC]));
    }

    public function addVersion(BasePackageVersion $version): self
    {
        if (!$this->versions->contains($version)) {
            $this->versions[] = $version;
        }

        return $this;
    }

    public function removeVersion(BasePackageVersion $version): static
    {
        if ($this->versions->contains($version)) {
            $this->versions->removeElement($version);
        }

        return $this;
    }
}
