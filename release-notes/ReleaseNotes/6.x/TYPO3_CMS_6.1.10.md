Release Notes for TYPO3 CMS 6.1.10
==================================

This document contains information about TYPO3 CMS 6.1.10 which was
released on July 8th, 2014.

News
----

This release is a bug fix release.

Notes
-----

This is part of a combined release of TYPO3 CMS 4.5.35, 6.1.10 and
6.2.4.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    d6d5e8c5b0e3baa37bcb4f6d2f47eb18  blankpackage-6.1.10.tar.gz
    abc5aab0ec979e27bcdb8c17e52a6678  blankpackage-6.1.10.zip
    38c1d4227e7598b3809163a37206c9cb  dummy-6.1.10.tar.gz
    ba33546d96274f86f43449f920335925  dummy-6.1.10.zip
    84711283b296ec81d402c190dcc60c07  typo3_src+dummy-6.1.10.zip
    312144646c1162b46effa35dc13e00ca  typo3_src-6.1.10.tar.gz
    8d4c16d9b21fcf79794e5ba0a6357374  typo3_src-6.1.10.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[6.1.9](TYPO3_CMS_6.1.9 "wikilink"):

    2014-07-08  17950cc                  [RELEASE] Release of TYPO3 6.1.10 (TYPO3 Release Team)
    2014-07-08  b1c86f2  #48939,#49055   [BUGFIX] Movements pollute colPos value of content elements (Nicole Cordes)
    2014-07-07  10b853d  #48943,#31637   [BUGFIX] TCA: handle select renderMode=tree with minitems=1 AND maxitems=1 (Alexander Bigga)
    2014-07-07  a33b537  #58463          [BUGFIX] Set internalUploadMap on upload in ExtendedFileUtility (Marc Bastian Heinrichs)
    2014-07-07  316ba85  #59664          [BUGFIX] Wrong image reference handling during flexform copying (Alexey Gafiulov)
    2014-07-06  3e4879b  #59642          [BUGFIX] Suggest wizard doesn't work in page flexforms (Bernhard Kraft)
    2014-07-06  900b11b  #51189          [BUGFIX] Remove non-needed URL parameter for standard search (Tomita Militaru)
    2014-07-02  5adc991  #59813          [BUGFIX] Fix usergroup condition in user TSconfig (Markus Klein)
    2014-07-02  d6ee5a6  #31757          [BUGFIX] Create workspace label placeholder that matches field conditions (Sascha Egerer)
    2014-06-29  656dd15  #59979          [BUGFIX] Fix unit tests after latest PHP changes (Helmut Hummel)
    2014-06-29  0a3ec65                  [TASK] Improve travis notifications to channels (Helmut Hummel)
    2014-06-29  5e0c3de  #59978          [TASK] Reset phpunit to 3.7 version (Anja Leichsenring)
    2014-06-28  16cd7eb  #59392          [BUGFIX] Gifbuilder: Fix image-mask-functionality (Stefan Neufeind)
    2014-06-28  af3380f  #58763          [TASK] Add a function for clearing the rootline caches (Oliver Klee)
    2014-06-22  6269258  #58728          Revert "[BUGFIX] Inaccessible pages on shortcuts/PageNotFound handler" (Helmut Hummel)
    2014-06-21  20734be  #59773          [BUGFIX] Remove misspelled setting rootlevel for sys_file_collection (Marc Bastian Heinrichs)
    2014-06-21  d4c9e04  #59344          [BUGFIX] Fix empty globalString LIT condition comparison (Marc Bastian Heinrichs)
    2014-06-20  b81d415  #49036          [BUGFIX] Treat link handler links as internal URLs (Alexander Stehlik)
    2014-06-20  50d36b8  #30244          [BUGFIX] Followup to "system locale when indexing" (Markus Klein)
    2014-06-20  b029113  #30244          [BUGFIX] Use system locale when indexing external documents (Jigal van Hemert)
    2014-06-19  7f4cc74  #59423          [BUGFIX] Pass field name variable to flexform DS utility (Claus Due)
    2014-06-13  5dba6de  #56823          [BUGFIX] Extensionmanager does not show error messages on update failure (Philipp Gampe)
    2014-06-13  15ffdb2  #59458          [BUGFIX] Erroneous date sorting in File List (Francois Suter)
    2014-06-12  43e5e4c  #25188          [BUGFIX] sys_news on login with twice hsc (Alexander Opitz)
    2014-06-06  ce83838  #59324          [BUGFIX] Fix command description (Mathias Brodala)
    2014-06-06  0f9bd66  #37467          [BUGFIX] getIndpEnv('TYPO3_SSL') fails to detect reverseProxyIp (Jan-Erik Revsbech)
    2014-06-05  b211478  #59364          [BUGFIX] Illegal string offset 'uid' in TypoScriptFrontendController (Robert Vock)
    2014-06-05  66bf424  #59277          [BUGFIX] Warning in SearchController (Christian Zenker)
    2014-06-04  2c8a428  #59343          [BUGFIX] Fix frontend unit tests if executed standalone (Helmut Hummel)
    2014-06-03  cd81ccb  #59185          [BUGFIX] DataHandler::log() must not return NULL (Markus Klein)
    2014-06-03  9576c32  #59302          [BUGFIX] Fix wrong JS function name in RTE (Markus Klein)
    2014-06-03  d7919b0  #59034          [BUGFIX] Fix double ? in eID url for encryption key (Markus Klein)
    2014-05-29  34f254b  #58910          [BUGFIX] Flexform element title is cropped to hardcoded length (Sebastian Michaelsen)
    2014-05-29  9164025  #59087          [BUGFIX] Fix redirect to install tool in new installations (Markus Klein)
    2014-05-28  3e6e8ec  #57063          [BUGFIX] Parent language is not applied to new child records (David Greiner)
    2014-05-26  e0be125  #59059          [BUGFIX] New content elements are always stored on pid 0 (Nicole Cordes)
    2014-05-23  003c662  #52272          [BUGFIX] Alternative implementations for view helpers do not work (Marc Bastian Heinrichs)
    2014-05-22  94f1e32  #58936          [BUGFIX] Wrong HTML in locallang_csh_pages.xlf (Markus Klein)
    2014-05-22  f954a79  #39035          [BUGFIX] TCA tree fail to load with IRRE (Xavier Perseguers)
    2014-05-22  b908b7d  #56986          [BUGFIX] Fix description of userHomePath and groupHomePath (Marc Bastian Heinrichs)
    2014-05-22  f0ac518  #57809          [BUGFIX] Properly check existence of array item (Markus Klein)
    2014-05-22  203c1eb  #16472          [BUGFIX] Inaccessible pages on shortcuts/PageNotFound handler (Alexander Opitz)
    2014-05-22  420b5c8  #59022          [BUGFIX] Fix failing unit tests for HTTP host check in CLI mode (Helmut Hummel)
    2014-05-22  2b0b9ad                  [TASK] Set TYPO3 version to 6.1.10-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_6.1.x> [Category:TYPO3
6.1](Category:TYPO3_6.1 "wikilink") <Category:2014>
