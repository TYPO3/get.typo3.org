Release Notes for TYPO3 CMS 8.7.1
=================================

This document contains information about TYPO3 CMS 8.7.1 which was
released on April 18th, 2017.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    493ec5f93014f129d45a30bec8b475d8  typo3_src-8.7.1.tar.gz
    20e86c51f164a080771bb2ce83be2c5d  typo3_src-8.7.1.zip

SHA256 checksums
----------------

    4035dcbfdf611a425ed15be8c46fa4722020b442ee17f9c0bba2d8bcf6649815  typo3_src-8.7.1.tar.gz
    9761811bbcd74bfeccef2ff6e1793d1b8e8080150b6b849e60c82868cf55443f  typo3_src-8.7.1.zip

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
[8.7.0](TYPO3_CMS_8.7.0 "wikilink"):

    5e3a0e4f21 [RELEASE] Release of TYPO3 8.7.1
    06a2138536 [BUGFIX] Update branch alias for composer version
    811653ded3 [TASK] Use new CLI binary in docs instead of cli_dispatch.phpsh
    e8a120437b [BUGFIX] Use correct value for EU flag in sys_language records
    e68e737e93 [BUGFIX] Fix bug due to improper usage of boolean as object
    bbc8e72792 [TASK] Update typo3/cms-styleguide from 8.0.8 to 8.0.9
    6da38a6879 [BUGFIX] AbstractMessage should have string, but integer is given
    338a00045e [BUGFIX] EXT:form - Fix default file upload mime types
    889d470ccb [TASK] Cover trivial setters and getters of cObj with unit tests
    3967844bbe [BUGFIX] Use correct order of SQL parameters in SysRefindexHashUpdater
    286124c67e [BUGFIX] Quote table and fieldnames in BackendUtility::BEenableFields
    80831612ed [BUGFIX] Extbase: quote table and field names in join statements
    0869b4a627 [TASK] EXT:form - minor UX/ UI optimizations
    7fdfd9002d [TASK] Change TYPO3-logo from png to svg
    d53b7a29f7 [BUGFIX] Use named parameters in Extbase IN() queries
    9efd09fe16 [TASK] Show same edit icon in filelist clickmenu
    1e50841ac4 [TASK] Mark ext:form as stable
    d29791254f [BUGFIX] Make EXT:form checkbox markup compatible to Bootstrap
    3afc2f1974 [BUGFIX] Do not prefix FAL file links with absRefPrefix
    a519f63a2f [TASK] Minor UX optimization in "Record selector" pop-up window
    fd7dc452ef [TASK] Add extra info to description in SysRefindexHashUpdater
    dff8286c71 [BUGFIX] Email links with parameters in LegacyLinkNotationConverter
    99c7599276 [BUGFIX] Correct stylelint violations in scss files
    8916620ac2 [BUGFIX] Hide download distributions in composer mode
    23c3c2965c [TASK] Correct view webpage link anchor in list module
    2aa304eb05 [BUGFIX] Ignore deleted references when deleting a file
    b1572ac3a5 [BUGFIX] EXT:form - Avoid JavaScript errors
    7ccdba12d6 [BUGIFX] Allow file replace for editors
    9819cad453 [BUGFIX] Do not use doctrine constraints without bind values
    b6cfadc904 [BUGFIX] Install tool css id used twice
    66278e2120 [TASK] Add unit test to cover ContentObjectRenderer::linkWrap
    9f0fceb427 [BUGFIX] Allow editing of yaml files in the backend
    17d833ff92 [BUGFIX] Point new user to correct folder on first install
    675e0fa9d8 [TASK] Avoid unused xpath when parsing locallang.xml
    119a1a40f4 [BUGFIX] Determine default severity for modals correctly
    213c7b34b7 [BUGFIX] Prevent replace of <link> tags in TypoScript setup
    e7c651bdb1 [CLEANUP] Fix typo in a typoscript comment
    b98f364163 [BUGFIX] Adapt fluid_styled_content paths in initial page
    a845c52c8b [TASK] Set TYPO3 version to 8.7.1-dev

<Category:ReleaseNotes/TYPO3_8.x> [Category:TYPO3
8](Category:TYPO3_8 "wikilink") <Category:2017>
