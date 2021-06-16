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

namespace App\Twig\Extension;

use App\Entity\Requirement;
use App\Enum\RequirementCategoryEnum;
use App\Utility\VersionUtility;
use Doctrine\Common\Collections\Collection;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class RequirementExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            // format filters
            new TwigFilter('formatVersions', fn ($data): array => $this->formatVersions($data)),

            // sorting filters
            new TwigFilter('sortByTitle', fn ($data): array => $this->sortByTitle($data)),

            // group and sorting filters
            new TwigFilter('groupByCategory', fn ($data): array => $this->groupByCategory($data)),

            // combined filters
            new TwigFilter('prepareRequirements', fn (Collection $data): array => $this->prepareRequirements($data)),
        ];
    }

    public function formatVersions($data): array
    {
        if ($data instanceof Collection) {
            $elements = $data->toArray();
        } elseif (\is_array($data)) {
            $elements = $data;
        } else {
            throw new \Exception('Unsupported type for data: ' . gettype($data));
        }

        if (reset($elements) instanceof Requirement) {
            $this->normalizeVersionHelper($elements);
        } else {
            foreach ($elements as &$element) {
                $this->normalizeVersionHelper($element);
            }
        }

        return $elements;
    }

    public function groupByCategory($data): array
    {
        if ($data instanceof Collection) {
            $elements = $data->toArray();
        } elseif (\is_array($data)) {
            $elements = $data;
        } else {
            throw new \Exception('Unsupported type for data: ' . gettype($data));
        }

        $result = [];
        foreach ($elements as $element) {
            $result[$element->getCategory()][] = $element;
        }

        ksort($result);

        return $result;
    }

    public function prepareRequirements(Collection $collection): array
    {
        $result = $this->formatVersions($collection);
        $result = $this->groupByCategory($result);

        return $this->sortByTitle($result);
    }

    public function sortByTitle($data): array
    {
        if ($data instanceof Collection) {
            $elements = $data->toArray();
        } elseif (\is_array($data)) {
            $elements = $data;
        } else {
            throw new \Exception('Unsupported type for data: ' . gettype($data));
        }

        if (reset($elements) instanceof Requirement) {
            $this->sortByTitleHelper($elements);
        } else {
            foreach ($elements as &$element) {
                $this->sortByTitleHelper($element);
            }
        }

        return $elements;
    }

    private function normalizeVersionHelper(array &$requirements)
    {
        foreach ($requirements as &$requirement) {
            if (
                \in_array(
                    $requirement->getCategory(),
                    [
                        RequirementCategoryEnum::OPTION_PHP,
                        RequirementCategoryEnum::OPTION_DATABASE,
                    ]
                )
            ) {
                // Calculate the digits and force range from 2 to 3
                $digits = min(max(
                    substr_count((string)$requirement->getMin(), '.'),
                    substr_count((string)$requirement->getMax(), '.'),
                    1
                ), 2) + 1;
            } else {
                $digits = 1;
            }

            $requirement->setMin(VersionUtility::normalize($requirement->getMin(), $digits));
            $requirement->setMax(VersionUtility::normalize($requirement->getMax(), $digits));
        }
    }

    private function sortByTitleHelper(array &$data)
    {
        usort($data, fn ($a, $b) => strcasecmp($a->getTitle(), $b->getTitle()));
    }
}
