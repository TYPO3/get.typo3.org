Release Notes for TYPO3 CMS 6.2.18
==================================

This document contains information about TYPO3 CMS 6.2.18 which was
released on February 16th, 2016.

News
----

This release is a combined bug fix and security release.

Notes
-----

Find more details in the security bulletins:

-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-001/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-002/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-003/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-004/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    6beefab7c748636430f066232bafe6cb  typo3_src-6.2.18.tar.gz
    41f6fddca50485c660a72eecd20ade52  typo3_src-6.2.18.zip

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
[6.2.17](TYPO3_CMS_6.2.17 "wikilink"):

    2016-02-16  0d56422                  [RELEASE] Release of TYPO3 6.2.18 (TYPO3 Release Team)
    2016-02-16  3256617  #58896          [SECURITY] SQLi in DBAL (Morton Jonuschat)
    2016-02-16  c88aa57  #54205          [SECURITY] XSS in form extension (Wouter Wolters)
    2016-02-16  4e639be  #25244          [SECURITY] XSS in content element "Form" (Helmut Hummel)
    2016-02-16  a511709  #72240          [SECURITY] XSS in Link Validator (Steffen Müller)
    2016-02-12  ba30380  #73083          [BUGFIX] Deduplicate "Hide default translation of page" logic (Morton Jonuschat)
    2016-02-12  1afa712  #72388          [FOLLOWUP][BUGFIX] Table wizard: large fields and BR-tags (Morton Jonuschat)
    2016-02-12  413430b  #73006          [BUGFIX] Failing Unit Tests on Windows systems (Nicole Cordes)
    2016-02-10  0548314  #59180          [BUGFIX] Re-enable export of multiple records via clipboard (Bernhard Kraft)
    2016-02-09  f9599a1  #65866          [BUGFIX] Fallback to version of ext_emconf.php if not found in Composer (Peter Niederlag)
    2016-02-08  3af6506  #58693          [BUGFIX] impexp ignore file reference records with missing related files (Marc Bastian Heinrichs)
    2016-02-05  df80dee  #73158          [BUGFIX] ImpExp: Correct casing for FAL function call (Benni Mack)
    2016-02-05  d1ca79c  #73103          [BUGFIX] Off-by-one error in FAL's LocalDriver (Andreas Fernandez)
    2016-02-01  daaf9e0  #72936          [BUGFIX] Reallow '0' as valid userFunc argument in TypoScript (Frank Naegler)
    2016-01-29  05d2711  #70307          [BUGFIX] CategoryRegistry::addTcaColumn() ignores displayCond (Benni Mack)
    2016-01-29  fd30582  #72964          [BUGFIX] Clear cache system icon is shown for non admin in dev context (Benni Mack)
    2016-01-26  4fbed24  #72943          [TASK] Switch mirror links to https (Nicole Cordes)
    2016-01-22  a59665c  #72635          [BUGFIX] SimpleFileBackend::setCacheDirectory returns valid path name (Jan Helke)
    2016-01-22  941308f  #72892          [BUGFIX] Remove newline from PLACEHOLDER marker in indexed_search (Wouter Wolters)
    2016-01-21  842e6dfdb  #72786          [TASK] Hide "Save document and create a new one" in filelist (Gianluigi Martino)
    2016-01-20  89b1024                  [BUGFIX] Add missing return type to createVersionNumberedFilename (Thomas Löffler)
    2016-01-18  87c98c7  #72762          [BUGFIX] Clarify extension dependency skipping (Nicole Cordes)
    2016-01-16  9f5c9df  #72755          [BUGFIX] Apply hsc() to exception debug output (Markus Klein)
    2016-01-15  908a266  #72357          [BUGFIX] Copy DataHandler::enableLogging to sub objects (Morton Jonuschat)
    2016-01-15  739a3de  #72388          [BUGFIX] Table wizard: large fields and BR-tags (Anja Leichsenring)
    2016-01-15  43ee970  #72734          [FOLLOWUP] Fix call to not existing function (Anja Leichsenring)
    2016-01-15  1278e9f  #72648          [BUGFIX] Automatically remove BOM from files before concatenation (Christian Futterlieb)
    2016-01-15  35745fa  #72712          [TASK] Allow access to visible content within /.well-known/ directory (Cedric Ziel)
    2016-01-15  640c494  #72709          [BUGFIX] ImpExp: Do not show error message for recursive relations (Markus Klein)
    2016-01-08  1eea942  #72598          [BUGFIX] Remove debug echo from checkDeniedSuburls (Morton Jonuschat)
    2016-01-01  264d1bd  #72501          [TASK] Update copyright year to 2016 (Benni Mack)
    2015-12-30  967391f  #72475          [SECURITY] XSS in belog module (Morton Jonuschat)
    2015-12-30  639f8f2  #66135          [BUGFIX] Computed properties are queried in workspace context (Oliver Hader)
    2015-12-29  d959bb8  #72450          [TASK] Expose identifier and path of functional test instance (Oliver Hader)
    2015-12-23  141cd7d  #72047          [BUGFIX] Fix NumberRangeValidator using startRange and endRange (Stephan Großberndt)
    2015-12-21  eb1eb09                  [TASK] Set TYPO3 version to 6.2.18-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_6.2.x> [Category:TYPO3
6.2](Category:TYPO3_6.2 "wikilink") <Category:2016>
