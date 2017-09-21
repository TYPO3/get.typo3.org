Release Notes for TYPO3 CMS 7.6.0 / TYPO3 7 LTS
===============================================

This document contains information about TYPO3 CMS 7.6.0 which was
released on November 10th, 2015.

LTS / Support Timeframe
-----------------------

TYPO3 CMS 7.6 is known as TYPO3 7 LTS and is the last major development
version in the TYPO3 CMS 7 branch. Maintenance updates will be available
until April 2017, security and important bugfixes will be provided until
November 2018.

News and Release Notes
----------------------

<https://typo3.org/download/release-notes/typo3-7-release-notes/>

<https://typo3.org/news/article/announcing-typo3-cms-7-lts/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    91b5ab3c7f0e4b60aafb1c0e9966a06b  typo3_src-7.6.0.tar.gz
    a8a70c11a09bef943bb6d7076f841776  typo3_src-7.6.0.zip

Upgrading
---------

1.  Before you update any instance to 7.6, have a backup in place.
2.  Then uninstall any extension, that is not shipped with the core.
    This will avoid broken backend after upgrade due to removed class
    alias layer.
3.  Now download the new core and present it to your instance (by
    symlink or copied files)
4.  Use the install tool to run the upgrade wizards
5.  Use the install tool to clear each and every cache you can find,
    even opcode.
6.  Open the backend and go to the extensionmanager. When you use an
    extension that uses core classes without namespaces, activate the
    compatibility6 extension which can be found in the TYPO3 Extension
    Repository of typo3.org. You find further information about this
    extension and its purpose at
    <https://typo3.org/news/article/retaining-compatibility-to-typo3-cms-6/>
7.  Now reactivate your extensions and enjoy the brand new TYPO3 CMS 7.
8.  When you encounter compatibility problems with your extensions, look
    for the git versions around in order to find one already upgraded.
    For example realurl can be found here, until it gets released to
    TER: <https://github.com/helhum/realurl>

Changes
-------

[7.6
Changelog](https://docs.typo3.org/typo3cms/extensions/core/7.6/Changelog/7.6/Index.html)

[Important Changes](TYPO3.CMS/Releases/7.6/Important "wikilink")

[Breaking Changes](TYPO3.CMS/Releases/7.6/Breaking "wikilink")

[Functions marked for
deprecation](TYPO3.CMS/Releases/7.6/Deprecation "wikilink")

[Features](TYPO3.CMS/Releases/7.6/Feature "wikilink")

<Category:ReleaseNotes/TYPO3_7.x> [Category:TYPO3
7](Category:TYPO3_7 "wikilink") <Category:2015>
