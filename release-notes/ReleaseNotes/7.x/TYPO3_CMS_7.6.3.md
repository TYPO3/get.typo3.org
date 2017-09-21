Release Notes for TYPO3 CMS 7.6.3
=================================

This document contains information about TYPO3 CMS 7.6.3 which was
released on February 16th, 2016.

News
----

This release is a combined bug fix and security release.

Notes
-----

Find more details in the security bulletins:

-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-002/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    bc0c39ebcecd497490d7825c20971f81  typo3_src-7.6.3.tar.gz
    af674b4b912dd36c350e5a905e8e4e46  typo3_src-7.6.3.zip

Upgrading
---------

### Upgrading from TYPO3 6.2 and from earlier versions of TYPO3 7

1.  Before you update any instance to 7.6, have a backup in place.
2.  Then uninstall any extension, that is not shipped with the core.
    This will avoid broken backend after upgrade due to removed class
    alias layer.
3.  Now download the new core and present it to your instance (by
    symlink or copied files)
4.  Use the install tool to run the upgrade wizards
5.  Use the install tool to clear each and every cache you can find,
    even opcode.
6.  Open the backend and go to the extensionmanager. When you use any
    extension without namespaces, activate the compatibility6 extension
    which can be found in the TYPO3 Extension Repository of typo3.org.
    You find further information about this extension and its purpose at
    <https://typo3.org/news/article/retaining-compatibility-to-typo3-cms-6/>
7.  Now reactivate your extensions and enjoy the brand new TYPO3 CMS 7.
8.  When you encounter compatibility problems with your extensions, look
    for the git versions around in order to find one already upgraded.
    For example realurl can be found here, until it gets released to
    TER: <https://github.com/helhum/realurl>

### Upgrading from TYPO3 7.6 / TYPO3 7 LTS

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.\
It might be required to clear all caches; the “important actions”
section in the TYPO3 Install Tool offers the accordant possibility to do
so.

Changes
-------

