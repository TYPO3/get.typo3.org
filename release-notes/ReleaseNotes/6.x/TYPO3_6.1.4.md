Release Notes for TYPO3 6.1.4
=============================

This document contains information about TYPO3 CMS 6.1.4 which was
released on September 4th 2013.

News
----

This release is a combined bug fix and security release.

Notes
-----

Due to security issues found in the TYPO3 Core, there was a combined
release of TYPO3 CMS 6.0.9 and 6.1.4.\
Find more details in the security bulletin:
<https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2013-003/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    ee2c0e027380d0a5299ebcb06e744294  blankpackage-6.1.4.tar.gz
    7efb74aedb2508121d35b4b63de73063  blankpackage-6.1.4.zip
    fe200790796ab40b538c6180dcfe9f0a  dummy-6.1.4.tar.gz
    d87f29f758ab4c9fcad42291603512c1  dummy-6.1.4.zip
    4f02fd88f9f33d0fe3a2476e59237029  governmentpackage-6.1.4.tar.gz
    0a8c746b0db4c72db617652b6ec207c6  governmentpackage-6.1.4.zip
    762b8fe3ff5fcd503c3acf5f15d44239  introductionpackage-6.1.4.tar.gz
    33f144752324740fcf772d42c7964cb0  introductionpackage-6.1.4.zip
    431afff51ea649c59a3e3bc97c2bb442  typo3_src+dummy-6.1.4.zip
    9a6394fa3640abe5f0bffd49cb3974cf  typo3_src-6.1.4.tar.gz
    4bcca10d941070543db5399c3a58b7a7  typo3_src-6.1.4.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since [6.1.3](TYPO3_6.1.3 "wikilink"):

    2013-09-04  734f851                  [RELEASE] Release of TYPO3 6.1.4 (TYPO3 Release Team)
    2013-09-04  91c3c4c  #50886          [SECURITY] Prohibit accessing storage 0 from backend UI (Steffen Ritter)
    2013-09-04  6592233  #50883          [SECURITY] Identifiers may refer to resources outside the storage (Steffen Ritter)
    2013-09-04  481c05c  #51495          [SECURITY] Deny arbitrary code execution possibility for editors (Helmut Hummel)
    2013-09-04  dbc76c7  #51327          [SECURITY] Refactor and fix FAL user permission handling (Helmut Hummel)
    2013-09-04  ae6e108  #51326          [SECURITY] Add possibility to en-/disable file permission checks (Helmut Hummel)
    2013-09-04  c524c0d  #51079          [SECURITY] Check permissions in all actions of ResourceStorage (Steffen Ritter)
    2013-09-03  c9e9c4f                  [TASK] CGL Cleanup of ResourceStorage (Helmut Hummel)
    2013-09-03  3dc1381  #49842          [BUGFIX] Storage is offline but is still used (Frans Saris)
    2013-09-01  a979e78  #31998          [BUGFIX] Faulty check for missing SMTP port (Tomita Militaru)
    2013-08-31  55dffd7  #50424          [BUGFIX] Backend Layout Grid Wizard not fully visible in Mac Firefox 22 (Roland Schenke)
    2013-08-30  746d133  #51585          [BUGIFX] Missing argument in EM List view VH (Francois Suter)
    2013-08-29  e084d3e  #51328          [BUGFIX] Only log file/directory actions which were done (Helmut Hummel)
    2013-08-29  727abe7  #51544          [BUGFIX] Sprite manager cache improvement (Christian Kuhn)
    2013-08-29  084c838  #50707          [BUGFIX] TCA 'group' selectedListStyle with 'width' breaking layout (Ernesto Baschny)
    2013-08-29  14c9573  #51460          [BUGFIX] Database integrity check fatal error (Stefan Fürst)
    2013-08-29  440ca58  #51474          [BUGFIX] Cast autoload and classAliasMap to Array (Michel Georgy)
    2013-08-29  182e5cd  #51509          [BUGFIX] Add missing API method FileInterface::getNameWithoutExtension (Ernesto Baschny)
    2013-08-28  e21e5ff  #36244          [BUGFIX] Exclude empty passwords from password hashing check (Nicole Cordes)
    2013-08-27  544d446  #51190          [BUGFIX] utf8/multibyte character breaks menu filelist (Peter Niederlag)
    2013-08-27  266e98a  #50234          [TASK] Make the extension titles link to the configuration (Nicole Cordes)
    2013-08-27  d778598  #51304          [BUGFIX] Hide translations in categories selector (Francois Suter)
    2013-08-27  af3fefb  #50870          [BUGFIX] Tests in Localization\Parser\LocallangXmlParserTest fail (Nicole Cordes)
    2013-08-27  4701354  #50760          [BUGFIX] Escape title tag of image links (Alexander Stehlik)
    2013-08-27  01d1f32  #25327,#37026   [BUGFIX] Page tree filtering broken in IE7 & IE8 (Aske Ertmann)
    2013-08-25  65f6aa0  #51209          [BUGFIX] Ignore permission checks for processed files (Helmut Hummel)
    2013-08-22  9a44dec                  Revert "[BUGFIX] Check for incompatible SQL modes" (Stefan Neufeind)
    2013-08-22  e3659b1  #51249          [BUGFIX] Missing "Interface" in Backend-Annotation (Stefan Froemken)
    2013-08-22  e727d5f  #20052,#18866,  [BUGFIX] Check for incompatible SQL modes (Sascha Egerer)
    2013-08-20  eaad8a3  #37892          [BUGFIX] No version overlay should be done for sys_language (Lienhart Woitok)
    2013-08-20  91c09f1  #46989          [BUGFIX] Files with unclean path indexed multiple times (Stefan Neufeind)
    2013-08-20  cf47f59  #51159          [BUGFIX] FlashMessageQueue PHP strict warning (Christian Kuhn)
    2013-08-18  e40dce3  #50614          [TASK] FilesContentObject::stdWrapValue(): only execute stdWrap once (Stefan Neufeind)
    2013-08-18  4abd277  #43428          [BUGFIX] Language-module icons need to display in correct size (Stefan Neufeind)
    2013-08-17  87b18bf  #30636          [BUGFIX] TCA: subtypes_addlist not processed (Benjamin Mack)
    2013-08-17  522abbc  #47844          [BUGFIX] Query parameters of external link may get altered (Stanislas Rolland)
    2013-08-16  1339242  #51115          [TASK] Disable scheduler-tests if EXT:scheduler not loaded (Stefan Neufeind)
    2013-08-16  3889f1a  #51004          [BUGFIX] Fix file permission methods in BackendUserAuthentication (Helmut Hummel)
    2013-08-16  d34375a  #51007          [BUGFIX] Fix inconsistencies in getTSConfig in BackenuserAuth (Helmut Hummel)
    2013-08-16  fbe1365                  Revert "[BUGFIX] Fix inconsistencies in getTSConfig in BackenuserAuth" (Helmut Hummel)
    2013-08-16  c523db0                  Revert "[BUGFIX] Fix file permission methods in BackendUserAuthentication" (Helmut Hummel)
    2013-08-15  c7d04fb  #51007          [BUGFIX] Fix inconsistencies in getTSConfig in BackenuserAuth (Helmut Hummel)
    2013-08-15  01ac007  #51004          [BUGFIX] Fix file permission methods in BackendUserAuthentication (Helmut Hummel)
    2013-08-14  3e379b4  #46094          [BUGFIX] Avoid usage of subheader in mailform (Francois Suter)
    2013-08-14  528c0d4  #51064          [BUGFIX] storagePid is lost when persistence.recursive is set (Steffen Müller)
    2013-08-12  76d3e55  #47806          [BUGFIX] Typing after abbr or acronym tag is difficult (Stanislas Rolland)
    2013-08-12  be8cfc2  #51010          [BUGFIX] Allow reading files if storage is not browsable (Helmut Hummel)
    2013-08-11  3152260  #51005          [BUGFIX] Take into account all file and folder permissions (Helmut Hummel)
    2013-08-11  5b828c7  #50844          [BUGFIX] Failing tests in Resource\Driver\LocalDriverTest on Windows (Nicole Cordes)
    2013-08-11  154576f  #51012          [BUGFIX] Missing \TYPO3\CMS\Core\Utility\ in ResourceFactory (Wouter Wolters)
    2013-08-11  f9d9ab0  #51011          [TASK] Add signal in ResourceFactory for storage creation (Helmut Hummel)
    2013-08-11  2c7c1e7  #50193          [BUGFIX] FAL: Image Processing doesn't respect GFX "thumbnails_png" (Benjamin Mack)
    2013-08-11  c4c9d7b  #44910          [BUGFIX] LocalDriver: Recursive file listing is broken (Andreas Wolf)
    2013-08-11  93e763b  #50502          [BUGFIX] rtehtmlarea acronym error with static_info_tables 6.0+ (Stanislas Rolland)
    2013-08-10  fade298  #50287          [BUGFIX] Invalid allowed value for color space (Tomita Militaru)
    2013-08-08  59ff957  #48523          [BUGFIX] Reports module tries to load not-installed extension (Wouter Wolters)
    2013-08-08  6a2af77  #50868          [BUGFIX] number_format() expects parameter 1 to be double (Wouter Wolters)
    2013-08-07  d7f01a2  #50568          [BUGFIX] Ignore case in file extension filter (Alexander Stehlik)
    2013-08-07  032d7ac  #50872          [BUGFIX] Correctly set user storage permissions (Helmut Hummel)
    2013-08-07  c3b2ee2  #50867          [TASK] Introduce AbstractHierarchicalFilesystemDriver (Steffen Ritter)
    2013-08-07  903024c  #50843          [BUGFIX] Failing Resource\FactoryTest on Windows systems (Nicole Cordes)
    2013-08-07  d65c360  #47106          [BUGFIX] Indexing of external files does not work in indexed_search (Wouter Wolters)
    2013-08-07  8259edf  #50562          [BUGFIX] Callback in CrawlerHook of indexed_search sysext buggy (Marius Büscher)
    2013-08-07  7263bcd  #50812          [BUGFIX] Backup singletons in unit tests prior to other setUp operations (Nicole Cordes)
    2013-08-07  7b4c962  #50845          [BUGFIX] Test in Configuration\ConfigurationManagerTest fails in backend (Nicole Cordes)
    2013-08-06  201d32d  #50628          [BUGFIX] Fix EmConfUtility::fixEmConf conflicts generation (Sascha Egerer)
    2013-08-06  6fbce2c  #50125          [BUGFIX] Incorrect check for empty folder (Philipp Gampe)
    2013-08-06  f4b5aa3  #15797          [BUGFIX] Use proper implementation of a wordwrap (Georg Ringer)
    2013-08-06  cdf1b4e  #50615          [TASK] Use magic __CLASS__ in getInstance()-methods (Stefan Neufeind)
    2013-08-06  0fb6f60  #50751          [BUGFIX] Fix empty href parameter (Anja Leichsenring)
    2013-08-06  fd4d970  #50781          [BUGFIX] MySQLi: Allow persistent connections again (Stefan Neufeind)
    2013-08-06  7e568f0  #50809          [BUGFIX] Fix failing test in StorageRepositoryTest (Anja Leichsenring)
    2013-08-06  b991af6  #50803          [BUGFIX] Fatal error: "enableFields on non-object" in extension manager (Ernesto Baschny)
    2013-08-04  7449365  #50466          [BUGFIX] MySQL: Use ENGINE (not TYPE) for storage-engine (Stefan Neufeind)
    2013-08-03  3e62929  #49288          [BUGFIX] ControllerExtensionName can not be resolved in CLI mode (Achim Fritz)
    2013-08-01  d002444  #43893          [BUGFIX] selected = 1 doesn't work in FormContentObject (Wouter Wolters)
    2013-07-31  42e4d7c  #36031          [TASK] Provide information about import action in TCEmain to hooks (Stefan Galinski)
    2013-07-31  aa979ba  #43631          [BUGFIX] RTE wizard can't "save document and view page" (Stanislas Rolland)
    2013-07-30  1997c96                  [TASK] Set TYPO3 version to 6.1.4-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_6.1.x> [Category:TYPO3
6.1](Category:TYPO3_6.1 "wikilink") <Category:2013>
