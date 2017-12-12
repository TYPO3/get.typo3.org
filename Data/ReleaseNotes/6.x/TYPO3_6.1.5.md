Release Notes for TYPO3 6.1.5
=============================

This document contains information about TYPO3 version 6.1.5 which was
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

    8f82cb74a965c1c290dde53779193f8b  blankpackage-6.1.5.tar.gz
    bfcc6b6e063abcac9f290cac14c6e20e  blankpackage-6.1.5.zip
    3fbcaa8acc55fe48a1266c7feb1ee5f6  dummy-6.1.5.tar.gz
    f0d36c82207a5f5d2cecd96d4e63488e  dummy-6.1.5.zip
    b9dbbb832e4c05ef4c36cbdf717a36d2  governmentpackage-6.1.5.tar.gz
    5a3bd1f0ec66b2e0dc41d6e6ad5d460e  governmentpackage-6.1.5.zip
    918dbd1e82e1223e1d6b34cf4cca8cdc  introductionpackage-6.1.5.tar.gz
    34e97ad90124de1b63efcd4e2c5b5425  introductionpackage-6.1.5.zip
    a042bf28abf2f4078be2b67c7e76dc2a  typo3_src+dummy-6.1.5.zip
    fa124e639e91ecade837f209488de5d2  typo3_src-6.1.5.tar.gz
    98c6b08e1ab3e94a4e9aafe06323ab03  typo3_src-6.1.5.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Note that the field `sys_file.deleted` has been removed as it was being
misused. It doesn't hurt having this field still in the database, but in
case you want to have a clean setup, consider removing this field
manually or through the Install Tool (Database Analyser).

#### List of known, incompatible Extensions

  Extension         versions   TER                                                     forge                                                                          reason                                                                                                                                                                                                                                                            status
  ----------------- ---------- ------------------------------------------------------- ------------------------------------------------------------------------------ ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -----------------------------------------------------------------------------------------------------
  AOE linkhandler   0.3.1      <https://extensions.typo3.org/extension/linkhandler/>   <https://forge.typo3.org/attachments/23334/typo3_6.0.1.patch> - not working!   After applying the patch you will get the following while clicking on the folder ICON i.e. to choose a folder from the popup. - Oops, an error occurred! \$processObject must implement interface TYPO3\\CMS\\Core\\ElementBrowser\\ElementBrowserHookInterface   author and AOE informed via forge - <https://forge.typo3.org/projects/extension-linkhandler/issues>
  supersized        1.1.1      <https://extensions.typo3.org/extension/supersized/>    forge                                                                          results in: Oops, an error occurred!                                                                                                                                                                                                                              status
  Extension         versions   TER                                                     forge                                                                          reason                                                                                                                                                                                                                                                            status

Changes
-------

Here is a list of what was fixed since [6.1.4](TYPO3_6.1.4 "wikilink"):

-   \[RELEASE\] Release of TYPO3 6.1.5
-   \[BUGFIX\] Fix SQL error for sys\_file
    ([\#51929](https://forge.typo3.org/issues/51929))
-   \[TASK\] Move StorageRepositoryTest tests to AbstractRepositoryTest
    ([\#51923](https://forge.typo3.org/issues/51923))
-   \[BUGFIX\] Empty \_\_call() function hides implementation errors
    ([\#51924](https://forge.typo3.org/issues/51924))
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
-   \[BUGFIX\] Fix fileinfo property mapping in
    ResourceStorage::setFileContents
    ([\#49386](https://forge.typo3.org/issues/49386))
-   \[BUGFIX\] excludeFromUpdates flag ignored
    ([\#51018](https://forge.typo3.org/issues/51018))
-   \[BUGFIX\] mounts of same storage had same subfolder count in
    Filelist ([\#48467](https://forge.typo3.org/issues/48467))
-   \[BUGFIX\] Extbase scheduler task serialization
    ([\#50723](https://forge.typo3.org/issues/50723))
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
-   \[TASK\] Set TYPO3 version to 6.1.5-dev


