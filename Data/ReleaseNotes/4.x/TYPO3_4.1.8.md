RELEASE NOTES FOR TYPO3 4.1.8
=============================

This document contains information about TYPO3 version 4.1.8 which was
released on January 20, 2009. **Warning: TYPO3 4.1.8 uses some functions
only available in PHP5 - so if you are using TYPO3 4.1.7 on a system
running PHP4.x, do not update to 4.1.8! Versions 4.1.9 and newer are
compatible again.**

Example for the problem: “public static function” in
class.t3lib\_div.php on line 1379\
And another warning: FE anonymous session handling **will no longer work
with this update!** Be careful! See
[TYPO3-bugtracker](https://forge.typo3.org/issues/19867) for details and
a patch which seems to fix the problem.

News
----

to be completed...

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    8124f37d9aaf2182439c536d96b070f4  dummy-4.1.8.tar.gz
    941ce81b93e27494b3e36cdb1d1f7035  dummy-4.1.8.zip
    7ac7801885a92bf5e833ab7fd9bed2d3  typo3_src-4.1.8.tar.gz
    800019c724b685faf46b5be44d822393  typo3_src-4.1.8.zip
    e3cd33787d9a48c914c60d23e0355687  typo3_src+dummy-4.1.8.zip

Source:
<https://sourceforge.net/project/shownotes.php?release_id=655054&group_id=20391>

Upgrading
---------

Nothing special to do. Except you are running TYPO3 in a PHP4
environement. See below how to get TYPO3 4.1.8 working there.

Changelog
---------

<changelog>2009-01-20 Ingmar Schlecht ingmar@typo3.org

`   * Release of TYPO3 4.1.8`

2009-01-20 Ingmar Schlecht ingmar@typo3.org

`   * Fixed bug #10146: Session fixation vulnerability in user authentication (thanks to the TYPO3 Security Team and especially Marcus Krause)`\
`   * Fixed bug #10159: XSS vulnerability in workspace module (thanks to the TYPO3 Security Team and especially Marcus Krause)`

2009-01-20 Ingo Renner ingo@typo3.org

`   * Fixed bug #10134: XSS vulnerability in sysext indexed_search (thanks to the TYPO3 Security Team and especially Marcus Krause)`\
`   * Fixed bug #10133: Command execution in sysext indexed_search (thanks to the TYPO3 Security Team and especially Marcus Krause)`\
`   * Fixed bug #10154: Weak encryption key generation vulnerability in sysext install (thanks to the TYPO3 Security Team, and especially Marcus Krause)`

2009-01-18 Francois Suter francois@typo3.org

`   * Cleanup #10125: Replace deprecated function calls in sysext indexed_search (thanks to Markus Krause)`

2009-01-17 Oliver Hader oliver@typo3.org

`   * Fixed bug #7677: Constants are not correctly substituted on some PHP5 distributions`

2009-01-16 Steffen Kamper info@sk-typo3.de

`   * Fixed bug #10157: t3lib/config_default.php textfile_ext should be updated to include xml and other text types`

2009-01-14 Steffen Kamper info@sk-typo3.de

`   * Fixed bug #10143 spamProtectEmailAddresses_atSubst does not work correctly if linktext contains email address with uppercase charachters (thanks to Helmut Hummel)`

2009-01-14 Dmitry Dulepov dmitry@typo3.org

`   * Fixed bug #10116: Remove/protect adodb testfiles (thanks to Marcus Krause)`

2009-01-13 Dmitry Dulepov dmitry@typo3.org

`   * Fixed bug #10109: Google reports duplicate title tag`\
`   * Fixed bug #10120: Add .buildpath to `[`svn:ignore`](svn:ignore)

2009-01-12 Steffen Kamper info@sk-typo3.de

`   * Fixed bug #7265: Submodules of Web module can't work with mod.php and the _DISPATCH system`

2009-01-09 Oliver Hader oliver@typo3.org

`   * Fixed bug #10083: Constant styles.content.imgtext.separateRows is not defined`

2009-01-08 Benjamin Mack benni@typo3.org

`   * Fixed bug #9194: Bug: wrong handling of 'is_in' list in TCA element type 'input' (Thanks to Vladimir Podkovanov)`

2009-01-05 Steffen Kamper info@sk-typo3.de

`   * Fixed bug #10055: Add contrib directory to list of allowed paths (thanks to Dan Osipov)`\
`   * Fixed bug 10056: Misspelling english word `“`guesbooks`”

2009-01-03 Dmitry Dulepov dmitry@typo3.org

`   * Fixed bug #10047: typo3/contrib is not prefixed with config.absRefPrefix`

2009-01-01 Benjamin Mack benni@typo3.org

`   * Fixed bug #8361: Stage change notification emails not send when publishing from Live workspace (Thanks to Andreas Wolf)`

2008-12-25 Dmitry Dulepov dmitry@typo3.org

`   * Fixed bug #10012: TYPO3 generates incorrect ETag`

2008-12-23 Dmitry Dulepov dmitry@typo3.org

`   * Fixed bug #9999: Setting [BE][compressionLevel]=true causes problems`

2008-12-22 Steffen Kamper info@sk-typo3.de

`   * Fixed bug #9977: Extensions class.ext_update.php scripts are executed even when extension isn't loaded`

2008-12-20 Steffen Kamper info@sk-typo3.de

`   * Fixed bug #8952: Flags are missing`\
`   * Fixed bug #8525: added Korean flag`\
`   * Fixed bug #5628: added Slovak flag`

2008-12-18 Dmitry Dulepov dmitry@typo3.org

`   * Fixed bug #9947: gzip compression does not work in BE at all`\
`   * Fixed bug #9741: wrong anchor links with absRefPrefix option enabled (thanks to Stefan Galinski)`

2008-12-11 Steffen Kamper info@sk-typo3.de

`   * Fixed bug #9836: RTE TSconfig lost when uploading files or creating folders`

2008-12-09 Steffen Kamper info@sk-typo3.de

`   * Fixed bug #9915: Typing error in tslib_content ($gifCreateor = $gifCreator)`

2008-12-03 Martin Kutschker masi@typo3.org

`   * Fixed bug #6415: preg_replace error on PHP 5.2 sometimes resulting in empty pages (thanks to Francois Suter)`

2008-12-01 Dmitry Dulepov dmitry@typo3.org

`   * Fixed bug #9790: class.gzip_encode.php fails with open_basedir restrictions`

2008-11-27 Dmitry Dulepov dmitry.dulepov@gmail.com

`   * Fixed bug #8944: PHP-Error in class.em_index.php on line 4333`

2008-11-22 Steffen Kamper info@sk-typo3.de

`   * Fixed bug #9798: Don't show fe_users password in page module`

2008-11-01 Oliver Hader oliver@typo3.org

`   * Follow-up to bug #9664: t3lib_div::strtolower() is not implemented (thanks to Marcus Krause)`\
`   * Fixed bug #9632: Multiple fileuploads into folders with special characters (umlauts) not possible (thanks to Marcus Krause)`

2008-10-31 Oliver Hader oliver@typo3.org

`   * Fixed bug #9659: TCEmain wrongly tests required input-type fields (thanks to Francois Suter)`

2008-10-28 Oliver Hader oliver@typo3.org

`   * Fixed bug #9664: EM fails on retrieving files of uppercase extension keys (thanks to Marcus Krause)`

2008-10-21 Oliver Hader oliver@typo3.org

`   * Fixed bug #9553: Form validation script jsfunc.validateform.js sometimes fails in IE (thanks to Vladimir Podkovanov)`

2008-10-14 Martin Kutschker masi@typo3.org

`   * Fixed bug #9501: Titles of content columns in classic page module doesn't take into account backend charset (thanx to Steffen Kamper and Vladimir Podkovanov)`

2008-10-10 Dmitry Dulepov dmitry@typo3.org

`   * Fixed bug #9522: t3lib_BEfunc::BEenableFields generates invalid SQL`

2008-10-04 Dmitry Dulepov dmitry@typo3.org

`   * Fixed bug #9479: Selected items are not visible after saving the form in BE`

2008-09-20 Dmitry Dulepov dmitry@typo3.org

`   * Fixed bug #9384: FE session hijacking`

2008-9-18 Martin Kutschker martin.t.kutschker@blackbox.net

`   Fixed bug #8588: Admin tools - User Admin - List users online broken when [BE][lockIP] is set to  4`

2008-09-10 Dmitry Dulepov dmitry@typo3.org

`   * Fixed bug #9315: Description of tslib_fe::includeTCA is incorrect`

2008-09-09 Dmitry Dulepov dmitry@typo3.org

`   * Fixed bug #9268: TCA is not loaded in FE when config cache is disabled`

2008-09-08 Stanislas Rolland typo3@sjbr.ca

`   * Fixed bug #3546: htmlArea RTE: wrong charset used by mb_regex in spell checker`

2008-09-01 Dmitry Dulepov dmitry@typo3.org

`   * Fixed bug #9249: Misspelling in Install tool (thanks to Christian Kuhn)`

2008-08-25 Stanislas Rolland typo3@sjbr.ca

`   * Fixed issue #9196: In htmlArea RTE, unable to create an external URL containing german umlauts`\
`   * Updated htmlArea RTE version to 1.5.7 for TYPO3 4.1.8`

2008-08-21 Dmitry Dulepov dmitry@typo3.org

`   * Fixed bug #8826: calls to ini_set produces warnings`

2008-08-20 Dmitry Dulepov dmitry@typo3.org

`   * Fixed bug #5205: pi_loadLL() + no language file == full path disclosure`

2008-08-18 Dmitry Dulepov dmitry@typo3.org

`   * Fixed bug #9141: Update Wizard uses wrong scheme to write compat_version to localconf.php`\
`   * Fixed bug #9152: Deprecated code into stdgraphic`

2008-08-11 Ingo Renner ingo@typo3.org

`   * Reverted Change from 2008-08-06 in t3lib_div leading to nonfunctional clipboard`

2008-08-06 Ingo Renner ingo@typo3.org

`   * Fixed bug: PHP 5.3 throws a warning in class.t3lib_befunc.php on line 3348: trim() expects parameter 1 to be string, array given`\
`   * Fixed bug: PHP 5.3 throws a deprecation warning in typo3/mod/tools/em/class.em_soap.php on lines 108, 112, 115, 213, 218: Assigning the return value of new by reference is deprecated`\
`   * Fixed bug: PHP 5.3 throws a warning in class.t3lib_div.php on line 3286: strcmp() expects parameter 1 to be string, array given`

2008-08-05 Dmitry Dulepov dmitry@typo3.org

`   * Fixed bug #6992: t3ib_refindex requires t3lib_BEfunc but does not include it`

2008-08-01 Benjamin Mack benni@typo3.org

`   * Fixed bug #9099: Wrong path to pages.gif in linkbrowser (Thanks to Xander Damen)`

2008-07-30 Martin Kutschker martin.t.kutschker@blackbox.net

`   * Fixed bug #9076: iso-ir-109 detected as iso-8859-2 instead of iso-8859-3`

2008-07-23 Dmitry Dulepov dmitry@typo3.org

`   * Changed LICENSE.txt to reference GPL `“`version`` ``2`` ``or`` ``later`”

2008-07-14 Dmitry Dulepov dmitry@typo3.org

`   * Fixed bug #8566: Unable to match TS condition when variable is not set`

2008-07-13 Martin Kutschker martin.t.kutschker@blackbox.net

`   * Fixed bug #5476: links entered in th-tag with the RTE are not parsed on the frontend because parseFunc doesn't recognize th as cells (thanks to Daniel Ellermann)`

2008-07-12 Martin Kutschker martin.t.kutschker@blackbox.net

`   * Fixed bug #8922: setStage operation of t3lib_TCAmain::process_cmdmap() overwrites $id parameter making it inaccessible for post-processing hooks`

2008-07-07 Ernesto Baschny ernst@cron-it.de

`   * Fixed bug #8703: More OptionsAccess wasn't being shown in the pages click-menus (Thanks to Andreas Wagner)`

2008-07-03 Ernesto Baschny ernst@cron-it.de

`   * Fixed bug #7711: Element browser ignores `“`Hide`` ``in`` ``menu`”` flag (Thanks to Christian Kuhn)`\
`   * Fixed bug #8840: Wrong title of edit icon of `“`Include`` ``basis`` ``template`”` section when editing template records (Thanks to Christian Kuhn)`

2008-06-22 Oliver Hader oliver@typo3.org

`   * Fixed bug #8724: getElementsByClassName does not work properly in Firefox 3 and Safari 3.1 (thanks to Helmut Hummel)`

2008-06-13 Oliver Hader oliver@typo3.org

`   * Fixed bug #8239: Wrong parameter order for strpos in t3lib_div::getHostname`

</changelog>

Patching TYPO3 4.1.8 to work with PHP4
--------------------------------------

You have to change two files:

Open typo3\_src-4.1.8/t3lib/class.t3lib\_div.php, search for

    public static function generateRandomBytes($count) {

and replace it by

    function generateRandomBytes($count) {

\
Within this function search for line

    $output .= md5(mt_rand() . $randomState, true);

and replace it by

    $output .= pack('H*', md5(mt_rand() . $randomState));

\
Then open
typo3\_src-4.1.8/typo3/sysext/cms/tslib/class.tslib\_content.php and
search for

    $linktxt = str_ireplace($mailAddress, $spamProtectedMailAddress, $linktxt);

and replace it by

    $linktxt = preg_replace('/'.preg_quote($mailAddress,'/').'/i', $spamProtectedMailAddress, $linktxt);

That's it. Your TYPO3 4.1.8 should now work in an PHP4-only
environement.
