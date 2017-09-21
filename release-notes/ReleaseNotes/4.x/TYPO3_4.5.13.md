Release Notes for TYPO3 4.5.13
==============================

This document contains information about TYPO3 version 4.5.13 which was
released on March 13th 2012.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    b1a4d6cd49d46fc09d811f243783387a  blankpackage-4.5.13.tar.gz
    02cc49418b7b9df1ba5fde38d743ee11  blankpackage-4.5.13.zip
    24dca99ae0c86644e66dcc898e175dec  dummy-4.5.13.tar.gz
    10bcdd6fce3e4b76ad5ec9fb545abbe6  dummy-4.5.13.zip
    6779c7bd4fa59cd5c2533da7e0695cb0  introductionpackage-4.5.13.tar.gz
    9c6a42026ac81d164b97a51c04e0aa42  introductionpackage-4.5.13.zip
    8475ccc493b0913b9581013221c086c9  typo3_src+dummy-4.5.13.zip
    e2895177eab7091ba217c4a9e51ccfaa  typo3_src-4.5.13.tar.gz
    1a65e2e19ed440a3ad0a20907d0e5ae2  typo3_src-4.5.13.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.5.12](TYPO3_4.5.12 "wikilink"):

-   \[RELEASE\] Release of TYPO3 4.5.13
-   \[BUGFIX\] Mail sending fails with quoted&encoded e-mail addresses
    ([\#34526](https://forge.typo3.org/issues/34526))
-   \[BUGFIX\] RTE in frontend with IE9: Use IE8 standards mode (TYPO3
    4.5) ([\#34100](https://forge.typo3.org/issues/34100))
-   \[BUGFIX\] Better condition in versionOL of t3lib\_tstemplate
    ([\#31139](https://forge.typo3.org/issues/31139))
-   \[BUGFIX\] No content in workspace preview when using
    select.selectFields
    ([\#17284](https://forge.typo3.org/issues/17284))
-   \[BUGFIX\] t3lib\_BEfunc::getViewDomain() returns wrong or no domain
    ([\#30892](https://forge.typo3.org/issues/30892))
-   \[TASK\] Invalid SQL and bad code in tslib\_fe
    ([\#32159](https://forge.typo3.org/issues/32159))
-   \[BUGFIX\] Invalid “unequal”-statement and string-quoting in SQL
    ([\#32161](https://forge.typo3.org/issues/32161))
-   \[BUGFIX\] Livesearch does not find all pages
    ([\#29086](https://forge.typo3.org/issues/29086))
-   \[BUGFIX\] \*IFSUB ignores l18n\_cfg field
    ([\#19925](https://forge.typo3.org/issues/19925))
-   \[TASK\] Change typo3.com to typo3.org
    ([\#34441](https://forge.typo3.org/issues/34441))
-   \[TASK\] EM: make pop-up window use full screen
    ([\#29585](https://forge.typo3.org/issues/29585))
-   \[BUGFIX\] Unset stdWrap of select.pidInList
    ([\#28526](https://forge.typo3.org/issues/28526))
-   \[BUGFIX\] Skip t3lib\_divTest::fixPermissionsSetsGroup on MacOS
    ([\#28017](https://forge.typo3.org/issues/28017))
-   \[BUGFIX\] Localization of child records fails when using MM type
    relations ([\#25131](https://forge.typo3.org/issues/25131))
-   \[BUGFIX\] Warnings in tcemain on iterating over unset columns
    ([\#32467](https://forge.typo3.org/issues/32467))
-   \[BUGFIX\] Translated mailform should use localized email
    ([\#17061](https://forge.typo3.org/issues/17061))
-   \[BUGFIX\] process\_datamap doesn't handle existing versions by
    itself ([\#32780](https://forge.typo3.org/issues/32780))
-   \[BUGFIX\] getSingleField\_typeFlex doesn't respect TSconfig
    settings ([\#29019](https://forge.typo3.org/issues/29019))
-   \[BUGFIX\] No image generation with PHP-SAFE\_MODE (GM/IM)
    ([\#24369](https://forge.typo3.org/issues/24369))
-   \[BUGFIX\] Send no-cache headers in t3lib\_userauth
    ([\#24125](https://forge.typo3.org/issues/24125))
-   \[BUGFIX\] RTE: Inserting a table is broken
    ([\#34634](https://forge.typo3.org/issues/34634))
-   \[BUGFIX\] Error when editing a record with
    additionalPreviewLanguage and an deleted l18n\_parent
    ([\#17910](https://forge.typo3.org/issues/17910))
-   \[BUGFIX\] Images from TER hosters break SSL
    ([\#34203](https://forge.typo3.org/issues/34203))
-   \[BUGFIX\] flock() calls in TYPO3 prevent NFS hosting
    ([\#31460](https://forge.typo3.org/issues/31460))
-   \[TASK\] Update copyright year to 2012
    ([\#34600](https://forge.typo3.org/issues/34600))
-   \[BUGFIX\] cmpIPv4: prevent E\_NOTICE, cleanup compare, testcases
    ([\#27230](https://forge.typo3.org/issues/27230))

### version

-   \[TASK\] Update to version 4.5.13
-   \[BUGFIX\] Nested IRRE elements are not removed
    ([\#34556](https://forge.typo3.org/issues/34556))

<Category:ReleaseNotes/TYPO3_4.5.x> [Category:TYPO3
4.5](Category:TYPO3_4.5 "wikilink") <Category:2012>
