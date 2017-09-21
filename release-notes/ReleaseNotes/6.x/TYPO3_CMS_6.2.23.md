Release Notes for TYPO3 CMS 6.2.23
==================================

This document contains information about TYPO3 CMS 6.2.23 which was
released on May 17th, 2016.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    11e4ef3319c82aa02cf6318dcd48242b  typo3_src-6.2.23.tar.gz
    49b5bdecfb650c953d575278c6d4678a  typo3_src-6.2.23.zip

SHA256 checksums
----------------

    ed50e3fdf227c54a1613e37224b6962cad90bf042aa6db3e02f36977904ec263  typo3_src-6.2.23.tar.gz
    cc10040730f883fb5ad8ea5c7e3fc159001bb307d50e4b510311935b11964d44  typo3_src-6.2.23.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.\
It might be required to clear all caches; the “important actions”
section in the TYPO3 Install Tool offers the accordant possibility to do
so.

Changes
-------

Here is a list of what was fixed since
[6.2.22](TYPO3_CMS_6.2.22 "wikilink"):

    2016-05-17  80a1f39                  [RELEASE] Release of TYPO3 6.2.23 (TYPO3 Release Team)
    2016-05-17  1b58942  #75721          [BUGFIX] Use push parser instead of pull parser on fetching extension list (Oliver Hader)
    2016-05-17  6a038ac                  Revert "[BUGFIX] Load XML files of Extension Manager properly" (Oliver Hader)
    2016-05-06  8713065  #76066,#76064   [TASK] Make .htaccess Apache 2.4 suitable (Marc von Schalscha-Ehrenfeld)
    2016-05-05  31bb6be  #75934          [TASK] Disallow access to documentation folders (Markus Klein)
    2016-05-01  9100aae  #75947          [BUGFIX] Allow maxitem=1 in TCA treeSelect again (Alexander Bigga)
    2016-04-26  034e97b                  [TASK] Set TYPO3 version to 6.2.23-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_6.2.x> [Category:TYPO3
6.2](Category:TYPO3_6.2 "wikilink") <Category:2016>
