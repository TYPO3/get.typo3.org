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

namespace App\Command;

use App\Service\ComposerPackagesService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class CoreExtensionsRedirectsCommand extends Command
{
    /**
     * List of packages with existing release on TER to be excluded from the redirects.
     *
     * @var array<int, string>
     */
    private const PACKAGES_EXCLUDED = [
        'typo3/cms-feedit',
        'typo3/cms-func',
        'typo3/cms-rsaauth',
        'typo3/cms-sys-action',
        'typo3/cms-taskcenter',
    ];

    /**
     * @var string|null
     */
    protected static $defaultName = 'app:core-extensions-redirects';

    public function __construct(private readonly ComposerPackagesService $composerPackagesService)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setDescription('Creates a list of redirects to Packagist for TYPO3 Core Extensions.');
        $this->setHelp('This command creates a list of redirects to Packagist for all TYPO3 Core Extensions.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $packages = $this->composerPackagesService->getCorePackages();

        $output->writeln('Creating Nginx redirect config...');
        $output->writeln('');
        $output->writeln('# Begin temporary redirect of core extensions to Packagist');

        foreach ($packages as $package) {
            if (in_array($package, self::PACKAGES_EXCLUDED, true)) {
                continue;
            }

            $extensionName = str_replace('-', '_', preg_replace('#\w+\/\w+-(\w+)#', '$1', $package) ?? '');

            if ($extensionName === '') {
                continue;
            }

            $output->writeln(sprintf(
                'rewrite ^/extension/%s/?$ https://packagist.org/packages/%s break;',
                $extensionName,
                $package
            ));
        }

        $output->writeln('# End temporary redirect of core extensions to Packagist');
        $output->writeln('');

        return self::SUCCESS;
    }
}
