Release Notes for TYPO3 4.7.15
==============================

This document contains information about TYPO3 CMS 4.7.15 which was
released on September 12th, 2013.

News
----

This release is a bug fix release.

Notes
-----

This is part of a combined release of TYPO3 CMS 4.5.30, 4.7.15, 6.0.10
and 6.1.5.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    67812b6a9c4379096fa96e902fd61123  blankpackage-4.7.15.tar.gz
    6c2a4c0f7f8591b4d5ce8a5ebccc3225  blankpackage-4.7.15.zip
    d862b37fbaf81f066aa94f5f8748dfbd  dummy-4.7.15.tar.gz
    f9f0158da38e13340029229ccf0dacc7  dummy-4.7.15.zip
    658da63205cc83f1232b0db4d416573e  typo3_src+dummy-4.7.15.zip
    7c79e4c20308e3c780d228483c833cb3  typo3_src-4.7.15.tar.gz
    6ff214be69c91eaf3a9c1997311f3aa0  typo3_src-4.7.15.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.7.14](TYPO3_4.7.14 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.7.15
-   \[BUGFIX\] Backend Layout Grid Wizard not fully visible in Mac
    Firefox 22 ([\#50424](https://forge.typo3.org/issues/50424))
-   \[BUGFIX\] Exclude empty passwords from password hashing check
    ([\#36244](https://forge.typo3.org/issues/36244))
-   \[BUGFIX\] Escape title tag of image links
    ([\#50760](https://forge.typo3.org/issues/50760))
-   \[BUGFIX\] Page tree filtering broken in IE7 & IE8
    ([\#25327](https://forge.typo3.org/issues/25327))
-   \[BUGFIX\] TCA: subtypes\_addlist not processed
    ([\#30636](https://forge.typo3.org/issues/30636))
-   \[BUGFIX\] Avoid usage of subheader in mailform
    ([\#46094](https://forge.typo3.org/issues/46094))
-   \[BUGFIX\] number\_format() expects parameter 1 to be double
    ([\#50868](https://forge.typo3.org/issues/50868))
-   \[BUGFIX\] MySQL: Use ENGINE (not TYPE) for storage-engine
    ([\#50466](https://forge.typo3.org/issues/50466))
-   \[BUGFIX\] Syntax error in class.tx\_coreupdates\_t3skin.php
    ([\#35274](https://forge.typo3.org/issues/35274))
-   \[BUGFIX\] Fix fatal error in extension manager
    ([\#46642](https://forge.typo3.org/issues/46642))
-   \[TASK\] TagBuilders render() method PhpDoc return tag fixed
    ([\#50645](https://forge.typo3.org/issues/50645))
-   \[TASK\] Provide information about import action in TCEmain to hooks
    ([\#36031](https://forge.typo3.org/issues/36031))
-   \[BUGFIX\] RTE wizard can't “save document and view page”
    ([\#43631](https://forge.typo3.org/issues/43631))
-   \[TASK\] Set TYPO3 version to 4.7.15-dev

<Category:ReleaseNotes/TYPO3_4.7.x> [Category:TYPO3
4.7](Category:TYPO3_4.7 "wikilink") <Category:2013>
