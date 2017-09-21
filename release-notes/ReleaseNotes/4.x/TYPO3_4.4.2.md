Release Notes for TYPO3 4.4.2
=============================

This document contains information about TYPO3 version 4.4.2 which was
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

    bebe51a327a97c6990416e62cb706fb8  dummy-4.4.2.tar.gz
    c441425107d5f0eb9fa86b07a23d8438  dummy-4.4.2.zip
    122f5ad6df04ded73f655503b63daa73  typo3_src-4.4.2.tar.gz
    afb72fd27a79af73059bf540d93a3910  typo3_src-4.4.2.zip
    bb661a93995159e3f23b609dd8dc5525  typo3_src+dummy-4.4.2.zip
    c6f39747218b0a72b5ce7e4145a6955d  introductionpackage-4.4.2.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-08-06  Benjamin Mack  <benni@typo3.org>

        * Release of TYPO3 4.4.2

    2010-08-05  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #15355: htmlArea RTE: Using the advanded frontend editing, the editor is not loaded in the text tab

    2010-08-05  Steffen Kamper  <steffen@typo3.org>

        * Fixed bug #12646: Click on icon does not open/close sections

    2010-08-05  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #14773: Styling issue when selecting position of new created page

    2010-08-05  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #15343: dbClientCompress crashes with pconnect
        * Fixed bug #15280: felogin redirect doesn't work anymore after update to latest releases (4.2x - 4.4.x) (thanks to Helmut Hummel)
        * Fixed bug #15282: It is impossible to set links to files any more with the link wizard
        * Fixed bug #15336: sys_actions shows wrong error if an "Record List" action is not propertly configured (thanks to Stefan Galinski)

    2010-08-03  Susanne Moog  <typo3@susanne-moog.de>

        * Fixed bug #15313: Link to deprecation logfile doesn't work in installations inside a subdirectory (thanks to Stefan Galinski)

    2010-08-03  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #15265: InstallTool-login not possible after Update to 4.4.1 due to session_start() in extensions (thanks to Ernesto Baschny and Helmut Hummel)

    2010-08-02  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #15289: Element-Browser page tree has HSC'ed <span> elements

    2010-08-01  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #15321: Unused variable $warningItems in tx_install (thanks to Markus Klein)

    2010-08-01  Susanne Moog  <typo3@susanne-moog.de>

        * Fixed bug #15292: Fatal error in DB browser because of wrong sprite API usage (thanks to Alexandre Gravel-Raymond)

    2010-07-30  Steffen Kamper  <steffen@typo3.org>

        * Follow-up to bug #15188: Remove default greyed out effect for CEs (Thanks to Steffen Gebert)
        * Fixed bug #15295: Page treeFilter not re-applied after branch toggling (Thanks to Felix Kopp)
        
    2010-07-29  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #13427: t3lib_div::cleanOutputBuffers() might loop forever (thanks to Stephan Seitz and Steffen Gebert)

<Category:ReleaseNotes/TYPO3_4.4.x> [Category:TYPO3
4.4](Category:TYPO3_4.4 "wikilink") <Category:2010>
