<?php

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Entity;

use App\Enum\RequirementCategoryEnum;
use App\Utility\VersionUtility;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use Swagger\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RequirementRepository")
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
     * @ORM\Id
     * @ORM\Column(type="string")
     * @var string
     * @Serializer\Groups({"data", "content", "patch"})
     * @SWG\Property(example="database")
     * @Assert\Choice(callback={"App\Enum\RequirementCategoryEnum", "getAvailableOptions"})
     */
    private $category;

    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     * @var string
     * @Serializer\Groups({"data", "content", "patch"})
     * @SWG\Property(example="mysql")
     */
    private $name;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string
     * @Serializer\Groups({"data", "content", "patch"})
     * @SWG\Property(example="5.5")
     */
    private $min;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string
     * @Serializer\Groups({"data", "content", "patch"})
     * @SWG\Property(example="5.7")
     */
    private $max;

    public function setVersion(MajorVersion $version): void
    {
        $this->version = $version;
    }

    public function getVersion(): MajorVersion
    {
        return $this->version;
    }

    public function setCategory(string $category): void
    {
        if (!in_array($category, RequirementCategoryEnum::getAvailableOptions())) {
            throw new \InvalidArgumentException('Invalid category');
        }
        $this->category = $category;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @Serializer\VirtualProperty
     * @Serializer\SerializedName("title")
     * @Serializer\Groups({"data", "content"})
     *
     * @return string
     */
    public function getTitle(): string
    {
        switch ($this->getName()) {
            case 'php':
                return 'PHP';
                break;

            case 'ie':
                return 'Internet Explorer';
                break;

            case 'postgres':
                return 'PostgreSQL';
                break;
            case 'sqlsrv':
                return 'Microsoft SQL Server';
                break;
            case 'mysql':
                return 'MySQL';
                break;
            case 'mariadb':
                return 'MariaDB';
                break;
            case 'sqlite':
                return 'SQLite';
                break;

            case 'ram':
                return 'RAM';
                break;

            case RequirementCategoryEnum::OPTION_OS:
                $version = $this->version->getVersion();
                return 'Linux, Windows' . ($version > 8 ? ', ' : ' or ') . 'Mac' . ($version > 8 ? ' or common cloud infrastructure setups' : '');
                break;

            case RequirementCategoryEnum::OPTION_WEBSERVER:
                $version = $this->version->getVersion();
                return 'Apache httpd, Nginx' . ($version > 8 ? ', ' : ' or ') . 'Microsoft IIS' . ($this->version->getVersion() > 8 ? ' or Caddy Server' : '');
                break;

            default:
                return \ucfirst($this->getName());
                break;
        }
    }

    public function setMin(?string $min): void
    /**
     * @Serializer\VirtualProperty
     * @Serializer\SerializedName("constraint")
     * @Serializer\Groups({"data", "content"})
     *
     * @return string
     */
    public function getConstraint(): string
    {
        if ($this->min) {
            $this->normalizeVersions();

            $result = '>= ' . $this->min;

            if ($this->name === 'ram') {
                $result .= ' MB';
            } elseif ($this->max) {
                $result .= ' <= ' . $this->max;
            }
        } elseif ($this->category === RequirementCategoryEnum::OPTION_CLIENT) {
            $result = '(latest)';
        } else {
            $result = '';
        }

        return $result;
    }

    /**
     * @Serializer\VirtualProperty
     * @Serializer\SerializedName("titleAndConstraint")
     * @Serializer\Groups({"data", "content"})
     *
     * @return string
     */
    public function getTitleAndConstraint(): string
    {
        return trim($this->getTitle() . ' ' . $this->getConstraint());
    }

    {
        $this->min = $min;
    }

    public function getMin(): ?string
    {
        return $this->min;
    }

    public function setMax(?string $max): void
    {
        $this->max = $max;
    }

    public function getMax(): ?string
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

    public function normalizeVersions(): void
    {
        if (
            \in_array(
                $this->getCategory(),
                [
                    RequirementCategoryEnum::OPTION_PHP,
                    RequirementCategoryEnum::OPTION_DATABASE,
                ]
            )
        ) {
            // Calculate the digits and force range from 2 to 3
            $digits = min(max(
                substr_count((string)$this->min, '.'),
                substr_count((string)$this->max, '.'),
                1
            ), 2) + 1;
        } else {
            $digits = 1;
        }

        $this->setMin(VersionUtility::normalize($this->min, $digits));
        $this->setMax(VersionUtility::normalize($this->max, $digits));
    }
}
