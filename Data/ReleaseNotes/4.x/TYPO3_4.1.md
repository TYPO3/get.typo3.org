RELEASE NOTES FOR TYPO3 4.1
===========================

This document describes all the important information for the TYPO3
release 4.1 that where not mentioned in the official article on
typo3.org.

<https://typo3.org/documentation/article/release-notes-41/>

Problems with HTMLArea RTE
--------------------------

If you have problems with RTE HTMLArea on 4.1, you have probably
installed it in the “local” extension location (typo3conf/ext/). To make
it work again, simply remove the extension from there (uninstall it
using the extension manager and in the extension manager in the details
of the htmlarea extension select “Backup/Delete” from the top right menu
and then “Click here to delete...”). The system will then delete the
extension from typo3conf/ext/htmlarea/. After that switch to “Install
extensions” and you will automatically find the version of HTMLArea that
ships with the Core of TYPO3 (in typo3/sysext/htmlarea/) in the list.
Just activate it, it works fine with 4.1.

There is a general problem with RTE HTMLArea in Typo3 4.1 and Mozilla
Firefox 2.0.0.3. This combination does not work together. See
<issue>17136</issue> for further information. There is a patch for RTE
HTMLArea attached to the bug report. A workaround might be to use
another browser, e.g. Mozilla Firefox 2.0.0.2 (works) or Internet
Explorer 7 (works).

Pagetree not displayed correctly
--------------------------------

If you have an ugly pagetree (“li” dots before the items and wrong
spacing and linebreaks) in the typo3 backend after the upgrade to 4.1,
try to ctrl (strg) + reload the site to clear the local cache of the
browser (phenomenon happend with Firefox 2.0).

This problem is also visible after doing a fresh install with install
script from <http://www.typo3-installer.de/> It can be resolved by
uninstalling extension Typo skin t3skin\_40 and installing t3skin

Changelog
---------

<changelog> 2007-03-06 Michael Stucki &lt;michael@typo3.org&gt;

`   * Release of TYPO3 4.1 / create branch `“`TYPO3_4-1`”` for 4.1.x development`

2007-03-06 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Setting default value of pageNotFoundOnCHashError back to `“`false`”` (= reverting Stucki's patch) as some extensions had problems with the new default value`

2007-03-05 Michael Stucki &lt;michael@typo3.org&gt;

`   * New login image (if no skin is used) by Ture Andersen`\
`   * Added a warning for admins if typo3conf/ENABLE_INSTALL_TOOL exists (which means that the Install Tool is currently enabled)`\
`   * Changed layout of admin warnings (use `

<li>
instead of plain breaks)

`   * Fixed bug #5125: Typo in SQL definition of sys_history`

2007-03-04 Oliver Hader &lt;oh@inpublica.de&gt;

`   * Fixed bug: #5098: IRRE - foreign_unique without foreign_selector doesn't work`

2007-03-01 Oliver Hader &lt;oh@inpublica.de&gt;

`   * Fixed bug: #5069: TSconfig mod.web_list.allowedNewTables used in t3lib_TCEforms_inline`\
`   * Fixed bug: #5092: Typo in Who is online (thanks to Matthias Kall)`

2007-03-01 Karsten Dambekalns &lt;karsten@typo3.org&gt;

`   * typo3/sysext/indexed_search: DBAL compliancy patch`

2007-02-28 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * New login image for t3skin by Ture Andersen`

2007-02-27 Oliver Hader &lt;oh@inpublica.de&gt;

`   * Fixed bug: #5052: Form action URL is not htmlspecialchared (patch by Michael Stucki)`\
`   * Fixed bug: #5072: Web>Info>Log - ID of BE user is displayed instead of its username`\
`   * Fixed bug: #5073: Tools>User Admin>List users online is broken`

2007-02-27 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Fixed bug #3666: permissions of versioned pages are not changed in draft workspace (patch by Andreas Wolf)`\
`   * Added rootline cache to speed up tree renderings in the BE`

2007-02-27 Ingo Renner &lt;typo3@ingo-renner.com&gt;

`   * Fixed bug: Cannot return from Quickedit mode`

2007-02-26 Dmitry Dulepov &lt;dmitry@typo3.org&gt;

`   * Better fix for bug #5032: [LocalLang: 0?]DEF is sometimes displayed for content elements`

2007-02-25 Oliver Hader &lt;oh@inpublica.de&gt;

`   * Fixed bug #5055: SQL problem with reviewstate in EM (thanks to Franz-Xaver Koch)`\
`   * Fixed bug: List all fe_groups in page icon tooltip (patch by Michael Stucki)`

2007-02-24 Ernesto Baschny &lt;ernst@cron-it.de&gt;

`   * Fix for bug fix #2677: Highlighting of current page in workspaces was not de-highlighting previous one`

2007-02-21 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Release of TYPO3 4.1RC2`

2007-02-21 Michael Stucki &lt;michael@typo3.org&gt;

`   * Security fix: Email injection vulnerability in t3lib_formmail (reported and fixed by Andreas Otto and Thorsten Kahler)`

2007-02-20 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fixed bug in EM: Insecure extensions were still displayed (patch by Karsten Dambekalns)`\
`   * Fixed a typo in class.em_xmlhandler.php`\
`   * Fixed a typo in typo3/sysext/install/mod/class.tx_install.php`\
`   * Changed another bug in the EM: Last update of extensions.xml.gz was not displayed`\
`   * Fixed bug #4951: SQL error when editing BE User`\
`   * Fixed bug #3412: Changed default size limits for various BE upload fields to 10M (this default can be defined through $TYPO3_CONF_VARS[BE][maxFileSize] or individually per field through $TCA)`\
`   * Various changes to t3skin (by Thomas Murphy):`\
`       - folder icon got more contrast`\
`       - navtree: darker color for hover & active states`\
`       - font-weight: bold; for active state`

2007-02-20 Oliver Hader &lt;oh@inpublica.de&gt;

`   * Fixed bug #4202: be_groups - fields restricted by a low maxitems value`\
`   * Fixed bug #4873: EM - Warning on uploading extension to TER (unserialize)`\
`   * Fixed bugs #3655 and #4701: No wrappers for certain events (patch by Martin Kutschker)`\
`   * Fixed bug: IRRE - Related child records are not updated when copying to a different page`

2007-02-20 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Fixed bug #4993: IE 5.5 and Konqueror compatibility for AJAX navtree`

2007-02-20 Dmitry Dulepov &lt;dmitry@typo3.org&gt;

`   * Fixed bug #5032: [LocalLang: 0?]DEF is sometimes displayed for content elements`

2007-02-19 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Fixed bug: AJAX navtree erroneously showed whole tree inside of the expanded branch on errors such as pages deleted in the meantime (thanks to Benjamin Mack)`\
`   * Fixed bug #4993: AJAX navtree does not expand in Konqueror (fixed by Benjamin Mack)`

