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

namespace App\Form;

use App\Entity\Sitepackage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SitepackageType extends AbstractType
{
    /**
     * @param array<string, mixed> $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->setAction($options['action'])
            ->add('base_package', ChoiceType::class, [
                'label' => 'Base Package',
                'choices' => [
                    'Bootstrap Package' => 'bootstrap_package',
                    'Fluid Styled Content' => 'fluid_styled_content',
                ],
                'expanded' => true,
            ])
            ->add('typo3_version', ChoiceType::class, [
                'label' => 'TYPO3 Version',
                'choices' => [
                    '13.4' => 13.4,
                    '12.4' => 12.4,
                    '11.5' => 11.5,
                    '10.4' => 10.4,
                ],
                'expanded' => true,
            ])
            ->add('title', TextType::class, [
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'My Site Package',
                ],
                'documentation' => [
                    'example' => 'My Sitepackage',
                ],
            ])
            ->add('description', TextareaType::class, [
                'required' => false,
                'empty_data' => '',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'Optional description for the use of this Site Package',
                ],
                'documentation' => [
                    'example' => 'Project Configuration for Client',
                ],
            ])
            ->add('repository_url', TextType::class, [
                'label' => 'Repository URL',
                'required' => false,
                'empty_data' => '',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'https://github.com/username/my_sitepackage',
                ],
                'documentation' => [
                    'example' => 'https://github.com/FriendsOfTYPO3/introduction',
                ],
            ])
            ->add('author', AuthorType::class, [
                'csrf_protection' => false,
            ]);
    }

    public function setDefaultOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sitepackage::class,
        ]);
    }

    public function getName(): string
    {
        return 'sitepackageForm';
    }
}
