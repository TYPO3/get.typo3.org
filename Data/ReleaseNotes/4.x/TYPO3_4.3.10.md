Release Notes for TYPO3 4.3.10
==============================

This document contains information about TYPO3 version 4.3.10 which was
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

    78a12fb6ffbcdaaed8c056fa9578192c  dummy-4.3.10.tar.gz
    823e3b561518183d04601607512f7c3b  dummy-4.3.10.zip
    054c6a947dd199172972d891a050d3d6  typo3_src-4.3.10.tar.gz
    bca8416ca83f88e98dae82e5c4c772f9  typo3_src-4.3.10.zip
    c907343c848c27216d264f447ebad276  typo3_src+dummy-4.3.10.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-12-28  Oliver Hader  <oliver.hader@typo3.org>

        * Release of TYPO3 4.3.10

    2010-12-28  Benjamin Mack  <benni@typo3.org>

        * Revert change #16614 (rev. 968333 common.js resets TYPO3 namespace / Fixed regression #16831: 'Ext' is undefinded, Line: 81, js/common.js 

    2010-12-23  Jigal van Hemert <jigal@xs4all.nl>

        * Fixed bug #16825: Fatal error in lang.php (thanks to Georg Ringer)

    2010-12-21  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #16760: RTE transformation removes all span tags on save after upgrade TYPO3 4.3.9

    2010-12-20  Tolleiv Nietsch  <typo3@tolleiv.de>

        * Fixed bug #16134: TYPO3 doesn't always fix permissions for new files

    2010-12-17  Susanne Moog  <typo3@susanne-moog.de>

        * Fixed bug #5186: fixed rendering of multi-column image rows (thanks to Michael Bürgi)

    2010-12-17  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #14500: Bug: Unit test failures in t3lib_matchCondition_backend_testcase (Thanks to Oliver Klee)

    2010-12-17  Francois Suter  <francois.suter@typo3.org>

        * Fixed bug #16470: Scheduler fails to calculateNextValue a turn of the year (thanks to Tobias Hövelborn and Christian Kuhn)
