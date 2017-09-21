Release Notes for TYPO3 4.5.20
==============================

This document contains information about TYPO3 version 4.5.20 which was
released on October 16th 2012.

News
----

This release is a bug fix release.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    c846723081bc19a05580ca65e8be7577  blankpackage-4.5.20.tar.gz
    ea738eb578c1d4d753a01e41ab2bdc90  blankpackage-4.5.20.zip
    8f7868cfa678f6e3d0aa800447f69106  dummy-4.5.20.tar.gz
    10d5f3488b61868b903ef20646949ba4  dummy-4.5.20.zip
    9114666fbc580b972832d662a88ce242  introductionpackage-4.5.20.tar.gz
    b6926b33cfd8f8d5e92b597e812ec2bf  introductionpackage-4.5.20.zip
    e1d2588888121f2351e56d96c6408be4  typo3_src+dummy-4.5.20.zip
    67c0906d065ec2f5cbacf6bce6253472  typo3_src-4.5.20.tar.gz
    7e95fb3de385f8f0ecf78b8bcca065be  typo3_src-4.5.20.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.5.19](TYPO3_4.5.19 "wikilink"):

-   \[TASK\] Raise submodule pointer
-   \[TASK\] Update md5 sums for 4.5.20
-   \[TASK\] Update backend sprites according to rebranding
-   \[TASK\] Introduce “TYPO3 CMS” in EXT: about
    ([\#41823](https://forge.typo3.org/issues/41823))
-   \[TASK\] Adjust Logos to new style-guide
    ([\#41704](https://forge.typo3.org/issues/41704))
-   \[BUGFIX\] Prevent saltedpasswords destroying the password
    ([\#41828](https://forge.typo3.org/issues/41828))
-   \[BUGFIX\] RTE: Paste as plain text doesn't work in Safari (Mac
    only) ([\#35356](https://forge.typo3.org/issues/35356))
-   \[BUGFIX\] CE with “All languages” doesn't show with every lang
    ([\#24087](https://forge.typo3.org/issues/24087))
-   \[BUGFIX\] CE with “All languages” isn't shown in Page module
    ([\#24087](https://forge.typo3.org/issues/24087))
-   \[BUGFIX\] Proper cursor icon in access module
    ([\#33230](https://forge.typo3.org/issues/33230))
-   \[BUGFIX\] Fix the additional icon check
    ([\#41463](https://forge.typo3.org/issues/41463))
-   \[BUGFIX\] Fix translation moving in workspaces
    ([\#33592](https://forge.typo3.org/issues/33592))
-   \[BUGFIX\] strftime expects parameter 2 to be long, string given
    ([\#38717](https://forge.typo3.org/issues/38717))
-   \[BUGFIX\] RTE: array\_flip warning on array of languages
    ([\#35147](https://forge.typo3.org/issues/35147))
-   \[BUGFIX\] Words with special characters not added to personal
    dictionary ([\#38653](https://forge.typo3.org/issues/38653))
-   \[BUGFIX\] htmlArea RTE: Cursor jumps to first letter with Chrome 22
    ([\#41411](https://forge.typo3.org/issues/41411))
-   \[BUGFIX\] Do not save expand state for root node in TCA tree
    ([\#31978](https://forge.typo3.org/issues/31978))
-   \[BUGFIX\] File upload button is collapsed in Chrome 21
    ([\#39659](https://forge.typo3.org/issues/39659))
-   \[BUGFIX\] Switch to List module on root page leads to blank page
    ([\#40781](https://forge.typo3.org/issues/40781))
-   \[BUGFIX\] Error handler registration accepts way too much PHP error
    types ([\#31827](https://forge.typo3.org/issues/31827))
-   \[BUGFIX\] Tree view in admin panel is broken with PHP 5.4
    ([\#41213](https://forge.typo3.org/issues/41213))
-   \[BUGFIX\] Error handler callback causes fatal error for parse time
    errors ([\#31834](https://forge.typo3.org/issues/31834))
-   \[BUGFIX\] Error messages are not shown in 123 installation process
    ([\#41158](https://forge.typo3.org/issues/41158))
-   \[TASK\] Database creating fails due to not allowed characters
    ([\#41151](https://forge.typo3.org/issues/41151))
-   \[BUGFIX\] Set charset property after cloning t3lib\_PageRenderer
    ([\#27957](https://forge.typo3.org/issues/27957))
-   \[BUGFIX\] PHP warning when no language pack is available
    ([\#40108](https://forge.typo3.org/issues/40108))
-   \[TASK\] Set TYPO3 version to 4.5.20-dev

### dbal

-   \[TASK\] Update md5 sum for 4.5.20

### extbase

-   \[TASK\] Update version number to 1.3.4
-   \[+BUGFIX\] (Persistence) Make Typo3QuerySettings exchangeable
-   \[BUGFIX\] Declare LocalizationUtility::translateFileReference
    static

### fluid

-   \[TASK\] Update version number to 1.3.1
-   \[BUGFIX\] Return empty result in pagination if page does not exist

### linkvalidator

-   \[TASK\] Raise version number for 4.5.20
-   \[BUGFIX\] Field name 'location' is case insensitive
    ([\#40486](https://forge.typo3.org/issues/40486))

### version

-   \[TASK\] Raise version number for 4.5.20

### workspaces

-   \[TASK\] Raise version number for 4.5.20
-   \[FEATURE\] set default grid limit to 30
    ([\#26287](https://forge.typo3.org/issues/26287))

<Category:ReleaseNotes/TYPO3_4.5.x> [Category:TYPO3
4.5](Category:TYPO3_4.5 "wikilink") <Category:2012>
