Release Notes for TYPO3 4.6.8
=============================

This document contains information about TYPO3 version 4.6.8 which was
released on April 17th 2012.

News
----

This release is a combined bug fix and security release.

Notes
-----

Due to security issues found in the TYPO3 Core, there was a combined
release of TYPO3 4.4.15, 4.5.15 and 4.6.8.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2012-002/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    d768d5668b64df5c82642a21ff235b2d  blankpackage-4.6.8.tar.gz
    611f245fac3555868408f9c7b3d063cb  blankpackage-4.6.8.zip
    99e184e972a3fbde9b4fe09b07204491  dummy-4.6.8.tar.gz
    91b12ff532dbbfc6a2e23c1b05546b54  dummy-4.6.8.zip
    408524d153c87eb08af07cccfbfc62b6  introductionpackage-4.6.8.tar.gz
    1578ce8c8b2a7a6579651c1fca4a4657  introductionpackage-4.6.8.zip
    5272cef60547ae010ab3074a53a72a34  typo3_src+dummy-4.6.8.zip
    7a9cda0b35085fa1f716ddca4402b458  typo3_src-4.6.8.tar.gz
    c8f217bdc58b0da234dda237055affce  typo3_src-4.6.8.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since [4.6.7](TYPO3_4.6.7 "wikilink"):

    2012-04-17  7bec4f3                  [RELEASE] Release of TYPO3 4.6.8 (TYPO3 v4 Release Team)
    2012-04-17  e894089  #34348          [SECURITY] XSS in exception handler (Oliver Klee)
    2012-04-17  da929e3                  [TASK] Raise submodule pointer (TYPO3 v4 Release Team)
    2012-04-15  4fb406e  #36027          [BUGFIX] Localisation update doesn't work (Sebastian Fischer)
    2012-04-14  a444816  #34742          [TASK] Change hardcoded URL to constant (dkd-egerer Sascha Egerer)
    2012-04-14  32017dc  #33497,#34897   [BUGFIX] t3lib_http_Request can not be loaded in frontend (Philipp Gampe)
    2012-04-13  efe107e  #34923          [BUGFIX] Hardcoded variable in CookieJar.php (Philipp Gampe)
    2012-04-12  f1bb34c  #32581          [BUGFIX] Slider doesn't work in IE9 (Jigal van Hemert)
    2012-04-12  88135a6  #35202          [BUGFIX] Fix the unit tests to work with PHPUnit 3.6 (Oliver Klee)
    2012-04-12  f68a85e  #34860,#33685   [BUGFIX] Results from live search and opendocs can't be opened (Stefan Galinski)
    2012-04-12  fbde347  #35905          [BUGFIX] Failing test in autoloader with phpunit 3.6 (Christian Kuhn)
    2012-04-12  fed2e3c  #35897          [BUGFIX] Failing test in caching framework memcache backend (Christian Kuhn)
    2012-04-11  87e9436  #35847          [BUGFIX] t3lib_div::getUrl() providing wrong error information (Ingo Renner)
    2012-04-11  7825e7a  #35272          [BUGFIX] Enable XClassing of t3lib_install by replacing new (Kay Strobach)
    2012-04-11  51d1dcf  #35126          [BUGFIX] Use state "excludeFromUpdates" in update check (Jigal van Hemert)
    2012-04-10  e1c402f  #35257          [BUGFIX] ext_icon.gif for EXT:impexp (Georg Ringer)
    2012-04-08  f4e9e59  #34695          [BUGFIX] missing parameter for implode (Jigal van Hemert)
    2012-04-05  80946db  #31831          [BUGFIX] "Allowed excludefields" misses non-tt_content FlexForms (Kai Vogel)
    2012-04-05  bd038d6  #32517          [BUGFIX] Set filename to downloaded resource in t3lib_compressor (Morton Jonuschat)
    2012-03-29  2df8eda  #34625          [BUGFIX] preg_spliti should be preg_split (Georg Ringer)
    2012-03-28  25f666b                  [TASK] Set TYPO3 version to 4.6.8-dev (TYPO3 v4 Release Team)
    2012-03-28  ab955f2                  [RELEASE] Release of TYPO3 4.6.7 (TYPO3 v4 Release Team)


