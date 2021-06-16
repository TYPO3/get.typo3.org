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

class ReleaseNotesExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            // format filters
            new TwigFilter('removeWikiLink', fn(string $data): string => $this->removeWikiLink($data)),
        ];
    }

    public function removeWikiLink(string $data): string
    {
        return preg_replace('#\(TYPO3_CMS_\d{1,3}\.\d{1,3}\.\d{1,3} \"wikilink\"\)#', '', $data);
    }
}
