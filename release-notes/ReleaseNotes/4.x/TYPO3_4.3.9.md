Release Notes for TYPO3 4.3.9
=============================

This document contains information about TYPO3 version 4.3.9 which was
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

    1abeee37e26cbd3b61a4dabb6a0ed540  dummy-4.3.9.tar.gz
    239ae71edace3d8aa0b9bd16d929b1cc  dummy-4.3.9.zip
    fd17e827bc9fdc55e967c6a6d741b2a8  typo3_src-4.3.9.tar.gz
    3b9b0f8897d10b420aff321930e00b06  typo3_src-4.3.9.zip
    9e794e872c2a96dd79fec90806a67838  typo3_src+dummy-4.3.9.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-12-16  Oliver Hader  <oliver.hader@typo3.org>

        * Release of TYPO3 4.3.9

    2010-12-16  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #14402: XSS in Install tool (thanks to Benjamin Mack)
        * Fixed bug #16590: t3lib_TSparser::checkIncludeLines() does not check files to be included (thanks to Fabrizio Branca)
        * Fixed bug #15737: quoteStrForLike does not properly escape strings in sql_mode NO_BACKSLASH_ESCAPES
        * Fixed bug #16653: SQL injection problem in class.db_list.inc (thanks to Jigal van Hemert)
        * Fixed bug #15735: FORM content object is susceptible to XSS (thanks to Benjamin Mack)
        * Fixed bug #16362: Directory traversal attack in em_unzip
        * Fixed bug #16485: Cross-Site Scripting in showpic functionality
        * Fixed bug #16593: It is possible to bypass 'verifyFilenameAgainstDenyPattern'
        * Follow-up to bug #16593: Added unit tests

    2010-12-01  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #16604: Changes in workspace are not shown automatically in pagetree
        * Fixed bug #15495: Pagetree fails to reload

    2010-11-30  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #16501: DBAL does not support multi-column indexes in create table queries

    2010-11-30  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #16614: common.js resets TYPO3 namespace (Thanks to Peter Kühn)

    2010-11-26  Francois Suter  <francois@typo3.org>

        * Fixed bug #16573: Register count_MENUOBJ is not properly initialized

    2010-11-26  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #16321: [scheduler] Numeric zero for representation of weekday sunday is not accepted (Thanks to Marcus Krause)
        * Fixed bug #16582: [Caching framework] Remove misleading memcached configuration example from config_default
        * Fixed bug #16317: [scheduler] Valid values generated from cron command does not contain integers only (Thanks to Marcus Krause)

    2010-11-25  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #16319: [scheduler] CronCmd class variable "values" does not contain integers only (Thanks to Marcus Krause)

    2010-11-25  Jigal van Hemert <jigal@xs4all.nl>

        * Fixed bug #16322: Incorrect regexp in substituteMarkerArray

    2010-11-24  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #16124: htmlArea RTE: Links are incorrectly updated in Google Chrome

    2010-11-23  Steffen Ritter  <typo3@steffen-ritter.net>

        * Fixed bug #16517: t3lib_beFunc::getRecordWSOL() does not use it's param $useDeleteClause in else branch

    2010-11-12  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #15456: Changes made by ColorPicker Wizard are not saved (Thanks to Tobias Hoevelborn)

    2010-11-11  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #16314: Incorrect use of is_dir in class.tx_rtehtmlarea_clearrtecache.php (Thanks to Juergen Deisenroth)

    2010-11-11  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #16352: [saltedpasswords] Login with bulk updated passwords from t3sec_saltedpw not working (Thanks to Marcus Krause)

    2010-11-06  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #16214: Bug: Change value of Media(Flash) parameter (Thanks to Janos Thiele)

    2010-11-05  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #16130: buggy initialization of flash uploader when only certain file extensions are allowed (Thanks to Andreas Kiessling)

    2010-11-04  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #15656: indexed_search: Template corrections of #14130 not applied to the CSS template (Thanks to Lorenz Ulrich)

    2010-11-03  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15995: Bug: doktype limitation is not applied to alternative page languages (pages_language_overlay) (Thanks to Andreas Kiessling)

    2010-10-29  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #15551: [IRRE] Open all child records when opening parent records (Thanks to Sebastian Fischer)
        * Fixed bug #16140: [reports] PHP warning on missing array in reports system extension (Thanks to Rudi Meyer)

    2010-10-29  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #16155: t3lib_db::INSERTquery misses a space when generering the INSERT INTO statement

    2010-10-27  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #15503: Improve t3lib_userAuth::getCookie() (Thanks to Michael Bürgi)

    2010-10-18  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #16050: htmlArea RTE: Backspacing in empty editing area may raise js error
        * Updated htmlArea RTE version to 1.8.13

    2010-10-18  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #1318: 'removeTag' does not remove closing tags

    2010-10-17  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #15657: IRRE: Foreign selector with groupdb won't add new items (Thanks to Thomas Maroschik)

    2010-10-17  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #16022: Size calculation function can only deal with integers

    2010-10-15  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #16005: Live workspace does not respect move-to-placeholders

    2010-10-15 Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15993: Bug: Felogin shouldn't show the permalogin form controls when permalogin is set to "forced on" in install tool

    2010-10-14  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #103: No Plain-text List Option

<Category:ReleaseNotes/TYPO3_4.3.x> [Category:TYPO3
4.3](Category:TYPO3_4.3 "wikilink") <Category:2010>
