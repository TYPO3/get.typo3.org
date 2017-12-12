Release Notes for TYPO3 4.7.14
==============================

This document contains information about TYPO3 CMS 4.7.14 which was
released on July 30th 2013.

News
----

This release is a combined bug fix and security release.

Notes
-----

Due to security issues found in the TYPO3 Core, there was a combined
release of TYPO3 CMS 4.5.29, 4.7.14, 6.0.8 and 6.1.3.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2013-002/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    b0de4f9559461686b0cd372efc1d4fb6  blankpackage-4.7.14.tar.gz
    07c4b1c8fe3cb48bcfbea419d41239d3  blankpackage-4.7.14.zip
    8b2318cc3130079831ee6906c1216ff5  dummy-4.7.14.tar.gz
    34053fd859d698574152960a71689f82  dummy-4.7.14.zip
    fb0348d13cdf512e05a1481d9a07cea5  typo3_src+dummy-4.7.14.zip
    3a944b0188ce585758c4be6faa3ab372  typo3_src-4.7.14.tar.gz
    99d24dad5fb872a90c9d995418101e61  typo3_src-4.7.14.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.7.13](TYPO3_4.7.13 "wikilink"):

    2013-07-30  96f4f06                  [RELEASE] Release of TYPO3 4.7.14 (TYPO3 Release Team)
    2013-07-30  85fa0c7  #49209          [SECURITY] XSS in 3rd party library Flowplayer (Oliver Hader)
    2013-07-30  557a0fd  #49210          [SECURITY] XSS in 3rd party library Audio Player (Oliver Hader)
    2013-07-27  46ae61c  #41487          [BUGFIX] Fix double-stdWrapping of GIFBUILDER's TEXT object (jyps)
    2013-07-26  6e208e3  #50480          [TASK] Remove empty .gitmodules file (Christian Kuhn)
    2013-07-25  71c3262  #50410          [TASK] Revise typo3/sysext/README.txt (Wouter Wolters)
    2013-07-23  1710919                  [TASK] Set TYPO3 version to 4.7.14-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_4.7.x> [Category:TYPO3
4.7](Category:TYPO3_4.7 "wikilink") <Category:2013>
