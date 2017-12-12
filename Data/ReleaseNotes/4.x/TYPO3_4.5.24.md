Release Notes for TYPO3 4.5.24
==============================

This document contains information about TYPO3 version 4.5.24 which was
released on March 6th 2013.

News
----

This release is a combined bug fix and security release.

Notes
-----

Due to security issues found in the TYPO3 Core, there was a combined
release of TYPO3 4.5.24, 4.6.17, 4.7.9 and 6.0.3.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2013-001/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    e2db79ad71cb713dd86ec4052b9ec2a5  blankpackage-4.5.24.tar.gz
    2584e41a52209d25eda0ad6be627bb95  blankpackage-4.5.24.zip
    7cb0e5f014e00b48cc309ce785a28917  dummy-4.5.24.tar.gz
    5efe194b4ef8fe0b5dd25ddae758302e  dummy-4.5.24.zip
    0503c8e3b4fbe3a2deaece51a38c3f9c  introductionpackage-4.5.24.tar.gz
    5141deffd0dfacad0715b6c105dc5984  introductionpackage-4.5.24.zip
    bc542ed4222aeb45603cbed1344b9e40  typo3_src+dummy-4.5.24.zip
    8de5941f5b1ebeb7deb92fc84b29e8bc  typo3_src-4.5.24.tar.gz
    1108ab2ab117d26a75e5e0c0693b2d64  typo3_src-4.5.24.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.5.23](TYPO3_4.5.23 "wikilink"):

    2013-03-06  3cbef1f                  [RELEASE] Release of TYPO3 4.5.24 (TYPO3 Release Team)
    2013-03-06  79e2370                  [TASK] Raise submodule pointer (TYPO3 Release Team)
    2013-03-06  71135d8  #28587          [SECURITY] Open redirection with jumpurl (Franz G. Jahn)
    2013-03-01  0d77b86  #25003          [BUGFIX] Check minitems for TCAtree (Georg Ringer)
    2013-03-01  796680a  #34371          [BUGFIX] Keep hyphens in custom HTML5 attributes (Jigal van Hemert)
    2013-02-25  06571e6  #45570          Revert "[BUGFIX] FE session records are never removed" (Oliver Hader)
    2013-02-14  98153a5                  [TASK] Set TYPO3 version to 4.5.24-dev (TYPO3 Release Team)
    2013-02-14  73e6f37                  [RELEASE] Release of TYPO3 4.5.23 (TYPO3 Release Team)


