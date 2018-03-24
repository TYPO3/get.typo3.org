Release Notes for TYPO3 CMS 7.6.17
==================================

This document contains information about TYPO3 CMS 7.6.17 which was
released on April 18th, 2017.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    c506a5daab0500bf718da66927344389  typo3_src-7.6.17.tar.gz
    2dd0ffef0e04a2435d75e25a2ebfaf35  typo3_src-7.6.17.zip

SHA256 checksums
----------------

    854f212264b773f8adad1726ce4e5e554e2723c4379fbe05171754dd0dc02e9c  typo3_src-7.6.17.tar.gz
    ba0e1ec55f5f4254a3f77a1e34b4137e4c06144c27768ca7708aa5fb1f814a57  typo3_src-7.6.17.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.\
It might be required to clear all caches; the “important actions”
section in the TYPO3 Install Tool offers the accordant possibility to do
so.

Changes
-------

Here is a list of what was fixed since
[7.6.16](TYPO3_CMS_7.6.16 "wikilink"):

    2017-04-18  2e9bee3                  [RELEASE] Release of TYPO3 7.6.17 (TYPO3 Release Team)
    2017-04-17  dc0e7ac  #80834          [BUGFIX] Use correct value for EU flag in sys_language records (Daniel Goerz)
    2017-04-07  ce65225  #80598          [TASK] Correct view webpage link anchor in list module (Gianluigi Martino)
    2017-04-07  8b5b768  #77855          [BUGFIX] Allow file replace for editors (Helmut Hummel)
    2017-04-05  ab5d414  #80016          [TASK] Avoid unused xpath when parsing locallang.xml (Stephan Großberndt)
    2017-04-03  1e24129  #48544          [BUGFIX] Do not devlog bad code smells of core classes (Markus Klein)
    2017-04-03  c83eb59  #80663          [BUGFIX] Inline references are bound to versioned page (Oliver Hader)
    2017-04-03  f7031cb  #78731          [BUGFIX] Fix check to determine RTEhtmlarea is in fullscreen mode (Wouter Wolters)
    2017-04-03  ccb681a  #80593          [BUGFIX] Use English labels if browser's preferred language is English (Xavier Perseguers)
    2017-04-03  67d7f48  #80645          [TASK] Update readme copyright date to 2017 (Dennis)
    2017-04-02  e06a140  #80638          [BUGFIX] MM relations of localizations not resolved in functional tests (Oliver Hader)
    2017-03-31  bb0a0ea  #80566          [BUGFIX] Fix scheduler task logging in case of an exception (Christian Wolff)
    2017-03-31  ada2c5e  #80589          [BUGFIX] FAL: Correctly iterate folder content with offset (Markus Klein)
    2017-03-30  4a7c5a9  #79635          [BUGFIX] Coalesce hook calls in DataHandler::processRemapStack() (Thomas Hohn)
    2017-03-30  8ce9a1e  #80494          [TASK] Integrate tests for DataHandler hook invocations (Oliver Hader)
    2017-03-29  e6b3d3c  #80481,#80366   [BUGFIX] JS: Fix FormEngine initialization (Markus Klein)
    2017-03-29  1c4caf2  #80518          [BUGFIX] Fix namespace declaration for checkboxes in plain form mails (Ronny Sternecker)
    2017-03-28  687f899  #80209          [BUGFIX] Check correct variable in BrowseLinksController (Christer Vindberg)
    2017-03-28  7550197  #80459          [BUGFIX] JS: Invert dependency definition for FormEngine and Validation (Markus Klein)
    2017-03-27  3bbb228  #79063          [BUGFIX] Avoid remapping empty value in checkValueForInline (Claus Due)
    2017-03-26  799ab98  #80428          [BUGFIX] Decrease z-index for disabled fields in FormEngine (Andreas Fernandez)
    2017-03-24  c8a7743  #80416          [BUGFIX] Start click binding only after DOM is ready (Frank Naegler)
    2017-03-23  9ee00d2  #80180          [BUGFIX] Ensure correct sorting of extension configuration (Nicole Cordes)
    2017-03-22  53ba10e  #80387          [BUGFIX] Fix tooltip after changing permissions (Josef Glatz)
    2017-03-22  d4c4b4b  #80159          [BUGFIX] Add support for target attribute to form viewhelper (Susanne Moog)
    2017-03-20  cbcd299  #80354          [BUGFIX] Check if install tool enable file exists before removing it (Michael Stucki)
    2017-03-17  e610b7f  #78985          [BUGFIX] Escape dots of flexform field names (Georg Ringer)
    2017-03-15  89355ab  #80274          [TASK] Return to content element after un-/hide (Josef Glatz)
    2017-03-15  854c781  #80273          [TASK] Return to content element after closing (Georg Ringer)
    2017-03-15  ff40632  #80166          [BUGFIX] Recordlist shows content of wrong folder (Stefan Fruhen)
    2017-03-15  83e2a79  #79551          [BUGFIX] Localize tt_content_defValues in new content element wizard (Eric Chavaillaz)
    2017-03-15  f951878  #80181          [BUGFIX] Do not overwrite inlineData in mergeResult (Helmut Hummel)
    2017-03-15  224bb0d  #80122          [BUGFIX] Missing max value for title in file reference TCA (Torben Hansen)
    2017-03-14  236e194  #80275          [BUGFIX] colPos_list gets respected in language view (Tobias Kretschmann)
    2017-03-13  0f2028a  #80100          [TASK] Bypass fetch of database record if already loaded (Xavier Perseguers)
    2017-03-10  423b1de  #80224          [TASK] Make InvalidXmlFileException for language files more verbose (Andreas Fernandez)
    2017-03-07  a0b7e26  #80114          [BUGFIX] EM: Highlighting for insecure/outdated extensions (Josef Glatz)
    2017-03-06  fce8159  #80150          [BUGFIX] Respect TypoScript code after not matched include (Helmut Hummel)
    2017-03-04  98d93c7  #80075          [BUGFIX] Incorrect usages of string as array in QueryGenerator (Christer Vindberg)
    2017-03-04  d6bc301  #80110          [BUGFIX] Felogin: Only wrap header/message if not empty (Benni Mack)
    2017-03-03  0137d08  #80099          [BUGFIX] Bind live search click event to search field container (Andreas Fernandez)
    2017-03-03  025030f  #78767,#79205   [BUGFIX] Avoid stripping tags for generating diffs (Georg Ringer)
    2017-02-28  a19070c  #79938          [TASK] Update autocomplete JS widget for BE (Markus Klein)
    2017-02-28  cb59e3f  #79644          [BUGFIX] Set file size to 0 instead to string in ImportExport (Georg Ringer)
    2017-02-28  89ff91a                  [TASK] Set TYPO3 version to 7.6.17-dev (TYPO3 Release Team)


