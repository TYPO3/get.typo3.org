Release Notes for TYPO3 CMS 7.3.0
=================================

This document contains information about TYPO3 CMS 7.3.0 which was
released on June 16th, 2015.

News
----

<https://typo3.org/news/article/announcing-typo3-cms-73-more-stability-more-control/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    3a36ee4ac34a2433ab2e2089c923d8f1  typo3_src-7.3.0.tar.gz
    56904794c4d880512963d48d78e25674  typo3_src-7.3.0.zip

Upgrading
---------

1.  Before you update any instance to 7.3, have a backup in place.
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

[7.3
Changelog](https://docs.typo3.org/typo3cms/extensions/core/7.6/Changelog/7.3/Index.html)

[Important Changes](TYPO3.CMS/Releases/7.3/Important "wikilink")

[Breaking Changes](TYPO3.CMS/Releases/7.3/Breaking "wikilink")

[Functions marked for
deprecation](TYPO3.CMS/Releases/7.3/Deprecation "wikilink")

[Features](TYPO3.CMS/Releases/7.3/Feature "wikilink")

<Category:ReleaseNotes/TYPO3_7.x> [Category:TYPO3
7](Category:TYPO3_7 "wikilink") <Category:2015>
