Release Notes for TYPO3 6.1.1
=============================

This document contains information about TYPO3 version 6.1.1 which was
released on May 24th 2013.

News
----

This release is a bug fix release.

Notes
-----

This is a combined release of TYPO3 CMS 4.5.27, 4.7.12, 6.0.6 and 6.1.1.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    609126b5e07e93649b10c30fdebd7811  blankpackage-6.1.1.tar.gz
    38ec5aef55aa1baa259e9a85d1a96eb7  blankpackage-6.1.1.zip
    b9ca974993fe5b05dbb1e5b9181e53e6  dummy-6.1.1.tar.gz
    22c6697d10d2fef17f1a403b8eeecad7  dummy-6.1.1.zip
    699d69ff003f270ec8ab7b3144087d0a  governmentpackage-6.1.1.tar.gz
    bdd60b138502c0afb806955f42a055f4  governmentpackage-6.1.1.zip
    2c417744167d98f5d6d4660cb4e7896e  introductionpackage-6.1.1.tar.gz
    9818ff90f0b2451be401c12ecfe3ed4e  introductionpackage-6.1.1.zip
    3fa25e895e3e04d3cb318c0bc22662f6  typo3_src+dummy-6.1.1.zip
    a1561f7e2994244701e6c89810167341  typo3_src-6.1.1.tar.gz
    7713041a2c989fac798fe522501453fd  typo3_src-6.1.1.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.

Please note: A minor database schema update was included in this release
in order to fix issue <issue>16762</issue>. This is unusual for a patch
level release, but we decided to include it anyway with the following
rationale:

-   New installations get the correct field definition from start (bug
    fixed).
-   Old installations updating to the newest patch level by simply
    updading the TYPO3 Sources (usual procedure): No change of
    functionality, nothing breaks. But the bug won't be fixed.
-   Old installations which need this bug fixed need to apply the TYPO3
    Source Upgrade and do an one time “Database Compare” in the Install
    Tool afterwards.

So the last step is optional and only required if you are really hit by
this bug and want to have it solved in your existing installation. Most
integrations won't be affected by this bug anyway.

Changes
-------

Here is a list of what was fixed since [6.1.0](TYPO3_6.1.0 "wikilink"):

-   \[BUGFIX\] file\_upload missing back icon
    ([\#48065](https://forge.typo3.org/issues/48065))
-   \[BUGFIX\] Paste button missing in empty folders
    ([\#48202](https://forge.typo3.org/issues/48202))
-   \[BUGFIX\] TCA load regression in eid context
    ([\#47993](https://forge.typo3.org/issues/47993))
-   \[BUGFIX\] Empty subpart template if no data given
    ([\#47935](https://forge.typo3.org/issues/47935))
-   \[BUGFIX\] Fix double-stdWrapping of GIFBUILDER's TEXT object
    ([\#41487](https://forge.typo3.org/issues/41487))
-   \[BUGFIX\] BEfunc getProcessedValue doesn't show record title for
    “group” ([\#21410](https://forge.typo3.org/issues/21410))
-   \[BUGFIX\] Fix last line in table wizard
    ([\#16531](https://forge.typo3.org/issues/16531))
-   \[BUGFIX\]\[CONF\] Remove unused EM related settings
    ([\#48179](https://forge.typo3.org/issues/48179))
-   \[BUGFIX\] MailUtility::parseAddresses() returns @localhost on empty
    string ([\#48247](https://forge.typo3.org/issues/48247))
-   \[BUGFIX\] be\_users.userMods is too small to hold all modules
    ([\#16762](https://forge.typo3.org/issues/16762))
-   \[BUGFIX\] Fix start of identifier from /./ to /
    ([\#47705](https://forge.typo3.org/issues/47705))
-   \[BUGFIX\] Can not expand new collapsed IRRE record with RTE field
-   \[BUGFIX\] ProcessedFile is persisted in sys\_file as well
    ([\#47211](https://forge.typo3.org/issues/47211))
-   \[BUGFIX\] Cannot connect to the current database
    ([\#48138](https://forge.typo3.org/issues/48138))
-   \[TASK\] Improve method makeCategorizable to be used everywhere
    ([\#38972](https://forge.typo3.org/issues/38972))
-   \[BUGFIX\] Uppercase CSS tag selectors not supported in some mime
    types ([\#40501](https://forge.typo3.org/issues/40501))
-   \[BUGFIX\] Sorting not respected for backend layout dropdowns
    ([\#47688](https://forge.typo3.org/issues/47688))
-   \[BUGFIX\] max\_execution\_time check fails
    ([\#48095](https://forge.typo3.org/issues/48095))
-   \[BUGFIX\] Improvement of LanguageCacheClearer
    ([\#47912](https://forge.typo3.org/issues/47912))
-   \[BUGFIX\] Add support for float values to arrayExport
    ([\#48114](https://forge.typo3.org/issues/48114))
-   \[TASK\] Cleanup: Must use “self::” for local static member
    reference ([\#47925](https://forge.typo3.org/issues/47925))
-   \[TASK\] Must use “self::” for local static member reference
    ([\#47926](https://forge.typo3.org/issues/47926))
-   \[BUGFIX\] FormEngine background color and padding
    ([\#47894](https://forge.typo3.org/issues/47894))
-   \[BUGFIX\] Remove 1000 pixelx limitation for preview image
    ([\#47846](https://forge.typo3.org/issues/47846))
-   \[BUGFIX\] Label in list view is not escaped
    ([\#29409](https://forge.typo3.org/issues/29409))
-   \[TASK\] Update PEAR packages
    ([\#48027](https://forge.typo3.org/issues/48027))
-   \[TASK\] Use PHP lint to check for syntax errors on travis
-   \[BUGFIX\] TCA:Suggest wizard doesn't work for select with
    maxitems=1 ([\#23789](https://forge.typo3.org/issues/23789))
-   \[BUGFIX\] Clearing label through TS doesn't work
    ([\#43959](https://forge.typo3.org/issues/43959))
-   \[BUGFIX\] Don't preserve piVars in felogin links
    ([\#46829](https://forge.typo3.org/issues/46829))
-   \[BUGFIX\] Form email validation is case sensitive
    ([\#43924](https://forge.typo3.org/issues/43924))
-   \[BUGFIX\] Resolve asterisk in allowed tables for suggest wizard
    ([\#21588](https://forge.typo3.org/issues/21588))
-   \[BUGFIX\] Incorrect grouping of exclude fields in translated
    backend ([\#47839](https://forge.typo3.org/issues/47839))
-   \[BUGFIX\] Processed folder in a sub folder is shown
    ([\#47019](https://forge.typo3.org/issues/47019))
-   \[BUGFIX\] displayCond in flexforms broken
    ([\#47886](https://forge.typo3.org/issues/47886))
-   \[BUGFIX\] InlineSettings broken if extJs not loaded
    ([\#38879](https://forge.typo3.org/issues/38879))


