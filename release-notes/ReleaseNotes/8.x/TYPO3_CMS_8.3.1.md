Release Notes for TYPO3 CMS 8.3.1
=================================

This document contains information about TYPO3 CMS 8.3.1 which was
released on September 13th, 2016.

News
----

This release is a combined bug fix and security release.

Notes
-----

Find more details in the security bulletins:

-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-021/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-022/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    2a307d91f6f19a76f62216da0d3b0318  typo3_src-8.3.1.tar.gz
    227df291f3c36098cf95c3ca840aee47  typo3_src-8.3.1.zip

SHA256 checksums
----------------

    5fccfa52bc546d8605c40cf69d51a43b06368eaf2119b9fb9cfffb1120bd51be  typo3_src-8.3.1.tar.gz
    e2f07e4fd37a989a21ced7be149dcc73ce73d976b639613084060c7e845c8889  typo3_src-8.3.1.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.\
It might be required to clear all caches; the “important actions”
section in the TYPO3 Install Tool offers the accordant possibility to do
so.

Changes
-------

Here is a list of what was fixed since
[8.3.0](TYPO3_CMS_8.3.0 "wikilink"):

    aa61633 [RELEASE] Release of TYPO3 8.3.1
    3cdc329 [!!!][SECURITY] Mitigate potential cache flooding
    3ebce66 [SECURITY] Fix select_key XSS in PageLayoutView

<Category:ReleaseNotes/TYPO3_8.x> [Category:TYPO3
8](Category:TYPO3_8 "wikilink") <Category:2016>
