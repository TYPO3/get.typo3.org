Release Notes for TYPO3 CMS 8.7.4
=================================

This document contains information about TYPO3 CMS 8.7.4 which was
released on July 25th, 2017.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

SHA256 checksums
----------------

    b0ba9a2cb09d5855b557f220ca1c535ffc9eb5f458bb48bd275ee647664b64d8  typo3_src-8.7.4.tar.gz
    bad0d5ab440522de5190fcf537988b1a84ec28af792b790f923e7718a988781d  typo3_src-8.7.4.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.\
It might be required to clear all caches; the “important actions”
section in the TYPO3 Install Tool offers the accordant possibility to do
so.

Make sure to clear your browser caches and App Data after upgrading.

Changes
-------

Here is a list of what was fixed since
[8.7.3](TYPO3_CMS_8.7.3 "wikilink"):

`* c7c31332ac [RELEASE] Release of TYPO3 8.7.4`\
`* fd83360964 [BUGFIX] CSS Styled Content should render image captions`\
`* 53b507e1ca [BUGFIX] Prevent error with DateTimePicker on IE/Edge`\
`* ac0f024b6c [BUGFIX] Attach CKEditor instance to RteLinkBrowser Modal, so it can be found`\
`* 93353f08d2 [BUGFIX] DataMapProcessor::synchronizeInlineRelations removes entities`\
`* 1c2cad6a6d [BUGFIX] Use HTTP 400 instead of 500 when client is faulty`\
`* e755c68864 [BUGFIX] Correct invalid complex query in Doctrine for fetching workspaces`\
`* cf2d1b5d0b [BUGFIX] Respect lowercase „as“ in quoteIdentifiersForSelect`\
`* 8585238384 [BUGFIX] Make sure correct sys_language_uid is set for irre items`\
`* c802e2fa9c [BUGFIX] Unset file properties after signals are triggered`\
`* 9675455b7b [BUGFIX] MM Relation with add wizard resets the MM Relation`\
`* fb771c1c53 [BUGFIX] Outdated resource pointers crash for TCA type group`\
`* 193d6572d1 [BUGFIX] Escape value in FormEngine.removeOption selector`\
`* 8f4a267fd7 [TASK] Fix felogin documentation formatting (Configuration chapter)`\
`* 5ee167a36e [BUGFIX] Code example in feature .rst`\
`* b1f635007a [BUGFIX] Allow to override RTE config via PageTS`\
`* ed3feb5386 [TASK] EXT:form - add email finishers explanations`\
`* 16c46eedf1 [TASK] EXT:form - add missing documentation for select element options`\
`* 995744b49c [BUGFIX] EXT:form - fix wrong "templateFileName" usage within the docs`\
`* 5d201531a2 [TASK] Remove the dependency of EXT:tstemplate to EXT:frontend`\
`* cd8caf8d94 [TASK] EXT:form - Add documentation`\
`* 95e450fe8c [BUGFIX] Show message if no extension repo exists in extensionmanager`\
`* 47caa24dce [TASK] Correct composer.json files of system extensions`\
`* 3e39bf2be8 [BUGFIX] Create missing files/folders for ExtensionCompatibilityTester`\
`* ac9cbd1fee [BUGFIX] Fix multi edit link in TableListViewHelper`\
`* a8d502ac83 [BUGFIX] Clone ObjectStorage in ObjectAccess`\
`* 9e8f8cab6b [TASK] Optimize comment for sys_language_contentOL`\
`* ec4d05ebd3 [BUGFIX] Allow cloning of the QueryBuilder`\
`* 1818f50659 [BUGFIX] Fixes required CKeditor fields in flexforms`\
`* 40afb6d70e [BUGFIX] Fix broken icon for 'Federated States of Micronesia' in sys_language`\
`* 59625a1d0a [BUGFIX] Info->Pagetree overview - Drop "red plus" icon`\
`* b8696bec1d [BUGFIX] Correct label for cut release in clickmenu`\
`* dc0641bc31 [TASK] Fix syntax error in RST file`\
`* ade023a020 [BUGFIX] Don't duplicate thumbnails in file list and file selector`\
`* 71c8c0d946 [BUGFIX] Allow comma in config.linkVars values`\
`* eddd848f1e [TASK] Add attribute "placeholder" to PasswordViewHelper`\
`* 53cfdba341 [BUGFIX] Indexed search has wrong language keys in search template`\
`* 3fa9925973 [BUGFIX] Allow any navigation component to load in BE`\
`* 2582a11bd3 [BUGFIX] Replace empty value constants in TypoScript Object-Browser`\
`* ee50e61d68 [TASK] Style select in EXT:saltedpasswords with bootstrap`\
`* 972394c5f4 [BUGFIX] Respect default label in TranslateViewHelper again`\
`* 87fc0aaa31 [BUGFIX] Fix database query in StaticRecordCollection`\
`* 1814e43aab [TASK] Unify ext_emconf setting clearCacheOnLoad`\
`* 097967b2a8 [BUGFIX] Enable thumbnail generation for IRRE  image files with capitalized file extension`\
`* 64a9da3f99 [BUGFIX] Add video/x-m4v to supported mime types of VideoTagRenderer`\
`* f13d175408 [TASK] Readd the type to the list of extensions in the extension manager`\
`* 5bff6f4641 [BUGFIX] Add missing "Display messages" checkbox to admin panel`\
`* a0b4e5588d [BUGFIX] EXT:indexed_search: Ensure that sword is a string`\
`* 80bac9750e [BUGFIX] Wait with replacing CKEditor until DOM is ready`\
`* 2ea641b042 [BUGFIX] Add TER replacements for extracted extensions`\
`* 866d02f3f7 [BUGFIX] Resolve t3: URI to FAL objects for src attributes`\
`* 7ecd211298 [BUGFIX] Make number of listed records in EXT:recycler configurable again`\
`* 341d63025a [TASK] EXT:form - rename form element "Page" to "Step"`\
`* b3ab618c61 [BUGFIX] EXT:form - fix DatePicker html output`\
`* 8f93ac54f7 [BUGFIX] Make extensionName parameter optional for LocalizationUtility::translate()`\
`* 4e756929de [BUGFIX] Early return in checkValueForInternalReferences`\
`* 81eeee2fe0 [TASK] Upgrade version of D3 to 4.9.1`\
`* 7a2902caf1 [BUGFIX] Always quote SQL identifiers in schema migrations`\
`* ededfc07ac [TASK] Resolve hidden dependency from EXT:backend to EXT:rsaauth`\
`* 5de39f0733 [BUGFIX] Provide lang and uc data for workspace notification localization`\
`* 4bb21e2845 [BUGFIX] Always select database number in Redis Cache Backend`\
`* 1071e0304b [BUGFIX] Import Fluid namespace in Step layout of install tool`\
`* 87d75ebe1f [TASK] Set TYPO3 version to 8.7.4-dev`

<Category:ReleaseNotes/TYPO3_8.x> [Category:TYPO3
8](Category:TYPO3_8 "wikilink") <Category:2017>
