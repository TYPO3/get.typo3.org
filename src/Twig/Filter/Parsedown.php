<?php
declare(strict_types=1);

namespace App\Twig\Filter;


use Doctrine\Common\Collections\Collection;
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