Release Notes for TYPO3 4.2.13
==============================

This document contains information about TYPO3 version 4.2.13 which was
released on July 28, 2010.

News
----

This release is a bugfix release.

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

    89eb024ee32cb81827df1b73dcdac47d  dummy-4.2.13.tar.gz
    beedce3634927a6bb571087ff8606dc2  dummy-4.2.13.zip
    6c96a400c2337a8bf62035785b7cbb5b  typo3_src-4.2.13.tar.gz
    3db569cc588c66ce69e48508abe1f1a9  typo3_src-4.2.13.zip
    1eea05d285a33bbacca4479b86572ba5  typo3_src+dummy-4.2.13.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-07-28  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.2.13

    2010-07-28  Oliver Hader  <oliver@typo3.org>

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
        * Fixed bug #12736: XSS in setup module (thanks to Georg Ringer)
        * Fixed bug #13989: Mitigate PHP's RNG vulnerability (thanks to Marcus Krause and Helmut Hummel)
        * Fixed bug #12739: XSS in shortcuts (thanks to Francois Suter and Georg Ringer)
        * Fixed bug #13885: XSS in indexed search BE module (thanks to Benjamin Mack)
        * Fixed bug #15254: Extension Manager allows to edit arbitrary files if noEdit flag is not set (thanks to Helmut Hummel)
        * Fixed bug #14389: phtml is also PHP extension and should be denied editing / uploading via fileadmin (thanks to Ernesto Baschny)
        * Fixed bug #1985: XSS vulnerability in wizard classes
        * Fixed bug #14712: The GET/POST variable mimeType is used to create the http header content-type without verification (thanks to Rupert Germann)
        * Fixed bug #14412: Field value added to foreign_table_where by replacing ###REC_FIELD_THE_FIELD_NAME### is not quoted (thanks to Helmut Hummel and Xavier Perseguers)
        * Fixed bug #14114: Core mailform is open to spam abuse (thanks to Lars Houmark)
        * Fixed bug #12294: Unchecked URL-Redirect parameter in Front-End logon (thanks to Steffen Kamper and Helmut Hummel)
        * Fixed bug #13137: redirect/returnUrl isn't validated in core (thanks to Georg Ringer and Marcus Krause)

    2010-07-21  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #15179: Tree depth retrieval inconsistently limited to 20 levels int3lib_pageSelect

    2010-06-21  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #8893: eval "timesec" sets seconds to zero (Thanks to Ralf Hettinger and Andy Grunwald)

    2010-06-19  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #14464: htmlArea RTE: Type of block accumulation if the block is manually selected in Safari
        * Updated htmlArea RTE version to 1.7.16

    2010-06-10  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Fixed bug #5117: typolink: cHash corrupted due to linkVars (together with Pierre Dudoret (Popy))

    2010-05-27  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #13934: Side-effect of substr in t3lib_cs (thanks to Rens Admiraal)

    2010-05-27  Tobias Liebig  <mail_typo3@etobi.de>

        * Fixed bug #14388: TypoScript templates containing a "$1" become corrupted

    2010-05-22  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #12923: Javascript error in tmenu_layers.php & gmenu_layers.php (Thanks to Klaus Goessl)

    2010-05-22  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #14175: belog not shown / error when actions: error is selected (thanks to Philipp Thiele)

    2010-05-14  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #14337: "The install tool is locked" doesn't send no-cache headers (thanks to Steffen Gebert)

    2010-05-07  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #5003: prefixRelPath() incorrectly changes links to anchors (Thanks to Jigal van Hemert)

    2010-05-07  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #13495: Workspace tiled Preview shows same version of Page

    2010-05-05  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #12470: PHP-5.3 error: function define_syslog_variables() is deprecated (Thanks to Rupert Germann)

    2010-05-02  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #14276: tceforms: Title of a record does not use API call to limit the character

    2010-04-29  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Fixed bug #14207: Duplicate submodule URL in JavaScript
        * Fixed bug #14026: Main module does not load different navFrames in submodules in dependency of navFrameScriptParam

    2010-04-13  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Fixed bug #14027: Tweak: Add "tiff" to imagefile_ext array (Thanks to S√∏ren Malling)

    2010-04-11  Francois Suter  <francois@typo3.org>

        * Fixed bug #14005: Moving a page with IRRE records misplaces IRRE records

    2010-04-09  Michael Stucki  <michael@typo3.org>

        * Fixed bug #13959: Security precaution for extensions which use their own autoloader. Note: This is the same fix which has been committed to TYPO3 4.3 where it is marked as a security fix. However, versions prior to TYPO3 4.3 do not ship with an autoloader, so they are not affected by this problem unless an extension provides its own autoloader.

    2010-04-08  Stanislas Rolland  <typo3@sjbr.ca>

        * Updated htmlArea RTE version to 1.7.15

    2010-04-05  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #14003: "Check for extension updates" does not always find latest version

    2010-03-29  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Fixed bug #11696: External files with Umlauts/special chars in filename are not indexed
        * Fixed bug #12375: typo3temp got filled with thousands of EXTERNAL_URL* files
        * Fixed bug #1436: Meta tag output in indexed search result breaks layout

    2010-03-26  Ernesto Baschny  <ernst@cron-it.de>

        * Follow-up to #13554: Make the code in line with follow-up to #13739

    2010-03-25  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #13901: GIFBULDER generates same picture twice (in typo3temp/GB) (thanks to Vladimir Podkovanov)
        * Follow-up to #13739: Make the clickmenu work again and also for the case when "Substitute Mount Point" is not set

    2010-03-18  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #13739: "Show" clickmenu in page tree does not work for mount pages

    2010-03-15  Tobias Liebig  <mail_typo3@etobi.de>

        * Follow-up to #1104: fix 'required' validation for IRRE records

    2010-03-14  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #13283: Thumbnail generation broken for PDF files (thanks to Michael Stucki & Andy Grunwald)

    2010-03-11  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9218: htmlArea RTE: "Remove format" messes up some inline formats

    2010-03-06  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #1104: Setting file fields in TCA to "required" makes it impossible to save the record (thanks to Ingmar Schlecht & Tobias Liebig)

    2010-03-04  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #13057: htmlArea RTE sometimes deletes contents

    2010-03-04  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #13554: Web>View on mount pages via backend (thanks to Georg Ringer)

    2010-02-27  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #8191: IRRE - Storing data crashes somehow with MM tables (thanks to Peter Kuehn & Franz Koch)

    2010-02-24  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #13258: Make TYPO3 v4.2 work again with PHP 5.1 (was broke since the case since 4.2.11)
        * Fixed bug #13470: Session/Login not working in IE8 across subdomains

    2010-02-24  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #13637: [EM] Upload to TER is broken

<Category:ReleaseNotes/TYPO3_4.2.x> [Category:TYPO3
4.2](Category:TYPO3_4.2 "wikilink") <Category:2010>
