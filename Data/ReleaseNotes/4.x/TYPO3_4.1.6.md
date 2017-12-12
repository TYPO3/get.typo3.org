RELEASE NOTES FOR TYPO3 4.1.6
=============================

This document contains information about TYPO3 version 4.1.6 which was
released on March 3, 2008.

News
----

TYPO3 4.1.6 is entirely a bugfix release. A total of 21 issues has been
resolved ranging from subjects like Inline Relational Record Editing
(IRRE) over Indexed Search (Backend module DBAL compliance) to the CSV
export of the list module. Also, the central command line invocation
script cli\_dispatch.phpsh which is used to start up things like the
Indexed Search Crawler or the Clean Up Tools (tx\_lowlevel\_cleaner) has
been fixed to work flawlessly on Windows systems now. Issues with
ignoring extension constraints in the Extension Manager have also been
resolved.

Thanks to the core developers and other community members involved in
the bugfixing!

Download
--------

<https://typo3.org/download/>

Upgrading
---------

Nothing special to do, no database updates necessary (as usual, for
patch level releases).

Changelog
---------

<changelog> 2008-03-03 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Release of TYPO3 4.1.6`

2008-03-03 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fixed bug #6663: Unserialized objects not debugged properly (patch by Francois Suter)`

2008-03-01 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Fixed bug #5838: cli_dispatch.phpsh doesn't work on windows platforms`

2008-02-28 Oliver Hader &lt;oh@inpublica.de&gt;

`   * Fixed bug #5252: Pages with `“`Hide`` ``in`` ``menu`”` checked use normal page icon in list module (Thanks to Andreas Wagner)`\
`   * Fixed bug #7693: New page wizard ignores `“`hide`` ``in`` ``menu`”` flag for page icons (Thanks to Christian Kuhn)`

2008-02-26 Oliver Hader &lt;oh@inpublica.de&gt;

`   * Fixed bug #7523: Description of properties is missing in install tool (Thanks to Steffen Kamper)`

2008-02-23 Oliver Hader &lt;oh@inpublica.de&gt;

`   * Fixed bug #6885: Nested USER_INT, COA_INT, etc. objects are not rendered`

2008-02-22 Benjamin Mack &lt;mack@xnos.org&gt;

`   * Fixed bug #7445: Malformed translated locallang causes PHP crash (Thanks to Francois Suter)`

2008-02-22 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Fixed bug #7158: DBAL fixes to Indexed Search backend module (Thanks to Moreno Feltscher)`

2008-02-17 Martin Kutschker &lt;martin.t.kutschker@blackbox.net&gt;

`   * Fixed bug #5693: options.additionalPreviewLanguages is showing wrong records for table pages (Thanks to Helmut Hummel)`

2008-02-16 Benjamin Mack &lt;mack@xnos.org&gt;

`   * Fixed bug #5303: t3skin - pilup.gif not the same style as pildown.gif`\
`   * Fixed bug #7454: Category Treeview in BE-Forms has gap between 2 lines (Thanks to Stefan Geith)`

2008-02-04 Oliver Hader &lt;oh@inpublica.de&gt;

`   * Fixed bug #7029: tslib_cObj uses deprecated function call_user_method`\
`   * Fixed bug #7371: Query generator does not accept dates in where condition`

2008-01-31 Jeff Segars &lt;jeff@webempoweredchurch.org&gt;

`   * Fixed bug #6902: Add an imagespace to Text w/ Image when image width is not available. Thanks to Georg Ringer.`

2008-01-27 Oliver Hader &lt;oh@inpublica.de&gt;

`   * Fixed bug: Overriding TCA properties with TSconfig does not work with array`

2008-01-15 Benjamin Mack &lt;mack@xnos.org&gt;

`   * Fixed bug #7148: CSV Export Output in List Module`

2008-01-15 Oliver Hader &lt;oh@inpublica.de&gt;

`   * Fixed bug #7126: IRRE - Child records are shown floated and not as blocks in Safari`

2008-01-10 Jeff Segars &lt;jeff@webempoweredchurch.org&gt;

`   * Fixed bug #5421: Problem ignoring extension constraints`

2008-01-08 Benjamin Mack &lt;mack@xnos.org&gt;

`   * Followup for bug #1678: limit to language; made the variable names better (Thanks to Helmut Hummel)`

2008-01-06 Oliver Hader &lt;oh@inpublica.de&gt;

`   * Post-cleanup of bug #5994: IRRE - RTEhtmlarea is not show in child records if parent has no RTE`

2007-12-26 Oliver Hader &lt;oh@inpublica.de&gt;

`   * Fixed bug #6651: IRRE - Button for creating new records disappeared on nested child records if a parent record reached the maxitems value`

2007-12-21 Oliver Hader &lt;oh@inpublica.de&gt;

`   * Fixed bug #6007: IRRE - Child records with image fields are not shown in m:n disposal`

2007-12-17 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Fixed bug #6996: Versioning in clickmenu was unavailable for non-admins due to a problem of an earlier bugfix #4160 (Thanks to Helmut Hummel for the correction)`

</changelog>

<Category:ReleaseNotes/TYPO3_4.1.x> [Category:TYPO3
4.1](Category:TYPO3_4.1 "wikilink") <Category:2008>
