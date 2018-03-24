Release Notes for TYPO3 4.2.12
==============================

This document contains information about TYPO3 version 4.2.12 which was
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

    763703e33d0e5bd96433f73ee1e3968a  dummy-4.2.12.tar.gz
    bc4b992de07b8172c9a15f712eb78242  dummy-4.2.12.zip
    853923ea71cdd082a6e7a88f569b6655  typo3_src-4.2.12.tar.gz
    2b4fd2c72a058f8cfef25d82047744d7  typo3_src-4.2.12.zip
    28ca06e447ca2abc322a7c26a5a4caf4  typo3_src+dummy-4.2.12.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-02-23  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.2.12

    2010-02-23  Oliver Hader  <oliver@typo3.org>

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

    2010-02-21  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #13406: thumbs.php: Thumbnails for images with transparent background look ugly (Thanks to Andreas Wolf and Steffen Ritter)

    2010-02-21  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #12220: String literals quoted as identifiers

    2010-02-01  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #13388: Missing colon in locallang for DB and File mount (thanks to Georg Ringer)

    2010-01-27  Xavier Perseguers  <typo3@perseguers.ch

        * Fixed bug #12553: Text "A simple table with up to 8 columns" is wrong (Thanks to Georg Ringer)

    2010-01-18  Benjamin Mack  <benni@typo3.org>

        * Fixed #11089: Fixing the built-in shopping basket (Thanks to Mathias Schreiber)

    2010-01-16  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #13255: Wrong text in wizard "create multiple pages" (Thanks to Georg Ringer)
