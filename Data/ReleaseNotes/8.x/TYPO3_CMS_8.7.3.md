Release Notes for TYPO3 CMS 8.7.3
=================================

This document contains information about TYPO3 CMS 8.7.3 which was
released on July 4th, 2017.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

SHA256 checksums
----------------

    f354b2abb6a694e4dc521fa19936097a4acde504edadee86cfdc2b20ca0153bd  typo3_src-8.7.3.tar.gz
    4eeb380601b1b90166cee3bcf6e60431d953e5c48a8eef0cae5a30502de515d8  typo3_src-8.7.3.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.\
It might be required to clear all caches; the “important actions”
section in the TYPO3 Install Tool offers the accordant possibility to do
so.

Make sure to clear your browser caches and App Data after upgrading.

Changes
-------

Here is a list of what was fixed since
[8.7.2](TYPO3_CMS_8.7.2 "wikilink"):

`* 0356a94c3e [RELEASE] Release of TYPO3 8.7.3`\
`* 143de0e330 [TASK] Upgade CKEDITOR to 4.7.1`\
`* abf8691c23 [BUGFIX] Make sure correct data types are passed around in RefIndex`\
`* 981a5b11b8 [BUGFIX] Remove not working CDATA usage in JS template file`\
`* 0e005cccee [BUGFIX] Fix typo in "Recently updated pages" menu description`\
`* c162474a1b [BUGFIX] Copying workspace version record fails`\
`* 307b375281 [BUGFIX] Allow whitespaces in list of file extensions`\
`* 4d1eb1537b [BUGFIX] Correct the replace section of sysext:lang`\
`* d658d52d70 [TASK] Have LICENSE.txt in all core exts`\
`* 121dbbddb7 [BUGFIX] Initialize uploadfolder key for TCA group file_reference`\
`* b3316347ac [BUGFIX] Fully initialize ContentObjectRenderer in HtmlViewHelper`\
`* a7859e5df4 [BUGFIX] Fix namespace of PHPUnit exception`\
`* 2ecb3e86ce [BUGFIX] iconIdentifier for custom system information panel items`\
`* 82255e4488 [BUGFIX] travis-ci: Have DE locale`\
`* 1238d43c6e [TASK] typo3/testing-framework 1.1 brings phpunit 6.2`\
`* 0021961a46 [TASK] Update some require-dev dependencies`\
`* b71c2b6e38 [TASK] bamboo: Run 8.7 after master nightly`\
`* 4889b0ede5 [TASK] bamboo 8.7 test specs and pgsql install test`\
`* f849ec43ed [TASK] Raise testing-framework to 1.0.9`\
`* 985774eb4f [BUGFIX] Add missing frontend context check when fetching view configuration`\
`* ee2b45ed79 [TASK] Functional test for tt_content rendering`\
`* a8e7c54aa0 [TASK] Raise typo3/testing-framework to 1.0.8`\
`` * 81d208cf5e [BUGFIX] Fix namespace of `SaltedPasswordsUtility` in documentation ``\
`* 7efc3141e0 [BUGFIX] Stabilize a flaky unit test`\
`* e58eacdacf [BUGFIX] Fix checking config.metaCharset with uppercase letters`\
`* 246f156933 [TASK] Set TYPO3 version to 8.7.3-dev`


