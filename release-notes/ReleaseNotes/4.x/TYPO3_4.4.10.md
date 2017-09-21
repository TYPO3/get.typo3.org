Release Notes for TYPO3 4.4.10
==============================

This document contains information about TYPO3 version 4.4.10 which was
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

    603810d41e50908c70295d073ff1a241  blankpackage-4.4.10.tar.gz
    e84e4988452c0718b68847b2ed8dcccc  blankpackage-4.4.10.zip
    35e3434e8aa0f202b5a2a411d410b57d  dummy-4.4.10.tar.gz
    866de294c9b2697f6738b2349aa07950  dummy-4.4.10.zip
    8ad22b02365429326f0a513087756d67  typo3_src+dummy-4.4.10.zip
    18b1d08cdabd3e39e6e52c00f7f978fe  typo3_src-4.4.10.tar.gz
    160a0942fa2fb3877e1ded0f4142a980  typo3_src-4.4.10.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changelog
---------

    2011-08-16  f79bd1f            [RELEASE] Release of TYPO3 4.4.10 (TYPO3 v4 Release Team)
    2011-08-12  becd370  #28946    [BUGFIX] Unit tests for tslib_content query arguments fail (Oliver Hader)
    2011-08-12  1c946cb  #28847    [BUGFIX] Maintain compatibility with changed headline rendering (Helmut Hummel)
    2011-08-11  7ee7eba  #27028    [BUGFIX] Wrong usage of Ext.encodeURL in TBE_EDITOR.rawurlencode (Marco Huber)
    2011-08-03  0395e1f  #26876    [BUGFIX] Unprivileged backend user can read arbitrarily from database (Helmut Hummel)
    2011-07-30  121d6bf  #28536    [BUGFIX] JSwindow-typolink URLs are encoded twice (Helmut Hummel)
    2011-07-29  34b1e70            [BUGFIX] htmlArea RTE not loading with Safari 5.1 (Stanislas Rolland)
    2011-07-27  1efb49b            [TASK] Set TYPO3 version to 4.4.10-dev (TYPO3 v4 Release Team)
    2011-07-27  439f3f0            [RELEASE] Release of TYPO3 4.4.9 (TYPO3 v4 Release Team)

<Category:ReleaseNotes/TYPO3_4.4.x> [Category:TYPO3
4.4](Category:TYPO3_4.4 "wikilink") <Category:2011>
