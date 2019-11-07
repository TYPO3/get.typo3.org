<?php

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use Swagger\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 */
class Requirement implements \JsonSerializable
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="MajorVersion", inversedBy="requirements")
     * @ORM\JoinColumn(name="version", referencedColumnName="version")
     * @var string|\App\Entity\MajorVersion
     */
    private $version;

    /**
     * @param \App\Entity\MajorVersion $version
     */
    public function setVersion(MajorVersion $version): void
    {
        $this->version = $version;
    }

    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     * @var string
     * @Serializer\Groups({"data", "content", "patch"})
     * @SWG\Property(example="database")
     * @Assert\Choice({"php", "database", "hardware", "client"})
     */
    private $category;

    /**
     * @return \App\Entity\MajorVersion|string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     * @var string
     * @Serializer\Groups({"data", "content", "patch"})
     * @SWG\Property(example="mysql")
     */
    private $name;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float
     * @Serializer\Groups({"data", "content", "patch"})
     * @SWG\Property(example="5.5")
     */
    private $min;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float
     * @Serializer\Groups({"data", "content", "patch"})
     * @SWG\Property(example="5.7")
     */
    private $max;

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getMin(): ?float
    {
        return $this->min;
    }

    /**
     * @return float
     */
    public function getMax(): ?float
    {
        return $this->max;
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
        return [];
    }
}
