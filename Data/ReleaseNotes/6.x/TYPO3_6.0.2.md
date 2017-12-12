Release Notes for TYPO3 6.0.2
=============================

This document contains information about TYPO3 version 6.0.2 which was
released on February 14th 2013.

News
----

This release is a bug fix release only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    e61f9433278266d4d5bc2d52efda06f9  blankpackage-6.0.2.tar.gz
    3408123f29c7d550ccc4ad52f980f098  blankpackage-6.0.2.zip
    ddafc3525ba3f890e364100b841cfcd3  dummy-6.0.2.tar.gz
    53b4b1bbbd899f7ea44388fb34b0b511  dummy-6.0.2.zip
    ff37e3d1a84e5d3009b33ad30af2e2f4  governmentpackage-6.0.2.tar.gz
    b6839fcb87a655399c1a4c9c7e88a51a  governmentpackage-6.0.2.zip
    aa38852b5b7f3ae3c9ef72b2d05b7c4d  introductionpackage-6.0.2.tar.gz
    1410321d1b76c936c97d46ff236387b3  introductionpackage-6.0.2.zip
    848cf9a8b2ea05f3e1ace971d5bed388  typo3_src+dummy-6.0.2.zip
    ba0102330a08f9dcd330efca97234280  typo3_src-6.0.2.tar.gz
    75ab14b99495848b4a7610dcd9db5c35  typo3_src-6.0.2.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since [6.0.1](TYPO3_6.0.1 "wikilink"):

-   \[RELEASE\] Release of TYPO3 6.0.2
-   \[BUGFIX\] L10n fallback does not work for TS labels
    ([\#44099](https://forge.typo3.org/issues/44099))
-   \[BUGFIX\] L10n fallback does not work for ExtJS in BE
    ([\#44273](https://forge.typo3.org/issues/44273))
-   \[TASK\] Raise submodule pointer
-   \[BUGFIX\] Allow “en” as language key
    ([\#42084](https://forge.typo3.org/issues/42084))
-   \[BUGFIX\] FAL: file properties are not updated
    ([\#44585](https://forge.typo3.org/issues/44585))
-   \[TASK\] Remove not used viewhelper in beuser
    ([\#45338](https://forge.typo3.org/issues/45338))
-   \[BUGFIX\] Exception when scheduling “at” execution time
    ([\#45265](https://forge.typo3.org/issues/45265))
-   \[BUGFIX\] Processed files get corrupted when regenerated
    ([\#45308](https://forge.typo3.org/issues/45308))
-   \[TASK\] Raise submodule pointer
-   \[BUGFIX\]\[Cache\]\[PDO\] Duplicate cache entry possible
    ([\#34129](https://forge.typo3.org/issues/34129))
-   \[BUGFIX\]\[Cache\] Method parameter CGL fixes
    ([\#45257](https://forge.typo3.org/issues/45257))
-   \[TASK\] Raise submodule pointer
-   \[BUGFIX\] Crash after file upload on Windows without finfo
    ([\#37440](https://forge.typo3.org/issues/37440))
-   \[BUGFIX\] Wrong SQL statements in TCA for sys\_category
    ([\#44911](https://forge.typo3.org/issues/44911))
-   \[BUGFIX\] Additional extTables script might not exist
    ([\#45122](https://forge.typo3.org/issues/45122))
-   \[BUGFIX\] Misspelling in scheduler documentation
    ([\#33936](https://forge.typo3.org/issues/33936))
-   \[BUGFIX\] tools\_dbint needs to be called via mod.php
    ([\#45112](https://forge.typo3.org/issues/45112))
-   \[BUGFIX\] IE9 compatibility clear cache menu
    ([\#36364](https://forge.typo3.org/issues/36364))
-   \[BUGFIX\] Hook call modifyDBRow in ContentContentObject
    ([\#44416](https://forge.typo3.org/issues/44416))
-   \[BUGFIX\] Install tool documentation default installTollPassword
    ([\#44682](https://forge.typo3.org/issues/44682))
-   \[BUGFIX\] Labels for grouping bookmarks are missing
    ([\#44691](https://forge.typo3.org/issues/44691))
-   \[BUGFIX\] Fix misspelling in RTE meta menu
    ([\#43886](https://forge.typo3.org/issues/43886))
-   \[BUGFIX\] Impossible to save the TCA configuration
    ([\#44331](https://forge.typo3.org/issues/44331))
-   \[BUGFIX\] load TCA before manipulation
    ([\#38505](https://forge.typo3.org/issues/38505))
-   \[BUGFIX\] Restore support for Update script
    ([\#43244](https://forge.typo3.org/issues/43244))
-   \[BUGFIX\] Misspelled class name FrontendUserAuthtenication
    ([\#43464](https://forge.typo3.org/issues/43464))
-   \[BUGFIX\] add check for empty form values in FORM View
    ([\#28606](https://forge.typo3.org/issues/28606))
-   \[BUGFIX\] StorageRepository must respect 'deleted' flag
    ([\#44630](https://forge.typo3.org/issues/44630))
-   \[BUGFIX\] Remove delete button for sys\_file
    ([\#45065](https://forge.typo3.org/issues/45065))
-   \[CLEANUP\] Cleanup calls and docheaders in Core/Classes/Resource
    ([\#44476](https://forge.typo3.org/issues/44476))
-   \[TASK\] Remove EXT:lang FormEngineBasedCheckboxGroupViewHelper
    ([\#44527](https://forge.typo3.org/issues/44527))
-   \[TASK\] DataHandler::getAutoVersionId() should be public
    ([\#45050](https://forge.typo3.org/issues/45050))
-   \[BUGFIX\] Remove save and new button for sys\_file
    ([\#45044](https://forge.typo3.org/issues/45044))
-   \[BUGFIX\] ext:aboutmodules broken link to ext:reports
    ([\#40218](https://forge.typo3.org/issues/40218))
-   \[BUGFIX\] displayWarningMessages uses wrong returnUrl
    ([\#44537](https://forge.typo3.org/issues/44537))
-   \[BUGFIX\] LocalConfiguration extListArray should be written without
    keys ([\#44938](https://forge.typo3.org/issues/44938))
-   \[BUGFIX\] Reset legacy fields if no relations are found
    ([\#44988](https://forge.typo3.org/issues/44988))
-   \[BUGFIX\] Add missing labels for Extension Manager
    ([\#44941](https://forge.typo3.org/issues/44941))
-   \[BUGFIX\] Compatibility fix for get\_html\_translation\_table()
    ([\#39287](https://forge.typo3.org/issues/39287))
-   \[BUGFIX\] Remove obsolete flushByTags() from wincache
    ([\#44937](https://forge.typo3.org/issues/44937))
-   \[BUGFIX\] Register suite integrity tests again
    ([\#44936](https://forge.typo3.org/issues/44936))
-   \[TASK\] Set TYPO3 version to 6.0.2-dev

### extbase

-   \[BUGFIX\] Add foreign\_match\_fields support for one-to-x relations
    ([\#45337](https://forge.typo3.org/issues/45337))

<Category:ReleaseNotes/TYPO3_6.0.x> [Category:TYPO3
6.0](Category:TYPO3_6.0 "wikilink") <Category:2013>
