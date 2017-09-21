Release Notes for TYPO3 4.4.9
=============================

This document contains information about TYPO3 version 4.4.9 which was
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

    3ce7bf1159d437ecc3ffae8dbd78c38d  dummy-4.4.9.tar.gz
    98a2ae0ea6437af025110ffe1d73699d  dummy-4.4.9.zip
    c75fce71f5f9da47604833d71052c092  typo3_src+dummy-4.4.9.zip
    16728ee23e916558b9bfcde1b2bbe9e2  typo3_src-4.4.9.tar.gz
    d1de445b8908d8d1a8352c8829541eb6  typo3_src-4.4.9.zip

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

    2011-07-27  5233451            [RELEASE] Release of TYPO3 4.4.9 (TYPO3 v4 Release Team)
    2011-07-27  cf83434  #25307    [BUGFIX] Ext Direct API lacks the possibility of adding access control (Stefan Galinski)
    2011-07-27  a69919e  #24577    [BUGFIX] Untrusted GP data is unserialized in wizard_colorpicker.php and view_help.php (Christian Kuhn)
    2011-07-27  16bee0d  #26876    [BUGFIX] Unprivileged backend user can read arbitrarily from database (Helmut Hummel)
    2011-07-27  366c5eb  #28189    [BUGFIX] XSS in TYPO3 core when using typolink.parameter JS-Popup Window (Marco Bresch)
    2011-07-27  ddad153  #24535    [BUGFIX] XSS in tcemain flash message (Georg Ringer)
    2011-07-27  4b16e73  #24519    [BUGFIX] XSS in Recycler (Steffen Gebert)
    2011-07-27  627056a  #24497    [BUGFIX] XSS in browse_links (Georg Ringer)
    2011-07-27  7579908  #20775    [BUGFIX] t3lib_div::removeXSS does not remove some XSS (Jigal van Hemert)
    2011-07-27  1c0c361  #21589    [BUGFIX] XSS in admin panel (Georg Ringer)
    2011-07-27  4142682  #24457    [BUGFIX] The delay if wrong credentials are provided during backend login can be circumvented (Helmut Hummel)
    2011-07-27  96c4b41  #24456    [BUGFIX] Information disclosure during backend login (Helmut Hummel)
    2011-07-26  bafaf54  #28218    [BUGFIX] Value 0 in integer fields is not shown in List module anymore (Benjamin Mack)
    2011-07-21  9f82fd8  #25604    [BUGFIX][CONF] Changed default sorting of fe_users in BE (Mario Rimann)
    2011-07-07  19273e3  #27936    [BUGFIX] Date of 1970-01-01 is shown in unset date fields (Benjamin Mack)
    2011-06-20  a2e6373  #22928    [BUGFIX] FE-Error "NO entry in the $TCA-array..." (Nicole Cordes)
    2011-06-14  e7686f4  #27446    [TASK] Integrate external projects Fluid and Extbase as Git submodules (Oliver Hader)
    2011-06-12  ac879a6  #23917    [BUGFIX][saltedpasswords] Failed backend logins not not logged (Torben Hansen)
    2011-06-10  7a20fbd  #5538     [BUGFIX] sysext recycler: Missing space-character in info-popup (Stefan Neufeind)
    2011-06-06  9785fa2  #25725    [BUGFIX] pageNotFound_handling error with relative paths (Markus Klein)
    2011-06-06  5b0ec0d  #23036    [BUGFIX] Read of uninitialized variable in t3lib_div::normalizeIPv6 (Stefan Neufeind)
    2011-06-04  7222a41  #5539     [BUGFIX] sysext recycler: Typo in language label (Stefan Neufeind)
    2011-06-04  a497f54  #26360    [BUGFIX] Fixed typo in TBE_browser_recordList (Mario Rimann)
    2011-06-03  5cb730f  #27173    [TASK] Overwork typo3/sysext/README.txt (Ernesto Baschny)
    2011-06-01  fb92c1d  #26914    [BUGFIX] Fix typo "PHP sessions availiable" in Install Tool (Stephan Großberndt)
    2011-05-24  2583ac6            [TASK] Set TYPO3 version to 4.4.9-dev (TYPO3 v4 Release Team)
    2011-05-24  89468b4            [RELEASE] Release of TYPO3 4.4.8 (TYPO3 v4 Release Team)

<Category:ReleaseNotes/TYPO3_4.4.x> [Category:TYPO3
4.4](Category:TYPO3_4.4 "wikilink") <Category:2011>
