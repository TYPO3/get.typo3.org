Release Notes for TYPO3 CMS 6.2.3
=================================

This document contains information about TYPO3 CMS 6.2.3 which was
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

    e7cbe7686424ab74bbd8235baf5259f1  typo3_src-6.2.3.tar.gz
    24960795480790aa30c47cf2b4c556ba  typo3_src-6.2.3.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[6.2.2](TYPO3_CMS_6.2.2 "wikilink"):

    2014-05-22  c66d056                  [RELEASE] Release of TYPO3 6.2.3 (TYPO3 Release Team)
    2014-05-22  ab7a9f8  #30377          [SECURITY] Add trusted HTTP_HOST configuration (Helmut Hummel)
    2014-05-22  3858e46  #54111,#54113   [SECURITY] XSS in (old) extension manager information function (Nicole Cordes)
    2014-05-22  6c6ae4b  #48695          [SECURITY] XSS in new content element wizard (Marcus Krause)
    2014-05-22  1e2843b  #54109          [SECURITY] XSS in template tools on root page (Marc Bastian Heinrichs)
    2014-05-22  938f7f8  #57576          [SECURITY] XSS in Backend Layout Wizard (Helmut Hummel)
    2014-05-22  5ecbf23  #48693          [SECURITY] Encode URL for use in JavaScript (Jigal van Hemert)
    2014-05-22  d591b1d  #57673          [SECURITY] Session timeout can be circumvented once (Markus Klein)
    2014-05-22  d554ac5  #54526          [SECURITY] Remove charts.swf to get rid of XSS vulnerability (Helmut Hummel)
    2014-05-20  4a3e526  #58310          [BUGFIX] RTE Remove Format removes too much (Stanislas Rolland)
    2014-05-19  849e5f1  #58796          [BUGFIX] indexed_search plugin cannot be translated (Robert Vock)
    2014-05-18  3d5143b  #58846          [BUGFIX] Missing check if $row[t3ver_state] is set in IconUtility (Frans Saris)
    2014-05-16  8b26489  #58870          [TASK] Cleanup DataHandler functional tests (Oliver Hader)
    2014-05-16  b36a41a  #58854          [TASK] Extend DataHandler IRRE functional tests (Oliver Hader)
    2014-05-16  34181bb  #58868          [TASK] Unify DataHandler test structure (Oliver Hader)
    2014-05-15  b71a056  #58842          [BUGFIX] Wrong system requirements link (Markus Klein)
    2014-05-13  12177af  #58720          [BUGFIX] Wrong path reference for installToolPassword option (Markus Klein)
    2014-05-13  dd14682  #56796          [BUGFIX] Restore registers before early returns (Jo Hasenau)
    2014-05-13  88746ec  #58688,#57348   [BUGFIX] Don't rely on not found database records impexp (Marc Bastian Heinrichs)
    2014-05-13  624aef3  #58735          [BUGFIX] MM relations are not correctly resolved in Backend view (Oliver Hader)
    2014-05-13  016860a  #58719          [BUGFIX] Invalid module token in openid wizard (Markus Klein)
    2014-05-13  d951b22  #58758          [BUGFIX] Sprite icons not shown (Frans Saris)
    2014-05-13  deb3c0f  #58620          [BUGFIX] Category tab not shown for file when filemetadata installed (Frans Saris)
    2014-05-13  d277119  #57606          [BUGFIX] Remove failing extension installations (Nicole Cordes)
    2014-05-12  01103d5  #58731          [BUGFIX] DataProviderContext uses wrong member field in setter (Tim Schreiner)
    2014-05-12  4f982ca  #58676          [TASK] Update to phpunit 4.1 (Christian Kuhn)
    2014-05-12  65603ab  #58369          [SECURITY] Extbase must not cache dynamic parts of queries (Markus Klein)
    2014-05-12  037d2c7  #57986          [BUGFIX] Check if storage exists before accessing it (Christian Weiske)
    2014-05-12  d071a64  #58150          [BUGFIX] Use file name in delete confirmation message (Christian Weiske)
    2014-05-07  f0a4334  #58600          [BUGFIX] LocalizationUtility methods should be static (Christian Kuhn)
    2014-05-07  9da1f2c                  [TASK] Add PHP 5.6 as travis-ci environment (Christian Kuhn)
    2014-05-06  e4c1376                  [TASK] Set TYPO3 version to 6.2.3-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_6.2.x> [Category:TYPO3
6.2](Category:TYPO3_6.2 "wikilink") <Category:2014>
