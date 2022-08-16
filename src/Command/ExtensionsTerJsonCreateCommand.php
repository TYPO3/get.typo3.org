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

use Composer\Semver\Semver;
use Composer\Semver\VersionParser;
use DateTimeImmutable;
use GuzzleHttp\Client;
use RuntimeException;
use SimpleXMLElement;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use function is_array;
use function is_string;

/**
 * @codeCoverageIgnore
 */
class ExtensionsTerJsonCreateCommand extends Command
{
    /**
     * @var string|null
     */
    protected static $defaultName = 'extensions:ter:json:create';

    /**
     * @var string
     */
    final public const TER_XML_PATH = 'https://extensions.typo3.org/fileadmin/ter/extensions.xml.gz';

    /**
     * @var string
     */
    final public const COMPOSER_NAMES_URL = 'https://extensions.typo3.org/?eID=ter_fe2:extension&action=findAllWithValidComposerName';

    /**
     * @var string
     */
    final public const TER_HOME = 'https://extensions.typo3.org/extension/%s/';

    /**
     * @var string
     */
    final public const PACKAGE_NAME_PREFIX = 'typo3-ter/';

    /**
     * @var string
     */
    final public const PACKAGE_TYPE = 'typo3-cms-extension';

    /**
     * @var string
     */
    final public const JSON_FILE = 'packages-TYPO3Extensions-{type}.json';

    /**
     * @var string
     */
    private const ALIASES_FILE = 'aliases.json';

    /**
     * @var array<int, SimpleXMLElement>
     */
    protected array $extensions = [];

    /**
     * @var array<string, SimpleXMLElement>
     */
    protected array $extensionKeys = [];

    /**
     * Extensions in this array are marked as abandoned when users install
     * them with typo3-ter/ext-key. This array is autocreated with the
     * information fetched from TER. Extensions providing a composer.json
     * will be listed here and as result the author's version will be
     * prefered over the package created here.
     *
     * Do not create pull requests for this list, simply provide a
     * composer.json and register the composer name at TER for your extension.
     *
     * @var array<string, string>
     */
    protected static $abandonedExtensionKeys = [
      'news' => 'georgringer/news',
      'typo3_console' => 'helhum/typo3-console',
    ];

    /**
     * Core extensions.
     *
     * @var array<string, string>
     */
    protected static $coreExtensions = [
        'about' => 'typo3/cms-about',
        'adminpanel' => 'typo3/cms-adminpanel',
        'backend' => 'typo3/cms-backend',
        'belog' => 'typo3/cms-belog',
        'beuser' => 'typo3/cms-beuser',
        'context_help' => 'typo3/cms-context-help',
        'core' => 'typo3/cms-core',
        'cshmanual' => 'typo3/cms-cshmanual',
        'css_styled_content' => 'typo3/cms-css-styled-content',
        'documentation' => 'typo3/cms-documentation',
        'dashboard' => 'typo3/cms-dashboard',
        'extbase' => 'typo3/cms-extbase',
        'extensionmanager' => 'typo3/cms-extensionmanager',
        'feedit' => 'typo3/cms-feedit',
        'felogin' => 'typo3/cms-felogin',
        'filelist' => 'typo3/cms-filelist',
        'filemetadata' => 'typo3/cms-filemetadata',
        'fluid' => 'typo3/cms-fluid',
        'fluid_styled_content' => 'typo3/cms-fluid-styled-content',
        'form' => 'typo3/cms-form',
        'frontend' => 'typo3/cms-frontend',
        'func' => 'typo3/cms-func',
        'impexp' => 'typo3/cms-impexp',
        'indexed_search' => 'typo3/cms-indexed-search',
        'info' => 'typo3/cms-info',
        'info_pagetsconfig' => 'typo3/cms-info-pagetsconfig',
        'install' => 'typo3/cms-install',
        'lang' => 'typo3/cms-lang',
        'linkvalidator' => 'typo3/cms-linkvalidator',
        'lowlevel' => 'typo3/cms-lowlevel',
        'opendocs' => 'typo3/cms-opendocs',
        'recordlist' => 'typo3/cms-recordlist',
        'recycler' => 'typo3/cms-recycler',
        'redirects' => 'typo3/cms-redirects',
        'reports' => 'typo3/cms-reports',
        'rsaauth' => 'typo3/cms-rsaauth',
        'rte_ckeditor' => 'typo3/cms-rte-ckeditor',
        'saltedpasswords' => 'typo3/cms-saltedpasswords',
        'scheduler' => 'typo3/cms-scheduler',
        'seo' => 'typo3/cms-seo',
        'setup' => 'typo3/cms-setup',
        'sv' => 'typo3/cms-sv',
        'sys_action' => 'typo3/cms-sys-action',
        'sys_note' => 'typo3/cms-sys-note',
        't3editor' => 'typo3/cms-t3editor',
        'taskcenter' => 'typo3/cms-taskcenter',
        'tstemplate' => 'typo3/cms-tstemplate',
        'version' => 'typo3/cms-version',
        'viewpage' => 'typo3/cms-viewpage',
        'wizard_crpages' => 'typo3/cms-wizard-crpages',
        'wizard_sortpages' => 'typo3/cms-wizard-sortpages',
        'workspaces' => 'typo3/cms-workspaces',
      ];

