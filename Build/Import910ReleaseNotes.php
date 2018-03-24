<?php

$upgrading = '1.  Before you update any instance to 9.1, have a backup in place.
2.  Now download the new core and present it to your instance (by
    symlink or copied files)
3.  Use the install tool to run the upgrade wizards
4.  Use the install tool to clear each and every cache you can find,
    even opcode.
5.  When you encounter compatibility problems with your extensions, look
    for the git versions around in order to find one already upgraded.
    
The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies
as well.';

$changes = '
-   [9.1
    ChangeLog](https://docs.typo3.org/typo3cms/extensions/core/Changelog/9.1/Index.html)
    -   [Features](https://docs.typo3.org/typo3cms/extensions/core/Changelog/9.1/Index.html#features)
    -   [Important
        Changes](https://docs.typo3.org/typo3cms/extensions/core/Changelog/9.1/Index.html#important)
    -   [Breaking
        Changes](https://docs.typo3.org/typo3cms/extensions/core/Changelog/9.1/Index.html#breaking-changes)
    -   [Deprecation
        Changes](https://docs.typo3.org/typo3cms/extensions/core/Changelog/9.1/Index.html#deprecation)

```
 * a06e0787f1 [RELEASE] Release of TYPO3 9.1.0
 * 8e71dd86eb [BUGFIX] Avoid JS error when using &#039;eval&#039; =&gt; &#039;int,nospace&#039; in TCA
 * 8809441a72 [BUGFIX] Fix example code for TCA &quot;fieldControl&quot;
 * 7cb501dea1 [BUGFIX] EXT:filelist Canceling the file exists already modal works now
 * db036cc589 [DOCS] 1/1 9.1 Documentation
 * 160f8db69f Revert &quot;[FEATURE] EXT:form - introduce YAML &quot;imports&quot;&quot;
 * dbb6c5647c [FEATURE] Option to globally enable redirect hit count
 * 310af00782 [TASK] Improved extension configuration API
 * 8bff8c83c3 [BUGFIX] NewContentElementWizardController to NewContentElementController
 * dc5008357c [BUGFIX] Invalid session token on creating content element in admin panel
 * 13efc89808 [BUGFIX] Correct example in redirects feature documentation
 * 8e6177874b [BUGFIX] Properly check `serialized_executions` to avoid warnings with PHP 7.2
 * e643a09216 [BUGFIX] EXT:filelist Fixed exception when creating new text file
 * ff11b9d751 [BUGFIX] Change documentation of [BE][interfaces]
 * c098aca280 [BUGFIX] Add preview icon in overview and link to record edit
 * 91b0f3befd [TASK] Show language mode in Page module
 * 8c532683cd [BUGFIX] Use fallback for source link in wildcard redirects
 * 244a95252b [TASK] Make ext:redirect part of factory default
 * 44eacb7ea9 [BUGFIX] Add renderType to redirect target statuscode field
 * 641943f46d [BUGFIX] Fix incomplete validation of source_host field
 * edfe775e9b [BUGFIX] Catch DatabaseRecordException when editing record with deleted relation
 * be68bd766c [TASK] use horizontal ellipsis instead of 3 dots
 * 061a56e481 [BUGFIX] Only reference existing locallang files
 * 07a8a63aa3 [TASK] Timebased redirects shown correctly
 * f96defdeed [BUGFIX] Remove validation for field source_path
 * 191ca7fda7 [TASK] Use SVG icons in EXT:redirects
 * d296ff8697 [BUGFIX] Fix system maintainer checkbox size
 * bbea8f4d3e [BUGFIX] Set correct PHPDoc hint for addPageTSConfig and addUserTSConfig
 * 11fda7a890 [BUGFIX] Show and hide arrow correctly in page tree
 * 2b5d1c81fe [BUGFIX] Add language parameter to preview url in list module
 * 05e4d107ba [TASK] Display ApacheThreadStackSize message correctly during installation
 * a2c71b79ee [TASK] Migrate getPagesTSconfig to runtime cache
 * dadc7d0d8f [TASK] Hide redirect table header when no records exist
 * 5472badfe5 [BUGFIX] Use correct default value for field data_page_reg1
 * c71c8baa77 [TASK] Use ? instead of dots for a correct typography
 * 86e9ec764d [BUGFIX] EXT:filelist Removed cut and copy buttons from &quot;Extended view&quot;
 * aef2307b32 [TASK] EXT:form - set of additional unit tests
 * 630342bfc7 [TASK] EXT:redirects - Wrong variable name in phpdoc of class SourceHost
 * dfffc87de0 [BUGFIX] Process large uid lists in chunks in RelationHandler
 * 226a7daed0 [FEATURE] Add drawHeaderHook to EXT:recordlist
 * 842ff30b6b [TASK] Add LICENSE.txt to ext:redirects
 * 5312cb2b80 [TASK] Specific exception in ArrayUtility::removeByPath()
 * 8c36fd06cc [!!!][TASK] Remove sys_domain redirect functionality
 * fe2d2fb880 [BUGFIX] Set focus on the search input field in page tree
 * 2a0ea30054 [FEATURE] Add system extension &quot;redirects&quot;
 * e6b9cdea85 [BUGFIX] Show correct file reference information
 * 0071228da1 [BUGFIX] Fix minor typos in ReST of #83637
 * 90b9959d48 [BUGFIX] Fresh tag in TypoScriptConstantsViewHelper per call
 * c1798ab34f [FEATURE] Execute hooks on backend user login
 * 69f2f88ec4 [FEATURE] Add new main module &quot;Site&quot;
 * 3d243e6fb8 [TASK] Add getter for TemplateService-&gt;rootId
 * 1a9d307c33 [BUGFIX] Install: Typo in category of extension configuration
 * 0919a7cf11 [BUGFIX] Extension config: Write LocalConfiguration only if needed
 * d087349106 [TASK] Specific exception in ArrayUtility::getValueByPath()
 * 033a5922f9 [TASK] Minor annotation and sanitation improvements
 * 950219d560 [TASK] Improve documentation of forge issue #33071
 * 9721e68aa0 [BUGFIX] Filter pages in page tree by uid
 * e044ef207d [TASK] impexp: Remove size handling
 * fc6bbe83cf [TASK] impexp: Streamline position and layout of CSH
 * f7ee5f59a7 [BUGFIX] Fix wrong position on sorting inline records
 * 88ccfa4a24 [TASK] Update composer.json license definition
 * ea50440872 [BUGFIX] Filelist list look alike list module
 * c97802eb39 [TASK] Add more UnitTests for GeneralUtility::xml2array()
 * 0fd5a2dc39 [TASK] impexp: Remove &quot;Max file size&quot; restriction
 * 1246917a20 [BUGFIX] impexp: File upload in import broken
 * 78180a6b63 [TASK] impexp: Use XML as default export format
 * 80c843a8c8 [TASK] impexp: Remove &#039;max number of records&#039; restriction
 * 653ff635aa [BUGFIX] Improve exception output for ImageService
 * bce2a7584b [BUGFIX] Adjust response usage for `file/exists` route
 * 98d866ca73 [TASK] Make EXT:rsaauth no longer part of factory-configuration
 * cd7a8572e6 [BUGFIX] impexp: Wrong FAL references after import
 * ae465ae2f2 [TASK] Mark EXT:rsaauth as deprecated
 * 1aba19dd92 [BUGFIX] GeneralUtility::copyDirectory() should mkdir_deep() destination dir
 * f9cfb3cc7b [FEATURE] EXT:form - make FinisherVariableProvider iterable
 * 12c9ab08a5 [TASK] Use @TYPO3\CMS\Extbase\Annotation\Inject in core extensions
 * 8892250b49 [TASK] Use @TYPO3\CMS\Extbase\Annotation\ORM\Cascade in core extensions
 * 31a79dd7d2 [TASK] Use @TYPO3\CMS\Extbase\Annotation\ORM\Lazy in core extensions
 * c84cc69235 [BUGFIX] Ensure PackageManager scans every possible directory
 * ea53018622 [BUGFIX] Return correct available package information
 * 7a9b54ba36 [BUGFIX] Enable deletion of translated sys_file_metadata records
 * 098633227f [BUGFIX] Update extension scanner docs.typo3.org link
 * 1ad185f32e [TASK] CGL: Whitespace fixes
 * 453a8a2c2d [TASK] CGL: Fix a series of minor indentation issues
 * 7b94e2a674 [TASK] Add spaces around &#039;=&#039; of &#039;strict_types=1&#039;
 * 311f62acfe [TASK] Context menu rename &quot;Export to .t3d&quot; to &quot;Export&quot;
 * 6c65a46e9e [BUGFIX] Show folder meta information next to path
 * b3c4c42384 [BUGFIX] Harden ValidatorResolver and add functional tests
 * 91bc637a26 [TASK] Update UnicodeData.txt
 * 673630dc67 [TASK] Drop &#039;typo3/ should be link&#039; recommendation
 * 6dded35856 [BUGFIX] fixPermissions() on install tool test image
 * ec5d31eed0 [TASK] Test cases for function specCharsToASCII()
 * c047e3435d [TASK] Introduce Matcher for required arguments in static calls
 * 4945e8392f [BUGFIX] Remove empty values from intExplode in TreeController
 * 6693921954 [BUGFIX] Rename directory for deprecated unit tests
 * 26813d39d1 [TASK] bamboo: Use yarn instead of npm install
 * fcc4a0dcdf [BUGFIX] Update tslint to 5.9.1 and fix syntax issue in Login.ts
 * a153795fcb [BUGFIX] Give correct information in addLLrefForTCAdescr exception
 * 37b747a103 [BUGFIX] Populate extension configuration on install
 * e5e93a30ad [FOLLOWUP][BUGFIX] Break too long values in Application Information
 * 3939bdefb7 [TASK] EXT:form - add documentation for #82210
 * cb6096f307 [BUGFIX] Break too long values in Application Information
 * 61fde61fec [BUGFIX] Use local paths for image tests (EXT:install)
 * 39bfde43ed [BUGFIX] Re-add &#039;members&#039; field to the select query in getDefaultWorkspace
 * a52a99220c [FEATURE] EXT:form - introduce YAML &quot;imports&quot;
 * 9bbdc7680c [BUGFIX] New content element wizard fails for not given header value
 * 9f62f1b261 [TASK] Deprecate AbstractValidatorTestcase
 * 40430fd298 [TASK] Update karma components
 * 5e1ecd00e7 [TASK] Cleanup DataMapperTest
 * ded16443ea [TASK] Cleanup GenericObjectValidatorTest
 * 1cfb9b326d [TASK] Cleanup StringLengthValidatorTest
 * b2c00a92ee [TASK] Cleanup CollectionValidatorTest
 * 45f04e50f4 [TASK] Cleanup StringValidatorTest
 * c7bfc16e1f [TASK] Update doctrine/dbal 2.5.10 ? 2.6.3
 * 23f6a9e3ec [TASK] Update ckeditor 4.7.3 ? 4.8.0
 * cfe05e610f [TASK] Update moment 2.19.2 ? 2.20.1
 * 3af267a0d1 [TASK] Update types definitions
 * d646629687 [TASK] Cleanup AbstractEntityTest
 * 4485117d20 [TASK] Deprecate unneeded RawValidator
 * c39209a3ae [BUGFIX] Make empty $GLOBALS[&#039;TBE_MODULES_EXT&#039;] traversable
 * 29984cd124 [TASK] Update codemirror 5.31.0 ? 5.33.0
 * 72dbe45fa6 [TASK] Update imagesloaded 4.1.3 ? 4.1.4
 * e7647207d9 [TASK] Update d3 4.11.0 ? 4.12.2
 * 26c7e3ce7a [TASK] Migrate ContextHelp to TypeScript
 * 8ffbb93f41 [BUGFIX] Add missing htmlspecialchars() in ActionTask
 * c2c8790aad [TASK] Move changing preview processing config to processing service
 * 5ef1724af8 [FOLLOWUP][TASK] Streamline ExtensionManagementUtility
 * 1d99aa104f [BUGFIX] Do not try to fetch additionalFields for invalid tasks
 * 88bc64d541 [TASK] Raise testing-framework to 2.0.2
 * 38556ad5a9 [TASK] Migrate DebugConsole to TypeScript
 * 9f6b898fd8 [BUGFIX] Add class name to property deprecations
 * 1c831ba51a [BUGFIX] EXT:form - use context specific configuration cache
 * 83b4f2187f [BUGFIX] Exclude fields without db field from advanced search
 * 19030ea72a [TASK] Cleanup setting value $SET
 * 80e78c98e9 [BUGFIX] Fix resolving of method validators
 * 7c3779ad15 [BUGFIX] Check permissions for page deletion in context menu
 * ef17687d71 [FEATURE] Make list of fields configurable in Pagetree overview
 * b255cd16a9 [BUGFIX] Make full search in lowlevel module work again
 * eb2ac1f1ab [FEATURE] Show the field name for every FormEngine field if debug is enabled
 * caf61131bd [TASK] Update copyright year in documentation to 2018
 * 0aa5f2b496 [BUGFIX] Make it possible to add cHash to preview links
 * 3cf9f794c5 [TASK] Add section for translated pages to lowlevel statistics page
 * 6fdde7715f [BUGFIX] Correct permissions for root page setting up empty site
 * ce4e8b2d38 [FOLLOWUP][BUGFIX] Add missing htmlspecialchars() and cleanup in DebuggerUtility
 * d56e4a5140 [BUGFIX] Don?t show deprecations as &quot;success&quot; flash messages
 * 62d40fca25 [BUGFIX] Add support for PNG icons of the SVG Tree
 * 8f1ca849fb [BUGFIX] Fix PHP 7.2 issues in EXT:lowlevel
 * 531be24a96 [FEATURE] Introduce Feature Toggles
 * 1af849b695 [CLEANUP] Review comment and sig of checkRootlineForIncludeSection()
 * e9f042f75f [TASK] Code cleanup in DataHandler
 * aa873df876 [TASK] Use null coalescing operator where possible
 * a9e13401ed [TASK] Remove unused PHP class imports
 * ca91b4cff3 [BUGFIX] Add missing htmlspecialchars() and cleanup in EXT:recordlist
 * 98455d7eb2 [FOLLOWUP][TASK] Remove ExtJS-related assets
 * 2e4d2ae0d6 [TASK] Remove reference to not existing labels
 * 3ed515fbb3 [BUGFIX] get count consistent with execute for self written statements
 * 542a48760f [BUGFIX] Catch InvalidPathException in BE &amp; FE
 * feeb4e5ab1 [BUGFIX] Add missing htmlspecialchars() and cleanup in DebuggerUtility
 * de497be86c [BUGFIX] Change deprecation of language:update command
 * f46db43f40 [TASK] Decouple Indexed Search from TSFE-BE User
 * 0b17d049ef [TASK] Changelog docs: Review and add tags
 * 128273517a [BUGFIX] Use `new` in ReflectionServiceTest
 * 7050335d9d [BUGFIX] Only select current file when editing metadata
 * 3e46941c87 [BUGFIX] Replace /s JS regex flag(modifier) with [/s/S]
 * 52e0fbd64a [BUGFIX] Use correct path and add missing labels in TCA of extensionmanager
 * 3bf495c76a [FEATURE] Add ArrayUtility::filterRecursive() method
 * 7be2e0a9fa [FOLLOWUP][TASK] Adjust size of new content element wizard
 * fe90c17b70 [BUGFIX] Changelog install tool: Duplicate ids prevent expand
 * 7d09e999e7 [CLEANUP] Use Permission constants consistently
 * 2cd0138832 [BUGFIX] Add missing labels in EXT:lang and EXT:indexed_search
 * 1a5f207b37 [CLEANUP] Review comment and sig of getSubpagesForPages()
 * b54cbfcaa7 [BUGFIX] Remove deprecated annotation usage in sys_note
 * fc222e1e7d [BUGFIX] Use integers in TCA definitions
 * 64ac2bdb74 [TASK] Remove excess whitespace
 * 4fab2d67e0 [BUGFIX] Get the correct crop configuration for imgResource
 * 67ac6ea95e [BUGFIX] Make JS url encoding utf aware
 * 94058cd152 [TASK] Changelog docs: Update Howto.rst
 * e710b540b6 [TASK] v8 Changelog: Move post 8.7.0 files into 8.7.x folder
 * 3fab12a5ed [TASK] change TYPO3 version in INSTALL.md
 * f67d0c1347 [TASK] Changelog docs: Re-add v7 files into v8 &amp; master
 * 48792c874d [TASK] CGL fix core after php-cs-fixer 2.9.0 raise
 * 957082fc82 [FOLLOWUP][TASK] Remove column sys_file_reference.sorting
 * f339e8e20a [TASK] Update Breaking-82878-RemovedFieldNoCacheInDatabaseTablePages.rst
 * beada38c86 [TASK] indexed_search docs: specialConfiguration instead of specConfs
 * 1b1d3cac88 [TASK] Update INSTALL.md
 * 6c30346cb0 [TASK] Update Breaking-82421-DroppedOldDBRelatedConfigurationOptions.rst
 * e1370d7e06 [BUGFIX] Change behavior of new element during drag &amp; drop into node
 * 5103a47f81 [TASK] Raise ext:styleguide extension versions
 * 64e8261cba [BUGFIX] AdminPanelView tries to count null value
 * 1b2e41665f [BUGFIX] Add editor permissions to pagetree
 * cc9b6676fb [TASK] Use hash_equals for timing-safe comparison of hash-values
 * ea7f8c63f5 [TASK] EXT:scheduler: Last old image and cli_dispatch
 * adb73680e7 [BUGFIX] Make sure that foreach loops are applied to arrays only
 * d9f4eb0f37 [TASK] Script to check doc comments for invalid annotations
 * c514a836b4 [BUGFIX] Replace PHP 7.2 deprecated each()
 * 2892f6dc39 [TASK] EXT:Scheduler: Update documentation
 * 14bf99b247 [TASK] Bamboo: use udiff format for php-cs-fixer diff option
 * 239a55ce8b [TASK] Optimize structure of ChangeLog documentation
 * a5250189a1 [TASK] Update friendsofphp/php-cs-fixer to 2.9.0
 * bcf36f6458 [TASK] Show complete diff for cglFixMyCommit on Bamboo
 * f4c4cd00e3 [BUGFIX] Use correct language file location
 * 1a25aee33a [BUGFIX] Changelog docs compile warnings
 * b1c5f12291 [BUGFIX] Allow current dev versions of subtree split packages
 * 39b04f0294 [TASK] Salted Passwords: Add a ComposedSaltInterface
 * ac733c5998 [TASK] Set TYPO3 version to 9.1.0-dev
 * a64db2880f [BUGFIX] Don&#039;t list records from tables without searchFields on search
 * 54d0332b13 [BUGFIX] Read TER XML entity value complete
 * 0b82e698d2 [TASK] Add missing Documentation/9.0/Index.rst
```
';

$db = new SQLite3(__DIR__ . '/../var/gettr.db');

$fullVersion = '9.1.0';
$stmt = $db->prepare(
    /** @lang SQLite */
    'UPDATE "release" SET release_notes_news_link = :newslink, ' .
    'release_notes_changes = :changes, release_notes_news = :news, ' .
    'release_notes_upgrading_instructions = :instructions, release_notes_legacy_content = null WHERE version = :version');
$stmt->bindValue(':newslink', 'https://typo3.org/news/article/typo3-v910-released');
$stmt->bindValue(':changes', $changes);
$stmt->bindValue(':news', 'The TYPO3 Core Team is proud to announce TYPO3 9.1.0. Read more in the news: ');
$stmt->bindValue(':instructions', $upgrading);
$stmt->bindValue(':version', $fullVersion);
$stmt->execute();
