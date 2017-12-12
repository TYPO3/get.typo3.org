RELEASE NOTES FOR TYPO3 4.1.2
=============================

This document contains information about TYPO3 version 4.1.2 which was
released on July 16, 2007.

News
----

In this release, the TYPO3 core team has fixed a lot of issues
concerning frontend rendering, backend (IRRE, Workspaces), and improved
the general code quality:

Frontend rendering improvements:

-   Removing the caption wrap on images if no caption is set (Bug
    \#5331)
-   Bugfixes for TMENU/GMENU and JSMENU (Bugs \#5053, \#3729, \#5048)
    bugfixes external url
-   A Unicode bugfix for Indexed Search
-   gzip content encoding is now compatible with IE7 (Bug \#4623)

Backend:

-   lots of IRRE Bugfixes
-   correctly processing alt\_label now (Bug \#5094)
-   The colorpicker wizard now works in flex forms (Bug \#2052)
-   Added labels in Extension manager (Bug \#5519)
-   TypoScript Object Browser: New keys are now added when pressing the
    return key in the update form instead of clicking the submit button.
-   Workspaces: Fixed Broken Rootline when viewing a non-online page
    (Bug \#1893)

Development / Code Quality:

-   improved code quality
-   Made debug logging of user-supplied SQL queries possible in
    t3lib\_db.

Download
--------

<https://typo3.org/download/>
<http://sourceforge.net/project/showfiles.php?group_id=20391&package_id=14557&release_id=523612>

MD5 checksums
-------------

    ef933a8973653aeba242330390cb50e9  dummy-4.1.2.tar.gz
    5397c8fa38ac412b1dc34d127ddd30b5  dummy-4.1.2.zip
    8064f704e3ed348ad1d3993a4b49b2c0  typo3_src+dummy-4.1.2.zip
    0f33e795ee181752a0a71568932eac15  typo3_src-4.1.2.tar.gz
    7e2da6b952985b06889975f275ed61c2  typo3_src-4.1.2.zip

Source:
<http://sourceforge.net/project/shownotes.php?release_id=523612&group_id=20391>

Upgrading
---------

Nothing special to do.

Changelog
---------

    2007-07-16  Michael Stucki  &lt;michael@typo3.org&gt;

        * Release of TYPO3 4.1.2
        * Fixed possible XSS in workspace/version modules (requires valid BE login / patch by Christian Kuhn)
        * Removed possible display of phpinfo() (requires bug in extension to be unveiled)

    2007-07-16  Oliver Hader  &lt;oh@inpublica.de&gt;

        * Fixed bug #5556: IRRE - RTE in child elements overwrites field in parent element

    2007-07-16  Martin Kutschker  &lt;martin.t.kutschker@blackbox.net&gt;

        * Fixed bug #3834: possible abuse of t3lib_formmail
        * t3lib_div::getHostname() used $_SERVER instead of t3lib_div::getIndpEnv()
        * IPmaskList check is triggered in CLI mode (thanks to Tobias Rohrle)

    2007-07-14  Oliver Hader  &lt;oh@inpublica.de&gt;

        * Fixed bug #5704: IRRE - Children on the table pages get the pid of the parent page in pagetree
        * Fixed bug #5718: IRRE - Copying a page with related child records leads to duplicates of each children
        * Fixed bug #5907: RTE-Plugins: Use record specific RTEtsConfigParams

    2007-07-13  Oliver Hader  &lt;oh@inpublica.de&gt;

        * Fixed bug #5913: RTEhtmlarea not correctly displayed in IRRE child form-fields and tabs (continuance of bug #5177)
        * Fixed bug #5948: IRRE - Parent record is not shown after saving the first time to a table on a TYPO3 system

    2007-07-11  Oliver Hader  &lt;oh@inpublica.de&gt;

        * Fixed bug #5331: Remove the caption wrap on images if no caption is set (thanks to Georg Ringer)
        * Fixed bug #5945: Missing right parenthesis in RTEhtmlarea user element module (thanks to Markus Lange)

    2007-07-07  Oliver Hader  &lt;oh@inpublica.de&gt;

        * Fixed bug #5053: imgNameNotRandom on TMENU/GMENU could break rollover behaviour (thanks to Ralf Hettinger)
        * Fixed bug #5048: JSMENU produces error if using baseurls (thanks to Jens Koester)

    2007-07-06  Michael Stucki  &lt;michael@typo3.org&gt;

        * Fix in indexed search: List of indexed pages could be broken if mutli-byte chars are cut in the middle (patch by Karsten Dambekalns)
        * Fixed bug #5094: Record alt_label was not processed (patch by Volker Graubaum and Thomas Hempel)

    2007-07-02  Oliver Hader  &lt;oh@inpublica.de&gt;

        * Fixed bug #4623: Content encoding with x-gzip not possible in IE7
        * Fixed bug #5789: JS error in new content element wizard with a single item

    2007-06-13  Oliver Hader  &lt;oh@inpublica.de&gt;

        * Fixed bug #5778: Missleading comment in TCEmain::copyRecord_procBasedOnFieldType()

    2007-06-08  Oliver Hader  &lt;oh@inpublica.de&gt;

        * Fixed bug #5755: XCLASS inclusion part for class.t3lib_tceforms_inline.php is missing

    2007-06-05  Oliver Hader  &lt;oh@inpublica.de&gt;

        * Fixed bug #4226: New content elements wizard removes CE from array if tt_content_defValues property is zero

    2007-05-23  Oliver Hader  &lt;oh@inpublica.de&gt;

        * Fixed bug #5564: IRRE - foreign_selector/foreign_unique on click issue

    2007-05-21  Dmitry Dulepov  &lt;dmitry@typo3.org&gt;

        * Added $GLOBALS['TYPO3_DB']-&gt;sql_free_result() to TCEmain::recordInfo() to avoid resource waste

    2007-05-18  Martin Kutschker  &lt;martin.t.kutschker@blackbox.net&gt;

        * Fixed bug #5578: config setting SYS[requestURIvar] doesn't work

    2007-05-12  Oliver Hader  &lt;oh@inpublica.de&gt;

        * Fixed bug #5074: IRRE - Hook processDatamap_afterDatabaseOperations executed early

    2007-05-10  Thorsten Kahler  &lt;thorsten.kahler@dkd.de&gt;

        * Fixed bug #209: require field URL in page-type "External URL"

    2007-05-09  Andreas Otto  &lt;andreas.otto@dkd.de&gt;

        * Fixed bug #2052: Color picker does not work properly in flex forms. Thanks to David Bruehlmeier for providing a patch and a testcase.

    2007-05-03  Oliver Hader  &lt;oh@inpublica.de&gt;

        * Fixed bug #5177: RTEhtmlarea not correctly displayed in IRRE child form-fields and tabs

    2007-05-01  Martin Kutschker  &lt;martin.t.kutschker@blackbox.net&gt;

        * Fixed bug #2515: jsfunc.validateform.js does not verify password fields (thanks to Joerg Wagner)
        * Fixed bug #5522: 1-2-3 wizard does not accept host name with socket option

    2007-04-28  Andreas Otto  &lt;andreas.otto@dkd.de&gt;

        * Fixed bug #3649: Call to a member function formWidth() on object $GLOBALS['TBE_TEMPLATE'] instead on $GLOBALS['SOBE'].

    2007-04-28  Oliver Hader  &lt;oh@inpublica.de&gt;

        * Fixed bug #5519: EM - Some input fields don't have real labels yet (thanks to Oliver Klee)

    2007-04-28  Michael Stucki  &lt;michael@typo3.org&gt;

        * Fixed bug in TypoScript object browser: New keys were not added when pressing the return key in the update form instead of clicking the submit button.
        * Fixed bug in class.em_terconnection.php: Need to base64_encode upload data for some NuSOAP implementations (patch by Karsten Dambekalns)

    2007-04-18  Dmitry Dulepov  &lt;dmitry@typo3.org&gt;

        * Fixed bug #1893: Broken Rootline when a Editor view a Page that is not online

    2007-04-18  Ernesto Baschny  &lt;ernst@cron-it.de&gt;

        * Fixed bug #3729: Roll-over (RO) on a GMENU in IE didn't work with xhtml_strict

    2007-04-18  Dmitry Dulepov  &lt;dmitry@typo3.org&gt;

        * Fixed: t3lib_BEfunc::getRecord() did not free recordset. This can cause memory leaks if persistent mysql connections are used

    2007-04-05  Martin Kutschker  &lt;martin.t.kutschker@blackbox.net&gt;

        * Made debug logging of user-supplied SQL queries possible in t3lib_db.

    2007-04-04 Andreas Otto &lt;andreas.otto@dkd.de&gt;

        * Fixed bug #5411: A directory handle was not correclty used.