2007-02-16 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Fixed bug #4207: User>Workspaces shows users pages they have no access to`

2007-02-16 Karsten Dambekalns &lt;karsten@typo3.org&gt;

`   * Fixed bug #4822: EM shows remote extensions as on this server only`

2007-02-16 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fixed bug #4973: Check if array is empty before looping over it (thanks to Thomas Oppelt)`\
`   * Fixed bug #2677: Highlighting of current page in workspace (fixed by Martin Kutschker and Benjamin Mack)`

2007-02-16 Dmitry Dulepov &lt;dmitry@typo3.org&gt;

`   * Fixed bug 4962: .htaccess in sysext fails in some Apache configurations`

2007-02-15 Michael Stucki &lt;michael@typo3.org&gt;

`   * Reverted fix for bug #4689 (closes #4987): Fix seems to cause problems, reinvestiation is needed`

2007-02-15 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Fix bug #4947: SQL error with DBAL/PostgreSQL when listing or looking up reviewed extensions`

2007-02-15 Thorsten Kahler &lt;thorsten.kahler@dkd.de&gt;

`   * Fix: Display description of options in install tool correctly`

2007-02-14 Bernhard Kraft &lt;kraftb@kraftb.at&gt;

`   * Added hook: New hook in t3lib_tceforms in method getSingleField allowing modification of single field rendering and adding buttons to alt_doc.php`

2007-02-14 Rupert Germann &lt;rupi@gmx.li&gt;

`   * Fix: Excluded the adminPanel GETvars from t3lib_div::cHashParams to prevent a cHash mismatch`

2007-02-11 Thomas Hempel &lt;thomas@work.de&gt;

`   * Fix bug #4943: Redundant comma in label_alt_force`

2007-02-11 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Fix bug #4423: BE search doesn't work with UTF-8 chars (thanks to John Angel)`

2007-02-07 Michael Stucki &lt;michael@typo3.org&gt;

`   * Release of TYPO3 4.1RC1`\
`   * Fixed bug #4883: mod_rewrite rules rewrite missing favicon.ico to index.php (thanks to Stefan Geith for this hint - notice that manual modification of existing .htaccess files might be neccessary)`\
`   * Added feature #4476: Allow limitation of config.linkVars`\
`   * Fixed bug #4917: Wrong links inside mounted page with overlay (thanks to Melanie Meyer / Franz Ripfel)`

2007-02-06 Oliver Hader &lt;oh@inpublica.de&gt;

`   * Fixed bug #3985: Wrong substitution for spamProtectEmailAddresses_atSubst/spamProtectEmailAddresses_lastDotSubst`

2007-02-06 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Fixed bug #4742: link to user on User Admin page is following to wrong URL`

2007-02-06 Michael Stucki &lt;michael@typo3.org&gt;

`   * Added feature #4592: Keep indexed_search tables consistent when deleting/hiding pages (Thanks to Michael Fritz)`\
`   * Fixed bug #4666: Use TYPO3 settings when formatting dates`\
`   * Fixed bug #4581: Duplicate entry on cache_pagesection on reloading twice. See bugtracker entry for details about this change.`\
`   * Added feature #4536: Add new property `“`additionalParams`”` to GMENU items / Cleanup in tslib_menu`\
`   * Fixed bug #3069 again: Ignore version check if no requirements are specified`\
`   * indexed_search: Turn off maxAge setting as this `“`feature`”` seems to make no sense at all`\
`   * Fixed bug #4689: Error in t3lib_tcemain while entering a number like 50 or 50.00 into a double2 field`\
`   * Fixed bug #3544: RTE-config in PageTS-config not loaded when in draft-workspace`

2007-02-05 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Lots of `<label>` tags added to checkbox labels throughout the core (Thanks to Ingo Renner for this big patch!)`

2007-02-05 Oliver Hader &lt;oh@inpublica.de&gt;

`   * Bugfix for TSconfig overriding TCA field configuration`\
`   * Fixed bug #4758: Page with doktype 3 (external URL) and e-mail as URL could be shown directly`

2007-02-04 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Added icon to edit record of page overlay for a translated page`

2007-02-04 Michael Stucki &lt;michael@typo3.org&gt;

`   * Extended db_mountpoint and file_mountpoint fields into to 255 bytes size`\
`   * Fixed bug #3069: Extension manager crashed because of some PHP bug with version_compare() (thanks to Rainer Haertlein who discovered the solution to this problem)`\
`   * Changed t3lib_basicFileFunctions to use filemtime() instead of filectime()`\
`   * Fixed bug #4526: Add td-`<number>` to last table elements in CSS styled content (thanks to Dimitriy Simakov)`\
`   * !!! Enable $TYPO3_CONF_VARS[FE][pageNotFoundOnCHashError] by default. This should usually do no harm at all as long as the encryptionKey is not changed.`\
`   * Trigger a warning if the PHP setting `“`post_max_size`”` is lower than `“`max_upload_size`”

2007-02-04 Oliver Hader &lt;oh@inpublica.de&gt;

`   * Features & bugfixes for Inline Relational Record Editing (IRRE)`\
`       - Feature: hide new record link by appearance property`\
`       - Feature #4838: enabled element browser to be used as selector`\
`       - Bugfix #4839: use `“`size`”` parameter of parent table for record selector`\
`       - Bugfix: changed handling of required fields on nested child records`

2007-02-04 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Instant collapsing for pagetree: The pagetree now doesn't wait for the AJAX response any more when collapsing`\
`   * Fixed bug #4817: Clickmenu shows up at the wrong place (Thanks to Benjamin Mack for the patches)`

2007-02-03 Oliver Hader &lt;oh@inpublica.de&gt;

`   * Fixed feature request: TCEforms/IRRE - Allow TSconfig to override TCA field configuration`

2007-02-02 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Changed class.t3lib_clipboard.php and class.db_list_extra.inc to use new mod.php?M=xMOD_tximpexp (instead old impexp/app/index.php)`

2007-01-30 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Fixing oddities in recursive stdWraps (bugs #4312 and #4871)`\
`   * Fix bug #4678: t3lib_div::array2xml() may crash with PHP 5.2.0`\
`   * Fix bug #3648: ease use of tslib_cObj::getTreeList()`\
`   * Added SYS[requestURIvar] to get original value of REQUEST_URI (needed by some URL writers for IIS)`

2007-01-30 Dmitry Dulepov &lt;dmitry@typo3.org&gt;

`   * Fixed never disappearing proposal to update database structure in Install>Database>COMPARE`

2007-01-29 Dmitry Dulepov &lt;dmitry@typo3.org&gt;

`   * !!! Changed MySQL engine type for several database tables to InnoDB`\
`   * Added several new indexes`

