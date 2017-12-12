Release Notes for TYPO3 CMS 6.2.30
==================================

This document contains information about TYPO3 CMS 6.2.30 which was
released on January 3rd, 2017.

News
----

This release is a combined bug fix and security release.

Notes
-----

Find more details in the security bulletins:

-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2017-001/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    76e7d9fc55e876ca50b3da523f213f5f  typo3_src-6.2.30.tar.gz
    581a39cbc58f28705c744dd713607901  typo3_src-6.2.30.zip

SHA256 checksums
----------------

    278feef7a972084dfc352eda46e7d4771f460213714b90314802295894ba30b4  typo3_src-6.2.30.tar.gz
    7698ee6d342e29edb3824d7be576b555d09ba1e4bdfc2ae8c9071efb462a8823  typo3_src-6.2.30.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.\
It might be required to clear all caches; the “important actions”
section in the TYPO3 Install Tool offers the accordant possibility to do
so.

Changes
-------

Here is a list of what was fixed since
[6.2.29](TYPO3_CMS_6.2.29 "wikilink"):

    2017-01-03  ec284cf                  [RELEASE] Release of TYPO3 6.2.30 (TYPO3 Release Team)
    2017-01-03  0f79d43  #79114          [SECURITY] Protect Mailtransport (Wouter Wolters)
    2016-12-31  7a99325  #70106          [BUGFIX] Do not use realpath for temporary file names (Stefan Froemken)
    2016-12-30  5bb34d0  #76478          [TASK] Clean up DebuggerUtility (Nicole Cordes)
    2016-12-24  98dd27a  #70962          [BUGFIX] FAL relations duplicated when saving in workspaces (Andreas Wolf)
    2016-12-16  5124e88  #78915,#78977   [BUGFIX] Optimize cache handling in ReflectionService (Helmut Hummel)
    2016-12-15  18b19ea  #78977          Revert "[BUGFIX] Reflection Cache does not save methodReflections" (Nicole Cordes)
    2016-12-13  8095288  #78925          [BUGFIX] Fix exception in QuickEdit mode for empty pages (Manuel Selbach)
    2016-12-12  8ef727a  #78915          [BUGFIX] Reflection Cache does not save methodReflections (Tymoteusz Motylewski)
    2016-12-08  01a927d  #73241          [BUGFIX] Do not fetch pages with pid < 0 in prepareCacheFlush (Steffen Göde)
    2016-12-08  bab723b  #72654,#62660   [BUGFIX] Improve DataHandler handling for dbType fields (Nicole Cordes)
    2016-12-07  1a32e92  #78551          [BUGFIX] Reset hidden field information in FormViewhelper (Nicole Cordes)
    2016-12-03  b927c7b  #77097          [BUGFIX] Reset FormViewHelper on execution (Helmut Hummel)
    2016-11-22  f40917e                  [TASK] Set TYPO3 version to 6.2.30-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_6.2.x> [Category:TYPO3
6.2](Category:TYPO3_6.2 "wikilink") <Category:2017>
