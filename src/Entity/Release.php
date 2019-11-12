<?php

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Entity;

use App\Entity\Embeddables\Package;
use App\Entity\Embeddables\ReleaseNotes;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use Swagger\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="ReleaseRepository")
 */
class Release implements \JsonSerializable
{
    private $baseUrl = 'https://get.typo3.org/';

    /**
     * Version in a semver/version_compare compatible format
     *
     * @SWG\Property(example="8.7.12")
     * @ORM\Id()
     * @ORM\Column(type="string")
     * @var string
     * @Serializer\Groups({"content", "data"})
     * @Assert\Regex("/^(\d+\.\d+\.\d+)(?:-([0-9A-Za-z-]+(?:\.[0-9A-Za-z-]+)*))?(?:\+([0-9A-Za-z-]+(?:\.[0-9A-Za-z-]+)*))?$/")
     */
    private $version;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     * @Serializer\Groups({"data", "content"})
     * @Assert\DateTime(format="Y-m-d\TH:i:sP")
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SWG\Property(example="2017-12-12T16:48:22 UTC")
     */
    private $date;

    /**
     * @ORM\Column(type="string")
     * @var string
     * @Serializer\Groups({"data"})
     * @Assert\Choice({"regular", "development", "security"})
     */
    private $type;

    /**
     * @ORM\Column(type="boolean")
     * @ORM\Column(options={"default": 0})
     * @var bool
     * @Serializer\Groups({"data", "content"})
     * @Assert\Type("boolean")
     * @SWG\Property(example="true")
     */
    private $elts;

    /**
     * @ORM\Embedded(class = "App\Entity\Embeddables\Package")
     * @var Package
     * @Serializer\Type("App\Entity\Embeddables\Package")
     * @Serializer\Groups({"data"})
     * @Assert\Valid
     */
    private $tarPackage;

    /**
     * @ORM\Embedded(class = "App\Entity\Embeddables\Package")
     * @var \App\Entity\Embeddables\Package
     * @Serializer\Type("App\Entity\Embeddables\Package")
     * @Serializer\Groups({"data"})
     * @Assert\Valid
     */
    private $zipPackage;

    /**
     * @ORM\ManyToOne(targetEntity="MajorVersion", inversedBy="releases")
     * @ORM\JoinColumn(name="major_version", referencedColumnName="version")
     * @var string|\App\Entity\MajorVersion
     * @Assert\Valid
     * @Assert\NotNull
     */
    private $majorVersion;

    /**
     * @ORM\Embedded(class = "App\Entity\Embeddables\ReleaseNotes")
     * @var Package
     * @Serializer\Type("App\Entity\Embeddables\ReleaseNotes")
     * @Serializer\Groups({"content", "putcontent"})
     * @Assert\Valid
     */
    private $releaseNotes;

    public function __construct()
    {
        $this->elts = false;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    public function getReleaseNotes()
    {
        return $this->releaseNotes;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function getMajorVersion(): MajorVersion
    {
        return $this->majorVersion;
    }

    public function getTarPackage(): Package
    {
        return $this->tarPackage;
    }

    public function getZipPackage(): Package
    {
        return $this->zipPackage;
    }

    public function setMajorVersion(MajorVersion $majorVersion): void
    {
        $this->majorVersion = $majorVersion;
    }

    public function setReleaseNotes(ReleaseNotes $releaseNotes): void
    {
        $this->releaseNotes = $releaseNotes;
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
                'zip' => $this->baseUrl . $this->version . '/zip',
                'tar' => $this->baseUrl . $this->version,
            ],
        ];
    }
}
