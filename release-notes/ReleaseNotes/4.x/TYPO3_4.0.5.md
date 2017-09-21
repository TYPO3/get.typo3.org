RELEASE NOTES FOR TYPO3 4.0.5
=============================

This document contains information about TYPO3 version 4.0.5 which was
released on February 21st, 2007.

Download
--------

<https://typo3.org/download/>
<http://sourceforge.net/project/showfiles.php?group_id=20391&package_id=14557&release_id=498431>

MD5 checksums
-------------

    ...

Source:
<http://sourceforge.net/project/shownotes.php?release_id=498431&group_id=20391>

Upgrading
---------

This version contains a security fix in concern to an e-mail injection
vulnerability in t3lib\_formmail.

Changelog
---------

<changelog>2007-02-21 Michael Stucki &lt;michael@typo3.org&gt;

`   * Security fix: Email injection vulnerability in t3lib_formmail (reported and fixed by Andreas Otto and Thorsten Kahler)`

2007-02-20 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fixed bug in EM: Insecure extensions were still displayed (patch by Karsten Dambekalns)`\
`   * Fixed a typo in typo3/sysext/install/mod/class.tx_install.php`\
`   * Fixed bug #4207: User>Workspaces shows users pages where they have no access to (patch by Martin Kutschker)`

2007-02-15 Michael Stucki &lt;michael@typo3.org&gt;

`   * Reverted fix for bug #4689 (closes #4987): Fix seems to cause problems, reinvestiation is needed`

2007-02-15 Thorsten Kahler &lt;thorsten.kahler@dkd.de&gt;

`   * Fix: Display description of options in install tool correctly`

2007-02-14 Rupert Germann &lt;rupi@gmx.li&gt;

`   * Fix: Excluded the adminPanel GETvars from t3lib_div::cHashParams to prevent a cHash mismatch`

2007-02-11 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Fix bug #4423: BE search doesn't work with UTF-8 chars (thanks to John Angel)`

2007-02-07 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fixed bug #4883: mod_rewrite rules rewrite missing favicon.ico to index.php (thanks to Stefan Geith for this hint - notice that manual modification of existing .htaccess files might be neccessary)`

2007-02-06 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fixed bug #3069 again: Ignore version check if no requirements are specified`\
`   * Fixed bug #4689: Error while entering a numbers like 50 or 50.00 into a double2 field`

2007-02-04 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fixed bug #3069: Extension manager crashed because of some PHP bug with version_compare() (thanks to Rainer Haertlein who discovered the solution to this problem)`\
`   * Changed t3lib_basicFileFunctions to use filemtime() instead of filectime()`

2007-01-30 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Fixing oddities in recursive stdWraps (bugs #4312 and #4871)`\
`   * Fix bug #4678: t3lib_div::array2xml() may crash with PHP 5.2.0`\
`   * Fix bug #3648: ease use of tslib_cObj::getTreeList()`

2007-01-28 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Added `“`html`` ``{`` ``height:`` ``100%`` ``}`”` to stylesheet to make RTE wizard work in IE7`\
`   * Make the EM work again with PHP 4.1 (checking for md5_file())`

2007-01-24 Dmitry Dulepov &lt;dmitry@typo3.org&gt;

`   * Fixed bug 4846: EM: inconsistent line ending`

2007-01-23 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fixed bug #4643: File Upload did not recognize BE-User option `“`defaultFileUploads`”` (thanks to Benjamin Mack)`

2007-01-21 Michael Stucki &lt;michael@typo3.org&gt;

`   * Update copyright information (just the year, of course) in t3lib/config_default.php`

2007-01-03 Thorsten Kahler &lt;thorsten.kahler@dkd.de&gt;

`   * Fixed bug 931: Typolink to a page with certain type doesn't work if type is zero`

2006-12-21 Dmitry Dulepov &lt;dmitry@typo3.org&gt;

`   * List module did not use BACK_PATH in many calls to TYPO3 functions, which made imposible to reuse List module classes in extensions`

</changelog>

<Category:ReleaseNotes/TYPO3_4.0.x> [Category:TYPO3
4.0](Category:TYPO3_4.0 "wikilink") <Category:2007>
