RELEASE NOTES FOR TYPO3 4.1.3
=============================

This document contains information about TYPO3 version 4.1.3 which was
released on October 22, 2007.

News
----

A lot of bug fixes made it into this release. Areas which got special
attention this time were HTMLArea and IRRE. See the below ChangeLog for
details.

Download
--------

<https://typo3.org/download/>

<http://sourceforge.net/project/showfiles.php?group_id=20391&package_id=14557&release_id=548868>

MD5 checksums
-------------

    f0c520571ef8188620a3cf0b5ff4ca38  dummy-4.1.3.tar.gz
    2cce53771f7d07c8eea7fae3c4005023  dummy-4.1.3.zip
    84f29e6c1876a7fd63e3206d066a5a13  typo3_src+dummy-4.1.3.zip
    b3028c3f286cde5a6399902b10de102c  typo3_src-4.1.3.tar.gz
    e0d10b048aee84073d4555eac1f8391a  typo3_src-4.1.3.zip

Upgrading
---------

Nothing special to do.

Changelog
---------

    2007-10-22  Ingmar Schlecht  &lt;ingmar@typo3.org&gt;

        * Release of TYPO3 4.1.3

    2007-10-22  Andreas Otto  &lt;andreas.otto@dkd.de&gt;

        * Fixed bug #6340: JS errors with dividers2tabs and rtehtmlarea

    2007-10-21  Thomas Hempel  &lt;thomas@typo3-unleashed.net&gt;
        
        * Fixed bug: #6531: Function getUpdateJS doesn't work properly (Thanks to Philip Almeida)
        * Fixed bug: #434: function getUpdateJS produce JS error messages
        
    2007-10-20  Ingmar Schlecht  &lt;ingmar@typo3.org&gt;

        * Fixed bug #5949: BE-Shortcut to Tools-&gt;User Admin returns error. (By Oliver Hader)
        * Fixed bug #6210: UserTSConfig value "options.moduleMenuCollapsable=0" does not work.
        * Fixed bug #6071: Switch to User does not work from context menu in List Module. (Thanks to Christian Kuhn all patches above!)
        * Fixed bug #6553: Remove hardcoded strip_tags() from image altText and replacing it with TS stripHtml = 1 (Thanks to Georg Ringer)
        * Fixed bug: stdWrap for imgMax is not taken into account. (Thanks to Helmut Hummel)

    2007-10-19  Stanislas Rolland  &lt;stanislas.rolland@fructifor.ca&gt;

        * Fixed bug 6546: Remove htmlArea RTE acronym from Insert-Record object

    2007-10-17  Michael Stucki  &lt;michael@typo3.org&gt;

        * Fixed bug #6121: Reply-To field in formmails can contain invalid characters if formMailCharset different from site charset (patch by Wolfgang Zenker)

    2007-10-17  Sebastian Kurfuerst  &lt;sebastian@typo3.org&gt;

        * Fixed bug #6202: Company field is missing for table fe_users in "View Item" (Thanks to Christian Kuhn)

    2007-10-16  Michael Stucki  &lt;michael@typo3.org&gt;

        * Fixed bug #3552: Fatal error during backend edit

    2007-10-16  Stanislas Rolland  &lt;stanislas.rolland@fructifor.ca&gt;

        * Fixed bug 4183: Incorrect display in htmlArea RTE of utf-8 labels for colors, classes and fonts defined in PageTSConfig
        * Fixed bug 4525: In htmlArea RTE, disabling personal dictionaries in UserTSConfig not honored

    2007-10-15  Stanislas Rolland  &lt;stanislas.rolland@fructifor.ca&gt;

        * Fixed bug 5855: Missing unlink icon in htmlArea RTE
        * Fixed bug 5839: In htmlArea RTE, paragraph &amp; text dropdown boxes inactive when using @media clause in stylesheet
        * Fixed bug 6152: AllowClipboard helper offered by htmlArea RTE doesn't work with 2.0.0.x Firefox
        * Fixed bug 6340: rtehtmlarea not working with "Editforms on page" option
        * Fixed bug 6152: Nullify default value AllowClipboard helper and use TYPO3-specific Firefox extension
        * Update version number of rtehtmlarea to 1.5.4

    2007-10-08  Martin Kutschker  &lt;martin.t.kutschker@blackbox.net&gt;

        * Fix bug #6420: access key generation wrong with HTML tags in menu titles (TMENU)

    2007-10-07  Martin Kutschker  &lt;martin.t.kutschker@blackbox.net&gt;

        * Fixed bug #5911: GIFBUILDER setting quality not honoured

    2007-10-06  Martin Kutschker  &lt;martin.t.kutschker@blackbox.net&gt;

        * Fixed bug #6462: Wrong default locale charset on Windows
        * Fixed bug #6252: rteHTMLarea acronyms are not DBAL compatible
        * Fixed bug #5189: images with uppercase file extension aren't displayed in drag-n-drop listing

    2007-09-24 Andreas Otto &lt;andreas.otto@dkd.de&gt;

        * Fixed bug #1471: Check if exif functions are available before using them.

    2007-09-18  Oliver Hader  &lt;oh@inpublica.de&gt;

        * (minor) Fixed bug #65: Thumbnails in Element Browser are only displayed if fileSuffix is lowercase

    2007-09-09  Martin Kutschker  &lt;martin.t.kutschker@blackbox.net&gt;

        * fixed bug 5701: linkHandler Hook Not Initialized Properly , patch supplied by Jeff Segars

    2007-09-09  Martin Kutschker  &lt;martin.t.kutschker@blackbox.net&gt;

        * Require PHP 4.3 explicitely in init.php

    2007-09-07  Ingmar Schlecht  &lt;ingmar@typo3.org&gt;

        * Bugfix: Highlight root page in pagetree

    2007-09-05  Thorsten Kahler  &lt;thorsten.kahler@dkd.de&gt;

        * Fixed bug #4160: Moving content elements in frontent editing mode causes crash
        * Disable versioning in clickMenu if BE user doesn't have access to the versioning module

    2007-09-03  Oliver Hader  &lt;oh@inpublica.de&gt;

        * (minor) Fixed bug #6104: IRRE - IE7: Strange behaviour with hover event of nested Tabs/IRRE-levels with relative positioned HTML elements
        * (minor) Fixed bug #5906: IRRE - Default values defined in TCA are not used for children (thanks to Joscha Feth and Jeff Segars)

    2007-08-15  Wolfgang Klinger  &lt;wk@plan2.net&gt;

        * (trivial) Added is_array checks in extension manager code (committed by Stucki)

    2007-08-23  Dmitry Dulepov  &lt;dmitry@typo3.org&gt;

        * Fixed: hanging recordset in t3lib_BEfunc

    2007-08-23  Andreas Otto  &lt;andreas.otto@dkd.de&gt;

        * (trivial) Fixed bug #4888: Invalid argument supplied for foreach()

    2007-08-06  Martin Kutschker  &lt;martin.t.kutschker@blackbox.net&gt;

        * Fixed bug #5941: Log reason of failure on DB connect

<Category:ReleaseNotes/TYPO3_4.1.x> [Category:TYPO3
4.1](Category:TYPO3_4.1 "wikilink") <Category:2007>
