Release Notes for TYPO3 CMS 6.2.14
==================================

This document contains information about TYPO3 CMS 6.2.14 which was
released on July 1st, 2015.

News
----

This release is a combined bug fix and security release.

Notes
-----

Due to security issues found in the TYPO3 CMS Core, there was a combined
release of TYPO3 CMS 6.2.14 and 7.3.1.\
Find more details in the security bulletins:

-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2015-002/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2015-003/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2015-004/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2015-005/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2015-006/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2015-007/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    33531beb4022b94ae86264797720e612  typo3_src-6.2.14.tar.gz
    3ffb4cc60d38e19530ae9292f991a019  typo3_src-6.2.14.zip

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
[6.2.13](TYPO3_CMS_6.2.13 "wikilink"):

    2015-07-01  e7376af                  [RELEASE] Release of TYPO3 6.2.14 (TYPO3 Release Team)
    2015-07-01  0f3fb37  #59231          [SECURITY] Add hook to implement login protection methods (Nicole Cordes)
    2015-07-01  2973b57  #67538          [SECURITY] Disallow access to fallback storage '0' (Nicole Cordes)
    2015-07-01  8546772  #67458          [SECURITY] XSS in 3rd party library Flowplayer (Wouter Wolters)
    2015-07-01  9be2f6b  #34107          [SECURITY] Encode link text properly in typolink (Nicole Cordes)
    2015-07-01  7695d91  #59211          [SECURITY] XSS in Filelist (Markus Bucher)
    2015-07-01  4f6e84b  #59258          [SECURITY] Regenerate session id upon login if needed (Helmut Hummel)
    2015-07-01  bff9fa5  #56644          [SECURITY] Prevent edit of file metadata of files with no access (Marc Bastian Heinrichs)
    2015-07-01  fac6e13  #67799,#67775   [TASK] Travis: container based and no composer self-update (Christian Kuhn)
    2015-07-01  ca0df84  #67835          [BUGFIX] Use single quotes in query for values in EXT:workspaces (Andreas Fernandez)
    2015-07-01  e742451  #67867          [BUGFIX] Duplicate XLIFF identifiers (Xavier Perseguers)
    2015-07-01  af872e2  #65205          [BUGFIX] Load language file for error messages (Nicole Cordes)
    2015-07-01  1f19bb5  #66895          [BUGFIX] Correction of Filelink of FAL in linkvalidator (Pierre Boivin)
    2015-07-01  603edc3  #67837          [BUGFIX] 1st level cache for ``QueryResult::count()`` (Mathias Brodala)
    2015-06-30  a5bec24  #16840          [BUGFIX] hmenu.special = list must evaluate showAccessRestrictedPages (Gilles FOUET)
    2015-06-30  f151333  #67834          [BUGFIX] Fix SQL error in IndexSearchRepository (Tim Schreiner)
    2015-06-29  d9d1754  #67779          [TASK] Travis: Add github oauth token (Anja Leichsenring)
    2015-06-29  abbfcac                  [FOLLOWUP][BUGFIX] Only count items in ForViewHelper when ``iteration`` argument is set (Anja Leichsenring)
    2015-06-29  3db88fe  #67801          [BUGFIX] Only count items in ForViewHelper when ``iteration`` argument is set (Mathias Brodala)
    2015-06-26  e1198d9  #67770          [BUGFIX] Fix wrong variable spelling in RteHtmlParser (Markus Klein)
    2015-06-26  0f4157b  #50231          [BUGFIX] Increase lifetime of cache_rootline (Christian Kuhn)
    2015-06-25  53d22b5  #67238          [BUGFIX] Avoid race conditions in typo3temp/Cache (Bernhard Kraft)
    2015-06-25  ed1948d  #67735          [BUGFIX] Make ext_update working (Markus Klein)
    2015-06-25  583eb67  #67703          [BUGFIX] Cleanup AbstractExceptionHandler and fix variable access (Mathias Schreiber)
    2015-06-23  9d8c63b  #67697          [TASK] Bump class alias loader version (Helmut Hummel)
    2015-06-23  0edaed8  #67696          [TASK] Bump composer installer version (Helmut Hummel)
    2015-06-23  25aa461  #67466          [TASK] Improve "Overwrite files" message (Alina Fleser)
    2015-06-22  8d2fc92  #67620          [BUGFIX] Illegal string offset in DataPreprocessor (Wouter Wolters)
    2015-06-22  2f9eca0  #24858          [BUGFIX] "fixed_lgd_cs" may crash in eID environment (Benjamin Mack)
    2015-06-22  396595f  #67563          [BUGFIX] Render correct menu item for broken shortcut (Andreas Wolf)
    2015-06-21  0d0b502  #23270          [BUGFIX] Correctly handle forceTypeValue = 0 (Benjamin Mack)
    2015-06-20  75114d6  #22774          [BUGFIX] Sorting ignored in "Template Overview" (Reinhard FÃ¼hricht)
    2015-06-19  ec1d0cb  #67413          [BUGFIX] Don't force lowercase on SQL SET() values (Stephan GroÃŸberndt)
    2015-06-18  af4c2a0  #66352          [BUGFIX] Properly resolve link format to page type (Daniel Schmidt)
    2015-06-18  e903c84  #67432          [BUGFIX] Check if file exists before deletion (Christoph Lehmann)
    2015-06-18  88f3653  #67543          [BUGFIX] Fix check for import / export folder (Alexander Stehlik)
    2015-06-18  9e228bc  #67599          [BUGFIX] Use single quotes for password check (Andreas Fernandez)
    2015-06-18  28bdc45  #65563          [BUGFIX] File metadata can't be edited inline (Benjamin Mack)
    2015-06-18  ee8c8b9  #67586          [TASK] Add basic unit tests for ContentObjectRenderer::typoLink (Nicole Cordes)
    2015-06-17  0b7dee6  #56296          [BUGFIX] Properly escape option value for groups (Wouter Wolters)
    2015-06-17  77ac8f2  #64654          [BUGFIX] Fix SQL error on recursive TypoScript template inclusion (Andreas Fernandez)
    2015-06-17  856ca19  #60261          [BUGFIX] Add "tx_felogin" folder in "uploads" folder during install (Jonathan IROULIN)
    2015-06-16  d4ee83c  #53034          [BUGFIX] Always use MCRYPT_DEV_URANDOM if using mcrypt (Helmut Hummel)
    2015-06-15  4eff898  #67463          [BUGFIX] Scheduler now throws OutOfBoundsException on SQL query error (Mathias Schreiber)
    2015-06-15  c90515e  #64429          [TASK] Remove version number from generator tag (Wouter Wolters)
    2015-06-11  af1b31b  #67408          [TASK] Nail down php 5.6 instantiation issues in tests (Christian Kuhn)
    2015-06-10  0d91bf6  #67383          [BUGFIX] Check $http_response_headers in GeneralUtility::getUrl() (Andreas Fernandez)
    2015-06-10  fc268e8                  [TASK] Set TYPO3 version to 6.2.14-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_6.2.x> [Category:TYPO3
6.2](Category:TYPO3_6.2 "wikilink") <Category:2015>
