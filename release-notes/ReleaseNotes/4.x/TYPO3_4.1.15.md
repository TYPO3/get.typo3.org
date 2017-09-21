Release Notes for TYPO3 4.1.15
==============================

This document contains information about TYPO3 version 4.1.15 which was
released on August 6, 2010.

News
----

This release is a bugfix release that aims to fix the regressions that
have been introduced with the latest security updates.

Notes
-----

This version is a maintenance release and contains bugfixes only. Since
the latest security releases contained regressions and some features
were not usable anymore, this new release aims to be a stable package
again.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    f40413f5056aba922ff1206127d256ba  dummy-4.1.15.tar.gz
    619c92baf712345f592a8223e2732795  dummy-4.1.15.zip
    da3c5819b540c7c21c429fb59f39cfca  typo3_src-4.1.15.tar.gz
    5b59911d49a2d47f8bbe49153c507ee1  typo3_src-4.1.15.zip
    51dbedc4d28751860d22486ba3c322d7  typo3_src+dummy-4.1.15.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-08-06  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.1.15

    2010-08-05  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #15282: It is impossible to set links to files any more with the link wizard

    2010-08-03  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #15311: t3lib_div::sanitizeLocalUrl() leads to fatal error on PHP4 systems
        * Fixed bug #15265: InstallTool-login not possible after Update to 4.4.1 due to session_start() in extensions (thanks to Ernesto Baschny and Helmut Hummel)

    2010-08-02  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #15289: Element-Browser page tree has HSC'ed <span> elements

    2010-07-30  Oliver Hader  <oliver@typo3.org>

        * Reverted fix for bug #15260
        * Fixed bug #15263: Clearing caches in backend only displays empty frame

    2010-07-28  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #15260: Use of undefined method t3lib_div::sanitizeLocalUrl()

<Category:ReleaseNotes/TYPO3_4.1.x> [Category:TYPO3
4.1](Category:TYPO3_4.1 "wikilink") <Category:2010>
