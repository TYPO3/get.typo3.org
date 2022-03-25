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

use App\Repository\MajorVersionRepository;
use App\Utility\VersionUtility;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use Swagger\Annotations as SWG;

/**
 * @ORM\Entity(repositoryClass=MajorVersionRepository::class)
 */
class MajorVersion implements \JsonSerializable
{

    /**
     * For example 7 or 8 or 4.3
     * @ORM\Id
     * @ORM\Column(type="float")
     * @Serializer\Groups({"data", "content", "patch"})
     * @SWG\Property(example="8")
     */
    private float $version;

    /**
     * TYPO3 7 LTS
     * @ORM\Column(type="string")
     * @Serializer\Groups({"data", "content", "patch"})
     * @SWG\Property(example="TYPO3 8 LTS")
     */
    private string $title;

    /**
     * @ORM\Column(type="string")
     * @Serializer\Groups({"content", "patch"})
     * @SWG\Property(example="The current stable LTS release (for all new projects)")
     */
    private string $subtitle;

    /**
     * @ORM\Column(type="string")
     * @Serializer\Groups({"content", "patch"})
     * @SWG\Property(example="The latest version with Long Term Support (LTS). It will have full support until October 2018 and security bugfixes until March 2020.")
     */
    private string $description;

    /**
     * @ORM\Column(type="datetime_immutable")
     * @Serializer\Groups({"data", "content", "patch"})
     * @Serializer\Type("DateTimeImmutable<'Y-m-d\TH:i:sP'>")
     * @SWG\Property(example="2017-12-12T16:48:22 UTC")
     */
    private \DateTimeImmutable $releaseDate;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     * @Serializer\Groups({"data", "content", "patch"})
     * @Serializer\Type("DateTimeImmutable<'Y-m-d\TH:i:sP'>")
     * @SWG\Property(example="2017-12-12T16:48:22 UTC")
     */
    private ?\DateTimeImmutable $maintainedUntil = null;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     * @Serializer\Groups({"data", "content", "patch"})
     * @Serializer\Type("DateTimeImmutable<'Y-m-d\TH:i:sP'>")
     * @SWG\Property(example="2017-12-12T16:48:22 UTC")
     */
    private ?\DateTimeImmutable $eltsUntil = null;

    /**
     * @ORM\OneToMany(targetEntity="Requirement", mappedBy="version", cascade={"persist", "remove"}, orphanRemoval=true)
     * @Serializer\Groups({"data", "content"})
     * @Serializer\Type("ArrayCollection<App\Entity\Requirement>")
     * @var Collection<int, Requirement>
     */
    private Collection $requirements;

    /**
     * @ORM\OneToMany(targetEntity="Release", mappedBy="majorVersion", cascade={"persist", "remove"}, orphanRemoval=true)
     * @Serializer\Type("ArrayCollection<App\Entity\Release>")
     * @Serializer\Groups({"data"})
     * @var Collection<int, Release>
     */
    private Collection $releases;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Serializer\Groups({"data", "content", "patch"})
     * @SWG\Property(example=8.7)
     */
    private ?float $lts = null;

    /**
     * @param Collection<int, Requirement> $requirements
     * @param Collection<int, Release> $releases
     */
    public function __construct(
        float $version,
        string $title,
        string $subtitle,
        string $description,
        \DateTimeImmutable $releaseDate,
        ?\DateTimeImmutable $maintainedUntil,
        ?\DateTimeImmutable $eltsUntil,
        Collection $requirements,
        Collection $releases,
        ?float $lts
    ) {
        $this->setVersion($version);
        $this->setTitle($title);
        $this->setSubtitle($subtitle);
        $this->setDescription($description);
        $this->setReleaseDate($releaseDate);
        $this->setMaintainedUntil($maintainedUntil);
        $this->setEltsUntil($eltsUntil);
        $this->setRequirements($requirements);
        $this->setReleases($releases);
        $this->setLts($lts);
    }

    public function setVersion(float $version): void
    {
        $this->version = (float)VersionUtility::extractMajorVersionNumber((string)$version);
    }

    public function getVersion(): float
    {
        return $this->version;
    }

    /**
     * @param Collection<int, Release> $releases
     */
    public function setReleases(Collection $releases): void
    {
        $this->releases = $releases;
    }

