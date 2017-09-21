Release Notes for TYPO3 4.3.8
=============================

This document contains information about TYPO3 version 4.3.8 which was
released on October 12, 2010.

News
----

This version is a maintenance release and contains only bugfixes. Since
the latest security releases contained one regression, this new release
aims to be a stable package again.

Notes
-----

This version is a maintenance release and contains bugfixes only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    d5eb0ed0f58b409b30fdb2c55739d59a  dummy-4.3.8.tar.gz
    c6ef50ebe1645693010cd141ea42039f  dummy-4.3.8.zip
    3081f2fd3f31f70c297d37501c34ed62  typo3_src-4.3.8.tar.gz
    c6c61cad722b7c90608663f79434ee90  typo3_src-4.3.8.zip
    16e4e35c1571d4da6782994d4ade1eac  typo3_src+dummy-4.3.8.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-10-12  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.3.8

    2010-10-11  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #12376: typo3temp got filled with thousands of javascript_* files (Thanks to Georg Ringer)

    2010-10-10  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15727: Clean-up for PageRenderer
        * Fixed bug #15690: Change text of exception in t3lib_cache_frontend_stringfrontend

    2010-10-06  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #15858: htlmArea RTE: Stylesheet access error in Google Chrome 7
        * Follow-up to bug #15858: htlmArea RTE: Stylesheet access error in Google Chrome 7
        * Fixed bug #15774: Inserting an abbr/acronym that is not predefined deletes the abbreviated phrase

    2010-10-06  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #15917: Parse error in Adminpanel in 4.3.7 (Thanks to Ingo Schmitt)

<Category:ReleaseNotes/TYPO3_4.3.x> [Category:TYPO3
4.3](Category:TYPO3_4.3 "wikilink") <Category:2010>
