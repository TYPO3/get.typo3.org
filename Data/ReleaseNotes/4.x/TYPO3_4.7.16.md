Release Notes for TYPO3 CMS 4.7.16
==================================

This document contains information about TYPO3 CMS 4.7.16 which was
released on November 26th, 2013.

News
----

This release is a bug fix release.

Notes
-----

This is part of a combined release of TYPO3 CMS 4.5.31, 4.7.16, 6.0.11
and 6.1.6.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    b13487c7a345e83e7dd7563b2c3dc4c4  blankpackage-4.7.16.tar.gz
    030fa45a953148513997a0195c536417  blankpackage-4.7.16.zip
    9138ddf31a016d7d0fed6f12d9a92bed  dummy-4.7.16.tar.gz
    1cc9b1c2316ec3641f6085ae7c4adf4a  dummy-4.7.16.zip
    2b5a3cb35ba7adaef8a77da6159a94b5  typo3_src+dummy-4.7.16.zip
    7715e6e2f432909c3270f6afa0c9e41a  typo3_src-4.7.16.tar.gz
    dbd5cc11d0f3bf15ac6e5fa782eedfb7  typo3_src-4.7.16.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.7.15](TYPO3_4.7.15 "wikilink"):

    2013-11-26  95a730f                  [RELEASE] Release of TYPO3 4.7.16 (TYPO3 Release Team)
    2013-11-19  5975854  #53758          [BUGFIX] Table cache_imagesizes is defined twice (Michiel Roos)
    2013-11-19  7d0a241  #53750          [BUGFIX] Scheduler extension sql file is invalid (Michiel Roos)
    2013-11-11  90f4945  #31998          [BUGFIX] Faulty check for missing SMTP port (Stefan Neufeind)
    2013-11-11  f328884  #47040          [BUGFIX] Enable treeConfig overriding by Page TSconfig (Stefan Neufeind)
    2013-11-09  2c82f33  #29179          [BUGFIX] Escape title, extension, description of scheduler tasks (Stefan Neufeind)
    2013-11-09  d683693  #53195          [BUGFIX] T3editor: Honour fileDenyPattern on saving included TS (Stefan Neufeind)
    2013-10-28  37c4f0b  #53075          [BUGFIX] Cannot auto-load SC_* classes (Ernesto Baschny)
    2013-10-23  ceba809  #31572          [BUGFIX] Exception using cObject FORM in TypoScript (Andreas Bouche)
    2013-10-23  f8f155e  #43540          [BUGFIX] TS is fetched from cache incorrectly sometimes (Jigal van Hemert)
    2013-10-22  2ce69d2  #50881          [TASK] Added missing core autoloaded files (Ernesto Baschny)
    2013-10-13  d361b29  #52759          [BUGFIX] Object passed to date() (Philipp Gampe)
    2013-10-12  3699866  #52104          [BUGFIX] Wrong calculation of maximum value for checkbox fields (Nicole Cordes)
    2013-10-11  073dd57  #36573          [BUGFIX] Add workspace overlay for fetched records. (Anja Leichsenring)
    2013-10-06  f26f2f1  #52045          [BUGFIX] EmConfUtility accesses non-arrays (Markus Klein)
    2013-09-27  fda9783  #52091,#51684   [BUGFIX] Check for string before using strlen (Markus Klein)
    2013-09-26  9673d7e  #50913          [BUGFIX] Fix PHP warning trigged in getAuthInfoArray() (Christian Finkemeier)
    2013-09-26  e06f05a  #34886          [BUGFIX] CF FileBackend unlimited lifetime support (Dominique Feyer)
    2013-09-12  e786c9c                  [TASK] Set TYPO3 version to 4.7.16-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_4.7.x> [Category:TYPO3
4.7](Category:TYPO3_4.7 "wikilink") <Category:2013>
