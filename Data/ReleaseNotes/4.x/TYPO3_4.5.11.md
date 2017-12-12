Release Notes for TYPO3 4.5.11
==============================

This document contains information about TYPO3 version 4.5.11 which was
released on January 24th 2012.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    f068d91f36c0a17af143401962590c42  blankpackage-4.5.11.tar.gz
    318fa558ea9995a1e5c36eef2a1d1b4b  blankpackage-4.5.11.zip
    7a4e76aecadff51d655da028a2bbf534  dummy-4.5.11.tar.gz
    2953c34e60a6342be2869b5d5cc7fec1  dummy-4.5.11.zip
    3309ea247b9713dcf15fec2f83f90ee1  introductionpackage-4.5.11.tar.gz
    d4759099519b9d53eb98cfaf8b36a3c8  introductionpackage-4.5.11.zip
    336676434cb56d26b8c828fa633ce76b  typo3_src+dummy-4.5.11.zip
    0b4f2d4a85c4676306fc1b9aa31d8db1  typo3_src-4.5.11.tar.gz
    d3b51f146cccaf2ab0e6a5c4a26fb3d8  typo3_src-4.5.11.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.5.10](TYPO3_4.5.10 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.5.11
-   \[TASK\] Raise submodule pointer
-   \[BUGFIX\] typolink prepends wrong domain when using url scheme
    ([\#31771](https://forge.typo3.org/issues/31771))
-   \[BUGFIX\] htmlArea RTE: magic image maxWidth is not working as
    expected ([\#32301](https://forge.typo3.org/issues/32301))
-   \[BUGFIX\] htmlArea RTE : Adding link problem with IE
    ([\#31763](https://forge.typo3.org/issues/31763))
-   \[BUGFIX\] TCEmain::clear\_cacheCmd relies on active BE\_USER
    ([\#28007](https://forge.typo3.org/issues/28007))
-   \[BUGFIX\] md5.js fails with non-ascii-characters
    ([\#22328](https://forge.typo3.org/issues/22328))
-   \[BUGFIX\] HTML entity   is inserted before and after inline element
    ([\#32263](https://forge.typo3.org/issues/32263))
-   \[BUGFIX\] Module menu link wrap
    ([\#32448](https://forge.typo3.org/issues/32448))
-   \[BUGFIX\] alt\_doc.php uses deleted alternative page languages for
    translations ([\#31379](https://forge.typo3.org/issues/31379))
-   \[BUGFIX\] Vague error message in t3lib\_div
    ([\#18545](https://forge.typo3.org/issues/18545))
-   \[BUGFIX\] Typo in Install Tool
    ([\#32970](https://forge.typo3.org/issues/32970))
-   \[TASK\] Scheduler: Add “Add Task” button to header
    ([\#32753](https://forge.typo3.org/issues/32753))
-   \[BUGFIX\] Reports are called twice
    ([\#32768](https://forge.typo3.org/issues/32768))


