<?php

$upgrading = 'The [usual upgrading procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.\
It might be required to clear all caches; the “important actions”
section in the TYPO3 Install Tool offers the accordant possibility to do
so.

Make sure to read the important changes linked in the following documents before upgrading:

* [Fluid - Do not append slash to empty paths (#367)](https://github.com/TYPO3/Fluid/pull/367)
* [Fluid - Fix Countable- and multibyte support in conditions (#380)](https://github.com/TYPO3/Fluid/pull/380)
* [Breaking: #82093 - EXT:form Partials/Field/Field.html has changed](https://docs.typo3.org/typo3cms/extensions/core/latest/Changelog/8.7.x/Breaking-82093-ExtFormFieldPartialChanged.html)
* [Feature: #81654 - Adding novalidate Attribute to Fluid Form ViewHelper](https://docs.typo3.org/typo3cms/extensions/core/latest/Changelog/8.7.x/Feature-81654-AddingNovalidateAttributeToFluidFormViewHelper.html)
* [Important: #83768 - Remove referrer check](https://docs.typo3.org/typo3cms/extensions/core/latest/Changelog/8.7.x/Important-83768-RemoveReferrerCheck.html)
* [Important: #83971 - Browser Notification API only works on SSL encrypted connections](https://docs.typo3.org/typo3cms/extensions/core/latest/Changelog/8.7.x/Important-83971-ConsoleShowDeprecationWarningInChrome.html)
* [Important: #84144 - RootlineUtility is enriching only properly selected relational database fields](https://docs.typo3.org/typo3cms/extensions/core/latest/Changelog/8.7.x/Important-84144-RootlineUtilityIsEnrichingOnlyProperlySelectedRelationalDatabaseFields.html)
';

$news = 'This version is a maintenance release. 
Besides that several regression fixes and important changes have 
been included into the v8.7.11 package - please see the following 
documentation of these changes:

* [Fluid - Do not append slash to empty paths (#367)](https://github.com/TYPO3/Fluid/pull/367)
* [Fluid - Fix Countable- and multibyte support in conditions (#380)](https://github.com/TYPO3/Fluid/pull/380)
* [Breaking: #82093 - EXT:form Partials/Field/Field.html has changed](https://docs.typo3.org/typo3cms/extensions/core/latest/Changelog/8.7.x/Breaking-82093-ExtFormFieldPartialChanged.html)
* [Feature: #81654 - Adding novalidate Attribute to Fluid Form ViewHelper](https://docs.typo3.org/typo3cms/extensions/core/latest/Changelog/8.7.x/Feature-81654-AddingNovalidateAttributeToFluidFormViewHelper.html)
* [Important: #83768 - Remove referrer check](https://docs.typo3.org/typo3cms/extensions/core/latest/Changelog/8.7.x/Important-83768-RemoveReferrerCheck.html)
* [Important: #83971 - Browser Notification API only works on SSL encrypted connections](https://docs.typo3.org/typo3cms/extensions/core/latest/Changelog/8.7.x/Important-83971-ConsoleShowDeprecationWarningInChrome.html)
* [Important: #84144 - RootlineUtility is enriching only properly selected relational database fields](https://docs.typo3.org/typo3cms/extensions/core/latest/Changelog/8.7.x/Important-84144-RootlineUtilityIsEnrichingOnlyProperlySelectedRelationalDatabaseFields.html)
';

$changes = '
```
* a12fcf718b [RELEASE] Release of TYPO3 8.7.11
 * f5f53daadc [TASK] Add missing documentation files and correct errors
 * a73bffdd1b [BUGFIX] Ensure TSconfig order is identical in BE and FE
 * 83f279ae2a [BUGFIX] Handle config.absRefPrefix on JS/CSS files correctly again
 * d9c29e61d4 [BUGFIX] Add upgrade wizard to keep sorting of sys_language records
 * 8317d6f956 [TASK] Add functional test for runtimeActivatedPackages
 * b25e3d8e30 [BUGFIX] Add missing element description field to form editor
 * 6d443448cc [BUGFIX] Correct automatic grid column calculation for forms
 * bfbc4e17f1 [BUGFIX] Assign elementErrorClassAttribute to ImageUpload and FileUpload element
 * ee659453dc [BUGFIX] Protect a forgotten AbstractFormEngineAjaxController method
 * 1751567b4d [BUGFIX] Allow empty date/time in strict database modes
 * b7d8f6db5d [BUGFIX] Update fluid from 2.5.2 to 2.5.3
 * 61008d7083 [BUGFIX] Streamline package management in PackageManager
 * 5e86b9f0a2 [BUGFIX] For links across domains check if absRefPrefix is set
 * 1b4ca4ed93 [TASK] Adding novalidate Attribute to Fluid Form ViewHelper
 * a713592e95 [BUGFIX] Properly HTML encode site name in page module
 * 5869aa20a7 [BUGFIX] Unify value for $report[\'lib\'] to GuzzleHttp
 * 3f27b4f069 [BUGFIX] Do not check HTTP referrer anymore
 * a0e51ca70b [BUGFIX] Simulate submit button for rsaauth form submit
 * 7537bb067e [BUGFIX] Set correct default connection charset "utf8"
 * a3b7aa9cfe [BUGFIX] Assign elementClassAttribute to ImageUpload element
 * e0233050f9 [BUGFIX] Proper returnUrl editing permissions from context menu
 * 21302c836b [BUGFIX] Do not mark "current" links as broken
 * 8fa130aedf [BUGFIX] Check registry for upgrade wizard report
 * f7b2d3c275 [BUGFIX] DatabaseRecordLinkBuilder respect now other typoscript settings
 * 0b9ef9e9cb [BUGFIX] Allow range options to work for date/time fields
 * 61c00881a5 [BUGFIX] Change getUrl() $report[\'content_type\'] to string
 * c204adbeda [BUGFIX] Catch all exceptions in page module of form framework
 * e2af7c6ed8 [!!!][BUGFIX] Fix wrong error path of validation
 * 925e83da74 [BUGFIX] Add missing AND concatenation in generated SQL statement
 * 3dcfac047c [BUGFIX] Pass original extbase response object to form framework finishers
 * f9d07dbdc1 [BUGFIX] Convert URLs to punycode
 * 1f4cb283e7 [BUGFIX] Treat empty responses as error in GeneralUtility::getUrl
 * 63293d613d [BUGFIX] Revert "[BUGFIX] Fix recursive FLUIDTEMPLATE cObj\'s that use layoutRootPaths"
 * e972349824 [TASK] Update display of form fields in module \'view\'
 * d328b91bcf [BUGFIX] Use the real page id for doesPageHaveUnallowedTables check
 * 0f52ffd225 [BUGFIX] Remove trailing tab char on rst snippet
 * 0f3ee180dd [BUGFIX] Access element in Viewport cleanup correctly
 * 6eabf3de3a [TASK] Update Fluid dependency to 2.5.2
 * a31678b5e6 [TASK] Use correct issue reference in allowLanguageSynchronization documentation
 * dc7dc58089 [BUGFIX] Unset internal properties of processed file on delete
 * b7f0a5ea77 [BUGFIX] RootlineUtility only resolves defined relation fields
 * 6dc2da6ec7 [BUGIFX] MediaceExtractionUpdate in Install Tool always requiring an update
 * 6d40a627cf [TASK] bamboo: Hard kill php web server processes
 * 028badc4fc [TASK] Synchronize RST files
 * 954baccd35 [BUGFIX] Allow multi-byte characters in live search
 * f718cc6f33 [BUGFIX] Replace star icon properly after saving shortcut
 * 66c2c27954 [BUGFIX] Have extractFileInformation extract atime only once
 * 149c43d8f5 [TASK] Don\'t mark ConnectionPool::getConnectionByName() as internal
 * 138458ff7f [BUGFIX] Add +repage option when cropping images
 * 450d196f82 [BUGFIX] Fix imagemagick commands when setting stripProfile to "0"
 * 98ac504a65 [BUGFIX] Properly append/prepend with "addRecord" wizard
 * e4656d0328 [TASK] Put commit hooks into Build/git-hooks directory
 * 283037e41e [TASK] Update typo3fluid/fluid to 2.5.1
 * 9694d8998c [BUGFIX] Remove undocumented values from Soft Reference Index data
 * 8fa73fbb9d [BUGFIX] Fix linktype selection in Linkvalidator report
 * ddee255334 [BUGFIX] Respect "recursive" flag when restoring records in recycler
 * 9701eb40f6 [BUGFIX] Finalize rowDescription for sys_file_collection
 * 2a1a2c43a8 [BUGFIX] Return correct query part in ContentObjectRenderer::searchWhere
 * 91c4a92d80 [BUGFIX] Add space in lockedRecords messages for translated languages
 * 4820410d13 [BUGFIX] Allow browser notifications only on encrypted connection
 * cf98382181 [TASK] Improve strictness of resource access blocking in _.htaccess
 * b6fde00af3 [BUGFIX] Avoid renumbering array keys on writing configuration
 * d2e86d6919 [BUGFIX] Initiate correct storage of processed file during reconstitution
 * b8e179bb9c [BUGFIX] Make sure that mass actions actually process all changes
 * 6287e1c294 [BUGFIX] Avoid PHP warnings within DatePickerViewHelper
 * f0afa751e3 [BUGFIX] Correctly handle identical arrays in arrayDiffAssocRecursive
 * 693a7140aa [BUGFIX] Show error message when hiding page from context menu
 * 92a5b25cf8 [TASK] Update readme copyright date to 2018
 * 9e08821a38 [BUGFIX] Use Icon API for date picker icons
 * 1eb995df96 [BUGFIX] Show workspace preview text again
 * 0aa068b990 [BUGFIX] Append pageId variable to string properly
 * c3695a9257 [TASK] Add data attributes in backend toolbar and menu components
 * 69c6d98381 [BUGFIX] Fix timestamp handling in QueryGenerator
 * 1c5f3d9aa4 [BUGFIX] Hide readonly elements in summary page and emails
 * 62da5d3b17 [BUGFIX] Don\'t download language packs of not loaded extensions
 * 563420f56d [TASK] Snychronize form framework documentation
 * ef395cb242 [TASK] Rename /prototypes to /proto of form docs
 * 514d1ff407 [BUGFIX] Use sys_file as soft reference for formDefinitions
 * 9dcd78fff6 [BUGFIX] Add placeholder to date picker form elements
 * 9b5b32baad [BUGFIX] Refactor record querying in deep nested structures in recycler
 * e6d2c9b8e4 [BUGFIX] Fix miscellaneous palette in pages table
 * 3d38d40cab [BUGFIX] EXT:form - fix design glitches of new element modal
 * 14499f1d14 [BUGFIX] Ensures call of synchronizeFieldValues with valid arguments
 * 91e8d3e1c1 [TASK] EXT:form - Rename "Vendor" javascript folder to "Contrib"
 * a98f62f5bd [TASK] Extend untangleFilesArray function test in RequestBuilder
 * 7427f11c3d [BUGFIX] Fix source collection for GIFBUILDER
 * 02e28fc547 [TASK] Change the label for scheduler "Save and create"
 * fd9969bf12 [BUGFIX] EXT:filelist Fixed exception when creating new text file
 * 2d61aac03a [BUGFIX] Handle empty string icon-overlay identifier
 * a5bb019c53 [BUGFIX] Show all dropdown items of form finisher
 * 5333ae5b11 [TASK] Catch exception in record editing if current record is deleted
 * 281755cc73 [TASK] Remove "Set" button in belog extension
 * a5e8ce4c35 [BUGFIX] Show links to missing records in InputLink
 * 24c68e80a1 [TASK] Add composer.json integrity check
 * d892e05e29 [TASK] Add CGL check for CSV fixtures
 * db08ce5c27 [BUGFIX] Fix CSV fixtures in core
 * 30fbe565c4 [TASK] Unify installation tests
 * e2e65ee271 [BUGFIX] Respect casing in CommandLineBackendUserRemovalUpdate
 * 7774deca37 [TASK] Properly check for HTTPS
 * d8966fc65a [BUGFIX] Flacky acceptance test
 * bdb54ff195 [BUGFIX] Unit tests call parent::tearDown()
 * 6f4b9e3432 [BUGFIX] Fix table markup in DragDropUploader
 * ac263b3d2a [CLEANUP] Remove obsolete fixtures of Fluid unit tests
 * 1220a4826f [BUGFIX] Correct check for install tool requests in bootstrap
 * 53a4cce8e9 [TASK] Let Bamboo check for clean TypeScript build
 * cae6a00728 [TASK] Hide "Group by page" if only one page is shown in EXT:belog
 * 04ad015d22 [TASK] Update typo3/testing-framework
 * ec7830bba6 [BUGFIX] Handle settings for report / check in linkvalidator
 * c5eecf0ee3 [BUGFIX] Add missing htmlspecialchars() calls and cleanup in QueryView
 * 8858577f54 [TASK] Use hash_equals for timing-safe comparison of hash-values
 * 2235b4a530 [BUGFIX] Fix backend user check in ProductionExceptionHandler
 * 0b944f1d2b [BUGFIX] Catch __PHP_Incomplete_Class classes
 * eb5f361ed3 [BUGFIX] Show hidden translated record only once in clipboard
 * 213cbde003 [BUGFIX] Updated class name in scheduler docs
 * 5169866ec8 [TASK] Use native array_replace_recursive implementation
 * e5435994ad [BUGFIX] Handle Guzzle exceptions in linkvalidator
 * 9e756d6461 [BUGFIX] Use `file.identifier` in search result of filelist
 * 744ee56ba9 [TASK] Skip test for Yaml PHP extension if not loaded
 * eaf148d9a7 [BUGFIX] Make it possible to translate selectMultipleSideBySide
 * ea595169da [BUGFIX] EXT:filelist Fixed exception when the base path does not exists
 * 1dde9c4cb4 [BUGFIX] Set default values in TCA of sys_file_collection
 * 97ce572519 [BUGFIX] HTML5: use self-closing tags only if allowed
 * c234c6b5e3 [BUGFIX] Fix quoting and cleanup in AdminPanelView
 * fc3c17d6d1 [BUGFIX] EXT:form - fix clicks on checkbox labels in IE/Edge
 * 64f29c3444 [TASK] Fix flaky Acceptance Tests
 * 211383c5fe [BUGFIX] Respect TSconfig option showHistory
 * 2b4c842e87 [BUGFIX] Fix RTE CKEditor placements of dropdowns in Chrome
 * ebd35d7da8 [TASK] Update UC in recycler only once per action
 * 95549168e7 [BUGFIX] Correct horizontal scrolling in iframe on iOS browsers
 * d1dd5d4cf8 [BUGFIX] Fix false icons widths in FormEngine IconSelect
 * f94c0d6ffd [BUGFIX] Show active state for SelectIcons
 * 8e2528b133 [BUGFIX] Fix typo in field description SYS:ddmmyy
 * 981147b3ff [TASK] Resolve Todos in InheritancesResolverService
 * eb310ba312 [BUGFIX] Allow silent upgrade service to migrate old displayErrors setting
 * 9f05cba05c [BUGFIX] Allow workspace preview inside another rootline
 * 840becac00 [TASK] Improve file overwriting dialog of the filelist module
 * 3b7bd11e49 [BUGFIX] Fix unset bits in options.alertPopup bitmask
 * d99e338059 [TASK] Improve prevention of redirect loop
 * 6164161cfe [TASK] Set TYPO3 version to 8.7.11-dev';

$db = new SQLite3(__DIR__ . '/../var/gettr.db');

$fullVersion = '8.7.11';
$stmt = $db->prepare(
    /** @lang SQLite */
    'UPDATE "release" SET ' .
    'release_notes_changes = :changes, release_notes_news = :news, ' .
    'release_notes_upgrading_instructions = :instructions, release_notes_legacy_content = null WHERE version = :version');
$stmt->bindValue(':changes', $changes);
$stmt->bindValue(':news', $news);
$stmt->bindValue(':instructions', $upgrading);
$stmt->bindValue(':version', $fullVersion);
$stmt->execute();
