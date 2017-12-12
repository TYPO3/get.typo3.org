Release Notes for TYPO3 CMS 8.1.1
=================================

This document contains information about TYPO3 CMS 8.1.1 which was
released on May 24th, 2016.

News
----

This release is a combined bug fix and security release.

Notes
-----

Find more details in the security bulletins:

-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-013/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    4efe880e94e0c42f72e74b5a1343620a  typo3_src-8.1.1.tar.gz
    81d82ec5fdcb8639dd2598811ebe8df0  typo3_src-8.1.1.zip

SHA256 checksums
----------------

    2139ed6bae47ae1265c880a40825a1b85dfe020ba71fcfadc912ede85f73bd55  typo3_src-8.1.1.tar.gz
    e8229987713b435aa2f3a283f8b4ac8a9679a5ce95ca17c9871437fd68214882  typo3_src-8.1.1.zip

Upgrading
---------

1.  Before you update any instance to 8.1, have a backup in place.
2.  Now download the new core and present it to your instance (by
    symlink or copied files)
3.  Use the install tool to run the upgrade wizards
4.  Use the install tool to clear each and every cache you can find,
    even opcode.
5.  When you encounter compatibility problems with your extensions, look
    for the git versions around in order to find one already upgraded.
    For example realurl can be found here, until it gets released to
    TER: <https://github.com/helhum/realurl>

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies
as well.

Changes
-------

Here is a list of what was fixed since
[8.1.0](TYPO3_CMS_8.1.0 "wikilink"):

    0833bae [RELEASE] Release of TYPO3 8.1.1
    404f09d [SECURITY] Validate complete referring request

<Category:ReleaseNotes/TYPO3_8.x> [Category:TYPO3
8](Category:TYPO3_8 "wikilink") <Category:2016>
