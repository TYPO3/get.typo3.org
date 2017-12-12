Release Notes for TYPO3 4.3.2
=============================

This document contains information about TYPO3 version 4.3.2 which was
released on February 23, 2010.

News
----

This release is a combined bugfix and security release.

Notes
-----

Due to several security issues found in the TYPO3 Core, there was a
combined release of TYPO3 4.4-alpha1, 4.3.2 and 4.2.12.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-sa-2010-004/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    3d00a4aa8f2ef70f27894c1b5ce483c1  dummy-4.3.2.tar.gz
    aaf71b79456d910bbdd70426aa0e5b0c  dummy-4.3.2.zip
    ec02e4e91f2f280340d3557f4ecbe1b4  typo3_src-4.3.2.tar.gz
    4bcc3d24774e880a1187d2b55a151485  typo3_src-4.3.2.zip
    925e07e10d00a51415cc29f46303235f  typo3_src+dummy-4.3.2.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-02-23  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.3.2

    2010-02-23  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #13372: saltedpasswords - Authentication Bypass in frontend user authentication (thanks to Marcus Krause & Dmitry Dulepov)
        * Fixed bug #13394: Information disclosure in sysext:sys_actions (thanks to Georg Ringer)
        * Fixed bug #13042: XSS in index.php (thanks to Georg Ringer)
        * Fixed bug #11617: XSS in template module (thanks to Georg Ringer)
        * Fixed bug #13249: XSS in TS Object Browser (thanks to Marcus Krause)
        * Fixed bug #11621: XSS vulnerabilities in workspace module (thanks to Georg Ringer)
        * Fixed bug #11620: XSS vulnerability in task center module (thanks to Georg Ringer)
        * Fixed bug #12628: XSS in sysext sys_action (thanks to Georg Ringer)
        * Fixed bug #12634: XSS in the access module (thanks to Georg Ringer)
        * Fixed bug #13558: XSS in t3lib_querygenerator (thanks to Georg Ringer)
        * Fixed bug #12630: XSS in filelist module (thanks to Marcus Krause & Georg Ringer)

    2010-02-22  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Fixed bug #12958: Catchable fatal error in indexed_search

    2010-02-21  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #13310: htmlArea RTE: Additional Inline Elements issue with overlapping ranges
        * Updated htmlArea RTE version to 1.8.8

    2010-02-21  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #13252: default CSS only loadable for media screen / changed behaviour in 4.3 (Thanks to Ralf Hettinger)
        * Fixed bug #13570: Bug: HTML validation error in the BE with the ajax.php inclusion (Thanks to Oliver Klee)
        * Fixed bug #13289: Usage of deprecated method - getSetUpdateSignal() (Thanks to Stefan Galinski)
        * Fixed bug #13444: Filemounts are unsorted

    2010-02-21  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #13406: thumbs.php: Thumbnails for images with transparent background look ugly (Thanks to Andreas Wolf and Steffen Ritter)
        * Fixed bug #13423: Make ext_tables.sql syntax parsing more compliable (Thanks to Joachim Mathes)
        * Fixed bug #13201: Reports module - Use same install tool check for reports as used in About module (Thanks to Moreno Feltscher)
        * Fixed bug #13574: html warning, because a plain & inside an url (Thanks to Stefan Galinski)
        * Fixed bug #12625: JSMENU's fallback menu name is not unique

    2010-02-21  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #12220: String literals quoted as identifiers

    2010-02-20  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #13333: Datepicker button color is wrong

    2010-02-19  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12007: Docblock comments in TCEforms suggest class are wrong (Thanks to Andreas Wolf)
        * Fixed bug #13205: RTE 1.8.6 not focusing correctly with IE8
        * Fixed bug #13478: htmlArea RTE: Inline styles not available if text marked with keyboard
        * Fixed bug #13480: htmlArea RTE: Automatic linking ignores/replaces protocol
        * Fixed bug #13282: htmlArea RTE: buttons.formattext.restrictTo not evaluated correctly (Thanks to Jˆrg Wagner)

    2010-02-19  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #12870: Login News missing styling for links (Thanks to Steffen Gebert)

    2010-02-14  Christian Kuhn  <lolli@schwarzbu.ch>

        * Follow-up to #13448: Do not unset $typo3CacheFactory singleton

    2010-02-14  Xavier Perseguers  <typo3@perseguers.ch>

        * Raised DBAL version from 1.0.3 to 1.0.4
        * Fixed bug #12829: ALTER TABLE is not able to parse length restriction in index creation

    2010-02-14  Andreas Otto  <andreas@otto-hanika.de>

        * Fixed bug #13380: Recursive deletion of alternative page languages

    2010-02-13  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #13529: DISTINCT should not be used as a function

    2010-02-09  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #13490: Where clause 0=0 cannot be parsed

    2010-02-08  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #13464: ORA-00920: invalid relational operator in module statistics [indexed_search]
        * Fixed bug #13463: Modfunc2 (statistics) is not compatible with DBAL [indexed_search]

    2010-02-08  Steffen Kamper  <info@sk-typo3.de>

        * Reverted Follow-up to #13448: Unset another variable

    2010-02-08  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #13456: Typo in rsaauth ext_tables.sql
        * Fixed bug #13257: PHP warning stristr() in Configuration -> Search under PHP 5.3 (thanks to Steffen Gebert)

    2010-02-07  Christian Kuhn  <lolli@schwarzbu.ch>

        * Follow-up to #13448: Unset another variable
        * Fixed bug #13365: Table headers in t3lib_fullsearch (thanks to Georg Ringer)
        * Fixed bug #13448: Typo in BE cache init section
        * Fixed bug #13193: Day of week in scheduler cron command is not calculated correctly

    2010-02-06  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #13430: Cannot parse INSERT when VALUES has no space before left parenthesis

    2010-02-05  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #13391: JS-error in common.js crashes flash uploader

    2010-02-05  Francois Suter  <francois@typo3.org>

        * Fixed bug #13323: "Allow preview of whole workspace" misses checkbox
        * Cleanup #13377: Provide a manual for system extension saltedpasswords (thanks to Marcus Krause)

    2010-02-02  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #13368: Method filelink of tslib_content uses 'target' instead of 'fileTarget'
        * Fixed bug #12903: ORA-00918: column ambiguously defined [indexed_search]

    2010-02-01  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #13388: Missing colon in locallang for DB and File mount (thanks to Georg Ringer)

    2010-01-27  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #12681: Select/Deselect all should be visible as link (Thanks to Georg Ringer)

    2010-01-26  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12688: MM relations: rollback not working / sys_history wrong (thanks to Ralf Hettinger)
        * Update #13327: Update ExtCore to version 3.0.0

    2010-01-23  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #13230: Using TYPO3_version with "xxx-dev" won't be parsed correct in EM

    2010-01-20  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #13270: t3lib_cache_backend_dbbackendtestcase does not reflect current db backend table definitions

    2010-01-18  Benjamin Mack  <benni@typo3.org>

        * Fixed #11089: Fixing the built-in shopping basket (Thanks to Mathias Schreiber)

    2010-01-17  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #13093: Massuploader: Window is not closable (Thanks to Steffen Gebert)
        * Fixed bug #12742: BE-login screen: Login box with spinner becomes to small and label not centered (Thanks to Steffen Gebert)
        * Fixed bug #13167: Flash Uploader error messages should be more descriptive / Improve error handling of massuploader (Thanks to Steffen Gebert)

    2010-01-17  Andreas Otto  <andreas@otto-hanika.de>

        * Fixed bug #13254: Flash Messages in wizard "create multiple pages" (Thanks to Georg Ringer)

    2010-01-16  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #12553: Text "A simple table with up to 8 columns" is wrong (Thanks to Georg Ringer)
        * Fixed bug #13255: Wrong text in wizard "create multiple pages" (Thanks to Georg Ringer)

    2010-01-15  Francois Suter  <francois@typo3.org>

        * Fixed bug #11815: Saving translation settings in EM: strcmp() throws warning with PHP5.3 (Thanks to Steffen Gebert, Stefan Geith and Rupert Germann)

<Category:ReleaseNotes/TYPO3_4.3.x> [Category:TYPO3
4.3](Category:TYPO3_4.3 "wikilink") <Category:2010>
