Release Notes for TYPO3 4.6.11
==============================

This document contains information about TYPO3 version 4.6.11 which was
released on August 8th 2012.

News
----

This release is a bug fix release.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    8911293f8aef5b18acd4e666b519a136  blankpackage-4.6.11.tar.gz
    3b430e116f24d1ab9e984c524cc597cc  blankpackage-4.6.11.zip
    d96b87470725d07f0b11667dd4bae973  dummy-4.6.11.tar.gz
    9eccc53245c5eae7bb5f64969145ad97  dummy-4.6.11.zip
    137cc3666cda03a4bca6f78f282564be  typo3_src+dummy-4.6.11.zip
    e938a0e628db03d4a37db1f17081828c  typo3_src-4.6.11.tar.gz
    f3aed176ee5626b45f341e6b60a71c6e  typo3_src-4.6.11.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.6.10](TYPO3_4.6.10 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.6.11
-   \[TASK\] Raise submodule pointer
-   \[BUGFIX\] Exception “Could not create directory”
    ([\#39583](https://forge.typo3.org/issues/39583))
-   \[BUGFIX\] Pass \$fieldName when processing FlexForm DS in
    t3lib\_transferData
    ([\#39527](https://forge.typo3.org/issues/39527))
-   \[BUGFIX\] t3lib\_db - expects parameter 1 to be resource, boolean
    given ([\#39509](https://forge.typo3.org/issues/39509))
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
-   \[BUGFIX\] Exclude E\_STRICT from errors with PHP 5.4
    ([\#35154](https://forge.typo3.org/issues/35154))
-   \[TASK\] Always return a boolean in t3lib\_div::validPathStr
    ([\#38604](https://forge.typo3.org/issues/38604))
-   \[BUGFIX\] Invalid fallback for non-localized labels
    ([\#39220](https://forge.typo3.org/issues/39220))
-   \[TASK\] Improve error message of “broken rootline”
    ([\#33082](https://forge.typo3.org/issues/33082))
-   \[BUGFIX\] stdWrap numRows fails due to wrong SELECT clause
    ([\#34152](https://forge.typo3.org/issues/34152))
-   \[BUGFIX\] Update extension must invalidate autoloader cache
    ([\#33895](https://forge.typo3.org/issues/33895))
-   \[TASK\] Raise submodule pointer
-   \[BUGFIX\] QT movies prefixed abusively in Media CE
    ([\#39026](https://forge.typo3.org/issues/39026))
-   \[BUGFIX\] Send sane HTTP response in showpic on error
    ([\#39052](https://forge.typo3.org/issues/39052))
-   \[BUGFIX\] Remove bogus template in template analyzer
    ([\#38104](https://forge.typo3.org/issues/38104))
-   \[BUGFIX\] Drag&Drop inside the root page of the pagetree isn't
    possible ([\#24626](https://forge.typo3.org/issues/24626))
-   \[BUGFIX\] Check if user is allowed to paste page to pagetree
    ([\#33546](https://forge.typo3.org/issues/33546))
-   \[BUGFIX\] Add rootline workspace overlay for backend\_layouts.
    ([\#36313](https://forge.typo3.org/issues/36313))
-   \[BUGFIX\] accessibilityWrap ignores simple value
    ([\#38791](https://forge.typo3.org/issues/38791))
-   \[BUG\] t3lib\_div::getFilesInDir order differs from order in
    Filelist ([\#18771](https://forge.typo3.org/issues/18771))
-   \[BUGFIX\] RTE: Importing google webfonts breaks style sheet parsing
    ([\#36316](https://forge.typo3.org/issues/36316))
-   \[BUGFIX\] RTE spellcheck issue on Windows server
    ([\#36438](https://forge.typo3.org/issues/36438))
-   \[BUGFIX\] RTE 4.6: Force IE9 to use IE8 mode in frontend
    ([\#38658](https://forge.typo3.org/issues/38658))
-   \[TASK\] Set TYPO3 version to 4.6.11-dev

<Category:ReleaseNotes/TYPO3_4.6.x> [Category:TYPO3
4.6](Category:TYPO3_4.6 "wikilink") <Category:2012>
