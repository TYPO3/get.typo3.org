<?php
declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Twig\Filter;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class Parsedown extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('parsedown', [$this, 'parse']),
        ];
    }

    public function parse(string $markdown): string
    {
        $parsedown = new \Parsedown();
        return $parsedown->parse($markdown);
    }
}
