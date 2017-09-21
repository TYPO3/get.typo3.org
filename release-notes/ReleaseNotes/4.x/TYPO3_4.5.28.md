Release Notes for TYPO3 4.5.28
==============================

This document contains information about TYPO3 version 4.5.28 which was
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

    204646d42a247bd218603470b6244241  blankpackage-4.5.28.tar.gz
    d74499fb99e29ca178723b1f09b1ed9c  blankpackage-4.5.28.zip
    0979677ef7b6f196bf9120a0c29f56b9  dummy-4.5.28.tar.gz
    f34f26c2080b9500a3019af4935b080c  dummy-4.5.28.zip
    569034d51093a90a098758a6af81ba38  introductionpackage-4.5.28.tar.gz
    cb48cafafee1a76b849be5439dc3ab04  introductionpackage-4.5.28.zip
    2a1c60221bc7814ae82c34c92869ff28  typo3_src+dummy-4.5.28.zip
    052379d5ae6cca1909026cc094a79604  typo3_src-4.5.28.tar.gz
    5efe9f00efeb0778ec4013a3076d5f7a  typo3_src-4.5.28.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.5.27](TYPO3_4.5.27 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.5.28
-   \[BUGFIX\] Page within a mountpoint using Show Content from Page
    fatals ([\#32292](https://forge.typo3.org/issues/32292))
-   \[BUGFIX\] PHP Module pgsql not supported
    ([\#43163](https://forge.typo3.org/issues/43163))
-   \[BUGFIX\] stdWrap for special.value applied twice
    ([\#40855](https://forge.typo3.org/issues/40855))
-   \[BUGFIX\] Fix PHP warning trigged in initFEuser
    ([\#42921](https://forge.typo3.org/issues/42921))
-   \[BUGFIX\] requestUpdate sensitive to spaces
    ([\#49872](https://forge.typo3.org/issues/49872))
-   \[BUGFIX\] requestUpdate sensitive to spaces
    ([\#42789](https://forge.typo3.org/issues/42789))
-   \[BUGFIX\] Allow non-Admins to delete Records finally
    ([\#34156](https://forge.typo3.org/issues/34156))
-   \[BUGFIX\] t3lib\_userAuthGroup::checkLogFailures() gives PHP notice
    ([\#30055](https://forge.typo3.org/issues/30055))
-   \[BUGFIX\] Invalid use of array\_shift() in t3lib\_div
    ([\#30056](https://forge.typo3.org/issues/30056))
-   \[BUGFIX\] Invalid method signature for t3lib\_pageTree::init()
    ([\#30062](https://forge.typo3.org/issues/30062))
-   \[BUGFIX\] Some methods in t3lib\_TSparser should be static
    ([\#30058](https://forge.typo3.org/issues/30058))
-   \[TASK\] Add support for “outdated” extensions
    ([\#49350](https://forge.typo3.org/issues/49350))
-   \[BUGFIX\] RTE: Importing google webfonts breaks style sheet parsing
    ([\#49648](https://forge.typo3.org/issues/49648))
-   \[TASK\] Improve error message in NotFoundView to identify source
    ([\#49519](https://forge.typo3.org/issues/49519))
-   \[BUGFIX\] Incorrect grouping of exclude fields in translated
    backend ([\#47839](https://forge.typo3.org/issues/47839))
-   \[BUGFIX\] t3lib\_utility\_mailTest fails
    ([\#49361](https://forge.typo3.org/issues/49361))
-   \[BUGFIX\] Insert rows only once in exec\_INSERTmultipleRows
    ([\#48220](https://forge.typo3.org/issues/48220))
-   \[BUGFIX\] Flexform field is available but not passed to
    sub-function calls ([\#49331](https://forge.typo3.org/issues/49331))
-   \[BUGFIX\] Illegal string offset warning in AjaxLoginHandler
    ([\#49327](https://forge.typo3.org/issues/49327))
-   \[BUGFIX\] Fix JS error with Context Sensitive Help
    ([\#26588](https://forge.typo3.org/issues/26588))
-   \[BUGFIX\] Illegal string offset 'translations' in
    DatabaseRecordList ([\#47103](https://forge.typo3.org/issues/47103))
-   \[BUGFIX\] Pass \$field to BackendUtility::getFlexFormDS
    ([\#39527](https://forge.typo3.org/issues/39527))
-   \[TASK\] Set TYPO3 version to 4.5.28-dev

<Category:ReleaseNotes/TYPO3_4.5.x> [Category:TYPO3
4.5](Category:TYPO3_4.5 "wikilink") <Category:2013>
