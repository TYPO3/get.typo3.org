Release Notes for TYPO3 4.7.5
=============================

This document contains information about TYPO3 version 4.7.5 which was
released on October 16th 2012.

News
----

This release is a bug fix release.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    d4e0768eded10a55599db782d4906367  blankpackage-4.7.5.tar.gz
    5a8adbb542cd1832f095ea255dbdb692  blankpackage-4.7.5.zip
    5eea55fe86be00f1964d2fd018dfba2f  dummy-4.7.5.tar.gz
    66ad2185d851803d4a7d1945dc2e4e4a  dummy-4.7.5.zip
    58fc550fdb2b28386d6e92ba46136185  governmentpackage-4.7.5.tar.gz
    ab3d89e817c579649828990793e816b2  governmentpackage-4.7.5.zip
    8cb06fdd777542b162abad1f865e1920  introductionpackage-4.7.5.tar.gz
    c9e57817cbb826e68ad9561a318cd2ee  introductionpackage-4.7.5.zip
    351a1395484474c5faed8d1a7c94c13d  typo3_src+dummy-4.7.5.zip
    6f53ac4b1c8b4f51d0b9a32ac27099ef  typo3_src-4.7.5.tar.gz
    a4eac135bcf9653e2a125999e0c9fa36  typo3_src-4.7.5.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since [4.7.4](TYPO3_4.7.4 "wikilink"):

