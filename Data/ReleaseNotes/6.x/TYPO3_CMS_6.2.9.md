Release Notes for TYPO3 CMS 6.2.9
=================================

This document contains information about TYPO3 CMS 6.2.9 which was
released on December 10th, 2014.

News
----

This release is a combined bug fix and security release.

Notes
-----

Due to security issues found in the TYPO3 CMS Core, there was a combined
release of TYPO3 CMS 4.5.39, 6.2.9 and 7.0.2.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2014-003/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    ed30741a3fd6cbfe08725c386a3d3cc7  typo3_src-6.2.9.tar.gz
    ad0c8a345c13015ccbfd3111bd27a1e8  typo3_src-6.2.9.zip

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
[6.2.8](TYPO3_CMS_6.2.8 "wikilink"):

    2014-12-10  d4f4f09                  [RELEASE] Release of TYPO3 6.2.9 (TYPO3 Release Team)
    2014-12-10  0f25df6  #62723          [!!!][SECURITY] Fix link spoofing in prefixLocalAnchors (Helmut Hummel)
    2014-12-10  03b36dc                  Revert "[BUGFIX] Memory consumption in DataHandler->processClearCacheQueue" (Oliver Hader)
    2014-12-10  31518c9  #63615          [BUGFIX] Memory consumption in DataHandler->processClearCacheQueue (Stephan Großberndt)
    2014-12-08  e4438c4                  [TASK] Set TYPO3 version to 6.2.9-dev (TYPO3 Release Team)


