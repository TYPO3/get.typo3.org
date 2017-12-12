Release Notes for TYPO3 4.5.12
==============================

This document contains information about TYPO3 version 4.5.12 which was
released on March 6th 2012.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    8d2c4836f37df12c48834e428503781f  blankpackage-4.5.12.tar.gz
    801407f91ce2c2bd24ab3afdf6ede86e  blankpackage-4.5.12.zip
    cbeffb05651a771ee264c1405440c750  dummy-4.5.12.tar.gz
    51dfe48b9226dfc3ebff088d85dcf9c7  dummy-4.5.12.zip
    e2ae84fce0dcb1040f7d1bb6377f1bae  introductionpackage-4.5.12.tar.gz
    0b5e7c5ad1ffa4095ac6d87d1e1c406c  introductionpackage-4.5.12.zip
    c5dc66138e36ea5f5c943fe459153f96  typo3_src+dummy-4.5.12.zip
    1f2076e858b82441f4de40efe56ca7ad  typo3_src-4.5.12.tar.gz
    98942c288e60a984b1cab455c65bff48  typo3_src-4.5.12.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.5.11](TYPO3_4.5.11 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.5.12
-   \[BUGFIX\] Media element does not recognize short YouTube links
    ([\#33089](https://forge.typo3.org/issues/33089))
-   \[BUGFIX\] Add the title and increase width of the multiple select
    boxes ([\#32732](https://forge.typo3.org/issues/32732))
-   \[BUGFIX\] Misleading error with empty USER\_INT
    ([\#23347](https://forge.typo3.org/issues/23347))
-   \[BUGFIX\] tslib\_pibase: Outdated PHPDoc comment for pi\_loadLL()
    ([\#33160](https://forge.typo3.org/issues/33160))
-   \[TASK\] Remove typo3/logomenu.php
    ([\#34427](https://forge.typo3.org/issues/34427))
-   \[BUGFIX\] PHP Warning when moving a record
    ([\#34135](https://forge.typo3.org/issues/34135))
-   \[BUGFIX\] EM: make update window modal
    ([\#29593](https://forge.typo3.org/issues/29593))
-   \[BUGFIX\] Content rendering: Definition lists in RTE are wrapped in
    p ([\#25083](https://forge.typo3.org/issues/25083))
-   \[BUGFIX\] Don't save form protection error messages in session
    ([\#30272](https://forge.typo3.org/issues/30272))
-   \[BUGFIX\] TCE: error message if no label has been set in TCA
    ([\#17947](https://forge.typo3.org/issues/17947))
-   \[BUGFIX\] getAllowedItems called with one parameter too much
    ([\#34030](https://forge.typo3.org/issues/34030))
-   \[BUGFIX\] Scheduler BE module fails to load due to autoloader
    issues ([\#33116](https://forge.typo3.org/issues/33116))
-   \[TASK\] Additional unit tests for t3lib\_div::mkdir and mkdir\_deep
-   \[BUGFIX\] htmlArea RTE: Target of localized string may be empty
    ([\#33897](https://forge.typo3.org/issues/33897))
-   \[BUGFIX\] htmlArea RTE: Default skin inconsistent with ExtJS
    xtheme-blue ([\#33889](https://forge.typo3.org/issues/33889))
-   \[BUGFIX\]\[t3editor\] (De-)Activating does not work in Chrome
    ([\#33515](https://forge.typo3.org/issues/33515))
-   \[BUGFIX\] Sorting of localized records is wrong after copying
    ([\#30469](https://forge.typo3.org/issues/30469))
-   \[BUGFIX\] Sporadic memcache error on server load
    ([\#30162](https://forge.typo3.org/issues/30162))
-   \[BUGFIX\] IRRE translation links shouldn't be shown if no parent
    ([\#32073](https://forge.typo3.org/issues/32073))
-   \[BUGFIX\] Confusing error message in reports module
    ([\#32650](https://forge.typo3.org/issues/32650))
-   \[BUGFIX\] Resetting of input field to default when having a range
    fails ([\#28298](https://forge.typo3.org/issues/28298))
-   \[BUGFIX\] IRRE: Selected items remain in selector with
    foreign\_unique ([\#21102](https://forge.typo3.org/issues/21102))
-   \[BUGFIX\] RTE: Removing div from formatblock selector may not
    workspaces ([\#33457](https://forge.typo3.org/issues/33457))
-   \[BUGFIX\] htmlArea RTE: CSS class names are lowercase in WebKit
    ([\#32408](https://forge.typo3.org/issues/32408))
-   \[BUGFIX\] saltedpasswords update task only updates 42 records
    ([\#31252](https://forge.typo3.org/issues/31252))
-   \[BUGFIX\] Bookmarks to pages don't work
    ([\#30352](https://forge.typo3.org/issues/30352))
-   \[TASK\] Disable compression for inlineJs in Backend
    ([\#29498](https://forge.typo3.org/issues/29498))
-   \[BUGFIX\] Prevent duplicate stdWrap for media content
    ([\#25277](https://forge.typo3.org/issues/25277))
-   \[BUGFIX\] Release locked records during logout
    ([\#20211](https://forge.typo3.org/issues/20211))
-   \[BUGFIX\] Prevent compression of scripts that use ajax.php
    ([\#24274](https://forge.typo3.org/issues/24274))
-   \[BUGFIX\] “Show page” does not use a proper URL scheme
    ([\#31959](https://forge.typo3.org/issues/31959))
-   \[TASK\] Reports module uses internal data of salted passwords
    ([\#32136](https://forge.typo3.org/issues/32136))
-   \[BUGFIX\] RTE: Some toolbar elements may not be correctly
    initialized ([\#33637](https://forge.typo3.org/issues/33637))
-   \[BUGFIX\] Encoding error in TCEforms inline JavaScript
    ([\#32422](https://forge.typo3.org/issues/32422))
-   \[BUGFIX\] t3lib\_div::validPathStr() fails on certain file names
    ([\#32046](https://forge.typo3.org/issues/32046))
-   \[BUGFIX\] htmlArea RTE: Changing the text color to black does not
    work ([\#32877](https://forge.typo3.org/issues/32877))
-   \[BUGFIX\] htmlArea RTE: Firefox may report error when setting a
    color ([\#33644](https://forge.typo3.org/issues/33644))
-   \[BUGFIX\] RTE Text indicator does not work in Firefox in TYPO3 4.5
    ([\#33642](https://forge.typo3.org/issues/33642))
-   \[BUGFIX\] RTE: Some toolbar elements may not be correctly
    initialized ([\#33637](https://forge.typo3.org/issues/33637))
-   \[BUGFIX\] Context menu of page translation doesn't work in
    languages view ([\#27052](https://forge.typo3.org/issues/27052))
-   Revert “\[BUGFIX\] Scheduler BE module fails to load due to
    autoloader issues”
-   \[BUGFIX\] Reports module shows unnecessary info text
    ([\#32580](https://forge.typo3.org/issues/32580))
-   \[BUGFIX\] Scheduler BE module fails to load due to autoloader
    issues ([\#33116](https://forge.typo3.org/issues/33116))
-   \[BUGFIX\] Broken datepicker on unsaved flexform sections
    ([\#23843](https://forge.typo3.org/issues/23843))
-   \[BUGFIX\] TYPO3 prompts to select position when there are no pages
    ([\#32111](https://forge.typo3.org/issues/32111))
-   \[BUGFIX\] Unlimited memory limit handling in system status report
    ([\#32231](https://forge.typo3.org/issues/32231))
-   \[BUGFIX\] Warnings in BE when using “Find filename”
    ([\#21591](https://forge.typo3.org/issues/21591))
-   \[BUGFIX\] spriteManager for Clear RTE Cache icon
    ([\#32892](https://forge.typo3.org/issues/32892))
-   \[TASK\] Improve debugTrail() to better handle includes
    ([\#31300](https://forge.typo3.org/issues/31300))
-   \[BUGFIX\] htmlArea RTE: Some attributes wrongly unset by “Edit
    element” ([\#33466](https://forge.typo3.org/issues/33466))
-   \[BUGFIX\] Misinterpretation of memory\_limit setting in install
    tool ([\#20069](https://forge.typo3.org/issues/20069))
-   \[BUGFIX\] Marker not removed from file module
    ([\#33455](https://forge.typo3.org/issues/33455))
-   \[TASK\] Set TYPO3 version to 4.5.12-dev

### workspaces

-   \[TASK\] Update version to 4.5.12
-   \[BUGFIX\] Records with same UID but different tables are not shown
    ([\#34546](https://forge.typo3.org/issues/34546))
-   \[TASK\] Cannot translate workspace preview link generation
    ([\#34145](https://forge.typo3.org/issues/34145))

<Category:ReleaseNotes/TYPO3_4.5.x> [Category:TYPO3
4.5](Category:TYPO3_4.5 "wikilink") <Category:2012>
