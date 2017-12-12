Release Notes for TYPO3 4.5.14
==============================

This document contains information about TYPO3 version 4.5.14 which was
released on March 28th 2012.

News
----

This release is a combined bug fix and security release.

Notes
-----

Due to security issues found in the TYPO3 Core, there was a combined
release of TYPO3 4.4.14, 4.5.14 and 4.6.7.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2012-001/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    ccc960867b52d0b7e9b94b6f1e0dd68e  blankpackage-4.5.14.tar.gz
    5031fe6fa2cf51736cee16154272aaa8  blankpackage-4.5.14.zip
    8925c36c8221ca02f9b646aadd4a5ee4  dummy-4.5.14.tar.gz
    868f45f6a71bdf04f75d5db4df01c90f  dummy-4.5.14.zip
    4e136051a58131dd5318bfc41768ac28  introductionpackage-4.5.14.tar.gz
    a8d875dac8dcf9ef5535d0c4c9e12fb6  introductionpackage-4.5.14.zip
    19f650be00f8825cf112ecac7a41c148  typo3_src+dummy-4.5.14.zip
    7c5feebbbcb217b1f7c63b096df4951d  typo3_src-4.5.14.tar.gz
    6a9873fcf3abb6ad9dccc57b89f58adc  typo3_src-4.5.14.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Breaking Change
---------------

With the newly released TYPO3 versions, the description field of the
filelink content element is HTML encoded by default. If you allowed
editors to enter HTML code in this field, you may want to add the
following line to your TypoScript template, before updating.

    tt_content.uploads.20.itemRendering.20.2.htmlSpecialChars = 0

Allowing HTML in this field is discouraged for editors, same as allowing
the plain HTML content.

Changes
-------

Here is a list of what was fixed since
[4.5.13](TYPO3_4.5.13 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.5.14
-   \[SECURITY\] Missing escaping for sys\_notes
    ([\#22748](https://forge.typo3.org/issues/22748))
-   \[SECURITY\] XSS for extension meta data in About module
    ([\#30969](https://forge.typo3.org/issues/30969))
-   \[SECURITY\] XSS in show item
    ([\#29397](https://forge.typo3.org/issues/29397))
-   \[SECURITY\] Missing escaping in scheduler
    ([\#24474](https://forge.typo3.org/issues/24474))
-   \[SECURITY\] XSS in BE file list
    ([\#30940](https://forge.typo3.org/issues/30940))
-   \[SECURITY\] XSS possibility in RemoveXSS
    ([\#30188](https://forge.typo3.org/issues/30188))
-   \[!!!\]\[SECURITY\] XSS in filelink element
    ([\#25246](https://forge.typo3.org/issues/25246))
-   \[SECURITY\] XSS in be\_layouts
    ([\#29536](https://forge.typo3.org/issues/29536))
-   \[SECURITY\] Information disclosure showing DB name
    ([\#29060](https://forge.typo3.org/issues/29060))
-   \[TASK\] Raise submodule pointer
-   \[BUGFIX\] Missing column in
    t3lib\_TCEmain::getPreviousLocalizedRecordUid
    ([\#35260](https://forge.typo3.org/issues/35260))
-   \[TASK\] Clean-up PHPdoc comments in t3lib\_PageRenderer
    ([\#35158](https://forge.typo3.org/issues/35158))
-   \[BUGFIX\] Instance properties are defined statically
    ([\#35159](https://forge.typo3.org/issues/35159))
-   \[TASK\] Add missing sql\_free\_result in alt\_doc.php
    ([\#34771](https://forge.typo3.org/issues/34771))
-   \[BUGFIX\] Tooltips for items in groupfields are not moved
    ([\#35176](https://forge.typo3.org/issues/35176))
-   \[BUGFIX\] Blank page after Save+Close in page settings
    ([\#33791](https://forge.typo3.org/issues/33791))
-   \[TASK\] Code clean-up in t3lib\_PageRenderer
    ([\#35160](https://forge.typo3.org/issues/35160))
-   \[BUGFIX\] Non-static methods in t3lib\_cache are called statically
    ([\#35148](https://forge.typo3.org/issues/35148))
-   \[BUGFIX\] t3lib\_div should contain only static methods
    ([\#30050](https://forge.typo3.org/issues/30050))
-   Revert “\[BUGFIX\] showAccessRestrictedPages doesn't replace links
    to restricted subpages”
    ([\#32756](https://forge.typo3.org/issues/32756))
-   \[BUGFIX\] Fix baseurl handling of IE with RTE htmlArea in FE and
    realurl ([\#30847](https://forge.typo3.org/issues/30847))
-   \[BUGFIX\] Fatal error 't3lib\_lock' does not exist
    ([\#34662](https://forge.typo3.org/issues/34662))

### linkvalidator

-   \[BUGFIX\] Code cleanup tx\_linkvalidator\_processor
    ([\#35058](https://forge.typo3.org/issues/35058))
-   \[BUGFIX\] Methods should not be private
    ([\#34581](https://forge.typo3.org/issues/34581))

### workspaces

-   \[BUGFIX\] Version record array is sorted twice
    ([\#35165](https://forge.typo3.org/issues/35165))


