Release Notes for TYPO3 CMS 4.7.20
==================================

This document contains information about TYPO3 CMS 4.7.20 which was
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

    f1a4c96f61a02b781f0ae7dc12ba4555  blankpackage-4.7.20.tar.gz
    b9da7c471b6cab7f530308d544a7dc64  blankpackage-4.7.20.zip
    2d3dd7ae3d3cf2c3d4ec8cec1b5f0522  dummy-4.7.20.tar.gz
    2da9e49adb89c3f777464c4c697f353d  dummy-4.7.20.zip
    4122730e403bce742c6583932e3fe503  typo3_src+dummy-4.7.20.zip
    85c2266d7282200b477b51ca9a86e36d  typo3_src-4.7.20.tar.gz
    781fbb588c8198fc3753523cbfaf2a6e  typo3_src-4.7.20.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.7.19](TYPO3_CMS_4.7.19 "wikilink"):

    2014-10-22  6b61880                  [RELEASE] Release of TYPO3 4.7.20 (TYPO3 Release Team)
    2014-10-22  727258f  #62357          [SECURITY] Fix DoS in openid (Markus Klein)
    2014-10-22  313c4bb  #59573          [SECURITY] Fix RCE in swiftmailer (Helmut Hummel)
    2014-08-23  aec409c  #60199          [BUGFIX] Collect correct information on elements in page (Jigal van Hemert)
    2014-07-08  c409513  #48939,#49055   [BUGFIX] Movements pollute colPos value of content elements (Nicole Cordes)
    2014-06-29  b0033d1                  [TASK] Improve travis notifications to channels (Helmut Hummel)
    2014-06-05  f731fc3  #59059          [BUGFIX] New content elements are always stored on pid 0 (Markus Klein)
    2014-06-03  d9d2dd1  #59034          [BUGFIX] Fix double ? in eID url for encryption key (Markus Klein)
    2014-05-22  854cca5                  [TASK] Set TYPO3 version to 4.7.20-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_4.7.x> [Category:TYPO3
4.7](Category:TYPO3_4.7 "wikilink") <Category:2014>
