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

use App\Service\BasePackageService;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

use function sprintf;

class BasePackageType extends AbstractType
{
    public function __construct(
        private readonly BasePackageService $basePackageService,
    ) {
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $choices = [];

        foreach ($this->basePackageService->getInstalledBasePackages() as $basePackage) {
            $choices[sprintf('%s (%s)', $basePackage->title, $basePackage->packageName)] = $basePackage->packageName;
        }

        $resolver->setDefaults([
            'choices' => $choices,
            'disabled' => true,
            'notification' => null,
            'notification_type' => 'danger',
        ]);

        $resolver->setAllowedTypes('notification', ['null', 'string']);
        $resolver->setAllowedTypes('notification_type', 'string');
    }

    public function buildView(FormView $view, FormInterface $form, array $options): void
    {
        $view->vars['notification'] = $options['notification'];
        $view->vars['notification_type'] = $options['notification_type'];
    }

    public function getParent(): string
    {
        return ChoiceType::class;
    }
}
