Release Notes for TYPO3 4.3.13
==============================

This document contains information about TYPO3 version 4.3.13 which was
released on August 16, 2011.

News
----

This release is a maintenance releases and contains bugfixes only.

Notes
-----

This release aims to fix two regressions that have been introduced with
the provious releases at end of July 2011:

-   [\#28536](https://forge.typo3.org/issues/28536): The JavaScript
    command of popup windows in the frontend has been encoded twice.
-   [\#28847](https://forge.typo3.org/issues/28847): The fontTag
    security fix lead to a breaking change, if the default TypoScript
    for lib.stdheader has been modified. A compatibility fix has been
    integrated to have a secure fallback, if the fontTag property was
    customized (see [this blog
    article](http://buzz.typo3.org/teams/security/article/breaking-changes-in-the-latest-typo3-security-release/)
    to get more information).

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    6a73776f089aabc5464c4730e741e872  blankpackage-4.3.13.tar.gz
    d1b37f4d0674ce0e0cd48cfbfeaf260f  blankpackage-4.3.13.zip
    1ba4301fe4db54d8fc89eff8f27f4945  dummy-4.3.13.tar.gz
    ee3acb13408ff8dbc14bf47450b71f25  dummy-4.3.13.zip
    e501ec853b7de2abf8385cd24baf93c3  typo3_src+dummy-4.3.13.zip
    36367b8b26d2e97e224715350df60070  typo3_src-4.3.13.tar.gz
    f49a6e68edc494ee090fcd8e572ccf9e  typo3_src-4.3.13.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changelog
---------

    2011-08-16  ae3c49c            [RELEASE] Release of TYPO3 4.3.13 (TYPO3 v4 Release Team)
    2011-08-12  e6febd7  #28847    [BUGFIX] Maintain compatibility with changed headline rendering (Helmut Hummel)
    2011-08-03  d0f08cd  #26876    [BUGFIX] Unprivileged backend user can read arbitrarily from database (Helmut Hummel)
    2011-07-31  25f5a87            [BUGFIX] htmlArea RTE not loading with Safari 5.1 (Stanislas Rolland)
    2011-07-30  2ba1620  #28536    [BUGFIX] JSwindow-typolink URLs are encoded twice (Helmut Hummel)
    2011-07-27  6380111            [TASK] Set TYPO3 version to 4.3.13-dev (TYPO3 v4 Release Team)
    2011-07-27  bf3b11f            [RELEASE] Release of TYPO3 4.3.12 (TYPO3 v4 Release Team)
