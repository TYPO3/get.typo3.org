Release Notes for TYPO3 CMS 8.7.5
=================================

This document contains information about TYPO3 CMS 8.7.5 which was
released on September 5th, 2017.

News
----

This release is a combined bug fix and security release.

Notes
-----

Find more details in the security bulletins:

-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2017-004/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2017-005/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2017-006/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2017-007/>

Download
--------

<https://typo3.org/download/>

SHA256 checksums
----------------

    c4d1dea5ab6cff3780a3337dc31903696478695559dc9d186f532e8b080a176b  typo3_src-8.7.5.tar.gz
    1f71d861b73b24443b52e9f6459cd5062030fe25afe8fb72641e1ebeec0531ee  typo3_src-8.7.5.zip

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
[8.7.4](TYPO3_CMS_8.7.4 "wikilink"):

 * 9fc9dcfbf5 [RELEASE] Release of TYPO3 8.7.5
 * 218ecd55b1 [TASK] Apply CGL fixes
 * 65afaac0ce [BUGFIX] Add composer dependencies to individual packages
 * 2d37f5f8a8 [SECURITY] Disallow pht as file extension
 * 2c6228c5ab [SECURITY] Remove version from default User-Agent
 * c7769dbe60 [SECURITY] Respect permissions of storages in a file collection
 * 41297d168a [SECURITY] Escape record title in RecordsOverview
 * b415df9fc3 [TASK] Synchronize composer.json with ext_emconf.php
 * 4a92569292 [BUGFIX] Remove wrong </td> tag in AbstractLinkBrowser
 * 8d355f5479 [TASK] Improve performance of Fluid TemplatePaths
 * 90d5dca2e0 [TASK] Fix broken validation translation form docs
 * 6b12babacf [TASK] Remove suhosin checks
 * 79f7759a66 [TASK] Improve exception for invalid transOrigPointerField
 * 913b86aba7 [TASK] Upgrade version of D3.js to version 4.10.0
 * 45349907c4 [TASK] Fix broken identifier in form docs
 * ce48791a52 [BUGFIX] EXT:form - use configured finisher identifiers for translations
 * 22a2093258 [BUGFIX] Prevent command exit status overflow to non-error status
 * d45abc0d08 [TASK] Update typo3/testing-framework to 1.1.2
 * c61f99f261 [BUGFIX] Use proper key name in db config
 * c762b3871e [TASK] Update CKEditor to 4.7.2
 * de67a5ed7e [BUGFIX] Always show input field for empty link fields
 * 9e88b3078f [BUGFIX] Make extbase language handling consistent with TYPO3 v7
 * 5c249c6732 [BUGFIX] Extbase distinct query result handling
 * 70bcd648fe [TASK] Cleanup .gitignore
 * 5296b0707f [TASK] Update php-cs-fixer to 2.5.0
 * a87bd76b21 [TASK] Let GeneralUtility::makeInstance() throw exception on unknown class
 * 540ae0e205 [TASK] CGL fixes after upgrade to php-cs-fixer 1.4
 * d919fbd244 [BUGFIX] Mark not set Install Tool password as secure
 * a3604d2ab8 [BUGFIX] Throw exception if encryption key is not set
 * 8a6a6cc56d [!!!][TASK] Extension manager: Drop "Download SQL Dump"
 * 56e71a4485 [TASK] travis-ci: Execute unit test only
 * ba870dc1e4 [TASK] travis-ci: Less parallel jobs
 * 2737c968c5 [TASK] Remove file Tests/Functional/Fixtures/Frontend/request.tpl
 * 2f0c95248d [TASK] Update typo3/testing-framework to 1.1.1
 * f11c33e481 [TASK] Update dev dependencies
 * cd3dbbae3c [TASK] Functional tests for translated tt_content rendering in Extbase
 * c949e715ca [TASK] Remove non existing param from checkForUpdate
 * cd54154cc9 [TASK] travis-ci: Split functional tests into more parts
 * 93c2062279 [BUGFIX] Catch error due to invalid record in Linkvalidator scheduler task
 * 4d103fe540 [BUGFIX] Fix SQL error when bookmarking a sys_file_metadata record
 * e8ec374c76 [BUGFIX] Prevent XSS in scheduler extension
 * 4fcaf7ff03 [TASK] Change upper limits for endtime of various records
 * 41fc5209c7 [BUGFIX] Fix hide and delete button in SysAction->RecordList
 * 45bdf473b2 [BUGFIX] Prevent XSS in PageLayoutController
 * 086add632a [BUGFIX] Drop sorting in COUNT() query in list module
 * 7267e0d938 [TASK] Remove leftover code for db_mountpoints in ActionTask
 * 01aac908e1 [BUGFIX] Correct type of argument passed to BackendUtility::viewOnClick
 * ed11f88aaa [BUGFIX] Use DriverInterface instead AbstractDriver for method signature
 * 79d1315c59 [BUGFIX] Changes indentation in new page wizard
 * 374fe5c699 [BUGFIX] Extend Lowlevel lost_files to accept customPath
 * 0075ee57bb [BUGFIX] Do not allow users to edit doktypes without permissions
 * 332cfca98c [BUGFIX] Implode array values in SaveToDatabaseFinisher
 * 3cab6c2d51 [BUGFIX] YouTubeRenderer "controls" option
 * 5e5c0ec7cb [TASK] Allow to override RTE config presets via PageTS
 * b988ba844c [BUGFIX] _LOCAL_LANG overwrite via TypoScript with nested keys
 * a3c0b791d4 [TASK] Cover rendering of hidden tt_content with functional tests
 * dfd3c0a5ad [BUGFIX] Filter http/verify option for guzzle to boolean
 * 5ab1098e84 [BUGFIX] Do not render <li> in section menu when CE has no header
 * ab8a0e3831 [BUGFIX] EXT:form - fix templateRootPaths support for email finishers
 * 6a480e998c [BUGFIX] Set anchor in all preview links of content elements
 * 65059997c0 [BUGFIX] parseInt values before comparison for Fluid be.widget.paginate
 * e3db31ba8d [BUGFIX] Allow translating content on MSSQL
 * 7e51baf692 [BUGFIX] Let all toplevel exceptions extend the core exception
 * 38aab43565 [TASK] Add cglFixMyCommit.bat
 * 6546955f1f [BUGFIX] Add sorting to group by for SQL compatibility
 * 91ec692af2 [TASK] Move install tool entry point to typo3/install.php
 * e1a90ee3ff [BUGFIX] New values created by AddController are added correctly
 * 860374afa1 [BUGFIX] Update FAL metadata if file is added with REPLACE method
 * c50564aa8e [BUGFIX] Do not detect single select fields as relation
 * 02666a5d20 [BUGFIX] Change order of tablename and alias in restriction container
 * 99c144a396 [TASK] Extract cli binary into separate package
 * 66fae5ed9c [BUGFIX] Jump Links in indexed_search Template
 * 19c2016b2b [BUGFIX] Install tool fatal errors at select database action
 * 65b7caba07 [BUGFIX] Prevent PHP warning on entering an empty install tool password
 * 197a5b1d4d [BUGFIX] Catch error in GeneralUtility::validEmail and GeneralUtility:isValidUrl
 * 62bf3ddb99 [BUGFIX] Add conflicts to core extensions' composer.json
 * 4d9fd9b6e2 [TASK] Max path length checker
 * 33361c533c [BUGFIX] Always hide the loading spinner of System Information
 * 6083dad502 [TASK] Set TYPO3 version to 8.7.5-dev


