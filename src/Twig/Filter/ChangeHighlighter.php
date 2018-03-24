<?php
declare(strict_types=1);

namespace App\Twig\Filter;


use Doctrine\Common\Collections\Collection;
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
        $pattern = '#^(?:<li>)(?<content>[a-f0-9]{10}.*?(?<important>\[!!!\])?\[(?<type>[A-Z!]+)\].*<\/li>)$#m';
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