Release Notes for TYPO3 CMS 4.7.19
==================================

This document contains information about TYPO3 CMS 4.7.19 which was
released on May 22nd, 2014.

News
----

This release is a combined bug fix and security release.

Notes
-----

Due to security issues found in the TYPO3 CMS Core, there was a combined
release of TYPO3 CMS 4.5.34, 4.7.19, 6.0.14, 6.1.9 and 6.2.3.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2014-001/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    20accfeacd51a4cf543be4dbadc462ef  blankpackage-4.7.19.tar.gz
    1fbb01091a9a7a96e84e2f81487d4e0a  blankpackage-4.7.19.zip
    5f40f88f0827f3a4d09cd032cd5ecc56  dummy-4.7.19.tar.gz
    8cc33e9c7ca7c5e667eeacc0642febd0  dummy-4.7.19.zip
    bb16d6003a3fa4183760f5a0c25ef689  typo3_src+dummy-4.7.19.zip
    279400cfb3c1c5c5ff7f7eb9a83ebad0  typo3_src-4.7.19.tar.gz
    5cf1267fe108e3a5592c0e4cdb00479c  typo3_src-4.7.19.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.7.18](TYPO3_CMS_4.7.18 "wikilink"):

    2014-05-22  4ebc6ca                  [RELEASE] Release of TYPO3 4.7.19 (TYPO3 Release Team)
    2014-05-22  07eba3e  #30377          [SECURITY] Add trusted HTTP_HOST configuration (Helmut Hummel)
    2014-05-22  ec33beb  #54111,#54113   [SECURITY] XSS in (old) extension manager information function (Marc Bastian Heinrichs)
    2014-05-22  fb096e3  #48695          [SECURITY] XSS in new content element wizard (Markus Klein)
    2014-05-22  1389da5  #54109          [SECURITY] XSS in template tools on root page (Marc Bastian Heinrichs)
    2014-05-22  65fc32f  #57576          [SECURITY] XSS in Backend Layout Wizard (Nicole Cordes)
    2014-05-22  7bec5c8  #48693          [SECURITY] Encode URL for use in JavaScript (Markus Klein)
    2014-05-22  b907b64  #56458          [SECURITY] Fix insecure unserialize in colorpicker (Helmut Hummel)
    2014-05-22  c39bca9  #54526          [SECURITY] Remove charts.swf to get rid of XSS vulnerability (Helmut Hummel)
    2014-04-16  53b74d7                  [TASK] Set TYPO3 version to 4.7.19-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_4.7.x> [Category:TYPO3
4.7](Category:TYPO3_4.7 "wikilink") <Category:2014>