2007-01-28 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Added `“`html`` ``{`` ``height:`` ``100%`` ``}`”` to stylesheet to make RTE wizard (rteHTMLarea) work in IE7`\
`   * Remove checks for PHP version earlier than 4.3`

2007-01-24 Dmitry Dulepov &lt;dmitry@typo3.org&gt;

`   * Added `“`useCDATA`”` to a list of t3lib_div::array2xml() options to produce CDATA instead of entities`

2007-01-26 Oliver Hader &lt;oh@inpublica.de&gt;

`   * Fixed bug #4814: Umlauts error in AJAX Pagetree`\
`   * Updated prototype.js to version 1.5.0`\
`   * Updated script.aculo.us to version 1.7.0`\
`   * Created new directory for external contributions typo3/contrib/ and moved files:`\
`       - typo3/prototype.js    -> typo3/contrib/prototype/prototype.js`\
`       - typo3/scriptaculous/* -> typo3/contrib/scriptaculous/*`\
`       - typo3/json.php        -> typo3/contrib/json.php`\
`   * Changed paths to typo3/contrib in affected core files`

2007-01-25 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Added backwards compatibility to pagetree for non AJAX-capable browsers (by Benjamin Mack)`

2007-01-24 Michael Stucki &lt;michael@typo3.org&gt;

`   * Install Tool: Network 192.168.0.0/255.255.0.0 was allowed to enter the Install Tool regardless of the die() presence in typo3/install/index.php. This exception has been removed, only 127.0.0.1 may now enter the Install Tool regardless of any other conditions.`\
`   * !!! Install Tool: Instead of modifying typo3/install/index.php to enable the Install Tool, a new file `“`typo3conf/ENABLE_INSTALL_TOOL`”` can be created to enable it. Shared hosting servers: If you want to turn this off, you have to change the condition in typo3/install/index.php, line 50. See comment above.`\
`   * Removed access for 192.168.0.0/255.255.0.0 in misc/phpcheck/incfile.php`

2007-01-24 Dmitry Dulepov &lt;dmitry@typo3.org&gt;

`   * Fixed bug #4846: EM: inconsistent line ending`

2007-01-24 Oliver Hader &lt;oh@inpublica.de&gt;

`   * Fixed bug #4820: IRRE - Wrong character encoding in AJAX response`\
`   * Fixed feature request #4790: typolink.addQueryString - enable usage of merged POST and GET data`\
`   * Fixed bug #4824: typo3 not defined in jsfunc.tbe_editor.js`\
`   * Fixed bug #4809: require() in class.t3lib_tceforms_inline.php fails`\
`   * Fixed feature request #4780: TypoScript - add stdWrap to TMENU/GMENU`\
`   * Fixed bug #4827: Call to undefined method t3lib_BEfunc::getrecordtitleprep()`

2007-01-23 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Bugfix to mm-relation handling: writeMM() tried to set the `“`tablenames`”` field even for simple two-table relationships which then failed`

2007-01-23 Michael Stucki &lt;michael@typo3.org&gt;

`   * Slightly changed the check for IE browsers in t3lib_div::clientInfo()`\
`   * !!! Removed function `“`netPrintApplication_offsiteLinkWrap`”` and TypoScript property `“`netprintApplicationLink`”` for IMGTEXT elements which were only used by one extension which is obsolete meanwhile...`\
`   * Fixed bug #4830: Right click in CM did not work anymore (thanks to Benjamin Mack)`\
`   * Fixed bug #4643: File Upload did not recognize BE-User option `“`defaultFileUploads`”` (thanks to Benjamin Mack)`

2007-01-20 Michael Stucki &lt;michael@typo3.org&gt;

`   * Release of TYPO3 4.1beta3`\
`   * Update copyright information (just the year, of course) in t3lib/config_default.php`

2007-01-19 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * AJAX pagetree and filetree by Benjamin Mack <bmack@xnos.org>! (Thanks also to Franz Holzinger and Stefan Regniet for their help)`\
`   * Patch by Ren? Fritz regarding bidirectional mm-relations: It's now possible to save different relations to the same mm-table by means of so called `“`matchFields`”`. This is used by DAM.`

2007-01-19 Andreas Otto &lt;andreas.otto@dkd.de&gt;

`   * Fixed feature request 4656: The feature config.sys_language_softMergeIfNotBlank sets the `“`mergeIfNotBlank`”` for a field in the frontend context through TypoScript. It can be useful to have the same for `“`exclude`”` localization mode so a field is always overlaid in the frontend output. This patch simply copies the code from `“`softMergeIfNotBlank`”` and does the same for `“`exclude`”`.`

2007-01-19 Dmitry Dulepov &lt;dmitry@typo3.org&gt;

`   * !!! Added `“`prepend`”` to tt_content.stdWrap in css_styled_content to display anchor to localized content elements in addition to anchor to the default language version`

2007-01-19 Michael Stucki &lt;michael@typo3.org&gt;

`   * Reverting patch for bug #4581 which was committed by mistake. The solution works well, but it depends on 4.3.0 currently...`

2007-01-18 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Added PATH_typo3 to index_ts.php (see related change on 2006-10-29)`

2007-01-09 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Alphabetically sorted TS tree in TS Object Browser (Thanks to Ingo Renner)`

2007-01-09 Sebastian Kurfuerst &lt;sebastian@typo3.org&gt; (Thanks to
Oliver Hader)

`   * rewrote TBE_EDITOR Javascript functions to use JS `“`objects`”` and outsourced them to an external file`\
`   * !!! Removed the variables TBE_EDITOR_isChanged and TBE_EDITOR_loadTime in TBE_EDITOR javascript`\
`   * change in getRecordTitle: a too long title is wrapped in a `<span title="...">` tag to show a tooltip`

2007-01-03 Thorsten Kahler &lt;thorsten.kahler@dkd.de&gt;

`   * Fixed bug #931: Typolink to a page with certain type doesn't work if type is zero`

2007-01-03 Dmitry Dulepov &lt;dmitry@typo3.org&gt;

`   * Fixed bugs #3254, #3872, #4345: hide workspace selector if (1) no access to workspace module, or (2) only one workspace is available to user`\
`   * Fixed: publishing many records may cause PHP timeout and leave workspace in half-published state`\
`   * Fixed bug #4006: Load $GLOBALS['TSFE'] with image dimensions when IMG_RESOURCE is used (feature request!)`

2006-12-27 Dmitry Dulepov &lt;dmitry@typo3.org&gt;

`   * Removed garbage characters in typo3/init.php`

2006-12-21 Dmitry Dulepov &lt;dmitry@typo3.org&gt;

`   * List module did not use BACK_PATH in many calls to TYPO3 functions, which made imposible to reuse List module classes in extensions`

2006-12-20 Michael Stucki &lt;michael@typo3.org&gt;

`   * Release of TYPO3 4.1beta2`

2006-12-20 Peter Niederlag &lt;peter@niederlag.de&gt;

