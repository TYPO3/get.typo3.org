RELEASE NOTES FOR TYPO3 4.3
===========================

This document contains information about TYPO3 version 4.3 which was
released on November 30, 2009.

News
----

The main focus of the new 4.3 version is improving usability, but there
are also many enhancements for system administrators and developers. The
latest TYPO3 version 4.3 comes packed with numerous brand new features
and improvements. Highlights include the completely new Frontend editing
module and the integration of Extbase and Fluid. Additionally, TYPO3's
already excellent security features have been improved even further.

[Read more](https://typo3.org/news/article/typo3-version-43-released/)

New features
------------

[See here](https://typo3.org/download/release-notes/typo3-43/)

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

The files have the following md5 checksums:

    551e15ed6aae62b7f9c058318186c8c9  dummy-4.3.0.tar.gz
    e58b6e64abca5eac0e7b6e4c015bb97e  dummy-4.3.0.zip
    2900c16b1c68153a9d62c85a401435c5  typo3_src-4.3.0.tar.gz
    7c539c515d7bc8c99d361d66c8e8a269  typo3_src-4.3.0.zip
    92806f56394ccba2990bd3f4e9703e33  typo3_src+dummy-4.3.0.zip

Upgrading
---------

Please have a look at the [upgrade wizard](Upgrade "wikilink"), if you
have any questions.

Changelog
---------


    2009-11-30  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.3.0

    2009-11-30  Oliver Hader  <oliver@typo3.org>

        * Branching TYPO3 4.3.0 to TYPO3_4-3

    2009-11-30  Oliver Hader  <oliver@typo3.org>

        * Cleanup: Updated ext_emconf.php files in system extensions

    2009-11-29  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Fixed bug #9683: Store OpenID information in database instead of using the filesystem

    2009-11-29  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12836: Recycler: Still one error with labels in JavaScript
        * Fixed bug #12839: TS property pageRenderTemplateFile needs to be renamed
        * Fixed bug #12827: Core labels need to be utf-8 before json_encode
        * Fixed bug #12828: change language .js for ExtJS according to BE language (thanks to Stefano Cecere)

    2009-11-29  Francois Suter  <francois@typo3.org>

        * Fixed bug #12727: Wrong htmlspecialchars() usage in Extension Manager (thanks to Andreas Kundoch)
        * Fixed bug #12498: t3lib_div::flushOutputBuffers() can't work (thanks to Steffen Gebert)
        * Fixed bug #12831: Scheduler: Wrong CSH text for "End of task" (thanks to Steffen Gebert)

    2009-11-29  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #12786: Wrong mouseover cursor at icon of docheader (thanks to Georg Ringer)
        * Fixed bug #12792: Unit test checkGetExtensionKeyByPrefix of the t3lib_extmgm_testcase fails
        * Fixed bug #11326: Memcached backend does not work well if cache of a page shall expire after 30 days (thanks to Vladimir Podkovanov)
        * Fixed bug #11345: Uncaught exception InvalidArgumentException on creating graphical menus
        * Fixed bug #12489: IRRE - Problem with clearing of floated elements in IE
        * Fixed bug #12788: Recycler does not show up
        * Fixed bug #12825: Wrong encoding of labels in t3editor
        * Fixed bug #12766: CSS in "User Settings" broken (thanks to Georg Ringer)
        * Fixed bug #9766: Use correct memory limit definition in Install Tool (thanks to Steffen Mueller)
        * Fixed bug #12830: Wrong encoding of JSON data in t3lib_PageRenderer
        * Fixed bug #11395: TCAdefaults in Page TSConfig without effect on creating new element after existing one (thanks to Tolleiv Nietsch)
        * Fixed bug #12800: Add functionality to work with caching framework and DBAL (thanks to Xavier Perseguers)
        * Fixed bug #12781: The type in t3lib_TCEforms does not work if the type field shall be excluded when translating (thanks to Fabrizio Branca)
        * Fixed bug #12835: Caching error when clearing indexed search elements in info module (thanks to Steffen Kamper)
        * Raised DBAL version from 1.0.1 to 1.0.2
        * Raised Extbase and Fluid versions from 1.0.1 to 1.0.2

    2009-11-26  Francois Suter  <francois@typo3.org>

        * Fixed bug #12077: Scheduler: Missing documentation for setting up cron jobs on Windows (thanks to Patrick Gaumond)

    2009-11-26  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.3.0RC2

    2009-11-25  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #12133: autoloaders registered by extensions slow down the core autoloader
        * Fixed bug #12109: Call to getCache() on a non-object in some extensions

    2009-11-25  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #12675: Validation issues in sysext reports: Fix several errors

    2009-11-25  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12759: button styling missed some buttons: type reset / button (thanks to Georg Ringer)
        * Fixed bug #9058: Hook objects for stdWrap in class.tslib_content.php get executed multiple times. (thanks to Steffen Müller)
        * Fixed bug #12467: TYPO3 Inline User Manual is broken
        * Fixed bug #12297: t3lib_cs::cropMbstring has problems with negative length (Thanks to Steffen Gebert)
        * Follow-up to bugfix #12728: Upgrade ExtJS skin to match t3skin (Thanks to Andreas Kundoch)
        * Follow-up to bugfix #12699: Upgrade backend login to match t3skin
        * Fixed bug #12613: Wrong character encoding in cache tables breaks frontend rendering
        * Follow-up to bugfix #12728: Upgrade ExtJS skin to match t3skin (wrong refresh gif in grid)
        * Follow-up to bugfix #12735: BE-Login: show login process (Safari fixes)

    2009-11-25  Francois Suter  <francois@typo3.org>

        * Fixed bug #12547: Removed wrong default binary search paths for Windows
        * Feature #12491: Reports: Allow multiple providers for each status collection
        * Cleanup #12492: Reports: Made some CGL improvements and added missing SVN markers
        * Fixed bug #12748: Recycler: BE module's body has a margin (thanks to Steffen Gebert)

    2009-11-25  Oliver Hader  <oliver@typo3.org>

        * Follow-up to bugfix #12436: Move Suhosin part to php.ini section in the install tool
        * Fixed bug #9981: EM does not test for usage of mod.php-API and spuriously displays an error (thanks to Andreas Kundoch)
        * Follow-up to bugfix #12581: Use FILTER_FLAG_SCHEME_REQUIRED constant in t3lib_div::isValidUrl()
        * Follow-up to bugfix #12420: Removed deprecation logging from methods that are still used in the TYPO3 Core
        * Fixed bug #12755: Update to ADOdb 5.10
        * Fixed bug #12629: XSS in sysext scheduler possible (thanks to Georg Ringer)
        * Follow-up to bugfix #12728: Fixed size of icon indicating required fields (thanks to Steffen Ritter)
        * Cleanup: Updated ext_emconf.php files in system extensions
        * Follow-up to bugfix #12755: Added missing database driver classes
        * Cleanup: Updated t3lib/core_autoload.php

    2009-11-24  Stanislas Rolland  <typo3@sjbr.ca>

        * Updated htmlArea RTE manual.

    2009-11-24  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #12706: OpenID redirects to wrong page and does not create a BE session (thanks to Steffen Müller)

    2009-11-24  Oliver Hader  <oliver@typo3.org>

        * Follow-up to bugfix #12699: Fixed remaining styling issues in the backend login
        * Follow-up to bugfix #12669: Headers in backend login looked strange in IE6
        * Fixed bug #12669: Fatal error: Call to a member function getSystemLanguages()
        * Fixed bug #11577: t3lib_formmail floods syslog with "Possible abuse of t3lib_formmail..." messages (thanks to Fabrizio Branca)
        * Fixed bug #12728: Upgrade ExtJS skin to match t3skin (thanks to T3UXW09 participants)
        * Fixed bug #12581: Pagetree frame shows HTTP 404 error

    2009-11-24  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to bugfix #12735: BE-Login: show login process
        * Fixed bug #12735: BE-Login: show login process
        * Fixed bug #12719: Bugfix - tcemain copy/move/deleteL10nOverlayRecords is not fully versioning-aware (thanks to Tolleiv Nietsch)
        * Fixed bug #12710: "Paste after" function destroys l10n-overlay relations (thanks to Tolleiv Nietsch)
        * Fixed bug #12700: pageInfo shows wrong info on root page

    2009-11-24  Francois Suter  <francois@typo3.org>

        * Fixed bug #12695: Added some space between sections of the "Installed services" report

    2009-11-24  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #12623: Validation issues in sysext scheduler: Fix several errors

    2009-11-20  Stanislas Rolland  <typo3@sjbr.ca>

        * Updated htmlArea RTE version to 1.8.6

    2009-11-23  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #12618: Validation issue in sysext lowlevel: Fix some warnings

    2009-11-23  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #12699: Upgrade backend login to match t3skin (thanks to T3UXW09 participants)
        * Fixed bug #12500: Object does not support method calls - PHP 5.3 (thanks to Dan Osipov)

    2009-11-23  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to bugfix #12271: List module and Clickmenu should not enable to create inconsistant record-relations (thanks to Tolleiv Nietsch)
        * Fixed bug #12544: Clean markup in Extension Manager
        * Fixed bug #12508: Log usage of XLLfile to deprecation log (thanks to Steffen Gebert)
        * Follow-up to bugfix #11468: $altUrl parameter has no effect in t3lib_BEfunc::viewOnClick()

    2009-11-22  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12666: Copying Record with TCEMain process cmdmap throws sql errors (Thanks to Tolleiv Nietsch)
        * Follow-up to bugfix #2314 - moving records doesn't move translations (Thanks to Tolleiv Nietsch)
        * Fixed bug #12680: final adjustments to MediaCE
        * Fixed bug #11468: $altUrl parameter has no effect in t3lib_BEfunc::viewOnClick() (Thanks to Fabrizio Branca)
        * Fixed bug #12548: opendocs produce invalid HTML

    2009-11-20  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12684: htmlArea RTE: Repeated character / backspacing is slow in Firefox

    2009-11-20  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #12676: Validation issue in sysext opendocs: Missing htmlspecialchars of href parameter

    2009-11-19  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12677: htmlArea RTE: Incorrect cursor position after backspace/delete in Firefox

    2009-11-18  Francois Suter  <francois@typo3.org>

        * Follow-up to bugfix #12426: Reports: One localized label wrongfully contained a copy of another label

    2009-11-18  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.3.0RC1

    2009-11-18  Benjamin Mack  <benni@typo3.org>

        * !!! Fixed bug #12648: Introduce t3lib_utility_Http for all related constants and make the core aware of these changes (patch by Ingo Renner)

    2009-11-17  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #12455: OpenID authentication does not work with PHP 5.3
        * Fixed bug #12054: PHP5.3-Warning about strcmp() parameters in view_help.php (thanks to Stefan Geith)
        * Fixed bug #12195: Renaming write protected file issues a php warning
        * Fixed bug #12099: Replace "Warning: filemtime(): stat failed" with a nice error message (thanks to Steffen Gebert)
        * Fixed bug #11937: Do not show E_DEPRECATED messages on productive systems
        * Fixed bug #12516: Give admins the possibility to configure which errors should be logged to which log

    2009-11-17  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #12612: Backend Login-Popup not working
        * Follow-up to bugfix #12612: Removed reference operators for objects and code cleanup
        * Fixed bug #12517: Password change in User tools -> User setup impossible if rsaauth and saltedpassword are installed
        * Fixed bug #12608: User settings module reports changed password and settings if there was no change at all
        * Fixed bug #4466: Index on tx_realurl_uniqalias breaks with DBAL (thanks to Xavier Perseguers)
        * Raised DBAL version from 0.9.25 to 1.0.0
        * Raised Extbase and Fluid versions from 0.9.17 to 1.0.0
        * !!! Moved Advanced Frontend Editing to TER
        * Integrated saltedpasswords completely instead of using svn:externals
        * Follow-up to bugfix #12648: PHP class file of t3lib_utility_Http is missing

    2009-11-17  Benjamin Mack  <benni@typo3.org>

        * Commited test case for #12244: Improve locallangXMLOverride feature (Thanks to Steffen Gebert)
          This changes the LLoverride feature to $GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride'] as an array

    2009-11-17  Steffen Kamper  <info@sk-typo3.de>

        * Added tests #12382: Feature/Code cleanup: Add some more unit tests (Thanks to Oliver Klee)
        * Fixed bug #12611: Add preRenderHook in pageRenderer
        * Fixed bug #12610: Inconsistent naming of "includeFooterJS"
        * Fixed bug #10119: Broken fe_adminLib.inc
        * Fixed bug #12616: Set recycler height dynamic
        * Fixed bug #12624: Unreplaced marker in login screen of classic skin

    2009-11-17  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12619: htmlArea RTE: JS error raised by spell checker
        * Fixed bug #12622: htmlArea RTE: Incorrect behaviour of last item of list in gecko browsers

    2009-11-16  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #12621: Validation issue in sysext scheduler: endPage is called twice
        * Fixed bug #12620: Validation issue in web functions wizard new page: End tag for input omitted
        * Fixed bug #12617: Validation issue in sysext lowlevel: End tag for input omitted

    2009-11-16  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12605: Flash Message for "extension provides additional configuration" (Thanks to Georg Ringer)
        * Fixed bug #12472: Recycler is missing title + description in the about module (Thanks to Georg Ringer)
        * Fixed bug #12546: Paths look weird on Windows

    2009-11-16  Francois Suter  <francois@typo3.org>

        * Fixed bug #12565: Scheduler: Added option to turn off logging, which could be too verbose
        * Cleanup #12426: Reports: Localized all hard-coded strings in status reports
        * Fixed bug #12396: Warning produced by t3lib_div::flushOutputBuffers() (Thanks to Michael Klapper)

    2009-11-16  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #12594: "LastLogin"-Field creates PHP error on create (date)

    2009-11-15  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #6954: Bug: History/undo information disappears after publication (Thanks to Tolleiv Nietsch)

    2009-11-15  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to #11764: instanciate t3lib_transl8tools in t3lib_recordlist
        * Fixed bug #12588: Bugfix: db_list_extra->makeLocalizationPanel doesn't consider the backPath (Thanks to Tolleiv Nietsch)

    2009-11-15  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #12438: Bugfix - tt_content bodytext wizard icons aren't aligned properly (Thanks to Tolleiv Nietsch)

    2009-11-15  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12597: htmlArea RTE: cursor position is not restored by undo/redo operations in Opera
        * Fixed bug #12421: htmlArea RTE: Paste is erratic in Opera 10 when server-based cleaning is enabled
        * Fixed bug #11362: htmlArea RTE: Cursor may not be put in list elements newly created in front of links
        * Fixed issue #12601: htmlArea RTE: Update list of supported browsers
        * Updated htmlArea RTE version to 1.8.5

    2009-11-14  Francois Suter  <francois@typo3.org>

        * Fixed bug #12464: Reports: Sorting of status collections wrongly relied on localized strings

    2009-11-14  Tobias Liebig <mail_typo3@etobi.de>

        * Fixed bug #12522: t3editor/codecompletion: tsref properties get listed twice when they are defined
        * Fixed bug #12523: t3editor/codecompletion: Gifbuilder TEXT and Gifbuilder IMAGE inside of GMENU_itemState
        * Fixed bug #12527: t3editor/codecompletion: parser error on brackets on the right side of an operator
        * Fixed bug #12528: t3editor/codecompletion: IMG_RESOURCE missing in tsref

    2009-11-13  Francois Suter  <francois@typo3.org>

        * Fixed bug #12550: Scheduler: Added some space between the sections of the "scheduled tasks"-screen

    2009-11-12  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #4670: htmlArea RTE: Problem when cutting pasting links within table cells or list items

    2009-11-11  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12566: htmlArea RTE: Selecting element from status bar does not work in Safari
        * Fixed bug #12568: htmlArea RTE: Text pasted by Safari is wrapped in span or font tags

    2009-11-11  Francois Suter  <francois@typo3.org>

        * Cleanup #12552: Scheduler: Corrected inconsistent use of full stops in language labels

    2009-11-11  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12557: Wrong file references and colors in t3skin-extjs theme, missing icon in recycler

    2009-11-10  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12115: htmlArea RTE "Create link" button doesn't become clickable when using keyboard to select text in Safari/Chrome

    2009-11-10  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to #12487: Inform if page use content_from_pid

    2009-11-09  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #12345: TCA feature _VALIGN for wizards is broken (Thanks to Tolleiv Nietsch)

    2009-11-09  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow-up to #11847: htmlArea RTE displays empty editing area in Opera 10
        * Fixed bug #12534: htmlArea RTE: list creation looses text in Safari

    2009-11-09  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10128: JavaScript error upon login

    2009-11-08  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.3.0beta3

    2009-11-08  Francois Suter  <francois@typo3.org>

        * Fixed bug #12019: Added missing style definition to Install Tool CSS file
        * Fixed bug #12423: Reports: Services overview does not provide extension key
        * Fixed bug #12482: Extension manager does not search in extension titles when in "import extension" section (thanks to Steffen Mueller)

    2009-11-08  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12487: Inform if page use content_from_pid
        * Fixed bug #12247: absRefPrefix is prefixed with external js files

    2009-11-08  Oliver Hader  <oliver@typo3.org>

        * Raised feeditadvanced from 0.1.1 to 0.8.0
        * Fixed bug #12324: Page tree will not be shown in the TYPO3 backend
        * Follow-up to bugfix #12324: Renamed sanitizeBackEndUrl() to sanitizeLocalUrl() in t3lib_div

    2009-11-08  Sebastian Kurfuerst  <sebastian@typo3.org>

        * Raised Extbase and Fluid versions from 0.9.16 to 0.9.17

    2009-11-07  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #12436: Integrate checks concerning Suhosin/Hardened PHP in Install Tool (thanks to Oliver Hader)
        * Fixed bug #10792: Extensions cannot be looked up, when cache_extensions table is empty
        * Follow-up to bug #12499: re-added the removed function call and moved the deprecationLog call

    2009-11-07  Benjamin Mack  <benni@typo3.org>

        * Fixed #12244: Improve locallangXMLOverride feature (Thanks to Steffen Gebert), this changes the LLoverride feature to $GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride'] as an array

    2009-11-07  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to #12483: Call to deprecated method t3lib_beUserAuth::trackBeUser()
        * Fixed bug #12013: tslib_pagegen fails to read mime type of the shortcut icon (thanks to Xavier Perseguers)
        * Fixed bug #12503: Help extensions shouldn't be shy

    2009-11-07  Oliver Hader  <oliver@typo3.org>

        * Raised DBAL version from 0.9.24 to 0.9.25
        * Raised Extbase version from 0.9.12 to 0.9.13
        * Raised Extbase version from 0.9.13 to 0.9.16

    2009-11-07  Bernhard Kraft  <bernhard@typo3.org>

        * Fixed bug #12428: slow t3lib_TSparser::parseSub

    2009-11-06  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #12499: Call to deprecated method t3lib_userAuth::redirect()

    2009-11-06  Tobias Liebig <mail_typo3@etobi.de>

        * Fixed bug #9046: Nested domain linking

    2009-11-06  Francois Suter  <francois@typo3.org>

        * Follow-up to #12215: Scheduler: Added GMT time difference to server time display for improved clarity

    2009-11-06  Sebastian Kurfuerst  <sebastian@typo3.org>

        * Raising Extbase and Fluid versions to 0.9.12

    2009-11-06  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12481: AllowClipboard Helper Firefox extension does not work with FF 3.5
        * Updated htmlArea RTE manual
        * Updated htmlArea RTE version to 1.8.4

    2009-11-06  Steffen Kamper  <info@sk-typo3.de>

        * Cleanup #11311: PHP casting causes workspace message to appear in Web/View (thanks to Niels Froehling)
        * Fixed bug #12347: Integrate check to the install tool and reports module concerning eAccelerator
        * Fixed bug #12295: Cleaning config_default, exclude values from being listed in install tool, all configuration
        * Fixed bug #11633: Enable Frontend Preview does not work until switched (thanks to Fabrizio Branca)
        * Fixed bug #12469: Pagerenderer miss headerData and footerData in hooks
        * Fixed bug #12437: Recycler produces some scroll bars + visual cleanup + js fixes
        * Fixed bug #12368: Context menu of page tree does not work anymore
        * Fixed bug #12468: User setup: items without csh are not aligned

    2009-11-06  Oliver Hader  <oliver@typo3.org>

        * Raised DBAL version from 0.9.23 to 0.9.24
        * Raised saltedpasswords version from 0.9.1 to 0.9.2
        * Fixed bug #12488: Remove redundant code from t3lib_matchCondition in favour of using t3lib_matchCondition_frontend
        * Fixed bug #11932: OpenID login does uses cURL even if was not defined in TYPO3_CONF_VARS
        * Follow-up to bugfix #9046: Modified type of new field sys_domain.forced

    2009-11-05  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #12420: Log deprecated method calls (to be removed in TYPO3 4.5) (thanks to Xavier Perseguers)

    2009-11-05  Tobias Liebig <mail_typo3@etobi.de>

        * Cleanup/Bugfix #11838: Hardcoded labels in t3editor

    2009-11-05  Francois Suter  <francois@typo3.org>

        * Feature #12215: Scheduler: Added display and information about usage of timezone

    2009-11-05  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #12466: PHP-5.3 Warning: strlen() expects parameter 1 to be string, array given
        * Fixed bug #12236: Password-field in "User Settings" is prefilled, which does not make sense (thanks to Steffen Gebert)

    2009-11-05  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #12441: IRRE - Cannot add new elements on second level of nesting
        * Follow-up to bugfix #12441: Code cleanup in t3lib_TCEforms_inline
        * Fixed bug #12483: Call to deprecated method t3lib_beUserAuth::trackBeUser()

    2009-11-04  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12452: Fatal error in install tool DB-compare with multiplyDbFieldSize > 1

    2009-11-04  Francois Suter  <francois@typo3.org>

        * Follow-up to #12381: Scheduler: BLOB database fields may not be NOT NULL (thanks to Tolleiv Nietsch)

    2009-11-03  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #11876 and #12342: stripSlashesOnArray creates references where you want copies (in some PHP versions). Affects usage of _GP (e.g. in the Install Tool and some frontend extensions).

    2009-11-03  Oliver Hader  <oliver@typo3.org>

        * Cleanup #12440: Copy DBAL-only SQL parser methods from t3lib_sqlparser to ux_t3lib_sqlparser (thanks to Xavier Perseguers)

    2009-11-03  Tobias Liebig <mail_typo3@etobi.de>

        * Fixed bug #9513: t3editor bad line numbering
        * Fixed bug #12409: t3editor/codecompletion objects still showed up after deleting (thanks to Christian Kartnig)
        * Fixed bug #12410: t3editor/codecompletion some properties got not listed (thanks to Stephan Petzl)
        * Fixed bug #10959: t3editor/codecompletion CC triggers with spaces in TS path (thanks to Christian Kartnig)
        * Fixed bug #12411: t3editor/codecompletion gifbuilder IMAGE type being treated as cObj IMAGE (thanks to Stephan Petzl)
        * Fixed bug #12412: t3editor/codecompletion CONTENT->select is of type "string", should be "select" (thanks to Stephan Petzl)
        * Cleanup: #12416: cleanup t3editor files
        * Fixed bug #12413: t3editor should not be disabled in safari
        * Fixed bug #12417: t3editor/codecompletion IMAGE.titleText attribute missing (thanks to Stephan Petzl)

    2009-11-03  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #5120: SQL parse error in "Who is online" with DBAL (PostgreSQL / Oracle)

    2009-11-02  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12439: htmlArea RTE: js error raised on paste by default word cleaning
        * Fixed bug #12331: htmlArea RTE plugins may not be loaded for multiple RTEs

    2009-11-02  Oliver Hader  <oliver@typo3.org>

        * Follow-up to #10467: Fixed JavaScript notation bug for IE8

    2009-10-31  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12386: Log deprecated method call in t3lib_db (to be removed in TYPO3 4.5) (thanks to Xavier Perseguers)
        * Fixed bug #12387: Log deprecated method call in t3lib_befunc (to be removed in TYPO3 4.5) (thanks to Xavier Perseguers)
        * Fixed bug #12388: Log deprecated method call in t3lib_beuserauth (to be removed in TYPO3 4.5) (thanks to Xavier Perseguers)
        * Fixed bug #12392: Log deprecated method call in t3lib_install (to be removed in TYPO3 4.5) (thanks to Xavier Perseguers)
        * Fixed bug #12393: Log deprecated method call in t3lib_stdgraphic (to be removed in TYPO3 4.5) (thanks to Xavier Perseguers)
        * Fixed bug #12394: Log deprecated method call in t3lib_tceforms_inline (to be removed in TYPO3 4.5) (thanks to Xavier Perseguers)

    2009-10-30  Francois Suter  <francois@typo3.org>

        * Fixed bug #12406: Scheduler: Performed some minor cleanups in the BE module
        * Feature #12184: Scheduler: Added BE method to mark a stalled / died task as not running

    2009-10-30  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to #12336: Little Flaws with MediaCE

    2009-10-29  Francois Suter  <francois@typo3.org>

        * Fixed bug #12381: Scheduler: Changed TEXT fields to BLOBS for storing serialized data (thanks to Michael Klapper)

    2009-10-29  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #12371: Warning issued on first load of install tool with open_basedir set

    2009-10-28  Christian Kuhn  <lolli@schwarzbu.ch>

        * Follow-up to #12326: $label is already used, rename new variable to $optionLabel

    2009-10-28  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Fixed bug #9795: Default values have no labels in the multiple select control inside the flexform

    2009-10-27  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to #11370: Inconsistent Login Screen doesn't show system required errors
        * Fixed bug #12372: install: Login form message is shown as warning
        * Fixed bug #12355: Remove WIN-check in tsconfig_help::rebuild
        * Fixed bug #12364: Icon for content element 'Media'

    2009-10-27  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #12356: Remove exclude=1 from lastlogin field of be_user TCA

    2009-10-27  Francois Suter  <francois@typo3.org>

        * Fixed bug #12251: Scheduler: Don't show rights check on Windows

    2009-10-27  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12252: htmlArea RTE: errors are raised when extension rtehtmlarea_definitionlist is installed with TYPO3 4.3

    2009-10-27  Steffen Kamper  <info@sk-typo3.de>

        * Updated wpplayer to version 2.0beta6
        * Fixed bug #12336: Little Flaws with MediaCE
        * Follow-up to #12358: FE-user last-login field uses "date" instead of "datetime" (thanks to Christian Kuhn)
        * Fixed bug #12358: BE-user last-login field uses "date" instead of "datetime" (thanks to Steffen Gebert)
        * Fixed bug #12354: Remove t3lib_sqlengine from Core and move it to DBAL (thanks to Xavier Perseguers)
        * Cleanup: #12351: Clean-up SQL parser (thanks to Xavier Perseguers)

    2009-10-27  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #12327: IRRE - DOM object identifiers use invalid characters

    2009-10-26  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11980: TCEforms suggest defaultreceiver returns array or boolean (thanks to Steffen Gebert)

    2009-10-25  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug RFC #12326: EXT:setup CSH mode setting gets lost (thanks to Steffen Gebert)

    2009-10-24  Ernesto Baschny <ernst@cron-it.de>

        * Fixed bug #12321: Follow-up to #11586, fixes FE editing

    2009-10-22  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.3.0beta2

    2009-10-22  Ernesto Baschny <ernst@cron-it.de>

        * Fixed bug #11586: Potential SQL injection in frontend editing (thanks to Oliver Klee)
        * Fixed bug #12309: It was possible to gain access to the Install Tool by only knowing the md5 hash of the password.
        * Fixed bug #12310: Encryption key can be recalculated when using normal mailform when [FE][strictFormmail] == 0 (thanks to Oliver Klee)
        * Fixed bug #12090: Filenames should be escaped with escapeshellarg before passing them to imagemagick (thanks to Oliver Klee)
        * Fixed bug #12303: XSS vulnerability due to not proper sanitizing in function t3lib_div::quoteJSvalue (thanks to Oliver Klee)
        * Fixed bug #12304: Frame inclusion in the backend through alt_mod_frameset (thanks to Oliver Klee)
        * Fixed bug #12305: XSS vulnerability in view_help.php / tfID parameter (thanks to Oliver Klee)
        * Fixed bug #12306: XSS vulnerability in module dispatcher
        * Fixed bug #12307: XSS vulnerability in alt_palette (thanks to Oliver Klee)
        * Fixed bug #10501: XSS vulnerability in the install tool (thanks to Oliver Klee)

    2009-10-21  Sebastian Kurfuerst  <sebastian@typo3.org>

        * Raised Extbase and Fluid version numbers to 0.9.11.

    2009-10-21  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #12280: Error Message while creating empty Folders (thanks to Daniel Schmitzer)
        * Fixed bug #11643: typoLink() sometimes wrongly drops url if link contains a section (thanks to Vladimir Podkovanov)
        * Added feature #12189: Add API functions for cleaning and flushing output buffers

    2009-10-21  Oliver Hader  <oliver@typo3.org>

        * Cleanup: Updated ext_emconf.php files in system extensions
        * Follow-up to bugfix #539: Tables that cannot be localized at all produce a SQL error on deleting records
        * Cleanup: Fixed non-static function declarations in t3lib_BEfunc
        * Follow-up to bugfix #2314: Using the clipboard in the list view shows SQL errors for tables without versioning support
        * Cleanup: Updated NEWS.txt

    2009-10-21  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12299: #12112: Enable resizable textareas by default (thanks to Steffen Gebert)
        * Fixed bug #12299: EM tries to read from tables of not installed extensions
        * Fixed bug #12075: Add COMPARE Link to update Wizard
        * Fixed bug #12168: Empty line in general header comment
        * Fixed bug #12175: User Setup don't check file time of ENABLE_INSTALL_TOOL
        * Fixed bug #12237: Use flash-messages in user-settings (thanks to Georg Ringer)
        * Follow-up to bug #12272: reverted renaming of step
        * Fixed bug #12272: Steps disregarded in t3lib_lock (thanks to Dan Osipov)

    2009-10-21  Christian Kuhn  <lolli@schwarzbu.ch>

        * Cleanup #11813: Refactoring t3lib_db to match CGL (thanks to Felix Oertel)

    2009-10-20  Francois Suter  <francois@typo3.org>

        * Added feature #12187: Added more usage of flashmessages to EM (thanks to Steffen Gebert)
        * Fixed bug #12177: Scheduler: Corrected situation where a new single task with a creation date in the past would never run (thanks to Ingmar Schlecht)

    2009-10-20  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12273: List view don't show if there are more records than displayed
        * Follow-up to bug #10467: Added var "showRefreshLoginPopup" to config_default
        * Fixed bug #10467: AJAX relogin does not work
        * Added test #12286: Add unit tests for RemoveXSS

    2009-10-20  Oliver Hader  <oliver@typo3.org>

        * Cleanup #12278: Move t3lib_matchCondition::whichDevice() to t3lib_utility_Client::getDeviceType()
        * Follow-up to test #12153: Added test cases for empty comparison in globalVar condition
        * Follow-up to bugfix #9779: Modified the limit argument in t3lib_div::trimExplode() to behave as the regular explode() function does
        * Raised saltedpasswords version from 0.9.0 to 0.9.1
        * Raised DBAL version from 0.9.22 to 0.9.23
        * Raised feeditadvanced from 0.1.0 to 0.1.1
        * Added feature #5613: Enable/integrate conditions in Page TSconfig
        * Follow-up to feature #5613: Added test cases for matching conditions
        * Fixed bug #11610: t3lib_transl8tools::translationInfo() should return also CType of the element (thanks to Michael Klapper)
        * Follow-up to feature #5613: Enabled evaluation of conditions in the backend by default

    2009-10-20  Rupert Germann  <rupi@gmx.li>

        * Added Feature #12093: Improve the error and exception handling.
        * Fixed bug #12271: List module and Clickmenu should not enable to create inconsistant record-relations (thanks to Tolleiv Nietsch)
        * Fixed bug #12269: List module renders wrong data in localization view when record-overlay was moved in WS (thanks to Tolleiv Nietsch)
        * Fixed bug #8817: Copying Content Elements does not copy Language Overlays (thanks to Tolleiv Nietsch)
        * Fixed bug #2314: When moving records the translation do not move with it (thanks to Tolleiv Nietsch)
        * Fixed bug #539: lang-children "get lost"(should be deleted) when deleting parent-record in default language (thanks to Tolleiv Nietsch)
        * Fixed bug #10081: t3lib_div must not die if a locallang file is not found (thanks to Franz Holzinger)
        * Fixed bug #12194: The filetree does not show whether a folder is write protected

    2009-10-20  Sebastian Kurfuerst  <sebastian@typo3.org>

        * Raised Extbase and Fluid versions to 0.9.10

    2009-10-19  Oliver Hader  <oliver@typo3.org>

        * Follow-up to test #12153: Fixed bug in language condition tests
        * Follow-up to test #12153: Refactored browserInfoHookIsCalled() test case
        * Follow-up to test #12153: Added test cases for device condition

    2009-10-19  Rupert Germann  <rupi@gmx.li>

        * Added Feature #12138: Use flashmessages to display messages from tcemain
        * Fixed bug #12188: Double display of flashmessages
        * Fixed bug #11694: Table sys_refindex / KEY lookup_string not UTF-8 compatible  (thanks to Morton Jonuschat)
        * Fixed bug #11853: PHP warning in file module when uploading files with the flashuploader (thanks to Georg Ringer)

    2009-10-19  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12240: [Media CE] using a flash video file doesn't work
        * Fixed bug #12113: Setting default values for $BE_USER->uc doesn't work for multi-dimensional arrays (thanks to Steffen Gebert)
        * Fixed bug #10897: typo3/db_new.php prompts to create records in hidden, static and readonly tables
        * Fixed bug #12239: Record statistics use hidden tables and isn't formated well

    2009-10-16  Bernhard Kraft  <bernhard@typo3.org>

        * Fixed Bug #12218: Spaces in Webroot path break ImageMagick compose (thanks to Joerg Wagner)

    2009-10-16  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12246: Reports module: icon not clickable

    2009-10-16  Francois Suter  <francois@typo3.org>

        * Cleanup #12245: Reports: Cleaned up API for providers in status report
        * Feature #12167: Reports: Enhanced report registration API to provide custom icons for reports
        * Feature #12178: Provide a report for installed services in the new Reports module
        * Cleanup #12249: Improved comments about service registration in EXT:sv/ext_tables.php and EXT:sv/ext_localconf.php
        * Fixed bug #12132: Scheduler: Introduced proper handling of incomplete objects after unserialization from DB storage
        * Cleanup #12211: Scheduler: Corrected a couple of labels and one code indent in BE module
        * Follow-up to bug #12117: The flash messages sometimes contained content meant for the main screen and not the message

    2009-10-15  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11963: MEDIA.renderType in TypoScript is reset
        * Fixed bug #12207: $this->doc->sectionHeader return wrong HTML

    2009-10-15  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #8728: PHP Warning, if SQL error occurs in class t3lib_db in functions which depend on an existing resultset (thanks to Felix Oertel)
        * Fixed bug #12196: PHP warning in FE with activated DLOG and mbstring set as t3lib_cs_utils

    2009-10-14  Oliver Hader  <oliver@typo3.org>

        * Reverted bugfix #10050: Traversing back page records used in CONTENT object does not work on root page

    2009-10-12  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12209: [felogin] lang label for send change password link misses variable for valid end time

    2009-10-11  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12186: EM sends Location-header without exit (thanks to Steffen Gebert)
        * Added ext_icon for sysext version (thanks to Steffen Gebert)
        * Cleanup: Whitespace cleaning of typo3 sysext files
        * Cleanup: Whitespace cleaning of typo3 files
        * Cleanup: Whitespace cleaning of t3lib files

    2009-10-11  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #10971: Fatal error in impexp module: Call to a member function includeLLFile() on a non-object (thanks to Andre Steiling)
        * Follow-up to bug #12154: renamed t3lib_MessageQueue to t3lib_FlashMessageQueue, changed some some function names
          in t3lib_flashmessages and t3lib_FlashMessageQueue.
        * Follow-up to bug #9355: Fixed some broken utf-8 chars in class t3lib_error_debugexceptionhandler
        * Fixed bug #12164: Use flashmessages to display messages in fileadmin

    2009-10-10  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #12129 (follow-up to bug #11986): Translation update broken with activated output compression (thanks to Steffen Gebert)

    2009-10-09  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12111: Improve output of extension details (thanks to Steffen Gebert)
        * Fixed bug #12110: Show status of flag doNotLoadInFE in extension details (thanks to Steffen Gebert)
        * Fixed bug #12119: PHP warning shown in EM, if webserver can't remove extension dir (thanks to Steffen Gebert)

    2009-10-09  Oliver Hader  <oliver@typo3.org>

        * Follow-up to issue #12162: Reverted modification of existing locallang labels and introduced new labels instead

    2009-10-09  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #12154: Improve API of flashmessages

    2009-10-09  Francois Suter  <francois@typo3.org>

        * Fixed bug #12078: Scheduler: Check if additional fields indeed provide fields
        * Fixed bug #12117: Added use of flash messages to the Extension Manager (thanks to Steffen Gebert)
        * Fixed bug #12166: Scheduler: Gathered TODOs from Forge bug tracker into the Scheduler's manual

    2009-10-09  Kasper Skaarhoj  <kasper@typo3.org>

        * Tiny bug with date function in t3lib_befunc. Casted timestamp to integer.
        * Added User TSconfig option "options.checkPageLanguageOverlay" so flexforms only show language fields for languages available on the page.
        * Fixed problem with notification emails to users when a workspace review rejection happens. Now it works
        * Added possibility to reset the diff-information for localizations so translators or admins can click a button that will mark a record so it appears to be in need of translation again.
        * Fixed problem with "Save and view" for new pages: Simply removed the button for new pages because it didn't choose the right PID anyway.
        * Implemented an override of allowed language per workspace. This is an expert feature available as a USER TSconfig option "options.workspaces.allowed_languages"
        * Expanded the feature that disables/enables login in a branch so now you can allow a login but force the usergroups to be "0,-2" (basically, that no usergroups are set for the user). This can help to reduce multiple caching of similar pages in case of many usergroup combinations in a system.
        * Implemented a simple hook after retrieval of a page from cache.
        * Fixed bug in Addwizard: It didn't work properly with wizard for other pages. Took the wrong table name. Thanks to Hassan AIT ABDELLAH, Dassault Systemes, for the fix.

    2009-10-08  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #12121: "Installation Type: L" - tell the user, what's "L" (thanks to Steffen Gebert)
        * Fixed bug #12128: Performance improvement in t3lib_div::get_dirs() (thanks to Dan Osipov)
        * Follow-up to #12128: Added unit tests for t3lib_div::get_dirs() (thanks to Peter Foerger)

    2009-10-08  Oliver Hader  <oliver@typo3.org>

        * Added test #12153: Add more unit tests for t3lib_matchCondition
        * Follow-up to test #12153: Added unit tests for simulated conditions via TypoScript object browser

    2009-10-07  Francois Suter  <francois@typo3.org>

        * Fixed bug #12078: Scheduler: Wrong example of cronjob configuration in the manual

    2009-10-07  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #11451: Wrong pattern modifier in t3lib_htmlmail

    2009-10-05  Steffen Kamper  <info@sk-typo3.de>

        * Cleanup: Whitespace cleanup in extension manager

    2009-10-01  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.3.0beta1

    2009-10-01  Francois Suter  <francois@typo3.org>

        * Follow-up to #11855: Use flash message API instead of custom markup for highlighting security link

    2009-10-01  Steffen Kamper  <info@sk-typo3.de>

        * Fixed typo in tslib_content::cImage (changed $this->stdwrap to $this->stdWrap)
        * Follow-up to #12089: Cleanup: unescaped &
        * Follow-up to #12089: Make messages in reports module collapsible: add error/warning icon to header
        * Follow-up to #11843 Add a reports module: endPage was applied twice

    2009-10-01  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #12071: t3lib_sqlparser is not able to parse alias of a joined table (thanks to Xavier Perseguers)
        * Raised DBAL version from 0.9.21 to 0.9.22
        * Cleanup: Updated NEWS.txt
        * Follow-up to feature #7461: Fixed bug in using the cookieDomain value (thanks to Xavier Perseguers)
        * Follow-up to bug #11903: Use two queries to clean tags for DBAL reasons

    2009-10-01  Rupert Germann  <rupi@gmx.li>

        * Follow-up to bug #11357: fixed a parse error in index_re.php
        * Fixed bug #11979: TCEforms suggest doesn't find everything on large sites and is slow  (thanks to Steffen Gebert)
        * Fixed bug #12092 (Follow-up to bug #9355): The errorhandling can make TYPO3 Backend unusable
        * Added feature #12055: Add missing sysexts to update wizard  (thanks to Steffen Kamper)

    2009-09-30  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12089: Make messages in reports module collapsible

    2009-09-30  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #12035: BE style must match t3skin in reports module and flash messages (thanks to Tom Ruether)
        * Fixed bug #12036: BE style must match t3skin in Install Tool (thanks to Tom Ruether)
        * Added feature #7461: Transfer cookies via SSL only whenever possible

    2009-09-30  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #12080 (Follow-up to bug #11505): pageCacheToExternalFiles=1 breaks db-caching in 4.3
        * Fixed bug #12082: PHP fatal error with frameset page
        * Fixed bug #12085: Memcached Configuration status report is broken

    2009-09-29  Francois Suter  <francois@typo3.org>

        * Fixed bug #12068: Scheduler: Improper skipping of running tasks in case multiple execution denied

    2009-09-29  Rupert Germann  <rupi@gmx.li>

        * Added feature #9355: Add an error and exception handler (backported from FLOW3) (thanks to Ingo Renner)
        * Added improvement #11855: security related links in EM are not marked as links.
        * Fixed bug #12032: The message "The selected language is not available..." in EM tranlation handling wrong if no language can be chosen (Thanks to Georg Ringer)

    2009-09-29  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #11433: touch(): Utime failed in install tool (thanks to Steffen Gebert)
        * Added feature #12076: Integration of saltedpasswords as system extension (thanks to Marcus Krause & Steffen Ritter)

    2009-09-28  Kasper Skaarhoj  <kasper@typo3.org>

        * Fixed bug #12155: TypoScript FORM object does not render correctly anymore

    2009-09-28  Benjamin Mack  <benni@typo3.org>

        * Included feeditadvanced as system extension through svn:externals (tag 43beta1)

    2009-09-25  Benjamin Mack  <benni@typo3.org>

        * Fixed #8802: Fileadmin: extensions of new files should only show allowed extensions (Thanks to Steffen Gebert)
        * Cleanup #11357: Make use of new t3lib_div::redirect function throughout the core

    2009-09-25  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #12046: Skinning possibilities are not available with frontend editing
        * Cleanup: Updated NEWS.txt
        * Fixed bug #12064: Warning when edit form is rendered with wizards in backend

    2009-09-25  Benjamin Mack  <benni@typo3.org>

        * Added feature #11793: Give CONTENT.table stdWrap properties (thanks to Sebastian Gebhard)

    2009-09-24  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12025: Make statuses in the status report sorted and grouped (thanks also to Ingo Renner)
        * Follow-up to bug #12021: Extension Manager is not translatable (part 8) (thanks to Christopher Stelmaszyk)
        * Cleanup #12053: Cleanup of Extension Manager
        * Fixed bug #12021: Extension Manager is not translatable (part 8) (thanks to Christopher Stelmaszyk)

    2009-09-24  Sebastian Kurfuerst  <sebastian@typo3.org>

        * Raised extbase and fluid versions to 0.9.9

    2009-09-23  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #12042: BE_USER object is cleared with assigning an empty string

    2009-09-23  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12037: Fatal Error in Configuration > $TBE_MODULES (thanks to Bastian Waidelich)
        * Follow-up to bug #12014: Extension Manager is not translatable: corrected typo
        * Follow-up 2 to bug #12017: Respect full path of CSS inclusion (RTE)

    2009-09-22  Oliver Hader  <oliver@typo3.org>

        * Reverted bugfix #9599: felogin - forget password action and logout action are still cached
        * Fixed bug #12041: felogin - Checking for cHashes results in the whole page being uncached
        * Cleanup: Updated NEWS.txt

    2009-09-22  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11496: Text and headers are bad readable
        * Follow-up to bug #12017: Added vars from tbe_editor.js to TS-object
        * Fixed bug #11994: Add more Flexibility to PageRenderer

    2009-09-21  Sebastian Kurfuerst  <sebastian@typo3.org>

        * Raised extbase version to 0.9.8. This is a follow-up to bug #11903 and additionally makes the reflection cache work.

    2009-09-21  Rupert Germann  <rupi@gmx.li>

        * Follow-up to bug #11505: clearing page cache from adminpanel didn't work
        * Fixed bug #12014: Extension Manager is not translatable (part 7) (thanks to Christopher Stelmaszyk)

    2009-09-21  Oliver Hader  <oliver@typo3.org>

        * !!! Fixed bug #11903: Use separate tables for tags in the caching framework

    2009-09-20  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #11642: filelinks are now created via the typolink method

    2009-09-20  Oliver Hader  <oliver@typo3.org>

        * Cleanup: Set SVN properties
        * Follow-up to feature #10585: Fixed PHPdoc comments and field rendering
        * Fixed bug #11834: Field handling API in t3lib_extMgm does not check for duplicates on insertion and runs superflouos insertions

    2009-09-20  Francois Suter  <francois@typo3.org>

        * Fixed bug #12010: Scheduler: Task uid should be displayed in the BE module list view
        * Follow-up to UI-Bug #F3282: Changed icon_warning.gif to match flash messages' warning icon
        * Fixed bug #11995: Prompt for keyboard input does not get displayed in CLI scripts
        * Fixed bug #11224: Special menu directory only renders 1st level if special.value is a mount point (thanks to Xavier Perseguers)
        * Cleanup #11989: Install Tool message colors should match flash message colors
        * Cleanup #12018: Added an icon for notice-level flash messages
        * Cleanup #12020: Scheduler: Made proper use of t3lib_pageRenderer for all inclusions of JS and CSS files in the BE module

    2009-09-20  Benjamin Mack  <benni@typo3.org>

        * Added additional documentation for feature #12008: User setup misses a function for inserting fields at a position

    2009-09-20  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12017: Wrong Inclusion in tceforms and tceforms_fe
        * Fixed bug #12016: JS and CSS inclusion may contain path/../path2/file
        * Fixed bug #11933: FrontendEditing (classic) does not work when editing forms on page

    2009-09-19  Francois Suter  <francois@typo3.org>

        * Fixed bug #12011: Wrong layout of datepicker in the Scheduler

    2009-09-19  Steffen Kamper  <info@sk-typo3.de>

        * Added feature #10585: Enable BE-User to change their OpenID
        * Added feature #12008: User setup misses a function for inserting fields at a position
        * Fixed bug #12003: EncryptionKey generation in install tool (1-2-3-mode) still uses old encryption
        * Fixed bug #11884: User setup: buttons for create/delete ENABLE_INSTALL_TOOL-file are not integrated in user setup
        * Fixed bug #11896: User Setup miss save of be_users fields and miss handling of default value

    2009-09-19  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #12005: Reports don't have a back reference to the reports module
        * Follow-up to feature #12001: Add checks from t3lib_BEfunc::displayWarningMessages() to the status report

    2009-09-19  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11917: TCEforms suggest fails with empty label or label_alt field (thanks to Andreas Wolf)
        * Fixed bug #11988: Extension Manager is not translatable (part 6) (thanks to Christopher Stelmaszyk)
        * Fixed bug #11986: dynamic update of translation status im EM is broken
        * Fixed bug #11013: Generate Random Key still does not work (thanks to Marcus Krause)
        * Fixed bug #11875: list module doesn't show '0' values (thanks to David Bruchmann and Bastian Waidelich)
        * Fixed bug #11992: treelist cache fills devlog
        * Follow-up to bug #11505: added a forgotten comma to table definition of cache_hash

    2009-09-18  Sebastian Kurfuerst  <sebastian@typo3.org>

        * Raised Extbase version to 0.9.7 so it works with the caching framework adjustments.

    2009-09-18  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11990: Optimize output of TCEforms suggest results (thanks to Steffen Gebert)
        * Fixed bug #11505: TYPO3 4.3 is slower than 4.2 -> re-implement native db caching and make the
            use of the caching framework configurable. !!! DB update required
        * Follow-up to bug #11505: removed superfluous fields from caching framework tables, fixed indizes

    2009-09-18  Oliver Hader  <oliver@typo3.org>

        * Follow-up to bug #11831: Removed reference operator from an object
        * Follow-up to bug #11505: Extended the checks whether the caching framework was initialized before
        * Raised DBAL version from 0.9.20 to 0.9.21

    2009-09-18  Ingo Renner  <ingo@typo3.org>

        * Added feature #11843: Add a reports module
        * Follow-up to #11843: Lists in statuses didn't look too good due to top margin

    2009-09-18  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11970: RTE in quickedit mode (page module) is broken
        * Fixed bug #11996: Change compreed to compress with adding JS/CSS
        * Follow-up to bug #11985: Move ExtJs CSS-assignment to renderJsKibraries
        * Follow-up to bug #11985: backPath in FE is set too late

    2009-09-17  Steffen Kamper  <info@sk-typo3.de>

        * Cleanup #11991: Cleanup TCEforms suggest CSS
        * Fixed bug #11396: redirects not working for felogin on pages with access set
        * Follow-up to bug #11985: corrected calls loadScriptaculous() in tceforms

    2009-09-17  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #11983: TCEforms suggest has no search indicator, credits Steffen Gebert
        * Follow-up to bug #11983: label 'Searching...' was not translatable

    2009-09-17  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11906: Extension Manager is not translatable (part 4) (thanks to Christopher Stelmaszyk)
        * Fixed bug #11987: Extension Manager is not translatable (part 5) (thanks to Christopher Stelmaszyk)
        * Fixed bug #11564: Change Hardcoded MD5 Password Encryption in User->Setup. Needed for extension "saltedpasswords" (thanks to Steffen Ritter)
        * Fixed bug #9270: Editors canÂ´t undelete records in history (thanks to Christian Hernmarck)
        * Added tweak #11881: Add pencil icon to "Edit the whole template record." in Template editor (thanks to Patrick Gaumond)

    2009-09-17  Oliver Hader  <oliver@typo3.org>

        * Cleanup: Set SVN properties
        * Fixed bug #11985: Optimize disposal of t3lib_PageRenderer (thanks to Steffen Kamper)
        * Added feature #11669: Provide a reason for why $TSFE->set_no_cache() has been triggered (thanks to Michael Stucki)
        * Added feature #2278: Add hook to t3lib_TCEmain::checkModifyAccessList() (thanks to Michael Stucki)
        * Follow-up to feature #2278: Added unit tests for the new checkModifyAccessList hook

    2009-09-17  Sebastian Kurfuerst  <sebastian@typo3.org>

        * Raised Extbase and Fluid Versions from 0.9.5 to 0.9.6

    2009-09-16  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #11831: Remove reference operators for objects
        * Fixed bug #11824: Links accross Domains not known by linkData and therefore also RealURL (thanks to Daniel Poetzinger)

    2009-09-16  Jeff Segars  <jeff@webempoweredchurch.org>

        * Added feature #11819: Added inline Javascript rendering type for TYPO3AJAX
        * Fixed bug #11361: Backend TYPO3 AJAX-Interface: json encoded result empty if it contains non-utf-8 characters (thanks to Benjamin Mack)

    2009-09-16  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11905: Extension Manager is not translatable (part 3) (thanks to Christopher Stelmaszyk)
        * Added feature #11927: Use suggest feature in system extensions
        * Fixed bug #11967: allowSystemInstall should be a checkbox and not an input field (thanks to Georg Ringer)

    2009-09-16  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11899: Make resizable and flexible textareas configurable, set default maxHeight to 600
        * Fixed bug #11965: Content Element Media needs stdWrap to change path (e.g. for DAM) (thanks to Georg Ringer)
        * Fixed bug #11902: [MediaCE] works only with absRefPrefix and doesn't support flowplayer

    2009-09-15  Francois Suter  <francois@typo3.org>

        * Feature #11555: Integrated extension "gabriel" into TYPO3 Core as sysext "scheduler"

    2009-09-15  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #11915: htmlArea RTE: superfluous span tags in content after server-based cleaning on paste operation
        * Follow-up to bug #11946: htmlArea RTE: reference was made to context menu item after context menu was closed
        * Added feature #11966: htmlArea RTE: Restrict access to "Clear RTE Cache" option in clear cache menu
        * Updated htmlArea RTE manual

    2009-09-13  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #11847: htmlArea RTE displays empty editing area in Opera 10
        * Fixed bug #11946: htmlArea RTE: table properties editing dialogue windows loose focus after opening in IE8

    2009-09-13  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #11943: TCEforms suggest classes lack final ?> and use round brackets around the uid
        * Fixed bug #11945: TS objectbrowser converts labels to uppercase improperly (thanks to Christopher Stelmaszyk)
        * Fixed bug #11789: Extension Manager is not translatable - part 2 (thanks to Christopher Stelmaszyk)

    2009-09-12  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to feature #10853: Added camel case for default media params
        * Follow-up to feature #6872: #11924: Use suggest feature in core

    2009-09-12  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11920: Follow-up to feature #6872: TCEforms suggest gives no results with custom TSconfig (thanks to Andreas Wolf)

    2009-09-11  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11925: Follow-up to feature #6872: TCEforms suggest fails with PHP fatal error (thanks to Steffen Gebert)

    2009-09-09  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11895: Cookie detection in new t3skin login screen fails for certain cirumstances (thanks to Steffen Gebert)
        * Cleanup: Renamed t3lib_PageRenderer and the templates for backend/frontend
        * Fixed bug #11908: Wrong labels in Media section in constants of css_styled_content

    2009-09-07  Francois Suter  <francois@typo3.org>

        * Fixed bug #10201: Changed cHashes to use full md5 values to reduce the probability of duplicate hashes (thanks to Dan Osipov)

    2009-09-07  Tobias Liebig  <mail_typo3@etobi.de>

        * Fixed bug #11841: Hardcoded labels in t3editor (thanks to Christopher Stelmaszyk)

    2009-09-07  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to feature #11397: renamed t3lib_pageRenderer and templates (page_be.html, page_fe.html), cleaned unit test
        * Follow-up to feature #11397: Added unit tests for t3lib_pageremder

    2009-09-06  Rupert Germann  <rupi@gmx.li>

        * Added feature #11798: Remove "Login-error or session timed out" screen (thanks to Steffen Gebert)
        * Added feature #6872: Add suggest wizard to TCEforms (thanks to Andreas Wolf)

    2009-09-06  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11890: t3lib_div::fixed_lgd_cs uses wrong charset in FE
        * Added feature #11397: Add class for rendering HTML page in BE and FE
        * Updated swfobjects from version 2.1 to version 2.2
        * Added feature #11370: Inconsistent Login Screen doesn't show system required errors (thanks to Jens Hoffmann, Susanne Moog and Steffen Gebert)

    2009-09-05  Steffen Kamper  <info@sk-typo3.de>

        * Added feature #11242: Clear User Session Data
        * Added feature #11812: Resizable Textareas for TCEforms
        * Added feature #11407: Allow type="user" in user setup

    2009-09-04  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11868 (Follow-up to #11828): added forgotten file version/tca.php (thanks to Sven Jï¿½rgens)
        * Fixed bug #11827: Update wizard adds _CACHEFILE to extList

    2009-09-04  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11482: Pagetree: Expand/collaps DB-Mounts buggy (thanks to Andreas Wolf)
        * Added feature #10017: [felogin] New Method for "forgotPassword"

    2009-09-03  Martin Kutschker  <masi@typo3.org>

        * Added feature #11866: Greek transliteration
        * Added feature #11865: AJAX error should send HTTP status 500

    2009-09-03  Rupert Germann  <rupi@gmx.li>

        * Added feature #11773: Integrate an option to deactivate shortcuts completely  (thanks to Christopher Stelmaszyk)
        * Added feature #11828: There's no possibility to hide versioning and workspaces.

    2009-09-03  Stanislas Rolland  <typo3@sjbr.ca>

        * Updated htmlArea RTE version to 1.8.3 for TYPO3 4.3beta1
        * Fixed bug #11863: htmlArea RTE: css syntax errors in language marks feature

    2009-09-02  Ingo Renner  <ingo@typo3.org>

        * Follow-up to #11438: Add a registry to t3lib - Limited the key field size to 128 chars to fit the UNIQUE key

    2009-09-02  Rupert Germann  <rupi@gmx.li>

        * Added feature #9657: Performance improvement: Instantiate time tracker as null object if not really required

    2009-09-02  Oliver Hader  <oliver@typo3.org>

        * Follow-up to bug #11599: TYPO3 logo is not shown in frontend disposal

    2009-09-02  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11748: Problem with backend log in with interfaces
        * Fixed bug #11599: TYPO3 dies without an error message when the mysql-module for php is not loaded. (thanks to Michael Knabe)

    2009-09-01  Steffen Kamper  <info@sk-typo3.de>

        * Code cleanup: #11771: Cleanup of tceforms.php
        * Added feature #10040: define Default GET-vars

    2009-09-01  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #9049: Page ID is always 0 in export module for impexp (thanks to Jeff Segars)

    2009-09-01  Oliver Hader  <oliver@typo3.org>

        * Follow-up to feature #9292: Fixed wrong disposal of global variables (thanks to Christian Kuhn)
        * Added feature #10724: Provide a check that compares a given URL with the host, TYPO3 is running on (thanks to Marcus Krause)
        * Follow-up to feature #10724: Added unit tests for isValidUrl() and isOnCurrentHost() in t3lib_div (thanks to Marcus Krause)
        * Fixed bug #11845: Typo in a CLI error mesage: suue -> sure (thanks to Oliver Klee)
        * Fixed bug #11844: Description in about module uses htmlspecialchars which is wrong (thanks to Georg Ringer)
        * Added test #11846: Add unit tests for t3lib_div::removeDotsFromTS()

    2009-09-01  Sebastian Kurfuerst  <sebastian@typo3.org>

        * Raised extbase and fluid versions from 844 to 1181 (and pointing to a tag now instead of a revision)
        * Changed sysext dbal to svn:externals. Thanks to Andreas Wolf for converting the Repositories!

    2009-09-01  Christian Kuhn  <lolli@schwarzbu.ch>

        * Added feature #11825: Override FE labels with XML files

    2009-08-31  Jochen Rau  <jochen.rau@typoplanet.de>

        * Added feature #7984: Besides stdWrap.crop there is now a function stdWrap.cropHTML that is aware of HTML tags (same options)

    2009-08-31  Oliver Hader  <oliver@typo3.org>

        * Cleanup: Set SVN properties and tags
        * Follow-up to feature #9897: Added unit tests for addFieldsToPalette() and addToAllTCAtypes() in t3lib_extMgm
        * Follow-up to feature #9897: Extended unit tests for adding fields in t3lib_extMgm

    2009-08-31  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #11810: Workspace indicator bar does not cover the full width of the page tree

    2009-08-31  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #11717: Filelist module doesn't work in IE6 (thanks to Steffen Gebert)

    2009-08-31  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to #10853: New Multimedia CE
        * Added feature #10853: New Multimedia CE
        * Added feature #11374: Add Linebreak in Palette of TCEFORMS

    2009-08-30  Oliver Hader  <oliver@typo3.org>

        * Added feature #9292: Integrate hook at the end of tslib_cObj::getImgResource
        * Follow-up to feature #9292: Added unit test for getImgResource hook

    2009-08-30  Christian Kuhn  <lolli@schwarzbu.ch>

        * Follow-up to #11431: Unit test for getPage_preProcess hook
        * Added feature #11431: Hook to manipulate the page request in method getPage of class t3lib_pageSelect

    2009-08-30  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11808: Increase performance using mbstring in t3lib_cs->crop (thanks to Timo Schmidt)

    2009-08-29  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #11804: Upgrade wizard does not install opendocs as system extension (thanks to Steffen Gebert)

    2009-08-28  Ingo Renner  <ingo@typo3.org>

        * Added feature #11784: Change existing messages in the template object browser to use flash messages
        * Added feature #11783: Change existing warning boxes to use flash messages

    2009-08-28  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11710: Remove local loopback bypass in Install Tool login (thanks to Mario Rimann)

    2009-08-27  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to #11651: Allow Extbase as framework for backend modules
        * Fixed bug #11803: sysext opendocs is shy (thanks to Steffen Gebert)
        * Follow-up to #11652: Modern integration of module into backend using Extbase - general approach without naming of Extbase
        * Fixed bug #11511: Resources -> Files missing in doktype "sysfolder" (thanks to Steffen Gebert)

    2009-08-27  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #11799: Use typo3printError() if backend is locked (thanks to Steffen Gebert)

    2009-08-27  Ingo Renner  <ingo@typo3.org>

        * Follow-up to #11684: Fixed styling of links and lists in flash messages
        * Follow-up to #11684: Minor comments cleanup, switched popFlashMessages() to public to enable access from ExtJs f.e.

    2009-08-26  Michael Stucki  <michael@typo3.org>

        * Fixed bug #11731: ENABLE_INSTALL_TOOL file check in yellow box does not check the file age (thanks to Moreno Feltscher)

    2009-08-26  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #11786: Wrong order of arguments for typo3PrintError() (thanks to Steffen Gebert)

    2009-08-25  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11212: Turning off the admin-panel results in error
        * Follow-up to #11764: Fixed bug that occured when localizing records via TCEforms

    2009-08-25  Oliver Hader  <oliver@typo3.org>

        * Added feature #11707: Integrate possibility to enable/disable the deprecation logging (thanks to Sascha Kettler)
        * Fixed bug #11657: Extension sys_action uses hardcoded labels (thanks to Christopher Stelmaszyk)
        * Fixed bug #11660: Hardcoded labels in backend.php (thanks to Christopher Stelmaszyk)
        * Fixed bug #11772: Hardcoded strings in TCA of template module (thanks to Christopher Stelmaszyk)
        * Fixed bug #11656: Extension Manager is not translatable (thanks to Christopher Stelmaszyk)

    2009-08-25  Ingo Renner  <ingo@typo3.org>

        * Added feature #11684: Add support for flash messages in the backend

    2009-08-24  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11764: Performance improvement: speed up list module by improving internal handling of localisations
        * Follow-up to #11764: $this->translateTools was not initialized in the page module

    2009-08-23  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11769: Publish function in adminPanel is broken

    2009-08-22  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11744: Usage of $BACK_PATH without globals
        * Fixed bug #11528: JS error in the recycler module / refactored the store handling

    2009-08-21  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11747: Performance improvement: speed up list module by improving internal handling of references
        * Fixed bug #11699: Menu entries in template modules miss translation (Thanks to Christopher Stelmaszyk)

    2009-08-20  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11726: File list tree-<ul> lacks id="treeRoot" (thanks to Steffen Gebert)

    2009-08-19  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11746: Performance improvement: speed up function t3lib_BEfunc::isRecordLocked()

    2009-08-19  Michael Stucki  <michael@typo3.org>

        * Fixed bug #11716: Install Tool always sets TYPO3_CONF_VARS[FE][disableNoCacheParameter] upon save

    2009-08-18  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11476: Redundant rendering of helpTextIcon in TCEforms

    2009-08-18  Francois Suter  <francois@typo3.org>

        * Follow-up to #11373, #11379, #11408: Removed unnecessary use of second parameter in calls to $GLOBALS['LANG']->getLL()
        * Code cleanup #11745: Class tx_tstemplateinfo misses phpdoc declaration and SVN Id keyword placeholder
        * Fixed bug #11659: Hardcoded labels in backend.php and alt_menu.php (Thanks to Christopher Stelmaszyk)

    2009-08-14  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11718: Performance improvement: speed up function t3lib_iconWorks::skinImg() by caching the results
        * Fixed bug #11722: Performance improvement: speed up function t3lib_BEfunc::selectVersionsOfRecord
        * Follow-up to feature #11474: Updated performance section in NEWS.txt

    2009-08-14  Ingo Renner  <ingo@typo3.org>

        * Added feature #11438: Add a registry to t3lib
        * Added missing icon in t3skin for the divider content element
        * Fixed bug #11724: Icons in List Module aligned badly

    2009-08-14  Michael Stucki  <michael@typo3.org>

        * Fixed bug #8968: DBAL incompatible SQL in "impexp" extension (thanks to Marc Bastian Heinrichs)

    2009-08-14  Francois Suter  <francois@typo3.org>

        * Code cleanup #11687: Removed duplicate SQL definition of table index_stat_word

    2009-08-11  Francois Suter  <francois@typo3.org>

        * Code cleanup #11686: Incomplete SQL comments in t3lib/stddb/tables.sql

    2009-08-10  Ingo Renner  <ingo@typo3.org>

        * Follow-up to bug #11627: Fixed bug with mis-styled input fields caused by the addition of ExtJs and its reset css file

    2009-08-10  Steffen Kamper  <info@sk-typo3.de>

        * Added feature #11648: Feature: Add datepicker to date and datetime fields in TCEFORMS
        * Added feature #11652: Modern integration of module into backend using Extbase: modified t3lib_loadmodules.php to allow modules without having conf.php. This is needed for extbase driven backend modules. (Thanks to Xavier Perseguers)
        * Added feature #11651: Allow Extbase as framework for backend modules: modified mod.php to dispatch extbase driven modules. (Thanks to Xavier Perseguers)

    2009-08-09  Andreas Otto  <andreas@otto-hanika.de>

        * Added feature #4270: displayCond for FlexForms, that affects on row of element (thanks to Tolleiv Nietsch and Rupert Germann)

    2009-08-05  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11627: Add CSS class and IDs to fields in TCEFORMS

    2009-08-05  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11539: t3ver_stage will not be resetted when t3ver_stage was >0 before (thanks to Fabrizio Branca)
        * Fixed bug #11430: Performance improvement: use $GLOBALS['EXEC_TIME'] instead of time() where it makes sense (thanks to Niels Pardon)
        * Fixed bug #11512: Performance improvement: replace while(list()...) by foreach in the TYPO3 core (part 1)
        * Added feature #11474: Performance improvement: Store separate extList for the frontend (thanks to Mathias Schreiber)
        * Fixed bug #11475: Add "doNotLoadInFE" => 1 (introduced with #11474), to several system extensions, speeding up the frontend (thanks to Mathias Schreiber)

    2009-08-04  Michael Stucki  <michael@typo3.org>

        * Follow-up to bug #11410: Non-functional code cleanup

    2009-08-03  Benjamin Mack  <benni@typo3.org>

        * Fixed #11628: Frontend Editing does not work with an iframe

    2009-08-03  Ingo Renner  <ingo@typo3.org>

        * Updated Caching Framework to be in sync with FLOW3 revision 2953

    2009-08-02  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #11585: Faulty usage of t3lib_matchCondition in backend template
        * Follow-up to bug #11585: Added unit test for t3lib_matchCondition
        * Fixed bug #10769: Wrong encoded email header (thanks to Ivan Kartolo)
        * Follow-up to bug #10769: Added unit tests for t3lib_div::encodeHeader()
        * Added test #11626: Extend unit tests for t3lib_matchCondition globalVar comparison

    2009-08-02  Christian Kuhn  <lolli@schwarzbu.ch>

        * Added feature #11500: Order fe_groups in select fields alphabetically (Thanks to Steffen Gebert)

    2009-08-01  Christian Kuhn  <lolli@schwarzbu.ch>

        * Added feature #6039: Implement file_reference for TCA "group" type. Files can be referenced instead of copied to upload folder (Thanks to Martin Borer)

    2009-07-31  Rupert Germann  <rupi@gmx.li>

        * Follow-up to bug #11410: Speed up BEgetRootLine even more by adding a real 2-level cache

    2009-07-31  Christian Kuhn  <lolli@schwarzbu.ch>

        * Added feature #11581: Small speed improvement in class.t3lib_tstemplate.php (Thanks to Dan Osipov)
        * Fixed bug #11601: Copyright-Notice is hardcoded (Thanks to Christopher Stelmaszyk)

    2009-07-30  Oliver Hader  <oliver@typo3.org>

        * Cleanup: Fixed ChangeLog and moved information concerning database updates to NEWS.txt

    2009-07-30  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11593: Field t3ver_label is to small for uids >= 100000 (thanks to Fabrizio Branca)
        * Fixed bug #11602: Reset filter above the page-tree is not translatable (Thanks to Christopher Stelmaszyk)

    2009-07-30  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11603: BE-Log: "Changes in fields" and "Show history" are not translatable (Thanks to Christopher Stelmaszyk)

    2009-07-27  Oliver Hader  <oliver@typo3.org>

        * Cleanup: Updated t3lib/core_autoload.php

    2009-07-23  Oliver Hader  <oliver@typo3.org>

        * Fixed bug: System extension feedit misspelled

    2009-07-23  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11296: Login-Page: function makeCopyrightNotice() uses hardcoded text (Thanks to Christopher Stelmaszyk)

    2009-07-22  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11566: Missing css for grouping grid collapse/expand (ExtJS)

    2009-07-20  Ingo Renner  <ingo@typo3.org>

        * Added feature #11264: Add an opacity option to the GIFBUILDER BOX object

    2009-07-20  Oliver Hader  <oliver@typo3.org>

        * Added feature #11509: Move automatic session data garbage collection to separate method

    2009-07-19  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #6875: IRRE - Sorting of child records is inverted on moving parent record to different page (thanks to Nabil Saleh)
        * Fixed bug #11267: Use PHP5 version of function microtime()

    2009-07-18  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11556: missing quotes in loginrefresh.js

    2009-07-16  Steffen Kamper  <info@sk-typo3.de>

        * Added feature #9808: Popup-functionality for Pages using target field

    2009-07-16  Christian Kuhn  <lolli@schwarzbu.ch>

        * Added feature #11544: select/deselect all checkbox in db compare tool and extension manager for each type of modification (thanks to Bastian Waidelich)

    2009-07-16  Francois Suter  <francois@typo3.org>

        * Bug #11249: Abusive deprecation logging in tslib_content::getData()

    2009-07-15  Francois Suter  <francois@typo3.org>

        * Cleanup #11408: Object Browser uses hardcoded texts (plus some CGL cleanup) (thanks to Christopher Stelmaszyk)

    2009-07-15  Oliver Hader  <oliver@typo3.org>

        * Added feature #11510: Store timestamp of last modification of session data to frontend user object

    2009-07-14  Oliver Hader  <oliver@typo3.org>

        * Added feature #11508: Integrate possibility to define lifetime of frontend session data
        * Fixed bug #11526: Hanging record sets in tslib_feUserAuth

    2009-07-12  Ingo Renner  <ingo@typo3.org>

        * Resolved issue #11530: Replaced t3lib_div::GParrayMerged() with new method t3lib_div::_GPmerged()

    2009-07-08  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11379: TStemplate Info/Modify uses hardcoded texts (Thanks to Christopher Stelmaszyk)

    2009-07-09  Martin Kutschker  <masi@typo3.org>

        * Fixed bug: same error message is used twice for different errors

    2009-07-09  Ingo Renner  <ingo@typo3.org>

        * Cleanup: Removed a @see annotation to a deprecated function

    2009-07-08  Rupert Germann  <rupi@gmx.li>

        * Added feature #11499: Database compare in install tool can require a huge amount of clicks. Added select/deselect all links.

    2009-07-08  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #11412: Using typolinkLinkAccessRestrictedPages does not take different domain names into account

    2009-07-07  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11493: Ext JS with debug setting now also deliver debug versions of adapters
        * Added feature #11492: Update Ext JS to 3.0 final

    2009-07-06  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11480: missing BACK_PATH in css inclusion of Ext JS stylesheets

    2009-07-06  Michael Stucki  <michael@typo3.org>

        * Revert old change from 2006-09-01: Remove key length for sys_refindex table (was needed by $TYPO3_CONF_VARS[SYS][multiplyDBfieldSize] which is considered deprecated nowadays) (thanks to Xavier Perseguers)

    2009-07-03  Oliver Hader  <oliver@typo3.org>

        * Added feature #11460: felogin - Integrate possibility to disable redirects on the fly (patch by Steffen Kamper)

    2009-07-01  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow-up to issue #11009: External Links get prepended with http://typo3 in RTE htmlArea in Firefox 3.0.11/3.5b4

    2009-07-01  Oliver Hader  <oliver@typo3.org>

        * Follow-up to feature #9615: Renamed extension from fe_edit to feedit

    2009-06-29  Michael Stucki  <michael@typo3.org>

        * Added feature #11391: Add a button to let admins create the file ENABLE_INSTALL_TOOL from the backend (since it is automatically removed after 1 hour since this version) - thanks to Steffen Kamper who wrote this code!

    2009-06-29  Steffen Kamper  <info@sk-typo3.de>

        * Followup to #9991: one checkbox in version module was accidental deleted

    2009-06-29  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #5381: CSC: Added htmlSpecialChars to rendering page titles in Sitemap/menu content elements (Thanks to Susanne Moog)
        * Added feature #2421: CSC: Move static HTML from render_uploads to TypoScript, providing flexible rendering of "Filelinks" content elements

    2009-06-29  Benjamin Mack  <benni@typo3.org>

        * Followup to #4361 / New Hook: removed the "&" when calling the hook method (Thanks to Xavier Perseguers)
        * Followup to #9947: Deprecated class t3lib/class.gzip_encode.php as the ob_gzhandler methods are used

    2009-06-28  Benjamin Mack  <benni@typo3.org>

        * Fixed #10136: tslib_pibase page browser may hurt search engines by the incorrect "Next" link (On behalf of Dmitry Dulepov)
        * Followup to #4361 / New Hook: removed the "&" when calling the hook method (Thanks to Xavier Perseguers)

    2009-06-27  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11406: querygenerator/fullsearch doesn't use t3lib_iconWorks::skinImg, added alignment for images
        * Fixed bug #11409: backend.php don't use API to include JS/CSS files

    2009-06-27  Benjamin Mack  <benni@typo3.org>

        * Added feature #4361: Added new hook in class.db_list.inc for the list module (On behalf of Michael Stucki)
        * Fixed bug #6215: MENU before/after* might create invalid HTML output (Thanks to Nabil Saleh)

    2009-06-27  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #11425: Workspace Shortcut uses hardcoded texts (thanks to Christopher Stelmaszyk)
        * Fixed bug #5061: Message in Web > List isn't localized (thanks to Christopher Stelmaszyk)

    2009-06-26  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #9415: "Do" Dropdown in Workspace module doesn't respect users rights (Thanks to Franz Koch)

    2009-06-26  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #10782: Copying datasets with related data start- and endtime is recalculated (thanks to Niels Pardon)
        * Fixed bug #10175: Duplicated values in localconf.php (thanks to Stefano Kowalke)
        * Added feature #8601: Hook for debug_typo3PrintError
        * Added feature #11229: stdwrap to override image of imageLinkWrap (thanks to Georg Ringer)

    2009-06-26  Oliver Hader  <oliver@typo3.org>

        * Added feature #11373: Template-module "ts" uses hardcoded texts (thanks to Christopher Stelmaszyk)
        * Added feature #11378: Constant Editor uses hardcoded texts (thanks to Christopher Stelmaszyk)
        * Fixed bug #11154: calls to deprecated function makeInstanceClassName in core (thanks to Franz-Xaver Koch)
        * Added feature #11410: Speed up BEgetRootLine by reusing parts of the rootline from the cache (thanks to Fabrizio Branca)

    2009-06-24  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11354: Extension manager does not show up Configuration Categories Menu (thanks to Vladimir Podkovanov)

    2009-06-24  Oliver Hader  <oliver@typo3.org>

        * Follow-up to bugfix #9599: felogin - forget password action and logout action are still cached

    2009-06-23  Michael Stucki  <michael@typo3.org>

        * Fixed bug #11369: jumpUrl should only allow files matching fileDenyPattern (thanks to Ingmar Schlecht)
        * Follow-up to #9897: Rename some internal variable and function names
        * Fixed bug #9897: Extending palettes and fields to be displayed in back-end forms mixes up tabs
        * Follow-up to #11358: Minor cleanup
        * Fixed bug #10791: Performance improvement: Skip cHash check if page is already non-cached
        * Fixed bug #11368: Ignore ENABLE_INSTALL_TOOL file if it is older than one hour

    2009-06-23  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11377: synced Ext JS resources with Ext JS 3.0RC2, removed skins and unused css/images

    2009-06-22  Sebastian Kurfuerst  <sebastian@typo3.org>

        * Included up-to date Extbase and Fluid (revision 844, before it was 680). Lots of changes during the last development period starting at the developer days.

    2009-06-22  Steffen Kamper  <info@sk-typo3.de>

        * Replaced icon #11371: The current clear page cache icon is ugly and unclear (thanks to Uschi Renzihausen)

    2009-06-21  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11372: Template-Analyzer uses hardcoded texts - added localization (thanks to Christopher Stelmaszyk)

    2009-06-21  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #11356: Backend Login News is not templateable

    2009-06-21  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11358: typoLink() perfomance improvement (thanks to Vladimir Podkovanov)

    2009-05-18  Benjamin Mack  <benni@typo3.org>

        * Fixed bug / Feature #11293: Login page is not translatable

    2009-05-18  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #11009: External Links get prepended with http://typo3 in the RTEhtmlarea in Firefox 3.0.11/3.5b4

    2009-06-15  Ingo Renner  <ingo@typo3.org>

        * Updated the caching framework to the according FLOW3 revision 2616

    2009-06-15  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #11119: DBAL: Mapping in query does not takes care of remapping "table.field" in a WHERE clause (thanks to Xavier Perseguers)

    2009-06-15  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11275: Bring back the divider CE
        * Fixed bug #11052: Show warning if memcache is configured but not installed / working on the server

    2009-06-14  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #9984: Element Browser window is MUCH too small (thanks to Georg Kuehnberger)
        * Fixed bug #11047: DBAL does not support CLOB/BLOB when using a mapped table name (thanks to Xavier Perseguers)
        * Fixed bug #11076: DBAL: Cannot connect to non-local Oracle database with SID (thanks to Xavier Perseguers)
        * Fixed bug #11327: Change 2 forgotten icons in t3skin (edit_fe and edit_file)

    2009-06-13  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10617: Collapse in list module doesn't process returnPath
        * Fixed bug #8875: TYPO3 backend logo on top left looks not perfect because it has white background on gradient background (thanks to Johannes Feustel)

    2009-06-12  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10515: extend Filelist with icon block according to list view

    2009-06-12  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #11272: Autoloader floads sysLog with XCLASS failures
        * Follow-up to feature #11314: Removed hardcoded length of a session ID
        * Fixed bug #11266: Remove initialization of the random number generator

    2009-06-10  Oliver Hader  <oliver@typo3.org>

        * Added feature #11314: Extract functionality to create session ID from t3lib_userAuth::start()

    2009-06-09  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11285: functions flushByTag and flushByTags in caching framework are very unefficient
        * Fixed bug #11291 and #11292: buttons "save" and "save and view" do not work in wizard_rte.php

    2009-06-09  Oliver Hader  <oliver@typo3.org>

        * Added feature #11302: Add possibility to trigger removal of frontend session data of the current session

    2009-06-08  Rupert Germann  <rupi@gmx.li>

        * Follow-up to bug #11033: added missing hook class

    2009-06-08  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #11033: Optimize hook to indexed_search that checks for a running crawler task
        * Fixed bug #11268: Optimize initialization of frontend editing
        * Follow-up to bug #10231: Fixed wrong pattern conversions from split() to preg_split()

    2009-06-08  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to #11117: typo in Ext JS theme: grey -> gray
        * Fixed bug #10993: Install Tool shows plain passwords - display of passwords was stripped at all places
        * Fixed bug #10689: FileCache doesn't work on windows
        * Fixed bug #10741: Create version of page crashes in Cache caused by "-" in const PATTERN_ENTRYIDENTIFIER

    2009-06-07  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #0011288: function tslib_fe->setPageCacheContent() removes page_cache entry twice
        * Fixed bug #0011289: t3lib_cache_backend_FileBackend doesn't work properly with TYPO3 running in a subdirectory to the document root (thanks to Niels Pardon )
        * Follow-up to #11260: normalized the boolean parameter $reportDocTag before adding it to the md5 hash string

    2009-06-06  Benjamin Mack  <benni@typo3.org>

        * Followup to #11016: Implement RSA authentication for BE and FE (Added deprecation warnings to unused functions in the login screen)

    2009-06-05  Patrick Broens  <patrick@patrickbroens.nl>

        * Fixed bug #11189: Validation issue: value of attribute "method" cannot be "POST"; must be one of "get", "post"
        * Fixed bug #11144: Validation issue: End tag for "hr" omitted, but OMITTAG NO was specified in typo3/init.php
        * Fixed bug #11141: Validation issue: End tag for "br" omitted, but OMITTAG NO was specified in typo3/wizard_colorpicker.php
        * Fixed bug #11140: Validation issue: End tag for "br" omitted, but OMITTAG NO was specified in typo3/sysext/wizard_sortpages/class.tx_wizardsortpages_webfunc_2.php
        * Fixed bug #11139: Validation issue: End tag for "br" omitted, but OMITTAG NO was specified in typo3/sysext/wizard_crpages/class.tx_wizardcrpages_webfunc_2.php
        * Fixed bug #11138: Validation issue: End tag for "br" omitted, but OMITTAG NO was specified in typo3/sysext/version/cm1/index.php
        * Fixed bug #10956: Validation issue: Trimming empty <strong> in typo3/alt_intro.php when module has no module label

    2009-06-04  Rupert Germann  <rupi@gmx.li>

        * New feature #11260: Speed up t3lib_div::xml2array by adding a two level cache (thanks to Fabrizio Branca)

    2009-06-04  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #11257: t3lib_cache_backend_dbbackend->collectGarbage() deletes entries without lifetime (thanks to Fabrizio Branca)
        * Cleanup: Cleanup iterations in t3lib_timeTrack->printTSlog()
        * Cleanup: Use PHP_SAPI constant instead of php_sapi_name() calls

    2009-06-03  Benjamin Mack  <benni@typo3.org>

        * Followup to #10320: Split css styled content templates in version templates to get rid of the compat version checks (now the updater in the installer only shows up when there is something to do)

    2009-06-03  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11258: t3lib_cache_backend_ApcBackend::set() error in exception message (thanks to Fabrizio Branca)

    2009-06-03  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #9811: Adding Faroese flag to website languages

    2009-06-03  Jeff Segars  <jeff@webempoweredchurch.org.org>

        * Followup to #10597: Fixed bad call to the admin panel within fe_edit

    2009-06-03  Ernesto Baschny  <ernst@cron-it.de>

        * Added feature #11107: CSC: Provides more flexible rendering for the images block in "text with image", e.g. less tags (and no DL) around "single images without caption"

    2009-06-03  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11262: Recycler fails with Ext JS 3
        * Follow-up #11117: move typo3-theme to t3skin (renamed to xtheme-t3skin.css)
        * Update #11117: Update Ext JS to 3.0 RC2, added typo3be-theme

    2009-06-03  Benjamin Mack  <benni@typo3.org>

        * Fixed #11234: Deprecate formatSize and checkEmail functions
        * Followup to #11148: Remove static require_once() to t3lib and tslib and use autoloading instead - re-added require_once() for the services classes

    2009-06-03  Francois Suter  <francois@typo3.org>

        * Fixed bug #3527: Mail Form validation: wrong encoding in JS pop-up
        * Clean up: #11250: Validation error in typo3/stylesheet.css

    2009-06-02  Oliver Hader  <oliver@typo3.org>

        * Follow-up to #10597: Fixed wrong initialization of locallang file for admin panel labels

    2009-06-02  Jeff Segars  <jeff@webempoweredchurch.org>

        * Follow-up to #10597: Removed hardcoded reference to fe_edit and updated extGetFeAdminValue() call to use tslib_AdminPanel

    2009-06-02  Steffen Kamper  <info@sk-typo3.de>

        * Added feature #11241: Feature: Add TYPO3_USER_SETTINGS to configuration module
        * Fixed bug #11019: User Setup Rewrite #4 - User settings now configurable with $GLOBALS['TYPO3_USER_SETTINGS']

    2009-06-02  Benjamin Mack  <benni@typo3.org>

        * Followup to #11148: Remove static require_once() to t3lib and tslib and use autoloading instead - removed more require_once() statements

    2009-06-02  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #9818: Enable <del> instead of <strike> in lib.parseFunc_RTE.allowTags by default (credits Susanne Moog)

    2009-06-01  Jeff Segars  <jeff@webempoweredchurch.org>

        * Added feature #11167: Add method for saving and closing a record.

    2009-06-01  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #10865: Using User-Setting "titleLen" in element browser

    2009-05-31  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11216: getModuleTemplate is prepended with backPath always. Now syntax EXT:extkey/templatefile is supported.

    2009-05-31  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #11176: LogicException is thrown if spl_autoload() fails with PHP 5.2.0

    2009-05-31  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #11233: Log module has an unwanted margin
        * Fixed bug #11232: User Admin module has an unwanted margin (Thanks to Dan Osipov)
        * Fixed bug #11218: Typo in typo3/init.php

    2009-05-30  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #3569: <legend>Search form</legend> is hardcoded (Thanks to Krystian Szymukowicz)

    2009-05-29  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #11166: loadPrototype() called in frontend editing without a valid doc instance.

    2009-05-28  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to #11207 changed filename to lower case in Hook-array

    2009-05-28  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #10744: Icon path calculated incorrectly in t3lib_tceforms->getIcon()

    2009-05-28  Steffen Kamper  <info@sk-typo3.de>

        * Added feature #11207 Hook in typo3/class.webPageTree.php -> wrapTitle

    2009-05-27  Patrick Broens  <patrick@patrickbroens.nl>

        * Fixed bug #11124: Validation issue: End tag for "br" omitted, but OMITTAG NO was specified in typo3/mod/tools/em/class.em_index.php
        * Fixed bug #11125: Validation issue: End tag for "br" omitted, but OMITTAG NO was specified in various files of typo3/mod/user/ws/
        * Fixed bug #11126: Validation issue: End tag for "br" omitted, but OMITTAG NO was specified in typo3/mod/web/perm/index.php
        * Fixed bug #11127: Validation issue: End tag for "br" omitted, but OMITTAG NO was specified in typo3/sysext/belog/mod/index.php
        * Fixed bug #11128: Validation issue: End tag for "br" omitted, but OMITTAG NO was specified in typo3/sysext/cms/layout/db_layout.php
        * Fixed bug #11129: Validation issue: End tag for "br" omitted, but OMITTAG NO was specified in various files in typo3/sysext/cms/web_info/
        * Fixed bug #11133: Validation issue: End tag for "br" omitted, but OMITTAG NO was specified in typo3/sysext/impexp/modfunc1/class.tx_impexp_modfunc1.php
        * Fixed bug #11134: Validation issue: End tag for "br" omitted, but OMITTAG NO was specified in typo3/sysext/indexed_search/modfunc1/class.tx_indexedsearch_modfunc1.php
        * Fixed bug #11135: Validation issue: End tag for "br" omitted, but OMITTAG NO was specified in various files in typo3/sysext/info_pagetsconfig/
        * Fixed bug #11136: Validation issue: End tag for "br" omitted, but OMITTAG NO was specified in various files in typo3/sysext/lowlevel/
        * Fixed bug #11137: Validation issue: End tag for "br" omitted, but OMITTAG NO was specified in typo3/sysext/t3editor/class.tx_t3editor.php

    2009-05-26  Patrick Broens  <patrick@patrickbroens.nl>

        * Fixed bug #11106: Validation issue: End tag for "br" omitted, but OMITTAG NO was specified in typo3/alt_db_navframe.php
        * Fixed bug #11121: Validation issue: End tag for "br" omitted, but OMITTAG NO was specified in typo3/alt_doc.php
        * Fixed bug #11122: Validation issue: End tag for "br" omitted, but OMITTAG NO was specified in typo3/file_newfolder.php
        * Fixed bug #11123: Validation issue: End tag for "br" omitted, but OMITTAG NO was specified in typo3/init.php

    2009-05-25  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #11169: Syntax error in ADOdb PDO-SQLite driver

    2009-05-23  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.3.0alpha3

    2009-05-23  Oliver Hader  <oliver@typo3.org>

        * Follow-up to #10597: Faulty call to frontend editing instance instead of admin panel
        * Fixed bug #11039: Simulating frontend user groups via admin panel does not work
        * Cleanup: Fixed formatting issues in t3lib PHP files
        * Cleanup: Fixed formatting issues in typo3 and test PHP files

    2009-05-22  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to #9994: preg_replace doesn't work with entities_to_utf8 (class.t3lib_cs.php)
        * Follow-up to #9994: preg_replace doesn't work with highlight xml (class.t3lib_syntaxhl.php)
        * Follow-up to #11044: mass uploader didn't worked because missing settings

    2009-05-22  Oliver Hader  <oliver@typo3.org>

        * Cleanup: Fixed ChangeLog
        * Fixed bug #10816: tslib_content calls deprecated function makeInstanceClassName (thanks to Susanne Moog)
        * Cleanup: Updated NEWS.txt
        * Follow-up to feature #10455: Enable system extension recycler by default
        * Fixed bug #10597: Admin panel is not available anymore when extension fe_edit is not installed
        * Reverted bug #11087 from rev 5441: Selecting more than one item in a selector box is not possible anymore
        * Added feature #11148: Remove static require_once() to t3lib and tslib and use autoloading instead
        * Fixed bug #11152: Warning in Import/Export Module (thanks to Susanne Moog & Rupert Germann)
        * Follow-up to #11044: Changing to a backend module was not possible anymore in Internet Explorer (thanks to Steffen Kamper)

    2009-05-22  Rupert Germann  <rupi@gmx.li>

        * Added feature #11074: Add more information to the list of extensions in EM import mode (thanks to Steffen Mueller)

    2009-05-21  Steffen Kamper  <info@sk-typo3.de>

        * Reverted bug #11038 from rev 5451: gr_list and loginUser are not set properly in TSFE anymore
        * Fixed bug #11022: DBAL does not support SQL having "+" (used in cache management)  (thanks to Xavier Perseguers)
        * Fixed bug #8231: DBAL's bug admin_get_charsets() on a non-object (thanks to Xavier Perseguers)

    2009-05-20  Oliver Hader  <oliver@typo3.org>

        * Added feature #11153: Integrate t3lib_div::requireFile() for simple require() calls
        * Follow-up to feature #9633: XCLASSes did not work for autoloaded class files
        * Fixed bug #11156: Misbehaviours due to integration of autoloader (XCLASSes)
        * Fixed bug #11156: Misbehaviours due to integration of autoloader (includeLibs in frontend)
        * Follow-up to bug #11156: Fixed further misbehaviour of includeLibs in frontend

    2009-05-20  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to #11044: moved the relogin stuff to extra file, used TYPO3.LLL.core for the labels
        * Fixed bug #10861: Eval of double2 doesn't work
        * Fixed bug #10994: allow using custom adapter for Ext JS

    2009-05-19  Sebastian Kurfuerst  <sebastian@typo3.org>

        * Updated Extbase revisions to 680; that fixed a small issue on registering plugins

    2009-05-19  Oliver Hader  <oliver@typo3.org>

        * Added feature #9633: Implement autoloading for TYPO3
        * Follow-up to feature #9633: Enabled autoloading in TYPO3 Core
        * Follow-up to feature #9633: Added abstract classes to registry and check whether extension key could be resolved
        * Fixed bug #11038: Optimize loading of frontend user groups

    2009-05-19  Steffen Kamper  <info@sk-typo3.de>

        * Cleanup #11044: Move inline JS to external file in backend.php

    2009-05-19  Bernhard Kraft  <bernhard@typo3.org>

        * Fixed bug #11079: cache_pages timeout alway set to 3600 seconds

    2009-05-19  Ingo Renner  <ingo@typo3.org>

        * Follow up to #8561: Checkboxes and labels are aligned badly if in one line (credits Susanne Moog)

    2009-05-19  Benjamin Mack  <benni@typo3.org>

        * Fixed #11087 and #6372: TCEForm does not replace the existing element if adding a new element to a field with maxitems=1

    2009-05-19  Francois Suter  <francois@typo3.org>

        * Clean up #11118: Reduce memory usage of db_list_extra

    2009-05-18  Sebastian Kurfuerst  <sebastian@typo3.org>

        * New Feature #1110: Added Extbase and Fluid to System Extensions via svn:externals.

    2009-05-18  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #8701: Bug: options.moduleMenuCollapsable = 0 doesn't have any effect

    2009-05-18  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #11094: CSC: maxWInText setting was being ignored (since #10320).

    2009-05-18  Benjamin Mack  <benni@typo3.org>

        * Feature #10639: Integration of the Mass File Uploader (based on SWFUpload and Ext JS)
        * Fixed bug #11111 / Follow-up to #10892: Root item cannot be collapsed in pagetree (Thanks to Andreas Wolf)
        * Fixed bug #11112 / Follow-up to #10892: Collapsing nodes in pagetree produces multiple items with same id (Thanks to Andreas Wolf)

    2009-05-16  Francois Suter  <francois@typo3.org>

        * Follow-up to #9994: an unclosed bracket caused a parse error in t3lib_htmlmail

    2009-05-16  Karsten Dambekalns  <karsten@typo3.org>

        * Fixed bug #9994: ereg* is deprecated in PHP 5.3 alpha3
        * Fixed bug #11099: DB check breaks with MySQL in ANSI mode due to double quotes

    2009-05-16  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #10165: FlexForms: wrong mm-relations after copy and localize (thanks to Peter Kuehn)

    2009-05-15  Christian Jul Jensen  <julle@typo3.org>

        * Fixed bug #11098: Enable CC and BCC in t3lib_htmlmail

    2009-05-14  Benjamin Mack  <benni@typo3.org>

        * Feature #10673: CSS-Styled-Content "uploads" - the filelist can now be manipulated by TS, added a new property "tt_content.uploads.20.filePath" with stdWrap properties to dynamically fetch all files from a filePath

    2009-05-13  Benjamin Mack  <benni@typo3.org>

        * Cleanup #11077: Changed the version of css_styled_content to 1.0.0 and marked it as stable (as it is stable since 4.0)
        * Changed UI-Bug #F3282: Replace three icons from the oldskin in t3skin (fatalerror, ok, info)

    2009-05-13  Michael Stucki  <michael@typo3.org>

        * Fixed bug #11063: Wrong Content-length header breaks frontend output in some cases (thanks to Georg Kuehnberger)

    2009-05-12  Patrick Broens  <patrick@patrickbroens.nl>

        * Fixed bug #11058: Validation issue: <input type="image"> can't have height and width attribute in typo3/alt_doc.php
        * Fixed bug #11059: Validation issue: duplicate specification of attribute "class" in t3lib/class.t3lib_tceforms.php

    2009-05-08  Patrick Broens  <patrick@patrickbroens.nl>

        * Fixed bug #11017: Validation issue: various errors and warnings in typo3/sysext/tsconfig_help/mod1/index.php

    2009-05-08  Francois Suter  <francois@typo3.org>

        * Fixed bug: #11006: Tooltip for page path in Page/List module is missing (thanks to Steffen Gebert)

    2009-05-08  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #11053: TYPO3_DB uses $GLOBALS['TYPO3_DB'] instead of $this (thanks to Stefan Geith)

    2009-05-08  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11040: ENGINE modifier in ext_tables.sql cannot be parsed

    2009-05-07  Oliver Hader  <oliver@typo3.org>

        * Added feature #10986: Convert from extension prefix to extension key

    2009-05-06  Bernhard Kraft  <bernhard@typo3.org>

        * Fixed bug #6395: External TypoScripts files will always be cached

    2009-05-06  Oliver Hader  <oliver@typo3.org>

        * Cleanup: Added public static definitions to TSpagegen

    2009-05-06  Francois Suter  <francois@typo3.org>

        * Clean up/feature: #10523: New install tool colors, matching t3skin (thanks to Susanne Moog)

    2009-05-05  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #10050: Traversing back page records used in CONTENT object does not work on root page
        * Fixed bug #8212: IRRE - Adding new child elements does not work on root page

    2009-05-05  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Updated rsaauth version number to 1.0.0

    2009-05-04  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Added feature #11016: Implement RSA authentication for BE and FE -- part 1 (add rsaauth system extension)
        * Added feature #11016: Implement RSA authentication for BE and FE -- part 2 (fix hard-coded stuff in the TYPO3 login procedure)

    2009-05-03  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #11024: Typo issue in t3lib_cache_backend_DbBackend (thanks to Xavier Perseguers)
        * Added feature #10985: Conversion from camelcase to underscores, and back (thanks to Jochen Rau)
        * Added feature #10666: Integrate automatic line breaks in GIFBUILDER

    2009-05-01  Patrick Broens  <patrick@patrickbroens.nl>

        * Fixed bug #10967: Validation issue: unescaped & or unknown entity "&returnUrl" in typo3/file_list.php
        * Fixed bug #10968: Validation issue: Missing </form> in typo3/file_newfolder.php
        * Fixed bug #10969: Validation issue: Missing </form> in typo3/file_rename.php
        * Fixed bug #10970: Validation issue: Missing </div> in typo3/sysext/cms/layout/db_new_content_el.php

    2009-04-30  Francois Suter  <francois@typo3.org>

        * Added feature: #10651: Add <abbr> tag to hints SL, GL, SGL in EM (thanks to Steffen Gebert)

    2009-04-29  Steffen Kamper  <info@sk-typo3.de>

        * Added feature #10158: Credits to coredevs

    2009-04-29  Oliver Hader  <oliver@typo3.org>

        * Added feature #10869: Integrate hook to pre-process the frontend rendering

    2009-04-28  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #11003: htmlArea RTE: empty mutuallyExclusiveClasses array may cause js error

    2009-04-28  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #9991: Localize versioning module
        * Fixed bug #10550: Listview: default limits are hardcoded
        * Fixed bug #10698: Filecache: Clear all caches doesn't clear tags directory

    2009-04-28  Oliver Hader  <oliver@typo3.org>

        * Cleanup: Fixed whitespaces in admin panel
        * Fixed bug #10331: linkHandler different than "record" leads to rteerror (thanks to Martin Holtz)

    2009-04-27  Steffen Kamper  <info@sk-typo3.de>

        * Update #10975: Update Ext JS to 2.2.1, added Ext-Core, YUI and jquery adapters

    2009-04-27  Francois Suter  <francois@typo3.org>

        * Clean up #10711: Move hard-coded indexed_search tca labels to locallang file (thanks to Andy Grunwald)

    2009-04-27  Patrick Broens  <patrick@patrickbroens.nl>

        * Fixed bug #10950: XML prologue always after doctype declaration in BE template building
        * Fixed bug #10954: Validation issue: Images with empty attributes in Module menu  in BE

    2009-04-24  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #10949: Clean up sysext usersetup module code - part 2
        * Fixed bug #4298: Functions -> Multiple pages creates pages in reverse order (page ids decreasing) (Thanks to Dimitriy Simakov and Christian Kuhn)

    2009-04-24  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #10979: class localRecordList should use $this->fixedL from class recordList instead of own logic
        * Fixed bug #10977: Copyright in TYPO3 comment still 2008 (Thanks to Johannes Feustel)
        * Added feature #9876: Provide $severity in t3lib_div::sysLog() Hook (Thanks to Michael Stucki)
        * Fixed bug #10823: IRRE long titles on groupdb fields are displayed wrong (<span title) (Thanks to Nabil Saleh)

    2009-04-24  Patrick Broens  <patrick@patrickbroens.nl>

        * Fixed bug #10952: Iframe produced by typo3/backend.php has proprietary attribute "noresize"
        * Fixed bug #10953: Validation issue: <a> attribute "href" lacks value in shortcut menu

    2009-04-23  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10964: Ext JS prototype-adapter leads to several IE-errors

    2009-04-22  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10947: It is not possible to add buttons to the docheader (added hook in template.php)

    2009-04-22  Patrick Broens  <patrick@patrickbroens.nl>

        * Fixed bug #10948: Validation issues in typo3/alt_db_navframe.php

    2009-04-21  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10892: Make it possible to style a hover color for pagetree/filetree items

    2009-04-21  Patrick Broens  <patrick@patrickbroens.nl>

        * Fixed bug #10939: Wrong nesting of <ul> <li> tags in expanded mount root in module file > filelist

    2009-04-21  Francois Suter  <francois@typo3.org>

        * Follow up to #10320 (again): t3lib_extMgm::addStaticFile() call did not reflect changes in location of static templates in css_styled_content (from 2009-04-20)

    2009-04-21  Ingo Renner  <ingo@typo3.org>

        * Changed icons in t3skin for new file, file upload
        * Fixed icon in t3skin for refresh

    2009-04-20  Francois Suter  <francois@typo3.org>

        * Follow up to #10320: Move current version of static files of css_styled_content from static/current/*.txt back to static/*.txt

    2009-04-20  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10759: RemoveXSS is incompatible with PHP >= 5.2.8

    2009-04-19  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10919: Hide View-icon in listview with doktypes 254 and 255

    2009-04-17  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10827: Hide "Save and View"-button when editing a content-element

    2009-04-17  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #2178: template::getTabMenu doubles ampersands (thanks to Stefano Kowalke)

    2009-04-16  Oliver Hader  <oliver@typo3.org>

        * Added feature #10725: Integrate possibility to determine maximum of multiple values in GIFBUILDER

    2009-04-16  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10735: Wrong returnUrl with clipboard actions

    2009-04-15  Tobias Liebig  <mail_typo3@etobi.de>

        * Fixed issue #8103: t3editor / typoscript on the right side of an operator is not tokenized (needed to enable codecompletion behind copy or reference operator)
        * Fixed issue #9051: t3editor / On Mac Os X the key combination CMD+LEFT will close the t3editor
        * Fixed issue #10899: bugfixes for t3editor codecompletion (credits to Stephan Petzl and Christian Kartnig)

    2009-04-10  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #10866: extra Ext JS onready code not loaded with template.php
        * Fixed bug #10867: Ext JS localization doesn't work
        * Fixed bug #9076: iso-ir-109 detected as iso-8859-2 instead of iso-8859-3
        * Added feature #10888: support for Unix locales Norwegian bokmal and nynorsk

    2009-04-09  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed issue #10847: htmlArea RTE: undo/redo is erratic in IE8
        * Fixed issue #10665: RTE in FE loads stylesheet with title attribute which prevents Firefox from applying the stylesheet

    2009-04-09  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #8882: drag & drop of section elements and IRRE records does not work if frame has to be scrolled (thanks to Sebastian Fuchs & Helmut Hummel)

    2009-04-08  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #10266: No user authentication for >1 TYPO3 installation under one domain (Thanks to Marcus Krause)

    2009-04-07  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #10737: Add xmlns attribute to html tag in backend

    2009-04-06  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow-up to issue #10834: htmlArea RTE: IE8 now uses standard name for DOM class attribute

    2009-04-06  Oliver Hader  <oliver@typo3.org>

        * Follow-up to feature #9703: Admin panel cannot not be dragged

    2009-04-05  Oliver Hader  <oliver@typo3.org>

        * Follow-up to bug #10025: Searching for ImageMagick in basic configuration does not work

    2009-04-05  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow-up to issue #10834: htmlArea RTE: IE8 now uses standard name for DOM class attribute
        * Added feature #10848: htmlArea RTE: Streamline some functions in class.tx_rtehtmlarea_base.php

    2009-04-04  Steffen Kamper  <info@sk-typo3.de>

        * Fixed issue #10764: Use new JS-function for loading prototype/scriptaculous/extJS

    2009-04-03  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed issue #10837: htmlArea RTE: IE8 reports unknown "complete" attribute on img nodes
        * Fixed bug #10836: htmlArea RTE: RTE leaves unwanted id attribute on inserted table in IE8
        * Added feature #10842: htmlArea RTE: Let IE8 display language marks like other browsers do
        * Fixed bug #10843: htmlArea RTE: IE7 complains when reference is made to attribute xml:lang
        * Fixed bug #10844: htmlArea RTE: IE8 creates erroneous ranges when selection is empty
        * Fixed bug #10845: htmlArea RTE: Incorrect XCLASS in class.tx_rtehtmlarea_editormode.php
        * Fixed bug #10846: htmlArea RTE: Missing icon in default skin of Language extension
        * Updated htmlArea RTE manual
        * Updated htmlArea RTE version to 1.8.2

    2009-04-03  Patrick Broens  <patrick@patrickbroens.nl>

        * Fixed bug #10783: Make workspaces icons skinnable

    2009-04-03  Ingo Renner  <ingo@typo3.org>

        * Added feature #9703: Integrate EXT: ingmar_admpanelwrap
        * Fixed bug #10838: t3lib_cs->utf8_decode() does not check whether the target charset is utf8

    2009-04-02  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed issue #10834: htmlArea RTE: IE8 now uses standard name for DOM class attribute
        * Fixed issue #10747: htmlArea RTE: Inserting a table in IE8 may fail

    2009-04-01  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to bug #10025: Command identify does not work with the argument to strip profile data of images

    2009-03-31  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #10567: Added IE8+ support / Get rid of browser version dependent t3lib_div::clientInfo() (Thanks to Steffen Gebert)
        * Added feature #10717: Introduce a new function to t3lib_div::getMaxUploadFileSize() to have a central function to detect the maximum upload limit

    2009-03-31  Oliver Hader  <oliver@typo3.org>

        * Follow-up to bug #10025: Enabled to cut off image profiles for image resizing by default
        * Fixed bug #10190: Call to undefined method t3lib_div::calluserfunc() in class.tslib_fe.php
        * Fixed bug #10431: Call to undefined method SC_wizard_list::printContent()

    2009-03-30  Francois Suter  <francois@typo3.org>

        * Added feature #10320: Split CSS styled content templates in version templates to get rid of the compat version checks (thanks to Susanne Moog)

    2009-03-30  Benjamin Mack  <benni@typo3.org>

        * Added feature #10718: Make tce_file usable via AJAX, uploads, file manipulation etc via AJAX in the Backend now possible

    2009-03-27  Francois Suter  <francois@typo3.org>

        * Fixed issue #10798: Flag sectionIndex is not used for "menu of subpages + sections" (thanks to Xaviers Perseguers)

    2009-03-27  Patrick Broens  <patrick@patrickbroens.nl>

        * Fixed bug #10777: Make versioning module icon skinnable
        * Fixed bug #10768: Small rendering/css bug on FE with Text with image

    2009-03-27  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10773: TCA change for BE_USER (admin with less fields, admin checkbox on first tab)
        * Fixed bug #10796: Click on (WS 48hour-) preview link in versioning module causes a fatal error
        * Fixed bug #10025: ImageMagick generates larger than necessary files

    2009-03-27  Michael Stucki  <michael@typo3.org>

        * Added feature #10734: Indicate number of USER_INT objects used on a page in Admin Panel

    2009-03-26  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #10776: Clearing cache_treelist after inserting page on root level does not work

    2009-03-26  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #10723: Ambiguous description of the "lifetime" option in Install Tool (thanks to Dan Osipov)

    2009-03-26  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #5957: Misleading comments in class.t3lib_extmgm.php

    2009-03-24  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10642: Backend admin cannot perform file operations in filelist (credits to Christian Kuhn)
        * Fixed bug #10761: Searching for specific record opens "edit record" in wrong frame

    2009-03-23  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10432: Page TS option to disable available languages (thanks to Xavier Perseguers)
        * Fixed bug #10765: doc->loadScriptaculous should be callable without parameters

    2009-03-21  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #10663: felogin - Invalid XHTML Code in logout form (thanks to Stano Paska)

    2009-03-20  Oliver Hader  <oliver@typo3.org>

        * Added feature #10748: Provide complete title in element browser if title was cut off
        * Fixed bug #10742: LOCAL_LANG default values are overwritten by localized text (thanks to Mathias Gisch)

    2009-03-19  Oliver Hader  <oliver@typo3.org>

        * Fixed issue #10713: Refactor tslib_gifBuilder::calcOffset()

    2009-03-18  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10607: Missing localization in TCA of sys_action
        * Fixed bug #9359: XML Problems with PHP5 and libxml

    2009-03-12  Stanislas Rolland  <typo3@sjbr.ca>

        * Added feature #10670: htmlArea RTE: enable alternate rendering of image click enlarge by FE plugins

    2009-03-12  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #10668: Cache section in the admin panel does not work anymore

    2009-03-11  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.3.0alpha2

    2009-03-11  Francois Suter  <francois@typo3.org>

        * Fixed issue #3682: im_version_5 is always reset to im5 when using ImageMagick 6.x (thanks to Andreas Wolf and Steffen Gebert)

    2009-03-11  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed issue #7973: htmlArea RTE: Superfluous leading bar inserted in toolbar after linebreak

    2009-03-11  Steffen Kamper  <info@sk-typo3.de>

        * Added feature #10144: enable JS-Libs in BE

    2009-03-11  Francois Suter  <francois@typo3.org>

        * Fixed issue #10573: CSH external Links in seeAlso not working (thanks to Steffen Mueller)

    2009-03-11  Oliver Hader  <oliver@typo3.org>

        * Fixed issue #10655: Upgrade script.aculo.us to latest release 1.8.2
        * Follow-up to feature #10455: Recycler is not loading in Internet Explorer 7
        * Follow-up to bug #9745: Added FileInfo for AllowOverride
        * Cleanup: Updated ext_emconf.php files in system extensions
        * Cleanup: Updated NEWS.txt

    2009-03-10  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed issue #10656: htmlArea RTE: Initialization fails in presence of Firefox extension Ant.com Toolbar 1.3

    2009-03-10  Tobias Liebig  <mail_typo3@etobi.de>

        * Fixed #10380: Update t3editor base (CodeMirror) to release 0.60
        * Fixed #10382: Bugfixes for t3editor code completion (thanks to Stephan Petzl and Christian Kartnig)

    2009-03-10  Oliver Hader  <oliver@typo3.org>

        * Cleanup: Updated NEWS.txt
        * Follow-up to issue #10614: Fixed typing error in memcached backend
        * Added feature #9078: Integrate hook in page module to render preview of records with own CType
        * Added feature #10455: Improve recycling of deleted records (thanks to Julian Kleinhans & Erik Frister)
        * Fixed bug #10648: JavaScript error is show when starting the install tool with the standard password

    2009-03-10  Francois Suter  <francois@typo3.org>

        * Added feature #10575: Add hover textbox popup (alttitle + description) for FlexForm CSH (thanks to Steffen Mueller)

    2009-03-09  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #10099: Use TYPO3_DB->exec_SELECTcountRows() to determine the number of rows
        * Follow-up to bug #10099: Added additional conversion to integer in tslib_feTCE::checkDoublePostExist()
        * Added feature #8487: Enable configuration of filesize labels for CType uploads (thanks to Tom Ruether)
        * Cleanup: Updated copyright notices

    2009-03-08  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed issue #10635: htmlArea RTE: Two typos in the manual

    2009-03-08  Jeff Segars  <jeff@webempoweredchurch.org>

        * Follow-up to feature #10155: Add controller switching for frontend editing

    2009-03-08  Ingo Renner  <ingo@typo3.org>

        * Added unit tests for the caching framework database cache backend (backported from FLOW3) (part of #10614)
        * !!! Fixed issue #10614: update the caching framework to the latest version as in FLOW3
        * Disabled a check in the DB caching backend for the existence of the specified caching table as it caused some problems

    2009-03-08  Tobias Liebig  <mail_typo3@etobi.de>

        * Fixed bug #9823: Save and close in t3editor closes without saving

    2009-03-08  Oliver Hader  <oliver@typo3.org>

        * Follow-up to feature #10565: Condition PIDinRootline did not work anymore
        * Follow-up to feature #10565: Fixed formatting in t3lib_matchCondition
        * Cleanup: Fixed ChangeLog
        * Cleanup: Changed formatting of INSTALL.txt

    2009-03-07  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow-up to feature #7970: fontstyle and fontsize should not use deprecated font tag

    2009-03-07  Benjamin Mack  <benni@typo3.org>

        * Cleanup #10601: Move static dyntabmenu code in external file
        * Added feature #10565: Speedup & cleanup t3lib_matchCondition - make use of trimExplode

    2009-03-07  Ingo Renner  <ingo@typo3.org>

        * Added unit tests for the caching framework cache manager (backported from FLOW3) (part of #10614)

    2009-03-07  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to feature #2859: Added BACK_PATH to listUrl in list module

    2009-03-06  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #5822: Indexed Search section menu includes pages with "hide in menu" flag (thanks to Andy Grunwald)

    2009-03-06  Francois Suter  <francois@typo3.org>

        * Added feature #5466: Page selector for the list module (thanks to Christian Kuhn and Dmitry Pikhno)

    2009-03-06  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #10610: htmlArea RTE: Two errors in class.tx_rtehtmlarea_acronym.php (Thanks to Ursula Renziehausen).
        * Fixed bug #6947: RTEfullScreenWidth by default please !

    2009-03-05  Benjamin Mack  <benni@typo3.org>

        * Fixed #10600: Cleaned up sysext usersetup module code (part 1) and the table method in template.php

    2009-03-05  Ingo Renner  <ingo@typo3.org>

        * Added unit tests for the caching framework file backend (backported from FLOW3) (part of #10614)
        * Added unit tests for the caching framework memcached backend (backported from FLOW3) (part of #10614)
        * Added unit tests for the caching framework APC backend (backported from FLOW3) (part of #10614)
        * Added unit tests for the caching framework abstract frontend (backported from FLOW3) (part of #10614)
        * Added unit tests for the caching framework variable frontend (backported from FLOW3) (part of #10614)
        * Added unit tests for the caching framework string frontend (backported from FLOW3) (part of #10614)

    2009-03-04  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #10599: Set extAdmEnabled=true when enabling frontend editing for extension compatibility

    2009-03-04  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9974: Use PHP built-in gzip/deflate compression in Frontend

    2009-03-03  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #9779: t3lib_div::trimExplode limit parameter leads to wrong result with non-empty requirement
        * Fixed bug #10497: Mark t3lib_div::makeInstanceClassName() as deprecated
        * Fixed bug #10581: Use $this->fixedL for list title length

    2009-03-03  Michael Stucki  <michael@typo3.org>

        * TEMPORARY (remove when solved): Disable output of deprecation messages until error handling is implemented.

    2009-03-03  Benjamin Mack  <benni@typo3.org>

        * Fixed #9783: Updated prototype.js to the latest 1.6.0.3 release (thanks to Steffen Gebert)

    2009-03-01  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #10528: Wrong content in pagetree frame after page creation in Opera

    2009-03-01  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #10535: Call to deprecated fixed_lgd_pre() in class.t3lib_timetrack.php (Thanks to Uschi Renziehausen and Christian Kuhn)

    2009-02-28  Benjamin Mack  <benni@typo3.org>

        * Added feature #2859: List view should have 'collapse' / 'expand' functionality for all list types (Thanks to Christian Kuhn)
        * Fixed bug #4367: Reset recs with clear_all should reset as array, not as string (Thanks to Christian Kuhn)

    2009-02-27  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #10372: Clean up frontend editing actions

    2009-02-27  Francois Suter  <francois@typo3.org>

        * Added feature #10333: Configurable Subcategories for ext_conf_template.txt and TS constant editor (thanks to Stefan Geith)

    2009-02-27  Michael Stucki  <michael@typo3.org>

        * Fixed bug #3949: Files in typo3temp/GB have wrong permissions (thanks to Christian Kuhn)
        * Fixed bug #10131: Use TYPO3 encryption key in initial state of random byte generation (ported from TYPO3_4-2, thanks to Marcus Krause)
        * Follow-up to #10083: Constant styles.content.imgtext.separateRows has a wrong default value. This was changed accidentally during a bugfix on 2009-01-09. Reverting back to the old bahaviour. Thanks to Adrian Fischer for pointing this out!

    2009-02-27  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #10210: Admin tools > User Admin icons point to wrong user in Opera browser (credits David Steeb)
        * Fixed bug #10259: Link to CLI Script in Check DP->ReferenceIndex Script is wrong (credits Daniel Krupke)
        * Fixed bug #10560: element browser title length is hardcoded
        * Fixed bug #5618: Wrong cropping of multi-byte $TCA field (credits Michael Miousse)
        * Fixed bug #10511: simplify and speed up t3lib_div::trimExplode()

    2009-02-27  Francois Suter  <francois@typo3.org>

        * Fixed bug #10417: Remove debugging code from sysext t3skin (thanks to Markus Krause)

    2009-02-27  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #10536: Hardcoded backend main dir in typo3/classes/class.typo3logo.php (Thanks to Christian Kuhn)
        * Fixed bug #3871: Hardcoded css for versioning symbol in list module (Thanks to Christian Kuhn)
        * Fixed bug #10490: Code cleanup/Bugfix: Add some sql_free_result to the admin_get_* functions (Thanks to Oliver Klee)

    2009-02-27  Francois Suter  <francois@typo3.org>

        * Fixed bug #10516: Typos in the Core: change "accesible" to "accessible" (Thanks to Daniel Krupke)
        * Fixed bug #10313: Fileadmin-module wrongly allows creation of trailing dot directories on UTF8 FS (Thanks to Steffen Gebert). Actually this led to a complete rewrite of t3lib_basicFileFunctions::cleanFileName() method.

    2009-02-25  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #10547: htmlArea RTE: tx_rtehtmlarea_clearrtecache::clearTempDir should use resolveBackPath

    2009-02-25  Kasper Skaarhoj  <kasper@typo3.org>

        * Added feature: Extra hook argument to the external link handler (credits to Hassan Ait Abdellah)

    2009-02-23  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #10531: htmlArea RTE: JS error may be raised by Opera on page unload
        * Fixed bug #10532: htmlArea RTE: language code of lang attribute should be lower case

    2009-02-22  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to bug #9439: Renamed pageTS option (newContentElements => newContentElement)

    2009-02-23  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9745: Add INSTALL.txt to TYPO3 source package

    2009-02-22  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #10524: htmlArea RTE: Language feature may raise JS error when RTE loads
        * Fixed bug #10525: htmlArea RTE: Language feature always requires Static Info Tables

    2009-02-22  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10283: Cleanup: Make unit test names more readable by adding underscores as separators (thanks to Oliver Klee)

    2009-02-21  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #10519: htmlArea RTE: RTE sometimes overlaps following form element
        * Added feature #10520: htmlArea RTE: Configuration option to override RTE width

    2009-02-21  Ingo Renner  <ingo@typo3.org>

        * Added unit tests for t3lib_div::trimExplode()
        * Fixed bug #10514: Typos in NEWS.txt
        * Removed top, left, and right borders from the workspace information div in the page tree
        * Follow-up to bug #9705: Moving page in WS will hide it from editors due to missing access settings of placeholder (thanks to Marcus Krause)

    2009-02-20  Oliver Hader  <oliver@typo3.org>

        * Follow-up to bug #10452: Fixed flaws in PATH_INFO check for simulateStaticDocuments

    2009-02-20  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #8905: option+space for inserting non-braking space on Mac OSX does not work properly
        * Added feature #10510: htmlArea RTE: Allow to specify default content language in BE
        * Added feature #10513: htmlArea RTE: Improve spell checker configurability

    2009-02-19  Jeff Segars  <jeff@webempoweredchurch.org>

        * Follow-up to feature #10374: Add helper function for additional frontend editing controllers and views

    2009-02-19  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #10482: htmlArea RTE: Find & replace sometimes leaves marks in the content

    2009-02-19  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #10454: t3lib_div::makeInstanceClassName() allows to bypass checks for t3lib_Singleton

    2009-02-18  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #10479: htmlArea RTE: JS error is raised when using the delete icon on a flexform
        * Fixed bug #10453: Wrong text for "upload file" in link popup

    2009-02-18  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #10452: Evaluation PATH_INFO in tslib_fe::checkAlternativeIdMethods() sets false positives and should be moved to tx_simulatestatic

    2009-02-17  Jeff Segars  <jeff@webempoweredchurch.org>

        * Follow-up to feature #10374: Add helper function for additional frontend editing controllers and views

    2009-02-17  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9729: Ship optimal TYPO3 configuration by default

    2009-02-17  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10338: Feature: NewRecordWizard with grouping and sorting

    2009-02-16  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #10450: Typing error in simulateStaticDocuments to determine the current mode

    2009-02-16  Steffen Kamper  <info@sk-typo3.de>

        * Follow-up to bug #9439: Renamed TS mod.wizards.newContentElements to mod.wizards.newContentElement
        * Follow-up to bug #10121: Replaced extJScode with extJsCode in template.php

    2009-02-14  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10176: followUp (regression in sysaction)
        * Fixed bug #10212: Missing files in sysext install (Thanks to Marcus Krause)

    2009-02-13  Jeff Segars  <jeff@webempoweredchurch.org>

        * Added feature #10374: Add helper functions for additional frontend editing controllers and views

    2009-02-13  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #5548: cli_dispatch.phpsh will not run on CGI API (Thanks to Steffen Gebert)

    2009-02-12  Stanislas Rolland  <typo3@sjbr.ca>

        * Added feature #10428: htmlArea RTE: Remove configuration variables related to Mozilla clipboard access
        * Follow-up to feature #10416: htmlArea RTE: Add configuration options for the acronym feature

    2009-02-12  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9728: Improve performance of Prototype, Scriptaculous, Ext JS and other contributed scripts

    2009-02-11  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9805: RTE and DAM element browsers show wrong colours
        * Follow-up to feature #10339: htmlArea RTE: Move editing mode change to plugin
        * Follow-up to feature #10182: htmlArea RTE: Add support for editing lang attribute
        * Added feature #10416: htmlArea RTE: Add configuration options for the acronym feature
        * Further follow-up to feature #10182: htmlArea RTE: Add support for editing lang attribute

    2009-02-11  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #8446: Follow up, renamed "OL" to Object List in Template Object Browser

    2009-02-10  Ingo Renner  <ingo@typo3.org>

        * Fixed a bug with the module menu forgeting it's open/closed states, caused by #9136
        * Fixed look of logout button; width was fixed and thus didn't expand to fit wider labels coming from translation (credits Steffen Kamper)

    2009-02-10  Michael Stucki  <michael@typo3.org>

        * Fixed bug #10364: Jumpurl feature allows to access arbitrary files on a server (thanks to the TYPO3 Security Team and especially Marcus Krause)
        * Fixed bug #10298: Various XSS issues in the BE user admin module (thanks to Jelmer de Hen and Dmitry Dulepov)

    2009-02-08  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #9861: Second page of results in list-module with ordering flaw (credits Christian Kuhn)

    2009-02-07  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10373: Remove doubled check in tceforms

    2009-02-07  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #10368: Wrong clear.gif path in dyntabs

    2009-02-06  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10375: 2 little JS-Errors that bug IE

    2009-02-06  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #10357: Add gp as an alternative to gpvar in TS getText for a more consistent naming scheme (credits Steffen Mueller)

    2009-02-05  Francois Suter  <francois@typo3.org>

        * Fixed bug #10346: l10n_display option abusively hides field for "All" languages when set to defaultAsReadonly

    2009-02-05  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10322: Send Notification if BE is locked
        * Fixed bug #9439: New Element Wizard has no option for hiding Elements via pageTS

    2009-02-05  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #9266: Bug: strcmp() with array as parameter in t3lib_div::linkThisScript() produces warnings with PHP 5.3 (Thanks to Niels Pardon)

    2009-02-04  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #10352: htmlArea RTE: Shift+Enter raises exception in Safari
        * Fixed bug #10353: htmlArea RTE: Colouring features should check if style attribute is allowed
        * Fixed bug #10354: htmlArea RTE: Definition List extension must require the Block Elements extension

    2009-02-04  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #10351: Whitespace cleanups in t3lib_frontendedit

    2009-02-04  Ingo Renner  <ingo@typo3.org>

        * Added feature #4911: Add an option to add alternative external URL or shortcut for other languages

    2009-02-03  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow-up to bug #10326: htmlArea RTE: Cleaning on paste broken in older versions of Mozilla/Firefox
        * Fixed bug #9894: htmlArea RTE: copy/cut/paste with hotkeys does not work in some browsers/settings
        * Fixed bug #10337: htmlArea RTE: Allow Clipboard Helper does not work with Firefox 3
        * Added feature #10339: htmlArea RTE: Move editing mode change to plugin

    2009-02-03  Francois Suter  <francois@typo3.org>

        * Fixed bug #1527: t3lib_svbase: Method init returns wrong value  (thanks to Stefano Kowalke and Michael Miousse)

    2009-02-03  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #9600: Frontend Edit Panel is not compatible with subdomains and RealURL (thanks to Xavier Perseguers)
        * Added feature #10155: Add controller switching for frontend editing

    2009-02-03  Ingo Renner  <ingo@typo3.org>

        * Changed the pages description field from a one line input to a textarea

    2009-02-02  Ingo Renner  <ingo@typo3.org>

        * Fixed order of fields in TCEforms for table pages, type external URL which was inconsitant to the other types

    2009-02-01  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #10323: htmlArea RTE: hotkey CTRL+0 is not honoured
        * Fixed bug #10324: htmlArea RTE: Configured hotkeys are not honoured in Safari
        * Added feature #10325: htmlArea RTE: Make hotkey for enableWordClean feature configurable
        * Fixed bug #10326: htmlArea RTE: Cleaning on paste broken in older versions of Mozilla/Firefox

    2009-02-01  Ingo Renner  <ingo@typo3.org>

        * Fixed broken icon for the TYPO3 manual with t3skin
        * Fixed look of the logout button in Safari after the introduction of Ext JS
        * Fixed list minus bullet icon in t3skin, was missing a solid background

    2009-02-01  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10121: New template-function to add Ext JS inline code

    2009-01-31  Kasper Skaarhoj  <kasper@typo3.org>

        * Added a checkbox with the previewlink button in Web>Version module so that whole workspace can be browser (but starting out with a specific page).
        * Added a hook for processing external links made through typolink and makelinks.
        * Added backend locking feature so the existence of the file typo3conf/LOCK_BACKEND will lock down the backend for browser access. For CLI-script processing.
        * Fixed bug that add-wizard did not work with flexform fields.
        * Added feature options.view.languageOrder which allows to specify which language parameter (&L=xx) is added to the view links of the backend for a user

    2009-01-30  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #7123: Select wizard doesn't work in Safari (Thanks to Ismael Bidau)
        * Fixed bug #10282: Table definition in cache_treelist not compliant with MySQL 5.0 strict mode (Thanks to Steffen Mueller and Steffen Kamper)
        * Followup to #10094: Use foreach instead of while-list-each constructs in t3lib_TCEmain

    2009-01-30  Francois Suter  <francois@typo3.org>

        * Fixed bug #10304: Links in the warning box are not visible as links (thanks to Georg Ringer)

    2009-01-30  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10031: Icon in "text w/ picture" and "picture" does not change.
        * Fixed bug #8446: Template Objectbrowser menu
        * Fixed bug #10045 BUG missleading Errormessage with emtpy COA (thanks to Ingo Schmitt)

    2009-01-28  Kasper Skaarhoj  <kasper@typo3.org>

        * Fixed a bug in alt_doc regarding the button "Update Translation index, save and close" so that it shows under the new templatebased structure (and now it also closes the form)

    2009-01-28  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #10241: DB check ->Full search ->Advanced query always includes deleted field (Thanks to Christian Kuhn)
        * Fixed bug #10289: Pre-Cleanup for integration of a mass uploader

    2009-01-27  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #10287: Two typos in typo3-TCEforms.css (Thanks to Uschi Renziehausen)

    2009-01-27  Kasper Skaarhoj  <kasper@typo3.org>

        * This change looks irrelevant, but prevents a JS error in case the editor for "some reason" is not on the HTML page anyways. This is in fact the case if RTE's are used in nested flexforms. Admitted: The real fix should be that the RTE is not rendered as a part of the dummy-code the core carries for dynamic insertion of a new element in a nested flexform. But this quick fix at least makes for a solid workaround. The other issue is only speed related.
        * Tracking script execution times internally. For now not used. Was used for debugging. Maybe it will be useful output at a later time.
        * selectVersionsOfRecord() has been optimized. It will give a significant speed boost for the cleaner when it traverses the page tree (up to 80 times for a customer of mine! Read: 8000%!) But it will also improve backend speed in the Web > List module. It only affect websites with large amounts of versioned records (like any website with thousands or pages and tt_content elements). The optimization was to split one MySQL query into two, each of which could make use of indexes in the database, which the single combined query couldn't.
        * Fixed simple bugs in getFuncCheck() and getFuncInput()
        * Made changes to logging function calls, mainly so they include information of the page ID on which the operation took place. TODO: Go through the rest of the newlog() function calls and make them report the PID as well! It's a task that requires that you test it simultaneously in the backend that things get logged correctly.
        * Made a change to which users get notified when elements are rejected in a workspace which is set to "Notify users on next stage only": When an element is rejected only the users involved in raising the stage of the element since last rejection or creation will get notified (instead of every member of the workspace!)
        * Made a number of changes to log-display (Tools > Log): Filter on workspace, users, grouping by pages, plus option to specify a time interval manually.
        * Changed HH:MM format for log-display to HH:MM:SS (so it includes seconds). This way it can be assumed for most that all operations within in a single second for a given backend user represents a server request.

    2009-01-27  Steffen Kamper  <info@sk-typo3.de>

        Fixed bug  #10263: Multiple calls to deprecated function "fixed_lgd_pre" (thanks to Susanne Moog)
        Fixed bug  #10176: Multiple calls to deprecated function "fixed_lgd" throughout the core (thanks to Susanne Moog)
        Fixed bug  #10272: t3lib_div::fixed_lgd_cs needs a third parameter for appending a custom string to a truncated string (thanks to Uschi Renziehausen)
        Fixed bug  #10178: Toolbar menu fails if there are no menu items

    2009-01-26  Stanislas Rolland  <typo3@sjbr.ca>

        * Added feature #10182: htmlArea RTE: Add support for editing lang attribute
        * Fixed bug #9904: htmlArea RTE: RTE.default.buttons.table.properties.borderStyle.removeItems is not honored
        * Fixed bug #9905: htmlArea RTE: Table properties: Removing headers leaves an empty fieldset

    2009-01-24  Ingmar Schlecht  <ingmar@typo3.org>

        * Fixed bug #10205: DB session record is only created when user is authenticated (thanks also to Michael Stucki)

    2009-01-24  Martin Kutschker  <masi@typo3.org>

        * Added feature #10092: logging API for deprecated functions
        * Added feature #10100: logging API for deprecated TypoScript objects and properties
        * Fixed bug #10098: t3lib_div::fixed_lgd_cs calls deprecated t3lib_div::fixed_lgd

    2009-01-23  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10234: when "create new record" in list module, page (after) is last entry
        * Fixed bug #10179: sys_action menu doesn't respect hidden and returns empty ul if there are no entries

    2009-01-23  Michael Stucki  <michael@typo3.org>

        * Fixed bug #10231: split() is deprecated in PHP 5.3 (patch by Karsten Dambekalns)

    2009-01-22  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #9345: CSV export includes _CLIPBOARD_ in header row (thanks to Christian Kuhn)
        * Added feature #10220: Get some unit tests for the core (thanks to Oliver Klee)

    2009-01-21  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow-up to #10195: htmlArea RTE: Update RTE about info
        * Added feature #10219: htmlArea RTE: Clean up unused localization files
        * Fixed bug #9785: htmlArea RTE: Disabling images in RTE still leaves the toolbar button
        * Fixed bug #9965: htmlArea RTE: IE jumps down to last RTE input

    2009-01-20  Stanislas Rolland  <typo3@sjbr.ca>

        * Added feature #10206: htmlArea RTE: Allow to hide any button

    2009-01-20  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #9774: Incorrect validation of allowed classes in RTE transformation

    2009-01-20  Ingmar Schlecht  <ingmar@typo3.org>

        * Fixed bug #10186: Time shifting (again) in datetime fields (followup to Bug#8746; thanks to Ernesto Baschny)
        * Fixed bug #10146: Session fixation vulnerability in user authentication  (thanks to the TYPO3 Security Team and especially Marcus Krause)
        * Fixed bug #10159: XSS vulnerability in workspace module (thanks to the TYPO3 Security Team and especially Marcus Krause)

    2009-01-20  Ingo Renner  <ingo@typo3.org>

        * Added missing license statement for using the "Silk" icon set of Mark James according to Creative Commons Attribution 2.5
        * Fixed bug #10134: XSS vulnerability in sysext indexed_search (thanks to the TYPO3 Security Team and especially Marcus Krause)
        * Fixed bug #10133: Command execution in sysext indexed_search (thanks to the TYPO3 Security Team and especially Marcus Krause)
        * Fixed bug #10154: Weak encryption key generation vulnerability in sysext install (thanks to the TYPO3 Security Team, and especially Marcus Krause)
        * Fixed bug #9705: Moving page in WS will hide it from editors due to missing access settings of placeholder (thanks to Franz-Xaver Koch and Michael Stucki)

    2009-01-19  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10183: [felogin] redirect doesn't work with return_url

    2009-01-19  Stanislas Rolland  <typo3@sjbr.ca>

        * Added feature #10181: htmlArea RTE: Move status bar to plugin
        * Added feature #10195: htmlArea RTE: Enable the RTE in Opera 9.62+
        * Added feature #10196: htmlArea RTE: Remove extension configuration variable enableClickEnlarge
        * Fixed bug #10197: htmlArea RTE: Missing XCLASS inclusion in class.tx_rtehtmlarea_pi1.php
        * Follow-up to #10181: htmlArea RTE: Move status bar to plugin
        * Fixed bug #9935: htmlArea RTE: enableWordClean on paste does not work when hidden button is not in toolbar
        * Updated htmlArea RTE version to 1.8.1 for TYPO3 4.3.0 alpha2

    2009-01-18  Francois Suter  <francois@typo3.org>

        * Cleanup #10125: Replace deprecated function calls in sysext indexed_search (thanks to Markus Krause)

    2009-01-16  Oliver Hader  <oliver@typo3.org>

        * Follow-up to bug #10094: Fixed typing error in t3lib_TCEmain::dbAnalysisStoreExec()

    2009-01-16  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10167: Backend not usable in Internet Explorer anymore
        * Fixed bug #9307: Remove an obsolete check for disable_exec_function in filelist
        * Fixed bug #10157: t3lib/config_default.php textfile_ext should be updated to include xml and other text types
        * Fixed bug #9867: Adding T3_SERVICES to configuration modul

    2009-01-16  Bernhard Kraft  <kraftb@think-open.at>

        * Fixed bug #5497: Links in Task Center

    2009-01-15  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10057: hide/unhide page causes error when done via the context menu
        * Fixed bug #8787: titles length in list module (thanks to Stefano Cecere)

    2009-01-14  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #10064: config.admPanel has no effect (thanks to Ralf Hettinger)
        * Fixed bug #10105: htmlArea RTE: Cannot load multiple RTEs via AJAX

    2009-01-14  Stanislas Rolland  <typo3@sjbr.ca>

        * Added feature #10138: htmlArea RTE: add Clear RTE cache option to BE Clear cache menu
        * Fixed bug #10140: htmlArea RTE: Alignment of td's and th's in out-of-the-box installation

    2009-01-14  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10143 spamProtectEmailAddresses_atSubst does not work correctly if linktext contains email address with uppercase charachters (thanks to Helmut Hummel)
        * Fixed bug #9885: Add Hook to ClearCacheMenu

    2009-01-14  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #10116: Remove/protect adodb testfiles (thanks to Marcus Krause)

    2009-01-13  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #10046: Move t3lib_tceforms_fe into its own file

    2009-01-13  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #10109: Google reports duplicate title tag
        * Fixed bug #10120: Add .buildpath to svn:ignore

    2009-01-13  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #10106: IRRE - Undefined method t3lib_TCEforms_inline::addItems (thanks to Franz Holzinger)

    2009-01-12  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow-up to bug #9932: htmlArea RTE Spellcheck does not work when TYPO3 is installed in subdir

    2009-01-12  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #10104: IRRE - Controll icons in header of newly created child elements are not shown
        * Fixed bug #8991: IRRE - Sorting icons of inline records are in wrong order

    2009-01-12  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #10065: Use TYPO3 clear.gif for Ext JS in backend.php
        * Fixed bug #10066: AJAX relogin polls server too often
        * Fixed bug #10067: common.js uses undefined variable

    2009-01-11  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #5630: Install tool removes dots from admin usernames (thanks to Stefano Kowalke)
        * Fixed bug #10094: Use foreach instead of while-list-each constructs in t3lib_TCEmain
        * Added feature #10091: Integrate TYPO3_DB->exec_SELECTcountRows()
        * Follow-up to bug #10094: Wrong concatenation of arrays

    2009-01-11  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #9825: Copy / Cut icons don't respect t3skin: drag'n'drop in pagetree (credits to Susanne Moog)
        * Fixed bug #10077: Feature: Add Icons to page:module TCEform
        * Fixed bug #10084: Hardcoded "Toggle All" and " Add New" in section

    2009-01-10  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #10090: Hanging record sets in t3lib_TCEmain

    2009-01-09  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #10086: Core uses deprecated function t3lib_db->sql()
        * Fixed bug #10087: Deprecation annotations are wrong for TYPO3 3.6 and 3.5

    2009-01-09  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #10083: Constant styles.content.imgtext.separateRows is not defined

    2009-01-08  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #9194: Bug: wrong handling of 'is_in' list in TCA element type 'input' (Thanks to Vladimir Podkovanov)

    2009-01-08  Oliver Hader  <oliver@typo3.org>

        * Added feature #9674: TCEmain changes for new improved record recycling concept (thanks to Julian Kleinhans)
        * Fixed bug #9893: Syntax error in TCA types definitions of tt_content
        * Added feature #4427: Enable stdWrap for HMENU.alwaysActivePIDlist (thanks to Dan Osipov)

    2009-01-07  Francois Suter  <francois@typo3.org>

        * Fixed bug #10075: Rootline cache does not work in multilingual websites

    2009-01-06  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #9374: Code in typo3/sysext/tstemplate/ts/index.php don't match with the new CGL (Thanks to Stefano Kowalke)

    2009-01-05  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10055: Add contrib directory to list of allowed paths (thanks to Dan Osipov)
        * Fixed bug #9506: label uid shows not working
        * Fixed bug #10056: Misspelling english word "guesbooks"

    2009-01-04  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9052: Remove JS popup when login expired (co-authored with Christoph Koehler and Steffen Kamper)

    2009-01-03  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #10047: typo3/contrib is not prefixed with config.absRefPrefix
        * Fixed bug #10049: Ext JS directory structure is broken

    2009-01-02  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10043: removed deprecated function-calls in OpenID

    2009-01-01  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #4690: TCAdefaults.tt_content.imagecols = 1 is missing
        * Fixed bug #7922: stdWrap for doNotLinkIt & doNotShowLink

    2009-01-01  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #8590: Fileadmins folderoverview don`t show 'B' (for byte) after filesize (Thanks to Stefano Kowalke)
        * Fixed bug #7669: Changed elderly while(list()=each()) to foreach calls in t3lib_tstemplate (Credits Oliver Hader)
        * Fixed bug #8361: Stage change notification emails not send when publishing from Live workspace (Thanks to Andreas Wolf)
        * Fixed bug #9136: Less JS in backend.php / Framehandling problem

    2008-12-30  Oliver Hader  <oliver@typo3.org>

        * Added feature #5610: Extend TCEFORM_confObj on Page TSconfig by property keepItems

    2008-12-29  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #8746: Date/time field problem with timezone shifting when using the "+NN", "d" or "d+NN" shortcuts
        * Fixed bug #10033: Date/time field shortcut "d" doesn't work on already filled date fields since 4.2.0
        * Fixed issue that on a datetime field entering just a "date" wasn't possible: It is now, and time will be set to "0:00"

    2008-12-29  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10022: Pagecontent/Hidden has no effect
        * Added feature #9901: Enable stdWrap for expAll

    2008-12-29  Oliver Hader  <oliver@typo3.org>

        * Follow-up to bugfix #10004: Tweak corrections to update wizard for installing new system extensions

    2008-12-27  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10004: Extend UpdateWizard for install systemextensions

    2008-12-25  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #10012: TYPO3 generates incorrect ETag

    2008-12-24  Francois Suter  <francois@typo3.org>

        * Fixed bug #9948: Label rm.clearCache_pages was abusively removed from core lang file

    2008-12-23  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9999: Setting [BE][compressionLevel]=true causes problems

    2008-12-23  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #9810: ClearCacheMenu doesn't work when click on icon

    2008-12-22  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9932: htmlArea RTE Spellcheck does not work when TYPO3 is installed in subdir

    2008-12-22  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #9977: Extensions class.ext_update.php scripts are executed even when extension isn't loaded
        * Fixed bug #8492: tiny stuff in the Help Module (moved about and cshmanual to sysext)
        * Fixed bug #8205: Shortcut ends in parse_url-error
        * Fixed bug #9773: Fallback for skinImg having forceFileExtension

    2008-12-20  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #8952: Flags are missing
        * Fixed bug #8525: added Korean flag

    2008-12-20  Oliver Hader  <oliver@typo3.org>

        * Follow-up to feature #5835: Fix formatting and remove superfluous wrap in tslib_content::wrapSpace()
        * Added feature #5203: Add file operation permissions for back-end user groups (thanks to Christian Kuhn)

    2008-12-19  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #9964: Missing file icon PPT

    2008-12-18  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9772: t3lib_parsehtml_proc does not provide Page TSConfig to user-defined RTE transformations

    2008-12-18  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #7265: Submodules of Web module can't work with mod.php and the _DISPATCH system

    2008-12-18  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9944: Unneccessary wildcard string comparisons in EM (thanks to Marcus Krause)
        * Fixed bug #9947: gzip compression does not work in BE at all
        * Fixed bug #9971: A call to protected method in index_ts.php
        * Fixed bug #9886: Hardcoded error messages (Parameter Error:) in some files related to file list module (thanks to Stefano Kowalke)
        * Fixed bug #9887: Labels 'TEMP' and 'RECYCLER' are hardcoded (thanks to Stefano Kowalke)
        * Fixed bug #9978: Remove references to gzip_encode from File and Access modules
        * Fixed bug #9741: wrong anchor links with absRefPrefix option enabled (thanks to Stefan Galinski)

    2008-12-18  Thorsten Kahler  <thorsten.kahler@dkd.de>

        * Added feature #5835: get rid of clear.gif with space (thanks to Susanne Moog)

    2008-12-18  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #9511: getHtmlTemplate should use resolveBackPath. Fixes bug for extension BE modules using templates in certain environments (symlinked typo3/ dir) (thanks to Steffen Gebert)

    2008-12-17  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9596: htmlArea RTE does not work in IRRE subelements
        * Added feature #7963: htmlArea RTE css parsing: honour classes with element context selectors inside other context selectors (thanks to Mikkel Ricky)
        * Fixed bug #9969: htmlArea RTE: blindImageOptions is not honoured in TYPO3 4.3-dev

    2008-12-16  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9925: Initialization of new caching framework breaks some eID scripts

    2008-12-15  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9844: Filepermissons (RW) in filelist are hardcoded

    2008-12-12  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9884: enhancements to memcached caching backend

    2008-12-09  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #9915: Typing error in tslib_content ($gifCreateor => $gifCreator)

    2008-12-08  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #9890: sectionIndex in Menu doesn't work

    2008-12-03  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #6415: preg_replace error on PHP 5.2 sometimes resulting in empty pages (thanks to Francois Suter)

    2008-12-02  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9878: htmlArea RTE: js error may be raised when loading through IRRE Ajax call

    2008-12-02  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #6131: 'last login' of BE and FE users not shown in the BE (thanks to Christian Kuhn)
        * Fixed bug #9850: Strings 'TEMP' and 'RECYCLER' are hardcoded in the filetree (thanks to Stefano Kowalke)

    2008-12-02  Dmitry Dulepov  <dmitry@typo3.org>

        * Added feature #9852: Provide a random byte generator in TYPO3 Core (thanks to Marcus Krause)

    2008-12-01  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9645: Memcached backend is not working properly
        * Fixed bug #9790: class.gzip_encode.php fails with open_basedir restrictions
        * Fixed bug #9859: Upload files in fileadmin: Singular and plural are the same ("files") (co-authored with Stefano Kowalke)
        * Fixed bug #9860: Fileadmin: New folders: Singular and plural are the same ("folders") (co-authored with Stefano Kowalke)

    2008-12-01  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #9864: felogin: Drop languages from locallang.xml

    2008-11-29  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #9862: missing class for checkbox in t3editor

    2008-11-27  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #9797: waste of time in LIST module with LOISmode (thanks to Franz Holzinger)
        * Fixed bug #9822: New rendering method for content elements (lesser markup, cleaner code) (thanks to Susanne Moog)
        * Added feature #9742: Zebra columns for fileadmin listing (thanks to Stefano Kowalke)

    2008-11-27  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Fixed bug #8944: PHP-Error in class.em_index.php on line 4333 (thanks to Stefan Geith)

    2008-11-25  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #8561: Checkboxes and labels are aligned badly if in one line
        * Fixed bug #9725: double enquote in t3lib_htmlmail of returnPath

    2008-11-24  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9806: Mountpoints do not work across domain boundaries

    2008-11-23  Ingo Renner  <ingo@typo3.org>

        * Added feature #9813: Turn the workspace selector into a drop down toolbar item menu

    2008-11-22  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow up for feature #9775: htmlArea RTE: additional features for link insertion dialogue

    2008-11-22  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #9798: Don't show fe_users password in page module
        * Cleanup: felogin: Completed ChangeLog and raised version to 1.1.0

    2008-11-22  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #9802: Frontend plugins show PHP error if there is no TypoScript configuration

    2008-11-13  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow up for issue #9771: htmlArea RTE spellchecker not working in TYPO3 4.3-dev

    2008-11-13  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #9786: Remove duplicate JS-Files in backend.php

    2008-11-12  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.3.0alpha1

    2008-11-12  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #8903: redirect url is not passed with get/post method

    2008-11-12  Oliver Hader  <oliver@typo3.org>

        * Follow-up to feature #9654: Integrate return value depending on a found includeLibs configuration
        * Fixed bug #9747: Update function names of caching API to be consistent with FLOW3
        * Cleanup: Updated NEWS.txt
        * Added feature #9778: Improvement of removeXSS (thanks to Steffen Kamper, David Slayback)
        * Fixed bug #9748: Some extensions do not work anymore in the frontend
        * Fixed bug #9639: DB Analyzer / Compare Tool can't handle the upgrade of the cache tables (thanks to Michael Stucki)
        * Added feature #9670: Integrate code-completion for TypoScript in the t3editor (thanks to Stephan Petzl, Christian Kartnig and Tobias Liebig)

    2008-11-11  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #5714: Pagecount not correct in indexed_search

    2008-11-11  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9771: htmlArea RTE spellchecker not working in TYPO3 4.3-dev
        * Fixed bug #9755: Incorrect initialization sequence in class browse_links
        * Added feature #9775: htmlArea RTE: additional features for link insertion dialogue
        * Added feature #9776: htmlArea RTE: enable stdwrap on the image clickEnlarge a-tag

    2008-11-11  Oliver Hader  <oliver@typo3.org>

        * Follow-up to bug #5826: Wrong disposal of language object in front-end
        * Added feature #9667: Use t3lib_div::trimExplode() in t3lib_div::intExplode() (thanks to Niels Pardon)

    2008-11-11  Michael Stucki  <michael@typo3.org>

        * Fixed bug #5611: Frontend preview and simulate time is buggy

    2008-11-08  Michael Stucki  <michael@typo3.org>

        * Follow-up to bug #8399: Table index was too long after changing the field size

    2008-11-06  Oliver Hader  <oliver@typo3.org>

        * Follow-up to feature #9625: Fixed regular expression
        * Cleanup: Set SVN properties and tags

    2008-11-06  Jeff Segars  <jeff@webempoweredchurch.org>

        * Added feature #9615: Move frontend editing to a system extension.

    2008-11-04  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #9681: the Wrap for forgotMessage in the subpart ###TEMPLATE_FORGOT### does not work (credits Steffen Kamper)

    2008-11-04  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #9734: User selector in Web>Access doesn't work (thanks to Andreas Kundoch)
        * Fixed bug #9717: t3lib_parsehtml_proc removes valid attributes of SPAN tags

    2008-11-04  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #9599: felogin - Enable Caching "USER" instead of "USER_INT" (thanks to Dmitry Dulepov & Steffen Kamper)
        * Added feature #9661: Extend condition operators for globalVar (thanks to Steffen Kamper)
        * Cleanup: Specified deprecated statements
        * Follow-up to feature #9661: Re-enable matching empty globalVars

    2008-11-03  Oliver Hader  <oliver@typo3.org>

        * Added feature #9654: Enable includeLibs also for USER and COA objects
        * Fixed bug #9724: Editing shortcuts does not work anymore
        * Fixed bug #9286: Use native JSON-methods instead of 3rd party JSON script (thanks to Steffen Kamper)

    2008-11-01  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #8715: non-admins can not import pages from their own directory (thanks to Johannes Pieper)

    2008-11-01  Oliver Hader  <oliver@typo3.org>

        * Added feature #6637: Integrate possibility to reverse order of rootline HMENU (thanks to Ralf Hettinger)
        * Fixed bug #9715: Editing records with OpenDocs enabled does not work
        * Added feature #9094: Make simulate static a system extension (patch by Benjamin Mack)
        * Fixed bug #9632: Multiple fileuploads into folders with special characters (umlauts) not possible (thanks to Marcus Krause)

    2008-10-31  Jeff Segars  <jeff@webempoweredchurch.org>

        * Added feature #6626: config.fileTarget for link target on files (thanks to Ralf Hettinger)
        * Added feature #3787: New option TSFE.jumpURL_HTTPStatusCode = 30x (thanks to Stefan Geith)

    2008-10-31  Ingo Renner  <ingo@typo3.org>

        * cleanup: removed the include for an interface that is loaded in backend.php already and therefore is present always

    2008-10-31  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #9571: Additional condition required to check SSL status in class.t3lib_div.php (thanks to Christian Kuhn)
        * Fixed bug #9659: TCEmain wrongly tests required input-type fields (thanks to Francois Suter)
        * Fixed bug #8399: field tablename in sys_refindex too short (thanks to Steffen Kamper)
        * Cleanup: Updated NEWS.txt

    2008-10-31  Benjamin Mack  <benni@typo3.org>

        * Included the Javascript Widget Framework Ext JS

    2008-10-30  Ingo Renner  <ingo@typo3.org>

        * Fixed an inconsitency with between the name, the documentation and the functionality of method loadByTag() in the new caching framework

    2008-10-29  Ingo Renner  <ingo@typo3.org>

        * Added feature #9591: Integrate sys_actions into toolbar (contributions by Steffen Kamper)
        * !!! Cleanup #9678: Make TYPO3 require PHP 5.2

    2008-10-28  Ingo Renner  <ingo@typo3.org>

        * Added the manual for the OpenID system extension

    2008-10-28  Martin Kutschker  <masi@typo3.org>

        * Added feature #9625: Integrate possibility to extend TCEforms palettes easily (implementation by Oliver Hader)
        * Added feature #9474: Integrate OpenID authentication support to TYPO3 (integration by Dmitry Dulepov, OpenID library by JanRain Inc.)

    2008-10-28  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #9655: Call to t3lib_div::devLog() without key in index_ts.php (thanks to Francois Suter)
        * Fixed bug #9607: Module DB check uses hardcoded labels (thanks to Christopher Stelmaszyk)
        * Added feature ##9656: Extend t3lib_div::trimExplode to limit the number of elements
        * Follow-up to feature #9575: Return boolean value instead of filtered data
        * Fixed bug #9623: Flexform sections are not working anymore since script.aculo.us is not loaded
        * Fixed bug #9665: t3lib_BEfunc has a lot of hanging SQL record sets
        * Fixed bug #9664: EM fails on retrieving files of uppercase extension keys (thanks to Marcus Krause)
        * Added feature #7571: FeUsers in table sys_lockedrecords (thanks to Stefan Geith)
        * Added feature #8523: IRRE - Integrate possibility to define enabledControls in TCA
        * Fixed bug #5826: indexed_search: specify media types in advanced search (thanks to Steffen Kamper)

    2008-10-24  Oliver Hader  <oliver@typo3.org>

        * Follow-up to feature #9575: Return boolean value instead of filtered data

    2008-10-23  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9613: htmlArea RTE uses JScodeLibArray to insert CSS

    2008-10-22  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #8636: Hardcoded labels in Configuration module (thanks to Christopher Stelmaszyk)
        * Fixed bug #8505: String "File/Files" in Fileadmin are hardcoded (thanks to Stefano Kowalke)

    2008-10-22  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #5019: htmlArea RTE hangs while editing link in Firefox

    2008-10-21  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #9553: Form validation script jsfunc.validateform.js sometimes fails in IE (thanks to Vladimir Podkovanov)
        * Fixed bug #9608: Frontend Editing does not work anymore

    2008-10-20  Stanislas Rolland  <typo3@sjbr.ca>

        * Updated htmlArea RTE manual

    2008-10-20  Ingo Renner  <ingo@typo3.org>

        * !!! Added feature 9505: Make the caches in TYPO3 use the new caching framework

    2008-10-20  Oliver Hader  <oliver@typo3.org>

        * Cleanup: Removed GPLv3 release of Ext JS from typo3/contrib/extJS/
        * Cleanup: Fixed ChangeLog

    2008-10-20  Michael Stucki  <michael@typo3.org>

        * Follow-up on feature #8899: Rename "options.fileTree.uploadFieldsInLinkBrowser" to "options.folderTree.uploadFieldsInLinkBrowser" (patch by Steffen Kamper)

    2008-10-20  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9398: Labels in Module User Administration are hardcoded (thanks to Christopher Stelmaszyk)

    2008-10-19  Ingo Renner  <ingo@typo3.org>

        * Fixed bug 8564: Result of t3lib_BEfunc::getProcessedValue is hardcoded and therefore cannot be translated, credits Christopher Stelmaszyk

    2008-10-19  Michael Stucki  <michael@typo3.org>

        * Fixed bug #9535: Folder icons in filelist file tree don't get skinned anymore (patch by Francois Suter)
        * Fixed bug #9497: Edit in Rich Text Editor - Button does not work anymore in Web>Page (patch by Oliver Hader)

    2008-10-18  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9480: Enhance debug information with SQL data (thanks to Francois Suter for the inspiration)
        * Cleanup: Converted spaces to tabs in t3lib/t3lib_db.php
        * Fixed bug #9402: Create a common_locallang-file

    2008-10-17  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9498: Bug: EM "Check for extension updates" always warns about changes (thanks to Christian Kuhn)
        * Fixed bug #9575: use native filter_functions for validate and sanitize (thanks to Steffen Kamper)

    2008-10-14  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #9501: Titles of content columns in classic page module doesn't take into account backend charset (thanks to Steffen Kamper and Vladimir Podkovanov)
        * Added feature #9520: add a scheme to support singletons with t3lib_div::makeInstance

    2008-10-14  Ernesto Baschny  <ernst@cron-it.de>

        * Added feature #9400: enables to have specific HTTP status codes on a sys_domain record when doing a redirect (new field sys_domain.redirectHttpStatusCode)

    2008-10-14  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9523: class.t3lib_htmlmail.php produces null headers in HTML messages

    2008-10-13  Ernesto Baschny  <ernst@cron-it.de>

        * Added feature #9533: Made substituteMarkerArrayCached not so strict. Still with type hinting, but also allowing the null (uninitialized var) to be passed (to prevent several older extensions from breaking).

    2008-10-10  Stanislas Rolland  <typo3@sjbr.ca>

        * Added feature #7970: htmlArea RTE: fontstyle and fontsize should not use deprecated font tag

    2008-10-10  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9522: t3lib_BEfunc::BEenableFields generates invalid SQL
        * Fixed bug #9469: Failed to load magic database

    2008-10-08  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9516: htmlArea RTE: Move link tags to head
        * Added feature #9521: htmlArea RTE: factor out some functions dealing with inline elements
        * Added feature #7875: Coloured text is created using font-tag instead of span in IE
        * Added feature #8847: Custom colors in TYPO3Color like old SelectColor extension

    2008-10-05  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9490: htmlArea RTE: Opera 9.52 sometimes refuses to insert a node

    2008-10-04  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow-up to bug #9472: htmlArea RTE: Safari may crash when the RTE closes
        * Fixed bug #9484: htmlArea RTE: context menu raises an error when link button is not configured

    2008-10-04  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9479: Selected items are not visible after saving the form in BE

    2008-10-03  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9452: config.absRefPrefix is applied only to a fixed set of directories
        * Fixed bug #7059: Improve database performance for external database host

    2008-10-02  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9444: htmlArea RTE: Incorrect assigment of class to one line <ol> in Firefox
        * Fixed bug #9472: htmlArea RTE: Safari may crash when the RTE closes

    2008-10-01  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9464: htmlArea RTE: url auto-detect feature not working in Firefox
        * Fixed issue #9467: htmlArea RTE: cleanup in FE plugin

    2008-10-01  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #9442: SQL LIKE wildcards are not escaped correctly for list queries
        * Fixed bug #9408: Selecting by tag using wildcards does not work with database disposal of t3lib_cache

    2008-10-01  Ernesto Baschny  <ernst@cron-it.de>

        * Added feature #6525: .wrapItemAndSub property for GMENU

    2008-09-29  Stanislas Rolland  <typo3@sjbr.ca>

        * Added feature #9375: Add DTD to htmlArea RTE iframe document
        * Fixed bug #9449: htmlArea RTE: Opera sometimes raises a JavaScript error when the RTE closes

    2008-09-28  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #8518: Wrong JavaScript inclusion in t3lib_TCEforms
        * Fixed bug #9335: Internal caching in t3lib_pageSelect::getRootLine() has no effect

    2008-09-27  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9412: config.absRefPrefix can force wrong URL when linking across domains

    2008-09-26  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9386: Acronym plugin encoding problem

    2008-09-25  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed issue #9429: htmlArea RTE: Cleanup unused files

    2008-09-24  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed issue #9424: htmlArea RTE: Cleanup dialogue windows

    2008-09-23  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #9411: Editors cannot create new translations of pages

    2008-09-22  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #9401: Use debug() for sqlDebug (thanks to Steffen Kamper)

    2008-09-21  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #8719: File upload ends up in parse_url error on Windows (thanks to Steffen Kamper)

    2008-09-21  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9404: htmlArea RTE: Cleaning out deprecated extension variables

    2008-09-21  Benjamin Mack  <benni@typo3.org>

        * Followup to #9393: Small code cleanup in class.t3lib_treeview.php
        * Fixed bug #8578: Umlauts get displayed wrong in Web>Access module after updating rights (Thanks to Tobias Liebig and Susanne Moog)

    2008-09-20  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9384: FE session hijacking

    2008-09-19  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #9393: Cosmetic Code Cleanup for the cms sysext

    2008-09-18  Martin Kutschker  <masi@typo3.org>

        * Followup to bugfix #8950: clean up code
        * Fix bug #8588: Admin tools -> User Admin -> List users online broken when [BE][lockIP] is set to < 4

    2008-09-18  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9331: htmlArea RTE Acronym feature: List of unabridged terms shows wrong values
        * Fixed bug #9320: Adding a new mount-type "readonly" for temporary filemounts (thanks to Steffen Kamper)
        * Added feature #8899: Configuration of uploads and create folder in linkbrowser (thanks to Steffen Kamper and Dmitry Dulepov)

    2008-09-18  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9346: Preinitialise GLOBALS[LANG] in init.php (thanks to Steffen Kamper)

    2008-09-17  Martin Kutschker  <masi@typo3.org>

        * Added feature #1957: When deleting a record in the BE, the message should show the record label (thanks to Rob Vonk for the initial patch)
        * Added feature #8995: Extension "felogin" - replace user fields in display messages (thanks to Steffen Kamper)

    2008-09-17  Stanislas Rolland  <typo3@sjbr.ca>

        * Added feature #9370: htmlArea RTE: enhanced toggleborders feature

    2008-09-16  Stanislas Rolland  <typo3@sjbr.ca>

        * Added feature #9362: htmlArea RTE: highlight active items in context menu as in toolbar
        * Follow-up to bug #9354: htmlArea RTE: no default css rule is provided for indentation: px to em

    2008-09-16  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #9360: TypoScript Object Browser interprets HTML Tags in comments (Thanks to Stefano Kowalke)

    2008-09-15  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9310: table border colour popups appear only when textcolour button is shown
        * Fixed bug #9354: htmlArea RTE: no default css rule is provided for indentation

    2008-09-15  Ingo Renner  <ingo@typo3.org>

        * Added feature 9097: Introduce a new caching framework (backported from FLOW3)
        * Fixed bug 9283: declare marker handling functions of t3lib_parsehtml static

    2008-09-14  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #7595: Docheaders: Module Admin tools > Indexing: No docheader (Thanks to Christian Kuhn, initial patch by Patrick Broens)
        * Fixed bug #7534: Docheaders: Wizard Table: No docheader (Thanks to Christian Kuhn, initial patch by Patrick Broens)
        * Fixed bug #7536: Docheaders: Wizard Forms: No docheader (Thanks to Christian Kuhn and Steffen Kamper, initial fix by Patrick Broens)
        * Updated NEWS.txt for #9167
        * Followup to #9167: Mark extension as write protected: Option now called "excludeFromUpdates"
        * Fixed Bug #8621: Whitespace and CGL cleanup for class.tx_opendocs.php (Thanks to Stefano Kowalke)
        * Fixed Bug #847: error in tslib_fe->getFromCache() (Thanks to Susanne Moog)

    2008-09-14  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9308: htmlArea RTE: link on colour name doesn't set colour

    2008-09-14  Jeff Segars  <jeff@webempoweredchurch.org>

        * Added feature #3687: Disable "versioning" and "moreoptions"-menuitem via contextMenu.[key].disableItems in User TSconfig (thanks to Susanne Moog)
        * Fixed bug #9172: Wrong display of deleted owners and groups in Web->Access->Permissions (thanks to Johannes Pieper)
        * Added feature #7537: Wizard RTE has no docheader and is not according to new BE user interface (thanks to Patrick Broens and Christian Kuhn)
        * Added feature #7552: Docheaders for Import Export module (thanks to Patrick Broens and Christian Kuhn)

    2008-09-14  Dmitry Dulepov  <dmitry@typo3.org>

        * Reverted change from 12.09.2008 (bug #8985). I mistakenly assumed that another core developer gave +1 to it. I had two non-core +1s only.
        * Fixed bug #9313: Introduce HTTP_STATUS-Constants (thanks to Steffen Kamper)
        * Re-committed bugfix #8985 (Enable USER object to become USER_INT on the fly) because of +1 from Stanislas

    2008-09-13  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9277: Incorrect size of htmlArea RTE dialogue windows in Google Chrome browser
        * Fixed bug #9338: htmlArea RTE: incorrect opening size of some dialogue windows
        * Fixed bug #9339: htmlArea RTE: Enable resizing of acronym dialogue window in IE
        * Added feature #9340: htmlArea RTE: Configuration options for size and position of dialogue windows
        * Fixed bug #9341: htmlArea RTE: unable to disable the acronym element from the acronym feature

    2008-09-13  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9318: Enhance and fix tslib_eidtools

    2008-09-12  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #8985: Enable USER object to become USER_INT on the fly

    2008-09-11  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #8644: Usersettings with fullHelptextMode looks weird (thanks to Steffen Kamper)

    2008-09-10  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9315: Description of tslib_fe::includeTCA is incorrect

    2008-09-09  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9268: TCA is not loaded in FE when config cache is disabled

    2008-09-08  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #9312: felogin: uninitialized vars (Thanks to Steffen Kamper)
        * Fixed bug #9282: Allow subkeys for TypoScript "config." array

    2008-09-08  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow-up to bug #8996: htmlArea RTE: link to file not updated when changing case in file name
        * Fixed bug #9022: Link-Icon stays grey while trying to link an image in ie7

    2008-09-08  Oliver Hader  <oliver@typo3.org>

        * Follow-up to feature #9281: Fixed typing error

    2008-09-07  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #9285: Remove all @ in front of file_exists() calls
        * Fixed bug #9301: Missing colorization in Localization Overview of the page tree, credits Steffen Kamper

    2008-09-06  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9302: Make functions in tslib_eidtools public static

    2008-09-04  Stanislas Rolland  <typo3@sjbr.ca>

        * Added feature #9262: Adding counting classes to table rows/columns in RTE (thanks to Thorsten Krohn)
        * Fixed bug #9296: htmlArea RTE: remove upload form when element browser is in readOnly mode

    2008-09-04  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #9227: Group field in Flexforms with a single table does not show selected items

    2008-09-04  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9263: Default icon for plugins in list_type select (thanks to Steffen Kamper)

    2008-09-03  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #8491: Template Analyzer Module inconsistencies (thanks to Steffen Kamper)
        * Fixed bug #9193: Text "shortcut-icon" is untranslated (thanks to Christopher Stelmaszyk)

    2008-09-03  Ingo Renner  <ingo@typo3.org>

        * Added feature #9281: Add a method to easily do a HTTP redirect
        * Declared t3lib_div::readLLPHPfile() and t3lib_div::removeXSS() static
        * Fixed bug: When there is no TypoScript template found the message "No template found!" is not obvious, does it mean a TS template or a HTML template?

    2008-09-02  Stanislas Rolland  <typo3@sjbr.ca>

        * Added feature #9276: htmlArea RTE: allow wild cards in lists of allowed class names

    2008-09-01  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9261: Indentation set with div section in htmlArea RTE is not rendered correctly in FE
        * Added feature #8668: Configurable labels for formatblock items in htmlArea RTE

    2008-09-01  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #8508: String "Important Notice" in About Modules is hardcoded
        * Fixed bug #2222: CSH missing for localization settings of pages (thanks to Christian Kuhn)
        * Fixed bug #9249: Misspelling in Install tool (thanks to Christian Kuhn)
        * Fixed bug #2642: Bug: Directories named 0 break directory listing and you cannnot create a directory with name 0 (thanks to Rob Vonk & Christian Kuhn)

    2008-08-30  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9255: External URLs cannot be set in RTEhtmlarea anymore

    2008-08-29  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #8677: FE login redirect after logout does not work (thanks to Steffen Kamper)
        * Fixed bug #7812: cObj CONTENT should allowed on static_* tables (thanks to Georg Ringer)
        * Fixed bug #6601: fixed mount point issues with the local page tree cache
        * Added feature #6711: Enable stdWrap for the image in imageLinkWrap (thanks to Georg Ringer)
        * Fixed bug #9160: New option "index_metatags" not available in crawler / crawler-hooks (thanks to Christian Trabold)

    2008-08-27  Martin Kutschker  <masi@typo3.org>

        * Added feature #9204: Allow icons in select of tt_content CE plugin (list_type; implementation by Steffen Kamper)

    2008-08-26  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9235: Enable synchronous load of some htmlArea RTE plugins
        * Follow-up to bug #9235: Enable synchronous load of some htmlArea RTE plugins (boolean inversion)

    2008-08-25  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9196: In htmlArea RTE, unable to create an external URL containing german umlauts

    2008-08-21  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #8826: calls to ini_set produces warnings

    2008-08-20  Stanislas Rolland  <typo3@sjbr.ca>

        * Added feature #9201: Integrate support for definition list into htmlArea RTE

    2008-08-20  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #5205: pi_loadLL() + no language file == full path disclosure

    2008-08-19  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow-up to bug #9185: Incorrect initialization when hooks are present
        * Fixed bug #9197: Misbehaviour of DAM media tab in htmlArea RTE link insertion dialogue

    2008-08-18  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow-up to feature #4686: htmlArea RTE Spell Checker: add u modifier to preg_* operations
        * Follow-up to bug #8232: Creating and editing of fields, forms, etc. in FCE's is impossible if there is a section inside
        * Added feature #2714: In RTE htmlArea, unable to do an internal link with several parameters

    2008-08-18  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #8627: Translation of the belog-module (thanks to Christopher Stelmaszyk and Christian Kuhn)
        * Fixed bug #8532: enhance TYPO3 manual (inline) (thanks to Steffen Kamper, Jens Hoffman and Uschi Renziehausen)
        * Fixed bug #7921: recursive pidInList for select in cObj CONTENT (thanks to Georg Ringer)
        * Fixed bug #9141: Update Wizard uses wrong scheme to write compat_version to localconf.php
        * Fixed bug #9152: Deprecated code into stdgraphic
        * Fixed bug #9183: saveDocNew for all tables except the option is set to 0
        * Fixed bug #8232: Creating and editing of fields, forms, etc. in FCE's is impossible if there is a section inside

    2008-08-16  Stanislas Rolland  <typo3@sjbr.ca>

        * Added feature #9109: Enable altMountPoints feature in RTE element browser (Thanks to Steffen Kamper)
        * Added feature #4686: Remove dependency of htmlArea RTE Spell Checker on php extension mbstring
        * Fixed bug #9185: Redundant code in class.tx_rtehtmlarea_browse_links.php

    2008-08-15  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #6574: Template nextlevel with size=3 & allowed = 1 (Thanks to Georg Ringer)

    2008-08-14  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #9061: felogin - recursive storage pids in TypoScript (Thanks to Steffen Kamper)
        * Fixed bug #9095: xhtml in the backend by default (Thanks to Christian Kuhn)

    2008-08-14  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9167: Feature: Mark extension as write protected (together with Steffen Kamper)

    2008-08-12  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9063: Feature: Make Position of Editpanel more flexible

    2008-08-12  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #8988: htmlArea RTE: Pasting text from MS Word to Firefox 3 brings a lot of garbage
        * Follow-up to feature #8799: htmlArea RTE: correction to two path settings

    2008-08-12  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9060: Wrong alert text in Constant editor

    2008-08-11  Benjamin Mack  <benni@typo3.org>

        * Fixed #8259: Cleanup: Call to t3lib_div::devLog() without key (Thanks to Francois Suter)

    2008-08-11  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow-up to bug #8673: htmlArea RTE drag n drop tab of image insertion not functional
        * Follow-up to bug #8717: Add suggested doc extension to htmlArea RTE ext_emconf.php
        * Fixed bug #8996: htmlArea RTE: link to file not updated when changing case in file name
        * Added feature #9157: htmlArea RTE EM setting for DAM becomes deprecated with DAM 1.1+
        * Follow-up on feature #9157: htmlArea RTE EM setting for DAM - correcting test on DAM version
        * Updated htmlArea RTE version to 1.8.0 for TYPO3 4.3.0 alpha

    2008-08-11  Ingo Renner  <ingo@typo3.org>

        * Reverted Change from 2008-08-06 in t3lib_div leading to nonfunctional clipboard

    2008-08-08  Oliver Hader  <oliver@typo3.org>

        * Added feature #9075: Add record row to recStatInfoHooks in tx_cms_layout

    2008-08-08  Thomas Hempel  <thomas@typo3.org>

        * Added external JavaScript library Ext JS 2.2 to contrib

    2008-08-07  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #1897: Basic Configuration uses different scheme to write im_path to localconf.php

    2008-08-07  Ingo Renner  <ingo@typo3.org>

        * Added Feature #8515: Speed up tslib_cObj->getTreeList by caching its results

    2008-08-06  Ingo Renner  <ingo@typo3.org>

        * Fixed bug: PHP 5.3 throws a warning in class.t3lib_befunc.php on line 3348: trim() expects parameter 1 to be string, array given
        * Fixed bug: PHP 5.3 throws a deprecation warning in typo3/mod/tools/em/class.em_soap.php on lines 108, 112, 115, 213, 218: Assigning the return value of new by reference is deprecated
        * Fixed bug: PHP 5.3 throws a warning in class.t3lib_div.php on line 3286: strcmp() expects parameter 1 to be string, array given

    2008-08-05  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #8890: Feature: hook in function "getSingleField_SW" before rendering of single fields in tceforms (thanks to Alex Widschwendter)
        * Fixed bug #6992: t3ib_refindex requires t3lib_BEfunc but does not include it
        * Fixed bug #8255: Problems with PHP mail function on Windows

    2008-08-04  Stanislas Rolland  <typo3@sjbr.ca>

        * Added feature #9121: Move htmlArea RTE cut/copy/paste handling to own extension

    2008-08-03  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #8949: Table parsing doesn't allow tabs as delimiters
        * Fixed bug #8830: Missing "Save&Close" in template module Info/Modify (thanks to Steffen Kamper)

    2008-08-01  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #9099: Wrong path to pages.gif in linkbrowser (Thanks to Xander Damen)

    2008-07-31  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #2661: stdWrap filelist doesn't work directly in fileadmin/

    2008-07-30  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #5387: Creation of multiple folders in filelist module results in blank page (thanks to Christian Kuhn and Christopher Hlubek)
        * Fixed bug #9026: Label 'Sort alphabetically:' is hardcoded (thanks to Stefano Kowalke)
        * Fixed bug #8990: Labels 'TEMP' and 'RECYCLER' are hardcoded (thanks to Stefano Kowalke)

    2008-07-25  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #8498: Configuration module fixes (Thanks to Steffen Kamper)
        * Fixed bug #8853: Foldertree in filelist has no docheader (Thanks to Steffen Kamper & Christian Kuhn)
        * Fixed bug #9027: CSH was obsolete at the page-bottom in Web->Info (Thanks to Stefano Kowalke)

    2008-07-24  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9041: Uninitialized array in class.browse_links.php

    2008-07-23  Dmitry Dulepov  <dmitry@typo3.org>

        * Changed LICENSE.txt to reference GPL "version 2 or later"

    2008-07-22  Benjamin Mack  <benni@typo3.org>

        * CGL cleanup for #9008: template.php doesn't fully utilize the loadJavascriptLib function
        * Fixed Followup to #8534: "Template-able" Backend Login (correct labels)
        * Fixed bug #9008: template.php doesn't fully utilize the loadJavascriptLib function
        * Fixed bug #9019: CSH in file_upload module is not in docheader

    2008-07-21  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #8534: Backend Login is now template-able

    2008-07-19  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #8913: Empty tabs in DynTabMenu should not be selectable by default

    2008-07-14  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #8566: Unable to match TS condition when variable is not set
        * Fixed bug #8934: change compatibility version to 4.3.0 for all sysexts

    2008-07-14  Martin Kutschker  <masi@typo3.org>

        * Follow-up to bug #8510: Hardcoded labels in typo3/show_item.php (thanks to Christopher Stelmaszyk)

    2008-07-14  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #8786: missing wrapper for mysql_errno (thanks to Steffen Kamper)

    2008-07-13  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #8697: Warnings when using MySql 4.0

    2008-07-13  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #5476: links entered in <th>-tag with the RTE are not parsed on the frontend because parseFunc doesn't recognize <th> as cells (thanks to Daniel Ellermann)
        * Fixed bug #8682: no result check for setlocale via TypoScript
        * Fixed bug #8950: page id not availabe in TCEmain hook clearCachePostProc
        * Fixed bug #8510: Hardcoded labels in typo3/show_item.php (thanks to Christopher Stelmaszyk)

    2008-07-12  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #8864: Allow TS config.absRefPrefix to work with resources in typo3conf/ext. Make it work with a changed location of fileadmin/. (fix by Bejamin Mack)
        * Fixed bug #8833: TCA "check" type field checkboxes have no labels when in 1-column display (thanks to Francois Suter)
        * Fixed bug #8948: phpDoc @internal hides public functions of t3lib_div in Eclipse
        * Fixed bug #8922: setStage operation of t3lib_TCAmain::process_cmdmap() overwrites $id parameter making it inaccessible for post-processing hooks

    2008-07-11  Michael Stucki  <michael@typo3.org>

        * Fixed bug #8941: Fixed an uninitialized array that might lead to PHP warning (Thanks to Ralf Hettinger)

    2008-07-09  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #8851: navFrameScript is not loaded for submodules (thanks to Christian Ehret)
        * Fixed bug #8904: Menu of subpages renders target="{$content.pageFrameObj}" (Thanks to Steffen Kamper)

    2008-07-07  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #8703: More Options>Access wasn't being shown in the pages click-menus (Thanks to Andreas Wagner)

    2008-07-03  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #7711: Element browser ignores "Hide in menu" flag (Thanks to Christian Kuhn)
        * Fixed bug #8840: Wrong title of edit icon of "Include basis template" section when editing template records (Thanks to Christian Kuhn)

    2008-07-01  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #8506: Fileadmins folder overview need a gap between folder path and file amount (Thanks to Stefano Kowalke)

    2008-06-29  Stanislas Rolland  <typo3@sjbr.ca>

        * Added feature #8791 (revisited): Let htmlArea RTE context menu use the RTE API

    2008-06-27  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug 8314: rtehtmlarea: Argument 1 passed to t3lib_div::array_merge_recursive_overrule() must be an array, null given

    2008-06-27  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #7159: _DEFAULT_PI_VARS in felogin (Thanks to Steffen Kamper)
        * Fixed bug #8761: tree.js - Typo in function parameter highlightID
        * Fixed bug #8497: User Admin > Compare User Settings Inconsistencies (Thanks to Michiel Roos and Francois Suter)

    2008-06-26  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #8660: htmlArea RTE configuration option formatblock.restrictToItems does not work

    2008-06-25  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #8824: Missing label warning.install_enabled (thanks to Francois Suter)

    2008-06-23  Stanislas Rolland  <typo3@sjbr.ca>

        * Added feature #8799: Move htmlArea RTE undo/redo handling to own extension

    2008-06-22  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #8724: getElementsByClassName does not work properly in Firefox 3 and Safari 3.1 (thanks to Helmut Hummel)

    2008-06-21  Stanislas Rolland  <typo3@sjbr.ca>

        * Added feature #8790: htmlArea RTE image selection should honour hooking browsers
        * Added feature #8791: Let htmlArea RTE context menu use the RTE API
        * Fixed bug #8717 (cleanup): htmlArea RTE link browser does not honour correctly hooking browsers
        !!! class.tx_rtehtmlarea_browse_links.php will now use hook key ['ext/rtehtmlarea/mod3/class.tx_rtehtmlarea_browse_links.php']['browseLinksHook']
            instead of hook key ['typo3/class.browse_links.php']['browseLinksHook'] !!!

    2008-06-17  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #8717 (revisited): htmlArea RTE link browser does not honour correctly hooking browsers

    2008-06-15  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #8716: htmlArea RTE: target configured on link class not honoured
        * Fixed bug #8716 (continued for dam): htmlArea RTE: target configured on link class not honoured
        * Fixed bug #8717: htmlArea RTE link browser does not honour correctly hooking browsers

    2008-06-13  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #8239: Wrong parameter order for strpos in t3lib_div::getHostname

    2008-06-11  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #8571: Moving backend search to the right

    2008-06-11  Michael Stucki  <michael@typo3.org>

        * (security) Fixed a low-severity Cross Site Scripting issue in fe_adminLib.inc. For details, see https://typo3.org/teams/security/security-bulletins/typo3-20080611-1/ - thanks to Christian Seifert, Jeroen van Iddekinge and Arnd Messer for discovering and reporting this issue.

    2008-06-11  Ingmar Schlecht  <ingmar@typo3.org>

        * Fixed #8674: Vulnerability of security bulletin typo3-20080611-1: Default value of fileDenyPattern allows arbitrary code execution on Apache (Patch by Henning Pingel, thanks!)

    2008-06-10  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #8264: t3ditor - "+" (plus) signs are replaced by spaces (Thanks to Tobias Liebig)
        * Fixed bug 8591: AJAX encoding is UTF-8, thus has problems with backend charsets (Thanks to Tobias Liebig)

    2008-06-10  Jeff Segars  <jeff@webempoweredchurch.org>

        * Followup to bugfix #8108: Extension configuration options are not always shown (Thanks to Steffen Kamper)

    2008-06-10  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #8643: Inline CSH is not styled with t3skin (Thanks to Steffen Kamper)
        * Fixed bug #8478: highlighting error (the next line after a ">" gets colored as "value") (Thanks to Tobias Liebig)
        * Fixed bug #2905: Followup - t3skin - Styling of tab menus is bad when hovering (Thanks to Ben van't Ende)

    2008-06-10  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #8635: Side-effect of the fix for bug #7897: MM-relations, flexform and others got lost during copying/localizing

    2008-06-10  Patrick Broens  <patrick@patrickbroens.nl>

        * Fixed bug #8422: Context Sensitive Help mode with "display full text messages"

    2008-06-09  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #8509: Some labels in Module About are hardcoded, credits Christopher Stelmaszyk

    2008-06-09  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #8637: Parameter $deleteUnused of parsehtml::substituteMarkerArray was deleting too much if no $wrap was set (thanks to Francois Suter)

    2008-06-08  Thomas Hempel  <thomas@typo3.org>

        * Fixed bug #8483: Lines break when longer as the width of the window (t3editor) (Patch by Tobias Liebig)

    2008-06-05  Ingmar Schlecht  <ingmar@typo3.org>

        * Fixed bug #6998: Installation misses key-definition of table pages (Patch by Steffen Mueller)

    2008-06-05  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #8271: OpenDocs Icons: Hardcoded labels in title and alt-attributes, credits Stefano Kowalke
        * Fixed bug #8615: Text in admin panel is too small

    2008-06-05  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #8527: config.removeDefaultJS=1 leaves empty script block

    2008-06-05  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #2905: t3skin - Styling of (non-dyn) tab menus is bad

    2008-06-02  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #8572: Raise maximum TYPO3 version for t3skin to 4.3.99 (thanks to Steffen Kamper)

    2008-06-02  Ingo Renner  <ingo@typo3.org>

        * Follow-up to bug #8270: fixed some naming and CGL issues
        * Fixed bug #8033: Drag'n'drop in pagetree problem: Dragged menu items disappear under other menuitems, credits Susanne Moog
        * Fixed bug #8573: TypoScript-Help is not displayed for non-Admins, credits Steffen Kamper

    2008-06-02  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #8362: Duplicate entry for [tstamp] and [crdate] in Web->List module for single table in selector-box (thanks to Steffen Kamper)

    2008-05-31  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #8336: JavaScript error in TBE_EDITOR causes login expired dialog

    2008-05-30  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #8554: installer doesn't check DB problems when creating admin user
        * Fixed bug #8517: CSS class is missing for FE edit links (thanks to Ralf Hettinger)

    2008-05-29  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #8270: hardcoded labels in title attributes of icons in top bar of BE interface (thanks to Stefano Kowalke)

    2008-05-28  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #8522: Datetime shifts on copy and localize (timezone related)

    2008-05-28  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #8496: TCEforms: Help Icon is not in the docheader
        * Fixed bug #7837: Generate Icons by Default - Part 1
        * Fixed bug #8504: help icon is not aligned in TCEform (Thanks to Steffen Kamper)

    2008-05-28  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #8418: visual problems of BE[accessListRenderMode] (thanks to Steffen Kamper)

    2008-05-28  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #8494: Admin Tools => DB Check => Find Filename has duplicate selectboxes

    2008-05-27  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #8501: Template module - overview (together with Steffen Kamper)
        * Fixed bug #8412: typo3/file_edit.php replaces ###PATH### in the edited file with the value of $this->title (thanks to Andreas Wagner)

    2008-05-25  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #4455: pid reset to 10000 in Constant Editor

    2008-05-24  Oliver Hader  <oliver@typo3.org>

        * Set TYPO3 version to 4.3-dev and cleaned up NEWS.txt

    2008-05-24  Ingo Renner  <ingo@typo3.org>

        * Removed empty line at end of file in t3lib/thumbs.php

    2008-05-21  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #7509: TypoScript Editor doesn't save changes in IE

    2008-05-20  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #8263: t3editor should not highlight decimals (thanks to Tobias Liebig)
        * Fixed bug #8049: Save button don't work when deactivating t3editor (thanks to Tobias Liebig)

    2008-05-20  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #8445: Align group fields in TCEforms, credits Steffen Kamper
        * Fixed bug #8282: option-div is not styled in user-accesslist, credits Steffen Kamper

    2008-05-20  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #8460: Shortcutmenu needs a proper access check comment (thanks to Stefano Kowalke)
        * Fixed bug #8458: Backendsearchmenu needs a proper access check comment (thanks to Stefano Kowalke)
        * Fixed bug #8456: Browse Links does not use JS library interface

    2008-05-19  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #7860: Coloring in TS Object Browser depends on "Crop Lines" (thanks to Steffen Kamper)

    2008-05-19  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #8454: IRRE - Localization mode is not fetched correctly
        * Code cleanup: Fixed typing errors

    2008-05-18  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #6576: typolink.addQueryString adds &= to the URL if QUERY_STRING is empty

    2008-05-16  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #8277: Enable tabs in sys_workspaces  (thanks to Steffen Kamper)
        * Fixed bug #8439: Help icon in function module is double  (thanks to Steffen Kamper)
        * Fixed bug #8192: typoLink generates wrong links

    2008-05-15  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #8348: htmlArea RTE: ctrl+c and ctrl+x do not work in IE with TYPO3 4.2
        * Updated htmlArea RTE version to 1.7.5 for TYPO3 4.2.1

    2008-05-14  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #8385: Modified tslib_cObj::substituteMarkerArray() misses call parameter (thanks to Francois Suter)

    2008-05-14  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #4693: tables definition not compliant with MySQL 5.0 strict mode

    2008-05-11  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #8360: locallang.xml charset convertion dont work for LOCAL_LANG['default']

    2008-05-07  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #8351: RTE.classes configuration not honoured by htmlArea RTE Insert/modify link class selector

    2008-05-06  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #8330: Missing padding in select lists without icons (thanks to Uschi Renziehausen)
        * Fixed bug #8187: Cache Menu has problems with long names (german) (thanks to Steffen Kamper)

    2008-05-04  Dmitry Dulepov  <dmitry@typo3.org>

        * Follow-up on RFC: #7612 (cannot clear extension's FE cache from Backend) (by Oliver Klee)

    2008-05-02  Ingmar Schlecht  <ingmar@typo3.org>

        * Fixed bug #4022, #4060: TCAdefaults for MM-Fields did't work (patch by Bernhard Kraft)

    2008-04-29  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #8272: Listview - warning icon goes to new line in iconblock (thanks to Steffen Kamper)

    2008-04-28  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #8265: no links in htmlmails (thanks to Ralf Hettinger)

    2008-04-26  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #8254: htmlArea RTE sets invalid link to file selected using DAM media browser. Thanks to Xavier Perseguers.

    2008-04-26  Ingo Renner  <ingo@typo3.org>

        * Removed redundant files from t3editor

<Category:ReleaseNotes/TYPO3_4.3.x> [Category:TYPO3
4.3](Category:TYPO3_4.3 "wikilink") <Category:2009>
