Release Notes for TYPO3 CMS 6.2.31
==================================

This document contains information about TYPO3 CMS 6.2.31 which was
released on April 18th, 2017.

News
----

This version is a maintenance release and contains bug fixes only.

**This is the last regular maintenance of TYPO3 6.2 supported by the
TYPO3 Core Team - version 6.2.31 marks end of life for TYPO3 CMS 6.2
LTS.**

If you are running TYPO3 CMS 6.2 and are not able to update to TYPO3 v7
or v8 (yet), we’d like to point you to a special “[Extended
LTS](https://typo3.com/our-services/extended-support/)” service provided
by TYPO3 GmbH. Like already provided for version 4.5, it is possible to
get further support for the TYPO3 6.2 core for up to two years.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    de09600286499411fbd3ac746983e514  typo3_src-6.2.31.tar.gz
    0768342ab8792f846718119f8be046d8  typo3_src-6.2.31.zip

SHA256 checksums
----------------

    f4f8c16f0ea68ad04da35ae57e22f44e1db1528c7cb213978bffba7384f75d2b  typo3_src-6.2.31.tar.gz
    6c44161ba48c210f5a9c930501dfda02cae1437f793b07615273eb40c19879b2  typo3_src-6.2.31.zip

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
[6.2.30](TYPO3_CMS_6.2.30 "wikilink"):

    2017-04-18  ac75a78                  [RELEASE] Release of TYPO3 6.2.31 (TYPO3 Release Team)
    2017-04-18  3de0853  #80857          [TASK] Mark 6.2 as e-o-l in install tool core updater (Christian Kuhn)
    2017-04-07  f2ce731  #77855          [BUGFIX] Allow file replace for editors (Helmut Hummel)
    2017-04-04  7c45dc5  #48544          [FOLLOWUP][BUGFIX] Do not devlog bad code smells of core classes (Markus Klein)
    2017-04-03  5d266a7  #48544          [BUGFIX] Do not devlog bad code smells of core classes (Markus Klein)
    2017-03-31  a4c6edc  #80589          [BUGFIX] FAL: Correctly iterate folder content with offset (Markus Klein)
    2017-03-25  11506d7  #72299          [BUGFIX] Send correct HTTP message in getUrl (Markus Klein)
    2017-03-09  21a8ee2  #64742          [BUGFIX] Extension update: Prevent multiple update trigger (Nicole Cordes)
    2017-01-13  b236079  #78986          [BUGFIX] Remove range from sorting field (Georg Ringer)
    2017-01-11  a3cc3f9  #79275          [BUGFIX] CacheHashCalculator does not exclude ADMCMD arguments (Benni Mack)
    2017-01-07  8bc9de1  #79165          [TASK] Update copyright year to 2017 (Wouter Wolters)
    2017-01-03  5631d83  #78822          [BUGFIX] Documentation of sessionTimeout (Anja Leichsenring)
    2017-01-03  96f08d1                  [TASK] Set TYPO3 version to 6.2.31-dev (TYPO3 Release Team)

<Category:ReleaseNotes/TYPO3_6.2.x> [Category:TYPO3
6.2](Category:TYPO3_6.2 "wikilink") <Category:2017>
