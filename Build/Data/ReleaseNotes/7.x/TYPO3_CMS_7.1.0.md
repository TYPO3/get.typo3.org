Release Notes for TYPO3 CMS 7.1.0
=================================

This document contains information about TYPO3 CMS 7.1.0 which was
released on February 24th, 2015.

News
----

<https://typo3.org/news/article/typo3-cms-71-released-home-improvement/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    c17d256e7d2e1b6bfaf7c70ba5b26d90  typo3_src-7.1.0.tar.gz
    60a1725869c7633cdb697cea6672ad5d  typo3_src-7.1.0.zip

Upgrading
---------

1.  Before you update any instance to 7.1, have a backup in place.
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

[Breaking Changes](TYPO3.CMS/Releases/7.1/Breaking "wikilink")

[Functions marked for
deprecation](TYPO3.CMS/Releases/7.1/Deprecation "wikilink")

[Features](TYPO3.CMS/Releases/7.1/Feature "wikilink")


