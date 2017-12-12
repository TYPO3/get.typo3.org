RELEASE NOTES FOR TYPO3 4.0.3
=============================

This document describes all the important information for the TYPO3
release 4.0.3 that where not mentioned in the official article on
typo3.org (https://typo3.org/documentation/article/release-notes-403/)

Changelog
---------

    2006-12-05  Michael Stucki  &lt;michael@typo3.org&gt;

        * Release of TYPO3 4.0.3
        * Updated font-copyright information in t3lib/fonts/readme.txt - many thanks to Christian Welzel for taking care of this!
        * Security enhancement: Prevent image access through thumbs.php. For details, see https://typo3.org/teams/security/security-bulletins/typo3-20061205-1/ - thanks to Marc Bastian Heinrichs for discovering and reporting this issue.
        * Security enhancement: Refuse BE logins of usernames starting with "_CLI_" (they are only used by real CLI scripts)

    2006-11-21  Martin Kutschker  &lt;martin.t.kutschker@blackbox.net&gt;

        * Fix a problem with PHP4 and UTF-8 byte order marks (BOM) in t3lib_div::xml2array()

    2006-11-17  Michael Stucki  &lt;michael@typo3.org&gt;

        * Fixed bug #4059: options.hideRecords.pages doesn't work for mounted pages - Thanks to Marc Bastian Heinrichs for providing a fix!
        * Fixed bug #4379: pageNotFound_handling ignores forceCharset setting
        * Fixed bug #3115: JavaScript error on clickmenu in filelist module
        * Fixed bug #4515: Input field with settings eval "date" and readOnly shows 01-01-1970 if the value is empty - Thanks to Marc Bastian Heinrichs for providing a fix!

    2006-11-16  Martin Kutschker  &lt;martin.t.kutschker@blackbox.net&gt;

        * Added freeIndexSetId GROUP BY in tx_indexedsearch-&gt;execFinalQuery() to make SELECT work on DBs other than MySQL
        * Add an index prefix to MySQL key definitions when (var)chars are changed to text when multiplyDBfieldSize is set
        * Reverted change to key of sys_refindex on 2006-09-01 (key prefix is set now automatically)

    2006-11-07  Michael Stucki  &lt;michael@typo3.org&gt;

        * Fixed bug #4348: Wrong time format in syslog output

    2006-11-06  Michael Stucki  &lt;michael@typo3.org&gt;

        * Fixed bug #3495: Endless recursion with some MySQL versions

    2006-11-03  Michael Stucki  &lt;michael@typo3.org&gt;

        * Fixed bug #4411: Popup-menues appearing in topframe in Internet Explorer 7. Thanks to Mads Brunn for providing a fix.
        * Fixed bug #4425: Garble code in adodb extension
        * Fixed Cross Site Scripting issue in fe_adminLib.inc. For details, see https://typo3.org/teams/security/security-bulletins/typo3-20061010-1/ - thanks to Andriu Isenring Ritsch for discovering and reporting this issue.

    2006-11-02  Michael Stucki  &lt;michael@typo3.org&gt;

        * Fixed bug #1655: t3lib_div::substUrlsInPlainText() did not support HTTPS links
        * Fixed bug #1236 again: 404 error while using the new content wizard
        * Fixed bug #4443: Items in CE "Insert Records" don't have edit options in context menu any longer
        * Add security hints in typo3/mod/tools/em/class.em_index.php

    2006-10-30  Karsten Dambekalns  &lt;karsten@typo3.org&gt;

        * Fixed bug #3637 in EM (translation handling)

    2006-10-17  Dmitry Dulepov  &lt;dmitry@typo3.org&gt;

        * Fixed bug #3199: SUing to myself?
        * Fixed bug #3720: Multilanguage Flexforms don't work after migrating a site from one language to more languages

    2006-10-17  Ernesto Baschny  &lt;ernst@cron-it.de&gt;

        * Fix: no more "ERR" or "Unpacking the language pack failed" in the translation handling with curl enabled.

    2006-10-14  Dmitry Dulepov  &lt;dmitry@typo3.org&gt;

        * Fix: t3lib_db::exec_SELECTgetRows() did not free recordset

    2006-10-13  Karsten Dambekalns  &lt;karsten@typo3.org&gt;

        * ADOdb system extension updated to upstream 4.93. Added danish translation, thanks to Peter Klein!

    2006-10-12  Martin Kutschker  &lt;martin.t.kutschker@blackbox.net&gt;

        * Fixed bug #4021: array_merge error with PHP 5.0

    2006-10-10  Martin Kutschker  &lt;martin.t.kutschker@blackbox.net&gt;

        * Fixed bug #3777: thumbs.php looks for file in t3lib/gfx instead of typo3/gfx

    2006-09-20  Bernhard Kraft  &lt;kraftb@kraftb.at&gt;

        * Fixed a missing space in typo3/template.php

    2006-09-15  Sebastian Kurfuerst  &lt;sebastian@garbage-group.de&gt;

        * Fixed bug #3862: Tools&gt;User Admin allows switching to disabled user

    2006-09-14  Michael Stucki  &lt;michael@typo3.org&gt;

        * Fixed bug #4219:&nbsp;:= appendString() did not work because the check was made for "apppendString" (typo)

    2006-09-11  Michael Stucki  &lt;michael@typo3.org&gt;

        * Release of TYPO3 4.0.2
        * Fixed a tiny security problem in indexed search (for details, see https://typo3.org/teams/security/security-bulletins/typo3-20060911-1/)
