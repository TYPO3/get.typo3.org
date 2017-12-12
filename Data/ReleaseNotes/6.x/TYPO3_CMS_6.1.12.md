Release Notes for TYPO3 CMS 6.1.12
==================================

This document contains information about TYPO3 CMS 6.1.12 which was
released on October 22nd, 2014.

News
----

This release is a combined bug fix and security release.

Notes
-----

Due to security issues found in the TYPO3 CMS Core, there was a combined
release of TYPO3 CMS 4.5.37, 4.7.20, 6.1.12 and 6.2.6.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2014-002/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    5598eedb2d4ef8d5e2c939bcf30ffae5  blankpackage-6.1.12.tar.gz
    27ea8e5865118ea0b2d81fb93405749b  blankpackage-6.1.12.zip
    a9d0b6af98a82996c5ed6f9735ae209d  dummy-6.1.12.tar.gz
    707b2b4c5f7fd516776d692b64070a47  dummy-6.1.12.zip
    626d60fb4c7bb3020c83124ae3ef910d  typo3_src+dummy-6.1.12.zip
    0270cc687f15f56dea83341655d8a76a  typo3_src-6.1.12.tar.gz
    d559ed82d479a742f351542d7bc57da3  typo3_src-6.1.12.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[6.1.11](TYPO3_CMS_6.1.11 "wikilink"):

    2014-10-22  e116bb1                  [RELEASE] Release of TYPO3 6.1.12 (TYPO3 Release Team)
    2014-10-22  e92c1d6  #62357          [SECURITY] Fix DoS in openid (Markus Klein)
    2014-10-22  6af3757  #59573          [SECURITY] Fix RCE in swiftmailer (Helmut Hummel)
    2014-10-15  fb5445e  #61749          [BUGFIX] Allow lower case for drive letters on Windows in CLI scripts (Alexander Bohndorf)
    2014-10-07  8ef0e3d  #47188          [BUGFIX] Fluid tries to render folders as templates partials and layouts (Krzysztof Adamczyk)
    2014-10-01  6ad3e2b  #26172          [BUGFIX] Search word markup for UTF8 characters in summary (Ralf Hettinger)
    2014-09-30  5cb8ac8  #61982          [BUGFIX] Fix search mode switcher of indexed_search (Markus Klein)
    2014-09-23  5bd5ce1                  [TASK] Set TYPO3 version to 6.1.12-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_6.1.x> [Category:TYPO3
6.1](Category:TYPO3_6.1 "wikilink") <Category:2014>
