<?php
declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Twig\Filter;

use Doctrine\Common\Collections\Collection;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class CategoryGrouping extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('groupByCategory', [$this, 'groupByCategory']),
        ];
    }

    public function groupByCategory(Collection $data): array
    {
        $elements = $data->toArray();
        $result = [];
        foreach ($elements as $element) {
            $result[$element->getCategory()][] = $element;
        }
        return $result;
    }
}
