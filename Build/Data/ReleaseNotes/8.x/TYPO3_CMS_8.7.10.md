Release Notes for TYPO3 CMS 8.7.10
==================================

This document contains information about TYPO3 CMS 8.7.10 which was
released on February 6th, 2018.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

SHA256 checksums
----------------

    618319843c3516a6705afacef361413db83c95368072f4a11deeca3df5da063c  typo3_src-8.7.10.tar.gz
    204dee3ede16ea3e8a3b84c37efd500957c78c3380211840df58d50a5b532c3b  typo3_src-8.7.10.zip

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
[8.7.9](TYPO3_CMS_8.7.9 "wikilink"):


 * a33acf4e29 [RELEASE] Release of TYPO3 8.7.10
 * 38d6883765 [BUGFIX] Replace calls to the deprecated PHP function each()
 * 6269d46a4a [BUGFIX] Prevent enforcing opened database connection with initCommands
 * df6e4e261d [BUGFIX] Only scan package base paths if subdirectories exist
 * 86b439e426 [BUGFIX] Add missing DOM ready checks in filelist
 * fc674fd175 [BUGFIX] Forward header in DebugUtility:debug to renderDump
 * eed98fc3b1 [BUGFIX] Allow dev branch install of subtree split packages
 * a509d71bd5 [BUGFIX] EXT:form - fix array overrules within YAML preprocessing
 * 145439f808 [BUGFIX] Add language parameter to preview url in list module
 * edd210da60 [BUGFIX] EXT:form - add compatibility for issue #82210
 * a590863107 [BUGFIX] EXT:form - handle boolean finisher options
 * 42507b4782 [TASK] Apply code formating for all JavaScript files
 * dc36074367 [BUGFIX] Page module: Respect connected mode during drag &amp; drop
 * a8da855525 [TASK] Update typo3fluid/fluid to 2.5.0
 * 48e397b4e3 [BUGFIX] D3.js uses basic authentication credentials cached in browser
 * 7fea59aa2c [BUGFIX] Add possibility to use session data in TS conditions
 * aba02120ed [BUGFIX] Catch InvalidPathException for FileStorages
 * bc2ad13791 [BUGFIX] Re-apply colorspace to resulting image
 * 25f489161b [BUGFIX] Provide Foldername in InaccessibleException
 * 7cd09eb3c1 [BUGFIX] Allow users without delete permissions to drag pages in page tree
 * 2b686bbbe2 [BUGFIX] Fix &quot;Select &amp; upload files&quot; button for FAL in flexform
 * f368dedac5 [TASK] Show language mode in Page module
 * 20325a0f57 [FOLLOWUP][BUGFIX] Remove uglify of jquery-ui/sortable.js
 * 14a69066f1 [BUGFIX] Change documentation of [BE][interfaces]
 * e2f80cd0db [BUGFIX] Fix example code for TCA &quot;fieldControl&quot;
 * de3e613296 [BUGFIX] Avoid JS error when using &#039;eval&#039; =&gt; &#039;int,nospace&#039; in TCA
 * 16c664f2cb [BUGFIX] Invalid session token on creating content element in admin panel
 * 37e42d5d0c [BUGFIX] Properly check serialized_executions to avoid PHP 7.2 warnings
 * 2ab4dd1981 [BUGFIX] Add missing htmlspecialchars() and cleanup in EXT:recordlist
 * 4ab5437b2b [TASK] Move changing preview processing config to processing service
 * 10d598d2c5 [BUGFIX] Catch DatabaseRecordException when editing record with deleted relation
 * be287e7837 [BUGFIX] Only reference existing locallang files
 * 8169369284 [BUGFIX] Set correct PHPDoc hint for addPageTSConfig and addUserTSConfig
 * 6ba79f4664 [TASK] Migrate getPagesTSconfig to runtime cache
 * 32775f83d8 [BUGFIX] Use correct default value for field data_page_reg1
 * b88195d7cc [TASK] Use … instead of dots for a correct typography
 * a47a40e10c [BUGFIX] EXT:filelist Removed cut and copy buttons from &quot;Extended view&quot;
 * e3a4bd7725 [BUGFIX] Process large uid lists in chunks in RelationHandler
 * 8fb1559c3f [BUGFIX] Generate entry points for subtree split packages
 * c57eea6d5b [BUGFIX] Show correct file reference information
 * c0d6d51e07 [BUGFIX] Fix wrong position on sorting inline records
 * 148d95259b [TASK] Update composer.json license definition
 * 794e4848a8 [BUGFIX] Improve exception output for ImageService
 * 7585a53d35 [BUGFIX] impexp: Wrong FAL references after import
 * 52c714d254 [BUGFIX] GeneralUtility::copyDirectory() should mkdir_deep() destination dir
 * 0ba14b9ca1 [FOLLOWUP][BUGFIX] Break too long values in Application Information
 * a04d91ae2c [BUGFIX] Return correct available package information
 * dc5a7f9819 [BUGFIX] Ensure PackageManager scans every possible directory
 * 6fafd01103 [BUGFIX] Enable deletion of translated sys_file_metadata records
 * dae60858d4 [BUGFIX] Show folder meta information next to path
 * 02913c92f6 [TASK] Drop &#039;typo3/ should be link&#039; recommendation
 * f656ad029c [TASK] Update UnicodeData.txt
 * f52c2a73c7 [BUGFIX] ModuleMenu::loadNavigationComponent must load custom tree
 * e33e87f6ed [TASK] Support longer database passwords
 * 47438d9624 [TASK] bamboo: Use yarn instead of npm install
 * c3e9b275bb [BUGFIX] Make it possible to add cHash to preview links
 * 17136ee9f2 [BUGFIX] Refresh page tree after context menu actions are completed
 * 8a5b320910 [BUGFIX] Break too long values in Application Information
 * 1ef719abf3 [BUGFIX] New content element wizard fails for not given header value
 * 498fc49517 [BUGFIX] Use local paths for image tests (EXT:install)
 * b983787ae8 [BUGFIX] Re-add &#039;members&#039; field to the select query in getDefaultWorkspace
 * 8e28536f28 [BUGFIX] Add missing htmlspecialchars() in ActionTask
 * 3513af3722 [BUGFIX] Make empty $GLOBALS[&#039;TBE_MODULES_EXT&#039;] traversable
 * 01751ad208 [BUGFIX] Remove invalid configuration of class-alias-map in reports
 * 842ccb7d53 [BUGFIX] Use strict flag in signalslot dispatcher
 * d61eababba [BUGFIX] Do not try to fetch additionalFields for invalid tasks
 * b17f90ab92 [BUGFIX] EXT:form - use context specific configuration cache
 * 909e4d27db [BUGFIX] Exclude fields without db field from advanced search
 * db0ff2e047 [BUGFIX] Check permissions for page deletion in context menu
 * 3a8da37502 [TASK] Update copyright year in documentation to 2018
 * dbf5f643b5 [BUGFIX] Fix recursive FLUIDTEMPLATE cObj&#039;s that use layoutRootPaths
 * cf1f82e341 [BUGFIX] Correct permissions for root page setting up empty site
 * 7a46d445e3 [BUGFIX] Don’t show deprecations as &quot;success&quot; flash messages
 * 69d01c8660 [BUGFIX] Fix PHP 7.2 issues in EXT:lowlevel
 * 121c1363aa [TASK] Remove reference to not existing labels
 * bf8f174e11 [BUGFIX] get count consistent with execute for self written statements
 * bf4dfe801f [BUGFIX] Catch InvalidPathException in BE &amp; FE
 * 84f2552553 [BUGFIX] Move doctrine initalization to connect() method
 * 73372e418e [TASK] EXT:form - Tests for PropertyMappingConfiguration
 * b3b15333ab [TASK] Changelog docs: Review and add tags
 * 7d39ba24fb [BUGFIX] Only select current file when editing metadata
 * 98c038c56a [BUGFIX] Use correct path and add missing labels in TCA of extensionmanager
 * 82fd849b26 [BUGFIX] Changelog install tool: Duplicate ids prevent expand
 * 5bbb252d93 [BUGFIX] Add missing labels in EXT:lang and EXT:indexed_search
 * 96b4ad98c3 [BUGFIX] Get the correct crop configuration for imgResource
 * 6486057b5e [BUGFIX] Make JS url encoding utf aware
 * 1d182056b4 [TASK] Changelog docs: Update Howto.rst
 * 62721d9b04 [TASK] v8 Changelog: Move post 8.7.0 files into 8.7.x folder
 * 569ee97030 [TASK] v8 Changelog: Merge master changes
 * 668a86b26a [TASK] Changelog docs: Re-add v7 files into v8 &amp; master
 * 4ab79b3712 [TASK] EXT:Scheduler: Update documentation
 * 6111e9a445 [TASK] CGL fix core after php-cs-fixer 2.9.0 raise
 * 2e669e29bb [TASK] Raise ext:styleguide extension versions
 * 111413797e [BUGFIX] AdminPanelView tries to count null value
 * 82482dbd65 [BUGFIX] Drop unused DataHandler::printLogErrorMessages() argument
 * 07bfe639cb [BUGFIX] Make sure that foreach loops are applied to arrays only
 * 5d192072cf [BUGFIX] Replace PHP 7.2 deprecated each()
 * e2b7e5a19c [BUGFIX] Ensure absolute paths for &amp;eID=dumpFile
 * f5f2180056 [TASK] Bamboo: use udiff format for php-cs-fixer diff option
 * 0142da45de [TASK] Update friendsofphp/php-cs-fixer to 2.9.0
 * c1e622279f [TASK] Show complete diff for cglFixMyCommit on Bamboo
 * 2a75f8b60a [BUGFIX] Don&#039;t list records from tables without searchFields on search
 * 272f9565e8 [BUGFIX] Read TER XML entity value complete
 * 5748f7f07e [TASK] Set TYPO3 version to 8.7.10-dev
