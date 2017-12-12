Release Notes for TYPO3 4.6.7
=============================

This document contains information about TYPO3 version 4.6.6 which was
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

    6464e9fbecbe218d0508c28b7ddf94ca  blankpackage-4.6.7.tar.gz
    6a9e28cc3f44d7958f9dc66322a7f606  blankpackage-4.6.7.zip
    9f68cc22e8d4b68852197625e25a1dfa  dummy-4.6.7.tar.gz
    6671e1f654be11130bac7d76cb8b6afa  dummy-4.6.7.zip
    6b149d5263678e2137900315dd52b1fc  introductionpackage-4.6.7.tar.gz
    141df5c83487b2da3fd91eb78ccc9634  introductionpackage-4.6.7.zip
    53c371c218d890fe847a6b52869ca7ab  typo3_src+dummy-4.6.7.zip
    6d451794f1c9f2830255fde41e60fc5e  typo3_src-4.6.7.tar.gz
    60682a77f94495807352d50cc360ef3e  typo3_src-4.6.7.zip

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

Here is a list of what was fixed since [4.6.6](TYPO3_4.6.6 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.6.7
-   \[SECURITY\] Missing escaping for sys\_notes
    ([\#22748](https://forge.typo3.org/issues/22748))
-   \[!!!\]\[SECURITY\] XSS in filelink element
    ([\#25246](https://forge.typo3.org/issues/25246))
-   \[SECURITY\] Information disclosure showing DB name
    ([\#29060](https://forge.typo3.org/issues/29060))
-   \[SECURITY\] XSS in show item
    ([\#29397](https://forge.typo3.org/issues/29397))
-   \[SECURITY\] Missing escaping in scheduler
    ([\#24474](https://forge.typo3.org/issues/24474))
-   \[SECURITY\] XSS in BE file list
    ([\#30940](https://forge.typo3.org/issues/30940))
-   \[SECURITY\] XSS possibility in RemoveXSS
    ([\#30188](https://forge.typo3.org/issues/30188))
-   \[SECURITY\] XSS in be\_layouts
    ([\#29536](https://forge.typo3.org/issues/29536))
-   \[SECURITY\] XSS for extension meta data in About module
    ([\#30969](https://forge.typo3.org/issues/30969))
-   \[BUGFIX\] Missing column in
    t3lib\_TCEmain::getPreviousLocalizedRecordUid
    ([\#35260](https://forge.typo3.org/issues/35260))
-   \[TASK\] Add missing sql\_free\_result in alt\_doc.php
    ([\#34771](https://forge.typo3.org/issues/34771))
-   \[BUGFIX\] Tooltips for items in groupfields are not moved
    ([\#35176](https://forge.typo3.org/issues/35176))
-   \[TASK\] Code clean-up in t3lib\_PageRenderer
    ([\#35160](https://forge.typo3.org/issues/35160))
-   \[BUGFIX\] Blank page after Save+Close in page settings
    ([\#33791](https://forge.typo3.org/issues/33791))
-   Revert “\[BUGFIX\] showAccessRestrictedPages doesn't replace links
    to restricted subpages”
    ([\#32756](https://forge.typo3.org/issues/32756))
-   \[BUGFIX\] Fix baseurl handling of IE with RTE htmlArea in FE and
    realurl ([\#30847](https://forge.typo3.org/issues/30847))
-   \[BUGFIX\] Fatal error 't3lib\_lock' does not exist
    ([\#34662](https://forge.typo3.org/issues/34662))

### extbase

-   \[SECURITY\] Protect arguments of form \_\_referrer with HMAC
    ([\#35310](https://forge.typo3.org/issues/35310))

### fluid

-   \[SECURITY\] Protect arguments of form \_\_referrer with HMAC
    ([\#35310](https://forge.typo3.org/issues/35310))

### linkvalidator

-   \[BUGFIX\] Custom validators may be overriden by default validators
    ([\#34566](https://forge.typo3.org/issues/34566))
-   \[BUGFIX\] Code cleanup tx\_linkvalidator\_processor
    ([\#35058](https://forge.typo3.org/issues/35058))
-   \[BUGFIX\] Methods should not be private
    ([\#34581](https://forge.typo3.org/issues/34581))

### workspaces

-   \[BUGFIX\] Version record array is sorted twice
    ([\#35165](https://forge.typo3.org/issues/35165))

<Category:ReleaseNotes/TYPO3_4.6.x> [Category:TYPO3
4.6](Category:TYPO3_4.6 "wikilink") <Category:2012>
