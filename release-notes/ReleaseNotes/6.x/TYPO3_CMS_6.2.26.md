Release Notes for TYPO3 CMS 6.2.26
==================================

This document contains information about TYPO3 CMS 6.2.26 which was
released on July 19th, 2016.

News
----

This release is a combined bug fix and security release.

Notes
-----

Find more details in the security bulletins:

-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-014/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-015/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-016/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-017/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-018/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    64f9a9f98605f99117c449c24ddcbd18  typo3_src-6.2.26.tar.gz
    30ccfe47ae596426856af2aef32d2391  typo3_src-6.2.26.zip

SHA256 checksums
----------------

    7668e3a360be0d7d7911e2fdc50772c935210b8e3f9b63efdcd27a854db94d8a  typo3_src-6.2.26.tar.gz
    b41ec832d10fd2e09e515c848a40b6ebe51df08425d38f52f7ee91a3bf6d5b5e  typo3_src-6.2.26.zip

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
[6.2.25](TYPO3_CMS_6.2.25 "wikilink"):

    2016-07-19  d719c97                  [RELEASE] Release of TYPO3 6.2.26 (TYPO3 Release Team)
    2016-07-19  2bc8727  #76358          [SECURITY] Link fields accept Javascript code when using URI Data Scheme (Valentin Despa)
    2016-07-19  485396d  #75933          [SECURITY] Prevent persistent username in filesystem (Wouter Wolters)
    2016-07-19  cd18fb5  #75740          [SECURITY] SQLi in AuthenticationService (Andreas Fernandez)
    2016-07-19  0068e6b  #73461          [SECURITY][FEATURE] Disable import module for non admin users (Christian Kuhn)
    2016-07-19  d7eafe8  #76922          [SECURITY] Prevent XSS in IRRE elements (Nicole Cordes)
    2016-07-19  8051405  #76344          [SECURITY] Escape the link text in EmailViewHelper (Wouter Wolters)
    2016-07-19  6cb7aa6  #31244          [SECURITY] Prevent XSS in ContentObjectRenderer (Stefan Neufeind)
    2016-07-07  40d771a  #73490          [BUGFIX] Field is not added to TCA if part of fieldname exists (Wouter Wolters)
    2016-06-30  f24b023  #76881          [TASK] Fix phpdoc of FileRepository (Eric Chavaillaz)
    2016-06-13  9014d11  #76617          [BUGFIX] Raise minimum version for typo3/cms-composer-installers (Helmut Hummel)
    2016-06-07  13e7a20  #76070          [BUGFIX] Prevent temp file generation in Unit Test (Nicole Cordes)
    2016-05-28  6aaed26  #76348          [TASK] Block access to /typo3_src and /typo3/vendor (Stephan Großberndt)
    2016-05-28  396e96d  #60173          [FOLLOWUP][BUGFIX] Re-enables fileDenyPattern check for admin users (Nicole Cordes)
    2016-05-27  cd88856  #60173          [BUGFIX] Re-enables fileDenyPattern check for admin users (Torben Hansen)
    2016-05-24  49f9044                  [TASK] Set TYPO3 version to 6.2.26-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_6.2.x> [Category:TYPO3
6.2](Category:TYPO3_6.2 "wikilink") <Category:2016>
