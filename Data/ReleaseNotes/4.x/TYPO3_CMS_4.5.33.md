Release Notes for TYPO3 CMS 4.5.33
==================================

This document contains information about TYPO3 CMS 4.5.33 which was
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

    4e30179e08ba3452dbbef87bba8d4378  blankpackage-4.5.33.tar.gz
    14c1e33abb20ff417ffa5a586a273936  blankpackage-4.5.33.zip
    f776c236dc8cc3d624c0dcc4e7ca4715  dummy-4.5.33.tar.gz
    6ff99a8602d34eb297118d20e3b000a2  dummy-4.5.33.zip
    445446bf2fc4d71aaff22bd6bffe023f  introductionpackage-4.5.33.tar.gz
    c43f99baaf44605b2290d67b6d9b5e78  introductionpackage-4.5.33.zip
    d4960701a12010e117a824ac3fc7a5ad  typo3_src+dummy-4.5.33.zip
    a715a4660e0128bf4bbe7b8de9ea346d  typo3_src-4.5.33.tar.gz
    e31714cef66460f946b1ef845d29aef2  typo3_src-4.5.33.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.5.32](TYPO3_4.5.32 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.5.33
-   \[TASK\] Updates prototype and scriptaculous, fixing IE9+ issues
    ([\#51768](https://forge.typo3.org/issues/51768))
-   \[BUGFIX\] Use validEmail() instead of deprecated checkEmail()
    ([\#57934](https://forge.typo3.org/issues/57934))
-   \[BUGFIX\] SoftReferenceIndex typolink lacks support for title
    attributes ([\#56580](https://forge.typo3.org/issues/56580))
-   \[TASK\] Integrate default README.txt
    ([\#57656](https://forge.typo3.org/issues/57656))
-   \[SECURITY\] Prevent XSS in scheduler form
    ([\#57603](https://forge.typo3.org/issues/57603))
-   \[BUGFIX\] Revert “\[TASK\] Use a 401 header if login is not
    successful” ([\#55966](https://forge.typo3.org/issues/55966))
-   \[BUGFIX\] felogin reset password links not clickable
    ([\#23984](https://forge.typo3.org/issues/23984))
-   \[BUGFIX\] Namespace usage in test
    ([\#55811](https://forge.typo3.org/issues/55811))
-   \[BUGFIX\] CSV-Download not working in IE and HTTPS backend
    ([\#16491](https://forge.typo3.org/issues/16491))
-   \[BUGFIX\] DocumentTemplate class inserts inDocStyles twice
    ([\#55458](https://forge.typo3.org/issues/55458))
-   \[BUGFIX\] Invalid constant in the domain redirect function
    ([\#55350](https://forge.typo3.org/issues/55350))
-   \[BUGFIX\] Fix PHP fatal error in be.tableList view helper
    ([\#54748](https://forge.typo3.org/issues/54748))
-   \[TASK\] Change list view delete icon if record is deleted in WS
    ([\#52554](https://forge.typo3.org/issues/52554))
-   \[BUGFIX\] Display relations' titles when TCA label field is type
    inline ([\#52133](https://forge.typo3.org/issues/52133))
-   \[BUGFIX\] Cleanly unset cookies on login in cookie-check
    ([\#53818](https://forge.typo3.org/issues/53818))
-   \[TASK\] Set TYPO3 version to 4.5.33-dev


