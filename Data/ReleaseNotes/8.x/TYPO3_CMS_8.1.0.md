Release Notes for TYPO3 CMS 8.1.0
=================================

This document contains information about TYPO3 CMS 8.1.0 which was
released on May 3rd, 2016.

News
----

<https://typo3.org/news/article/typo3-v81-tightening-the-screws/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    244a10258a080539728ec87545e2eaa6  typo3_src-8.1.0.tar.gz
    c16a51de79249d8527ae21b7482f58d5  typo3_src-8.1.0.zip

SHA256 checksums
----------------

    02a1aa49e86a83bb16afc39d8ef2119948a693e87e5fe772b8b3d466060e66c9  typo3_src-8.1.0.tar.gz
    07fbe343a84cb6da6e58b9a7c822df77bafd1f82894f70fbd89afb023ca8e629  typo3_src-8.1.0.zip

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

-   [8.1
    ChangeLog](https://docs.typo3.org/typo3cms/extensions/core/8-dev/Changelog/8.1/Index.html)
    -   [Features](https://docs.typo3.org/typo3cms/extensions/core/8-dev/Changelog/8.1/Index.html#features)
    -   [Important
        Changes](https://docs.typo3.org/typo3cms/extensions/core/8-dev/Changelog/8.1/Index.html#important)
    -   [Breaking
        Changes](https://docs.typo3.org/typo3cms/extensions/core/8-dev/Changelog/8.1/Index.html#breaking-changes)
    -   [Deprecation
        Changes](https://docs.typo3.org/typo3cms/extensions/core/8-dev/Changelog/8.1/Index.html#deprecation)

<Category:ReleaseNotes/TYPO3_8.x> [Category:TYPO3
8](Category:TYPO3_8 "wikilink") <Category:2016>
