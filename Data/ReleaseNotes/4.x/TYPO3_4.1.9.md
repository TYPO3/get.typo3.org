RELEASE NOTES FOR TYPO3 4.1.9
=============================

This document contains information about TYPO3 version 4.1.9 which was
released on January 24, 2009.

News
----

to be completed...

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    cda446ac7fae527ba8876db76ffaed71  dummy-4.1.9.tar.gz
    720ffae49f268c9c47033b12a2bed0d4  typo3_src-4.1.9.tar.gz
    515699167f4c304fe228d65ba17b44e0  typo3_src-4.1.9.zip
    6f532e4c7d95966542c0ae13f67b794e  typo3_src+dummy-4.1.9.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

<changelog>2009-01-24 Ingmar Schlecht ingmar@typo3.org

`   * Release of TYPO3 4.1.9`

2009-01-24 Ingmar Schlecht ingmar@typo3.org

`   * Fixed bug #10205: DB session record is only created when user is authenticated (thanks also to Michael Stucki)`

2009-01-22 Michael Stucki michael@typo3.org

`   * Improvement to bugfix #10218: Quote the match-word properly`

2009-01-18 Francois Suter francois@typo3.org

`   * Fixed bug #10218: For fixing bug #10143 the function str_ireplace was introduced, which does not exist in PHP4 (thanks to Helmut Hummel)`

2009-01-21 Steffen Kamper info@sk-typo3.de

`   * Fixed bug #10214: md5's second argument is only valid for PHP5 (thanks to Marcus Krause)`

2009-01-21 Ingo Renner ingo@typo3.org

`   * Fixed bug #10204: PHP error due to `“`public`` ``static`”` keywords in PHP4 in t3lib_div::generateRandomBytes() (thanks to Marcus Krause)`

</changelog>
