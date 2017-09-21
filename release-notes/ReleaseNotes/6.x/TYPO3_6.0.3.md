Release Notes for TYPO3 6.0.3
=============================

This document contains information about TYPO3 version 6.0.3 which was
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

    8f3bc1d325a94e7fdb6cacc98826981a  blankpackage-6.0.3.tar.gz
    88dbeebeb0acef5210d50d305476cfaf  blankpackage-6.0.3.zip
    9d8d2cb29bd4920fb95c5eda9ef49d7d  dummy-6.0.3.tar.gz
    46ed8c11d110bcf968a4f0d4b6326bc4  dummy-6.0.3.zip
    e093ce8104fe46d2e4937bd9b18b19b2  governmentpackage-6.0.3.tar.gz
    36a3dbc058fd4c26d503f4ea4ccbc7b0  governmentpackage-6.0.3.zip
    ffc757ecfa9aeb3e2811cd7f2aaca1b2  introductionpackage-6.0.3.tar.gz
    e2b39797ec0fdaeb441023e00cd27760  introductionpackage-6.0.3.zip
    816452526b36315a65e1b9bea510e54f  typo3_src+dummy-6.0.3.zip
    a321413176c709721840436fe42ed4c9  typo3_src-6.0.3.tar.gz
    bfed8a5cc139c3baba8eaaa51604f435  typo3_src-6.0.3.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since [6.0.2](TYPO3_6.0.2 "wikilink"):

    2013-03-06  ca8c78e                  [RELEASE] Release of TYPO3 6.0.3 (TYPO3 Release Team)
    2013-03-06  87b38e2                  [TASK] Raise submodule pointer (TYPO3 Release Team)
    2013-03-06  c6f0f43  #28587          [SECURITY] Open redirection with jumpurl (Franz G. Jahn)
    2013-03-05  d62550e  #45415          [BUGFIX] Fix warning in adapter service (Helmut Hummel)
    2013-03-05  ac951d1  #45415          [BUGFIX] Do not overwrite imagecaption in content adapter (Helmut Hummel)
    2013-03-05  6fb5b09  #45416          [BUGFIX] Fix inconsitency of file reference property getters (Helmut Hummel)
    2013-03-05  6e5ec41  #46000          [BUGFIX] Wrong usage of array_unique() (Andreas Lingott)
    2013-03-04  89b21f0  #45998          [BUGFIX] Invalid replacement hints in t3lib/ (Xavier Perseguers)
    2013-03-04  0d8b266  #45996          [BUGFIX] Invalid SQL result after four login failures (Philipp Gampe)
    2013-03-03  bab73c3                  [TASK] Raise submodule pointer (TYPO3 Release Team)
    2013-02-26  73aa634  #45625          [BUGFIX] Make backend user global available early (Helmut Hummel)
    2013-02-17  b4cc444  #45404          [BUGFIX] Fix of .zip exports of extension (Jost Baron)
    2013-02-17  831ef2d  #40085          [BUGFIX] Invalid RSA key when submitting form twice (Benjamin Mack)
    2013-02-17  763264e  #45538          [BUGFIX] Fix the display of references in filelist (Helmut Hummel)
    2013-02-16  5fa2399  #45343          [TASK] Cleanup "beuser" sysext (Wouter Wolters)
    2013-02-16  c004fe0  #45392          [TASK] Cleanup "belog" sysext (Wouter Wolters)
    2013-02-16  a2e6bbb  #44370          [BUGFIX] LocalDriver needs to respect "is_writeable" (Georg Ringer)
    2013-02-14  50d66ad                  [TASK] Set TYPO3 version to 6.0.3-dev (TYPO3 Release Team)
    2013-02-14  1738e7a                  [RELEASE] Release of TYPO3 6.0.2 (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_6.0.x> [Category:TYPO3
6.0](Category:TYPO3_6.0 "wikilink") <Category:2013>
