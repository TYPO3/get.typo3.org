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

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * VersionNumberExtension.
 **/
class VersionNumberExtension extends AbstractExtension
{
    /**
     * @return TwigFilter[]
     */
    public function getFilters()
    {
        return [
            new TwigFilter('version', [$this, 'versionFilter']),
        ];
    }

    public function versionFilter(int $version, int $positions = 3): string
    {
        $versionString = str_pad((string)$version, 9, '0', STR_PAD_LEFT);
        $parts = [
            substr($versionString, 0, 3),
            substr($versionString, 3, 3),
            substr($versionString, 6, 3)
        ];

        switch ($positions) {
            case 1:
                return (string)(int)$parts[0];
            case 2:
                return (int)$parts[0] . '.' . (int)$parts[1];
            default:
                return (int)$parts[0] . '.' . (int)$parts[1] . '.' . (int)$parts[2];
        }
    }
}
