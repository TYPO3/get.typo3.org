Release Notes for TYPO3 4.5.19
==============================

This document contains information about TYPO3 version 4.5.19 which was
released on August 15th 2012.

News
----

This release is a combined bug fix and security release.

Notes
-----

Due to security issues found in the TYPO3 Core, there was a combined
release of TYPO3 4.5.19, 4.6.12 and 4.7.4.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2012-004/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    36df5cb401133690d11ecaad94df96f5  blankpackage-4.5.19.tar.gz
    d5e94eb7ddef3bbab596f2c4b3ca67a9  blankpackage-4.5.19.zip
    07efd6dd539b3e9731d50b25243b9fc2  dummy-4.5.19.tar.gz
    4ffce6c2c315ed513f1afc4ccc52f4d0  dummy-4.5.19.zip
    bf499b19364144e47065589b806e2d3a  introductionpackage-4.5.19.tar.gz
    426a39146958673c9cdbf561966d486b  introductionpackage-4.5.19.zip
    f45512a3e74da25cc34be719de50e3d7  typo3_src+dummy-4.5.19.zip
    3c7aa1ee67b62d5dbfcb381486dc89c1  typo3_src-4.5.19.tar.gz
    a3157d73d744ee22f9b155b438c0146d  typo3_src-4.5.19.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.5.18](TYPO3_4.5.18 "wikilink"):

    2012-08-15  9bcf5eb                  [RELEASE] Release of TYPO3 4.5.19 (TYPO3 Release Team)
    2012-08-15  76748b7  #21634          [SECURITY] XSS in install tool (Mario Rimann)
    2012-08-15  85df0e4  #32653          [SECURITY] Page Link Target vulnerable to XSS (Markus Bucher)
    2012-08-15  605d05f  #25052          [SECURITY] XSS in validateForm (Markus Bucher)
    2012-08-15  6840097  #25356          [SECURITY] XSS in TCE forms (Christian Kuhn)
    2012-08-15  fb1e204  #30967          [SECURITY] XSS in Scheduler Example Task (Mario Rimann)
    2012-08-15  6fd6768  #37127          [SECURITY] HTML5 support in RemoveXSS (Franz G. Jahn)
    2012-08-15  11abbaa  #39345          [SECURITY] Information Disclosure in the Configuration Module (Mario Rimann)
    2012-08-15  a3293a7  #33520          [SECURITY] Untrusted GP data is unserialized in old CSH handling (Helmut Hummel)
    2012-08-15  ccbbfc3  #31927          [SECURITY] XSS in Indexed Search statistics (Steffen Gebert)
    2012-08-15  f046457  #23226          [SECURITY] t3lib_div::quoteJSvalue allows XSS (Helmut Hummel)
    2012-08-08  7f17bf6                  [TASK] Set TYPO3 version to 4.5.19-dev (TYPO3 Release Team)
    2012-08-08  2d73b5d                  [RELEASE] Release of TYPO3 4.5.18 (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_4.5.x> [Category:TYPO3
4.5](Category:TYPO3_4.5 "wikilink") <Category:2012>
