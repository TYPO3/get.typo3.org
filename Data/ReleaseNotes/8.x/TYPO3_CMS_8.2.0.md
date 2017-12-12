Release Notes for TYPO3 CMS 8.2.0
=================================

This document contains information about TYPO3 CMS 8.2.0 which was
released on July 5th, 2016.

News
----

<https://typo3.org/news/article/releasing-typo3-v82/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    0637198c8ae3044bafd87be1e9883f37  typo3_src-8.2.0.tar.gz
    4aae3919126f1a796f5665d0b3bfb385  typo3_src-8.2.0.zip

SHA256 checksums
----------------

    6a6ee7fae6724639aa4e43fe984c20c74c61a5d6feaf152445d087d1ac57621d  typo3_src-8.2.0.tar.gz
    8fa93b9dded93e067bc6001d48054240ba0bb9d81bca4333600f51815f3b45a7  typo3_src-8.2.0.zip

Upgrading
---------

1.  Before you update any instance to 8.2, have a backup in place.
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

-   [8.2
    ChangeLog](https://docs.typo3.org/typo3cms/extensions/core/8-dev/Changelog/8.2/Index.html)
    -   [Features](https://docs.typo3.org/typo3cms/extensions/core/8-dev/Changelog/8.2/Index.html#features)
    -   [Important
        Changes](https://docs.typo3.org/typo3cms/extensions/core/8-dev/Changelog/8.2/Index.html#important)
    -   [Breaking
        Changes](https://docs.typo3.org/typo3cms/extensions/core/8-dev/Changelog/8.2/Index.html#breaking-changes)
    -   [Deprecation
        Changes](https://docs.typo3.org/typo3cms/extensions/core/8-dev/Changelog/8.2/Index.html#deprecation)

<Category:ReleaseNotes/TYPO3_8.x> [Category:TYPO3
8](Category:TYPO3_8 "wikilink") <Category:2016>
