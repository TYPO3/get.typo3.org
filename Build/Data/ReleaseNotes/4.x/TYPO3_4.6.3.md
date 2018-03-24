Release Notes for TYPO3 4.6.3
=============================

This document contains information about TYPO3 version 4.6.3 which was
released on December 20th, 2011.

News
----

This release is a maintenance releases and contains bug fixes only.

Notes
-----

This release aims to fix one regressions that has been introduced with
the provious release:

-   [\#32625](https://forge.typo3.org/issues/32625): In the backend,
    custom stylesheets in the rich text editor have not been showing up
    anymore, due to a wrong file inclusion.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    8cb4359a1b369810525600b4c36e8653  blankpackage-4.6.3.tar.gz
    e94b966b185b060ff71ee5c89c7c8aa3  blankpackage-4.6.3.zip
    215dde1d3b477038a77a5d33ad906e78  dummy-4.6.3.tar.gz
    5e51e6e19002ed5660abf27ae4a70190  dummy-4.6.3.zip
    2a4d674d08c6e32fc9e0ce595cfafee6  introductionpackage-4.6.3.tar.gz
    fd951583a3538e96956f3b4c3f521526  introductionpackage-4.6.3.zip
    7db7de0e2f3e31fe325d012f7e518aab  typo3_src+dummy-4.6.3.zip
    652fc5278eebd7b955b863664134da8b  typo3_src-4.6.3.tar.gz
    ff34e2c46496549c65aef6ed9fa7cd84  typo3_src-4.6.3.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changelog
---------

-   \[RELEASE\] Release of TYPO3 4.6.3
-   \[BUGFIX\] Add SQL-comparator &lt;&gt; to SQL parser
    ([\#32626](https://forge.typo3.org/issues/32626))
-   \[BUGFIX\] Invalid query part on menu rendering
    ([\#31622](https://forge.typo3.org/issues/31622))
-   \[BUGFIX\] Fatal error during install process
    ([\#32666](https://forge.typo3.org/issues/32666))
-   \[BUGFIX\] sessionTimeout for BE does not work
    ([\#32274](https://forge.typo3.org/issues/32274))
-   \[BUGFIX\] Checkbox-array space
    ([\#32088](https://forge.typo3.org/issues/32088))
-   \[BUGFIX\] @charset must be lowercase in CSS
    ([\#32163](https://forge.typo3.org/issues/32163))
-   \[BUGFIX\] Log password attempt with empty password
    ([\#18176](https://forge.typo3.org/issues/18176))
-   \[BUGFIX\] Fatal error when exporting from root
    ([\#31350](https://forge.typo3.org/issues/31350))
-   \[BUGFIX\] Warnings in BE when using “Update reference index”
    ([\#21590](https://forge.typo3.org/issues/21590))
-   \[BUGFIX\] Fix path check for custom RTE styles
    ([\#32625](https://forge.typo3.org/issues/32625))
-   \[BUGFIX\]\[reports\] Missing check for SOAP extension
    ([\#11806](https://forge.typo3.org/issues/11806))
-   \[BUGFIX\] Ambiguous XCLASS naming
    tx\_em\_Connection\_ExtDirectServer
    ([\#32596](https://forge.typo3.org/issues/32596))
-   \[BUGFIX\] Add check for salted default admin password
    ([\#31397](https://forge.typo3.org/issues/31397))
-   \[BUGFIX\] Multiple values not displayed for simple items lists
    ([\#31374](https://forge.typo3.org/issues/31374))


