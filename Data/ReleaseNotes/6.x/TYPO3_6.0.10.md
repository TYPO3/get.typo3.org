Release Notes for TYPO3 6.0.10
==============================

This document contains information about TYPO3 version 6.0.10 which was
released on September 12th, 2013.

News
----

This release is a bug fix release. It fixes important regressions that
were part of the previous (security) release, so upgrading to it is
highly recommended.

Notes
-----

This is a combined release of TYPO3 CMS 4.5.30, 4.7.15, 6.0.10 and
6.1.5.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    c1f9c8f49a6876fe6803da7ab0d264bc  blankpackage-6.0.10.tar.gz
    663ce4dec08a9d95004d67097e7d26f2  blankpackage-6.0.10.zip
    a5d2eda7d6868f404cc1db8983711b26  dummy-6.0.10.tar.gz
    f851231ddb9f447800cd6ca25ddf5517  dummy-6.0.10.zip
    97f2219eab4b5d70134d014a6991d84a  typo3_src+dummy-6.0.10.zip
    a026fff3b4713f331767ae780a94e3c2  typo3_src-6.0.10.tar.gz
    2228126a7ad47c247915b31509c9decb  typo3_src-6.0.10.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Note that the field `sys_file.deleted` has been removed as it was being
misused. It doesn't hurt having this field still in the database, but in
case you want to have a clean setup, consider removing this field
manually or through the Install Tool (Database Analyser).

Changes
-------

Here is a list of what was fixed since [6.0.9](TYPO3_6.0.9 "wikilink"):

-   \[RELEASE\] Release of TYPO3 6.0.10
-   \[TASK\] Move StorageRepositoryTest tests to AbstractRepositoryTest
    ([\#51923](https://forge.typo3.org/issues/51923))
-   \[BUGFIX\] Move forgotten getEnvironmentMode()
    ([\#51562](https://forge.typo3.org/issues/51562))
-   \[TASK\] FAL ResourceStorage must not access sys\_file table
    directly ([\#51519](https://forge.typo3.org/issues/51519))
-   \[BUGFIX\] Follow-Up: Missing signals on adding file
    ([\#50795](https://forge.typo3.org/issues/50795))
-   \[TASK\] Remove sys\_file.deleted flag and it's usage
    ([\#51562](https://forge.typo3.org/issues/51562))
-   \[BUGFIX\] Missing signals on adding file
    ([\#50795](https://forge.typo3.org/issues/50795))
-   \[BUGFIX\] Follow-up: Fix fileinfo property mapping in
    ResourceStorage ([\#49386](https://forge.typo3.org/issues/49386))
-   \[BUGFIX\] Extbase scheduler task serialization
    ([\#50723](https://forge.typo3.org/issues/50723))
-   \[BUGFIX\] Fix fileinfo property mapping in
    ResourceStorage::setFileContents
    ([\#49386](https://forge.typo3.org/issues/49386))
-   \[BUGFIX\] excludeFromUpdates flag ignored
    ([\#51018](https://forge.typo3.org/issues/51018))
-   \[BUGFIX\] mounts of same storage had same subfolder count in
    Filelist ([\#48467](https://forge.typo3.org/issues/48467))
-   \[TASK\] Replace double quotes in exceptions
    ([\#51743](https://forge.typo3.org/issues/51743))
-   \[TASK\] Cleanup ([\#51744](https://forge.typo3.org/issues/51744))
-   \[BUGFIX\] Filename not displayed in selector (file\_reference)
    ([\#47414](https://forge.typo3.org/issues/47414))
-   \[BUGFIX\] Ignore userTSConfig if not set in getModTSconfig()
    ([\#51871](https://forge.typo3.org/issues/51871))
-   \[BUGFIX\] Disable caching for ADMCMD\_view parameter
    ([\#51682](https://forge.typo3.org/issues/51682))
-   \[BUGFIX\] Do not add trailing slashes to files
    ([\#51761](https://forge.typo3.org/issues/51761))
-   \[BUGFIX\] Enable ProcessedFiles to do file exists
    ([\#51808](https://forge.typo3.org/issues/51808))
-   \[BUGFIX\] Fix viewObjectNamePattern regression in Extbase
    ([\#51758](https://forge.typo3.org/issues/51758))
-   \[FEATURE\] Find best-matching local storage instead of
    default-storage ([\#45498](https://forge.typo3.org/issues/45498))
-   \[BUGFIX\] Recreate processig folder without permission checks
    ([\#51747](https://forge.typo3.org/issues/51747))
-   \[BUGFIX\] Do not register storage factory slot during install
    ([\#51733](https://forge.typo3.org/issues/51733))
-   \[FEATURE\] Render icon with button view helper
    ([\#51305](https://forge.typo3.org/issues/51305))
-   \[TASK\] Remove conflict code
    ([\#51745](https://forge.typo3.org/issues/51745))
-   \[TASK\] Set TYPO3 version to 6.0.10-dev


