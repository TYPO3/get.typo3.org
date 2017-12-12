Release Notes for TYPO3 CMS 4.5.34
==================================

This document contains information about TYPO3 CMS 4.5.34 which was
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

    5298796f79db74f3565651cbba0cc556  blankpackage-4.5.34.tar.gz
    3141bf3ad65924565d4b89cc316d7c1d  blankpackage-4.5.34.zip
    99ee033b8b932f9cb3b4d65f9d0be126  dummy-4.5.34.tar.gz
    ece66ba1e0d29008b1f59dc504c5d67a  dummy-4.5.34.zip
    fd11e693f1042065ab26fe43d90f0928  introductionpackage-4.5.34.tar.gz
    94b608fdffc11ab5715971609f409cd0  introductionpackage-4.5.34.zip
    f56308924ad3b65d4fadc6d9dc7a8d0f  typo3_src+dummy-4.5.34.zip
    e481ff33d7c27654524f2006577f0f0b  typo3_src-4.5.34.tar.gz
    c4cb7bd9a7c7a9d37b8af2a41745f4ff  typo3_src-4.5.34.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.5.33](TYPO3_CMS_4.5.33 "wikilink"):

    67deb70 2014-05-22 | [RELEASE] Release of TYPO3 4.5.34 (TYPO3 Release Team)
    55d5f38 2014-05-22 | [SECURITY] Add trusted HTTP_HOST configuration  (Helmut Hummel)
    efb098b 2014-05-22 | [SECURITY] XSS in (old) extension manager information function  (Marc Bastian Heinrichs)
    94011a3 2014-05-22 | [SECURITY] XSS in new content element wizard  (Markus Klein)
    b62651b 2014-05-22 | [SECURITY] XSS in template tools on root page  (Marc Bastian Heinrichs)
    a98ae3c 2014-05-22 | [SECURITY] XSS in Backend Layout Wizard  (Nicole Cordes)
    4f7258c 2014-05-22 | [SECURITY] Encode URL for use in JavaScript  (Markus Klein)
    742ad49 2014-05-22 | [SECURITY] Fix insecure unserialize in colorpicker  (Helmut Hummel)
    9bd7776 2014-05-22 | [SECURITY] Remove charts.swf to get rid of XSS vulnerability  (Helmut Hummel)
    6ffdcee 2014-04-25 | [BUGFIX] Solve stackoverflow in prototype in IE8  (Jigal van Hemert)
    5d6a16e 2014-04-16 | [TASK] Set TYPO3 version to 4.5.34-dev  (TYPO3 Release Team)


