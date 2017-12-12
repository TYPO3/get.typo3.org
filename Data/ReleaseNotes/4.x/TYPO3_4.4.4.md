Release Notes for TYPO3 4.4.4
=============================

This document contains information about TYPO3 version 4.4.4 which was
released on October 6, 2010.

News
----

This release is a combined bugfix and security release.

Download
--------

<https://typo3.org/download/>

Notes
-----

Due to several security issues found in the TYPO3 Core, there was a
combined release of TYPO3 4.2.15, 4.3.7 and 4.4.4.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-sa-2010-020/>

MD5 checksums
-------------

    2bb7fe08f85b14a509305aa58b0db0ad  dummy-4.4.4.tar.gz
    833eb67d942c0a90c163d84f722fd01d  dummy-4.4.4.zip
    20c35316e5c10e243719d7d8ae2cf64e  typo3_src+dummy-4.4.4.zip
    b8c8f8fb78e1a33b786ebb8317153b3a  typo3_src-4.4.4.tar.gz
    20e3334a2229f917445014b457c96398  typo3_src-4.4.4.zip
    69b4541e5ceba78aad7f2c24fff49535  introductionpackage-4.4.4.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-10-06  Benjamin Mack  <benni@typo3.org>

        * Release of TYPO3 4.4.4

    2010-10-06  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #15461: RemoveXSS exposes XSS vulnerability for double encoded characters (thanks to Marcus Krause)
        * Follow-up to bug #15461: Added unit tests (thanks to Marcus Krause)
        * Fixed bug #15887: XSS in template analyzer (thanks to Georg Ringer)
        * Fixed bug #15728: Extension Manager allows to download arbitrary files beyond PATH_site or rootpath (thanks to Marcus Krause)
        * Fixed bug #15729: Sysext setup's user simulation is susceptible to XSS (thanks to Marcus Krause)
        * Fixed bug #15860: Mitigate libpcre recursion crash in email address validation (thanks to Marcus Krause)
        * Fixed bug #15733: Admin Panel is susceptible to XSS (thanks to Helmut Hummel)
        * Fixed bug #15898: It is (still) possible to download arbitrary files through the jumpurl feature (thanks to Helmut Hummel and Marcus Krause)

    2010-10-04  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #15880: htmlArea RTE: Context menu not working in TYPO3 4.4.3 and 4.5-dev
        * Updated htmlArea RTE version to 2.0.5

    2010-09-30  Francois Suter  <francois@typo3.org>

        * Fixed bug #15639: Scheduler: Add missing classes and interface to autoload registry (Thanks to Marcus Krause)

    2010-09-30  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #12889: fe_adminLib.inc usages deprecated function split() (Thanks to Steffen Kamper and Ismaël Bidau)
