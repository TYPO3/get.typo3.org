Release Notes for TYPO3 CMS 8.0.1
=================================

This document contains information about TYPO3 CMS 8.0.1 which was
released on April 12th, 2016.

News
----

This release is a combined bug fix and security release.

Notes
-----

Find more details in the security bulletins:

-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-009/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-011/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-012/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    08b62f7f22bf80dd7ad65bb6217c8218  typo3_src-8.0.1.tar.gz
    f69e6e54d068281470cad54d8eff4bee  typo3_src-8.0.1.zip

SHA256 checksums
----------------

    e7370dbf2b5fac8fecd8b0e472b655c902ea2502c7be630a1a50661e63e3ce02  typo3_src-8.0.1.tar.gz
    551595a24e4388ff8b321473a7bb09d42c4d180c2d62c3021d5617d8d657a476  typo3_src-8.0.1.zip

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
[8.0.0](TYPO3_CMS_8.0.0 "wikilink"):

    2245892 [RELEASE] Release of TYPO3 8.0.1
    b077aaf [SECURITY] Disallow login with empty password
    d9b1891 [SECURITY] Limit user access in workspace previews
    cb3c273 [SECURITY] Prevent XSS in SelectMultipleSideBySideElement
    62ccac8 [SECURITY] XSS in TCA type inline

<Category:ReleaseNotes/TYPO3_8.x> [Category:TYPO3
8](Category:TYPO3_8 "wikilink") <Category:2016>
