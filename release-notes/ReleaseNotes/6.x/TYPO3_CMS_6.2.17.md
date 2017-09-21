Release Notes for TYPO3 CMS 6.2.17
==================================

This document contains information about TYPO3 CMS 6.2.17 which was
released on December 21st, 2015.

News
----

This release is a bug fix release.

Notes
-----

Several regressions that had been introduced with the last versions have
been fixed with these releases.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    39a2be42b455f26f8c9556e166061b62  typo3_src-6.2.17.tar.gz
    d7e12d20608275fef71809160e1b7121  typo3_src-6.2.17.zip

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
[6.2.16](TYPO3_CMS_6.2.16 "wikilink"):

    2015-12-21  b1ca8df                  [RELEASE] Release of TYPO3 6.2.17 (TYPO3 Release Team)
    2015-12-18  2c7781e  #72322          [BUGFIX] Prevent Javascript error for Flexform sections (Oliver Hader)
    2015-12-17  b2b531c  #72273          [!!!][BUGFIX] Severe data-loss on workspaces publishing action (Oliver Hader)
    2015-12-17  f1c4c17  #72285          [BUGFIX] DBAL: use correct default value for native connection (Melanie Kalka)
    2015-12-17  dc0134b  #72291          [TASK] Extend workspace functional tests on placeholder deletion (Oliver Hader)
    2015-12-17  bfa250a  #72252          [BUGFIX] substituteMarkerArrayCached() must accept special chars (Markus Klein)
    2015-12-17  5c14b25  #72289          [BUGFIX] Missing check before foreach loop (Oliver Hader)
    2015-12-17  e6bee88  #72265          [BUGFIX] Disclose exceptions on CLI in production context (Helmut Hummel)
    2015-12-16  cc59676  #72256          [TASK] Provide labels for all log types (Anja Leichsenring)
    2015-12-16  2b1e896  #72263          [BUGFIX] Empty row in table content element shows &amp;nbsp; (Wouter Wolters)
    2015-12-15  ae2de3c                  [TASK] Set TYPO3 version to 6.2.17-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_6.2.x> [Category:TYPO3
6.2](Category:TYPO3_6.2 "wikilink") <Category:2015>
