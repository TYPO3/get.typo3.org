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

namespace App\Service;

use App\Entity\MajorVersion;
use App\Entity\Release;
use App\Repository\MajorVersionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;

class ComposerPackagesService
{
    /**
     * @var string
     */
    public const CMS_VERSIONS_GROUP = 'TYPO3 CMS Versions';

    /**
     * @var string
     */
    public const SPECIAL_VERSIONS_GROUP = 'Special Version Selectors';

    /**
     * @var array
     */
    private const PACKAGES = [
        [
            'name'        => 'typo3/cms-about',
            'description' => 'Shows info about TYPO3, installed extensions and a separate module for available modules.',
            'versions'    => [
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-adminpanel',
            'description' => 'The TYPO3 admin panel provides a panel with additional functionality in the frontend (Debugging, Caching, Preview...)',
            'versions' => [
                11,
                10,
                9,
            ]
        ],
        [
            'name'        => 'typo3/cms-backend',
            'description' => 'Classes for the TYPO3 backend.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-belog',
            'description' => 'Displays backend log, both per page and system wide. Available as the module Tools>Log (system wide overview) and Web>Info/Log (page relative overview).',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-beuser',
            'description' => 'Backend user administration and overview. Allows you to compare the settings of users and verify their permissions and see who is online.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-context-help',
            'description' => 'Provides context sensitive help to tables, fields and modules in the system languages.',
            'versions' => [
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-core',
            'description' => 'The core library of TYPO3.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-cshmanual',
            'description' => 'Shows TYPO3 inline user manual.',
            'versions' => [
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-css-styled-content',
            'description' => 'Contains configuration for CSS content-rendering of the table "tt_content". This is meant as a modern substitute for the classic "content (default)" template which was based more on <font>-tags, while this is pure CSS.',
            'versions' => [
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-dashboard',
            'description' => 'Dashboard for TYPO3.',
            'versions' => [
                11,
                10,
            ]
        ],
        [
            'name'        => 'typo3/cms-documentation',
            'description' => 'Backend module for TYPO3 to list and show documentation of loaded extensions as well as custom documents.',
            'versions' => [
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-extbase',
            'description' => 'A framework to build extensions for TYPO3 CMS.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-extensionmanager',
            'description' => 'TYPO3 Extension Manager.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-feedit',
            'description' => 'Frontend editing for TYPO3.',
            'versions' => [
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-felogin',
            'description' => 'A template-based plugin to log in Website Users in the Frontend.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-filelist',
            'description' => 'Listing of files in the directory.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-filemetadata',
            'description' => 'Add advanced metadata to File.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-fluid',
            'description' => 'Fluid is a next-generation templating engine which makes the life of extension authors a lot easier!',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-fluid-styled-content',
            'description' => 'A set of common content elements based on Fluid for Frontend output.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-form',
            'description' => 'Form Library, Plugin and Editor.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-frontend',
            'description' => 'Classes for the frontend of TYPO3.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-func',
            'description' => 'Advanced functions.',
            'versions' => [
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-impexp',
            'description' => 'Import and Export of records from TYPO3 in a custom serialized format (.T3D) for data exchange with other TYPO3 systems.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-indexed-search',
            'description' => 'Indexed Search Engine for TYPO3 pages, PDF-files, Word-files, HTML and text files. Provides a backend module for statistics of the indexer and a frontend plugin. Documentation can be found in the extension "doc_indexed_search".',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-info',
            'description' => 'Shows various infos.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-info-pagetsconfig',
            'description' => 'Displays the compiled Page TSconfig values relative to a page.',
            'versions' => [
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-install',
            'description' => 'The Install Tool mounted as the module Tools>Install in TYPO3.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-lang',
            'description' => 'Contains all the core language labels in a set of files mostly of the "locallang" format. This extension is always required in a TYPO3 install.',
            'versions' => [
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-linkvalidator',
            'description' => 'Link Validator checks the links in your website for validity. It can validate all kinds of links: internal, external and file links. Scheduler is supported to run Link Validator via Cron including the option to send status mails, if broken links were detected.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-lowlevel',
            'description' => "Enables the 'Config' and 'DB Check' modules for technical analysis of the system. This includes raw database search, checking relations, counting pages and records etc.",
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-opendocs',
            'description' => 'Shows opened documents by the user.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-recordlist',
            'description' => 'List of database-records.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-recycler',
            'description' => 'The recycler offers the possibility to restore deleted records or remove them from the database permanently. These actions can be applied to a single record, multiple records, and recursively to child records (ex. restoring a page can restore all content elements on that page). Filtering by page and by table provides a quick overview of deleted records before taking action on them.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-redirects',
            'description' => 'Custom redirects in TYPO3.',
            'versions' => [
                11,
                10,
                9,
            ]
        ],
        [
            'name'        => 'typo3/cms-reports',
            'description' => 'The reports module groups several system reports.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-rsaauth',
            'description' => 'Contains a service to authenticate TYPO3 BE and FE users using private/public key encryption of passwords.',
            'versions' => [
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-rte-ckeditor',
            'description' => 'Integration of CKEditor as Rich Text Editor.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-saltedpasswords',
            'description' => 'Uses a password hashing framework for storing passwords. Integrates into the system extension "felogin". Use SSL or rsaauth to secure datatransfer! Please read the manual first!',
            'versions' => [
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-scheduler',
            'description' => "The TYPO3 Scheduler let's you register tasks to happen at a specific time.",
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-seo',
            'description' => 'SEO features for TYPO3.',
            'versions' => [
                11,
                10,
                9,
            ]
        ],
        [
            'name'        => 'typo3/cms-setup',
            'description' => 'Allows users to edit a limited set of options for their user profile, eg. preferred language and their name and email address.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-sv',
            'description' => 'The core/default services. This includes the default authentication services for now.',
            'versions' => [
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-sys-action',
            'description' => "Actions are 'programmed' admin tasks which can be performed by selected regular users from the Task Center. An action could be creation of backend users, fixed SQL SELECT queries, listing of records, direct edit access to selected records etc.",
            'versions' => [
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-sys-note',
            'description' => 'Records with messages which can be placed on any page and contain instructions or other information related to a page or section.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-t3editor',
            'description' => 'JavaScript-driven editor with syntax highlighting and codecompletion. Based on CodeMirror.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-taskcenter',
            'description' => 'The Task Center is the framework for a host of other extensions.',
            'versions' => [
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-tstemplate',
            'description' => 'Framework for management of TypoScript template records for the CMS frontend.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-version',
            'description' => 'Backend Interface for management of the versioning API.',
            'versions' => [
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-viewpage',
            'description' => 'Shows the frontend webpage inside the backend frameset.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-wizard-crpages',
            'description' => 'A little utility to create many empty pages in one batch. Great for making a quick page structure.',
            'versions' => [
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-wizard-sortpages',
            'description' => 'A little utility to rearrange the sorting order of pages in the backend.',
            'versions' => [
                8,
            ]
        ],
        [
            'name'        => 'typo3/cms-workspaces',
            'description' => 'Adds workspaces functionality with custom stages to TYPO3.',
            'versions' => [
                11,
                10,
                9,
                8,
            ]
        ],
    ];

    /**
     * @var array
     */
    private const BUNDLES = [
        'typo3/full'      => [
            'typo3/cms-about',
            'typo3/cms-adminpanel',
            'typo3/cms-backend',
            'typo3/cms-belog',
            'typo3/cms-beuser',
            'typo3/cms-context-help',
            'typo3/cms-core',
            'typo3/cms-cshmanual',
            'typo3/cms-css-styled-content',
            'typo3/cms-documentation',
            'typo3/cms-dashboard',
            'typo3/cms-extbase',
            'typo3/cms-extensionmanager',
            'typo3/cms-feedit',
            'typo3/cms-felogin',
            'typo3/cms-filelist',
            'typo3/cms-filemetadata',
            'typo3/cms-fluid',
            'typo3/cms-fluid-styled-content',
            'typo3/cms-form',
            'typo3/cms-frontend',
            'typo3/cms-func',
            'typo3/cms-impexp',
            'typo3/cms-indexed-search',
            'typo3/cms-info',
            'typo3/cms-info-pagetsconfig',
            'typo3/cms-install',
            'typo3/cms-lang',
            'typo3/cms-linkvalidator',
            'typo3/cms-lowlevel',
            'typo3/cms-opendocs',
            'typo3/cms-recordlist',
            'typo3/cms-recycler',
            'typo3/cms-redirects',
            'typo3/cms-reports',
            'typo3/cms-rsaauth',
            'typo3/cms-rte-ckeditor',
            'typo3/cms-saltedpasswords',
            'typo3/cms-scheduler',
            'typo3/cms-seo',
            'typo3/cms-setup',
            'typo3/cms-sv',
            'typo3/cms-sys-action',
            'typo3/cms-sys-note',
            'typo3/cms-t3editor',
            'typo3/cms-taskcenter',
            'typo3/cms-tstemplate',
            'typo3/cms-version',
            'typo3/cms-viewpage',
            'typo3/cms-wizard-crpages',
            'typo3/cms-wizard-sortpages',
            'typo3/cms-workspaces',
        ],
        'typo3/minimal'   => [
            'typo3/cms-backend',
            'typo3/cms-core',
            'typo3/cms-extbase',
            'typo3/cms-extensionmanager',
            'typo3/cms-filelist',
            'typo3/cms-fluid',
            'typo3/cms-frontend',
            'typo3/cms-install',
            'typo3/cms-recordlist',
        ],
        'typo3/default'   => [
            'typo3/cms-about',
            'typo3/cms-adminpanel',
            'typo3/cms-backend',
            'typo3/cms-belog',
            'typo3/cms-beuser',
            'typo3/cms-core',
            'typo3/cms-dashboard',
            'typo3/cms-extbase',
            'typo3/cms-extensionmanager',
            'typo3/cms-filelist',
            'typo3/cms-fluid',
            'typo3/cms-fluid-styled-content',
            'typo3/cms-form',
            'typo3/cms-frontend',
            'typo3/cms-impexp',
            'typo3/cms-info',
            'typo3/cms-install',
            'typo3/cms-lowlevel',
            'typo3/cms-opendocs',
            'typo3/cms-recordlist',
            'typo3/cms-recycler',
            'typo3/cms-redirects',
            'typo3/cms-reports',
            'typo3/cms-rte-ckeditor',
            'typo3/cms-scheduler',
            'typo3/cms-seo',
            'typo3/cms-setup',
            'typo3/cms-tstemplate',
            'typo3/cms-viewpage',
        ]
    ];

    /**
     * @var array
     */
    private const SPECIAL_VERSIONS = [
        [
            'name' => 'No version specified (installs latest version)',
            'value' => '',
        ],        [
            'name' => 'Any version `*` (installs latest compatible version, not recommended, use with caution)',
            'value' => '*',
        ],
    ];

    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function buildForm(FormBuilderInterface $builder): FormInterface
    {
        /** @var MajorVersionRepository $majorVersions */
        $majorVersions = $this->entityManager->getRepository(MajorVersion::class);

        $versionChoices = [
            'choices'  => [],
            'data'     => $this->getComposerVersionConstraint(
                $majorVersions->findLatestLtsComposerSupported()->getLatestRelease()->getVersion()
            ),
            'required' => true,
        ];

        $versions = $majorVersions->findAllComposerSupported();
        foreach ($versions as $version) {
            if ($version->getLatestRelease() instanceof Release) {
                $versionChoices['choices'][self::CMS_VERSIONS_GROUP][$version->getTitle()] =
                    $this->getComposerVersionConstraint($version->getLatestRelease()->getVersion());
            }
        }

        foreach (self::SPECIAL_VERSIONS as $version) {
            $versionChoices['choices'][self::SPECIAL_VERSIONS_GROUP][$version['name']] = $version['value'];
        }

        foreach ($versions as $version) {
            if ($version->getLatestRelease() instanceof Release && \preg_match('#^(\d+)\.(\d+)\.(\d+)#', $version->getLatestRelease()->getVersion(), $matches)) {
                $nextMinor = $matches[1] . '.' . (((int)$matches[2]) + 1);
                $nextPatch = $matches[1] . '.' . $matches[2] . '.' . (((int)$matches[3]) + 1);

                if (\is_null($version->getLatestRelease()->getMajorVersion()->getLts())) {
                    $versionChoices['choices'][self::SPECIAL_VERSIONS_GROUP][$version->getTitle() . ' - next minor release (' . $nextMinor . ')'] =
                        $this->getComposerVersionConstraint($nextMinor, true);
                }
                $versionChoices['choices'][self::SPECIAL_VERSIONS_GROUP][$version->getTitle() . ' - next patch release (' . $nextPatch . ')'] =
                    $this->getComposerVersionConstraint($nextPatch, true);
            }
        }

        $builder->add(
            'typo3_version',
            ChoiceType::class,
            array_merge($versionChoices, [
                'label'         => 'TYPO3 Version',
                'label_attr'    => ['class' => 'version-label'],
                'attr'          => ['class' => 'js-composer-package-version', 'onChange' => 'checkboxChangeEvent()'],
            ])
        );

        foreach (self::PACKAGES as $package) {
            $builder->add(
                str_replace('/', '-', $package['name']),
                CheckboxType::class,
                [
                    'value'         => $package['name'],
                    'label'         => $package['name'],
                    'help'          => $package['description'],
                    'label_attr'    => ['class' => 'checkbox-custom'],
                    'attr'          => ['class' => 'js-composer-package-check', 'onChange' => 'checkboxChangeEvent()'],
                    'required'      => false,
                ]
            );
        }

        return $builder->getForm();
    }

    /**
     * @return string[]
     */
    public function getBundles(): array
    {
        $sanitizedBundles = [];
        foreach (self::BUNDLES as $bundleName => $packages) {
            $sanitizedBundles[$bundleName] = \GuzzleHttp\json_encode(
                array_map(static fn ($name) => str_replace('/', '-', $name), $packages)
            );
        }

        return $sanitizedBundles;
    }

    /**
     * @return mixed[]
     */
    public function cleanPackagesForVersions(array $packages): array
    {
        if (\preg_match('#^\^(\d+)#', $packages['typo3_version'], $matches)) {
            $version = (int)$matches[1];
        } else {
            /** @var MajorVersionRepository $majorVersions */
            $majorVersions = $this->entityManager->getRepository(MajorVersion::class);
            $latestVersion = $majorVersions
                ->findAllComposerSupported()[0]->getLatestRelease()->getVersion();
            \preg_match('#^\d+#', $latestVersion, $matches);
            $version = (int)$matches[0];
        }

        foreach (self::PACKAGES as $package) {
            if (!in_array($version, $package['versions'], true)) {
                unset($packages[$package['name']]);
            }
        }

        return $packages;
    }

    private function getComposerVersionConstraint(string $version, bool $development = false): string
    {
        if ($development) {
            $result = '^' . $version . '@dev';
        } elseif (\preg_match('#^\d+\.\d+#', $version, $matches)) {
            $result = '^' . $matches[0];
        } else {
            $result = '';
        }

        return $result;
    }
}
