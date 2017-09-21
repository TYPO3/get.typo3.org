Release Notes for TYPO3 4.5.7
=============================

This document contains information about TYPO3 version 4.5.7 which was
released on October 18th 2011.

News
----

This release is a maintenance release and contains bugfixes and a
security fix which is only exploiteable by admins.

See [this
article](http://buzz.typo3.org/teams/security/article/incident-handling-of-typo3-core-issues/)
about the new policy of security team for this situation.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    c00614018fd7c798b7169bb5eeecafbe  blankpackage-4.5.7.tar.gz
    f44a726acea4b301eeee73732b02d286  blankpackage-4.5.7.zip
    d7d911a91786fc64f6e08e65e6e62878  dummy-4.5.7.tar.gz
    6697786c9a389438159767c8eb5f5f39  dummy-4.5.7.zip
    8a87132dcaac61ba790cf62d59553998  introductionpackage-4.5.7.tar.gz
    f21ecb8d406ebab80d78263827090a08  introductionpackage-4.5.7.zip
    222dbf357e17196ade498ba25857257d  typo3_src+dummy-4.5.7.zip
    001fb058b4b66903395bfd4533d7bfa8  typo3_src-4.5.7.tar.gz
    714a802aa052e95d9ab203e615c5041f  typo3_src-4.5.7.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changelog
---------

Core:

    41311d5          [BUGFIX] Skip missing icons in tceforms select options (Peter Niederlag(office))
    331c35a  #28951  [BUGFIX] Showmodule cannot be called before Store is loaded (Oliver Hader)
    4f9bd12  #30759  [BUGFIX] Replace debug with call to deprecationLog (Tolleiv Nietsch)
    2b4abd5          [BUGFIX] Wrong alignment of French labels for login screen (Eric Chavaillaz)
    54afae5  #25787  [BUGFIX] handler is undefined when resizing the backend (Simon Schaufelberger)
    13cd9cc  #30725  [BUGFIX] Copyright year in HTML comment is hardcoded (Andreas Wolf)
    cccc68e  #29445  [BUGFIX] Typo in gifbuilder (Simon Schaufelberger)
    17c8c40  #30416  [BUGFIX] meaningfulTempFilePrefix is not multi-byte safe (Steffen Gebert)
    d740657  #29904  [BUGFIX] t3lib_Compressor breaks absolute paths in CSS (Andreas Bouche)
    9f89f8c  #29782  [BUGFIX] Email links marked as external when preceded by external link (Stanislas Rolland)
    3e6ff4e  #30171  [TASK] Update reference from SVN to Git (Helmut Hummel)
    eede231          [BUGFIX] Label status_configuration_PhpSafeModeEnabled is not retrieved (Xavier Perseguers)
    3863b1b  #29274  [BUGFIX] Don't unnecessarily start PHP session (Helmut Hummel)
    f69ff84  #29770  [BUGFIX] Fix backpath for add wizards in IRRE records (Backport fix from master) (Sebastian Fischer)
    9b556c1  #27589  [BUGFIX] About modules: Adjust bgcolor of sections (Tomas Norre Mikkelsen)
    3054ac9  #29802  [TASK] Add SwiftMailer license exception to be included in TYPO3v4 (Ernesto Baschny)

RTEhtmlarea:

    814c75f  #29855  [BUGFIX] RTE: Tag attributes are reversed on save (Stanislas Rolland)
    659def6  #30534  [BUGFIX] RTE: Add TYPO3 version to hash of cached scripts (Stanislas Rolland)

t3editor:

    281c0ac          [BUGFIX][t3editor] typolinkEnableLinksAcrossDomains missing (Steffen Gebert)
    ac79a87          [BUGFIX] t3editor not visible with TYPO3 on Windows (Jigal van Hemert)

Linkvalidator

    fd05e15  #31051  [TASK][SECURITY] SQL Injection in Scheduler Task of Linkvalidator

Extension Manager

    747e551          [BUGFIX] Old EM: t3lib_DB::exec_INSERTquery errors (Jigal van Hemert)
    a12ba30  #30257  [BUGFIX] EM: Remove nested form tag (Helmut Hummel)
    e1bd3c9  #30673  [BUGFIX] Race-condition while updating extension list (Steffen Gebert)
    9f819c3  #30598  [BUGFIX] PHP warning on each Extension Manager invocation (Dmitry Dulepov)
    f116eea  #27098  [BUGFIX] EM, Error when downloading extension files (Markus Klein)
    1f17e1d  #29243  [BUGFIX] EM installs outdated versions of depending extensions (Steffen Gebert)
    530f063  #29625  [BUGFIX] Show extension configuration after extension update (Helmut Hummel)

Workspaces:

    07acbe4          [BUGFIX] handler is undefined when resizing the backend
    bd53736          [BUGFIX] Hide comments section if there are no comments
    ba04cfb          [BUGFIX] Make workspace change visible for editors
    1fd6a00          [BUGFIX] Cleanup splitview JavaScript

<Category:ReleaseNotes/TYPO3_4.5.x> [Category:TYPO3
4.5](Category:TYPO3_4.5 "wikilink") <Category:2011>
