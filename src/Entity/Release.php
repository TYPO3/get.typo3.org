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
use App\Repository\ReleaseRepository;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use Swagger\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReleaseRepository::class)]
class Release implements \JsonSerializable
{
    /**
     * Version in a semver/version_compare compatible format
     *
     * @SWG\Property(example="8.7.12")
     */
    #[Assert\Regex(
        '/^(\d+\.\d+\.\d+)(?:-([0-9A-Za-z-]+(?:\.[0-9A-Za-z-]+)*))?(?:\+([0-9A-Za-z-]+(?:\.[0-9A-Za-z-]+)*))?$/'
    )]
    #[ORM\Id]
    #[ORM\Column(type: \Doctrine\DBAL\Types\Types::STRING)]
    #[Serializer\Groups(['content', 'data'])]
    private string $version;

    /**
     * @SWG\Property(example="2017-12-12T16:48:22 UTC")
     * @var \DateTime|\DateTimeImmutable
     */
    #[ORM\Column(type: \Doctrine\DBAL\Types\Types::DATETIME_MUTABLE)]
    #[Serializer\Groups(['data', 'content'])]
    #[Serializer\Type("DateTime<'Y-m-d\\TH:i:sP'>")]
    private \DateTimeInterface $date;

    /** @noRector */
    #[Assert\Choice(callback: [ReleaseTypeEnum::class, 'getAvailableOptions'])]
    #[ORM\Column(type: \Doctrine\DBAL\Types\Types::STRING)]
    #[Serializer\Groups(['data'])]
    private string $type;

    /**
     * @SWG\Property(example="true")
     */
    #[Assert\Type('boolean')]
    #[ORM\Column(type: \Doctrine\DBAL\Types\Types::BOOLEAN, options: ['default' => 0])]
    #[Serializer\Groups(['data', 'content'])]
    private bool $elts = false;

    #[Assert\Valid]
    #[ORM\Embedded(class: Package::class)]
    #[Serializer\Type(\App\Entity\Embeddables\Package::class)]
    #[Serializer\Groups(['data'])]
    private Package $tarPackage;

    #[Assert\Valid]
    #[ORM\Embedded(class: Package::class)]
    #[Serializer\Type(\App\Entity\Embeddables\Package::class)]
    #[Serializer\Groups(['data'])]
    private Package $zipPackage;

    #[Assert\Valid]
    #[Assert\NotNull]
    #[ORM\ManyToOne(targetEntity: MajorVersion::class, inversedBy: 'releases')]
    #[ORM\JoinColumn(name: 'major_version', referencedColumnName: 'version')]
    private MajorVersion $majorVersion;

    #[Assert\Valid]
    #[ORM\Embedded(class: ReleaseNotes::class)]
    #[Serializer\Type(\App\Entity\Embeddables\ReleaseNotes::class)]
    #[Serializer\Groups(['content', 'putcontent'])]
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

    public function setDate(\DateTime|\DateTimeImmutable $date): void
    {
        $this->date = $date;
    }

    /**
     * @return \DateTime|\DateTimeImmutable
     */
    public function getDate(): \DateTimeInterface
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
        if (!in_array($type, ReleaseTypeEnum::getAvailableOptions(), true)) {
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
     * @return array{
     *     version: string,
     *     date: string,
     *     type: string,
     *     checksums: array{tar: Package, zip: Package},
     *     url: array{zip: string, tar: string}
     * }
     */
    public function jsonSerialize(): array
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
                // todo: try to inject the env var see
                // https://symfony.com/doc/current/configuration.html#accessing-configuration-parameters
                'zip' => getenv('BASE_URL') . '/' . $this->version . '/zip',
                'tar' => getenv('BASE_URL') . '/' . $this->version,
            ],
        ];
    }
}
