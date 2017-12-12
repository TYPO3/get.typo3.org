Release Notes for TYPO3 CMS 8.6.1
=================================

This document contains information about TYPO3 CMS 8.6.1 which was
released on February 28th, 2017.

News
----

This release is a combined bug fix and security release.

Notes
-----

Find more details in the security bulletins:

-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2017-002/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2017-003/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    77f0c3d42758f2f14f3a1fb5542b9a29  typo3_src-8.6.1.tar.gz
    74b3874d5a4be2979ea3dbba46382961  typo3_src-8.6.1.zip

SHA256 checksums
----------------

    4edf44df3c1e7fc6d00c106843b522c3bd66c0a74edc7b9137e112b7898733fa  typo3_src-8.6.1.tar.gz
    5b31c77f6f89edbcc06847f1017b2fefb1c5e81e1f2c006fa9d4da21ac0b00fc  typo3_src-8.6.1.zip

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
[8.6.0](TYPO3_CMS_8.6.0 "wikilink"):

    5ef31ecdde [RELEASE] Release of TYPO3 8.6.1
    278af8209d [SECURITY] Prevent possible XSS in Fluid templates
    61dd8f4328 [SECURITY] Prevent login of restricted users
    1c5765398a [BUGFIX] Don't update passwords if left untouched


