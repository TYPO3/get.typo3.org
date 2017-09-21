Release Notes for TYPO3 4.2.3
=============================

This document contains information about TYPO3 version 4.2.3 which was
released on November 10, 2008.

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

    2008-11-11  Michael Stucki  <michael@typo3.org>

        * Fixed bug #5611: Frontend preview and simulate time is buggy

    2008-11-04  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #9681: the Wrap for forgotMessage in the subpart ###TEMPLATE_FORGOT### does not work (credits Steffen Kamper)

    2008-11-04  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #9734: User selector in Web>Access doesn't work (thanks to Andreas Kundoch)
        * Fixed bug #9717: t3lib_parsehtml_proc removes valid attributes of SPAN tags

    2008-11-01  Martin Kutschker  <masi@typo3.org>

        * Fixed bug #8715: non-admins can not import pages from their own directory (thanks to Johannes Pieper)

    2008-11-01  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #9632: Multiple fileuploads into folders with special characters (umlauts) not possible (thanks to Marcus Krause)

    2008-10-31  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #9571: Additional condition required to check SSL status in class.t3lib_div.php (thanks to Christian Kuhn)
        * Fixed bug #9659: TCEmain wrongly tests required input-type fields (thanks to Francois Suter)

    2008-10-28  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #9655: Call to t3lib_div::devLog() without key in index_ts.php (thanks to Francois Suter)
        * Fixed bug #9623: Flexform sections are not working anymore since script.aculo.us is not loaded
        * Fixed bug #9664: EM fails on retrieving files of uppercase extension keys (thanks to Marcus Krause)
        * Fixed bug #9665: t3lib_BEfunc has a lot of hanging SQL record sets

    2008-10-22  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #5019: htmlARea RTE hangs while editing link in Firefox
        * Updated htmlArea RTE version to 1.7.7 for TYPO3 4.2.3
        * Fixed bug #9613: RTE uses JScodeLibArray to insert CSS

    2008-10-21  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #9553: Form validation script jsfunc.validateform.js sometimes fails in IE (thanks to Vladimir Podkovanov)
        * Fixed bug #9608: Frontend Editing does not work anymore

    2008-10-20  Stanislas Rolland  <typo3@sjbr.ca>

        * Updated htmlArea RTE manual

    2008-10-19  Michael Stucki  <michael@typo3.org>

        * Fixed bug #9535: Folder icons in filelist file tree don't get skinned anymore (patch by Francois Suter)
        * Fixed bug #9497: Edit in Rich Text Editor - Button does not work anymore in Web>Page (patch by Oliver Hader)

    2008-10-18  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9480: Bug/cleanup: Enhance debug information with SQL data

    2008-10-17  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9498: Bug: EM "Check for extension updates" always warns about changes

    2008-10-14  Martin Kutschker  <masi@typo3.org>

        * #9501: Titles of content columns in classic page module doesn't take into account backend charset (thanx to Steffen Kamper and Vladimir Podkovanov)

    2008-10-14  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9523: class.t3lib_htmlmail.php produces null headers in HTML messages

    2008-10-04  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #9522: t3lib_BEfunc::BEenableFields generates invalid SQL
        * Fixed bug #9469: Failed to load magic database

    2008-10-08  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9516: htmlARea RTE: Move link tags to head

<Category:ReleaseNotes/TYPO3_4.2.x> [Category:TYPO3
4.2](Category:TYPO3_4.2 "wikilink") <Category:2008>
