<?php
declare(strict_types=1);

namespace App\Twig\Filter;


use Doctrine\Common\Collections\Collection;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class SortByVersion extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('sortByVersion', [$this, 'sort']),
        ];
    }

    public function sort(Collection $releases): array
    {
        $array = $releases->toArray();
        usort($array, function($a, $b){
           return version_compare($b->getVersion(), $a->getVersion());
        });

        return $array;
    }
}