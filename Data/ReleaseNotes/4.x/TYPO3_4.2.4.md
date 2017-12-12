RELEASE NOTES FOR TYPO3 4.2.4
=============================

This document contains information about TYPO3 version 4.2.4 which was
released on January 20, 2009.

News
----

to be completed...

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    093f71bca94986ffc8a475ebd04febfc &nbsp;dummy-4.2.4.tar.gz
    81d0932f756f2e88dfc6283eb2502bef &nbsp;dummy-4.2.4.zip
    82ce83b665e3b19a823442549c138ddf &nbsp;typo3_src-4.2.4.tar.gz
    77618813f69739ddfb78ca9f03971eae &nbsp;typo3_src-4.2.4.zip
    c21a4eac25ad1f8c7ce0ff31d3ac50fc &nbsp;typo3_src+dummy-4.2.4.zipp

Source:
<http://sourceforge.net/project/shownotes.php?group_id=20391&release_id=655060>

Upgrading
---------

You will need to create a **new encryption key**! See [TYPO3 Security
Bulletin](https://typo3.org/teams/security/security-bulletins/typo3-sa-2009-001/),
section “Vulnerable subcomponent \#1” for instructions.

**WARNING:** If you use Firefox 3 or Epiphany 2 you have to be careful:

Clear the configuration cache **before** you start with the update (if
you don't you can still physically delete the
*typo3conf/temp\_CACHED\_\** files). And you must delete the cookies of
the TYPO3 BE in your browsers. Otherwise you won't be able to login into
the backend any more, because you get logged out by a timeout
immediately. You must not only delete the cookies for your specific
domain (say www.domain.com), but also the “wildcard” cookies (e.g.
“.domain.com” or “\*.domain.com”).\

Changelog
---------

    2009-01-20  Ingo Renner  ingo@typo3.org

        * Release of TYPO3 4.2.4

    2009-01-20  Steffen Kamper  info@sk-typo3.de

        * Fixed bug #9774: Incorrect validation of allowed classes in RTE transformation

    2009-01-20  Ingmar Schlecht  ingmar@typo3.org

        * Fixed bug #10186: Time shifting (again) in datetime fields (followup to Bug#8746; thanks to Ernesto Baschny)
        * Fixed bug #10146: Session fixation vulnerability in user authentication (thanks to the TYPO3 Security Team and especially Marcus Krause)
        * Fixed bug #10159: XSS vulnerability in workspace module (thanks to the TYPO3 Security Team and especially Marcus Krause)

    2009-01-20  Ingo Renner  ingo@typo3.org

        * Added missing license statement for using the "Silk" icon set of Mark James according to Creative Commons Attribution 2.5
        * Fixed bug #10134: XSS vulnerability in sysext indexed_search (thanks to the TYPO3 Security Team and especially Marcus Krause)
        * Fixed bug #10133: Command execution in sysext indexed_search (thanks to the TYPO3 Security Team and especially Marcus Krause)
        * Fixed bug #10154: Weak encryption key generation vulnerability in sysext install (thanks to the TYPO3 Security Team, and especially Marcus Krause)
        * Fixed bug #9705: Moving page in WS will hide it from editors due to missing access settings of placeholder (thanks to Franz-Xaver Koch and Michael Stucki)

    2009-01-19  Stanislas Rolland  typo3@sjbr.ca

        * Fixed bug #9935: htmlArea RTE: enableWordClean on paste does not work when hidden button is not in toolbar

    2009-01-19  Steffen Kamper  info@sk-typo3.de

        *  Fixed bug #10183: [felogin] redirect doesn't work with return_url

    2009-01-18  Francois Suter  francois@typo3.org

        * Cleanup #10125: Replace deprecated function calls in sysext indexed_search (thanks to Markus Krause)

    2009-01-17  Oliver Hader  oliver@typo3.org

        * Fixed bug #7677: Constants are not correctly substituted on some PHP5 distributions

    2009-01-16  Steffen Kamper  info@sk-typo3.de

        * Fixed bug #9307: Remove an obsolete check for disable_exec_function in filelist
        * Fixed bug #10157: t3lib/config_default.php textfile_ext should be updated to include xml and other text types

    2009-01-15  Steffen Kamper  info@sk-typo3.de

        * Fixed bug #10057: hide/unhide page causes error when done via the context menu
        * Fixed bug #10158: change of url only (com = org)
        * Fixed bug #8787: titles length in list module (thanks to Stefano Cecere)

    2009-01-14  Stanislas Rolland  typo3@sjbr.ca

        * Fixed bug #10140: htmlArea RTE: Alignment of td's and th's in out-of-the-box installation

    2009-01-14  Steffen Kamper  info@sk-typo3.de

        * Fixed bug #10143 spamProtectEmailAddresses_atSubst does not work correctly if linktext contains email address with uppercase charachters (thanks to Helmut Hummel)

    2009-01-14  Dmitry Dulepov  dmitry@typo3.org

        * Fixed bug #10116: Remove/protect adodb testfiles (thanks to Marcus Krause)

    2009-01-13  Dmitry Dulepov  dmitry@typo3.org

        * Fixed bug #10109: Google reports duplicate title tag
        * Fixed bug #10120: Add .buildpath to svn:ignore

    2009-01-12  Oliver Hader  oliver@typo3.org

        * Fixed bug #8991: IRRE - Sorting icons of inline records are in wrong order

    2009-01-11  Oliver Hader  oliver@typo3.org

        * Fixed bug #5630: Install tool removes dots from admin usernames (thanks to Stefano Kowalke)
        * Fixed bug #10090: Hanging record sets in t3lib_TCEmain

    2009-01-11  Steffen Kamper  info@sk-typo3.de

        * Fixed bug #9825: Copy / Cut icons don't respect t3skin: drag'n'drop in pagetree (credits to Susanne Moog)

    2009-01-09  Oliver Hader  oliver@typo3.org

        * Fixed bug #10083: Constant styles.content.imgtext.separateRows is not defined

    2009-01-08  Stanislas Rolland  typo3@sjbr.ca

        * Fixed bug #9596: htmlArea RTE does not work in IRRE subelements

    2009-01-08  Oliver Hader  oliver@typo3.org

        * Fixed bug #9893: Syntax error in TCA types definitions of tt_content

    2009-01-08  Benjamin Mack  benni@typo3.org

        * Fixed bug #9194: Bug: wrong handling of 'is_in' list in TCA element type 'input' (Thanks to Vladimir Podkovanov)

    2009-01-07  Francois Suter francois@typo3.org

        * Fixed bug #10075: Rootline cache does not work in multilingual websites

    2009-01-05  Steffen Kamper  info@sk-typo3.de

        * Fixed bug #10055: Add contrib directory to list of allowed paths (thanks to Dan Osipov)
        * Fixed bug Fixed bug #9506: label uid shows not working
        * Fixed bug #10056: Misspelling english word "guesbooks"

    2009-01-03  Dmitry Dulepov  dmitry@typo3.org

        * Fixed bug #10047: typo3/contrib is not prefixed with config.absRefPrefix

    2009-01-01  Benjamin Mack  benni@typo3.org

        * Fixed bug #8361: Stage change notification emails not send when publishing from Live workspace (Thanks to Andreas Wolf)

    2008-12-30  Francois Suter francois@typo3.org

        * Fixed bug #10035: Function index not up to date in class t3lib_div

    2008-12-29  Ernesto Baschny  ernst@cron-it.de

        * Fixed bug #8746: Date/time field problem with timezone shifting when using the "+NN", "d" or "d+NN" shortcuts
        * Fixed bug #10033: Date/time field shortcut "d" doesn't work on already filled date fields since 4.2.0
        * Fixed issue that on a datetime field entering just a "date" wasn't possible: It is now, and time will be set to "0:00"

    2008-12-29  Steffen Kamper  info@sk-typo3.de

        * Fixed bug #9773: Fallback for skinImg having forceFileExtension
        * Fixed bug #8205: Shortcut ends in parse_url-error
        * Fixed bug #10022: Pagecontent/Hidden has no effect

    2008-12-25  Dmitry Dulepov  dmitry@typo3.org

        * Fixed bug #10012: TYPO3 generates incorrect ETag

    2008-12-24  Francois Suter francois@typo3.org

        * Fixed bug #9948: Label rm.clearCache_pages was abusively removed from core lang file

    2008-12-23  Dmitry Dulepov  dmitry@typo3.org

        * Fixed bug #9999: Setting [BE][compressionLevel]=true causes problems

    2008-12-23  Steffen Kamper  info@sk-typo3.de

        * Fixed bug #9810: ClearCacheMenu doesn't work when click on icon

    2008-12-22  Steffen Kamper  info@sk-typo3.de

        * Fixed bug #9977: Extensions class.ext_update.php scripts are executed even when extension isn't loaded

    2008-12-20  Steffen Kamper  info@sk-typo3.de

        * Fixed bug #8952: Flags are missing
        * Fixed bug #8525: added Korean flag

    2008-12-18  Stanislas Rolland  typo3@sjbr.ca

        * Fixed bug #9772: t3lib_parsehtml_proc does not provide Page TSConfig to user-defined RTE transformations

    2008-12-18  Steffen Kamper  info@sk-typo3.de

        * Fixed bug #7265: Submodules of Web module can't work with mod.php and the _DISPATCH system

    2008-12-18  Dmitry Dulepov  dmitry@typo3.org

        * Fixed bug #9947: gzip compression does not work in BE at all
        * Fixed bug #9741: wrong anchor links with absRefPrefix option enabled (tanks to Stefan Galinski)

    2008-12-18  Ernesto Baschny  ernst@cron-it.de

        * Fixed bug #9511: getHtmlTemplate should use resolveBackPath. Fixes bug for extension BE modules using templates in certain environments (symlinked typo3/ dir) (thanks to Steffen Gebert)

    2008-12-10  Steffen Kamper  info@sk-typo3.de

        * Fixed bug #9836: RTE TSconfig lost when uploading files or creating folders

    2008-12-09  Steffen Kamper  info@sk-typo3.de

        * Fixed bug #9915: Typing error in tslib_content ($gifCreateor = $gifCreator)

    2008-12-08  Steffen Kamper  info@sk-typo3.de

        * Fixed bug #9890: sectionIndex in Menu doesn't work

    2008-12-03  Martin Kutschker  masi@typo3.org

        * Fixed bug #6415: preg_replace error on PHP 5.2 sometimes resulting in empty pages (thanks to Francois Suter)

    2008-12-02  Stanislas Rolland  typo3@sjbr.ca

        * Updated htmlArea RTE version to 1.7.8 for TYPO3 4.2.4
        * Fixed bug #9878: htmlArea RTE: js error may be raised when loading through IRRE Ajax call

    2008-12-01  Dmitry Dulepov  dmitry@typo3.org

        * Fixed bug #9790: class.gzip_encode.php fails with open_basedir restrictions

    2008-12-01  Steffen Kamper  info@sk-typo3.de

        * Fixed bug #9864: felogin: Drop languages from locallang.xml

    2008-11-29  Steffen Kamper  info@sk-typo3.de

        * Fixed bug #9862: missing class for checkbox in t3editor

    2008-11-27  Dmitry Dulepov  dmitry.dulepov@gmail.com

        * Fixed bug #8944: PHP-Error in class.em_index.php on line 4333

    2008-11-25  Steffen Kamper  info@sk-typo3.de

        * Fixed bug #8561: Checkboxes and labels are aligned badly if in one line
        * Fixed bug #9725: double enquote in t3lib_htmlmail of returnPath

    2008-11-24  Dmitry Dulepov  dmitry@typo3.org

        * Fixed bug #9806: Mountpoints do not work across domain boundaries

    2008-11-22  Steffen Kamper  info@sk-typo3.de

        * Fixed bug #9798: Don't show fe_users password in page module

    2008-11-13  Steffen Kamper  info@sk-typo3.de

        * Fixed bug #8903: redirect url is not passed with get/post method

    2008-11-12  Stanislas Rolland  typo3@sjbr.ca

        * Fixed bug #9755: Incorrect initialization sequence in class browse_links

<Category:ReleaseNotes/TYPO3_4.2.x> [Category:TYPO3
4.2](Category:TYPO3_4.2 "wikilink") <Category:2009>
