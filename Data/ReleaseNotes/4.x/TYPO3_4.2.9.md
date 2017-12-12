Release Notes for TYPO3 4.2.9
=============================

This document contains information about TYPO3 version 4.2.9 which was
released on September 28, 2009.

News
----

This release is a bugfix release.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    50e89d2762e302bf662411702853594d  dummy-4.2.9.tar.gz
    021cbd70e3085324446f0894ec07b659  dummy-4.2.9.zip
    66a0947ee54b81eae4affa2aca956209  typo3_src-4.2.9.tar.gz
    bdc63e4fad72ea82f1908a2335c6b6af  typo3_src-4.2.9.zip
    3e888285ea7aab6028f2a0f61f847851  typo3_src+dummy-4.2.9.zip

Upgrading
---------

The usual upgrading procedure applies, but a **database update** is
necessary! Use the Install Tool, section “2: Database Analyser” to
Compare the database and apply the changes proposed (if any).

Changelog
---------

    2009-09-28  Ingmar Schlecht  <ingmar@typo3.org>

        * Release of TYPO3 4.2.9

    2009-09-20  Francois Suter  <francois@typo3.org>

        * Fixed bug #11995: Prompt for keyboard input does not get displayed in CLI scripts
        * Fixed bug #11224: Special menu directory only renders 1st level if special.value is a mount point (Thanks to Xavier Perseguers)

    2009-09-19  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11986: dynamic update of translation status im EM is broken

    2009-09-17  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #9270: Editors can´t undelete records in history (thanks to Christian Hernmarck)

    2009-09-15  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #11915: htmlArea RTE: superfluous span tags in content after server-based cleaning on paste operation
        * Updated htmlArea RTE version to 1.7.12 (branch TYPO3_4-2)
        * Follow-up to bug #11946: htmlArea RTE: reference was made to context menu item after context menu was closed

    2009-09-13  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #11847: htmlArea RTE displays empty editing area in Opera 10
        * Fixed bug #11946: htmlArea RTE: table properties editing dialogue windows loose focus after opening in IE8

    2009-09-01  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #11845: Typo in a CLI error mesage: suue -> sure (thanks to Oliver Klee)

    2009-08-26  Michael Stucki  <michael@typo3.org>

        * Fixed bug #11731: ENABLE_INSTALL_TOOL file check in yellow box does not check the file age (thanks to Moreno Feltscher)

    2009-08-19  Michael Stucki  <michael@typo3.org>

        * Fixed bug #11716: Install Tool always sets TYPO3_CONF_VARS[FE][disableNoCacheParameter] upon save

    2009-08-14  Michael Stucki  <michael@typo3.org>

        * Fixed bug #8968: DBAL incompatible SQL in "impexp" extension (thanks to Marc Bastian Heinrichs)

    2009-08-12  Michael Stucki  <michael@typo3.org>

        * Follow-up to bug #11513: Shorten one ident field which is known to be too long (solved the issue on those setups where the DB is not updated)
        * Fixed bug #11513: cache_hash table could not be filled because information field (ident) was too short (thanks to Ingo Schmitt)

    2009-08-02  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #10769: Wrong encoded email header (thanks to Ivan Kartolo)

    2009-07-20  Ingo Renner  <ingo@typo3.org>

        * Fixed bug: #11006: Tooltip for page path in Page/List module is missing (thanks to Steffen Gebert)

    2009-07-19  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #6875: IRRE - Sorting of child records is inverted on moving parent record to different page (thanks to Nabil Saleh)

    2009-07-09  Martin Kutschker  <masi@typo3.org>

        * Fixed bug: same error message is used twice for different errors

    2009-07-08  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #11412: Using typolinkLinkAccessRestrictedPages does not take different domain names into account

<Category:ReleaseNotes/TYPO3_4.2.x> [Category:TYPO3
4.2](Category:TYPO3_4.2 "wikilink") <Category:2009>
