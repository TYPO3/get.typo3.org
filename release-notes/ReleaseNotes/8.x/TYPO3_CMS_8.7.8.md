Release Notes for TYPO3 CMS 8.7.8
=================================

This document contains information about TYPO3 CMS 8.7.8 which was
released on October 10th, 2017.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

SHA256 checksums
----------------

    eed3dfe16c8deffedc44e6102ab4e4066adeb14cb116d0e9d5f7dd7bffa9b29b  typo3_src-8.7.8.tar.gz
    a2845dd0031508ff3a581edada0ed1c6847f653dc73d468f60a6fc6cc915e59d  typo3_src-8.7.8.zip

Upgrading
---------

The [usual upgrading procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.\
It might be required to clear all caches; the “important actions”
section in the TYPO3 Install Tool offers the accordant possibility to do
so.

Changes
-------

Here is a list of what was fixed since
[8.7.7](TYPO3_CMS_8.7.7 "wikilink"):

`* 90f1c05c30 [RELEASE] Release of TYPO3 8.7.8`\
`* ba54c8685e [BUGFIX] Avoid corrupted session when IP changes`\
`* 37be476037 [BUGFIX] Only access FAL security checks when in Backend`\
`* 0089a7c7e5 [TASK] Popup content element id on the right side of "Record selector"`\
`* b4270460dd [BUGFIX] Correct an always-true if statement in GeneralUtility::mkdir_deep`\
`* 84e5044691 [BUGFIX] Add title tag to anchor in Fluid Styled Content uploads`\
`* 7337eaa808 [TASK] Clean up unused option in Install Tool`\
`* 8c08da9a6f [TASK] Clean up INSTALL.md`\
`* 63857a5724 [BUGFIX] JS: Init SelectTreeElement after document.ready`\
`* a1b5517b6c [BUGFIX] Add support for t3:// syntax to FileCollector`\
`* a2867825ae [BUGFIX] Fix handling of ClosureFinisher`\
`* 9082e0bd27 [BUGFIX] Prevent go back by submit on enter`\
`* fe6a917fc6 [BUGFIX] RSA encryption: Stop submit handling if requested`\
`* 3ecc19c0a5 [BUGFIX] Do not GROUP BY alias in WorkspaceService`\
`* 74edf077bc [TASK] Acceptance tests: chromedriver directly`\
`* 950386ccae [TASK] bamboo-specs: Upgrade to 6.1`\
`* 7872ee830e [BUGFIX] Never load disabled domains in TSFE`\
`* 5fcf23924e [BUGFIX] TCA deprecations in functional test fixture extensions`\
`* aeada00c5d [TASK] Update typo3/testing-framework to 1.1.5`\
`* 37fccbbe31 [TASK] Acceptance tests: chrome headless`\
`* a4f8d7ab1d [TASK] Update testing require-dev dependencies`\
`* 6d091df978 [BUGFIX] Set content-length header to the end of output`\
`* eb545a1b1a [TASK] Acceptance tests: Don't restart browser`\
`* 2db0cb6083 [BUGFIX] Stabilize flaky TimeTracker unit test`\
`* c9a7f9cd64 [BUGFIX] CKEditor should not create uploads subfolder`\
`* 2f2a63b2be [CLEANUP] Review comment of PageRepository::getPage()`\
`* 40a12090fb [BUGFIX] Bring RTE linkbrowser options back`\
`* c07387b258 [BUGFIX] Increase sequence if uid gets forced for PostgreSQL`\
`* 7b83becec3 [BUGFIX] Avoid unnecessary I/O in GeneralUtility::createVersionNumberedFilename()`\
`* c45221cc08 [TASK] Remove hardcoded check on typo3/sysext/`\
`* 603b3cd438 [BUGFIX] Fix handling of Storage.Client`\
`* c5848dd06c [TASK] EXT:form - explain initializeFormElement hook`\
`* 6aa5bb297c [BUGFIX] Allows setting extended search per default`\
`* 25ff9e945d Revert "[BUGFIX] Set anchor in all preview links of content elements"`\
`* 6e33a6e182 [CLEANUP] Remove invalid paths in PSR-4 section`\
`* 84da9fd5f4 [BUGFIX] Ignore missing folders from psr-4 definitions`\
`* 0d434d568b [BUGFIX] Add backend authentication to Extbase CommandController`\
`* 030cfb2956 [BUGFIX] Use localize command when translating page record`\
`* 8f76c5e9a2 [TASK] Provide uid in ElementInformation popup`\
`* 4c6ebb31d7 [BUGFIX] Do not recalculate PIDs for every query in BE search`\
`* d679976e13 [BUGFIX] Fix broken redis tests`\
`` * bb2cea3eac [BUGFIX] MenuProcessor: Allow sub keys of `addQueryString` ``\
`` * fbc4425207 [BUGFIX] Fix undefined variable to evaluate `fileFolder_recursions` correctly ``\
`* a398a7175f [BUGFIX] Allow multiple calls of ExtensionManagementUtility::loadBaseTca`\
`* 10075697f8 [BUGFIX] Fix exception in FE when using predefined admPanel config`\
`* 0e2dd520e0 [BUGFIX] Change username from _cli_scheduler to _cli_`\
`* 69094f549c [TASK] Increase size of domain name field`\
`* 51e448f5bd [BUGFIX] Remove duplicate PageTS cache in Typo3DbBackend`\
`* 16ccdc7bea [BUGFIX] Update ExtensionUtility::registerPlugin() icon parameter docs`\
`* 078aefbf71 [BUGFIX] EXT:form - fix composite element check`\
`* 986708d428 [BUGFIX] Support target in fluid_styled_content menus`\
`* f239e23681 [BUGFIX] Add &L=0 to Indexed Search results only when needed.`\
`* c15c3be72c [TASK] EXT:form - allow validation translation for a field in all forms`\
`* a594873402 [BUGFIX] Unify Extbase base command error`\
`* 50592120da [TASK] Set TYPO3 version to 8.7.8-dev`