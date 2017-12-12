RELEASE NOTES FOR TYPO3 4.1.1
=============================

This document contains information about TYPO3 version 4.1.1 which was
released on April 3, 2007.

Download
--------

<https://typo3.org/download/>
<http://sourceforge.net/project/showfiles.php?group_id=20391&package_id=14557&release_id=498432>

MD5 checksums
-------------

    75251bcedd16747cc9310f7fc995e1d7  dummy-4.1.1.tar.gz
    bec1c00a157ebfb5834c3c05a5fdb606  dummy-4.1.1.zip
    f650949063efa9a262c7d6a40095df65  typo3_src+dummy-4.1.1.zip
    f702ddcac41972d50ff8e8b2d3f3d5a8  typo3_src-4.1.1.tar.gz
    a122c4bd9a5ff6054bd9db0e7fa281b6  typo3_src-4.1.1.zip

Source:
<http://sourceforge.net/project/shownotes.php?release_id=498432&group_id=20391>

Upgrading
---------

This version contains a fix that makes the TYPO3 Rich Text Editor
(rtehtmlarea) work again in Mozilla Firefox 2.0.0.3 + . To ensure that
this will work, you need to remove all \*.js files inside the typo3temp/
directory!

Set the \$TYPO3\_CONF\_VARS\['SYS'\]\['encryptionKey'\].

Go to the Install Tool-&gt;Upgrade Wizard and set to 4.1 .

Changelog
---------

    2007-04-03  Michael Stucki  &lt;michael@typo3.org&gt;

        * Release of TYPO3 4.1.1

    2007-04-02  Michael Stucki  &lt;michael@typo3.org&gt;

        * Fixed bug #5088: Cache is not saved properly because of charset conflict in the database. Changing the field type of cache_hash.content from mediumtext to mediumblob. To make this work, you need to compare your database in the Install Tool.

    2007-04-02  Dmitry Dulepov  &lt;dmitry@typo3.org&gt;

        * Fixed bug #4447: "Clear FE cache" doesn't clear "typo3temp/cache_pages" directory

    2007-03-30  Oliver Hader  &lt;oh@inpublica.de&gt;

        * Fixed bug #5105: Extensions crash when using HTMLArea in FE (will be replaced with bugfix #5177 from Trunk end of April 2007)
        * Fixed bug #5248: IRRE - Element browser cannot be used on new child records of a new parent record

    2007-03-30  Franz Holzinger  &lt;kontakt@fholzinger.com&gt;

        * Fixed bug #4725: EM: Include older versions when fetching data using searchExtensionsXML()

    2007-03-28  Oliver Hader  &lt;oh@inpublica.de&gt;

        * Fixed bug #5288: Missing parameter in recursion of t3lib_div::array_merge_recursive_overrule (thanks to Simon Tuck)

    2007-03-28  Ingmar Schlecht  &lt;ingmar@typo3.org&gt;

        * Adding page tree backwards compatibility for JavaScript function hilight_row() to tree.js (by Benjamin Mack)

    2007-03-28  Patrick Broens  &lt;patrick@patrickbroens.nl&gt;

        * Fixed bug #5266: WamCom browser check in htmlarea.js conflicted with Firefox 2.0.0.3

    2007-03-27  Dmitry Dulepov  &lt;dmitry@typo3.org&gt;

        * Added hook to class.t3lib_userauthgroup.php, function recordEditAccessInternals

    2007-03-23  Dmitry Dulepov  &lt;dmitry@typo3.org&gt;

        * Fixed bug #5269: wsol_preview.php does not scroll to content element
        * Fixed bug #4953: Preview in Workspaces Module for content elements

    2007-03-12  Michael Stucki  &lt;michael@typo3.org&gt;

        * Change copyright information in typo3/index.php (no real change, just replace the hardcoded years with the "TYPO3_copyright_year" constant)

<Category:ReleaseNotes/TYPO3_4.1.x> [Category:TYPO3
4.1](Category:TYPO3_4.1 "wikilink") <Category:2007>
