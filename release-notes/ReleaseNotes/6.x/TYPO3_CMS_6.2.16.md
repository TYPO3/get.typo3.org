Release Notes for TYPO3 CMS 6.2.16
==================================

This document contains information about TYPO3 CMS 6.2.16 which was
released on December 15th, 2015.

News
----

This release is a combined bug fix and security release.

Notes
-----

Find more details in the security bulletins:

-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2015-010/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2015-011/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2015-012/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2015-013/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2015-014/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2015-015/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    fb16572c728e6d2ef73d3d408c80f733  typo3_src-6.2.16.tar.gz
    72ebbe5e6a68ee58ebcd23c4e8f45dd8  typo3_src-6.2.16.zip

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
[6.2.15](TYPO3_CMS_6.2.15 "wikilink"):

    2015-12-15  a919684                  [RELEASE] Release of TYPO3 6.2.16 (TYPO3 Release Team)
    2015-12-15  29ae05c  #59417          [SECURITY] Open shockwave inclusion in flvplayer.swf (Oliver Hader)
    2015-12-15  420f5ed  #41690          [SECURITY] Escape caption of media using css_styled_content (Georg Ringer)
    2015-12-15  7e4bdf4  #23155          [SECURITY] XSS in search results (Wouter Wolters)
    2015-12-15  b341d84  #37399          [SECURITY] Fix XSS in rtehtmlarea (Georg Ringer)
    2015-12-15  5c5babc  #71683          [SECURITY] Fix XSS in bullet list element (Georg Ringer)
    2015-12-15  e737a34  #25245          [SECURITY] Replace parseFunc with htmlspecialchars in element "table" (Georg Ringer)
    2015-12-15  2dbcfaa  #68735          [SECURITY] XSS in Link Validator (Georg Ringer)
    2015-12-15  419e986  #25243          [SECURITY] Possible XSS in felogin messages (Georg Ringer)
    2015-12-15  c440874  #25227          [SECURITY] XSS through WS comments (Wouter Wolters)
    2015-12-15  25a1473  #71698          [SECURITY] Link fields accept inline javascript code (Oliver Hader)
    2015-12-15  df2d3d7  #59150          [SECURITY] Fix several XSS issues (Nicole Cordes)
    2015-12-15  1205071  #71524          [SECURITY] Prevent XSS in TER download dialog (Nicole Cordes)
    2015-12-15  0d11eaf  #72224          [BUGFIX] Handle content with no markers in substituteMarkerArrayCached (Markus Klein)
    2015-12-15  7cc6b2d  #64552          [BUGFIX] Make openid usable on IE 11 (Markus Klein)
    2015-12-15  36de9bf  #61017          [BUGFIX] Track pids of deleted/moved records to clear cache (Jan Helke)
    2015-12-12  41bc634  #69317          [BUGFIX] Indexed Search: Fix warning for empty search word (Tymoteusz Motylewski)
    2015-12-08  f107bcd  #72112          [TASK] travis-ci: PHP 5.6 not allowed_failure anymore (Christian Kuhn)
    2015-12-08  519a461  #71686          [FOLLOWUP][BUGFIX] ImageViewHelper should catch exceptions (Andreas Allacher)
    2015-12-07  83e0ef9  #32209          [BUGFIX] Use strict authMode access check for list_type (Frank Nägler)
    2015-12-06  5455778  #37896          [BUGFIX] Live search shows move placeholders in draft workspace (Alexander Opitz)
    2015-12-05  62a406e  #44270          [BUGFIX] Avoid overly large regex in substituteMarkerArrayCached (Benni Mack)
    2015-12-04  72ebfbf  #64966          [BUGFIX] Avoid wrong SQL query in fe_login user group redirect (Frederic Gaus)
    2015-12-04  202debf  #36946,#42075   [BUGFIX] Ignore placeholders when copying records (Oliver Hader)
    2015-12-04  8f09bda  #67757          [BUGFIX] Sanity check is missing within MediaContentObject (Thilo Schumann)
    2015-12-04  a66dd2f  #71686          [BUGFIX] ImageViewHelper should catch exceptions (Benni Mack)
    2015-12-02  4491c32  #71951          [BUGFIX] DebuggerUtility: Treat null results of lazy objects correctly (Morton Jonuschat)
    2015-12-01  5046f6e  #66341          [BUGFIX] Create FAL processing folders on upgrade (Daniel Neugebauer)
    2015-12-01  9faa965  #66473,#66885   [BUGFIX] Fix serializable object creation with PHP 5.6 (Helmut Hummel)
    2015-12-01  71b64be  #69665          [BUGFIX] Add favicon without scheme (Morton Jonuschat)
    2015-11-30  e2713a5  #66169          [BUGFIX] Empty grid list in frontend workspace preview (Oliver Hader)
    2015-11-30  e061c13  #71990          [TASK] Add possibility to purge workspaces move placeholder (Oliver Hader)
    2015-11-30  59f414d  #71988          [TASK] Extend regular workspaces DataHandler functional tests (Oliver Hader)
    2015-11-30  ba9b137  #71986          [TASK] Extend workspaces DataHandler functional tests (Oliver Hader)
    2015-11-29  5f12cb4  #71947          [TASK] Travis: Disable Xdebug (Nicole Cordes)
    2015-11-27  be570a5  #69376          [BUGFIX] EXT:form - OPTGROUP cannot be a child element of SELECT (Ralf Zimmermann)
    2015-11-27  02e124b  #62713          [BUGFIX] EXT:form - accept-charset in form not working (Ralf Zimmermann)
    2015-11-27  49ec453  #69395          [BUGFIX] Allow reply-to mail header in EXT:form (Ralf Zimmermann)
    2015-11-27  f6b770a  #71197          [BUGFIX] Assure correct INCLUDE_TYPOSCRIPT with relative paths on subpages (Daniel Goerz)
    2015-11-26  1601262  #58816          [TASK] Disallow multi-line HTTP headers (Helmut Hummel)
    2015-11-24  8b37e9e  #69630          [BUGFIX] Save parents localized uid as child reference (Nicole Cordes)
    2015-11-24  61721a7  #52261          [BUGFIX] Position NULL-Checkbox left of TCA input (Stephan Großberndt)
    2015-11-22  d050733  #71734          [BUGFIX] Check webmounts for backend user in workspace preview (Nicole Cordes)
    2015-11-21  2600181  #62280          [BUGFIX] Prevent deletion of closing bracket via INCLUDE_TYPOSCRIPT (Andreas Allacher)
    2015-11-20  1d6148a  #71669          [TASK] Remove Ter.json template in extension manager (Nicole Cordes)
    2015-11-20  5535024  #71730          [BUGFIX] Remove double encoding of fieldset in extension "felogin" (Martin Kutschker)
    2015-11-20  1053983  #71716          [TASK] Add unit tests for spamProtectEmailAddresses (Oliver Hader)
    2015-11-20  cdabe70  #71706,#68905   [SECURITY][TASK] Blind more options in the configuration module (Georg Ringer)
    2015-11-17  3d5f9cf  #71620          [BUGFIX] Fix f:cObject documentation example (Josef Glatz)
    2015-11-15  746c162  #71394          [BUGFIX] Empty array not encoded as empty XML tag (Andreas Wolf)
    2015-11-14  dbeaf26  #68368          [BUGFIX] .htaccess created for log folder outside PATH_site (Andreas Wolf)
    2015-11-13  969763f  #69354          [BUGFIX] Fix l10n identifier string in date validator of EXT:form (Ralf Zimmermann)
    2015-11-13  d17475f  #69817          [BUGFIX] EXT:form - error in mail process if label layout contains label (Ralf Zimmermann)
    2015-11-13  618243a  #69356          [BUGFIX] Handling of uploaded files not within open_basedir (Morton Jonuschat)
    2015-11-13  d1fc019  #66045          [BUGFIX] BackendUtility: Skip rendering thumbnails for anything but files (Morton Jonuschat)
    2015-11-13  399689d  #69807          [BUGFIX] EXT:form - avoid number reduction in currency filter (Ralf Zimmermann)
    2015-11-12  67f4a6b  #71544          [TASK] Fix deprecation-message in FormEngine (Stefan Neufeind)
    2015-11-12  e911ecd  #71096          [BUGFIX] Replace old @dontvalidate with @ignorevalidation (Stefan Neufeind)
    2015-11-12  38711f8  #70481          [BUGFIX] Ensure processing folder within another storage is created (Benjamin Mack)
    2015-11-09  8e5e363  #71435,#70718   Revert "[BUGFIX] IMG_RESOURCE does not prepend absRefPrefix" (Andreas Allacher)
    2015-11-06  8e93a19  #70685          [BUGFIX] Add img longdescUrl only if available (Benjamin Mack)
    2015-11-05  07fb93a  #59226          [BUGFIX] Non-admins cannot use mass actions in a workspace (Oliver Hader)
    2015-11-05  267843d  #71125          [TASK] Allow to define multiple DataHandler commands for one element (Oliver Hader)
    2015-11-05  12fc7a3  #71342          [TASK] Extend functional test cases for copying data (Oliver Hader)
    2015-11-04  0283889  #67764          [BUGFIX] t3editor: menu objects: common properties missing (Andreas Bouche)
    2015-10-31  0ab0bb9  #70283          [TASK] Support EXT: syntax in TCA ctrl iconfile (Stephan Großberndt)
    2015-10-31  7cf5133  #71222          [TASK] Add possibility to copy pages recursively in functional tests (Oliver Hader)
    2015-10-31  46d6e9a  #70637          [BUGFIX] EXT:form - HIDDEN element cannot be accessed in form wizard (Björn Jacob)
    2015-10-30  2183390  #71161          [BUGFIX] Workspace placeholder is not processed with eval-function (Oliver Hader)
    2015-10-29  2a1ecdc  #71057          [BUGFIX] Add class alias of class loader to alias map (Helmut Hummel)
    2015-10-29  d3fb300  #67303          [BUGFIX] Change default label for sys_file_references (Bernd Wilke)
    2015-10-21  e3da3d2  #70864          [BUGFIX] Invalid behaviour with GeneralUtility::trimExplode() (Xavier Perseguers)
    2015-10-20  db1be09  #68231          [BUGFIX] Allow log files to be outside PATH_site (Andreas Wolf)
    2015-10-20  e3df787  #70632          [FOLLOWUP][TASK] Properly encode database input in Typo3DbQueryParser (Morton Jonuschat)
    2015-10-20  59e2ff3  #70632          [TASK] Properly encode database input in Typo3DbQueryParser (Helmut Hummel)
    2015-10-19  8937b59  #61750          [BUGFIX] Child sorting is lost after publishing workspace data (Oliver Hader)
    2015-10-19  86ffeb5  #69967          [TASK] Extract data overlay handling to common class (Oliver Hader)
    2015-10-19  f186f39  #70697          [BUGFIX] Possible silent fatal error with legacy extensions (Xavier Perseguers)
    2015-10-17  fcf6f28  #63380          [BUGFIX] Add stdWrap support for Partial- and layoutRootPaths (Anja Leichsenring)
    2015-10-11  c378495  #69263          [FOLLOWUP][BUGFIX] Do not crop inside known html tags (Benjamin Mack)
    2015-10-11  aac1705  #69263          [BUGFIX] Do not crop inside known html tags (Benjamin Mack)
    2015-10-09  f52c871  #69861          [BUGFIX] Support URLs in image tag generation (Nicole Cordes)
    2015-10-08  6caf9a2  #70465          [TASK] Update static composer class loading (Helmut Hummel)
    2015-10-08  6db8afe  #69476          [BUGFIX] Fix Liskov substitution violation in PackageManager (Helmut Hummel)
    2015-10-08  3eaa271  #61179          [BUGFIX] Flaws in copying a page with localized content elements (Oliver Hader)
    2015-10-06  1292b54  #70436          [TASK] Enforce optimized composer autoloader (Helmut Hummel)
    2015-10-05  4ea7460  #65904          [BUGFIX] Prevent current extension version in update dialog (Nicole Cordes)
    2015-10-01  2a990e0  #70264          [TASK] Prevent gathering update information on Ter installation (Nicole Cordes)
    2015-09-30  cc04ac1  #69833          [BUGFIX] Use correct storage when getting public url of processed file (Nicole Cordes)
    2015-09-25  5b81166  #70111          [BUGFIX] Use extension key for ExtensionManagementUtility::siteRelPath (Nicole Cordes)
    2015-09-24  a8adda4  #69875          [BUGFIX] Use proper fieldname to check result in getFirstTimeValueForRecord() (Georg Ringer)
    2015-09-23  25a6973  #69642          Revert "[BUGFIX] Draft usergroup access rights are now respected" (Alexander Opitz)
    2015-09-23  f28e93d  #70053          [BUGFIX] Fix wrong TypoScript variable name in felogin documentation (Felix Heller)
    2015-09-22  27ec0fc  #39383          [BUGFIX] Delete move placeholders upon record deletion (Bart Dubelaar)
    2015-09-19  e6d091a  #69969          [TASK] Extend workspaces functional tests concerning move-placeholders (Oliver Hader)
    2015-09-18  adbca66  #69953          [FOLLOWUP][BUGFIX] _languageUid property not set on insert (Morton Jonuschat)
    2015-09-18  4f6d166  #65363,#65364   [BUGFIX] _languageUid property not set on insert (Marco Huber)
    2015-09-18  361ad4d  #59112          [TASK] Add functional test cases for IRRE children without default sortby (Oliver Hader)
    2015-09-14  4bfd041  #69304          [BUGFIX] InstallTool: Optimize ALTER TABLE for auto_increment columns (Morton Jonuschat)
    2015-09-13  b8324a4  #68991          [BUGFIX] Correct TYPO3 logo used in icons (Benjamin Kott)
    2015-09-13  86b0a64  #69762          [TASK] Enable color output for unit/functional tests (Mathias Brodala)
    2015-09-11  c2c2d65  #69135          [BUGFIX] Fix BackendUtility::selectVersionsOfRecord parameter (Alexander Opitz)
    2015-09-10  5380aa9  #69628          [BUGFIX] Wrong marker mentioned in documentation of ext:felogin (Wouter Wolters)
    2015-09-10  119d960  #69516          [BUGFIX] IMG_RESOURCE does not prepend absRefPrefix (Heiko Kromm)
    2015-09-09  d846878  #67245          [BUGFIX] Prevent information disclosure in file list (Nicole Cordes)
    2015-09-09  95eb409  #27760          [BUGFIX] DBAL: Fix quoting of single quotes in WHERE values for MSSQL (Morton Jonuschat)
    2015-09-09  c3fd350  #68585          [BUGFIX] Catch exceptions during extension update check (Nicole Cordes)
    2015-09-08  a74669c                  [TASK] Set TYPO3 version to 6.2.16-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_6.2.x> [Category:TYPO3
6.2](Category:TYPO3_6.2 "wikilink") <Category:2015>
