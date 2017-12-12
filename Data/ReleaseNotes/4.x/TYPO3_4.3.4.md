Release Notes for TYPO3 4.3.4
=============================

This document contains information about TYPO3 version 4.3.4 which was
released on July 28, 2010.

News
----

This release is a combined security and bugfix release.

Notes
-----

Due to several security issues found in the TYPO3 Core, there was a
combined release of TYPO3 4.1.14, 4.2.13, 4.3.4 and 4.4.1.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-sa-2010-012/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    74caf58deccfb4792744ead7d6126596  dummy-4.3.4.tar.gz
    7ebdf1efa89c91faf3a1c2779e0c2e57  dummy-4.3.4.zip
    85f5fb5e05b6a065bbd42ebfaaf2128b  typo3_src-4.3.4.tar.gz
    1fc6c8a676157f0c9cef215425eca1bf  typo3_src-4.3.4.zip
    aca5028aed979ef5d721375f96fe56ac  typo3_src+dummy-4.3.4.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-07-28  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.3.4

    2010-07-28  Oliver Hader  <oliver@typo3.org>

        * Raised Fluid from 1.0.2 to 1.1.0
        * Fixed bug #14978: XSS in file tree (thanks to Georg Ringer)
        * Fixed bug #13292: TYPO3 error message reveals path to web root (thanks to Xavier Perseguers)
        * Fixed bug #11618: XSS vulnerability in install tool / BE login (thanks to Georg Ringer)
        * Fixed bug #14950: XSS in t3editor (thanks to Tobias Liebig)
        * Fixed bug #14850: Information disclosure in t3lib_htmlmail (thanks to Georg Ringer)
        * Fixed bug #13961: XSS in impexp (thanks to Georg Ringer)
        * Fixed bug #13960: XSS in sys_action (thanks to Georg Ringer)
        * Fixed bug #13958: XSS in BE Log (thanks to Georg Ringer)
        * Fixed bug #14317: XSS in Extension Manager (thanks to Georg Ringer)
        * Fixed bug #13957: XSS in template analyzer (thanks to Georg Ringer)
        * Fixed bug #14215: XSS in beuser (thanks to Georg Ringer)
        * Fixed bug #12458: Session fixation possibility in new sesion machanism of the install tool (thanks to Benjamin Mack, Helmut Hummel and Ernesto Baschny)
        * Fixed bug #13989: Mitigate PHP's RNG vulnerability (thanks to Marcus Krause and Helmut Hummel)
        * Fixed bug #12739: XSS in shortcuts (thanks to Francois Suter and Georg Ringer)
        * Fixed bug #13885: XSS in indexed search BE module (thanks to Benjamin Mack)
        * Fixed bug #15254: Extension Manager allows to edit arbitrary files if noEdit flag is not set (thanks to Helmut Hummel)
        * Fixed bug #14389: phtml is also PHP extension and should be denied editing / uploading via fileadmin (thanks to Ernesto Baschny)
        * Follow-up to bug #14389: Added unit test
        * Fixed bug #1985: XSS vulnerability in wizard classes
        * Fixed bug #15223: Password request hash in felogin is created with not enough randomness (thanks to Helmut Hummel)
        * Fixed bug #14712: The GET/POST variable mimeType is used to create the http header content-type without verification (thanks to Rupert Germann)
        * Fixed bug #14412: Field value added to foreign_table_where by replacing ###REC_FIELD_THE_FIELD_NAME### is not quoted (thanks to Helmut Hummel and Xavier Perseguers)
        * Fixed bug #14114: Core mailform is open to spam abuse (thanks to Lars Houmark)
        * Fixed bug #12294: Unchecked URL-Redirect parameter in Front-End logon (thanks to Steffen Kamper and Helmut Hummel)
        * Fixed bug #13137: redirect/returnUrl isn't validated in core (thanks to Georg Ringer and Marcus Krause)

    2010-07-28  Sebastian Kurfuerst  <sebastian@typo3.org>

        * Raised Extbase from 1.0.2 to 1.1.0

    2010-07-27  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #13649: Deprecated function sql_regcase in cms/tslib/class.tslib_pagegen.php (Thanks to Martin M¸ller)

    2010-07-27  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #15121: htmlArea RTE: Javascript Error in IE7 prevent Link dialogue from opening

    2010-07-27  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #15196: [caching framework] Speedup t3lib_cache_backend_DbBackend::has($entryIdentifier) (Thanks to Michael Knabe)
        * Fixed bug #13060: t3lib_htmlmail: Deprecated message with PHP 5.3 for sql_regcase (Thanks to Martin M√ºller)

    2010-07-26  Dmitry Dulepov  <dmitry@typo3.org>

        * Reverted the fix for #15128 because further investigation is required

    2010-07-21  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #15179: Tree depth retrieval inconsistently limited to 20 levels int3lib_pageSelect

    2010-07-19  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #15130: Backend search does not find non-latin1 characters
        * Fixed bug #15128: RTE creates <link> tag incorrectly if there is a non-empty title

    2010-07-14  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #12322: cHash is generated when no parameters are given

    2010-07-13  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #15073: inlineJS creates superfluous markup (Thanks to Georg Ringer)
        * Fixed bug #15098: TS Errors should be shown with flash messages (Thanks to Georg Ringer)

    2010-07-12  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #1235: indexed search: garbage instead of cHash in the "path" link (thanks to Nikolas Hagelstein)

    2010-07-08  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #15049: "Fileextension" is not an English word

    2010-07-07  Susanne Moog  <typo3@susanne-moog.de>

        * Follow-up to #14845: No preview images with referenced files anymore (thanks to Stefan Galinski)

    2010-07-06  Susanne Moog  <typo3@susanne-moog.de>

        * Fixed bug #14845: Bug: Filelist module reports "type" of files also for directories  (thanks to Caspar Stuebs and Andy Grunwald)

    2010-07-06  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #14967: [Caching framework] fileBackend testcase removes files in /sbin

    2010-06-29  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #14905: htmlArea RTE: Image dialogue shows tab "Current picture" when there is no current image

    2010-06-25  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #14866: Quicktime audio format m4a isn't supported

    2010-06-21  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #14601: Date picker does not work on IRRE elements (Thanks to Steffen Ritter)

    2010-06-21  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #8893: eval "timesec" sets seconds to zero (Thanks to Ralf Hettinger and Andy Grunwald)

    2010-06-21  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to #14808 tceforms.js slows down performance of IE dramatically
        * Fixed bug #14800: JS errors prevent JS pased popups from working in IE (Thanks to Jo Hasenau)
        * Fixed bug #14808 tceforms.js slows down performance of IE dramatically (Thanks to Jo Hasenau)
        * Fixed bug #11543: Shortcuts broken if current directory is not in include path (Thanks to Mads Chr. Olesen)

    2010-06-19 Francois Suter  <francois@typo3.org>

        * Fixed bug: #13315: Scheduler: Failed status hides other statuses
        * Fixed bug: #14184: Scheduler: Handle invalid serialized exception objects

    2010-06-19  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #14464: htmlArea RTE: Type of block accumulation if the block is manually selected in Safari

    2010-06-18  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug ##14436: External links are prepended with current domain by RTE transformation

    2010-06-17  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #14766: htmlArea RTE: RTE not loading when using forceHTTPS option (Thanks to Helmut Hummel)
        * Follow-up to #14766: htmlArea RTE: RTE not loading when using forceHTTPS option

    2010-06-17  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #14577: Ext.ux.elasticTextArea causes JS errors in all version of IE (Thanks to Jo Hasenau)

    2010-06-16  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #14748: Span tags with multiple classes being removed by RTE transformation

    2010-06-16  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #13874: NULL reference when using hook in class.t3lib_utility_client.php (Thanks to Steffen Mueller)
        * Fixed bug #14717: [Usability] Add delay to close the context menu
        * Fixed bug #14016: typo in class.t3lib_tcemain.php (Thanks to Vladimir Podkovanov)

    2010-06-15  Stanislas Rolland  <typo3@sjbr.ca>

        * Updated htmlArea RTE version to 1.8.11

    2010-06-14  Steffen Kamper  <info@sk-typo3.de>

        * Added missing flags #11461: Serbian flag in sys_language selector
        * Added missing flags #11807: Flags for belgium is missing
        * Fixed bug #14354: Bug: fix percentage of changes in Workspace Manager -> "Show differences inline" (Thanks to Marco Huber)

    2010-06-13  Tobias Liebig  <mail_typo3@etobi.de>

        * Fixed bug #13903: wrong links with multiple domain records on one page with typolinkCheckRootline (thanks to Irene Hoeppner)

    2010-06-12  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #13895: Bug: getTSConfigVal called with wrong object (Thanks to Andreas Stauder)

    2010-06-10  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #14691: htmlArea RTE: Hitting ENTER in absence of block element may produce non-valid html in non-IE browser

    2010-06-10  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Fixed bug #5117: typolink: cHash corrupted due to linkVars (together with Pierre Dudoret (Popy))

    2010-06-09  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #14677: htmlArea RTE: Toolbar state incorect in the absence of block element

    2010-06-08  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #13062: htmlArea RTE: "non-floating" float value doesn't stick on images
        * Fixed bug #13301: htmlArea RTE: textstyle cannot be applied to full content of block element

    2010-06-08  Oliver Hader  <oliver@typo3.org>

        * Fixed unit tests for t3lib_PageRenderer
        * Cleanup: Fixed formatting of t3lib_PageRenderer_testcase

    2010-06-06  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #1294: movie param of flash object not processed by prefixResourcePath (Thanks to Jigal van Hemert)

    2010-06-06  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #14635: Caching framework file backend: Unit test fixes
        * Fixed bug #14632: Caching framework memcached backend: No exception thrown if set() fails and wrong boolean comparison
        * Fixed bug #14631: Caching framework memcached backend: Wrong memcache server detection in unit tests
        * Follow-up to #11386: Caching framework file backend does not return absolute path in getCacheDirectory()
        * Fixed bug #14455: [Performance] Wrong variable in t3lib_cache_memcachedbackend leads to redundant data (Thanks to Dan Osipov)

    2010-06-04  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #14615: Autosuggest function doesn't work with quotes

    2010-06-04  Susanne Moog  <typo3@susannemoog.de>

        * Fixed bug #13818: tcemain versionSwap might break pages_language_overlay relations (thanks to Tolleiv Nietsch)

    2010-06-03  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #14130: Switching pages with browsebox doesn't work (thanks to Mark Kuiphuis)

    2010-06-02  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #13506: [felogin] Function changePassword does not work, when hitting 'enter' in change password form (Thanks to Christian Futterlieb)

    2010-05-31  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #13701: @ini_set() works only on windows, on some unices it could render the function unusable (Thanks to Stephan Seitz)

    2010-05-31  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Fixed bug #13858: IS cannot not index files if absRefPrefix is set and indexExternalURLs is not (thanks to Christian Kuhn and Steffen Ritter for help)

    2010-05-28  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #13636: sysext:version needs doNotLoadInFE => 0 (Thanks to Georg Ringer)
        * Fixed bug #13160: Datepicker doesn't work with IE8 in French (Thanks to Alexandre Gravel-Raymond)

    2010-05-27  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #13934: Side-effect of substr in t3lib_cs (thanks to Rens Admiraal)

    2010-05-27  Tobias Liebig  <mail_typo3@etobi.de>

        * Fixed bug #14388: TypoScript templates containing a "$1" become corrupted

    2010-05-25  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #14333: htmlArea RTE: justify after CTRL+A not working in Firefox

    2010-05-24  Stanislas Rolland  <typo3@sjbr.ca>

        * Updated htmlArea RTE version to 1.8.10

    2010-05-22  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #12923: Javascript error in tmenu_layers.php & gmenu_layers.php (Thanks to Klaus Goessl)

    2010-05-22  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #14175: belog not shown / error when actions: error is selected (thanks to Philipp Thiele)

    2010-05-21  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #13749: IRRE: Inline elements of translated records are not copied correctly. (Thanks to Albrecht Koehnlein)

    2010-05-20  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #7753: EM warns No XCLASS inclusion code found if you use $GLOBALS['TYPO3_CONF_VARS'] (thanks to Franz Holzinger)

    2010-05-14  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #14337: "The install tool is locked" doesn't send no-cache headers (thanks to Steffen Gebert)

    2010-05-13  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12803: Creating or deleting ENABLE_INSTALL_TOOL file saves settings in "User Settings"
        * Fixed bug #14341: c&p error in t3lib_div::logDeprecatedFunction

    2010-05-12  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Fixed bug #14052: cache_treelist is out of date after setting hidden=0 (thanks to Steffen Gebert)

    2010-05-10  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9455: RTE incorrectly modifies external links and causes problems with subdomains

    2010-05-07  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #14202: htmlArea RTE: Tables may get lost when using remove format feature

    2010-05-07  Benjamin Mack  <benni@typo3.org

        * Fixed bug #5003: prefixRelPath() incorrectly changes links to anchors (Thanks to Jigal van Hemert)

    2010-05-07  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #13495: Workspace tiled Preview shows same version of Page

    2010-05-06  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #14315: Filelist: AJAX bug with multiple file mounts in the folder tree
        * Fixed bug #14291: TCEforms: Incorrect background color style in type fields with images (Thanks to Stefan Galinski)
        * Fixed bug #14217: options.pageTree.showPageIdWithTitle doesn't work in record picker and RTE (Thanks to Reinhard Fuehricht)

    2010-05-06  Susanne Moog  <typo3@susanne-moog.de>

        * Fixed bug #14185: The tt_content.fe_groups field is not placed under the Access Tab (Thanks to Peter Klein & Lars Houmark)

    2010-05-05  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #12470: PHP-5.3 error: function define_syslog_variables() is deprecated (Thanks to Rupert Germann)

    2010-05-05  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #14295: Recycler and tcemain->process_cmdmap cannot undelete some records (thanks to Lars Houmark)
        * Fixed bug #14307: fe_user passwords are visible in the info popup window in the backend (thanks to Lars Houmark)

    2010-05-03  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #7795: opendocs: documents are opened without pagetree (thanks to Stefan Galinski)

    2010-05-02  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #14276: tceforms: Title of a record does not use API call to limit the character

    2010-05-01  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #2186: Error installing static_info_tables

    2010-05-01  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #14272: typo in t3lib_PageRenderer (thanks to Steffen Gebert)
        * deleted testcase for comparing ereg_ usage as it doesn't work with php >= 5.3

    2010-04-30  Susanne Moog  <typo3@susanne-moog.de>

        * Fixed bug #14179: TCA select doesn't show record titles whic start with <= (thanks to Georg Ringer)

    2010-04-30  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #13758: page.jsInline / page.jsFooterInline may fail with config.removeDefaultJS=external (thanks to Steffen Ritter)

    2010-04-30  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to bug #14207: Duplicate submodule URL in JavaScript
        * Fixed bug #14116: Selecting/deselecting all records does not work with translated records (thanks to Reinhard Fuehricht)

    2010-04-29  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #11005: Browse Links Popup shows no files when all file types are allowed

    2010-04-29  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Fixed bug #14207: Duplicate submodule URL in JavaScript
        * Fixed bug #14026: Main module does not load different navFrames in submodules in dependency of navFrameScriptParam

    2010-04-22  Susanne Moog  <typo3@susanne-moog.de>

        * Reverted fix for bug #12908: wrong distance between image rows due to new rules

    2010-04-24  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #13386: mod.web_list.hideTables doesn't accept spaces (thanks to Marcel Greter)

    2010-04-22  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #14182: Multiple join conditions are not supported

    2010-04-22 Jochen Rau <jochen.rau@typoplanet.de>

        * Fixed bug #13972: cropHTML uses faulty reg exp for HTML entities (thanks to Ralf Hettinger)

    2010-04-22  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #14176: unit test for RemoveXSS triggers fatal error in phpunit extension (thanks to Jigal van Hemert)

    2010-04-22  Susanne Moog  <typo3@susanne-moog.de>

        * Fixed bug #3996: Constant Editor - Default Image Width [styles.content.imgtext.linkWrap.width] - wrong description (thanks to Martin Herzog)
        * Fixed bug #12908: wrong distance between image rows  [css styled content]

    2010-04-20  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Fixed bug #13741: cache_treelist does not take FE users into account
        * Fixed bug #14149: tslib_cObj::getTreeList() incorrectly checks cache entries

    2010-04-20  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #13471: List module eats up tons of memory if displaying records with many references
        * Fixed bug #13908: saltedpasswords: Enhance Unit Tests by testing passwords of various character classes (thanks to Marcus Krause)

    2010-04-19  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #10315: htmlArea RTE: 10315: Paste does not work correctly with table rows in Firefox
        * Fixed bug #14153: htmlAreaRTE: Some Page TSConfig may break default hotkey assignments
        * Fixed bug #14106: htmlArea RTE: ENTER after an image at beginning of block deletes the image

    2010-04-19  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #13991: Content Element Media does not work with render type "HTML Embed Element" (thanks to Sascha Egerer)

    2010-04-19  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Fixed bug #14128: Tree list cache does not recognize 'this' for 'pidInList'
        * Fixed bug #14129: Function tslib_cObj::getTreeList() inserts records with empty PK

    2010-04-13  Susanne Moog  <typo3@susanne-moog.de>

        * Fixed bug #13630: Status Report reports "Install Tool: disabled" when it is not. (thanks to Gregor Hermens)

    2010-04-16  Francois Suter  <francois@typo3.org>

        * Fixed bug #14090: In Extension Manager importExtInfo() does not sort versions correctly (thanks to Daniel Minder and Steffen Gebert)

    2010-04-15  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Fixed bug #14021: Simplify the code to get nested GET Parameters with TS (thanks to Sebastian Gebhard)

    2010-04-14  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #13732: External URL only indexes first page [indexed_search]
        * Raised DBAL version from 1.0.4 to 1.0.5

    2010-04-13  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Fixed bug #14027: add "tiff" to imagefile_ext array (Thanks to S√∏ren Malling)
        * Fixed bug #14023: choose proper variable namings in tslib_cObj::getGlobal() (thanks to Sebastian Gebhard)

    2010-04-13  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #13788: [felogin] Redirects use incorrect function parameters

    2010-04-12  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #13674: htmlArea RTE: Incorrect position of cursor after SHIFT-ENTER in WebKit browser

    2010-04-11  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #10629: class and title parameters of typolinks get broken

    2010-04-11  Francois Suter  <francois@typo3.org>

        * Fixed bug #14005: Moving a page with IRRE records misplaces IRRE records

    2010-04-11  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to #10327: [felogin] redirecting to referer does not work
        * Fixed bug #13985: bugfix/code cleanup: wrong image dimension returned if alternative logo is set and skin-extension is installed in global-space (backend-redesign) (thanks to Stephan N Kellermayr)

    2010-04-10  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #14060: htmlArea RTE: Some table operations configuration may cause js error

<Category:ReleaseNotes/TYPO3_4.3.x> [Category:TYPO3
4.3](Category:TYPO3_4.3 "wikilink") <Category:2010>
