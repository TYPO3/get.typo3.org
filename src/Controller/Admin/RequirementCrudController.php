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

namespace App\Controller\Admin;

use App\Entity\Requirement;
use App\Enum\RequirementCategoryEnum;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

use function array_flip;

class RequirementCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Requirement::class;
    }

    public function createEntity(string $entityFqcn)
    {
        return Requirement::create();
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->add(Crud::PAGE_EDIT, Action::DETAIL)
            ->remove(Crud::PAGE_INDEX, Action::DELETE)
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('version')
            ->add('category')
            ->add('name')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        yield AssociationField::new('version', 'Major Version');
        yield ChoiceField::new('category', 'Category')->setChoices(
            static fn () => array_flip(RequirementCategoryEnum::getAvailableOptions(true))
        );
        yield TextField::new('name', 'Name');
        yield TextField::new('min', 'Lower Bound');
        yield TextField::new('max', 'Upper Bound');
    }
}
