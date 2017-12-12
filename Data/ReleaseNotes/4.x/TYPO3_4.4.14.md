Release Notes for TYPO3 4.4.14
==============================

This document contains information about TYPO3 version 4.4.14 which was
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

    d603f1c331385a0a1a1de1cfa5f16820  blankpackage-4.4.14.tar.gz
    28a46138ca13af4d3661bce282cdd37f  blankpackage-4.4.14.zip
    bf6df8c4f73b522aefb739f69c4b81f3  dummy-4.4.14.tar.gz
    fcbfe88c4ca8e567498bb87d55660d5e  dummy-4.4.14.zip
    765644752507002f69fbbb1600a1d16d  typo3_src+dummy-4.4.14.zip
    55a4a1b7df9efa91feae3160b60f2081  typo3_src-4.4.14.tar.gz
    78cff41cf3cb03b07150dfaddc13c6d9  typo3_src-4.4.14.zip

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
[4.4.13](TYPO3_4.4.13 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.4.14
-   \[SECURITY\] XSS possibility in RemoveXSS
    ([\#30188](https://forge.typo3.org/issues/30188))
-   \[SECURITY\] XSS in show item
    ([\#29397](https://forge.typo3.org/issues/29397))
-   \[!!!\]\[SECURITY\] XSS in filelink element
    ([\#25246](https://forge.typo3.org/issues/25246))
-   \[SECURITY\] XSS for extension meta data in About module
    ([\#30969](https://forge.typo3.org/issues/30969))
-   \[SECURITY\] Missing escaping in scheduler
    ([\#24474](https://forge.typo3.org/issues/24474))
-   \[SECURITY\] XSS in BE file list
    ([\#30940](https://forge.typo3.org/issues/30940))
-   \[SECURITY\] Missing escaping for sys\_notes
    ([\#22748](https://forge.typo3.org/issues/22748))
-   \[SECURITY\] Information disclosure showing DB name
    ([\#29060](https://forge.typo3.org/issues/29060))
-   \[BUGFIX\] Tooltips for items in groupfields are not moved
    ([\#35176](https://forge.typo3.org/issues/35176))
-   \[BUGFIX\] Send no-cache headers in t3lib\_userauth
    ([\#24125](https://forge.typo3.org/issues/24125))
-   \[TASK\] Update copyright year to 2012
    ([\#34600](https://forge.typo3.org/issues/34600))
-   \[BUGFIX\] cmpIPv4: prevent E\_NOTICE, cleanup compare, testcases
    ([\#27230](https://forge.typo3.org/issues/27230))
-   \[BUGFIX\] getAllowedItems called with one parameter too much
    ([\#34030](https://forge.typo3.org/issues/34030))

<Category:ReleaseNotes/TYPO3_4.4.x> [Category:TYPO3
4.4](Category:TYPO3_4.4 "wikilink") <Category:2012>
