Release Notes for TYPO3 4.3.7
=============================

This document contains information about TYPO3 version 4.3.7 which was
released on October 6, 2010.

News
----

This release is a combined bugfix and security release.

Notes
-----

Due to several security issues found in the TYPO3 Core, there was a
combined release of TYPO3 4.2.15, 4.3.7 and 4.4.4.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-sa-2010-020/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    163058329a01311524c4c92f38980026  dummy-4.3.7.tar.gz
    a72e89ef81c26f689846c69e16c299fe  dummy-4.3.7.zip
    86ba73e7dc48fccb3400b61e55b0446e  typo3_src-4.3.7.tar.gz
    80bb616b4acd8822fe4a07910cc4fc32  typo3_src-4.3.7.zip
    0543d6780ff3ccf8b62bdee473d1c18b  typo3_src+dummy-4.3.7.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-10-06  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.3.7

    2010-10-06  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #13650: Information disclosure in sys_actions (DB mount, usergroups) (thanks to Georg Ringer)
        * Fixed bug #15461: RemoveXSS exposes XSS vulnerability for double encoded characters (thanks to Marcus Krause)
        * Follow-up to bug #15461: Added unit tests (thanks to Marcus Krause)
        * Fixed bug #15728: Extension Manager allows to download arbitrary files beyond PATH_site or rootpath (thanks to Marcus Krause)
        * Fixed bug #15729: Sysext setup's user simulation is susceptible to XSS (thanks to Marcus Krause)
        * Fixed bug #15860: Mitigate libpcre recursion crash in email address validation (thanks to Marcus Krause)
        * Fixed bug #15733: Admin Panel is susceptible to XSS (thanks to Helmut Hummel)
        * Fixed bug #15898: It is (still) possible to download arbitrary files through the jumpurl feature (thanks to Helmut Hummel and Marcus Krause)

    2010-09-30  Francois Suter  <francois@typo3.org>

        * Fixed bug #15639: Scheduler: Add missing classes and interface to autoload registry (Thanks to Marcus Krause)

    2010-09-30  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #12889: fe_adminLib.inc usages deprecated function split() (Thanks to Steffen Kamper)
