Release Notes for TYPO3 CMS 6.2.19
==================================

This document contains information about TYPO3 CMS 6.2.19 which was
released on February 23rd, 2016.

News
----

This release is a combined bug fix and security release.

Notes
-----

Find more details in the security bulletins:

-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-005/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-006/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-007/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-008/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    4460d814cdc526347c771c1a32e85235  typo3_src-6.2.19.tar.gz
    5f27c56fa636b6dad18487edb8608f4f  typo3_src-6.2.19.zip

SHA256 checksums
----------------

    d0fd1f9c605a668827e062364d4f56577ee57a7e4ac45987a732b15d67cf3b3f  typo3_src-6.2.19.tar.gz
    b0543cfa21b1f50fe04be0ac940c638fca74e1f96aa93089b3c20fcf3fec2195  typo3_src-6.2.19.zip

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
[6.2.18](TYPO3_CMS_6.2.18 "wikilink"):

    2016-02-23  6828e26                  [RELEASE] Release of TYPO3 6.2.19 (TYPO3 Release Team)
    2016-02-23  1b446ce  #73458          [SECURITY] Limit the search results per page (Benni Mack)
    2016-02-23  b55c5e7  #73450          [SECURITY] Escape output of tt_content.default (Georg Ringer)
    2016-02-23  f071653  #73449          [SECURITY] Stored XSS in shortcut functionality (Wouter Wolters)
    2016-02-23  844369e  #61269          [SECURITY] XML entity expansion (Benni Mack)
    2016-02-22  bfcd0ca  #73607          [TASK] Remove adodb diff (Christian Kuhn)
    2016-02-20  d3be3f7  #73480          [TASK] Disallow Composer installation with PHP 7.x (Mathias Brodala)
    2016-02-18  b3225d1  #73518          [BUGFIX] Fix disabled menu item state for l18n_cfg=1 (Mathias Brodala)
    2016-02-17  438d90a  #58752          [BUGFIX] Remove addQueryStringMethod parameter from widget links (Nicole Cordes)
    2016-02-16  3b53f2f                  [TASK] Set TYPO3 version to 6.2.19-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_6.2.x> [Category:TYPO3
6.2](Category:TYPO3_6.2 "wikilink") <Category:2016>
