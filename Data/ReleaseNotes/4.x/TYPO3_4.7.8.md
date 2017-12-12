Release Notes for TYPO3 4.7.8
=============================

This document contains information about TYPO3 version 4.7.8 which was
released on February 14th 2013.

News
----

This release is a bug fix release only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    b69ed8fcf0edfde506cdd5d088d39229  blankpackage-4.7.8.tar.gz
    0423a55dbe7eafda6e0793430706bf7e  blankpackage-4.7.8.zip
    856f46dc450034af186497d6114191ab  dummy-4.7.8.tar.gz
    07560e5cd89f6057e6978a44aa0fea65  dummy-4.7.8.zip
    ff12e5b7298780af0f6cddd1e5d5cefc  typo3_src+dummy-4.7.8.zip
    100adacf39f58c1cfd3c34137a5cbfd1  typo3_src-4.7.8.tar.gz
    a94773fa83fd10b4c6ae215cef56aef5  typo3_src-4.7.8.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since [4.7.7](TYPO3_4.7.7 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.7.8
-   \[BUGFIX\] L10n fallback does not work for TS labels
    ([\#44099](https://forge.typo3.org/issues/44099))
-   \[BUGFIX\] L10n fallback does not work for ExtJS in BE
    ([\#44273](https://forge.typo3.org/issues/44273))
-   \[TASK\] Raise submodule pointer
-   \[BUGFIX\] Allow “en” as language key
    ([\#42084](https://forge.typo3.org/issues/42084))
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
-   \[BUGFIX\] add check for empty form values in FORM View
    ([\#28606](https://forge.typo3.org/issues/28606))
-   \[TASK\] DataHandler::getAutoVersionId() should be public
    ([\#45050](https://forge.typo3.org/issues/45050))
-   \[BUGFIX\] Possible warning in about module
    ([\#44892](https://forge.typo3.org/issues/44892))
-   \[BUGFIX\] Quick Edit triggers warnings of missing key uid
    ([\#42845](https://forge.typo3.org/issues/42845))
-   \[TASK\] Raise submodule pointer
-   \[BUGFIX\] Fix warnings in em on tab Maintenance
    ([\#39680](https://forge.typo3.org/issues/39680))
-   \[BUGFIX\] EXT:felogin: Multiple bugs with preserveGETvars
    ([\#19938](https://forge.typo3.org/issues/19938))
-   \[BUGFIX\] Correct TCA inclusion for uploads rendering
    ([\#44145](https://forge.typo3.org/issues/44145))
-   \[BUGFIX\] array\_merge\_recursive\_overrule: \_\_UNSET for array
    values ([\#43874](https://forge.typo3.org/issues/43874))
-   \[BUGFIX\] Update description on changed error reporting defaults
    ([\#38240](https://forge.typo3.org/issues/38240))
-   \[BUGFIX\] Fix typos in stdWrap\_crop description
    ([\#43919](https://forge.typo3.org/issues/43919))
-   \[TASK\] Add save only button to Scheduler task
    ([\#44152](https://forge.typo3.org/issues/44152))
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
-   \[BUGFIX\] Fix broken logo file in Install Tool
    ([\#43426](https://forge.typo3.org/issues/43426))
-   \[BUGFIX\] Enable the RTE with WebKit version 534 on iOS and Android
    ([\#43603](https://forge.typo3.org/issues/43603))
-   \[BUGFIX\] IE9 crashes after saving with RTE
    ([\#43766](https://forge.typo3.org/issues/43766))
-   \[BUGFIX\] Remove HTML in RuntimeException from sysext 'install'
    ([\#38472](https://forge.typo3.org/issues/38472))
-   \[BUGFIX\] Compatibility fix for get\_html\_translation\_table()
    ([\#39287](https://forge.typo3.org/issues/39287))
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
-   \[BUGFIX\] Form values with newlines escaped in email
    ([\#32515](https://forge.typo3.org/issues/32515))
-   \[TASK\] openid: Update php-openid to 2.2.2
    ([\#42236](https://forge.typo3.org/issues/42236))
-   \[BUGFIX\] Hide version selector if workspaces are used
    ([\#43264](https://forge.typo3.org/issues/43264))
-   \[BUGFIX\] Subject field in FormWizard
    ([\#35787](https://forge.typo3.org/issues/35787))
-   \[TASK\] Raise submodule pointer
-   \[BUGFIX\] Invalid behavior of search for integer in Backend search
    ([\#33700](https://forge.typo3.org/issues/33700))
-   \[TASK\] Set TYPO3 version to 4.7.8-dev

<Category:ReleaseNotes/TYPO3_4.7.x> [Category:TYPO3
4.7](Category:TYPO3_4.7 "wikilink") <Category:2013>
