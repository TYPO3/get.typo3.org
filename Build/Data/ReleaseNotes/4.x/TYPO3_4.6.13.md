Release Notes for TYPO3 4.6.13
==============================

This document contains information about TYPO3 version 4.6.13 which was
released on October 16th 2012.

News
----

This release is a bug fix release.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    aba60a184cfa39af788faeaa8b0533aa  blankpackage-4.6.13.tar.gz
    dbc45a3f829c69d077ab566bdf18b158  blankpackage-4.6.13.zip
    0b99a95404ab92dd3ce2ee36cda30236  dummy-4.6.13.tar.gz
    5985f97fdb4e590e2a14ddf44dda80e2  dummy-4.6.13.zip
    fea6dba635c75f8b1d64b3bbb120719b  typo3_src+dummy-4.6.13.zip
    14fffca142718b458909e2a072bc4f2c  typo3_src-4.6.13.tar.gz
    7595c4dfdd55e82c5b517f90aed62983  typo3_src-4.6.13.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.6.12](TYPO3_4.6.12 "wikilink"):

-   \[TASK\] Update md5 sums for 4.6.13
-   \[TASK\] Update backend sprites according to rebranding
-   \[!!!\]\[BUGFIX\] Localization fallback does not work in Backend
    ([\#41996](https://forge.typo3.org/issues/41996))
-   \[TASK\] Adjust Logos to new style-guide
    ([\#41704](https://forge.typo3.org/issues/41704))
-   \[BUGFIX\] BE user switch impossible when in adminOnly mode
    ([\#32686](https://forge.typo3.org/issues/32686))
-   \[BUGFIX\] Validation of umlaut URLs and mail addresses
    ([\#30311](https://forge.typo3.org/issues/30311))
-   \[BUGFIX\] Excludefieds must exclude admin only tables
    ([\#34460](https://forge.typo3.org/issues/34460))
-   \[BUGFIX\] undefined variable imgExt
    ([\#34446](https://forge.typo3.org/issues/34446))
-   \[BUGFIX\] t3lib\_iconWorks must check if array exists before using
    it ([\#24248](https://forge.typo3.org/issues/24248))
-   \[TASK\] Introduce “TYPO3 CMS” in EXT: about
    ([\#41823](https://forge.typo3.org/issues/41823))
-   \[BUGFIX\] Make generated thumbnails browser-cachable
    ([\#21481](https://forge.typo3.org/issues/21481))
-   \[BUGFIX\] TCEForms.Suggest wizard in IRRE records
    ([\#27020](https://forge.typo3.org/issues/27020))
-   \[BUGFIX\] Warning in list module
    ([\#39678](https://forge.typo3.org/issues/39678))
-   \[BUGFIX\] Endless loop in flushOutputBuffers()
    ([\#40126](https://forge.typo3.org/issues/40126))
-   \[BUGFIX\] Take versioned record into account for showHidden flag.
    ([\#33392](https://forge.typo3.org/issues/33392))
-   \[BUGFIX\] Fix SQL error in Livesearch with empty TCA sortby setting
    ([\#40816](https://forge.typo3.org/issues/40816))
-   \[BUGFIX\] Pagetree - Prevent a call to moveNode while creating
    nodes ([\#39820](https://forge.typo3.org/issues/39820))
-   \[BUGFIX\] FLUIDTEMPLATE - Serialization of 'Closure' is not allowed
    ([\#36820](https://forge.typo3.org/issues/36820))
-   \[BUGFIX\] Prevent saltedpasswords destroying the password
    ([\#41828](https://forge.typo3.org/issues/41828))
-   \[BUGFIX\] RTE: Localization to content language does not work
    ([\#39271](https://forge.typo3.org/issues/39271))
-   \[BUGFIX\] imagecopyresized: correct invalid parameters
    ([\#26660](https://forge.typo3.org/issues/26660))
-   \[BUGFIX\] RTE: Paste as plain text doesn't work in Safari (Mac
    only) ([\#35356](https://forge.typo3.org/issues/35356))
-   \[BUGFIX\] CE with “All languages” doesn't show with every lang
    ([\#24087](https://forge.typo3.org/issues/24087))
-   \[BUGFIX\] CE with “All languages” isn't shown in Page module
    ([\#24087](https://forge.typo3.org/issues/24087))
-   \[BUGFIX\] Proper cursor icon in access module
    ([\#33230](https://forge.typo3.org/issues/33230))
-   \[TASK\] Group excludefields by table
    ([\#34098](https://forge.typo3.org/issues/34098))
-   \[BUGFIX\] User settings don't remember that default language is
    selected ([\#31943](https://forge.typo3.org/issues/31943))
-   \[BUGFIX\] Make alphanum. filter work with umlauts
    ([\#35284](https://forge.typo3.org/issues/35284))
-   \[BUGFIX\] Fix the additional icon check
    ([\#41463](https://forge.typo3.org/issues/41463))
-   \[BUGFIX\] Fix translation moving in workspaces
    ([\#33592](https://forge.typo3.org/issues/33592))
-   \[BUGFIX\] strftime expects parameter 2 to be long, string given
    ([\#38717](https://forge.typo3.org/issues/38717))
-   \[BUGFIX\] RTE: array\_flip warning on array of languages
    ([\#35147](https://forge.typo3.org/issues/35147))
-   \[BUGFIX\] Fix compressor flooding typo3temp
    ([\#40409](https://forge.typo3.org/issues/40409))
-   \[BUGFIX\] JS error in IE7 while starting RTE
    ([\#40082](https://forge.typo3.org/issues/40082))
-   \[BUGFIX\] Words with special characters not added to personal
    dictionary ([\#38653](https://forge.typo3.org/issues/38653))
-   \[BUGFIX\] RTE is not loading in IE8, when used with feedit
    ([\#40558](https://forge.typo3.org/issues/40558))
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
-   \[BUGFIX\] autoloader should ignore non existing extensions
    ([\#39649](https://forge.typo3.org/issues/39649))
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
-   \[BUGFIX\] PHP warning when no language pack is available
    ([\#40108](https://forge.typo3.org/issues/40108))
-   \[BUGFIX\] Multi-table relationship not recognized in
    t3lib\_loadDBGroup ([\#34148](https://forge.typo3.org/issues/34148))
-   \[TASK\] Set TYPO3 version to 4.6.13-dev

### dbal

-   \[TASK\] Update md5 sum for 4.6.13

### extbase

-   \[TASK\] Update version number to 1.4.5
-   \[BUGFIX\] Fix translation fallback
-   \[BUGFIX\] Declare LocalizationUtility::translateFileReference
    static

### fluid

-   \[TASK\] Update version number to 1.4.2
-   \[BUGFIX\] Return empty result in pagination if page does not exist

### linkvalidator

-   \[TASK\] Update md5 sum for 4.6.13

### version

-   \[TASK\] Update version number to 4.6.13

### workspaces

-   \[TASK\] Update version number to 4.6.13


