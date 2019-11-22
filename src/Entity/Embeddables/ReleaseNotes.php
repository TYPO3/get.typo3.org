<?php
declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Entity\Embeddables;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use Swagger\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Embeddable
 */
class ReleaseNotes
{
    /**
     * @ORM\Column(type="string", nullable=true)
     * @Serializer\Groups({"putcontent", "content"})
     * @Serializer\Type("string")
     * @SWG\Property(type="string", format="uri", example="https://typo3.org/news/article/typo3-v910-released")
     * @Assert\Url()
     */
    private $newsLink;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Serializer\Groups({"putcontent", "content"})
     * @Serializer\Type("string")
     * @SWG\Property(example="This release is a bugfix and regression fix release.", description="Short news text about the release.")
     */
    private $news;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Serializer\Groups({"putcontent", "content"})
     * @Serializer\Type("string")
     * @SWG\Property(description="Ugrade instructions - supports markdown (github flavored)", example="The [usual upgrading procedure](https:\/\/docs.typo3.org\/typo3cms\/InstallationGuide\/) applies.\nNo database updates are necessary.\n")
     */
    private $upgradingInstructions;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Serializer\Groups({"putcontent", "content"})
     * @Serializer\Type("string")
     * @SWG\Property(description="Changelog as markdown")
     */
    private $changes;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Serializer\Groups("content")
     */
    private $legacyContent;

    public function setNewsLink(string $newsLink)
    {
        $this->newsLink = $newsLink;
    }

    public function getNewsLink(): ?string
    {
        return $this->newsLink;
    }

    public function setNews(string $news)
    {
        $this->news = $news;
    }

    public function getNews(): ?string
    {
        return $this->news;
    }

    public function setUpgradingInstructions(string $upgradingInstructions)
    {
        $this->upgradingInstructions = $upgradingInstructions;
    }

    public function getUpgradingInstructions(): ?string
    {
        return $this->upgradingInstructions;
    }

    public function setChanges(string $changes)
    {
        $this->changes = $changes;
    }

    public function getChanges(): ?string
    {
        return $this->changes;
    }

    public function setLegacyContent(string $legacyContent)
    {
        $this->legacyContent = $legacyContent;
    }

    public function getLegacyContent(): ?string
    {
        return $this->legacyContent;
    }
}
