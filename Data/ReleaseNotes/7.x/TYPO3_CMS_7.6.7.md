Release Notes for TYPO3 CMS 7.6.7
=================================

This document contains information about TYPO3 CMS 7.6.7 which was
released on May 17th, 2016.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    b8d114493d8e402c2bbf0cc0656acb0c  typo3_src-7.6.7.tar.gz
    c66505a4ec314c529dc5fd3df1e31136  typo3_src-7.6.7.zip

SHA256 checksums
----------------

    697b3afd6cceaed7c4a32044c116f08c158e9ed51278007769a77606837da494  typo3_src-7.6.7.tar.gz
    f18830427bd9ba1cb1cda5812a44d85ed10c27cc24cf15b38f8462663aaae1e0  typo3_src-7.6.7.zip

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
[7.6.6](TYPO3_CMS_7.6.6 "wikilink"):

    2016-05-17  335fa28                  [RELEASE] Release of TYPO3 7.6.7 (TYPO3 Release Team)
    2016-05-17  7f93c99  #75721          [BUGFIX] Use push parser instead of pull parser on fetching extension list (Oliver Hader)
    2016-05-17  b1f8398  #76205          [BUGFIX] Correctly treat uploaded file when replacing a file (Markus Klein)
    2016-05-17  ed76c36                  Revert "[BUGFIX] Load XML files of Extension Manager properly" (Oliver Hader)
    2016-05-16  f4bd6e6  #76187          [TASK] Make "$hookObject must implement interface FooInterface" more verbose (Andreas Fernandez)
    2016-05-12  e9f4623  #75958          [BUGFIX] Removes extra space from important (Tomita Militaru)
    2016-05-12  be1d307  #76071          [FOLLOWUP][TASK] Hide selected items in multipleSideBySide (Andreas Fernandez)
    2016-05-12  1e43986  #76136          [TASK] Make the whole update button in extension manager clickable (Gianluigi Martino)
    2016-05-11  794248d  #76132          [BUGFIX] Raise hostname length to 255 characters (Anja Leichsenring)
    2016-05-10  9df02e7  #76036          [BUGFIX] Show new content button for editors in page module again (Gianluigi Martino)
    2016-05-10  9351381  #76071          [TASK] Hide selected items in multipleSideBySide (Andreas Fernandez)
    2016-05-09  c02586d  #73144          [BUGFIX] Don't disable redirect after logout with showLogoutFormAfterLogin=1 (Daniel Goerz)
    2016-05-09  6431970  #75499,#70094   [BUGFIX] Allow opening custom doktype in the frontend (Wouter Wolters)
    2016-05-07  b9eab74  #75964          [BUGFIX] Harden database select step (Helmut Hummel)
    2016-05-07  adddeeb  #76070          [BUGFIX] Prevent temp file generation in Unit Test (Nicole Cordes)
    2016-05-06  1721b22  #76066,#76064   [TASK] Make .htaccess Apache 2.4 suitable (Marc von Schalscha-Ehrenfeld)
    2016-05-06  bf72ea6  #72211          [BUGFIX] Set correct ordering in EM "A/D" (Markus Sommer)
    2016-05-06  6701945  #72900          [BUGFIX] Only focus RTE if current focus is on body tag (Andreas Fernandez)
    2016-05-05  2165bea  #75977          [TASK] Add class form-control to textarea in image tests (Markus Sommer)
    2016-05-05  4c98e59  #75934          [TASK] Disallow access to documentation folders (Markus Klein)
    2016-05-05  2de1839  #76059          [BUGFIX] Supply renderType definition in flexform of EXT:felogin (Andreas Fernandez)
    2016-05-04  da045e1  #76052          [BUGFIX] Correctly initialize content object for plugins (Helmut Hummel)
    2016-05-04  d86c0df  #76051          [TASK] Make "No renderType definition" exception more verbose (Andreas Fernandez)
    2016-05-03  3f9ce89  #76033          [BUGFIX] Use correct identifier for copyFile permission (Markus Klein)
    2016-05-03  3cfb556  #75992          [TASK] Streamline styling of RTE context menu (Andreas Fernandez)
    2016-05-01  2cf85e7  #75994          [BUGFIX] Add confirm dialog on delete again (Frank Naegler)
    2016-04-30  53140f0  #74332          [BUGFIX] RTE: Determine correct context menu position (Andreas Fernandez)
    2016-04-30  239d16f  #75983          [BUGFIX] Fix JavaScript error for GMENU rollover (Frank Naegler)
    2016-04-30  05b3c41  #75809          [BUGFIX] Set semantic value to autocomplete (Nicole Cordes)
    2016-04-29  9394446  #75947          [BUGFIX] Allow maxitem=1 in TCA treeSelect again (Alexander Bigga)
    2016-04-29  83735bb  #71719          [BUGFIX] Exception editing inline mm with deleted child child (Christian Kuhn)
    2016-04-29  787546a  #75963          [TAKS] Document how to create custom postProcessors in FORM (Tymoteusz Motylewski)
    2016-04-28  a4c619b  #75954          [BUGFIX] Use correct timezone in DataMapperTest (Jigal van Hemert)
    2016-04-28  f2be9ad  #75946          [BUGFIX] Fix adding fields to an existing table in a specific position (Thomas Schlumberger)
    2016-04-27  ebce9d2  #75932          [BUGFIX] Avoid SQL error in ProcessedFileChecksumUpdate (Stephan Großberndt)
    2016-04-27  de01054  #75820          [BUGFIX] Make language module accessible without internet connection (Nicole Cordes)
    2016-04-27  ae09f87  #73209          [BUGFIX] PAGE_TSCONFIG_ID in flex form fields (Christian Kuhn)
    2016-04-27  7739b74  #70463          [BUGFIX] TCA Suggest Wizard usable with keyboard (Daniel Siepmann)
    2016-04-27  838ab3c  #75606          [BUGFIX] Override flex form field label with page TSConfig (Christian Kuhn)
    2016-04-27  a0942da  #75942          [TASK] Add documentation for removal of BigDocumentTemplate (Stephan Großberndt)
    2016-04-26  1c87b5d  #72883          [TASK] Replace colored icons with action icons (Frank Nägler)
    2016-04-26  8b6293b                  [TASK] Set TYPO3 version to 7.6.7-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_7.x> [Category:TYPO3
7](Category:TYPO3_7 "wikilink") <Category:2016>
