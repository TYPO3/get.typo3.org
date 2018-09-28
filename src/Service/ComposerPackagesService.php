<?php

declare(strict_types=1);

namespace App\Service;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;

class ComposerPackagesService
{
    protected static $packages = [
        [
            'name'        => 'typo3/cms-about',
            'description' => 'Shows info about TYPO3, installed extensions and a separate module for available modules.',
        ],
        [
            'name'        => 'typo3/cms-adminpanel',
            'description' => 'The TYPO3 admin panel provides a panel with additional functionality in the frontend (Debugging, Caching, Preview...)',
        ],
        [
            'name'        => 'typo3/cms-backend',
            'description' => 'Classes for the TYPO3 backend.',
        ],
        [
            'name'        => 'typo3/cms-belog',
            'description' => 'Displays backend log, both per page and system wide. Available as the module Tools>Log (system wide overview) and Web>Info/Log (page relative overview).',
        ],
        [
            'name'        => 'typo3/cms-beuser',
            'description' => 'Backend user administration and overview. Allows you to compare the settings of users and verify their permissions and see who is online.',
        ],
        [
            'name'        => 'typo3/cms-core',
            'description' => 'The core library of TYPO3.',
        ],
        [
            'name'        => 'typo3/cms-extbase',
            'description' => 'A framework to build extensions for TYPO3 CMS.',
        ],
        [
            'name'        => 'typo3/cms-extensionmanager',
            'description' => 'TYPO3 Extension Manager',
        ],
        [
            'name'        => 'typo3/cms-feedit',
            'description' => '',
        ],
        [
            'name'        => 'typo3/cms-felogin',
            'description' => 'A template-based plugin to log in Website Users in the Frontend',
        ],
        [
            'name'        => 'typo3/cms-filelist',
            'description' => 'Listing of files in the directory',
        ],
        [
            'name'        => 'typo3/cms-filemetadata',
            'description' => 'Add advanced metadata to File.',
        ],
        [
            'name'        => 'typo3/cms-fluid',
            'description' => 'Fluid is a next-generation templating engine which makes the life of extension authors a lot easier!',
        ],
        [
            'name'        => 'typo3/cms-fluid-styled-content',
            'description' => 'A set of common content elements based on Fluid for Frontend output.',
        ],
        [
            'name'        => 'typo3/cms-form',
            'description' => 'Form Library, Plugin and Editor',
        ],
        [
            'name'        => 'typo3/cms-frontend',
            'description' => 'Classes for the frontend of TYPO3.',
        ],
        [
            'name'        => 'typo3/cms-impexp',
            'description' => 'Import and Export of records from TYPO3 in a custom serialized format (.T3D) for data exchange with other TYPO3 systems.',
        ],
        [
            'name'        => 'typo3/cms-indexed-search',
            'description' => 'Indexed Search Engine for TYPO3 pages, PDF-files, Word-files, HTML and text files. Provides a backend module for statistics of the indexer and a frontend plugin. Documentation can be found in the extension "doc_indexed_search".',
        ],
        [
            'name'        => 'typo3/cms-info',
            'description' => 'Shows various infos',
        ],
        [
            'name'        => 'typo3/cms-install',
            'description' => 'The Install Tool mounted as the module Tools>Install in TYPO3.',
        ],
        [
            'name'        => 'typo3/cms-linkvalidator',
            'description' => 'Link Validator checks the links in your website for validity. It can validate all kinds of links: internal, external and file links. Scheduler is supported to run Link Validator via Cron including the option to send status mails, if broken links were detected.',
        ],
        [
            'name'        => 'typo3/cms-lowlevel',
            'description' => 'Enables the \'Config\' and \'DB Check\' modules for technical analysis of the system. This includes raw database search, checking relations, counting pages and records etc.',
        ],
        [
            'name'        => 'typo3/cms-opendocs',
            'description' => 'Shows opened documents by the user.',
        ],
        [
            'name'        => 'typo3/cms-recordlist',
            'description' => 'List of database-records',
        ],
        [
            'name'        => 'typo3/cms-recycler',
            'description' => 'The recycler offers the possibility to restore deleted records or remove them from the database permanently. These actions can be applied to a single record, multiple records, and recursively to child records (ex. restoring a page can restore all content elements on that page). Filtering by page and by table provides a quick overview of deleted records before taking action on them.',
        ],
        [
            'name'        => 'typo3/cms-redirects',
            'description' => 'Custom redirects in TYPO3.',
        ],
        [
            'name'        => 'typo3/cms-reports',
            'description' => 'The reports module groups several system reports.',
        ],
        [
            'name'        => 'typo3/cms-rsaauth',
            'description' => 'Contains a service to authenticate TYPO3 BE and FE users using private/public key encryption of passwords',
        ],
        [
            'name'        => 'typo3/cms-rte-ckeditor',
            'description' => 'Integration of CKEditor as Rich Text Editor.',
        ],
        [
            'name'        => 'typo3/cms-scheduler',
            'description' => 'The TYPO3 Scheduler let\'s you register tasks to happen at a specific time',
        ],
        [
            'name'        => 'typo3/cms-seo',
            'description' => 'SEO features for TYPO3.',
        ],
        [
            'name'        => 'typo3/cms-setup',
            'description' => 'Allows users to edit a limited set of options for their user profile, eg. preferred language and their name and email address.',
        ],
        [
            'name'        => 'typo3/cms-sys-action',
            'description' => 'Actions are \'programmed\' admin tasks which can be performed by selected regular users from the Task Center. An action could be creation of backend users, fixed SQL SELECT queries, listing of records, direct edit access to selected records etc.',
        ],
        [
            'name'        => 'typo3/cms-sys-note',
            'description' => 'Records with messages which can be placed on any page and contain instructions or other information related to a page or section.',
        ],
        [
            'name'        => 'typo3/cms-t3editor',
            'description' => 'JavaScript-driven editor with syntax highlighting and codecompletion. Based on CodeMirror.',
        ],
        [
            'name'        => 'typo3/cms-taskcenter',
            'description' => 'The Task Center is the framework for a host of other extensions, see below.',
        ],
        [
            'name'        => 'typo3/cms-tstemplate',
            'description' => 'Framework for management of TypoScript template records for the CMS frontend.',
        ],
        [
            'name'        => 'typo3/cms-viewpage',
            'description' => 'Shows the frontend webpage inside the backend frameset.',
        ],
        [
            'name'        => 'typo3/cms-workspaces',
            'description' => 'Adds workspaces functionality with custom stages to TYPO3.',
        ],
    ];

