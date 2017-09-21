∫

Release Notes for TYPO3 CMS 4.7.17
==================================

This document contains information about TYPO3 CMS 4.7.17 which was
released on December 10th, 2013.

News
----

This release is a security release.

Notes
-----

Due to security issues found in the TYPO3 Core, there was a combined
release of TYPO3 4.5.32, 4.7.17, 6.0.12 and 6.1.7.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2013-004/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    eded3a2610931e74de5f5f15ebd9a347  blankpackage-4.7.17.tar.gz
    881aaeb8115420a470f206232816185c  blankpackage-4.7.17.zip
    f3366b856cc4a38937dd6efdc79e0bbb  dummy-4.7.17.tar.gz
    00c8a329bc75ab471c4d36a1b5e4066d  dummy-4.7.17.zip
    7ac3586f432f2d85b6dc6e4b8106a70e  typo3_src+dummy-4.7.17.zip
    4c3085e7f9b5e576ebdec9b7833b2af2  typo3_src-4.7.17.tar.gz
    fc9a7d1c75f5bf54703b8c1a31ebd334  typo3_src-4.7.17.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.7.16](TYPO3_4.7.16 "wikilink"):

-   \[TASK\] Set TYPO3 version to 4.7.18-dev
-   \[RELEASE\] Release of TYPO3 4.7.17
-   \[SECURITY\] Prevent editor controlled hmac content
    ([\#45043](https://forge.typo3.org/issues/45043))
-   \[SECURITY\] XSS in colorpicker wizard
    ([\#42772](https://forge.typo3.org/issues/42772))
-   \[SECURITY\] XSS in header link of all content elements
    ([\#31206](https://forge.typo3.org/issues/31206))
-   \[SECURITY\] XSS vulnerability in extension manager
    ([\#20811](https://forge.typo3.org/issues/20811))
-   \[SECURITY\] Information Disclosure in Wizards
    ([\#41714](https://forge.typo3.org/issues/41714))
-   \[SECURITY\] Fix open redirection in openid extension
    ([\#54099](https://forge.typo3.org/issues/54099))
-   \[SECURITY\] feuser\_adminLib.inc allows to set arbitrary fields
    ([\#48187](https://forge.typo3.org/issues/48187))
-   \[SECURITY\] XSS in be\_layout wizard
    ([\#36768](https://forge.typo3.org/issues/36768))
-   \[SECURITY\] Remove possible XSS from ActionController Error output
    ([\#54074](https://forge.typo3.org/issues/54074))
-   \[SECURITY\] Unsafe unserialize of GET parameter in Add-Wizard
    ([\#54073](https://forge.typo3.org/issues/54073))
-   \[BUGFIX\] ClientUtility does not detect Internet Explorer 11
    ([\#54124](https://forge.typo3.org/issues/54124))
-   Revert “\[BUGFIX\] Object passed to date()” versions.
    ([\#54120](https://forge.typo3.org/issues/54120))
-   Revert “\[BUGFIX\] Distinguish unassigend columns and colPos 0”
-   \[BUGFIX\] ext:adodb Restrict connection wizard to admins
    ([\#42651](https://forge.typo3.org/issues/42651))
-   \[BUGFIX\] Distinguish unassigend columns and colPos 0
    ([\#25157](https://forge.typo3.org/issues/25157))
-   \[TASK\] Set TYPO3 version to 4.7.17-dev

<Category:ReleaseNotes/TYPO3_4.7.x> [Category:TYPO3
4.7](Category:TYPO3_4.7 "wikilink") <Category:2013>
