Release Notes for TYPO3 CMS 7.6.23
==================================

This document contains information about TYPO3 CMS 7.6.23 which was
released on September 19th, 2017.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

SHA256 checksums
----------------

    17cc48e7bee97b09f686001e0422beef734c745bb89831f08b07b8743e002fc9  typo3_src-7.6.23.tar.gz
    81eec8e7c0ae98e78d6a7872436978202941e781cbf00214c0494694757c8828  typo3_src-7.6.23.zip

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
[7.6.22](TYPO3_CMS_7.6.22 "wikilink"):

`* dea1e96435 [RELEASE] Release of TYPO3 7.6.23`\
`* e81ced3b64 [BUGFIX] IRRE: Check if TCA['ctrl']['languageField'] is set`\
`* 35c3cb3699 [BUGFIX] Correctly handle non-existing level in menu.directory VH`\
`* e7456dd078 [TASK] Cleanup .gitignore`\
`* da5f623093 [TASK] Update localization rendering tests to newest Testing Framework`\
`* ac184a648c [BUGFIX] PHP7.2: Check value for NULL before count`\
`* 9c56450b19 [BUGFIX] SplitButtons: Abort click event if requested`\
`* 9d5f67f2db [BUGFIX] PHP7.2: Check value for NULL before count`\
`* 6bfc1b602b [TASK] Tests for rendering tt_content with FAL in Extbase`\
`* 92937ac6d5 [TASK] Cover getContentObject related methods by unit tests.`\
`* 35c54122c8 [TASK] Add functional tests for rendering translated tt_content with FAL`\
`* ab728f4160 [TASK] Set TYPO3 version to 7.6.23-dev`

<Category:ReleaseNotes/TYPO3_7.x> [Category:TYPO3
7](Category:TYPO3_7 "wikilink") <Category:2017>
