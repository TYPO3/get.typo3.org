Release Notes for TYPO3 4.6.2
=============================

This document contains information about TYPO3 version 4.6.2 which was
released on December 16th 2011.

News
----

This release is a combined bug fix and security release.

Notes
-----

Due to security issues found in the TYPO3 Core, there was a combined
release of TYPO3 [4.5.9](TYPO3_4.5.9 "wikilink") and 4.6.2.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2011-004/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    58dcdf46118ff65dd6a24c89ffd8a71d  blankpackage-4.6.2.tar.gz
    44d6ef9e67e00bdec948031012c38116  blankpackage-4.6.2.zip
    8ce396432793133d0e317c04db0fe7f8  dummy-4.6.2.tar.gz
    8e2a5c052290de0342dcb1e3227edbc1  dummy-4.6.2.zip
    1669b0c929c4ebef267edb2c9532ef2a  introductionpackage-4.6.2.tar.gz
    008cc395472c520d409f97c4f9b2e656  introductionpackage-4.6.2.zip
    533d7a247e95241aee90d43bdf2fcc30  typo3_src+dummy-4.6.2.zip
    bc56852e5927e295cd17a0b2d74c10e0  typo3_src-4.6.2.tar.gz
    8b2009c7a64c63ddccd253400a91e633  typo3_src-4.6.2.zip

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
-   \[TASK\] Add CSS Class to special input types in FORM
    ([\#30851](https://forge.typo3.org/issues/30851))
-   \[BUGFIX\] Install Tool shows internal MySQL databases
    ([\#19278](https://forge.typo3.org/issues/19278))
-   \[BUGFIX\] Disabled ImageMagick throws Exception
    ([\#32433](https://forge.typo3.org/issues/32433))
-   \[TASK\] Integrate system extension linkvalidator as submodule
    ([\#32075](https://forge.typo3.org/issues/32075))
-   \[BUGFIX\] Add possibility to use Wizards-&gt;Suggest in FlexForms
    ([\#22231](https://forge.typo3.org/issues/22231))
-   \[BUGFIX\] RTE doesn't allow to create links around images in IE8
    ([\#30631](https://forge.typo3.org/issues/30631))
-   \[BUGFIX\]\[SECURITY\] XSS vulnerability in BE-User Admin module
    ([\#32040](https://forge.typo3.org/issues/32040))
-   \[BUGFIX\] Respect linkVars for generating the cHash
    ([\#32025](https://forge.typo3.org/issues/32025))
-   \[BUGFIX\] Core calls deprecated ADMCMD\_preview()
    ([\#31290](https://forge.typo3.org/issues/31290))

<Category:ReleaseNotes/TYPO3_4.6.x> [Category:TYPO3
4.6](Category:TYPO3_4.6 "wikilink") <Category:2011>
