Release Notes for TYPO3 4.6.9
=============================

This document contains information about TYPO3 version 4.6.9 which was
released on May 22nd 2012.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    22015d0f69bb220ed3d3b9d882517fce  blankpackage-4.6.9.tar.gz
    48fee7d4adbaf14dbf2931e87fb81f48  blankpackage-4.6.9.zip
    46ae82b26fd722f23dd233695693dd68  dummy-4.6.9.tar.gz
    5992e195036630e77515478200dcbe24  dummy-4.6.9.zip
    df9c874678772522dd91dde0e336b9ee  introductionpackage-4.6.9.tar.gz
    05a7f40a742115d272806c780a5659ff  introductionpackage-4.6.9.zip
    a2c73e13ce94aff5865b7eb9ad4eb7ed  typo3_src+dummy-4.6.9.zip
    69dd6f277c739f741a0a2c3a39047117  typo3_src-4.6.9.tar.gz
    898b155e1fd720f07bdd717f7db485ef  typo3_src-4.6.9.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since [4.6.8](TYPO3_4.6.8 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.6.9
-   \[TASK\] Raise submodule pointer
-   \[BUGFIX\] Pagetree: Copying large branches duplicates branch
    ([\#26993](https://forge.typo3.org/issues/26993))
-   \[TASK\] Add a comment for require\_once in
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
-   \[BUGFIX\] Install Tool: Settings added by extensions can be edited
    ([\#25213](https://forge.typo3.org/issues/25213))
-   \[BUGFIX\] Wrong DB fields usage in TCEmain
    ([\#37221](https://forge.typo3.org/issues/37221))
-   \[BUGFIX\] Missing bottom margin in the page tree
    ([\#35182](https://forge.typo3.org/issues/35182))
-   \[BUGFIX\] Wrong label reference for backend\_layout
    ([\#37158](https://forge.typo3.org/issues/37158))
-   \[BUGFIX\] Pagetree doesn't expands to the last saved state
    ([\#36459](https://forge.typo3.org/issues/36459))
-   \[BUGFIX\] Page cache expiry calculation fails
    ([\#35684](https://forge.typo3.org/issues/35684))
-   \[BUGFIX\] Slider Wizard value not set when used in a flexform
    ([\#34012](https://forge.typo3.org/issues/34012))
-   \[BUGFIX\] Fix math test on 32 bit systems
    ([\#36860](https://forge.typo3.org/issues/36860))
-   \[BUGFIX\] EM: improve action icons alignment
    ([\#36611](https://forge.typo3.org/issues/36611))
-   \[BUGFIX\] EM: misplaced tooltips
    ([\#36610](https://forge.typo3.org/issues/36610))
-   \[BUGFIX\] EM: avoid cropping action columns
    ([\#30900](https://forge.typo3.org/issues/30900))
-   \[BUGFIX\] t3lib\_div::getUrl() throws a warning on nonexisting
    local file ([\#36380](https://forge.typo3.org/issues/36380))
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
-   \[BUGFIX\] Localize command must preserve type
    ([\#35361](https://forge.typo3.org/issues/35361))
-   \[BUGFIX\] Missing static keyword for addFieldsToUserSettings
    ([\#36399](https://forge.typo3.org/issues/36399))
-   \[BUGFIX\] Backend: Fetch correct overlay-version of page inside
    workspace ([\#27811](https://forge.typo3.org/issues/27811))
-   \[TASK\] Set TYPO3 version to 4.6.9-dev

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


