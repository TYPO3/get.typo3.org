Release Notes for TYPO3 4.3.12
==============================

This document contains information about TYPO3 version 4.3.12 which was
released on July 27, 2011.

News
----

This release is a combined bugfix and security release.

Notes
-----

Due to several security issues found in the TYPO3 Core, there was a
combined release of TYPO3 4.3.12, 4.4.9 and 4.5.4.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2011-001/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    1d00b7474f056308d699477a96be8411  dummy-4.3.12.tar.gz
    142c86a25208d22d8e389a83332efbd7  dummy-4.3.12.zip
    4f6a087aec8bc6569e3f635dcaa260d3  typo3_src+dummy-4.3.12.zip
    4e83accb5c84d49c9c1ae169373b7346  typo3_src-4.3.12.tar.gz
    1218e40fba46f3929cd6a54db087529c  typo3_src-4.3.12.zip

Upgrading
---------

### Changed rendering instructions for headlines

**Important Note:** Due to a change in the rendering instructions of
css\_styled\_content you might have to modify your TypoScript templates
when doing the update.

You have to take actions, if you have adjusted the fontTag property of
the provided TypoScript in lib.stdheader.10.1.fontTag (or in
lib.stdheader.10.*2*.fontTag and so on). If your headlines are somehow
else passed through *fontTag* by some instructions in your template, you
also have to check if the headlines are still displayed correctly.

If the previous section applies to you, this might result in unexpected
rendering of headlines after the update.

Instead of using *lib.stdheader.10.1.fontTag*, headline rendering is now
handled through *dataWrap* as *lib.stdheader.10.1.dataWrap* (and so on).
Make sure to update your TypoScript before the update and check the
website rendering after it!

Example:

    # Old
    lib.stdheader.10.1.insertData = 1
    lib.stdheader.10.1.fontTag = <h1{register:headerStyle}{register:headerClass}>|</h1>
    # New
    lib.stdheader.10.1.dataWrap = <h1{register:headerStyle}{register:headerClass}>|</h1>

### Apart from that

Apart from that the usual upgrading procedure applies; no database
updates are necessary.

Changelog
---------

    2011-07-27  277d945            [RELEASE] Release of TYPO3 4.3.12 (TYPO3 v4 Release Team)
    2011-07-27  b1ab0e2  #24577    [BUGFIX] Untrusted GP data is unserialized in wizard_colorpicker.php and view_help.php (Christian Kuhn)
    2011-07-27  875a385  #26876    [BUGFIX] Unprivileged backend user can read arbitrarily from database (Helmut Hummel)
    2011-07-27  31053be  #28189    [BUGFIX] XSS in TYPO3 core when using typolink.parameter JS-Popup Window (Marco Bresch)
    2011-07-27  9eb03df  #24535    [BUGFIX] XSS in tcemain flash message (Georg Ringer)
    2011-07-27  9912005  #24519    [BUGFIX] XSS in Recycler (Steffen Gebert)
    2011-07-27  bfef86b  #24497    [BUGFIX] XSS in browse_links (Georg Ringer)
    2011-07-27  750aea8  #20775    [BUGFIX] t3lib_div::removeXSS does not remove some XSS (Jigal van Hemert)
    2011-07-27  1375cc0  #21589    [BUGFIX] XSS in admin panel (Georg Ringer)
    2011-07-27  105bc43  #24457    [BUGFIX] The delay if wrong credentials are provided during backend login can be circumvented (Helmut Hummel)
    2011-07-27  d9411b5  #24456    [BUGFIX] Information disclosure during backend login (Helmut Hummel)
    2011-07-26  c92a3ba  #28218    [BUGFIX] Value 0 in integer fields is not shown in List module anymore (Benjamin Mack)
    2011-07-07  0b3babb  #27936    [BUGFIX] Date of 1970-01-01 is shown in unset date fields (Steffen Gebert)
    2011-06-23  eadf9d3  #22928    [BUGFIX] FE-Error "NO entry in the $TCA-array..." (Nicole Cordes)
    2011-06-14  043bc20  #27446    [TASK] Integrate external projects Fluid and Extbase as Git submodules (Oliver Hader)
    2011-05-10  6e69527  #26738    [TASK] Use external Core Project DBAL as Git submodule (Oliver Hader)
    2011-05-10  8383bc0  #26725    [TASK] Use external Core Project version as Git submodule (Oliver Hader)
    2011-05-10  6307176  #26725    [TASK] Use external Core Project version as Git submodule (Oliver Hader)
    2011-04-22  77cef3f            [TASK] Remove file SVNreadme.txt (Steffen Gebert)
    2011-04-16  b2014fd  #23134    [BUGFIX] Flexformfield "Forgot Password Message" in felogin does not work (Steffen Mueller)
    2011-04-11  c02c720            [FEATURE] add .gitignore for common file exclusions (Peter Niederlag(office))
    2011-02-23  ebe9886            Updating version number to  4.3.12-dev after release of 4.3.11 (ohader)

<Category:ReleaseNotes/TYPO3_4.3.x> [Category:TYPO3
4.3](Category:TYPO3_4.3 "wikilink") <Category:2011>
