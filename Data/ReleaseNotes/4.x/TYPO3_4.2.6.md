Release Notes for TYPO3 4.2.6
=============================

This document contains information about TYPO3 version 4.2.6 which was
released on February 10, 2009.

News
----

This release is a bugfix release. It contains important security fixes!

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    eb6f557a2970105a6a659d0ef1a92cec  typo3_src-4.2.6.tar.gz
    9f33fcee17e9e9d0795ad369730f7f5c  typo3_src-4.2.6.zip
    af264b7bcaedcd48aa047c3f22f6d4e6  typo3_src+dummy-4.2.6.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

    2009-02-10  Ingo Renner  <ingo@typo3.org>

        * Release of TYPO3 4.2.6

    2009-02-10  Michael Stucki  <michael@typo3.org>

        * Fixed bug #10364: Jumpurl feature allows to access arbitrary files on a server (thanks to the TYPO3 Security Team and especially Marcus Krause)
        * Fixed bug #10298: Various XSS issues in the BE user admin module (thanks to Jelmer de Hen and Dmitry Dulepov)

    2009-02-08  Ingo Renner  <ingo@typo3.org>

        * Fixed bug #9861: Second page of results in list-module with ordering flaw (credits Christian Kuhn)

    2009-02-07  Stanislas Rolland  <typo3@sjbr.ca>

        * Updated htmlArea RTE version to 1.7.9 for TYPO3 4.2.6

    2009-02-07  Dmitry Dulepov  <dmitry@typo3.org>

        * Fixed bug #10368: Wrong clear.gif path in dyntabs

    2009-02-05  Francois Suter  <francois@typo3.org>

        * Fixed bug #10346: l10n_display option abusively hides field for "All" languages when set to defaultAsReadonly

    2009-02-05  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #9266: Bug: strcmp() with array as parameter in t3lib_div::linkThisScript() produces warnings with PHP 5.3 (Thanks to Niels Pardon)

    2009-02-04  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #10352: htmlARea RTE: Shift+Enter raises exception in Safari

    2009-02-03  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9894: htmlArea RTE: copy/cut/paste with hotkeys does not work in some browsers/settings
        * Follow-up for bug #10326: htmlArea RTE: Cleaning on paste broken in older versions of Mozilla/Firefox
        * Fixed bug #10337: htmlArea RTE: Allow Clipboard Helper does not work with Firefox 3

    2009-02-03  Francois Suter  <francois@typo3.org>

        * Fixed bug #1527: t3lib_svbase: Method init returns wrong value  (thanks to Stefano Kowalke and Michael Miousse)

    2009-02-03  Jeff Segars  <jeff@webempoweredchurch.org>

        * Fixed bug #9600: Frontend Edit Panel is not compatible with subdomains and RealURL (thanks to Xavier Perseguers)

    2009-02-02  Ingo Renner  <ingo@typo3.org>

        * Fixed order of fields in TCEforms for table pages, type external URL which was inconsitant to the other types

    2009-02-01  Ingo Renner  <ingo@typo3.org>

        * Fixed list minus bullet icon in t3skin, was missing a solid background

    2009-02-01  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #10323: htmlArea RTE: hotkey CTRL+0 is not honoured
        * Fixed bug #10324: htmlArea RTE: Configured hotkeys are not honoured in Safari
        * Fixed bug #10326: htmlArea RTE: Cleaning on paste broken in older versions of Mozilla/Firefox

    2009-01-30  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #7123: Select wizard doesn't work in Safari (Thanks to IsmaÃ«l Bidau)

    2009-01-30  Francois Suter  <francois@typo3.org>

        * Fixed bug #10304: Links in the warning box are not visible as links (thanks to Georg Ringer)

    2009-01-30  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug #10031: Icon in "text w/ picture" and "picture" does not change.
        * Fixed bug #10045 follow-up: removed call to non existent function
        * Fixed bug #10045 BUG missleading Errormessage with emtpy COA (thanks to Ingo Schmitt)

    2009-01-28  Benjamin Mack  <benni@typo3.org>

        * Fixed bug #10241: DB check ->Full search ->Advanced query always includes deleted field (Thanks to Christian Kuhn)

    2009-01-27  Steffen Kamper  <info@sk-typo3.de>

        * Fixed bug  #10178: Toolbar menu fails if there are no menu items

    2009-01-26  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9904: htmlArea RTE: RTE.default.buttons.table.properties.borderStyle.removeItems is not honored
        * Fixed bug #9905: htmlArea RTE: Table properties: Removing headers leaves an empty fieldset

    2009-01-24  Stanislas Rolland  <typo3@sjbr.ca>

        * Fixed bug #9965: htmlArea RTE: IE jumps down to last RTE input
        * Fixed bug #9785: htmlArea RTE: Disabling images in RTE still leaves the toolbar button

[Category:ReleaseNotes/TYPO3
4.2.x](Category:ReleaseNotes/TYPO3_4.2.x "wikilink") [Category:TYPO3
4.2](Category:TYPO3_4.2 "wikilink") <Category:2009>
