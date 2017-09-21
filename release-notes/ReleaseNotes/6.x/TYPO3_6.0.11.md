Release Notes for TYPO3 CMS 6.0.11
==================================

This document contains information about TYPO3 CMS 6.0.11 which was
released on November 26th, 2013.

News
----

This release is a bug fix release.

Notes
-----

This is part of a combined release of TYPO3 CMS 4.5.31, 4.7.16, 6.0.11
and 6.1.6.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    c144630ba5649db72e5e9145a20dd9dc  blankpackage-6.0.11.tar.gz
    40c28a2c4787872530fed71334bbf2c3  blankpackage-6.0.11.zip
    1353758ab0c4dab89e8f7d5cb14d1be8  dummy-6.0.11.tar.gz
    2c294178e045ed639101eeb9b3caf354  dummy-6.0.11.zip
    88aba92f0de9f519e17cc2f13d50b09e  typo3_src+dummy-6.0.11.zip
    9add841b13d1c5f12bdb76dd9a8e0554  typo3_src-6.0.11.tar.gz
    76ab06121b2530383fe12a2c29bdad95  typo3_src-6.0.11.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[6.0.10](TYPO3_6.0.10 "wikilink"):

    2013-11-26  5e5f1d2                  [RELEASE] Release of TYPO3 6.0.11 (TYPO3 Release Team)
    2013-11-26  762cb0a  #53918          [BUGFIX] t3skin calls addIconSprite for each lang (Michiel Roos)
    2013-11-24  96944c0  #15958          [BUGFIX] Reload list module on clickmenu action (Bernhard Kraft)
    2013-11-21  9e2a0a1  #53802          [BUGFIX] Fix moving/copying files and folders between storages (Frans Saris)
    2013-11-21  487903a  #53844          [BUGFIX] Fix regression in ResourceCompressor (Markus Klein)
    2013-11-20  aed68c8  #53243          [BUGFIX] Filemtime / Filesize trigger warning (Tomita Militaru)
    2013-11-20  2857828  #53458          [BUGFIX] Fluid paginate widget wrong number of links (Klaas Johan Kooistra)
    2013-11-19  3d6f5be  #53773          [BUGFIX] Fix JS error in lang module (Markus Klein)
    2013-11-19  ea58bd5  #53750          [BUGFIX] Scheduler extension sql file is invalid (Michiel Roos)
    2013-11-19  055e6a5  #34544          [BUGFIX] fix javascript error "TBE_EDITOR not defined" in sys_action (Ralf Hettinger)
    2013-11-19  6c6582a  #51998          [BUGFIX] ExtDirect StateProvider should store all settings (Johannes Feustel)
    2013-11-19  9a5858d  #53746          [TASK] Optimization in AbstractViewHelper (Wouter Wolters)
    2013-11-18  464a804  #53707          [BUGFIX] Rename hook in VariableFrontend.php (Nicole Cordes)
    2013-11-18  ad98c0a  #53711          [BUGFIX] additionalAttributes for be.buttons.icon-VH misses hsc (Markus Klein)
    2013-11-15  d33b4eb                  Revert "[BUGFIX] EM: Fetch list as html, not as json" (Helmut Hummel)
    2013-11-14  ecd873f  #45724          [BUGFIX] FILES.folder does not work (Stefan Froemken)
    2013-11-14  2fef8ad  #51234          [BUGFIX] Move beuser property mappings to global scope (Philipp Gampe)
    2013-11-14  c9c7551  #17493          [BUGFIX] Fix broken edit icons on cType HTML (Stefan Neufeind)
    2013-11-13  c372d65  #25157,#45550   [BUGFIX] Distinguish unassigend columns and colPos 0 (Georg Ringer)
    2013-11-13  e6b77d8  #51918          [BUGFIX] Native date and datetime values do not consider timezone (Oliver Hader)
    2013-11-12  0e4f15a  #52926          [BUGFIX] Compressor resolves dots in filenames correctly (Christian Kuhn)
    2013-11-12  6163c42  #53115          [BUGFIX] T3editor: Make errors/exceptions show correctly (Stefan Neufeind)
    2013-11-12  4435311  #22136          [BUGFIX] Fix menu popup for all IE versions (Alexander Opitz)
    2013-11-12  53a5a1a  #52934          [BUGFIX] dataTables: Avoid sending cookie-data too often (Stefan Neufeind)
    2013-11-12  94c4d70  #53399          [BUGFIX] Wrong usage-text for cli_dispatch (Tomita Militaru)
    2013-11-12  f113773  #52904          [BUGFIX] Evaluator in JS fails with namespaces (Stefan Aebischer)
    2013-11-12  9678fc6  #53538          [BUGFIX] Make be.buttons.icon-ViewHelper extensible (Stefan Neufeind)
    2013-11-11  e9bc5e1  #52727          [TASK] Hard-coded labels in file collections (Tomita Militaru)
    2013-11-11  bc9a847  #37948          [BUGFIX] Correctly append additionalTreelistUpdateFields (Bart Dubelaar)
    2013-11-11  a8f0d86  #53423          [BUGFIX] EM: Fetch list as html, not as json (Stefan Neufeind)
    2013-11-11  6f4ae27  #48809,#51730,  [BUGFIX] Fix wrong handling of php and TYPO3 dependencies (Susanne Moog)
    2013-11-10  907d5b1  #52173          [BUGFIX] Correct storage selection (follow-up) (Ernesto Baschny)
    2013-11-09  b7a6f48  #53477          [TASK] Fix superfluous strlen() on constant strings (Steffen Ritter)
    2013-11-09  58f1fa5  #47040          [BUGFIX] Enable treeConfig overriding by Page TSconfig (Stefan Froemken)
    2013-11-09  cb14179  #53195          [BUGFIX] T3editor: Honour fileDenyPattern on saving included TS (Stefan Neufeind)
    2013-11-08  c3773a4  #29179          [BUGFIX] Escape title, extension, description of scheduler tasks (Tomita Militaru)
    2013-10-23  648018e  #31572          [BUGFIX] Exception using cObject FORM in TypoScript (Andreas Bouche)
    2013-10-18  8c21be4  #35073          [BUGFIX] Enable BE search for multiple mountpoints (Georg Ringer)
    2013-10-17  fe876a8  #52931          [TASK] Exclude central Modernizr from concatenation (Stefan Neufeind)
    2013-10-16  04e4a4b  #52529          [BUGFIX] Suppress empty tag names in output of array2xml (Markus Hoelzle)
    2013-10-16  ac2b59e  #52823          [BUGFIX] Preserve vendor name in refering request (Thomas Maroschik)
    2013-10-15  693b575  #52845          [BUGFIX] Moving folders fails (Oliver Hader)
    2013-10-15  85d0653  #50802          [BUGFIX] Only load folder contents if folder is initialised (Frans Saris)
    2013-10-15  38958f0  #52824          [BUGFIX] Superfluous usage of ObjectManagerException (Oliver Hader)
    2013-10-15  4ba140a  #51707          [FEATURE] Add getValidators to AbstractCompositeValidator (Stefan Froemken)
    2013-10-15  1156074  #52771          [BUGFIX] Use callback in preg_replace in RemoveXSS (Jigal van Hemert)
    2013-10-14  c577f9e  #52773          [BUGFIX] Detect unix-styled absolute paths on Windows systems (Nicole Cordes)
    2013-10-13  6cc1f7a  #52759          [BUGFIX] Object passed to date() (Xavier Perseguers)
    2013-10-12  f272d54  #52731          [TASK] Use 6.1 branch in travis-integration for travis (Christian Kuhn)
    2013-10-12  6cbf164  #52728          [BUGFIX] Use BackendUtility use statement (Anja Leichsenring)
    2013-10-12  13c6602  #52104          [BUGFIX] Wrong calculation of maximum value for checkbox fields (Nicole Cordes)
    2013-10-12  23b8d11  #52715          [BUGFIX] Prevent empty newline below scheduler-task-name (Stefan Neufeind)
    2013-10-11  a909546  #52708          [BUGFIX] DataMapFactory::resolveTableName must remove leading backslashes (Alexander Schnitzler)
    2013-10-11  5faa4da  #50912          [BUGFIX] BackendUtility::viewOnClick() called with non-integer (Oliver Hader)
    2013-10-11  13c5bf9  #51051          [BUGFIX] Clear_cache() must not consider page ids lower than 0 (Oliver Hader)
    2013-10-11  17fe304  #37611          [BUGFIX] Select available page when changing WS (Thorsten Kahler)
    2013-10-11  e30b70b  #52636          [BUGFIX] Copy records to target page before origin page is deleted (Timo Webler)
    2013-10-11  db7d3e5  #17551          [BUGFIX] Create workspace placeholder with processed field content (Sascha Egerer)
    2013-10-11  660e030  #36573          [BUGFIX] Add workspace overlay for fetched records. (Timo Webler)
    2013-10-11  7c837df  #37209          [BUGFIX] WS preview shows pages changes from all WS (Thorsten Kahler)
    2013-10-11  5aeddac  #52530          [BUGFIX] Delete modified record in WS just deletes WS version (Sascha Egerer)
    2013-10-11  f561b99  #37065          [BUGFIX] Don't show duplicates in workspace preview (Timo Webler)
    2013-10-10  b4b0b0e  #52178          [BUGFIX] Cannot upload an extension as zip (Xavier Perseguers)
    2013-10-07  31e44bd  #46845          [BUGFIX] Fix namespace in FileMountRepositoryTest (Marc Bastian Heinrichs)
    2013-10-07  a7da230  #49538          [BUGFIX] Fields of type file_reference are not properly indexed (Martin Borer)
    2013-10-07  388c02d  #52546          [BUGFIX] Missing closing tag in ElementBrowser (Philipp Gampe)
    2013-10-06  30d93b4  #50756          [FEATURE] Backport ClassNamingUtility (Stefan Neufeind)
    2013-10-05  d6a8e68  #52469          [TASK] Use instanceof comparison instead of string comparison (Benjamin Serfhos)
    2013-09-30  8e1ea88  #43540          [BUGFIX] TS is fetched from cache incorrectly sometimes (Dmitry Dulepov)
    2013-09-28  a2532bb  #51329          [BUGFIX] Initialize extension name in command requests (Alexander Stehlik)
    2013-09-28  7144eb5  #52346          [BUGFIX] Incomplete backup in AbstractUserAuthenticationTest (Christian Kuhn)
    2013-09-27  9c200ea  #52091,#51684   [BUGFIX] Check for string before using strlen (Kilian Hann)
    2013-09-27  128d147  #52045          [BUGFIX] EmConfUtility accesses non-arrays (Markus Klein)
    2013-09-27  9fa9f15  #51588          [BUGFIX] Clear cached menu by tag (Zbigniew Jacko)
    2013-09-27  30af6a5  #50437          [BUGFIX] Fix jumpToUrl()-Usage in Element Browser (Benjamin Pick)
    2013-09-26  77c69e7  #52266          [BUGFIX] groupFor-VH does not work with @lazy (Stefan Froemken)
    2013-09-26  3f0cc99  #50913          [BUGFIX] Fix PHP warning trigged in getAuthInfoArray() (Christian Finkemeier)
    2013-09-26  919541b  #52316          [BUGFIX] Fatal in DefaultConfiguration (Christian Kuhn)
    2013-09-26  0deefa0  #52305          [BUGFIX] Configure main extbase caches for unlimited entry lifetime (Christian Kuhn)
    2013-09-26  d00db27  #52295          [TASK] Use SimpleFileBackend for t3lib_l10n cache (Christian Kuhn)
    2013-09-25  d01851c  #52226          [BUGFIX] EM does not link to docs.typo3.org (Xavier Perseguers)
    2013-09-25  68bb292  #51116          [BUGFIX] Increase performance of exports for caches (Markus Klein)
    2013-09-25  3f8cd14  #52243          [BUGFIX] Remove duplicate exception code (Fabien Udriot)
    2013-09-24  7151ce0  #52173          [BUGFIX] Correct storage selection (common prefixes) (Ernesto Baschny)
    2013-09-24  0a80fb6  #52201          [BUGFIX] Fix broken Unit-test for #44825 (Wouter Wolters)
    2013-09-23  be4627f  #44825          [BUGFIX] Fix page.headerData + USER_INT (Helmut Hummel)
    2013-09-20  580a576  #48912          [BUGFIX] Increase length of identifier field in sys_file (Nicole Cordes)
    2013-09-20  cb6bf25  #52056          [BUGFIX] Wrong exception on renaming folder (Francois Suter)
    2013-09-19  cdba66b  #49328          [BUGFIX] Fix PHP warning when writing to Backend user log (Alexander Stehlik)
    2013-09-17  23e6007  #45859          [BUGFIX] Faulty expand/collapse behavior in Element Browser (Oliver Hader)
    2013-09-17  c79315a  #19045          [BUGFIX] Fix cropping of transparent gifs with im6. (Stefan Neufeind)
    2013-09-17  aa4ab27  #50907          [BUGFIX] Form Wizard: Adds mouse pointer to docheader icons (Ernesto Baschny)
    2013-09-13  22ee660  #51981          [BUGFIX] Also consider JPEG files for IM/GM (Markus Klein)
    2013-09-12  40cb0a4  #51803          [TASK] Use a 401 header if login is not successful (Georg Ringer)
    2013-09-12  903046f  #51891          [BUGFIX] Call to undefined method setTemplateFile (Wouter Wolters)
    2013-09-12  fa15b67                  [TASK] Set TYPO3 version to 6.0.11-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_6.0.x> [Category:TYPO3
6.0](Category:TYPO3_6.0 "wikilink") <Category:2013>
