Release Notes for TYPO3 CMS 4.5.39
==================================

This document contains information about TYPO3 CMS 4.5.39 which was
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

    7621ebc9c0c6ab32f8084457bd04dac4  blankpackage-4.5.39.tar.gz
    bcd95bf059d42b2c9fe5b8eb6681be4a  blankpackage-4.5.39.zip
    245012a032a21020bc8d1a80cdeb307a  dummy-4.5.39.tar.gz
    0255d39ac87f08a98cade2a95ebe3be0  dummy-4.5.39.zip
    8b10ba710c142c5d62e6118dfc5a1684  introductionpackage-4.5.39.tar.gz
    df5ecad358e8c50088ecd6d9fd07ba07  introductionpackage-4.5.39.zip
    44d94c231e1281b517675500d95a3501  typo3_src+dummy-4.5.39.zip
    39b1707b1202d3f350092efb7dce72d4  typo3_src-4.5.39.tar.gz
    b70056dfbc9bcc8ec24939e2edb11157  typo3_src-4.5.39.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

It might be required to clear all caches, the “Clean up” section in the
TYPO3 Install Tool offers the accordant possibility to do so.

Changes
-------

Here is a list of what was fixed since
[4.5.38](TYPO3_CMS_4.5.38 "wikilink"):

    2014-12-10  d72f00c                  [RELEASE] Release of TYPO3 4.5.39 (TYPO3 Release Team)
    2014-12-10  63ae7dd  #62723          [!!!][SECURITY] Fix link spoofing in prefixLocalAnchors (Helmut Hummel)
    2014-12-08  5c267d2  #62967          [BUGFIX] Exclude CDATA from t3lib_parsehtml->XHTML_clean (Nicole Cordes)
    2014-11-27  60be4f6                  [TASK] Set TYPO3 version to 4.5.39-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_4.5.x> [Category:TYPO3
4.5](Category:TYPO3_4.5 "wikilink") <Category:2014>
