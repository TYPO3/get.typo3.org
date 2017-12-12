Release Notes for TYPO3 4.7.1
=============================

This document contains information about TYPO3 version 4.7.1 which was
released on May 22nd 2012.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    bd8af8af81b826263bcf23a554685ad0  blankpackage-4.7.1.tar.gz
    90b9dc27279eeff30f6a7a6b2677d878  blankpackage-4.7.1.zip
    eb759c7e28a303671463bd06dcd8bb4d  dummy-4.7.1.tar.gz
    545baff9d92c108dfd21f2b25f354d5f  dummy-4.7.1.zip
    a3ac1050a7ac84c483bc9f83ddce8fa5  governmentpackage-4.7.1.tar.gz
    893da405ea26baeb328c2600b24847ee  governmentpackage-4.7.1.zip
    75f6749a7e520c1b5fa31a77c2919bfb  introductionpackage-4.7.1.tar.gz
    9baa67c3981960a610d5f649835e6829  introductionpackage-4.7.1.zip
    ad87f8787818ed503510f6c48f53d5fc  typo3_src+dummy-4.7.1.zip
    e0a8674c3d77ba89c00a6be7f3f885b8  typo3_src-4.7.1.tar.gz
    d0b76942b15336fd660d9234223922e7  typo3_src-4.7.1.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since [4.7.0](TYPO3_4.7.0 "wikilink"):

-   \[TASK\] Raise version number of sysexts to 4.7.1
-   \[BUGFIX\] Pagetree: Copying large branches duplicates branch
    ([\#26993](https://forge.typo3.org/issues/26993))
-   \[TASK\] Add a comment for the require\_once in
    t3lib\_error\_ErrorHandler
    ([\#37335](https://forge.typo3.org/issues/37335))
-   \[BUGFIX\] PHP warning when a language pack does not exist
    ([\#36976](https://forge.typo3.org/issues/36976))
-   \[BUGFIX\] DB field names exceed max length with 'zzz\_deleted'
    ([\#33580](https://forge.typo3.org/issues/33580))
-   \[BUGFIX\] Regression of “better condition in versionOL of
    t3lib\_tstemplate” ([\#36981](https://forge.typo3.org/issues/36981))
-   \[BUGFIX\] Properly quote regexp in Install Tool
    ([\#35410](https://forge.typo3.org/issues/35410))
-   \[BUGFIX\] Wrong DB fields usage in TCEmain
    ([\#37221](https://forge.typo3.org/issues/37221))
-   \[BUGFIX\] Missing bottom margin in the page tree
    ([\#35182](https://forge.typo3.org/issues/35182))
-   \[BUGFIX\] Wrong label reference for backend\_layout
    ([\#37158](https://forge.typo3.org/issues/37158))
-   \[BUGFIX\] Re-enable indexed\_search \$TCA for index\_config
    ([\#32815](https://forge.typo3.org/issues/32815))
-   \[BUGFIX\] Pagetree doesn't expands to the last saved state
    ([\#36459](https://forge.typo3.org/issues/36459))
-   \[BUGFIX\] Page cache expiry calculation fails
    ([\#35684](https://forge.typo3.org/issues/35684))
-   \[BUGFIX\] Regression: SQL error inserting tables for
    statictemplates ([\#34692](https://forge.typo3.org/issues/34692))
-   \[BUGFIX\] Custom Swift\_Transport impossible
    ([\#36937](https://forge.typo3.org/issues/36937))
-   \[BUGFIX\] Pagetree should expand to the last selected node
    ([\#25006](https://forge.typo3.org/issues/25006))
-   \[BUGFIX\] Slider Wizard value not set when used in a flexform
    ([\#34012](https://forge.typo3.org/issues/34012))
-   \[BUGFIX\] Fix math test on 32 bit systems
    ([\#36860](https://forge.typo3.org/issues/36860))
-   \[BUGFIX\] Wrong query in RecordCollectionRepository
    ([\#36841](https://forge.typo3.org/issues/36841))
-   \[BUGFIX\] Clean up the raster
    ([\#36197](https://forge.typo3.org/issues/36197))
-   \[BUGFIX\] Add trailing slash to PAGEPATH
    ([\#35216](https://forge.typo3.org/issues/35216))
-   \[BUGFIX\] EM: improve action icons alignment
    ([\#36611](https://forge.typo3.org/issues/36611))
-   \[BUGFIX\] EM: misplaced tooltips
    ([\#36610](https://forge.typo3.org/issues/36610))
-   \[BUGFIX\] Path utility resolves incorrect
    ([\#36385](https://forge.typo3.org/issues/36385))
-   \[BUGFIX\] EM: avoid cropping action columns
    ([\#30900](https://forge.typo3.org/issues/30900))
-   \[BUGFIX\] New task button missing after deleting task
    ([\#36296](https://forge.typo3.org/issues/36296))
-   \[BUGFIX\] cropHTML with dash in html element
    ([\#26915](https://forge.typo3.org/issues/26915))
-   \[BUGFIX\] Wrong HTTP protocol in combination with a proxy
    ([\#36004](https://forge.typo3.org/issues/36004))
-   \[BUGFIX\] Remove duplicate domain from FE copyright comment
    ([\#36164](https://forge.typo3.org/issues/36164))
-   \[BUGFIX\] Show phpinfo() header title
    ([\#34686](https://forge.typo3.org/issues/34686))
-   \[BUGFIX\] Hide relations to deleted records
    ([\#21713](https://forge.typo3.org/issues/21713))
-   \[BUGFIX\] IRRE hide/unhide broken
    ([\#34303](https://forge.typo3.org/issues/34303))
-   \[BUGFIX\] Missing static keyword for addFieldsToUserSettings
    ([\#36399](https://forge.typo3.org/issues/36399))
-   \[BUGFIX\] Localize command must preserve type
    ([\#35361](https://forge.typo3.org/issues/35361))

### extbase

-   \[TASK\] Update ext\_emconf.php
-   \[BUGFIX\] Fix undefined variables in Typo3DBBackend::parseOrderings
    ([\#34924](https://forge.typo3.org/issues/34924))

### linkvalidator

-   \[TASK\] Replace Space Indent into Tab indent (CGL Cleanup)
    ([\#36882](https://forge.typo3.org/issues/36882))
-   \[BUGFIX\] Do not pass by reference (2)
    ([\#36851](https://forge.typo3.org/issues/36851))
-   \[BUGFIX\] Do not pass by reference
    ([\#36676](https://forge.typo3.org/issues/36676))


