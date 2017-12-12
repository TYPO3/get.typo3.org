Release Notes for TYPO3 4.2.16
==============================

This document contains information about TYPO3 version 4.2.16 which was
released on December 16, 2010.

News
----

This release is a combined bugfix and security release.

Notes
-----

Due to several security issues found in the TYPO3 Core, there was a
combined release of TYPO3 4.2.16, 4.3.9 and 4.4.5.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-sa-2010-022/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    ad01b11987351a050c0d11663fedef16  dummy-4.2.16.tar.gz
    627944cc19f84b91ff0687cebb832f9e  dummy-4.2.16.zip
    c556a17485887463e67ea0771d7914c4  typo3_src-4.2.16.tar.gz
    f3f01e41bdfbc275b2f6bc8140224b19  typo3_src-4.2.16.zip
    3bb55206eb08e9c9f70b44ab4a168b98  typo3_src+dummy-4.2.16.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-12-16  Oliver Hader  <oliver.hader@typo3.org>

        * Release of TYPO3 4.2.16

    2010-12-16  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #14402: XSS in Install tool (thanks to Benjamin Mack)
        * Fixed bug #16590: t3lib_TSparser::checkIncludeLines() does not check files to be included (thanks to Fabrizio Branca)
        * Fixed bug #15737: quoteStrForLike does not properly escape strings in sql_mode NO_BACKSLASH_ESCAPES
        * Fixed bug #16653: SQL injection problem in class.db_list.inc (thanks to Jigal van Hemert)
        * Fixed bug #15735: FORM content object is susceptible to XSS (thanks to Benjamin Mack)
        * Fixed bug #16362: Directory traversal attack in em_unzip
        * Fixed bug #16593: It is possible to bypass 'verifyFilenameAgainstDenyPattern'

    2010-11-12  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #15456: Changes made by ColorPicker Wizard are not saved (Thanks to Tobias Hoevelborn)

    2010-10-27  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #15503: Improve t3lib_userAuth::getCookie() (Thanks to Michael Bürgi)

    2010-10-18  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #1318: 'removeTag' does not remove closing tags

    2010-10-11  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #12376: typo3temp got filled with thousands of javascript_* files (Thanks to Georg Ringer)
