RELEASE NOTES FOR TYPO3 4.0.7
=============================

This document contains information about TYPO3 version 4.0.7 which was
released on July 16, 2007.

News
----

In this release some bugs and issues have been adressed which might be
of relevance in many installations:

-   Page-TSconfig now works together with Workspaces (Bug \#2544)
-   gzip content encoding is now compatible with IE7 (Bug \#4623)
-   The colorpicker wizard now works in flex forms (Bug \#2052)
-   The page-type external url has been improved to prevent breaking
    links in the frontend (Bug \#209)

Download
--------

<https://typo3.org/download/>
<http://sourceforge.net/project/showfiles.php?group_id=20391&package_id=14557&release_id=523613>

MD5 checksums
-------------

    53c1b857fed1b2eba4970fac2264d02d  dummy-4.0.7.tar.gz
    c01a38569cfed31a5bdf78a3ff762eb3  dummy-4.0.7.zip
    71b455b5ea559eb949b27e84f88d8a20  typo3_src+dummy-4.0.7.zip
    e09b04db5bddbd833bbd067b5d53e24d  typo3_src-4.0.7.tar.gz
    4c0471b3655fe8687e2693e67c8a3d6d  typo3_src-4.0.7.zip

Source:
<http://sourceforge.net/project/shownotes.php?release_id=523613&group_id=20391>

Upgrading
---------

Nothing special to do.

Changelog
---------

<changelog>2007-07-16 Michael Stucki michael@typo3.org

`   * Release of TYPO3 4.0.7`\
`   * Fixed possible XSS in workspace/version modules (requires valid BE login / patch by Christian Kuhn)`\
`   * Removed possible display of phpinfo() (requires bug in extension to be unveiled)`

2007-07-16 Martin Kutschker martin.t.kutschker@blackbox.net

`   * Fixed bug #3834: possible abuse of t3lib_formmail`\
`   * IPmaskList check is triggered in CLI mode (thanks to Tobias Rohrle)`

2007-07-06 Michael Stucki michael@typo3.org

`   * Fixed bug #3544: RTE-config in PageTS-config not loaded when in draft-workspace`\
`   * Fixed bug #4917: Wrong links inside mounted page with overlay (thanks to Melanie Meyer / Franz Ripfel)`

2007-07-02 Oliver Hader oh@inpublica.de

`   * Fixed bug #4623: Content encoding with x-gzip not possible in IE7`

2007-05-10 Thorsten Kahler thorsten.kahler@dkd.de

`   * Fixed bug #209: require field URL in page-type `“`External`` ``URL`”

2007-05-09 Andreas Otto andreas.otto@dkd.de

`   * Fixed bug #2052: Color picker does not work properly in flex forms. Thanks to David Bruehlmeier for providing a patch and a testcase.`

2007-04-28 Andreas Otto andreas.otto@dkd.de

`   * Fixed bug #3649: Call to a member function formWidth() on object $GLOBALS['TBE_TEMPLATE'] instead on $GLOBALS['SOBE'].`

</changelog>

<Category:ReleaseNotes/TYPO3_4.0.x> [Category:TYPO3
4.0](Category:TYPO3_4.0 "wikilink") <Category:2007>