`   * Fixing important security issue in rtehtmlarea`

2006-12-19 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Some more IRRE bugfixes by Oliver concerning RTE and alt_doc.php`

2006-12-14 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Committed a bunch of bugfixes and new features related to IRRE (Thanks to Oliver Hader!):`\
`       - Automatic sorting by a `“`sortby`”` field (e.g. the title)`\
`       - The possibility to have relations from different parent pages to a child table`\
`       - Expanded/collapsed states are saved in uc now`\
`       - Bugfixes to #4616 and #4617 concerning IRRE relation to the same table`\
`       - Bugfix for using RTEs in IRRE records (works even inside of nested tabs now)`

2006-12-13 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * More localization of User>Workspaces (thanks to Marc W?hlken)`

2006-12-14 Kasper Skaarhoj

`   * Modified t3lib_div::makeInstance() to require filenames in lowercase`\
`   * Added some fields (`“`languageField`”`, `“`transOrigPointerField`”`, `“`type`”`, `“`header`”`) as default `“`shadowColumnsForNewPlaceholders`”` fields (tcemain `“`localize`”` command related)`\
`   * Fixed Safari context menu bug`

2006-12-13 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Improved t3lib_BEfunc::getRecordRaw() (error checking, freeing result set)`\
`   * Added a few addtional entries for special characters to the ASCII transliteration table`\
`   * Localized User>Workspaces (thanks to Andreas Wolf)`\
`   * Fix bug #2935: invalid HTML in Web>Versioning (quotes)`

2006-12-12 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Made cli_dispatch.phpsh work when called as `“`php`` ``cli_dispatch.phpsh`”` and protect from being called on a non CLI`\
`   * Make TYPO3 log page paths in UTF-8 if config.stat_apache_niceTitle = utf-8`

2006-12-12 Karsten Dambekalns &lt;karsten@typo3.org&gt;

`   * The EM now stores the list of extensions from TER in the database, see `[`https://forge.typo3.org/issues/15663`](https://forge.typo3.org/issues/15663)

