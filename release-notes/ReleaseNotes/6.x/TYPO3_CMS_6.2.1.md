Release Notes for TYPO3 CMS 6.2.1
=================================

This document contains information about TYPO3 CMS 6.2.1 which was
released on April 16th, 2014.

News
----

This release is a bug fix release.

Notes
-----

This is part of a combined release of TYPO3 CMS 4.5.33, 4.7.18, 6.0.13,
6.1.8 and 6.2.1.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    c0b26d2ff257536c5b8367f853951113  typo3_src-6.2.1.tar.gz
    e9e536e8d8ce6bf1f8a5c6ae744cbc7f  typo3_src-6.2.1.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since 6.2.0:

### Important

-   \[FEATURE\] Provide API to add cached TCA changes
    ([\#57942](https://forge.typo3.org/issues/57942))
-   \[FEATURE\] Introduce signal in loadBaseTca
    ([\#57863](https://forge.typo3.org/issues/57863))
-   \[SECURITY\] Prevent XSS in scheduler form
    ([\#57603](https://forge.typo3.org/issues/57603))

### Compatibility

-   \[TASK\] Updates prototype and scriptaculous, fixing IE9+ issues
    ([\#51768](https://forge.typo3.org/issues/51768))
-   \[BUGFIX\] Properly detect HHVM with fastcgi
    ([\#57785](https://forge.typo3.org/issues/57785))
-   \[BUGFIX\] Use last result line of identify command
    ([\#56574](https://forge.typo3.org/issues/56574))
-   \[BUGFIX\] Enable backend login for Internet Explorer 8 users
    ([\#56988](https://forge.typo3.org/issues/56988))

### Performance

-   \[BUGFIX\] Don't run processIncludes more than once
    ([\#54903](https://forge.typo3.org/issues/54903))

### File Abstraction Layer

-   \[TASK\] Release file and folder permission check
    ([\#57354](https://forge.typo3.org/issues/57354))
-   \[BUGFIX\] ResourceStorage does not sanitize folder/file name
    ([\#57681](https://forge.typo3.org/issues/57681))
-   \[CLEANUP\] Clean up comments and error messages in ResourceStorage
    ([\#57871](https://forge.typo3.org/issues/57871))
-   \[BUGFIX\] FAL: Prevent invalid NULL value on metadata creation
    ([\#57495](https://forge.typo3.org/issues/57495))
-   \[BUGFIX\] Use return values of array\_map in local driver
    ([\#57415](https://forge.typo3.org/issues/57415))
-   \[BUGFIX\] CSC: file references not working with image compression
    ([\#57346](https://forge.typo3.org/issues/57346))

### DBAL / DatabaseConnection

-   \[BUGFIX\] DBAL sql\_fetch\_\* must return boolean or array
    ([\#57957](https://forge.typo3.org/issues/57957))
-   \[BUGFIX\] Run scheduler from cli fails on DBAL
    ([\#57246](https://forge.typo3.org/issues/57246))
-   \[BUGFIX\] sql\_free\_result does not work with all allowed types
    ([\#50378](https://forge.typo3.org/issues/50378))

### Importer / Exporter

-   \[BUGFIX\] impexp has to use module dispatcher
    ([\#57873](https://forge.typo3.org/issues/57873))
-   \[BUGFIX\] Fix impexp for importing exports from version 4.x
    ([\#52593](https://forge.typo3.org/issues/52593))

### Install Tool / Extension Manager / Distributions

-   \[BUGFIX\] Improve database scheme updater
    ([\#57421](https://forge.typo3.org/issues/57421))
-   \[BUGFIX\] Fix relative path calculations in EM
    ([\#57327](https://forge.typo3.org/issues/57327))
-   \[BUGFIX\] Extension update fails if needed by other extensions
    ([\#57264](https://forge.typo3.org/issues/57264))
-   \[BUGFIX\] Update for sys\_file\_metadata returns SQL error
    ([\#57420](https://forge.typo3.org/issues/57420))
-   \[BUGFIX\] Install Tool-FAL metadata migration fails for big sets
    ([\#57103](https://forge.typo3.org/issues/57103))
-   \[BUGFIX\] Install tool update wizards show html tags in error
    message ([\#57285](https://forge.typo3.org/issues/57285))
-   \[BUGFIX\] Fix initial file import in EM
    ([\#57312](https://forge.typo3.org/issues/57312))
-   \[BUGFIX\] TceformsUpdateWizard shows up too often
    ([\#57497](https://forge.typo3.org/issues/57497))
-   \[TASK\] TceformsUpdateWizard: Throw exception if database query
    fails ([\#57572](https://forge.typo3.org/issues/57572))
-   \[BUGFIX\] Backup of LocalConfiguration.php missing on update
    ([\#57458](https://forge.typo3.org/issues/57458))
-   \[BUGFIX\] Remove the need of PackageStates.php in tests
    ([\#57490](https://forge.typo3.org/issues/57490))

### API / TCA

-   \[BUGFIX\] TCA tree fail to load with IRRE
    ([\#39035](https://forge.typo3.org/issues/39035))
-   \[BUGFIX\] Set maxLevels of generated sys\_category TCA
    ([\#57750](https://forge.typo3.org/issues/57750))
-   \[BUGFIX\] BE ignores l10n\_mode for record titles
    ([\#33499](https://forge.typo3.org/issues/33499))
-   \[BUGFIX\] Do not reset Page Renderer on partial rendering
    ([\#57294](https://forge.typo3.org/issues/57294))
-   \[BUGFIX\] Check if lock directory is writable
    ([\#57463](https://forge.typo3.org/issues/57463))
-   \[BUGFIX\] Check default salting method first
    ([\#54833](https://forge.typo3.org/issues/54833))
-   \[BUGFIX\] Check WorkspaceEnabled for MM field related table
    ([\#57291](https://forge.typo3.org/issues/57291))

### Backend

-   \[TASK\] Remove hardcoded module name in AbstractDatabaseRecordList
    ([\#55314](https://forge.typo3.org/issues/55314))
-   \[BUGFIX\] Admin users should ignore user mounts
    ([\#57587](https://forge.typo3.org/issues/57587))
-   \[BUGFIX\] T3editor description loading
    ([\#57708](https://forge.typo3.org/issues/57708))
-   \[BUGFIX\] User settings do not obey setup.override
    ([\#57690](https://forge.typo3.org/issues/57690))
-   \[TASK\] Return to “Admin Tools &gt; User Admin” when exiting
    simulated BE User ([\#22020](https://forge.typo3.org/issues/22020))
-   \[BUGFIX\] Fetch RSA public key by Ajax before login
    ([\#37421](https://forge.typo3.org/issues/37421))
-   \[BUGFIX\] Add correctly escaped css selectors for js
    ([\#56874](https://forge.typo3.org/issues/56874))

### Frontend

-   \[BUGFIX\] Add available jQuery version to PageRenderer
    ([\#57466](https://forge.typo3.org/issues/57466))
-   \[BUGFIX\] Improve the admin panel
    ([\#57579](https://forge.typo3.org/issues/57579))
-   \[BUGFIX\] Marker missing for page.includeCSSLibs
    ([\#57467](https://forge.typo3.org/issues/57467))
-   \[BUGFIX\] Allow user defined locales to work with TSFE-&gt;sL()
    ([\#53973](https://forge.typo3.org/issues/53973))
-   \[BUGFIX\] Respect config.debug setting for displaying parsetime
    ([\#57365](https://forge.typo3.org/issues/57365))
-   \[BUGFIX\] Load adminPanel styles for FE editing
    ([\#55896](https://forge.typo3.org/issues/55896))

### Extbase

-   \[BUGFIX\] Make Extbase Cli\\RequestBuilder a Singleton
    ([\#57591](https://forge.typo3.org/issues/57591))
-   \[BUGFIX\] Extbase: Follow up foreign\_match\_fields not fully
    supported ([\#47694](https://forge.typo3.org/issues/47694))
-   \[BUGFIX\] Correctly apply Extbase validator options and add tests
    ([\#52208](https://forge.typo3.org/issues/52208))
-   \[BUGFIX\] Make Extbase EnvironmentService a Singleton
    ([\#57518](https://forge.typo3.org/issues/57518))
-   \[BUGFIX\] Make Typo3DbQueryParser a Singleton
    ([\#57338](https://forge.typo3.org/issues/57338))

### Testing

-   \[BUGFIX\] Tests: Namespaced usage of vfsStream
    ([\#57872](https://forge.typo3.org/issues/57872))
-   \[BUGFIX\] Fix incomplete mocking in ExtensionManagementUtilityTest
    ([\#57700](https://forge.typo3.org/issues/57700))
-   \[TASK\] Activate all packages in unit tests
    ([\#57487](https://forge.typo3.org/issues/57487))
-   \[TASK\] Avoid sysLog calls in MailUtilityTest
    ([\#57676](https://forge.typo3.org/issues/57676))

### Cleanups

-   \[CLEANUP\] Category related tests cleanup
    ([\#57949](https://forge.typo3.org/issues/57949))
-   \[CLEANUP\] Remove unused \[BE\]\[usePHPFileFunctions\] option
    ([\#57921](https://forge.typo3.org/issues/57921))
-   \[BUGFIX\] Do not unset() PageRenderer class members
    ([\#57920](https://forge.typo3.org/issues/57920))
-   \[CLEANUP\] Remove unnecessary @todo annotations
    ([\#57865](https://forge.typo3.org/issues/57865))
-   \[CLEANUP\] ImportExportController code style
    ([\#57855](https://forge.typo3.org/issues/57855))
-   \[CLEANUP\] Improve comments in TypoScriptFrontendController
    ([\#57814](https://forge.typo3.org/issues/57814))
-   \[TASK\] Improve comments and phpdoc blocks in PageRepository
    ([\#57859](https://forge.typo3.org/issues/57859))
-   \[CLEANUP\] Fix length of comments to meet CGL
    ([\#57819](https://forge.typo3.org/issues/57819))
-   \[CLEANUP\] Error handling classes
    ([\#57661](https://forge.typo3.org/issues/57661))
-   \[CLEANUP\] Remove deprecated filemount functions in BE\_USER
    ([\#56772](https://forge.typo3.org/issues/56772))
-   \[CLEANUP\] Code style of authentication classes
    ([\#57788](https://forge.typo3.org/issues/57788))
-   \[TASK\] Improve deprecation msg of GeneralUtility method
    ([\#57499](https://forge.typo3.org/issues/57499))
-   \[CLEANUP\] Remove option “edit\_wideDocument”
    ([\#57295](https://forge.typo3.org/issues/57295))
-   \[TASK\] Readd search string in module “Configuration”
    ([\#57486](https://forge.typo3.org/issues/57486))
-   \[TASK\] Web&gt;Page Search: Remove duplicate CSS
    ([\#57451](https://forge.typo3.org/issues/57451))
-   \[TASK\] Remove space in Page module notification
    ([\#57449](https://forge.typo3.org/issues/57449))
-   \[TASK\] Cleanup ChangeLog from duplicate lines
-   \[BUGFIX\] PHP warning due to missing preg\_quote
    ([\#55662](https://forge.typo3.org/issues/55662))

<Category:ReleaseNotes/TYPO3_6.2.x> [Category:TYPO3
6.2](Category:TYPO3_6.2 "wikilink") <Category:2014>
