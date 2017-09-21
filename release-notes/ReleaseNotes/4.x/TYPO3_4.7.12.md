Release Notes for TYPO3 4.7.12
==============================

This document contains information about TYPO3 version 4.7.12 which was
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

    a9121ee040dfe42e5d5093818232677b  blankpackage-4.7.12.tar.gz
    abfa596319d152ad3e75c3d5ad8f9b7c  blankpackage-4.7.12.zip
    50d88405d4a33b4099bfdcdb0eff7a17  dummy-4.7.12.tar.gz
    5fb494fdb3ac7eb714f368086544c5a6  dummy-4.7.12.zip
    0434972405ed502c162a52d8a0a540ab  typo3_src+dummy-4.7.12.zip
    7178a9188d5d8bdca9ad38b3a31ba046  typo3_src-4.7.12.tar.gz
    447008208e851bcae3b3d65b901a715a  typo3_src-4.7.12.zip

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

Here is a list of what was fixed since
[4.7.11](TYPO3_4.7.11 "wikilink"):

-   \[BUGFIX\] Fix last line in table wizard
    ([\#16531](https://forge.typo3.org/issues/16531))
-   \[BUGFIX\] be\_users.userMods is too small to hold all modules
    ([\#16762](https://forge.typo3.org/issues/16762))
-   \[BUGFIX\] Uppercase CSS tag selectors not supported in some mime
    types ([\#40501](https://forge.typo3.org/issues/40501))
-   \[BUGFIX\] Sorting not respected for backend layout dropdowns
    ([\#47688](https://forge.typo3.org/issues/47688))
-   \[BUGFIX\] Improvement of LanguageCacheClearer
    ([\#47912](https://forge.typo3.org/issues/47912))
-   \[BUGFIX\] Wrong class in t3lib\_TCEforms\_Suggest
    ([\#48052](https://forge.typo3.org/issues/48052))
-   \[TASK\] Update PEAR packages
    ([\#48027](https://forge.typo3.org/issues/48027))
-   \[TASK\] Use PHP lint to check for syntax errors on travis
-   \[BUGFIX\] Saving a scheduler task throws fatal error
    ([\#48022](https://forge.typo3.org/issues/48022))
-   \[BUGFIX\] Clearing label through TS doesn't work
    ([\#43959](https://forge.typo3.org/issues/43959))
-   \[BUGFIX\] Don't preserve piVars in felogin links
    ([\#46829](https://forge.typo3.org/issues/46829))
-   \[BUGFIX\] Extension Security Report goes green if TER was never
    fetched ([\#39043](https://forge.typo3.org/issues/39043))
-   \[BUGFIX\] Resolve asterisk in allowed tables for suggest wizard
    ([\#21588](https://forge.typo3.org/issues/21588))

<Category:ReleaseNotes/TYPO3_4.7.x> [Category:TYPO3
4.7](Category:TYPO3_4.7 "wikilink") <Category:2013>
