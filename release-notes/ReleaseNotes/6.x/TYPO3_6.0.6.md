Release Notes for TYPO3 6.0.6
=============================

This document contains information about TYPO3 version 6.0.6 which was
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

    7ea3848c0969b976e7d4119ac083eb79  blankpackage-6.0.6.tar.gz
    48478cc0afa05b6fe747bd3c7c322820  blankpackage-6.0.6.zip
    740c85eb3842885db442a6cf92ca1d1f  dummy-6.0.6.tar.gz
    3458e7065c637851cb12b8eb71960797  dummy-6.0.6.zip
    bd5900bfd6129d0b386baf39238f6242  typo3_src+dummy-6.0.6.zip
    9a46f36a0f16ea3249bcd875e8aed299  typo3_src-6.0.6.tar.gz
    593197dfd9e724358433d984ce2d344e  typo3_src-6.0.6.zip

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

Here is a list of what was fixed since [6.0.5](TYPO3_6.0.5 "wikilink"):

-   \[BUGFIX\] file\_upload missing back icon
    ([\#48065](https://forge.typo3.org/issues/48065))
-   \[BUGFIX\] Paste button missing in empty folders
    ([\#48202](https://forge.typo3.org/issues/48202))
-   \[BUGFIX\] Processed folder in a sub folder is shown
    ([\#47019](https://forge.typo3.org/issues/47019))
-   \[BUGFIX\] BEfunc getProcessedValue doesn't show record title for
    “group” ([\#21410](https://forge.typo3.org/issues/21410))
-   \[BUGFIX\] Fix double-stdWrapping of GIFBUILDER's TEXT object
    ([\#41487](https://forge.typo3.org/issues/41487))
-   \[BUGFIX\] Empty subpart template if no data given
    ([\#47935](https://forge.typo3.org/issues/47935))
-   \[BUGFIX\] Fix last line in table wizard
    ([\#16531](https://forge.typo3.org/issues/16531))
-   \[BUGFIX\]\[CONF\] Remove unused EM related settings
    ([\#48179](https://forge.typo3.org/issues/48179))
-   \[BUGFIX\] be\_users.userMods is too small to hold all modules
    ([\#16762](https://forge.typo3.org/issues/16762))
-   \[BUGFIX\] Can not expand new collapsed IRRE record with RTE field
-   \[BUGFIX\] Fix start of identifier from /./ to /
    ([\#47705](https://forge.typo3.org/issues/47705))
-   \[BUGFIX\] ProcessedFile is persisted in sys\_file as well
    ([\#47211](https://forge.typo3.org/issues/47211))
-   \[BUGFIX\] Uppercase CSS tag selectors not supported in some mime
    types ([\#40501](https://forge.typo3.org/issues/40501))
-   \[BUGFIX\] Sorting not respected for backend layout dropdowns
    ([\#47688](https://forge.typo3.org/issues/47688))
-   \[BUGFIX\] Improvement of LanguageCacheClearer
    ([\#47912](https://forge.typo3.org/issues/47912))
-   \[BUGFIX\] Add support for float values to arrayExport
    ([\#48114](https://forge.typo3.org/issues/48114))
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
-   \[BUGFIX\] Context menu for offline storages raises exception
    ([\#46551](https://forge.typo3.org/issues/46551))
-   \[TASK\] Set TYPO3 version to 6.0.6-dev

<Category:ReleaseNotes/TYPO3_6.0.x> [Category:TYPO3
6.0](Category:TYPO3_6.0 "wikilink") <Category:2013>
