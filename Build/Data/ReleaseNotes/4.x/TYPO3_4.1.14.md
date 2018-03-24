Release Notes for TYPO3 4.1.14
==============================

This document contains information about TYPO3 version 4.1.14 which was
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

**Attention:** Using TYPO3 4.1.14 *will* cause the following PHP errors:

    Use of undefined method t3lib_div::sanitizeLocalUrl() in typo3/tce_db.php on line 115
    Use of undefined method t3lib_div::sanitizeLocalUrl() in typo3/logout.php on line 75

A patch for this problem is known. [You find it
here.](https://forge.typo3.org/projects/typo3cms-core/repository/revisions/8453/diff/branches/TYPO3_4-1/t3lib/class.t3lib_div.php?format=diff)

**But** this patch might cause another issue, which is reported here:\
<issue>23321</issue>\
[Here is the patch for this
problem.](https://forge.typo3.org/projects/typo3cms-core/repository/revisions/8472/diff/branches/TYPO3_4-1/t3lib/class.t3lib_div.php?format=diff)

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    4d94af8fbb7d5a8d725fe0b5ccf11318  dummy-4.1.14.tar.gz
    5c91f9aa6b308adbf2a631cbd980af86  dummy-4.1.14.zip
    93d7a8002b556dacb375221a19365057  typo3_src-4.1.14.tar.gz
    0d9ea8baa18d2c509b6c8d862bab7198  typo3_src-4.1.14.zip
    8cc325a3d8d7548901bd145dd573c936  typo3_src+dummy-4.1.14.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-07-28  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.1.14

    2010-07-28  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #14978: XSS in file tree (thanks to Georg Ringer)
        * Fixed bug #13292: TYPO3 error message reveals path to web root (thanks to Xavier Perseguers)
        * Fixed bug #11618: XSS vulnerability in install tool / BE login (thanks to Georg Ringer)
        * Fixed bug #13961: XSS in impexp (thanks to Georg Ringer)
        * Fixed bug #13960: XSS in sys_action (thanks to Georg Ringer)
        * Fixed bug #13958: XSS in BE Log (thanks to Georg Ringer)
        * Fixed bug #14317: XSS in Extension Manager (thanks to Georg Ringer)
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
        * Fixed bug #13137: redirect/returnUrl isn't validated in core (thanks to Georg Ringer and Marcus Krause)

    2010-05-17  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #13394: Information disclosure in sysext:sys_actions (thanks to Georg Ringer)
        * Fixed bug #13042: XSS in index.php (thanks to Georg Ringer)
        * Fixed bug #11617: XSS in template module (thanks to Georg Ringer)
        * Fixed bug #13249: XSS in TS Object Browser (thanks to Marcus Krause)
        * Fixed bug #11621: XSS vulnerabilities in workspace module (thanks to Georg Ringer)
        * Fixed bug #11620: XSS vulnerability in task center module (thanks to Georg Ringer)
        * Fixed bug #12628: XSS in sysext sys_action (thanks to Georg Ringer)
        * Fixed bug #12634: XSS in the access module (thanks to Georg Ringer)
        * Fixed bug #13558: XSS in t3lib_querygenerator (thanks to Georg Ringer)
        * Fixed bug #12630: XSS in filelist module

    2010-04-09  Michael Stucki  <michael@typo3.org>

        * Fixed bug #13959: Security precaution for extensions which use their own autoloader. Note: This is the same fix which has been committed to TYPO3 4.3 where it is marked as a security fix. However, versions prior to TYPO3 4.3 do not ship with an autoloader, so they are not affected by this problem unless an extension provides its own autoloader.

    2010-02-24  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #13470: Session/Login not working in IE8 across subdomains 

    2009-11-30  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12467: TYPO3 Inline User Manual is broken

    2009-11-17  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11937: Do not show PHP 5.3 E_DEPRECATED messages on productive systems

    2009-11-09  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow-up to #11847: htmlArea RTE displays empty editing area in Opera 10

    2009-11-06  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12481: AllowClipboard Helper Firefox extension does not work with FF 3.5

    2009-10-29  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #12371: Warning issued on first load of install tool with open_basedir set
