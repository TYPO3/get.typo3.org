<?php

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use Swagger\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\DateTime(format="Y-m-d\TH:i:sP")
     * @Serializer\Type("DateTimeImmutable<'Y-m-d\TH:i:sP'>")
     * @SWG\Property(example="2017-12-12T16:48:22 UTC")
     */
    private $maintainedUntil;

    /**
     * @ORM\Column(type="datetime_immutable")
     * @var \DateTimeImmutable
     * @Serializer\Groups({"data", "content", "patch"})
     * @Assert\DateTime(format="Y-m-d\TH:i:sP")
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
     * @var float
     */
    private $lts;

    public function __construct(
        int $version,
        string $title,
        string $subtitle,
        string $description,
        \DateTimeImmutable $releaseDate,
        \DateTimeImmutable $maintainedUntil,
        Collection $requirements,
        Collection $releases,
        float $lts
    ) {
        $this->version = $version;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->description = $description;
        $this->releaseDate = $releaseDate;
        $this->maintainedUntil = $maintainedUntil;
        $this->requirements = $requirements;
        $this->releases = $releases;
        $this->lts = $lts;
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

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getSubtitle(): string
    {
        return $this->subtitle;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getMaintainedUntil(): \DateTimeImmutable
    {
        return $this->maintainedUntil;
    }

    public function getEltsUntil(): \DateTimeImmutable
    {
        return $this->maintainedUntil->modify('+3 years');
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

    public function addRequirement(Requirement $requirement): void
    {
        $this->requirements->add($requirement);
    }

    /**
     * @param float $version
     */
    public function setVersion(float $version): void
    {
        $this->version = $version;
    }

    public function toArray(): array
    {
        return [
            'version' => $this->version,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'description' => $this->description,
            'releaseDate' => $this->releaseDate,
            'maintainedUntil' => $this->maintainedUntil,
            'requirements' => $this->requirements,
            'releases' => $this->releases,
            'lts' => $this->lts,
            'latestRelease' => $this->getLatestRelease()
        ];
    }

    public function isActive(): bool
    {
        return null === $this->maintainedUntil || (new \DateTimeImmutable() <= $this->maintainedUntil);
    }

    public function isElts(): bool
    {
        return ((new \DateTimeImmutable())->modify('-3 years') > $this->maintainedUntil)
            && ((new \DateTimeImmutable()) < $this->maintainedUntil);
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
        foreach ($this->releases as $release) {
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
