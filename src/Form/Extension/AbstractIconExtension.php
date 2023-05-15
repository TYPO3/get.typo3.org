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

namespace App\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
use T3G\Bundle\TemplateBundle\Twig\Extension\IconExtension;

use function is_string;

abstract class AbstractIconExtension extends AbstractTypeExtension
{
    public function __construct(
        private readonly IconExtension $iconExtension,
    ) {
    }

    /**
     * @param array<string, mixed> $options
     */
    public function buildView(FormView $view, FormInterface $form, array $options): void
    {
        if (is_string($icon = $options['icon'])) {
            $view->vars['label'] = $this->iconExtension->getIcon($icon) . $view->vars['label'];
            $view->vars['label_html'] = true;
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(['icon' => null]);
        $resolver->setAllowedTypes('icon', ['null', 'string']);
    }
}
