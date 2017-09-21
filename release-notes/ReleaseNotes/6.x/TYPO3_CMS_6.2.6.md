Release Notes for TYPO3 CMS 6.2.6
=================================

This document contains information about TYPO3 CMS 6.2.6 which was
released on October 22nd, 2014.

News
----

This release is a combined bug fix and security release.

Notes
-----

Due to security issues found in the TYPO3 CMS Core, there was a combined
release of TYPO3 CMS 4.5.37, 4.7.20, 6.1.12 and 6.2.6.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2014-002/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    3da960d90a4a34e09aad2b1be64c0fe7  typo3_src-6.2.6.tar.gz
    b1285c999f5778653e8a5bc75f0ed656  typo3_src-6.2.6.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.\
It might be required to clear all caches; the “important actions”
section in the TYPO3 Install Tool offers the accordant possibility to do
so.

Changes
-------

Here is a list of what was fixed since
[6.2.5](TYPO3_CMS_6.2.5 "wikilink"):

    2014-10-22  addf1f2                  [RELEASE] Release of TYPO3 6.2.6 (TYPO3 Release Team)
    2014-10-22  19fb2c5  #62357          [SECURITY] Fix DoS in openid (Markus Klein)
    2014-10-22  ead183c  #59573          [SECURITY] Fix RCE in swiftmailer (Helmut Hummel)
    2014-10-18  fae0f82  #62316          [BUGFIX] RTE: Insert Tag dialogue may raise security error in Firefox (Stanislas Rolland)
    2014-10-17  d9b80a6  #62314          [BUGFIX] RTE: Edit element dialogue may raise JavaScript error (Stanislas Rolland)
    2014-10-17  87f60fb  #62296          [BUGFIX] RTE: Remove cut, copy and paste buttons in Firefox (Stanislas Rolland)
    2014-10-16  41382df  #62279          [BUGFIX] Handle utf8 strings in TitleCaseFilter (Graeme Worthy)
    2014-10-16  38e34cf  #49803          [BUGFIX] Fix unit tests for TypeConverter classes (Markus Klein)
    2014-10-15  2d0eb56  #49803          [BUGFIX] Property of alternative model implementation not found (Oliver Hader)
    2014-10-15  87eaea0  #56882          [BUGFIX] Show correct number of inline records defined in flexform (Daniel Alder)
    2014-10-15  3892106  #61749          [BUGFIX] Allow lower case for drive letters on Windows in CLI scripts (Alexander Bohndorf)
    2014-10-13  0171223  #62188          [BUGFIX] Add trim to modificators in TS-Parser (Stefan Froemken)
    2014-10-13  df25f58  #61686          [TASK] Sort BE usergroup records in module "Backend Users" (Georg Ringer)
    2014-10-13  13da155  #60370          [BUGFIX] Fix missing new record button with enabled useCombination (Marc Bastian Heinrichs)
    2014-10-11  529feb6  #62116          [BUGFIX] Show empty icon in checkbox'ed select field (Axel Kummer)
    2014-10-11  edce391  #62130          [BUGFIX] Wrong usage of count on SimpleXMLElement (Stefan Froemken)
    2014-10-11  d978d51  #62139          [BUGFIX] Ensure argument is an array in ContentObjectRenderer (kaystrobach)
    2014-10-10  8f64704  #61090          [BUGFIX] Static access to Enumeration constants (Sascha Egerer)
    2014-10-10  b3a05e6  #62137          [BUGFIX] RTE Spellcheck: PHP warning in SpellCheckingController (Stanislas Rolland)
    2014-10-09  76e60ad  #47269          [BUGFIX] Possible race condition when creating directory (Bernhard Kraft)
    2014-10-09  f9789dd  #62128          [BUGFIX] RTE Spellcheck:default ISO code dictionary should be lowercase (Stanislas Rolland)
    2014-10-09  5eb934a  #62114          [BUGFIX] RTE Spellcheck dialogue not correctly displayed (Stanislas Rolland)
    2014-10-09  354d41c  #62113          [BUGFIX] RTE Spellcheck dialogue opens with excessive height (Stanislas Rolland)
    2014-10-08  669fd39  #62112          [BUGFIX] RTE references non-existent xml files (Stanislas Rolland)
    2014-10-08  bc192b3  #54523          [BUGFIX] Do not use invalid TSConfig in linkvalidator (Alexander Stehlik)
    2014-10-08  4abc93d  #59544          [BUGFIX] Fix PHP warning with CTYPE=media (Goran Medakovic)
    2014-10-08  dc58e23  #62111          [BUGFIX] RTE Language extension refers to non-existent method (Stanislas Rolland)
    2014-10-08  ec880a1  #61951          [BUGFIX] Show correct tooltip for page type "Mount Point" (Georg Ringer)
    2014-10-07  32ac1bb  #47188          [BUGFIX] Fluid tries to render folders as templates partials and layouts (Krzysztof Adamczyk)
    2014-10-07  7adbf2f  #62068          [BUGFIX] Remove empty values in pageOverlayFields (Nils Blattner)
    2014-10-07  475dc0b  #62053          [BUGFIX] Readd frame setting to image configuration (Manfred Rutschmann)
    2014-10-03  5ff0e2f  #61962          [BUGFIX] BE login template: fix invalid HTML structure (Eric Chavaillaz)
    2014-10-01  f9f1173  #26172          [BUGFIX] Search word markup for UTF8 characters in summary (Ralf Hettinger)
    2014-09-30  d1d016c                  [TASK] Fix functional tests for EXT:impexp (Oliver Hader)
    2014-09-30  5844814  #61943          [BUGFIX] Fix JavaScript error that prevents links to anchor tags in RTE (Michael Schams)
    2014-09-30  66d824c  #61968          Revert "[BUGFIX] Fix JavaScript error that prevents links to anchor tags in RTE" (Markus Klein)
    2014-09-30  eda10cc  #61943          [BUGFIX] Fix JavaScript error that prevents links to anchor tags in RTE (Michael Schams)
    2014-09-30  bb6ce38  #61944          [DB] Increase max length of link fields (Lars Malach)
    2014-09-29  9640fdf  #61942          [BUGFIX] Change explanatory text of SYS error reporting config variables (Daniel Minder)
    2014-09-29  51f9f9f  #59821          [BUGFIX] Felogin improperly merges flexforms and TS conf (Markus Klein)
    2014-09-28  14bb5da  #61929          [BUGFIX] DBAL admin_query() check array before accessing it (Markus Klein)
    2014-09-27  23d3240  #47745          [BUGFIX] indexed_search/Indexer: correct frequency mapping for 1 (Ralf Hettinger)
    2014-09-27  905404f  #60346          [BUGFIX] Fix indexed_search page browsing calculation (Markus Klein)
    2014-09-23  d652601  #55886          [BUGFIX] Suhosin triggers warnings in Install Tool (Wouter Wolters)
    2014-09-23  103e017  #58367          [BUGFIX] Do not check file extension on local file (Alexander Opitz)
    2014-09-23  6f30381                  [TASK] Set TYPO3 version to 6.2.6-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_6.2.x> [Category:TYPO3
6.2](Category:TYPO3_6.2 "wikilink") <Category:2014>
