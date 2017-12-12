Release Notes for TYPO3 4.6.4
=============================

This document contains information about TYPO3 version 4.6.4 which was
released on January 24th 2012.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    a456bdd0d327ce6c2b272a89c1fd0353  blankpackage-4.6.4.tar.gz
    a63523135d0a87ca7bf5bf9efee0dac6  blankpackage-4.6.4.zip
    46de97455440ee6cc1735c6e04c6b3ef  dummy-4.6.4.tar.gz
    74d57c428c82ce00a84265c704b4edbd  dummy-4.6.4.zip
    b1e88027e1057034349e71f059684a7b  introductionpackage-4.6.4.tar.gz
    4ada36f0b1405d7543b16603cd630a14  introductionpackage-4.6.4.zip
    e95b94acb77bfcf024071cfc73d9b1ce  typo3_src+dummy-4.6.4.zip
    2ad44ed21afe3c168f73db7c6fc83c3b  typo3_src-4.6.4.tar.gz
    66c23b90f6169e4eb33fa3d4fef59921  typo3_src-4.6.4.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since [4.6.3](TYPO3_4.6.3 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.6.4
-   \[BUGFIX\] typolink prepends wrong domain when using url scheme
    ([\#31771](https://forge.typo3.org/issues/31771))
-   \[BUGFIX\] Regression in language handling
    ([\#33227](https://forge.typo3.org/issues/33227))
-   \[BUGFIX\] htmlArea RTE: magic image maxWidth is not working as
    expected ([\#32301](https://forge.typo3.org/issues/32301))
-   \[BUGFIX\] htmlArea RTE : Adding link problem with IE
    ([\#31763](https://forge.typo3.org/issues/31763))
-   \[BUGFIX\] PHP warning if open\_basedir is enabled
    ([\#32109](https://forge.typo3.org/issues/32109))
-   \[BUGFIX\] TCEmain::clear\_cacheCmd relies on active BE\_USER
    ([\#28007](https://forge.typo3.org/issues/28007))
-   \[BUGFIX\] MENU special = updated does not work anymore
    ([\#32374](https://forge.typo3.org/issues/32374))
-   \[BUGFIX\] Usage of custom caching backends
    ([\#32986](https://forge.typo3.org/issues/32986))
-   \[BUGFIX\] HTML entity   is inserted before and after inline element
    ([\#32263](https://forge.typo3.org/issues/32263))
-   \[BUGFIX\] Module menu link wrap
    ([\#32448](https://forge.typo3.org/issues/32448))
-   \[BUGFIX\] ENABLE\_INSTALL\_TOOL does not respect fileCreateMask
    ([\#21740](https://forge.typo3.org/issues/21740))
-   \[BUGFIX\] Fix permissions of downloaded translations into l10n
    folder ([\#31964](https://forge.typo3.org/issues/31964))
-   \[BUGFIX\] Vague error message in t3lib\_div
    ([\#18545](https://forge.typo3.org/issues/18545))
-   \[BUGFIX\] Link to mounted shortcut page lacks &MP parameter
    ([\#32938](https://forge.typo3.org/issues/32938))
-   \[BUGFIX\] Typo in Install Tool
    ([\#32970](https://forge.typo3.org/issues/32970))
-   \[TASK\] Scheduler: Add “Add Task” button to header
    ([\#32753](https://forge.typo3.org/issues/32753))
-   \[BUGFIX\] Reports are called twice
    ([\#32768](https://forge.typo3.org/issues/32768))
-   \[BUGFIX\] locallangXMLOverride is broken since the switch to XLIFF
    ([\#32573](https://forge.typo3.org/issues/32573))


