Release Notes for TYPO3 4.5.18
==============================

This document contains information about TYPO3 version 4.5.18 which was
released on August 8th 2012.

News
----

This release is a bug fix release.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    4fc5feef78a503ad1e88af2bfa09acbd  blankpackage-4.5.18.tar.gz
    0aec3c37e3511ecbaf4fbb6a937e0429  blankpackage-4.5.18.zip
    8542e122256f39261ad63bd84144a98f  dummy-4.5.18.tar.gz
    86e729cfda71c593d55196d5ba743096  dummy-4.5.18.zip
    7d438d8e760634dc61ccca0d112b0cd7  introductionpackage-4.5.18.tar.gz
    804e87c1e4832320711d4d2c19bae2c2  introductionpackage-4.5.18.zip
    ea49ad6d13aa3a5a519aca6cbed03904  typo3_src+dummy-4.5.18.zip
    fb6aee4d7820f40e7ca2c9848450bc30  typo3_src-4.5.18.tar.gz
    dac3dae6fd2fbab6cd60b02a62291735  typo3_src-4.5.18.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.5.17](TYPO3_4.5.17 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.5.18
-   \[BUGFIX\] Pass \$fieldName when processing FlexForm DS in
    t3lib\_transferData
    ([\#39527](https://forge.typo3.org/issues/39527))
-   \[BUGFIX\] t3lib\_db - expects parameter 1 to be resource, boolean
    given ([\#39509](https://forge.typo3.org/issues/39509))
-   \[BUGFIX\] Suggest Wizard crashes in Frontend Editing
    ([\#25079](https://forge.typo3.org/issues/25079))
-   \[BUGFIX\] unlink issues warnings for lock files
    ([\#32282](https://forge.typo3.org/issues/32282))
-   \[BUGFIX\] IRRE childs don't expand in Internet Explorer
    ([\#38849](https://forge.typo3.org/issues/38849))
-   \[BUGFIX\] t3lib\_db::exec\_SELECTgetRows method annotation
    ([\#39417](https://forge.typo3.org/issues/39417))
-   \[BUGFIX\] Properly check disabled versioning within tcemain
    ([\#33625](https://forge.typo3.org/issues/33625))
-   \[BUGFIX\] PHP warnings may show up in the List module
    ([\#22152](https://forge.typo3.org/issues/22152))
-   \[BUGFIX\] Shell command arguments are not escaped
    ([\#31278](https://forge.typo3.org/issues/31278))
-   \[BUGFIX\] RTE transformation transforms LF/CR between div and hr
    into space ([\#26815](https://forge.typo3.org/issues/26815))
-   \[BUGFIX\] Exclude E\_STRICT on PHP 5.4 and unify error reporting
    ([\#38691](https://forge.typo3.org/issues/38691))
-   \[TASK\] Always return a boolean in t3lib\_div::validPathStr
    ([\#38604](https://forge.typo3.org/issues/38604))
-   \[TASK\] Improve error message of “broken rootline”
    ([\#33082](https://forge.typo3.org/issues/33082))
-   \[BUGFIX\] Formmail doesn't always use correct character set
    ([\#28684](https://forge.typo3.org/issues/28684))
-   \[BUGFIX\] \$\_EXTCONF was not filled in ext\_tables.php
    ([\#38927](https://forge.typo3.org/issues/38927))
-   \[BUGFIX\] stdWrap numRows fails due to wrong SELECT clause
    ([\#34152](https://forge.typo3.org/issues/34152))
-   \[TASK\] Raise submodule pointer
-   \[BUGFIX\] QT movies prefixed abusively in Media CE
    ([\#39026](https://forge.typo3.org/issues/39026))
-   \[BUGFIX\] Send sane HTTP response in showpic on error
    ([\#39052](https://forge.typo3.org/issues/39052))
-   \[BUGFIX\] Unnecessary warning in css\_styled\_content (division by
    zero) ([\#36777](https://forge.typo3.org/issues/36777))
-   \[BUGFIX\] datepicker does not set current time as default
    ([\#33629](https://forge.typo3.org/issues/33629))
-   \[BUGFIX\] Drag&Drop inside the root page of the pagetree isn't
    possible ([\#24626](https://forge.typo3.org/issues/24626))
-   \[BUGFIX\] Check if user is allowed to paste page to pagetree
    ([\#33546](https://forge.typo3.org/issues/33546))
-   \[BUGFIX\] Add rootline workspace overlay for backend\_layouts.
    ([\#36313](https://forge.typo3.org/issues/36313))
-   \[BUGFIX\] accessibilityWrap ignores simple value
    ([\#38791](https://forge.typo3.org/issues/38791))
-   \[BUG\] t3lib\_div::getFilesInDir order differs from order in File
    list ([\#18771](https://forge.typo3.org/issues/18771))
-   \[BUGFIX\] RTE: Importing google webfonts breaks style sheet parsing
    ([\#36316](https://forge.typo3.org/issues/36316))
-   \[BUGFIX\] E\_DEPRECATED does not exist in PHP 5.2
    ([\#38645](https://forge.typo3.org/issues/38645))
-   \[BUGFIX\] RTE spellcheck issue on Windows server
    ([\#36438](https://forge.typo3.org/issues/36438))
-   \[TASK\] Set TYPO3 version to 4.5.18-dev

### extbase

-   \[BUGFIX\] Don't create caches twice
    ([\#37641](https://forge.typo3.org/issues/37641))


