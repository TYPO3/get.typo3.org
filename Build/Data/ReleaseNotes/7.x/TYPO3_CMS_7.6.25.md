Release Notes for TYPO3 CMS 7.6.25
==================================

This document contains information about TYPO3 CMS 7.6.25 which was
released on March 13th, 2018.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

SHA256 checksums
----------------

    1e34187712269aa556413d2529b950c0dbff17cc95160cf316de07a3c85ce859  typo3_src-7.6.25.tar.gz
    95542174abb474fded146fadaffaf2aa81029d3aba8b284241a15f78b577c619  typo3_src-7.6.25.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.\
It might be required to clear all caches; the “important actions”
section in the TYPO3 Install Tool offers the accordant possibility to do
so.

Changes
-------

Here is a list of what was fixed since
[7.6.24](TYPO3_CMS_7.6.24):

```
 * 26ccdf1905 [RELEASE] Release of TYPO3 7.6.25
 * 5b5e2393c2 [TASK] Add missing documentation files and correct errors
 * 1bd63f45ba [BUGFIX] Simulate submit button for rsaauth form submit
 * d06331e805 [BUGFIX] Properly HTML encode site name in page module
 * eb3a4dbda4 [BUGFIX] Do not check HTTP referrer anymore
 * 3d313c7e01 [BUGFIX] Unset internal properties of processed file on delete
 * 9165f3a830 [TASK] Synchronize RST files
 * 40f76b72fd [TASK] Filter duplicate cache commands from cacheQueue
 * fd102af469 [TASK] Put commit hooks into Build/git-hooks directory
 * 0ffc91c442 [BUGFIX] Avoid renumbering array keys on writing configuration
 * c5b7dbbc1d [BUGFIX] Catch exception editing record with deleted relation
 * 211edf6466 [BUGFIX] Correctly handle identical arrays in arrayDiffAssocRecursive
 * 3c4c6090a8 [BUGFIX] Show error message when hiding page from context menu
 * 17441b5efe [TASK] Update readme copyright date to 2018
 * d0b63ba720 [BUGFIX] Don't download language packs of not loaded extensions
 * 93efe90569 [TASK] Extend untangleFilesArray function test in RequestBuilder
 * 242d3f32fc [TASK] Change the label for scheduler "Save and create"
 * 0883ceb69d [BUGFIX] Make it possible to translate selectMultipleSideBySide
 * df4b0966e7 [BUGFIX] Access Close.html from Resources/Public/Html/
 * a37c3ea5f2 [TASK] Block access to .typoscript files
 * 377bdaae6f [BUGFIX] Do not rawurlencode record titles using label_alt and type=group
 * 374c3e968d [BUGFIX] Allow users without delete permissions to drag pages in page tree
 * 336ab6591a [TASK] Set TYPO3 version to 7.6.25-dev
```
