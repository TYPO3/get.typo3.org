Release Notes for TYPO3 4.5.4
=============================

This document contains information about TYPO3 version 4.5.4 which was
released on July 27, 2011.

News
----

This release is a combined bugfix and security release.

Notes
-----

Due to several security issues found in the TYPO3 Core, there was a
combined release of TYPO3 4.3.12, 4.4.9 and 4.5.4.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2011-001/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    bbd31f348a88dd4af7e48221971d4f47  dummy-4.5.4.tar.gz
    eb6a1f861fc465d64e9c8b65c1077f21  dummy-4.5.4.zip
    25c254eb6cb391959d53ae76bda796e4  introductionpackage-4.5.4.tar.gz
    0cf10b71e89a14b91080d735bd4e2fa7  introductionpackage-4.5.4.zip
    329a714701538373f0e09bd37cfc692f  typo3_src+dummy-4.5.4.zip
    f78496ed0f1d0e1cd28cd6064f2226b9  typo3_src-4.5.4.tar.gz
    202570cdd6dd88751b78b05824d07029  typo3_src-4.5.4.zip

Upgrading
---------

### Changed rendering instructions for headlines

**Important Note:** Due to a change in the rendering instructions of
css\_styled\_content you might have to modify your TypoScript templates
when doing the update.

You have to take actions, if you have adjusted the fontTag property of
the provided TypoScript in lib.stdheader.10.1.fontTag (or in
lib.stdheader.10.*2*.fontTag and so on). If your headlines are somehow
else passed through *fontTag* by some instructions in your template, you
also have to check if the headlines are still displayed correctly.

If the previous section applies to you, this might result in unexpected
rendering of headlines after the update.

Instead of using *lib.stdheader.10.1.fontTag*, headline rendering is now
handled through *dataWrap* as *lib.stdheader.10.1.dataWrap* (and so on).
Make sure to update your TypoScript before the update and check the
website rendering after it!

Example:

    # Old
    lib.stdheader.10.1.insertData = 1
    lib.stdheader.10.1.fontTag = <h1{register:headerStyle}{register:headerClass}>|</h1>
    # New
    lib.stdheader.10.1.dataWrap = <h1{register:headerStyle}{register:headerClass}>|</h1>

### Apart from that

Apart from that the usual upgrading procedure applies; no database
updates are necessary.

