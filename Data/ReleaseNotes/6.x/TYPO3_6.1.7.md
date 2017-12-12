Release Notes for TYPO3 CMS 6.1.7
=================================

This document contains information about TYPO3 CMS 6.1.7 which was
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

    a03c09e9bf8850d98d7db2c030469feb  blankpackage-6.1.7.tar.gz
    b8070f90c3b7cbbb2d3cfadd0134bace  blankpackage-6.1.7.zip
    5bd2054a24b4b83595f5b4d9008d42d8  dummy-6.1.7.tar.gz
    5c1dbe7e967ba1ea81c5d4b9a098e421  dummy-6.1.7.zip
    4783b306f0188ba3cd9c0dcd7dcc274a  governmentpackage-6.1.7.tar.gz
    f1d607795075772ac52a24b12231b056  governmentpackage-6.1.7.zip
    fd422bb1eb592ac03073ba371022c61c  introductionpackage-6.1.7.tar.gz
    83ecb19d4fdc08e1bdafb167ffbe8cb0  introductionpackage-6.1.7.zip
    16a952424b355a3efbcdac5b836eca86  typo3_src+dummy-6.1.7.zip
    66130b21ce61ef2ff5eafdd28b4ba6e1  typo3_src-6.1.7.tar.gz
    e7e65287615e6d7254e5442f653b6f49  typo3_src-6.1.7.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since [6.1.6](TYPO3_6.1.6 "wikilink"):

-   \[TASK\] Set TYPO3 version to 6.1.8-dev
-   \[RELEASE\] Release of TYPO3 6.1.7
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
-   \[TASK\] Set TYPO3 version to 6.1.7-dev


