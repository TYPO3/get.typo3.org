RELEASE NOTES FOR TYPO3 4.2
===========================

This document contains information about TYPO3 version 4.2 which was
released on April 23, 2008.

News
----

The main focus of the new 4.2 version is improving usability, but there
are also many enhancements for system administrators and developers.
Including bug fixes, there are nearly 650 enhancements in TYPO3 4.2.

[Read
more](https://typo3.org/news/article/typo3-association-releases-version-42-focus-on-usability-and-performance-improvements/)

For more technical details check out [this
document](4.2_NEWS.txt "wikilink").

New features
------------

[See here](https://typo3.org/documentation/article/release-notes-42/)

Download
--------

<https://typo3.org/download/>

Upgrading
---------

Changelog
---------

    2008-04-23  Ingo Renner  <ingo@typo3.org>

        * Release of TYPO3 4.2.0
        * Fixed a bug where Webkit Browsers would not correctly display the icons in the dropdown type selector of records like pages and content elements, credits Jeff Segars
        * Fixed Bug #8207: Creating shortcuts in backend.php does not work in modules other than web->list or file->filelist
        * Added login image for TYPO3 4.2
        * Update all ext_emconf.php in system extensions (part 2)

    2008-04-23  Michael Stucki  <michael@typo3.org>

        * Remove obsolete warning in Extension Manager
        * Update all ext_emconf.php in system extensions (part 1)
        * Update version numbers of all system extension that have been changed since TYPO3 4.1

    2008-04-22  Benjamin Mack  <benni@typo3.org>

        * Fixed visual bug: DB-List - No Space Between Table and Field-Selector

    2008-04-22  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #8159: Infinite loop when trying to install extension with constraints and configuration
        * Fixed bug #8203: Broken icons when creating +ext template
        * Fixed bug #8204: Typo in extended list view for select fields

    2008-04-22  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #8153: [left frame-width] left frame too small for german users, credits Steffen Kamper
        * Fixed several bugs with t3editor and IE #8157, #8049, #7509,#8146, credit Tobias Liebig
        * Changed order of cache and shortcut toolbar items
        * Changed call of json_encode in t3editor to t3lib_div::array2json
        * Added missing icon variants to t3skin, thanks to Helmut Hummel for generating them
        * Fixed typos in backend.php, credits Helmut Hummel

    2008-04-22  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #8182: Fatal error on calling sysLog() of lock object if locking method is unknown
        * Fixed bug #8148: IRRE - Expanded or collapsed state of new child records is not handled correctly

    2008-04-22  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #8174: Clear all caches should clear configuration cache as well (thanks to Steffen Kamper)
        * Fixed bug #8040: Bug: Wrong check on creating folders in filelist makes them unaccessible (thanks to Moreno Feltscher)

    2008-04-20  Ingmar Schlecht  <ingmar@typo3.org>

        * Fixed bug #8138: Search in Loaded Extensions not working
        * Fixed bug #8019: missing htmlspecialchars() in adminPanel
        * Fixed bug #8169: Admin functions tab visible for non admins (All patches above by Steffen Kamper)

    2008-04-20  Ingo Renner  <ingo@typo3.org>

        * Added missing icons for tt_content when overlayed with different states, credits Helmut Hummel

    2008-04-16  Ingo Renner  <ingo@typo3.org>

        * Release of TYPO3 4.2.0RC2

    2008-04-16  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #4186 (correction): cropping didn't work for IM4/5 and GM (thanks to Helmut Hummel)

    2008-04-16  Benjamin Mack  <benni@typo3.org>

        * HCI: Changed t3skin icon "new_file.gif"

    2008-04-16  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #8001: Problems using link wizard in content elements, credits Ralf Hettinger
        * Marked typo3/alt_main.php as deprecated
        * Fixed bug #8060: preview in clickmenu of list-module on tt_content records broken
        * Added new icons for content elements in t3skin
        * Added new icons in t3skin to select image orientation in Text w/Image content elements
        * Added several other new icons in t3skin
        * Replaced icon for Web->Functions in t3skin
        * Fixed bug #8108: Extension configuration options are not always shown, credits Jeff Segars
        * Various Bugfixes for t3editor
            * Fixed bug #6812: Editor does not respect charset settings while saving with AJAX
            * Fixed bug #8049: TypoScript templates can't be saved at all after editing them using IE7/WinXP
            * Fixed bug #7314: In IE 6.0.2900 syntax highlighting, save indicator, keyword suggestion and undo isn't working
            * Moved CodeMirror into own directory
            * Switched from gluecode to hooks

    2008-04-15  Benjamin Mack  <benni@typo3.org>

        * HCI: Small Changes for t3skin icons "upload.gif" and "pages_up.gif"

    2008-04-15  Ingo Renner  <ingo@typo3.org>

        * Follow up to #7986: removed borders from list view when not in extended view, credits Steffen Kamper
        * Follow up to #7986: icons were breaking into a new line in IE6
        * Follow up to #7986: in some cases columns were not aligned, credits Steffen Kamper
        * Fixed bug #7900: Docheader scrollbar isn't at right side, credits Steffen Kamper

    2008-04-14  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #7986: Vertical aligned Icons in List-Module, credits Peter Niederlag, Steffen Kamper, sponsored by snowflake productions
        * Added new icons in t3skin for the help menu entries in the module menu

    2008-04-14  Benjamin Mack  <benni@typo3.org>

        * Pre-code cleanup for #6670 (Tabs in Page Properties III)

    2008-04-13  Michael Stucki  <michael@typo3.org>

        * Minor code cleanup (patch by Benni Mack)
        * Add CSH information for fe_login_mode (by Benni Mack)

    2008-04-12  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #8064: Split does not work with returnKey = 0 (thanks to Dirk Weise)

    2008-04-11  Oliver Hader  <oliver@typo3.org>

        * Renamed interface.t3lib_tceformsInlineHook.php to lowercase letters

    2008-04-11  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #7897: Storage and display of datetime/time fields was broken (one hour shift) on DST (daylight saving time) changes

    2008-04-11  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #8078: enhance debug stack trace reporting

    2008-04-10  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #8035: 123-Installer shows error in step 1 when no DB connection was set up yet.

    2008-04-10  Dmitry Dulepov  <dmitry@typo3.org>

        * Added @var to typo3/sysext/beuser/mod/index.php

    2008-04-09  Benjamin Mack  <benni@typo3.org>

        * t3skin: Exchanged icon which was still in use from oldskin

    2008-04-09  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #8066: Incorrect height of htmlArea RTE dropdown selectors in some browsers
        * Updated htmlArea RTE version number to 1.7.4

    2008-04-08  Oliver Hader  <oliver@typo3.org>

        * Followup to #8014: Fixed bug with usage of t3lib_TCEforms::getDynTabMenu()

    2008-04-08  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #8041: EM has wrong image tag for headers in extension listing (Thanks to Steffen Kamper)

    2008-04-07  Martin Kutschker  <masi@typo3.org>

        * Remove superfluos is_array() check in t3lib_div

    2008-04-07  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #8005: Linking across domains does not work with nested domains

    2008-04-06  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #7992: rtehtmlarea does not work with Firefox 3 Beta 5
        * Fixed bug #8043: Highlighting text from right to left in htmlArea RTE is erratic in Firefox

    2008-04-06  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #8013: Felogin redirectMode does not work with spaces (Thanks to Steffen Kamper)
        * Fixed bug #7317: CSH popup not working in flexforms (Thanks to Kasper Ligaard)
        * Fixed bug #8028: Databases with an "-" in it can't be used (Thanks to Steffen Kamper)

    2008-04-05  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #8014: Deactivated tabs in page-properties should be hidden

    2008-04-04  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #7990: htmlArea RTE color picker has no scrollbar

    2008-04-04  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #8015: XHTML issue in felogin-template (Thanks to Steffen Kamper)

    2008-04-03  Michael Stucki  <michael@typo3.org>

        * Fixed bug #8009: Wrong TS-Code because appendString cannot handle multiline strings (Thanks to Claudio Cathomen / ICSurselva)
        * Fixed bug #1537: Shortcut icon syntax incorrect/incomplete (Thanks to Soeren Schaffstein / d.k.d)

    2008-04-03  Patrick Broens  <patrick@patrickbroens.nl>

        * Feature #7854: Docheader: Moving function menu to the left in second row (Thanks to Adrian Zimmermann / snowflake)

    2008-04-03  Thomas Hempel  <thomas@typo3-unleashed.net>

        * Feature #6896: TCA eval on TEXT field does not work (Thanks to Dan Jensen / Wildside)

    2008-04-03  Ingmar Schlecht  <ingmar@typo3.org>

        * Fixed bug #4575: Changes in alternative page language does not clear cache (Thanks to Bodo Eichstaedt / wmdb)
        * Fixed bug #4768: Missing is_array() check in tslib_fe::getStorageSiterootPids() (Thanks to Kian Gould / AOE media)

    2008-04-03  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #7496: exclude for header_position, header_link (Thanks to Michael Dengler / die digiparden)

    2008-04-03  Sebastian Kurfuerst  <sebastian@typo3.org>

        * Fixed bug #7476: link in about module opens in the TYPO3 backend frameset (Thanks to Bodo Eichstaedt / wmdb)
        * Fixed bug #7991: Workspace Preview is not aware of domain records (Thanks to Kian Gould / AOE media)

    2008-04-02  Ingo Renner  <ingo@typo3.org>

        * Added follow up patch for bug #6710: Use optgroups in selectorboxes

    2008-04-02  Benjamin Mack <benni@typo3.org>

        * Fixed bug #7961: headListTags in class.t3lib_parsehtml_proc.php are hardcoded (Thanks to Steffen Kamper)

    2008-04-01  Ingo Renner  <ingo@typo3.org>

        * Release of TYPO3 4.2.0RC1

    2008-04-01  Ingmar Schlecht  <ingmar@typo3.org>

        * Fixed bug #7975: Unskinnable icons because of hardcoded html (Thanks to Steffen Kamper)
        * Feature #7985: Beautify table for BE Log (Thanks to Steffen Kamper)

    2008-04-01  Michael Stucki  <michael@typo3.org>

        * Fixed bug #7841: Remove COLLATE statement when creating new tables with the Install Tool
        * Fixed bug #7981: Replace ugly labels in BE Log module
        * Fixed bug #1585: Use t3lib_div::sysLog() whenever errors occur in tslib_fe. Additionally, add a new value "request_uri" to the "config.stat_apache_pagenames" property which allows logging of the REQUEST_URI server value (useful with RearUrl environments). Thanks to Steffen Kamper for taking care of these issues.
        * Fixed bug #7743: Install Tool: Create "admin" user did not work in 4.2-beta3
        * Fixed bug #7980: Indexed Search: Fix wrong TypoScript code in plugin template

    2008-04-01  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #5998: Crawler/Index Config: hidden records are re-indexed, credits Christian Kuhn
        * Fixed bug #7831: List in Page module has wrong colors, credits Steffen Kamper
        * Changed private declarations to protected

    2008-04-01  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #7943: Filelist has nested HTML (thanks to Steffen Kamper)
        * Fixed bug #7820: Task center iframes are only sized on load (thanks to Steffen Kamper)

    2008-04-01  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #7977: Missing label for browse_links folder menu

    2008-04-01  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #7784: Check for mail configuration is wrong on Windows
        * Fixed bug #7839: Linking between domains in the pagetree with checkRootline does not work with menus

    2008-03-31  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #7768: TCEForms extraFormHeaders do not work with docheaders

    2008-03-31  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #7954: XCLASSing ToolbarItem does not work (thanks to Steffen Kamper)
        * Fixed bug #7759: XCLASSing USER_INT objects does not work
        * Cleaned up code of scripts in typo3/classes/
        * Followup to #6087: Cleaned up code of IRRE localization
        * Cleaned up code of scripts in t3lib/ and typo3/
        * Fixed bug #7971: Missing icon in t3skin for header - tt_content_header.gif (thanks to Steffen Kamper)fckLR    * Fixed bug #7976: prioriCalc does not work correctly

    2008-03-31  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #7920: Filelist in IE 6 is not showing contents (thanks to Ingo Schmitt and Steffen Kamper)
        * Fixed bug #7957: Enable backend classes for xclassing (thanks Steffen Kamper)
        * Fixed bug #7962: Add icon to selected entry (currently icons are only shown in dropdown) (thanks to Kasper Ligaard)

    2008-03-28  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #7955: htmlArea RTE API provides incorrect popup url
        * Fixed bug #7958: htmlArea RTE undo/redo handler may cause errors in FF

    2008-03-28  Oliver Hader  <oliver@typo3.org>

        * Added follow up to #7947: Changed order of applying locallang file back

    2008-03-27  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #7947: IRRE - XCLASSes are not working with AJAX calls in t3lib_TCEforms_inline (thanks to Malte Jansen)

    2008-03-26  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #7944: htmlArea RTE: Configuration of mutually exclusive classes in very error prone
        * Fixed bug #7769: htmlArea RTE: Missing default class for tables

    2008-03-24  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #7934: HTMLArea RTE block style and text style may present disallowed classes

    2008-03-24  Oliver Hader  <oliver@typo3.org>

        * Fixed bug: Field sys_template.include_static_file limited to 20 items

    2008-03-22  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #7923: htmlArea RTE cannot delete block via delete/backspace keys in IE 6 and IE7

    2008-03-21  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #4250: ASCII transliteration did not expand Iclandic letters thorn and eth.
        * Fixed bug #7903: Use PHP5 features in class.t3lib_extmgm.php (final and static, thanks to Kasper Ligaard)
        * Fixed bug #7906: Use PHP5 features in class.t3lib_befunc.php (final and static, thanks to Kasper Ligaard))
        * Fixed bug #7909: Use PHP5 features in class.t3lib_iconworks.php (final and static, thanks to Kasper Ligaard))
        * Added feature #5726: Javascript mailform validation doesn't check fields of type 'file' (thanks to Loek Hilgersom and Peter Foerger)
        * Enhanced feature #6888: Disabling some or all controls in "group" field - controllable via pageTS

    2008-03-21  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #7818: Login page: Hardcoded logo & labels instead of p tags (Thanks to Georg Ringer and Christian Kuhn)

    2008-03-20  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #7918: HTMLArea RTE: table width unit default not honoured when width is not set

    2008-03-20  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #6907: "Conflicts" check ignores version

    2008-03-20  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #7892: Unify User setup layout (Thanks to Steffen Kamper)

    2008-03-18  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #7307: Move 'Open Documents' to Header in the BE

    2008-03-17  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #7886: JS error raised in htmlArea RTE in IE5.5 when setting inline markup or text style
        * Fixed bug #7880: Insert table and borders in htmlArea RTE
        * Fixed bug #7890: htmlArea RTE: premature undo snapshot may cause JavaScript error to be raised

    2008-03-17  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #4186: GIFBUILDER cropsized images have bad quality (thanks to Steffen Kamper)
        * Fixed bug #7634: Tabs disappear when BE-editing a record that contains IRRE
        * Fixed bug #7874: Page lock not released when error page was generated
        * Fixed bug #7883: Export wizard has no scrollbars (thanks to Steffen Kamper)

    2008-03-17  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #7871: Extension with static data is not installed because of double form tag (thanks to Steffen)

    2008-03-16  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #7877: htmlArea RTE block style feature raises javascript errors in IE6
        * Fixed bug #7878: Extension cannot override a previously defined htmlArea RTE hotkey

    2008-03-16  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #7793: Argument 1 passed to t3lib_div::arrayToLogString() in module setting must not be null (thanks to Steffen Kamper)
        * Fixed bug #7861: t3lib_div::mkdir() should suppress PHP warnings/errors (thanks to Francois Suter)
        * Fixed bug #7843: t3lib_div uses array_unshift() instead of array_shift() in getIndpEnv() (thanks to Christian Kuhn)

    2008-03-16  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #7396: hardcoded fieldset and legend around radio buttons
        * Fixed bug #7817: Transparent PNGs do not work in IE6
        * Fixed bug #7873: Wrong condition for IE6, credits Steffen Kamper
        * Fixed issue #7876: beautify the permissions module a bit
        * Code cleanup: replaced CVS with SVN
        * Updated Copyright notices

    2008-03-15  Ingo Renner  <ingo@typo3.org>

        * Added follow up to #7588: Accesscheck for clearCache, credits Steffen Kamper
        * Fixed bug #7777: Hide Filter is not possible, credits Steffen Kamper

    2008-03-15  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #7857: htmlArea RTE: hidePStyleItems does not work anymore
        * Fixed bug #7867: htmlArea RTE undo/redo does not restore caret position
        * Fixed bug #7857 (revisited): htmlArea RTE: hidePStyleItems does not work anymore
        * Fixed bug #7867 (revisited): htmlArea RTE undo/redo does not restore caret position

    2008-03-14  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #7862: htmlArea RTE: incorrect nesting of ol/ul inside definition lists

    2008-03-14  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #7850: error in publish.php if errors in TCE should be shown, credits Daniel Poetzinger
        * Fixed page tree filter background in IE6

    2008-03-13  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #7851: htmlArea RTE causes memory leaks in IE
        * Fixed bug #7852: JS error raised in IE7 when closing htmlArea RTE
        * Fixed bug #7853: htmlArea RTE formatblock does not allow removing p or hx format in FF

    2008-03-12  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #6064 (revisited): htmlArea RTE adds unwanted <p> tags in table cells

    2008-03-12  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #7827: IRRE - Wrong mouse pointer on links to create/translate child records

    2008-03-12  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #7730: No hover in listview, credits Georg Ringer
        * Changed the order of options and access tab for pages, to be consistent with other records

    2008-03-11  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #7834: htmlArea RTE block operations may produce invalid document structure

    2008-03-11  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #7816: New page icon does not honor a selected page, credits Steffen Kamper

    2008-03-11  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #7794: opendocs causes Javascript error in Internet Explorer (thanks to Steffen Kamper)
        * Fixed bug #7781: Constant Editor changes not saved in Internet Explorer

    2008-03-10  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #7810: t3skin: Cleanup of login stylesheet (thanks to Georg Ringer)
        * Fixed bug #7814: t3skin does not use proper icons

    2008-03-09  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #7682: import extension page CSS errors (thanks to Steffen Kamper for hard work on this patch)

    2008-03-08  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #7748: IRRE - Storage page for combined child records not used
        * Fixed bug #7511: IRRE - Issues with expand/collapse of child records

    2008-03-08  Dmitry Dulepov  <dmitry@typo3.org>

        * Follow up on bug #7588: respect TSConfig settings for cache clearing (patch by Helmut Hummel)
    fckLR2008-03-07  Stanislas Rolland  <typo3@sjbr.ca>

        * Added two icons to htmlArea RTE skin for definition lists
        * Cleaned up dead code related to htmlArea RTE popups
        * Fixed bug #7788: htmlArea RTE: pageTSConfig from Inline Elements extension not included

    2008-03-06  Ingo Renner  <ingo@typo3.org>

        * Post cleanup of topapps, some parts were not removed with Changeset 2908

    2008-03-05  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #7757: htmlArea RTE: Alternating table rows/columns should start at 1
        * Fixed bug #7770: htmlArea RTE: shift+tab in table body does not move back into thead
        * Fixed bug #7773: htmlArea RTE loads plugins in wrong order
        * Fixed bug #7774: htmlArea RTE: toolbar not updated in IE7 on up/right/down/left arrow
        * Cleaned up dead code related to htmlArea RTE clickenlarge feature

    2008-03-04  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #7754: htmlArea RTE: Caption should be first element in table
        * Fixed bug #7755: htmlArea RTE: incorrect handling of enter key in definition lists

    2008-03-03  Ingo Renner  <ingo@typo3.org>

        * Release of TYPO3 4.2.0beta3

    2008-03-03  Patrick Broens  <patrick@patrickbroens.nl>

        * Fixed bug #7532: Docheaders: Wizard New Content Element (db_new_content_el.php): No docheader
        * Fixed bug #7527: Docheaders: Wizard New Record/New page (db_new.php): No docheader
        * Fixed bug #7540: Docheaders: Wizard Move Element (move_el.php): No docheader
        * Fixed bug #7562: Docheaders: Module History: No docheader

    2008-03-03  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #7601: Remove checkbox border from t3skin in Internet Explorer

    2008-03-03  Michael Stucki  <michael@typo3.org>

        * Fixed bug #7729: Login screen needs to be XCLASSable
        * Improvements to Install Tool:
            - Cleanup in t3lib_install
            - Fixed bug #7589: FULLTEXT keys are not processed correctly
            - Fixed bug #6098: Installer should check MySQL charset settings
            - Detect differences in table engine and table character set during DB compare
            - This allows extensions to define the table engine (e.g. MyISAM should be chosen if the table uses FULLTEXT keys). If no table engine is defined, the system default will be used.
            - Add character set support to t3lib_install
            - Convert various blob-fields (which are non-blobs actually) to text variants (exeptions are serialized fields and fields that contain XML data)
        * Fix DB field types for static_tsconfig_help
        * Fixed bug #7735: EM import was broken because of empty variable
        * Fixed bug #6547: Allow ignoring of the the no_cache parameter using $TYPO3_CONF_VARS[FE][disableNoCacheParameter] (of course, this is disabled by default)
        * Report to t3lib_div::sysLog() whenever $TSFE->set_no_cache() is called

    2008-03-03  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #7573: Page properties: Make author and author_email visible instantly, credits Steffen Kamper
        * Added new descriptions for some page property fields, credits Uschi Renziehausen
        * Added feature #7140: EM should send TYPO3 version when connecting to TER, credits Niels Pardon
        * Fixed bug #7704: Image Position in Text/Image doesn't work, redits Steffen Kamper
        * Fixed bug #7713: EM - Translation Manager loose CSS while updating, credits Steffen Kamper
        * Reintroduced the save button in user settings, removed navigation mode option when not in backend_old
        * Added feature #7427: add docheader to file -> filelist module, credits Christoph Koehler
        * Fixed bug #7203: Hook cObjTypeAndClassDefault in tslib_content somtimes fails, credits Stefan Geith
        * Added feature #4923: provide new inputfield "directorypicker" in BE, credits Andreas Wolf and Ralf Hettinger
        * Clean up: formatted typo3/stylesheet.css
        * Removed the tree filter toggle

    2008-03-03  Dmitry Dulepov  <dmitry@typo3.org>

        * Added @var in class.tslib_eidtools.php
    fckLR2008-03-02  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #7725: buttons.left(right,center,justifyfull).useClass not honored by htmlArea RTE

    2008-03-02  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #7642: Page tree Filter use wrong div for collapse

    2008-03-02  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #7397: improper handling of non-transparent reverse proxies
        * Added feature #7397: enable special handling of reverse SSL proxies
        * Fixed bug #1364: enable cURL in t3lib_div::getURL() for ftp, ftp,sftp and scp
        * Fixed bug #5985: PHP warning in t3lib_div::getURL() when safe_mode or open_basedir is set
        * Added feature #7624: add status/error repoting to t3lib_div::getURL()

    2008-03-02  Michael Stucki  <michael@typo3.org>

        * Fixed bug #7291: Taskcenter -> sys_action - viewport is too small when creating records (patch by Steffen Kamper)
        * Fixed bug #5788: Add a delete button to the yellow warning box for removing the ENABLE_INSTALL_TOOL_FILE
        * Added hook #7657: New hook "tslib_fe-contentStrReplace" allows to overwrite content on a website after all the caching was already done. Only applies if "config.sendCacheHeaders" is disabled! This hook is very useful for small on-the-fly replacements, for example display the fe_user name, or the time used for page generation.
        * Fixed bug #5442: When using lockSSL redirection, the port number is not configurable (patch by Christopher Hlubek)
        * Fixed bug #2019: Unable to add a Querystring to a <LINK> id/type-pair (patch by Rene Wagner)

    2008-03-01  Dmitry Dulepov  <dmitry@typo3.org>

        * Small cleanup in tslib (fixed use of uninitialized variables and added @var)

    2008-03-01  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #5838: cli_dispatch.phpsh doesn't work on windows platforms

    2008-02-29  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #4121: Pasting content on RTE moves cursor to the top of the text
        * Fixed bug #7716: htmlArea RTE plugins using some undeclared variables

    2008-02-29  Michael Stucki  <michael@typo3.org>

        * Fixed bug #7545: Explain queries does not work when selecting multiple tables (patch by Ingo Schmitt)

    2008-02-29  Ingmar Schlecht  <ingmar@typo3.org>

        * Fixed bug #1358: Installer didn't honour forceCharset (patch by Masi)

    2008-02-28  Jeff Segars  <jeff@webempoweredchurch.org>

        * Added feature #7150: Add pageUnavailable_handling for system problems and maintenance

    2008-02-28  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed bug #7684: htmlArea RTE: Cursor positioning when creating new table
        * Partially fixed bug #6714: htmlArea RTE: Poor tag handling everywhere in Opera

    2008-02-28  Ingmar Schlecht  <ingmar@typo3.org>

        * Fixed bug #7502: Show Sitename on Login screen (Thanks to Steffen Kamper)

    2008-02-28  Oliver Hader  <oh@inpublica.de>

        * Fixed bug #7630: Several problems with locking API (t3lib_lock)
        * Fixed bug #7700: Fatal error if caching is disabled and locking enabled (follow-up on bug #7630)
        * Fixed bug #5252: Pages with "Hide in menu" checked use normal page icon in list module (Thanks to Andreas Wagner)
        * Fixed bug #7693: New page wizard ignores "hide in menu" flag for page icons (Thanks to Christian Kuhn)

    2008-02-27  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed bug #7697: Syntax error raised by Mozilla 1.7 when loading htmlArea RTE
        * Fixed bug #7698: htmlArea RTE fails to load due to missing toolbar constraints
        * Fixed bug #7690: Firefox 1.5 and Mozilla 1.7 crash when htmlArea RTE is in hidden tab

    2008-02-27  Martin Kutschker  <masi@typo3.org>

        * Fix issues with feature #6601: local page lookup caches
          - issues with rootline HMENUs on a translated page
          - issues with mount points (MPvars were x- instead of x-y)

    2008-02-27  Jeff Segars  <jeff@webempoweredchurch.org>

        * Added feature #7607: Add post processing hooks for Frontend Editing

    2008-02-26  Michael Stucki  <michael@typo3.org>

        * Rename t3lib_install::getFieldDefinitions_sqlContent() to t3lib_install::getFieldDefinitions_fileContent() and provide a wrapper for backwards compatibility
        * Lots of white-space fixes (to comply with old patch)
        * Lots of non-functional changes (to comply with old patch)

    2008-02-26  Oliver Hader  <oh@inpublica.de>

        * Fixed bug #7637: Page tree fails to reload properly if page was manipulated
        * Fixed bug #7523: Description of properties is missing in install tool (Thanks to Steffen Kamper)

    2008-02-26  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Added feature #7667: htmlArea RTE: Usability improvements in table operations
        * Fixed bug #7671: htmlArea RTE configuration variable "Add default User TSonfig RTE configuration" not working. Thanks to Jan Persson.
        * Fixed bug #7687: htmlArea RTE context menu may produce js error

    2008-02-25  Ernesto Baschny  <ernst@cron-it.de>

        * Follow-up on bug #1697 (bug #7626): Timezone handling in datetime/time fields was broken, causing time to jump +serverTZ on each record saving.
        * Fixed bug #7626: Corrected handling of so called "half-hour" timezones (e.g. +0430) which caused wrong data to be saved in time/datetime fields.

    2008-02-25  Michael Stucki  <michael@typo3.org>

        * Follow-up on issue #7526: Add configuration option $TYPO3_CONF_VARS[BE][loginNewsTitle] to t3lib/config_default.php (Thanks to Steffen Kamper)
        * Follow-up on issue #6037: Replace leading character (makes sure that strpos() result is not 0) with result type check (Thanks to Oliver Hader)

    2008-02-23  Oliver Hader  <oh@inpublica.de>

        * Followup to #6885: Changing $GLOBALS['TSFE'] to $this inside tslib_fe

    2008-02-23  Ingmar Schlecht  <ingmar@typo3.org>

        * Release of TYPO3 4.2.0beta2a

    2008-02-23  Ingmar Schlecht  <ingmar@typo3.org>

        * Follow-up on issue #7625: Completely removed the CSS instruction in question as it seemed to be not needed and only caused extra fuss

    2008-02-22  Ingo Renner  <ingo@typo3.org>

        * Release of TYPO3 4.2.0beta2

    2008-02-22  Benjamin Mack  <mack@xnos.org>

        * Fixed bug #7445: Malformed translated locallang causes PHP crash (thanks to Francois Suter)
        * Issue #7307: Bugfixes for "Open Documents" extension - Part 1
          - Changed getSetUpdateSignal() function in t3lib_BEfunc and added hook possibility
          - Used hook for tx_opendocs to be updated when opening & closing a document
          - Several bugfixes and new features for tx_opendocs

    2008-02-22  Jeff Segars  <jeff@webempoweredchurch.org>

        * Added feature #7247: Add hook for warning messages within Help->About modules and improve existing warning messages
        * Fixed bug #7605: Backend Alignment Problems in Internet Explorer
        * Fixed bug #7598: Fix module menu alignment and hover in Internet Explorer

    2008-02-22  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #7587: Accesscheck for Workspaceselector, credits Steffen Kamper
        * Fixed bug #7588: Accesscheck for clearCache
        * Added feature #7592: Enable tabs for be_users, credits Francois Suter
        * Added feature #6846: enable Tabs in tt_content, credits Steffen Kamper
        * Fixed bug #7608: Keys for clear-cache labels must be renamed
        * Fixed bug #6885: Nested USER_INT, COA_INT, etc. objects are not rendered, credits Oliver Hader

    2008-02-22  Ingmar Schlecht  <ingmar@typo3.org>

        * Added feature #7526: Making loginNews look nicer (Thanks to Steffen Kamper)
        * Added feature #4553: Enable negative timestamps, so the date/datetime fields now support dates starting from 1902 instead of 1970. This is possible on all platforms since PHP 5.1. (Thanks to Steffen Kamper)
        * Added feature #7337: stdWrap for menu > range & entrylevel (Thanks to Georg Ringer)
        * Fixed bug #7158: DBAL fixes to Indexed Search backend module (Thanks to Moreno Feltscher)
        * Fixed bug #7625: Little typo in stylesheet (Thanks to Steffen Ritter)
        * Fixed bug #5919: Loss of constraints during upload to TER (Thanks to Malte Jansen)
        * Issue #7508: Slight improvement of BE user label in backend.php (Thanks to Steffen Kamper)

    2008-02-21  Benjamin Mack  <mack@xnos.org>

        * Added feature Extended BE Module "Web/Permissions" with AJAX possibilites (Thanks to Andreas Kundoch)

    2008-02-21  Ingo Renner  <ingo@typo3.org>

        * !!! modified the interface for toolbarItems so that the reference to the backend Object in the constructor is optional, this was necessary to have AJAX response methods in the same class as the code that generates the toolbar item itself

    2008-02-20  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed bug #7602: htmlArea RTE: Make the use of extended inline elements configurable
        * Fixed bug #7604: htmlArea RTE: add compatibility mode for indentation and alignment
        * Fixed bug #7582: RTE transformation should process dd element as block element
        * Fixed bug #7609: HTMLArea RTE: labels deleted from file locallang_tooltips.xml
        * Fixed bug #7609 (continued): HTMLArea RTE: labels deleted from files CharacterMap/locallang and InlineCSS/locallang

    2008-02-19  Martin Kutschker  <masi@typo3.org>

        * Added feature #7393: ASCII wrapper functions for strtoupper and strtolower (patch by Steffen Kamper)
        * Use t3lib_div::strtoupper() for processing indexed search templates

    2008-02-19  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #3491: Linking between domains in the pagetree ignores simulate static documents
        * Fixed bug #7425: syntax error in temp_CACHE*.php (patch by Steffen Kamper)

    2008-02-19  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed bug #7583: htmlArea RTE should allow to markup text in absence of any block element
        * Fixed bug #7584: htmlArea RTE: pressing TAB in last cell of table should create new row
        * Fixed bug #7585: Invoking htmlArea RTE block style plugin from other plugin fails in FF3 and IE7
        * Fixed bug #3537: htmlArea RTE: Inconsistent markup when adding tr/td in different ways in Firefox
        * Fixed bug #6767: htmlArea RTE: Merge cells does not work on merged cells
        * Fixed bug #3537 (revisited): htmlArea RTE: Correct execCommand argument in previous patch
        * Updated htmlArea RTE version number to 1.7.1 and updated manual

    2008-02-19  Ingo Renner  <ingo@typo3.org>

        * Added feature #7580: Enable tabs for be_groups, credits Francois Suter
        * Added feature #7566: Tabs for fe_user and fe_groups, credits Steffen Kamper
        * Added feature #7565: Tabs for sys_template, credits Steffen Kamper
        * !!! cleaner backend project: modified interface for toolbar items to add access checking

    2008-02-18  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #3215: Tools>User-admin is hard to "read" (thanks to Steffen and Benni)

    2008-02-18  Oliver Hader  <oh@inpublica.de>

        * (feature) Added feature #6037: Performance tunning in t3lib_div by removing elderly PHP functions (thanks to Popy)

    2008-02-17  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed bug #7564: htmlarea RTE: context menu alignment options produce js error

    2008-02-17  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #5693: options.additionalPreviewLanguages is showing wrong records for table pages (thanks to Helmut Hummel)

    2008-02-17  Patrick Broens  <patrick@patrickbroens.nl>

        * Fixed bug #7429: Docheaders: Module Web > Page : No docheader when no page has been chosen
        * Fixed bug #7430: Docheaders: Module Web > Functions : No docheader when no page has been chosen
        * Fixed bug #7431: Docheaders: Module Web > Versioning : No docheader when no page has been chosen
        * Fixed bug #7432: Docheaders: Module Web > Template : No docheader when no page has been chosen
        * Fixed bug #7433: Docheaders: Module User Tools > User settings : No docheader
        * Fixed bug #7435: Docheaders: Module User Tools > Workspace: No docheader
        * Fixed bug #7436: Docheaders: Module Admin tools > User Admin: No docheader
        * Fixed bug #7437: Docheaders: Module Admin tools > Log: No docheader
        * Fixed bug #7438: Docheaders: Module Help > TypoScript Help: No docheader
        * Fixed bug #7503: Docheaders: Module Admin tools > Ext Manager: No docheader
        * Fixed bug #7504: Docheaders: Module Admin tools > DB check: No docheader
        * Fixed bug #7505: Docheaders: Module Admin tools > Configuration No docheader
        * Fixed bug #7506: JS Errors with IE6 and new backend

    2008-02-17  Benjamin Mack  <mack@xnos.org>

        * Fixed bug #7546: Explain select not rendering indices in the output (Thanks to Ingo Schmitt)

    2008-02-17  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #7557: Shortcut-Menu does nothing when no shortcuts available

    2008-02-16  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed bug #7560: Incorrect behaviours of block style in htmlArea RTE

    2008-02-16  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #7558: typolinkCheckRootline is broken in 4.2

    2008-02-15  Benjamin Mack  <mack@xnos.org>

        * Fixed bug #5303: t3skin - pilup.gif not the same style as pildown.gif
        * Put manual for sysext "felogin" under version control (was forgotten when sysext was added)
        * Followup to bug #7549: FE Login: curly brace was wrong (syntax error)
        * Fixed bug #7549: FE Login: enabling forget password link via TS is not possible (thanks to Dirk Weise)
        * Fixed bug #7424: Usersetup Tabs were to wide in German language (thanks to Steffen Kamper)

    2008-02-14  Ingo Renner  <ingo@typo3.org>

        * Removed the php version from the about text under Help->About

    2008-02-14  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #7533: PHP version checked too late, PHP 4 will break on inclusion of t3lib_div

    2008-02-13  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed bug #7232: htmlArea RTE: In IE, selecting words with CTRL+SHIFT+Left doesn't activate "link" button
        * Fixed bug #7525: htmlArea RTE: Page TSConfig property toggleborders.setOnTableCreation not honored

    2008-02-13  Benjamin Mack  <mack@xnos.org>

        * Fixed bug #7519: Typo in felogin (Thanks to Steffen Kamper)
        * Cleanup (wrong global statement) in new TYPO3AJAX class

    2008-02-13  Ingo Renner  <ingo@typo3.org>

        * Removed ugly background color from save buttons in docheader when they were focused
        * Fixed syntax error in t3editor
        * Whitespace cleanup in t3editor javascript files
        * Fixed bug where Firefox 3 would load the content frame into the complete window, leaving the user without module menu and toolbar

    2008-02-12  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #7388: CSS Gremlins

    2008-02-12  Thomas Hempel  <thomas@typo3-unleashed.net>

        * Code cleanup and bugfix patch for t3editor / preparation for review (Thanks to Tobias Liebig)

    2008-02-12  Oliver Hader  <oh@inpublica.de>

        * Cleanup of t3lib/stddb/tbl_be.php

    2008-02-11  Benjamin Mack  <mack@xnos.org>

        * Fixed Follow up for bug #6825: TCEforms: Icon for empty palettes should not be displayed -- palettes fields were not shown
        * Fixed bug #7463: missing descriptions in backend user editor (Thanks to Steffen Kamper, followup to Issue #6921)

    2008-02-11  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed bug #7495: Various issues with nested lists in htmlArea RTE

    2008-02-11  Ingo Renner  <ingo@typo3.org>

        * Removed legacy code from backend.php

    2008-02-11  Oliver Hader  <oh@inpublica.de>

        * (minor) Fixed bug: Fixed global variables in typo3/backend.php
        * (feature) Added feature #5068: Integrate mod.web_list.deniedNewTables as opposite of allowedNewTables

    2008-02-08  Oliver Hader  <oh@inpublica.de>

        * (trivial) Fixed bug #7458: Wrong alternative text on create new page icon above page tree
        * (minor) Fixed bug #7466: Clear cache actions in top bar cause JS error
        * (minor) Fixed bug #7460: Search field in top bar causes JS error

    2008-02-08  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed bug #7450 (revisited): further corrections to localization of htmlArea RTE
        * Fixed bug #7468: htmlArea RTE QuickTag plugin refusing to open dialogue in IE

    2008-02-08  Ingo Renner  <ingo@typo3.org>

        * Release of TYPO3 4.2.0beta1a

    2008-02-07  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #7333: Better solution for "Page is being generated", credits Bernhard Kraft and Michael Stucki

    2008-02-08  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #7449: Frontend editing fails due to undefined method in t3lib_BEfunc

    2008-02-07  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed bug #4588: Frontend htmlArea RTE loads global RTE config instead of function parameter $thisConfig
        * Fixed bug #7450: htmlArea RTE: localization is broken when the RTE is used by a frontend plugin
        * Fixed bug #7451: htmlArea RTE: BE localization is broken

    2008-02-07  Benjamin Mack  <mack@xnos.org>

        * Fixed bug #7383: Added option to delete unused marker in parsehtml::substituteMarkerArray (thanks to Steffen Kamper)

    2008-02-06  Oliver Hader  <oh@inpublica.de>

        * (minor) Fixed bug: IRRE - Deleted records are added to array of related records

    2008-02-06  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed bug #7419: htmlArea RTE: Localization error in Remove Format plugin
        * Fixed bug #7421: htmlArea RTE: typographical error in localization file
        * Fixed bug #7052: Permission problem of htmlArea RTE images
        * Fixed bug #7052 (revisited): Permission problem of htmlArea RTE images, using t3lib_div::fixPermissions
        * Fixed bug #7428: htmlArea RTE: hiding a button hides the whole group
        * Fixed bug #5659: Several bugs when writing HTML entities and tags inside of htmlArea RTE
        * Fixed bug #3830: htmlArea RTE: Entities entered in wysiwyg are decoded

    2008-02-05  Oliver Hader  <oh@inpublica.de>

        * (minor) Fixed bug: Wrong type of argument on calling t3lib_div::compileSelectedGetVarsFromArray() (related to #7350)

    2008-02-05  Ingo Renner  <ingo@typo3.org>

        * Release of TYPO3 4.2.0beta1

    2008-02-05  Martin Kutschker  <masi@typo3.org>

        * Fixed #7391: cannot set key in $_GET with t3lib_div::_GETset()

    2008-02-05  Ingo Renner  <ingo@typo3.org>

        * Fixed: backend.php closed body and html elements two times
        * Removed ugly background color from buttons in the docheader
        * Moved t3skin arrow icons to main typo3/gfx folder
        * Added feature #7334: Feature: New Pagetree Styling, credits Steffen Kamper
        * Removed <beta-code> tags from the cleaner backend project
        * Reverted to the old installer, according to the commit policy for 4.2

    2008-02-05  Oliver Hader  <oh@inpublica.de>

        * (tweak) Followup to #6472: Some small changes to the new hooks
        * !!! (feature) Added feature #7370: Remove page doktypes '2' & '5' ('advanced' & 'not in menu') and merge them with 'normal' doktype '1' (patch by Steffen Kamper)
        * (feature) Added feature #7369: Hook for manipulating the cHash
        * (trivial) Updated NEWS.txt

    2008-02-04  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #7386: Remove hardcoded references to alt_main.php backend interface

    2008-02-04  Martin Kutschker  <masi@typo3.org>

        * Fix a problem with devLog in user authentication introduced with fix for #7350
        * !!! Feature #2731: Improved caching of locallang - changed internal caching from default character set of language to required character set.

    2008-02-04  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed bug: htmlArea RTE calling t3lib_div::getUserObj() with an empty string
        * Fixed bug: htmlArea RTE: incorrect configuration of TYPO3HtmlParser plugin

    2008-02-04  Benjamin Mack  <mack@xnos.org>

        * Fixed bug #7354: Filelist titles length was fixed to 30 characters, now uses value from user setup (Thanks to Stefano Cecere)

    2008-02-04  Michael Stucki  <michael@typo3.org>

        * Fixed bug #7295: sysext/dbal/: Uninitialized variable in ->handler_getFromTableList() (Patch by Oliver Klee)
        * Added feature #2988: Enable EXPLAIN SELECT in TS admin panel

    2008-02-04  Oliver Hader  <oh@inpublica.de>

        * (feature) Added feature #5242: IRRE - Storage page for child records
        * (minor) Fixed bug #7029: tslib_cObj uses deprecated function call_user_method
        * (feature) Added feature #6472: IRRE - Possibility to manipulate control items for each child records
        * (minor) Fixed bug #7371: Query generator does not accept dates in where condition
        * (tweak) Followup to #6087: Added missing labels localize.isLocalizable and localize.wasRemovedInOriginal
        * (tweak) Followup to #7350: Fixed type to match with t3lib_div::array_merge_recursive_overrule()

    2008-02-03  Dmitry Dulepov  <dmitry@typo3.org>

        * MSIE fixes for #7336 (by Jeff Segars)

    2008-02-03  Oliver Hader  <oh@inpublica.de>

        * (feature) Added feature #6087: IRRE - Localization of child records
            !!! Full review by a core developer before TYPO3 4.2-RC1 required

    2008-02-03  Ingmar Schlecht  <ingmar@typo3.org>

        * Followup to #7282: Username is now only linked to user setup if the module is accessible, thanks to Steffen Kamper
        * Followup to #7361: Using label tags in setup module

    2008-02-03  Benjamin Mack  <mack@xnos.org>

        * Followup to #7361: Reset button has now a JS confirm question
        * Followup to #7346: opendocs top menu only is included once now
        * Feature #7346: Added "Open Documents" menu in top bar of new BE, made module optional
        * Followup to #7361: Save button was moved to bottom again
        * Followup to #7361: One CSH was still on the wrong line
        * Fixed #7361: Overhauled User setup module. Now has tabs and better usability, thanks to Steffen Kamper

    2008-02-03  Michael Stucki  <michael@typo3.org>

        * Fixed bug #5152: "Duplicate entry" in cache_pagesection by rewriting parts of t3lib_TStemplate and tslib_fe::getFromCache()
        * Code cleanup subsequent to #5152
        * Reverted feature #7337 because it is faulty and lacks proper documentation

    2008-02-03  Ingo Renner  <ingo@typo3.org>

         * Fixed a positioning issue with the toolbar items in Safari
         * Added feature #7282: Show Realname of BE-User if available and link it to edit, credits Steffen Kamper
         * Fixed alignment of user name and icon in the toolbar
         * Adjusted non-t3skin module menu width to fit the wider div
         * Added feature #7367: Make the tree collapsable

    2008-02-02  Benjamin Mack  <mack@xnos.org>

        * Fixed #7347: Pagetree was not responding correctly when logged out.  Thanks to Ingmar

    2008-02-02  Ingo Renner  <ingo@typo3.org>

        * Fixed module menu for long module names, credits Steffen Kamper
        * Fixed t3skin's border.html: removed the xml prologue as it triggers IE's quirks mode
        * Fixed bug #7352: New backend problems in FireFox, Safari, OmniWeb and Camino

    2008-02-02  Dmitry Dulepov  <dmitry@typo3.org>

        * Added feature #7336: Improve usability of Constants Editor
        * t3lib/class.ts_parser_ext.php: quotes changed from double to single, function index updated with extdeveval

    2008-02-02  Martin Kutschker  <masi@typo3.org>

        * !!! #7350: Use PHP5 features in class.t3lib_div.php (static and type hinting)
        * #7351: Introduce $ACCESS_TIME/$SIM_ACCESS_TIME to improve MySQL query cache usage
        * Changed t3lib_div::get_tag_attributes/split_tag_attributes so that they always return an array

    2008-02-02  Kasper Skaarhoj <kasper2008@typo3.com>

        * Fixed a bug in tcemain that replicated FlexForm .vDEFbase tags in a strange way. Not critical but built up garbage in FlexForm XML (the XML can be cleaned with the lowlevel_cleaner or manually per recording using the Content Menu Item "FlexForm XML")

    2008-02-01  Kasper Skaarhoj <kasper2008@typo3.com>

        * Feature added to disable automatic update of diff data for translation when saving records. Instead a button is added to explicitly do this. Feature is called "explicitConfirmationOfTranslation" in $TYPO3_CONF_VARS
        * Added option for custom message in the logout message for workspace previews.
        * Fixed a bug in TTLhours for preview links.

    2008-02-01  Bernhard Kraft  <kraftb@kraftb.at>

        * Added feature #7337: stdWrap for "range" and "entryLevel" in class.tslib_menu.php (patch by Georg Ringer)

    2008-02-01  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Added feature #880: Click-enlarge for Images in htmlArea RTE

    2008-02-01  Ingo Renner  <ingo@typo3.org>

        * Added feature #7323: New Styling for Module Menu (patch by Steffen Kamper)
        * Fixed module menu in IE
        * Added acss rule to t3skin to fix checkbox styles in IE7
        * Added feature #7267: Shortcut manager - shortcut icon should reflect record type
        * Added Event.stop() to toggle functions of the toolbar items to prevent adding a # to the browser's location bar

    2008-01-31  Kasper Skaarhoj  <kasper2008@typo3.com>
        * Bugfixes to MM-relations, among other in workspaces (Bugs #3531 / #3907 solved)

        class.t3lib_tcemain.php
        - Most importantly - and depending on changes in class.t3lib_loaddbgroup.php - is that MM-relations are now swapped when publishing in a workspace. This bug has been known as #3531 and #3907 for a while.
        - Fixed old bug that MM-relations wouldn't get remapped to new elements that were are part of a copy operation ($theUidToUpdate => $MM_localUid)
        - Fixed that MM-relations added to a new unsaved record in a workspace would get attached to the live version of the record (change in dbAnalysisStoreExec())

        class.t3lib_loaddbgroup.php
        - Fixed several bugs related to MM-relations:
        - The feature "multiple" didn't work after bidir-mm was implemented. This is now fixed but requires that the MM table gets a real UID field. This can be configured with the TCA options "MM_hasUidField" (See TYPO3 Core API)
        - With bidir-MM relations the reference index on the "native" side is now updated when "opposite side" relations are edited. (The only known problem for this is when workspaces publishes such a record, then the ref. index is not updated for "opposite side" fields. It's considered low-importance for now. If you depend on the reference index, update it nightly with cronjobs.)


        * - Cleaner was updated to sort output - makes better diff-views now.
        * - Added feature to configure the TTL for preview links in workspaces.
        * - Added logout button for the preview box in the frontend view when previewing workspaces through preview links.
        * - Removed copy/cut/pasteafter/delete from context menu of DB mounts. Could lead to confusing scenarios for admin users in workspaces.
        * - Added TCA feature in [ctrl][versioningWS_alwaysAllowLiveEdit] allowed to permanently set records to be edited directly. This enables that backend users can still be edited while in a workspace. Convenient for admins.
        * - Also, the User Admin module is now available in draft workspaces
        * tcemain:
        - Fixed bug in flexform traversal that resulted in the new DHTML powered flexforms to fail.
        - Notification emails for raising stages of versions has been modified with new features; Custom message, one-message only per instance (if multiple elements are raised in one time),
        * Fixed bug related to workspaces; When previewing a page in workspaces, any page in the root line being hidden (online or offline version) would result in a "Template not found" error. (t3lib_page)
        * - Fixed trivial bug in view_array(): With empty arrays table-end tag were not applied. (class.t3lib_div)
        * - (trivial) changed arraybrowser so also array keys are included in the search. [class.t3lib_arraybrowser.php + lowlevel/config/index.php]

    2008-01-31  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #7202: Debug renders incomplete table with empty arrays. Thanks to Stefan Geith.
        * Fixed bug #6902: Add an imagespace to Text w/ Image when image width is not available. Thanks to Georg Ringer.

    2008-01-31  Benjamin Mack   <mack@xnos.org>

        * Fixed bug #4770: css_styled_content - rowSpace also puts space below last image row

    2008-01-31  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Feature: Enhancements to the acronym feature of htmlArea RTE
        * Added feature #7332: htmlArea RTE: Add default target to classes configured with classesAnchor in Page TSConfig
        * Udpate htmlArea RTE version to 1.7.0 for TYPO3 4.2 beta1.

    2008-01-29  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Feature/cleanup: Restructure htmlArea RTE plugins QuickTag, TableOperations, UserElements
        * Feature/cleanup: Move colors, fonts, text direction, word cleaning and lists to extensions/plugins of htmlArea RTE.
        * Feature #3633: Individual height of inline htmlArea RTE. Thanks to Ralf Hettinger.
        * Fixed bug #5013: htmlArea RTE Editor not working in Firefox 3.0 Granparadiso
        * Added feature #7318: In htmlArea RTE, text direction should be set with the dir attribute

    2008-01-28  Kasper Skaarhoj  <kasper2008@typo3.com>

        * (minor) Fixed bug: "typo3/js/workspaces.js" was corrected to "js/workspaces.js" in class.workspaceselector.php

    2008-01-27  Oliver Hader  <oh@inpublica.de>

        * (minor) Fixed bug: Overriding TCA properties with TSconfig does not work with array

    2008-01-26  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Bug #2547: Properties of images are not saved due to RTE transformation
        * Feature/cleanup: Restructure htmlArea RTE plugins FindReplace, InsertSmiley, RemoveFormat, SpellChecker, AboutEditor
        * Fixed bug #4074: htmlArea RTE SpellChecker not working. Thanks to Reinier Kleipool.
        * Fixed bug #4777: htmlArea RTE Spellchecker split words at some special chars (e.g. german umlauts). Thanks to Daniel Chabrol.

    2008-01-26  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #7222: When installing an extension that contains a new backend module the module menu is not refreshed anymore when using backend.php
        * Fixed bug #7245: Javascript Error in new Backend
        * Fixed bug #7221: The currently active module is not highlighted anymore with the new backend.php
        * Fixed bug #584: Changing language in user setup do not reload left frame (menu)
        * Added missing rendering of css added by extensions
        * Fixed style sheet overwriting from skinning extensions in backend.php
        * Made tables in Web->List view fill the whole document by adding css style width of 98%
        * Updated prototype to 1.6.0.2
        * Fixed bug #7270: Shortcut menu does not load user's shortcuts if user is not admin, credits Stig N?rgaard F?rch
        * Fixed bug #7256: highlight matching curly brackets, credits Tobias Liebig
        * Fixed bug #6834: Wrong syntax highlighting in wrong context, credits Tobias Liebig
        * Fixed bug #7255: implement "auto-closing brackets", credits Tobias Liebig
        * Fixed bug: when refreshing the module menu, the currently highlighted module losses highlighting
        * Added visual effects to collapsing/expanding module menus
        * Fixed bug #7283: When editing a shortcut in backend.php regular users get global groups shown in the group select field but can't save to them

    2008-01-26  Oliver Hader  <oh@inpublica.de>

        * (minor) Fixed bug: IRRE - Some labels/messages are not shown when in AJAX mode

    2008-01-24  Ingo Renner  <ingo@typo3.org>

        * Added missing description to module menu, credits Steffen Kamper
        * Fixed module menu toggling
        * Added some cleanup for the unified BE AJAX interface

    2008-01-24  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Added feature: Various enhancements to link dialogues in htmlArea RTE
        * Fixed bug #6787: classesAnchor and classesLinks get lost when changing tab in link browser
        * Added feature #4100: Insert/Modify Link with DAM
        * Fixed bug #7258: htmlArea RTE crashes on missing locallang.xml

    2008-01-23  Ingo Renner  <ingo@typo3.org>

        * Fixed bugs #7251 , #6524: Make the folding/unfolding of the menu items use AJAX, credits Steffen Kamper

    2008-01-23  Thomas Hempel  <thomas@typo3-unleashed.net>

        * Bugfix: removed a needless comma in sysext/cms/ext_tables.sql (line 160)

    2008-01-22  Ingo Renner  <ingo@typo3.org>

        * Added feature: #7223: update prototype and scriptaculous to their most recent versions
        * Fixed bug: #7237: There is no way to get loaded interface
        * Fixed bug: #7238: t3editor should not depend on MochiKit-Javascript-Framework

    2008-01-21  Benjamin Mack  <mack@xnos.org>

        * Fixed #7166: CSH broken in EM, Info View (Thanks to Francois Suter)

    2008-01-21  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed JS error when opening the TYPO3 image browser and proc.plainImageMode is not set

    2008-01-21  Ingo Renner  <ingo@typo3.org>

        * Fixed tab borders in TCEforms
        * Now the module menu in backend.php is as wide as in alt_main.php

    2008-01-20  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #7211: "Start in Module" does not work anymore
        * Fixed check for wrong implementation of toolbarItem interface
        * Renamed typo3/css/verticalmenu.css to modulemenu.css
        * Changed the way how javascritp and css files needed to be referenced when adding them to backend.php, now relative to typo3/
        * Added note item to EM when there may be additional configuration fields
        * Some colors from t3skin for the docheader went into the original style, fixed by moving them back to t3skin and choosing an appropriate color whn t3skin is not installed
        * Fixed minor style issues with the docheader with and without t3skin

    2008-01-19  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Added feature: Various enhancements to image dialog in htmlArea RTE
        * Fixed bug #3957: picture drag and drop throws you out of the tab navigation
        * Fixed bug #5490: Drag 'n drop javascript error / blank screen in IE
        * Added feature #5885: Default image class
        * Added feature #5902: Removing style attribute for images
        * Added feature #6115: Enabling configuration of the "edit image" dialogue

    2008-01-19  Ingo Renner  <ingo@typo3.org>

        * Added a way to overwrite / skin the css files in backend.php

    2008-01-18  Oliver Hader  <oh@inpublica.de>

        * (tweak) Fixed bug: Removed unused inclusion of typo3/js/ajax.js in typo3/backend.php

    2008-01-17  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed bug #7196: Status of block element buttons not updated in htmlArea RTE toolbar

    2008-01-17  Oliver Hader  <oh@inpublica.de>

        * (major) Fixed bug #7177: Page tree is not working in IE6/IE7
        * (minor) Fixed bug #7184: Login has probably expired, when you create a new page (only in Safari and Internet Explorer)

    2008-01-17  Ingmar Schlecht  <ingmar@typo3.org>

        * Fixed bug #7165: CSH bubble help white on white in Web > List view (Thanks to Francois Suter)

    2008-01-17  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #7178: GUI of new backend is mixed up in IE6

    2008-01-16  Oliver Hader  <oh@inpublica.de>

        * (minor) Fixed bug: Missing try/catch for actionChecks in TBE_EDITOR

    2008-01-16  Ingo Renner  <ingo@typo3.org>

        * Release of TYPO3 4.2.0alpha3

    2008-01-15  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed bug #6821: Empty paragraph-tags with attributes are not editable in RTE

    2008-01-15  Ingmar Schlecht  <ingmar@typo3.org>

        * Added feature #6784: New login-box System-Extension "felogin". This is a refactored version of the "newloginbox" extension, now integrated into the core. (Big thanks to Steffen Kamper for writing this extension for core integration!)
        * Minor improvements to the Cleaner Backend stylesheet (by Steffen Kamper)
        * Fixes to shortcut menu of Cleaner Backend required for IE7

    2008-01-15  Ingo Renner  <ingo@typo3.org>

        * Added feature #5536: Some Hooks for tslib_content
        * Added feature #7161: create a shortcut manager to delegate calls to create a new shortcut to the right target
        * Added the shortcut menu, part of the cleaner backend project
        * Added feature #7163: Make backend.php the default backend
        * Cleanup: removed typo3/alt_main_new.php and typo3/sysext/topapps as it was never finished and used
        * Added feature: make the page tree filter pretty, credits to Benjamin Mack

    2008-01-15  Benjamin Mack  <mack@xnos.org>

        * (bugfix) #2936, 4126: Improvements to clipboard copy/move selection (by Bernhard Kraft)
        * (cleanup) #6958: added comments in t3lib_htmlmail.php, used foreach and some better variable namings (thanks to Stefano Cecere and Steffen Kamper)
        * (bugfix) #5482:t3lib_htmlmail.php is now initialized with empty variables
        * (bugfix) Fixed #7148 - CSV Export Improvements in List Module

    2008-01-15  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #5660: Wrong HTTP Header on Domain Redirect (fix by Jeff Segars)

    2008-01-15  Oliver Hader  <oh@inpublica.de>

        * (feature) Added feature #7122: IRRE - Implement TYPO3AJAX handler for Inline Relational Record Editing
        * (feature) Added feature #2797: Add return value to t3lib_htmlmail::send (thanks to Steffen Kamper)
        * (minor) Fixed bug #7126: IRRE - Child records are shown floated and not as blocks in Safari
        * (cleanup) Removed typo3/alt_doc_ajax.php (former AJAX handler of IRRE)
        * (feature) Added feature #5899: Notify user where required elements are nested in IRRE or Tabs
        * Updated NEWS.txt

    2008-01-14  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed bug #7138: RTE is not rendered in Tabs
        * Added feature #6845: Make preserving DIV sections a configurable RTE processing option

    2008-01-14  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #6932: Unlike the default preview language, fields of additionalPreviewLanguages are shown if they are empty. credits Helmut Ummel

    2008-01-11  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * htmlArea RTE: Update manual and version to 1.6.4dev

    2008-01-11  Oliver Hader  <oh@inpublica.de>

        * (feature) Added feature #7124: Add some more functionality to new AJAX interface in the TYPO3 back-end

    2008-01-10  Benjamin Mack  <mack@xnos.org>

        * (feature) Added #7096: Consistent interface for AJAX calls in the TYPO3 Backend

    2008-01-10  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #5421: Problem ignoring extension constraints
        * Fixed bug #7105: Default value of image_orient is invalid (Thanks to Steffen Kamper)

    2008-01-09  Benjamin Mack  <mack@xnos.org>

        * (cleanup) Fixed #6957: Removed bottom button panel in alt_doc.php
        * (feature) Added #6995 CSH text is now displayed with CSS hover when in icon mode (Thanks to Chris Lindenmueller)

    2008-01-08  Benjamin Mack  <mack@xnos.org>

        * (bugfix) Followup for #1678: limit to language; made the variable names better (Thanks to Helmut Hummel)
        * (bugfix) Fixed #7101: CType bullets not rendered correctly (thanks to Steffen Kamper)
        * (bugfix) Fixed #6883: Added missing functions in typo3/template.php

    2008-01-08  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #6991: Enable stdWrap for wrapItemAndSub

    2008-01-06  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed bug #6961: Errors in link creation popup window

    2008-01-06  Oliver Hader  <oh@inpublica.de>

        * Fixed bug #5994: IRRE - RTEhtmlarea is not show in child records if parent has no RTE

    2008-01-06  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Feature/Cleanup: Acronym plugin of htmlArea RTE using new plugin API and enabled in IE7
        * Fixed issue #6154: Plugin Acronym enables class abbr for span
        * Added feature #1927: Activate Acronym Plugin for IE
        * (major) Feature: Improved behaviour and configuration options for inline elements and text styling
        * Added feature #3708 (complete): support for <q>
        * Fixed issue #5952 (complete): Usability Issue with classes wrapped with <> in select lists
        * Added feature #6034: Improvements of inlineCSS: adding classes to inline elements without additional span
        * Fixed issue #6839: sub and sup are added via CSS instead of tags in Safari
        * Fixed issue #7052: Permission problem of RTE images

    2008-01-05  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * (major) Feature: Improved behaviour and configuration options of formatblock and blockstyle drop-down lists
        * Feature:  Added buttons insertparagraphbefore, insertparagraphafter and blockquote
        * Feature:  Added Page TSConfig RTE sub-array mutuallyExclusiveClasses
        * Fixed issue #5952 (partial): Usability Issue with classes wrapped with <> in select lists
        * Fixed issue #5951: Disturbing behaviour of indent/outdent and TAB
        * Added feature #3708 (partial): support for <blockquote>
        * Fixed issue #5977: align="center" (right or left) not any more supported by W3C
        * Fixed issue #6837: Strange layout for header N except the first one (Safari)
        * Cleanup: Character Map plugin now using new plugin API

    2007-12-30  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Feature/bugfix: Fixing icons for Opera and adding new icons in default skin of htmlArea RTE and in t3skin/rtehtmlarea

    2007-12-27  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #7028: Implement CSH for flexforms

    2007-12-26  Oliver Hader  <oh@inpublica.de>

        * (minor) Fixed bug #6651: IRRE - Button for creating new records disappeared on nested child records if a parent record reached the maxitems value
        * (tweak) Fixed bug #7038: EM - sql_free_result() on non-resources fails

    2007-12-21  Oliver Hader  <oh@inpublica.de>

        * (minor) Fixed bug #6007: IRRE - Child records with image fields are not shown in m:n disposal
        * (minor) Fixed hanging recordset in t3lib_TCEmain::getSortNumber

    2007-12-20  Thomas Hempel  <thomas@typo3-unleashed.net>

        * Added meta-subcategory "root" for adding deliverables to main categories.

    2007-12-19  Thomas Hempel  <thomas@typo3-unleashed.net>

        * Feature request #6988: Return errors from performUpdateQueries (Thanks to Francois Suter)

    2007-12-19  Ernesto Baschny  <ernst@cron-it.de>

        * Feature request #3822, #5065: Make hardcoded (250000 bytes) max attachment size for mailform configurable: $TYPO3_CONF_VARS['FE']['formmailMaxAttachmentSize']

    2007-12-17  Ingmar Schlecht  <ingmar@typo3.org>

        * Fixed bug #6996: Versioning in clickmenu was unavailable for non-admins due to a problem of an earlier bugfix #4160 (Thanks to Helmut Hummel for the correction)
        * Code cleanup: #6990 use prototype functions instead of own ones where possible in clickmenu (Thanks to Helmut Hummel)

    2007-12-17  Andreas Otto <andreas.otto@dkd.de>

        * Feature request #6945: Login failures can be logged with t3lib_div::syslog().

    2007-12-16  Benjamin Mack  <mack@xnos.org>

        * (bugfix) #6955: fileadmin contextual menu doesn't popup well

    2007-12-16  Ingo Renner  <ingo@typo3.org>

        * Removed width css property from workspace selector toolbar item as it caused layout issues in non english backends

    2007-12-16  Benjamin Mack  <mack@xnos.org>

        * (bugfix) #6859: Taskcenter - Submodules are not shown (fixed backwards-compatibility by Malte Jansen)
        * (bugfix) #6879: Sticky top icons in alt_doc: missing
           button when columnsOnly is set

    2007-12-15  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #6921: labels in t3lib/stddb/tbl_be.php hardcoded

    2007-12-15  Benjamin Mack  <mack@xnos.org>

        * (cleanup) #6826: Removed "Show Description for Fields" checkbox in alt_doc.php

    2007-12-14  Thomas Hempel  <thomas@typo3-unleashed.net>

        * Fixed wrong update meachnism in method call
        * Fixed some small typos in database module (Thanks to Francois Suter)

    2007-12-13  Oliver Hader  <oh@inpublica.de>

        * (major) Fixed bug #6924: t3lib_div::readLLXMLfile does not use localized content anymore

    2007-12-13  Thomas Hempel  <thomas@typo3-unleashed.net>

        * Finished DB compare against stddb/tables.sql (need testing)

    2007-12-12  Thomas Hempel  <thomas@typo3-unleashed.net>

        * Bugfix: Invalid call to viewObj
        * Added support for fieldsets in renderMethod "form"
        * Added ability to send forms via AJAX
        * Improved DB compare code (Thanks to Francois Suter)

    2007-12-10  Ingmar Schlecht  <ingmar@typo3.org>

        * (security) Fixed a low-severity SQL injection in the modfunc2 of indexed_search (only exploitable by BE users, and severity limited because addslashes() was already applied to the value - yet not within a quoted string) (Thanks to Henning Pingel for findind the issue and Andreas Otto for the fix)

    2007-12-06  Benjamin Mack  <mack@xnos.org>

        * (bugfix) Fixed #1678: limit to language; still can delete and move content element (Thanks to Helmut Hummel)

    2007-12-05  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed problems with language files in new installer (typo3/sysext/install)
        * Fixed bug #6903: Translated language files are not loaded
        * Fixed bug #6703: $TCA[table]['ctrl']['hideTable'] not implemented
        * Fixed bug #6888: Disabling some or all controls in "group" field

    2007-12-04  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #6844: DB compare fails

    2007-12-04  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #6114: t3lib_extMgm::addToAllTCATypes ignores type 0

    2007-12-03  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #6727: Fatal error install tool

    2007-12-03  Benjamin Mack  <mack@xnos.org>

        * (cleanup) Fixed #6823: Removed "Disable RTE" checkbox in alt_doc.php

    2007-12-02  Dmitry Dulepov  <dmitry@typo3.org>

        * Changed "Clear cache" string to start with upper-case

    2007-12-02  Ingo Renner  <ingo@typo3.org>

        * Added feature #6868: Enable labels for EM extension configuration, credits Georg Ringer

    2007-12-02  Ingmar Schlecht  <ingmar@typo3.org>

        * Fixed bug #6663: Unserialized objects not debugged properly (by Francois Suter)
        * Minor change to tsconfig_help sysext (by Francois Suter)
        * Issue #6873: Added icon for pages marked as not in menu and with FE-user access restriction to t3skin (by Francois Suter)

    2007-11-30  Oliver Hader  <oh@inpublica.de>

        * Fixed bug #5602: spamProtectEmailAddresses_atSubst is not recognized correctly

    2007-11-30  Ingo Renner  <ingo@typo3.org>

        * Added positioning function for the clear cache menu which is needed to keep the menu below it's icon when new items are added to the toolbar
        * Added backend search toolbar item to backend.php

    2007-11-29  Benjamin Mack  <mack@xnos.org>

        * (feature) #6833: Possibility to add inline JS to page (Thanks to Steffen Kamper)
        * (minor) Fixed #6825: TCEforms -- Icon for empty palettes are not displayed anymore

    2007-11-27  Ingo Renner  <ingo@typo3.org>

        * Added clear cache actions menu to backend.php as part of the cleaner backend project
        * Moved user info and logout button to the toolbar

    2007-11-27  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Bugfix #6836: htmlArea RTE cannot enter line break in Safari (Windows)

    2007-11-26  Ingo Renner  <ingo@typo3.org>

        * Moved interface t3lib_backendToolbarItem to typo3/interfaces/interface.backend_toolbaritem.php

    2007-11-26  Wolfgang Klinger <wk@plan2.net>

        * Fixed bug #6831: Clickmenu is cut off on the left, when it does not fit in the viewport (Thanks to Helmut Hummel)

    2007-11-25  Dmitry Dulepov  <dmitry@typo3.org>

        * Reformatted t3editor sysext

    2007-11-25  Ingmar Schlecht  <ingmar@typo3.org>

        * Fixed bug #6828: Using outpug buffering for debug() to prevent "Headers already sent" errors

    2007-11-25  Benjamin Mack  <mack@xnos.org>

        * Feature #6829: New general template methods for FE & BE (Thanks to Steffen Kamper)
        * Added labels to checkbox descriptions in new EM section

    2007-11-24  Oliver Hader  <oh@inpublica.de>

        * Fixed bug #6817: Files with extension xml are ignored as resource of a template
        * Added feature #5530: Hook in TCEmain after all database operations
        * Cleaned up typo3/sysext/tstemplate_info/class.tx_tstemplateinfo.php

    2007-11-24  Benjamin Mack  <mack@xnos.org>

        * Fix #6822: css_styled_content default EXTCONF was not loaded since it was installed by default

    2007-11-24  Ingmar Schlecht  <ingmar@typo3.org>

        * Feature #6770: Flexform DataStructure pointerFields:
        * Implement option to use two ds_pointerFields so DataStructures can be switched by the combination of two field's values
        * Enabled the new ds_pointerFields possibility for tt_content.pi_flexform, so you can specify DataStructures per (combination of) list_type and CType values
        * Made css_styled_content register the DataStructures for the CType=table Content Element using the new ds_pointerFields instead of overriding the 'default' DS key

    2007-11-23  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #6240: pageNotFound_handling returns empty page if specified URL cannot be retrieved. Credit to Helmut Hummel for the fix.
        * Added feature #5791: indexed_search: join_pages is now configurable via TypoScript

    2007-11-23  Oliver Hader  <oh@inpublica.de>

        * Fixed bug #5956: TCA eval required on date field does not work

    2007-11-23  Wolfgang Klinger <wk@plan2.net>

        * Fixed bug #6775: Page and info module ignore "Limit to language"

    2007-11-22  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bugs #1697, #1465, #4849, #5183: Datetime input fields and timezone shift bug
        * Fixed: The click-checkbox to set the current date/time did not work on fields with eval year, time and timesec.
        * Fixed: Setting a field of eval "timesec" as a label of a table would show an integer instead of the hh:mm:ss string

    2007-11-22  Bernhard Kraft  <kraftb@kraftb.at>

        * Added hooks #6738: Hooks for Web>List module which allow modification/addition/removal of icons for each table and its records

    2007-11-22  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #6741: Add fields cruser_id and crdate to table fe_groups, credit Malte Jansen
        * Added feature #6793: Rename User and Tools modules, credits Francois Suter

    2007-11-22  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Feature/bugfix: htmlArea RTE: Enter paragraph on return key corrected and improved
        * Bugfix #6769: RTEhtmlarea not working with IRRE in FF anymore

    2007-11-21  Bernhard Kraft  <kraftb@kraftb.at>

        * Fixed bug #6785: "this->extraFormHeaders" didn't work anymore since "fixed alt_doc headers" have been introduced (#6625)

    2007-11-20  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Feature #6769 continued: Further adjustments and workarounds to enable htmlArea RTE in Safari

    2007-11-20  Dmitry Dulepov  <dmitry@typo3.org>

        * Restored typo3/sysext/lang/locallang_mod_doc.xml because it was zero length and broke translations
        * Fixed bug #6259: Disabling Tabs with no fields
        * Fixed bug #6773: Allow br in flexform labels

    2007-11-20  Oliver Hader  <oh@inpublica.de>

        * (feature) Added feature #6473: CSC - Extend render userFuncs by TS field property

    2007-11-20  Benjamin Mack  <mack@xnos.org>

        * Feature #6768: Added the media field for page type "Shortcut" as well
        * Feature #6768: Integrate ext 'Media field for page type External URL' (dkd_media4url)

    2007-11-19  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Feature #6769: Enable htmlArea RTE in Safari

    2007-11-19  Oliver Hader  <oh@inpublica.de>

        * (feature) Added feature #6734: Integrate post processing for links handled by typoLink
        * (feature) Added feature #6346: Enable overriding/renaming field labels by page TSconfig (patch by Malte Jansen)

    2007-11-16  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Feature #6715: Remapping of b and i tags by RTE transformation made configurable
        * Feature/bugfix: Change to the initialisation sequence of htmlArea RTE

    2007-11-16  Ingo Renner  <ingo@typo3.org>

        * Added feature #6545: Hook Request: db_list

    2007-11-15  Ingmar Schlecht  <ingmar@typo3.org>

        * Release of TYPO3 4.2.0alpha2

    2007-11-15  Ingmar Schlecht  <ingmar@typo3.org>

        * Bugfix #5683: processing of label field in backend (Thanks to Ralf Hettinger)
        * Set left-padding of options in selectorboxes to 22 if an icon is displayed that has a width between 14 and 20 pixels. This was necessary for a good visual impression even if page and content type icon sizes vary.
        * Made Clear Cache buttons of backend.php AJAX based, showing a nice spinner image during cache clearing

    2007-11-15  Jeff Segars  <jeff@webempoweredchurch.org>

        * Feature #6672: Add tab filtering and file type filtering to TCA-defined link wizard

    2007-11-15  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Feature #6657 revisited: htmlArea RTE: remove em and strong remap from main script

    2007-11-15  Ingo Renner  <ingo@typo3.org>

        * Enabled requestUpdate for rte_enabled
        * Added feature #6721: add the workspace selector to the cleaner backend toolbar
        * Added feature #6442: Hook in browse_links request (for linking to records)
        * Added beta glue code for t3editor
        * Added t3editor as system extension

    2007-11-14  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Feature #6712: htmlArea RTE: make hotkeys configurable in PageTSConfig
        * Feature #6712 continued: htmlArea RTE: adding hotkeys to default configuration settings
        * Bugfix: htmlArea RTE: Correction to InlineDefault plugin causing frame reload.
        * Feature #6712 corected: htmlArea RTE: correction to DefaultInline plugin and enhanced API

    2007-11-14  Ingmar Schlecht  <ingmar@typo3.org>

        * Cleanup-up to prior commit #529: "TypoScript help" module
        * Added SVN properties to new files
        * Minor changes to feature #6670: Enable Tabs in Page Properties
        * Feature #6710: Use optgroups in selectorboxes

    2007-11-14  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #6692: When letting TYPO3 generate DB table icons it can happen that transparent areas become rendered black
        * Added follow up on feature #6670: Enable Tabs in Page Properties

    2007-11-14  Sebastian Kurfuerst  <sebastian@typo3.org>

        * Fixed feature #529: update inline TypoScript help (Thanks to Francois Suter)

    2007-11-14  Benjamin Mack  <mack@xnos.org>

        * (feature) Fixed #6625: Cleaner Backend / HCI: Make "alt_doc" header fixed

    2007-11-13  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Feature #6705: htmlArea RTE: Display all classes of an element in the statusbar
        * htmlArea RTE: Update manual and version  to 1.6.3devfckLR * Feature #6579 continued: Allow plugins to register hotkeys

    2007-11-13  Bernhard Kraft  <kraftb@kraftb.at>

        * Fixed bug #633: Menu doesn't expand if ".special" is set

    2007-11-13  Benjamin Mack  <mack@xnos.org>

        * (minor) Fixed bug #6548: FE "Preview" Label not stylable

    2007-11-12  Oliver Hader  <oh@inpublica.de>

        * (minor) Fixed bug #6696: Parts of the TYPO3 back-end do not work correctly with prototype.js 1.6.0

    2007-11-12  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Feature #6579 continued: Backtracking on the use of Prototype.js by htmlArea RTE.

    2007-11-11  Ingmar Schlecht  <ingmar@typo3.org>

        * Minor code-cleanup to recent Workspace related changes

    2007-11-10  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * (cleanup) Protect rtehtmlarea 'for' loops from properties possibly added by JS frameworks.
        * Feature #6579 continued: correction to plugin registration for FE case

    2007-11-10  Ingmar Schlecht  <ingmar@typo3.org>

        * Feature #6256: $TCA: Newline for Tabs (--div--) (Thanks to Malte Jansen)
        * Minor Feature #4280: stdWrap for params property of IMAGE (Thanks to Ralf Hettinger)
        * Bug #6682: GMENU property disableAltText clears the content of alt param, but does not remove it (Thanks to Hemlut Hummel)

    2007-11-09  Benjamin Mack  <mack@xnos.org>

        * (feature/cleanup) Refactored clickmenu to speed up the BE
        * (bugfix) Fixed Image Generation bug. Call in t3lib_div now uses the IM wrapper to render gifs/pngs

    2007-11-08  Ingo Renner  <ingo@typo3.org>

        * Added initial cleaner backend project work (backend.php)

    2007-11-08  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Feature #6668 continued: Some minor adjustments when htmlArea RTE uses the Ajax request

    2007-11-08  Benjamin Mack  <mack@xnos.org>

        * (cleanup) Fixed #6670: Added tabs to Page properties + cleanup (Thanks to Steffen Kamper)

    2007-11-08  Oliver Hader  <oh@inpublica.de>

        * Updated JavaScript frameworks in typo3/contrib: prototype (1.6.0) and script.aculo.us (1.8.0)

    2007-11-07  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Added feature #6668: Let htmlArea RTE use the Ajax request of the Prototype framework

    2007-11-07  Benjamin Mack  <mack@xnos.org>

        * (minor) sysext "opendocs" is now installed by default

    2007-11-07  Oliver Hader  <oh@inpublica.de>

        * (major) Fixed bug #5772: IRRE - Combination mode doesn't save new child records correctly
        * (minor) Fixed bug #6456: IRRE - Palettes are not rendered correctly on nesting records using the same table

    2007-11-06  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Added SVN properties on some rtehtmlarea files
        * Feature #6579 continued: Make InlineCSS plugin use the RTE extension and plugin API

    2007-11-05  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Feature #6579 continued: Use prototype.js to create a htmlArea plugin class.
        * Added feature #6657: Extract inline buttons from htmlArea RTE main scripts.

    2007-11-05  Ingmar Schlecht  <ingmar@typo3.org>

        * Issue #6641: Renamed new page tree related TSconfig Options and switched off separateNotinmenuPages by default (Thanks to Christian Kuhn)
        * Changing SVN property eol-style from native to LF for all text files in the core trunk

    2007-11-02  Ingmar Schlecht  <ingmar@typo3.org>

        * Added default SVN properties and Id marker to new files which didn't have it yet
        * Fixed bug #6624: Weird pagetree display with new "Not in menu" feature (Thanks to Christian Kuhn)
        * Bug #6561 revised: Registers IMAGE_NUM and IMAGE_NUM_CURRENT contained incorrect array indizes (Thanks to Helmut Hummel)

    2007-11-02  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed feature #6579: Small correction to FE htmlArea RTE
        * Remove exception catching in htmlArea RTE when setting styleWithCSS
        * Fixed bug #6640: htmlArea RTE tool bar is not updated in IE when up or down arrow is pressed
        * Fixed feature #6619: Add underscore rather than dash in file names

    2007-11-01  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Added feature #6579: Make htmlArea RTE extensible
        * Added feature #6619: Let htmlArea RTE use t3lib_div::minifyJavaScript()
        * Deleted all compressed files in accordance with feature #6619
        * Fixed bug #6476: htmlArea RTE incorrectly nests tags on return key in FF

    2007-10-31  Ingo Renner  <ingo@typo3.org>

        * Added feature 6169: Add user function support to Constant Editor

    2007-10-30  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #6618: Web->List: Add title to versioning symbol in extended view (Thanks to Christian Kuhn)

    2007-10-30  Oliver Hader  <oh@inpublica.de>

        * (minor) Fixed bug #6613: IRRE/RTE - Creating a new child record fails if record uses htmlArea RTE

    2007-10-30  Benjamin Mack  <mack@xnos.org>

        * Moved "doc" module to sysext "opendocs"
        * Fixed bug #4832: Integrate the extension ter_update_check into EM (Thanks to Christian Welzel)

    2007-10-29  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #5338: Error installing suggested extensions

    2007-10-29  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #6581: Fatal error in TCEForms: Fatal error: Cannot use string offset as an array
        * Fixed bug #6565: T3DataStructure with sheet references will not show sheetTitle,sheetDescription and sheetShortDescr
        * Fixed bug #5347: Flexforms dosen't resolve sheets
        * Fixed bug #3969: Missing sheets inclusion in flexforms?

    2007-10-28  Kasper Skaarhoj <kasperYYYY@typo3.com>

        * - Reverting IRRE related changes in t3lib_BEfunc done for workspaces by Dmitry. They were faulty.
        * - Modified rendering of FlexForms in t3lib_TCEforms and also processing in t3lib_tcemain so that flexforms are now fully dynamic in their nature; This is particularly the case when flexforms have sections and containers within (see the original movie-list example for instance). DHTML is used to reorganize flexform elements, delete and add new. No ajax though (not necessary). It means we finally have a permanent implementation for what was before "_DELETE_FLEX_FORM" etc buttons... Used scriptaculous and prototype for the work.
        * - In alt-doc, the script now preserves the scroll position when clicking save. Also, the button panel in top flows with form. This is preliminary and Jens will implement a better way... If it takes too long we can make it configurable.
        * - Added User TSconfig options to mount pages and folders for link-browsing purposes only. The point is that a user should be able to select pages which normally doesn't appear in his particular mount points of the page tree. With this feature you can set an entirely different set of mountpoints which only appear in the Element Browser. It is for readonly purposes of course. (Normal page access restrictions will still apply though, only the mount point changes). These features can be useful in general where a user needs to link to files or pages outside their normal range. However, it becomes especially useful with workspaces where the db mount is usually smaller and filemounts are completely disabled! Here are examples of configuration: options.folderTree.altElementBrowserMountPoints = _temp_/, templates. options.pageTree.altElementBrowserMountPoints = 34
        * - Fixed small bug in db-list around passing the pointer-variable in returnUrls
        * - Fixed safari-related bug in template.php (clickmenu didn't appear in correct location).
        * - Added warning to Web>Access module when using it from workspaces: It explains about how permissions affect workspaces.

    2007-10-28  Martin Kutschker  <masi@typo3.org>

        * Feature #6601: Speed up link rendering by implementing some local caches

    2007-10-27  Benjamin Mack  <mack@xnos.org>

        * Fixed bug #4662: New default behaviour for PAGE_TARGET (Thanks to Steffen Kemper)

    2007-10-27  Ingmar Schlecht  <ingmar@typo3.org>

        * Fixed bug #1940: "OPEN DOCUMENTS" causes 404 error (Thanks to Christian Trabold)
        * Feature #6258: Change config.uniqueLinkVars to 1 (Thanks to Georg Ringer)
        * Fixed bug #5082: Clean up a nested htmlspecialchars() in class.db_list_extra.inc (Thanks to Christian Kuhn)
        * Fixed bug #6561: imgMax and imgStart (IMGTEXT) not working properly (Thanks to Helmut Hummel)

    2007-10-26  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed bug #5031: htmlArea RTE incorrectly processes col tags and default proc options disallow col and colgroup tags

    2007-10-24  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #6539: Move the BE logo generation code into a separate method so it can be used from other classes

    2007-10-24  Benjamin Mack  <mack@xnos.org>

        * Fixed bug #6582: Deprecated use of language="text/javascript" in function loadJavascriptLib in template.php (thanks to Christian Kuhn)

    2007-10-23  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed bug #5151: rtehtmlarea install/uninstall requires clearing cache

    2007-10-22  Andreas Otto  <andreas.otto@dkd.de>

        * Fixed bug #6340: JS errors with dividers2tabs and rtehtmlarea

    2007-10-22  Thomas Hempel  <thomas@typo3-unleashed.net>

        * Fixed bug: #1575: Page-Title maxlength does not fit into database-field tinytext (Thanks to Georg Ringer)

    2007-10-21  Benjamin Mack  <mack@xnos.org>

        * (feature) added function to include javascript libraries in the backend
        * (minor) indexed_search - Added more info where the manual can be found

    2007-10-21  Thomas Hempel  <thomas@typo3-unleashed.net>

        * Fixed bug: #6531: Function getUpdateJS doesn't work properly (Thanks to Philip Almeida)
        * Fixed bug: #434: Function getUpdateJS produces JS error messages

    2007-10-20  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #6559: Spelling error in Object Browser

    2007-10-20  Ingmar Schlecht  <ingmar@typo3.org>

        * Fixed bug #5949: BE-Shortcut to Tools->User Admin returns error (Thanks to Oliver Hader)
        * Fixed bug #6210: UserTSConfig value "options.moduleMenuCollapsable=0" does not work.
        * Fixed bug #6071: Switch to User does not work from context menu in List Module. (Thanks to Christian Kuhn all patches above!)
        * Fixed bug #6553: Remove hardcoded strip_tags() from image altText and replacing it with TS stripHtml = 1 (Thanks to Georg Ringer)
        * Fixed bug: stdWrap for imgMax is not taken into account. (Thanks to Helmut Hummel)

    2007-10-19  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed bug #6546: Remove htmlArea RTE acronym from Insert-Record object

    2007-10-18  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #6526: Update prototype and scriptacolous

    2007-10-17  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Move styleWithCSS setting to the initialization phase of the htmlArea editor
        * Eliminate list of plugins in rtehtmlarea EM configuration

    2007-10-13  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #6540: add icons and grouping to the content element selector

    2007-10-17  Michael Stucki  <michael@typo3.org>

        * Fixed bug #6121: Reply-To field in formmails can contain invalid characters if formMailCharset different from site charset (patch by Wolfgang Zenker)
        * Fixed bug #6533: Wrong naming of version number levels in Extension Manager

    2007-10-17  Sebastian Kurfuerst  <sebastian@typo3.org>

        * Fixed bug #6202: Company field is missing for table fe_users in "View Item" (Thanks to Christian Kuhn)

    2007-10-16  Michael Stucki  <michael@typo3.org>

        * Fixed bug #3552: Fatal error during backend edit
        * Fixed bug #6193: Object copied in t3lib_div::makeInstance()fckLR
    2007-10-16  Thorsten Kahler  <thorsten.kahler@dkd.de>

        * (minor) Fixed bug #6138: Prevent recursive inclusion of external TypoScript files (patch by Martin Ficzel) - Fixed problems in patch from 2007-10-15

    2007-10-16  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed bug #4183: Incorrect display in htmlArea RTE of utf-8 labels for colors, classes and fonts defined in PageTSConfig
        * Re-inserting accidently deleted comments in class.tx_rtehtmlarea_base.php.
        * Fixed bug #4525: In htmlArea RTE, disabling personal dictionaries in UserTSConfig not honored

    2007-10-15  Stanislas Rolland  <stanislas.rolland@fructifor.ca>

        * Fixed bug #5855: Missing unlink icon in htmlArea RTE
        * Fixed bug #5839: In htmlArea RTE, paragraph & text dropdown boxes inactive when using @media clause in stylesheet
        * Fixed bug #6152: AllowClipboard helper offered by htmlArea RTE doesn't work with 2.0.0.x Firefox
        * Fixed bug #6340: rtehtmlarea not working with "Editforms on page" option
        * Fixed bug #6152: Nullify default value AllowClipboard helper and use TYPO3-specific Firefox extension
        * Update version number of rtehtmlarea to 1.6.2dev

    2007-10-15  Michael Stucki  <michael@typo3.org>

        * (feature) Add new external library "RemoveXSS" for easily filtering potential Cross Site Scripting (XSS) attacks. Can be used by any script. Usage: $filtered_string = t3lib_div::removeXSS($input_string); Thanks to Travis Puderbaugh <kallahar@quickwired.com> for providing this nice piece of code!
        * (minor) Fixed bug #6138: Prevent recursive inclusion of external TypoScript files (patch by Martin Ficzel)
        * (minor) Don't output objects in t3lib_div::debug() - send a plain text info instead

    2007-10-13  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #6517: Add icons and grouping to the page type selector

    2007-10-09  Benjamin Mack  <mack@xnos.org>

        * (minor) indexed_search - Added info where additional doc. can be found

    2007-10-09  Benjamin Mack  <mack@xnos.org>

        * (tweak) No selection for TCEForms groups with max. one option needed

    2007-10-09  Dmitry Dulepov  <dmitry@typo3.org>

        * Added flag for Galician language
        * Added more @var

    2007-10-08  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #6420: access key generation wrong with HTML tags in menu titles (TMENU)
        * Pass on access key of menu items to IProcFunc

    2007-10-08  Oliver Hader  <oh@inpublica.de>

        * (minor) Fixed bug #6032: Freeing SQL result sets (post patch)

    2007-10-07  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #5911: GIFBUILDER setting quality not honoured

    2007-10-06  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #6462: Wrong default locale charset on Windows
        * Fixed bug #6032: Freeing SQL result sets
        * Fixed bug #6252: rteHTMLarea acronyms are not DBAL compatible
        * Fixed bug #5189: images with uppercase file extension aren't displayed in drag-n-drop listing

    2007-10-01  Bernhard Kraft  <kraftb@kraftb.at>

        * Bugfix for: Hide empty dynTabs in tceforms (missing array key broke RTE after hidden Tabs)

    2007-09-28  Oliver Hader  <oh@inpublica.de>

        * (feature) Added feature #6367: Integrate possibility in Element Browser to select all files of a folder (thanks to fotobuch.de AG for sponsoring)

    2007-09-27  Dmitry Dulepov  <dmitry@typo3.org>

        * Another hanging recordset fixed
        * Added "@var"s to t3lib_TCEmain to simplify debugging with IDEs

    2007-09-26  Dmitry Dulepov  <dmitry@typo3.org>

        * JavaScript minification is enabled in FE by default (config.minifyJS=1)

    2007-09-25  Oliver Hader  <oh@inpublica.de>

        * (tweak) Created new directory for Services_JSON typo3/contrib/json/ and moved file from typo3/contrib/json.php to typo3/contrib/json/json.php
        * (feature) Added feature #6359: IRRE - Add config of parent record for label_userFunc used on a child record
        * (minor) Fixed bug: Page TSconfig isn't parsed correctly anymore after cleanup in Trunk

    2007-09-24 Andreas Otto <andreas.otto@dkd.de>

        * Fixed bug #1471: Check if exif functions are available before using them.

    2007-09-24  Dmitry Dulepov  <dmitry@typo3.org>

        * Added JavaScript minification feature (new function t3lib_div::minifyJavaScript)
        * Added minification of FE javascripts (including default js and onload handlers) if config.minifyJS is enabled

    2007-09-23  Oliver Hader  <oh@inpublica.de>

        * (minor) Fixed hanging recordset in tslib_cObj

    2007-09-23  Michael Stucki  <michael@typo3.org>

        * (minor) Fixed hanging recordset in t3lib_BEfunc

    2007-09-22  Kasper Skaarhoj  <kasper2007@typo3.com>

        * Fixed t3lib_cli that negative numbers (like "-2") is not seen as a parameter
        * New option, $GLOBALS['TYPO3_CONF_VARS']['BE']['flexFormXMLincludeDiffBase'], means that flexforms will allow a new index extending all "vXX" fields to "vXX.vDEFbase" with a value holding the "vDEF" value when the "vXX" value was changed. Effectively this is a memory of the value you translated from. Used for diff'ing.
        * Introduced a new global hook, $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['recStatInfoHooks'], with which you can insert HTML before a records icon in the page tree, web>List and Web>Page modules (and possibly more places where makes sense). Used in l10nmgr for adding a small localization icon.
        * Added "limit to languages" to "Admin" accounts (although it will not limit languages but merely decide what statuses you see in the page tree)
        * List sys_log table entries in cleaner output!

    2007-09-18  Oliver Hader  <oh@inpublica.de>

        * (minor) Fixed bug #65: Thumbnails in Element Browser are only displayed if fileSuffix is lowercase

    2007-09-18  Bernhard Kraft  <kraftb@kraftb.at>

        * Hide empty dynTabs in tceforms

    2007-09-18  Thomas Hempel  <thomas@typo3-unleashed.net>

        * Feature #5690: TCEforms: add inline editing of secondary options (thanks to Martin Ficzel)

    2007-09-13  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #5701: linkHandler Hook Not Initialized Properly, patch supplied by Jeff Segars

    2007-09-13  Thomas Hempel  <thomas@typo3-unleashed.net>

        * Feature #4064: Navigation title in tree view

    2007-09-11  Ingo Renner  <ingo@typo3.org>

        * Added Romanian flag, fixes bug #6000
        * Added fields "crdate" and "cruser_id" to tt_content

    2007-09-10  Martin Kutschker  <masi@typo3.org>

        * Fix problem with new t3lib_div::trimExplode()

    2007-09-09  Martin Kutschker  <masi@typo3.org>

        * Require PHP 5.1

    2007-09-05  Dmitry Dulepov  <dmitry@typo3.org>

        * Added Galician language to TYPO3

    2007-09-06  Ingo Renner  <ingo@typo3.org>

        * Release of TYPO3 4.2.0alpha1

    2007-09-07  Ingmar Schlecht  <ingmar@typo3.org>

        * Bugfix: Highlight root page in pagetree
        * Added .php6 and .php7 as denied file extensions in config_default.php to be future proof
        * Fixing uninitialized variables in class.t3lib_tceforms.php and class.tx_cssstyledcontent_pi1.php

    2007-09-05  Thorsten Kahler  <thorsten.kahler@dkd.de>

        * Fixed bug #4160: Moving content elements in frontent editing mode causes crash
        * Disable versioning in clickMenu if BE user doesn't have access to the versioning module

    2007-09-05  Martin Kutschker  <masi@typo3.org>

        * Feature #2883: improve t3lib_div::trimExplode()

    2007-09-05  Dmitry Dulepov  <dmitry@typo3.org>

        * Added Georgian language to TYPO3

    2007-09-04  Dmitry Dulepov  <dmitry@typo3.org>

        * Added a hook to TCEforms to enable custom evaluations for input fields

    2007-09-03  Oliver Hader  <oh@inpublica.de>

        * (trivial) Moving t3lib_TCEforms_inline::getJSON() to t3lib_div::array2json()
        * (feature) Added feature #2830: imgResource doesn't support stdWrap on minW and minH
        * (minor) Fixed bug #6104: IRRE - IE7: Strange behaviour with hover event of nested Tabs/IRRE-levels with relative positioned HTML elements
        * (minor) Fixed bug #5906: IRRE - Default values defined in TCA are not used for children (thanks to Joscha Feth and Jeff Segars)

    2007-08-31  Michael Stucki  <michael@typo3.org>

        * (trivial) Cleanup of NEWS.txt
        * Add feature #4470: Add new property "search.exactCount" to indexed_search

    2007-08-30  Ernesto Baschny  <ernst@cron-it.de>

        * (feature) Feature request #6237: Added hook to Web>Page "columns" view, allowing plugins to display "additional info" instead of "CODE:"

    2007-08-30  Wolfgang Klinger  <wk@plan2.net>

        * (trivial) Extended the Workspace module access check with the User module access check

    2007-08-28  Kasper Skaarhoj  <kasper2007@typo3.com>

        * Moving in workspaces + collateral
            - Implemented moving for elements ("Element" versions) in workspaces. Updated "Inside TYPO3" and "TYPO3 Core API". GENEROUS DONATIONS TO FINANCE THIS WORK ARE WELCOME since many of you need this feature!
            - Workspace "swapping" for "New"-placeholders and "Deleted"-Markers is now supported. Previously, both types would be published, not swapped. The change also means that effectively the difference between the value of "t3ver_state" being 1 or 2 is only cosmetic and the semantic depends on whether the field is set for a record being online or offline. TYPO3 core API is updated on the issue.
            - Refactored function for moving elements (t3lib_tcemain::moveRecord())
            - t3lib_BEfunc::workspaceOL() may now set the input variable $row (which is passed by reference) to false. The consequence is that code calling workspaceOL() should check if $row is still an array after calling the function. False is used if a version overlay with the move-id pointer is found in which case we would like a backend preview.
            - Added switch in TYPO3_CONF_VARS['BE']['elementVersioningOnly'] which allows to completely turn off page and branch versioning (which are deprecated for TYPO3 4.2+)
            - Added more tests for version integrity (centering around moving)
            - Added checkboxes and an action selector in the Workspace module for batch processing of elements.
            - Added "flush" command to TCEmain API for versions so versions can be completely deleted and not only released from a workspace.
        * Improvements as announced in June on the core list
            - Dual-preview for workspaces are only used now if the checkbox "Frontend Preview" is not checked.
            - Whole workspaces can be previewed now for users with no backend login by a simple link you can email. Same functionality as the preview link for individual pages available from the Web>Versioning module. The function is found in User>Workspace (Workspace manager)
            - In the t3lib_cli class, optional parameters to CLI script options are supported (optional parameters are configured with [] brackets)
            - The "lowlevel" cleaner scripts are updated to allow fixing of double-references to RTEmagic images (by duplicating them). Also the script allows to remove all "lost" RTEmagic images found inside uploads/ folder.
            - Moving elements in FlexForms up and down is now fixed so it works even if indexes of elements in sections are not ordered numerically (bugfix)
            - Workspace titles are required to be unique now.
            - File upload in the Web>File module will always result in redirection to the Filelist view of the target folder. This is a usability enhancement for people who were puzzled that it could redirect to other locations or a blank page (namely the previously shown page).
            - The navigation page tree now has a nifty searchbox that uses JavaScript and the prototype library to search and highly/dim elements in the tree. Very handy for quickly finding your way in huge page trees. (I think there is a stylesheet problem with Firefox on PC which doesn't dim elements). TSconfig options exists to disable this behaviour.
            - The navigation page tree is organized so that all pages shown in the menu are grouped in their normal order while pages not in menu and sysFolders and ordered alphabetically below. TSconfig options exists to configure/disable this behaviour.
            - User > Workspace module now has a browser-functionality so only 50 versions are shown at a time and you can browse the list.
            - Changed label "Draft versions" to "Workspace versions" - some found it more intuitive.
            - Change in t3lib_refindex so setReferenceValue() can be run without being admin (by special parameter)
            - Fixed bug in t3lib_BEfunc::selectVersionsOfRecord(): now offline versions are not only selected by their t3ver_oid but also pid=-1 which is the correct thing to do. This actually resulted in dataloss in some known cases with the lowlevel cleaner CLI script.
            - Added fields to indexes on pages, sys_template and pages_language_uid.
            - RTEmagic images are now duplicated when records are copied/versioned in tcemain. This is a long awaited feature that solves the bug that RTE magic images shared between two records would result in both disappearing if the one was deleted. So its in fact a critical fix for workspaces.

    2007-08-23  Dmitry Dulepov  <dmitry@typo3.org>

        * Added Albanian language to TYPO3

    2007-08-23  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed: hanging recordset in t3lib_BEfunc

    2007-08-23  Andreas Otto  <andreas.otto@dkd.de>

        * (trivial) Fixed bug #4888:  Invalid argument supplied for foreach()

    2007-08-21  Andreas Otto  <andreas.otto@dkd.de>

        * Feature request #5748: Introduced a new TS option that makes indexing of metatags configurable. Adapted code to make use of the new TS option.

    2007-08-19  Oliver Hader  <oh@inpublica.de>

        * (trivial) Fixed bug #6170: CSC - File locallang.php used in static template instead of locallang.xml

    2007-08-15  Wolfgang Klinger  <wk@plan2.net>

        * (trivial) Added is_array checks in extension manager code

    2007-08-15  Ingo Renner  <ingo@typo3org>

        * Did some serious formatting cleanup in typo3/sysext/taskcenter/task/index.php
        * Added @var phpDoc comments to various variables

    2007-08-11  Michael Stucki  <michael@typo3org>

        * More admin panel fixes:
            - Hardcode some alignments
            - Adding empty "summary" attribute to some tables of the admin panel
            - Removing superfluous table around the config checkboxes of the tsdebug section
            - Removing superfluous "title" attributes for some images in tslib_content->editPanel()

    2007-08-10  Michael Stucki  <michael@typo3org>

        * Various improvements to the admin panel:
            - Lots of alignment definitions. Alignments are now hardcoded to avoid conflicts with stylesheets that contain something like "html, body { text-align: center; }"
            - Replace all font-tags (deprecated) with valid markup
            - Add a clear.gif spacer to make the "details" column wider if the text is longer than 30 characters. Appears to be useful if this column is too narrow and the text is wrapped inside. (Using a clear.gif is a workaround solution, it should probably be improved later...)
            - New highlight feature: You can define a time limit for operations which are measured by $TT. Whenever this limit is exceeded, the corresponding row will be highlighted in the admin panel. (Currently this limit needs to be hardcoded in class.t3lib_timetrack.php)
            - Lots of code cleanup and consolidation
            - Fix code display of links that break the website layout if they are too large (links are now splitted after every 100 characters)
            - For more information and screenshots, see http://lists.typo3.org/pipermail/typo3-team-core/2007-July/008648.html

    2007-08-06  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #5941: Log reason of failure on DB connect

    2007-08-06  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #6017: Better transliteration for hebrew (lower-cased latin letters)

    2007-07-16  Michael Stucki  <michael@typo3.org>

        * Fixed possible XSS in workspace/version modules (requires valid BE login / patch by Christian Kuhn)
        * Removed possible display of phpinfo() (requires bug in extension to be unveiled)

    2007-07-16  Oliver Hader  <oh@inpublica.de>

        * Fixed bug #5556: IRRE - RTE in child elements overwrites field in parent element

    2007-07-16  Martin Kutschker  <masi@typo3.org>

        * t3lib_div::getHostname() used $_SERVER instead of t3lib_div::getIndpEnv()
        * IPmaskList check is triggered in CLI mode (thanks to Tobias Rohrle)

    2007-07-14  Oliver Hader  <oh@inpublica.de>

        * Fixed bug #5704: IRRE - Children on the table pages get the pid of the parent page in pagetree
        * Fixed bug #5718: IRRE - Copying a page with related child records leads to duplicates of each children
        * Fixed bug #5907: RTE-Plugins: Use record specific RTEtsConfigParams

    2007-07-14  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #3834: possible abuse of t3lib_formmail

    2007-07-13  Oliver Hader  <oh@inpublica.de>

        * Fixed bug #5913: RTEhtmlarea not correctly displayed in IRRE child form-fields and tabs (continuance of bug #5177)
        * Fixed bug #5948: IRRE - Parent record is not shown after saving the first time to a table on a TYPO3 system

    2007-07-12  Dmitry Dulepov  <dmitry@typo3.org>

        * TCEForms: allow to create many sections at once
        * Performance enhancement in t3lib/class.t3lib_extmgm.php in function addToAllTCAtypes
        * Performance enhancement in t3lib/class.t3lib_div.php in function loadTCA

    2007-07-11  Oliver Hader  <oh@inpublica.de>

        * Fixed bug #5331: Remove the caption wrap on images if no caption is set (thanks to Georg Ringer)
        * Fixed bug #5945: Missing right parenthesis in RTEhtmlarea user element module (thanks to Markus Lange)

    2007-07-07  Oliver Hader  <oh@inpublica.de>

        * Fixed bug #5053: imgNameNotRandom on TMENU/GMENU could break rollover behaviour (thanks to Ralf Hettinger)
        * Fixed bug #5048: JSMENU produces error if using baseurls (thanks to Jens Koester)

    2007-07-07  Wolfgang Klinger <wk@plan2.net>

        * Changed back references \1 to ${1} in regular expressions in tslib_fe where necessary

    2007-07-07  Michael Stucki  <michael@typo3.org>

        * Added new static_tsconfig_help data based on TYPO3 4.1 CoreDocs. Kudos to Stephane Schitter and Francois Suter for rewriting a backend module that allows to update this data again! (This functionality was broken after switching to TER2.)

    2007-07-06  Wolfgang Klinger <wk@plan2.net>

        * Implemented feature request #1919: TCAdefaults setting in page TS

    2007-07-06  Michael Stucki  <michael@typo3.org>

        * Fix in indexed search: List of indexed pages could be broken if mutli-byte chars are cut in the middle (patch by Karsten Dambekalns)
        * Make field selection work in browse_links.php popup (patch by Christian Jul Jensen)
        * Fixed bug #5094: Record alt_label was not processed (patch by Volker Graubaum and Thomas Hempel)
        * Added feature #5588: Add "linkAccessRestrictedPages" property to typolink function (patch by Franz Holzinger)

    2007-07-02  Oliver Hader  <oh@inpublica.de>

        * Fixed bug #4623: Content encoding with x-gzip not possible in IE7
        * Fixed bug #5789: JS error in new content element wizard with a single item

    2007-06-25  Dmitry Dulepov  <dmitry@typo3.org>

        * Added $GLOBALS['TYPO3_DB']->sql_free_result() to TCEmain::rawCopyPageContent() to avoid resource waste

    2007-06-13  Andreas Otto  <andreas.otto@dkd.de>

        * Added status headers: In class.tslib_fe.php status header were set when an error occurs after which TYPO3 throws an exit() statement. In addition to that t3lib_div::syslog() is called to write an entry to the syslog.

    2007-06-13  Oliver Hader  <oh@inpublica.de>

        * Fixed bug #5778: Missleading comment in TCEmain::copyRecord_procBasedOnFieldType()

    2007-06-08  Oliver Hader  <oh@inpublica.de>

        * Fixed bug #5755: XCLASS inclusion part for class.t3lib_tceforms_inline.php is missing

    2007-06-05  Oliver Hader  <oh@inpublica.de>

        * Fixed bug #4226: New content elements wizard removes CE from array if tt_content_defValues property is zero

    2007-05-25  Oliver Hader  <oh@inpublica.de>

        * Fixed bug #5655: TYPO3 back-end was blocked on new installations because of a bug in RFCs #1642/#4886

    2007-05-23  Oliver Hader  <oh@inpublica.de>

        * Fixed bug #5564: IRRE - foreign_selector/foreign_unique on click issue

    2007-05-21  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #5550: 'lower' TCA specification may fail with non-ascii characters
        * Added $GLOBALS['TYPO3_DB']->sql_free_result() to TCEmain::recordInfo() to avoid resource waste

    2007-05-18  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #5645: Missing Slovenian flag
        * Fixed bug #5628: Missing Slovak flag
        * Fixed bug #5578: config setting SYS[requestURIvar] doesn't work
        * Fixed bug #4509/3925: jsfunc.validateform.js does not verify checkbox fields (thanks to Jascha Schubert and Eicke Godehardt)

    2007-05-18  Andreas Otto  <andreas.otto@dkd.de>

        * Feature request: If TYPO3 is configured to send a notification email about install tool logins this email discloses the used password if the login fails. Since this behaviour might not be wanted only the last 5 characters of the md5 hash of the used password are disclosed.

    2007-05-12  Oliver Hader  <oh@inpublica.de>

        * Fixed bug #5074: IRRE - Hook processDatamap_afterDatabaseOperations executed early

    2007-05-11  Ingo Renner  <typo3@ingo-renner.com>

        * Fixed bug #5047: MP3 icon is missing

    2007-05-10  Thorsten Kahler  <thorsten.kahler@dkd.de>

        * Fixed bug #209: require field URL in page-type "External URL"

    2007-05-09  Ingo Renner  <typo3@ingo-renner.com>

        * Fixed bugs #1642 and #4886: when installing an extension with new BE modules, the modules do not appear

    2007-05-09  Andreas Otto  <andreas.otto@dkd.de>

        * Fixed bug #2052: Color picker does not work properly in flex forms. Thanks to David Bruehlmeier for providing a patch and a testcase.

    2007-05-04  Ingo Renner  <typo3@ingo-renner.com>

        * Added swedish and latvian flags to media/flags folder

    2007-05-04  Dmitry Dulepov  <dmitry@typo3.org>

        * Updated compatibility version for t3skin

    2007-05-03  Ingo Renner  <typo3@ingo-renner.com>

        * Fixed bug #5310: Missing Swedish flag

    2007-05-02  Ingo Renner  <typo3@ingo-renner.com>

        * Fixed bug #584: Changing language in user setup do not reload left frame (menu).

    2007-05-02  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed: IRRE does not work with workspaces (fix only for CSV & foreign field cases)
        * Fixed: isses with previous fix discovered my Michael Stucki

    2007-05-01  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #2515: jsfunc.validateform.js does not verify password fields (thanks to Joerg Wagner)
        * Fixed bug #5158: log failed mailings of t3lib_div::plainMailEncoded()

    2007-04-30  Michael Stucki  <michael@typo3.org>

        * Improve the check for session support in Install Tool (see #1474). Thanks to Martin Kutschker!

    2007-04-30  Oliver Hader  <oh@inpublica.de>

        * Fixed feature request #5424: Menu cache expire time should be configurable

    2007-04-28  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #4957: CSV export stop exporting a field when there is a linebreak. Thanks for Oliver Klee for the idea and solution.
        * !!! t3lib_div::cvsValues() now exports like RFC 4180 (embedded line-breaks allowed)

    2007-04-28  Andreas Otto  <andreas.otto@dkd.de>

        * Fixed bug #3649: Call to a member function formWidth() on object $GLOBALS['TBE_TEMPLATE'] instead on $GLOBALS['SOBE']. Thanks to Chi Hoang for supplying a patch.

    2007-04-28  Ingo Renner  <typo3@ingo-renner.com>

        * Fixed bug #1290: TCEFORM.table.field.linkTitleToSelf-Option could be confusing
        * !!! Removed option ->TCEFORM_confObj:linkTitleToSelf.returnUrl = 1 as it seemed unlogical not to use it
        * Fixed bug #3993: Missing error message for big uploaded files - A message is there but it wasn't useful, changed it to something more understandable
        * Added a link to typo3.org/community and a list of the authors from installed extensions to the the about page (Help->About)
        * Fixed bug #2516: Constants and Setup are switched in select field in TS object browser

    2007-04-28  Michael Stucki  <michael@typo3.org>

        * Fixed bug in class.em_terconnection.php: Need to base64_encode upload data for some NuSOAP implementations (patch by Karsten Dambekalns)
        * Fixed bug #1474: Check if session_support is enabled in PHP or output a warning message in the Install Tool (patch by Ingo Schmitt)

    2007-04-28  Oliver Hader  <oh@inpublica.de>

        * Fixed bug #5519: EM - Some input fields don't have real labels yet (patch by Oliver Klee)

    2007-04-27  Martin Kutschker  <masi@typo3.org>

        * Change default date formatting of CE header to be localized (needs compat version of 4.2)
        * Add "address" to the list of allowed tags of parseFuncs (needs compat version of 4.2)
        * Fixed bug #5522: 1-2-3 wizard does not accept host name with socket option

    2007-04-27  Michael Stucki  <michael@typo3.org>

        * Move type conversion of $TYPO3_CONF_VARS['FE']['pageNotFound_handling']='true' (string) into t3lib/config_default.php
        * Add new function t3lib_div::rmdir() to remove directories recursively
        * Modify filelist module to make use of the t3lib_div::rmdir()
        * Modify internal_clearPageCache() in t3lib_tcemain and make use of t3lib_div::rmdir() as well
        * Various enhancements to the TS object browser and TS analyzer:
            - Add spaces left and right of the "=" mark in the object browser overview
            - Set new default values: Check several fields, e.g. "block mode", "syntax highlighting", etc. by default
            - Define default values properly in each class instead of setting them globally
            - Use the TSparser and display comments nicely in the object browser
            - Fix bug: New keys were not added by the object browser when pressing the return key in the update form instead of clicking the submit button. The fix is a workaround, the real problem is that the form contains two submit buttons with different actions...

    2007-04-27  Ingo Renner  <typo3@ingo-renner.com>

        * Removed partial t3lib_div in misc/phpcheck/incfile.php and included the real t3lib_div instead, PDT for Eclipse had problems determining the actual t3lib_div because of this

    2007-04-18  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #1893: Broken Rootline when a Editor view a Page that is not online
        * Changed loop variable name in TCEMain because it could corrupt information passed to post-processing hook
        * Fixed workspace publishing error that may happen when "Element" versioning type is used

    2007-04-19  Thomas Hempel  <thomas@work.de>

        * Implemented feature request #3894: Open module on startup

    2007-04-18  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #3729: Roll-over (RO) on a GMENU in IE didn't work with xhtml_strict

    2007-04-18  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed: t3lib_BEfunc::getRecord() did not free recordset. This can cause memory leaks if persistent mysql connections are used

    2007-04-14  Dmitry Dulepov  <dmitry@typo3.org>

        * Workspaces: added class.wslib_gui.php to allow using WS GUI from extensions
        * Fixed HTML syntax errors with some old html files

    2007-04-05  Martin Kutschker  <masi@typo3.org>

        * Renamed Typoscript condition julianday to dayofyear (see change from 2007-04-03)fckLR * Made debug logging of user-supplied SQL queries possible in t3lib_db.

    2007-04-04  Andreas Otto  <andreas.otto@dkd.de>

        * Fix bug #5411: A directory handle was not correctly used.

    2007-04-03  Andreas Otto  <andreas.otto@dkd.de>

        * Implemented feature request #4914: Adding to new conditions (year and julianday) to class.t3lib_matchcondition.php.

    2007-04-03  Dmitry Dulepov  <dmitry@typo3.org>

        * Workspaces: added configurable synchronous stage change and publishing

    2007-04-02  Michael Stucki  <michael@typo3.org>

        * Fixed bug #5088: Cache is not saved properly because of charset conflict in the database. Changing the field type of cache_hash.content from mediumtext to mediumblob. To make this work, you need to compare your database in the Install Tool.

    2007-04-02  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #4447: "Clear FE cache" doesn't clear "typo3temp/cache_pages" directory

    2007-03-30  Oliver Hader  <oh@inpublica.de>

        * Fixed bug #5248: IRRE - Element browser cannot be used on new child records of a new parent record

    2007-03-30  Franz Holzinger  <kontakt@fholzinger.com>

        * Fixed bug #4725: EM: Include older versions when fetching data using searchExtensionsXML()

    2007-03-28  Oliver Hader  <oh@inpublica.de>

        * Fixed bug #5288: Missing parameter in recursion of t3lib_div::array_merge_recursive_overrule (thanks to Simon Tuck)
        * Fixed bug #5177: RTEhtmlarea not correctly displayed in IRRE child form-fields and tabs

    2007-03-28  Ingmar Schlecht  <ingmar@typo3.org>

        * Adding page tree backwards compatibility for JavaScript function hilight_row() to tree.js (by Benjamin Mack)

    2007-03-28  Patrick Broens  <patrick@patrickbroens.nl>

        * Fixed bug #5266: WamCom browser check in htmlarea.js conflicted with Firefox 2.0.0.3

    2007-03-28  Ernesto Baschny  <ernst@cron-it.de>

        * Added +stdWrap for the .src parameter of "FRAME"

    2007-03-27  Dmitry Dulepov  <dmitry@typo3.org>

        * Added hook to class.t3lib_userauthgroup.php, function recordEditAccessInternals

    2007-03-23  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #5269: wsol_preview.php does not scroll to content element
        * Fixed bug #4953: Preview in Workspaces Module for content elements

    2007-03-22  Karsten Dambekalns  <karsten@typo3.org>

        * typo3/sysext/adodb: Update to upstream version 4.94.

    2007-03-12  Michael Stucki  <michael@typo3.org>

        * Change copyright information in typo3/index.php (no real change, just replace the hardcoded years with the "TYPO3_copyright_year" constant)

    2007-03-12  Martin Kutschker  <masi@typo3.org>

        * Replace all TINYTEXT columns with VARCHAR(255)
        * Change index "parent" of fe_user to (pid,username) and drop the index "pid"
        * Quote table names in admin_get_XXX() functions of t3lib_db
