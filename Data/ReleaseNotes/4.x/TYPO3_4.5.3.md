Release Notes for TYPO3 4.5.3
=============================

This document contains information about TYPO3 version 4.5.3 which was
released on May 24th, 2011.

News
----

This version is a maintenance release and contains bugfixes only. All
users of previous 4.5 versions are strongly advised to upgrade.

Since 4.5.2 the development of TYPO3 is now using Git as a versioning
system. Together with this change, a new packaging system was developed
which was used to package 4.5.3 (creating the .tar.gz and the .zip
files). A small change was done to the introduction package in the
tar.gz format, which now contains symlinks pointing to the current
typo3\_src. This allows more easy switching of the typo3\_src pointer
later on.

Please report any packaging error you might encounter to the
[Distribution
project](https://forge.typo3.org/projects/typo3v4-distribution).

Download
--------

<https://typo3.org/download/>

### MD5 checksums

    f736ade0a3effe81be3d7849f68c6443  typo3_src-4.5.3.tar.gz
    c71f6973518bd22a797eed41500ae2ff  typo3_src-4.5.3.zip
    19e28b762b39b6f1c706ab42ab05b683  blankpackage-4.5.3.tar.gz
    86bb82c1cd8b2c0379b24a99d37f2adb  blankpackage-4.5.3.zip
    c0b5bd0af571616ba50687b255910ed0  introductionpackage-4.5.3.tar.gz
    6bc528b30dd8986977bfa8ff45f24727  introductionpackage-4.5.3.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

### Scheduler tasks

If you use the Scheduler to have some tasks done automatically, you must
adjust the file rights of some files in the TYPO3 Core by hand.\
[For more information see here.](https://forge.typo3.org/issues/27029)

Changes
-------

Here is an ordered list of what was fixed since 4.5.2:

### User interface

-   \[BUGFIX\] Display correct lost records count in record statistics
    (Susanne Moog) ([25863](https://forge.typo3.org/issues/25863))
-   \[BUGFIX\] Check for a valid Date object before opening datepicker
    (Patrick Schriner) ([26674](https://forge.typo3.org/issues/26674))
-   \[BUGFIX\] List module - Fix pointer issue in pagebrowser (Peter
    Beernink) ([20908](https://forge.typo3.org/issues/20908))
-   \[BUGFIX\] Missing sprite icons in module db check &gt; record
    statistics (Sven Juergens)
    ([24835](https://forge.typo3.org/issues/24835))
-   \[BUGFIX\] Using datetime field with datepicker the time information
    gets lost (Steffen Kamper) (\#17596)
-   \[BUGFIX\] Pagetree - Add missing icons for expand/collapse whole
    branches (Stefan Galinski)
    ([25305](https://forge.typo3.org/issues/25305))
-   \[BUGFIX\] Wrong display of csh icon and text in new record wizard
    (sebastian.mueller) ([25371](https://forge.typo3.org/issues/25371))
-   \[BUGFIX\] BE list module fails on some systems with PHP 5.3 (Xavier
    Perseguers) ([25408](https://forge.typo3.org/issues/25408))
-   \[BUGFIX\] CSH tooltips in TCEforms lack cursor:pointer (Steffen
    Gebert) ([25406](https://forge.typo3.org/issues/25406))
-   \[BUGFIX\] Performance: Pagetree uses wrong setting for limiting
    number of rendered page nodes (Oliver Hader)
    ([25431](https://forge.typo3.org/issues/25431))
-   \[BUGFIX\] CSH not showing “more info” link icon anymore (Steffen
    Kamper) (\#18036)
-   \[BUGFIX\] BE ajax request fails on some systems with php 5.3 (Joh.
    Feustel) (\#17250)
-   \[BUGFIX\] TCEforms palette header is only indented on first tab
    (Steffen Kamper) (\#17789)
-   \[BUGFIX\] Link title of “browse links” have wrong encoded umlauts
    (Frederic Gaus, Flagbit GmbH & Co. KG) (\#17979)
-   \[BUGFIX\] Deleted overlay missing in overlay priorities (Francois
    Suter) (\#17815)
-   \[BUGFIX\] gif-Sprite does not work in IE6 due to error in
    spriteGenerator (Steffen Ritter)
-   \[BUGFIX\] Pagetree - Selection state incorrect after a cancelled
    edit (Stefan) (\#17828)
-   \[BUGFIX\] pagetree-&gt;expand contextmenu action does not work as
    expected (Stefan) (\#17394)
-   \[BUGFIX\] Wrong label in felogin redirectDisable (Steffen Kamper)
    (\#17466)
-   \[BUGFIX\] Drop the checks for the image file size from the install
    tool (Oliver) (\#17849)
-   \[BUGFIX\] Backend layout wizard uses invalid stylesheet path
    (Thanks to Markus Klein) (stephenking) (\#17776)

### Development

-   \[BUGFIX\] Allow Tx\_ as class prefix (Andreas Kiessling)
    ([22594](https://forge.typo3.org/issues/22594))
-   \[BUGFIX\] TCA tree with maxitems=1 doesn't work (Marco Huber)
    ([25347](https://forge.typo3.org/issues/25347))
-   \[BUGFIX\] Wrong type hinting in interface
    tslib\_menu\_filterMenuPagesHook (Michael Birchler)
    ([25979](https://forge.typo3.org/issues/25979))
-   \[BUGFIX\] register\['count\_menuItems'\] wrong, if filtered by
    userfunc (Bjoern Pedersen)
    ([25405](https://forge.typo3.org/issues/25405))
-   \[BUGFIX\] Visibility of method tx\_sysaction\_task::fixUsername()
    (Oliver Hader) ([25219](https://forge.typo3.org/issues/25219))
-   \[BUGFIX\] Disable the TCA Tree if
    \$PA\['fieldConf'\]\['config'\]\['readOnly'\] is true. (Marco Huber)
    ([25888](https://forge.typo3.org/issues/25888))
-   \[BUGFIX\] Fix PHP Catchable Fatal Error in t3lib\_iconWorks (Sven
    Luzar) ([25402](https://forge.typo3.org/issues/25402))
-   \[BUGFIX\] Fix path resolution in
    t3lib\_compressor::compressCssFile() (Rens Admiraal) (\#18035)
-   \[BUGFIX\] Don't load ExtCore and ExtJS simultaneously (Bjoern
    Pedersen) (\#17994)
-   \[BUGFIX\] tcaTree Interface is not localized (Steffen Ritter)
    (\#17818)
-   \[BUGFIX\] fix t3lib\_extMgm::addToAllTCAtypes(..... ,
    'replace:xxx') (Tolleiv Nietsch) (\#17777)

### TypoScript

-   \[BUGFIX\] Fix stdWrap for Click-to-enlarge (Markus Klein)
    ([26757](https://forge.typo3.org/issues/26757))
-   \[BUGFIX\] Also crop when maxCharacters &lt; first word (Peter
    Beernink) ([25368](https://forge.typo3.org/issues/25368))
-   \[BUGFIX\] Recursion error in typoscript when including typoscript
    files (Tobias Liebig)
    ([25374](https://forge.typo3.org/issues/25374))
-   \[BUGFIX\] PHP\_SCRIPT\_INT unnecessarily requires parameter
    scriptSuffix (Steffen Gebert)
    ([25145](https://forge.typo3.org/issues/25145))
-   \[BUGFIX\] Media obj respect moveJsFromHeaderToFooter (Alexandre
    Gravel-Raymond) ([25258](https://forge.typo3.org/issues/25258))
-   \[BUGFIX\] Wrong 'target' generation in imagelinkwrap, making the
    generated page XHTML invalid (Ernesto Baschny)
    ([25311](https://forge.typo3.org/issues/25311))

### Frontend

-   \[BUGFIX\] Flexformfield “Forgot Password Message” in felogin does
    not work (Steffen Mueller)
    ([23134](https://forge.typo3.org/issues/23134))
-   \[BUGFIX\] Send header Error 404 in case of page not found errors
    (Steffen Gebert) ([24945](https://forge.typo3.org/issues/24945))
-   \[BUGFIX\] Setting “Reply-To” fails in formmail (Jigal van Hemert)
    (\#17916)
-   \[BUGFIX\] Pages with Enforce Protocol (SSL) may generate wrong URL
    (Steffen Ritter) (\#17118)

### Administration / Configuration

-   \[BUGFIX\] Log out after running garbage collection tests (Christian
    Kuhn) ([26174](https://forge.typo3.org/issues/26174))
-   \[BUGFIX\] Configuration Tool creates invalid extTables.php file
    (Markus Klein) ([25781](https://forge.typo3.org/issues/25781))
-   \[BUGFIX\] unzip\_path setting is used inconsistently (Rasto Birka)
    ([25470](https://forge.typo3.org/issues/25470))
-   \[BUGFIX\] Add the storage field to the TCA for sysfolders (Henrik
    Møller Rasmussen) ([25494](https://forge.typo3.org/issues/25494))
-   \[BUGFIX\] Encryted SMTP does not work (Julian Hofmann)
-   \[BUGFIX\] Changing TCA via Tools-&gt;Configuration breaks TCA
    (Markus Klein) (\#17754)
-   \[BUGFIX\] Import/Export module uses page id as tree depth (Oliver
    Hader) (\#17814)
-   \[BUGFIX\] Compression Level Upgrade Wizard refers to old .htaccess
    path (Markus Klein) (\#17775)

### Security

-   \[BUGFIX\] Abandon one time CSRF tokens (Helmut Hummel)
    ([25359](https://forge.typo3.org/issues/25359))
-   \[BUGFIX\] Failed backend logins not being logged when
    saltedpasswords are used (Torben Hansen)
    ([23917](https://forge.typo3.org/issues/23917))
-   \[BUGFIX\] Additions to fileDenyPattern give security warning in BE
    (steffenk) (\#17817)

### Extension Manager

-   \[BUGFIX\] EM: Incorrect label ext\_details\_always\_loaded
    \['SYS'\] / \['EXT'\] (Bjoern Pedersen)
    ([26354](https://forge.typo3.org/issues/26354))
-   \[BUGFIX\] Filtering extensions on remote repository does not
    respect repository selection (Steffen Kamper)
    ([25390](https://forge.typo3.org/issues/25390))
-   \[BUGFIX\] Fix Extension Download with compressionLevel enabled
    (Steffen Gebert) (\#18029)
-   \[BUGFIX\] Remove superfluous code from Extension Manager (Steffen
    Kamper) (\#17911)
-   \[BUGFIX\] EM update module doesn't accept cache\_extension table
    (Steffen Kamper) (\#17907)
-   \[BUGFIX\] EM using filter in filter menu isn't clear enough
    (Steffen Kamper) (\#17892)
-   \[BUGFIX\] New EM, Date of last update not visible due to missing
    (steffenk) (\#17788)
-   \[BUGFIX\] EM locallist, grouping with author (Steffen Kamper)
    (\#17887)
-   \[BUGFIX\] Extension Manager Function “Backup/Delete =&gt; Dump
    Tables” doesn't work any more (Franz G. Jahn) (\#17938)
-   \[BUGFIX\] EM interface for renderHook is missing (steffenk)
    (\#17865)
-   \[BUGFIX\] Typo in top.TYPO3.ModuleMenu (Steffen Gebert) (\#17875)
-   \[BUGFIX\] Error 414 - “Request-URI Too Large” when saving file in
    extension manager (old version) (steffenk) (\#17812)
-   \[BUGFIX\] Filtering in repository state does not work (steffenk)
    (\#17787)
-   \[BUGFIX\] Filtering repository list fields are not prefixed with
    tablename (steffenk) (\#17786)

### RTEhtmlarea

-   \[TASK\] Update RTE manual with description of buttons (stan)
    ([26724](https://forge.typo3.org/issues/26724))

### Workspaces

-   \[BUGFIX\] Removing child records in a workspace does not work
    (Oliver Hader) ([25352](https://forge.typo3.org/issues/25352))
-   \[FEATURE\] Add hook to override icon status overlay (Francois
    Suter) ([25765](https://forge.typo3.org/issues/25765))

### Linkvalidator

-   \[BUGFIX\] getUrl creates malformed requests if no path is given
    (Philipp Gampe) ([12225](https://forge.typo3.org/issues/12225))
-   \[FEATURE\]: Add user-agent header
    ([\#13800](https://forge.typo3.org/issues/#13800))
-   \[BUGFIX\]: Refactor external link, do not follow senseless loop,
    add user agent (thanks to Daniel Minder)
    ([\#13680](https://forge.typo3.org/issues/#13680))
-   \[BUGFIX\]: Third-party classes cannot be checked due to
    dynamicConfigFile in TCA (thanks to Jan Philipp Timme)
    ([\#13953](https://forge.typo3.org/issues/#13953))
-   \[BUGFIX\]: Scheduler task does not work at all (Michael Miousse)
    ([\#13757](https://forge.typo3.org/issues/#13757))
-   \[BUGFIX\]: checkhidden has no effect for some configurations
    (Michael Miousse) ([\#13828](https://forge.typo3.org/issues/#13828))
-   \[BUGFIX\]: The info module does not show up in IE 7 and 8 (Michael
    Miousse) ([\#26731](https://forge.typo3.org/issues/#26731))
-   \[BUGFIX\]: Content of Tab is not scrollable (Michael Miousse)
    ([\#13368](https://forge.typo3.org/issues/#13368))

### Code-Cosmetics / Cleanups

-   \[TASK\] Remove file SVNreadme.txt (Steffen Gebert)
-   \[BUG\] Constant TYPO3\_URL\_DONATE defined twice (Xavier
    Perseguers) ([26781](https://forge.typo3.org/issues/26781))
-   \[BUGFIX\] Typo “tsdWrap” instead of “stdWrap” (Christopher
    Stelmaszyk) ([26500](https://forge.typo3.org/issues/26500))
-   \[BUGFIX\]\[TESTS\] Fix unit test cropIsMultibyteSafe (Steffen
    Gebert) ([26491](https://forge.typo3.org/issues/26491))
-   \[BUGFIX\]\[TESTS\] Fix unit test
    fixPermissionsSetsPermissionsWithRelativeFileReference (Steffen
    Gebert) ([26423](https://forge.typo3.org/issues/26423))
-   \[BUGFIX\] Fix inconsistent linebreaks in some files (Michael
    Stucki) ([26126](https://forge.typo3.org/issues/26126))
-   \[BUGFIX\] Replace deprecated assertType in unit tests (Alexander
    Stehlik) ([25090](https://forge.typo3.org/issues/25090))
-   \[BUGFIX\] remove console.log in pagetree actions.js (Frederic Gaus,
    Flagbit GmbH & Co. KG)
    ([25721](https://forge.typo3.org/issues/25721))
-   \[TASK\] PHP closing tag don't exist in some files (Stefano Kowalke)
    ([25436](https://forge.typo3.org/issues/25436))
-   \[BUGFIX\] Wrong CSS definition for “submit” (Steffen Gebert)
    (\#18043)
-   \[BUGFIX\] Missing initialization of variables (Steffen Kamper)
    (\#17934)
-   \[TASK\] Changed copyright note to current year (Sebastian)


