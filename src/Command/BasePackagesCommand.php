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

use App\Entity\SitePackage\BasePackageVersion;
use App\Service\SitePackageBaseService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class BasePackagesCommand extends Command
{
    protected static $defaultName = 'app:sitepackagegenerator:basepackage:list';

    public function __construct(private readonly SitePackageBaseService $sitePackageBaseService)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setDescription('Display all available BasePackages.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $packages = $this->sitePackageBaseService->getPackages();

        $rows = [];
        foreach ($packages as $package) {
            $rows[] = [
                $package->getIdentifier(),
                $package->getLabel(),
                implode(', ', array_map(static fn(BasePackageVersion $version): float => $version->getVersion(), $package->getVersions()->toArray())),
            ];
        }

        $table = new Table($output);
        $table->setHeaders(['Identifier', 'Label', 'Versions']);
        $table->setRows($rows);
        $table->render();

        return self::SUCCESS;
    }
}
