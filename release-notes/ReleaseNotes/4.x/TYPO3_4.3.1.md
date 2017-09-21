Release Notes for TYPO3 4.3.1
=============================

This document contains information about TYPO3 version 4.3.1 which was
released on January 14, 2010.

News
----

This release is a combined security and bugfix release.

Notes
-----

Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-sa-2010-001/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    e404c1da2ce4e1da0dc0e65aa6908702  dummy-4.3.1.tar.gz
    ee40f70df85425f4a732d797c0089d88  dummy-4.3.1.zip
    f4a5ba3d8445b9c63b4b67034faae967  typo3_src-4.3.1.tar.gz
    510b869f28f69de60a334318bd69ffae  typo3_src-4.3.1.zip
    b927670bbf509f246c57ab04f19f2431  typo3_src+dummy-4.3.1.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-01-14  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.3.1

    2010-01-14  Dmitry Dulepov  <dmitry.dulepov+typo3svn@gmail.com>

        * Fixed bug #13146: Authentication Bypass in TYPO3 Core (OpenID)

    2010-01-14  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12947: saveDocNew saves on top instead of after (Thanks to Steffen Gebert)

    2010-01-13  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #13200: Text change: Links for additional software in install tool wrong / non-working (Thanks to Susanne Moog)
        * Fixed bug #13199: Cleanup: fileadminDir is hardcoded in several places (Thanks to Susanne Moog)
        * Fixed bug #5716: Install tool doesn't take the fileadminDir into account (Thanks to Benjamin Mack)
        * Fixed bug #12709: Forgotten flash message in user setup (Thanks to Georg Ringer)
        * Fixed bug #11968: Sporadic random Backend Logoffs / Add X-UA-Compatible flag (Thanks to Steffen Gebert)
        * Fixed bug #12924: Bugfix: t3lib_tcemain checkFullLanguageAccess is too restrictive (Thanks to Tolleiv Nietsch)
        * Fixed bug #13211: Change focus to login field when OpenId is selected at login (Thanks to Steffen Gebert)
        * Follow-up to #12781: Bug: tceforms type do not work if the type field has l10n_mode == exclude (thanks to Fabrizio Branca)

    2010-01-11  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #13092: Massuploader button is too small (Thanks to Steffen Gebert)

    2010-01-10  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #12631: Flash Message to the history / changelog (Thanks to Georg Ringer)

    2010-01-10  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #12977: treeLevel in TSconfig conditions should consider the creation of new pages

    2010-01-09  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #13191: Scheduler fails with fatal error if using intervals in cron command
        * Fixed bug #12928: SQL error in translationCount() if table does not provide deleted field (Thanks to Georg Ringer)
        * Fixed bug #12507: (Un)Install icon points to wrong extension in Opera (Thanks to Steffen Gebert)

    2010-01-08  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #13098: DB list: layout looks weird with thumbnails (Thanks to Steffen Gebert)
        * Fixed bug #13097: File list: Alternating row colors are weird with thumbnails (Thanks to Steffen Gebert)

    2010-01-08  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #12779: Previously selected type of backend login is now stored in a cookie (Thanks to Sebastian Gebhard)

    2010-01-06  Stanislas Rolland  <typo3@sjbr.ca>

        * Updated htmlArea RTE version to 1.8.7

    2010-01-05  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #12341: Image generation broken with PHPs safe_mode activated and GraphicsMagick (Thanks to Marcus Krause, Helmut Hummel and Bernhard Kraft)

    2010-01-04  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #13096: Unable to disable thumbnails with thumbnailsByDefault (Thanks to Steffen Gebert)
        * Fixed bug #13118: Toggle empty tree produces JS error (Thanks to Felix Oertel)
        * Fixed bug #12946: t3lib_div::readLLfile use debug output

    2010-01-04  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #12506: JSMENU does not respect mount point overlays (Thanks to Joerg Wagner)

    2010-01-03  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #13095: Massuploader: Max file size is shown in KB (Thanks to Steffen Gebert)

    2009-12-30  Xavier Perseguers  <typo3@perseguers.ch>

        * Raised DBAL version from 1.0.2 to 1.0.3

    2009-12-28  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #12855: t3lib/class.t3lib_page.php generates invalid queries for DBAL
        * Fixed bug #13104: SQL parser cannot parse escaped single quote in INSERT statement

    2009-12-26  Francois Suter  <francois@typo3.org>

        * Fixed bug #13100: Scheduler: Undefined enableBELog configuration option causes warnings

    2009-12-26  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #12807: Bug: CSS issues with buttons (Recycler / File Mass Uploader) (Thanks to Andreas Kundoch and Helmut Hummel)

    2009-12-26  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #13080: Uncheck function in tceforms unchecks too many items (Thanks to Georg Ringer)

    2009-12-25  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #5260: Function linkWrapFile() in file class.file_list.inc uses wrong PATH prefix

    2009-12-23  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #12987: List module: delete confirmation has extra ")" (Thanks to Steffen Gebert)
        * Fixed bug #13059: overriden user settings are not visible to the user (Thanks to Georg Ringer)

    2009-12-21  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #12505: JSMENU's showActive is broken (Thanks to Joerg Wagner)

    2009-12-19  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #13064: Deprecated function spliti for PHP5.3

    2009-12-18  Tobias Liebig  <mail_typo3@etobi.de>

        * Fixed bug #12703: t3editor/codecompletion: parser error on opening brackets on the right side of an operator

    2009-12-18  Francois Suter  <francois@typo3.org>

        * Fixed bug #12955: Missing -R option in chmod command in INSTALL.txt (thanks to Patrick Nussbaumer)

    2009-12-13  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #13003: Move back methods belonging to t3lib_sqlparser

    2009-12-12  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #13021: Mistyping prevents the CSV-export of the _PATH_field in List-View (thanks to Mathias Gisch)

    2009-12-11  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12782: htmlArea RTE: Editing a link title or target with Firefox 3 sometimes simply unlinks the link

    2009-12-11  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #12897: Cannot parse SQL hints

    2009-12-10  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #13004: htmlArea RTE: buttons.table.disableEnterParagraphs not honoured in Opera
        * Fixed bug #13007: htmlArea RTE: Toggling insertlist buttons may freeze Safari/Chrome browsers
        * Fixed bug #13008: htmlArea RTE: Ending a list may produce invalid xhtml in Safari/Chrome

    2009-12-10  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #12072: Permanent login checkbox is not shown as expected

    2009-12-09  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12682: Section links coming from RTE broken in FE

    2009-12-07  Steffen Kamper  <info@sk-typo3.de>

        * Raised felogin version from 1.2.0 to 1.3.0
        * Fixed bug #10327: [felogin] redirect does not work

    2009-12-06  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow-up to bug #12926: RTE floods BE Log with error messages from json_encode()

    2009-12-05  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12926: RTE floods BE Log with error messages from json_encode()

    2009-12-02  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12899: Wrong usage of CDATA raise javascript error
        * Fixed bug #12863: t3lib_cs::convArray converts integers to string

    2009-12-02  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12852: Missing labels for CType header in New Content Wizard (Thanks to Uschi Renziehausen)
        * Fixed bug #12843: Mulitple tests of the t3lib_PageRenderer_testcase fail
        * Fixed bug #12847: 4.3.0 install tool incorrectly reports memory limit problem

    2009-11-30  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12541: Unescaped & in urls of list module

<Category:ReleaseNotes/TYPO3_4.3.x> [Category:TYPO3
4.3](Category:TYPO3_4.3 "wikilink") <Category:2010>
