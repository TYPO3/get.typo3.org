Release Notes for TYPO3 4.6.16
==============================

This document contains information about TYPO3 version 4.6.16 which was
released on February 14th 2013.

News
----

This release is a bug fix release only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    326585989d19d1b9de4227f43bc0a51d  blankpackage-4.6.16.tar.gz
    661cf65d2cbbe34ef6ba9af48ff4b48b  blankpackage-4.6.16.zip
    18396f351176d9615e124f1d91d87e64  dummy-4.6.16.tar.gz
    c387a89b123aef2432e588b5bf56a7eb  dummy-4.6.16.zip
    c3585ab038a7866732bcef7685fe6889  typo3_src+dummy-4.6.16.zip
    a9bba952f62eb82312d0513468babffe  typo3_src-4.6.16.tar.gz
    acbcd05ff13cedef3a4c502cd05369ec  typo3_src-4.6.16.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.6.15](TYPO3_4.6.15 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.6.16
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
-   \[BUGFIX\] Fix broken logo file in Install Tool
    ([\#43426](https://forge.typo3.org/issues/43426))
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
-   \[BUGFIX\] Form values with newlines escaped in email
    ([\#32515](https://forge.typo3.org/issues/32515))
-   \[TASK\] openid: Update php-openid to 2.2.2
    ([\#42236](https://forge.typo3.org/issues/42236))
-   \[BUGFIX\] Wizard in HTML element moved to t3editor
    ([\#33813](https://forge.typo3.org/issues/33813))
-   \[BUGFIX\] Livesearch toolbar should close others
    ([\#32890](https://forge.typo3.org/issues/32890))
-   \[BUGFIX\] Hide version selector if workspaces are used
    ([\#43264](https://forge.typo3.org/issues/43264))
-   \[BUGFIX\] Subject field in FormWizard
    ([\#35787](https://forge.typo3.org/issues/35787))
-   \[TASK\] Raise submodule pointer
-   \[BUGFIX\] Invalid behavior of search for integer in Backend search
    ([\#33700](https://forge.typo3.org/issues/33700))
-   \[TASK\] Set TYPO3 version to 4.6.16-dev

### fluid

-   \[BUGFIX\] Unit test fails with broken timezone
    ([\#45285](https://forge.typo3.org/issues/45285))
-   \[BUGFIX\] Date ViewHelper not using configured Timezones
    ([\#12769](https://forge.typo3.org/issues/12769))
-   \[BUGFIX\] Fix typo and improve backup of system settings
    ([\#45218](https://forge.typo3.org/issues/45218))
-   \[BUGFIX\] Remove PHP Error caused by setlocale call
    ([\#45118](https://forge.typo3.org/issues/45118))
-   \[BUGFIX\] Incomplete locale backup in unit test
    ([\#44835](https://forge.typo3.org/issues/44835))
-   \[BUGFIX\] selectViewHelper sorting should respect locales
    ([\#43445](https://forge.typo3.org/issues/43445))
-   \[BUGFIX\] Image viewhelper clears \$GLOBALS\['TSFE'\] in backend
    context ([\#43446](https://forge.typo3.org/issues/43446))
-   \[BUGFIX\] AbstractFormFieldViewHelper always converts entities
    ([\#34091](https://forge.typo3.org/issues/34091))

### linkvalidator

-   \[BUGFIX\] SQL error in getLinkCounts
    ([\#43322](https://forge.typo3.org/issues/43322))

### version

-   \[BUGFIX\] Catchable fatal error when using the swap button
    ([\#42948](https://forge.typo3.org/issues/42948))


