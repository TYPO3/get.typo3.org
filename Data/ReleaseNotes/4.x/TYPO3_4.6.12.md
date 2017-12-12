Release Notes for TYPO3 4.6.12
==============================

This document contains information about TYPO3 version 4.6.12 which was
released on August 15th 2012.

News
----

This release is a combined bug fix and security release.

Notes
-----

Due to security issues found in the TYPO3 Core, there was a combined
release of TYPO3 4.5.19, 4.6.12 and 4.7.4.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2012-004/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    7f3c5ed8c1008f0e38e0c582c718359e  blankpackage-4.6.12.tar.gz
    17b22f7ec9b60928691a3d2242a0ced7  blankpackage-4.6.12.zip
    be3db8166be4bc0d8743fe2b5578b87d  dummy-4.6.12.tar.gz
    c78aed58edc71f7c0490d7bf7993abf1  dummy-4.6.12.zip
    70a19461c0f3b1aee6d37e1f0e306f81  typo3_src+dummy-4.6.12.zip
    063ff6ef8ed93dbb2f48d447fbe757ae  typo3_src-4.6.12.tar.gz
    dd08fc74c4bb9fcf1f8c2c02fbb27cda  typo3_src-4.6.12.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.6.11](TYPO3_4.6.11 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.6.12
-   \[SECURITY\] XSS in install tool
    ([\#21634](https://forge.typo3.org/issues/21634))
-   \[SECURITY\] Page Link Target vulnerable to XSS
    ([\#32653](https://forge.typo3.org/issues/32653))
-   \[SECURITY\] XSS in validateForm
    ([\#25052](https://forge.typo3.org/issues/25052))
-   \[SECURITY\] XSS in TCE forms
    ([\#25356](https://forge.typo3.org/issues/25356))
-   \[SECURITY\] XSS in Scheduler Example Task
    ([\#30967](https://forge.typo3.org/issues/30967))
-   \[SECURITY\] HTML5 support in RemoveXSS
    ([\#37127](https://forge.typo3.org/issues/37127))
-   \[SECURITY\] Information Disclosure in the Configuration Module
    ([\#39345](https://forge.typo3.org/issues/39345))
-   \[SECURITY\] Untrusted GP data is unserialized in old CSH handling
    ([\#33520](https://forge.typo3.org/issues/33520))
-   \[SECURITY\] XSS in Indexed Search statistics
    ([\#31927](https://forge.typo3.org/issues/31927))
-   \[SECURITY\] t3lib\_div::quoteJSvalue allows XSS
    ([\#23226](https://forge.typo3.org/issues/23226))
-   \[TASK\] Set TYPO3 version to 4.6.12-dev

<Category:ReleaseNotes/TYPO3_4.6.x> [Category:TYPO3
4.6](Category:TYPO3_4.6 "wikilink") <Category:2012>
