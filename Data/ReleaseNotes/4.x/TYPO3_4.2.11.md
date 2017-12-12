Release Notes for TYPO3 4.2.11
==============================

This document contains information about TYPO3 version 4.2.11 which was
released on January 14, 2010.

News
----

This release is a bugfix release.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    2c8abd393482b0b16338d1f5df26fa4a  dummy-4.2.11.tar.gz
    f060a93dc7a4553327e094a4ea0702ae  dummy-4.2.11.zip
    389f2c0824d83e34ec4c64e5495aa1df  typo3_src-4.2.11.tar.gz
    7c845f54bbfeb77d01bcaf0c73c9b909  typo3_src-4.2.11.zip
    67217a91e36c299f1867811cf44d7a8f  typo3_src+dummy-4.2.11.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2010-01-14  Ingo Renner  <ingo@typo3.org>

        * Release of TYPO3 4.2.11

    2010-01-13  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #11968: Sporadic random Backend Logoffs / Add X-UA-Compatible flag (Thanks to Steffen Gebert)

    2010-01-09  Christian Kuhn  <lolli@schwarzbu.ch>

        * Fixed bug #12507: (Un)Install icon points to wrong extension in Opera (Thanks to Steffen Gebert)

    2010-01-06  Stanislas Rolland  <typo3@sjbr.ca>

        * Updated htmlArea RTE version to 1.7.14

    2010-01-05  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #12341: Image generation broken with PHPs safe_mode activated and GraphicsMagick (Thanks to Marcus Krause, Helmut Hummel and Bernhard Kraft)

    2010-01-04  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #12506: JSMENU does not respect mount point overlays (Thanks to Joerg Wagner)

    2009-12-25  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #5260: Function linkWrapFile() in file class.file_list.inc uses wrong PATH prefix

    2009-12-21  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #12505: JSMENU's showActive is broken (Thanks to Joerg Wagner)

    2009-12-19  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #13064: Deprecated function spliti for PHP5.3

    2009-12-13  Xavier Perseguers  <typo3@perseguers.ch>

        * Fixed bug #12072: Permanent login checkbox is not shown as expected
        * Fixed bug #13021: Mistyping prevents the CSV-export of the _PATH_field in List-View (thanks to Mathias Gisch)

    2009-12-11  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12782: htmlArea RTE: Editing a link title or target with Firefox 3 sometimes simply unlinks the link

    2009-11-30  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #12467: TYPO3 Inline User Manual is broken

    2009-11-25  Oliver Hader  <oliver@typo3.org>

        * Follow-up to bugfix #12581: Use FILTER_FLAG_SCHEME_REQUIRED constant in t3lib_div::isValidUrl()

    2009-11-24  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #12581: Pagetree frame shows HTTP 404 error

    2009-11-23  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #12500: Object does not support method calls - PHP 5.3 (thanks to Dan Osipov)

    2009-11-20  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12684: htmlArea RTE: Repeated character / backspacing is slow in Firefox

    2009-11-19  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12677: htmlArea RTE: Incorrect cursor position after backspace/delete in Firefox

    2009-11-17  Rupert Germann  <rupi@gmx.li>

        * Fixed bug #11937: Do not show PHP 5.3 E_DEPRECATED messages on productive systems

    2009-11-16  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12622: htmlArea RTE: Incorrect behaviour of last item of list in gecko browsers

    2009-11-15  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12597: htmlArea RTE: cursor position is not restored by undo/redo operations in Opera
        * Fixed bug #12421: htmlArea RTE: Paste is erratic in Opera 10 when server-based cleaning is enabled
        * Fixed bug #11362: htmlArea RTE: Cursor may not be put in list elements newly created in front of links
        * Updated htmlArea RTE version to 1.7.13

    2009-11-13  Oliver Hader  <oliver@typo3.org>

        * Fixed bug #12324: Page tree will not be shown in the TYPO3 backend
        * Follow-up to bugfix #12324: Renamed sanitizeBackEndUrl() to sanitizeLocalUrl() in t3lib_div

    2009-11-11  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12566: htmlArea RTE: Selecting element from status bar does not work in Safari
        * Fixed bug #12568: htmlArea RTE: Text pasted by Safari is wrapped in span or font tags

    2009-11-10  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12115: htmlArea RTE "Create link" button doesn't become clickable when using keyboard to select text in Safari/Chrome

    2009-11-09  Stanislas Rolland  <typo3@sjbr.ca>

        * Follow-up to #11847: htmlArea RTE displays empty editing area in Opera 10
        * Fixed bug #12534: htmlArea RTE: list creation looses text in Safari

    2009-11-06  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12481: AllowClipboard Helper Firefox extension does not work with FF 3.5

    2009-11-03  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #11876 and #12342: stripSlashesOnArray creates references where you want copies (in some PHP versions). Affects usage of _GP (e.g. in the Install Tool and some frontend extensions).

    2009-11-03  Tobias Liebig <mail_typo3@etobi.de>

        * Fixed bug #9513: t3editor bad line numbering

    2009-11-02  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #12331: htmlArea RTE plugins may not be loaded for multiple RTEs

    2009-10-29  Ernesto Baschny  <ernst@cron-it.de>

        * Fixed bug #12371: Warning issued on first load of install tool with open_basedir set

    2009-10-28  Dmitry Dulepov  <dmitry.dulepov@gmail.com>

        * Fixed bug #9795: Default values have no labels in the multiple select control inside the flexform
