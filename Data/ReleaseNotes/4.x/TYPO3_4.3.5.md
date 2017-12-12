Release Notes for TYPO3 4.3.5
=============================

This document contains information about TYPO3 version 4.3.5 which was
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

    25a8caab3c77130226b7c525daf33e9d  dummy-4.3.5.tar.gz
    e4adfff7562c36d5dd6630a4a794a5ad  dummy-4.3.5.zip
    445350427d134e6ce14a85e82cf79122  typo3_src-4.3.5.tar.gz
    6198d1c86b319906d93dc878d421870b  typo3_src-4.3.5.zip
    c67bfea29f8342985466ff22d38822ef  typo3_src+dummy-4.3.5.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-08-06  Oliver Hader  <oliver@typo3.org>

        * Release of TYPO3 4.3.5

    2010-08-05  Steffen Gebert  <steffen@steffen-gebert.de>

        * Fixed bug #14773: Styling issue when selecting position of new created page

    2010-08-05  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #15343: dbClientCompress crashes with pconnect
        * Fixed bug #15280: felogin redirect doesn't work anymore after update to latest releases (4.2x - 4.4.x) (thanks to Helmut Hummel)
        * Fixed bug #15282: It is impossible to set links to files any more with the link wizard

    2010-08-03  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #15265: InstallTool-login not possible after Update to 4.4.1 due to session_start() in extensions (thanks to Ernesto Baschny and Helmut Hummel)

    2010-08-03  Sebastian Kurfuerst  <sebastian@typo3.org>

        * Fixed regression in Fluid, preventing Extbase/Fluid based extensions to work.

    2010-08-02  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #15289: Element-Browser page tree has HSC'ed <span> elements

    2010-07-29  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #13427: t3lib_div::cleanOutputBuffers() might loop forever (thanks to Stephan Seitz and Steffen Gebert)
