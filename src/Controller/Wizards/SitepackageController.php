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

namespace App\Controller\Wizards;

use App\Entity\Sitepackage;
use App\Factory\SitepackageFactory;
use App\Form\Dto\SitepackageDto;
use App\Form\SitepackageType;
use App\Service\SitepackageGenerator;
use App\Utility\StringUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use UnexpectedValueException;

/**
 * @Route("/wizards/sitepackage")
*/
final class SitepackageController extends AbstractController
{
    /**
     * @Route("/", name="wizards_sitepackage")
     */
    public function index(): Response
    {
        return $this->render(
            'default/wizards/sitepackage/index.html.twig',
            []
        );
    }

    /**
     * @Route("/new/", name="wizards_sitepackage_new")
     */
    public function new(Request $request): Response
    {
        $session = $request->getSession();

        $this->setAdvanced($session, false);
        $this->setConfiguration($session, new SitepackageDto());

        return $this->redirectToRoute('wizards_sitepackage_edit');
    }

    /**
     * @Route("/edit/", name="wizards_sitepackage_edit")
     */
    public function edit(Request $request): Response
    {
        $session = $request->getSession();

        try {
            $configuration = $this->getConfiguration($session);
        } catch (UnexpectedValueException $th) {
            return $this->redirectToRoute('wizards_sitepackage_new');
        }

        $form = $this->createSitepackageForm($configuration, $this->getAdvanced($session));
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->has('simple') && ($simple = $form->get('simple')) instanceof SubmitButton && $simple->isClicked()) {
                $this->setAdvanced($session, false);
                $this->setConfiguration($session, $configuration);

                return $this->redirectToRoute('wizards_sitepackage_edit');
            }
            if ($form->has('advanced') && ($advanced = $form->get('advanced')) instanceof SubmitButton && $advanced->isClicked()) {
                $this->setAdvanced($session, true);
                $this->setConfiguration($session, $configuration);

                return $this->redirectToRoute('wizards_sitepackage_edit');
            }

            if ($form->isValid()) {
                $this->setConfiguration($session, $configuration);

                return $this->redirectToRoute('wizards_sitepackage_success');
            }
        }

        return $this->render(
            'default/wizards/sitepackage/edit.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }

    /**
     * @Route("/success/", name="wizards_sitepackage_success")
     */
    public function success(Request $request): Response
    {
        $session = $request->getSession();

        try {
            $configuration = $this->getConfiguration($session);
        } catch (UnexpectedValueException $th) {
            return $this->redirectToRoute('wizards_sitepackage_new');
        }

        $sitepackage = SitepackageFactory::fromDto($configuration);
        $this->setSitepackage($session, $sitepackage);

        return $this->render(
            'default/wizards/sitepackage/success.html.twig',
            [
                'sitepackage' => $sitepackage
            ]
        );
    }

    /**
     * @Route("/download/", name="wizards_sitepackage_download")
     */
    public function download(Request $request, SitepackageGenerator $sitepackageGenerator): Response
    {
        $session = $request->getSession();

        try {
            $sitepackage = $this->getSitepackage($session);
        } catch (UnexpectedValueException $th) {
            return $this->redirectToRoute('wizards_sitepackage_new');
        }

        $sitepackageGenerator->create($sitepackage);
        $filename = $sitepackageGenerator->getFilename();

        BinaryFileResponse::trustXSendfileTypeHeader();

        return $this
            ->file($sitepackageGenerator->getZipPath(), StringUtility::toASCII($filename))
            ->deleteFileAfterSend(true);
    }

    private function createSitepackageForm(SitepackageDto $configuration, bool $advanced = false): FormInterface
    {
        return $this->createForm(
            SitepackageType::class,
            $configuration,
            [
                'action' => $this->generateUrl('wizards_sitepackage_edit'),
                'advanced' => $advanced,
            ]
        );
    }

    private function getAdvanced(SessionInterface $session): bool
    {
        return $session->get('sitepackage_advanced') === true;
    }

    private function setAdvanced(SessionInterface $session, bool $advanced): void
    {
        $session->set('sitepackage_advanced', $advanced);
    }

    private function getConfiguration(SessionInterface $session): SitepackageDto
    {
        $configuration = $session->get('sitepackage_configuration');

        if ($configuration === null || !($configuration instanceof SitepackageDto)) {
            $this->addFlash(
                'danger',
                'Whoops, we could not find the package configuration. Please submit the configuration again.'
            );

            throw new UnexpectedValueException('Invalid or missing configuration.', 1638038672);
        }

        return $configuration;
    }

    private function setConfiguration(SessionInterface $session, SitepackageDto $configuration): void
    {
        $session->set('sitepackage_configuration', $configuration);
    }

    private function getSitepackage(SessionInterface $session): Sitepackage
    {
        $sitepackage = $session->get('sitepackage');

        if ($sitepackage === null || !($sitepackage instanceof Sitepackage)) {
            $this->addFlash(
                'danger',
                'Whoops, we could not find the Sitepackage. Please submit the configuration again.'
            );

            throw new UnexpectedValueException('Invalid or missing Sitepackage.', 1638038673);
        }

        return $sitepackage;
    }

    private function setSitepackage(SessionInterface $session, Sitepackage $sitepackage): void
    {
        $session->set('sitepackage', $sitepackage);
    }
}
