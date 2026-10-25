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

namespace App\Controller;

use App\Entity\SitePackage;
use App\Form\SitePackageType;
use App\Service\SitePackageGenerator;
use App\Utility\StringUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route(path: '/sitepackage', priority: 1)]
class SitePackageController extends AbstractController
{
    #[Route(path: '')]
    #[Route(path: '/', name: 'sitepackage_index')]
    public function index(): Response
    {
        return $this->render('sitepackage/index.html.twig');
    }

    #[Route(path: '/new/', name: 'sitepackage_new')]
    public function new(Request $request): Response
    {
        $session = $request->getSession();
        $session->set('sitepackage', null);
        $sitepackage = new SitePackage();
        $form = $this->createNewSitePackageForm($sitepackage);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $sitepackage->setVendorName(StringUtility::stringToUpperCamelCase($sitepackage->getVendorName()));
            $sitepackage->setVendorNameAlternative(StringUtility::camelCaseToLowerCaseDashed($sitepackage->getVendorName()));
            $sitepackage->setPackageName(StringUtility::stringToUpperCamelCase($sitepackage->getTitle()));
            $sitepackage->setPackageNameAlternative(StringUtility::camelCaseToLowerCaseDashed($sitepackage->getPackageName()));
            $sitepackage->setExtensionKey(StringUtility::camelCaseToLowerCaseUnderscored($sitepackage->getPackageName()));
            $session = $request->getSession();
            $session->set('sitepackage', $sitepackage);

            return $this->redirectToRoute('sitepackage_success');
        }

        return $this->render(
            'sitepackage/new.html.twig',
            [
                'form' => $form,
            ]
        );
    }

    #[Route(path: '/edit/', name: 'sitepackage_edit')]
    public function edit(Request $request): Response
    {
        $session = $request->getSession();
        /** @var SitePackage|null $sitepackage */
        $sitepackage = $session->get('sitepackage');
        if ($sitepackage === null) {
            $this->addFlash(
                'danger',
                'Whoops, we could not find the package configuration. Please submit the configuration again.'
            );

            return $this->redirectToRoute('sitepackage_new');
        }
        $form = $this->createEditSitePackageForm($sitepackage);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $sitepackage->setVendorNameAlternative(StringUtility::camelCaseToLowerCaseDashed($sitepackage->getVendorName()));
            $sitepackage->setPackageName(StringUtility::stringToUpperCamelCase($sitepackage->getTitle()));
            $sitepackage->setPackageNameAlternative(StringUtility::camelCaseToLowerCaseDashed($sitepackage->getPackageName()));
            $sitepackage->setExtensionKey(StringUtility::camelCaseToLowerCaseUnderscored($sitepackage->getPackageName()));
            $session = $request->getSession();
            $session->set('sitepackage', $sitepackage);

            return $this->redirectToRoute('sitepackage_success');
        }

        return $this->render(
            'sitepackage/edit.html.twig',
            [
                'form' => $form,
            ]
        );
    }

    #[Route(path: '/success/', name: 'sitepackage_success')]
    public function success(Request $request): Response
    {
        $session = $request->getSession();
        /** @var SitePackage|null $sitepackage */
        $sitepackage = $session->get('sitepackage');
        if ($sitepackage === null) {
            $this->addFlash(
                'danger',
                'Whoops, we could not find the package configuration. Please submit the configuration again.'
            );

            return $this->redirectToRoute('sitepackage_new');
        }

        return $this->render(
            'sitepackage/success.html.twig',
            [
                'sitepackage' => $sitepackage,
            ]
        );
    }

    #[Route(path: '/download/', name: 'sitepackage_download')]
    public function download(Request $request, SitePackageGenerator $sitepackageGenerator): Response
    {
        $session = $request->getSession();
        /** @var SitePackage|null $sitepackage */
        $sitepackage = $session->get('sitepackage');
        if ($sitepackage === null) {
            $this->addFlash(
                'danger',
                'Whoops, we could not find the package configuration. Please submit the configuration again.'
            );

            return $this->redirectToRoute('sitepackage_new');
        }
        $sitepackageGenerator->create($sitepackage);
        $filename = $sitepackageGenerator->getFilename();

        BinaryFileResponse::trustXSendfileTypeHeader();

        return $this
            ->file($sitepackageGenerator->getZipPath(), StringUtility::toASCII($filename))
            ->deleteFileAfterSend(true);
    }

    protected function createNewSitePackageForm(SitePackage $sitepackage): FormInterface
    {
        return $this->createForm(
            SitePackageType::class,
            $sitepackage,
            ['action' => $this->generateUrl('sitepackage_new')]
        )->add(
            'save',
            SubmitType::class,
            [
                'label' => 'Create SitePackage',
                'icon' => 'floppy-disk',
                'attr' => ['class' => 'btn-primary'],
            ]
        );
    }

    protected function createEditSitePackageForm(SitePackage $sitepackage): FormInterface
    {
        return $this->createForm(
            SitePackageType::class,
            $sitepackage,
            ['action' => $this->generateUrl('sitepackage_edit')]
        )->add(
            'save',
            SubmitType::class,
            [
                'label' => 'Update SitePackage',
                'icon' => 'floppy-disk',
                'attr' => ['class' => 'btn-primary'],
            ]
        );
    }
}
