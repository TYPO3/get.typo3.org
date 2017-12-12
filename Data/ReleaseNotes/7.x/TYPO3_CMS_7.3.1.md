Release Notes for TYPO3 CMS 7.3.1
=================================

This document contains information about TYPO3 CMS 7.3.1 which was
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

    b4ee3d70b569c569654bc062df4da51f  typo3_src-7.3.1.tar.gz
    3d8c386ece8e3bd0764ddac2e4763120  typo3_src-7.3.1.zip

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
[7.3.0](TYPO3_CMS_7.3.0 "wikilink"):

    2015-07-01  55a1d87                  [RELEASE] Release of TYPO3 7.3.1 (TYPO3 Release Team)
    2015-07-01  6130d6f  #67458          [SECURITY] XSS in 3rd party library Flowplayer (Wouter Wolters)
    2015-07-01  0b67290  #59231          [SECURITY] Add hook to implement login protection methods (Nicole Cordes)
    2015-07-01  d9caccb  #67538          [SECURITY] Disallow access to fallback storage '0' (Nicole Cordes)
    2015-07-01  d7feb40  #34107          [SECURITY] Encode link text properly in typolink (Nicole Cordes)
    2015-07-01  128d241  #59211          [SECURITY] XSS in Filelist (Markus Bucher)
    2015-07-01  4c9aba9  #59258          [SECURITY] Regenerate session id upon login if needed (Helmut Hummel)
    2015-07-01  0decbf8  #56644          [SECURITY] Prevent edit of file metadata of files with no access (Marc Bastian Heinrichs)
    2015-07-01  2354dea  #67863          [BUGFIX] Skip dependency check for extensions (Nicole Cordes)
    2015-06-27  46f7253  #67773          [TASK] Travis fail form/RemovexssFilter not found (Christian Kuhn)
    2015-06-26  249e30e  #67767          [TASK] Include autoload info of all core extensions (Helmut Hummel)
    2015-06-25  47df8e0  #67735          [BUGFIX] Make ext_update working (Markus Klein)
    2015-06-24  01de093  #67617          [BUGFIX] EXT:reports does not recognize TYPO3 CMS 7.3.0 as released (Xavier Perseguers)
    2015-06-23  5e69a20  #67696          [TASK] Bump composer installer version (Helmut Hummel)
    2015-06-22  8fa7a66  #67630          [BUGFIX] Infinite loop with circular relations (Felix Oertel)
    2015-06-22  a6f0b28  #67614          [BUGFIX] RTE transformation not executed (Christian Kuhn)
    2015-06-22  9b2fe2a  #67595          [BUGFIX] VariableContainer should be available in getLayoutName (Christian Müller)
    2015-06-22  f7fdaa2  #67475          [BUGFIX] Include of flowplayer for 6.2 static template is wrong (Wouter Wolters)
    2015-06-22  fe9339b  #67586          [TASK] Add basic unit tests for ContentObjectRenderer::typoLink (Nicole Cordes)
    2015-06-15  667dc92                  [TASK] Set TYPO3 version to 7.3.1-dev (TYPO3 Release Team)


