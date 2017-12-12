RELEASE NOTES FOR TYPO3 4.0
===========================

This page contains all important 4.0 specific information. (See also:
[Upgrade guide](Upgrade "wikilink"))

Symlink Change
--------------

-   Starting with TYPO3 4.0beta3, internal symlinks are not used
    anymore. This means, that there will be no symlinks inside the
    `typo3_src/` folder. However, some extensions are not correctly
    adopted to the new scheme, therefore, you may want to add the
    symlinks again to prevent any problems.

<!-- -->

-   If you are upgrading from an older version, you will need to change
    the symlink `index.php` (pointing to `tslib/index_ts.php` in
    TYPO3\_3.8.1 and before) to point to `typo3_src/index.php` in TYPO3
    4.0:

<shell> rm index.php ln -s typo3\_src/index.php index.php

1.  (provided you have linked the “typo3\_src” folder to your TYPO3
    source folder, e.g. “typo3\_src-4.0/”)

</shell>

-   Please keep in mind that there will be no symlinks anymore from the
    provided fonts `nimbus.ttf` and `vera.ttf` to `arial.ttf` and
    `verdana.ttf`. If you depend on these fonts, you need to upload the
    original fonts manually or create symlinks to these look-alike-fonts
    in `t3lib/fonts/`.

Extensions
----------

As with any TYPO3 release, the default extension set has been changed.
There are some new **system extensions** that were distributed as
default **global extensions** in 3.8.x, as well as some new system
extensions that were previously only available through the . There are
some extensions that are no longer shipped with the TYPO3 source and are
available through TER.

Because **local extensions** (typo3conf/ext) take precedence in loading
over global ones (typo3/ext), and global extensions over system ones
(typo3/sysext), make sure you are not overriding newer system or global
extensions with older ones installed as locals. When you remove
extensions from typo3conf/ext/ or typo3/ext/ because they are now a
system extension (rtehtmlarea for example), don't forget to remove the
temp\_CACHED\_\* files in typo3conf/ **manually**.

Only the security checked extensions can be seen with the Extension
Manager (EM). If you want to see all extensions, then you must activate
them manually in the EM settings section. Click the checkbox 'enable
unsupported extensions'. In the 'import extensions' menu you must click
on 'Retrieve/Update' to get the latest list of available extensions from
TER.

#### New System Extensions

The following extensions were previously only available through TER and
are shipped as system extensions in TYPO3 4.0:

-   <extension>adodb</extension> -
-   <extension>dbal</extension> -
-   <extension>rtehtmlarea</extension>
-   <extension>t3skin</extension>

#### Extensions Promoted to System

These extensions were shipped as default global extensions in TYPO3 3.8
and have been 'promoted' to system extensions:

-   tstemplate
-   tstemplate\_analyzer
-   tstemplate\_ceditor
-   tstemplate\_info
-   tstemplate\_objbrowser

#### Removed Extensions

The following extensions were shipped as default global extensions in
TYPO3 3.8 and have been removed from the TYPO3 source. They are either
still available through TER or have been phased out:

-   conf\_userts
-   direct\_mail
-   direct\_mail\_subscription
-   feuser\_admin
-   freesite
-   imagelist
-   kickstarter
-   metatags
-   phpmyadmin
-   plugin\_mgm
-   quickhelp
-   rte
-   rte\_conf
-   setoldpluginlist
-   skin1
-   static\_file\_edit
-   sys\_messages
-   sys\_notepad
-   sys\_stat
-   sys\_todos
-   sys\_workflows
-   taskcenter\_modules
-   taskcenter\_recent
-   taskcenter\_rootlist
-   tipafriend
-   ts\_language\_de
-   ts\_language\_dk
-   ts\_language\_fr
-   ts\_language\_nl
-   ts\_language\_no
-   tstemplate\_styler
-   tt\_address
-   tt\_board
-   tt\_calender
-   tt\_guest
-   tt\_news
-   tt\_poll
-   tt\_products
-   tt\_rating

Localization/Language packs
---------------------------

-   The old csh\_\[lang-key\] extensions are not used anymore.

<!-- -->

-   Please go to the EM and use the new function “Translation handling”.
    There you just select all languages you want to to carry within your
    installation.

<!-- -->

-   For one-time initial update or later synchronisation you need to use
    the button “Update from repository”.

<!-- -->

-   On installing additional extensions later on the EM automatically
    takes care to import the appropriate language-packs as selected
    (only if available of course)! You only need to use the “Translation
    handling” if you want to update/check lables with the
    translation-server

Important UTF-8 database settings change
----------------------------------------

For using TYPO3 version 4.0, on a MySQL-4.1 (maybe other versions) with
a UTF-8 based database, please refer to the details of
<https://forge.typo3.org/issues/14848>.

Direct Mail Extension
---------------------

Old versions of direct mail don't work anymore with TYPO3 4.0, so you
need to get the latest version from the Extension Repository.

Rich Text Editor
----------------

TYPO3 4.0 ships with rtehtmlarea as the default RTE. You can install it
using the Extension Manager. (If you have an old version of rtehtmlarea
in typo3conf/ext/, you must delete it.)

New Skin
--------

TYPO3 Version 4.0 is shipped with a new default skin developed by Thomas
Murphy and the design team. It is enabled by default. If you would like
to switch back to the original skin you can just do so by uninstalling
the extension “t3skin” in the Extension Manager.

Quickstart and Testsite packages
--------------------------------

-   Notice that the “Quickstart” and the “Testsite” packages are no
    longer provided. Instead, you can get them as a T3D file which can
    be imported using the Import/Export extension. See
    <https://typo3.org/download/> for details.

Changelog
---------

