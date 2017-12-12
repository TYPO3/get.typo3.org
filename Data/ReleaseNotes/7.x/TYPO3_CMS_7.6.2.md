Release Notes for TYPO3 CMS 7.6.2
=================================

This document contains information about TYPO3 CMS 7.6.2 which was
released on December 21st, 2015.

News
----

This release is a bug fix release.

Notes
-----

Several regressions that had been introduced with the last versions have
been fixed with these releases.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    7f67a22b4a08a57a3259f5be34633d26  typo3_src-7.6.2.tar.gz
    a4e0f2b5667add63e10dc9b8ed64ed2d  typo3_src-7.6.2.zip

Upgrading
---------

### Upgrading from TYPO3 6.2 and from earlier versions of TYPO3 7

1.  Before you update any instance to 7.6, have a backup in place.
2.  Then uninstall any extension, that is not shipped with the core.
    This will avoid broken backend after upgrade due to removed class
    alias layer.
3.  Now download the new core and present it to your instance (by
    symlink or copied files)
4.  Use the install tool to run the upgrade wizards
5.  Use the install tool to clear each and every cache you can find,
    even opcode.
6.  Open the backend and go to the extensionmanager. When you use any
    extension without namespaces, activate the compatibility6 extension
    which can be found in the TYPO3 Extension Repository of typo3.org.
    You find further information about this extension and its purpose at
    <https://typo3.org/news/article/retaining-compatibility-to-typo3-cms-6/>
7.  Now reactivate your extensions and enjoy the brand new TYPO3 CMS 7.
8.  When you encounter compatibility problems with your extensions, look
    for the git versions around in order to find one already upgraded.
    For example realurl can be found here, until it gets released to
    TER: <https://github.com/helhum/realurl>

### Upgrading from TYPO3 7.6 / TYPO3 7 LTS

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.\
It might be required to clear all caches; the “important actions”
section in the TYPO3 Install Tool offers the accordant possibility to do
so.

Changes
-------

Here is a list of what was fixed since
[7.6.1](TYPO3_CMS_7.6.1 "wikilink"):

    2015-12-21  5763c4c                  [RELEASE] Release of TYPO3 7.6.2 (TYPO3 Release Team)
    2015-12-21  bb1c14a  #71991          [BUGFIX] FormEngine: Fix hiding/unhiding IRRE records with toggle icon (Morton Jonuschat)
    2015-12-21  a0ff74b  #72242          [BUGFIX] JavaScript error on selecting a folder in element browser (Oliver Hader)
    2015-12-19  0780eb6  #72117          [FOLLOWUP][BUGFIX] Accept \Throwable in ExceptionHandlerInterface (Benni Mack)
    2015-12-18  08b8716  #72117          [!!!][BUGFIX] Accept \Throwable in ExceptionHandlerInterface (Alexander Opitz)
    2015-12-18  7b13f0c  #72276          [BUGFIX] Adjust itemsProcFunc for sys_file_collection (Gerrit Mohrmann)
    2015-12-18  1d8886e  #72186          [BUGFIX] Adds current media file to TypoScript (Thomas Löffler)
    2015-12-18  f238de2  #72132          [BUGFIX] Ensure that the content of stdWrap is always a string (Markus Klein)
    2015-12-17  0d5f46a  #72303          [BUGFIX] Use correct tokenizer for JavaScript in T3Editor (Daniel Goerz)
    2015-12-17  08e0fef  #72304          [TASK] Move last documentation file from folder "master" (Wouter Wolters)
    2015-12-17  72bf747  #72273          [!!!][BUGFIX] Severe data-loss on workspaces publishing action (Oliver Hader)
    2015-12-17  48db3bf  #72285          [BUGFIX] DBAL: use correct default value for native connection (Melanie Kalka)
    2015-12-17  410170b  #72291          [TASK] Extend workspace functional tests on placeholder deletion (Oliver Hader)
    2015-12-17  8efc9e0  #72298          [BUGFIX] Use correct uid for table list in Page module (Markus Klein)
    2015-12-17  9874706  #72252          [BUGFIX] substituteMarkerArrayCached() must accept special chars (Markus Klein)
    2015-12-17  0d99ed0  #72288          [BUGFIX] Add buttons with `form` attribute to SplitButton save handling (Andreas Fernandez)
    2015-12-17  5359eb6  #72259          [TASK] Update bootstrap to 3.3.6 (Andreas Fernandez)
    2015-12-17  24d3a26  #72265          [BUGFIX] Disclose exceptions on CLI in production context (Helmut Hummel)
    2015-12-17  840e95f  #72289          [BUGFIX] Missing check before foreach loop (Oliver Hader)
    2015-12-16  be64be8  #72256          [TASK] Provide labels for all log types (Daniel Goerz)
    2015-12-16  015390c  #72274          [TASK] Add cache buster to favicon (Anja Leichsenring)
    2015-12-16  ba417f2  #72213          [BUGFIX] Scheduler: Correctly toggle results on task type change (Joerg Kummer)
    2015-12-16  58d44e9  #72263          [BUGFIX] Empty row in table content element shows &amp;nbsp; (Wouter Wolters)
    2015-12-16  b7e81bd  #71291          [BUGFIX] Show backend login spinner when getting RSA pubkey (Andreas Fernandez)
    2015-12-16  6bc73e3  #72237          [TASK] Raise minimum and recommended memory_limit (Cedric Ziel)
    2015-12-16  954d8af  #72246          [BUGFIX] Use correct severity in FAL flash messages (Daniel Goerz)
    2015-12-15  87b3c1d                  [TASK] Set TYPO3 version to 7.6.2-dev (TYPO3 Release Team)


