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
use OpenApi\Annotations as OA;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Embeddable]
class Package implements \JsonSerializable
{
    public function __construct(
        /**
         * @OA\Property(example="23cab7d353b055a3bf5ef8f9963ba348")
         */
        #[Assert\Regex('/^[0-9a-f]{32}$/')]
        #[ORM\Column(type: \Doctrine\DBAL\Types\Types::STRING, nullable: true)]
        #[Serializer\Groups(['data'])]
        #[Serializer\Type('string')]
        private readonly ?string $md5sum,
        /**
         * @OA\Property(example="7af3a3fe4f1bbda916575c9779368d229d259819")
         */
        #[Assert\Regex('/^[0-9a-f]{40}$/')]
        #[ORM\Column(type: \Doctrine\DBAL\Types\Types::STRING, nullable: true)]
        #[Serializer\Groups(['data'])]
        #[Serializer\Type('string')]
        private readonly ?string $sha1sum,
        /**
         * @OA\Property(example="1e34187712269aa556413d2529b950c0dbff17cc95160cf316de07a3c85ce859")
         */
        #[Assert\Regex('/^[A-Fa-f0-9]{64}$/')]
        #[ORM\Column(type: \Doctrine\DBAL\Types\Types::STRING, nullable: true)]
        #[Serializer\Groups(['data'])]
        #[Serializer\Type('string')]
        private readonly ?string $sha256sum
    ) {
    }

    public function getMd5sum(): ?string
    {
        return $this->md5sum;
    }

    public function getSha1sum(): ?string
    {
        return $this->sha1sum;
    }

    public function getSha256sum(): ?string
    {
        return $this->sha256sum;
    }

    /**
     * @return array<string, string>
     */
    public function jsonSerialize(): array
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
