Release Notes for TYPO3 4.2.2
=============================

This document contains information about TYPO3 version 4.2.2 which was
released on October 06, 2008.

News
----

This release is a bugfix release.

Download
--------

<https://typo3.org/download/>

Upgrading
---------

Nothing special to do.

Changelog
---------

    2008-10-05  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9490: htmlArea RTE: Opera 9.52 sometimes refuses to insert a node

    2008-10-04  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow-up for issue #9472: htmlArea RTE: Safari may crash when the RTE closes
        * Fixed bug #9484: htmlArea RTE: context menu raises an error when link button is not configured

    2008-10-04  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9479: Selected items are not visible after saving the form in BE

    2008-10-02  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9444: htmlArea RTE: Incorrect assigment of class to one line <ol> in Firefox
        * Updated htmlArea RTE manual
        * Fixed bug #9472: htmlArea RTE: Safari may crash when the RTE closes

    2008-10-01  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9464: htmlArea RTE: url auto-detect feature not working in Firefox

    2008-10-01  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #9442: SQL LIKE wildcards are not escaped correctly for list queries

    2008-09-29  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9449: htmlArea RTE: Opera sometimes raises a JavaScript error when the RTE closes

    2008-09-28  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #8518: Wrong JavaScript inclusion in t3lib_TCEforms
        * Fixed bug #9335: Internal caching in t3lib_pageSelect::getRootLine() has no effect

    2008-09-27  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9412: config.absRefPrefix can force wrong URL when linking across domains

    2008-09-26  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9386: Acronym plugin encoding problem

    2008-09-23  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #9411: Editors cannot create new translations of pages

    2008-09-21  Jeff Segars <jeff@webempoweredchurch.org>

      * Fixed bug #8719: File upload ends up in parse_url error on Windows (thanks to Steffen Kamper)

    2008-09-21  Benjamin Mack  <benni@typo3.org>

      * Fixed bug #8578: Umlauts get displayed wrong in Web>Access module after updating rights (Thanks to Tobias Liebig and Susanne Moog)

    2008-09-20  Dmitry Dulepov  <dmitry@typo3.org>

      * Fixed bug #9384: FE session hijacking

    2008-09-18  Martin Kutschker  <masi@typo3.org>

      * Fixed bug #8950: page id not availabe in TCEmain hook clearCachePostProc
      * Fixed bug #8588: Admin tools -> User Admin -> List users online broken when [BE][lockIP] is set to < 4

    2008-09-18  Stanislas Rolland  <typo3@sjbr.ca>

      * Fixed bug #9331: htmlArea RTE Acronym feature: List of unabridged terms shows wrong values
      * Fixed bug #9320: Adding a new mount-type "readonly" for temporary filemounts (thanks to Steffen kamper)

    2008-09-16  Stanislas Rolland  <typo3@sjbr.ca>

      * Follow up to #9354: htmlArea RTE: no default css rule is provided for indentation: px to em

    2008-09-16  Benjamin Mack  <benni@typo3.org>

      * Fixed bug #9360: TypoScript Object Browser interprets HTML Tags in comments (Thanks to Stefano Kowalke)

    2008-09-15  Stanislas Rolland  <typo3@sjbr.ca>

      * Fixed bug #9310: table border colour popups appear only when textcolour button is shown
      * Fixed bug #9354: htmlArea RTE: no default css rule is provided for indentation

    2008-09-14  Jeff Segars  <jeff@webempoweredchurch.org>

      * Fixed bug #9172: Wrong display of deleted owners and groups in Web->Access->Permissions (thanks to Johannes Pieper)

    2008-09-14  Stanislas Rolland  <typo3@sjbr.ca>

      * Fixed bug #9308: htmlArea RTE: link on colour name doesn't set colour

    2008-09-13  Stanislas Rolland  <typo3@sjbr.ca>

      * Fixed bug #9277: Incorrect size of htmlArea RTE dialogue windows in Google Chrome browser
      * Fixed bug #9338: htmlArea RTE: incorrect opening size of some dialogue windows
      * Fixed bug #9339: htmlArea RTE: Enable resizing of acronym dialogue window in IE
      * Fixed bug #9341: htmlArea RTE: unable to disable the acronym element from the acronym feature

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

      * Follow-up to issue #8996: htmlArea RTE: link to file not updated when changing case in file name
      * Fixed bug #9022: Link-Icon stays grey while trying to link an image in ie7
      * Fixed bug #3546: htmlArea RTE: wrong charset used by mb_regex in spell checker

    2008-09-07  Stanislas Rolland  <typo3@sjbr.ca>

      * Follow-up to #9296: htmlArea RTE: remove upload form when element browser is in readOnly mode

    2008-09-07  Ingo Renner  <ingo@typo3.org>

      * Fixed bug #9301: Missing colorization in Localization Overview of the page tree, credits Steffen Kamper

    2008-09-07  Martin Kutschker  <masi@typo3.org>

      * Fixed bug #8677: FE login redirect after logout does not work (thanx to Steffen Kamper)

    2008-09-04  Stanislas Rolland  <typo3@sjbr.ca>

      * Fixed bug #9296: htmlArea RTE: remove upload form when element browser is in readOnly mode

    2008-09-04  Oliver Hader  <oliver@typo3.org>

      * Fixed bug #9227: Group field in Flexforms with a single table does not show selected items

    2008-09-03  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #8532: enhance TYPO3 manual (inline)

    2008-09-02  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #8508: String "Important Notice" in About Modules is hardcoded

    2008-09-01  Stanislas Rolland  <typo3@sjbr.ca>

      * Fixed bug #9261: Indentation set with div section in htmlArea RTE is not rendered correctly in FE

    2008-09-01  Dmitry Dulepov  <dmitry@typo3.org>

      * Fixed bug #9249: Misspelling in Install tool (thanks to Christian Kuhn)
      * Fixed bug #2642: Bug: Directories named 0 break directory listing and you cannnot create a directory with name 0 (thanks to Rob Vonk & Christian Kuhn)

    2008-08-30  Stanislas Rolland  <typo3@sjbr.ca>

      * Fixed bug #9255: External URLs cannot be set in RTEhtmlarea anymore

    2008-08-29  Martin Kutschker  <masi@typo3.org>

      * Fixed bug #6601: fixed mount point issues with the local page tree cache
      * Fixed bug #9160: New option "index_metatags" not available in crawler / crawler-hooks (thanx to Christian Trabold)

    2008-08-26  Stanislas Rolland  <typo3@sjbr.ca>

      * Fixed bug #9041: Uninitialized array in class.browse_links.php

    2008-08-25  Stanislas Rolland  <typo3@sjbr.ca>

      * Fixed issue #9196: In htmlArea RTE, unable to create an external URL containing german umlauts

    2008-08-21  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #8826: calls to ini_set produces warnings

    2008-08-20  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #5205: pi_loadLL() + no language file == full path disclosure

    2008-08-19  Stanislas Rolland  <typo3@sjbr.ca>

      * Fixed bug #9197: Misbehaviour of DAM media tab in htmlArea RTE link insertion dialogue

    2008-08-18  Stanislas Rolland  <typo3@sjbr.ca>

      * Added feature #9109: Enable altMountPoints feature in RTE element browser (Thanks to Steffen Kamper)

    2008-08-18  Dmitry Dulepov  <dmitry@typo3.org>

      * Fixed bug #9141: Update Wizard uses wrong scheme to write compat_version to localconf.php
      * Fixed bug #9152: Deprecated code into stdgraphic

    2008-08-15  Benjamin Mack <benni@typo3.org>

      * Fixed bug #6574: Template nextlevel with size=3 & allowed = 1 (Thanks to Georg Ringer)

    2008-08-12  Stanislas Rolland  <typo3@sjbr.ca>

      * Fixed bug #8988: htmlArea RTE: Pasting text from MS Word to Firefox 3 brings a lot of garbage

    2008-08-11  Benjamin Mack  <benni@typo3.org>

      * Fixed #8259: Cleanup: Call to t3lib_div::devLog() without key (Thanks to Francois Suter)

    2008-08-11  Stanislas Rolland  <typo3@sjbr.ca>

      * Fixed bug #8996: htmlArea RTE: link to file not updated when changing case in file name
      * Added feature #9157: htmlArea RTE EM setting for DAM becomes deprecated with DAM 1.1+
      * Follow-up on feature #9157: htmlArea RTE EM setting for DAM - correcting test on DAM version
      * Updated htmlArea RTE version to 1.7.6 for TYPO3 4.2.2

    2008-08-11  Ingo Renner  <ingo@typo3.org>

      * Reverted Change from 2008-08-06 in t3lib_div leading to nonfunctional clipboard

    2008-08-07  Oliver Hader  <oliver@typo3.org>

      * Fixed bug #1897: Basic Configuration uses different scheme to write im_path to localconf.php

    2008-08-06  Ingo Renner  <ingo@typo3.org>

      * Fixed bug: PHP 5.3 throws a warning in class.t3lib_befunc.php on line 3348: trim() expects parameter 1 to be string, array given
      * Fixed bug: PHP 5.3 throws a deprecation warning in typo3/mod/tools/em/class.em_soap.php on lines 108, 112, 115, 213, 218: Assigning the return value of new by reference is deprecated
      * Fixed bug: PHP 5.3 throws a warning in class.t3lib_div.php on line 3286: strcmp() expects parameter 1 to be string, array given

    2008-08-05  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #6992: t3ib_refindex requires t3lib_BEfunc but does not include it
      * Fixed bug #8255: Problems with PHP mail function on Windows

    2008-08-01  Benjamin Mack  <benni@typo3.org>

      * Fixed bug #9099: Wrong path to pages.gif in linkbrowser (Thanks to Xander Damen)

    2008-07-31  Benjamin Mack  <benni@typo3.org>

      * Fixed bug #2661: stdWrap filelist doesn't work directly in fileadmin/

    2008-07-30  Martin Kutschker  <masi@typo3.org>

      * Fixed bug #8948: phpDoc @internal hides public functions of t3lib_div in Eclipse
      * Fixed bug #9076: iso-ir-109 detected as iso-8859-2 instead of iso-8859-3
      * Fixed bug #5387: Creation of multiple folders in filelist module results in blank page (thanx to Christian Kuhn and Christopher Hlubek)

    2008-07-25  Benjamin Mack  <benni@typo3.org>

      * Fixed bug #9027: CSH was obsolete at the page-bottom in Web->Info (Thanks to Stefano Kowalke)

    2008-07-23  Dmitry Dulepov  <dmitry@typo3.org>

      * Changed LICENSE.txt to reference GPL "version 2 or later"

    2008-07-19  Benjamin Mack  <benni@typo3.org>

      * Fixed bug #8913: Empty tabs in DynTabMenu should not be selectable by default

    2008-07-14  Dmitry Dulepov  <dmitry@typo3.org>

      * Fixed bug #8566: Unable to match TS condition when variable is not set

    2008-07-13  Dmitry Dulepov  <dmitry@typo3.org>

      * Fixed bug #8697: Warnings when using MySql 4.0

    2008-07-13  Martin Kutschker  <masi@typo3.org>

      * Fixed bug #5476: links entered in <th>-tag with the RTE are not parsed on the frontend because parseFunc doesn't recognize <th> as cells (thanks to Daniel Ellermann)

    2008-07-12  Martin Kutschker  <masi@typo3.org>

      * Fixed bug #8864: Make TS config.absRefPrefix work with a changed location of fileadmin/. (fix by Bejamin Mack)
      * Fixed bug #8833: TCA "check" type field checkboxes have no labels when in 1-column display (thanks to Francois Suter)
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

      * Fixed bug #8368: Problem with RTE context menu when there is more than one RTE-enabled fields on the page

    2008-06-27  Stanislas Rolland  <typo3@sjbr.ca>

      * Fixed bug 8314: rtehtmlarea: Argument 1 passed to t3lib_div::array_merge_recursive_overrule() must be an array, null given

    2008-06-27  Benjamin Mack  <benni@typo3.org>

      * Fixed bug #7159: _DEFAULT_PI_VARS in felogin (Thanks to Steffen Kamper)
      * Fixed bug #8761: tree.js - Typo in function parameter highlightID

    2008-06-26  Stanislas Rolland  <typo3@sjbr.ca>

      * Fixed bug #8660: htmlArea RTE configuration option formatblock.restrictToItems does not work

    2008-06-25  Oliver Hader  <oliver@typo3.org>

      * Fixed bug #8824: Missing label warning.install_enabled (thanks to Francois Suter)

    2008-06-23  Stanislas Rolland  <typo3@sjbr.ca>

      * Fixed bug #8792: htmlArea RTE undo is erratic in TYPO3 4.2

    2008-06-22  Oliver Hader  <oliver@typo3.org>

      * Fixed bug #8724: getElementsByClassName does not work properly in Firefox 3 and Safari 3.1 (thanks to Helmut Hummel)

    2008-06-17  Stanislas Rolland  <typo3@sjbr.ca>

      * Fixed bug #8717 (revisited): htmlArea RTE link browser does not honour correctly hooking browsers

    2008-06-15  Stanislas Rolland  <typo3@sjbr.ca>

      * Fixed bug #8716: htmlArea RTE: target configured on link class not honoured
      * Fixed bug #8716 (continued for dam): htmlArea RTE: target configured on link class not honoured
      * Fixed bug #8717: htmlArea RTE link browser does not honour correctly hooking browsers

    2008-06-13  Oliver Hader  <oliver@typo3.org>

      * Fixed bug #8239: Wrong parameter order for strpos in t3lib_div::getHostname
