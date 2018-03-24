Release Notes for TYPO3 CMS 6.2.29
==================================

This document contains information about TYPO3 CMS 6.2.29 which was
released on November 22nd, 2016.

News
----

This release is a combined bug fix and security release.

Notes
-----

Find more details in the security bulletins:

-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-023/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-024/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    2c9e782e14c6688a77d005fd904cc40e  typo3_src-6.2.29.tar.gz
    6ad92e04c2834d9d2aa05af4b955a59a  typo3_src-6.2.29.zip

SHA256 checksums
----------------

    2803a89698ea8fe776aa177660db6c0ddd1b2a3a034c5724f25e0cd3017e26e1  typo3_src-6.2.29.tar.gz
    63a3ca2f7b807db71e6952c9023a0de8ffe27c6e9e1fb4eed932941e2884b28f  typo3_src-6.2.29.zip

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
[6.2.28](TYPO3_CMS_6.2.28 "wikilink"):

    2016-11-22  ac6877b                  [RELEASE] Release of TYPO3 6.2.29 (TYPO3 Release Team)
    2016-11-22  5b9a2b4  #78557          [SECURITY] Prevent unnecessary unserialize in SuggestWizard (Nicole Cordes)
    2016-11-22  4a98563  #73453          [SECURITY] Disallow invalid encoding in GeneralUtility::validPathStr (Benni Mack)
    2016-11-18  a61499f  #78703          [BUGFIX] Use GeneralUtility::getUrl in DocumentationService->fetchDocument (Claus Due)
    2016-11-18  354b01b  #78739          [BUGFIX] Update session id in user property (Helmut Hummel)
    2016-11-15  ee1ef6a  #76153          [BUGFIX] Catch exceptions while dumping a file (Frans Saris)
    2016-11-13  83ab00a  #78238          [BUGFIX] Bind the cHash to the id of the "real" page (Helmut Hummel)
    2016-11-10  3980012  #78526          [BUGFIX] Use page uid instead of alias for cHash calculation (Helmut Hummel)
    2016-11-07  45e138c  #71340          [TASK] Provide documentation Settings.cfg (Gernot Schulmeister)
    2016-11-05  a861b18  #78540          [BUGFIX] Load ext_emconf information in extension installation (Nicole Cordes)
    2016-11-01  0c4a74e                  [TASK] Set TYPO3 version to 6.2.29-dev (TYPO3 Release Team)


