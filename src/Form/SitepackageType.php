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

use App\Form\Dto\SitepackageDto;
use App\Form\Type\BasePackageType;
use App\Form\Type\Typo3VersionType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * SitepackageType
 */
class SitepackageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $advanced = (bool)($options['advanced'] ?? false);

        $builder
            //->setAction(is_string($action = $options['action']) ? $action : '')
            ->add('typo3Version', Typo3VersionType::class, [
                'label' => 'TYPO3 Version',
                'label_attr' => ['class' => 'w-auto pe-2'],
                'expanded' => true,
                'row_attr' => ['class' => 'd-inline-flex flex-column w-50'],
            ])
            ->add('basePackage', BasePackageType::class, [
                'label' => 'Base Package',
                'label_attr' => ['class' => 'w-auto me-2'],
                'expanded' => true,
                'row_attr' => ['class' => 'd-inline-flex flex-column w-50'],
            ])
            ->add('title', TextType::class, [
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'My Sitepackage',
                ]
            ])
            ->add('description', TextareaType::class, [
                'required' => false,
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'Optional description for the use of this sitepackage',
                ]
            ])
            ->add('repositoryUrl', TextType::class, [
                'label' => 'Repository URL',
                'required' => false,
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'https://github.com/username/my_sitepackage',
                ]
            ])
        ;

        if ($advanced) {
            $builder
                ->add('composerName', TextType::class, [
                    'label' => 'Composer Name',
                    'required' => false,
                    'attr' => [
                        'autocomplete' => 'off',
                        'placeholder' => 'my-company/my-sitepackage',
                    ],
                ])
                ->add('psr4Namespace', TextType::class, [
                    'label' => 'PSR-4 Namespace',
                    'required' => false,
                    'attr' => [
                        'autocomplete' => 'off',
                        'placeholder' => 'MyCompany\MySitepackage',
                    ],
                ])
                ->add('extensionKey', TextType::class, [
                    'label' => 'Extension Key',
                    'required' => false,
                    'attr' => [
                        'autocomplete' => 'off',
                        'placeholder' => 'my_sitepackage',
                    ],
                ])
            ;
        }

        $builder
            ->add('name', TextType::class, [
                'attr' => [
                    'autocomplete' => 'on',
                    'placeholder' => 'John Doe',
                ],
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'autocomplete' => 'on',
                    'placeholder' => 'john.doe@example.com',
                ],
            ])
            ->add('company', TextType::class, [
                'attr' => [
                    'autocomplete' => 'on',
                    'placeholder' => 'My Company',
                ],
            ])
            ->add('homepage', TextType::class, [
                'attr' => [
                    'autocomplete' => 'on',
                    'placeholder' => 'https://www.example.com',
                ],
            ])
            ->add(
                'save',
                SubmitType::class,
                [
                    'label' => 'Create Sitepackage',
                    //'icon' => 'floppy-disk',
                    'attr' => ['class' => 'btn-primary'],
                    'row_attr' => ['class' => 'd-inline-flex'],
                ]
            )
        ;

        if ($advanced) {
            $builder->add(
                'simple',
                SubmitType::class,
                [
                    'label' => 'Simple Configuration',
                    //'icon' => 'pencil',
                    'attr' => ['class' => 'btn-secondary'],
                    'row_attr' => ['class' => 'd-inline-flex ms-1'],
                    'validate' => false,
                ]
            );
        } else {
            $builder->add(
                'advanced',
                SubmitType::class,
                [
                    'label' => 'Advanced Configuration',
                    //'icon' => 'pencil',
                    'attr' => ['class' => 'btn-secondary'],
                    'row_attr' => ['class' => 'd-inline-flex ms-1'],
                    'validate' => false,
                ]
            );
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SitepackageDto::class,
            'advanced' => false,
        ]);

        $resolver->setAllowedTypes('advanced', 'bool');
    }
}
