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

namespace App\Session;

use App\Form\Dto\SitepackageDto;
use App\Package\Sitepackage;
use RuntimeException;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use UnexpectedValueException;

use function is_string;

trait WizardSessionTrait
{
    private function getSession(): SessionInterface
    {
        if (!($requestStack = $this->container->get('request_stack')) instanceof RequestStack) {
            throw new RuntimeException('Invalid request stack.', 1_659_141_555);
        }

        return $requestStack->getSession();
    }

    /**
     * @throws UnexpectedValueException
     */
    private function getSitepackageConfig(): SitepackageDto
    {
        $configuration = $this->getSession()->get('sitepackage_config');

        if (!($configuration instanceof SitepackageDto)) {
            $this->addFlash(
                'error',
                'Whoops, we could not find the package configuration. Please submit the configuration again.'
            );

            throw new UnexpectedValueException('Invalid or missing configuration.', 1_638_038_672);
        }

        return $configuration;
    }

    private function isAdvancedSitepackageConfig(): bool
    {
        return $this->getSession()->get('sitepackage_config_advanced') === true;
    }

    private function setSitepackageConfig(SitepackageDto $configuration, bool $advanced): void
    {
        $this->getSession()->set('sitepackage_config', $configuration);
        $this->getSession()->set('sitepackage_config_advanced', $advanced);
    }

    /**
     * @throws UnexpectedValueException
     */
    private function getSitepackage(): Sitepackage
    {
        $sitepackage = $this->getSession()->get('sitepackage');

        if (!($sitepackage instanceof Sitepackage)) {
            $this->addFlash(
                'error',
                'Whoops, we could not find the Sitepackage. Please submit the configuration again.'
            );

            throw new UnexpectedValueException('Invalid or missing Sitepackage.', 1_638_038_673);
        }

        return $sitepackage;
    }

    private function setSitepackage(Sitepackage $sitepackage): void
    {
        $this->getSession()->set('sitepackage', $sitepackage);
    }

    private function getSitepackageError(): string
    {
        return is_string($error = $this->getSession()->get('sitepackage_error')) ? $error : '';
    }

    private function setSitepackageError(string $error): void
    {
        $this->getSession()->set('sitepackage_error', $error);
    }
}
