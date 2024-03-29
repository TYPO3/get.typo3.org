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

namespace App\Entity\Embeddables;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use OpenApi\Annotations as OA;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Embeddable]
class ReleaseNotes
{
    /**
     * @OA\Property(type="string", format="uri", example="https://typo3.org/news/article/typo3-v910-released")
     */
    #[Assert\Url]
    #[ORM\Column(type: \Doctrine\DBAL\Types\Types::STRING, nullable: true)]
    #[Serializer\Groups(['putcontent', 'content'])]
    #[Serializer\Type('string')]
    private ?string $newsLink = null;

    /**
     * @OA\Property(example="This release is a bugfix and regression fix release.", description="Short news text about the release.")
     */
    #[ORM\Column(type: \Doctrine\DBAL\Types\Types::TEXT, nullable: true)]
    #[Serializer\Groups(['putcontent', 'content'])]
    #[Serializer\Type('string')]
    private ?string $news = null;

    /**
     * @OA\Property(description="Ugrade instructions - supports markdown (github flavored)", example="The [usual upgrading procedure](https:\/\/docs.typo3.org\/upgrade) applies.\nNo database updates are necessary.\n")
     */
    #[ORM\Column(type: \Doctrine\DBAL\Types\Types::TEXT, nullable: true)]
    #[Serializer\Groups(['putcontent', 'content'])]
    #[Serializer\Type('string')]
    private ?string $upgradingInstructions = null;

    /**
     * @OA\Property(description="Changelog as markdown")
     */
    #[ORM\Column(type: \Doctrine\DBAL\Types\Types::TEXT, nullable: true)]
    #[Serializer\Groups(['putcontent', 'content'])]
    #[Serializer\Type('string')]
    private ?string $changes = null;

    #[ORM\Column(type: \Doctrine\DBAL\Types\Types::TEXT, nullable: true)]
    #[Serializer\Groups(['content'])]
    private ?string $legacyContent = null;

    public function setNewsLink(string $newsLink): void
    {
        $this->newsLink = $newsLink;
    }

    public function getNewsLink(): ?string
    {
        return $this->newsLink;
    }

    public function setNews(string $news): void
    {
        $this->news = $news;
    }

    public function getNews(): ?string
    {
        return $this->news;
    }

    public function setUpgradingInstructions(string $upgradingInstructions): void
    {
        $this->upgradingInstructions = $upgradingInstructions;
    }

    public function getUpgradingInstructions(): ?string
    {
        return $this->upgradingInstructions;
    }

    public function setChanges(string $changes): void
    {
        $this->changes = $changes;
    }

    public function getChanges(): ?string
    {
        return $this->changes;
    }

    public function setLegacyContent(string $legacyContent): void
    {
        $this->legacyContent = $legacyContent;
    }

    public function getLegacyContent(): ?string
    {
        return $this->legacyContent;
    }
}
