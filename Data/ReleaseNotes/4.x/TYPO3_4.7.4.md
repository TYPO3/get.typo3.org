Release Notes for TYPO3 4.7.4
=============================

This document contains information about TYPO3 version 4.7.4 which was
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

    a6b868a6c56e5583900595f59cbb3f75  blankpackage-4.7.4.tar.gz
    642cc68efe9d82fd8339b9e25cc6e63b  blankpackage-4.7.4.zip
    f4b2107e3542ef27ccdedd176449d699  dummy-4.7.4.tar.gz
    d28ea48d9997fd22164e55436221f2e4  dummy-4.7.4.zip
    a8a11cb7c6f08635c3dbd26e9763e2ee  governmentpackage-4.7.4.tar.gz
    3f52f9ce106c0571f0f4d2cbf334b263  governmentpackage-4.7.4.zip
    f0fd18dcbeebb09d1a8c24821171c34c  introductionpackage-4.7.4.tar.gz
    ef7dec6a6de68fa1445e0acf5621d359  introductionpackage-4.7.4.zip
    bd05d7f1fe8fdc536862f5f1b3bab455  typo3_src+dummy-4.7.4.zip
    809d837eedf2594c52a27e85d93cc9ae  typo3_src-4.7.4.tar.gz
    bda2792a2d9a220c81e1d20205c0c525  typo3_src-4.7.4.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since [4.7.3](TYPO3_4.7.3 "wikilink"):

    2012-08-15  ccf6b0a                  [RELEASE] Release of TYPO3 4.7.4 (TYPO3 Release Team)
    2012-08-15  14d5d72  #21634          [SECURITY] XSS in install tool (Mario Rimann)
    2012-08-15  a1c3165  #32653          [SECURITY] Page Link Target vulnerable to XSS (Markus Bucher)
    2012-08-15  8cf7db7  #25052          [SECURITY] XSS in validateForm (Markus Bucher)
    2012-08-15  59e028a  #25356          [SECURITY] XSS in TCE forms (Christian Kuhn)
    2012-08-15  758c217  #30967          [SECURITY] XSS in Scheduler Example Task (Mario Rimann)
    2012-08-15  44e8ae6  #37127          [SECURITY] HTML5 support in RemoveXSS (Franz G. Jahn)
    2012-08-15  7c778d3  #39345          [SECURITY] Information Disclosure in the Configuration Module (Mario Rimann)
    2012-08-15  044ae9a  #33520          [SECURITY] Untrusted GP data is unserialized in old CSH handling (Marcus Krause)
    2012-08-15  0bcecd8  #31927          [SECURITY] XSS in Indexed Search statistics (Steffen Gebert)
    2012-08-15  774537c  #23226Security  [SECURITY] t3lib_div::quoteJSvalue allows XSS (Helmut Hummel)
    2012-08-15  a9383b1                  [TASK] Raise submodule pointer (TYPO3 Release Team)
    2012-08-15  7edbd63                  [TASK] Update version numbers to 4.7.4 (Steffen Ritter)
    2012-08-08  c5e24ad                  [TASK] Set TYPO3 version to 4.7.4-dev (TYPO3 Release Team)
    2012-08-08  136f73b                  [RELEASE] Release of TYPO3 4.7.3 (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_4.7.x> [Category:TYPO3
4.7](Category:TYPO3_4.7 "wikilink") <Category:2012>
