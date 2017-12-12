Release Notes for TYPO3 CMS 6.2.5
=================================

This document contains information about TYPO3 CMS 6.2.5 which was
released on September 23rd, 2014.

News
----

This release is a bug fix release.

Notes
-----

This is part of a combined release of TYPO3 CMS 4.5.36, 6.1.11 and
6.2.5.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    b011fe9a965ca97473dd30d1f6a0fb2c  typo3_src-6.2.5.tar.gz
    4011750ad515f521cf486bc00b6cf5e9  typo3_src-6.2.5.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[6.2.4](TYPO3_CMS_6.2.4 "wikilink"):

    2014-09-23  099422b                  [RELEASE] Release of TYPO3 6.2.5 (TYPO3 Release Team)
    2014-09-23  b137fd3  #61813          Revert "[BUGFIX] Invalid rendering of high resolution icons in lists" (Oliver Hader)
    2014-09-21  0db092e  #61656          [BUGFIX] Invalid rendering of high resolution icons in lists (Eric Chavaillaz)
    2014-09-21  93e48b9  #60540          [BUGFIX] Prevent fatal when importing a t3d file without fal information (Sascha Egerer)
    2014-09-21  1be26f4  #61261          [BUGFIX] Add permission checks to edit icons in filelist and context menu (Franz Koch)
    2014-09-21  80aabff  #61295          [BUGFIX] LocalDriver->calculateBasePath doesn't properly sanitize (Bernhard Kraft)
    2014-09-20  8ca2c03  #61743          [CLEANUP] Unqoute integer in BackendUserSessionRepository (Andreas Fernandez)
    2014-09-20  aee2c5a  #60726          [BUGFIX] add _loadRealInstance in f:form ViewHelper (Stefan Froemken)
    2014-09-19  6bc5dd2  #61721          [BUGFIX] Invalid closure in AbstractMenuContentObject (Francois Suter)
    2014-09-18  f41086b  #45834          [BUGFIX] Transfer curlProxyServer to new HTTP settings (Ernesto Baschny)
    2014-09-18  d1a3a10  #55828          [TASK] Always show action icons in tables (em, docs) (Felix Kopp)
    2014-09-18  4aa9fe9  #59107          [BUGFIX] Extbase behaviour concerning workspaces (Oliver Hader)
    2014-09-18  9c0ba3a  #61699          [BUGFIX] Workspace Preview not working with lockSSL=3 (Oliver Hader)
    2014-09-17  0d5aa64  #61679          [BUGFIX] Indexed Search: Add missing return statement (Markus Klein)
    2014-09-16  4482a1b  #61621          [TASK] Introduce .editorconfig file (Frank Nägler)
    2014-09-16  a2c5fe0  #61640          [BUGFIX] Follow up: Remove PHP warnings when no icon is found (Nicole Cordes)
    2014-09-16  84ffa62  #61639          [BUGFIX] Dummy WHERE condition compatibility (Andreas Fernandez)
    2014-09-16  51b2ad5  #61617          [BUGFIX] Don't prepend absolute image URLs (Franz Koch)
    2014-09-16  d5dc368  #57733          [TASK] Add a "save and new" button in scheduler module (Eric Chavaillaz)
    2014-09-16  4f78570  #61204          [TASK] Change relevance sorting in EM (Andreas Fernandez)
    2014-09-15  7cc5272  #27250          [TASK] Remove error_reporting from thumbs.php (Stefan Neufeind)
    2014-09-15  9e027e3  #61523          [TASK] Split xdebug.max_nesting_level into two error levels (Nicole Cordes)
    2014-09-14  bf3c695                  Revert "[BUGFIX] Improve l10n_mode config for sys_file_reference" (Anja Leichsenring)
    2014-09-14  f96c101  #59972          [BUGFIX] Improve l10n_mode config for sys_file_reference (Alexander Stehlik)
    2014-09-14  9bfc3d3  #61569          [BUGFIX] Fix typos in comment (method header) (Michael Schams)
    2014-09-14  1572b5f  #59527          [BUGFIX] Functional Test: force storage record to be caseSensitive "1" (Fabien Udriot)
    2014-09-13  0f22d2f  #60429          [BUGFIX] Use title & alternative fields in filelinks (Georg Ringer)
    2014-09-12  6d169dd  #39967          [BUGFIX] Followup 2 to mod.SHARED.colPos_list fix (Jigal van Hemert)
    2014-09-12  b60a40c  #39967          [BUGFIX] Followup to mod.SHARED.colPos_list fix (Helmut Hummel)
    2014-09-11  7eab013  #50396          [BUGFIX] RootlineUtility wrongly handles group-type fields (Francois Suter)
    2014-09-09  d541123  #61483          [TASK] Add more files to .gitignore (Nicole Cordes)
    2014-09-09  fa224be  #59440          [BUGFIX] Use FE category collection for pages (Francois Suter)
    2014-09-09  05464e7  #61475          [BUGFIX] Cache missing class information only in productive context (Nicole Cordes)
    2014-09-09  fbbba17  #60629          [TASK] Add unit tests for forceAbsoluteUrl() (Markus Klein)
    2014-09-09  76a81f3  #59981          [BUGFIX] Enable skipped tests by properly creating mocks (Helmut Hummel)
    2014-09-09  3955abc  #58138          [TASK] Add possibility to register a module as navigation (Helmut Hummel)
    2014-09-09  57a03ce  #59368          [BUGFIX] Nested flexforms no longer throw exception (Thomas Christiansen)
    2014-09-09  1e5ec30  #60129          [CLEANUP] Remove comment header in ext_emconf (Christian Kuhn)
    2014-09-09  bdc1f2b  #61268          [BUGFIX] Respect tablenames, fieldname when updating mm record (Frans Saris)
    2014-09-09  0fb3420  #61465          [TASK] Add CLI option to set DB socket for functional tests (Steffen Müller)
    2014-09-08  64d6cf5  #61458          [TASK] Improve deprecation message in show_rechis.php (Wouter Wolters)
    2014-09-08  d90794a  #55648          [BUGFIX] Line breaks in string in compile* methods of the SqlParser (Stefano Kowalke)
    2014-09-08  03630eb  #54490          [BUGFIX] Overriding TCA results in Exception (Stefan Froemken)
    2014-09-08  dbe5ee2  #61300          [BUGFIX] Add file existence check before processing it (Frank Nägler)
    2014-09-08  31443ca  #61175          [BUGFIX] Fix clear_cache for XCache < 3.0 (Alexander Opitz)
    2014-09-08  9dd8c44  #34298          [TASK] Add indexed search icon to plugin wizard (Kay Strobach)
    2014-09-07  6d0ffc8  #61394          [BUGFIX] Remove PHP warnings when no icon is found in FormEngine (Benjamin Mack)
    2014-09-07  2847948                  [TASK] Travis-ci: Disable apc in PHP 5.4 (Christian Kuhn)
    2014-09-07  31a40d8  #61395          [TASK] Use SpriteIcon for Add icon in Scheduler (Felix Kopp)
    2014-09-07  bef3955  #53182          [BUGFIX] Fix loading of registry entries for namespace (Frank Nägler)
    2014-09-07  cb3dc5e  #39967          [BUGFIX] colPos_list sets access to edit areas (Jigal van Hemert)
    2014-09-05  0489d18  #61135          [BUGFIX] indexed_search: in some cases indexing does not work (Samir Rachidi)
    2014-09-05  a4d88d1  #61276          [BUGFIX] Make TCA property "exclusiveKeys" work with single key (Roland Waldner)
    2014-09-05  3c1b2ca  #61117          [BUGFIX] where statement in typoscript select with stdWrap (Kilian Hann)
    2014-09-05  434d767  #61292          [BUGFIX] Allow integers to be converted to objects (Helmut Hummel)
    2014-09-03  e50f326  #61235          [TASK] Cleanup error handling code and settings description (Markus Klein)
    2014-09-02  f525531  #51420          [BUGFIX] getAvailableWorkspaces called statically (Wouter Wolters)
    2014-08-29  89fddd1  #61226          [BUGFIX] Let Web-View respect TCEMAIN.previewDomain (Georg Kühnberger)
    2014-08-27  4f6e03c  #61229          [BUGFIX] Add missing check in PreparedStatement->execute() (Jacob Rasmussen)
    2014-08-26  aa715a6  #61129          [TASK] SqlParser: Unify internal usage of tableType/engine (Stefan Neufeind)
    2014-08-25  05b0007  #55707          [TASK] Missing stdWrap for select.recursive TypoScript property (Matthias Kappenberg)
    2014-08-25  c4e84d4  #60635          [BUGFIX] Make context menus work with modules (Helmut Hummel)
    2014-08-23  85c8b9f  #59809          [BUGFIX] EM using bad indexes (Stefan Froemken)
    2014-08-23  80cff5d  #58792          [BUGFIX] Remove non accessible pages from browse menu (Kay Strobach)
    2014-08-23  1338779  #60474          [BUGFIX] Fix call to undefined function when importing t3x (René Bigler)
    2014-08-23  a75aec4  #60697          [BUGFIX] QueryGenerator getTreeList negative ids (Klaas Johan Kooistra)
    2014-08-23  3df5f98  #60199          [BUGFIX] Collect correct information on elements in page (Jigal van Hemert)
    2014-08-20  8749d6d  #60857          [TASK] Change fetch of maximum version using LEFT JOIN (Andreas Fernandez)
    2014-08-20  36d1be9  #60263          Revert "[BUGFIX] Unified maxitems default value for group fields" (Wouter Wolters)
    2014-08-20  7675175  #60764          [BUGFIX] Make sure all new files are indexed (Frans Saris)
    2014-08-20  3bb579d  #61051          [BUGFIX] Avoid DB error on writing to log (Markus Klein)
    2014-08-15  85408c4  #36754          [BUGFIX] "Illegal mix of collations" in Upgrade Wizard (Lars Trebing)
    2014-08-14  c6bd628  #60054          [TASK] Refactor file references relations retrieval (Oliver Hader)
    2014-08-14  32687d3  #60015          [TASK] Simplify record icons in workspace module (Oliver Hader)
    2014-08-13  443233a  #56265          [BUGFIX] Admin panel shows wrong cache information (Dmitry Dulepov)
    2014-08-13  1c8e14c  #60356          [TASK] Extend install tool suhosin checks (Oliver Hader)
    2014-08-13  db808b1  #60577          [BUGFIX] JavaScript error in Install Tool (Wouter Wolters)
    2014-08-13  46887ca  #60758          [BUGFIX] Use defaultMailFromName setting in install tool (Oliver Hader)
    2014-08-13  b8e7f7a  #60912          [BUGFIX] Show properties of stdClass object in <f:debug> (Christian Weiske)
    2014-08-13  4a820fa  #60859          [BUGFIX] Updating "current_version" fails with some DBMS (Andreas Fernandez)
    2014-08-13  65015b3  #60925          [BUGFIX] Correctly parse suhosin configuration (Markus Klein)
    2014-08-13  f184ddc  #59113          [BUGFIX] Failing cascaded delete action of localized elements (Oliver Hader)
    2014-08-13  6f94500  #60249          [BUGFIX] Publishing delete placeholder affects other workspaces (Oliver Hader)
    2014-08-13  ed5cc87  #59853          [BUGFIX] Wrong nesting of deleted versioned child records (Oliver Hader)
    2014-08-13  ca6e7bb  #59828          [BUGFIX] Page Tree not always updated after workspace actions (Oliver Hader)
    2014-08-12  aa69353  #60923          [BUGFIX] Keep phpunit 4.1 branch (Christian Kuhn)
    2014-08-04  c6cee41  #60639          [BUGFIX] Adjust variable name for install tool password hint (Anja Leichsenring)
    2014-08-02  14fc750  #60494          [BUGFIX] Fetch related records for existing uids only (Jo Hasenau)
    2014-08-01  94d9d83  #58898          [BUGFIX] Prevent exception in RTE filelinks upgrade wizard (Mattias Nilsson)
    2014-07-28  50bf108  #60627          [BUGFIX] Refine the error message of checkMaximumFileUploadSize (Markus Klein)
    2014-07-27  9857997  #60600          [BUGFIX] Show loading spinner when Updating TER list on search module (Sascha Egerer)
    2014-07-27  7da90b5  #60613          [BUGFIX] Fix Extbase language fallback in query parser (Helmut Hummel)
    2014-07-26  951d2d1  #59843          [BUGFIX] Fix the help message of CLI (Stefano Kowalke)
    2014-07-25  28192cb  #60583          [CLEANUP] Let expected exceptions test for code, not text (Anja Leichsenring)
    2014-07-25  3c7c483  #53572          [BUGFIX] Change wording for TYPO3 dependency errors (Susanne Moog)
    2014-07-25  1296f38  #60570          [BUGFIX] Install Tool image tests: black background after scaling (Susanne Moog)
    2014-07-25  acbd9ce  #55317          [BUGFIX] Extension manager page browser not disabled on list update (Susanne Moog)
    2014-07-25  0e6b660  #60572          [TASK] Add missing unit test for enumeration (Sascha Egerer)
    2014-07-25  2af5f12  #59849          [BUGFIX] Respect global renderReadonly in Tceforms for tree (Lorenz Ulrich)
    2014-07-25  6afcb65  #50566          [BUGFIX] Menu-links generate two empty spaces at closing anchor (Tomita Militaru)
    2014-07-25  fa99ba5  #60365          [BUGFIX] Adjust comment for default HTTP-userAgent (Stefan Neufeind)
    2014-07-25  2095965  #60547          [TASK] Fix wrong named unit tests of the logging framework (Sascha Egerer)
    2014-07-25  5de7287  #60549          [TASK] Add wrapper for GeneralUtility::getIndpEnv in ContentObjectRenderer (Sascha Egerer)
    2014-07-24  e6f3ab7  #59619          [BUGFIX] Make call to isPackageKeyValid non-static (Peter Niederlag)
    2014-07-24  252cab0  #60516          [BUGFIX] Turn isOnSymmetricSide into static function (Peter Niederlag)
    2014-07-24  60ae97a  #56362          [TASK] Keep the changes to PackageStates.php low (Markus Klein)
    2014-07-24  71ae992  #60410          [BUGFIX] Add label for title of "Edit metadata" link (Markus Klein)
    2014-07-24  e9797ef  #60541          [TASK] Remove skipped FAL functional tests (Christian Kuhn)
    2014-07-24  819095e  #59812          [TASK] Add a "save and close" button in the extensionmanager (Eric Chavaillaz)
    2014-07-24  5b8741f  #60529          [BUGFIX] Catch freshly introduced ResourceDoesNotExistException (Anja Leichsenring)
    2014-07-24  3b4cdf3  #60506          [BUGFIX] Fix resource exceptions (Helmut Hummel)
    2014-07-24  7c2550a  #60264          [BUGFIX] Set correct cookie when permalogin is enabled (Gernot Schulmeister)
    2014-07-24  fb8ae23  #60327          [BUGFIX] Change sys_file.size type from INT to BIGINT (Stefan Neufeind)
    2014-07-24  7d42b92  #60245          [BUGFIX] Complete datatable structure fe_groups (Markus Guenther)
    2014-07-24  b4aa2ff  #60316          [BUGFIX] Catch all resource exceptions when parsing RTE links (Helmut Hummel)
    2014-07-23  4dcd4a0  #59874          [BUGFIX] Wrong sys_refindex for deleted child records (Oliver Hader)
    2014-07-23  9823d23  #60482          [TASK] Update wrong copyright header in file BrowseLinks.php (Michael Schams)
    2014-07-22  32b99db  #60457          [BUGFIX] Fix return value of DatabaseConnection::sql_free_result() (Stefano Kowalke)
    2014-07-21  d66dcaa  #60413          [BUGFIX] Fix minor issues in functional testing framework (Helmut Hummel)
    2014-07-20  a56047a  #60180          [BUGFIX] sys_collection_entries column too small (Wouter Wolters)
    2014-07-19  f5085bd  #60251          [BUGFIX] Send test email in Install Tool as HTML (Wouter Wolters)
    2014-07-19  43b778e  #60126          [BUGFIX] Avoid PHP warning in TypoScriptFrontendController (Markus Klein)
    2014-07-15  5d31afd  #60317          [CLEANUP] Final cleanup of TCA Overrides (Helmut Hummel)
    2014-07-14  e3da9d6                  [TASK] Fix composer branch alias for 6.2 branch (Helmut Hummel)
    2014-07-13  9f6150f  #58288          [BUGFIX] Use PATH_site in cache identifier for package cache (Helmut Hummel)
    2014-07-11  303fa53  #59881          [TASK] Extend Regular DataHandler functional tests (Oliver Hader)
    2014-07-10  e64eaff  #60225          [TASK] Clarify exception message for addPlugin() (Helmut Hummel)
    2014-07-09  a364166  #56714          [BUGFIX] Fix page module styling in Languages view (Tomita Militaru)
    2014-07-09  9cff80f  #60192          [BUGFIX] Collapse icon for accordion not centered in Install Tool (Wouter Wolters)
    2014-07-08  4b76798  #58798          [TASK] Log errors after initial t3d import also if pages are created (Marc Bastian Heinrichs)
    2014-07-08  11fc31e  #59587          [BUGFIX] Followup to CacheBackend patch (Markus Klein)
    2014-07-08  5a11bbe  #59587          [BUGFIX] Too many tags by identifier in CacheBackends (Alexander Opitz)
    2014-07-08  1eebd0b                  [TASK] Set TYPO3 version to 6.2.5-dev (TYPO3 Release Team)


