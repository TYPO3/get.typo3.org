RELEASE NOTES FOR TYPO3 4.0.2
=============================

This document describes all the important information for the TYPO3
release 4.0.2 that where not mentioned in the official article on
typo3.org (https://typo3.org/documentation/article/release-notes-402/)

Changelog
---------

    2006-09-11  Michael Stucki  &lt;michael@typo3.org&gt;

        * Release of TYPO3 4.0.2
        * Fixed a tiny security problem in indexed search (for details, see https://typo3.org/teams/security/security-bulletins/typo3-20060911-1/)

    2006-09-08  Michael Stucki  &lt;michael@typo3.org&gt;

        * Updates to NEWS.txt
        * Fixed #4165: Link to TSconfig and TSref not working. Thanks to Andreas Wolf for providing a patch!

    2006-09-04  Michael Stucki  &lt;michael@typo3.org&gt;

        * Fixed bug #1268: plainMailEncoded not working with charset conversion

    2006-09-02  Martin Kutschker  &lt;martin.t.kutschker@blackbox.net&gt;

        * Fixed #4141: config.spamProtectEmailAddresses does not encrypt "9" digits correctly
        * Web&gt;List localization view did not handle "edit marked" for translation records

    2006-09-01 Ingmar Schlecht  &lt;ingmar@typo3.org&gt;

        * Feature #529: Filled static_tsconfig_help with new content of core documents! Thanks a lot to Stephane Schitter for extracting the new data from the references!

    2006-09-01  Michael Stucki  &lt;michael@typo3.org&gt;

        * Fixed bug: Creation of sys_refindex table was not possible if $TYPO3_CONF_VARS[SYS][multiplyDBfieldSize] was set.
        * Indexed Search: Fixed bug #3994: OpenOffice.org files cannot be indexed by class.external_parser.php
        * Indexed Search: Fixed bug #4093: PHP warning if indexed_search search word contains a front slash

    2006-08-31  Ernesto Baschny &lt;ernst@cron-it.de&gt;

        * Fixed bug #4035/3971: Error message when uploading one or two files in file-browser (BE)

    2006-08-31  Ernesto Baschny &lt;ernst@cron-it.de&gt;

        * Feature #4131: Respects label_alt setting in some more places (especially labels pointing to MM tables)

    2006-08-31  Wolfgang Klinger &lt;wolfgang@stufenlos.net&gt;

        * Feature #3026: Text change for the 'Quality' label

    2006-08-25  Michael Stucki  &lt;michael@typo3.org&gt;

        * Fixed bug #4076: Skin creates invalid HTML markup

    2006-08-24  Michael Stucki  &lt;michael@typo3.org&gt;

        * Fixed bug #1236: 404 error while using the new content wizard
        * Fixed bug #3909: TYPO3_SSL does not detect valid SSL session
        * Fixed bug #3973: pageNotFound_handling=TRUE is interpreted as URL

    2006-08-23  Michael Stucki  &lt;michael@typo3.org&gt;

        * Fixed bug #3960: Display correct version number in Install Tool (only when authenticated)
        * Fixed bug #4073: Extension manager doesn't find extensions if the search string contains a trailing space
        * Fixed bug #3990: $BE_USER property "disableTabInTextarea" is not respected

    2006-08-19  Dmitry Dulepov  &lt;typo3@accio.lv&gt;

        * Fix bug 4037: Link from Google AdWords fails due to wrong alias handling

    2006-08-19 Ingmar Schlecht  &lt;ingmar@typo3.org&gt;

        * Partly fixed #4013: New records in non-default language are displayed in list-module in localization view too now even if they don't have a parent record in the default language.

    2006-08-17 Ingmar Schlecht  &lt;ingmar@typo3.org&gt;

        * Added text to Update Wizard informing about the change of the default values of "config.inlineStyle2TempFile" and "config.removeDefaultJS" depending on compatVersion &gt;= 4.0

    2006-08-04 Wolfgang Klinger &lt;wk@plan2.net&gt;

        * Fix bug #3160: IFSUB is not true if the parent page is a shortcut page

    2006-07-31  Michael Stucki  &lt;michael@typo3.org&gt;

        * Release of TYPO3 4.0.1
        * Updates to NEWS.txt (thanks to Martin Kutschker)
        * Changed version requirements for t3skin (problems in combination with TYPO3 4.0.1)

<Category:ReleaseNotes/TYPO3_4.0.x> [Category:TYPO3
4.0](Category:TYPO3_4.0 "wikilink") <Category:2006>