    /**
     * @return Collection<int, Release>
     */
    public function getReleases(): Collection
    {
        return $this->releases;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setSubtitle(string $subtitle): void
    {
        $this->subtitle = $subtitle;
    }

    public function getSubtitle(): string
    {
        return $this->subtitle;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setMaintainedUntil(?\DateTimeImmutable $maintainedUntil): void
    {
        $this->maintainedUntil = $maintainedUntil;
    }

    public function getMaintainedUntil(): ?\DateTimeImmutable
    {
        return $this->maintainedUntil;
    }

    public function setEltsUntil(?\DateTimeImmutable $eltsUntil): void
    {
        $this->eltsUntil = $eltsUntil;
    }

    public function getEltsUntil(): ?\DateTimeImmutable
    {
        return $this->eltsUntil ?? ($this->getMaintainedUntil() !== null ? $this->getMaintainedUntil()->modify('+3 years') : null);
    }

    public function setReleaseDate(\DateTimeImmutable $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    public function getReleaseDate(): \DateTimeImmutable
    {
        return $this->releaseDate;
    }

    public function getLatestRelease(): ?Release
    {
        $array = $this->releases->toArray();
        usort(
            $array,
            fn ($a, $b): int => version_compare($b->getVersion(), $a->getVersion())
        );
        return $array !== [] ? reset($array) : null;
    }

    /**
     * @param Collection<int, Requirement> $requirements
     */
    public function setRequirements(Collection $requirements): void
    {
        $this->requirements = $requirements;
    }

    public function addRequirement(Requirement $requirement): void
    {
        $this->requirements->add($requirement);
    }

    /**
     * @return Collection<int, Requirement>
     */
    public function getRequirements(): Collection
    {
        return $this->requirements;
    }

    public function setLts(?float $lts): void
    {
        $this->lts = $lts;
    }

    public function getLts(): ?float
    {
        return $this->lts;
    }

    public function isActive(): bool
    {
        $dateTime = new \DateTimeImmutable();
        return null === $this->getMaintainedUntil()
            || $dateTime <= $this->getMaintainedUntil();
    }

    public function isElts(): bool
    {
        $dateTime = new \DateTimeImmutable();
        return $this->getMaintainedUntil() != null
            && $this->getEltsUntil() != null
            && $dateTime > $this->getMaintainedUntil()
            && $dateTime <= $this->getEltsUntil();
    }

    /**
     * @return array{version: float, title: string, subtitle: string, description: string, releaseDate: \DateTimeImmutable, maintainedUntil: \DateTimeImmutable|null, eltsUntil: \DateTimeImmutable|null, requirements: Collection<int, Requirement>, releases: Collection<int, Release>, lts: float|null, latestRelease: Release|null, active: bool, elts: bool}
     */
    public function toArray(): array
    {
        return [
            'version' => $this->getVersion(),
            'title' => $this->getTitle(),
            'subtitle' => $this->getSubtitle(),
            'description' => $this->getDescription(),
            'releaseDate' => $this->getReleaseDate(),
            'maintainedUntil' => $this->getMaintainedUntil(),
            'eltsUntil' => $this->getEltsUntil(),
            'requirements' => $this->getRequirements(),
            'releases' => $this->getReleases(),
            'lts' => $this->getLts(),
            'latestRelease' => $this->getLatestRelease(),
            'active' => $this->isActive(),
            'elts' => $this->isElts()
        ];
    }

    /**
     * @return array{releases: array<string, Release>, latest: string, stable: string, active: bool, elts: bool}
     */
    public function jsonSerialize(): array
    {
        $releaseData = [];
        foreach ($this->getReleases() as $release) {
            $releaseData[$release->getVersion()] = $release;
        }

        uksort(
            $releaseData,
            fn (string $a, string $b): int => version_compare($a, $b)
        );
        $desc = array_reverse($releaseData);
        $latest = $this->getLatestRelease();
        return [
            'releases' => $desc,
            'latest' => $latest !== null ? $latest->getVersion() : '',
            'stable' => $latest !== null ? $latest->getVersion() : '',
            'active' => $this->isActive(),
            'elts' => $this->isElts(),
        ];
    }
}
