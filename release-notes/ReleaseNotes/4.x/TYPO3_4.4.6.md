Release Notes for TYPO3 4.4.6
=============================

This document contains information about TYPO3 version 4.4.6 which was
released on December 28, 2010.

News
----

This version is a maintenance release and contains bugfixes only.

Notes
-----

Since the latest security releases contained (non-security related)
regressions and some features were not usable anymore, this new release
aims to be a stable package again.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    c7216860b9d1811c9d4d76edab4c37a2  dummy-4.4.6.tar.gz
    0e0f7b70ad885e91077e5362472517b0  dummy-4.4.6.zip
    19329ce6585e5923e90cd03e499c1abc  typo3_src+dummy-4.4.6.zip
    3a1f4416649dc51bd18efa4b5c3c7c28  typo3_src-4.4.6.tar.gz
    1f5fae15d75e9edb927a2b16d47e1b23  typo3_src-4.4.6.zip
    38a5cdc3e5cd2d4aab237071ab2b1c55  introductionpackage-4.4.6.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-12-28  Benjamin Mack  <benni@typo3.org>

        * Release of TYPO3 4.4.6

    2010-12-28  Benjamin Mack  <benni@typo3.org>

        * Revert change #16614 (rev. 9684): common.js resets TYPO3 namespace / Fixed regression #16831: 'Ext' is undefinded, Line: 81, js/common.js 

    2010-12-26  Tobias Liebig  <mail_typo3@etobi.de>

        * Fixed bug #16661: include TSref changes for t3editor code completion (thanks to Christian Kartnig)

    2010-12-23  Jigal van Hemert <jigal@xs4all.nl>

        * Fixed bug #16825: Fatal error in lang.php (thanks to Georg Ringer)

    2010-12-21  Francois Suter  <francois.suter@typo3.org>

        * Fixed bug #16786: Versioning: Generating preview link not working (thanks to Frederic Gaus)

    2010-12-21  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #16760: RTE transformation removes all span tags on save after upgrade TYPO3 4.4.5

    2010-12-20  Tolleiv Nietsch  <typo3@tolleiv.de>

        * Fixed bug #16134: TYPO3 doesn't always fix permissions for new files

    2010-12-19  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #16777: Test failure in t3lib_extmgmTest if tests are located in typo3_src/tests/ instead of tests/ (Thanks to Oliver Klee)
        * Fixed bug #16790: Typo in topbar CSS

    2010-12-17  Susanne Moog  <typo3@susanne-moog.de>

        * Fixed bug #5186: fixed rendering of multi-column image rows (thanks to Michael Bürgi)

    2010-12-17  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #14500: Bug: Unit test failures in t3lib_matchCondition_backend_testcase (Thanks to Oliver Klee)

    2010-12-17  Francois Suter  <francois.suter@typo3.org>

        * Fixed bug #16470: Scheduler fails to calculateNextValue a turn of the year (thanks to Tobias Hövelborn and Christian Kuhn)

    2010-12-17  Ingo Renner  <ingo@typo3.org>

        * Fixed issue #16764: Insufficient information about which class is failing to implement interfaces in tslib_cObj->start()

<Category:ReleaseNotes/TYPO3_4.4.x> [Category:TYPO3
4.4](Category:TYPO3_4.4 "wikilink") <Category:2010>
