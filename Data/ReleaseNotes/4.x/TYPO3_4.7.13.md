Release Notes for TYPO3 4.7.13
==============================

This document contains information about TYPO3 version 4.7.13 which was
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

    1a054f781892b62ef8441de77cc8eed2  blankpackage-4.7.13.tar.gz
    11a1ccdf63d285d62dc094311bd11cb8  blankpackage-4.7.13.zip
    fdcee7f0175fec2195b1e0790aaa7011  dummy-4.7.13.tar.gz
    3986fd44b57f1a7ad18ad32b7a66256e  dummy-4.7.13.zip
    62a5dda6cd7ee22a30864fa5042027c6  typo3_src+dummy-4.7.13.zip
    59c5d39aabbb6a44025e1b97f9b74073  typo3_src-4.7.13.tar.gz
    2cd818307cd4efcb58cd58b5f4361a99  typo3_src-4.7.13.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.7.12](TYPO3_4.7.12 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.7.13
-   \[BUGFIX\] Fix PHP warning trigged in initFEuser
    ([\#42921](https://forge.typo3.org/issues/42921))
-   \[BUGFIX\] requestUpdate sensitive to spaces
    ([\#49872](https://forge.typo3.org/issues/49872))
-   \[BUGFIX\] Form email validation is case sensitive
    ([\#43924](https://forge.typo3.org/issues/43924))
-   \[BUGFIX\] requestUpdate sensitive to spaces
    ([\#42789](https://forge.typo3.org/issues/42789))
-   \[TASK\] Add support for “outdated” extensions
    ([\#49350](https://forge.typo3.org/issues/49350))
-   \[TASK\] Travis: Speedup cloning of repos
-   \[BUGFIX\] RTE: Importing google webfonts breaks style sheet parsing
    ([\#49648](https://forge.typo3.org/issues/49648))
-   \[TASK\] Improve error message in NotFoundView to identify source
    ([\#49519](https://forge.typo3.org/issues/49519))
-   \[BUGFIX\] compressJs returns wrong filenames
    ([\#48213](https://forge.typo3.org/issues/48213))
-   \[BUGFIX\] Incomplete backup in befuncTest
    ([\#49355](https://forge.typo3.org/issues/49355))
-   \[BUGFIX\] Insert rows only once in exec\_INSERTmultipleRows
    ([\#48220](https://forge.typo3.org/issues/48220))
-   \[BUGFIX\] Flexform field is available but not passed to
    sub-function calls ([\#49331](https://forge.typo3.org/issues/49331))
-   \[BUGFIX\] Illegal string offset warning in AjaxLoginHandler
    ([\#49327](https://forge.typo3.org/issues/49327))
-   \[BUGFIX\] Fix JS error with Context Sensitive Help
    ([\#26588](https://forge.typo3.org/issues/26588))
-   \[BUGFIX\] Incorrect grouping of exclude fields in translated
    backend ([\#47839](https://forge.typo3.org/issues/47839))
-   \[BUGFIX\] Illegal string offset 'translations' in
    DatabaseRecordList ([\#47103](https://forge.typo3.org/issues/47103))
-   \[BUGFIX\] Pass \$field to BackendUtility::getFlexFormDS
    ([\#39527](https://forge.typo3.org/issues/39527))
-   \[TASK\] Set TYPO3 version to 4.7.13-dev


