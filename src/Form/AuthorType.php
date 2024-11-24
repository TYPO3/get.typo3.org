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

use App\Entity\SitePackage\Author;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AuthorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'required' => false,
                'empty_data' => '',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'John Doe',
                ],
                'documentation' => [
                    'example' => 'J. Doe',
                ],
            ])
            ->add('email', EmailType::class, [
                'required' => false,
                'empty_data' => '',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'john.doe@example.com',
                ],
                'documentation' => [
                    'example' => 'info@typo3.com',
                ],
            ])
            ->add('company', TextType::class, [
                'required' => false,
                'empty_data' => '',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'Company Inc.',
                ],
                'documentation' => [
                    'example' => 'TYPO3',
                ],
            ])
            ->add('homepage', TextType::class, [
                'required' => false,
                'empty_data' => '',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'https://www.example.com',
                ],
                'documentation' => [
                    'example' => 'https://typo3.com',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Author::class,
        ]);
    }
}
