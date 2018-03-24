Release Notes for TYPO3 4.4.11
==============================

This document contains information about TYPO3 version 4.4.11 which was
released on September 14th 2011.

News
----

This release is a combined bugfix and security release.

Notes
-----

Due to several security issues found in the TYPO3 Core, there was a
combined release of TYPO3 4.3.14, 4.4.11 and 4.5.6.\
Find more details in the security bulletins:\
<https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2011-002/>\
<https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2011-003/>\

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    7d922f91686f868bb009a4cef262e136  blankpackage-4.4.11.tar.gz
    43f7d61fd527981b115b9088757261cd  blankpackage-4.4.11.zip
    9a20a32b9ef55677af30ebae5e0461ea  dummy-4.4.11.tar.gz
    da1db2ac51dfdc285b7cb832e73f0d43  dummy-4.4.11.zip
    0101cba959fe2d60a879e55026344011  typo3_src+dummy-4.4.11.zip
    d942dc969ec92387ed3b13a5c336f634  typo3_src-4.4.11.tar.gz
    7f6ee895460300ef2d820d8e13265fb0  typo3_src-4.4.11.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changelog
---------

    2011-09-14  debb3da            [RELEASE] Release of TYPO3 4.4.11 (TYPO3 v4 Release Team)
    2011-09-14  8b74a5d  #29366    [BUGFIX] Disabling the cache does not work on invalid cHash value (Daniel Pötzinger)
    2011-09-12  f92e618  #26674    [BUGFIX] Check for a valid Date object before opening datepicker (Patrick Schriner)
    2011-09-09  a8a33f7  #27740    [BUGFIX] FE session transfer is broken (Dmitry Dulepov)
    2011-09-04  2d430f5  #29211    [BUGFIX] Height of RTE editing area sometimes null in Safari 5.1 (Stanislas Rolland)
    2011-08-30  6177f8c  #27801    [BUGFIX] Incorrect behaviour of style selector in RTE (Stanislas Rolland)
    2011-08-29  b670ca8  #29246    [BUGFIX] HTMLparser, treat fixAttrib.unset as boolean (Markus Klein)
    2011-08-24  4066821  #29169    [BUGFIX] exec_SELECTcountRows returns string (Georg Ringer)
    2011-08-21  a3fe076  #25302    [BUGFIX] Broken links representation gets saved to the database (Stanislas Rolland)
    2011-08-21  9094c73  #29130    [BUGFIX] Fix security level "normal" for backend login (Helmut Hummel)
    2011-08-16  401b7e7            [TASK] Set TYPO3 version to 4.4.11-dev (TYPO3 v4 Release Team)
    2011-08-16  982793c            [RELEASE] Release of TYPO3 4.4.10 (TYPO3 v4 Release Team)
