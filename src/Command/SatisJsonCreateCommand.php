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

use App\Model\SatisJson;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use RuntimeException;

/**
 * @codeCoverageIgnore
 */
class SatisJsonCreateCommand extends Command
{
    /**
     * @var string|null
     */
    protected static $defaultName = 'satis:json:create';

    protected function configure(): void
    {
        $this->setDescription('Create a satis.json')
            ->setDefinition([
                new InputArgument(
                    'file',
                    InputArgument::OPTIONAL,
                    'Json file to create',
                    __DIR__ . '/../../var/satis/satis.json'
                ),
                new InputArgument(
                    'repository-dir',
                    InputArgument::OPTIONAL,
                    'Location where to search for repository files',
                    __DIR__ . '/../../var/satis'
                ),
            ]);
    }

    /**
     * @return int 0 if everything went fine, or an exit code
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        /** @var string $configFile */
        $configFile = $input->getArgument('file');
        /** @var string $repositoryDir */
        $repositoryDir = $input->getArgument('repository-dir');
        $repositoryDir = realpath($repositoryDir);

        if (!file_exists($configFile)) {
            touch($configFile);
        }

        if (!is_writable($configFile)) {
            throw new RuntimeException(sprintf('File "%s" is not writable', $configFile), 1_438_441_994);
        }

        $repositories = [
            [
                'type' => 'composer',
                'url' => 'file://' . $repositoryDir . '/packages-TYPO3Extensions-archive.json',
            ],
            [
                'type' => 'composer',
                'url' => 'file://' . $repositoryDir . '/packages-TYPO3Extensions-new.json',
            ],
        ];

        $satis = new SatisJson('typo3/cms-extensions');
        $satis->setHomepage('https://composer.typo3.org');
        $satis->setRepositories($repositories);
        $satis->requireAll();
        $satis->useProviders();

        if (file_put_contents($configFile, (string)$satis) === false) {
            throw new RuntimeException(sprintf('File "%s" could not be written, reason unknown', $configFile), 1_438_442_238);
        }

        $output->writeln(sprintf('Successfully created "%s" with repository dir "%s"', $configFile, $repositoryDir));

        return 0;
    }
}
