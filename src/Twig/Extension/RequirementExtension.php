<?php
declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
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
            new TwigFilter('formatVersions', [$this, 'formatVersions']),

            // sorting filters
            new TwigFilter('sortByName', [$this, 'sortByName']),

            // group and sorting filters
            new TwigFilter('groupByCategory', [$this, 'groupByCategory']),

            // combined filters
            new TwigFilter('prepareRequirements', [$this, 'prepareRequirements']),
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
            foreach ($elements as &$category) {
                $this->normalizeVersionHelper($category);
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
        return $result;
    }

    public function prepareRequirements(Collection $data): array
    {
        $result = $this->formatVersions($data);
        $result = $this->groupByCategory($result);
        $result = $this->sortByName($result);

        return $result;
    }

    public function sortByName($data): array
    {
        if ($data instanceof Collection) {
            $elements = $data->toArray();
        } elseif (\is_array($data)) {
            $elements = $data;
        } else {
            throw new \Exception('Unsupported type for data: ' . gettype($data));
        }

        if (reset($elements) instanceof Requirement) {
            $this->sortByNameHelper($elements);
        } else {
            foreach ($elements as &$category) {
                $this->sortByNameHelper($category);
            }
        }

        return $elements;
    }

    private function normalizeVersionHelper(array &$data)
    {
        foreach ($data as &$requirement) {
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

    private function sortByNameHelper(array &$data)
    {
        usort($data, function ($a, $b) {
            return strcasecmp($a->getName(), $b->getName());
        });
    }
}
