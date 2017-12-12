Release Notes for TYPO3 4.7.3
=============================

This document contains information about TYPO3 version 4.7.3 which was
released on August 8th 2012.

News
----

This release is a bug fix release.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    e30cde6732e87a1231426a27b5b44d73  blankpackage-4.7.3.tar.gz
    89405d56825f2c4568a6832b6c801db0  blankpackage-4.7.3.zip
    14d378b05b90f7fb6d847438b2455646  dummy-4.7.3.tar.gz
    3206283d964cafcd3f67d3b5862b5ae8  dummy-4.7.3.zip
    7f4a27533f4a5382ed56bd94b6fe8461  governmentpackage-4.7.3.tar.gz
    da2d2621956f01f380af90c028952d43  governmentpackage-4.7.3.zip
    0fa1e960b68917ae7036c1c156900729  introductionpackage-4.7.3.tar.gz
    0b88fccea802a816bb4cdc66e49aac8b  introductionpackage-4.7.3.zip
    2dff0f34ba468192011ffbede22a2ec0  typo3_src+dummy-4.7.3.zip
    5577ee860e1198fa970c14d9faaeb218  typo3_src-4.7.3.tar.gz
    00de2ca58ab273a9fc33678d1fcc9606  typo3_src-4.7.3.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since [4.7.2](TYPO3_4.7.2 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.7.3
-   \[BUGFIX\] sectionIndex menu is not i18n ready
    ([\#36616](https://forge.typo3.org/issues/36616))
-   \[BUGFIX\] Exception “Could not create directory”
    ([\#39583](https://forge.typo3.org/issues/39583))
-   \[BUGFIX\] Incorrect search-results when searching for part of word
    ([\#38548](https://forge.typo3.org/issues/38548))
-   \[BUGFIX\] Pass \$fieldName when processing FlexForm DS in
    t3lib\_transferData
    ([\#39527](https://forge.typo3.org/issues/39527))
-   \[BUGFIX\] t3lib\_db - expects parameter 1 to be resource, boolean
    given ([\#39509](https://forge.typo3.org/issues/39509))
-   \[BUGFIX\] IRRE childs don't expand in Internet Explorer
    ([\#38849](https://forge.typo3.org/issues/38849))
-   \[BUGFIX\] t3lib\_db::exec\_SELECTgetRows method annotation
    ([\#39417](https://forge.typo3.org/issues/39417))
-   \[BUGFIX\] BE User Settings cannot be saved by clicking enter
    ([\#39203](https://forge.typo3.org/issues/39203))
-   \[BUGFIX\] RTE: Installation of AllowClipboardHelper is not
    triggered ([\#39338](https://forge.typo3.org/issues/39338))
-   \[BUGFIX\] Exclude E\_STRICT from errors with PHP 5.4
    ([\#38691](https://forge.typo3.org/issues/38691))
-   \[TASK\] Always return a boolean in t3lib\_div::validPathStr
    ([\#38604](https://forge.typo3.org/issues/38604))
-   \[BUGFIX\] Invalid fallback for non-localized labels
    ([\#39220](https://forge.typo3.org/issues/39220))
-   \[BUGFIX\] YouTube videos can not be played with Media CE
    ([\#37967](https://forge.typo3.org/issues/37967))
-   \[BUGFIX\] stdWrap numRows fails due to wrong SELECT clause
    ([\#34152](https://forge.typo3.org/issues/34152))
-   \[TASK\] Raise submodule pointer
-   \[TASK\] Change @deprecated annotation to the correct version
    ([\#39067](https://forge.typo3.org/issues/39067))
-   \[BUGFIX\] QT movies prefixed abusively in Media CE
    ([\#39026](https://forge.typo3.org/issues/39026))
-   \[BUGFIX\] Send sane HTTP response in showpic on error
    ([\#39052](https://forge.typo3.org/issues/39052))
-   \[BUGFIX\] Remove bogus template in template analyzer
    ([\#38104](https://forge.typo3.org/issues/38104))
-   \[BUGFIX\] accessibilityWrap ignores simple value
    ([\#38791](https://forge.typo3.org/issues/38791))
-   \[BUG\] t3lib\_div::getFilesInDir order differs from order in File
    list ([\#18771](https://forge.typo3.org/issues/18771))
-   \[BUGFIX\] RTE: Importing google webfonts breaks style sheet parsing
    ([\#36316](https://forge.typo3.org/issues/36316))
-   \[BUGFIX\] RTE spellcheck issue on Windows server
    ([\#36438](https://forge.typo3.org/issues/36438))
-   \[BUGFIX\] RTE 4.7: Incorrect behaviours in IE9 native mode
    ([\#38657](https://forge.typo3.org/issues/38657))
-   \[TASK\] Set TYPO3 version to 4.7.3-dev

<Category:ReleaseNotes/TYPO3_4.7.x> [Category:TYPO3
4.7](Category:TYPO3_4.7 "wikilink") <Category:2012>
