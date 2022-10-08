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

use DateTimeImmutable;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Process\Process;
use RuntimeException;

/**
 * @codeCoverageIgnore
 */
class SatisBuildCommand extends Command
{
    /**
     * @var string|null
     */
    protected static $defaultName = 'satis:build';

    protected function configure(): void
    {
        $this->setDescription('Build Composer Repository. By default changed extension since yesterday are rebuilt.')
            ->setDefinition([
                new InputArgument(
                    'output-dir',
                    InputArgument::OPTIONAL,
                    'Location where to output built files',
                    __DIR__ . '/../../public/satis'
                ),
                new InputArgument(
                    'file',
                    InputArgument::OPTIONAL,
                    'Json file to create and use',
                    __DIR__ . '/../../var/satis/satis.json'
                ),
                new InputArgument(
                    'repository-dir',
                    InputArgument::OPTIONAL,
                    'Location where to output and search for repository files',
                    __DIR__ . '/../../var/satis'
                ),
                new InputOption(
                    'all',
                    null,
                    InputOption::VALUE_NONE,
                    'Build all repositories'
                ),
                new InputOption(
                    'auto',
                    null,
                    InputOption::VALUE_NONE,
                    'Build all repositories automatically'
                ),
            ]);
    }

    /**
     * @return int 0 if everything went fine, or an exit code
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $timeStart = microtime(true);

        /** @var string $repositoryDir */
        $repositoryDir = $input->getArgument('repository-dir');
        /** @var string $configFile */
        $configFile = $input->getArgument('file');
        /** @var string $outputDir */
        $outputDir = $input->getArgument('output-dir');
        /** @var bool $buildAll */
        $buildAll = $input->getOption('all');
        /** @var bool $autoBuildAll */
        $autoBuildAll = $input->getOption('auto');

        if ($autoBuildAll && (new DateTimeImmutable())->format('G') === '3') {
            $buildAll = \true;
        }

        if (!($application = $this->getApplication()) instanceof Application) {
            throw new RuntimeException('Application is not initialized.', 1_660_125_012);
        }

        // Run extensions:ter:json:create
        $command = $application->find('extensions:ter:json:create');

        $arguments = [
            'command' => 'extensions:ter:json:create',
            'output-dir' => $repositoryDir,
        ];

        $commandInput = new ArrayInput($arguments);
        $output->writeln(sprintf('Running "%s"...', $arguments['command']));
        $returnCode = $command->run($commandInput, $output);

        // Copy Aliases
        if ($returnCode === 0) {
            $output->writeln('Copy aliases.json...');
            copy(realpath($repositoryDir) . '/aliases.json', realpath($outputDir) . '/aliases.json');
        }

        // Run satis:json:create
        if ($returnCode === 0) {
            $command = $application->find('satis:json:create');

            $arguments = [
                'command' => 'satis:json:create',
                'file' => $configFile,
                'repository-dir' => $repositoryDir,
            ];

            $commandInput = new ArrayInput($arguments);
            $output->writeln(sprintf('Running "%s"...', $arguments['command']));
            $returnCode = $command->run($commandInput, $output);
        }

        // Run satis build
        if ($returnCode === 0) {
            /*
            $application = new \Composer\Satis\Console\Application();
            $application->setAutoExit(false);

            $arguments = [
                'command' => 'build',
                'file' => $configFile,
                'output-dir' => $outputDir,
                '--skip-errors' => true,
            ];

            if (!$buildAll) {
                $arguments += [
                    '--repository-url' => ['file://' . realpath($repositoryDir) . '/packages-TYPO3Extensions-new.json'],
                ];
            }

            $commandInput = new ArrayInput($arguments);
            $output->writeln(sprintf('Running "%s" (%s)...', $arguments['command'], $buildAll ? 'full' : 'new'));
            $returnCode = $application->run($commandInput, $output);
            */

            $arguments = [
                'satis/bin/satis',
                'build',
                $configFile,
                $outputDir,
                '--skip-errors',
            ];

            if (!$buildAll) {
                $arguments += [
                    '--repository-url=' . 'file://' . realpath($repositoryDir) . '/packages-TYPO3Extensions-new.json',
                ];
            }

            $process = new Process(
                $arguments,
                $this->getProjectDir(),
                \null,
                \null,
                \null
            );

            $output->writeln(sprintf('Running "satis build" (%s)...', $buildAll ? 'full' : 'new'));
            if (($returnCode = $process->run()) !== 0) {
                $output->writeln(sprintf(
                    "Error while running Satis.\n\nOutput:\n%s\n\nError Output:\n%s\n\Command:\n%s\n\nProject Dir:\n%s",
                    $process->getOutput(),
                    $process->getErrorOutput(),
                    $process->getCommandLine(),
                    $this->getProjectDir()
                ));
            }
        }

        // Output processing duration
        $timeEnd = microtime(true);
        $time = $timeEnd - $timeStart;

        $output->writeln(sprintf('Finished in %f seconds', $time));

        return $returnCode;
    }

    private function getProjectDir(): string
    {
        return __DIR__ . '/../..';
    }
}
