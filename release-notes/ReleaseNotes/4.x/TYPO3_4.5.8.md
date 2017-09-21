Release Notes for TYPO3 4.5.8
=============================

This document contains information about TYPO3 version 4.5.8 which was
released on November 22th 2011.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    d1bcea6a7c3dca2a027e799bbab3654d  blankpackage-4.5.8.tar.gz
    96b38edb285f9e02afe0c06ad9cc017a  blankpackage-4.5.8.zip
    ef58c04f9a596b76f20f4fc7c792d1c8  dummy-4.5.8.tar.gz
    eeb2b95bb0eaeebf75f5a23acdeb3f70  dummy-4.5.8.zip
    7d4c1dfb9629bb96b3bbcff85abb091b  introductionpackage-4.5.8.tar.gz
    2a56f897ef7a693ba455505fb737ee3a  introductionpackage-4.5.8.zip
    c58e09d73dc3166528682a64f6058744  typo3_src+dummy-4.5.8.zip
    e6e77e6407ae3f05981a7a973c078846  typo3_src-4.5.8.tar.gz
    c8794bc22e080d7ef9a9c7f1a1bc1bec  typo3_src-4.5.8.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changelog
---------

### DBAL

-   \[TASK\] Update ADOdb library to version 5.14
    ([\#31486](https://forge.typo3.org/issues/31486))
-   \[TASK\]\[!!!\] Replaces die() calls with RuntimeException
    ([\#31826](https://forge.typo3.org/issues/31826))

### Other Bugs/Tasks

-   \[BUGFIX\] Error in the pageNotFound\_handling with USER\_FUNCTION
    ([\#31839](https://forge.typo3.org/issues/31839))
-   \[BUGFIX\] Vimeo mediawizardprovider needs new syntax
    ([\#31661](https://forge.typo3.org/issues/31661))
-   \[BUGFIX\] magic\_quotes\_gpc does not exist anymore in PHP 5.4
    ([\#30083](https://forge.typo3.org/issues/30083))
-   \[BUGFIX\] Multiple values not displayed for simple items lists
    ([\#31374](https://forge.typo3.org/issues/31374))
-   \[BUGFIX\] Error after hide/show element in list module
    ([\#20598](https://forge.typo3.org/issues/20598))
-   \[BUGFIX\] RTE doesn't allow to create links around images in IE8
    ([\#30631](https://forge.typo3.org/issues/30631))
-   \[BUGFIX\] Recycler: Wrong placed brackets
    ([\#28835](https://forge.typo3.org/issues/28835))
-   \[BUGFIX\] Live search does not find all tables
    ([\#31760](https://forge.typo3.org/issues/31760))
-   \[BUGFIX\] Extension configuration of saltedpasswords broken
    ([\#31501](https://forge.typo3.org/issues/31501))
-   \[BUGFIX\] Deprecation warning with disabled ImageMagick
    ([\#31596](https://forge.typo3.org/issues/31596))
-   \[BUGFIX\] Disambiguate labels in exclude fields list
    ([\#25236](https://forge.typo3.org/issues/25236))
-   \[TASK\] Add missing tslib\_content\_abstract::getContentObject()
    ([\#30994](https://forge.typo3.org/issues/30994))
-   \[BUGFIX\] Options checkboxes are hidden in BE admin user form
    ([\#30492](https://forge.typo3.org/issues/30492))
-   \[BUGFIX\] Fix typo in class.t3lib\_div.php
    ([\#26351](https://forge.typo3.org/issues/26351))
-   \[BUGFIX\] Preview message causes javascript errors
    ([\#30897](https://forge.typo3.org/issues/30897))
-   \[BUGFIX\] Install tool stays open if ENABLE\_INSTALL\_TOOL is not
    writable ([\#29674](https://forge.typo3.org/issues/29674))
-   \[BUGFIX\] EM: Confusing error message when uploading an extension
    to TER that is not registered
    ([\#31309](https://forge.typo3.org/issues/31309))
-   \[CLEANUP\] Remove code duplication in saltedpasswords
    ([\#29157](https://forge.typo3.org/issues/29157))
-   \[BUGFIX\] showAccessRestrictedPages doesn't replace links to
    restricted subpages
    ([\#15984](https://forge.typo3.org/issues/15984))
-   \[TASK\] Raise submodule pointer
-   \[TASK\] Update INSTALL.txt
-   \[BUGFIX\] Incorrect display of Flexform UTF8 labels
    ([\#28952](https://forge.typo3.org/issues/28952))
-   \[BUGFIX\] TCA: Suggest wizard doesn't work in wizard\_edit popup
    ([\#28930](https://forge.typo3.org/issues/28930))
-   \[BUGFIX\] FlexForm field selector missing
    ([\#30768](https://forge.typo3.org/issues/30768))
-   \[BUGFIX\] Fatal Error in Page Tree filter
    ([\#28297](https://forge.typo3.org/issues/28297))
-   \[BUGFIX\] Fix misleading SQL error message in TCEforms
    ([\#16306](https://forge.typo3.org/issues/16306))
-   \[BUGFIX\] Check for rsaauth being usable
    ([\#31178](https://forge.typo3.org/issues/31178))
-   \[BUGFIX\] Leading and trailing blanks can't be edited by the RTE
    ([\#16217](https://forge.typo3.org/issues/16217))
-   \[BUGFIX\] Enable “0” as token for TypoScript split function
    ([\#31062](https://forge.typo3.org/issues/31062))
-   \[BUGFIX\] impexp links to invalid EM path
    ([\#31173](https://forge.typo3.org/issues/31173))
-   \[BUGFIX\] Improve check for started session in rsaauth
    ([\#30270](https://forge.typo3.org/issues/30270))
-   \[BUGFIX\] Limit workspace access checks if extension not used
    ([\#30870](https://forge.typo3.org/issues/30870))
-   \[BUGFIX\] date expects parameter 2 to be long, string given
    ([\#30931](https://forge.typo3.org/issues/30931))

<Category:ReleaseNotes/TYPO3_4.5.x> [Category:TYPO3
4.5](Category:TYPO3_4.5 "wikilink") <Category:2011>
