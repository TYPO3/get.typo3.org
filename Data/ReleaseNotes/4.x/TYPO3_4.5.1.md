Release Notes for TYPO3 4.5.1
=============================

This document contains information about TYPO3 version 4.5.1 which was
released on February 23, 2011.

News
----

This version is a maintenance release and contains bugfixes only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    b91e93d98e4f7bad0636788689eb179c  dummy-4.5.1.tar.gz
    cb5e7afbd349d5d2b9a65b14ec577c68  dummy-4.5.1.zip
    6b7012da6953010673d9990d9bf0ca9e  typo3_src-4.5.1.tar.gz
    884d832ae93023b9506df7eb67f91f05  typo3_src-4.5.1.zip
    4b1cfd122125029827e99ec7ca3295cc  typo3_src+dummy-4.5.1.zip
    28027c7a6bb707ff006000b5912ab089  introductionpackage-4.5.1.tar.gz
    632782f0d38298980cadb9f7445cbf3f  introductionpackage-4.5.1.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is an ordered list of what was fixed since 4.5.0:

### Pagetree

-   Fixed bug \#17520: Pagetree - Locked records are not indicated
    anymore (Thanks to Stefan Galinski)
-   Fixed bug \#17702: Directly open “inline edit” of page title after
    creating a new page with drag and drop in the pagetree (Thanks to
    Stefan Galinski)
-   Fixed bug \#17452: options.hideRecords.pages is ignored in page tree
    (Thanks to Andreas Kiessling)
-   Fixed bug \#17457: Pagetree - User Mount Points are always expanded
-   Fixed bug \#17479: javascript error after contextmenu -&gt; delete a
    page
-   Fixed bug \#17407: Pagetree cause endless loop in ExtJS events
-   Fixed bug \#17434: Pagetree: when start edit, the text should be
    selected
-   Fixed bug \#17406: Pagetree Editor remains with empty value

### ExtJS / ExtDirect

-   Fixed bug \#17502: ExtDirect Exception: “Error parsing json
    response: null”
-   Fixed bug \#17500: Improve error handling in ExtDirect router
    (Thanks to Helmut Hummel)
-   Fixed bug \#17464: ExtDirectCode is added twice
-   Fixed bug \#17057: StateProvider values not respected

### t3lib\_mail API

-   Fixed bug \#17574: defaultMailFromName not used when
    defaultMailFromAddress is used in mailform (Thanks to Jigal van
    Hemert)
-   Fixed bug \#17314: Swift\_RfcComplianceException is always thrown in
    t3lib\_formmail when forceReturnPath=1 is set
-   Fixed bug \#17531: htmlMail - Can't send mails on port based systems
    with Swiftmailer substitution
-   Fixed bug \#17518: Content type “mailform” no longer accepts list of
    addresses for “Recipient List” (also fixed function description in
    t3lib\_mail\_SwiftMailerAdapter)

### Install Tool

-   Fixed bug \#17511: tx\_install\_session::write doesn't fix
    permissions
-   Fixed bug \#17374: implode() issues in Install Tool

### Extension Manager

