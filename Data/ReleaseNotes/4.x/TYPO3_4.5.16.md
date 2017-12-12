Release Notes for TYPO3 4.5.16
==============================

This document contains information about TYPO3 version 4.5.16 which was
released on May 22nd 2012.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    84bc437571c5f3ce248583f58edc8c07  blankpackage-4.5.16.tar.gz
    3426ebf2c3ca84c5557ec4a3c1c11a33  blankpackage-4.5.16.zip
    d9f7b1948178aa1e82d55e96a2be7e0c  dummy-4.5.16.tar.gz
    c4e6ed71ef4059e326926a50a00adf17  dummy-4.5.16.zip
    eee8606af4892285898bad6f5f14250e  introductionpackage-4.5.16.tar.gz
    1a60d285d3b5796c3d604c95bff7220f  introductionpackage-4.5.16.zip
    948592a78d33241b90286d6ae8c3c290  typo3_src+dummy-4.5.16.zip
    e8c54e1c3d5a3c11c802fbbe7a1b71c3  typo3_src-4.5.16.tar.gz
    3c70017eaa851ac46ee1bf2a2373a44b  typo3_src-4.5.16.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.5.15](TYPO3_4.5.15 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.5.16
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
-   \[BUGFIX\] tx\_rsaauth\_sv1::authUser() gives PHP notice
    ([\#30057](https://forge.typo3.org/issues/30057))
-   \[BUGFIX\] EM: improve action icons alignment
    ([\#36611](https://forge.typo3.org/issues/36611))
-   \[BUGFIX\] EM: avoid cropping action columns
    ([\#30900](https://forge.typo3.org/issues/30900))
-   \[BUGFIX\] t3lib\_div::getUrl() throws a warning on nonexisting
    local file ([\#36380](https://forge.typo3.org/issues/36380))
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
-   \[BUGFIX\] Pagetree broken due to JavaScript exception
    ([\#28687](https://forge.typo3.org/issues/28687))
-   \[BUGFIX\] Backend: Fetch correct overlay-version of page inside
    workspace ([\#27811](https://forge.typo3.org/issues/27811))
-   \[TASK\] Set TYPO3 version to 4.5.16-dev

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


