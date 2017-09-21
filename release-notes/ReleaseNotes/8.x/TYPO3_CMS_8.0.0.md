Release Notes for TYPO3 CMS 8.0.0
=================================

This document contains information about TYPO3 CMS 8.0.0 which was
released on March 22nd, 2016.

News
----

<https://typo3.org/news/article/typo3-v80-start-your-engines/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    026918c819f0b92b74de4320dd3750b1  typo3_src-8.0.0.tar.gz
    84c1bf8ea60a472a11ca0678a34939a5  typo3_src-8.0.0.zip

SHA256 checksums
----------------

    faa00c9c465d9db4757c73d2a67ee3fc1201cb95bcb87f8c886a7b093fa0b39b  typo3_src-8.0.0.tar.gz
    ad26f9ae880e0fe05c702e5a2c87b236be62ed551abc576cf5d7a8e23d023d85  typo3_src-8.0.0.zip

Upgrading
---------

1.  Before you update any instance to 8.0, have a backup in place.
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

-   [8.0
    ChangeLog](https://docs.typo3.org/typo3cms/extensions/core/8-dev/Changelog/8.0/Index.html)
    -   [Features](https://docs.typo3.org/typo3cms/extensions/core/8-dev/Changelog/8.0/Index.html#features)
    -   [Important
        Changes](https://docs.typo3.org/typo3cms/extensions/core/8-dev/Changelog/8.0/Index.html#important)
    -   [Breaking
        Changes](https://docs.typo3.org/typo3cms/extensions/core/8-dev/Changelog/8.0/Index.html#breaking-changes)
    -   [Deprecation
        Changes](https://docs.typo3.org/typo3cms/extensions/core/8-dev/Changelog/8.0/Index.html#deprecation)

<Category:ReleaseNotes/TYPO3_8.x> [Category:TYPO3
8](Category:TYPO3_8 "wikilink") <Category:2016>