-   Fixed bug \#17701: Generated t3x might be corrupted
-   corrected initial settings with no saved extension configuration
-   Fixed bug [F\#13180](https://forge.typo3.org/issues/13180) Hardcoded
    Labels for Extension State and in menu “Filters”
-   Fixed bug [F\#13183](https://forge.typo3.org/issues/13183) Saving
    Settings uses hardcoded labels
-   Fixed bug [F\#13179](https://forge.typo3.org/issues/13179) Order in
    “Udate EM\_CONF” is not ideal
-   Fixed bug [F\#13181](https://forge.typo3.org/issues/13181)
    Unreplaced variable in headline when editing a repository
-   Fixed bug [F\#13182](https://forge.typo3.org/issues/13182) Updating
    a repository gives wrong flash message
-   Fixed bug [F\#13178](https://forge.typo3.org/issues/13178) GUI
    partly hidden with 1024x768 pixels and less
-   Fixed bug [F\#13177](https://forge.typo3.org/issues/13177) Button
    “Refresh” in Extension &gt; Details &gt; Files misses tooltip
-   Many fixes for FileEditor
-   Fixed bug [F\#13164](https://forge.typo3.org/issues/13164) EM GUI
    does not use translations
-   Fixed file saving, file diff, prepared file creation/moveing
-   Fixed bug [F\#17538](https://forge.typo3.org/issues/17538): EM gets
    instantiated before XCLASS definition (Thanks to Jesper
    Paardekooper)
-   Prompt for save with new file load
-   Small fixes for init configuration in fileeditor
-   Prevent file actions before a file is loaded
-   Simplified codemirror configuration
-   Use mixed parser for php files for correct parsing
-   fix docPath in link generation for documentation
-   remote list should show installed extensions without search
-   log saving of ext files in be-log
-   Mark filename red when file content changed
-   Fixed bug [F\#11487](https://forge.typo3.org/issues/11487) Edit
    Files - Download not implemented
-   Adjusted tooltips for filter
-   Fixed bug [F\#15019](https://forge.typo3.org/issues/15019):
    Extension Manager does not free the DB result with sql\_free\_result
-   Fixed bug [F\#17363](https://forge.typo3.org/issues/17363): Legacy
    extension manager does not allow to change category of configuration
    anymore
-   StateProvider for file tree adjusted
-   Prevent single click in translations while fetching languages
-   StateProvider for file tree added
-   Fixed bug [F\#11862](https://forge.typo3.org/issues/11862) Updating
    translations fails
-   Fixed bug [F\#12799](https://forge.typo3.org/issues/12799) Problem
    with Planer Task
-   Fixed bug [F\#12812](https://forge.typo3.org/issues/12812) State
    destroys the columns menu in repository list
-   CSS - fixed links in grid header menus
-   Fixed bug [F\#12556](https://forge.typo3.org/issues/12556) Upload
    comment not uploaded
-   CSS: remove border from filter trigger icons, cancel item displaced
-   remote list: do not deliver all data with empty search
-   CGL cleanups
-   CSS for filetree folder icons removed (use standard), filter with
    typo3 icons
-   Render settings and labels after the hook for easy additions
-   Implemented Hook to allow extensions to plug in the gui
-   Fixed bug [F\#17450](https://forge.typo3.org/issues/17450) path to
    Documentation for sysextensions is wrong (Thanks to Simon
    Schaufelberger)
-   Fixed double form tag in configuration forms (Thanks to Helmut
    Hummel)

### Linkvalidator

-   Fixed Bug [F\#12649](https://forge.typo3.org/issues/12649):
    Linkvalidator: Split up analyzeRecord()
-   Fixed bug [F\#12652](https://forge.typo3.org/issues/12652):
    Linkvalidator: If none of the link types are marked to be checked,
    all of them are checked
-   Fixed bug [F\#12650](https://forge.typo3.org/issues/12650):
    Linkvalidator: tx\_linkvalidator\_tasks\_validator: exec() is too
    long
-   Fixed bug [F\#12454](https://forge.typo3.org/issues/12454):
    Linkvalidator: Use setting “defaultMailFromName” and
    “defaultMailFromAddress”
-   Fixed bug [F\#12517](https://forge.typo3.org/issues/12517):
    Linkvalidator: Replace exec\_SELECTgetRows with
    exec\_SELECTgetSingleRow whenever a single record is expected
    (thanks to Jo Hasenau)
-   Fixed bug [F\#12549](https://forge.typo3.org/issues/12549):
    Linkvalidator: Unify capitalization of language labels

### DBAL

-   Fixed bug \#17399: Install Tool “COMPARE” fails to update mysql
    Tables
-   Fixed bug \#17327: Alter table in install tool does not work

### Workspaces

-   Fixed bug [F\#12457](https://forge.typo3.org/issues/12457): Split
    view und grid don't use StateProvider yet
-   Fixed bug [F\#12855](https://forge.typo3.org/issues/12855): Generate
    preview link visible in Live-Workspace and on non-content pages
-   Fixed bug [F\#13074](https://forge.typo3.org/issues/13074): missing
    cache\_frontend configuration
-   Fixed bug [F\#13098](https://forge.typo3.org/issues/13098): Hide
    sys\_workspace\_stage in list view (Thanks to Andreas Kiessling)
-   Fixed bug [F\#13003](https://forge.typo3.org/issues/13003):
    singleIndex rows not showing up due to browser security violations
-   Fixed bug [F\#13002](https://forge.typo3.org/issues/13002):
    singleIndex page much have invalid workspace id

### ImageMagick

-   Fixed bug \#16656: ImageMagick does not work with quotes in exec()
    path on Windows

### Backend

-   Update codemirror to recent version 0.9.4
-   Fixed bug \#17719: Move donation popup to about module (thanks to
    Steffen Kamper)
-   Fixed bug \#16636: Suggest wizard does not work with drop-down
    select fields
-   Fixed bug \#17715: Wrong variable name used in recycler (Thanks to
    Peter Beernink)
-   Fixed bug \#14224: Redirect URL for backend login is lost when
    entering wrong information (Thanks to Reinhard Führicht)
-   Fixed bug \#15771: Docheader (save, save+view, save+close etc)
    missing
-   Fixed bug \#17564: Red question marks in QuickEdit instead of icons
    (Thanks to Jürgen Ettmueller)
-   Fixed bug \#17541: cookies are not required in CLI mode /
    cookieSecure blocks cli
-   Fixed bug \#17501: User setup - pressing return creates installtool
    file
-   Fixed bug \#17087: BE user password not changable via setup module
    with “saltedpasswords” (Thanks to Marcus Krause)
-   Fixed bug \#17413: ExtJs Theme - use grey folder items for tree by
    default
-   Fixed bug \#17493: Filelist misses open folder icon
-   Fixed bug \#17411: DatePicker middle selector not readable
-   Fixed bug \#17402: Error page should use TYPO3\_copyright\_year
    constant (Thanks to Johannes Feustel)

### Development

-   Fixed bug \#16890: tcaTree in flexforms still breaks
-   Fixed bug \#17478: Wrong behaviour of
    “\$TYPO3\_CONF\_VARS\['SYS'\]\['sqlDebug'\] = TRUE” (since \#15425)

### Admin Panel

-   Fixed bug \#17708: wrong link in adminpanel: edit page properties
    (Thanks to Bjoern Pedersen)
-   Fixed bug \#17684: Admin Panel renders invalid markup (Thanks to
    Markus Klein)
-   Fixed bug \#17436: typo in class.tslib\_adminpanel.php (Thanks to
    Bjoern Pedersen)

### Frontend / TypoScript

-   Fixed bug \#17483: GifBuilder - meaningfulTempFilePrefix can cause
    invalid image urls
-   Fixed bug \#16902: Fatal error in tslib\_content\_text (Thanks to Jo
    Hasenau)
-   Fixed bug \#17428: Parsetime comment is inserted BEFORE !doctype and
    html tag (Thanks to Georg Ringer)
-   Fixed bug \#17371: Typo in MEDIA renders wrong height
-   Fixed bug \#17372: stdWrap .current and .setContentToCurrent do not
    return content
-   Fixed bug \#17422: cObj-&gt;FORM() wasn't processing the \$formData
    parameter (Thanks to Hubertus Golf)
-   Fixed bug \#17385: Restore proper behavior of LOAD\_REGISTER (Thanks
    to Jo Hasenau)
-   Fixed bug \#17553: css\_styled\_content ext\_tables.php links to
    wrong static file for TYPO3 4.4
-   Fixed bug \#12230: Function tslib\_cObj::crop() is not fully
    multibyte safe (Thanks to Vladimir Podkovanov)
-   Fixed bug \#17507: Extension using stdWrap hooks are broken due to
    stdWrap refactoring (Thank also to Jo Hasenau)
-   Fixed bug \#17351: PHP\_SCRIPT\_EXT/INT in 4.5 doesn't work (Thanks
    to Jo Hasenau)
-   Fixed bug \#17360: beforeWrap/afterWrap properties of TMENUITEM not
    working anymore (Thanks to Jo Hasenau)

### RTEhtmlarea

-   Fixed bug \#17695: htmlArea RTE: Removing format may remove content
-   Fixed bug \#17669: htmlArea RTE: Dialogue window positioning
    properties not honoured
-   Fixed bug \#17676: htmlArea RTE: Some combo stores are loaded twice
-   Fixed bug \#17677: htmlArea RTE: Classes configuration is loaded
    twice
-   Fixed bug \#17616: htmlArea RTE: Link dialogue doesn't open when
    anchor class is set with double quotes
-   Fixed bug \#17587: htmlArea RTE: RTE should not be enabled on
    Android
-   Fixed bug \#17373: Standalone images in RTE-enabled field not
    rendered in frontend
-   Fixed bug \#17349: htmlArea RTE: JS error when using “Edit element”
-   Fixed bug \#17438: htmlArea RTE: non-xhtml markup in image dialogue
    (Thanks to Georg Ringer)

### T3editor

-   Fixed bug \#17653: t3editor: wrong size calculation in Chrome for
    the code completion window (Thanks to Stephan Petzl)
-   Fixed bug \#17654: t3editor: some code completion descriptions have
    " entities instead of real quotes (thanks to Christian Kartnig)

### Backwards compatibility

-   Fixed bug \#16891: showpic.php causes a fatal error if parameters
    GET variable is not an array (Thanks to Helmut Hummel)
-   Fixed bug \#17412: PHP Warning in
    class.t3lib\_matchcondition\_abstract.php (Thanks to Sven Jürgens)
-   Fixed bug \#17355: Dependencies in sysext 'version' and 'workspaces'
-   Fixed bug \#17244: Error Message while Updating 4.4.6 &gt; 4.5
-   Fixed bug \#12998: Icons for Word documents missing (Thanks to
    Tobias Schäfer)

### Performance / Caching

-   Fixed bug \#17672: CSH - each label fires one request
-   Fixed bug \#17592: ExtDirect API calls are splitted in single
    requests and slows down page loading
-   Fixed bug \#16534: Exception message for missing memcache wrong
-   Fixed bug \#15721: Memcache::delete() without timeout param causes
    loss of memcache server in pool (Thanks to Michiel Ross)

### Security / Tokens / Login

-   Fixed bug \#17383: Open forms cannot be saved after “Relogin”
    (Security Token errors) (Thanks to Helmut Hummel)
-   Fixed bug \#17498: The refresh login dialogue is shown even if the
    session already timed out (Thanks to Helmut Hummel)
-   Fixed bug \#17490: After introducing the locking in \#17289 no CSRF
    token will ever be deleted (Thanks to Helmut Hummel)

<Category:ReleaseNotes/TYPO3_4.5.x> [Category:TYPO3
4.5](Category:TYPO3_4.5 "wikilink") <Category:2011>
