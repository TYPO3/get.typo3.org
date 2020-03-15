<?php
declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
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
            new TwigFilter('removeWikiLink', [$this, 'removeWikiLink']),
        ];
    }

    public function removeWikiLink(string $data): string
    {
        return preg_replace('/\(TYPO3_CMS_[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3} \\"wikilink\\"\)/', '', $data);
    }
}
