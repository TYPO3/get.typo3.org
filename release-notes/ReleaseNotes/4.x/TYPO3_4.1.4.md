RELEASE NOTES FOR TYPO3 4.1.4
=============================

This document contains information about TYPO3 version 4.1.4 which was
released on December 10, 2007.

News
----

A lot of bugs have been fixed with this release and a minor security
hole has been fixed as well.

The most notable changes were:

-   Fixed a low-severity SQL injection in the modfunc2 of
    indexed\_search
    -   The issue was only exploitable by BE users
    -   The severity of the issue was limited because addslashes() was
        already applied to the value - yet not within a quoted string
    -   For details see [the
        bulletin](https://typo3.org/teams/security/security-bulletins/typo3-20071210-1/)
-   Translated language files are not loaded
-   A couple of issues with HTMLArea have been fixed
-   Fixes of “Limit to Language” functionality
-   Fixes regarding Inline Relational Record Editing (IRRE):
    -   IRRE - RTEhtmlarea is not show in child records if parent has no
        RTE
    -   IRRE - Combination mode doesn't save new child records correctly
    -   IRRE - Palettes are not rendered correctly on nesting records
        using the same table
-   Flexforms didn't resolve sheets correctly causing “Cannot use string
    offset as an array” error message

Download
--------

<https://typo3.org/download/>

Upgrading
---------

Nothing special to do, no database updates necessary (as usual, for
patch level releases).

Changelog
---------

    2007-12-10  Ingmar Schlecht  &lt;ingmar@typo3.org&gt;

        * Release of TYPO3 4.1.4
            * (security) Fixed a low-severity SQL injection in the modfunc2 of indexed_search (only exploitable by BE users, and severity limited because addslashes() was already applied to the value - yet not within a quoted string) (Thanks to Henning Pingel for findind the issue and Andreas Otto for the fix)

    2007-12-09  Martin Kutschker  &lt;martin.t.kutschker@blackbox.net&gt;

        * Fixed bug #5985: PHP warning in t3lib_div::getUrl when safe_mode or open_basedir is set
        * Fixed bugs with option $includeHeaders in t3lib_div::getUrl: Option $requestHeaders was ignored, it didn't work with https and had a wrong default port for https

    2007-12-09  Oliver Hader  &lt;oh@inpublica.de&gt;

        * Fixed bug #5994: IRRE - RTEhtmlarea is not show in child records if parent has no RTE

    2007-12-07  Dmitry Dulepov  &lt;dmitry@typo3.org&gt;

        * Fixed bug #6903: Translated language files are not loaded

    2007-12-06  Benjamin Mack  &lt;mack@xnos.org&gt;

        * Fixed bug #1678: limit to language; still can delete and move content element (Thanks to Helmut Hummel)

    2007-12-02  Dmitry Dulepov  &lt;dmitry@typo3.org&gt;

        * Fixed bug #6844: DB compare fails

    2007-12-04  Jeff Segars  &lt;jeff@webempoweredchurch.org&gt;

        * Fixed bug #6114: t3lib_extMgm::addToAllTCATypes ignores type 0
        
    2007-11-30  Oliver Hader  &lt;oh@inpublica.de&gt;

        * Fixed bug #5602: spamProtectEmailAddresses_atSubst is not recognized correctly

    2007-11-24  Oliver Hader  &lt;oh@inpublica.de&gt;

        * Fixed bug #6817: Files with extension xml are ignored as resource of a template

    2007-11-23  Ernesto Baschny  &lt;ernst@cron-it.de&gt;

        * Fixed bug #6240: pageNotFound_handling returns empty page if specified URL cannot be retrieved. Credit to Helmut Hummel for the fix.

    2007-11-23  Oliver Hader  &lt;oh@inpublica.de&gt;

        * Fixed bug #5956: TCA eval required on date field does not work

    2007-11-09  Benjamin Mack  &lt;mack@xnos.org&gt;

            * Fixed image generation bug: Call in t3lib_div now uses the IM wrapper to render gifs/pngs

    2007-11-07  Oliver Hader  &lt;oh@inpublica.de&gt;

        * Fixed bug #5772: IRRE - Combination mode doesn't save new child records correctly
        * Fixed bug #6456: IRRE - Palettes are not rendered correctly on nesting records using the same table

    2007-11-02  Ingmar Schlecht  &lt;ingmar@typo3.org&gt;

        * Bug #6561 revised: Registers IMAGE_NUM and IMAGE_NUM_CURRENT contained incorrect array indizes (Thanks to Helmut Hummel)

    2007-11-02  Stanislas Rolland  &lt;stanislas.rolland@fructifor.ca&gt;

        * Fixed bug 6640: htmlArea RTE tool bar is not updated in IE when up or down arrow is pressed

    2007-11-01  Stanislas Rolland  &lt;stanislas.rolland@fructifor.ca&gt;

        * Fixed bug 6476: htmlArea RTE incorrectly nests tags on return key in FF
        * Update version number of rtehtmlarea to 1.5.5

    2007-10-30  Jeff Segars  &lt;jeff@webempoweredchurch.org&gt;

        * Fixed bug #6618: Web-&gt;List: Add title to versioning symbol in extended view    (Thanks to Christian Kuhn)

    2007-10-29  Jeff Segars  &lt;jeff@webempoweredchurch.org&gt;

        * Fixed bug #5338: Error installing suggested extensions

    2007-10-29  Dmitry Dulepov  &lt;dmitry@typo3.org&gt;

        * Fixed bug #6581: Fatal error in TCEForms: Fatal error: Cannot use string offset as an array
        * Fixed bug #6565: T3DataStructure with sheet references will not show sheetTitle,sheetDescription and sheetShortDescr
        * Fixed bug #5347: Flexforms dosen't resolve sheets
        * Fixed bug #3969: Missing sheets inclusion in flexforms?

    2007-10-27  Ingmar Schlecht  &lt;ingmar@typo3.org&gt;

        * Fixed bug #1940: "OPEN DOCUMENTS" causes 404 error (Thanks to Christian Trabold)
        * Fixed bug #5082: Clean up a nested htmlspecialchars() in class.db_list_extra.inc (Thanks to Christian Kuhn)
        * Fixed bug #6561: imgMax and imgStart (IMGTEXT) not working properly (Thanks to Helmut Hummel)

    2007-10-26  Stanislas Rolland  &lt;stanislas.rolland@fructifor.ca&gt;

        * Fixed bug 5031: htmlArea RTE incorrectly processes col tags and default proc options disallow col and colgroup tags

<Category:ReleaseNotes/TYPO3_4.1.x> [Category:TYPO3
4.1](Category:TYPO3_4.1 "wikilink") <Category:2007>
