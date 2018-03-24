Release Notes for TYPO3 CMS 8.7.9
=================================

This document contains information about TYPO3 CMS 8.7.9 which was
released on December 12th, 2017.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

SHA256 checksums
----------------

    bfccc7194b2ed9378699a760797fa2d129119abcb7f00a4be8b3233eabb86da0  typo3_src-8.7.9.tar.gz
    9aeedb9f3c52bd982839f095bcc0d244c81484dafa3fb971dfdfaf428c492110  typo3_src-8.7.9.zip

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
[8.7.8](TYPO3_CMS_8.7.8 "wikilink"):

 * 50b5da136e [RELEASE] Release of TYPO3 8.7.9
 * 4300c3875e [BUGFIX] Make daterange filtering in EXT:belog work again
 * 2d541bac3d [BUGFIX] Make recycler PHP 7.2 compatible
 * 63d49e9267 [BUGFIX] Do not reprocess image preview when empty configuration is passed
 * 4fa52c7942 [BUGFIX] EXT:form - resolve numeric values in finishers
 * 4624a6aa09 [FOLLOWUP][BUGFIX] EXT:form - handle boolean finisher options
 * 49b63d9364 [TASK] Set composer config platform.php 7.0.0
 * ffc526d213 [TASK] EXT:form - improve width of form editor stage
 * 3226bd4957 [BUGFIX] Use correct path variable on Windows
 * 8dcad8132a [BUGFIX] Linkhandler - access to data outside editors pagetree
 * 70a08d8997 [BUGFIX] Show information if access is not allowed in element information
 * 4360ef0c06 [BUGFIX] Consider property clean if lazy loaded proxy is untouched
 * f4521129f3 [FOLLOWUP][BUGFIX] Make category tree filterable for editors
 * 50909aae4e [BUGFIX] Make Toolbar scrollable if there are too many Pagetypes
 * b662e891c1 [BUGFIX] EXT:form - respect class for file upload field
 * 574ec3fecf [TASK] Allow Symfony 4 as constraint for composer
 * 3050faa205 [BUGFIX] Access Close.html from Resources/Public/Html/
 * 899fb8191c [BUGFIX] Clarify the affected classes and methods in rst file
 * aa80bd8e8d [BUGFIX] Add affected class name to method deprecation
 * 72b5ce6260 [BUGFIX] Mention correct class and function in rst file
 * 2abb8579ff [BUGFIX] Fix invalid type hints in EXT:form&#039;s file upload converter
 * 5a01dca355 [BUGFIX] Use given redirectUrl in „list“ wizard, if available
 * b1f7a611ad [BUGFIX] EXT:form - Cover empty strings for &quot;skipIfValueIsEmpty&quot;
 * 90124f9e29 [FOLLOWUP][BUGFIX] EXT:form - Cover empty strings for &quot;skipIfValueIsEmpty&quot;
 * c03e4d77e9 [BUGFIX] EXT:form - merge properties with configuration settings
 * 1b9ab22924 [BUGFIX] Add missing backslashes to class name in rst file
 * ea19fd5cc2 [BUGFIX] EXT:form - show message if a form could not be saved
 * 051ae1df0a [BUGFIX] Correct method name in documentation file
 * ef7c5a4ccf [TASK] Adjust loading animation of modal windows
 * 42fd719660 [BUGFIX] Require mail subject in finisher overrides
 * 53e4f56a70 [BUGFIX] EXT:form - allow field options translation by type
 * 0ccf07d7f3 [BUGFIX] Properly escape &quot;dropzone-target&quot; selector in DragUploader.js
 * 16fcdd408c [BUGFIX] Correct wrong class names in deprecation.rst
 * 15f1da0a44 [BUGFIX] Output correct max upload size
 * f345446561 [BUGFIX] Wording 78169-IntroduceTranslationSourceFieldForTt_content.rst
 * b454ba65a4 [CLEANUP] Add class-imports in Extbase Persistence classes
 * 27733ad679 [TASK] bamboo: Include php 7.2 in test suite
 * e31106f29f [TASK] ext_emconf.php, composer.json: Allow PHP 7.2
 * 5654fb6301 [TASK] Raise testing-framework to 1.2.2
 * f2bb18d2ca [BUGFIX] Use of undefined constant E_DEBUG
 * c934f5a764 [BUGFIX] Incomplete mock in AbstractViewHelperTest
 * da6fd1f547 [BUGFIX] PreparedStatement: count() must be an array or countable
 * 1b11b369bb [BUGFIX] ContentObjectRendereTest: Undefined constant NL
 * 23f8bd7f2d [BUGFIX] Implicit constant to string cast in unit test case
 * 523f6ce4de [TASK] Re-add autolinking RTE feature in CKeditor
 * 71cdfeffac [BUGFIX] Fix injured workspace encapsulation in record localize summary.
 * 86481c37b0 [BUGFIX] Make quoting of SQL fragments in TCA possible
 * 5b4e54a7b2 [BUGFIX] Fix language of placeholder for relations
 * 87f6765466 [FOLLOWUP][BUGFIX] Preview information should not conflict with frontend layout
 * ac6519f5f1 [BUGFIX] Handle docroot relative paths correctly in ResourceCompressor
 * b2bd51f9da [BUGFIX] Return null value instead of string &#039;NULL&#039;
 * 6f3fa75806 [BUGFIX] Properly handle flexform related exceptions
 * f1a0f80356 [BUGFIX] Clarify description of FE|sessionDataLifetime
 * aa3ad5a5db [BUGFIX] Apply correct button styles on EDITPANEL for pages
 * 395e434f1d [TASK] Use $pathsToProvideInTestInstance in functional import tests
 * 9102e98cf3 [BUGFIX] Ignore translations from other workspaces
 * 0e9c009f9e [BUGFIX] Determine Chinese simplified Han &quot;Accept-Language&quot; header
 * 61c7756867 [BUGFIX] Ensure all sys_file_metadata TCA columns have a config section
 * 301e3f40f0 [BUGFIX] Preview information should not conflict with frontend layout
 * 24a16f9a7e [BUGFIX] Prevent catchable error during workspace publishing
 * 016054de8a [TASK] Log warning on invalid charset
 * 09945032e4 [TASK] Add missing delete button for Documentation
 * fbd1d72a06 [BUGFIX] Disable column sys_file_reference.sorting
 * 93b720d408 [BUGFIX] Also show port when trustedHosts pattern mismatches
 * 7eda1b6ebe [TASK] Install Tool: Display a warning if PHP fileinfo extension is not loaded
 * 1d63c773f6 [BUGFIX] Check simplexml return type in ImageInfo
 * bb39b2263a [BUGFIX] Set correct HTTP header when page access is denied
 * 15f066161b [BUGFIX] Disable edit of file metadata without translation
 * e8fbcb4c53 [CLEANUP] Move rst changelog docs into correct folder
 * 6b2addc4b2 [BUGFIX] Use correct language file in element information popup
 * 3cd59bc301 [BUGFIX] Make category tree filterable for editors with category mounts
 * bef9a79919 [BUGFIX] Validate page error handler result to report wrong configuration
 * c75083c535 [BUGFIX] IRRE actions should render error messages from DataHandler
 * 4228c7c5b0 [BUGFIX] Catch Exception while extracting metadata
 * b5c25e9d56 [BUGFIX] Don&#039;t show “cut” and “cut release” at the same time
 * ed4e460124 [TASK] Visual tweak of &quot;SelectMultipleSideBySideElement&quot;
 * ed57eb535a [BUGFIX] Correctly resolve dots inside flexform field names
 * d94eab5903 [BUGFIX] Prepared statement contains too many placeholders
 * f48f858645 [BUGFIX] Add missing initialization of GraphicalFunctions
 * d79d41884d [BUGFIX] Colorpicker in irre records
 * ac3e12db5c [BUGFIX] Fix editing a FileStorage from FileTree on PostgreSQL
 * 589372b9da [BUGFIX] Send correct Cache-Control header if no client side caching
 * 9de7f844d7 [BUGFIX] fix missing l18n fields in blog tag table
 * 58b23c62a0 [TASK] Use proper PHPdoc type annotations in Extbase error layer
 * b11bdc1003 [TASK] Ensure introduction package is properly installed
 * 5bbc95404b [CLEANUP] Alwas put null at the last position
 * 0e2f39d76e [BUGFIX] bamboo: Label parsing
 * 797b862f12 [CLEANUP] The correct case must be used for standard PHP types in phpdoc
 * 3b7c06e3b9 [FEATURE] Introduce Yarn and fix dependency handling and downgrade some libs
 * e950ebedb9 [FOLLOWUP][BUGFIX] Fix some PHP Notices thrown rendering page module
 * 414a4d744f [TASK] Show allowed media sources in &quot;Add media by URL&quot; modal
 * 690204a3f4 [BUGFIX] Fix some PHP Notices thrown when rendering page module
 * 6b46e14f73 [BUGFIX] Fix broken back button in EXT:form
 * 379f063521 [BUGFIX] Use correct runtime cache identifier for locked records
 * b48e1973d1 [BUGFIX] Page tree nodes can be (un)mounted again
 * 78e5761247 [BUGFIX] backend formfields: Make boolean fields UI working in Edge/IE
 * 393bc3f6c1 [BUGFIX] Fix thrown \InvalidArgumentException in access module
 * 02303de415 [BUGFIX] Fix sorting extensions in &quot;Get Extensions&quot; module
 * c304e745bf [BUGFIX] GIFBUILDER files cannot be delivered via web server
 * a2892653c1 [BUGFIX] Reload page tree if extendToSubpages` flag changes`\
 * f3a43aea5b [BUGFIX] Prevent javascript error in backend
 * 9e4f48e668 [TASK] Example for a RTE Flexform config after migration
 * 3aee4f3526 [BUGFIX] Fix class name of success button in the install tool
 * e121b779e8 [BUGFIX] ConstantEditor: Make boolean fields UI working in Edge/IE
 * 33bc57127d [BUGIFX] Fix JS error in filtering page tree
 * f6de7c8496 [BUGFIX] use included TSconfig files in frontend
 * fe0de963e3 [BUGFIX] Add correct conversion of RTE pageTS config
 * 308af12b65 [BUGFIX] Fix notices in UserAuthentication
 * 693f270e18 [BUGFIX] Set l10n_state before synchronizing fields
 * 2abc42447b [BUGFIX] Fix keepItems and removeItems handling with 0 values
 * 5657d12b2a [FOLLOWUP][TASK] FAL-based database fields moved to integer
 * 4df710e11d [BUGFIX] Avoid invalid references in DataMapProcessor
 * 17ad2f310b [BUGFIX] Use correct parameters for trimExplode
 * 766290b260 [BUGFIX] Remove &quot;[newlog()] &quot; from DataHandler log info
 * 25ccdf9c2d [BUGFIX] Fix allowLanguageSynchronization on pages_language_overlay
 * dd4cf17251 [BUGFIX] FileStorageExtractionTask breaks if file not found
 * 6c4f06a10f [TASK] Allow all fields in felogin hook &quot;forgotPasswordMail&quot;
 * 6255fc5e32 [BUGFIX] Stabilize Language Acceptance tests
 * b7d0353f2e [BUGFIX] Handle variadic arguments in Extbase DebuggerUtility
 * 8e10748487 [BUGFIX] Add label to page ID field in PageLinkHandler
 * 30b633ca85 [BUGFIX] Add FLUIDTEMPLATE to t3editor code completion
 * 77cc3742c4 [TASK] Upgrade chromedriver to 2.33
 * 0759379c72 [BUGFIX] Fix multi-checkbox/radiobox labels for values containing dots
 * 6c60d6b97f [BUGFIX] Improve performance iterating local files
 * d604511fc7 [BUGFIX] Fix path-resolution for template-resource in EXT:felogin
 * b268f001ba [BUGFIX] Add missing code-block:: php line in feature rst file
 * 0d3afdfc1c [TASK] EXT:form - cache merged YAML settings
 * 8b2dd6f1b4 [BUGFIX] Show deleted page actions in record history
 * 8766f3674e [TASK] Add Fluid expressions and pre-processors global config
 * 3e871f80be [TASK] Update typo3/cms-composer-installers
 * 4cad2c4a1d [TASK] Update ext:styleguide to 8.0.13
 * 5b40db8e5f [BUGFIX] TcaMigration should not skip on existing overrideChildTca
 * d4e7f31aaf [BUGFIX] Add workspace overlay for translated page title
 * 15b4b9a7bd [TASK] Filter duplicate cache commands from CacheQueue
 * ce60414e95 [BUGFIX] Element file browser respects allowedExtensions
 * 1b891d618a [BUGFIX] Fix PHP Notices in cached ext_localconf.php
 * fd15f48425 [TASK] Update typo3/cms-composer-installers
 * 3ace41857e [BUGFIX] Replace forgotten back button to new button API
 * d8de96e523 [TASK] Refactor implementation of PaginateWidget
 * 9ac932c546 [TASK] Add parameter gclid to excludedParameters for cHash generation
 * e42ca813c4 Revert &quot;[BUGFIX] Set _localizedUid in OriginColumnName&quot;
 * a3fcf6d6da [BUGFIX] FormEngine: returnUrl handling in inline
 * f4eb582964 [BUGFIX] Handle returnUrl for access module
 * 8a97df2219 [BUGFIX] Access module preselects owner/group when changed via AJAX
 * 3d03fc2891 [BUGFIX] Set _localizedUid in OriginColumnName
 * ae6d0ad594 [BUGFIX] Catch UnknownLinkHandlerException in InputLinkElement
 * 0b7c8667dc [BUGFIX] Fix foreign_table_where GROUP BY handling
 * 9be1ac9295 [BUGFIX] Flexform Form ID should not contain brackets
 * 2f8e1991bf [BUGFIX] Fix usages of config.additionalHeaders
 * 2823bef08d [BUGFIX] Ensure correct page is selected in page tree
 * 3a9441dc16 [TASK] Add .tsconfig files to .editorconfig
 * acf7272197 [BUGFIX] Only fetch fileReferences from localized table if column exist
 * ebb10866ab [BUGFIX] Avoid race condition in JS Icon API
 * 6d3286b5a9 [BUGFIX] Allow multiline strings in foreign_table_where
 * a2bca832f0 [BUGFIX] Do not force content_fallback to default page language
 * 0e0ee80a93 [FOLLOWUP][BUGFIX] Allow longer file-endings in typoscript directory includes
 * 0a7046cb7d [BUGFIX] Allow setting translateToMessage to empty
 * 0fdfb0d0d6 [TASK] Remove documentation of borderCol
 * 6aefb59ce8 [BUGFIX] MenuProcessor doesn&#039;t accept necessary sub keys
 * 060c94e736 [TASK] Update Symfony packages to latest releases
 * 9088894770 [BUGFIX] Allow longer file-endings in typoscript directory includes
 * 8b6d344278 [TASK] Extend WorkspaceServiceTests for fetchPagesWithVersionsInTable
 * fb8c1dd2cb [TASK] Show upload files button in filelist options if folder
 * cc047a7986 [BUGFIX] Add renderType to select
 * d1526ffdab [TASK] Update friendsofphp/php-cs-fixer to latest version
 * f3495a7ef4 [BUGFIX] EXT:indexed_search: Dont add stat record for empty search
 * b0d9f03bc9 [BUGFIX] Remove style attribute in LiveSearch
 * 3d25dc858f [BUGFIX] Make ReferenceIndex caching optional
 * a448b4130d [BUGFIX] CKEditor: Make link editable
 * f8aa965b95 [BUGFIX] Update tstamp on inline relation addition
 * 7316340f64 [BUGFIX] Localization State does not properly sanitize and enrich
 * db43efd8d7 [BUGFIX] EXT:form - &quot;label&quot; is not set for the FormDefinition class
 * f081e3f15a [BUGFIX] Add parseFunc handling to pre tags
 * 141959de45 [BUGFIX] Refresh iconElement after its content has been replaced
 * 2af45fe8f3 [BUGFIX] CSC Header CE does not respect lib.parseTarget configuration
 * 4305c50517 [TASK] Show the &quot;Today&quot; button in DateTimePicker
 * b2638da5db [FOLLOWUP][BUGFIX] IRRE: Check if TCA[&#039;ctrl&#039;][&#039;languageField&#039;] is set
 * 4d048f8114 [BUGFIX] Context menu is not completely visible in filelist with scrollbar
 * b9d76b95c6 [BUGFIX] Resolve label in title attribute of ClearCacheToolbarItemSingle
 * e0676626f3 [BUGFIX] Configuration-&gt;&quot;Use regular expression&quot;
 * 91923b8aa3 [BUGFIX] Properly detect record link dialog tab
 * 3d859316b1 [BUGFIX] Use correct path for test images in install tool
 * dc80c2127f [BUGFIX] Correct fixture for metadata in impexp functional tests
 * 76edbfdb7e [BUGFIX] Set correct image dimensions in impexp fixture data
 * 94f4420bcd [TASK] Set TYPO3 version to 8.7.9-dev