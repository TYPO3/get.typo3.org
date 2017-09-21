Release Notes for TYPO3 4.3.3
=============================

This document contains information about TYPO3 version 4.3.3 which was
released on April 9, 2010.

News
----

This release is a combined security and bugfix release.

Notes
-----

Find more details in the [security
bulletin](https://typo3.org/teams/security/security-bulletins/typo3-sa-2010-008/).

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    48339224f7c5cd4cb033541b445cedd7  dummy-4.3.3.tar.gz
    912b7d830aba87d869630935eba5dd9c  dummy-4.3.3.zip
    ecb6d38804426cfb6aedbb82fde08b5d  typo3_src-4.3.3.tar.gz
    7e9660163ce7aebeb329431f54bcb04b  typo3_src-4.3.3.zip
    8168b4dc3ea4acef8d5a20e6d746eab5  typo3_src+dummy-4.3.3.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-04-09  Michael Stucki  <michael@typo3.org>

        * Release of TYPO3 4.3.3
        * Fixed bug #13959: Core autoloader should accept class names only (could lead to remote command execution). Thanks to Helmut Hummel and Marcus Krause for providing a fix.

    2010-04-08  Stanislas Rolland  <typo3@sjbr.ca>

        * Updated htmlArea RTE version to 1.8.9

    2010-04-08  Oliver Hader  <oliver@typo3.org>

        * Cleanup #13869: Scheduler: editTasks() calls all registered tasks to edit just one (thanks to Francois Suter)

    2010-04-08  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #13828: Login cause JS error if not in frame (access to parent is not allowed)

    2010-04-06  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Fixed bug #13977: Improve OpenID association handling

    2010-04-05  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #14004: htmlArea RTE: Applying color or font repeatedly produces nested span elements

    2010-04-05  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #14003: "Check for extension updates" does not always find latest version

    2010-04-05  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #13487: No alternative icon returned from 'getIcon' (thanks to Stephan Kellermayr)
        * Fixed bug #13486: Wrong icon-state returned from 'getIcon' (thanks to Stephan Kellermayr)

    2010-04-03  Francois Suter  <francois@typo3.org>

        * Fixed bug #13625: tx_scheduler_TestTask fails to execute successfully due to missing mail initialization (thanks to Marc Bastian Heinrichs)

    2010-04-01  Tobias Liebig  <mail_typo3@etobi.de>

        * Fixed bug #13557: t3editor/codecompletion: add new typoscript properties and update tsref descriptions

    2010-04-01  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #13980: PageRenderer renderJsLibraries should be after the hook

    2010-03-30  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #13011: Bug: borders for single image rendering [css styled content] (thanks to Susanne Moog)
        * Fixed bug #11386: t3lib_cache_backend_FileBacked violates open_basedir_restrictions

    2010-03-29  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #13935: t3lib_fullsearch has a lot of hanging SQL record sets

    2010-03-29  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Fixed bug #11696: External files with Umlauts/special chars in filename are not indexed
        * Fixed bug #12375: typo3temp got filled with thousands of EXTERNAL_URL* files
        * Fixed bug #1436: Meta tag output in indexed search result breaks layout

    2010-03-28  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #13677: margin-bottom on images was missing in the "single image" rendering (thanks to Susanne Moog)

    2010-03-28  Christian Kuhn  <lolli@schwarzbu.ch>

        * Follow-up to #13273: Improve caching framework dbBackend testcase to catch not deleted rows in tag table
        * Fixed bug #13273: Caching framework sub-select is slow because mysql does not use indexes on outer query

    2010-03-27  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #12794: t3lib_TStemplate::getFileName() handles path starting with media/ as magic
        * Fixed bug #13590: felogin adds field felogin_forgotHash to tca but does not add field to database (Thanks to Fabrizio Branca)

    2010-03-26  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #13775: Missing <tr> in "Admin Tools -> User Admin" (thanks to Stephan Kellermayr)

    2010-03-26  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #13813: Using ExtJS with debug should also use debug-files of adapter

    2010-03-26  Ernesto Baschny  <ernst@cron-it.de>

        * Follow-up to #13554: Make the code in line with follow-up to #13739

    2010-03-26  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #13595: loginform has <table> stdWrap, but <div>s inside [css styled content] (Thanks to Susanne Moog)
        * Fixed bug #13792: Double semicolon in css styled content (Thanks to Susanne Moog)
        * Fixed bug #13681: Improve performance of t3lib_div::revExplode (Thanks to Nikolas Hagelstein)

    2010-03-26  Francois Suter  <francois@typo3.org>

        * Fixed bug #13716: includeCSS changed behavior, must default to media="all" (thanks to internezzo ag)
        * Fixed bug #13678: Bug: htmlmail send mail twice if cc recipient is set (thanks to Robert Heel)
        * Follow-up to #13678: Remove cleanup of recipient_copy which is now unused

    2010-03-25  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #13901: GIFBULDER generates same picture twice (in typo3temp/GB) (thanks to Vladimir Podkovanov)
        * Follow-up to #13739: Make the clickmenu work for the case when "Substitute Mount Point" is not set

    2010-03-25  Christian Kuhn  <lolli@schwarzbu.ch>

        * Follow-up to bug #11239: typolink addQueryString.exclude does not support arrays, main patch for tslib_content
        * Fixed bug #11239: typolink addQueryString.exclude does not support arrays, pre-patch to add t3lib_div::arrayDiffAssocRecursive()

    2010-03-23  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Fixed bug #9229: indexing of records containing HTML leads to concatenated words
        * Fixed bug #8933: icons in indexed search modfunc1 are not skinned

    2010-03-20  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12845: RTE link query parameters cannot contain "id="

    2010-03-18  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Fixed bug #12434: Name attribute in search form - invalid XHTML strict
        * Fixed bug #10392: Indexed search does not use config.fileTarget for files

    2010-03-18  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #13739: "Show" clickmenu in page tree does not work for mount pages

    2010-03-17  Andreas Otto  <andreas@otto-hanika.de>

        * Fixed bug #8597: Defining alternative icons with specConfs.[pid].pageIcon does not work in indexed_search (thanks to Steffen M¸ller).

    2010-03-15  Tobias Liebig  <mail_typo3@etobi.de>

        * Follow-up to #1104: fix 'required' validation for IRRE records

    2010-03-14  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #13283: Thumbnail generation broken for PDF files (thanks to Michael Stucki & Andy Grunwald)
        * Fixed bug #13690: Clean up class definition of frontendDoc in template.php
        * Fixed bug #11805: IRRE does not work correctly with FE-editing (thanks to Bjoern Pedersen)

    2010-03-14  Jochen Rau <jochen.rau@typoplanet.de>

        * Fixed bug #13371: cropHTML not honoring whole word setting

    2010-03-11  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9218: htmlArea RTE: "Remove format" messes up some inline formats

    2010-03-10  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11576: Colorpicker has no usable icon (Thanks to Stefan Geith)

    2010-03-08  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #13766: Auto-increment does not work with driver odbc_mssql [adodb]

    2010-03-06  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #1104: Setting file fields in TCA to "required" makes it impossible to save the record (thanks to Ingmar Schlecht & Tobias Liebig)

    2010-03-04  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #13057: htmlArea RTE sometimes deletes contents

    2010-03-04  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #13554: Web>View on mount pages via backend (thanks to Georg Ringer)

    2010-03-03  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #10003: t3lib_db explainOutput does not work with table alias (thanks to Dan Osipov)

    2010-02-27  Andreas Otto  <andreas@otto-hanika.de>

        * Fixed bug #13685: Recursive copy and move of alternative page languages (thanks to Albrecht Kˆhnlein)

    2010-02-27  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #8191: IRRE - Storing data crashes somehow with MM tables (thanks to Peter Kuehn & Franz Koch)

    2010-02-26  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #11562: Main module does not load different navFrames in submodules (Thanks to Erik Frister)
        * Follow-up to #13675: Use array_map() instead of array_walk()
        * Fixed bug #13675: Performance improvement: Use array_walk() for t3lib_div::intExplode (Thanks to Georg Ringer)

    2010-02-26  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #13419: sys_action: Suggest wizard doesn't work with * as table (Thanks to Georg Ringer)
        * Fixed bug #13262: replace hardcoded typo3/ with TYPO3_mainDir (Thanks to Georg Ringer)
        * Fixed bug #13591: Full search causes error if TCA has tables without any columns (Thanks to Fabrizio Branca)
        * Fixed bug #12849: Element wizard & web_list.allowedNewTables doesn't respect hiding pages (Thanks to Georg Ringer)
        * Fixed bug #13611: Replace calls to t3lib_div:: within t3lib_div to self:: due to performance reasons (Thanks to Georg Ringer)

    2010-02-25  Francois Suter  <francois@typo3.org>

        * Fixed bug #12841: Menu Update broken in EM when Using translated Backend (thanks to Steffen Ritter)

    2010-02-24  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #13470: Session/Login not working in IE8 across subdomains 

    2010-02-24  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #13637: [EM] Upload to TER is broken

    2010-02-23  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #13479: Jump to end of text when inserting paragraph

<Category:ReleaseNotes/TYPO3_4.3.x> [Category:TYPO3
4.3](Category:TYPO3_4.3 "wikilink") <Category:2010>
