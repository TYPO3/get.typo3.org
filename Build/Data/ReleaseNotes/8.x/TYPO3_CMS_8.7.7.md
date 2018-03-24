Release Notes for TYPO3 CMS 8.7.7
=================================

This document contains information about TYPO3 CMS 8.7.7 which was
released on September 19th, 2017.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

SHA256 checksums
----------------

    cc9d25caac24858356e4a0fa43391f7801734dc2a70a0e9728c69a650e008095  typo3_src-8.7.7.tar.gz
    452488359768488f91b6d4398d441ec9e670171856633d57e3c43c158f0e31de  typo3_src-8.7.7.zip

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
[8.7.6](TYPO3_CMS_8.7.6 "wikilink"):

 * 78b3b5611c [RELEASE] Release of TYPO3 8.7.7
 * 2074d366cb [BUGFIX] Fix Fluid template path issues
 * dac827e4f6 [FOLLOWUP][TASK] Improve TCA cache
 * f03089f574 Revert "[FOLLOWUP][TASK] Remove extended fluid core class CmsVariableProvider"
 * 75e9b2a16e [BUGFIX] Revert "Improve performance of Fluid TemplatePaths"
 * f820b35b3a [TASK] Revert "Remove runtime cache and early return from TemplatePaths"
 * 9915964284 [TASK] Remove system environment check for Soap
 * c71d948065 [TASK] Improve TCA cache
 * d52a185456 [BUGFIX] JS: Init SelectTree after FormEngine
 * c28b3d3b63 [BUGFIX] Fluid: Strict type checking when adding debug namespace
 * 46d1d63567 [TASK] Provide missing example configuration for TYPO3 on Microsoft IIS
 * 4c368b346c [TASK] Raise typo3/testing-framework to 1.1.4
 * 969cbd6413 [BUGFIX] Remove NOT NULL constraints from l1[08]n_diffsource fields
 * fab339d7e1 [BUGFIX] Cache calls to SchemaManager()->listTableColumns()
 * c77ca634a6 [TASK] Disable ext:dbal and ext:adodb wizard
 * 8224dc0691 [BUGFIX] Perform rollback only once if undeleting CE with History/Undo
 * 3e6f22c182 [BUGFIX] Make Extbase pagination work with QueryBuilder queries
 * b87ab2e160 [BUGFIX] Fix using contains in query on property of group
 * c0bee6e1d9 [TASK] Update localization rendering tests to newest Testing Framework
 * c0b8b5de43 [BUGFIX] Remove legacy code for version extension
 * 2c7d95beae [TASK] Fluid: Fix missing classes
 * 40919d3e2b [TASK] Use TYPO3_OS constant in Services registration
 * 7fd3c2b85c [FOLLOWUP][TASK] Remove extended fluid core class CmsVariableProvider
 * ee8ed06b25 [BUGFIX] PHP7.2: Check value for NULL before count
 * f69d7e8074 [TASK] Update typo3/testing-framework to 1.1.3
 * 1e0aec4f86 [BUGFIX] Enforce checkout with linux lf for yaml files
 * c50931a5d0 [BUGFIX] SplitButtons: Abort click event if requested
 * f345bbe425 [BUGFIX] EXT:form - catch YAML parsing errors
 * 8cb5811ca6 [FOLLOWUP][BUGFIX] Fix minor error handler code bugs
 * 3b71a10ae8 [BUGFIX] Fix configuration of distribution packages
 * b28b562f8b [BUGFIX] Separators shown in explicit allow/deny section
 * 52e4d3b8f1 [BUGFIX] Fix minor error handler code bugs
 * 161c1446cd Revert "[TASK] Let GeneralUtility::makeInstance() throw exception on unknown class"
 * 40d483c7c2 [TASK] Add the full namespace to afterInitializeCurrentPage
 * fab3de16fd [BUGFIX] Show spaces of content elements in page module
 * 734f7aaf12 [BUGFIX] Unify labels for space before/after
 * 2d6cf28f5f [BUGFIX] PHP7.2: Check value for NULL before count
 * 433d998997 [TASK] Update typo3/cms-cli to latest version
 * b4b32de503 [BUGFIX] EXT:form - fix values with dots within form editor
 * 54bb286595 [BUGFIX] EXT:form - fix error on single database insert
 * 09d287d0b6 [TASK] EXT:form - change naming and icon in new content element wizard
 * b16247c141 [TASK] EXT:form - cleanup of leftovers, better wording
 * b0ba70113d [BUGFIX] EXT:form - fix missing id attribute
 * c170e4f3a6 [BUGFIX] Properly render multiline form values
 * 6249125fea [BUGFIX] EXT:form - fix page drag & drop
 * a77e95a144 [TASK] Tests for rendering tt_content with FAL in Extbase
 * 44f8236357 [BUGFIX] EXT:form - catch exceptions within page module and form engine
 * 1dc387b26c [TASK] Set TYPO3 version to 8.7.7-dev
 * 034255b075 [BUGFIX] Prevent empty sorting field to be quoted and put into an array


