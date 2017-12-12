Release Notes for TYPO3 4.4.3
=============================

This document contains information about TYPO3 version 4.4.3 which was
released on September 28, 2010.

News
----

This release is a bugfix release only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    077accc674c469aa00ccb237233a0a8a  dummy-4.4.3.tar.gz
    0d5b21b88f3d92ae3dd6516e8d9ab95a  dummy-4.4.3.zip
    2d4ec48c69c086f5b8efb9d4e517b590  typo3_src+dummy-4.4.3.zip
    22d496e941b19ae26d374f1ea44c6d44  typo3_src-4.4.3.tar.gz
    d06bf08ddf8f526bd8e246690617574f  typo3_src-4.4.3.zip
    50453b834d34a9e2d92b9cc67c14a1ea  introductionpackage-4.4.3.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-09-28  Benjamin Mack  <benni@typo3.org>

        * Release of TYPO3 4.4.3

    2010-09-28  Xavier Perseguers  <typo3@perseguers.ch>

        * Raised DBAL version from 1.1.7 to 1.1.8

    2010-09-27  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #15820: htmlArea RTE: Failure to install AllowClipboard Helper extension raises js error
        * Fixed bug #15730: htmlArea RTE: Problem editing a new list entry in list of items with inline markup
        * Fixed bug #15818: htmlArea RTE: Erratic behaviour of toolbar in some browsers

    2010-09-26  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow-up to bug #15797: htmlArea RTE: Problem in Firefox inserting non-breaking space with Insert Special Character dialogue

    2010-09-25  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #15430: htmlArea RTE: Text not editable after pasting with server-based cleaning
        * Follow-up to bug #15430: htmlArea RTE: Text not editable after pasting with server-based cleaning
        * Fixed bug #15797: htmlArea RTE: Problem in Firefox inserting non-breaking space with Insert Special Character dialogue
        * Fixed bug #15749: htmlArea RTE: Firefox shows &amp; in external links with query string
        * Fixed bug #15512: htmlArea RTE: Initialization in flexforms broken with TYPO3 4.4
        * Follow-up to bug #15622: t3lib_TCEforms_inline registers superfluous nested level when renderFieldsOnly is set
        * Fixed bug #15569: htmlArea RTE: RTE not loading when ExtJS 3.2.1 is used

    2010-09-25  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #15748: BE input validation "time" rejects 0:00 and 24:00 (Thanks to Lars Peipmann)

    2010-09-24  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #15373: Page browser single table list view: Entering page number doesn't work
        * Fixed bug #15642: Wrong order of quote and escape in LIKE DB clause (Thanks to Marcus Krause)
        * Fixed bug #15787: Misleading security message in extension manager (Thanks to Marcus Krause)

    2010-09-24  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #15653: Only show upload comments that are newer than installed version in update function of EM

    2010-09-23  Steffen Kamper  <steffen@typo3.org>

        * Follow-up to 15691: Javascript Error in taskcenter

    2010-09-22  Ernesto Baschny <ernst@cron-it.de>

        * Fixed bug #15685: Enhancement of t3lib_div::testInt (#15020) introduced a different behaviour. This restores original behaviour. (Thanks to Helmut Hummel)

    2010-09-22  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15465: sys_action: setting mountpoints as non-admin (Thanks to Georg Ringer)
        * Fixed bug #15761: tslib_menu misses test of html5

    2010-09-21  Benjamin Mack  <benni@typo3.org>

        * Fixed #13705: Record info in workspace always shows live version (Thanks to Julia Pardanaud)

    2010-09-20  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15753: Pageicons in WS module are broken

    2010-09-20  Francois Suter  <francois@typo3.org>

        * Fixed bug #14783: absRefPrefix should work with $TYPO3_CONF_VARS[BE][RTE_imageStorageDir] (Thanks to Steffen Mueller)
        * Fixed bug #15290: Wrong behavior of workspace preview "Enable Frontend Preview" (Thanks to Andreas Kiessling)

    2010-09-19  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #8260: Update Wizard in install tool force temp-configuration files and load configuration twice

    2010-09-19  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #12964: feedit - EDITPANEL -> "newRecordinPid" doesn't work anymore with feedit (Thanks to Sven Juergens)
        * Fixed bug #3908: DisplayCond => VERSION:IS:false always returns true (Thanks to Daniel Poetzinger)

    2010-09-18  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #5983: Undefined variable is used in t3lib_BEfunc::exec_foreign_table_where_query (Thanks to Oliver Klee)

    2010-09-18  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #11415 - Misleading info: No workspaces found!

    2010-09-17  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #15628: Remove logging when class loading failed in t3lib_autoloader (Thanks to Helmut Hummel)

    2010-09-16  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #15497: [Caching framework] Remove tagIndex from memcached and apc backend

    2010-09-16  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #15531: jumpurl check fails if mime type is not known
        * Fixed bug #15529: jumpurl does not provide a proper download file name with space

    2010-09-14  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #15622: t3lib_TCEforms_inline registers superfluous nested level when renderFieldsOnly is set

    2010-09-13  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15691: Javascript Error in taskcenter

    2010-09-12  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow-up to bug #15326: htmlArea RTE: W3C Markup Validation issues (Thanks to Jigal van Hemert)

    2010-09-12  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15390: sys_action taskcenter create/edit be-user actions do not work (Thanks to Georg Ringer)

    2010-09-09  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #15532: Memory leak when using old page cache

    2010-09-08  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #13073: options.pageTree.showNavTitle = 1 does not work in typo3/browse_links.php (Thanks to Sebastian Michaelsen)

    2010-09-06  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #15635: XHTML validity of backend when sys_action is loaded

    2010-09-05  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #15562: PHP warning for str_pad() in t3lib_div::cmpIPv4() (Thanks to Markus Klein)

    2010-09-04  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #15326: htmlArea RTE: W3C Markup Validation issues

    2010-09-03  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15637: HTML regression in rev 7893
        * Fixed bug #15636: ExtDirect router should throw UnexpectedValueException instead of t3lib_error_exception
        * Fixed bug #15550: t3lib_error_Exception not available in some cases (Thanks to Stefan Galinski)

    2010-09-01  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15615: Fix and improve page renderer unit tests (Thanks to Helmut Hummel)

    2010-08-31  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #15068: htmlArea RTE: Not loading in Firefox 3.0.3

    2010-08-30  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #14858: imageLinkWrap.JSwindow triggers XSS warning or Fails (Thanks to Jigal van Hemert)

    2010-08-30  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #15561: Add information about /dev/urandom to INSTALL.txt

    2010-08-29  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #15354: htmlArea RTE: Remove link option not enabled on double-click in Firefox
        * Follow-up to bug #15354: htmlArea RTE: Remove link option not enabled on double-click in Firefox

    2010-08-29  Francois Suter  <francois@typo3.org>

        * Fixed bug #14143: count_menuItems not working correctly (thanks to Frederic Gaus)

    2010-08-29  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15525: Caching framework database backend does not free mysql resource in collectGarbage() (Thanks to Helmut Hummel)
        * Fixed bug #15258: Creating multiple pages doesn't consider the group permissions for all pages (Thanks to Lorenz Ulrich)

    2010-08-29  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #15294: treeFilterReset disappears + minor optimization (Thanks to Felix Kopp)

    2010-08-28  Stanislas Rolland  <typo3@sjbr.ca>

        * Updated htmlArea RTE version to 2.0.4

    2010-08-28  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15574: t3lib_extmgmTest::getExtensionVersionForLoadedExtensionReturnsExtensionVersion fails (Thanks to Peter K�hn)

    2010-08-27  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #15579: Deprecation text of t3lib_div::fixed_lgd_pre() refers to deprecated function t3lib_div::fixed_lgd() (Thanks to Markus Klein)

    2010-08-27  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #15415: htmlArea RTE: RTEs hidden on load not usable with multiple RTEs in a record
        * Fixed bug #15328: htmlArea RTE: Strange behaviours inserting links in IE
        * Fixed bug #15584: htmlArea RTE: iframe baseURL may be incorrectly set
        * Fixed bug #15516: htmlArea RTE: Safari does not support WISIWYG editing on iPad

    2010-08-27  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #1728: Comma separated list don't accept spaces at "db_layout" in the 'addTables' feature (thanks to Niels Pardon)

    2010-08-26  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #15565: Labels of pages deep in the tree or with long titles are cut off as horizontal scrolling is disabled

    2010-08-26  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #15559: Typo in CSS Styled Content Constants: "Audeo" (Thanks to Sebastian Michaelsen)

    2010-08-26  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #15477: htmlArea RTE: Unlink may unlink the wrong link in IE

    2010-08-25  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #15547: htmlArea RTE may load extJS debug script in FE which makes page loading slow
        * Updated htmlArea RTE manual.

    2010-08-24  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #15439: htmlArea RTE: Deprecated call-time pass-by-reference

    20010-08-24  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #13623: Deprecation log for IMAGE.alttext does not work (Thanks to Sebastian Michaelsen)

    2010-08-23  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12583: htmlArea RTE: RTE fails to load due to security error

    2010-08-23  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15092: Ajax loaded items of inline records are encoded twice (Thanks to Martin Borer)

    2010-08-23  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #15526: No recipient is logged to syslog if sending of mail failed in t3lib_utility_Mail (Thanks to Helmut Hummel)

    2010-08-22  Francois Suter  <francois@typo3.org>

        * Fixed bug #14949: "View Item" does not resolve real MM-relations (thanks to Caspar Stuebs)

    2010-08-20  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug Fixed bug #15514 Bugfix : wrong encoded confirm message in User Admin Module (Thanks to Sven Juergens)
        * Fixed bug #15507: Bug: MEDIA content element ignores stdWrap configuration (Thanks to Jigal van Hemert)

    2010-08-19  Ingo Renner  <ingo@typo3.org>

        * Follow-up to #15079: XCLASS include code missing and private declaration in t3lib_SpriteManager

    2010-08-19  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #15505: t3lib_cache_backend_TransientMemoryBackend is not referenced

    2010-08-19  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15494: fatal error in phpunit BE module

    2010-08-19  Francois Suter  <francois@typo3.org>

        * Fixed bug #15241: Recognize php-fpm sapi for path generation (thanks to Nikolas Hagelstein)

    2010-08-15  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15424: [web_info] allow more than 3 levels for pagetree overview and localization overview

    2010-08-13  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #15450: [felogin] Spelling-error: "reseting" must be "resetting" (Thanks to Stefan Neufeind)

    2010-08-13  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #13662: rsaauth does not work with special characters (like ä ü ö § ) in password (Thanks to Steffen Ritter)

    2010-08-12  Christian Kuhn  <lolli@schwarzbu.ch>

        * Follow-up to #15383: [Unit tests] Uncomment three tests which fail for php 5.3.0 on windows (Thanks to Steffen Kamper)

    2010-08-12  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #3819: #15440: isFirstPartOfStr doesn't work with non-strings (Thanks to Michiel Roos)
        * Follow-up to #3819: t3lib_div::getIndpEnv('TYPO3_DOCUMENT_ROOT') delivers wrong value in Backend
        * Fixed bug #3819: t3lib_div::getIndpEnv('TYPO3_DOCUMENT_ROOT') delivers wrong value in Backend
        * Fixed bug #15020: Enhancement of t3lib_div::testInt (Thanks to Michiel Roos)
        * Fixed bug #15029: Testcase for t3lib_div::isFirstPartOfStr is missing. (Thanks to Nikolas Hagestein)

    2010-08-12  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #15396: [scheduler] Wrong query - crashes with DBAL

    2010-08-11  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #15375: showDomainNameWithTitle doesn't respect hidden records (Thanks to Henrik Ziegenhain)
        * Fixed bug #15428: Element-Browser page tree has HTML / JS Errors (Thanks to Sven Juergens)

    2010-08-11  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #15393: [Caching framework] API usage: Make sure lifetime is NULL or integer
        * Fixed bug #15417: [Caching framework] DbBackend has() returns false for entries with unlimited lifetime

    2010-08-11  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15338: sys_action: Link to edit the sql query action is missing for newly created actions (Thanks to Stefan Galinski)
        * Fixed bug #13802: Hardcoded typo3_src Folder in TestCase tests/t3lib/cache/t3lib_cache_factoryTest.php (Thanks to Stefano Kowalke)

    2010-08-10  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #15389: [Caching framework] Hardcoded frontends of core caches
        * Fixed bug #15388: [Caching framework] Remove default settings for cache configuration
        * Fixed bug #15180: [Unit tests] t3lib_iconWorks and t3lib_SpriteManager (Thanks to Fabien Udriot)
        * Fixed bug #15383: [Unit tests] Add tests for t3lib_div::validEmail
        * Fixed bug #15382: [Unit tests] Streamline and refactor t3lib_divTest

    2010-08-09  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15403: Missing icons in workspace modules (swap version) (Thanks to Georg Ringer)

    2010-08-09  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #15323: Small typo in class.t3lib_spritemanager.php's deprecationLog Message (Thanks to Sven Juergens)
        * Follow-up to bug #15104: Fixed parse error

    2010-08-07  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #15104: Validation erros in tstemplate (Thanks to Georg Ringer)
        * Fixed bug #15394: Improve t3lib_SpriteManager code comments
        * Fixed bug #7901: Workaround for PHP bug with Locale tr_TR (Thanks to Reinhard Führicht)

    2010-08-08  Susanne Moog  <typo3@susanne-moog.de>

        * Fixed bug #14952: Opendocs Module relies on taskcenter_recent causing fatal error with new taskcenter (thanks to Georg Ringer and Philipp Gampe)
        * Fixed bug #15131: Linebreaks do not work anymore using '--linebreak--' in palettes (thanks to Caspar Stuebs)
        * Fixed bug #15014: Switching workspaces does not reload frames in IE6 (thanks to Andreas Kiessling)

    2010-08-07  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #15386: [Caching framework] Remove needless constant in cache manager
        * Fixed bug #14971: Unit test for sanitizeLocalUrl fails on installations inside a subdirectory (thanks to Stefan Galinski & Pascal Jungblut)

<Category:ReleaseNotes/TYPO3_4.4.x> [Category:TYPO3
4.4](Category:TYPO3_4.4 "wikilink") <Category:2010>
