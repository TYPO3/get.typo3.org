Release Notes for TYPO3 4.3.14
==============================

This document contains information about TYPO3 version 4.3.14 which was
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

    fe4a6e835e4b8c7fbfd2e2f000058401  blankpackage-4.3.14.tar.gz
    d6a82d0f9b287ae340c4bde06c186c12  blankpackage-4.3.14.zip
    774364a4cac526daa4ec7fd301071d87  dummy-4.3.14.tar.gz
    dbe3d2d4b3d5e0e5b6e33ac46c62a105  dummy-4.3.14.zip
    68adff6c18e1a7ff90b66423ad2fc1fe  typo3_src+dummy-4.3.14.zip
    85271c2cd1e339dc3f964e896e8ceda2  typo3_src-4.3.14.tar.gz
    22adfcfc7c61c4b41d6ed9a68b2711de  typo3_src-4.3.14.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changelog
---------

    2011-09-14  e29c35f            [RELEASE] Release of TYPO3 4.3.14 (TYPO3 v4 Release Team)
    2011-09-14  99d993a  #29366    [BUGFIX] Disabling the cache does not work on invalid cHash value (Daniel Pötzinger)
    2011-09-14  685aaee  #29769    [BUGFIX] Parse error in t3lib/class.t3lib_parsehtml.php (Oliver Hader)
    2011-08-29  d27f4ab  #29246    [BUGFIX] HTMLparser, treat fixAttrib.unset as boolean (Markus Klein)
    2011-08-21  134f988  #29130    [BUGFIX] Fix security level "normal" for backend login (Helmut Hummel)
    2011-08-16  263d56f            [TASK] Set TYPO3 version to 4.3.14-dev (TYPO3 v4 Release Team)
    2011-08-16  f9994d2            [RELEASE] Release of TYPO3 4.3.13 (TYPO3 v4 Release Team)
