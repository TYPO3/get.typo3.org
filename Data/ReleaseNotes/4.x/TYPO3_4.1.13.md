Release Notes for TYPO3 4.1.13
==============================

This document contains information about TYPO3 version 4.1.13 which was
released on October 22, 2009.

News
----

This release is a bugfix release.

Notes
-----

Due to several security issues found in the TYPO3 Core, there was a
combined release of TYPO3 4.1.13, 4.2.10 and 4.3.0beta2.\
Find more details in the security bulletin:
<https://typo3.org/news/article/multiple-security-issues-found-in-typo3-core-1/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    d255400c2434848a988402a70ac90af1  dummy-4.1.13.tar.gz
    8e77717532f7d98662c49609d414a00a  dummy-4.1.13.zip
    37c6fa87826e518aeba0289958770e1e  typo3_src-4.1.13.tar.gz
    dc60d3ebde680e28c17fadfc89dc9b23  typo3_src-4.1.13.zip
    77c0196371397d6a3fa22b1fa4d9ccb2  typo3_src+dummy-4.1.13.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2009-10-22  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.1.13

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
        * Fixed bug #12308: XSS vulnerability in "DB > Full search" functionality
        * Fixed bug #10501: XSS vulnerability in the install tool (thanks to Oliver Klee)

    2009-10-21  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #12300 (Follow-up to 11995): Output compression breaks prompt for keyboard input in CLI scripts

    2009-10-11  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #10971: Fatal error in impexp module: Call to a member function includeLLFile() on a non-object (thanks to Andre Steiling)

    2009-09-29  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #11433: touch(): Utime failed in install tool (thanks to Steffen Gebert)

    2009-09-20  Francois Suter  <francois@typo3.org>

        * Fixed bug #11995: Prompt for keyboard input does not get displayed in CLI scripts

    2009-09-17  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #9270: Editors can¬¥t undelete records in history (thanks to Christian Hernmarck)

    2009-09-15  Stanislas Rolland  <typo3@sjbr.ca>

        * Updated htmlArea RTE version to 1.5.10
        * Follow-up to bug #11946: htmlArea RTE: reference was made to context menu item after context menu was closed

    2009-09-13  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #11847: htmlArea RTE displays empty editing area in Opera 10
        * Fixed bug #11946: htmlArea RTE: table properties editing dialogue windows loose focus after opening in IE8

    2009-08-28  Michael Stucki  <michael@typo3.org>

        * Fixed bug #11731: ENABLE_INSTALL_TOOL file check in yellow box does not check the file age (thanks to Moreno Feltscher)
