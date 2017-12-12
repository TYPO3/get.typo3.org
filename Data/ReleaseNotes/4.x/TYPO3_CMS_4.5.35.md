Release Notes for TYPO3 CMS 4.5.35
==================================

This document contains information about TYPO3 CMS 4.5.35 which was
released on July 8th, 2014.

News
----

This release is a bug fix release.

Notes
-----

This is part of a combined release of TYPO3 CMS 4.5.35, 6.1.10 and
6.2.4.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    26c98b8d1be395c043dc1a13a763dc22  blankpackage-4.5.35.tar.gz
    e82f2611ba57b0119597e8f79279264c  blankpackage-4.5.35.zip
    524d8edc926e61d0699da90a5a3f0eff  dummy-4.5.35.tar.gz
    d641805e913868003876b70241501d48  dummy-4.5.35.zip
    1b9386c9ab06c9fe494c08751c8101a9  introductionpackage-4.5.35.tar.gz
    82726d605ef4de5699711bd9f7e53126  introductionpackage-4.5.35.zip
    f2c5c1afa983483e1258f3d9191a7cb2  typo3_src+dummy-4.5.35.zip
    f5385631a2b1c5269abe64efeea6c6eb  typo3_src-4.5.35.tar.gz
    d86ccb82edc0f032190cb7cd68b14d93  typo3_src-4.5.35.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.5.34](TYPO3_CMS_4.5.34 "wikilink"):

    2014-07-08  6ca633d                  [RELEASE] Release of TYPO3 4.5.35 (TYPO3 Release Team)
    2014-07-08  ebdd15e  #48939,#49055   [BUGFIX] Movements pollute colPos value of content elements (Nicole Cordes)
    2014-06-29  021526a                  [TASK] Improve travis notifications to channels (Helmut Hummel)
    2014-06-29  4f13b3a  #59838          [TASK] Update Travis CI notification settings (Michael Stucki)
    2014-06-23  64a43ca  #59825          [BUGFIX] AbstractBackendViewHelper uses namespaces (Markus Klein)
    2014-06-05  05bbf37  #59059          [BUGFIX] New content elements are always stored on pid 0 (Markus Klein)
    2014-06-03  4fbb250  #59034          [BUGFIX] Fix double ? in eID url for encryption key (Markus Klein)
    2014-05-23  418e313  #58936          [BUGFIX] Wrong HTML in locallang_csh_pages.xlf (Markus Klein)
    2014-05-23  81e31f1  #58484          [BUGFIX] SoftReferenceIndex support for more values in class attribute (Marc Bastian Heinrichs)
    2014-05-22  dd2d0ad                  [TASK] Set TYPO3 version to 4.5.35-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_4.5.x> [Category:TYPO3
4.5](Category:TYPO3_4.5 "wikilink") <Category:2014>
