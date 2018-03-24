Release Notes for TYPO3 4.3.6
=============================

This document contains information about TYPO3 version 4.3.6 which was
released on September 28, 2010.

News
----

This release is a bugfix release only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    a213416365e234e1fae4eff7a65239bd  dummy-4.3.6.tar.gz
    78bed486bd096a643201ad0a3d020b6c  dummy-4.3.6.zip
    78a69e45e4d35d019978dee541be3aaa  typo3_src-4.3.6.tar.gz
    ff235fe195fa7e015263c8714df6674a  typo3_src-4.3.6.zip
    e4781df2bd2ab1cf3dcaf400a206cdaf  typo3_src+dummy-4.3.6.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-09-28  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.3.6

    2010-09-28  Xavier Perseguers  <typo3@perseguers.ch>

        * Raised DBAL version from 1.0.5 to 1.0.6

    2010-09-27  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #15730: htmlArea RTE: Problem editing a new list entry in list of items with inline markup

    2010-09-25  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #15430: htmlArea RTE: Text not editable after pasting with server-based cleaning
        * Follow-up to bug #15430: htmlArea RTE: Text not editable after pasting with server-based cleaning
        * Fixed bug #15749: htmlArea RTE: Firefox shows &amp; in external links with query string

    2010-09-25  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #15748: BE input validation "time" rejects 0:00 and 24:00 (Thanks to Lars Peipmann)

    2010-09-24  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #15642: Wrong order of quote and escape in LIKE DB clause (Thanks to Marcus Krause)
        * Fixed bug #5983: Undefined variable is used in t3lib_BEfunc::exec_foreign_table_where_query
        * Fixed bug #15787: Misleading security message in extension manager (Thanks to Marcus Krause)

    2010-09-24  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #15653: Only show upload comments that are newer than installed version in update function of EM

    2010-09-21  Benjamin Mack  <benni@typo3.org>

        * Fixed #13705: Record info in workspace always shows live version (Thanks to Julia Pardanaud)

    2010-09-20  Francois Suter  <francois@typo3.org>

        * Fixed bug #14783: absRefPrefix should work with $TYPO3_CONF_VARS[BE][RTE_imageStorageDir] (thanks to Steffen Mueller)

    2010-09-19  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #8260: Update Wizard in install tool force temp-configuration files and load configuration twice

    2010-09-19  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #12964: feedit - EDITPANEL -> "newRecordinPid" doesn't work anymore with feedit (Thanks to Sven Juergens)
        * Fixed bug #3908: DisplayCond => VERSION:IS:false always returns true (Thanks to Daniel Poetzinger)

    2010-09-18  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #11415 - Misleading info: No workspaces found!

    2010-09-17  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #15628: Remove logging when class loading failed in t3lib_autoloader (Thanks to Helmut Hummel)

    2010-09-16  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #15497: [Caching framework] Remove tagIndex from memcached and apc backend

    2010-09-16  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #15531: jumpurl check fails if mime type is not known
        * Fixed bug #15529: jumpurl does not provide a proper download file name with space

    2010-09-09  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #15532: Memory leak when using old page cache

    2010-09-06  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #15635: XHTML validity of backend when sys_action is loaded

    2010-09-03  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15550: t3lib_error_Exception not available in some cases (Thanks to Stefan Galinski)

    2010-08-31  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #14858: imageLinkWrap.JSwindow triggers XSS warning or Fails (Thanks to Jigal van Hemert)

    2010-08-30  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #15561: Add information about /dev/urandom to INSTALL.txt

    2010-08-29  Francois Suter  <francois@typo3.org>

        * Fixed bug #14143: count_menuItems not working correctly (thanks to Frederic Gaus)

    2010-08-29  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15525: Caching framework database backend does not free mysql resource in collectGarbage() (Thanks to Helmut Hummel)

    2010-08-28  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #15482: htmlArea RTE: Entering line breaks with Safari not possible in TYPO3 3.4.5
        * Updated htmlArea RTE version to 1.8.12

    2010-08-27  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #1728: Comma separated list don't accept spaces at "db_layout" in the 'addTables' feature (thanks to Niels Pardon)

    2010-08-22  Francois Suter  <francois@typo3.org>

        * Fixed bug #14949: "View Item" does not resolve real MM-relations (thanks to Caspar Stuebs)

    2010-08-20  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15514 Bugfix : wrong encoded confirm message in User Admin Module (Thanks to Sven Juergens)
        * Fixed bug #15507: Bug: MEDIA content element ignores stdWrap configuration (Thanks to Jigal van Hemert)

    2010-08-19  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #15505: t3lib_cache_backend_TransientMemoryBackend is not referenced

    2010-08-19  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15494: fatal error in phpunit BE module

    2010-08-13  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #15450: [felogin] Spelling-error: "reseting" must be "resetting" (Thanks to Stefan Neufeind)

    2010-08-13  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #13662: rsaauth does not work with special characters in password (Thanks to Steffen Ritter)

    2010-08-12  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #3819: t3lib_div::getIndpEnv('TYPO3_DOCUMENT_ROOT') delivers wrong value in Backend

    2010-08-12  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #15396: [scheduler] Wrong query - crashes with DBAL

    2010-08-11  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #15375: showDomainNameWithTitle doesn't respect hidden records (Thanks to Henrik Ziegenhain)

    2010-08-11  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #15393: [Caching framework] API usage: Make sure lifetime is NULL or integer
        * Fixed bug #15417: [Caching framework] DbBackend has() returns false for entries with unlimited lifetime

    2010-08-11  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #13802: Hardcoded typo3_src Folder in TestCase tests/t3lib/cache/t3lib_cache_factoryTest.php (Thanks to Stefano Kowalke)

    2010-08-08  Susanne Moog  <typo3@susanne-moog.de>

        * Fixed bug #15014: Switching workspaces does not reload frames in IE6 (thanks to Andreas Kiessling)

    2010-08-08  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #7901: Workaround for PHP bug with Locale tr_TR (Thanks to Reinhard Führicht)

    2010-08-07  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #15386: [Caching framework] Remove needless constant in cache manager
