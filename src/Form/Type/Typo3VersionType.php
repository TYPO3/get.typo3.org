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

namespace App\Form\Type;

use App\Enum\Typo3VersionEnum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Typo3VersionType extends AbstractType
{
    private const LOWEST_SUPPORTED_VERSION = Typo3VersionEnum::OPTION_8;

    public function configureOptions(OptionsResolver $resolver): void
    {
        $choices = [];

        foreach (Typo3VersionEnum::getAvailableOptions(true) as $option => $name) {
            if ($option >= self::LOWEST_SUPPORTED_VERSION) {
                $choices['TYPO3 ' . $name] = $option;
            }
        }

        $resolver->setDefaults([
            'choices' => $choices,
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
