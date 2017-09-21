Release Notes for TYPO3 CMS 6.2.27
==================================

This document contains information about TYPO3 CMS 6.2.27 which was
released on September 13th, 2016.

News
----

This release is a combined bug fix and security release.

Notes
-----

Find more details in the security bulletins:

-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-021/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-022/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    9eaceae43cc8f67b3547f7275b8ce4c5  typo3_src-6.2.27.tar.gz
    90b75b8b6f700457e2a42d7040bc7e9e  typo3_src-6.2.27.zip

SHA256 checksums
----------------

    1f8ff63fbc51f68fd8a821fe21e3be35f20a3d2d8bcef0fe5b3353d2b7d25383  typo3_src-6.2.27.tar.gz
    1e49bc7e7a7f4509308f2a2a625d2754eeeb7bafee95fd1528d1d1a94f3e52f6  typo3_src-6.2.27.zip

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
[6.2.26](TYPO3_CMS_6.2.26 "wikilink"):

    2016-09-13  46b333a                  [RELEASE] Release of TYPO3 6.2.27 (TYPO3 Release Team)
    2016-09-13  8aecd0c  #76462          [!!!][SECURITY] Mitigate potential cache flooding (Benni Mack)
    2016-09-13  b04d394  #77906          [SECURITY] Fix select_key XSS in PageLayoutView (Georg Ringer)
    2016-09-13  67e63a9  #77204          [BUGFIX] Prevent orphaned tags in Typo3DatabaseBackend (Thomas Schlumberger)
    2016-09-02  44949df  #64176          [BUGFIX] Prevent fatal error if no column in page layout is defined (Nicole Cordes)
    2016-09-02  0f77d52  #77755          [BUGFIX] Check for null in debug_check_recordset (Morton Jonuschat)
    2016-08-23  b495775  #77588          [BUGFIX] Fix sql error in EXT:linkvalidator (Daniel Windloff)
    2016-08-19  b2c9915  #76441          [BUGFIX] Index all file mounts in FAL indexer scheduler task (Hannes Bochmann)
    2016-08-18  dc83c6d  #76928          [BUGFIX] Allow URL path segments like "typo3" (Mathias Brodala)
    2016-08-18  ba4521b  #67894          [BUGFIX] Felogin form with default layout is not visible (Michiel Roos)
    2016-07-19  95c3944  #77098          [BUGFIX] Prepend current path to versionNumberInFilename RewriteRule (Marco Huber)
    2016-07-19  95f1113                  [TASK] Set TYPO3 version to 6.2.27-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_6.2.x> [Category:TYPO3
6.2](Category:TYPO3_6.2 "wikilink") <Category:2016>