Changelog
---------

    2011-07-27  d4cfd17            [RELEASE] Release of TYPO3 4.5.4 (TYPO3 v4 Release Team)
    2011-07-27  3f2259f  #27345    [FEATURE] Move "Appearance" tab before "Access" tab (Xavier Perseguers)
    2011-07-27  cabc05f  #25307    [BUGFIX] Ext Direct API lacks the possibility of adding access control (Stefan Galinski)
    2011-07-27  f02e9fd  #24577    [BUGFIX] Untrusted GP data is unserialized in wizard_colorpicker.php and view_help.php (Christian Kuhn)
    2011-07-27  c782af1  #26876    [BUGFIX] Unprivileged backend user can read arbitrarily from database (Helmut Hummel)
    2011-07-27  d76f62a  #27414    [BUGFIX] Backend user without accordant language permissions can see workspace changes (Michael Klapper)
    2011-07-27  8ebc512  #28189    [BUGFIX] XSS in TYPO3 core when using typolink.parameter JS-Popup Window (Marco Bresch)
    2011-07-27  42ee290  #24535    [BUGFIX] XSS in tcemain flash message (Georg Ringer)
    2011-07-27  4e031e3  #24519    [BUGFIX] XSS in Recycler (Steffen Gebert)
    2011-07-27  8d48c6f  #24497    [BUGFIX] XSS in browse_links (Georg Ringer)
    2011-07-27  b21a872  #20775    [BUGFIX] t3lib_div::removeXSS does not remove some XSS (Jigal van Hemert)
    2011-07-27  bc796cd  #24457    [BUGFIX] The delay if wrong credentials are provided during backend login can be circumvented (Helmut Hummel)
    2011-07-27  281713c  #24456    [BUGFIX] Information disclosure during backend login (Helmut Hummel)
    2011-07-26  686631b            [BUGFIX] Remove duplicate hsc() for title tag at login (Georg Ringer)
    2011-07-25  0ad45ea  #21609    [BUGFIX] systemLocale related issues (Steffen Gebert)
    2011-07-25  1342a25            [TASK] htmlArea RTE version number updated to 2.1.7 (Stanislas Rolland)
    2011-07-25  f9c1682            [BUGFIX] htmlArea RTE not loading with Safari 5.1 (Stanislas Rolland)
    2011-07-24  eca367b            Revert "[BUGFIX] BE User module allows switching to CLI users" after discussion in the Core list. Switching to CLI users *is* useful. (Francois Suter)
    2011-07-24  aa3f554  #28234    [BUGFIX] Chained stdWrap is broken for boolean stdWrap function types (Stefan Neufeind)
    2011-07-22  acedf05  #22599    [BUGFIX] Prevent indexing of Backend login page in search engines (Steffen Gebert)
    2011-07-21  52a9c13  #28218    [BUGFIX] Value 0 in integer fields is not shown in List module anymore (Benjamin Mack)
    2011-07-21  280b3fe  #25604    [BUGFIX][CONF] Changed default sorting of fe_users in BE (Mario Rimann)
    2011-07-20  9df8c5f            [BUGFIX] htmlArea RTE: Removing class from link in IE8 won't work (Stanislas Rolland)
    2011-07-19  d59bcb1  #25208    [BUGFIX] Fix PHP Fatal Error in Upgrade wizard (Michael Buergi)
    2011-07-17  c8ff7e0            [BUGFIX] Styling of security warnings (Johannes Feustel)
    2011-07-12  63d86ae  #28030    [BUGFIX] TCEforms: Localization value boxes are too wide (Andreas Wolf)
    2011-07-12  892b459            [TASK] Raise submodule pointer (TYPO3 v4 Release Team)
    2011-07-12  069fc92  #27210    [BUGFIX] t3lib_div::cmpIPv6() fails to compare (Stefan Neufeind)
    2011-07-11  f569cfb  #27743    [BUGFIX] BE: remove tag-fragments from text-version of a richtext-field (Stefan Neufeind)
    2011-07-11  cdf6916  #28085    [BUGFIX] t3lib_div::debugRows doesn't return data (Sebastian Michaelsen)
    2011-07-10  bb0b075  #28060    [BUGFIX] Correct icon for edit page settings (Helmut Hummel)
    2011-07-09  87adf57  #28050    [BUGFIX] t3lib_div::devLog - PHPDoc Comment does not match method signature (Sebastian Michaelsen)
    2011-07-09  9260808  #28008    [BUGFIX] BE User module allows switching to CLI users (Andreas Wolf)
    2011-07-09  6180306            [BUGFIX] htmlArea RTE: TV CE editing not possible (stan)
    2011-07-08  d6c94bc  #27643    [BUGFIX] Remove editing restriction for elements in workspace-stages (Tolleiv Nietsch)
    2011-07-08  e13f2be  #25086    [BUGFIX] Fix exception error when using caching framework and eID scripts (Michael Stucki)
    2011-07-08  1da4aa3  #24324    [BUGFIX] tcaTree: make own record unselectable (Steffen Ritter)
    2011-07-08  f5d7aaa  #27935    [BUGFIX] Exclude E_DEPRECATED from exceptionalErrors (Helmut Hummel)
    2011-07-07  999eb0a  #27936    [BUGFIX] Date of 1970-01-01 is shown in unset date fields (Benjamin Mack)
    2011-07-07  2b43c4f            [TASK] Raise submodule pointer (Oliver Hader)
    2011-07-07  3fe1104            [BUGFIX] Wrong submodule pointer of fluid (Oliver Hader)
    2011-07-06  f13d999            [TASK] Raise submodule pointer (TYPO3 v4 Release Team)
    2011-07-06  0daf70e  #27774    [BUGFIX] Backend doctype 'xhtml_trans' is broken (Steffen Gebert)
    2011-07-05  99f1ed1            [BUGFIX] Re-Introduce removed API method and mark it deprecated (Helmut Hummel)
    2011-07-03  f613cd7  #27755    [BUGFIX] Mirror selection is not respected (Xavier Perseguers)
    2011-06-29  8790f3e  #23567    [BUGFIX] sys_action: Fix Record List page switching (Thomas Maroschik)
    2011-06-25  8c856d5  #11765    [BUGFIX][INSTALL] Selecting existing database should check radio button (Steffen Gebert)
    2011-06-24  0652f1b  #26771    [BUGFIX] Flexform sheet description should be editable via TSConfig (Kai Vogel)
    2011-06-23  29fed40  #27409    [BUGFIX] Missing parentheses in code break two stdWraps (Markus Klein)
    2011-06-21  8b8bd64  #26913    [BUGFIX] Installer - Wrong value for CGI (Markus Klein)
    2011-06-20  0bd8de7  #22928    [BUGFIX] FE-Error "NO entry in the $TCA-array..." (Nicole Cordes)
    2011-06-20  52e1c1e  #27348    [BUGFIX] Incompatible call to debug_backtrace() prior to PHP 5.3.5 (Oliver Hader)
    2011-06-19  4ffa90f  #27100    [BUGFIX] Show correct record title (Johannes Feustel)
    2011-06-18  ba0977a  #13627    [FEATURE] add .gitignore for common file exclusions (Oliver Hader)
    2011-06-14  6606636            [TASK] Raise submodule pointer (TYPO3 v4 Release Team)
    2011-06-14  7745fce  #27446    [TASK] Integrate external projects Fluid and Extbase as Git submodules (Oliver Hader)
    2011-06-14  e39ac9c  #25669    [BUGFIX] Scheduler: Show running icon during execution (Andy Grunwald)
    2011-06-11  f179470  #20519    [BUGFIX] Handle IDN domain names correctly (Johannes Feustel)
    2011-06-10  02a5642            [TASK] Raise submodule pointer (TYPO3 v4 Release Team)
    2011-06-09  b000330            [TASK] Raise submodule pointer (TYPO3 v4 Release Team)
    2011-06-09  8867818  #M17873   [BUGFIX] Make backend layout dropdown in CE editform translateable (Stefano Kowalke)
    2011-06-06  6238a30  #26867    [BUGFIX] content FORM: wrong layout for label (Markus Klein)
    2011-06-06  682d40a  #25725    [BUGFIX] pageNotFound_handling error with relative paths (Markus Klein)
    2011-06-06  1cadb1c  #26779    [BUGFIX] phpTimeZone not correctly set from localconf.php (Patrick Schriner)
    2011-06-06  4c2a8d5  #24958    [BUGFIX] TCEFORM language selector: wrong relations (Thorsten Kahler)
    2011-06-05  8baa9ad  #26734    [BUGFIX] Detect Android systems properly (Francois Suter)
    2011-06-05  dd1f649  #26867    [BUGFIX] content FORM: wrong layout for label (Markus Klein)
    2011-06-04  283ebb7  #5539     [BUGFIX] sysext recycler: Typo in language label (Stefan Neufeind)
    2011-06-04  9456a49  #26360    [BUGFIX] Fixed typo in TBE_browser_recordList (Mario Rimann)
    2011-06-03  1e0d84e  #27173    [TASK] Overwork typo3/sysext/README.txt (Ernesto Baschny)
    2011-06-03  37322ba  #17506    [BUGFIX] Do not suppress parse errors in ext_emconf.php files (Steffen Gebert)
    2011-06-03  2db9cc1  #26483    [BUGFIX] Add stdWrap for excludeUidList for HMENU. (Roland Waldner)
    2011-06-02  2d16a5b  #26485    [BUGFIX] Natural sort with t3lib_div::naturalKeySortRecursive() (Markus Klein)
    2011-06-01  4c71e87  #26914    [BUGFIX] Fix typo "PHP sessions availiable" in Install Tool (Stephan Großberndt)
    2011-06-01  074ff55  #27152    [BUGFIX] Missing XCLASS statement for class LiveSearch (Steffen Gebert)
    2011-05-31  21c4a42  #25661    [BUGFIX] Scheduler: use img title-tags for mouse-over at status legend (Francois Suter)
    2011-05-30  5110cb2            [BUGFIX] compileWhereClause causes Extbase errors with DBAL (Patrick Schriner)
    2011-05-29  61e2f08  #24212    [BUGFIX] Meta charset tag adjustment for html5 doctype (Susanne Moog)
    2011-05-24  5fcc593            [TASK] Set TYPO3 version to 4.5.4-dev (TYPO3 v4 Release Team)
    2011-05-24  ec3452a            [RELEASE] Release of TYPO3 4.5.3 (TYPO3 v4 Release Team)

<Category:ReleaseNotes/TYPO3_4.5.x> [Category:TYPO3
4.5](Category:TYPO3_4.5 "wikilink") <Category:2011>