    protected static $bundles = [
        'typo3/full'      => [
            'typo3/cms-about',
            'typo3/cms-adminpanel',
            'typo3/cms-backend',
            'typo3/cms-belog',
            'typo3/cms-beuser',
            'typo3/cms-core',
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
            'typo3/cms-impexp',
            'typo3/cms-indexed-search',
            'typo3/cms-info',
            'typo3/cms-install',
            'typo3/cms-linkvalidator',
            'typo3/cms-lowlevel',
            'typo3/cms-opendocs',
            'typo3/cms-recordlist',
            'typo3/cms-recycler',
            'typo3/cms-redirects',
            'typo3/cms-reports',
            'typo3/cms-rsaauth',
            'typo3/cms-rte-ckeditor',
            'typo3/cms-scheduler',
            'typo3/cms-seo',
            'typo3/cms-setup',
            'typo3/cms-sys-action',
            'typo3/cms-sys-note',
            'typo3/cms-t3editor',
            'typo3/cms-taskcenter',
            'typo3/cms-tstemplate',
            'typo3/cms-viewpage',
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
            'typo3/cms-extbase',
            'typo3/cms-felogin',
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
        ],
        'clear selection' => [],
    ];

    public function buildForm(FormBuilderInterface $builder): FormInterface
    {
        foreach (self::$packages as $package) {
            $builder->add(
                str_replace('/', '-', $package['name']),
                CheckboxType::class,
                [
                    'value'    => $package['name'],
                    'label'    => $package['name'],
                    'help'     => $package['description'],
                    'attr'     => ['class' => 'js-composer-package-check', 'onChange' => 'checkboxChangeEvent()'],
                    'required' => false,
                ]
            );
        }

        return $builder->getForm();
    }

    public function getBundles(): array
    {
        $sanitizedBundles = [];
        foreach (self::$bundles as $bundleName => $packages) {
            $sanitizedBundles[$bundleName] = \GuzzleHttp\json_encode(
                array_map(function ($name) {
                    return str_replace('/', '-', $name);
                }, $packages)
            );
        }
        return $sanitizedBundles;
    }
}
