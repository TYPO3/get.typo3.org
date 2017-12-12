Release Notes for TYPO3 CMS 8.7.6
=================================

This document contains information about TYPO3 CMS 8.7.6 which was
released on September 7th, 2017.

News
----

This version is a regression fix release for TYPO3 CMS 8.7.5 LTS
concerning the Fluid templating engine and the usage of CKEditor in the
backend. This version is a maintenance release and contains bug fixes
only.

Download
--------

<https://typo3.org/download/>

SHA256 checksums
----------------

    fd6aa98c5e35a38174f7bb9f3e09c6212c393ede7cab72344e682ba1fea5a545  typo3_src-8.7.6.tar.gz
    22506010ce09984e208424a24c90a3915d804fd788bc40cead63d84580b1be46  typo3_src-8.7.6.zip

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
[8.7.5](TYPO3_CMS_8.7.5 "wikilink"):

`* 33058c371b [RELEASE] Release of TYPO3 8.7.6`\
`* e6831c3b42 [TASK] Revert "Update CKEditor to 4.7.2"`\
`* 6e02927806 [BUGFIX] Remove runtime cache and early return from TemplatePaths`\
`* fede50ce91 [TASK] Update guzzlehttp/guzzle dependency to 6.3.0`\
`* 0690854576 [BUGFIX] Space before class has a typo in access list for page content`\
`* 85658f91bf [TASK] Allow string as $subpartContent`\
`* ebd05707b7 [TASK] Add functional tests for rendering translated tt_content with FAL`\
`* 27a077079c [TASK] Set TYPO3 version to 8.7.6-dev`

<Category:ReleaseNotes/TYPO3_8.x> [Category:TYPO3
8](Category:TYPO3_8 "wikilink") <Category:2017>
