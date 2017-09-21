Release Notes for TYPO3 6.1.3
=============================

This document contains information about TYPO3 CMS 6.1.3 which was
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

    e10bf3162c3417f7add39d8b18ea5232  blankpackage-6.1.3.tar.gz
    ca85b0f7f4dd402351976ed0a723b351  blankpackage-6.1.3.zip
    49f44c5e2db5ba7b98122adf5081e8e3  dummy-6.1.3.tar.gz
    b9431b2266df8fcd25bb50a39c1cadc1  dummy-6.1.3.zip
    f1d2b6ce564fcae0463ef9f93e26bca3  governmentpackage-6.1.3.tar.gz
    a9852823b0e7f7ca271c6ff17c7515a3  governmentpackage-6.1.3.zip
    bf80dcabc161e85a21643745c92e2be6  introductionpackage-6.1.3.tar.gz
    c43ac2b3abbc997e56312ec59e7cae85  introductionpackage-6.1.3.zip
    825651b024a518692529d2a6565f4123  typo3_src+dummy-6.1.3.zip
    3e1a0b020373e4b4ca8c648eb9e9ff38  typo3_src-6.1.3.tar.gz
    c5e4ccf729b805e5360e0e1e50ab1944  typo3_src-6.1.3.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since [6.1.2](TYPO3_6.1.2 "wikilink"):

    2013-07-30  dcbb5a4                  [RELEASE] Release of TYPO3 6.1.3 (TYPO3 Release Team)
    2013-07-30  f0d86be  #47452          [SECURITY] fileDenyPattern ignored in file-list module (Jigal van Hemert)
    2013-07-30  21c0688  #49209          [SECURITY] XSS in 3rd party library Flowplayer (Oliver Hader)
    2013-07-30  954e683  #49210          [SECURITY] XSS in 3rd party library Audio Player (Oliver Hader)
    2013-07-30  baeb746  #50525          [BUGFIX] Deleted flag is not updated during file indexing (Oliver Hader)
    2013-07-30  625f85d  #49396          [BUGFIX] MailUtility breakLinesForEmail cuts text wrong and discard rest (Tim Lochmueller)
    2013-07-29  92a7d30                  Revert "[BUGFIX] setRespectSysLanguage(FALSE) doesn't prevent language overlay" (Anja Leichsenring)
    2013-07-29  33e4e8d                  Revert "[BUGFIX] sys_file record doesn't get flagged as delete" (Oliver Hader)
    2013-07-29  cdeb346  #50041          [BUGFIX] Use correct url schema in MediaWizardProvider (Georg Ringer)
    2013-07-28  69ff7a0  #11014          [BUGFIX] Workspace selector in top toolbar cannot scroll (Georg Ringer)
    2013-07-28  efb08f7  #45834          [BUGFIX] Detection of curlProxyServer settings is incorrect (Dmitry Dulepov)
    2013-07-28  c26b7fa  #50217          [BUGFIX] Class loader tries to load classes it cannot load (Andreas Wolf)
    2013-07-28  7ec7df9  #50258          [TASK] Add tests for ContentObjectRenderer::getData() (Stefan Neufeind)
    2013-07-27  6a213e1  #44118          [BUGFIX] Debug exception handler: set exit code on CLI (Christian Weiske)
    2013-07-27  b0fe6a0  #50492          [TASK] Run phpLint and phpUnit in different travis builds (Christian Kuhn)
    2013-07-27  120bdf0  #41165          [BUGFIX] Make BackendUtility::viewOnClick honor doc (Kasper Ligaard)
    2013-07-26  5a1304f  #50480          [TASK] Remove empty .gitmodules file (Christian Kuhn)
    2013-07-26  df6e02b  #50478          [BUGFIX] Failures in em unit tests due to phpunit update (Christian Kuhn)
    2013-07-26  542243d  #50476          [BUGFIX] FAL wrong \RecursiveIteratorIterator usage (Christian Kuhn)
    2013-07-26  f8db5aa  #50472          [BUGFIX] FAL does not copy subfolders cleanly (Christian Kuhn)
    2013-07-26  c5ae685  #50458          [BUGFIX] Fix failing test (Anja Leichsenring)
    2013-07-26  c3b6d0c  #49722          [BUGFIX] Uninstall extension with dependency throws Exception (Wouter Wolters)
    2013-07-25  30a9555                  [BUGFIX] Test regression from patch for #47192 (Andreas Wolf)
    2013-07-25  49fec42  #50447          [BUGFIX] Improve method annotation and type hinting in FAL (Christian Kuhn)
    2013-07-25  719a4f3  #50411          [BUGFIX] rsaauth BackendFactory does not unset backend (Markus Klein)
    2013-07-25  68376b5  #50442          [BUGFIX] require_once of vfsStream triggers travis fail (Christian Kuhn)
    2013-07-25  c86204b  #50410          [TASK] Revise typo3/sysext/README.txt (Wouter Wolters)
    2013-07-23  5851028                  [TASK] Set TYPO3 version to 6.1.3-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_6.1.x> [Category:TYPO3
6.1](Category:TYPO3_6.1 "wikilink") <Category:2013>
