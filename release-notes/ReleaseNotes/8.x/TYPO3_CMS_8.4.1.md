Release Notes for TYPO3 CMS 8.4.1
=================================

This document contains information about TYPO3 CMS 8.4.1 which was
released on November 22nd, 2016.

News
----

This release is a combined bug fix and security release.

Notes
-----

Find more details in the security bulletins:

-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-023/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-024/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    18b59e9a0c4a56a4b61fb887477718c7  typo3_src-8.4.1.tar.gz
    a1ac7768e3f9972726ed9f7d6c97fc47  typo3_src-8.4.1.zip

SHA256 checksums
----------------

    85ea054e9d3046d153607d0befa1404ae3b54998c208ae59262dade380aa8763  typo3_src-8.4.1.tar.gz
    53a4ccc62ec322efbae39d2870532fcde9857d8d75acd62386bd96fb93ac6022  typo3_src-8.4.1.zip

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
[8.4.0](TYPO3_CMS_8.4.0 "wikilink"):

    60da75a [RELEASE] Release of TYPO3 8.4.1
    d3f5622 [SECURITY] Prevent unnecessary unserialize in SuggestWizard
    803d928 [SECURITY] Disallow invalid encoding in GeneralUtility::validPathStr
    06ee1e4 [BUGFIX] Use page uid instead of alias for cHash calculation
    62ac289 [BUGFIX] Bind the cHash to the id of the "real" page

<Category:ReleaseNotes/TYPO3_8.x> [Category:TYPO3
8](Category:TYPO3_8 "wikilink") <Category:2016>
