Release Notes for TYPO3 CMS 7.6.14
==================================

This document contains information about TYPO3 CMS 7.6.14 which was
released on November 29st, 2016.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    87a49aa744e19319f4458d88dfcbb0d9  typo3_src-7.6.14.tar.gz
    5792a9e43ffa96e6a4e4f62d5890887b  typo3_src-7.6.14.zip

SHA256 checksums
----------------

    c07d6d4e0532b64fdc228b666396b0da8fb692dc2a4b5ba213bbc2fb4897235b  typo3_src-7.6.14.tar.gz
    7bd59fdb83b0f1187e110a3e6c30530ad4a864a76730faeb9582e6375aacdf1b  typo3_src-7.6.14.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.\
There were **changes in DB tables index\_phash and
sys\_file\_reference** compared to 7.6.11. Log into TYPO3 Install Tool,
click on “Compare current database with specification” and apply
changes.\
It might be required to clear all caches; the “important actions”
section in the TYPO3 Install Tool offers the accordant possibility to do
so.

Changes
-------

Here is a list of what was fixed since
[7.6.13](TYPO3_CMS_7.6.13 "wikilink"):

    2016-11-29  27163d9                  [RELEASE] Release of TYPO3 7.6.14 (TYPO3 Release Team)
    2016-11-24  2d333ed  #78778          [TASK] Update composer dependencies for local builds (Helmut Hummel)
    2016-11-23  6d06a9b  #76118,#78775   [TASK] Loosen Symfony components version constraint (Mathias Brodala)
    2016-11-22  522271f                  [TASK] Set TYPO3 version to 7.6.14-dev (TYPO3 Release Team)


