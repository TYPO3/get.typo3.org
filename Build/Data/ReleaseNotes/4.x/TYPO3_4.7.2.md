Release Notes for TYPO3 4.7.2
=============================

This document contains information about TYPO3 version 4.7.2 which was
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

    6dfe85bfb0bab5c1997cff5d7e450b39  blankpackage-4.7.2.tar.gz
    1d4d8a8497b2a9629487a6bc0288162d  blankpackage-4.7.2.zip
    5b5a594801353965f71f98d0c9055693  dummy-4.7.2.tar.gz
    3733d6539361ac1928b744ed53bce917  dummy-4.7.2.zip
    305e320fc67e1285554d7bd04353962b  governmentpackage-4.7.2.tar.gz
    65659119076300b5bfd7b513941d8b1e  governmentpackage-4.7.2.zip
    813a4343851a3722b744478eb6ba1959  introductionpackage-4.7.2.tar.gz
    2b77c530ea5fd9ba52ce7607610f0ba8  introductionpackage-4.7.2.zip
    da5f80432f2da2143985f2d3b0f8565c  typo3_src+dummy-4.7.2.zip
    a71434de279a6ba52d4e8beeaa4353c8  typo3_src-4.7.2.tar.gz
    3129b69e57118432653f073b2f19d4da  typo3_src-4.7.2.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since [4.7.1](TYPO3_4.7.1 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.7.2
-   \[SECURITY\] XSS in swfupload
    ([\#38578](https://forge.typo3.org/issues/38578))
-   \[TASK\] Raise submodule pointer
-   \[TASK\] Update version number to 4.7.2
-   \[BUGFIX\] Remove t3ver\_swapmode code blocks
    ([\#38608](https://forge.typo3.org/issues/38608))
-   \[BUGFIX\] RTE: Enable dialogue window resizing in IE
    ([\#38617](https://forge.typo3.org/issues/38617))
-   \[BUGFIX\] In IE9, RTE does not work correctly in compat modes
    IE8/IE7 ([\#38574](https://forge.typo3.org/issues/38574))
-   Revert “\[BUGFIX\] In IE9, RTE does not work correctly in compat
    modes IE8/IE7”
-   Change-Id: I2df4da14249e1a79cba8b772f3091401180706a1
-   \[BUGFIX\] In IE9, RTE does not work correctly in compat modes
    IE8/IE7 ([\#38574](https://forge.typo3.org/issues/38574))
-   \[BUGFIX\] Add missing link to travis script
    ([\#38567](https://forge.typo3.org/issues/38567))
-   \[BUGFIX\] IRRE records can't be expanded without an hidden field
    ([\#37615](https://forge.typo3.org/issues/37615))
-   \[BUGFIX\] TSFE-&gt;additionalFooterData for USER\_INT
    ([\#29254](https://forge.typo3.org/issues/29254))
-   \[TASK\] Activate travis build for 4.7
    ([\#38567](https://forge.typo3.org/issues/38567))
-   \[BUGFIX\] Add rootline workspace overlay for backend\_layouts.
    ([\#36313](https://forge.typo3.org/issues/36313))
-   \[BUGFIX\] Check if user is allowed to paste page to pagetree
    ([\#33546](https://forge.typo3.org/issues/33546))
-   \[BUGFIX\] TCEForms.Suggest wizard in IRRE records
    ([\#27020](https://forge.typo3.org/issues/27020))
-   \[BUGFIX\] Custom HTML tags no longer malformed in IE
    ([\#34786](https://forge.typo3.org/issues/34786))
-   \[BUGFIX\] Remove a rather dubious unit test for Redis cache backend
    ([\#38511](https://forge.typo3.org/issues/38511))
-   \[BUGFIX\] Page tree unit test fails if pages don't exist
    ([\#38503](https://forge.typo3.org/issues/38503))
-   \[BUGFIX\] Icon for save action in scheduler should be save-close
    ([\#36344](https://forge.typo3.org/issues/36344))
-   \[BUGFIX\] Fix unit test failure if gif compress is disabled
    ([\#38501](https://forge.typo3.org/issues/38501))
-   \[BUGFIX\] VariableFrontend initializeObject not called
    ([\#35915](https://forge.typo3.org/issues/35915))
-   \[BUGFIX\] Remove class of td if “No CSS styles for this table” is
    set ([\#37618](https://forge.typo3.org/issues/37618))
-   \[BUGFIX\] Markers (%s) are not replaced in TCEmain error messages
    ([\#36290](https://forge.typo3.org/issues/36290))
-   \[BUGFIX\] Fatal error in configuration (\$BE\_USER-&gt;uc)
    ([\#33444](https://forge.typo3.org/issues/33444))
-   \[TASK\] Add travis configuration file
    ([\#38357](https://forge.typo3.org/issues/38357))
-   \[BUGFIX\] Drag&Drop inside the root page of the pagetree isn't
    possible ([\#24626](https://forge.typo3.org/issues/24626))
-   \[BUGFIX\] Reports: Wrong indication for saltedpasswords
    ([\#36093](https://forge.typo3.org/issues/36093))
-   \[BUGFIX\] Declaration of tx\_rtehtmlarea\_base::drawRTE() not
    compatible ([\#37541](https://forge.typo3.org/issues/37541))
-   \[BUGFIX\] Ensure \$output is used as string
    ([\#36194](https://forge.typo3.org/issues/36194))
-   \[BUGFIX\] RTE link insertion issues with IE9
    ([\#38300](https://forge.typo3.org/issues/38300))
-   \[TASK\] Raise submodule pointer
-   \[BUGFIX\] Wrong margin calculation for Text/Image
    ([\#36541](https://forge.typo3.org/issues/36541))
-   \[BUGFIX\] Properly load existing usergroups in task
    ([\#36300](https://forge.typo3.org/issues/36300))
-   \[BUGFIX\] Exclude E\_STRICT from exceptionalErrors
    ([\#35154](https://forge.typo3.org/issues/35154))
-   \[BUGFIX\] Correct Path Calculation in Cardlayout
    ([\#36308](https://forge.typo3.org/issues/36308))
-   \[BUGFIX\] Unnecessary warning in css\_styled\_content (division by
    zero) ([\#36777](https://forge.typo3.org/issues/36777))
-   \[BUGFIX\] Fix refactoring regression in imagecopyresized
    ([\#36947](https://forge.typo3.org/issues/36947))
-   \[BUGFIX\] Hide the field “Selected Pages” for menu type “Sitemap”
    ([\#35944](https://forge.typo3.org/issues/35944))
-   BUGFIX\] Illegal string offset
    ([\#37553](https://forge.typo3.org/issues/37553))
-   \[TASK\] Set TYPO3 version to 4.7.2-dev


