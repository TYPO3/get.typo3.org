Release Notes for TYPO3 4.2.15
==============================

This document contains information about TYPO3 version 4.2.15 which was
released on October 6, 2010.

News
----

This release is a combined bugfix and security release.

Notes
-----

Due to several security issues found in the TYPO3 Core, there was a
combined release of TYPO3 4.2.15, 4.3.7 and 4.4.4.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-sa-2010-020/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    ab4028fbf28be87c40de4a032bc6b06d  dummy-4.2.15.tar.gz
    6bc61a98ea226a19f873ff86b5421796  dummy-4.2.15.zip
    4411919947516dff193e22e21d9be977  typo3_src-4.2.15.tar.gz
    c31979410e4cc3c4733c3609175ea264  typo3_src-4.2.15.zip
    b594d592ca5c886207d599aadd57ade6  typo3_src+dummy-4.2.15.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-10-06  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.2.15

    2010-10-06  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #13650: Information disclosure in sys_actions (DB mount, usergroups) (thanks to Georg Ringer)
        * Fixed bug #15461: RemoveXSS exposes XSS vulnerability for double encoded characters (thanks to Marcus Krause)
        * Fixed bug #15728: Extension Manager allows to download arbitrary files beyond PATH_site or rootpath (thanks to Marcus Krause)
        * Fixed bug #15729: Sysext setup's user simulation is susceptible to XSS (thanks to Marcus Krause)
        * Fixed bug #15733: Admin Panel is susceptible to XSS (thanks to Helmut Hummel)
        * Fixed bug #15898: It is (still) possible to download arbitrary files through the jumpurl feature (thanks to Helmut Hummel and Marcus Krause)

    2010-09-24  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #5983: Undefined variable is used in t3lib_BEfunc::exec_foreign_table_where_query

    2010-09-24  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #15653: Only show upload comments that are newer than installed version in update function of EM

    2010-09-19  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #8260: Update Wizard in install tool force temp-configuration files and load configuration twice

    2010-09-19  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #3908: DisplayCond => VERSION:IS:false always returns true (Thanks to Daniel Poetzinger)

    2010-08-12  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #3819: t3lib_div::getIndpEnv('TYPO3_DOCUMENT_ROOT') delivers wrong value in Backend
