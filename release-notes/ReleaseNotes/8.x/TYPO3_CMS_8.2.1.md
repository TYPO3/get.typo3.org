Release Notes for TYPO3 CMS 8.2.1
=================================

This document contains information about TYPO3 CMS 8.2.1 which was
released on July 19th, 2016.

News
----

This release is a combined bug fix and security release.

Notes
-----

Find more details in the security bulletins:

-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-014/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-015/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-016/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-017/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-018/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    ec8750cc451c0fffbf1f1a377ddd997b  typo3_src-8.2.1.tar.gz
    e01654e5ad7b46952d9c8eb82890802c  typo3_src-8.2.1.zip

SHA256 checksums
----------------

    812e91130afdc8fe367ebcaf3294b535b8ab20127c1c7279e6fb2a54707b0e91  typo3_src-8.2.1.tar.gz
    8706cbae2d444a79466b23d5548500f4fc096f3d8e05d59f2c2c28b320ac1dee  typo3_src-8.2.1.zip

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
[8.2.0](TYPO3_CMS_8.2.0 "wikilink"):

    2ecfc86 [RELEASE] Release of TYPO3 8.2.1
    c51d635 [SECURITY] Link fields accept Javascript code when using URI Data Scheme
    fcd52bc [SECURITY] Prevent persistent username in filesystem
    22f1b23 [SECURITY][FEATURE] Disable import module for non admin users
    6a09d62 [SECURITY] Prevent XSS in IRRE elements
    bd8eded [SECURITY] Escape the link text in EmailViewHelper
    8c5a99c [SECURITY] Prevent XSS in ContentObjectRenderer
    e0fcf4d [SECURITY] Update guzzle to fix CVE-2016-5385
    410ce53 [BUGFIX] Flaky references in TypoScript parsing

<Category:ReleaseNotes/TYPO3_8.x> [Category:TYPO3
8](Category:TYPO3_8 "wikilink") <Category:2016>
