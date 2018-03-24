Release Notes for TYPO3 6.0.7
=============================

This document contains information about TYPO3 version 6.0.7 which was
released on July 23rd 2013.

News
----

This release is a bug fix release.

Notes
-----

This is a combined release of TYPO3 CMS 4.5.28, 4.7.13, 6.0.7 and 6.1.2.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    e3998b8da34b7e96b5adf4c8607ae221  typo3_src-6.0.7.tar.gz
    2d960e0b4ada8c5dc2c89f69813db088  typo3_src-6.0.7.zip
    01bcd21d28e740f3cd3f1800fa2f925a  blankpackage-6.0.7.tar.gz
    d2d5cb7c6d817ee90f2a333067f97d9d  blankpackage-6.0.7.zip
    428bb06361fc07daa866294fda7cda38  dummy-6.0.7.tar.gz
    9172a9f71ea5605d2ab6e24380663468  dummy-6.0.7.zip
    65ff57d38a5c643632e82a139c45d7c0  typo3_src+dummy-6.0.7.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since [6.0.6](TYPO3_6.0.6 "wikilink"):

-   \[RELEASE\] Release of TYPO3 6.0.7
-   \[TASK\] Make DiffUtility faster and much more scaleable.
    ([\#50318](https://forge.typo3.org/issues/50318))
-   \[BUGFIX\] Allow colon in last “displayCond” part
    ([\#47988](https://forge.typo3.org/issues/47988))
-   \[BUGFIX\] Two mailforms on a page cause error on field validation
    ([\#16114](https://forge.typo3.org/issues/16114))
-   \[BUGFIX\] Width of action column is wrong
    ([\#50210](https://forge.typo3.org/issues/50210))
-   \[BUGFIX\] setRespectSysLanguage(FALSE) doesn't prevent language
    overlay ([\#47192](https://forge.typo3.org/issues/47192))
-   \[BUGFIX\] Faulty layout if row details are too long
    ([\#50114](https://forge.typo3.org/issues/50114))
-   \[TASK\] Remove redundant try/catches in ResourceStorage of FAL
    ([\#49332](https://forge.typo3.org/issues/49332))
-   \[BUGFIX\] Category API does not consider multiple tables
    ([\#45332](https://forge.typo3.org/issues/45332))
-   \[BUGFIX\] Pagetree filtering crashes on draft moves
    ([\#39197](https://forge.typo3.org/issues/39197))
-   \[BUGFIX\] Skip link validation of RTE filelink
    ([\#49286](https://forge.typo3.org/issues/49286))
-   \[TASK\] Setting space before/after should use !important
    ([\#50038](https://forge.typo3.org/issues/50038))
-   \[BUGFIX\] Missing/Wrong copy buttons if deflangBinding is disabled
    ([\#49712](https://forge.typo3.org/issues/49712))
-   \[BUGFIX\] Localconf upgrade wizard fails
    ([\#39434](https://forge.typo3.org/issues/39434))
-   \[BUGFIX\] Indexing files does not store the language
    ([\#46261](https://forge.typo3.org/issues/46261))
-   \[BUGFIX\] Fix PHP warning trigged in initFEuser
    ([\#42921](https://forge.typo3.org/issues/42921))
-   \[BUGFIX\] requestUpdate sensitive to spaces
    ([\#49872](https://forge.typo3.org/issues/49872))
-   \[BUGFIX\] Exceptions if EXT:context\_help is not installed
    ([\#48394](https://forge.typo3.org/issues/48394))
-   \[BUGFIX\] Permissions backend module not accessible
    ([\#49918](https://forge.typo3.org/issues/49918))
-   \[BUGFIX\] File upload in RTE-Link-Editor throws 500 error
    ([\#48219](https://forge.typo3.org/issues/48219))
-   \[BUGFIX\] Allow target attribute for more doctypes
    ([\#37710](https://forge.typo3.org/issues/37710))
-   \[BUGFIX\] Page title change directly updates title in content area
    ([\#49706](https://forge.typo3.org/issues/49706))
-   \[TASK\] Allow sys\_category in rootpage
    ([\#47530](https://forge.typo3.org/issues/47530))
-   \[BUGFIX\] requestUpdate sensitive to spaces
    ([\#42789](https://forge.typo3.org/issues/42789))
-   \[BUGFIX\] Cannot load css\_styled\_content TS using
    INCLUDE\_TYPOSCRIPT
    ([\#49461](https://forge.typo3.org/issues/49461))
-   \[BUGFIX\] False-Positives in SQL comparison
    ([\#41344](https://forge.typo3.org/issues/41344))
-   \[BUGFIX\] Fix reverse order handling of MediaProvider
    ([\#49136](https://forge.typo3.org/issues/49136))
-   \[BUGFIX\] BasicFileUtility uses deprecation API in a wrong way
    ([\#49765](https://forge.typo3.org/issues/49765))
-   Revert “\[BUGFIX\] Files with unclean path indexed multiple times”
-   Change-Id: I238c67b827ca7d5f44c529494578fe7debfa06aa
-   \[TASK\] Travis: Speedup cloning of repos
-   \[BUGFIX\] Files with unclean path indexed multiple times
    ([\#46989](https://forge.typo3.org/issues/46989))
-   \[BUGFIX\] sys\_file record doesn't get flagged as delete
    ([\#48336](https://forge.typo3.org/issues/48336))
-   \[BUGFIX\] Move functional test case to functional folder
    ([\#49746](https://forge.typo3.org/issues/49746))
-   Revert “\[BUGFIX\] sys\_file record doesn't get flagged as delete”
-   the root of it. The patch is reverted for now until the tests
    ([\#48336](https://forge.typo3.org/issues/48336))
-   \[BUGFIX\] CE:Image - backend preview of image order
    ([\#48645](https://forge.typo3.org/issues/48645))
-   \[BUGFIX\] sys\_file record doesn't get flagged as delete
    ([\#48336](https://forge.typo3.org/issues/48336))
-   \[BUGFIX\]\[Cache\] Typo3DbBackend forgets tag entries in flushByTag
    ([\#48984](https://forge.typo3.org/issues/48984))
-   \[BUGFIX\] Don't show translated categories in parent tree
    ([\#44915](https://forge.typo3.org/issues/44915))
-   \[BUGFIX\] CSV rendering in CType table not properly done
    ([\#47356](https://forge.typo3.org/issues/47356))
-   \[BUGFIX\] StorageRepository::findByStorageType() uses wrong
    typeField ([\#48127](https://forge.typo3.org/issues/48127))
-   \[BUGFIX\] Shared defaults for CE wizard using TCAdefaults
    ([\#41434](https://forge.typo3.org/issues/41434))
-   \[BUGFIX\] Enable table property for all user settings types
    ([\#47966](https://forge.typo3.org/issues/47966))
-   \[BUGFIX\] Exception on thumbnail generation in TCA
    ([\#49009](https://forge.typo3.org/issues/49009))
-   \[BUGFIX\] Improve jumpUrl download of large files
    ([\#41718](https://forge.typo3.org/issues/41718))
-   \[BUGFIX\] Web-&gt;Page - Language view not usable
    ([\#42768](https://forge.typo3.org/issues/42768))
-   \[TASK\] Remove Comment for deprecation of f:translate key
    ([\#49670](https://forge.typo3.org/issues/49670))
-   \[BUGFIX\] Upload in backend does not index file
    ([\#46595](https://forge.typo3.org/issues/46595))
-   \[BUGFIX\] Rootline utility must respect pageOverlayFields
    ([\#48224](https://forge.typo3.org/issues/48224))
-   \[BUGFIX\] RTE: Importing google webfonts breaks style sheet parsing
    ([\#49648](https://forge.typo3.org/issues/49648))
-   \[BUGFIX\] Invalid cache backend option “compression” for
    NullBackend ([\#49585](https://forge.typo3.org/issues/49585))
-   \[BUGFIX\] EM: Scheduler task does not persist to database
    ([\#49528](https://forge.typo3.org/issues/49528))
-   \[BUGFIX\] Wrong top/bottom margin rendering in CSC
    ([\#47403](https://forge.typo3.org/issues/47403))
-   \[BUGFIX\] Increase the width of the content element of type Plain
    HTML ([\#43112](https://forge.typo3.org/issues/43112))
-   \[BUGFIX\] Do not show System Extensions Wizard when done
    ([\#49256](https://forge.typo3.org/issues/49256))
-   \[TASK\] createEncryptionKey always returns key with 96 characters
    ([\#29220](https://forge.typo3.org/issues/29220))
-   \[BUGFIX\] EM: TimeSinceLastUpdateViewHelper fatals if never updated
    ([\#47726](https://forge.typo3.org/issues/47726))
-   \[TASK\] Improve error message in NotFoundView to identify source
    ([\#49519](https://forge.typo3.org/issues/49519))
-   \[BUGFIX\] Wrong placement of image caption in text with image
    ([\#48354](https://forge.typo3.org/issues/48354))
-   \[BUGFIX\] Fix localization of the BE user module
    ([\#49402](https://forge.typo3.org/issues/49402))
-   \[BUGFIX\] compressJs returns wrong filenames
    ([\#48213](https://forge.typo3.org/issues/48213))
-   \[BUGFIX\] stdWrap for special.value applied twice
    ([\#40855](https://forge.typo3.org/issues/40855))
-   \[TASK\] Add support for “outdated” extensions
    ([\#49350](https://forge.typo3.org/issues/49350))
-   \[BUGFIX\] ActionController must use namespaced object view pattern
    ([\#47609](https://forge.typo3.org/issues/47609))
-   \[BUGFIX\] Fix property mapping of checkbox arrays
    ([\#47832](https://forge.typo3.org/issues/47832))
-   \[BUGFIX\] Fix localization of the language module
    ([\#49401](https://forge.typo3.org/issues/49401))
-   \[BUGFIX\] Fix one language label in the extension manager
    ([\#49404](https://forge.typo3.org/issues/49404))
-   \[BUGFIX\] Wrong result on unequal globalVar condition
    ([\#45165](https://forge.typo3.org/issues/45165))
-   \[BUGFIX\] Record history shows two back buttons in docheader
    ([\#49338](https://forge.typo3.org/issues/49338))
-   \[BUGFIX\] Invisible icon blocks mousefocus of non-required
    inputfields ([\#34042](https://forge.typo3.org/issues/34042))
-   \[BUGFIX\] Insert rows only once in exec\_INSERTmultipleRows
    ([\#48220](https://forge.typo3.org/issues/48220))
-   \[TASK\] Update URL to the exception collection
    ([\#49066](https://forge.typo3.org/issues/49066))
-   \[BUGFIX\] Flexform field is available but not passed to
    sub-function calls ([\#49331](https://forge.typo3.org/issues/49331))
-   \[BUGFIX\] Illegal string offset warning in AjaxLoginHandler
    ([\#49327](https://forge.typo3.org/issues/49327))
-   \[BUGFIX\] Misleading label in beuser module
    ([\#49318](https://forge.typo3.org/issues/49318))
-   Revert “\[BUGFIX\] Nested FLUIDTEMPLATE doesn't work anymore”
-   \[BUGFIX\] Nested FLUIDTEMPLATE doesn't work anymore
    ([\#48021](https://forge.typo3.org/issues/48021))
-   \[BUGFIX\] Fix JS error with Context Sensitive Help
    ([\#26588](https://forge.typo3.org/issues/26588))
-   \[BUGFIX\] Failing FAL unit test
    ([\#49296](https://forge.typo3.org/issues/49296))
-   \[BUGFIX\] Correct permissions of new files
    ([\#49029](https://forge.typo3.org/issues/49029))
-   \[BUGFIX\] Filelist: Only show paste buttons if clipObj is set
    ([\#48603](https://forge.typo3.org/issues/48603))
-   \[BUGFIX\] Raw search can't search inside the pages table
    ([\#49242](https://forge.typo3.org/issues/49242))
-   \[BUGFIX\] Use correct path in belog modules
    ([\#49091](https://forge.typo3.org/issues/49091))
-   \[TASK\] Cleanup ChangeLog
    ([\#49110](https://forge.typo3.org/issues/49110))
-   \[BUGFIX\] Incorrect grouping of exclude fields in translated
    backend ([\#47839](https://forge.typo3.org/issues/47839))
-   \[BUGFIX\] Illegal string offset 'translations' in
    DatabaseRecordList ([\#47103](https://forge.typo3.org/issues/47103))
-   \[BUGFIX\] Allow non-Admins to delete Records finally
    ([\#34156](https://forge.typo3.org/issues/34156))
-   \[BUGFIX\] FileLogWriter ignores log file configuration
    ([\#48918](https://forge.typo3.org/issues/48918))
-   \[BUGFIX\] Avoid double wrap in css\_styled\_content
    ([\#49051](https://forge.typo3.org/issues/49051))
-   \[BUGFIX\] Missing file extension class with “file links” type
    ([\#48996](https://forge.typo3.org/issues/48996))
-   \[BUGFIX\] List Module - Reference count limited to 20
    ([\#49004](https://forge.typo3.org/issues/49004))
-   \[BUGFIX\] changing FE user password updates tstamp
    ([\#48685](https://forge.typo3.org/issues/48685))
-   \[BUGFIX\] Disable restricted users to handle page records in
    pagetree ([\#47126](https://forge.typo3.org/issues/47126))
-   \[BUGFIX\] uploading extname\_1.0.3 (1).zip creates extension
    “extname (1)” ([\#48332](https://forge.typo3.org/issues/48332))
-   \[BUGFIX\] Pass \$field to BackendUtility::getFlexFormDS
    ([\#39527](https://forge.typo3.org/issues/39527))
-   \[BUGFIX\] Some TCAdefaults work only with “Page (inside)”
    ([\#14955](https://forge.typo3.org/issues/14955))
-   \[BUGFIX\] Link to not-existing folder results in fatal error
    ([\#48390](https://forge.typo3.org/issues/48390))
-   \[BUGFIX\] Catch FolderDoesNotExist Exception on links/images
    ([\#46785](https://forge.typo3.org/issues/46785))
-   \[TASK\] Set TYPO3 version to 6.0.7-dev


