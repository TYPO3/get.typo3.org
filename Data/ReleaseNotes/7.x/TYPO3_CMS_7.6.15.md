Release Notes for TYPO3 CMS 7.6.15
==================================

This document contains information about TYPO3 CMS 7.6.15 which was
released on January 3rd, 2017.

News
----

This release is a combined bug fix and security release.

Notes
-----

Find more details in the security bulletins:

-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2017-001/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    2126e2291948674e6290269d62d372f4  typo3_src-7.6.15.tar.gz
    4f44064625feb682da3078c1c161d301  typo3_src-7.6.15.zip

SHA256 checksums
----------------

    e263bf3f20dbd50b5f790d25995f02785a35681d1c18406f571d10df5f75a9c9  typo3_src-7.6.15.tar.gz
    a1bc9b4359f53a67c088519baa945a3da2a6a00efd2e886a75efa5c9ba39c8d1  typo3_src-7.6.15.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.\
There were **changes in DB tables index\_phash and
sys\_file\_reference** compared to 7.6.11. Log into TYPO3 Install Tool,
click on “Compare current database with specification” and apply
changes.\
It might be required to clear all caches; the “important actions”
section in the TYPO3 Install Tool offers the accordant possibility to do
so.

Changes
-------

Here is a list of what was fixed since
[7.6.14](TYPO3_CMS_7.6.14 "wikilink"):

    2017-01-03  e5cd96f                  [RELEASE] Release of TYPO3 7.6.15 (TYPO3 Release Team)
    2017-01-03  4c85448  #79114          [SECURITY] Protect Mailtransport (Wouter Wolters)
    2017-01-01  ed23d0b  #78908          [BUGFIX] Ensure correct field ordering in CSV export (Nicole Cordes)
    2016-12-31  f20356a  #79126          [TASK] Add functional test covering copying a page translated in free mode (Tymoteusz Motylewski)
    2016-12-31  b35192a  #70106          [BUGFIX] Do not use realpath for temporary file names (Stefan Froemken)
    2016-12-31  c4bc3e1  #78128          [BUGFIX] Remove relations from MM table (Nicole Cordes)
    2016-12-31  218e6e5  #79048          [BUGFIX] Fix interaction with versions on "All workspaces" tab (Oliver Hader)
    2016-12-30  533e4cd  #78974          [BUGFIX] Check for loaded EXT:version in getLiveVersionIdOfRecord (Thomas Hohn)
    2016-12-22  f43b53d  #79010          [BUGFIX] Show loading label while scanning broken extensions (Nicole Cordes)
    2016-12-21  7354e61  #79064          [BUGFIX] Documentation of #53542 contains wrong issue number (Stephan Großberndt)
    2016-12-20  0fe9f12  #79037          [BUGFIX] Set title for select icons (Marco Huber)
    2016-12-16  4983935  #78915,#78977   [BUGFIX] Optimize cache handling in ReflectionService (Helmut Hummel)
    2016-12-16  6a77b6c  #76408          [BUGFIX] Filebrowser: Plus-Sign disappear for not-selectable items now (Michael Oehlhof)
    2016-12-15  adafd6d  #72654,#62660   [BUGFIX] Improve DataHandler handling for dbType fields (Nicole Cordes)
    2016-12-15  eff6c60  #78991          [BUGFIX] Load page info when only getting external tables (Johannes Schlier)
    2016-12-15  60cc612  #78977          Revert "[BUGFIX] Reflection Cache does not save methodReflections" (Helmut Hummel)
    2016-12-13  d3cd783  #78925          [BUGFIX] Fix exception in QuickEdit mode for empty pages (Manuel Selbach)
    2016-12-12  b9f493e  #78923          [BUGFIX] Order extensions by integerVersion instead of version (Ulrik Høyer Kold)
    2016-12-12  b4f2dc4  #78915          [BUGFIX] Reflection Cache does not save methodReflections (Valentin Despa)
    2016-12-09  97e7529  #78942          [BUGFIX] Use proper .xlf file ending for RTE demo config (Benni Mack)
    2016-12-08  36c8e91  #78924          [BUGFIX] SwapLocking should use proper file name (Benni Mack)
    2016-12-08  1ad7aa1  #78902          [BUGFIX] Fix IP lock clause when [FE][lockIP] is 0 (Wouter Wolters)
    2016-12-08  96af95c  #73241          [BUGFIX] Do not fetch pages with pid < 0 in prepareCacheFlush (Steffen Göde)
    2016-12-07  8d9b76b  #78730          [BUGFIX] rtehtmlarea: Fix isRequiredClass check (Benjamin Franzke)
    2016-12-07  2852669  #78551          [BUGFIX] Reset hidden field information in FormViewhelper (Nicole Cordes)
    2016-12-07  b42649e  #78903          [BUGFIX] Fix missing tooltips in insert special character window (Wouter Wolters)
    2016-12-05  5622752  #78886          [CLEANUP] Simplify registerPageTSConfigFile description (Mathias Brodala)
    2016-12-05  843ddc4  #78887          [CLEANUP] Simplify addStaticFile description (Mathias Brodala)
    2016-12-04  8b222e6  #78802          [BUGFIX] T3Editor getPlugins must write to response object (Markus Klein)
    2016-12-03  b4b300f  #47384          [BUGFIX] Skip swapping/publishing of deleted records (Oliver Hader)
    2016-12-03  9550cdf  #67136          [BUGFIX] Fix display of HTTP headers using pageNotFound handler (Michael Oehlhof)
    2016-12-03  004b540  #78677          [BUGFIX] Install extension when dependency check is skipped (Nicole Cordes)
    2016-12-03  ebbfb0a  #78854          Revert "[BUGFIX] Disable not required checks on cli" (Alexander Stehlik)
    2016-12-03  cbdbe20  #78871          [BUGFIX] Unify line endings in ext-lang-am.js (Alexander Stehlik)
    2016-12-03  f2e1d8d  #69637          [BUGFIX] Fix maximum height of preview links dialog (Manuel Glauser)
    2016-12-03  4561d4a  #77942          [BUGFIX] Fix doubleclick-doublesubmit touchup (Markus Timtner)
    2016-12-03  1441299  #17904          [BUGFIX] Make showAccessRestrictedPages work (Claus Due)
    2016-12-03  6f8346b  #78761          [BUGFIX] Avoid duplicate calls to update reference index (Claus Due)
    2016-12-03  0558c7d  #78693          [BUGFIX] Reduce expensive calls in AbstractMenuContentObject (Claus Due)
    2016-12-03  53a94aa  #78590          [BUGFIX] Set dimensions for custom svg TYPO3 backend logo (Georg Ringer)
    2016-12-02  8e071c5  #76174          [BUGFIX] Flaky child references handling for pages_language_overlay (Andreas Allacher)
    2016-12-02  cb7453b  #78594          [BUGFIX] Resolves editing problem in language mode (Markus Sommer)
    2016-12-02  eaaf923  #77808          [TASK] Enforce Linux Line endings in .gitattributes (Kay Strobach)
    2016-12-02  b4aceea  #77097          [FOLLOWUP][BUGFIX] Reset FormViewHelper on execution (Anja Leichsenring)
    2016-12-02  3d01057  #77097          [BUGFIX] Reset FormViewHelper on execution (Helmut Hummel)
    2016-12-01  a1133ac  #78858          [BUGFIX] Force string casting of $parserList (Andreas Fernandez)
    2016-12-01  5597dd6  #78795          [BUGFIX] Avoid RTE context menu collapse to arrows only (Claus Due)
    2016-12-01  b73fcd3  #78773          [TASK] Remove has-call to caching framework in explodeSoftRefParserList (Wouter Wolters)
    2016-12-01  bdec6bd  #75184          [FOLLOWUP][BUGFIX] Don't set resource storages permanently offline (Oliver Hader)
    2016-12-01  3ba9172  #78776          [BUGFIX] Show errors on ajax file actions (Alexander Opitz)
    2016-12-01  7ba7815  #75980          [BUGFIX] RTE TYPO3Link PopupWindow size fallback (Pierrick Caillon)
    2016-12-01  c02d4e3  #78786          [BUGFIX] Disable not required checks on cli (Markus Sommer)
    2016-12-01  7aee03d  #78707          [TASK] Add missing space between language flag and title language diff (Gianluigi Martino)
    2016-12-01  cfc4aaf  #75184          [BUGFIX] Don't set resource storages permanently offline automatically (Marc Willmann)
    2016-12-01  e689281  #78001          [BUGFIX] Fix incorrect position of RTE context menu (Claus Due)
    2016-12-01  8ec5240  #78687          [BUGFIX] Fix wrong indentation of PageTree in MoveElements (Michael Oehlhof)
    2016-11-29  5438e5c                  [TASK] Set TYPO3 version to 7.6.15-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_7.x> [Category:TYPO3
7](Category:TYPO3_7 "wikilink") <Category:2017>
