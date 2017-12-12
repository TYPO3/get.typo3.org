Release Notes for TYPO3 4.5.23
==============================

This document contains information about TYPO3 version 4.5.23 which was
released on February 14th 2013.

News
----

This release is a bug fix release only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    32878935d2857f7d7ac11579b765c281  blankpackage-4.5.23.tar.gz
    4bf734861eb5adbc31f899e80a7d4944  blankpackage-4.5.23.zip
    b4c5d4c887e0ec98f08da997757bb413  dummy-4.5.23.tar.gz
    b2bed05dae92936dfd6a3bcd902de4f9  dummy-4.5.23.zip
    b6dcaf762224570f6b84b60aa43764be  introductionpackage-4.5.23.tar.gz
    fb9f1f74be276937fdc64a59f9a10a5c  introductionpackage-4.5.23.zip
    545e4cdf772d04f411992621edc95307  typo3_src+dummy-4.5.23.zip
    6a59f05839815109dec21a6e769ca54e  typo3_src-4.5.23.tar.gz
    3fd6bde829d1901fe2e42f78bdac5a7a  typo3_src-4.5.23.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.5.22](TYPO3_4.5.22 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.5.23
-   \[TASK\] Raise submodule pointer
-   \[BUGFIX\] t3lib\_iconWorks must check if array exists before using
    it ([\#24248](https://forge.typo3.org/issues/24248))
-   \[BUGFIX\] BE user switch impossible when in adminOnly mode
    ([\#32686](https://forge.typo3.org/issues/32686))
-   \[BUGFIX\] Excludefieds must exclude admin only tables
    ([\#34460](https://forge.typo3.org/issues/34460))
-   \[BUGFIX\] TypoLink: absolute urls when installed in subfolder
    ([\#33214](https://forge.typo3.org/issues/33214))
-   \[TASK\] Raise submodule pointer
-   \[BUGFIX\]\[Cache\]\[PDO\] Duplicate cache entry possible
    ([\#34129](https://forge.typo3.org/issues/34129))
-   \[BUGFIX\] IE9 compatibility clear cache menu
    ([\#36364](https://forge.typo3.org/issues/36364))
-   \[BUGFIX\] Hook call modifyDBRow in ContentContentObject
    ([\#44416](https://forge.typo3.org/issues/44416))
-   \[BUGFIX\] Fix misspelling in RTE meta menu
    ([\#43886](https://forge.typo3.org/issues/43886))
-   \[BUGFIX\] load TCA before manipulation
    ([\#38505](https://forge.typo3.org/issues/38505))
-   \[TASK\] DataHandler::getAutoVersionId() should be public
    ([\#45050](https://forge.typo3.org/issues/45050))
-   \[BUGFIX\] Load date-time picker in scheduler module
    ([\#31027](https://forge.typo3.org/issues/31027))
-   \[BUGFIX\] Quick Edit triggers warnings of missing key uid
    ([\#42845](https://forge.typo3.org/issues/42845))
-   \[TASK\] Raise submodule pointer
-   \[BUGFIX\] Fix warnings in em on tab Maintenance
    ([\#39680](https://forge.typo3.org/issues/39680))
-   \[BUGFIX\] Correct TCA inclusion for uploads rendering
    ([\#44145](https://forge.typo3.org/issues/44145))
-   \[BUGFIX\] Update description on changed error reporting defaults
    ([\#38240](https://forge.typo3.org/issues/38240))
-   \[BUGFIX\] Fix typos in stdWrap\_crop description
    ([\#43919](https://forge.typo3.org/issues/43919))
-   \[BUGFIX\] Apc Cache backend has side effects
    ([\#38135](https://forge.typo3.org/issues/38135))
-   \[BUGFIX\] Invalid call to t3lib\_TCEmain::processRemapStack()
    ([\#44301](https://forge.typo3.org/issues/44301))
-   \[TASK\] Raise submodule pointer
-   \[BUGFIX\] Suggest wizard is behind form inputs
    ([\#42092](https://forge.typo3.org/issues/42092))
-   \[BUGFIX\] phpdoc: \$urlParameters can be a string
    ([\#44263](https://forge.typo3.org/issues/44263))
-   \[BUGFIX\] FE session records are never removed
    ([\#34964](https://forge.typo3.org/issues/34964))
-   \[BUGFIX\] INTincScript\_loadJSCode() causes PHP warnings
    ([\#32278](https://forge.typo3.org/issues/32278))
-   \[BUGFIX\] Enable the RTE with WebKit version 534 on iOS and Android
    ([\#43603](https://forge.typo3.org/issues/43603))
-   \[BUGFIX\] Remove HTML in RuntimeException from sysext 'install'
    ([\#38472](https://forge.typo3.org/issues/38472))
-   \[BUGFIX\] Fix wrong column title in web&gt;list for field colpos
    ([\#25113](https://forge.typo3.org/issues/25113))
-   \[BUGFIX\] SqlParser: trim all kinds of whitespaces
    ([\#43470](https://forge.typo3.org/issues/43470))
-   \[TASK\] Remove typo3.pageModule.js
    ([\#43459](https://forge.typo3.org/issues/43459))
-   \[BUGFIX\] Installer: Reference images wrong
    ([\#42292](https://forge.typo3.org/issues/42292))
-   \[BUGFIX\] Page Information shows incorrect number of total hits
    ([\#41608](https://forge.typo3.org/issues/41608))
-   \[BUGFIX\] Old logo on “Install Tool is locked” page
    ([\#42908](https://forge.typo3.org/issues/42908))
-   \[TASK\] openid: Update php-openid to 2.2.2
    ([\#42236](https://forge.typo3.org/issues/42236))
-   \[TASK\] Group excludefields by table
    ([\#34098](https://forge.typo3.org/issues/34098))
-   \[BUGFIX\] Hide version selector if workspaces are used
    ([\#43264](https://forge.typo3.org/issues/43264))
-   \[TASK\] Raise submodule pointer
-   \[TASK\] Set TYPO3 version to 4.5.23-dev

<Category:ReleaseNotes/TYPO3_4.5.x> [Category:TYPO3
4.5](Category:TYPO3_4.5 "wikilink") <Category:2013>
