Release Notes for TYPO3 4.1.10
==============================

This document contains information about TYPO3 version 4.1.10 which was
released on February 10, 2009.

News
----

This release is a bugfix release. It contains important security fixes!

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    b5c3c8bb92e89180433cde32e8e388b0  typo3_src-4.1.10.tar.gz
    be028514a74378ea60d1d01838a523c9  typo3_src-4.1.10.zip
    71a4b348e7c186a82531ada2ee7e80ee  typo3_src+dummy-4.1.10.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

<changelog> 2009-02-10 Michael Stucki &lt;michael@typo3.org&gt;

`   * Release of TYPO3 4.1.10`\
`   * Fixed bug #10364: Jumpurl feature allows to access arbitrary files on a server (thanks to the TYPO3 Security Team and especially Marcus Krause)`\
`   * Fixed bug #10298: Various XSS issues in the BE user admin module (thanks to Jelmer de Hen and Dmitry Dulepov)`

2009-02-05 Francois Suter &lt;francois@typo3.org&gt;

`   * Fixed bug #10346: l10n_display option abusively hides field for `“`All`”` languages when set to defaultAsReadonly`

2009-02-05 Benjamin Mack &lt;benni@typo3.org&gt;

`   * Fixed bug #9266: Bug: strcmp() with array as parameter in t3lib_div::linkThisScript() produces warnings with PHP 5.3 (Thanks to Niels Pardon)`

2009-02-03 Francois Suter &lt;francois@typo3.org&gt;

`   * Fixed bug #1527: t3lib_svbase: Method init returns wrong value  (thanks to Stefano Kowalke and Michael Miousse)`

2009-01-30 Benjamin Mack &lt;benni@typo3.org&gt;

`   * Fixed bug #7123: Select wizard doesn't work in Safari (Thanks to IsmaÃ«l Bidau)`

</changelog>