This list contains all features und bugfixes from 4-dev to 4.0.1

    2006-07-31  Michael Stucki  michael@typo3.org

        * Release of TYPO3 4.0.1
        * Updates to NEWS.txt (thanks to Martin Kutschker)
        * Changed version requirements for t3skin (problems in combination with TYPO3 4.0.1)

    2006-07-31  Dmitry Dulepov  typo3@accio.lv

        * Fixed endless page retrieval if pageNotFound_handling is set to URL of a local non existing page

    2006-07-30  Michael Stucki  michael@typo3.org

        * Fix bug #3362 (again): Bugfix used t3lib_div which is missing at that point
        * Fix bug #3943: compat_version was accidentally changed to 4.0.1

    2006-07-30  Dmitry Dulepov  typo3@accio.lv

        * Changed some typos in rtehtmlarea (see local ChangeLog)

    2006-07-24  Karsten Dambekalns  karsten@typo3.org

        * t3lib/config_default.php: Fixed bug #3246 - error in t3lib/config_default.php on setting display_errors.

    2006-07-23  Karsten Dambekalns  karsten@typo3.org

        * t3lib/class.t3lib_div.php: Added a clarifying note to the comment for loadTCA(), thanks to Johannes Konert.

    2006-07-17  Dmitry Dulepov  typo3@accio.lv

        * t3lib_tceforms: now using "labels.new" from locallang instead of hard-coded "NEW"

    2006-07-17  Michael Stucki  michael@typo3.org

        * Fix bug #3308: Check for deleted records when displaying language overlays
        * Removed hardcoded rowSpace value in CSS Styled Content
        * Minor cleanup in CSS Styled Content constants.txt + setup.txt

    2006-07-14  Martin Kutschker  martin.t.kutschker@blackbox.net

        * mailto: links were not handled as mailto: links if protocol was present in link

    2006-07-13 Karsten Dambekalns karsten@typo3.org

        * EM: Fixed bug #3299 (Language pack installation cannot handle spaces in filenames).
        * EM: Added extra sanity check when cleaning up version numbers in constraints, solves bogus warnings when installing extensions.
        * EM: The label for enabling unreviewed extensions is more clear now. The search scope (all/reviewed) is shown on the import extensions page.

    2006-07-13 Wolfgang Klinger wk@plan2.net

        * Fixing some missing is_array checks

    2006-07-12 Wolfgang Klinger wk@plan2.net

        * Fix bug/feature request #3811: Adding "ATagParams" to GMENU

    2006-07-12  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Fix bug #3600: config.formMailCharset is not honoured
        * t3lib_formmail: do charset conversion for mails when config.formMailCharset is set or config.metaCharset different from config.renderCharset
        * t3lib_formmail: use $this-messageid of base class

    2006-07-12 Dmitry Dulepov typo3@accio.lv

        * Fixed bug #3594: No lang resolution for title in tx_templavoila element

    2006-07-11  Martin Kutschker  martin.t.kutschker@blackbox.net

        * t3lib_cs: trim the charset for normalization

    2006-07-11 Dmitry Dulepov typo3@accio.lv

        * Fixed bug: missing check for PHP version in t3lib_div::getUrl()

    2006-07-10  Ernesto Baschny ernst@cron-it.de

        * Fixed bug #3005: captionSplit.cObject functionality in IMGTEXT is back as documented. But marked as "deprecated".
        * Fixed bug #3258: rendering issues in CSS styled IMGTEXT with noRows setting fixed.
        * Fixed bug #3416: first caption was being doubled with "renderMethod=table".

    2006-07-10 Dmitry Dulepov typo3@accio.lv

        * Fixed bug: "Publish time" label appeared where "Unpublish time" should appear

    2006-07-07  Karsten Dambekalns  karsten@typo3.org

        * Added background color to TYPO3 error pages.

    2006-07-07  Michael Stucki  michael@typo3.org

        * Changed version numbers in t3lib/config_default.php
        * Minor corrections to CVSreadme.txt
        * Install Tool displayed TYPO3_version instead of TYPO3_branch
        * Fixed bug #2462: typo3temp/ subdirectories were not created automatically
        * Fixed bug #3362: Windows systems print phpinfo under some circumstances
        * Fixed bug #1153 again: Adding parameters to showpic.php is not always expected: Add a new property to skip adding these parameters (JSwindow.altUrl_noDefaultParams)

    2006-07-06  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Fix bug #3779: edit form on page broken
        * Fix bug #3085: broken option frame (palettes) in IE

    2006-07-01  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Fix bug #3427: config.spamProtectEmailAddresses may garble mail link

    2006-07-01  Karsten Dambekalns  karsten@typo3.org

        * DBAL update (sysext):
            - this update closes bugs #3638, #2106, #2866, #3754 (for Firefox, broken in MSIE) and maybe a few more
            - Implemented support for sysLog() on connection failure
            - DBAL now honours the no_pconnect setting
            - For handlers in native mode the setDBinit queries are executed upon connection
            - The initial value for generated sequences can be configured per handler, to avoid duplicate key errors after having imported data
            - BLOB fields are handled correctly now during INSERT and UPDATE
            - Setting $store_lastBuiltQuery acts like in t3lib_db now (fill $debug_lastBuiltQuery)
            - For the native handler quoting methods directly return the input for speedup, as no quoting is needed in that case
            - Added support for native and userdefined handler to MetaType()
            - Changed mapping of types to always use the largest possible integer, map tinytext to varchar instead of text
            - admin_get_tables() skips tables whose names match /BIN\$/ (coming from the recycle bin on Oracle)
            - Importing dumps using the install tool now works, see manual for tips
            - Changed the way NOT NULL and DEFAULT are handled when setting up tables, see manual for the rules that now apply
            - Code cleanup (indentation, documentation)
            - Updated the manual and added new content

    2006-06-30  Franz Holzinger  kontakt@fholzinger.com

        * Fix bug #3725: empty and invalid flexform meta data are checked. impexp echos warning message found inside T3D import.

    2006-06-30  Martin Kutschker  martin.t.kutschker@blackbox.net

        * t3lib_htmlmail: auto-detect charset (using FE or BE settings) with manual override

    2006-06-30  Karsten Dambekalns  karsten@typo3.org

        * t3lib_page: Changed getMultipleGroupsWhereClause() to include a check using IS NULL to make it compatible to Oracle.
        * sysext/adodb/: Update to upstream version 4.90, fixes to connection wizard, some code cleanup (closes: ##3755).
        * t3lib_sqlparser: Clean up indentation a little bit, fix bug #2991, make the parser understand "IS NOT [NULL]" an addition to just "IS [NULL]".
        * t3lib_tsfebeuserauth: Changed static call to enableFields()

    2006-06-29  Ernesto Baschny  ernst@cron-it.de

        * Fix bug #3522 also in "content (default)": Linking images to hidden pages results in click-enlarge

    2006-06-29  Dmitry Dulepov  typo3@accio.lv

        * pageNotFound_handling HTTP status fix when external URL is specified as 404 page

    2006-06-28  Ernesto Baschny  ernst@cron-it.de

        * Fix bug #3391: HTML-Source in error-pages now valid xhtml (FE)

    2006-06-28  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Fix bug# 3397: FORM submit as image is not valid xhtml
        * Fixed restriction to languages in Frontend editing
        * Fix bugs #3212 & #1178: empty page is displayed when accessing WebVersioning

    2006-06-28  Bernhard Kraft  kraftb@kraftb.at

        * Fix bug #3162: Cropscale fails, if one dimension has already the right size (thanks to Stefan Geith)

    2006-06-28  Karsten Dambekalns  karsten@typo3.org

        * t3lib_extfilefunc: func_upload() now logs if no file was uploaded.
        * t3lib_tcemain: Made SQL query in versionizeRecord() conform to DBAL (use OR instead of ||).
        * t3lib_userauthgroup, tx_sv_auth: Made FE group lookups possible when lockToDomain is NULL in DB (e.g. when using Oracle).
        * t3lib/stddb/tables.sql: Changed be_users.lang to VARCHAR instead of CHAR, as MySQL changes it anyway.
        * t3lib_install: Changed an eregi() to a matching preg_match()

    2006-06-27  Karsten Dambekalns  karsten@typo3.org

        * typo3/init.php: Fixed bug #2871.
        * t3lib/class.t3lib_befunc.php: Fixed bug #3106, Documentation of function storeHash differs between class befunc and class page
        * class.tx_install.php: Code cleanup, removed some commented code and cleaned indentation

    2006-06-22  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Created exclusiveKeys for the TCA field configuration of type "select" [fix from 2006-03-19 was lost, see below]

    2006-06-20  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Fix bug #2839: Missing icons for copy mode and thumnails in clipboard (WebList)

    2006-06-11  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Fix bug #3505: BE multi-language flexforms do not work (t3lib_tceforms)

    2006-06-08  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Template tools (WebTemplate) had hard-coded background colours
        * Made Web  Template  Info skinnable

    2006-06-08  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Make t3lib_div::arrayToLogString() accept an empty string as empty list
        * Add missing icons for be users and admins.
        * Made Tools  User Admin skinnable
        * Fix bug #2938: edit icons have two title attributes, one hardcoded as an empty string

    2006-06-04  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Unify PHP5 check in config_defaults.php and deprecate $TYPO_VERSION

    2006-06-02  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Fix bug #3612: no c-prefix for URL fragment in menus (section index)
        * Fix bug #2493: TCE-forms don't skins icons / t3skin lacks undo.gif, csv.gif and savedoknew.gif (thanks to Clemens Riccabona for the latter)
        * Fix bugs #3326 and #3392: problems with php_uname()
        * "Update" buttons of admin panel did not reload page in Firefox

    2006-05-31  Ernesto Baschny  ernst@cron-it.de

        * Fix bug #3522: Linking images to hidden pages results in click-enlarge

    2006-05-31  Bernhard Kraft  kraftb@kraftb.at

        * Fix a problem of the EM: "No file uploaded!" when retrying install after a failed dependency check

    2006-05-22  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Corrected error message for config.baseURL=1

    2006-05-20  Ernesto Baschny  ernst@cron-it.de

        * Fixed bug #2874: Current page in navigation tree wasn't being highlighted on IE6

    2006-05-20  Rupert Germann  rupi@gmx.li

        * Fixed bug #2566: XClass include code was missing in wsol_preview.php.

    2006-05-18  Rupert Germann  rupi@gmx.li

        * Fixed bug #0132:&nbsp;% signs in extra parameters of form contentelements where not handled correctly.

    2006-05-18  Ernesto Baschny  ernst@cron-it.de

        * Fixed bug #3138: Alignment of text in css_styled_content's Text w/ images (nowrap) was wrong (Firefox)

    2006-05-15  Ingmar Schlecht  ingmar@typo3.org

        * Fixed bug #1374: Mailforms didn't work with input type="image" submit buttons. (Thanks to Thorsten Kahler and Rupert Germann!)
        * Changed square brackets "[" and "]" in URLs generated by media/scipts/fe_adminLib.inc to the urlencoded equivalents "%5B" and "%5D"

    2006-05-15  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Fix bug #3364: Changed t3lib_div::validPathStr() that it rejects files starting with ../ or containing /../, but allows ..
        * Corrected comment for maxWInText (tslib_content) and simplified calculation
        * Fix bug #338: Sanitize path normalization of class.t3lib_userauthgroup.php::addFileMount()

    2006-05-03  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Fix typolink.addQueryString.method=GET (see bug #3241)
        * Fix problem with 2-byte charsets (eg UTF-16) in t3lib_cs::utf8_encode().

    2006-05-03   Rupert Germann  rupi@gmx.li

        * Fix: mod.web_list.alternateBgColors=1 did not work in TYPO3 4.0 when no skin is used. Added the missing class to typo3/stylesheet.css

    2006-04-30  Dmitry Dulepov typo3@accio.lv

        * Fixed bug #3226: Error in template::clearCacheMenu if user is not admin

    2006-04-29  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Fixed wrong use of implode in typo3/mod/tools/em/class.em_index.php (lines 1392, 1424; see bug #3302)

    2006-04-23  Dmitry Dulepov typo3@accio.lv

        * Fixed bugs #3049 and #3176: HTTP status 503 is sent when $TSFE-set_no_cache is called

    2006-04-20  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Fix bugtracker issue #3172: further correction to MIME type determination.

    2006-04-20  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Don't do false SQL query when SYS[setDBinit] is empty. Log error on failure.

    2006-04-19  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Added "Lucida Console" (Windows core font) as default font for monospaced BE form fields

    2006-04-18  Dmitry Dulepov typo3@accio.lv

        * Fixed bug #3196: PHP warnings in class.t3lib_tceforms.php

    2006-04-14   Rupert Germann  rupi@gmx.li

        * fix for the fix from bug #2868: the adminpanel didn't transfer the page id correctly when realUrl was used

    2006-04-14  Bernhard Kraft  kraftb@kraftb.at

        * Fixed bug #3232: Use image format set via .format for GIFBUILDER images

    2006-04-13  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Fix bugtracker issue #3172: re-write getMimeType in t3lib_htmlmail
        * Fix bugtracker issue #3051: RTE removes images under special conditions when saving

    2006-04-12  Ingmar Schlecht ingmar@typo3.org

        * Fixed bug #3174: chr() was misspelled char() in t3lib_div
        * Fixed bug #3233: Some broken references to media/ fixed

    2006-04-12  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Fix bugtracker issue #3172: MIME type determination crashing (HEAD request)

    2006-04-07  Michael Stucki  michael@typo3.org

        * Release of TYPO3 4.0

    2006-04-06  Michael Stucki  michael@typo3.org

        *&nbsp;!!! Fixed bug #3151: $TYPO3_CONF_VARS[im_jpg_quality] was changed to $TYPO3_CONF_VARS[jpg_quality] some time ago except in one place. Three questions marks since this was changed some time ago but not mentioned in here.
        *&nbsp;!!! Remove hardcoded linebreak after radio elements. Notice that this will affect your template when in "accessibility" mode with $TYPO3_CONF_VARS[SYS][compat_version] lower than 4.0.
        * Fixed bug #2485: Duplicate fieldset definition for radio elements. Thanks to Ernesto Baschny for providing a fix for this.
        * Minor changes to Indexed Search, see local ChangeLog for details
        * Prevented path traversal (../) in t3lib_tstemplate::getFileName(). This is was never really a security issue, because it affected only paths set in TypoScript which only full TYPO3 admins have access to anyway. Thanks to Ingmar for providing a fix.

    2006-04-06   Rupert Germann  rupi@gmx.li

        * Fixed bug #3134: install tool / all text centered in IE and Opera
        * Fixed bug #3154: Misspelling in instal tool

    2006-04-06  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * rtehtmlarea: fix bugtracker issue #3120: transforming text in link in Firefox may take excessive time.
        * rtehtmlarea: fix bugtracker issue #3060: RTE includes a page from the Frontent after paste a text

    2006-04-05  Peter Niederlag  peter@niederlag.de

        * Fixed Bug #313 Problem with LOAD/RESTORE_REGISTER in lib.stdheader, thx to click/Ernesto for solution

    2006-04-04  Michael Stucki  michael@typo3.org

        * Release of TYPO3 4.0rc3
        * Fixed bug #3065: wrap2.splitChar and wrap3.splitChar are ignored
        * Fix RDCT links: Did not point to index.php by default
        * Fix several bugs related with CSS Styled Content, see below. Many thanks to Ernesto Baschny who did all of this!
            * Now the CSS version of "Text w/images" and "Images" (table-less) also respect the textMargin constant so that (finally) the user can specify a different margin to separate the image block from the text. "colSpacing" now only applies to inter-images spacing, which is what the table-based approach also does.
            * For this to work we need to apply two new classes to the images (csc-textpic-firstcol and csc-textpic-lastcol). This is configurable through an optionSplitted new property "addClassesImage" of the USER object
            * Having this also allowed us to fix a bug in positioning: The whole image-block can now stretch correctly over the given width without any margins around it (which is required if you have just an image-block, without text). Without the patch, you always have "margin-right" (if images are placed to the left or center) or "margin-right" (if images are placed to the right).
            * Fixed also a problem with the calculation of image width if we have borders and border-spacings: Now the whole image-block will always be exactly maxW wide (so if you have borders and spacing, the images will get slightly smaller). Without this, the image-block could "explode" a fixed-width layout.
            * Added empty rendering definition for cType "div"  (divider) to prevent error message
        * Fixed setup module: Colons were wrapped to the next line
        * Small fixes to t3skin
        * Indexed Search: Added crawler support for $GLOBALS[T3_VAR][ext][indexed_search][indexLocalFiles]

    2006-04-04  Peter Niederlag  peter@niederlag.de

        * Fixed bugs #2949, #3016, #3037: Several Element Browser bugs

    2006-04-04  Sebastian Kurfuerst  sebastian@garbage-group.de

        * Implement Single-Click rollback in record history

    2006-04-04  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Fixed bug #1303: Broken FE-links with "config.locale_all=tr_TR"

    2006-04-04  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Fixed bug #2868: Admin Panel always loses GET parameters
        * Fixed bug #2994: Calling PHP5-only iconv functions in PHP4
        * Language related changes:
            * Fixed TYPO3/ISO mappings: kr=ko, gl=kl, removed old mapping he=iw (ISO code has changed a long time ago), added ba=bs.
            * Updated and fixed locale/script-family mapping (for detection of the locale charset).
            * Updated info for adding a language in config_default.php
            * Changed variable names to reflect true meaning, so somebody else may understand what's going on.
            * Corrected language drop down in BE.
        * Fixed restriction to languages in Frontend editing

    2006-04-04  Dmitry Dulepov  typo3@accio.lv

        * Fix to workspace forms

    2006-04-04  Kasper Skaarhoj  kasperYYYY@typo3.com

        * New function t3lib_div::array2xml_cs() that respects character sets
        * Change default value of $TYPO3_CONF_VARS[FE][pageCacheToExternalFiles] to false (feature was enabled by default, which was a mistake of course)

    2006-04-03  Karsten Dambekalns  karsten@typo3.org

        * EM: Fixed bugs #3096 (EM does not work if allow_url_open = off), #3097 (EM leaves mirror* files on failure).

    2006-04-02  Karsten Dambekalns  karsten@typo3.org

        * EM: Fixed bugs #3033 (Invalid argument supplied for foreach) , #3039 (TYPO3 version is higher than allowed), #2992/#2817 (shy extensions).

    2006-03-29  Franz Holzinger kontakt@fholzinger.com

        * Fixed bug #2722 and #2837: table wizard has wrong array elements

    2006-03-28  Ingmar Schlecht  ingmar@typo3.org

        * Fixed bug #3027: Wrong value for "Marked-deleted pages" in Records Statistics
        * Fixed bug #3022: "c" prefixed to local #anchors causes trouble
        * Fixed bug in t3lib_tstemplate: File references to media/ are now automatically prefixed with "typo3/sysext/cms/tslib/".

    2006-03-28  Christian Jul Jensen  christian@jul.net

        * Fixed bug 999: Encoding mail headers in taskcenter
        * Fixed bug 3001: Support for multiple tables with columnsonly in alt_doc.php

    2006-03-26  Michael Stucki  michael@typo3.org

        * Release of TYPO3 4.0rc2
        * Various indexed_search fixes, see local ChangeLog for details
        * Small fix to typo3/stylesheet.css (admin menu)

    2006-03-26  Karsten Dambekalns  karsten@typo3.org

        * sysext/setup/mod/index.php: Fixed detection of unavailable language packs.
        * EM: Fixed bug #2974, a rare bug when unzipping language packs, a bug with installing dependencies that needed a db update, avoid unnecessary fetching of extensions.xml.gz,
        * Fixed bug #359: EM ignores PEAR compatible classes (committed by Stucki)
        * Fixed bug #2380: t3lib_sqlparser doesn't handle LEFT OUTER JOIN (committed by Stucki)

    2006-03-26  Ingmar Schlecht  ingmar@typo3.org

        * Fixed bug #2777: "NOT NULL" removed from SQL gives error with MySQL 3.23.52

    2006-03-25  Michael Stucki  michael@typo3.org

        * Fixed bug #1390: Ereg error in class.t3lib_tsstyleconfig.php
        * Fixed bug #2415: Navigation "Icons in top frame" were rendered wrong
        * Fixed bug #0388: No subtitle field in some page types
        * Fixed bug in Install Tool: Hide warning if GraphicsMagick is used
        * Fixed some more problems with the BE stylesheet
        * Various indexed_search fixes, see local ChangeLog for details

    2006-03-25  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Made "version" a required extension (necessary for workspaces)
        * Fix FE-editing bug: new-record icon appears for languages without edit rights (admin panel)
        * Fix FE-editing bug: edit panel and edit icons were shown for languages without edit rights

    2006-03-25  Karsten Dambekalns  karsten@typo3.org

        * ADOdb sysext: Update to version 4.80, added a fix for MSSQL bogus errors.
        * EM: Added new way of handling translations.
        * DBAL sysext: Added enhancements for UNIQUE KEY handling, MSSQL compatibility, code cleanup, bugfixes

    2006-03-24  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Fix to htmlArea RTE extension (see details in local ChangeLog)

    2006-03-24  Kasper Skaarhoj  kasperYYYY@typo3.com

        * Integration between Import/export and Extension Manager (extension dependencies)

    2006-03-22  Kasper Skaarhoj  kasperYYYY@typo3.com

        * Fixed a bug in t3lib_refindex which prevented correct indexing from live workspace of records in draft workspaces with references inside flexforms
        * Fixed bug in T3D export where an array key prevented references in flexform fields to be correctly remapped. My mistake from cleaning up t3lib_flexformtools.

    2006-03-23  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Fix bugtracker issue 2958: t3lib_htmlmail::getMimeType isn't working with name based virtual hosts

    2006-03-22  Kasper Skaarhoj  kasperYYYY@typo3.com

        * Fixed that the tcemain copy command works properly under workspaces: Remapping of references is correct now. This also affects TemplaVoila which can now copy a FCE container with sub elements properly.
        * Also added check for extension dependencies in Import/Export: It is not possible to import a T3D file unless extension dependencies are OK. This still needs more work and connection to EM.

    2006-03-22  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Fixed label of 'author_email' ('pages_language_overlay')
        * Fix bug #2918: TCEFORM.tt_content.CType.removeItems not applied to db_new_content_el.php (thanks to Oliver Hader)
        * ToolsUser Admin didn't check if language icon was set for 'Limit to languages'
        * Fix FE-editing bug: new records were always created in the default language (admin panel)

    2006-03-22  Bernhard Kraft  kraftb@kraftb.at

        * Fixed bug #2692: GIFBUILDER inverts transparency

    2006-03-22  Michael Stucki  michael@typo3.org

        * Changed Install Tool so it accepts newlines in values (needed for recently introduced textarea fields)
        * Changed style of admin-menu title in alt_menu.php so it looks equally to the headers above
        * Fixed bug #1932: Can't limit content columns for PageQuickEdit
        * Fixed bug #2596: "=undefined" when transferring TSconfig code from TSconfig wizard to textarea
        * Changed RFC: "flagBitMask" default value in indexed_search (seems like this was a typo) / The change has no effect but is more logical for understanding the concept.

    2006-03-22  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Corrections/adjustments to the htmlArea RTE extension (see details in local ChangeLog)

    2006-03-22  Kasper Skaarhoj  kasperYYYY@typo3.com

        * Updated almost all Function indexes in the core plus fixed javaDoc documentation for the functions and classes I could manage to do. The rest of you; Please make sure to document the functions and classes you have added during development of 4.0! Search for "[type]" or "[Describe" to find places to add documentation.

    2006-03-20  Kasper Skaarhoj  kasperYYYY@typo3.com

        * Added function to indexed search so index_fulldata is filled with less content (configurable)
        * Added function so that the HTML data of the cache_pages table can be stored in the file system (see TYPO3_CONF_VARS[FE][pageCacheToExternalFiles]
        * Both changes are new features excused by optimization of TYPO3.org.

    2006-03-21  Karsten Dambekalns  karsten@typo3.org

        * EM: Moved some code around and added a method for installing an extension with one method call (for use in impexp).
        * class.em_index.php: Fixed bug #2809 (trivial).

    2006-03-20  Kasper Skaarhoj  kasperYYYY@typo3.com

        * Fixed more workspace issues:
        * Added info about workspaces to Tools  User Admin (sorry, considered important)
        * Frontend editing: Fixed that it works with localizations. Disabled many of the features in draft workspaces (since we have no time for an implementation)

    2006-03-19  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Fix a few language/locale codes in t3lib_cs.php

    2006-03-20  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * htmlArea RTE: remove alternate skins from core CVS.

    2006-03-20  Sebastian Kurfuerst  sebastian@garbage-group.de

        * Reverted the patch "Double-checking of match-conditions" because it caused trouble
        * Fixed bug #2767: wrong wraps for sitemap/menu elements in accessibility mode
        * New Feature #2341: add headers for table CE (accessibility)

    2006-03-20  Wolfgang Klinger  wk@plan2.net

        * Fixed bug #608: Typolink for mounted pages from another domain

    2006-03-19  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Corrections/adjustments to the htmlArea RTE extension (see details in local ChangeLog)

    2006-03-19  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Created exclusiveKeys for the TCA field configuration of type "select"
        * Configured fields fe_groups of "pages" and "tt_content" to use exclusiveKeys for "Hide at login" and "Show at any login"

    2006-03-18  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Added constant TYPO3_copyright_year for login page and about module

    2006-03-17  Bernhard Kraft  kraftb@kraftb.at

        * Added .us and .at flags to typo3/gfx/flags/

    2006-03-17  Kasper Skaarhoj  kasperYYYY@typo3.com

        * Fixed workspace related issues. More will follow Monday.

    2006-03-16  Karsten Dambekalns karsten@typo3.org

        * EM: Fixed bugs #2787, #2785, #1807
        * EM: Extension list is now fetched automatically if it isn't available at all.
        * ADOdb extension: a fix regarding the MS SQL driver, fixed bug #2810, cleaned up ext_emconf.php

    2006-03-16  Rene Fritz  r.fritz@colorcube.de

        * Fixed bug #2840: Related to: Enhanced MM handling in TCE for usage from foreign tables.

    2006-03-15  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Fix bugtracker issue 2860 in t3lib_sqlparser.

    2006-03-15  Kasper Skaarhoj  kasperYYYY@typo3.com

        *&nbsp;!!! Implemented complete "flavouring" of FlexForm XML; Basically it doesn't affect anyone using xml2array() to extract FlexForm data but everyone who uses own XML parsers will have to modify them (after converting all XML). Basically the flavouring means that a tag like "lDEF, lDA" is rather represented with "language index="lDEF", language index="lDA"".
        *&nbsp;!!! Cleaned up t3lib_flexformtools::traverseFlexFormXMLData() and related functions, generally I did many changes to this class. However I think no one is using it yet except me. Anyway, the changes were necessary since it was simply never cleaned up as it should have been, including the new cleanFlexFormXML() function.
        * Bigfix: Modified sys_refindex so it does not register references for content in flexforms outside what the data structure describes. Update your reference table again!
        * Added configuration option TYPO3_CONF_VARS[BE][niceFlexFormXMLtags] which allows people who depends on the old FlexForm tags to maintain that compliancy. See my changelog from 2006-01-27 (sorry for this semi-feature).

    2006-03-13  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Fixes and cleanup in htmlArea RTE extension (see details in local ChangeLog)
        * htmlArea RTE: Fix bugtracker issue 2820.

    2006-03-11  Michael Stucki  michael@typo3.org

        * More CSS fixes in typo3/stylesheet.css: Changed the height of dyntab-menues & various fixes to login screen

    2006-03-10  Sebastian Kurfuerst  sebastian@garbage-group.de

        * Logo change to make it look better on any bright background

    2006-03-08  Michael Stucki  michael@typo3.org

        * Release of TYPO3 4.0rc1
        * === Development feature freeze ===
        * Small usability improvement for dyntab-menus in typo3/stylesheet.css (plus cleanup of that file)
        * More changes required because of the logo update

    2006-03-08  Wolfgang Klinger  wk@plan2.net

        * Fixed bug #2743: Speed up substituteConstants with preg_replace_callback

    2006-03-08  Michael Stucki  michael@typo3.org

        * Changed the globalString condition to allow PCRE regular expressions only if wrapped in dashes "/"
        * Fixed bug #331: Support IPv6 addresses (many thanks to Sven Wilhelm)
        * Fixed a big problem with temporary content stored to cache_pages
        *&nbsp;!!! Changed $TYPO3_CONF_VARS['SYS']['setDBinit'] from array to a string (separated by newline)
        * Minor changes to config_default.php (comments were not displayed)
        * Some post-cleanup in CSS Styled Context: Removed recently added "captionStdWrap" property (replaced by existing "caption" property) & changed compatVersion dependency

    2006-03-08  Sebastian Kurfuerst  sebastian@garbage-group.de

        * Updated logos in the backend to reflect the new CI

    2006-03-08  Karsten Dambekalns  karsten@typo3.org

        * EM: Fixed three small issues, mostly cosmetic.
        * Install Tool: Using new logo now, uuuuhhh! Changes to CSS so links are colored again.

    2006-03-08  Dmitry Dulepov  typo3@accio.lv

        * Added onChange tag to flexforms to enable automatic form reloading when tagged field changes. Useful for creating dynamic flexforms.

    2006-03-08  Ingmar Schlecht  ingmar@typo3.org

        * Set the default value of config.inlineStyle2TempFile to 1 and config.removeDefaultJS to 'external' if compatversion is set to  4.0.0. This means default styles of extensions and default JS functions are now automatically put to files like typo3temp/stylesheet_ec23910b0b.css by default.
        * Fixed bug #2794: Misplaced "quote in typo3/class.browse_links.php"

    2006-03-08  Bernhard Kraft  kraftb@kraftb.at

        * Implemented featured #2695: Tables can not get hidden in WebList. Now this can get accomplished via Page/User/Group TS-Config

    2006-03-08  Rene Fritz  r.fritz@colorcube.de

        * Enhanced MM handling in TCE for usage from foreign tables. Means MM relations can be edited in TCEForms from both ends of the relation.

    2006-03-07  Sebastian Kurfuerst  sebastian@garbage-group.de

        * Fixed skin issue #2766: class.t3lib_tceforms.php / type="checkbox" / bugs
        * Fixed skin issue #2317: The background-color on highlighted items in alt_db_navframe.php
        * Fixed skin issue #2453: alternating colors and rollover in list module have not enough contrast

    2006-03-07  Michael Stucki  michael@typo3.org

        * Reverting a change in t3lib_div as discussed with Sebastian (reason was that this could lead to some trouble if foreach is used instead of while over a recursively called array)

    2006-03-07  Wolfgang Klinger  wolfgang@stufenlos.net

        * Feature #2675: Cropscale for imgResources (thanks to Stefan Geith)
        * Fixed bug #2753: Page type 'Spacer' is accessible via FE

    2006-03-07  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Renamed TS&nbsp;:= function addString to appendString and added prependString

    2006-03-06  Michael Stucki  michael@typo3.org

        * Changed file icons for recently added advanced-BE-search feature
        * Changes to indexed search, see local ChangeLog for details

    2006-03-06  Sebastian Kurfuerst  sebastian@garbage-group.de

        * Fixed some broken media relations
        * Fixed bug #2713: change hardcoded "typo3/" to TYPO3_mainDir in sysext/cms/tslib/index_ts.php
        * Fixed bug #1635: Add page TSconfig via user TSconfig

    2006-03-06  Stanislas Rolland  stanislas.rolland@fructifor.ca

        *&nbsp;!!! Remove from core some remaining elements used only by Direct Mail extension and already moved to Direct Mail 2.0:
            - remove file t3lib/gfx/i/dmail_list.gif
            - remove file t3lib/gfx/i/modules_dmail.gif
            - remove file t3lib/gfx/i/modules_dmail__h.gif
            - remove file t3lib/class.t3lib_dmailer.php
            - remove methods find_MIDfromReturnPath and find_XTypo3MID from t3lib/class.t3lib_readmail.php
            - remove columns 'module_sys_dmail_html' (fe_users) and 'module_sys_dmail_category' (fe_users and tt_content) from typo3/sysext/cms/ext_tables.sql
            - remove item 'dmail' on column 'module' of table 'pages' in typo3/sysext/cms/ext_tables.php

    2006-03-05  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Replace isset with strlen in fix of bugtracker issue 1736.
        * htmlArea RTE: Add $RTEWrapStyle variable to frontend plugin class.tx_rtehtmlarea_pi2.php (bugtracker issue 2760).
        * Use new ts parsing&nbsp;:= in cumulative sets of configuration defaults.

    2006-03-04  Michael Stucki  michael@typo3.org

        * Fixed bug #1475: Added stdWrap properties for RECORDS cObject

    2006-03-04  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Changed $TYPO3_CONF_VARS['SYS']['domainCookie'] to take a regular expressions allowing for multiple domains with sub-domains.

    2006-03-03  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Update to htmlArea RTE manual.
        * Fix bugtracker issue 1736: Make TS_CASE object and ts_parser support key value 0.

    2006-03-03  Michael Stucki  michael@typo3.org

        * Added new feature: Merged Advanced BE Search form extension (Tools - DB check). Written by Joey Hasenau - great work!
        * Added support to modify TypoScript values inside the TS parser using "lib.myVar&nbsp;:= function(value)" - see "doc_core_ts" for more information.
        * Fixed bug #1364: t3lib_div::getURL() uses CURL only for HTTP protocol
        * Fixed bug #1153: tslib_cObj::imageLinkWrap() not passing information if image.imageLinkWrap.JSwindow.altUrl is set. Thanks to Peter Russ.
        * Fixed bug #2347: Wrong labels displayed
        * Fixed bug #1391: TYPO3 can't display a single "0" in a table cell

    2006-03-03  Rene Fritz  r.fritz@colorcube.de

        * t3lib_stdGraphic: Check if a font exists and when not the text rendering will not be done and a debug() message will be shown.
        * alt_doc.php: Added a selector box for localization to the record editing form.
        * t3lib_tceforms: Added a new option "l10n_display" to have configuration options for form rendering and display of language overlay data.

    2006-03-02  Bernhard Kraft  kraftb@kraftb.at

        * Fixed bug #2716: Negative age wasn't generated correctly in FE

    2006-03-01  Wolfgang Klinger  wk@plan2.net

        * Feature #1520: Allow to exclude the current page in HMENU / excludeUidList

    2006-03-01  Ingmar Schlecht  ingmar@typo3.org

        * Made the update wizard of the install tool work with buttons instead of checkboxes

    2006-02-28  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Enhance typolink.addQueryString and add addQueyString to HMENU with special=language (fix bug #2280)

    2006-02-28  Sebastian Kurfuerst  sebastian@garbage-group.de

        * Fixed bug: admin panel doesn't stay on page (introduced by "Change admin panel to use get instead of post"
        * Made static templates work again by adjusting ext_tables_static+adt.sql (the paths to the media directory needed to be adjusted)

    2006-02-28  Kasper Skaarhoj  kasperYYYY@typo3.com

        * Added new feature to indexed search allowing the "crawler" extension to be used for indexing of media found on a page. This is a solution to the problem of for example many heavy pdf files on a page being indexed along with the page content; now such files can be added to the "crawler"'s queue and indexed via a cron-script.
        * debug flag added to lang-class so labels in backend can be identified by translators (debug feature).

    2006-02-28  Michael Stucki  michael@typo3.org

        *&nbsp;!!! Removed showpic.php from TYPO3 root. Future applications will just use index.php instead.

    2006-02-27  Sebastian Kurfuerst  sebastian@garbage-group.de

        *&nbsp;!!! Avoiding double checking of match-conditions now.

    2006-02-27  Rene Fritz  r.fritz@colorcube.de

        * Added possiblity to create dimmed icons by adding _i to the filename with t3lib_iconworks::skinImg().
        * Added $GLOBALS['TYPO3_CONF_VARS']['SYS']['maxFileNameLength'] for use in t3lib_basicfilefunc
        * Added hook that allow to implement the rendering of the standard types with extensions.

    2006-02-27  Wolfgang Klinger  wk@plan2.net

        * Fixed bug #549: No information about deleted records in the backend log
        * Fixed bug #1796: HMENU with includeNotInMenu does not work with the nav_hide page property

    2006-02-26  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Fixed bug #1614: page type "external URL" has no https option (thanks to Marc Bastian Heinrichs)
        * Enchanced config.xmlprologue (takes new keywords and arbitrary string as arguments)
        * Fixed issues with config.xhtmlDoctype

    2006-02-26  Karsten Dambekalns  karsten@typo3.org

        * Extension Manager: Fixed bug #2630 (thanks Peter Niederlag), #2610, #2607, #1904 (partly), #2579
        * Extension Manager: Fixed checking of review states (thanks Rupert Germann)
        * Extension Manager: Now the EM shows update icons again
        * Extension Manager: Dependency handling has been reworked, now it is much more comfortable, fixes #1607 (partly), #2584
        * class.t3lib_befunc.php: Fixed bug #2528
        * class.tslib_content.php: Fixed bug #2676

    2006-02-26  Wolfgang Klinger  wk@plan2.net

        * Fixed bug #1060: Sitemap with SectionIndex does not display content header when page has a navigation title assigned
        * Fixed bug #284: substUrlsInPlainText does not allow other characters than space and () to terminate URLs in the text.
        * Fixed bug #2543: tslib_div uses deprecated function call_user_method
        * Fixed bug #1827: Empty page tree after deleting the current temporary page mount.

    2006-02-25  Ingmar Schlecht  ingmar@typo3.org

        * Added an "upload" and "new" button to the filelist module (Gremlin #1599, thanks to Stefano Cecere for the patch)

    2006-02-23  Ingmar Schlecht  ingmar@typo3.org

        * Changed formURL in fe_adminLib.inc to always contain a question mark "?" because in the templates the formurl marker is used like ###FORM_URL###&cmd=edit which didn't work if the URL didn't contain a question mark like in simulStatic- or RealURLs. This fixes typo3.org bug #2563.

    2006-02-23  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Remove RTE-enabling defaultExtras off tt_content bodytext (related to bug #2023).
        * Fix bugtracker issue 2656 in htmlArea RTE.

    2006-02-23  Rene Fritz  r.fritz@colorcube.de

        * Fixed bug #2662: added check against "Limit to languages"

    2006-02-23  Kasper Skaarhoj  kasperYYYY@typo3.com

        * Changed things related to locallang-XML handling. Most significantly is it that translations are looked for in the new language pack directories typo3conf/l10n/[langyage key]/.
        * All locallang-XML files are updated to have ONLY the default labels in them and no specific references to external files; means translations will work only with language packs installed in typo3conf/l10n/. Such language packs will be distributed as zip-files around the release.
        * csh_* extensions (language pack extensions) are now obsolete.

    2006-02-22  Dmitry Dulepov  typo3@accio.lv

        * t3libBEfunc::thumbCode() did not make proper image path under certain conditions
        * Fixed bug #2654: Incorrect conversion of non-ascii (Latvian) characters in URL

    2006-02-22  Wolfgang Klinger  wk@plan2.net

        * Fixed bug #1596: checkIncludeLines uses preg_match now and checks for all whitespace before and after INCLUDE_TYPOSCRIPT
        * Fixed bug #2592: Page type "External URL" and "Shortcut" causes an error (jumpUrlX methods)

    2006-02-22  Kasper Skaarhoj  kasperYYYY@typo3.com

        * Added 3 languages: Faroe, Serbian, Farsi
        * Fixed bug in t3lib_div::cHashParams()
        * Brought back support in EM's index.php::importExtFromRep() function for direct injection of an array with extension files (needed for support for kickstarter, but new function parameters are kept)
        * Added new Indexing Configuration for indexed search: Traversal of page tree. Means that now the page tree can be indexed by the "crawler" extension (cronscript)
        * Added meta indexing configuration type (useful for group-categorizing of search results)
        * Added a condition to indexing of pages; that sys_language_uid and sys_language_content must be similar; it is assumed that for pages with fallback to default content no indexing is wanted.
        * Added "Spotlight" categorizing feature to search results. The categories are defined as indexing configurations + natural categories like pages in the page tree. TypoScript configuration applies.

    2006-02-21  Karsten Dambekalns  karsten@typo3.org

        * typo3/stylesheet.css: Fix for trivial bug #2644, added sans-serif as fallback font-family.

    2006-02-21  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Path setting correction in htmlArea RTE SpellChecker plugin.

    2006-02-20  Christian Jul Jensen  christian@jul.net

        * Fixed bug #2628

    2006-02-20  Wolfgang Klinger  wolfgang@stufenlos.net

        * Feature request #568: AND (&&) and OR (||) combination of TypoScript conditions

    2006-02-18  Robert Lemke  robert@typo3.org

        * Changed flexform tag names in t3lib_flexformtools-flex2ArrayXml()

    2006-02-17  Karsten Dambekalns  karsten@typo3.org

        * Fixed bugs #2368, #2521, #2385, #2186 related to DBAL

    2006-02-17  Michael Stucki  michael@typo3.org

        * Fixed bug #2597: GDlib TrueType tests fail because of wrong fontFile-path (caused by the symlinks change)
        * Fixed bug #2594: Install Tool says "No gfx/typo3logo.gif file!" (caused by the symlinks change)

    2006-02-17  Ingmar Schlecht  ingmar@typo3.org

        * Fixed obvious bug #2588 in right-click context menu of filelist navframe

    2006-02-17  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Correction to the htmlArea RTE extension (see details in local ChangeLog) (bis)

    2006-02-16  Michael Scharkow  michael@underused.org

        * Fixed bug #2457: image border settings are respected in GMENUs
        * Updated the copyright notices to 2006 and set version back to 4.0-CVS

    2006-02-16  Kasper Skaarhoj  kasperYYYY@typo3.com

        * Added new script (tslib/class.tslib_eidtools.php) with tools for "eID scripts". See extension "whiteboard" for an example!

    2006-02-15  Michael Stucki  michael@typo3.org

        * Release of TYPO3 4.0beta3
        * Various changes to indexed_search, see local ChangeLog for details
        * Install Tool: Added "cache_imagesizes" to list of tables that can be cleared
        *&nbsp;!!! Indexed Search: Removed all options for indexing OpenOffice.org/OpenDocument files and replaced them with the above "unzip" option. Affected options are: nativeOOMethod, OOoExtract, ruby
        *&nbsp;!!! Indexed Search: Changed all default paths from /usr/local/bin/ to /usr/bin/
        * Removed create_symlink.sh and remove_symlink.sh from CVS because they are not needed anymore. If you still want to use symbolic links for some reason, you can find some good information in the "TYPO3 Installation & Upgrade" manual.

    2006-02-15  Karsten Dambekalns  karsten@typo3.org

        * typo3/mod/tools/em: More fixes and better error checking.
        * typo3/sysext/adodb: Update to upstream version 4.71.
        * t3lib/class.t3lib_tsfebeuserauth: The admin panel uses GET instead of POST now.

    2006-02-15  Bernhard Kraft  kraftb@kraftb.at

        * Fixed an issue with the new GIFBUILDER code and transparentColor TS option. Also fixed some minor bugs with not unlinked temp files.

    2006-02-15  Kasper Skaarhoj  kasperYYYY@typo3.com

        * Changed usage of showpic.php: Now, the reference to showpic.php from inside tslib_content is done using "index.php?eID=tx_cms_showpic&..."+usual parameters. This is the future supported way of accessing the services of showpic! It also means that other scripts offering FE services bypassing tslib_fe can use same methodology! Applications I can think of: AJAX data, streams (like secure download scripts passing binary data through). This change means that "showpic.php" is not needed as a symlink anymore, neither as a script in the core root!

    2006-02-15  Rene Fritz  r.fritz@colorcube.de

        * Added hook to element browser to make it possible to render own EB's. All EB classes are moved into an own file.
        * Added the possiblity to set TCEForm items to read-only.

    2006-02-14  Karsten Dambekalns  karsten@typo3.org

        * typo3/mod/tools/em: Fixed/enhanced dependency checking in the new EM.

    2006-02-14  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Changes to the htmlArea RTE extension (see details in local ChangeLog)

    2006-02-14  Rene Fritz  r.fritz@colorcube.de

        * Moved t3lib/gfx/ to typo3/gfx/
        * Changed all references of t3lib/gfx/ to gfx/ or typo3/gfx/
        * Made some FE references to media/...
        * Added index.php, showpic.php and thumbs.php scripts
        * All thoese changes were made to make it possible to use the TYPO3 source without symlinks
        *&nbsp;!!! As a consequence of this, the symlinks "arial.ttf" and "verdana.ttf" in t3lib/fonts/ have been removed completely. Please make sure that you have updated your TypoScript template accordingly. You can either upload the original fonts to the server or use a similar looking font instead (nimbus.ttf instead of arial.ttf, vera.ttf instead of verdana.ttf - both are located in t3lib/fonts/).

    2006-02-14  Kasper Skaarhoj  kasperYYYY@typo3.com

        * Fixed part II of the versioning swapping change: Now versioning is completely independent of MySQL versions and it is fully DBAL compliant: Records are swapping content rather than ids (locking file support integrated which stores swapped records in case something goes wrong - however, no tool for reverting using this lock file...)
        * Finished version 1.0 of the ADMCMD_prev feature which allows a keyword (md5 hash) to preview pages which otherwise would require a backend login (like workspace preview). In WebVersioning you will find an implementation of this feature which will generate links you can sent to people for previewing workspace content. The concept could be extended to set other preview flags like hidden/starttime/endtime/fe_groups etc. But this is just a simple implementation for workspaces.

    2006-02-14  Wolfgang Klinger  wk@plan2.net

        * Fixed bug #2507: Wrong where clause ('1' instead of '1=1')
        * Fixed bug #2508: t3lib/class.t3lib_tcemain.php uses hardcoded quotes

    2006-02-13  Rene Fritz  r.fritz@colorcube.de

        * Install tool PHP and HTML code cleanup towards xhtml

    2006-02-13  Karsten Dambekalns  karsten@typo3.org

        * class.tx_install.php: Changed the way documentation is extracted from comments in config_default.php.
        * t3lib/config_default.php, typo3/stylesheet.css, typo3/mod/tools/em/: First CVS release of new Extension Manager codebase.

    2006-02-11  Bernhard Kraft  kraftb@kraftb.at

        * Fixed bug #1270: Garbled characters in cshItems when forceCharset is set to utf-8

    2006-02-11  Kasper Skaarhoj  kasperYYYY@typo3.com

        * Changed swapping mechanism for versioning. Still need to fix locking file integration.

    2006-02-10  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Remove Direct Mail code from tslib_fe and add checkDataSubmission hook

    2006-02-10  Christian Jul Jensen  christian@jul.net

        * Added TCAselectItem to stdWrap, see TSref

    2006-02-09  Rene Fritz  r.fritz@colorcube.de

        * Added $TYPO3_CONF_VARS['SYS']['binSetup'] and made t3lib_exec use of it.
        * Added TSconfig option options.hideRecords.[table]. Used in pagetree nav frame, weblist module, new record wizard

    2006-02-09  Sebastian Kurfuerst  sebastian@garbage-group.de

        * Fixed bug #2105: The width of tt_content is too large (due to access options)

    2006-02-08  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Fixed bug #2365: Replace true linebreaks with space inside block tags and after hr tags in t3lib_parsehtml_proc.
        * Changes to the htmlArea RTE extension (see details in local ChangeLog)
        * Fixed bug #1496: Enable Direct Mail to fetch a server listening to a port other than 80 (t3lib_htmlmail)
        * Fix stdAuthCode in t3lib_div

    2006-02-08  Michael Stucki  michael@typo3.org

        * Various changes to indexed_search, see local ChangeLog for details
        *&nbsp;!!! Changed default value of TYPO3_CONF_VARS[BE][fileCreateMask/folderCreateMask]. By default, those files are no longer writable for the group.
        * Fixed bug #2272: Added [PAGE].includeJS plus possibility to attach .js files to template resources (thanks to Johannes Vockeroth)
        * Fixed bug #75: t3lib_extfilefunc::func_copy() does not set file permissions properly
        * Encode whitespaces in t3lib_div::encodeHeader() as required by RFC 2047 (thanks to Stanislas)
        * Added crdate and tstamp fields to be selected by users in the Web-List view
        * Fixed bug #2200: In FEediting the creation of new records in other pages than the current should be possible

    2006-02-07  Ingmar Schlecht ingmar@typo3.org

        * Fix "&" problem in DMail jumpURLs

    2006-02-06  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Fix bugtracker issue #408: enable direct mail to fetch https pages with user authentification

    2006-02-06  Sebastian Kurfuerst  sebastian@garbage-group.de

        * New feature: Integrated ss_dragdrop extension into the core (page and folder drag and drop). Thanks to Stephane Schitter for his work on this.

    2006-02-05  Dmitry Dulepov  typo3@accio.lv

        * Fix: (Versioning sysext) Two cells in table had hard-coded bgcolor attribute (were not skinnable)

    2006-02-04  Sebastian Kurfuerst  sebastian@garbage-group.de

        * Fixed a minor logical bug in undo/history
        * Made SU-mode work again (was affected by hook name change)

    2006-02-02  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Adjustments to the htmlArea RTE extension (see details in local ChangeLog)

    2006-02-01  Dmitry Dulepov  typo3@accio.lv

        * Fix: renaming of localconf.php.TMP.php to localconf.php did not work on Windows platform

    2006-02-01  Bernhard Kraft  kraftb@kraftb.at

        * Fixed an issue with non working links in JSMENUs

    2006-02-01  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * t3lib_htmlmail email message-id: global declaration was missing.

    2006-01-31  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * tslib_content: remove unused hooks originally intended for use by Direct Mail

    2006-01-31  Bernhard Kraft  kraftb@kraftb.at

        * Fixed bug #2396: Select-box items where displayed with garbled characters when forceCharset was set to utf-8

    2006-01-31  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * t3lib_htmlmail: make email message-id compliant with RFC 2822.

    2006-01-27  Bernhard Kraft  kraftb@kraftb.at

        * Fixed bug #760: "gifbuilder jpgs are 256 colors" for enabling truecolor pngs set [GFX][png_truecolor] variable (reduceColors still gets respected)

    2006-01-30  Michael Stucki  michael@typo3.org

        * Added two hooks to class.t3lib_tceforms.php, getMainFieldsClass: getMainFields_preProcess and getMainFields_postProcess (requested by Thomas Hempel for use with the "dynaflex" extension.
        * Fixed gremlin #1628: Removed "Text with image below" from the content wizard
        * Removed hardcoded maximum size of popup images

    2006-01-29  Michael Stucki  michael@typo3.org

        * Added UTF8-support for emails. Thanks to Bernhard Kraft, Stanislas Rolland and Martin Kutschker for their feedback.
        * Changes in t3lib_div::plainMailEncoded(): By default, emails will be encoded to quoted-printable.
        * Email linebreaks are now "\n" except on Windows, where they are "\r\n". Thanks to Stanislas and Martin for their feedback.
        * t3lib_formmail now encodes emails as quoted-printable. base64 needs to be enabled explicitely.
        * Install Tool now uses t3lib_div::plainMailEncoded() instead of mail() to send plain text mails.
        * Install Tool now displays warning messages using t3lib_div::debug() instead of debug() which does not work in all cases.
        * Marked t3lib_htmlmail-convertName() as deprecated because header lines are now encoded automatically.

    2006-01-28  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Fixed bug #2382: error when creating a new (and empty) file in BE
        * Fixed bug #1878: protect localconf.php from being lost on write error
        * Enhanced TCE type "none" with many rendering options

    2006-01-27  Sebastian Kurfuerst  sebastian@garbage-group.de

        * Fixed bug #2337: remove 30KB editing limit in Template Editor
        * Fixed bug #2405: CSC - allow styles and additional table class
        * Fixed little removed reference operator in class.t3lib_tcemain.php line 1817 (triggers a call-time pass-by-reference warning) - eval API code

    2006-01-27  Martin Kutschker  martin.t.kutschker@blackbox.net

        * added error logging to DB initialization code
        * improved FQDN detection and fixed empty syslog ident in t3lib_div::initSysLog()
        * Fix problem with non-associative arrays in t3lib_db-fullQuoteArray()

    2006-01-27  Peter Niederlag  peter@niederlag.de

        * Fixed bug #2023, removed most of RTE-Config from sysEXT:cms and sysExt:css-styled_content

    2006-01-27  Ingmar Schlecht  ingmar@typo3.org

        * Added label tags around "Expand all" in class.alt_menu_functions.inc

    2006-01-27  Kasper Skaarhoj  kasperYYYY@typo3.com

        * Improved output of FlexForm contents inside of eg. WebList module (stripping tags that is&nbsp;:-)
        * Added function for counting references to records (in t3lib_BEfunc)
        * Added warning to About Modules if the reference index is empty (which it will be for all updates to 4.0)
        * Added connectDB function in t3lib_db (used by clients of new feature in index_ts.php, see later.)
        * Fixed bug in t3lib_install which resulted in no recognition of the install tool token in localconf.php files: Essentially this has lead to bloated localconf.php files on windows machines if they were edited manually with chr(13).chr(10) line endings.
        * Added "deleted" column to reference index.
        * Working on cli-script for updating reference index from command line (necessary for large databases!!)
        * Added new class, t3lib_flexformtools, providing framework for manipulation of flexform data. (specifically it can be used for traversal of flexform data).
        * Fixed a bug related to language-limiting: Now, a backend user limited to a certain language cannot create records in default or other languages anymore.
        * Fixed bug in t3lib_tcemain where files uploaded to a record in case of auto-versioning did not work
        * Fixed very tricky problem that an auto-versioned record with files attached would create double-references! Uh.... Look for -autoVersioningUpdate in tcemain and there is a fine explanation of a scenario and how I worked around it.
        *&nbsp;!!! Changed the XML markup for flexform output. Now some more reasonable tags are used. If t3lib_div xml2array + array2xml functions are used, fully backwards compatible. Extensions which depend on the old tag names will break. Use t3lib_flexformtools for writing XML output for flexforms in the future!
        * Improved length of sys_refindex.ref_string from 40 to 200 chars.
        * Added information about number of references pointing to record or file before its deleted (didn't localize the message though)
        * Added reference count column to WebList and FileFilelist modules plus overview table in the Info display for files and records (ah, finally there is a reason for that fine info-screen...)
        * Set a security precaution in ws/workspaceforms.php (Dmitry should take a look and learn&nbsp;:-)
        * Added feature in index_ts.php allowing faster dynamic websites and AJAX implementations in particular. The idea is that extensions can register a keyword which triggers inclusion of another PHP file quite early in index_ts.php. Only basic libraries and configuration is included, then branched of. From that point its up to the third-party script whether it should connect to database, initialize FE users etc, all depending on their need and allowed overhead. The keyword is registered in $TYPO3_CONF_VARS['FE']['eID_include'][_keyword_] and calling index.php?eID=_keyword_ will trigger the inclusion. I will publish a new extension, "whiteboard", demonstrating a sample implementation using simple AJAX stuff.
        * Began working on a preview-facility which will allow for preview of eg. a workspace page without a backend login.
        * Started a cleaner-module in WebFunction (coming from the "lowlevel" system extension). The cleaner consists of analysis tools and clean-up tools (based on the analysis), all working with the sys_refindex table as well. Eventually it will allow for nightly, cron-job based checks of the system including a report email to administrator. This way, data and link integrity and log reports can be reviewed each day.

    2006-01-27  Christian Jul Jensen  christian@jul.net

        * Minor bugfix in sys_actions related to the taskcenter changes in 3.8
        * Added manual sorting of sys_actions records
        * Fixed bug #2245.

    2006-01-27  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Adjustments to the htmlArea RTE extension (see details in local ChangeLog)

    2006-01-26  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Corrections to the htmlArea RTE extension (see details in local ChangeLog)
        * Fix issue #2358.

    2006-01-26  Michael Stucki  michael@typo3.org

        * Fixed bug #1625: Pages with "hide in menu" flag have got the same pagetree icon like not-in-menu pages.
        * Changed $TYPO3_CONF_VARS[GFX][im_version_5] into a string. Possible values are "im4", "im5", "im6" or "gm". Boolean values will still work where "0" means "im4" and "1" means "im5".
        *&nbsp;!!! Renamed the hooks $TYPO3_CONF_VARS[SC_OPTIONS][tslib/class.tslib_feuserauth.php][logoff_pre_processing] + $TYPO3_CONF_VARS[SC_OPTIONS][tslib/class.tslib_feuserauth.php][logoff_post_processing] and replaced "tslib/class.tslib_feuserauth.php" with "t3lib/class.t3lib_userauth.php" (which is the correct place for this hook).

    2006-01-26  Dmitry Dulepov  typo3@accio.lv

        * Fixed bug #1947: "Page is being generated" is bad for search engines

    2006-01-24  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Fix issues #282 and 1421
        * t3lib_htmlmail: Enable use of CURL library functions when $TYPO3_CONF_VARS["SYS"]["curlUse"] = '1'
        * t3lib_htmlmail: Correct encoding of jumper url
        * t3lib_htmlmail: Avoid applying illegal encoding domain to multipart headers (when html has media)

    2006-01-22  Ingmar Schlecht  ingmar@typo3.org

        * New feature #1639: Implemented form eval API so it's possible to add custom JS and PHP form evaluation functions to input fields in TCEForms (thanks to Thomas Hempel!)

    2006-01-22  Sebastian Kurfuerst  sebastian@garbage-group.de

        * Fixed issues #2333 and #2255, needed for the upcoming skin

    2006-01-20  Dmitry Dulepov  typo3@accio.lv

        * Fixed bug #2232: Creation of new workspace fails

    2006-01-20  Karsten Dambekalns  karsten@typo3.org

        * Fixed bugs 1907, 1581, 17, 2054, 35, 365 in EM.
        * FIxed bug #1182

    2006-01-20  Michael Stucki  michael@typo3.org

        * Release of TYPO3 4.0beta2
        * New feature: Merged cron_cssstyledimgtext into CSS Styled Content. Kudos to Ernesto Baschny who did most of the work. Many thanks to Sebastian Kurfuerst for his great support. Great work boys!
        * Added support to fetch values from objects in getText: myVar.data = TSFE:fe_user|user|username
        * Fixed (part of) #2059: Removing "NOT NULL" when parsing SQL data

    2006-01-19  Sebastian Kurfuerst  sebastian@garbage-group.de

        * New feature: Revised Undo/History feature.
        * Fixed issue #1952: New hook in class.t3lib_userauthgroup.php
        * Fixed issue #2243: Hook needed in class.t3lib_befunc.php, function getProcessedValue
        * Fixed bug #2293: Javascript warnings
        * Fixed errors in t3lib_db::fullQuoteArray and UPDATEquery (came into the core some hours before)

    2006-01-19  Karsten Dambekalns  karsten@typo3.org

        * sysext/dbal: Some bugfixes to connection handling; added $no_quote_fields support for INSERT and UPDATE methods.
        * Fixed bug #2059

    2006-01-19  Rene Fritz  r.fritz@colorcube.de

        * Fixed bug: Fixed a problem with the RTE and inline images and base url's like http://mydomain.com/here_is_my_site/
        * Fixed bug: The nav frame do not update properly when submodules register different nav frames with navFrameScript in MCONF. (class.alt_menu_functions.php)
        * Fixed bug: fixed bug related to PHP5 and clone() in tslib_content
        * Fixed issue: Added clone() compatibility function for PHP4
        * Fixed bug: The javascript dyn tabs used for eg. TCEForms and placed in template.php were not shown when used in popup windows because of an uninitialized variable.
        * Fixed a missing "global": added a missing global $TYPO3_CONF_VARS; to t3lib_userauthgroup::fetchGroups which would have been prevented that the hook fetchGroupQuery worked

    2006-01-19  Dmitry Dulepov  typo3@accio.lv

        * Fixed bug #1430: SEO + simulateStaticDocuments

    2006-01-19  Peter Niederlag  peter@niederlag.de

        * Fixed issue #2268 on cleanup of sysext:css_styled_content
        * Fixed small issue with link in LICENSE.txt

    2006-01-19  Martin Kutschker  martin.t.kutschker@blackbox.net

        * add t3lib_div::sysLog() for Core logging
        * use t3lib_div::sysLog() in t3lib_db-sql_pconnect() and t3lib_db-sql_select_db()
        * add no_quote parameter to t3lib_db-fullQuoteArray() and to all SQL statement generating functions of t3lib_db

    2006-01-19  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Changes to the htmlArea RTE extension (details see local ChangeLog)

    2006-01-18  Dmitry Dulepov  typo3@accio.lv

        * indexed_search: Removed empty line at the end of class.tx_indexedsearch.php. This line caused undesired effects in MSIE with certain PHP versions and UTF-8 encoding in FE.

    2006-01-18  Sebastian Kurfuerst  sebastian@garbage-group.de

        * Fixed bug #1869: Copy sites with flexible content elements inside crash with fatal error
        * Fixed bug #2136: changing extended view in list mode changes focus
        * New feature #1320: stdWrap for all ATagParams (except config.ATagParams)

    2006-01-18  Bernhard Kraft  kraftb@kraftb.at

        * Fixed bugs #277, #1030 and #1472 which are all related to the same charset issue.

    2006-01-17  Karsten Dambekalns  karsten@typo3.org

        * Fixed bug #432

    2006-01-17 Wolfgang Klinger  wk@plan2.net

        * Update the timestamp field (TCA/ctrl/tstamp) on delete

    2006-01-16 Dmitry Dulepov  typo3@accio.lv

        * Fixed bug #2160: Turn off workspaces module for certain users not possible

    2006-01-14 Ingmar Schlecht  ingmar@typo3.org

        * Fixed #2248: Path disclosure in config_default.php and showpic.php

    2006-01-14  Michael Stucki  michael@typo3.org

        * Fixed bug #2102: PHP-Warning in the shortcut frame
        * Remove label tags around hidden fields in FORM elements
        * Removed depencency of typo3conf/database.sql: The file contents are now calculated automatically.

    2006-01-13  Wolfgang Klinger  wk@plan2.net

        * The '[Translate to:]' message is now configurable via TSconfig and will be prepended only if there's an actual value

    2006-01-12  Karsten Dambekalns  karsten@typo3.org

        * Fixed unclean document.location use in JavaScript parts, replaced by [window.]location.href

    2006-01-12  Wolfgang Klinger  wk@plan2.net

        * Introduced a new property 'ignore' for config.sys_language_mode

    2006-01-12  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Changes to the htmlArea RTE extension (details see local ChangeLog)

    2006-01-11  Dmitry Dulepov typo3@accio.lv

        * Fixed bug #2199: Summary contains duplicate labels (indexed_search)

    2006-01-10  Wolfgang Klinger  wolfgang@stufenlos.net

        * Fixed bug #1209: set 'deleteTree' to '1' if 'recursiveDelete' is set in the user preferences

    2006-01-08  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * rtehtmlarea: Correction to path settings affecting image drag & drop and file/image upload.

    2006-01-08  Sebastian Kurfuerst  sebastian@garbage-group.de

        * Fixed bug #1938: Selection "Frontend" gets lost on login failure
        * Fixed bug #1149: FE-Editing in new Popups = Page doesn't reload
        * New feature #1910: Sorting in filelists by modification date

    2006-01-06  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Converted locallang files of htmlArea RTE extension to XML format.
        * Revised all licence notices on all scripts of htmlArea RTE in order to publish under GPL.

    2006-01-06  Sebastian Kurfuerst  sebastian@garbage-group.de

        * Fixed bug #1854: wrong Access check in RTE Wizard
        * Added PHPdoc comments to the update wizard

    2006-01-05  Karsten Dambekalns  karsten@typo3.org

        * Minor change to the stylesheet to enhance tabmenu display in the BE.

    2006-01-05  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Add escapeStrForLike() to t3lib_db and use it in tslib_cObj-searchWhere()
        * Update for bug #1354: Use mysql_escape_string() with PHP 4.1.x

    2006-01-04  Stanislas Rolland  stanislas.rolland@fructifor.ca

        * Changes to the htmlArea RTE extension (details see local ChangeLog)

    2006-01-04  Karsten Dambekalns  karsten@typo3.org

        * Changes to the DBAL extension (details see local ChangeLog)
        * Minor fix to inline comment in class.t3lib_sqlparser.php

    2006-01-04  Sebastian Kurfuerst  sebastian@garbage-group.de

        * Fixed bug #2169: Import of testsite from T3D exceeds PHP maximum_execution_time
        * Fixed bug #2127: Fatal error in mod/user/ws/index.php
        * Changed behavior of alertPopups - there were still some bugs inside, it is cleaned up now.

    2005-12-31  Martin Kutschker  martin.t.kutschker@blackbox.net

        * Add alternative field name argument to tslib_pibase-pi_initPIflexForm()

    2005-12-30  Sebastian Kurfuerst  sebastian@garbage-group.de

        * Fixed bug #2108: Error when using hide in Frontend Editing

    2005-12-29  Sebastian Kurfuerst  sebastian@garbage-group.de

        * Fixed bug #2100: Warning: Call-time pass-by-reference has been deprecated
        * Fixed bug #2126: Updating encryption key sets compat version to same value
        * Fixed bug #2132: Error on moving lost records
        * Fixed bug #2134: "Place as root" does not function
        * Changed version of indexed search to 2.9.0
        * Fixed bug #2117: Install-Tool: "Write to localconf.php" sets "sqlDebug" and "USdateFormat" automatically
        * Fixed a bug in quote settings in CSS styled content - table. Now it is possible to copy/paste a CSV directly.

    2005-12-28  Michael Stucki  michael@typo3.org

        * Release of TYPO3 4.0beta1
        * Fixed a bug in tstemplate (path still pointing to typo3/ext/)

    2005-12-28  Michael Stucki  michael@typo3.org

        * Changed TYPO3_CONF_VARS[SYS][fileCreateMask] from 775 to 755
        * Rised version number to 4.0-dev
        * Added "rtehtmlarea" as a system extension
            - Important notice: Because of a known bug, the buttons "blockstylelabel", "blockstyle", "textstylelabel" and "textstyle" will not work with this version.
        * Fixed bug #1155: Install tool want to recreate the tables, and drop the old ones
        * Fixed Gremlin #1690: nav_frame is sometimes out of sync with the selected page
        * Various changes in t3lib_parsehtml_proc (on behalf of Stanislas Rolland):
            - Allow style and xml:lang attributes on span tags
            - Include "hr", "address" and "dl" in headListTags
            - Avoid insertion of superfluous linebreaks by transform_db
            - Eliminate true linebreaks inside Hx tags
            - Convert linebreaks to spaces instead of deleting them
            - Wrap a-tags that contain a style attribute with a span-tag
            - Honor setting RTE.default.proc.HTMLparser_db.xhtml_cleaning=1

<Category:ReleaseNotes/TYPO3_4.0.x> [Category:TYPO3
4.0](Category:TYPO3_4.0 "wikilink") <Category:2006>
