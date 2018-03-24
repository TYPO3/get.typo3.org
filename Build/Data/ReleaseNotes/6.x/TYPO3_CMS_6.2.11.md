Release Notes for TYPO3 CMS 6.2.11
==================================

This document contains information about TYPO3 CMS 6.2.11 which was
released on March 17th, 2015.

News
----

This release is a bug fix release.

Notes
-----

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    07bd9ad3c7fe8af4468160e62dabe6c2  typo3_src-6.2.11.tar.gz
    9fc257cdc3329171b0a5e8bfbcb64eff  typo3_src-6.2.11.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[6.2.10](TYPO3_CMS_6.2.10 "wikilink"):

    2015-03-17  08687ec                  [RELEASE] Release of TYPO3 6.2.11 (TYPO3 Release Team)
    2015-03-16  22db119  #65577          [FOLLOWUP][BUGFIX] Handle exceptions in Logging API (Steffen Müller)
    2015-03-16  089417c  #59616          [BUGFIX] Fix wrong enforcement of pid 0 for rootLevel = -1 in impexp (Marc Bastian Heinrichs)
    2015-03-15  0db2830  #65223          [BUGFIX] Do not remove FE session cookie if fe_user is logged in (Markus Klein)
    2015-03-15  705da95  #65638          [BUGFIX] Allow to disable Info->PageTSconfig again (Markus Klein)
    2015-03-15  a90e373  #59042          [TASK] Category fields are not added to TCA interface section (Oliver Hader)
    2015-03-15  8f60b2f  #65680          [TASK] Show suited TYPO3 versions at distributions (Andreas Fernandez)
    2015-03-15  78bf331  #65576          [BUGFIX] Avoid fatal for unserializable extension configuration (Stephan Großberndt)
    2015-03-15  4aa2f0c  #57292          [BUGFIX] RTE styling does not fit to TCEforms styling (Benjamin Mack)
    2015-03-14  89f9ec4  #65667          [BUGFIX] Resolve class name from aliases managed by composer (Helmut Hummel)
    2015-03-13  d7d00d4  #65420          [FOLLOWUP] Do not respect autoload info if core repo is composer root (Helmut Hummel)
    2015-03-13  eb4a357  #65673          [BUGFIX] FAL: Allow filenames like "0" (Malte Muth)
    2015-03-12  ca0aedf  #60545          [BUGFIX] Consider subfolder in absolute links (Markus Klein)
    2015-03-12  4356284  #65126          [BUGFIX] Missing relations when saving flexform fields (Stephan Großberndt)
    2015-03-12  54b0b7e  #63373          [TASK] EXT:dbal: Harden unit tests for expression chunks (Andreas Fernandez)
    2015-03-12  8fedc9e  #55774,#55775,  [TASK] Add IE 11 detection to ExtJS (Lorenz Ulrich)
    2015-03-12  d392b3f  #65668          [BUGFIX] PHP Warning in HistoryService (Oliver Hader)
    2015-03-12  4995a82  #65689          [BUGFIX] Use a typecast to ensure correct value (Georg Ringer)
    2015-03-12  6ff644d  #58824          [TASK] Add functional test for imports with forced uids (Marc Bastian Heinrichs)
    2015-03-11  65c2fd0  #57413          [BUGFIX] Correct trim of trailing slash (Andreas Fernandez)
    2015-03-11  31d0458  #65569          [TASK] Remove deprecated "strict" PHPUnit option (Mathias Brodala)
    2015-03-11  ae317f2  #52607          [BUGFIX] Add domain model validators only once (Alexander Schnitzler)
    2015-03-11  47cbb9d  #65666          [BUGFIX] Properly handle absolute links in typolink() (Markus Klein)
    2015-03-11  8c31180  #47372          [BUGFIX] Correct upload field name for TCA internal_type file (Wouter Wolters)
    2015-03-10  26bb5e0  #63550          [BUGFIX] Re-enable menu configuration caching (Martin Helmich)
    2015-03-10  7cd196b  #65646          [BUGFIX] Scheduler misses the "stop" icon when a task is running (Ernesto Baschny)
    2015-03-10  6f62632  #63991          [BUGFIX] DBAL: Set allowNull for insert and update queries to TRUE (Armin Ruediger Vieweg)
    2015-03-10  4f9799b  #65634          [BUGFIX] Use "user_auth" index for DataHandler:printLogErrorMessages (Andreas Fernandez)
    2015-03-09  485668b  #65624          [BUGFIX] Respect newlines in ['SYS']['binSetup'] (Nicole Cordes)
    2015-03-07  aba076a  #65577          [BUGFIX] Handle exceptions in Logging API (Markus Klein)
    2015-03-06  1248078  #65564          [BUGFIX] Fix labels in linkvalidator (Georg Ringer)
    2015-03-06  fd0f56b  #61463          [BUGFIX] Allow processed folders in different storage (Helmut Hummel)
    2015-03-05  2203c5e  #65554          [TASK] Update to phpunit 4.5 (Christian Kuhn)
    2015-03-05  9f46236  #63728          [BUGFIX] Avoid getTCAtypeValue-calls in DataHandler->fillInFieldArray (Stephan Großberndt)
    2015-03-05  844dc39  #59015          [BUGFIX] Catch all errors on adding files of sys_files to export (Marc Bastian Heinrichs)
    2015-03-05  0ba442b  #60226          [FOLLOWUP][BUGFIX] Prevent wrong ref_index for fields with soft references (Nicole Cordes)
    2015-03-05  70ed6e3  #65501          [BUGFIX] Normalize font-size in install tool (Benjamin Kott)
    2015-03-04  1bd123a  #64733          [BUGFIX] Reload extension list after update (Nicole Cordes)
    2015-03-04  4ed8c45  #64920          [BUGFIX] Update misleading help text about deprecated/removed features (Michael Schams)
    2015-03-04  6781f3f  #65485          [BUGFIX] Remove RemoveXSS credit link (Christian Kuhn)
    2015-03-04  835be9a  #65378          [BUGFIX] Regression when scaling/cropping in GIFBUILDER (Torben Hansen)
    2015-03-03  223e087  #63676,#63782   [BUGFIX] Do not fetch records from tables without references (Stephan Großberndt)
    2015-03-02  57f749d  #57393          [BUGFIX] Prevent infinite loop in TceformsUpdateWizard (Nicole Cordes)
    2015-03-02  23b8d74  #65468          [BUGFIX] Fix listAll GET parameter case in indexed_search (Alexander Stehlik)
    2015-03-02  64cf5ee  #65273          [BUGFIX] Properly handle XLF translation file detection (Markus Klein)
    2015-03-02  aef204f  #48965          [BUGFIX] Add property "uidLocal" to extbase FileReference model (Jost Baron)
    2015-03-02  f52bfac  #55699          [BUGFIX] Show data of valid columns in element info (Marc Bastian Heinrichs)
    2015-03-02  4af8a63  #65433          [BUGFIX] Invalid back path of ImageViewHelper in TYPO3 backend (Oliver Hader)
    2015-03-02  68caf38  #65454          [TASK] Backport functional / unit bootstrap changes to 6.2 (Oliver Klee)
    2015-03-02  f5d526d  #58307          [BUGFIX] Invalid reference count on storing new child records in FlexForm (Oliver Hader)
    2015-03-02  c0b7c44  #65447          [BUGFIX] Prevent redirection loop for shortcuts (Nicole Cordes)
    2015-03-01  8cdf89c  #65335          [BUGFIX] File must use MIME type from index record (Andreas Wolf)
    2015-03-01  015b15d  #65248          [BUGFIX] Let Scheduler handle storage indexing exception (Francois Suter)
    2015-03-01  a20d223  #65434          [FOLLOWUP][BUGFIX] Respect interfaces as well when checking class existence (Helmut Hummel)
    2015-03-01  6d2b05b  #65434          [BUGFIX] Respect interfaces as well when checking class existence (Helmut Hummel)
    2015-03-01  84176a1  #25594          [BUGFIX] Code completion in t3editor behind operator (Frederic Gaus)
    2015-03-01  d21b223  #65040          [BUGFIX] Check default storage first to find default upload folder (Frans Saris)
    2015-03-01  e1027eb  #25732          [BUGFIX] t3editor: Add code autocompletion for listNum (Frederic Gaus)
    2015-02-28  dc6a2fe  #65420          [TASK] Do not respect autoload info if core repo is composer root (Helmut Hummel)
    2015-02-28  75302df  #65358          [FOLLOWUP][BUGFIX] Allow file:// links in Element Browser (Nicole Cordes)
    2015-02-28  6bc5d5b                  [BUGFIX] SelectViewHelper must respect option(Value|Label)Field for arrays (Alexander Schnitzler)
    2015-02-28  fd63368  #65421          [FOLLOWUP][BUGFIX] Prevent wrong ref_index for fields with soft references (Nicole Cordes)
    2015-02-28  f47d624  #60226          [BUGFIX] Prevent wrong ref_index for fields with soft references (Nicole Cordes)
    2015-02-28  40281c4  #41728          [BUGFIX] Escape regex chars when building sWordRegEx (Alexander Stehlik)
    2015-02-28  9bfc330  #65358          [BUGFIX] Allow file:// links in Element Browser (Nicole Cordes)
    2015-02-28  e1d7254  #49071          [BUGFIX] Rethrow Extbase scheduler task exceptions (Mathias Brodala)
    2015-02-27  9759533  #65102          [BUGFIX] Workspaces: Fix broken buttons in frontend (Andreas Fernandez)
    2015-02-27  8c70746  #65187          [BUGFIX] Fix cookie evaluation order (Helmut Hummel)
    2015-02-27  3c56167  #56655          [BUGFIX] Display Info of File in popup instead of File Metadata (Fabien Udriot)
    2015-02-27  b66a0f0  #64253          [BUGFIX] Set correct workspace ID when updating referenceIndex for files (Markus Klösges)
    2015-02-26  b6b6da3                  [TASK] Set TYPO3 version to 6.2.11-dev (TYPO3 Release Team)


