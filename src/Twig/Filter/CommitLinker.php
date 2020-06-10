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

class CommitLinker extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('commitlinker', [$this, 'linkCommits']),
        ];
    }

    public function linkCommits(string $changeList): string
    {
        $pattern = '#(?<commit>[a-f0-9]{10,40})#m';

        return preg_replace_callback(
            $pattern,
            function (array $matches): string {
                return sprintf(
                    '<a href="https://github.com/TYPO3/TYPO3.CMS/commit/%1$s" target="_blank" rel="noopener">%1$s</a>',
                    $matches['commit']
                );
            },
            $changeList
        );
    }
}
