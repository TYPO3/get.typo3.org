Release Notes for TYPO3 4.5.6
=============================

This document contains information about TYPO3 version 4.5.6 which was
released on September 14th 2011.

News
----

This release is a combined bugfix and security release.

Notes
-----

### Security

Due to several security issues found in the TYPO3 Core, there was a
combined release of TYPO3 4.3.14, 4.4.11 and 4.5.6.\
Find more details in the security bulletins:\
<https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2011-002/>\
<https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2011-003/>\

### RTE

rtehtmlarea got various fixes in this release, but the version number
was not increased. It is advised to clear the RTE cache (as an
administrator, using the Clear Cache menu) after upgrading to this
release to get make these fixes available.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    e891f82450a7e98ca85380325a04f223  blankpackage-4.5.6.tar.gz
    707cf67a97220c368e854ab1278854ce  blankpackage-4.5.6.zip
    2082873702b7d097f44864b34740ad2f  dummy-4.5.6.tar.gz
    599c497a36d16f47d2cf0805b18d8d97  dummy-4.5.6.zip
    771b8c9c961ef1266c93e4abec3d4dbd  introductionpackage-4.5.6.tar.gz
    e63d7890740309188c01428e7f4c250a  introductionpackage-4.5.6.zip
    1cd417cb04c821fdaa797d0f3d628f82  typo3_src+dummy-4.5.6.zip
    22f1a572fe1f996279112d7c43af16e1  typo3_src-4.5.6.tar.gz
    ee91cbfdd7bf47b357cc9e10ac296d10  typo3_src-4.5.6.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changelog
---------

    2011-09-14  ae6e878            [RELEASE] Release of TYPO3 4.5.6 (TYPO3 v4 Release Team)
    2011-09-14  337beea  #29400    [BUGFIX] SQL Injection vulnerability in prepared statements (Helmut Hummel)
    2011-09-14  4a18c90  #29366    [BUGFIX] Disabling the cache does not work on invalid cHash value (Daniel Pötzinger)
    2011-09-13  0c64c00  #29167    [BUGFIX] RTE: External links not updated to internal by link dialogue (Stanislas Rolland)
    2011-09-13  591516a  #29527,   [BUGFIX] RTE may overwrite link text in IE (Stanislas Rolland)
    2011-09-09  1d46b26  #27740    [BUGFIX] FE session transfer is broken (Dmitry Dulepov)
    2011-09-08  5690bf1  #29485    [BUGFIX] Padding of RTE statusbar is too big (Stanislas Rolland)
    2011-09-08  e1de967  #29234    [BUGFIX] RTE only loads styles from external css file on reload in IE8 (Stanislas Rolland)
    2011-09-01  098bde8  #29361    [BUGFIX] High CPU load in IE8/9 when using context menu in htmlArea RTE (Stanislas Rolland)
    2011-09-01  9e6db1f  #29421    [BUGFIX] RTE context menu adds unwanted id attribute to target (Stanislas Rolland)
    2011-08-30  f6cd01a  #27801    [BUGFIX] Incorrect behaviour of style selector in RTE (Stanislas Rolland)
    2011-08-30  3c7f0a4            [TASK] Raise submodule pointer (TYPO3 v4 Release Team)
    2011-08-30  67112b5  #27247    [BUGFIX] Bring back recStatInfoHooks hook in Page Tree (Georg Ringer)
    2011-08-29  a26cb0d  #29304    [TASK] Improve description of $TYPO3_CONF_VARS['SYS']['no_pconnect'] (Christopher)
    2011-08-29  9498103  #29246    [BUGFIX] HTMLparser, treat fixAttrib.unset as boolean (Markus Klein)
    2011-08-29  ec32e2e  #29141    [BUGFIX] RTE breaks mailto links in Firefox (Stanislas Rolland)
    2011-08-29  3246c94  #27217    [BUGFIX] t3lib_div::cmpFQDN() lacks support for IPv6 and hostnames (Stefan Neufeind)
    2011-08-29  a7d33af            [BUGFIX] Add DB structure update pre-processing hook in EM (Xavier Perseguers)
    2011-08-29  922183a            [BUGFIX] Message about missing db credentials is misleading (Christopher)
    2011-08-28  8d4cb92  #25382    [BUGFIX] TCA Tree should respect requestUpdate and type (Marco Huber)
    2011-08-27  0f86579  #29172    [BUGFIX] 'Update settings' button does not work in new em (Susanne Moog)
    2011-08-24  e537a87  #29169    [BUGFIX] exec_SELECTcountRows returns string (Georg Ringer)
    2011-08-22  b0df3a2  #29165    [BUGFIX] Remove check for invalid prefix in addService (Christian Kuhn)
    2011-08-22  2663438  #16798    [BUGFIX] Fix isAbsPath() on Windows (Daniel Hoffmann)
    2011-08-21  48d2332  #29029    [BUGFIX] Some TCEforms elements are displaced (Francois Suter)
    2011-08-21  e0fa9bd  #25302    [BUGFIX] Broken links representation gets saved to the database (Stanislas Rolland)
    2011-08-21  93349ba  #28949    [BUGFIX] TYPO3 tries to connect to typo3.org on every login (Susanne Moog)
    2011-08-21  6ed0538  #29130    [BUGFIX] Fix security level "normal" for backend login (Helmut Hummel)
    2011-08-21  571f983  #29075    [BUGFIX] Also check if cache files are not empty (Jigal van Hemert)
    2011-08-21  f9384d5  #24920    [BUGFIX] feedit: Use skinImage for edit icons (Bjoern Pedersen)
    2011-08-21  01c2eb2  #28455    [BUGFIX] "New record" button in Template mod broken (Jigal van Hemert)
    2011-08-16  7d45a2f  #28903    [BUGFIX] Indent/outdent does not work if formatblock button is disabled (Stanislas Rolland)
    2011-08-16  7f0ca59  #29023    [BUGFIX] RTE: Table tag left over after cutting table in Firefox (Stanislas Rolland)
    2011-08-16  dc7888a            [TASK] Set TYPO3 version to 4.5.6-dev (TYPO3 v4 Release Team)
    2011-08-16  a4ce9ef            [RELEASE] Release of TYPO3 4.5.5 (TYPO3 v4 Release Team)

<Category:ReleaseNotes/TYPO3_4.5.x> [Category:TYPO3
4.5](Category:TYPO3_4.5 "wikilink") <Category:2011>
