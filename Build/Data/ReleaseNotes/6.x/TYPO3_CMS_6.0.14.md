Release Notes for TYPO3 CMS 6.0.14
==================================

This document contains information about TYPO3 CMS 6.0.14 which was
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

    3659a9a3d959a9d303d021957fc82d9a  blankpackage-6.0.14.tar.gz
    fe50b15f26db0acfea2ccf4524c5e478  blankpackage-6.0.14.zip
    6be5416d72872edcf188824545758b78  dummy-6.0.14.tar.gz
    cec2c3770e38cec96cef9f45703e0403  dummy-6.0.14.zip
    62bb3aa226c62bd23c72590b3b84a2c5  typo3_src+dummy-6.0.14.zip
    14f2a891e7d70efe8f2aafb85b4b73c8  typo3_src-6.0.14.tar.gz
    e4677c82b510e85f79ecb48629a049d8  typo3_src-6.0.14.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[6.0.13](TYPO3_CMS_6.0.13 "wikilink"):

    2014-05-22  d1d252f                  [RELEASE] Release of TYPO3 6.0.14 (TYPO3 Release Team)
    2014-05-22  37273fb  #30377          [SECURITY] Add trusted HTTP_HOST configuration (Helmut Hummel)
    2014-05-22  edd27ad  #54111,#54113   [SECURITY] XSS in (old) extension manager information function (Nicole Cordes)
    2014-05-22  00f00b1  #48695          [SECURITY] XSS in new content element wizard (Marcus Krause)
    2014-05-22  6b7f3a8  #54109          [SECURITY] XSS in template tools on root page (Marc Bastian Heinrichs)
    2014-05-22  5935348  #57576          [SECURITY] XSS in Backend Layout Wizard (Helmut Hummel)
    2014-05-22  dda1739  #48693          [SECURITY] Encode URL for use in JavaScript (Jigal van Hemert)
    2014-05-22  5e00a13  #56458          [SECURITY] Fix insecure unserialize in colorpicker (Helmut Hummel)
    2014-05-22  0f29e1f  #54526          [SECURITY] Remove charts.swf to get rid of XSS vulnerability (Helmut Hummel)
    2014-05-21  e50f6a6  #54917          [BUGFIX] Indexer tries to insert NULL into DB (Markus Klein)
    2014-05-15  53c830f  #53079          [BUGFIX] FlashMessageService not available in TYPO3 6.0 (Oliver Hader)
    2014-05-14  459c34d  #58529          [BUGFIX] DependencyUtility does count() on an integer (Markus Klein)
    2014-04-25  bd704d5  #58180          [BUGFIX] Database query error for non-workspaces tables (Oliver Hader)
    2014-04-16  d1fc88d                  [TASK] Set TYPO3 version to 6.0.14-dev (TYPO3 Release Team)


