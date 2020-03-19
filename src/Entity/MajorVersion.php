<?php

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Entity;

use App\Utility\VersionUtility;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use Swagger\Annotations as SWG;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MajorVersionRepository")
 */
class MajorVersion implements \JsonSerializable
{

    /**
     * For example 7 or 8 or 4.3
     * @ORM\Id()
     * @ORM\Column(type="float")
     * @Serializer\Groups({"data", "content", "patch"})
     * @SWG\Property(example="8")
     *
     * @var float
     */
    private $version;

    /**
     * TYPO3 7 LTS
     * @ORM\Column(type="string")
     * @Serializer\Groups({"data", "content", "patch"})
     * @SWG\Property(example="TYPO3 8 LTS")
     *
     * @var string
     */
    private $title;

    /**
     * @ORM\Column(type="string")
     * @Serializer\Groups({"content", "patch"})
     * @SWG\Property(example="The current stable LTS release (for all new projects)")
     * @var string
     */
    private $subtitle;

    /**
     * @ORM\Column(type="string")
     * @Serializer\Groups({"content", "patch"})
     * @SWG\Property(example="The latest version with Long Term Support (LTS). It will have full support until October 2018 and security bugfixes until March 2020.")
     * @var string
     */
    private $description;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     * @var \DateTimeImmutable
     * @Serializer\Groups({"data", "content", "patch"})
     * @Serializer\Type("DateTimeImmutable<'Y-m-d\TH:i:sP'>")
     * @SWG\Property(example="2017-12-12T16:48:22 UTC")
     */
    private $maintainedUntil;

    /**
     * @ORM\Column(type="datetime_immutable")
     * @var \DateTimeImmutable
     * @Serializer\Groups({"data", "content", "patch"})
     * @Serializer\Type("DateTimeImmutable<'Y-m-d\TH:i:sP'>")
     * @SWG\Property(example="2017-12-12T16:48:22 UTC")
     */
    private $releaseDate;

    /**
     * @ORM\OneToMany(targetEntity="Requirement", mappedBy="version", cascade={"persist", "remove"}, orphanRemoval=true)
     * @Serializer\Groups({"data", "content"})
     * @Serializer\Type("ArrayCollection<App\Entity\Requirement>")
     */
    private $requirements;

    /**
     * @ORM\OneToMany(targetEntity="Release", mappedBy="majorVersion", cascade={"persist", "remove"}, orphanRemoval=true)
     * @Serializer\Type("ArrayCollection<App\Entity\Release>")
     * @Serializer\Groups({"data"})
     * @var Collection
     */
    private $releases;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Serializer\Groups({"data", "content", "patch"})
     * @SWG\Property(example=8.7)
     * @var float
     */
    private $lts;

    public function __construct(
        float $version,
        string $title,
        string $subtitle,
        string $description,
        \DateTimeImmutable $releaseDate,
        ?\DateTimeImmutable $maintainedUntil,
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
        $this->setRequirements($requirements);
        $this->setReleases($releases);
        $this->setLts($lts);
    }

    public function setVersion(float $version): void
    {
        $this->version = (float) VersionUtility::extractMajorVersionNumber($version);
    }

    public function getVersion(): float
    {
        return $this->version;
    }

    public function setReleases(Collection $releases): void
    {
        $this->releases = $releases;
    }

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

    public function getEltsUntil(): ?\DateTimeImmutable
    {
        return $this->getMaintainedUntil() ? $this->getMaintainedUntil()->modify('+3 years') : null;
    }

    public function setReleaseDate(\DateTimeImmutable $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    public function getReleaseDate(): \DateTimeImmutable
    {
        return $this->releaseDate;
    }

    public function getLatestRelease()
    {
        $array = $this->releases->toArray();
        usort(
            $array,
            function ($a, $b) {
                return version_compare($b->getVersion(), $a->getVersion());
            }
        );
        return reset($array);
    }

    public function setRequirements(Collection $requirements): void
    {
        $this->requirements = $requirements;
    }

    public function addRequirement(Requirement $requirement): void
    {
        $this->requirements->add($requirement);
    }

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
     * Specify data which should be serialized to JSON
     *
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        $releaseData = [];
        foreach ($this->getReleases() as $release) {
            $releaseData[$release->getVersion()] = $release;
        }
        uksort($releaseData, 'version_compare');
        $desc = array_reverse($releaseData);
        $latest = $this->getLatestRelease();
        return [
            'releases' => $desc,
            'latest' => $latest ? $latest->getVersion() : '',
            'stable' => $latest ? $latest->getVersion() : '',
            'active' => $this->isActive(),
            'elts' => $this->isElts(),
        ];
    }
}
