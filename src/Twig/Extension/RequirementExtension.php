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
    /**
     * @return TwigFilter[]
     */
    public function getFilters()
    {
        return [
            // combined filters
            new TwigFilter('prepareRequirements', [$this, 'prepareRequirements']),
        ];
    }

    /**
     * @param Collection<int, Requirement> $requirements
     * @return array<string, array<Requirement>>
     */
    public function prepareRequirements(Collection $requirements): array
    {
        $result = $this->formatVersions($requirements);
        $result = $this->groupByCategory($result);
        return $this->sortByTitle($result);
    }

    /**
     * @param Collection<int, Requirement> $requirements
     * @return array<Requirement>
     */
    private function formatVersions(Collection $requirements): array
    {
        $elements = $requirements->toArray();
        $this->normalizeVersionHelper($elements);

        return $elements;
    }

    /**
     * @param array<Requirement> $requirements
     * @return array<string, array<Requirement>>
     */
    private function groupByCategory(array $requirements): array
    {
        $result = [];
        foreach ($requirements as $requirement) {
            $result[$requirement->getCategory()][] = $requirement;
        }

        ksort($result);

        return $result;
    }

    /**
     * @param array<string, array<Requirement>> $elements
     * @return array<string, array<Requirement>>
     */
    private function sortByTitle(array $elements): array
    {
        foreach ($elements as &$category) {
            $this->sortByTitleHelper($category);
        }

        return $elements;
    }

    /**
     * @param array<Requirement> $requirements
     */
    private function normalizeVersionHelper(array &$requirements): void
    {
        foreach ($requirements as &$requirement) {
            if (
                \in_array(
                    $requirement->getCategory(),
                    [
                        RequirementCategoryEnum::OPTION_PHP,
                        RequirementCategoryEnum::OPTION_DATABASE,
                    ],
                    true
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

    /**
     * @param array<Requirement> $data
     */
    private function sortByTitleHelper(array &$data): void
    {
        usort($data, fn ($a, $b) => strcasecmp($a->getTitle(), $b->getTitle()));
    }
}
