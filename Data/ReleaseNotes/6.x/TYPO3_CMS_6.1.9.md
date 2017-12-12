Release Notes for TYPO3 CMS 6.1.9
=================================

This document contains information about TYPO3 CMS 6.1.9 which was
released on May 22nd, 2014.

News
----

This release is a combined bug fix and security release.

Notes
-----

Due to security issues found in the TYPO3 CMS Core, there was a combined
release of TYPO3 CMS 4.5.34, 4.7.19, 6.0.14, 6.1.9 and 6.2.3.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2014-001/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    bc22c5745299802b9a07aa292919fedc  blankpackage-6.1.9.tar.gz
    f47b5f5ae04a6d0ccb915ef505e46e8c  blankpackage-6.1.9.zip
    920bae2ed9d6351b6130327474f2f607  dummy-6.1.9.tar.gz
    2abd90baa667760ebec7ef277066aefa  dummy-6.1.9.zip
    4c0cc8f9a8770f9d42d449f5e55e026b  typo3_src+dummy-6.1.9.zip
    9e9fc9a50934fca08e5b55551b1eddbe  typo3_src-6.1.9.tar.gz
    6ae05c35114ee8f13f8fc7342437c601  typo3_src-6.1.9.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[6.1.8](TYPO3_CMS_6.1.8 "wikilink"):

    2014-05-22  2bb8360                  [RELEASE] Release of TYPO3 6.1.9 (TYPO3 Release Team)
    2014-05-22  6fafbf7  #30377          [SECURITY] Add trusted HTTP_HOST configuration (Helmut Hummel)
    2014-05-22  2994a1c  #54111,#54113   [SECURITY] XSS in (old) extension manager information function (Nicole Cordes)
    2014-05-22  12741ad  #48695          [SECURITY] XSS in new content element wizard (Marcus Krause)
    2014-05-22  7595ad4  #54109          [SECURITY] XSS in template tools on root page (Marc Bastian Heinrichs)
    2014-05-22  6965806  #57576          [SECURITY] XSS in Backend Layout Wizard (Helmut Hummel)
    2014-05-22  54e4691  #48693          [SECURITY] Encode URL for use in JavaScript (Jigal van Hemert)
    2014-05-22  b6826ff  #56458          [SECURITY] Fix insecure unserialize in colorpicker (Helmut Hummel)
    2014-05-22  32efb1b  #54526          [SECURITY] Remove charts.swf to get rid of XSS vulnerability (Helmut Hummel)
    2014-05-21  6a91a90  #54917          [BUGFIX] Indexer tries to insert NULL into DB (Markus Klein)
    2014-05-15  3ee99e9  #58842          [BUGFIX] Wrong system requirements link (Markus Klein)
    2014-05-14  f86e016  #58529          [BUGFIX] DependencyUtility does count() on an integer (Markus Klein)
    2014-05-08  fb8370d  #58187          [BUGFIX] Solve stackoverflow in prototype in IE8 (Jigal van Hemert)
    2014-05-08  3abc703  #58373          [BUGFIX] Default image title in RTE contains the file name (Stanislas Rolland)
    2014-05-05  db90a26  #45183          [BUGFIX] Wrong result on empty string globalString condition (Marc Bastian Heinrichs)
    2014-05-04  d422bf6  #58504          [BUGFIX] saltedpasswords: Check rsaauth loading (Nicole Cordes)
    2014-05-04  05ef8fe  #58484          [BUGFIX] SoftReferenceIndex support for more values in class attribute (Marc Bastian Heinrichs)
    2014-05-02  a49ddfd  #58418          [BUGFIX] Retrieving extension fails with some PHP versions (Sascha Wilking)
    2014-04-29  0150f9c  #58166          [BUGFIX] Wrong comment in ActionMenuViewHelper (Markus Klein)
    2014-04-25  8cf4f78  #58180          [BUGFIX] Database query error for non-workspaces tables (Oliver Hader)
    2014-04-16  a4f013a                  [TASK] Set TYPO3 version to 6.1.9-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_6.1.x> [Category:TYPO3
6.1](Category:TYPO3_6.1 "wikilink") <Category:2014>
