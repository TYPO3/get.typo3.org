Release Notes for TYPO3 4.4.13
==============================

This document contains information about TYPO3 version 4.4.13 which was
released on January 24th 2012.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    c80c43ba3e125d7fb5048223b05c5f65  blankpackage-4.4.13.tar.gz
    00ec57fe3b3040c639db080b44650fff  blankpackage-4.4.13.zip
    ac6228a8705df1368407eba2ff9fb21f  dummy-4.4.13.tar.gz
    abc4261a9a4edcca1c48ea9693e08eb9  dummy-4.4.13.zip
    c4647292d6f1f7d2abb3d43ac74d0f31  typo3_src+dummy-4.4.13.zip
    fceca97a26f9111bc028a4c58ecfaacd  typo3_src-4.4.13.tar.gz
    31163571053f5ce75bcf4df7fd5887fa  typo3_src-4.4.13.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since 4.4.12:

-   \[RELEASE\] Release of TYPO3 4.4.13
-   \[BUGFIX\] md5.js fails with non-ascii-characters
    ([\#22328](https://forge.typo3.org/issues/22328))
-   \[BUGFIX\] alt\_doc.php uses deleted alternative page languages for
    translations ([\#31379](https://forge.typo3.org/issues/31379))
-   \[BUGFIX\] Add SQL-comparator &lt;&gt; to SQL parser
    ([\#32626](https://forge.typo3.org/issues/32626))
-   \[BUGFIX\] Invalid query part on menu rendering
    ([\#31622](https://forge.typo3.org/issues/31622))
-   \[BUGFIX\] @charset must be lowercase in CSS
    ([\#32163](https://forge.typo3.org/issues/32163))
-   \[BUGFIX\] Random miscalculations in ImageTTFBBox
    ([\#21054](https://forge.typo3.org/issues/21054))
-   \[BUGFIX\] Localization: Editing in TCEforms shows unstyled original
    value ([\#28012](https://forge.typo3.org/issues/28012))
-   \[BUGFIX\] Use trimExplode() for pageOverlayFields
    ([\#28916](https://forge.typo3.org/issues/28916))
-   \[BUGFIX\]\[SECURITY\] XSS vulnerability in BE-User Admin module
    ([\#32040](https://forge.typo3.org/issues/32040))

<Category:ReleaseNotes/TYPO3_4.4.x> [Category:TYPO3
4.4](Category:TYPO3_4.4 "wikilink") <Category:2012>
