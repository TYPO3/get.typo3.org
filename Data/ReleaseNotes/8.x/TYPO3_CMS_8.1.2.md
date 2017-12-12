Release Notes for TYPO3 CMS 8.1.2
=================================

This document contains information about TYPO3 CMS 8.1.2 which was
released on May 24th, 2016.

News
----

This release is a regression fix release for TYPO3 CMS
[8.1.1](TYPO3_CMS_8.1.1 "wikilink") which contained critical security
fixes.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    74a3415e588c285715225c1766a5157b  typo3_src-8.1.2.tar.gz
    288d6dc63017c2ba313ac7a234e79eb6  typo3_src-8.1.2.zip

SHA256 checksums
----------------

    21d8a7d3604d44ea9a2258546940552ef89c65c5fe8281c17ebef74bedc86a83  typo3_src-8.1.2.tar.gz
    856387c6d6f5d9ada9908603c66a029c14d12f2d785486b5f5f66cff3a45c8e4  typo3_src-8.1.2.zip

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
[8.1.1](TYPO3_CMS_8.1.1 "wikilink"):

    e324deb [RELEASE] Release of TYPO3 8.1.2
    e272331 [BUGFIX] Allow non critical request arguments with @
    a5a0a6b [TASK] Set TYPO3 version to 8.1.2-dev

<Category:ReleaseNotes/TYPO3_8.x> [Category:TYPO3
8](Category:TYPO3_8 "wikilink") <Category:2016>
