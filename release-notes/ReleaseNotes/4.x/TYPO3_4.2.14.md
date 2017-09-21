Release Notes for TYPO3 4.2.14
==============================

This document contains information about TYPO3 version 4.2.14 which was
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

    ae396d4f489c2f99aee3cd427d10f3c9  dummy-4.2.14.tar.gz
    a36d74a02525383a61a6c96c73729982  dummy-4.2.14.zip
    82be9ad41a655d318ba46a7cb86acaaa  typo3_src-4.2.14.tar.gz
    ab2c56a9d871185092d086909d26a437  typo3_src-4.2.14.zip
    06452537eaba065dd54e9f4c62fe8ff6  typo3_src+dummy-4.2.14.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-08-06  Ingo Renner  <ingo@typo3.org>

        * Release of TYPO3 4.2.14

    2010-08-05  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #15280: felogin redirect doesn't work anymore after update to latest releases (4.2x - 4.4.x) (thanks to Helmut Hummel)
        * Fixed bug #15282: It is impossible to set links to files any more with the link wizard

    2010-08-03  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #15265: InstallTool-login not possible after Update to 4.4.1 due to session_start() in extensions (thanks to Ernesto Baschny and Helmut Hummel)

    2010-08-02  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #15289: Element-Browser page tree has HSC'ed <span> elements

<Category:ReleaseNotes/TYPO3_4.2.x> [Category:TYPO3
4.2](Category:TYPO3_4.2 "wikilink") <Category:2010>
