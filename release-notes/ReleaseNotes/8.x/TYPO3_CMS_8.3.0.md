Release Notes for TYPO3 CMS 8.3.0
=================================

This document contains information about TYPO3 CMS 8.3.0 which was
released on August 30th, 2016.

News
----

<https://typo3.org/news/article/releasing-typo3-v83/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    237318f8b3e578b897323bae81caa9e1  typo3_src-8.3.0.tar.gz
    98f4f506ef5ecebf9f415c821e99dba8  typo3_src-8.3.0.zip

SHA256 checksums
----------------

    2bda5064078b64e9fc71215359bc52058cb0719b15af9a502f46372bf0a5575c  typo3_src-8.3.0.tar.gz
    45babd374f00ff3e6b450f1b14455f056c384f78a56ddacacc4781527397743c  typo3_src-8.3.0.zip

Upgrading
---------

1.  Before you update any instance to 8.3, have a backup in place.
2.  Now download the new core and present it to your instance (by
    symlink or copied files)
3.  Use the install tool to run the upgrade wizards
4.  Use the install tool to clear each and every cache you can find,
    even opcode.
5.  When you encounter compatibility problems with your extensions, look
    for the git versions around in order to find one already upgraded.
    For example RealURL can be found here, until it gets released to
    TER: <https://github.com/helhum/realurl>

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies
as well.

Changes
-------

-   [8.3
    ChangeLog](https://docs.typo3.org/typo3cms/extensions/core/8-dev/Changelog/8.3/Index.html)
    -   [Features](https://docs.typo3.org/typo3cms/extensions/core/8-dev/Changelog/8.3/Index.html#features)
    -   [Important
        Changes](https://docs.typo3.org/typo3cms/extensions/core/8-dev/Changelog/8.3/Index.html#important)
    -   [Breaking
        Changes](https://docs.typo3.org/typo3cms/extensions/core/8-dev/Changelog/8.3/Index.html#breaking-changes)
    -   [Deprecation
        Changes](https://docs.typo3.org/typo3cms/extensions/core/8-dev/Changelog/8.3/Index.html#deprecation)

<Category:ReleaseNotes/TYPO3_8.x> [Category:TYPO3
8](Category:TYPO3_8 "wikilink") <Category:2016>
