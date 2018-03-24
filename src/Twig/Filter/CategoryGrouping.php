<?php
declare(strict_types=1);

namespace App\Twig\Filter;


use Doctrine\Common\Collections\Collection;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class CategoryGrouping extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('groupByCategory', [$this, 'groupByCategory']),
        ];
    }

    public function groupByCategory(Collection $data): array
    {
        $elements = $data->toArray();
        $result = [];
        foreach ($elements as $element) {
            $result[$element->getCategory()][] = $element;
        }
        return $result;
    }
}