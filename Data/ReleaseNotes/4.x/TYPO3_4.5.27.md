Release Notes for TYPO3 4.5.27
==============================

This document contains information about TYPO3 version 4.5.27 which was
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

    c6f630951f285550d2d500558e51f1ad  blankpackage-4.5.27.tar.gz
    f0d832e9cc7c9598570e2f8243c936cc  blankpackage-4.5.27.zip
    c978c9a0e7c2ad88a091fe1486afd3b1  dummy-4.5.27.tar.gz
    be43136d7d481dc5565c54b71ec13e42  dummy-4.5.27.zip
    3a8eeb83aaddff805dedf8043a395b43  introductionpackage-4.5.27.tar.gz
    49a230a3c917b21bf9880f2f83e5a8d7  introductionpackage-4.5.27.zip
    e54c5069fbbee6f4601131dc94c6d4c3  typo3_src+dummy-4.5.27.zip
    6997b6e3dedad5852ae879762e95588c  typo3_src-4.5.27.tar.gz
    78813f29ad3c1d5f1299dc84cbf0e138  typo3_src-4.5.27.zip

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
[4.5.26](TYPO3_4.5.26 "wikilink"):

-   \[BUGFIX\] Fix last line in table wizard
    ([\#16531](https://forge.typo3.org/issues/16531))
-   \[BUGFIX\] be\_users.userMods is too small to hold all modules
    ([\#16762](https://forge.typo3.org/issues/16762))
-   \[BUGFIX\] Multi-table relationship not recognized in
    t3lib\_loadDBGroup ([\#34148](https://forge.typo3.org/issues/34148))
-   \[BUGFIX\] undefined variable imgExt
    ([\#34446](https://forge.typo3.org/issues/34446))
-   \[BUGFIX\] Sorting not respected for backend layout dropdowns
    ([\#47688](https://forge.typo3.org/issues/47688))
-   \[BUGFIX\] Wrong class in t3lib\_TCEforms\_Suggest
    ([\#48052](https://forge.typo3.org/issues/48052))
-   \[TASK\] Activate syntax check for PHP 5.4
-   \[TASK\] Activate travis to check for syntax errors
-   \[BUGFIX\] Fix SQL error in Livesearch with empty TCA sortby setting
    ([\#40816](https://forge.typo3.org/issues/40816))
-   \[BUGFIX\] Call to undefined function mime\_content\_type()
    ([\#47969](https://forge.typo3.org/issues/47969))
-   \[TASK\] Raise submodule pointer
-   \[BUGFIX\] Resolve asterisk in allowed tables for suggest wizard
    ([\#21588](https://forge.typo3.org/issues/21588))
-   \[BUGFIX\] Extension Security Report goes green if TER was never
    fetched ([\#39043](https://forge.typo3.org/issues/39043)) - reverted
    again

### extbase

-   \[BUGFIX\] Namespace usage -&gt; fatal compile error in PHP 5.2
    ([\#47978](https://forge.typo3.org/issues/47978))

<Category:ReleaseNotes/TYPO3_4.5.x> [Category:TYPO3
4.5](Category:TYPO3_4.5 "wikilink") <Category:2013>
