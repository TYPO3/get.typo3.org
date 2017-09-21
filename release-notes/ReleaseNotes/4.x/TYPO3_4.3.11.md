Release Notes for TYPO3 4.3.11
==============================

This document contains information about TYPO3 version 4.3.11 which was
released on February 23, 2011.

News
----

This version is a maintenance release and contains bugfixes only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    3294cd3937d6b09d7786d3596138a26e  dummy-4.3.11.tar.gz
    5e701f944065f73946e764a79ae0fb96  dummy-4.3.11.zip
    44587ce69cd89b7ec8493c76f2888fc2  typo3_src-4.3.11.tar.gz
    14f7a0ec5cd3cae9370c5e463f322aa9  typo3_src-4.3.11.zip
    be01675f4fd115b7e9d4ea2f4ae103e6  typo3_src+dummy-4.3.11.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2011-02-23  Oliver Hader  <oliver.hader@typo3.org>

        * Release of TYPO3 4.3.11

    2011-02-23  Thorsten Kahler  <thorsten.kahler@dkd.de>

        * Fixed bug #17501: User setup - pressing return creates installtool file (Thanks to Steffen Kamper)

    2011-02-22  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #17695: htmlArea RTE: Removing format may remove content

    2011-02-11  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #16534: Exception message for missing memcache wrong
        * Fixed bug #15721: Memcache::delete() without timeout param causes loss of memcache server in pool (Thanks to Michiel Ross)

    2011-02-02  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #17087: BE user password not changable via setup module with "saltedpasswords" (Thanks to Marcus Krause)

    2011-01-21  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #17140: htmlArea RTE: In WebKit, RTE inserts incorrect link if text is double-clicked
        * Updated htmlArea RTE version to 1.8.14
        * Fixed bug #17160: htmlArea RTE: Link editing problems in Internet Explorer

    2011-01-11  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #16967: [Caching framework] Remove not exising "GlobalsBackend" from config_default.php

    2011-01-09  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #13695: Image output in frontend is not xhtml valid

    2011-01-05  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #16900: [Cache] Filebackend fails on windows

    2010-12-30  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #15034: Login to backend fails with IPv6 Address as HTTP_HOST (Thanks to Roland Schenke)
        * Fixed bug #10480: Add missing header in auto_respond_msg (Thanks to Christian Buelter)

<Category:ReleaseNotes/TYPO3_4.3.x> [Category:TYPO3
4.3](Category:TYPO3_4.3 "wikilink") <Category:2011>
