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

namespace App\Entity\Embeddables;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use Swagger\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Embeddable
 */
class Package implements \JsonSerializable
{
    /**
     * @ORM\Column(type="string", nullable=true)
     * @Serializer\Groups({"data"})
     * @Serializer\Type("string")
     * @SWG\Property(example="23cab7d353b055a3bf5ef8f9963ba348")
     * @Assert\Regex("/^[0-9a-f]{32}$/")
     */
    private ?string $md5sum = null;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Serializer\Groups({"data"})
     * @Serializer\Type("string")
     * @Assert\Regex("/^[0-9a-f]{40}$/")
     * @SWG\Property(example="7af3a3fe4f1bbda916575c9779368d229d259819")
     */
    private ?string $sha1sum = null;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Serializer\Groups({"data"})
     * @Serializer\Type("string")
     * @Assert\Regex("/^[A-Fa-f0-9]{64}$/")
     * @SWG\Property(example="1e34187712269aa556413d2529b950c0dbff17cc95160cf316de07a3c85ce859")
     */
    private ?string $sha256sum = null;

    public function __construct(?string $md5sum, ?string $sha1sum, ?string $sha256sum)
    {
        $this->md5sum = $md5sum;
        $this->sha1sum = $sha1sum;
        $this->sha256sum = $sha256sum;
    }

    /**
     * @return mixed
     */
    public function getMd5sum(): ?string
    {
        return $this->md5sum;
    }

    /**
     * @return mixed
     */
    public function getSha1sum(): ?string
    {
        return $this->sha1sum;
    }

    /**
     * @return mixed
     */
    public function getSha256sum(): ?string
    {
        return $this->sha256sum;
    }

    /**
    * Specify data which should be serialized to JSON
    *
    * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
    * @return array<string, string> data which can be serialized by <b>json_encode</b>, which is a value of any type other than a resource.
    */
    public function jsonSerialize()
    {
        $data = [];
        if (null !== $this->sha1sum) {
            $data['sha1'] = $this->sha1sum;
        }
        if (null !== $this->md5sum) {
            $data['md5'] = $this->md5sum;
        }
        if (null !== $this->sha256sum) {
            $data['sha256'] = $this->sha256sum;
        }
        return $data;
    }
}