Here is a list of what was fixed since
[7.6.2](TYPO3_CMS_7.6.2 "wikilink"):

    2016-02-16  7c38a98                  [RELEASE] Release of TYPO3 7.6.3 (TYPO3 Release Team)
    2016-02-16  dc14c81  #72240          [SECURITY] XSS in Link Validator (Steffen Müller)
    2016-02-15  6cbeedd  #73040          [TASK] Improve layout of file list in FileBrowser (Daniel Maier)
    2016-02-15  e10a73e  #73420          [BUGFIX] ManageReferenceIndex: Removed call to deprecated method render() (Michael Oehlhof)
    2016-02-15  a0f4132  #73421          [BUGFIX] Recordlist: Removed call to deprecated method render() (Michael Oehlhof)
    2016-02-15  7b846b7  #73221          [BUGFIX] Function menu: Removed call to deprecated method render() (Michael Oehlhof)
    2016-02-15  bd78a47  #73072          [TASK] Add logic to include languageLablelFiles via return structure (Frank Naegler)
    2016-02-15  d2f92e9  #72907          [BUGFIX] Reallow custom request context in getUrl (Sascha Egerer)
    2016-02-15  3957b2d  #72917          [BUGFIX] Restore update wizard to add TER repository in EM (Wouter Wolters)
    2016-02-15  f092081  #73154          [BUGFIX] Enable file upload from Frontend context (Xavier Perseguers)
    2016-02-13  562289d  #72909          [BUGFIX] Indexed Search: Data too long for column 'cookie' (Wouter Wolters)
    2016-02-13  09d292f  #72933          [BUGFIX] Data in request may be null instead of an array (Xavier Perseguers)
    2016-02-13  4859dc8  #73419          [BUGFIX] Fixed Exception when updating the ReferenceIndex (Michael Oehlhof)
    2016-02-12  07b92e4  #73083          [BUGFIX] Deduplicate "Hide default translation of page" logic (Mathias Brodala)
    2016-02-12  5ab411e  #73018          [TASK] Remove @inject from ext:fluid (Wouter Wolters)
    2016-02-12  bac3fbd  #72388          [FOLLOWUP][BUGFIX] Table wizard: large fields and BR-tags (Michael Oehlhof)
    2016-02-12  5763a68  #73351          [BUGFIX] Remove invalid AJAX endpoint for EXT:recycler (Benni Mack)
    2016-02-11  2b1d306  #73006          [BUGFIX] Failing Unit Tests on Windows systems (Nicole Cordes)
    2016-02-11  3dd1bc7  #73289          [TASK] Change diff granularity to "word" (Andreas Fernandez)
    2016-02-11  53bbe6a  #73084          [TASK] Cap counter of "Application Overview" (Andreas Fernandez)
    2016-02-11  f91af44  #73222          [BUGFIX] Filelist Treeview: Removed call to deprecated method render() (Michael Oehlhof)
    2016-02-11  86e64e7  #73180          [BUGFIX] Fix broken tooltip for clipboard header icons (Frank Naegler)
    2016-02-08  f21b04d  #73101          [BUGFIX] Accept empty input for TCA eval 'email' (Markus Klein)
    2016-02-08  589a50f  #72832          [BUGFIX] Do not process downloads of .map files in typo3/ (Markus Klein)
    2016-02-08  787b930  #73157          [BUGFIX] Allow importing of non-compressed t3d files again (Markus Klein)
    2016-02-08  e623e41  #58693          [BUGFIX] impexp ignore file reference records with missing related files (Marc Bastian Heinrichs)
    2016-02-08  e052307  #73161          [TASK] Format size in filelist info window (Daniel Maier)
    2016-02-05  ff1b662  #73158          [BUGFIX] ImpExp: Correct casing for FAL function call (Markus Klein)
    2016-02-05  9b77b01  #73014          [BUGFIX] Disable the "new shortcut" button (Marco Huber)
    2016-02-05  2d7d51a  #73103          [BUGFIX] Off-by-one error in FAL's LocalDriver (Andreas Fernandez)
    2016-02-03  8b9bd34  #73078          [TASK] Add argument wrap to CSH ViewHelper (Daniel Goerz)
    2016-02-03  4227e11  #73053          [TASK] Do not hide possible PHP warning from Extbase exception (Xavier Perseguers)
    2016-02-01  6155516  #73009          [BUGFIX] Make the BE-Modul configurably for groups (Marco Huber)
    2016-02-01  6aede95  #72936          [BUGFIX] Reallow '0' as valid userFunc argument in TypoScript (Gernot Leitgab)
    2016-01-30  5055f72  #72998          [BUGFIX] Remove crawler initialization in indexed search (Benni Mack)
    2016-01-30  c088c54  #73035          [BUGFIX] Fix GlobalDebugFunctions.php autoload info (Mathias Brodala)
    2016-01-29  66c8278  #70307          [BUGFIX] CategoryRegistry::addTcaColumn() ignores displayCond (Tomita Militaru)
    2016-01-29  334c800  #69802          [BUGFIX] Show folder icons in ElementBrowser file tree (Daniel Maier)
    2016-01-29  2e4456f  #72978          [BUGFIX] Do not access clip object when clipboard disabled (Christian Weiske)
    2016-01-29  329fa6e  #72238          [TASK] Do no load page after title change if it's not the active one (Gianluigi Martino)
    2016-01-29  22902c5  #58752          [BUGFIX] Remove addQueryStringMethod parameter from widget links (Nicole Cordes)
    2016-01-29  94a5f60  #72817          [BUGFIX] CONTENT cObj: Set 'select.' to array if empty (Stefan Froemken)
    2016-01-29  ac0feb6  #72964          [BUGFIX] Clear cache system icon is shown for non admin in dev context (Eric Chavaillaz)
    2016-01-29  9adaa38  #72940          [BUGFIX] Possible division by zero in PaginateController (Xavier Perseguers)
    2016-01-29  ca87dfe  #72997          [BUGFIX] Remove obsolete CSH labels (Benni Mack)
    2016-01-29  b751216  #72932          [BUGFIX] Method is not compatible with its parent's counterpart (Xavier Perseguers)
    2016-01-29  9042b88  #72806          [FOLLOWUP][BUGFIX] Allow empty values for js language labels (Frank Naegler)
    2016-01-28  849a1ab  #72926          [BUGFIX] Refactor the initialize process of IconRegistry (Frank Naegler)
    2016-01-28  ad6d071  #72948          [BUGFIX] remove unnecessary htmlspecialchars (Marco Huber)
    2016-01-28  db9a43e  #72985          [BUGFIX] Render file icon in File list -> Search (Frans Saris)
    2016-01-28  9a2b3c2  #72996          [BUGFIX] Remove suggestion extensions from indexed_search (Wouter Wolters)
    2016-01-28  de527b2  #72993          [BUGFIX] Use TYPO3-compliant Array syntax for PackageStates.php (Benni Mack)
    2016-01-26  466e9c4  #72806          [BUGFIX] Allow empty values for js language labels (Thomas Schlumberger)
    2016-01-26  bb88e8f  #72943          [TASK] Switch mirror links to https (Nicole Cordes)
    2016-01-25  2e9061b  #72912          [BUGFIX] PHP Warning DBAL (Frank Naegler)
    2016-01-25  f2b6cdd  #72816          [TASK] ImpExp: Streamline checks for data (Markus Klein)
    2016-01-24  494f6b7  #72850          [BUGFIX] Prevent PHP error in DatabaseTreeDataProvider (Wouter Wolters)
    2016-01-22  f5afc0a  #72863          [BUGFIX] EXT:form - Bring back missing default CSS styles (Ralf Zimmermann)
    2016-01-22  344e148  #72635          [BUGFIX] SimpleFileBackend::setCacheDirectory returns valid path name (Jan Helke)
    2016-01-22  b1b74ee  #72893          [TASK] Adjust copyright year in README.md (Wouter Wolters)
    2016-01-22  44749fc  #72766          [BUGFIX] Workspaces: Exception with PHP 7 (Michael Oehlhof)
    2016-01-22  cc24517  #72880          [TASK] Optimize layout in cshmanuel help popup (Frank Nägler)
    2016-01-21  029316d  #72860          [TASK] Apply CGL compatibility (PSR-1 and PSR-2) (Wouter Wolters)
    2016-01-20  1b64755  #72847          [TASK] Remove test files created by GeneralUtilityTest (Wouter Wolters)
    2016-01-20  1d9db0c  #72818          [BUGFIX] Correctly determine link type (Markus Klein)
    2016-01-19  6c4f2a8  #72820          [BUGFIX] Use Import class in ImportExportUtility::importT3DFile() (Morton Jonuschat)
    2016-01-18  0875cb4  #72742          [BUGFIX] Fix broken background image in ImageManipulation wizard (Frank Nägler)
    2016-01-18  ddaa9ad  #45575          [BUGFIX] Indexed Search mysql takes section settings into account (Tymoteusz Motylewski)
    2016-01-17  e1a894a  #71679          [BUGFIX] FormEngine: Restore select wizard for textarea elements (Morton Jonuschat)
    2016-01-16  436c0dc  #72773          [BUGFIX] Cast pageId to integer before storing a preset in EXT:impexp (Morton Jonuschat)
    2016-01-16  cb19aaf  #70863          [BUGFIX] Recycler doesn't show deleted pages for editors (Bernhard Kraft)
    2016-01-16  1ff8fd8  #72767          [BUGFIX] Backend users: Exception in element browser with PHP 7 (Michael Oehlhof)
    2016-01-16  13b7735  #51099          [FOLLOWUP] Use correct setting to display search rules (Wouter Wolters)
    2016-01-16  ebdd167  #72751          [BUGFIX] Fix negativ pid when doing a positioned insert (Marco Huber)
    2016-01-16  0201fa7  #72765          [BUGFIX] Import/Export Various Exceptions happening (Reinhard Führicht)
    2016-01-16  832a060  #72761          [FOLLOWUP][BUGFIX] Clean up inconsistent data from import (Bernhard Kraft)
    2016-01-16  5b8609f  #51099          [BUGFIX] Use correct setting to display search rules (Ludwig Rafelsberger)
    2016-01-16  b58324c  #72543          [BUGFIX] Make levelAs of DirectoryViewHelper work (Georg Ringer)
    2016-01-16  37f9c61  #71733          [BUGFIX] Improve colPos behaviour of SectionViewHelper (Georg Ringer)
    2016-01-16  e409644  #72761          [BUGFIX] Clean up inconsistent data from import (Bernhard Kraft)
    2016-01-16  be54451  #71670          [BUGFIX] Use ProcessedFile::CONTEXT_IMAGEPREVIEW for inline preview images (Georg Ringer)
    2016-01-16  308c608  #72755          [BUGFIX] Apply hsc() to exception debug output (Markus Klein)
    2016-01-16  9261780  #72710          [FOLLOWUP][TASK] Split service class of Import/Export (impexp) (Morton Jonuschat)
    2016-01-15  e4b419c  #72752          [BUGFIX] Do not throw warning in FormEngineUtility::getIconHtml (Tymoteusz Motylewski)
    2016-01-15  d631ea4  #68791          [BUGFIX] Import skips files with non-existent target directory (Bernhard Kraft)
    2016-01-15  33cced8  #72741          [TASK] Impexp Move generation of selector boxes to Fluid template (Reinhard Führicht)
    2016-01-15  c9a4b63  #72699          [FOLLOWUP][TASK] Import/Export (impexp) move to Fluid standalone view (Reinhard Führicht)
    2016-01-15  ad2b928  #72699          [TASK] Import/Export (impexp) move to Fluid standalone view (Reinhard Führicht)
    2016-01-15  3a67bbf  #72710          [!!!][TASK] Split service class of Import/Export (impexp) (Martin Kutschker)
    2016-01-15  c98b261  #59731          [BUGFIX] Functional tests for impex clean filesystem after test (Martin Kutschker)
    2016-01-15  18ada78  #72697          [TASK] Remove thumbnail functionality of EXT:impexp (Georg Ringer)
    2016-01-15  61a1ea7  #72692          [BUGFIX] Initialize ExtendedFileUtility only if an actual upload happens (Georg Ringer)
    2016-01-15  bd2bc91  #72700          [TASK] Extract preset logic into separate class in EXT:impexp (Georg Ringer)
    2016-01-15  3d451cb  #72510          [BUGFIX] Replace ###REC_FIELD with values from DB within FlexForms (Morton Jonuschat)
    2016-01-15  5e2a469  #72357          [BUGFIX] Copy DataHandler::enableLogging to sub objects (Christian Weiske)
    2016-01-15  7138cbc  #72742          [BUGFIX] Fix broken background image in ImageManipulation wizard (Frank Nägler)
    2016-01-15  1d0e152  #72739          [BUGFIX] Fix broken ImageManipulation wizard (Frank Nägler)
    2016-01-15  7fc924c  #72388          [BUGFIX] Table wizard: large fields and BR-tags (Wouter Wolters)
    2016-01-15  3ee914f  #72704          [BUGFIX] Avoid double loading of global RequireJS modules (Anja Leichsenring)
    2016-01-15  e08b8e9  #72648          [BUGFIX] Automatically remove BOM from files before concatenation (Christian Futterlieb)
    2016-01-15  3319ab3  #72582          [BUGFIX] Always use backend form protection in backend URI builder (Christian Weiske)
    2016-01-15  e7d5a96  #72317          [TASK] Extend username search in beuser module (Georg Ringer)
    2016-01-15  f275452  #72720          [BUGFIX] Replace mentions of index_ts.php (Ludwig Rafelsberger)
    2016-01-15  a85c455  #72712          [TASK] Allow access to visible content within /.well-known/ directory (Cedric Ziel)
    2016-01-15  92b0349  #72507          [BUGFIX] Filelist: Removed call to deprecated method render() (Michael Oehlhof)
    2016-01-14  cee2f31  #72332          [TASK] EXT:filelist: Use new modal confirmation dialog for file delete (Michael Oehlhof)
    2016-01-14  ffad90c  #71396          [TASK] Adjust checkbox position in Extension Manager for dependency checks (Gianluigi Martino)
    2016-01-14  56df967  #72557          [BUGFIX] Harden fallback class map generation (Helmut Hummel)
    2016-01-14  17c06dc  #72632          [TASK] Remove loadmask plugin from Extension Manager (Wouter Wolters)
    2016-01-14  d5c18ae  #72707          [BUGFIX] Use f:format.raw instead of f:format.html for InfoBox (Georg Ringer)
    2016-01-14  84aeb5e  #72709          [BUGFIX] ImpExp: Do not show error message for recursive relations (Markus Klein)
    2016-01-14  a35df50  #72498          [TASK] Code cleanup FormEngine.js (Andreas Fernandez)
    2016-01-14  168262e  #72651          [TASK] Improve visibility of composer notice in install documentation (Philipp Gampe)
    2016-01-14  fa046ea  #72695          [TASK] Improve usability of EXT:impexp (Georg Ringer)
    2016-01-13  c420e1f  #72633          [TASK] Remove unused JavaScript validator plugin in EM (Wouter Wolters)
    2016-01-13  7d8f1a9  #72516          [BUGFIX] Import/Export: Removed calls to deprecated method render() (Michael Oehlhof)
    2016-01-12  09008cd  #72653          [BUGFIX] Recycler: Respect configurable pagingSize (Andreas Fernandez)
    2016-01-12  831d7c0  #72646          [BUGFIX] NotFound image uses wrong path in frontend (Wouter Wolters)
    2016-01-12  e1aa4fc  #72610          [TASK] Document support of MySQL Strict mode (Morton Jonuschat)
    2016-01-11  1732268  #72511          [TASK] Use buttons instead of question marks for CSH (Daniel Goerz)
    2016-01-11  2a3c7f8  #72505          [BUGFIX] Re-Introduce hook to override a record overlay (Frank Nägler)
    2016-01-09  f5ec182  #72593          [BUGFIX] Show warning message if no language is activated (Wouter Wolters)
    2016-01-09  30460a4  #72255          [BUGFIX] Initialize attribute in RequestBuilder with correct type (Sascha Egerer)
    2016-01-09  4db3e23  #72525          [FOLLOWUP][TASK] Remove hard coded extension paths (Benni Mack)
    2016-01-09  92068f5  #72525          [TASK] Remove hard coded extension paths (Helmut Hummel)
    2016-01-08  6ed60d9  #72598          [BUGFIX] Remove debug echo from checkDeniedSuburls (Wouter Wolters)
    2016-01-08  af991b4  #71506          [TASK] Correct HTML structure for tables in list module (Gianluigi Martino)
    2016-01-08  5d23cad  #71623          [BUGFIX] Indexed search: do not double encode links (Tymoteusz Motylewski)
    2016-01-08  3c621b9  #71562          [BUGFIX] Render success message again in InfoboxViewHelper (Wouter Wolters)
    2016-01-07  0c49700  #72548          [TASK] Replace abandoned IDNA converter (Mathias Brodala)
    2016-01-07  cd367f5  #72489          [BUGFIX] Load icons for localization wizard properly (Andreas Fernandez)
    2016-01-07  988c614  #72512          [BUGFIX] Filelist: make CSH useable (Daniel Goerz)
    2016-01-07  2765894  #72571          [BUGFIX] Invalid comments in FAL (Xavier Perseguers)
    2016-01-04  5eccacb  #72519          [TASK] Remove class file includes (Helmut Hummel)
    2016-01-04  819fef7  #72520          [CLEANUP] Use correct file extension for language files (Helmut Hummel)
    2016-01-01  84e1ff2  #72501          [TASK] Update copyright year to 2016 (Benni Mack)
    2015-12-31  df32ac0  #72447          [BUGFIX] Taskcenter: Removed call to deprecated method render() (Michael Oehlhof)
    2015-12-31  da01025  #72439          [BUGFIX] Function module: Removed call to deprecated method render() (Michael Oehlhof)
    2015-12-31  fd63ded  #72495          [TASK] Remove unused option listModulePath (Benni Mack)
    2015-12-31  bf1f495  #72432          [TASK] Show navigation title in Fluid Styled Content Special Menus if set (Gianluigi Martino)
    2015-12-30  3eb2e46  #72475          [SECURITY] XSS in belog module (Oliver Hader)
    2015-12-30  1419b82  #72305          [BUGFIX] Change DB field folder for sys_file_collection to allow NULL (Morton Jonuschat)
    2015-12-30  fe51b52  #66135          [BUGFIX] Computed properties are queried in workspace context (Oliver Hader)
    2015-12-30  5e346de  #72471          [TASK] Clean up object access via global variables (Oliver Hader)
    2015-12-30  7b97773  #71553          [TASK] Show Bootstrap Tooltips in Extension Manager (Gianluigi Martino)
    2015-12-30  a1a4d64  #72440          [BUGFIX] about - inject object manager only once (Daniel Goerz)
    2015-12-30  6e698b1  #72353          [TASK] Page Quickedit: Use new modal confirmation dialog for record delete (Michael Oehlhof)
    2015-12-30  d9a863a  #72442          [BUGFIX] Aboutmodules: Removed call to deprecated method render() (Michael Oehlhof)
    2015-12-29  ab34d7c  #72450          [TASK] Expose identifier and path of functional test instance (Oliver Hader)
    2015-12-29  c73af00  #72395          [TASK] Mark out-dated workspaces parts as deprecated (Oliver Hader)
    2015-12-28  2548bf4  #72453          [BUGFIX] Add missing quotation mark in PM_ATagWrap (Wouter Wolters)
    2015-12-24  febbae1  #72366          [BUGFIX] Correctly handle validation of multi-selects in FormEngine (Markus Klein)
    2015-12-24  4737238  #72408          [BUGFIX] "Add media by URL" is not hidden if maxItems is reached (Sascha Egerer)
    2015-12-23  29ea2ef  #72414          [BUGFIX] Handle empty pid list in FrontendConfigurationManager (Markus Klein)
    2015-12-23  123dd55  #72354          [BUGFIX] Page quickedit: Show correct page in BE after deleting a CE (Michael Oehlhof)
    2015-12-23  66498cc  #72299          [BUGFIX] Send correct HTTP message in getUrl (Markus Klein)
    2015-12-23  2032a28  #71921          [BUGFIX] EXT:form - handling of missing type attribute (Ralf Zimmermann)
    2015-12-22  aa14871  #72294          [BUGFIX] FormEngine: Fix expanding of inline records in FlexForms (Morton Jonuschat)
    2015-12-21  82aecf9  #72117          [FOLLOWUP][BUGFIX] Accept \Throwable in ExceptionHandlerInterface (Benni Mack)
    2015-12-21  43c4d8c                  [TASK] Set TYPO3 version to 7.6.3-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_7.x> [Category:TYPO3
7](Category:TYPO3_7 "wikilink") <Category:2016>
