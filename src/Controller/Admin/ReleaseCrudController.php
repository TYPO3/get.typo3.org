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

use App\Entity\Release;
use App\Enum\ReleaseTypeEnum;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

use function array_flip;
use function in_array;

class ReleaseCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Release::class;
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
            ->add('majorVersion')
            ->add('elts')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        yield AssociationField::new('majorVersion', 'Major Version');
        yield IdField::new('version', 'Release Version');
        yield DateTimeField::new('date', 'Release Date');
        yield ChoiceField::new('type', 'Release Type')->setChoices(
            static fn () => array_flip(ReleaseTypeEnum::getAvailableOptions(true))
        );
        yield BooleanField::new('elts', 'ELTS Release');

        if (in_array($pageName, [Crud::PAGE_DETAIL, Crud::PAGE_EDIT, Crud::PAGE_NEW], true)) {
            yield TextField::new('tarPackage.md5sum', 'Tar Package MD5 Checksum');
            yield TextField::new('tarPackage.sha1sum', 'Tar Package SHA1 Checksum');
            yield TextField::new('tarPackage.sha256sum', 'Tar Package SHA256 Checksum');
            yield TextField::new('zipPackage.md5sum', 'Zip Package MD5 Checksum');
            yield TextField::new('zipPackage.sha1sum', 'Zip Package SHA1 Checksum');
            yield TextField::new('zipPackage.sha256sum', 'Zip Package SHA256 Checksum');
            yield UrlField::new('releaseNotes.newsLink', 'News Link');
            yield TextareaField::new('releaseNotes.news', 'News');
            yield TextareaField::new('releaseNotes.upgradingInstructions', 'Upgrading Instructions');
            yield TextareaField::new('releaseNotes.changes', 'Changes');
            yield TextareaField::new('releaseNotes.legacyContent', 'Legacy Content');
        }
    }
}