-   \[TASK\] Raise submodule pointer
-   \[TASK\] Update version number to 4.7.5
-   \[!!!\]\[BUGFIX\] Localization fallback does not work in Backend
    ([\#41996](https://forge.typo3.org/issues/41996))
-   \[TASK\] Update backend sprites according to rebranding
-   \[TASK\] Adjust Logos to new style-guide
    ([\#41704](https://forge.typo3.org/issues/41704))
-   \[TASK\] Introduce “TYPO3 CMS” in EXT: about
    ([\#41823](https://forge.typo3.org/issues/41823))
-   \[BUGFIX\] Prevent saltedpasswords destroying the password
    ([\#41828](https://forge.typo3.org/issues/41828))
-   \[BUGFIX\] RTE: Localization to content language does not work
    ([\#39271](https://forge.typo3.org/issues/39271))
-   \[BUGFIX\] RTE: paste as plain text does not work in IE9
    ([\#39389](https://forge.typo3.org/issues/39389))
-   \[BUGFIX\] CE with “All languages” doesn't show with every lang
    ([\#24087](https://forge.typo3.org/issues/24087))
-   \[BUGFIX\] Fix the additional icon check
    ([\#41463](https://forge.typo3.org/issues/41463))
-   \[BUGFIX\] FLUIDTEMPLATE - Serialization of 'Closure' is not allowed
    ([\#36820](https://forge.typo3.org/issues/36820))
-   \[BUGFIX\] Make alphabetic filter work with umlauts
    ([\#35296](https://forge.typo3.org/issues/35296))
-   \[BUGFIX\] Pagetree - Prevent a call to moveNode while creating
    nodes ([\#39820](https://forge.typo3.org/issues/39820))
-   \[BUGFIX\] Make alphanum. filter work with umlauts
    ([\#35284](https://forge.typo3.org/issues/35284))
-   \[FEATURE\] Add several testcases for validators
    ([\#35333](https://forge.typo3.org/issues/35333))
-   \[BUGFIX\] Fix SQL error in Livesearch with empty TCA sortby setting
    ([\#40816](https://forge.typo3.org/issues/40816))
-   \[BUGFIX\] Take versioned record into account for showHidden flag.
    ([\#33392](https://forge.typo3.org/issues/33392))
-   \[TASK\] Disable Memcache tests for now
-   \[BUGFIX\] Endless loop in flushOutputBuffers()
    ([\#40126](https://forge.typo3.org/issues/40126))
-   \[BUGFIX\] MEDIA element ignores audio fallback
    ([\#39416](https://forge.typo3.org/issues/39416))
-   \[BUGFIX\] Hardcoded fileadmin directory in Import-Export
    ([\#41120](https://forge.typo3.org/issues/41120))
-   \[BUGFIX\] CE with “All languages” isn't shown in Page module
    ([\#24087](https://forge.typo3.org/issues/24087))
-   \[BUGFIX\] backColor transparent causes black background or
    flickering ([\#32781](https://forge.typo3.org/issues/32781))
-   \[BUGFIX\] strftime expects parameter 2 to be long, string given
    ([\#38717](https://forge.typo3.org/issues/38717))
-   \[BUGFIX\] Fix compressor flooding typo3temp
    ([\#40409](https://forge.typo3.org/issues/40409))
-   \[TASK\] Start memcached on travis-ci build
-   \[BUGFIX\] Words with special characters not added to personal
    dictionary ([\#38653](https://forge.typo3.org/issues/38653))
-   \[BUGFIX\] RTE is not loading in IE8, when used with feedit
    ([\#40558](https://forge.typo3.org/issues/40558))
-   \[BUGFIX\] htmlArea RTE: Cursor jumps to first letter with Chrome 22
    ([\#41411](https://forge.typo3.org/issues/41411))
-   \[!!!\]\[BUGFIX\] \*\_user table password field is to short
    ([\#39356](https://forge.typo3.org/issues/39356))
-   \[BUGFIX\] Do not save expand state for root node in TCA tree
    ([\#31978](https://forge.typo3.org/issues/31978))
-   \[BUGFIX\] File upload button is collapsed in Chrome 21
    ([\#39659](https://forge.typo3.org/issues/39659))
-   \[BUGFIX\] Error handler registration accepts way too much PHP error
    types ([\#31827](https://forge.typo3.org/issues/31827))
-   \[BUGFIX\] Tree view in admin panel is broken with PHP 5.4
    ([\#41213](https://forge.typo3.org/issues/41213))
-   \[BUGFIX\] Error handler callback causes fatal error for parse time
    errors ([\#31834](https://forge.typo3.org/issues/31834))
-   \[BUGFIX\] Follow-up to GeneralUtility::logDeprecatedFunction()
    ([\#40521](https://forge.typo3.org/issues/40521))
-   \[BUGFIX\] Fatal error in GeneralUtility::logDeprecatedFunction()
    ([\#40521](https://forge.typo3.org/issues/40521))
-   \[BUGFIX\] Error messages are not shown in 123 installation process
    ([\#41158](https://forge.typo3.org/issues/41158))
-   \[TASK\] Database creating fails due to not allowed characters
    ([\#41151](https://forge.typo3.org/issues/41151))
-   \[BUGFIX\] autoloader should ignore non existing extensions
    ([\#39649](https://forge.typo3.org/issues/39649))
-   \[BUGFIX\] Switch to List module on root page leads to blank page
    ([\#40781](https://forge.typo3.org/issues/40781))
-   \[BUGFIX\] Link to install tool in reports leads to old page
    ([\#37067](https://forge.typo3.org/issues/37067))
-   \[BUGFIX\] pi\_getLL() alternative language translation fails
    ([\#39850](https://forge.typo3.org/issues/39850))
-   \[BUGFIX\] L10n PHP parser stores NULL for unknown key
    ([\#40643](https://forge.typo3.org/issues/40643))
-   \[BUGFIX\] L10n parser interface is wrongly defined
    ([\#40641](https://forge.typo3.org/issues/40641))
-   \[BUGFIX\] Compressor: filemtime(): stat failed in Help &gt; About
    TYPO3 ([\#35212](https://forge.typo3.org/issues/35212))
-   \[BUGFIX\] Set charset property after cloning t3lib\_PageRenderer
    ([\#27957](https://forge.typo3.org/issues/27957))
-   Revert “\[BUGFIX\] Invalid fallback for non-localized labels”
    ([\#39814](https://forge.typo3.org/issues/39814))
-   \[BUGFIX\] config.pageTitleSeparator not known by t3editor
    ([\#39600](https://forge.typo3.org/issues/39600))
-   \[BUGFIX\] PHP warning when no language pack is available
    ([\#40108](https://forge.typo3.org/issues/40108))
-   \[BUGFIX\] Warning in list module
    ([\#39678](https://forge.typo3.org/issues/39678))
-   \[TASK\] Set TYPO3 version to 4.7.5-dev

### dbal

-   \[TASK\] Update version number to 4.7.5

### extbase

-   \[TASK\] Update version number to 4.7.5
-   \[TASK\] phpdoc-fixes
-   \[BUGFIX\] Fix translation fallback
-   \[BUGFIX\] Declare LocalizationUtility::translateFileReference
    static
-   \[BUGFIX\] ObjectManager dependencies in SignalSlot registration
-   \[BUGFIX\] Possible failure in dependency injection

### fluid

-   \[TASK\] Update version number to 4.7.5
-   \[BUGFIX\] Return empty result in pagination if page does not exist

### linkvalidator

-   \[TASK\] Update version number to 4.7.5

### version

-   \[TASK\] Update version number to 4.7.5
-   Revert “\[BUGFIX\] Sent notification when changes are published”

### workspaces

-   \[TASK\] Update version number to 4.7.5

<Category:ReleaseNotes/TYPO3_4.7.x> [Category:TYPO3
4.7](Category:TYPO3_4.7 "wikilink") <Category:2012>
