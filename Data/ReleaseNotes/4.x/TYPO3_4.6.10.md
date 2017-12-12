Release Notes for TYPO3 4.6.10
==============================

This document contains information about TYPO3 version 4.6.10 which was
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

    b31f18adcaf93a49c9231579ca7c91cc  blankpackage-4.6.10.tar.gz
    29f91a8a3633fc85ef3e6f23ef4b2072  blankpackage-4.6.10.zip
    0278662789255c10abd951229184072d  dummy-4.6.10.tar.gz
    2b0a06483106cb5a6e748ac10424fa67  dummy-4.6.10.zip
    c01acffea8c85523696cb15ffd9eb80b  typo3_src+dummy-4.6.10.zip
    cbf95dfa209c41616f7ec3b261f461c3  typo3_src-4.6.10.tar.gz
    b48fcb0fbdb17bd56f1e252cdf1b6787  typo3_src-4.6.10.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since [4.6.9](TYPO3_4.6.9 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.6.10
-   \[SECURITY\] XSS in swfupload
    ([\#38578](https://forge.typo3.org/issues/38578))
-   \[TASK\] Raise submodule pointer
-   \[BUGFIX\] Exclude E\_STRICT from exceptionalErrors
    ([\#35154](https://forge.typo3.org/issues/35154))
-   \[BUGFIX\] IRRE records can't be expanded without an hidden field
    ([\#37615](https://forge.typo3.org/issues/37615))
-   \[BUGFIX\] TSFE-&gt;additionalFooterData for USER\_INT
    ([\#29254](https://forge.typo3.org/issues/29254))
-   \[BUGFIX\] In IE9, RTE does not work correctly in compat modes
    IE8/IE7 ([\#38574](https://forge.typo3.org/issues/38574))
-   Revert “\[BUGFIX\] In IE9, RTE does not work correctly in compat
    modes IE8/IE7”
-   Change-Id: I1489dd7fdce8f96922a8e516019770845efea88c
-   \[BUGFIX\] In IE9, RTE does not work correctly in compat modes
    IE8/IE7 ([\#38574](https://forge.typo3.org/issues/38574))
-   \[BUGFIX\] Custom HTML tags no longer malformed in IE
    ([\#34786](https://forge.typo3.org/issues/34786))
-   \[BUGFIX\] Remove a rather dubious unit test for Redis cache backend
    ([\#38511](https://forge.typo3.org/issues/38511))
-   \[BUGFIX\] canBeInterpretedAsInteger fatals if given an object
    ([\#33446](https://forge.typo3.org/issues/33446))
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
-   \[BUGFIX\] Reports: Wrong indication for saltedpasswords
    ([\#36093](https://forge.typo3.org/issues/36093))
-   \[BUGFIX\] Declaration of tx\_rtehtmlarea\_base::drawRTE() not
    compatible ([\#37541](https://forge.typo3.org/issues/37541))
-   \[BUGFIX\] IRRE hide/unhide broken
    ([\#34303](https://forge.typo3.org/issues/34303))
-   \[TASK\] PHP 5.4 adjustments
    ([\#34685](https://forge.typo3.org/issues/34685))
-   \[BUGFIX\] Ensure \$output is used as string
    ([\#36194](https://forge.typo3.org/issues/36194))
-   \[BUGFIX\] fe\_adminLib.inc uses undefined function
    ([\#32773](https://forge.typo3.org/issues/32773))
-   \[BUGFIX\] Properly load existing usergroups in task
    ([\#36300](https://forge.typo3.org/issues/36300))
-   \[BUGFIX\] Unnecessary warning in css\_styled\_content (division by
    zero) ([\#36777](https://forge.typo3.org/issues/36777))
-   \[BUGFIX\] Hide the field “Selected Pages” for menu type “Sitemap”
    ([\#35944](https://forge.typo3.org/issues/35944))
-   \[BUGFIX\] redirect to referrer when changing password
    ([\#21943](https://forge.typo3.org/issues/21943))
-   BUGFIX\] Illegal string offset
    ([\#37553](https://forge.typo3.org/issues/37553))
-   \[TASK\] Set TYPO3 version to 4.6.10-dev


