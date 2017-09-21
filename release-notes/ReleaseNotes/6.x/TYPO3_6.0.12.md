∫

Release Notes for TYPO3 CMS 6.0.12
==================================

This document contains information about TYPO3 CMS 6.0.12 which was
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

    07c789c3986778fc5a6d10d71c2ee093  blankpackage-6.0.12.tar.gz
    9f581f1531fbd53c2ff5ac01af607f92  blankpackage-6.0.12.zip
    da0b1a03940f0f968cab4d63a0cdfae6  dummy-6.0.12.tar.gz
    aea7b13c14b0a172b8fc699748f5d8e4  dummy-6.0.12.zip
    19d97301de624a5996eae506aeb995d8  typo3_src+dummy-6.0.12.zip
    8238e4af63bfbca34d43193065604d34  typo3_src-6.0.12.tar.gz
    25ba5afe61b5d426a1895fb298536b7a  typo3_src-6.0.12.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[6.0.11](TYPO3_6.0.11 "wikilink"):

-   \[RELEASE\] Release of TYPO3 6.0.12
-   \[SECURITY\] XSS in header link of all content elements
    ([\#31206](https://forge.typo3.org/issues/31206))
-   \[SECURITY\] XSS in colorpicker wizard
    ([\#42772](https://forge.typo3.org/issues/42772))
-   \[SECURITY\] Prevent editor controlled hmac content
    ([\#45043](https://forge.typo3.org/issues/45043))
-   \[SECURITY\] XSS in backend user adminstration
    ([\#48691](https://forge.typo3.org/issues/48691))
-   \[SECURITY\] Information Disclosure in Wizards
    ([\#41714](https://forge.typo3.org/issues/41714))
-   \[SECURITY\] Fix open redirection in openid extension
    ([\#54099](https://forge.typo3.org/issues/54099))
-   \[SECURITY\] feuser\_adminLib.inc allows to set arbitrary fields
    ([\#48187](https://forge.typo3.org/issues/48187))
-   \[SECURITY\] XSS in be\_layout wizard
    ([\#36768](https://forge.typo3.org/issues/36768))
-   \[SECURITY\] XSS in beuser VH
    ([\#47086](https://forge.typo3.org/issues/47086))
-   \[SECURITY\] Remove possible XSS from ActionController Error output
    ([\#54074](https://forge.typo3.org/issues/54074))
-   \[SECURITY\] Unsafe unserialize of GET parameter in Add-Wizard
    ([\#54073](https://forge.typo3.org/issues/54073))
-   \[BUGFIX\] ClientUtility does not detect Internet Explorer 11
    ([\#54124](https://forge.typo3.org/issues/54124))
-   \[BUGFIX\] Add missing namespacing for calling GeneralUtility
    ([\#54117](https://forge.typo3.org/issues/54117))
-   \[BUGFIX\] ext:adodb Restrict connection wizard to admins
    ([\#42651](https://forge.typo3.org/issues/42651))
-   \[TASK\] Set TYPO3 version to 6.0.12-dev

<Category:ReleaseNotes/TYPO3_6.0.x> [Category:TYPO3
6.0](Category:TYPO3_6.0 "wikilink") <Category:2013>
