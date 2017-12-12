Release Notes for TYPO3 4.4.1
=============================

This document contains information about TYPO3 version 4.4.1 which was
released on July 28, 2010.

News
----

This release is a bugfix and security release.

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

    129fa64e8b0652a8f068ca05f0788228  dummy-4.4.1.tar.gz
    1dc81b22a2e90d72aa04c1636ac77503  dummy-4.4.1.zip
    814955d60dbf5a7c043f23a158aa43bd  typo3_src-4.4.1.tar.gz
    2a4e2f4aa0c0ef72fb710cdc809516f7  typo3_src-4.4.1.zip
    808adc79f7e5f0e0f3e8a4ddc1c73a54  typo3_src+dummy-4.4.1.zip
    d6b700957a570806fb454eb4de9937a1  introductionpackage-4.4.1.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-07-28  Benjamin Mack  <benni@typo3.org>

        * Release of TYPO3 4.4.1

    2010-07-28  Oliver Hader  <oliver@typo3.org>

        * Raised Extbase and Fluid from 1.2.0 to 1.2.1
        * Fixed bug #14953: XSS in (new) taskcenter (thanks to Georg Ringer)
        * Fixed bug #14978: XSS in file tree (thanks to Georg Ringer)
        * Fixed bug #13292: TYPO3 error message reveals path to web root (thanks to Xavier Perseguers)
        * Fixed bug #11618: XSS vulnerability in install tool / BE login (thanks to Georg Ringer)
        * Fixed bug #14950: XSS in t3editor (thanks to Tobias Liebig)
        * Fixed bug #14850: Information disclosure in t3lib_htmlmail (thanks to Georg Ringer)
        * Fixed bug #13961: XSS in impexp (thanks to Georg Ringer)
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

    2010-07-27  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #14920: Cache cannot be cleared in IE8
        * Fixed bug #15252: Bug: Backend shortcut cannot be set in IE8
        * Fixed bug #15228: Links in TS object browser tree forget the breakkpoint
        * Fixed bug #14946: Switching workplaces causes nesting of BE (Thanks to Stefan Galinski)
        * Fixed bug #13649: Deprecated function sql_regcase in cms/tslib/class.tslib_pagegen.php (Thanks to Martin M¸ller)

    2010-07-27  Susanne Moog  <typo3@susanne-moog.de>

        * Fixed bug #15147: Inconsistent icon usage for Edit Page Properties (thanks to Georg Ringer)

    2010-07-27  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #15244: htmlArea RTE: textearea Id may not be unique in FE
        * Fixed bug #15250: htmlArea RTE: FE additionalJS_post javascript may be displayed as HTML text
        * Fixed bug #15121: htmlArea RTE: Javascript Error in IE7 prevent Link dialogue from opening
        * Fixed bug #14859: htmlArea RTE won't load in backend extension

    2010-07-27  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #15196: [caching framework] Speedup t3lib_cache_backend_DbBackend::has($entryIdentifier) (Thanks to Michael Knabe)
        * Fixed bug #13060: t3lib_htmlmail: Deprecated message with PHP 5.3 for sql_regcase (Thanks to Martin M√ºller)

    2010-07-26  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #15243: htmlArea RTE: Extension stylesheets refer to incorrect selectors

    2010-07-26  Dmitry Dulepov  <dmitry@typo3.org>

        * Reverted the fix for #15128 because further investigation is required

    2010-07-25  Susanne Moog  <typo3@susanne-moog.de>

        * Fixed bug #14849: Sprites - user defined page types/modules are not respected anymore (thanks to Steffen Ritter)

    2010-07-25  Stanislas Rolland  <typo3@sjbr.ca>

        * Updated htmlArea RTE version to 2.0.3

    2010-07-24  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #14794: Missing border-bottom for inactive tabs (Thanks to Steffen Gebert)
        * Fixed bug #15188: Remove default greyed out effect for CEs (Thanks to Steffen Gebert)
        * Fixed bug #14969: Colors for highlighting the tree and a versioned page can't be distinguished (Thanks to Steffen Gebert)

    2010-07-23  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15195: TSanalyzer: Add link to breakpoints also in syntaxhighlight mode

    2010-07-23  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #15203: htmlArea RTE: Modify link option missing in context menu
        * Fixed bug #15050: htmlArea RTE: .htmlarea .statusBar relative path incorrect (Thanks to Felix Kopp)

    2010-07-21  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #15179: Tree depth retrieval inconsistently limited to 20 levels int3lib_pageSelect

    2010-07-21  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15067: Background Image in Element Browser is repeated, but should not be! (Thanks to Steffen Gebert)
        * Fixed bug #15156: Text in template analyzer is "white on white" if syntax highlighting is disabled (Thanks to Steffen Gebert)

    2010-07-19  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #15130: Backend search does not find non-latin1 characters
        * Fixed bug #15128: RTE creates <link> tag incorrectly if there is a non-empty title

    2010-07-18  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #15169: Superfluous comma in CSS

    2010-07-18  Susanne Moog  <typo3@susanne-moog.de>

        * Fixed bug #15000: remove IM 4.2.9 recommendation in install tool (Thanks to Steffen Gebert)
        * Fixed bug #14998: Upgrade Wizards: Headlines have too much space below (Thanks to Steffen Gebert)

    2010-07-16  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #14982: Make alt_doc.php unit testable (Thanks to Ingo Schmitt)
        * Fixed bug #15142: [Unit tests] Remove unnecessary require_once() calls

    2010-07-14  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #14911: Validation errors in list view (Thanks to Georg Ringer)

    2010-07-14  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #6208: zlib must be compiled in to make an extension lookup
        * Fixed bug #12322: cHash is generated when no parameters are given

    2010-07-13  Francois Suter  <francois@typo3.org>

        * Fixed bug: #15054: Scheduler: BE module does not use new skin properly

    2010-07-13  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #14775: Old table header styling in Extension Manager (Thanks to Ralf B√ºchner)
        * Fixed bug #15088: Using sprites breaks setting links to content elements (Thanks to Georg Ringer)

    2010-07-13  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #15097: Intro looks weird with module and no submodules (Thanks to Georg Ringer)
        * Fixed bug #15073: inlineJS creates superfluous markup (Thanks to Georg Ringer)
        * Fixed bug #15103: TS Errors are hardly readable (white on yellow) (Thanks to Georg Ringer)
        * Fixed bug #15098: TS Errors should be shown with flash messages (Thanks to Georg Ringer)
        * Fixed bug #14855: Big Buttons in Page Module miss padding (Thanks to Georg Ringer)

    2010-07-13  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #15096: Missing icon for _recycler_ folders

    2010-07-12  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #15082: [openDocs] Exception is thrown if a record isn't found

    2010-07-12  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #1235: indexed search: garbage instead of cHash in the "path" link (thanks to Nikolas Hagelstein)

    2010-07-11  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #14970: ts browser condition results in error if browser is unknown (Thanks to Caspar Stuebs)

    2010-07-11  Susanne Moog  <typo3@susanne-moog.de>

        * Fixed bug #14923: CleanUp: getIconImage is not replaced in Core (thanks to Steffen Ritter)
        * Follow-up to #15045: Trailing newlines after php closing tag. (Thanks to Nikolas Hagelstein)

    2010-07-10  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #14896: ExtJS is not included when RTE is invoked by USER_INT frontend script

    2010-07-09  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #15061: Remove XCLASS from t3lib_utility_Http (Thanks to Georg Ringer)
        * Fixed bug #15055: Scheduler: Date picker is broken in add/edit form
        * Fixed bug #14988: TYPO3.Backend is assigned twice by ExtDirect and the viewport (Thanks to Stefan Galinski)
        * Fixed bug #15045: Trailing newlines after php closing tag. (Thanks to Nikolas Hagelstein)

    2010-07-08  Susanne Moog  <typo3@susanne-moog.de>

        * Follow-up to #14719: Wrong code comment (QUICKSTART/FIRST_INSTALL) (thanks to Steffen Gebert)
        * Fixed bug #14813: Install Tool uses deprecated function t3lib_stdGraphic->imagecreate() (thanks to Stefan Galinski)

    2010-07-08  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #15049: "Fileextension" is not an English word

    2010-07-07  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #14968: Add unit tests for t3lib_div::validIP (Thanks to Nikolas Hagelstein and Felix Kopp)

    2010-07-07  Susanne Moog  <typo3@susanne-moog.de>

        * Follow-up to #14845: No preview images with referenced files anymore (thanks to Stefan Galinski)

    2010-07-06  Susanne Moog  <typo3@susanne-moog.de>

        * Fixed bug #14845: Bug: Filelist module reports "type" of files also for directories  (thanks to Caspar Stuebs and Andy Grunwald)

    2010-07-06  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #14984: Add example unit tests from T3DD10 unit testing workshop (Thanks to Oliver Klee)
        * Fixed bug #14885: No access to taskcenter (tasks) for non-admins (Thanks to Jigal van Hemert)
        * Fixed bug #14991: Missing fields in "showRecordFieldList" at the TCA for fe_users (Thanks to Frank N√§gler)
        * Fixed bug #14972: Add unit tests for t3lib_div::removeArrayEntryByValue (Thanks to Thorben Kapp)
        * Fixed bug #14967: [Caching framework] fileBackend testcase removes files in /sbin
        * Fixed bug #14977: Add php cache frontend to t3lib/config_default.php (Thanks to Felix Oertel)

    2010-07-06  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #14960: [t3skin] apps-pagetree.css is redundant (Thanks to Felix Kopp)
        * Follow-up to #13379: Sprite Icon API (Thanks to Steffen Ritter)
        * Fixed bug #14980: Install tool causes PHP warnings if typo3conf/ is not writeable

    2010-07-05  Susanne Moog  <typo3@susanne-moog.de>

        * Follow-up to #14705: In BE login form labels: position of caps lock warning  (thanks to Steffen Gebert)
        * Fixed bug #14880: introduced type hinting in t3lib_iconWorks (thanks to Jigal van Hemert)
        * Fixed bug #14824: wrong icon in template analyzer (thanks to Georg Ringer)

    2010-07-05  Steffen Kamper  <info@sk-typo3.de>

        * #12514: Installtool duplicates values of fields with defaultTypoScript_constants
        * Fixed bug #10958: Broken i18n_parent relation upon localizing records in workspace (Thanks to Tolleiv Nietsch)
        * Fixed bug #14907: Help Modules can not be disabled on a per user basis (Thanks to Georg Ringer)
        * Fixed bug #14957: Styling of record history (Thanks to Georg Ringer)

    2010-07-04  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #14929: htmlArea RTE: Font Family and Font Size Dropdown boxes don't open
        * Fixed bug #14996: htmlArea RTE: Clicking in drop down boxes should mark text

    2010-07-02  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #14947: Missing closing div in db_new_content_el.php (Thanks to Georg Ringer)

    2010-06-29  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #14810: Follow-up to bug #13670: Export module does not keep pagetree configuration (exports only the page tree) (Thanks to Thomas Juhnke)

    2010-06-29  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #14905: htmlArea RTE: Image dialogue shows tab "Current picture" when there is no current image

    2010-06-29  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to #14553: topFrameH configuration option doesn't work anymore

    2010-06-28  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #14830: htmlArea RTE: Entering line breaks with Safari not possible

    2010-06-27  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #14886: htmlArea RTE: Incorrect function scope when error is raised
        * Fixed bug #14887: htmlArea RTE: RTE may be started before style sheets are loaded

    2010-06-26  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #14876: htmlArea RTE: SelectFont plugin may cause js error
        * Follow-up to bug #14793: htmlArea RTE: Problematic icons in IE6

    2010-06-25  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #14870: typo in parameter type causes php error (Thanks to Jigal van Hemert)
        * Fixed bug #14866: Quicktime audio format m4a isn't supported
        * Fixed bug #14847: Bug: Template Analyzer: Line numbers barely readable (Thanks to Andy Grunwald)
        * Fixed bug #14857: Reports Module: Wrong icon and a styling problem (Thanks to Georg Ringer)
        * Fixed bug #14834: About module need padding
        * Fixed bug #14844: Milliseconds on logout (Thanks to Georg Ringer)
