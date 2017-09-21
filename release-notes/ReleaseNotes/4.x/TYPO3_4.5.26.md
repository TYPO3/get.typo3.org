Release Notes for TYPO3 4.5.26
==============================

This document contains information about TYPO3 version 4.5.26 which was
released on May 3rd, 2013.

News
----

This release is a bug fix release.

Notes
-----

This is a combined release of TYPO3 CMS 4.5.26, 4.7.11 and 6.0.5.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    d9906add82d38bb9d7db589c24f5c888  blankpackage-4.5.26.tar.gz
    f5e832f8d566501ab60a6a885ea38918  blankpackage-4.5.26.zip
    77dde86133919ac6273aee9d9f2de02a  dummy-4.5.26.tar.gz
    70f0e46153b8fe39d2b0ea5dfc3f33f1  dummy-4.5.26.zip
    c6896c72bb43a471c3c236e4d327d402  introductionpackage-4.5.26.tar.gz
    a132963e4d996e1010b684c4f5cc329e  introductionpackage-4.5.26.zip
    307ebab8e4b4b3e033556aae95b044ee  typo3_src+dummy-4.5.26.zip
    06cb7852c5c471b62e43f97926520835  typo3_src-4.5.26.tar.gz
    3563d5b76f761f33cda29ceb1c7e7f97  typo3_src-4.5.26.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.5.25](TYPO3_4.5.25 "wikilink"):

    2013-05-03  69d00b3                  [RELEASE] Release of TYPO3 4.5.26 (TYPO3 Release Team)
    2013-04-30  e5a4902                  [TASK] Raise submodule pointer (TYPO3 Release Team)
    2013-04-28  b8f65c3  #47621          [TASK] Update URLs to documentation (Jigal van Hemert)
    2013-04-27  51628de  #47529          [BUGFIX] Empty columns in Page Module view cause warnings (Christian Zenker)
    2013-04-22  a1d1f09                  [TASK] Set TYPO3 version to 4.5-dev (TYPO3 Release Team)
    2013-04-22  d74afc2                  [RELEASE] Release of TYPO3 4.5.26rc1 (TYPO3 Release Team)
    2013-04-22  5cecee6                  [TASK] Raise submodule pointer (TYPO3 Release Team)
    2013-04-22  dbd2417  #47409          [BUGFIX] Select label element from suggest-list (Stefan Neufeind)
    2013-04-22  d172ba7  #47274          [BUGFIX] RTE: Tab key in Chrome inserts weird SPAN tags (Stanislas Rolland)
    2013-04-20  5665f22  #40731          [BUGFIX] Suggest wizard: Display record icon (Jigal van Hemert)
    2013-04-19  ebf5c2a  #45254          [BUGFIX] excludeUidList not checked for ifsub state (Jigal van Hemert)
    2013-04-13  ecadba2  #36793          [TASK] Add/drop usage of preg_quote() where needed (Jigal van Hemert)
    2013-04-13  79d2594                  [TASK] Raise submodule pointer (Christian Kuhn)
    2013-04-13  46e817e  #41641          [BUGFIX] "stripOrderBy, stripGroupBy" should remove double occurrence (Laurent Cherpit)
    2013-04-12  d0c1654                  [TASK] Raise submodule pointer (Christian Kuhn)
    2013-04-11  b07277d  #36597          [BUGFIX] Allow Setting colorspace in the Install Tool. (Anja Leichsenring)
    2013-04-10  a1ba2c0  #39248          [BUGFIX] Make fetchUserRecord callable without username (Robert Heel)
    2013-04-09  aeccd94  #20392          [BUGFIX] cli dispatcher throws notice on windows systems (Nicole Cordes)
    2013-04-09  fb48ab2                  [TASK] Raise submodule pointer (Christian Kuhn)
    2013-04-09  609df7c  #15771          [BUGFIX] Numeric check for upper/lower bound of flexform-values (Georg Ringer)
    2013-04-07  eb24931  #39820          [BUGFIX] Pagetree - Prevent a call to moveNode while creating nodes (Tobias Schultheiss)
    2013-04-07  cb6f7bd  #33392          [BUGFIX] Take versioned record into account for showHidden flag. (Bart Dubelaar)
    2013-04-07  24f73ca  #40085          [BUGFIX] Invalid RSA key when submitting form twice (Benjamin Mack)
    2013-04-07  cc7ef8b  #46965          [BUGFIX] Illegal string offset in EditDocumentController (Philipp Gampe)
    2013-04-06  c01f4ee  #38705          [BUGFIX]  Hide move placeholder in WS preview (Benjamin Mack)
    2013-04-06  2e9076c  #46999          [BUGFIX] Write config to extTables destroys HTML output (Philipp Gampe)
    2013-04-06  68ce844  #43291          [BUGFIX] BE login form gives warnings in RteHtmlParser (Anja Leichsenring)
    2013-04-06  ead6074  #42106          [BUGFIX] swiftmaileradapter should ignore empty headers (Stefan Neufeind)
    2013-04-06  53ac36a  #40126          [BUGFIX] Endless loop in flushOutputBuffers() (Christian Kuhn)
    2013-04-05  ed3338d  #28741          [BUGFIX] Respect line breaks in stdWrap.cropHTML (Benjamin Mack)
    2013-04-05  ceab1f8  #33651          [BUGFIX] Fix breaking t3editor by using hsc() (Georg Ringer)
    2013-04-02  e6059ee                  [TASK] Raise submodule pointer (TYPO3 Release Team)
    2013-04-01  27df6d8  #46644          [BUGFIX] Remove redundant layermenu files (Michael Stucki)
    2013-04-01  978d0bc  #36719          [BUGFIX] Javascript for TMENU_LAYERS and GMENU_LAYERS missing (Michael Stucki)
    2013-03-31  5d4f043  #46821          [TASK] Detect APC and APCu correctly (Stefan Neufeind)
    2013-03-27  931e47c  #39678          [BUGFIX] Warning in list module (Philipp Gampe)
    2013-03-22  e47488b  #44732          [BUGFIX] fallbackRendering is always called (Christian Kuhn)
    2013-03-21  3bbde9e  #42279          [BUGFIX] Fix translation overlay in RECORDS (Helmut Hummel)
    2013-03-18  8a233e4                  [TASK] Raise submodule pointer (Christian Kuhn)
    2013-03-18  7717b85  #31953          [BUGIFX] Extra output blocks backend thumbnails (Francois Suter)
    2013-03-17  e7dec0b  #46361          [BUGFIX] Fix PHP warning in BackendUtility::lockRecords (Helmut Hummel)
    2013-03-16  d676544  #25292          [BUGFIX] Make sure XML parser is created everytime when needed (Marcus Krause)
    2013-03-15  1da948f9  #44470          [BUGFIX] Content elements in wrong column in page module (Jigal van Hemert)
    2013-03-15  06c6814  #45833          Revert "[BUGFIX] Fix wrong column title in web>list for field colpos" (Christian Kuhn)
    2013-03-13  aeabf01  #46126          [TASK] Mimetype-detection without finfo_file (Stefan Neufeind)
    2013-03-08  f298cf0  #36904          [BUGFIX] RTE: Empty paragraphs are not correctly transformed (Stanislas Rolland)
    2013-03-08  1292345  #46119          [BUGFIX] Wrong cmd example in INSTALL.txt (Markus Klein)
    2013-03-08  b88c110  #45135          [BUGFIX] Install Tool: Error message gives wrong info (Thomas Löffler)
    2013-03-07  869ab2a  #45595          [BUGFIX] Clearing cache from toolbar fails in IE8 (Andreas Kießling)
    2013-03-07  df2103c  #46085          [TASK] Update copyright year to 2013 (Ernesto Baschny)
    2013-03-07  7a3d3ba  #46085          [TASK] Update copyright year to 2013 (Christian Kuhn)
    2013-03-07  bd26345                  [TASK] Set TYPO3 version to 4.5.26-dev (TYPO3 Release Team)
    2013-03-07  c1e10c1                  [RELEASE] Release of TYPO3 4.5.25 (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_4.5.x> [Category:TYPO3
4.5](Category:TYPO3_4.5 "wikilink") <Category:2013>
