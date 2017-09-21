Release Notes for TYPO3 CMS 7.0.0
=================================

This document contains information about TYPO3 CMS 7.0.0 which was
released on December 3rd, 2014.

News
----

<https://typo3.org/news/article/the-typo3-community-publishes-typo3-cms-70/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

9a8bde071766dc899471c5aeb0352a91 typo3\_src-7.0.0.tar.gz

a35a51b6104247c78dabdced052027fd typo3\_src-7.0.0.zip

Upgrading
---------

1.  Before you update any instance to 7.0, have a backup in place.
2.  Then uninstall any extension, that is not shipped with the core.
    This will avoid broken backend after upgrade due to removed class
    alias layer.
3.  Now download the new core and present it to your instance (by
    symlink or copied files)
4.  Use the install tool to run the upgrade wizards
5.  Use the install tool to clear each and every cache you can find,
    even opcode.
6.  Open the backend and go to the extensionmanager. When you use any
    extension without namespaces, activate the compatibility6 extension.
    You find further information about this extension and its purpose at
    <https://typo3.org/news/article/retaining-compatibility-to-typo3-cms-6/>
7.  Now reactivate your extensions and enjoy the brand new TYPO3 CMS 7.
8.  When you encounter compatibility problems with your extensions, look
    for the git versions around in order to find one already upgraded.
    For example realurl can be found here, until it gets released to
    TER: <https://github.com/helhum/realurl>

Changes
-------

<Category:ReleaseNotes/TYPO3_7.x> [Category:TYPO3
7](Category:TYPO3_7 "wikilink") <Category:2014>
