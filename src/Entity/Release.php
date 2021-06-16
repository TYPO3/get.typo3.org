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

use App\Entity\Embeddables\Package;
use App\Entity\Embeddables\ReleaseNotes;
use App\Enum\ReleaseTypeEnum;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use Swagger\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReleaseRepository")
 */
class Release implements \JsonSerializable
{
    /**
     * Version in a semver/version_compare compatible format
     *
     * @SWG\Property(example="8.7.12")
     * @ORM\Id
     * @ORM\Column(type="string")
     * @Serializer\Groups({"content", "data"})
     * @Assert\Regex("/^(\d+\.\d+\.\d+)(?:-([0-9A-Za-z-]+(?:\.[0-9A-Za-z-]+)*))?(?:\+([0-9A-Za-z-]+(?:\.[0-9A-Za-z-]+)*))?$/")
     */
    private string $version;

    /**
     * @ORM\Column(type="datetime")
     * @Serializer\Groups({"data", "content"})
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SWG\Property(example="2017-12-12T16:48:22 UTC")
     */
    private \DateTime $date;

    /**
     * @ORM\Column(type="string")
     * @Serializer\Groups({"data"})
     * @Assert\Choice(callback={"App\Enum\ReleaseTypeEnum", "getAvailableOptions"})
     */
    private string $type;

    /**
     * @ORM\Column(type="boolean")
     * @ORM\Column(options={"default": 0})
     * @Serializer\Groups({"data", "content"})
     * @Assert\Type("boolean")
     * @SWG\Property(example="true")
     */
    private bool $elts = false;

    /**
     * @ORM\Embedded(class="App\Entity\Embeddables\Package")
     * @Serializer\Type("App\Entity\Embeddables\Package")
     * @Serializer\Groups({"data"})
     * @Assert\Valid
     */
    private Package $tarPackage;

    /**
     * @ORM\Embedded(class="App\Entity\Embeddables\Package")
     * @Serializer\Type("App\Entity\Embeddables\Package")
     * @Serializer\Groups({"data"})
     * @Assert\Valid
     */
    private Package $zipPackage;

    /**
     * @ORM\ManyToOne(targetEntity="MajorVersion", inversedBy="releases")
     * @ORM\JoinColumn(name="major_version", referencedColumnName="version")
     * @Assert\Valid
     * @Assert\NotNull
     */
    private MajorVersion $majorVersion;

    /**
     * @ORM\Embedded(class="App\Entity\Embeddables\ReleaseNotes")
     * @Serializer\Type("App\Entity\Embeddables\ReleaseNotes")
     * @Serializer\Groups({"content", "putcontent"})
     * @Assert\Valid
     */
    private ReleaseNotes $releaseNotes;

    public function __construct()
    {
        $this->elts = false;
    }

    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setReleaseNotes(ReleaseNotes $releaseNotes): void
    {
        $this->releaseNotes = $releaseNotes;
    }

    public function getReleaseNotes(): ReleaseNotes
    {
        return $this->releaseNotes;
    }

    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function getMajorVersion(): MajorVersion
    {
        return $this->majorVersion;
    }

    public function setTarPackage(Package $tarPackage): void
    {
        $this->tarPackage = $tarPackage;
    }

    public function getTarPackage(): Package
    {
        return $this->tarPackage;
    }

    public function setZipPackage(Package $zipPackage): void
    {
        $this->zipPackage = $zipPackage;
    }

    public function getZipPackage(): Package
    {
        return $this->zipPackage;
    }

    public function setMajorVersion(MajorVersion $majorVersion): void
    {
        $this->majorVersion = $majorVersion;
    }

    public function setType(string $type): void
    {
        if (!in_array($type, ReleaseTypeEnum::getAvailableOptions())) {
            throw new \InvalidArgumentException('Invalid type');
        }
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setElts(bool $elts): void
    {
        $this->elts = $elts;
    }

    public function isElts(): bool
    {
        return $this->elts;
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
        return [
            'version' => $this->version,
            'date' => $this->date->format('Y-m-d H:i:s T'),
            'type' => $this->type,
            'checksums' => [
                'tar' => $this->tarPackage,
                'zip' => $this->zipPackage,
            ],
            'url' => [
                // todo: try to inject the env var see https://symfony.com/doc/current/configuration.html#accessing-configuration-parameters
                'zip' => getenv('BASE_URL') . '/' . $this->version . '/zip',
                'tar' => getenv('BASE_URL') . '/' . $this->version,
            ],
        ];
    }
}