    /**
     * Location where to output built files.
     *
     * @var string
     */
    protected $outputDir;

    private static ?VersionParser $versionParser = null;

    protected function configure(): void
    {
        $this->setDescription('Creates packages.json files from ' . static::TER_XML_PATH)
            ->setDefinition([
                new InputArgument(
                    'output-dir',
                    InputArgument::OPTIONAL,
                    'Location where to output built files',
                    __DIR__ . '/../../var/satis'
                ),
            ]);
    }

    /**
     * @return int 0 if everything went fine, or an exit code
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        /** @var string $outputDir */
        $outputDir = $input->getArgument('output-dir');
        if (($outputPath = realpath($outputDir)) === false) {
            throw new RuntimeException(\sprintf('Path "%s" not found.', $outputDir), 1_660_250_640);
        }

        $this->outputDir = $outputPath;

        $this->fetchComposerNames();
        $this->saveAliases();
        $extensions = $this->getExtensions();
        $packages = $this->getPackages($extensions);

        foreach ($packages as $type => $content) {
            $output->writeln(sprintf('Successfully created "%s"', $this->save($type, ['packages' => $content])));
        }

        return 0;
    }

    /**
     * @param array<int, string> $extensionKeys
     */
    protected function registerComposerAlias(array $extensionKeys, string $composerName): void
    {
        foreach ($extensionKeys as $extKey) {
            if (!isset(self::$abandonedExtensionKeys[$extKey])) {
                self::$abandonedExtensionKeys[$extKey] = $composerName;
            }
        }
    }

    protected function fetchComposerNames(): void
    {
        $client = new Client();
        $response = $client->request(
            'GET',
            static::COMPOSER_NAMES_URL,
            [
                'connect_timeout' => 2,
                'allow_redirects' => false,
            ]
        );
        $responseBody = $response->getBody()->getContents();

        if (!is_array($json = \json_decode($responseBody, true, 512, JSON_THROW_ON_ERROR))) {
            throw new RuntimeException('Invalid response.', 1_660_251_247);
        }

        if ($json['meta'] !== null) {
            throw new RuntimeException($json['meta']['error']);
        }

        if (is_array($json['data'])) {
            // Assign core extensions
            foreach (self::$coreExtensions as $extKey => $composerName) {
                $json['data'][$extKey]['composer_name'] = $composerName;
            }

            foreach ($json['data'] as $extKey => $settings) {
                if (!is_string($extKey)) {
                    throw new RuntimeException('Invalid extension key.', 1_660_251_470);
                }

                if (!is_string($settings['composer_name'])) {
                    throw new RuntimeException('Invalid package name.', 1_660_251_471);
                }

                self::$abandonedExtensionKeys[$extKey] = $settings['composer_name'];

                if (str_contains($extKey, '_')) {
                    $this->registerComposerAlias([
                        \str_replace('_', '-', $extKey),
                        \str_replace('_', '', $extKey),
                    ], $settings['composer_name']);
                }
            }

            ksort(self::$abandonedExtensionKeys, SORT_STRING);
        }
    }

    protected function saveAliases(): string
    {
        $fileName = $this->outputDir . '/' . self::ALIASES_FILE;
        file_put_contents($fileName, json_encode(self::$abandonedExtensionKeys, JSON_THROW_ON_ERROR));

        return $fileName;
    }

    /**
     * @return SimpleXMLElement[]
     */
    protected function getExtensions(): array
    {
        if ($this->extensions === []) {
            $client = new Client();
            $response = $client->request(
                'GET',
                static::TER_XML_PATH,
                [
                    'connect_timeout' => 2,
                    'allow_redirects' => false,
                ]
            );
            if (($extensionsXml = gzdecode($response->getBody()->getContents())) === false) {
                throw new RuntimeException('Invalid response.', 1_660_251_597);
            }

            $extensionsObject = new SimpleXMLElement($extensionsXml);
            $this->extensions = $extensionsObject->xpath('/extensions/extension');
            $this->initExtensionKeys($this->extensions);
        }

        return $this->extensions;
    }

    /**
     * @param SimpleXMLElement[] $extensions
     */
    protected function initExtensionKeys(array $extensions): void
    {
        foreach ($extensions as $extension) {
            if ($extension['extensionkey'] === null) {
                continue;
            }

            $this->extensionKeys[(string)$extension['extensionkey']] = $extension['extensionkey'];
        }
    }

    /**
     * @param SimpleXMLElement[] $extensions
     *
     * @return array<string, array<int|string, array<int|string, mixed[]>&mixed[]>&mixed[]>
     */
    protected function getPackages(array $extensions): array
    {
        $packages = [];
        //$quarter = mktime(0, 0, 0, floor((date('m') - 1) / 3) * 3 + 1, 1, date('Y'));
        $dateTimeToday = new DateTimeImmutable();
        $new = $dateTimeToday->modify('yesterday')->getTimestamp();

        foreach ($extensions as $extension) {
            foreach ($extension->version as $version) {
                if (preg_match('#^[\d]+\.[\d]+\.[\d]+$#', (string)$version['version']) !== 1) {
                    // Ignore extensions with invalid version numbers
                    //echo 'Extension ' . (string) $extension['extensionkey'] . ' has invalid version number "' . (string) $version['version'] . '"' . PHP_EOL;
                    continue;
                }

                $package = $this->getPackageArray($extension, $version);

                if (!isset($package['require']['typo3/cms-core'])) {
                    // Ignore extensions with missing dependency to TYPO3
                    continue;
                }

                if ($package['require']['typo3/cms-core'] === '*') {
                    // Ignore extensions with "any" dependency to TYPO3
                    continue;
                }

                if (self::$versionParser === null) {
                    self::$versionParser = new VersionParser();
                }

                $versionParser = self::$versionParser;
                $parsedConstraints = $versionParser->parseConstraints($package['require']['typo3/cms-core']);

                if (
                    Semver::satisfies($parsedConstraints->getLowerBound()->getVersion(), '<8.7')
                    && (
                        $parsedConstraints->getUpperBound()->isPositiveInfinity()
                        || $parsedConstraints->getUpperBound()->getVersion()
                        === $parsedConstraints->getLowerBound()->getVersion()
                        || Semver::satisfies($parsedConstraints->getUpperBound()->getVersion(), '<8.7')
                    )
                ) {
                    // Ignore extensions with dependency to TYPO3 lower than 8.7
                    continue;
                }

                //if ($quarter < (int)$version->lastuploaddate) {
                if ($new < (int)$version->lastuploaddate) {
                    //$packages['quarter'][$package['name']][$package['version']] = $package;
                    $packages['new'][$package['name']][$package['version']] = $package;
                } else {
                    $packages['archive'][$package['name']][$package['version']] = $package;
                }
            }
        }

        return $packages;
    }

    /**
     * @return array{
     *   name: string,
     *   description: string,
     *   version: string,
     *   type: string,
     *   homepage: string,
     *   time: string,
     *   authors: array<string, string>,
     *   require: array<string, string>,
     *   conflict: array<string, string>,
     *   replace: array<string, string>,
     *   suggest: array<string, string>,
     *   autoload: array<string, array<int, string>>,
     *   extra: array{'typo3/cms': array{extension-key: string}},
     *   dist: array<string, string>
     * }|array{}
     */
    protected function getPackageArray(SimpleXMLElement $extension, SimpleXMLElement $version): array
    {
        $extKey = (string)$extension['extensionkey'];
        $autoload = [
            'classmap' => [''],
            'exclude-from-classmap' => [
                'Migrations',
                'Tests',
                'tests',
                'class.ext_update.php',
            ],
        ];
        if ($version->composerinfo !== null) {
            $composerInfo = json_decode((string)$version->composerinfo, true, 512);
            if (is_array($composerInfo) && is_array($composerInfo['autoload'] ?? null)) {
                $autoload = $composerInfo['autoload'];
            }
        }

        $packageArray = [
            'name' => $this->getPackageName($extKey),
            'description' => (string)$version->description,
            'version' => (string)$version['version'],
            'type' => self::PACKAGE_TYPE,
            'time' => date('Y-m-d H:i:s', (int)$version->lastuploaddate),
            'homepage' => sprintf(self::TER_HOME, $extKey),
            'authors' => [
                [
                    'name' => (string)$version->authorname,
                    'email' => (string)$version->authoremail,
                    'company' => (string)$version->authorcompany,
                    'username' => (string)$version->ownerusername,
                ],
            ],
            'dist' => [
                'url' => 'https://extensions.typo3.org/extension/download/' . $extKey . '/' . $version['version'] . '/zip/',
                'type' => 'zip',
            ],
            'autoload' => $autoload,
            'extra' => [
                'typo3/cms' => [
                    'extension-key' => $extKey,
                ],
            ],
        ];

        $packageArray = array_merge(
            $packageArray,
            $this->evaluateExtensionState($extKey, (int)$version->reviewstate, (string)$version->ownerusername)
        );

        $dependencies = unserialize((string)$version->dependencies);

        if (!is_array($dependencies)) {
            // Ignore extensions with invalid dependencies
            return [];
        }

        $packageArray = array_merge(
            $packageArray,
            $this->getPackageLinks($dependencies)
        );

        $alternativeName = self::PACKAGE_NAME_PREFIX . $extKey;
        if ($alternativeName !== $packageArray['name']) {
            $packageArray['replace'] = [$alternativeName => 'self.version'];
        }

        return $packageArray;
    }

    /**
     * @param array<string, array<string, string>> $dependencies
     *
     * @return array<string, array<string, string>>
     */
    protected function getPackageLinks(array $dependencies): array
    {
        $packageLinks = [];
        foreach ($dependencies as $dependency) {
            $linkType = '';
            switch ($dependency['kind']) {
                case 'depends':
                    $linkType = 'require';
                    break;
                case 'conflicts':
                    $linkType = 'conflict';
                    break;
                case 'suggests':
                    $linkType = 'suggest';
                    break;
                default:
                    continue 2;
            }

            if (
                $dependency['extensionKey'] !== 'php'
                && $dependency['extensionKey'] !== 'typo3'
                && !isset($this->extensionKeys[$dependency['extensionKey']])
            ) {
                continue;
            }

            $requiredVersion = explode('-', $dependency['versionRange']);
            $minVersion = trim($requiredVersion[0]);
            $maxVersion = (isset($requiredVersion[1]) ? trim($requiredVersion[1]) : '');

            if (
                (
                    ($minVersion === '' || $minVersion === '0.0.0' || $minVersion === '*')
                        && ($maxVersion === '' || $maxVersion === '0.0.0' || $maxVersion === '*')
                )
                || preg_match('#^([\d]+\.[\d]+\.[\d]+)*(\-)*([\d]+\.[\d]+\.[\d]+)*$#', $dependency['versionRange']) !== 1
            ) {
                $versionConstraint = '*';
            } elseif ($maxVersion === '0.0.0' || $maxVersion === '') {
                $versionConstraint = '>= ' . $minVersion;
            } elseif ($minVersion === '' || $minVersion === '0.0.0') {
                $versionConstraint = '<= ' . $maxVersion;
            } elseif ($minVersion === $maxVersion) {
                $versionConstraint = $minVersion;
            } else {
                $versionConstraint = '>= ' . $minVersion . ', <= ' . $maxVersion;
            }

            $packageLinks[$linkType][$this->getPackageName($dependency['extensionKey'])] = $versionConstraint;
        }

        return $packageLinks;
    }

    /**
     * @param array<mixed> $content
     */
    protected function save(string $type, array $content): string
    {
        $fileName = $this->getJsonFilePath($type);
        file_put_contents($fileName, json_encode($content, JSON_THROW_ON_ERROR));

        return $fileName;
    }

    protected function getJsonFilePath(string $type): string
    {
        $jsonFilePath = $this->outputDir . '/' . self::JSON_FILE;

        return str_replace('{type}', $type, $jsonFilePath);
    }

    protected function getPackageName(string $extensionKey): string
    {
        return match ($extensionKey) {
            'php' => 'php',
            'typo3' => 'typo3/cms-core',
            default => self::PACKAGE_NAME_PREFIX . str_replace('_', '-', $extensionKey),
        };
    }

    /**
     * @return array{abandoned: bool|string}
     */
    protected function evaluateExtensionState(mixed $extKey, int $reviewState, mixed $owner): array
    {
        $packageArray = [];

        if ($reviewState === -1) {
            $packageArray['extra'] = [
                'typo3/ter' => [
                    'review-state' => 'insecure',
                ],
            ];
        }

        if ($reviewState === -2) {
            $packageArray['extra'] = [
                'typo3/ter' => [
                    'review-state' => 'outdated',
                ],
            ];
        }

        if ($owner === 'abandoned_extensions' || $owner === 'abandon') {
            $packageArray['abandoned'] = true;
        }

        if (isset(self::$abandonedExtensionKeys[$extKey])) {
            $packageArray['abandoned'] = self::$abandonedExtensionKeys[$extKey];
        } else {
            // Abandon all extensions because this repository is deprecated at all
            $packageArray['abandoned'] = true;
        }

        return $packageArray;
    }
}
