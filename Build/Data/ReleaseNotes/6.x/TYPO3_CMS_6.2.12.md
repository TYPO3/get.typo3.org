Release Notes for TYPO3 CMS 6.2.12
==================================

This document contains information about TYPO3 CMS 6.2.12 which was
released on April 16th, 2015.

News
----

This release is a bug fix release.

Known issue with outdated extensions
------------------------------------

Extensions may ship an upgrade wizard to help you migrate your
configuration to the latest version when major changes are introduced.

When loading the list of local extensions, the Extension Manager checks
for each and every if such an upgrade wizard is available and, if so, if
it needs to be run; that is, if the upgrade wizard icon should be shown.

If you experience a 500 error while loading the Extension Manager, it is
very likely due to to an outdated extension and your PHP error log may
show an error similar to

    Got error 'PHP message: PHP Fatal error:  require_once(): Failed opening required 'PATH_t3libclass.t3lib_scbase.php'
    (include_path='..../typo3/contrib/pear/:.:/usr/share/php:/usr/share/pear')
    in /path/to/typo3/sysext/extensionmanager/Classes/Utility/UpdateScriptUtility.php(111) : eval()'d code on line 25\n',

If this happens, you should simply manually unload the corresponding
faulty extension by marking it as “inactive” in
`typo3conf/PackageStates.php` and then update the extension to the
latest version available in TER.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    ae2bff15c479e8260aa7eef637872973  typo3_src-6.2.12.tar.gz
    140e6980f01d0fce330d9204415a32af  typo3_src-6.2.12.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[6.2.11](TYPO3_CMS_6.2.11 "wikilink"):

    2015-04-16  012f31e                  [RELEASE] Release of TYPO3 6.2.12 (TYPO3 Release Team)
    2015-04-14  ad23774  #65117          [TASK] EM: Update extension to latest possible (Alexander Opitz)
    2015-04-14  7477185  #66410          [BUGFIX] Store dependency errors before further dependency tests (Nicole Cordes)
    2015-04-14  07be3df  #65506          [BUGFIX] Re-add parsing for list elements (Nicole Cordes)
    2015-04-13  bebf919  #62184          [BUGFIX] Invalid file identifier with GIFBUILDER (Xavier Perseguers)
    2015-04-13  5a15c87  #63675          [BUGFIX] Cache results of explodeSoftRefParserList() (Stephan Großberndt)
    2015-04-13  eeaf6d9  #66208          [BUGFIX] Handle post_max_size = 0 (Markus Klein)
    2015-04-13  934e4e1  #66243          [BUGFIX] Write references for FAL relations (Nicole Cordes)
    2015-04-13  225eb71  #65980          [BUGFIX] indexed_search: Correct js for section titles (Tymoteusz Motylewski)
    2015-04-13  c2cbc8e  #58003          [BUGFIX] IndexedSearch: Fix various issues in extbase plugin (Robert Vock)
    2015-04-13  2451486  #52126,#57129   [FOLLOWUP][BUGFIX] Fix readable output for type "group" and MM-tables (Xavier Perseguers)
    2015-04-13  c73d3d4  #52126,#57129   [BUGFIX] Fix readable output for type "group" and MM-tables (Georg Ringer)
    2015-04-10  670bb70  #66347          [BUGFIX] Use title property for File Links (Mathias Brodala)
    2015-04-10  b724d60  #58800          [BUGFIX] Prevent extension download if disabled (Nicole Cordes)
    2015-04-10  e1bdf78  #65480          [BUGFIX] Compare field names without configuration (Nicole Cordes)
    2015-04-10  e400018  #22167          [BUGFIX] Automatic scrolling of editing form when inserting paragraph (Andreas Fernandez)
    2015-04-10  c58ba3e  #66263          [BUGFIX] Respect access method with updater in EM (Jigal van Hemert)
    2015-04-09  b57bf36  #17774          [BUGFIX] Use less memory in CLI lowlevel_refindex (Christian Weiske)
    2015-04-09  5538ff4  #66338          [BUGFIX] Skip nonRelationTables in lowlevel_refindex CLI script (Christian Weiske)
    2015-04-09  de6f536  #65829          [BUGFIX] Cancel button "id" in workspaces contains a typo (Pierre Boivin)
    2015-04-08  e12a261  #66270          [BUGFIX] Only downscale images in ProcessedFile::CONTEXT_IMAGEPREVIEW (Frans Saris)
    2015-04-08  9371564  #65654          [BUGFIX] Error code 1238108067 is used twice (Xavier Perseguers)
    2015-04-08  75f50dd  #58782          [TASK] Add a signal after importer init in ImportExportUtility (Marc Bastian Heinrichs)
    2015-04-08  07c2094  #16773          [BUGFIX] Indexed_search: add CSSsufix to title class (Tymoteusz Motylewski)
    2015-04-08  917ea76  #65126          [BUGFIX] Fix grouping of file references in FlexForms of workspaces (Stephan Großberndt)
    2015-04-06  2a03fac  #65848          [BUGFIX] Hooks/Signals cannot be used during extension install (Oliver Hader)
    2015-04-04  acde441  #66033          [BUGFIX] Replace split_fileref() by pathinfo() in ResourceStorage (Frans Saris)
    2015-04-04  6c9dcb6  #66268          [BUGFIX] Add imageMagickIdentify fallback to ImageInfo::getImageSizes() (Frans Saris)
    2015-04-03  2049732  #65520          [BUGFIX] Handle missing relations gracefully (Frans Saris)
    2015-04-02  3d380ef  #66229          [TASK] Better structure for .gitignore file (Markus Klein)
    2015-04-01  2a00b45  #59224          [BUGFIX] Do not fix uniqueInPid for empty values (Markus Klein)
    2015-03-31  05ee513  #66085          [BUGFIX] Link to file not editable anymore (Wouter Wolters)
    2015-03-31  973cadf  #65941          [BUGFIX] Check for existing types before binding (Andreas Fernandez)
    2015-03-31  b08cf78  #66083          [BUGFIX] Re-enable absolute external links (Nicole Cordes)
    2015-03-31  19dde7d  #65746          [BUGFIX] Correct typo of ActionService->getDataHandler() (Stephan Großberndt)
    2015-03-31  c1bb631  #63670          [BUGFIX] DataHandler: Cache TCA field eval array (Stephan Großberndt)
    2015-03-31  af44141  #64627          [BUGFIX] Fix whitespace replacement for older PCRE versions (Andreas Fernandez)
    2015-03-30  34dd118  #65965          [BUGFIX] Allow value 0 in textfields with eval int (Markus Klein)
    2015-03-30  93080d3  #66148          [BUGFIX] Invalid syntax for swapping arguments in sprintf() (Xavier Perseguers)
    2015-03-30  dea2c66  #60851          [BUGFIX] System>Configuration: Fix search in (Michael Oehlhof)
    2015-03-30  f0f0f10  #66146          [BUGFIX] Mixed-up original and XCLASS class names in reports (Xavier Perseguers)
    2015-03-29  92fcab3  #65341          [BUGFIX] EM: Update extension versions not in TER (Alexander Opitz)
    2015-03-28  0afd642  #65871          [BUGFIX] Show commands for GDlib tests (Georg Ringer)
    2015-03-28  67f03fd  #65727          [BUGFIX] Avoid cObject to create a temporary file (Benjamin Mack)
    2015-03-28  26c4f4b  #62189          [BUGFIX] Correctly render menu link for translated shortcuts (Markus Klein)
    2015-03-27  aacde3b  #66068          [BUGFIX] Use current time for new sys_log entries (Frans Saris)
    2015-03-26  9aaba26  #65836          [BUGFIX] Fix order of generator meta tag (Wouter Wolters)
    2015-03-26  d643a32  #63927          [BUGFIX] Last-Modified response header broken by design (Patrick Broens)
    2015-03-26  10779eb  #62080          [BUGFIX] Do not overwrite page title of USER plugins (Markus Klein)
    2015-03-26  a335865  #66028          [BUGFIX] Use early return in cObj::getImgResource (Oliver Hader)
    2015-03-25  1f98368  #66023          [BUGFIX] Performance issue with caching empty text menus (Oliver Hader)
    2015-03-25  bd8c701  #59589          [BUGFIX] Check folder permission for default upload folder (Nicole Cordes)
    2015-03-25  71277f9  #65983          [BUGFIX] FileList uses wrong basefolder for isWithinFolder (Frans Saris)
    2015-03-24  a8900b7  #65936          [BUGFIX] Allow Video Text Tracks files (Andreas Fernandez)
    2015-03-24  5d6d720  #65974          [BUGFIX] TCAtree must use BackendUtility::getRecordTitle() (Georg Ringer)
    2015-03-24  d7cd1a8  #65804          [BUGFIX] helhum/class-alias-loader version in composer.json (Alexander Stehlik)
    2015-03-23  a84d942  #65817          [BUGFIX] indexed_search fix advanced search select boxes in extbase plugin (Tymoteusz Motylewski)
    2015-03-22  80b566f  #65844          [TASK] Use LOWER instead of LCASE (Andreas Fernandez)
    2015-03-19  d6659aa  #65853          [BUGFIX] RTE: Paste structure does not remove on[event] attributes (Stanislas Rolland)
    2015-03-19  5ef2236  #65792          Revert "[BUGFIX] SelectViewHelper must respect option(Value|Label)Field for arrays" (Anja Leichsenring)
    2015-03-19  3d95bf2  #65693          [BUGFIX] RTE: Paste structure fails in Google Chrome (Stanislas Rolland)
    2015-03-19  0671b4c  #60998          [FOLLOWUP][BUGFIX] Fix PHP warning in shouldFieldBeOverlaid() (Markus Klein)
    2015-03-19  04effb2  #62100          [BUGFIX] Set session cookie when FE_SESSION_KEY is used (Nils Heuermann)
    2015-03-18  0708920  #65816          [BUGFIX] Indexed_search: Fix access to 'blind' settings in extbase plugin (Tymoteusz Motylewski)
    2015-03-18  0a6dfcd  #65806          [TASK] Improve deprecation message of raw query result (Christian Kuhn)
    2015-03-17  5d2c0b3                  [TASK] Set TYPO3 version to 6.2.12-dev (TYPO3 Release Team)


