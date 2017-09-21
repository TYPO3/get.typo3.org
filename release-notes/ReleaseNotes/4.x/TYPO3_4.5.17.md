Release Notes for TYPO3 4.5.17
==============================

This document contains information about TYPO3 version 4.5.17 which was
released on July 4th 2012.

News
----

This release is a combined bug fix and security release.

Notes
-----

Due to security issues found in the TYPO3 Core, there was a combined
release of TYPO3 4.5.17, 4.6.10 and 4.7.2.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2012-003/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    b535be074e38547cb0a29654c1911ea0  blankpackage-4.5.17.tar.gz
    b9e08b11a6c81942003b1bf534738150  blankpackage-4.5.17.zip
    bd709b928c80c9d5f4c59806527eb635  dummy-4.5.17.tar.gz
    27b29941699d93b0e3c52e8d4773a46d  dummy-4.5.17.zip
    5a2042aac1241e4a63e9233962357157  introductionpackage-4.5.17.tar.gz
    774f1cb9df1e20b2b25af8de86294d4a  introductionpackage-4.5.17.zip
    4c2e5df52a999d661d262442c8da95cc  typo3_src+dummy-4.5.17.zip
    8791cbeda59f3f1ca3db804857f8cbd6  typo3_src-4.5.17.tar.gz
    007bed9193fd4f5db711a25cb85ed3fd  typo3_src-4.5.17.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.5.16](TYPO3_4.5.16 "wikilink"):

    2012-07-04  acf7796                  [RELEASE] Release of TYPO3 4.5.17 (TYPO3 Release Team)
    2012-07-04  4356de4  #38578          [SECURITY] XSS in swfupload (Oliver Hader)
    2012-07-04  d5cb5fb  #35154          [BUGFIX] Exclude E_STRICT from exceptionalErrors (Mario Rimann)
    2012-07-04  4cca68b  #37615          [BUGFIX] IRRE records can't be expanded without an hidden field (Oliver Hader)
    2012-07-04  5fd49b5  #29254          [BUGFIX] TSFE->additionalFooterData for USER_INT (Oliver Hader)
    2012-07-03  15847d2  #38574          [BUGFIX] In IE9, RTE does not work correctly in compat modes IE8/IE7 (Stanislas Rolland)
    2012-07-03  9a1c36c  #34786          [BUGFIX] Custom HTML tags no longer malformed in IE (Bart Dubelaar)
    2012-07-01  8ea1408  #38511          [BUGFIX] Remove a rather dubious unit test for Redis cache backend (Christian Kuhn)
    2012-06-30  353ab74  #38501          [BUGFIX]  Fix unit test failure if gif compress is disabled (Susanne Moog)
    2012-06-30  74701ef  #35915          [BUGFIX] VariableFrontend initializeObject not called (Daniel Pötzinger)
    2012-06-30  2cc2efb  #37618          [BUGFIX] Remove class of td if "No CSS styles for this table" is set (Juergen Furrer)
    2012-06-30  364926e  #36290          [BUGFIX] Markers (%s) are not replaced in TCEmain error messages (Bart Dubelaar)
    2012-06-29  880f256  #38357          [TASK] Add travis configuration file (Helmut Hummel)
    2012-06-29  027a9b3  #36093          [BUGFIX] Reports: Wrong indication for saltedpasswords (Markus Klein)
    2012-06-28  885d256  #37541          [BUGFIX] Declaration of tx_rtehtmlarea_base::drawRTE() not compatible (Stanislas Rolland)
    2012-06-28  50b5136  #34303          [BUGFIX] IRRE hide/unhide broken (dkd-egerer Sascha Egerer)
    2012-06-28  6918eda  #34685          [TASK] PHP 5.4 adjustments (Markus Klein)
    2012-06-28  1f7ebfd  #36194          [BUGFIX] Ensure $output is used as string (Peter Niederlag)
    2012-06-27  7366511  #32773          [BUGFIX] fe_adminLib.inc uses undefined function (Sven Burkert)
    2012-06-27  b82dfa5                  [TASK] Raise submodule pointer (TYPO3 Release Team)
    2012-06-21  3f3c200  #36300          [BUGFIX] Properly load existing usergroups in task (Bart Dubelaar)
    2012-06-13  1e97470  #35944          [BUGFIX] Hide the field "Selected Pages" for menu type "Sitemap" (Marco Huber)
    2012-05-30  bbc55bf  #21943          [BUGFIX] redirect to referrer when changing password (Jigal van Hemert)
    2012-05-28  1c43954  #37553          BUGFIX] Illegal string offset (Jigal van Hemert)
    2012-05-22  1d59cbf                  [TASK] Set TYPO3 version to 4.5.17-dev (TYPO3 v4 Release Team)
    2012-05-22  75b2564                  [RELEASE] Release of TYPO3 4.5.16 (TYPO3 v4 Release Team)

<Category:ReleaseNotes/TYPO3_4.5.x> [Category:TYPO3
4.5](Category:TYPO3_4.5 "wikilink") <Category:2012>
