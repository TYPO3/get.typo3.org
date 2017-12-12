Release Notes for TYPO3 4.2.10
==============================

This document contains information about TYPO3 version 4.2.10 which was
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

    8c7f51b692db4123ce08c8f9f866337c  dummy-4.2.10.tar.gz
    70cb78213644af03d54e13047bfb1639  dummy-4.2.10.zip
    b53a1d9faeff6a872efa9104946cdb87  typo3_src-4.2.10.tar.gz
    e600767e695b3b2771623b43dcb6da19  typo3_src-4.2.10.zip
    492e4269223b671dd195b4d533daf3fb  typo3_src+dummy-4.2.10.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2009-10-22  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.2.10

    2009-10-22  Ernesto Baschny <ernst@cron-it.de>

        * Security Issue #11664: Updated RemoveXSS code to the latest knowledge in this area (thanks to Jigal van Hemert)
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

        * Fixed bug #12280: Error Message while creating empty Folders (thanks to Daniel Schmitzer)
        * Fixed bug #12300 (Follow-up to 11995): Output compression breaks prompt for keyboard input in CLI scripts

    2009-10-21  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12272: Steps disregarded in t3lib_lock (thanks to Dan Osipov)

    2009-10-15  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #8728: PHP Warning, if SQL error occurs in class t3lib_db in functions which depend on an existing resultset (thanks to Felix Oertel)

    2009-10-11  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #10971: Fatal error in impexp module: Call to a member function includeLLFile() on a non-object (thanks to Andre Steiling)

    2009-10-10  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #12129 (follow-up to bug #11986): Translation update broken with activated output compression (thanks to Steffen Gebert)

    2009-09-29  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #11433: touch(): Utime failed in install tool (thanks to Steffen Gebert)

<Category:ReleaseNotes/TYPO3_4.2.x> [Category:TYPO3
4.2](Category:TYPO3_4.2 "wikilink") <Category:2009>
