Release Notes for TYPO3 CMS 7.6.10
==================================

This document contains information about TYPO3 CMS 7.6.10 which was
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

    b0271dd4914e5e769298a0804fe53f58  typo3_src-7.6.10.tar.gz
    98a718c492de55ab682c46a977148e85  typo3_src-7.6.10.zip

SHA256 checksums
----------------

    0e5e45d8a5cc2928f799922602ba2899dda2cda1d9eca4f79b7f4a8cdd010286  typo3_src-7.6.10.tar.gz
    88974cc8d9d6088258442ca72047e6ee5f4a7066b605bbce7174cf55a3c15fd5  typo3_src-7.6.10.zip

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
[7.6.9](TYPO3_CMS_7.6.9 "wikilink"):

    2016-07-19  4722807                  [RELEASE] Release of TYPO3 7.6.10 (TYPO3 Release Team)
    2016-07-19  257538a  #76358          [SECURITY] Link fields accept Javascript code when using URI Data Scheme (Valentin Despa)
    2016-07-19  7471988  #75933          [SECURITY] Prevent persistent username in filesystem (Wouter Wolters)
    2016-07-19  6e35fee  #75740          [SECURITY] SQLi in AuthenticationService (Andreas Fernandez)
    2016-07-19  1374e99  #73461          [SECURITY][FEATURE] Disable import module for non admin users (Christian Kuhn)
    2016-07-19  a333ce3  #76922          [SECURITY] Prevent XSS in IRRE elements (Nicole Cordes)
    2016-07-19  1626732  #76344          [SECURITY] Escape the link text in EmailViewHelper (Wouter Wolters)
    2016-07-19  7dc9baf  #31244          [SECURITY] Prevent XSS in ContentObjectRenderer (Benni Mack)
    2016-07-16  7dd9917  #76988          [BUGFIX] Use correct paste-into icons in file, list and page module (Frans Saris)
    2016-07-16  bf5a0a5  #77123          [TASK] Fix composer branch alias for 7.6 branch (Helmut Hummel)
    2016-07-15  c8ec129  #77085          [TASK] Better preview image quality for youtube videos (Raphael Graf)
    2016-07-14  a4d6a76  #76616          [BUGFIX] Clean preview of collapsed flexform section (Jigal van Hemert)
    2016-07-11  dd54663  #77029          [BUGFIX] Remove call to not existing function (Anja Leichsenring)
    2016-07-11  35178d8  #76441          [BUGFIX] Index all file mounts in FAL indexer scheduler task (Hannes Bochmann)
    2016-07-11  de4f139  #73565          [TASK] Move CompilableInterface to each condition ViewHelper (Claus Due)
    2016-07-11  e64cc64  #76246          [BUGFIX] Adjust signature of PageTreeView::wrapIcon (Elmar Hinz)
    2016-07-09  453bb0e  #76990          [TASK] Remove direct usage of mb_ methods in the core (Georg Ringer)
    2016-07-08  1a5f242  #76067          [BUGFIX] Enforce processing folder generation (Nicole Cordes)
    2016-07-08  1170c42                  Revert "[TASK] Update mso/idna-convert to 1.1.0" (Morton Jonuschat)
    2016-07-07  2b4c588  #76790          [TASK] Update mso/idna-convert to 1.1.0 (Wouter Wolters)
    2016-07-07  6c0ac42  #76984          [BUGFIX] Unsupported declare 'strict_types' (Christian Kuhn)
    2016-07-07  53dd37a  #76980          [BUGFIX] PHP 7.1 unit tests (Christian Kuhn)
    2016-07-06  954713f  #76888          [BUGFIX] Replace ###CURRENT_PID### with value from DB within FlexForms (Steffen Müller)
    2016-07-06  6fa65d2  #76901          [BUGFIX] Reset SYS/exceptionalErrors in live preset (Benni Mack)
    2016-07-06  e9273be  #76480          [BUGFIX] Define 0 as a valid page id in Ext.ux.state.TreePanel (Andreas Fernandez)
    2016-07-05  fca66d8  #76941          [BUGFIX] Prevent click event on IRRE localize/synchronize (Benni Mack)
    2016-07-05  5a87774  #76947          [BUGFIX] Adodb: PHP 7.1 compatibility (Christian Kuhn)
    2016-07-05  71e699a  #76481          [BUGFIX] Prevent double escaping in quickedit menu (Benni Mack)
    2016-07-02  0c18454  #73490          [BUGFIX] Field is not added to TCA if part of fieldname exists (Wouter Wolters)
    2016-07-01  0901d60  #76889          [TASK] Drop composer API token from travis build (Helmut Hummel)
    2016-06-30  323f0c3  #76881          [TASK] Fix phpdoc of FileRepository (Eric Chavaillaz)
    2016-06-30  30328a5  #76815          [BUGFIX] Strip trailing slash from parsed doc comment (Helmut Hummel)
    2016-06-30  e5e065b  #76886          [BUGFIX] Increase db size of table pages field module (Christian Kuhn)
    2016-06-29  ec361d0  #76707          [BUGFIX] Trigger login refresh submit manually (Andreas Fernandez)
    2016-06-29  c8234de  #76019          [BUGFIX] Handle missing option values in CHECKBOXGROUP and RADIOGROUP (Andreas Häfner)
    2016-06-28  9fcc0c1  #75804          [BUGFIX] Correctly apply titleText set in RTE TSconfig (Jorgen van der Kroon)
    2016-06-24  fbf828b  #76788          [CLEANUP] Make URI Builder call readable in View Helpers (Helmut Hummel)
    2016-06-24  847624a  #76737          [TASK] Add cssLibs to pre processing hooks in page renderer (Daniel Dorndorf)
    2016-06-23  9adb384  #74014          [BUGFIX] EXT:form - Fix setting of additional f:form arguments via TS (Ralf Zimmermann)
    2016-06-23  e4c61c8  #76722          [BUGFIX] Fix wrong hideTable check in SuggestWizard (Georg Ringer)
    2016-06-20  fa09dec  #73218          [BUGFIX] EXT:form - mandatoryValidationMessages unset after submit (Ralf Zimmermann)
    2016-06-20  966d98d  #76628          [BUGFIX] Use BackendUtility::deleteClause in LinkAnalyzer (Georg Ringer)
    2016-06-20  b46c7eb  #76403          [BUGFIX] baseUrlWrap can handle url without scheme again (Wouter Wolters)
    2016-06-17  b1043ab  #75576          [BUGFIX] EXT:form - Fix broken inArray validator (Daniel Lorenz)
    2016-06-15  1b8162a  #76363          [BUGFIX] Make Install Tool forms submitable via keyboard (Markus Klein)
    2016-06-13  e3c7f07  #76617          [BUGFIX] Raise minimum version for typo3/cms-composer-installers (Helmut Hummel)
    2016-06-13  8a5d984  #76406          [BUGFIX] Prevent reset of user settings in getFromDottedNotation() (Daniel Goerz)
    2016-06-11  e2cf3c9  #76561          [BUGFIX] Fix flexform inline record editing with empty uc (Jörg Bösche)
    2016-06-10  289ce8d  #76449          [TASK] Apply CGL compatibility (PSR-1 and PSR-2) (Wouter Wolters)
    2016-06-09  7d68733  #76268          [BUGFIX] Improve domObjectId splitting for inline in flexform (Anja Leichsenring)
    2016-06-08  452acbd  #76432          [BUGFIX] Fix Livesearch for Editors (Marcus Schwemer)
    2016-06-08  dce3f96  #76529          [BUGFIX] Wrong issue number reference in .rst file (Christian Kuhn)
    2016-06-08  5b4dd0c  #76500          [BUGFIX] Scheduler to show checkbox if "bool" typehint used in Controller (Roland Waldner)
    2016-06-08  ebe80d6  #76302          [BUGFIX] Fix output of DebugUtility (Helmut Hummel)
    2016-06-08  8d6fc73  #76242          [BUGFIX] Only check 'CType' when removing items from NewContentElementWizard (Morton Jonuschat)
    2016-06-07  613e885  #76030          [BUGFIX] Allow to add custom styles for admin panel (Zbigniew Jacko)
    2016-06-07  f1db2b3  #76456          [BUGFIX] Fix password evaluation for TCA input field (mtoscanelli)
    2016-06-07  e6c3b1b  #76031          [BUGFIX] getPageOverlay_preProcess respect changes done in hooks (Andreas Allacher)
    2016-06-07  206256a  #76482          [BUGFIX] Install Tool: target="_blank" on externals links (Ian SEBBAGH)
    2016-06-07  0bfa764  #65789          [WIP][BUGFIX] Introduce exception for using offset without limit (Ian SEBBAGH)
    2016-06-07  09c753a  #75160          [TASK] Functional tests for LocalizationController (Andreas Fernandez)
    2016-06-06  51d429d  #73182          [BUGFIX] Make DataHandler aware of relations behind special=languages (Markus Klein)
    2016-06-06  d000290  #76466          [BUGFIX] Add textmedia CE's bodytext to BE search (Markus Klein)
    2016-06-06  8bf1077  #76445          [TASK] Install current version of mediace extension (Nicole Cordes)
    2016-06-06  9f4c355  #76467          [TASK] Changes forge links to https (Thomas Löffler)
    2016-06-06  3df26ac  #76386          [BUGFIX] Ensure ordering of TS constants in editor (Markus Klein)
    2016-06-06  2472c49  #76365          [TASK] Automatically select the custom preset when values are changed (Markus Klein)
    2016-06-06  cf1a07c  #76461          [BUGFIX] Render the creator of a record in ElementInformationController (Georg Ringer)
    2016-06-05  1c94dc0  #70962          [BUGFIX] FAL relations duplicated when saving in workspaces (Andreas Wolf)
    2016-06-05  06697b4  #76388          [BUGFIX] Do not manipulate minitems/maxitems (Markus Klein)
    2016-06-04  a8adce7  #76147          [BUGFIX] Checkboxes with itemProcFunc are not saved (Anja Leichsenring)
    2016-06-04  fc8026f  #76444          [TASK] Use `enableMultiSelectFilterTextfield` in pages and tt_content (Andreas Fernandez)
    2016-06-03  ca96906  #73574          [BUGFIX] Load CSH for flexforms again (Wouter Wolters)
    2016-06-03  004913a  #73754          [BUGFIX] Natural sorting for integer keys (Frank Naegler)
    2016-06-03  447663e  #66844          [BUGFIX] CSS inline style for image border gets corrupted after saving (Frank Naegler)
    2016-06-02  7318ed5  #76415          [TASK] Remove wrong example in ShortcutButton (Wouter Wolters)
    2016-06-01  4c46b1b  #65570,#68998,  [TASK] Exclude non-production files from Git archives (Mathias Brodala)
    2016-05-31  35fab91  #76392          [BUGFIX] Display validation errors again in FormEngine (Markus Klein)
    2016-05-30  2abfbed  #76212          [BUGFIX] Ensure correct return type for AbstractFile getters (Markus Klein)
    2016-05-30  86ba3d9  #76106          [BUGFIX] Use native Placeholder.js intead of the jQuery adapter (Wouter Wolters)
    2016-05-29  a6da70d  #76141          [BUGFIX] Allow typesList=0 when using makeCategorizable (Wouter Wolters)
    2016-05-29  e23feb1  #75776          [TASK] Add hint what to do when a CSRF token check failed (Wouter Wolters)
    2016-05-29  6ac9b75  #75520          [BUGFIX] Correct type for constants linkWrap height and width (Wouter Wolters)
    2016-05-29  59fb4cc  #76168          [TASK] Better explain when a cookie with a lifetime will be set (Wouter Wolters)
    2016-05-28  3dc33af  #76248          [BUGFIX] Remove unused variables from LiveSearch getRecordArray (Wouter Wolters)
    2016-05-28  4bf141f  #76267          [TASK] Display content_date in sys_file_metadata TCA (Stephan Großberndt)
    2016-05-28  d9b393d  #76352          [TASK] Use noncapturing expression for vendor|typo3_src in _.htaccess (Stephan Großberndt)
    2016-05-28  e70f79a  #76333          [BUGFIX] Add proper comments in DefaultConfiguration options (Benni Mack)
    2016-05-28  3eed01e  #76337          [BUGFIX] Do not add error flash messages twice (Helmut Hummel)
    2016-05-27  e549bd9  #60173          [BUGFIX] Re-enables fileDenyPattern check for admin users (Torben Hansen)
    2016-05-27  5bd1c24  #76329          [BUGFIX] Fix undefined property rUri in TableController (Wouter Wolters)
    2016-05-27  9059b87  #75397          [BUGFIX] Fix broken disable overlay in FormEngine (Frank Naegler)
    2016-05-27  3fccd6b  #74125          [FOLLOWUP][BUGFIX] Check if `$rows` is an array before iteration (Andreas Fernandez)
    2016-05-27  37a2a05  #74125          [BUGFIX] Check if `$rows` is an array before iteration (Andreas Fernandez)
    2016-05-27  81cd2a0  #75912          [BUGFIX] Fix page permissions SQL clause in BackendConfigurationManager (Morton Jonuschat)
    2016-05-26  8cd9228  #76303          [BUGFIX] Settings: Display titleLen and thumbsByDefault in editFunctionsTab (Markus Klein)
    2016-05-26  f0afc16  #76288          [TASK] Improve rendering of file paths in reports (Georg Ringer)
    2016-05-24  775d6a0  #76286          [BUGFIX] Suggest wizard inserts correct items again (Markus Klein)
    2016-05-24  ba40520  #76098          [BUGFIX] Adds missing tablename sys_language in fetchOriginLanguage function (Marvin Dettinger)
    2016-05-24  7d77b0b                  [TASK] Set TYPO3 version to 7.6.10-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_7.x> [Category:TYPO3
7](Category:TYPO3_7 "wikilink") <Category:2016>