2006-12-12 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Better getRecordTitle() function introducing label_userFunc (Thanks to David Br?hlmeier for this patch! See `[`http://lists.typo3.org/pipermail/typo3-team-core/2006-December/006521.html`](http://lists.typo3.org/pipermail/typo3-team-core/2006-December/006521.html)` for details.)`

2006-12-11 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Add page tree update to publish button of module Web>Versioning`\
`   * Added `“`new`` ``record`”` icon to table listing in module Web>Page`

2006-12-07 Franz Holzinger &lt;kontakt@fholzinger.com&gt;

`   * Fix bug #4555: double posts in tt_board did not get detected because of unintended conversion into a negative integer`

2006-12-07 Ingmar Schlecht &lt;ingmar@typo3.org&gt;fckLR

`   * Disabled typo3/alt_main_new.php as it's not fully working yet. Will be ready for TYPO3 4.2 probably, but not for 4.1.`\
`   * Disabled wordIndexing() function of t3lib_refindex`

2006-12-05 Michael Stucki &lt;michael@typo3.org&gt;

`   * Updated font-copyright information in t3lib/fonts/readme.txt - many thanks to Christian Welzel for taking care of this!`\
`   * Security enhancement: Prevent image access through thumbs.php. For details, see `[`https://typo3.org/teams/security/security-bulletins/typo3-20061205-1/`](https://typo3.org/teams/security/security-bulletins/typo3-20061205-1/)` - thanks to Marc Bastian Heinrichs for discovering and reporting this issue.`\
`   * Security enhancement: Refuse BE logins of usernames starting with `“`_CLI_`”` (they are only used by real CLI scripts)`

2006-11-21 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Allow strftime-syntax for config.stat_apache_logfile (Thanks to Francois Suter and Michael Stucki).`\
`   * Enhanced message for recordset warning (see change at 2006-12-02) and removed serializing of objects in the backtrace (devlog).`

2006-12-03 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Use `<label>` tags in tceforms where appropriate to enhance usability (Thanks to Ingo Renner for writing the patch!)`\
`   * Increase length for titles of be_users, be_groups, and fe_groups (Thanks to Ingo Renner for writing the patch!)`

2006-12-02 Dmitry Dulepov &lt;dmitry@typo3.org&gt;

`   * t3lib_db: added calls to t3lib_div::sysLog() and t3lib_div::devLog() if recordset is not valid`

2006-12-01 Kasper Skaarhoj &lt;kasper2006@typo3.com&gt;

`   * Additions to FlexFormTools`\
`   * Improved localization in tcemain`\
`   * Changed pages_languages_overlay to NOT be hidden by default`\
`   * Introduced REDIRECT: prefix to pageNotFound_handling (for backwards compatibility since someone changed to read the file instead of redirecting).`\
`   * Added `“`linkHandler`”` hook for typolink. TSref is updated.`\
`   * Modified Web > Info > Localization tools to not show details.`\
`   * Removed redundant directory, clmods.`

2006-11-28 Kasper Skaarhoj &lt;kasper2006@typo3.com&gt;

`   * Added `“`option.additionalPreviewLanguages`”` which enables to add other languages than the `“`default`”` to the list of those that a translator will see along with his own language`\
`   * Added new class, `“`class.t3lib_transl8tools.php`”` with general stuff for working with languages and translation. More to come...`\
`   * Added the t3lib_div::view_array() will also display a string input`\
`   * Added, that `“`t3lib_div::makeInstance()`”` will call `“`require_once()`”` for `“`t3lib_*`”` if the class name is not found; this is essentially an `“`auto-loader`”` feature that can come it pretty handing since something like 90% of all instantiations in the core is of t3lib_-classes; now we don't need to add `“`require_once()`”` statements in the top. And oh, btw. there is a function, `“`t3lib_div::requireOnce()`”` for `“`require_once()`”` which I suggest you use so that inclusions have some globals set (like TYPO3_CONF_VARS) and also cannot change local scope variables.`

2006-11-26 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fixed bug #4556: PHP4 compatibility issues`

2006-11-24 Michael Stucki &lt;michael@typo3.org&gt;

`   * Release of TYPO3 4.1beta1`

2006-11-21 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * New Feature: List users online (aka who is online) for BE users in Tools > User Manager`\
`   * New Feature: Allow UTF-8 file names (to enable set BE[forceCharset]='utf-8' and SYS[UTF8filesystem]=1)`

2006-11-23 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * New Feature: Inline Relational Record Editing (IRRE). See `[`https://wiki.typo3.org/Inline_Relational_Record_Editing`](https://wiki.typo3.org/Inline_Relational_Record_Editing)` for details. Thanks a lot to Oliver Hader who programmed this as his diploma thesis and to Sebastian who reviewed the code together with me!`

2006-11-21 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Fix a problem with PHP4 and UTF-8 byte order marks (BOM) in t3lib_div::xml2array()`

2006-11-17 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fixed bug #4059: options.hideRecords.pages doesn't work for mounted pages - Thanks to Marc Bastian Heinrichs for providing a fix!`\
`   * Fixed bug #4379: pageNotFound_handling ignores forceCharset setting`\
`   * Fixed bug #3115: JavaScript error on clickmenu in filelist module`\
`   * Fixed bug #4515: Input field with settings eval `“`date`”` and readOnly shows 01-01-1970 if the value is empty - Thanks to Marc Bastian Heinrichs for providing a fix!`

2006-11-17 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Indexed Search: Added stdWrap around the search word in the output (tx_indexedsearch_pi[whatis]): tx_indexedsearch_pi.whatis_stdWrap`\
`   * Indexed Search: Removed superfluos `

tag around search word

2006-11-16 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Indexed Search: Added freeIndexSetId GROUP BY in tx_indexedsearch->execFinalQuery() to make SELECT work on DBs other than Mysql`\
`   * Add an index prefix to Mysql key definitions when (var)chars are changed to text when multiplyDBfieldSize is set`\
`   * Reverted change to key of sys_refindex on 2006-09-01 (key prefix is set now automatically)`

2006-11-13 Bernhard Kraft &lt;kraftb@kraftb.at&gt;

`   * Fixed a bug: Normal labels rendered by class.db_list_extra.inc didn't get passed through t3lib_BEfunc::getProcessedValueExtra when alt_label fields are set.`

2006-11-08 Dmitry Dulepov &lt;dmitry@typo3.org&gt;

`   * Enable creation of compact flexforms`

2006-11-07 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fixed bug #4348: Wrong time format in syslog output`

2006-11-06 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fix bug #3495: Endless recursion with some MySQL versions`

2006-11-03 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fixed bug #4425: Garble code in adodb extension`\
`   * Fixed Cross Site Scripting issue in fe_adminLib.inc. For details, see `[`https://typo3.org/teams/security/security-bulletins/typo3-20061010-1/`](https://typo3.org/teams/security/security-bulletins/typo3-20061010-1/)` - thanks to Andriu Isenring Ritsch for discovering and reporting this issue.`

2006-11-02 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Fixed bug with bidirectional mm-relations: `“`group`”` fields with more than one table allowed didn't work properly any more`

2006-11-02 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fixed bug #1655: t3lib_div::substUrlsInPlainText() did not support HTTPS links`\
`   * Fixed bug #1236 again: 404 error while using the new content wizard`\
`   * Fixed bug #4443: Items in CE `“`Insert`` ``Records`”` don't have edit options in context menu any longer`\
`   * Small EM change: Annotate if all or only reviewed extensions should be searched`

2006-10-30 Karsten Dambekalns &lt;karsten@typo3.org&gt;

`   * Add security hints in typo3/mod/tools/em/class.em_index.php`\
`   * Fixed bug #3637 in EM (translation handling)`

2006-10-29 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Fixed bug #4021: array_merge error with PHP 5.0`\
`   * Changed occurences of PATH_site.'typo3conf/' to PATH_typo3conf and PATH_site.TYPO3_mainDir to PATH_typo3`

2006-10-25 Kasper Skaarhoj &lt;kasper2006@typo3.com&gt;

`   * Added `“`alt_main_new.php`”` including various modifications around to support this.`\
`   * Added clean-up functions in extension `“`lowlevel`”` plus modified t3lib_refindex and t3lib_tcemain accordingly`\
`   * Added word index to sys_refindex.`\
`   * Added feature to workspace records so an element can still be edited even when passed to `“`review`”`; This allows an editor to notify that the element is ready but still make changes. Of course no more changes can be made as soon as the reviewer has pushed it to the next level.`\
`   * Added `“`mod.php`”` which is a module dispatch script that can potentially help us to get rid of the problem with local vs global extensions and their backend modules having different conf.php files. Documentation remains to be added to `“`Inside`` ``TYPO3`”`.`

2006-10-14 Dmitry Dulepov &lt;dmitry@typo3.org&gt;

`   * Fixed bug #3199: SUing to myself?`\
`   * Fixed bug #3720: Multilanguage Flexforms don't work after migrating a site from one language to more languages`\
`   * Fixed bug #4358: Add an option to t3lib_div::xml2array to remove all unnecessary spaces`

2006-10-17 Ernesto Baschny &lt;ernst@cron-it.de&gt;

`   * Fix: no more `“`ERR`”` or `“`Unpacking`` ``the`` ``language`` ``pack`` ``failed`”` in the translation handling with curl enabled.`

2006-10-14 Dmitry Dulepov &lt;dmitry@typo3.org&gt;

`   * Fix: t3lib_db::exec_SELECTgetRows() did not free recordset`

2006-10-24 Karsten Dambekalns &lt;karsten@typo3.org&gt;

`   * ADOdb system extension updated to upstream 4.93. Added danish translation, thanks to Peter Klein!`

2006-10-11 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Changed index `“`parent`”` of sys_template to (pid,sorting)`

2006-10-10 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Fixed bug #3777: thumbs.php looks for file in t3lib/gfx instead of typo3/gfx`

2006-09-20 Bernhard Kraft &lt;kraftb@kraftb.at&gt;

`   * Fixed a missing space in typo3/template.php`

2006-09-15 Sebastian Kurfuerst &lt;sebastian@garbage-group.de&gt;

`   * Fixed bug #3862: Tools>User Admin allows switching to disabled user`\
`   * Fixed bug #3863: Delete temp_CACHED_* files from `“`Edit`` ``files`` ``in`` ``typo3conf/:`”

2006-09-14 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fixed bug #4219: := appendString() did not work because the check was made for `“`apppendString`”` (typo)`

2006-09-11 Wolfgang Klinger &lt;wk@plan2.net&gt;

`   * Feature request #4133: accesskey for TMENU`

2006-09-11 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * New feature: Bidirectional MM relations. You can now edit mm-relations from both sides of the relation in the Backend TCE-Forms. Thanks to Sebastian (for writing the patch together with me) and Ren? (for the first version of this feature)`

2006-09-11 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fixed a tiny security problem in indexed search (for details, see `[`https://typo3.org/teams/security/security-bulletins/typo3-20060911-1/`](https://typo3.org/teams/security/security-bulletins/typo3-20060911-1/)`)`

2006-09-08 Michael Stucki &lt;michael@typo3.org&gt;

`   * Updates to NEWS.txt`\
`   * Fixed #4165: Link to TSconfig and TSref not working. Thanks to Andreas Wolf for providing a patch!`

2006-09-04 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fixed bug #1268: plainMailEncoded not working with charset conversion.`

2006-09-03 Sebastian Kurfuerst &lt;sebastian@garbage-group.de&gt;

`   * Added su_back.gif image again to gfx`

2006-09-03 Wolfgang Klinger &lt;wk@plan2.net&gt;

`   * Changed call_user_func to call_user_func_array in t3lib_div to allow passing parameters by reference to t3lib_div::callUserFunction`

2006-09-02 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Fixed #4141: config.spamProtectEmailAddresses does not encrypt `“`9`”` digits correctly`\
`   * Web>List localization view did not handle `“`edit`` ``marked`”` for translation records`

2006-09-01 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Feature #529: Filled static_tsconfig_help with new content of core documents! Thanks a lot to Stephane Schitter for extracting the new data from the references!`

2006-09-01 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fixed bug: Creation of sys_refindex table was not possible if $TYPO3_CONF_VARS[SYS][multiplyDBfieldSize] was set.`\
`   * Indexed Search: Fixed bug #3994: OpenOffice.org files cannot be indexed by class.external_parser.php`\
`   * Indexed Search: Fixed bug #4093: PHP warning if indexed_search search word contains a front slash`\
`   * Get rid of blob fields in TYPO3 databases (replaced with `“`text`”` fields)`

2006-08-31 Ernesto Baschny &lt;ernst@cron-it.de&gt;

`   * Fixed bug #4035/3971: Error message when uploading one or two files in file-browser (BE)`

2006-08-31 Ernesto Baschny &lt;ernst@cron-it.de&gt;

`   * Feature #4131: Respects label_alt setting in some more places (especially labels pointing to MM tables)`

2006-08-31 Wolfgang Klinger &lt;wolfgang@stufenlos.net&gt;

`   * Feature #3026: Text change for the 'Quality' label`

2006-08-31 Dmitry Dulepov &lt;typo3@accio.lv&gt;

`   * Performance enhancement for BE: 1) caching images in typo3/gfx and typo3/sysext; 2) caching CSS files in typo3/sysext/t3skin/stylesheets`

2006-08-30 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Add and update icons for the new skin`

2006-08-29 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Made it possible to give FE users the choice to `“`stay`` ``logged`` ``in`”`. See new install tool option $TYPO3_CONF_VARS[FE][permalogin]. You'll need the latest newloginbox version from the typo3xdev Subversion repository.`

2006-08-29 Dmitry Dulepov &lt;typo3@accio.lv&gt;

`   * Performance enhancement in t3lib/class.t3lib_tstemplate.php: use UPDATE/INSERT (if no records have been updated) instead of DELETE/INSERT for cache_pagesection.`\
`   * Show domain name in the page tree if is_siteroot is set for page and `“`options.pageTree.showDomainNameWithTitle`”` is set in user TSConfig`

2006-08-25 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fixed bug #4076: Skin creates invalid HTML markup`\
`   * Fixed bug #1454: Cookie lifetime set in localconf.php will be ignored. Thanks to Dietrich Heise and Jeff Segars.`\
`   * Fixed bug #3922: config.spamProtectEmailAddresses doesn't respect config.removeDefaultJS setting. Thanks to Benjamin Mack.`\
`   * Added a new parameter to tslib_pibase->pi_classParam() which may contain classes that should not be prefixed.`

2006-08-24 Michael Stucki &lt;michael@typo3.org&gt;

`   * !!! Changed default value of $TYPO3_CONF_VARS[SYS][devIPmask] to `“`127.0.0.1,::1`”` (removed `“`192.168.*`”`)`\
`   * Fixed bug #1236: 404 error while using the new content wizard`\
`   * Fixed bug #3909: TYPO3_SSL does not detect valid SSL session`\
`   * Fixed bug #3973: pageNotFound_handling=TRUE is interpreted as URL`

2006-08-23 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fixed bug #3960: Display correct version number in Install Tool (only when authenticated)`\
`   * Fixed bug #4073: Extension manager doesn't find extensions if the search string contains a trailing space`\
`   * Fixed bug #3990: $BE_USER property `“`disableTabInTextarea`”` is not respected`

2006-08-19 Dmitry Dulepov &lt;typo3@accio.lv&gt;

`   * Fixed bug #4037: Link from Google AdWords fails due to wrong alias handling`

2006-08-19 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Partly fixed #4013: New records in non-default language are displayed in list-module in localization view too now even if they don't have a parent record in the default language.`

2006-08-17 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Added text to Update Wizard informing about the change of the default values of `“`config.inlineStyle2TempFile`”` and `“`config.removeDefaultJS`”` depending on compatVersion >= 4.0`

2006-08-14 Stanislas Rolland &lt;stanislas.rolland@fructifor.ca&gt;

`   * Corrections/adjustments to the htmlArea RTE extension (see details in local ChangeLog)`

2006-08-04 Wolfgang Klinger &lt;wk@plan2.net&gt;

`   * Fix bug #3160: IFSUB is not true if the parent page is a shortcut page`

2006-07-31 Dmitry Dulepov &lt;typo3@accio.lv&gt;

`   * Fixed endless page retrieval if pageNotFound_handling is set to URL of a local non existing page`

2006-07-31 Michael Stucki &lt;michael@typo3.org&gt;

`   * Updates to NEWS.txt (thanks to Martin Kutschker)`\
`   * Changed version requirements for t3skin (problems in combination with TYPO3 4.0.1)`

2006-07-30 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fix bug #3362 (again): Bugfix used t3lib_div which is missing at that point`\
`   * Fix bug #3943: compat_version was accidentally changed to 4.0.1`

2006-07-24 Karsten Dambekalns &lt;karsten@typo3.org&gt;

`   * t3lib/config_default.php: Fixed bug #3246 - error in t3lib/config_default.php on setting display_errors.`

2006-07-23 Karsten Dambekalns &lt;karsten@typo3.org&gt;

`   * t3lib/class.t3lib_div.php: Added a clarifying note to the comment for loadTCA(), thanks to Johannes Konert.`

2006-07-17 Dmitry Dulepov &lt;typo3@accio.lv&gt;

`   * t3lib_tceforms: now using `“`labels.new`”` from locallang instead of hard-coded `“`NEW`”

2006-07-17 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fix bug #3308: Check for deleted records when displaying language overlays`\
`   * Removed hardcoded rowSpace value in CSS Styled Content`\
`   * Minor cleanup in CSS Styled Content constants.txt + setup.txt`

2006-07-14 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * mailto: links were not handled as mailto: links if protocol was present in link`

2006-07-13 Karsten Dambekalns &lt;karsten@typo3.org&gt;

`   * EM: Fixed bug #3299 (Language pack installation cannot handle spaces in filenames).`\
`   * EM: Added extra sanity check when cleaning up version numbers in constraints, solves bogus warnings when installing extensions.`\
`   * EM: The label for enabling unreviewed extensions is more clear now. The search scope (all/reviewed) is shown on the import extensions page.`

2006-07-13 Wolfgang Klinger &lt;wk@plan2.net&gt;

`   * Fixing some missing is_array checks`

2006-07-12 Wolfgang Klinger &lt;wk@plan2.net&gt;

`   * Fix bug/feature request #3811: Adding `“`ATagParams`”` to GMENU`

2006-07-12 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Fix bug #3600: config.formMailCharset is not honoured`\
`   * t3lib_formmail: do charset conversion for mails when config.formMailCharset is set or config.metaCharset different from config.renderCharset`\
`   * t3lib_formmail: use $this->messageid of base class`

2006-07-12 Dmitry Dulepov &lt;typo3@accio.lv&gt;

`   * Fixed bug #3594: No lang resolution for title in `<tx_templavoila>` element`

2006-07-11 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * t3lib_cs: trim the charset for normalization`

2006-07-10 Dmitry Dulepov &lt;typo3@accio.lv&gt;

`   * Fixed bug: missing check for PHP version in t3lib_div::getUrl()`

2006-07-10 Ernesto Baschny &lt;ernst@cron-it.de&gt;

`   * Fixed bug #3005: captionSplit.cObject functionality in IMGTEXT is back as documented. But marked as `“`deprecated`”`.`\
`   * Fixed bug #3258: rendering issues in CSS styled IMGTEXT with noRows setting fixed.`\
`   * Fixed bug #3416: first caption was being doubled with `“`renderMethod=table`”`.`

2006-07-10 Dmitry Dulepov &lt;typo3@accio.lv&gt;

`   * Fixed bug: `“`Publish`` ``time`”` label appeared where `“`Unpublish`` ``time`”` should appear`

2006-07-07 Karsten Dambekalns &lt;karsten@typo3.org&gt;

`   * Added background color to TYPO3 error pages.`

2006-07-07 Michael Stucki &lt;michael@typo3.org&gt;

`   * Changed version numbers in t3lib/config_default.php`\
`   * Minor corrections to CVSreadme.txt`\
`   * Install Tool displayed TYPO3_version instead of TYPO3_branch`\
`   * Fixed bug #2462: typo3temp/ subdirectories were not created automatically`\
`   * Fixed bug #3362: Windows systems print phpinfo under some circumstances`\
`   * Fixed bug #1153 again: Adding parameters to showpic.php is not always expected: Add a new property to skip adding these parameters (JSwindow.altUrl_noDefaultParams)`

2006-07-06 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Fix bug #3779: edit form on page broken`\
`   * Fix bug #3085: broken option frame (palettes) in IE`

2006-07-01 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Fix bug #3427: config.spamProtectEmailAddresses may garble mail link`

2006-07-01 Karsten Dambekalns &lt;karsten@typo3.org&gt;

`   * DBAL update (sysext):`\
`       - this update closes bugs #3638, #2106, #2866, #3754 (for Firefox, broken in MSIE) and maybe a few more`\
`       - Implemented support for sysLog() on connection failure`\
`       - DBAL now honours the no_pconnect setting`\
`       - For handlers in native mode the setDBinit queries are executed upon connection`\
`       - The initial value for generated sequences can be configured per handler, to avoid duplicate key errors after having imported data`\
`       - BLOB fields are handled correctly now during INSERT and UPDATE`\
`       - Setting $store_lastBuiltQuery acts like in t3lib_db now (fill $debug_lastBuiltQuery)`\
`       - For the native handler quoting methods directly return the input for speedup, as no quoting is needed in that case`\
`       - Added support for native and userdefined handler to MetaType()`\
`       - Changed mapping of types to always use the largest possible integer, map tinytext to varchar instead of text`\
`       - admin_get_tables() skips tables whose names match /BIN\$/ (coming from the recycle bin on Oracle)`\
`       - Importing dumps using the install tool now works, see manual for tips`\
`       - Changed the way NOT NULL and DEFAULT are handled when setting up tables, see manual for the rules that now apply`\
`       - Code cleanup (indentation, documentation)`\
`       - Updated the manual and added new content`

2006-06-30 Franz Holzinger &lt;kontakt@fholzinger.com&gt;

`   * Fix bug #3725: empty and invalid flexform meta data are checked. impexp echos warning message found inside T3D import.`

2006-06-30 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * t3lib_htmlmail: auto-detect charset (using FE or BE settings) with manual override`

2006-06-30 Karsten Dambekalns &lt;karsten@typo3.org&gt;

`   * t3lib_page: Changed getMultipleGroupsWhereClause() to include a check using IS NULL to make it compatible to Oracle.`\
`   * t3lib_page: Made enableFields() call getMultipleGroupsWhereClause() non-statically using $this.`\
`   * sysext/adodb/: Update to upstream version 4.90, fixes to connection wizard, some code cleanup (closes: ##3755).`\
`   * t3lib_sqlparser: Clean up indentation a little bit, fix bug #2991, make the parser understand `“`IS`` ``NOT`` ``[NULL]`”` an addition to just `“`IS`` ``[NULL]`”`.`\
`   * t3lib_tsfebeuserauth: Changed static call to enableFields()`

2006-06-29 Ernesto Baschny &lt;ernst@cron-it.de&gt;

`   * Fix bug #3522 also in `“`content`` ``(default)`”`: Linking images to hidden pages results in click-enlarge`\
`   * Fix bug #3085: broken option frame (palettes) in IE`

2006-06-29 Dmitry Dulepov &lt;typo3@accio.lv&gt;

`   * pageNotFound_handling HTTP status fix when external URL is specified as 404 page`

2006-06-28 Ernesto Baschny &lt;ernst@cron-it.de&gt;

`   * Fix bug #3391: HTML-Source in error-pages now valid xhtml (FE)`

2006-06-28 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Fix bug# 3397: FORM submit as image is not valid xhtml`\
`   * Fixed restriction to languages in Frontend editing`\
`   * Fix bugs #3212 & #1178: empty page is displayed when accessing Web>Versioning`

2006-06-28 Bernhard Kraft &lt;kraftb@kraftb.at&gt;

`   * Fix bug #3162: Cropscale fails, if one dimension has already the right size (thanks to Stefan Geith)`

2006-06-28 Karsten Dambekalns &lt;karsten@typo3.org&gt;

`   * t3lib_extfilefunc: func_upload() now logs if no file was uploaded.`\
`   * t3lib_extfilefunc: The last error message encountered is stored in the member variable $lastError`\
`   * t3lib_tcemain: Made SQL query in versionizeRecord() conform to DBAL (use OR instead of ||).`\
`   * t3lib_userauthgroup, tx_sv_auth: Made FE group lookups possible when lockToDomain is NULL in DB (e.g. when using Oracle).`\
`   * t3lib/stddb/tables.sql: Changed be_users.lang to VARCHAR instead of CHAR, as MySQL changes it anyway.`\
`   * t3lib_install: Changed an eregi() to a matching preg_match()`

2006-06-27 Karsten Dambekalns &lt;karsten@typo3.org&gt;

`   * typo3/init.php: Fixed bug #2871.`\
`   * t3lib/class.t3lib_befunc.php: Fixed bug #3106, Documentation of function storeHash differs between class befunc and class page`\
`   * class.em_xmlhandler.php: Small change to the inline code docs`\
`   * class.tx_install.php: Code cleanup, removed some commented code and cleaned indentation`

2006-06-22 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Created exclusiveKeys for the TCA field configuration of type `“`select`”` [fix from 2006-03-19 was lost, see below]`

2006-06-11 Stanislas Rolland &lt;stanislas.rolland@fructifor.ca&gt;

`   * Fix bug #3505: BE multi-language flexforms do not work (t3lib_tceforms)`

2006-06-08 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Template tools (Web>Template) had hard-coded background colours`\
`   * Made Web > Template > Info skinnable`

2006-06-08 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Make t3lib_div::arrayToLogString() accept an empty string as empty list`\
`   * Fix bug #2938: edit icons have two title attributes, one hardcoded as an empty string`

2006-06-04 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Unify PHP5 check in config_defaults.php and deprecate $TYPO_VERSION`

2006-06-02 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Fix bug #3612: no c-prefix for URL fragment in menus (section index)`\
`   * Fix bug #2493: TCE-forms don't skins icons / t3skin lacks undo.gif, csv.gif and savedoknew.gif (thanks to Clemens Riccabona for the latter)`\
`   * Fix bugs #3326 and #3392: problems with php_uname()`\
`   * `“`Update`”` buttons of admin panel did not reload page in Firefox`

2006-05-31 Ernesto Baschny &lt;ernst@cron-it.de&gt;

`   * Fix bug #3522: Linking images to hidden pages results in click-enlarge`

2006-05-31 Bernhard Kraft &lt;kraftb@kraftb.at&gt;

`   * Fix a problem of the EM: `“`No`` ``file`` ``uploaded!`”` when retrying install after a failed dependency check`

2006-05-22 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Corrected error message for config.baseURL=1`

2006-05-20 Ernesto Baschny &lt;ernst@cron-it.de&gt;

`   * Fixed bug #2874: Current page in navigation tree wasn't being highlighted on IE6`

2006-05-20 Rupert Germann &lt;rupi@gmx.li&gt;

`   * Fixed bug #2566: XClass include code was missing in wsol_preview.php.`

2006-05-18 Rupert Germann &lt;rupi@gmx.li&gt;

`   * Fixed bug #0132: % signs in extra parameters of form contentelements where not handled correctly.`

2006-05-18 Ernesto Baschny &lt;ernst@cron-it.de&gt;

`   * Fixed bug #3138: Alignment of text in css_styled_content's Text w/ images (nowrap) was wrong (Firefox)`

2006-05-15 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Fixed bug #1374: Mailforms didn't work with `<input type="image">` submit buttons. (Thanks to Thorsten Kahler and Rupert Germann!)`\
`   * Changed square brackets `“`[`”` and `“`]`”` in URLs generated by media/scipts/fe_adminLib.inc to the urlencoded equivalents `“`%5B`”` and `“`%5D`”

2006-05-15 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Fix bug #3364: Changed t3lib_div::validPathStr() that it rejects files starting with ../ or containing /../, but allows ..`\
`   * Corrected comment for maxWInText (tslib_content) and simplified calculation`\
`   * Fix bug #338: Sanitize path normalization of class.t3lib_userauthgroup.php::addFileMount()`

2006-05-05 Stanislas Rolland &lt;stanislas.rolland@fructifor.ca&gt;

`   * EM: Fixed bug #3017.`\
`   * t3lib/class.t3lib_befunc.php: Fixed bug (trivial but important) #3106.`

2006-04-03 Karsten Dambekalns &lt;karsten@typo3.org&gt;

`   * EM: Fixed bugs #3096 (EM does not work if allow_url_open = off), #3097 (EM leaves mirror* files on failure).`

2006-04-02 Karsten Dambekalns &lt;karsten@typo3.org&gt;

`   * EM: Fixed bugs #3033 (Invalid argument supplied for foreach) , #3039 (TYPO3 version is higher than allowed), #2992/#2817 (shy extensions).`

2006-04-29 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Fix typolink.addQueryString.method=GET (see bug #3241)`\
`   * Fix problem with 2-byte charsets (eg UTF-16) in t3lib_cs::utf8_encode().`

2006-05-03 Rupert Germann &lt;rupi@gmx.li&gt;

`   * Fix: mod.web_list.alternateBgColors=1 did not work in TYPO3 4.0 when no skin is used. Added the missing class to typo3/stylesheet.css`

2006-04-30 Dmitry Dulepov &lt;typo3@accio.lv&gt;

`   * Fixed bug #3226: Error in template::clearCacheMenu if user is not admin`

2006-04-29 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Fixed wrong use of implode in typo3/mod/tools/em/class.em_index.php (lines 1392, 1424; see bug #3302)`

2006-04-23 Dmitry Dulepov &lt;typo3@accio.lv&gt;

`   * Fixed bugs #3049 and #3176: HTTP status 503 is sent when $TSFE->set_no_cache is called`

2006-04-21 Stanislas Rolland &lt;stanislas.rolland@fructifor.ca&gt;

`   * Fix bugtracker issue #3172: further correction to MIME type determination.`

2006-04-20 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Don't do false SQL query when SYS[setDBinit] is empty. Log error on failure.`

2006-04-19 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Added `“`Lucida`` ``Console`”` (Windows core font) as default font for monospaced BE form fields`

2006-04-18 Dmitry Dulepov &lt;typo3@accio.lv&gt;

`   * Fixed bug #3196: PHP warnings in class.t3lib_tceforms.php`

2006-04-14 Rupert Germann &lt;rupi@gmx.li&gt;

`   * fix for the fix from bug #2868: the adminpanel didn't transfer the page id correctly when realUrl was used`

2006-04-14 Bernhard Kraft &lt;kraftb@kraftb.at&gt;

`   * Added a hook in tslib_content for userdefined cObjects`\
`   * Fixed bug #3232: Use image format set via .format for GIFBUILDER images`

2006-04-13 Stanislas Rolland &lt;stanislas.rolland@fructifor.ca&gt;

`   * Fix bugtracker issue #3172: re-write getMimeType in t3lib_htmlmail`\
`   * Fix bugtracker issue #3051: RTE removes images under special conditions when saving`

2006-04-12 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Fixed bug #3174: chr() was misspelled char() in t3lib_div`\
`   * Fixed bug #3233: Some broken references to media/ fixed`

2006-04-12 Stanislas Rolland &lt;stanislas.rolland@fructifor.ca&gt;

`   * Fix bugtracker issue #3172: MIME type determination crashing (HEAD request)`

</changelog>
