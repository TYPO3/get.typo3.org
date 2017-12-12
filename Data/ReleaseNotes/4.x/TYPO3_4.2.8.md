Release Notes for TYPO3 4.2.8
=============================

This document contains information about TYPO3 version 4.2.8 which was
released on July 3, 2009.

News
----

This release is a bugfix release.

Notes
-----

Due to a bug which was reported to us short after the release of TYPO3
versions 4.1.11 and 4.2.7, we stopped the release of the announcement
and prepared new versions that fix this (minor) issue. TYPO3 4.0.13
which was already released yesterday was not affected by this bug.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    0646c6b84a89c3f6187f4c8f62b36248  dummy-4.2.8.tar.gz
    fd9813a7d9f0a5ae9177baeed96ebfc7  dummy-4.2.8.zip
    9e3c7c72f836a4406c0ba16a728adbd9  typo3_src-4.2.8.tar.gz
    bbfd2499e91b5c91fde4189bb3af3693  typo3_src-4.2.8.zip
    ebf48ccc2b2869920651b02e9b63aed5  typo3_src+dummy-4.2.8.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2009-07-03  Michael Stucki  <michael@typo3.org>

        * Release of TYPO3 4.2.8
        * Follow-up to issue #11391: Backport of the admin button was only half-way finished, in fact it was never visible due to a missing variable

    2009-07-02  Ingo Renner  <ingo@typo3.org>

        * Release of TYPO3 4.2.7

    2009-07-01  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow-up to issue #11009: External links get prepended with base url in RTE htmlArea in Firefox 3.0.11/3.5b4

    2009-06-29  Michael Stucki  <michael@typo3.org>

        * Added feature #11391: Add a button to let admins create the file ENABLE_INSTALL_TOOL from the backend (since it is automatically removed after 1 hour since this version) - thanks to Steffen Kamper who wrote this code!

    2009-06-29  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #6215: MENU before/after* might create invalid HTML output (Thanks to Nabil Saleh)

    2009-06-28  Benjamin Mack  <benni@typo3.org>

        * Fixed #10136: tslib_pibase page browser may hurt search engines by the incorrect "Next" link (On behalf of Dmitry Dulepov)

    2009-06-23  Michael Stucki  <michael@typo3.org>

        * Fixed bug #11369: jumpUrl should only allow files not matching fileDenyPattern (thanks to Ingmar Schlecht)
        * Fixed bug #11368: Ignore ENABLE_INSTALL_TOOL file if it is older than one hour

    2009-05-18  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #11009: External Links get prepended with http://typo3 in the RTEhtmlarea in Firefox 3.0.11/3.5b4

    2009-06-02  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #11247: No labels in admin panel when editing a content element in the frontend

    2009-06-02  Christian Kuhn  <lolli@schwarzbu.ch>

        * Reverted fix for bug #2178: It introduces new behavior and leads to extensions depending on patch level releases

    2009-06-02  Steffen Kamper  <info@sk-typo3.de>

        * Reverted #9849 as this wasn't present in 4.2.0
        * Fixed bug #9849: edit-wideDocument was removed, bring it back

    2009-05-31  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #11218: Typo in typo3/init.php

    2009-05-22  Oliver Hader  <oliver@typo3.org>

        * Reverted bug #11087 from rev 5442: Selecting more than one item in a selector box is not possible anymore

    2009-05-20  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10861: Eval of double2 doesn't work

    2009-05-19  Ingo Renner  <ingo@typo3.org>

        * Follow up to #8561: Checkboxes and labels are aligned badly if in one line (credits Susanne Moog)

    2009-05-19  Benjamin Mack  <benni@typo3.org>

        * Fixed #11087 and #6372: TCEForm does not replace the existing element if adding a new element to a field with maxitems=1

    2009-05-19  Francois Suter  <francois@typo3.org>

        * Clean up #11118: Reduce memory usage of db_list_extra

    2009-05-18  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #8701: Bug: options.moduleMenuCollapsable = 0 doesn't have any effect

    2009-05-16  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #10165: FlexForms: wrong mm-relations after copy and localize (thanks to Peter Kuehn)

    2009-05-13  Michael Stucki  <michael@typo3.org>

        * Fixed bug #11063: Wrong Content-length header breaks frontend output in some cases (thanks to Georg Kuehnberger)

    2009-05-08  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #11053: TYPO3_DB uses $GLOBALS['TYPO3_DB'] instead of $this (thanks to Stefan Geith)

    2009-05-08  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11040: ENGINE modifier in ext_tables.sql cannot be parsed

    2009-05-05  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #8212: IRRE - Adding new child elements does not work on root page

    2009-04-25  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed issue #10982: htmlArea RTE: Broken link to css in some dialogue windows with Firefox 3.0.9 and TYPO3 4.2

    2009-04-24  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #10977: Copyright in TYPO3 comment still 2008 (Thanks to Johannes Feustel)
        * Fixed bug #10823: IRRE long titles on groupdb fields are displayed wrong (<span title) (Thanks to Nabil Saleh)

    2009-04-21  Patrick Broens  <patrick@patrickbroens.nl>

        * Fixed bug #10939: Wrong nesting of &lt;ul&gt; &lt;li&gt; tags in expanded mount root in module file > filelist

    2009-04-21  Ingo Renner  <ingo@typo3.org>

        * Fixed icon in t3skin for refresh

    2009-04-20  Tobias Liebig <mail_typo3@etobi.de>

        * Fixed issue #9051: t3editor / On Mac Os X the key combination CMD+LEFT will close the t3editor

    2009-04-20  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10759: RemoveXSS is incompatible with PHP >= 5.2.8

    2009-04-17  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #2178: template::getTabMenu doubles ampersands (thanks to Stefano Kowalke)

    2009-04-16  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10735: Wrong returnUrl with clipboard actions
        * Fixed bug #8795: Update button in User Admin -> Compare user settings doesn't work in IE7

    2009-04-09  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed issue #10847: htmlArea RTE: undo/redo is erratic in IE8
        * Fixed issue #10665: RTE loads skin stylesheet with title attribute which prevents Firefox from applying the stylesheet

    2009-04-09  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #8882: drag & drop of section elements and IRRE records does not work if frame has to be scrolled (thanks to Sebastian Fuchs & Helmut Hummel)

    2009-04-08  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #10266: No user authentication for >1 TYPO3 installation under one domain (Thanks to Marcus Krause)

    2009-04-06  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow-up to issue #10834: htmlArea RTE: IE8 now uses standard name for DOM class attribute

    2009-04-05  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #10203: RTE does not work in TemplaVoila FCE Section

    2009-04-04  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10761: Searching for specific record opens "edit record" in wrong frame

    2009-04-03  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed issue #10837: htmlArea RTE: IE8 reports unknown "complete" attribute on img nodes
        * Fixed bug #10836: htmlArea RTE: RTE leaves unwanted id attribute on inserted table in IE8
        * Fixed bug #10844: htmlArea RTE: IE8 creates erroneous ranges when selection is empty
        * Updated htmlArea RTE version to 1.7.10

    2009-04-03  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #10838: t3lib_cs->utf8_decode() does not check whether the target charset is utf8

    2009-04-02  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed issue #10834: htmlArea RTE: IE8 now uses standard name for DOM class attribute
        * Fixed issue #10747: htmlArea RTE: Inserting a table in IE8 may fail

    2009-03-31  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #10567: Added IE8+ support / Get rid of browser version dependent t3lib_div::clientInfo() (Thanks to Steffen Gebert)

    2009-03-31  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #10431: Call to undefined method SC_wizard_list::printContent()

    2009-03-27  Francois Suter  <francois@typo3.org>

        * Fixed issue #10798: Flag sectionIndex is not used for "menu of subpages + sections" (thanks to Xaviers Perseguers)

    2009-03-26  Patrick Broens  <patrick@patrickbroens.nl>

        * Fixed bug #10768: Small rendering/css bug on FE with Text with image

    2009-03-26  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #10723: Ambiguous description of the "lifetime" option in Install Tool (thanks to Dan Osipov)

    2009-03-23  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #10410: Generation of encryption key does not work in IE7 (thanks to Steffen Mueller)

    2009-03-21  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #10663: felogin - Invalid XHTML Code in logout form (thanks to Stano Paska)

    2009-03-20  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #10742: LOCAL_LANG default values are overwritten by localized text (thanks to Mathias Gisch)

    2009-03-18  Steffen Kamper  <info@sk-typo3.de>

        * Fixed Bug #9359: XML Problems with PHP5 and libxml

    2009-03-11  Francois Suter  <francois@typo3.org>

        * Fixed issue #10573: CSH external Links in seeAlso not working (thanks to Steffen Mueller)
        * Fixed issue #3682: im_version_5 is always reset to im5 when using ImageMagick 6.x (thanks to Andreas Wolf and Steffen Gebert)

    2009-03-10  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed issue #10656: htmlArea RTE: Initialization fails in presence of Firefox extension Ant.com Toolbar 1.3

    2009-03-10  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #10648: JavaScript error is show when starting the install tool with the standard password

    2009-03-06  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #5822: Indexed Search section menu includes pages with "hide in menu" flag (thanks to Andy Grunwald)

    2009-03-01  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #10528: Wrong content in pagetree frame after page creation in Opera

    2009-02-28  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #4367: Reset recs with clear_all should reset as array, not as string (Thanks to Christian Kuhn)

    2009-02-27  Michael Stucki  <michael@typo3.org>

        * Fixed bug #3949: Files in typo3temp/GB have wrong permissions (thanks to Christian Kuhn)
        * Follow-up to #10083: Constant styles.content.imgtext.separateRows has a wrong default value. This was changed accidentally during a bugfix on 2009-01-09. Reverting back to the old bahaviour (4.2.3 and before). Thanks to Adrian Fischer for pointing this out!

    2009-02-27  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #10210: Admin tools > User Admin icons point to wrong user in Opera browser (credits David Steeb)

    2009-02-27  Francois Suter  <francois@typo3.org>

        * Fixed bug #10417: Remove debugging code from sysext t3skin (thanks to Markus Krause)

    2009-02-27  Benjamin Mack  <benni@typo3.org>

        * Fixed Bug #10536: Hardcoded backend main dir in typo3/classes/class.typo3logo.php (Thanks to Christian Kuhn)
        * Fixed #10490: Code cleanup/Bugfix: Add some sql_free_result to the admin_get_* functions (Thanks to Oliver Klee)

    2009-02-27  Francois Suter  <francois@typo3.org>

        * Fixed bug #10313: Fileadmin-module wrongly allows creation of trailing dot directories on UTF8 FS (Thanks to Steffen Gebert)

    2009-02-21  Ingo Renner  <ingo@typo3.org>

        * Follow-up for bug #9705: Moving page in WS will hide it from editors due to missing access settings of placeholder (thanks to Marcus Krause)

    2009-02-20  Oliver Hader  <oliver@typo3.org>

        * Follow-up to bug #10451: Fixed flaws in PATH_INFO check for simulateStaticDocuments

    2009-02-20  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #8905: option+space for inserting non-braking space on Mac OSX does not work properly

    2009-02-19  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #10482: htmlArea RTE: Find & replace sometimes leaves marks in the content

    2009-02-18  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #10453: Wrong text for "upload file" in link popup

    2009-02-18  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #10451: Evaluation PATH_INFO in tslib_fe::checkAlternativeIdMethods() sets false positives

    2009-02-17  Jeff Segars <jeff@webempoweredchurch.org>

        * Fixed bug #10256: Remove references to gzip encode from File and Access modules (thanks to Thomas Hempel, backport from trunk patch by Dmitry Dulepov)

    2009-02-13  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #5548: cli_dispatch.phpsh will not run on CGI API (Thanks to Steffen Gebert)

    2009-02-11  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9805: RTE and DAM element browsers show wrong colours
