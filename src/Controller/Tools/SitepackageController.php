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

namespace App\Controller\Tools;

use App\Factory\SitepackageFactory;
use App\Form\Dto\SitepackageDto;
use App\Form\SitepackageType;
use App\Session\ToolSessionTrait;
use App\Utility\StringUtility;
use App\Utility\VersionUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Throwable;
use Twig\Error\RuntimeError;
use UnexpectedValueException;

use function sprintf;

#[Route(path: '/tools/sitepackage')]
final class SitepackageController extends AbstractController
{
    use ToolSessionTrait;

    public function __construct(
        private \App\Service\BasePackageService $basePackageService,
        private \App\Service\SitepackageGenerator $sitepackageGenerator,
    ) {
    }

    #[Route(path: '', name: 'tools_sitepackage')]
    public function index(): Response
    {
        return $this->render(
            'tools/sitepackage/index.html.twig'
        );
    }

    #[Route(path: '/new', name: 'tools_sitepackage_new')]
    #[Route(path: '/new/{vendor}/{project}', name: 'tools_sitepackage_new_filtered')]
    public function new(string $vendor = '', string $project = ''): Response
    {
        $this->setSitepackageConfig(new SitepackageDto(), false);

        $filtered = false;
        $basePackages = $this->basePackageService->getBasePackages();

        if ($vendor !== '' && $project !== '') {
            $basePackageName = sprintf('%s/%s', $vendor, $project);

            try {
                $basePackage = $this->basePackageService->checkAndInstallMissingBasePackage($basePackageName);
                $basePackages = [$basePackage];
                $filtered = true;
            } catch (Throwable $throwable) {
                $this->addFlash(
                    'fatal',
                    $throwable->getMessage()
                );
                return $this->redirectToRoute('tools_sitepackage_new');
            }
        }

        return $this->render(
            'tools/sitepackage/new.html.twig',
            [
                'basePackages' => $basePackages,
                'filtered' => $filtered,
            ]
        );
    }

    #[Route(path: '/validate/{vendor}/{project}', name: 'tools_sitepackage_validate')]
    public function validate(string $vendor, string $project): RedirectResponse
    {
        try {
            $configuration = $this->getSitepackageConfig();
        } catch (UnexpectedValueException) {
            return $this->redirectToRoute('tools_sitepackage_new');
        }

        $configuration->basePackage = sprintf('%s/%s', $vendor, $project);

        try {
            $basePackage = $this->basePackageService->checkAndInstallMissingBasePackage($configuration->basePackage);
            $configuration->typo3Version = VersionUtility::versionToInt($basePackage->typo3Versions[0]);
        } catch (Throwable $throwable) {
            $this->addFlash(
                'fatal',
                $throwable->getMessage()
            );
            return $this->redirectToRoute('tools_sitepackage_new');
        }

        $this->setSitepackageConfig($configuration, $this->isAdvancedSitepackageConfig());

        return $this->redirectToRoute('tools_sitepackage_configure');
    }

    #[Route(path: '/configure', name: 'tools_sitepackage_configure')]
    public function configure(Request $request): Response
    {
        try {
            $configuration = $this->getSitepackageConfig();
        } catch (UnexpectedValueException) {
            return $this->redirectToRoute('tools_sitepackage_new');
        }

        $form = $this->createForm(
            SitepackageType::class,
            $configuration,
            [
                'action' => $this->generateUrl('tools_sitepackage_configure'),
                'advanced' => $this->isAdvancedSitepackageConfig(),
            ]
        );
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if (
                $form->has('simple') &&
                ($simple = $form->get('simple')) instanceof SubmitButton && $simple->isClicked()
            ) {
                $this->setSitepackageConfig($configuration, false);

                return $this->redirectToRoute('tools_sitepackage_configure');
            }

            if (
                $form->has('advanced') &&
                ($advanced = $form->get('advanced')) instanceof SubmitButton && $advanced->isClicked()
            ) {
                $this->setSitepackageConfig($configuration, true);

                return $this->redirectToRoute('tools_sitepackage_configure');
            }

            if ($form->isValid()) {
                $this->setSitepackageConfig($configuration, $this->isAdvancedSitepackageConfig());

                return $this->redirectToRoute('tools_sitepackage_success');
            }
        }

        return $this->render(
            'tools/sitepackage/configure.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }

    #[Route(path: '/success', name: 'tools_sitepackage_success')]
    public function success(): Response
    {
        try {
            $sitepackage = SitepackageFactory::fromDto($this->getSitepackageConfig());
        } catch (UnexpectedValueException) {
            return $this->redirectToRoute('tools_sitepackage_new');
        }

        $this->setSitepackage($sitepackage);

        return $this->render(
            'tools/sitepackage/success.html.twig',
            [
                'base_package' => $this->basePackageService->getInstalledBasePackage($sitepackage->getBasePackage()),
                'sitepackage' => $sitepackage,
            ]
        );
    }

    #[Route(path: '/download', name: 'tools_sitepackage_download')]
    public function download(): Response
    {
        try {
            $sitepackage = $this->getSitepackage();
        } catch (UnexpectedValueException) {
            return $this->redirectToRoute('tools_sitepackage_new');
        }

        try {
            $this->sitepackageGenerator->create($sitepackage);
        } catch (RuntimeError $runtimeError) {
            $this->setSitepackageError($runtimeError->getMessage());

            return $this->redirectToRoute('tools_sitepackage_error');
        }

        BinaryFileResponse::trustXSendfileTypeHeader();

        return $this
            ->file(
                $this->sitepackageGenerator->getZipPath(),
                StringUtility::toASCII($this->sitepackageGenerator->getFilename())
            )
            ->deleteFileAfterSend(true);
    }

    #[Route(path: '/error', name: 'tools_sitepackage_error')]
    public function error(): Response
    {
        return $this->render(
            'tools/sitepackage/error.html.twig',
            [
                'error' => $this->getSitepackageError(),
            ]
        );
    }
}
