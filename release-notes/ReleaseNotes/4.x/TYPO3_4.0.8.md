RELEASE NOTES FOR TYPO3 4.0.8
=============================

This document contains information about TYPO3 version 4.0.8 which was
released on December 10, 2007.

News
----

This release fixes a security issue in the Backend module of the
indexed\_search extension (severity: low) as well three other small
bugs.

For details about the security issue, see:

<https://typo3.org/teams/security/security-bulletins/typo3-20071210-1/>

Download
--------

<https://typo3.org/download/>

Upgrading
---------

Nothing special to do.

Changelog
---------

<changelog>2007-12-10 Ingmar Schlecht ingmar@typo3.org

`   * Release of TYPO3 4.0.8`\
`       * (security) Fixed a low-severity SQL injection in the modfunc2 of indexed_search (only exploitable by BE users, and severity `\
`         limited because addslashes() was already applied to the value - yet not within a quoted string) (Thanks to Henning Pingel `\
`         for findind the issue and Andreas Otto for the fix)`

2007-11-09 Benjamin Mack mack@xnos.org

`       * (bugfix) Fixed Image Generation bug. Call in t3lib_div now uses the IM wrapper to render gifs/pngs`

2007-09-05 Thorsten Kahler thorsten.kahler@dkd.de

`   * Fixed bug #4160: Moving content elements in frontent editing mode causes crash`\
`   * Disable versioning in clickMenu if BE user doesn't have access to the versioning module`

2007-08-23 Andreas Otto andreas.otto@dkd.de

`       * (trivial) Fixed bug #4888: Invalid argument supplied for foreach()`

</changelog>

<Category:ReleaseNotes/TYPO3_4.0.x> [Category:TYPO3
4.0](Category:TYPO3_4.0 "wikilink") <Category:2007>
