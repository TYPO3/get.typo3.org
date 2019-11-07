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

class ChangeHighlighter extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('changehighlighter', [$this, 'highlightChanges']),
        ];
    }

    public function highlightChanges(string $changeList): string
    {
        $pattern = '#^(?:<li>)(?<content>(?:\d{4}\-\d{2}\-\d{2}\s)?[a-f0-9]{10}.*?(?<important>\[!!!\])?\[(?<type>[A-Z!]+)\].*<\/li>)$#m';
        return preg_replace_callback(
            $pattern,
            function ($matches) {
                $cssClass = 'change-' . strtolower($matches['type']);
                if (isset($matches['important']) && '' !== $matches['important']) {
                    $cssClass .= ' change-important';
                }
                return '<li class="change ' . $cssClass . '">' . $matches['content'];
            },
            $changeList
        );
    }
}
