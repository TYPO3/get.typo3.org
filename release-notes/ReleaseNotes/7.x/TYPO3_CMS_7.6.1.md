Release Notes for TYPO3 CMS 7.6.1
=================================

This document contains information about TYPO3 CMS 7.6.1 which was
released on December 15th, 2015.

News
----

This release is a combined bug fix and security release.

Notes
-----

Find more details in the security bulletins:

-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2015-010/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2015-011/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2015-012/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2015-013/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2015-014/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2015-015/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    3af669dd8bcbea0dad127f2b1190fd59  typo3_src-7.6.1.tar.gz
    e43ceb2b858baa6528ac8f272db0bb0e  typo3_src-7.6.1.zip

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
[7.6.0](TYPO3_CMS_7.6.0 "wikilink"):

    2015-12-15  8f1d874                  [RELEASE] Release of TYPO3 7.6.1 (TYPO3 Release Team)
    2015-12-15  3b36b05  #41690          [SECURITY] Escape caption of media using css_styled_content (Georg Ringer)
    2015-12-15  c252deb  #37399          [SECURITY] Fix XSS in rtehtmlarea (Georg Ringer)
    2015-12-15  57e4827  #71683          [SECURITY] Fix XSS in bullet list element (Georg Ringer)
    2015-12-15  f0b204d  #25245          [SECURITY] Replace parseFunc with htmlspecialchars in element "table" (Georg Ringer)
    2015-12-15  88c884f  #68735          [SECURITY] XSS in Link Validator (Wouter Wolters)
    2015-12-15  f412d49  #25243          [SECURITY] Possible XSS in felogin messages (Georg Ringer)
    2015-12-15  abd1c46  #25227          [SECURITY] XSS through WS comments (Wouter Wolters)
    2015-12-15  de1755a  #71698          [SECURITY] Link fields accept inline javascript code (Oliver Hader)
    2015-12-15  c9fab9f  #59150          [SECURITY] Fix several XSS issues (Nicole Cordes)
    2015-12-15  4319654  #71524          [SECURITY] Prevent XSS in TER download dialog (Nicole Cordes)
    2015-12-15  30dab52  #72226          [BUGFIX] Remove bad PHP code in LiveSearch (Markus Klein)
    2015-12-15  0391f2f  #72224          [BUGFIX] Handle content with no markers in substituteMarkerArrayCached (Markus Klein)
    2015-12-15  a28a4b7  #72212          [BUGFIX] Fix wrong PHPdoc for getIncludeScriptByCommandLineKey (Wouter Wolters)
    2015-12-14  381b047  #72183          [BUGFIX] ExtensionManager: Make viewhelpers compatible with PHP 7.0 (Morton Jonuschat)
    2015-12-14  42bb7f8  #67225          [FOLLOWUP][BUGFIX] Fix initialization for checked attributes (Markus Klein)
    2015-12-14  dda2856  #72171          [BUGFIX] Set default value for list_type (Marco Huber)
    2015-12-14  07386d8  #72205          [BUGFIX] Return passed $text if EXT:context_help is not installed (Andreas Fernandez)
    2015-12-14  685ffa3  #71381          [TASK] Install: Added clearer to All Configuration search field (Michael Oehlhof)
    2015-12-14  6d0c1ba  #72172          [BUGFIX] Correctly evaluate content edit permissions for users (Markus Klein)
    2015-12-13  93c6430  #72165          [TASK] Add favicon for the Install Tool (Georg Ringer)
    2015-12-13  f81f223  #72062          [FEATURE] Mocking of concrete methods in abstract classes (Stefan Rotsch)
    2015-12-13  40922fd  #72191          [TASK] Add a space after colon (Göran Bodenschatz)
    2015-12-13  e3e57cb  #71728          [BUGFIX] FormEngine: Determine IRRE expanded state in data provider (Andreas Allacher)
    2015-12-12  f5ba212  #71303,#72168   [FOLLOWUP][BUGFIX] Wrong overloading of AbstractController::redirect() (Morton Jonuschat)
    2015-12-12  16174e4  #68381          [BUGFIX] Indexed Search: Bring back html5 placeholder (Tymoteusz Motylewski)
    2015-12-12  737125d  #72149          [TASK] Support \DateTimeInterface in fluid Format\DateViewHelper (Morton Jonuschat)
    2015-12-12  6efa9bd  #66510          [TASK] Add quotes to classname in exception (Georg Ringer)
    2015-12-12  4eccfcc  #72102          [BUGFIX] Fix sorting by extension name (Patrick Schriner)
    2015-12-12  10e9166  #72169          [TASK] Fluid: Include jquery libs should be include using https (Gianluigi Martino)
    2015-12-11  def0485  #71985          [BUGFIX] RTE LinkHandler handle required classes (Andreas Allacher)
    2015-12-11  95ec4a6  #44381          [BUGFIX] Indexed Search: Display links to external files (Tymoteusz Motylewski)
    2015-12-11  be9778b  #71304          [BUGFIX] Make ToggleExtensionInstallationStateViewHelper PHP 7 compliant (Michael Oehlhof)
    2015-12-11  c9d10b9  #72176          [BUGFIX] ExportPageTreeView wrapTitle() signature is incompatible (Markus Sommer)
    2015-12-11  7fa37e4  #71255          [BUGFIX] Localize FAL error messages (Mathias Schreiber)
    2015-12-11  61226ff  #55626          [TASK] Replace GeneralUtility::inList() with comparison (Jo Hasenau)
    2015-12-11  5ef971d  #71824          [BUGFIX] FormEngine: Handle empty arrays in display conditions (Morton Jonuschat)
    2015-12-11  9e51db0  #72156          [CLEANUP] ImportExport classes (Markus Klein)
    2015-12-11  afd8ae4  #72178          [TASK] Use IconFactory in System Information Panel (Frank Nägler)
    2015-12-11  725dae2  #61017          [BUGFIX] Track pids of deleted/moved records to clear cache (Jigal van Hemert)
    2015-12-11  f47d184  #72126          [TASK] Make JavaScript Icon API a singleton (Andreas Fernandez)
    2015-12-11  0b0bb11  #67276          [BUGFIX] Show error message in page module for invalid backend layout (Georg Ringer)
    2015-12-11  20c61f2  #72152          [BUGFIX] Correctly handle whitespace in format.date VH (Markus Klein)
    2015-12-11  bf8964a  #72155          [TASK] Configuration: Make searchbox clearable and fix scroll position (Josef Glatz)
    2015-12-10  c0cd71a  #72058,#72081   [BUGFIX] Determine returnUrl when deleting pages in EditDocumentController (Andreas Fernandez)
    2015-12-10  f624f0a  #70220          [BUGFIX] Move default avatar image from background css to img tag (Michael Oehlhof)
    2015-12-09  85df779  #69934          [BUGFIX] Use correct title for links to create new records (Georg Ringer)
    2015-12-09  57e4b67  #71659          [BUGFIX] Hide CSH button if context_help is disabled (Gianluigi Martino)
    2015-12-09  de6b79e  #27475,#72056   [TASK] Update T3Icons to 0.0.9 (Benjamin Kott)
    2015-12-09  4ce9ba9  #71584          [BUGFIX] LiveSearch: Don't trigger select on valid input (Michael Oehlhof)
    2015-12-09  d8b0192  #67225          [BUGFIX] Fix initialization for checked attributes (Frederic Gaus)
    2015-12-08  1434421  #72108          [BUGFIX] Remove slash in description (Boris Schauer)
    2015-12-07  d4cd548  #72091          [BUGFIX] Prefix all CSS for admin panel (Wouter Wolters)
    2015-12-07  d833790  #71686          [FOLLOWUP][BUGFIX] ImageViewHelper should catch exceptions (Andreas Allacher)
    2015-12-07  2882393  #72084          [BUGFIX] Hide report notice in about module for editors (Georg Ringer)
    2015-12-07  3276f07  #32209          [BUGFIX] Use strict authMode access check for list_type (Georg Ringer)
    2015-12-07  6311415  #71797          [BUGFIX] Display prev & next icons in workspace module again (Georg Ringer)
    2015-12-07  eea6911  #71678          [BUGFIX] Removed delete icon in toolbar for sys_file_metadata (Michael Oehlhof)
    2015-12-07  6f9d4ef  #72014          [BUGFIX] Re-validate after remove IRRE element (Frank Nägler)
    2015-12-07  f7af048  #70144          [BUGFIX] Show correct icon for textmedia in page module (Michael Oehlhof)
    2015-12-07  d3cd477  #71126          [TASK] Allow to define multiple inlineLocalizeSynchronize commands (Oliver Hader)
    2015-12-06  456d505  #60893          [BUGFIX] DebuggerUtility should return css when requested. (Benni Mack)
    2015-12-06  e1e5f76  #71248          [BUGFIX] RTE: Use correct settings (Andreas Allacher)
    2015-12-06  b8fef52  #71505          [BUGFIX] Render flag icons correctly in backend (Michael Oehlhof)
    2015-12-06  77d988e  #60497          [BUGFIX] Re-implement GFX[thumbnails] for Backend (Benni Mack)
    2015-12-06  828d107  #70428          [BUGFIX] ColorPicker: Use absolute web path for exampleImg (Benni Mack)
    2015-12-06  98702a8  #71977          [BUGFIX] Let FormEngine Slider wizard save data again (Benni Mack)
    2015-12-06  ac8471c  #62487          [BUGFIX] Use "id" attribute for HMENU images in HTML5 (Benni Mack)
    2015-12-05  b30fb5b  #72051          [TASK] Use root paths for fluid templates in indexed_search (Daniel Goerz)
    2015-12-05  c847bc7  #72069          [TASK] Remove unused properties in $LANG (Benni Mack)
    2015-12-05  9862930  #72068          [TASK] Make t3skin frame dimension overrides default (Benni Mack)
    2015-12-05  fccc48f  #72066          [BUGFIX] sys_note not displayed in footer -list (Gianluigi Martino)
    2015-12-04  ac77e26  #44270          [BUGFIX] Avoid overly large regex in substituteMarkerArrayCached (Markus Klein)
    2015-12-04  58f69d4  #71712          [BUGFIX] FormEngine: show inline children found by RelationHandler (Nicole Cordes)
    2015-12-04  7e085b4  #72024          [TASK] Streamline JavaScript calls to ModuleMenu reload (Benni Mack)
    2015-12-04  ac66cdb  #66247,#45327   [BUGFIX] File Recycler collect deleted files again (Michael Oehlhof)
    2015-12-04  f0b9136  #64966          [BUGFIX] Avoid wrong SQL query in fe_login user group redirect (Frederic Gaus)
    2015-12-04  1adbe01  #36946,#42075   [BUGFIX] Ignore placeholders when copying records (Oliver Hader)
    2015-12-04  963543d  #71955          [TASK] EXT:lang Add a litle space between the search field and the table (Michael Oehlhof)
    2015-12-04  45d6314  #71387          [TASK] Bring back the toggle button in install tool (Gianluigi Martino)
    2015-12-04  f44557a  #71952          [BUGFIX] Remove NOT NULL from optional text fields in system extensions (Tomas Norre Mikkelsen)
    2015-12-04  22bc0f0  #72036          [BUGFIX] DBAL: Fix renaming of tables in Install Tool (Morton Jonuschat)
    2015-12-04  3d963ae  #71261          [TASK] Replace editOnClick in Page Layout Module (Benni Mack)
    2015-12-04  f992c57  #71686          [FOLLOWUP][BUGFIX] ImageViewHelper should catch exceptions (Benni Mack)
    2015-12-04  c29b804  #71857          [BUGFIX] Catch security exceptions in global JS module (Markus Klein)
    2015-12-04  539644a  #56371          [BUGFIX] Change name of correct pagetree entry after renaming (Martin Gebert)
    2015-12-04  0e15ee8  #71664          [BUGFIX] Refer to correct naming of link handler TSconfig option (Markus Klein)
    2015-12-04  4ddb793  #56668          [BUGFIX] TCA Time Field allow 0:00 as valid input (Frank Nägler)
    2015-12-04  73e1ca9  #71686          [BUGFIX] ImageViewHelper should catch exceptions (Andreas Allacher)
    2015-12-04  df2160c  #72027          [BUGFIX] Only show search on non-empty pages (Andreas Fernandez)
    2015-12-03  f0f1d0b  #71021          [TASK] Optimize backend checkboxes check / uncheck all (Frank Nägler)
    2015-12-02  67ba027  #71951          [BUGFIX] DebuggerUtility: Treat null results of lazy objects correctly (Markus Klein)
    2015-12-02  eb8c973  #71793          [BUGFIX] Disable debug for Fluid Ajax Widget (Benni Mack)
    2015-12-02  04c718f  #71994          [BUGFIX] Render previews for all files in FSCs upload CE (Daniel Goerz)
    2015-12-02  b343205  #72017          [BUGFIX] Fix MySQL specific language query in LocalizationController (Morton Jonuschat)
    2015-12-02  70e7776  #72028          [TASK] Enable disabled FAL functional test assertions (Oliver Hader)
    2015-12-02  7913670  #72019          [TASK] Add php7 to the list of known php files (Benni Mack)
    2015-12-02  4371d99  #72026          [BUGFIX] Do not load ContextHelp JS if no BE user is there (Markus Klein)
    2015-12-02  13674a5  #70525          [BUGFIX] Reintroduce support for reverseProxySSL (ajahn)
    2015-12-02  d22665a  #72020          [TASK] Cleanup unused variable in AbstractUserAuthentication (Benni Mack)
    2015-12-02  cb935e1  #71983          [BUGFIX] Always show close button for temporary web mounts (Andreas Fernandez)
    2015-12-02  d450bd0  #70950          [TASK] Add language to images in filemetadata (Stephan Großberndt)
    2015-12-02  12673ce  #70044          [BUGFIX] Use correct path for content rendering template inclusion (Markus Klein)
    2015-12-02  d79cee8  #71695          [BUGFIX] toTop Link reloads page with baseUrl in fluid_styled_content (Gianluigi Martino)
    2015-12-01  570e19e  #71436          [BUGFIX] FormEngine: Select correct FlexForm DS for inline records (Morton Jonuschat)
    2015-12-01  bb653e2  #52223          [BUGFIX] Show hidden templates in tstemplate (Frederic Gaus)
    2015-12-01  c2a3248  #71621          [BUGFIX] Allow overlaying of records for all languages again (Mathias Schreiber)
    2015-12-01  8af444f  #71979          [BUGFIX] DBAL: Properly compile CAST statement after OR condition (Morton Jonuschat)
    2015-12-01  74a3f6f  #71992          [BUGFIX] ImageManipulationElement: Fix PHPDoc block comment (Josef Glatz)
    2015-11-30  b2015b5  #71984          [BUGFIX] Shortcut to first sub-page with move placeholder does not work (Oliver Hader)
    2015-11-30  a22fb18  #66169          [BUGFIX] Empty grid list in frontend workspace preview (Oliver Hader)
    2015-11-30  333d482  #71781          [BUGFIX] Move FSC templates one level up (Markus Klein)
    2015-11-30  648ee22  #71990          [TASK] Add possibility to purge workspaces move placeholder (Oliver Hader)
    2015-11-30  96a9f7d  #71988          [TASK] Extend regular workspaces DataHandler functional tests (Oliver Hader)
    2015-11-30  6c4afe3  #71986          [TASK] Extend workspaces DataHandler functional tests (Oliver Hader)
    2015-11-30  74478b1  #71707          [TASK] Optimize usage of debug_backtrace() (Stefan Neufeind)
    2015-11-30  39920ae  #71980          [BUGFIX] Display RTE queryParametersSelector properly (Markus Klein)
    2015-11-30  389d820  #71887          [BUGFIX] FAL: Fix inline labels for fields of type group (Morton Jonuschat)
    2015-11-30  b6a88cc  #71881          [BUGFIX] Improve usability of inline header (Georg Ringer)
    2015-11-29  8d6fb88  #71918          [BUGFIX] No possibility to hide "New" button in Inline Elements (Gernot Schulmeister)
    2015-11-29  61a6023  #71947          [TASK] Travis: Disable Xdebug (Nicole Cordes)
    2015-11-29  4bc7035  #71915          [BUGFIX] Prevent double encoding in button rendering (Nicole Cordes)
    2015-11-28  5e8e1cb  #71879          [BUGFIX] FormEngine: formattedLabel_userFunc_options overrides foreign_label (Morton Jonuschat)
    2015-11-28  50ec6ce  #69149          [TASK] Place update button in Admin Panel to top (Gianluigi Martino)
    2015-11-28  a2a6e8f  #71892          [TASK] Remove old EXT:phpunit fragments (Nicole Cordes)
    2015-11-27  07481bd  #71872          [BUGFIX] Show title in button popup with correct encoding (Michael Oehlhof)
    2015-11-27  d5a1cd4  #71587          [TASK] Fix title for textmedia migration wizard in Install Tool (Morton Jonuschat)
    2015-11-27  0049e71  #71763          [TASK] EXT:backend: Cleanup ClickMenu.php (Michael Oehlhof)
    2015-11-27  5d98882  #71514          [BUGFIX] EXT:form - bring back "Show message in label" (Ralf Zimmermann)
    2015-11-27  52377dc  #71820          [BUGFIX] Correctly store headers in Request object (Andreas Wolf)
    2015-11-27  10a57c0  #71883          [BUGFIX] Show correct label for IRRE records (Markus Klein)
    2015-11-27  000cc51  #71884          [TASK] Change order of phpDoc for deleteFile in ResourceStorage (Wouter Wolters)
    2015-11-27  0c3299c  #71843          [BUGFIX] Fix typolink forceAbsoluteUrl (Sebastian Michaelsen)
    2015-11-27  2b33ec7  #71603          [TASK] Field "Record Storage Page" is missing exclude flag (Gianluigi Martino)
    2015-11-27  3e219d3  #71785          [BUGFIX] Remove last usages of xhtml cleaning (Markus Klein)
    2015-11-26  0218e79  #71871          [BUGFIX] ModuleTemplate: Use translated language labels (Michael Oehlhof)
    2015-11-26  716041a  #71861          [BUGFIX] Use correct HTML lang attribute for BE login (Markus Klein)
    2015-11-26  50b3481  #71866          [CLEANUP] Remove unused TCA option canNotCollapse (Markus Klein)
    2015-11-26  d0acbb3  #71863          [TASK] Add more info to .editorconfig (Markus Klein)
    2015-11-25  193b525  #71828          [TASK] Raise minimum version of typo3/cms-composer-installers (Helmut Hummel)
    2015-11-25  b715a5c  #71805          [TASK] Only instantiate Locales in csConv when necessary (Benni Mack)
    2015-11-25  e96f4ff  #71815          [TASK] Update recommended PHP requirements (Josef Glatz)
    2015-11-25  8a3b8db  #71816          [BUGFIX] indexed_search: fix marker documentation (Josef Glatz)
    2015-11-24  6163687  #71814          [BUGFIX] ElementInformation: close href attribute in back button (Josef Glatz)
    2015-11-24  74864b6  #71799          [TASK] Remove leftover FLOW3 code in Caching (Benjamin Mack)
    2015-11-24  8518d50  #71527          [BUGFIX] Frontend editing: fixed error when edit whole record (Michael Oehlhof)
    2015-11-24  10b2f0c  #69630          [BUGFIX] Save parents localized uid as child reference (Nicole Cordes)
    2015-11-24  d2c7207  #37896          [BUGFIX] Live search shows move placeholders in draft workspace (Bart Dubelaar)
    2015-11-23  2dddc23  #71782          [BUGFIX] Fix broken unit tests for system with e.g. german locale (Frank Nägler)
    2015-11-23  46d7856  #69665          [BUGFIX] Add favicon without scheme (Stephan Großberndt)
    2015-11-23  db940e5  #71779          [BUGFIX] IE show correct select box arrow (Andreas Allacher)
    2015-11-23  bf34bba  #71488          [BUGFIX] IRRE handle useCombination correctly (Andreas Allacher)
    2015-11-23  994baa0  #71138          [BUGFIX] Update tstamp on writeForeignField if any foreign value has changed. (IRRE) (Sebastian Mazza)
    2015-11-23  73adc69  #71663          [TASK] Installtool: display maximum allowed file size for uploads (Josef Glatz)
    2015-11-23  310c53a  #71772          [TASK] Add unit tests for stdWrap_substring() (Michael Oehlhof)
    2015-11-22  a1c96ef  #70700          [BUGFIX] Improve resolving path to autoload.php (Helmut Hummel)
    2015-11-22  49ffef2  #58816          [TASK] Disallow multi-line HTTP headers (Helmut Hummel)
    2015-11-22  57a12dd  #71734          [BUGFIX] Check webmounts for backend user in workspace preview (Nicole Cordes)
    2015-11-22  137e2c3  #71696          [TASK] Remove unneeded max value check (Adrian von Arx)
    2015-11-22  946fcbc  #71767          [BUGFIX] Fix fatal in web->functions for page without access (Michael Oehlhof)
    2015-11-22  22d86ad  #71770          [TASK] Add unit tests for stdWrap_bytes() (Michael Oehlhof)
    2015-11-22  22a4bec  #71768          [BUGFIX] Fix fatal in web->recycler for page without access (Michael Oehlhof)
    2015-11-22  9b76560  #71766          [BUGFIX] Fix fatal in web->view for page without access (Michael Oehlhof)
    2015-11-22  0ad9a8c  #47144          [BUGFIX] Disable restricted users to edit page properties (Henrik Ziegenhain)
    2015-11-21  0511ce3  #71449          [BUGFIX] Fix background of color settings in rtehtmlarea table popup (Gianluigi Martino)
    2015-11-21  0d3855b  #71753          [FOLLOWUP][TASK] Use GeneralUtility::quoteJSvalue() where needed part 4 (Georg Ringer)
    2015-11-21  b04d477  #71507          [BUGFIX] Ensure new extension classes are loaded (Nicole Cordes)
    2015-11-21  dff8862  #71761          [TASK] Remove unused jQuery expander plugin from EM (Wouter Wolters)
    2015-11-21  431d5ea  #71759          [BUGFIX] Fix duplicate selection in record list (Georg Ringer)
    2015-11-21  c275746  #71753          [TASK] Use GeneralUtility::quoteJSvalue() where needed part 4 (Wouter Wolters)
    2015-11-21  22c63c0  #71700          [BUGFIX] Hide shortcuts to inaccessible modules for admins as well (Patrick Schriner)
    2015-11-21  cdc8fca  #71754          [BUGFIX] Check for BackendTemplateView in IndexedSearch (Mathias Schreiber)
    2015-11-21  8430a66  #71756          [TASK] Cleanup escaping in EXT:t3editor (Stefan Neufeind)
    2015-11-21  97b9778  #68591          [BUGFIX] Include CSS of AdminPanel only if shown (Georg Ringer)
    2015-11-21  3712219  #71751          [BUGFIX] Make page title clickable in access module (Georg Ringer)
    2015-11-21  0117240  #71757          [TASK] Up version for bower.json and packages.json (Wouter Wolters)
    2015-11-21  ef82c4d  #71749          [BUGFIX] Correct invalid last-modified header in HTTP response (Michael Schams)
    2015-11-21  9a4f078  #71748          [TASK] Remove blank line between docblock and the documented element (Wouter Wolters)
    2015-11-20  2582779  #71747          [CLEANUP] Do not use phpdoc comments for license headers (Markus Klein)
    2015-11-20  b713849  #71746          [TASK] Use scalar types in phpDoc (Wouter Wolters)
    2015-11-20  1be5ec9  #71740          [TASK] Remove @package and @subpackage annotation (Wouter Wolters)
    2015-11-20  cb05cc8  #71738          [TASK] Removes extra empty lines (Wouter Wolters)
    2015-11-20  2363d01  #71742          [BUGFIX] Documentation for fluid_styled_content refers to removed files (Martin Kutschker)
    2015-11-20  d76bae1  #71737          [TASK] Remove duplicated semicolons (Wouter Wolters)
    2015-11-20  d9d6d5a  #71735          [TASK] Use single quotes instead of double quotes (Wouter Wolters)
    2015-11-20  cb9efae  #71730          [BUGFIX] Remove double encoding of fieldset in extension "felogin" (Martin Kutschker)
    2015-11-20  f457c05  #71636          [BUGFIX] Reload module menu after extension (un)installation (Andreas Fernandez)
    2015-11-20  848b2fc  #70246          [BUGFIX] RTE fields do not handle eval validation like required (Frank Nägler)
    2015-11-20  be9ee02  #71726          [TASK] Order use statements alphabetically (Wouter Wolters)
    2015-11-20  ee4ab3c  #71722          [TASK] Replace assertion method to use dedicated method (Wouter Wolters)
    2015-11-20  f6bf6fc  #71724          [BUGFIX] Cope with split configuration correctly in ContentObjectRenderer (Markus Klein)
    2015-11-20  392fc44  #71723          [TASK] Replace confirm in FormEngine->Flex->Section remove (Frank Nägler)
    2015-11-20  463042c  #71561          [BUGFIX] Correct autosuggest when no result has been found (Markus Sommer)
    2015-11-20  b4e2c02  #71577          [TASK] Use FlexFormService to convert FAL driver configuration (Oliver Eglseder)
    2015-11-20  aab99ac  #71716          [TASK] Add unit tests for spamProtectEmailAddresses (Oliver Hader)
    2015-11-20  17376c0  #71714          [TASK] Remove unneeded parenthesis on array-access (Stefan Neufeind)
    2015-11-20  205351f  #71669          [TASK] Remove Ter.json template in extension manager (Nicole Cordes)
    2015-11-20  7af87e4  #71693          [BUGFIX] HTML contained in variables must be unescaped in ButtonBar partial (Claus Due)
    2015-11-20  13ad20d  #71706,#68905   [SECURITY][TASK] Blind more options in the configuration module (Georg Ringer)
    2015-11-19  2aefab8  #71687          [TASK] Improve config.disableCharsetHeader documentation (Christian Weiske)
    2015-11-19  be989bc  #71704          [BUGFIX] Prevent fatal error in stdWrap when compatibility6 is not loaded (Markus Klein)
    2015-11-19  b1d5af7  #71705          [BUGFIX] Check if popup window is there before focusing it (Markus Klein)
    2015-11-19  dacd79b  #71690          [TASK] Code-cleanup for ContentObjectRenderer (Stefan Neufeind)
    2015-11-19  0d4e245  #71639          [TASK] CSC: Do not show pageTS template if it's included by default (Markus Klein)
    2015-11-19  c31237e  #71676          [BUGFIX] Fix fatal error in SpacelessViewHelper (Wouter Wolters)
    2015-11-19  8371e40  #71685          [BUGFIX] Fix css_styled_content documentation (Wouter Wolters)
    2015-11-19  eecafcd  #71502,#71474   [FOLLOWUP][BUGFIX] Render PDFs and MP3s in FSC. (Steffen Müller)
    2015-11-19  1113776  #71618          [BUGFIX] Reenable JS in Extension Manager (Nicole Cordes)
    2015-11-18  0415bce  #71630          [BUGFIX] Restore clear cache menu icon if clearing fatals (Andreas Fernandez)
    2015-11-18  031c602  #71656          [BUGFIX] RTE-API: correct check for backpath in writeTemporaryFile (Andreas Allacher)
    2015-11-18  6a83685  #71641          [BUGFIX] Wizard crpages: add missing space before help icon (Josef Glatz)
    2015-11-18  07ac900  #71625          [BUGFIX] Show nav title in element browser (Marco Huber)
    2015-11-18  ed765fb  #71640          [BUGFIX] Handle pageTSconfig correctly for TS (Markus Klein)
    2015-11-17  7d4f18c  #71620          [BUGFIX] Fix f:cObject documentation example (Josef Glatz)
    2015-11-16  09cbaf2  #71612          [TASK] Fix CGL errors (Claus Due)
    2015-11-16  b97bf02  #71588          [BUGFIX] IE show DatePicker (Andreas Allacher)
    2015-11-16  b6d55de  #71323          [BUGFIX] Flexform: Removing section element with empty required field (Frank Nägler)
    2015-11-16  7b0e571  #71581          [TASK] Label fluid_styled_content as beta (Jigal van Hemert)
    2015-11-16  6449279  #71598          [BUGFIX] IE: make save button usable (Andreas Allacher)
    2015-11-16  7c37a6f  #71594          [BUGFIX] Align icons in System Information Panel (Andreas Fernandez)
    2015-11-16  3990699  #71589          [BUGFIX] Fix compiled css (Josef Glatz)
    2015-11-16  1f7d3ec  #12018          [TASK] Link the item column in linkvalidator report (Georg Ringer)
    2015-11-16  8940014  #67935          [BUGFIX] jquery loaded twice if loadJQuery="true" is set via fluid (Benjamin Mack)
    2015-11-15  7b3c32e  #71510          [BUGFIX] Do not prepend siteUrl in RTE when handler keyword is present (Markus Klein)
    2015-11-15  4abd180  #71518          [BUGFIX] Remove HTML markup from flashMessage (Frank Nägler)
    2015-11-15  28ce5a4  #57172          [BUGFIX] Adminpanel: Parts under "Editing" only with EXT:feedit (Georg Ringer)
    2015-11-15  7fea4a0  #71384          [BUGFIX] Installtool: add bottom margin for content-area (Josef Glatz)
    2015-11-14  dee836a  #71230          [BUGFIX] ElementBrowser highlighting for active selected file (Josef Glatz)
    2015-11-14  ec41d21  #71576          Revert "[BUGFIX] Fallback to argument values in f:image/f:media on invalid dimensions" (Morton Jonuschat)
    2015-11-14  bee5a1d  #66533          [TASK] Avoid redundant condition blocking arrays as form object (Claus Due)
    2015-11-14  1ec1de7  #71303          [BUGFIX] Wrong overloading of AbstractController::redirect() (Frank Nägler)
    2015-11-14  943dc63  #68368          [BUGFIX] .htaccess created for log folder outside PATH_site (Andreas Wolf)
    2015-11-13  53bb61d  #61812,#66312,  [BUGFIX] Show "stop page tree" in ExtJS Page tree (Benjamin Mack)
    2015-11-13  5f67d88  #71302          [BUGFIX] Consider routes for URLs in record lists (Markus Klein)
    2015-11-13  48bfec3  #71520          [BUGFIX] Do not submit forms for link attributes in LinkBrowser (Markus Klein)
    2015-11-13  f78b2b2  #71236          [TASK] Provide correct data for DatabaseLanguageRowsTest (Oliver Eglseder)
    2015-11-13  519df71  #69356          [BUGFIX] Handling of uploaded files not within open_basedir (Bernhard Kraft)
    2015-11-13  f83ae98  #71555          [BUGFIX] CSH popup of main help icon not shown completely (Frank Nägler)
    2015-11-13  711462b  #65345          [BUGFIX] Evaluate select multiple attribute as boolean (Mathias Brodala)
    2015-11-13  0f49e3e  #70449          [BUGFIX] FormEngine: Fix type=group with internal_type=folder (Morton Jonuschat)
    2015-11-13  cfaf95d  #71557          [BUGFIX] EXT:form - Fix utf-8 encoding for error message (Stano Paska)
    2015-11-13  1698139  #64883          [BUGFIX] Implement check against File type restriction in Extractors (Fabien Udriot)
    2015-11-13  fee2fcd  #68052          [BUGFIX] Broken layout in File Element Browser (Frank Nägler)
    2015-11-13  42fa652  #66045          [BUGFIX] BackendUtility: Skip rendering thumbnails for anything but files (Andreas Allacher)
    2015-11-13  8be9e6d  #71425          [BUGFIX] Avoid redirecting to a deleted page (Morton Jonuschat)
    2015-11-13  97c0da2  #54772,#40254   [BUGFIX] Fallback to argument values in f:image/f:media on invalid dimensions (Claus Due)
    2015-11-13  3bbeb33  #71383,#71385   [TASK] Streamline accordeon triggers in Install Tool (Georg Ringer)
    2015-11-13  c0b2857  #71414          [BUGFIX] CSH popup not shown completely (Frank Nägler)
    2015-11-13  14efcb8  #71523          [BUGFIX] IRRE: expandAll show content of all children (Andreas Allacher)
    2015-11-13  a80b5c0  #71315          [BUGFIX] Prevent warning on user settings reset (Nicole Cordes)
    2015-11-13  18f1591  #71502,#71474   [BUGFIX] Render PDFs and MP3s in FSC. (Lars Peter Søndergaard)
    2015-11-12  a83e705  #71543          [TASK] Remove old comment about @dontvalidate (Wouter Wolters)
    2015-11-12  68a0603  #71497          [BUGFIX] Abort submit if required fields are not filled (Andreas Fernandez)
    2015-11-12  57055c9  #70587          [TASK] Remove the first few E_NOTICEs occuring in the unit tests (Oliver Eglseder)
    2015-11-12  0b95e3c  #71481          [BUGFIX] Prevent submitting LiveSearch form (Wouter Wolters)
    2015-11-12  775679a  #70481          [BUGFIX] Ensure processing folder within another storage is created (Nicole Cordes)
    2015-11-11  41dce5b  #71480          [BUGFIX] Close extension configuration form on "Save and close" (Andreas Fernandez)
    2015-11-11  9130829  #71475          [BUGFIX] Make buttons after file search working again (Wouter Wolters)
    2015-11-10  874a64c                  [TASK] Set TYPO3 version to 7.6.1-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_7.x> [Category:TYPO3
7](Category:TYPO3_7 "wikilink") <Category:2015>
