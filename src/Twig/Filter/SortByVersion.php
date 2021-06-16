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

namespace App\Twig\Filter;

use Doctrine\Common\Collections\Collection;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class SortByVersion extends AbstractExtension
{
    /**
     * @return \Twig\TwigFilter[]
     */
    public function getFilters()
    {
        return [
            new TwigFilter('sortByVersion', fn (Collection $releases): array => $this->sort($releases)),
        ];
    }

    /**
     * @return mixed[]
     */
    public function sort(Collection $collection): array
    {
        $array = $collection->toArray();
        usort($array, fn ($a, $b) => version_compare($b->getVersion(), $a->getVersion()));

        return $array;
    }
}
