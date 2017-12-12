Release Notes for TYPO3 CMS 4.7.18
==================================

This document contains information about TYPO3 CMS 4.7.18 which was
released on April 16th, 2014.

News
----

This release is a bug fix release.

Notes
-----

This is part of a combined release of TYPO3 CMS 4.5.33, 4.7.18, 6.0.13,
6.1.8 and 6.2.1.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    07ccee6a47a01dcfec193709359e0c66  blankpackage-4.7.18.tar.gz
    9e64061c574ed5c7c392c466a844417d  blankpackage-4.7.18.zip
    1bb54707160ae07852c7bc8744035944  dummy-4.7.18.tar.gz
    d9426ed701a302569b47cad6cb4dc23e  dummy-4.7.18.zip
    8742c1f971fb369d48a1af1e65e1d887  typo3_src+dummy-4.7.18.zip
    52055d9234adb8a0c49d5b4110c9018a  typo3_src-4.7.18.tar.gz
    94006175a8bcbe0dbe3bb36d6f3d5e1b  typo3_src-4.7.18.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.7.17](TYPO3_4.7.17 "wikilink"):

-   \[TASK\] Updates prototype and scriptaculous, fixing IE9+ issues
    ([\#51768](https://forge.typo3.org/issues/51768))
-   \[BUGFIX\] SoftReferenceIndex typolink lacks support for title
    attributes ([\#56580](https://forge.typo3.org/issues/56580))
-   \[TASK\] Integrate default README.txt
    ([\#57656](https://forge.typo3.org/issues/57656))
-   \[SECURITY\] Prevent XSS in scheduler form
    ([\#57603](https://forge.typo3.org/issues/57603))
-   \[BUGFIX\] felogin reset password links not clickable
    ([\#23984](https://forge.typo3.org/issues/23984))
-   \[TASK\] Execute lint in parallel
-   \[BUGFIX\] Namespace usage in test
    ([\#55811](https://forge.typo3.org/issues/55811))
-   \[BUGFIX\] CSV-Download not working in IE and HTTPS backend
    ([\#16491](https://forge.typo3.org/issues/16491))
-   \[TASK\] Change phpunit repository url for travis
    ([\#55366](https://forge.typo3.org/issues/55366))
-   \[TASK\] Optimize speed for instantiating class with arguments
    ([\#53682](https://forge.typo3.org/issues/53682))
-   \[BUGFIX\] Fix PHP fatal error in be.tableList view helper
    ([\#54748](https://forge.typo3.org/issues/54748))
-   \[BUGFIX\] use search word(s) for ordering search results (again)
    ([\#38767](https://forge.typo3.org/issues/38767))
-   \[BUGFIX\] Display relations' titles when TCA label field is type
    inline ([\#52133](https://forge.typo3.org/issues/52133))
-   \[TASK\] Fix travis builds
    ([\#54369](https://forge.typo3.org/issues/54369))
-   \[BUGFIX\] Cleanly unset cookies on login in cookie-check
    ([\#53818](https://forge.typo3.org/issues/53818))

<Category:ReleaseNotes/TYPO3_4.7.x> [Category:TYPO3
4.7](Category:TYPO3_4.7 "wikilink") <Category:2014>
