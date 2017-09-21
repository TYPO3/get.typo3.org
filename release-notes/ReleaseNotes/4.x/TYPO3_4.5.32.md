Release Notes for TYPO3 CMS 4.5.32
==================================

This document contains information about TYPO3 CMS 4.5.32 which was
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

    f61c3e9a973d23e4a487c28d28ece5fa  blankpackage-4.5.32.tar.gz
    13bbfc7e80597097bedbfa90cdacca02  blankpackage-4.5.32.zip
    e04ee38c259b5319743a7986d708c958  dummy-4.5.32.tar.gz
    2f64427e5683108a57f10b2396c0b0c9  dummy-4.5.32.zip
    3ea6ddaf138087e993e59c60f9a29ff4  introductionpackage-4.5.32.tar.gz
    b59b0a040729e77df1354cd4783302ff  introductionpackage-4.5.32.zip
    49d79e50ec3d8fe7ab0b5505283af4eb  typo3_src+dummy-4.5.32.zip
    a7dc7474dd60b210b97c60a3f07141fe  typo3_src-4.5.32.tar.gz
    ccd38a5bbccc295749de2ede52e1ff1a  typo3_src-4.5.32.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.5.31](TYPO3_4.5.31 "wikilink"):

-   \[TASK\] Set TYPO3 version to 4.5.33-dev
-   \[RELEASE\] Release of TYPO3 4.5.32
-   \[SECURITY\] XSS in header link of all content elements
    ([\#31206](https://forge.typo3.org/issues/31206))
-   \[SECURITY\] XSS in colorpicker wizard
    ([\#42772](https://forge.typo3.org/issues/42772))
-   \[SECURITY\] Prevent editor controlled hmac content
    ([\#45043](https://forge.typo3.org/issues/45043))
-   Change-Id: I66b1ddc379577fc3ed67012384a15c38a6b76a03
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
-   \[BUGFIX\] Fix failing test
    ([\#54282](https://forge.typo3.org/issues/54282))
-   \[BUGFIX\] Fix failing test
    ([\#54280](https://forge.typo3.org/issues/54280))
-   \[BUGFIX\] ClientUtility does not detect Internet Explorer 11
    ([\#54124](https://forge.typo3.org/issues/54124))
-   Revert "\[BUGFIX\] Object passed to date() versions.
    ([\#54120](https://forge.typo3.org/issues/54120))
-   \[BUGFIX\] ext:adodb Restrict connection wizard to admins
    ([\#42651](https://forge.typo3.org/issues/42651))
-   \[BUGFIX\] Distinguish unassigend columns and colPos 0
    ([\#25157](https://forge.typo3.org/issues/25157))
-   \[TASK\] Set TYPO3 version to 4.5.32-dev

<Category:ReleaseNotes/TYPO3_4.5.x> [Category:TYPO3
4.5](Category:TYPO3_4.5 "wikilink") <Category:2013>
