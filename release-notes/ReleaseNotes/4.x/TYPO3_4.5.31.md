Release Notes for TYPO3 CMS 4.5.31
==================================

This document contains information about TYPO3 CMS 4.5.31 which was
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

    f48862d6d3be6e358aa4540207d05519  blankpackage-4.5.31.tar.gz
    ce617df3e61dbc6f6503da6af28cb39f  blankpackage-4.5.31.zip
    c08f187eb21e03dd5a10770190f02b0b  dummy-4.5.31.tar.gz
    16c59a587e1dfd8e80eee32187b9bc6d  dummy-4.5.31.zip
    3c4ef2bf90d9e18c1b6737f17919bff8  introductionpackage-4.5.31.tar.gz
    292d753eb6f0b208ec3479cd50182d15  introductionpackage-4.5.31.zip
    1877b24386ef64c42dac3653cd9662af  typo3_src+dummy-4.5.31.zip
    3715e5c6ef76d352f47317e633c950ae  typo3_src-4.5.31.tar.gz
    f67fe39a9fa6c16553882dbdd4fab03f  typo3_src-4.5.31.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[4.5.30](TYPO3_4.5.30 "wikilink"):

    2013-11-26  434ce71                  [RELEASE] Release of TYPO3 4.5.31 (TYPO3 Release Team)
    2013-11-19  396534e  #53758          [BUGFIX] Table cache_imagesizes is defined twice (Michiel Roos)
    2013-11-19  3f2ed1d  #53750          [BUGFIX] Scheduler extension sql file is invalid (Michiel Roos)
    2013-11-15  428baac  #17493          [BUGFIX] Fix broken edit icons on cType HTML (Stefan Neufeind)
    2013-11-11  6755f40  #37948          [BUGFIX] Correctly append additionalTreelistUpdateFields (Bart Dubelaar)
    2013-11-11  082facd  #31998          [BUGFIX] Faulty check for missing SMTP port (Stefan Neufeind)
    2013-11-09  c581f33  #29179          [BUGFIX] Escape title, extension, description of scheduler tasks (Stefan Neufeind)
    2013-11-09  7b08aa9  #53195          [BUGFIX] T3editor: Honour fileDenyPattern on saving included TS (Stefan Neufeind)
    2013-11-04  d372f5f  #38055          [BUGFIX] Remove declare(encoding=) (Josef Florian Glatz)
    2013-10-28  5ae438c  #53075          [BUGFIX] Cannot auto-load SC_* classes (Ernesto Baschny)
    2013-10-22  b5d6e9f  #50881          [TASK] Added missing core autoloaded files (Ernesto Baschny)
    2013-10-13  5b072ff  #52759          [BUGFIX] Object passed to date() (Philipp Gampe)
    2013-10-12  6371e46  #52104          [BUGFIX] Wrong calculation of maximum value for checkbox fields (Nicole Cordes)
    2013-10-12  78871e2  #37611          [BUGFIX] Select available page when changing WS (Thorsten Kahler)
    2013-10-11  ce02c01  #36573          [BUGFIX] Add workspace overlay for fetched records. (Anja Leichsenring)
    2013-10-11  d114ddb  #37065          [BUGFIX] Don't show duplicates in workspace preview (Timo Webler)
    2013-10-06  3289c39  #52045          [BUGFIX] EmConfUtility accesses non-arrays (Markus Klein)
    2013-09-27  cd1e12b  #52091,#51684   [BUGFIX] Check for string before using strlen (Markus Klein)
    2013-09-26  c8d2033  #34886          [BUGFIX] CF FileBackend unlimited lifetime support (Dominique Feyer)
    2013-09-18  ef6dc06                  [BUGFIX] Fix cropping of transparent gifs with im6. (Felix Bünemann)
    2013-09-12  70ce540  #51803          [TASK] Use a 401 header if login is not successful (Georg Ringer)
    2013-09-12  ec0e720                  [TASK] Set TYPO3 version to 4.5.31-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_4.5.x> [Category:TYPO3
4.5](Category:TYPO3_4.5 "wikilink") <Category:2013>
