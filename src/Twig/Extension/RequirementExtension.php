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

use function array_key_exists;
use function implode;
use function in_array;
use function sprintf;
use function substr;
use function str_ends_with;

use const null;

class RequirementExtension extends AbstractExtension
{
    /**
     * @return TwigFilter[]
     */
    public function getFilters(): array
    {
        return [
            new TwigFilter(
                'prepareRequirements',
                fn (Collection $requirements): array => $this->prepareRequirements($requirements)
            ),
            new TwigFilter(
                'prepareRequirementsShort',
                fn (Collection $requirements): array => $this->prepareRequirementsShort($requirements)
            ),
        ];
    }

    /**
     * @param Collection<int, Requirement> $requirements
     *
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
     *
     * @return array<string, string>
     */
    public function prepareRequirementsShort(Collection $requirements): array
    {
        $result = [
            RequirementCategoryEnum::OPTION_PHP => '',
            RequirementCategoryEnum::OPTION_DATABASE => '',
            //RequirementCategoryEnum::OPTION_COMPOSER => '',
        ];

        $categories = $this->sortByTitle($this->groupByCategory($requirements->toArray()));

        foreach ($categories as $category => $categoryRequirements) {
            if (
                array_key_exists(
                    $category,
                    $result
                )
            ) {
                foreach ($categoryRequirements as $requirement) {
                    switch ($requirement->getCategory()) {
                        case RequirementCategoryEnum::OPTION_PHP:
                            $phpVersions = [
                                '3.0',
                                '4.0', '4.1', '4.2', '4.3', '4.4',
                                '5.0', '5.1', '5.2', '5.3', '5.4', '5.5', '5.6',
                                '7.0', '7.1', '7.2', '7.3', '7.4',
                                '8.0', '8.1', '8.2',
                            ];

                            $supportedVersions = [];

                            foreach ($phpVersions as $phpVersion) {
                                if (
                                    version_compare(
                                        VersionUtility::normalize($phpVersion, 2) ?? '',
                                        VersionUtility::normalize($requirement->getMin(), 2) ?? ''
                                    ) >= 0
                                    && version_compare(
                                        VersionUtility::normalize($phpVersion, 2) ?? '',
                                        VersionUtility::normalize($requirement->getMax(), 2) ?? ''
                                    ) <= 0
                                ) {
                                    $supportedVersions[] = $phpVersion;
                                }
                            }

                            $result[$requirement->getCategory()] = sprintf(
                                '%s %s',
                                $requirement->getTitle(),
                                implode(', ', $supportedVersions)
                            );
                            break;

                        default:
                            $result[$requirement->getCategory()] .= $result[$requirement->getCategory()] !== '' ? ' / ' : '';
                            $result[$requirement->getCategory()] .= $requirement->getTitle();

                            if ($requirement->getMin() !== null) {
                                $version = VersionUtility::normalize($requirement->getMin(), 3) ?? '';
                                if (str_ends_with($version, '.0')) {
                                    $version = substr($version, 0, -2);
                                }
                                $result[$requirement->getCategory()] .= sprintf(
                                    '&nbsp;%s+',
                                    $version
                                );
                            }
                            break;
                    }
                }
            }
        }

        return $result;
    }

    /**
     * @param Collection<int, Requirement> $requirements
     *
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
     *
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
     *
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
                in_array(
                    $requirement->getCategory(),
                    [
                        RequirementCategoryEnum::OPTION_PHP,
                        RequirementCategoryEnum::OPTION_DATABASE,
                        RequirementCategoryEnum::OPTION_COMPOSER,
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
        usort($data, static fn ($a, $b): int => strcasecmp($a->getTitle(), $b->getTitle()));
    }
}
