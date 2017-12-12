Release Notes for TYPO3 4.5.9
=============================

This document contains information about TYPO3 version 4.5.9 which was
released on December 16th 2011.

News
----

This release is a combined bug fix and security release.

Notes
-----

Due to security issues found in the TYPO3 Core, there was a combined
release of TYPO3 4.5.9 and [4.6.2](TYPO3_4.6.2 "wikilink").\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2011-004/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    2efb8c365ec49693d7bc02e3431d6f9f  blankpackage-4.5.9.tar.gz
    9e00b12c45c167b4ee9f5c7f7a78ba82  blankpackage-4.5.9.zip
    377635b360ee511dda7ff142968c9af5  dummy-4.5.9.tar.gz
    bf228f461706cd665153384e322fefd1  dummy-4.5.9.zip
    da51feafbd2a72783808071e5c9dc35b  introductionpackage-4.5.9.tar.gz
    0da87404e5bd1ec60d7bd03c4fec4829  introductionpackage-4.5.9.zip
    257ca290dd3efaebfa32bc014db2b52d  typo3_src+dummy-4.5.9.zip
    9f5911c49973f2cdbc0b04d6a4635f2e  typo3_src-4.5.9.tar.gz
    75b0e11ce7270707f712202eab611576  typo3_src-4.5.9.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changelog
---------

-   \[SECURITY\]\[BUGFIX\] Remote Command Execution in Workspace
    Abstract Controller
    ([\#32571](https://forge.typo3.org/issues/32571))
-   \[TASK\] Raise submodule pointer
-   \[BUGFIX\] RTE not loading in IE when content css file does not
    exist ([\#29899](https://forge.typo3.org/issues/29899))
-   \[BUGFIX\] TCEforms draws huge empty icon row which on select-fields
    ([\#25398](https://forge.typo3.org/issues/25398))
-   \[BUGFIX\] Restructure the random byte generator
    ([\#23355](https://forge.typo3.org/issues/23355))
-   \[BUGFIX\] Install Tool shows internal MySQL databases
    ([\#19278](https://forge.typo3.org/issues/19278))
-   \[BUGFIX\] Wrong char for explodes of links
    ([\#29597](https://forge.typo3.org/issues/29597))
-   \[TASK\] Integrate system extension linkvalidator as submodule
    ([\#32075](https://forge.typo3.org/issues/32075))
-   \[BUGFIX\] Add possibility to use Wizards-&gt;Suggest in FlexForms
    ([\#22231](https://forge.typo3.org/issues/22231))
-   \[BUGFIX\] Gap between module menu items causes collapse on click
    ([\#27634](https://forge.typo3.org/issues/27634))
-   \[BUGFIX\] Localization: Editing in TCEforms shows unstyled original
    value ([\#28012](https://forge.typo3.org/issues/28012))
-   \[BUGFIX\] Use trimExplode() for pageOverlayFields
    ([\#28916](https://forge.typo3.org/issues/28916))
-   \[BUGFIX\] EM: Available extension list misses icons
    ([\#30369](https://forge.typo3.org/issues/30369))
-   \[BUGFIX\] Remove hardcoded limits in T3D export
    ([\#27272](https://forge.typo3.org/issues/27272))
-   \[TASK\] Implement check for saltedpasswords in reports module
    ([\#30695](https://forge.typo3.org/issues/30695))
-   \[BUGFIX\]\[SECURITY\] XSS vulnerability in BE-User Admin module
    ([\#32040](https://forge.typo3.org/issues/32040))
-   \[BUGFIX\] Log date picker broken
    ([\#31450](https://forge.typo3.org/issues/31450))

<Category:ReleaseNotes/TYPO3_4.5.x> [Category:TYPO3
4.5](Category:TYPO3_4.5 "wikilink") <Category:2011>
