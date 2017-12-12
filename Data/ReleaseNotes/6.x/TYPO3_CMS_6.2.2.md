Release Notes for TYPO3 CMS 6.2.2
=================================

This document contains information about TYPO3 CMS 6.2.2 which was
released on May 6th, 2014.

News
----

This release is an important bug fix release. It fixes several
regressions introduced with 6.2.1. Users of 6.2.0 and 6.2.1 are strongly
encouraged to update.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    f399c1a543fe8780ddb5b1d493d45390  typo3_src-6.2.2.tar.gz
    cf640aad02cf559d5bf60af8c9b4c0cd  typo3_src-6.2.2.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since 6.2.1:

### Compatibility

-   \[TASK\] Make Flow Package HHVM compatible
    ([\#57993](https://forge.typo3.org/issues/57993))
-   \[BUGFIX\] Solve stackoverflow in prototype in IE8
    ([\#58187](https://forge.typo3.org/issues/58187))

### Performance

-   \[TASK\] Reduce file size of core images
    ([\#58110](https://forge.typo3.org/issues/58110))

### File Abstraction Layer

-   \[BUGFIX\] remove enableFields for sys\_file\_processedfile
    ([\#57906](https://forge.typo3.org/issues/57906))
-   \[BUGFIX\] Set internalUploadMap on upload in ExtendedFileUtility
    ([\#58463](https://forge.typo3.org/issues/58463))
-   \[TASK\] Enhance localization behavior of pages.media
    ([\#58476](https://forge.typo3.org/issues/58476))
-   \[BUGFIX\] Enable alt and link fields for page media
    ([\#56884](https://forge.typo3.org/issues/56884))
-   \[BUGFIX\] Media field is empty on page localization
    ([\#57488](https://forge.typo3.org/issues/57488))
-   \[BUGFIX\] Default image title in RTE contains the file name
    ([\#58373](https://forge.typo3.org/issues/58373))
-   \[TASK\] Keep uid / pid parameters in element browser URLs
    ([\#58005](https://forge.typo3.org/issues/58005))

### Importer / Exporter

-   \[BUGFIX\] Fix file handling in import/export module
    ([\#53552](https://forge.typo3.org/issues/53552))
-   \[BUGFIX\] Fix exporting content elements
    ([\#58576](https://forge.typo3.org/issues/58576))
-   \[BUGFIX\] SoftReferenceIndex support for more values in class
    attribute ([\#58484](https://forge.typo3.org/issues/58484))

### Install Tool

-   \[BUGFIX\] Use REDIRECT\_ prefix as fallback for environment
    variables ([\#53188](https://forge.typo3.org/issues/53188))
-   \[BUGFIX\] DBAL native mode: Database compare fails
    ([\#58147](https://forge.typo3.org/issues/58147))
-   \[BUGFIX\] Upgrade Wizard: Limit FileTableSplittingUpdate to TYPO3
    6.0/6.1 ([\#57492](https://forge.typo3.org/issues/57492))
-   \[BUGFIX\] Fix description of userHomePath and groupHomePath
    ([\#56986](https://forge.typo3.org/issues/56986))
-   \[BUGFIX\] Detection of image manipulation libs with open\_basedir
    ([\#58466](https://forge.typo3.org/issues/58466))
-   \[BUGFIX\] Clear all cache in install tool throws exception
    ([\#58337](https://forge.typo3.org/issues/58337))
-   \[BUGFIX\] Remove unnecessary redirect loops for first installation
    ([\#58380](https://forge.typo3.org/issues/58380))
-   \[BUGFIX\] Sets defaultMailFromAddress as sender for install tool
    e-mails ([\#57401](https://forge.typo3.org/issues/57401))
-   \[BUGFIX\] checkMaximumFileUploadSize shows misleading message
    ([\#58260](https://forge.typo3.org/issues/58260))

### Extension Manager / Distributions

-   \[CLEANUP\] Extension Manager code
    ([\#57861](https://forge.typo3.org/issues/57861))
-   \[BUGFIX\] DependencyUtility does count() on an integer
    ([\#58529](https://forge.typo3.org/issues/58529))
-   \[BUGFIX\] saltedpasswords: Check rsaauth loading
    ([\#58504](https://forge.typo3.org/issues/58504))
-   \[BUGFIX\] Disable removal of installed extensions
    ([\#58493](https://forge.typo3.org/issues/58493))
-   \[BUGFIX\] Removed extension stays in PackageStates file
    ([\#53459](https://forge.typo3.org/issues/53459))
-   \[BUGFIX\] Notification about missing impexp installation
    ([\#57375](https://forge.typo3.org/issues/57375))
-   \[BUGFIX\] Retrieving extension fails with some PHP versions
    ([\#58418](https://forge.typo3.org/issues/58418))
-   \[BUGFIX\] Extensionmanager does not show error messages on update
    failure ([\#56823](https://forge.typo3.org/issues/56823))

### Page Renderer

-   Revert “\[BUGFIX\] Do not reset Page Renderer on partial rendering”
    (fixes regressions [\#57919](https://forge.typo3.org/issues/57919)
    and [\#58010](https://forge.typo3.org/issues/58010))
-   \[BUGFIX\] Include RSA JS files in HTML header
    ([\#58010](https://forge.typo3.org/issues/58010))
-   \[TASK\] Clarify reset in page renderer comment
    ([\#58581](https://forge.typo3.org/issues/58581))
-   \[BUGFIX\] Flag compressed files to exclude from compression
    ([\#58582](https://forge.typo3.org/issues/58582))

### API

-   \[BUGFIX\] Fail silently in category registry
    ([\#58384](https://forge.typo3.org/issues/58384))
-   \[BUGFIX\] Fix oddities of the CategoryRegistry
    ([\#58004](https://forge.typo3.org/issues/58004))
-   \[BUGFIX\] Database query error for non-workspaces tables
    ([\#58180](https://forge.typo3.org/issues/58180))
-   \[BUGFIX\] Fix TCA overrides when not cached
    ([\#58039](https://forge.typo3.org/issues/58039))

### Backend

-   \[BUGFIX\] Session cookie is not recreated on login
    ([\#57751](https://forge.typo3.org/issues/57751))
-   \[BUGFIX\] Add l18n\_parent to tt\_content TCA
    ([\#26709](https://forge.typo3.org/issues/26709))
-   \[BUGFIX\] Remove GET parameters from URLs in List module
    ([\#58257](https://forge.typo3.org/issues/58257))
-   \[BUGFIX\] Group permissions for new pages are not set
    ([\#56393](https://forge.typo3.org/issues/56393))
-   \[BUGFIX\] Search box list module not shown
    ([\#58526](https://forge.typo3.org/issues/58526))
-   \[BUGFIX\] EXT:saltedpasswords remove dependency on EXT:setup
    ([\#58192](https://forge.typo3.org/issues/58192), solves User
    settings password change locks out user if saltedpasswords is not
    configured to allow legacy passwords)
-   \[CLEANUP\] Page Module: Do hovering via CSS, not JS
    ([\#58359](https://forge.typo3.org/issues/58359))
-   \[BUGFIX\] Fix dragging of elements in page module
    ([\#58473](https://forge.typo3.org/issues/58473))
-   \[BUGFIX\] Flush caches in group should throw exception
    ([\#58465](https://forge.typo3.org/issues/58465))
-   \[BUGFIX\] Page Module: wrong set layer in page module during drag
    and drop ([\#58413](https://forge.typo3.org/issues/58413))
-   \[TASK\] Remove superfluous margin above \#typo3-menu
    ([\#57098](https://forge.typo3.org/issues/57098))
-   \[BUGFIX\] News Box in BE Login Screen not styled properly
    ([\#58362](https://forge.typo3.org/issues/58362))

### Frontend

-   \[BUGFIX\] Inaccessible pages on shortcuts/PageNotFound handler
    ([\#16472](https://forge.typo3.org/issues/16472))
-   \[BUGFIX\] Properly check existence of array item in VIDEO rendering
    ([\#57809](https://forge.typo3.org/issues/57809))
-   \[BUGFIX\] IMAGE param stdWrap-function not working
    ([\#58420](https://forge.typo3.org/issues/58420))
-   \[BUGFIX\] TypoScriptParser does not validate absPath
    ([\#58102](https://forge.typo3.org/issues/58102))

### Extbase

-   \[BUGFIX\] Queries built by repositories don't respect
    MM\_match\_fields ([\#10487](https://forge.typo3.org/issues/10487))
-   \[BUGFIX\] AbstractDomainObject \_cleanProperties is array
    ([\#57244](https://forge.typo3.org/issues/57244))
-   \[TASK\] Make includeCsh configurable in ContainerViewHelper
    ([\#58075](https://forge.typo3.org/issues/58075))
-   \[BUGFIX\] Reimplement ranges in NumberRangeValidator
    ([\#58313](https://forge.typo3.org/issues/58313))

### CLI

-   \[BUGFIX\] ext:rsaauth cliBackend pollutes cli output
    ([\#58530](https://forge.typo3.org/issues/58530))
-   \[BUGFIX\] Don't send HTTP headers in CLI context
    ([\#58029](https://forge.typo3.org/issues/58029))
-   \[BUGFIX\] Remove hardcoded calling script in help controller
    ([\#58456](https://forge.typo3.org/issues/58456))

### Misc

-   \[BUGFIX\] Missing TSconfig in FE (needed for EXT:feeditadvanced)
    ([\#58338](https://forge.typo3.org/issues/58338))
-   \[TASK\] Remove backslash for UnexpectedValueException in mod.php
    ([\#58344](https://forge.typo3.org/issues/58344))
-   \[TASK\] Add phpdoc @var for calls to makeInstance()
    ([\#58459](https://forge.typo3.org/issues/58459))
-   \[BUGFIX\] Wrong comment in ActionMenuViewHelper
    ([\#58166](https://forge.typo3.org/issues/58166))

### Testing

-   \[TASK\] Speed up functional tests
    ([\#58433](https://forge.typo3.org/issues/58433))
-   \[BUGFIX\] Improve Windows support for functional tests
    ([\#57524](https://forge.typo3.org/issues/57524))
-   \[BUGFIX\] Skip APC tests if on cli and enable\_cli is off
    ([\#58451](https://forge.typo3.org/issues/58451))
-   \[TASK\] Find functional tests automatically, optimize travis-ci
    ([\#58578](https://forge.typo3.org/issues/58578))
-   \[CLEANUP\] Clean up functional tests
    ([\#58445](https://forge.typo3.org/issues/58445))
-   \[TASK\] Tests: Find all tests automatically
    ([\#58533](https://forge.typo3.org/issues/58533))
-   \[TASK\] Tests: Activate ext:rsaauth test suite
    ([\#58531](https://forge.typo3.org/issues/58531))
-   \[TASK\] Tests: Refactor and activate dbal tests
    ([\#52527](https://forge.typo3.org/issues/52527))
-   \[BUGFIX\] Fix broken impexp functional test
    ([\#58503](https://forge.typo3.org/issues/58503))
-   \[CLEANUP\] Remove abandoned functional test
    ([\#58446](https://forge.typo3.org/issues/58446))
-   \[BUGFIX\] Fix namespace of RelationTest
    ([\#58450](https://forge.typo3.org/issues/58450))
-   \[TASK\] Remove tests no longer needed
    ([\#58416](https://forge.typo3.org/issues/58416))
-   \[TASK\] Use composer for unit and functional tests in travis
    ([\#57971](https://forge.typo3.org/issues/57971))
-   \[TASK\] Mitigate risk for travis-ci timeouts
-   \[BUGFIX\] Always convert webroot to unix styled path
    ([\#58559](https://forge.typo3.org/issues/58559))

<Category:ReleaseNotes/TYPO3_6.2.x> [Category:TYPO3
6.2](Category:TYPO3_6.2 "wikilink") <Category:2014>
