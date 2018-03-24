Release Notes for TYPO3 4.2.17
==============================

This document contains information about TYPO3 version 4.2.17 which was
released on December 28, 2010.

News
----

This version is a maintenance release and contains bugfixes only.

Notes
-----

Since the latest security releases contained (non-security related)
regressions and some features were not usable anymore, this new release
aims to be a stable package again.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    0f3313f97c9a4a02f1fe4ad424c12875  dummy-4.2.17.tar.gz
    825bcb7ef862565a405a1b5d3279ba41  dummy-4.2.17.zip
    9c0f89db8c27da5f549f1c0d35444fef  typo3_src-4.2.17.tar.gz
    07a3b9201a9c8c5603bca21b815299da  typo3_src-4.2.17.zip
    9f6c44455f8aa75eb364d33116a2194d  typo3_src+dummy-4.2.17.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-12-28  Oliver Hader  <oliver.hader@typo3.org>

        * Release of TYPO3 4.2.17

    2010-12-23  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #16760: RTE transformation removes all span tags on save after upgrade TYPO3 4.2.16

    2010-12-23  Jigal van Hemert <jigal@xs4all.nl>

        * Fixed bug #16825: Fatal error in lang.php (thanks to Georg Ringer)
