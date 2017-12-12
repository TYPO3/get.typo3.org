Release Notes for TYPO3 CMS 4.5.30
==================================

This document contains information about TYPO3 CMS 4.5.30 which was
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

    3f97c578e8701ae1bbcd546e021668c5  blankpackage-4.5.30.tar.gz
    1a39d28ad0b2a16f43f5f3c699255d36  blankpackage-4.5.30.zip
    7a5d905713d1f5115c47f35d54e973c8  dummy-4.5.30.tar.gz
    db975ea6016a8f69b2b5483b3d13d90c  dummy-4.5.30.zip
    ee8af6ff3375bbffa6071c062545e0f8  introductionpackage-4.5.30.tar.gz
    0ab7ef2680a2d3244975b04b345697cd  introductionpackage-4.5.30.zip
    af93220f0d84f2ab29469dea432b647e  typo3_src+dummy-4.5.30.zip
    7cee9cec79f17015fce178ea18bff0c4  typo3_src-4.5.30.tar.gz
    cd1efb804d82c879fa034e5ca35b4b59  typo3_src-4.5.30.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.5.29](TYPO3_4.5.29 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.5.30
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
-   \[BUGFIX\] Handle file\_references properly in
    t3lib\_befunc::thumbCode
    ([\#31295](https://forge.typo3.org/issues/31295))
-   \[BUGFIX\] number\_format() expects parameter 1 to be double
    ([\#50868](https://forge.typo3.org/issues/50868))
-   \[BUGFIX\] MySQL: Use ENGINE (not TYPE) for storage-engine
    ([\#50466](https://forge.typo3.org/issues/50466))
-   \[BUGFIX\] Syntax error in class.tx\_coreupdates\_t3skin.php
    ([\#35274](https://forge.typo3.org/issues/35274))
-   \[BUGFIX\] Fix fatal error in extension manager
    ([\#46642](https://forge.typo3.org/issues/46642))
-   \[TASK\] Provide information about import action in TCEmain to hooks
    ([\#36031](https://forge.typo3.org/issues/36031))
-   \[TASK\] Set TYPO3 version to 4.5.30-dev


