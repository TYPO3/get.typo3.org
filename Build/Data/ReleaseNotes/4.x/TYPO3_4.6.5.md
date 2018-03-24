Release Notes for TYPO3 4.6.5
=============================

This document contains information about TYPO3 version 4.6.5 which was
released on March 6th 2012.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    2cb9d8ebc6b24a1ac20a8f2e5d805618  blankpackage-4.6.5.tar.gz
    ed1d9e6056606878e41867903904836f  blankpackage-4.6.5.zip
    0ecc3c36ce494e728829719990cd5067  dummy-4.6.5.tar.gz
    298dac1ccaabec66e2ad722eec6ebcee  dummy-4.6.5.zip
    d9f87140a3d943b3a0ccc5f1eeef3cfa  introductionpackage-4.6.5.tar.gz
    343d9ac4b462c81c204537932c49fb46  introductionpackage-4.6.5.zip
    0e0a0037ac5b6d8d92c24ba049266d35  typo3_src+dummy-4.6.5.zip
    cf285360306f865d2dba1aafc7b069d1  typo3_src-4.6.5.tar.gz
    f9072583b15d37e5b183e980f035964e  typo3_src-4.6.5.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since [4.6.4](TYPO3_4.6.4 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.6.5
-   \[BUGFIX\] Form: Confirmation value relies on label value
    ([\#31560](https://forge.typo3.org/issues/31560))
-   \[BUGFIX\] Form: Add more semantic classes for elements
    ([\#31561](https://forge.typo3.org/issues/31561))
-   \[BUGFIX\] Translated mailform should use localized email
    ([\#17061](https://forge.typo3.org/issues/17061))
-   \[BUGFIX\] Check minitems for TCAtree
    ([\#25003](https://forge.typo3.org/issues/25003))
-   \[BUGFIX\] Validation for multiple forms on one page
    ([\#31711](https://forge.typo3.org/issues/31711))
-   \[BUGFIX\] Sporadic memcache error on server load
    ([\#30162](https://forge.typo3.org/issues/30162))
-   \[BUGFIX\] t3lib\_BEfunc::getViewDomain() returns wrong or no domain
    ([\#30892](https://forge.typo3.org/issues/30892))
-   \[BUGFIX\] Media element does not recognize short YouTube links
    ([\#33089](https://forge.typo3.org/issues/33089))
-   \[BUGFIX\] Unset stdWrap of select.pidInList
    ([\#28526](https://forge.typo3.org/issues/28526))
-   \[BUGFIX\] Remove early return in PageTreeDataProvider
    ([\#33761](https://forge.typo3.org/issues/33761))
-   \[BUGFIX\] Warnings in tcemain on iterating over unset columns
    ([\#32467](https://forge.typo3.org/issues/32467))
-   \[BUGFIX\] TypoLink: absolute urls when installed in subfolder
    ([\#33214](https://forge.typo3.org/issues/33214))
-   \[BUGFIX\] Add the title and increase width of the multiple select
    boxes ([\#32732](https://forge.typo3.org/issues/32732))
-   \[BUGFIX\] Misleading error with empty USER\_INT
    ([\#23347](https://forge.typo3.org/issues/23347))
-   \[BUGFIX\] tslib\_pibase: Outdated PHPDoc comment for pi\_loadLL()
    ([\#33160](https://forge.typo3.org/issues/33160))
-   \[TASK\] Remove typo3/logomenu.php
    ([\#34427](https://forge.typo3.org/issues/34427))
-   \[TASK\] Add clear l10n cache when the user clear all cache
    ([\#32600](https://forge.typo3.org/issues/32600))
-   \[BUGFIX\] flock() calls in TYPO3 prevent NFS hosting
    ([\#31460](https://forge.typo3.org/issues/31460))
-   \[BUGFIX\] Fatal error if pear package http\_request2 is installed
    ([\#32013](https://forge.typo3.org/issues/32013))
-   \[BUGFIX\] show uid of reference in show\_item.php
    ([\#33866](https://forge.typo3.org/issues/33866))
-   \[TASK\] Invalid SQL and bad code in tslib\_fe
    ([\#32159](https://forge.typo3.org/issues/32159))
-   \[BUGFIX\] PHP Warning when moving a record
    ([\#34135](https://forge.typo3.org/issues/34135))
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
-   \[BUGFIX\]\[t3editor\] (De-)Activating does not work in Chrome
    ([\#33515](https://forge.typo3.org/issues/33515))
-   \[BUGFIX\] htmlArea RTE: Default skin inconsistent with ExtJS
    xtheme-blue ([\#33889](https://forge.typo3.org/issues/33889))
-   \[BUGFIX\] IRRE translation links shouldn't be shown if no parent
    ([\#32073](https://forge.typo3.org/issues/32073))
-   \[BUGFIX\] Confusing error message in reports module
    ([\#32650](https://forge.typo3.org/issues/32650))
-   \[BUGFIX\] .inc files still call cObj-&gt;checkEmail
    ([\#31573](https://forge.typo3.org/issues/31573))
-   \[BUGFIX\] Resetting of input field to default when having a range
    fails ([\#28298](https://forge.typo3.org/issues/28298))
-   \[BUGFIX\] IRRE: Selected items remain in selector with
    foreign\_unique ([\#21102](https://forge.typo3.org/issues/21102))
-   \[BUGFIX\] Formmail doesn't always use correct character set
    ([\#28684](https://forge.typo3.org/issues/28684))
-   \[BUGFIX\] RTE: Removing div from formatblock selector may not work
    ([\#33457](https://forge.typo3.org/issues/33457))
-   \[BUGFIX\] htmlArea RTE: CSS class names are lowercase in WebKit
    ([\#32408](https://forge.typo3.org/issues/32408))
-   \[BUGFIX\] IFSUB ignores l18n\_cfg field
    ([\#19925](https://forge.typo3.org/issues/19925))
-   \[BUGFIX\] Shortcut redirect ignores linkVars syntax
    ([\#32253](https://forge.typo3.org/issues/32253))
-   \[BUGFIX\] Loading of an IRRE element with subtabs freezes and
    breaks browsers ([\#33448](https://forge.typo3.org/issues/33448))
-   \[BUGFIX\] saltedpasswords update task only updates 42 records
    ([\#31252](https://forge.typo3.org/issues/31252))
-   \[BUGFIX\] TSconfig option hides table pages\_language\_overlay
    ([\#32693](https://forge.typo3.org/issues/32693))
-   \[BUGFIX\] SQL error in extension manager
    ([\#33697](https://forge.typo3.org/issues/33697))
-   \[BUGFIX\] Invalid “unequal”-statement and string-quoting in SQL
    ([\#32161](https://forge.typo3.org/issues/32161))
-   \[BUGFIX\] Live search must implement search properties
    ([\#31761](https://forge.typo3.org/issues/31761))
-   \[BUGFIX\] Release locked records during logout
    ([\#20211](https://forge.typo3.org/issues/20211))
-   \[BUGFIX\] Prevent compression of scripts that use ajax.php
    ([\#24274](https://forge.typo3.org/issues/24274))
-   \[BUGFIX\] SQL parser does not support NULL as default value
    ([\#33704](https://forge.typo3.org/issues/33704))
-   \[BUGFIX\] “Show page” does not use a proper URL scheme
    ([\#31959](https://forge.typo3.org/issues/31959))
-   \[TASK\] Reports module uses internal data of salted passwords
    ([\#32136](https://forge.typo3.org/issues/32136))
-   \[BUGFIX\] RTE: Some toolbar elements may not be correctly
    initialized ([\#33637](https://forge.typo3.org/issues/33637))
-   Revert “\[BUGFIX\] RTE: Some toolbar elements may not be correctly
    initialized”
-   \[BUGFIX\] Encoding error in TCEforms inline JavaScript
    ([\#32422](https://forge.typo3.org/issues/32422))
-   \[BUGFIX\] Bookmarks to pages don't work
    ([\#30352](https://forge.typo3.org/issues/30352))
-   \[BUGFIX\] t3lib\_div::validPathStr() fails on certain file names
    ([\#32046](https://forge.typo3.org/issues/32046))
-   \[BUGFIX\] htmlArea RTE: Changing the text color to black does not
    work ([\#32877](https://forge.typo3.org/issues/32877))
-   \[BUGFIX\] htmlArea RTE: Firefox may report error when setting a
    color ([\#33644](https://forge.typo3.org/issues/33644))
-   \[BUGFIX\] RTE: Some toolbar elements may not be correctly
    initialized ([\#33637](https://forge.typo3.org/issues/33637))
-   \[BUGFIX\] Adjust shortcut mode labels for selected/current page
    ([\#26690](https://forge.typo3.org/issues/26690))
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
-   \[BUGFIX\] Fix permissions and create group in mkdir\_deep
    ([\#32261](https://forge.typo3.org/issues/32261))
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
-   \[BUGFIX\] Sorting of localized records is wrong after copying
    ([\#30469](https://forge.typo3.org/issues/30469))
-   \[TASK\] Set TYPO3 version to 4.6.5-dev

### extbase

-   \[TASK\] update ext\_emconf.php

### workspaces

-   \[TASK\] Update version to 4.6.5
-   \[BUGFIX\] Records with same UID but different tables are not shown
    ([\#34546](https://forge.typo3.org/issues/34546))
-   \[TASK\] Cannot translate workspace preview link generation
    ([\#34145](https://forge.typo3.org/issues/34145))


