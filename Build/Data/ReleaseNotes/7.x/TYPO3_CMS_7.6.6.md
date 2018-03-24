Release Notes for TYPO3 CMS 7.6.6
=================================

This document contains information about TYPO3 CMS 7.6.6 which was
released on April 26th, 2016.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    ba1b13e382afdf4570a93afd44646504  typo3_src-7.6.6.tar.gz
    fd3047b4cbf1f176858e35c4911c9e9d  typo3_src-7.6.6.zip

SHA256 checksums
----------------

    2ffc4b800ab94e70c8cf5c15973ae977687ac6554497303f7e8cd284c1ecce53  typo3_src-7.6.6.tar.gz
    f02632cdc16e6961a604ac7f55d1405a8018385a6e141bd46cd78fa6d504e24c  typo3_src-7.6.6.zip

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
[7.6.5](TYPO3_CMS_7.6.5 "wikilink"):

    2016-04-26  c153268                  [RELEASE] Release of TYPO3 7.6.6 (TYPO3 Release Team)
    2016-04-26  17f26dd  #75860          [BUGFIX] Double encoding in image title-tag (Frank Naegler)
    2016-04-25  02490e9  #70780          [BUGFIX] Respect page TSConfig pid overrides for new inline children (Christian Kuhn)
    2016-04-25  8ffd696  #61016          [BUGFIX] rsaauth: remove session-cookie when no longer used (Stefan Neufeind)
    2016-04-25  c9167e2  #75519          [BUGFIX] Remember not rendered checkboxes in TCA treeSelect (Frans Saris)
    2016-04-24  021af28  #75647          [BUGFIX] Remove hardcoded hidden column (Wouter Wolters)
    2016-04-24  38ecd2a  #75780,#75825   Revert "[BUGFIX] config.locale_all should format floating point values" (Nicole Cordes)
    2016-04-24  4897744  #75577          [BUGFIX] selicon_field does not create thumbnails (Stefan Froemken)
    2016-04-22  a34eaaf  #75754          [TASK] Document further options for mail post processor (Daniel Siepmann)
    2016-04-22  e73a36a  #56557          [BUGFIX] Processing folder has now nested subfolders (Alina Fleser)
    2016-04-22  fa95591  #75859          [BUGFIX] Remove markup from FlashMessage (Frank Naegler)
    2016-04-21  851f4f9  #75783          [BUGFIX] Missing relations command: optimize SQL (Markus Klein)
    2016-04-21  f9791c9  #75830          [BUGFIX] Better positionName extraction in executePositionedStringInsertion (Christian Weiske)
    2016-04-20  943f711  #73735          [BUGFIX] Check if folder is within the filemount (Frans Saris)
    2016-04-20  2606e0d  #75463          [TASK] Use correct icons for TCA type select with renderType selectTree (Manuel Selbach)
    2016-04-20  ac13aa4  #75370          [BUGFIX] Prevent OutOfBoundsException in filelist (Frans Saris)
    2016-04-19  a3ad40c  #72961          [BUGFIX] Reimplement pageTS support to selectTree (Stefan Busemann)
    2016-04-19  8ee424c                  Revert "[BUGFIX] Do not append a "/" to the folder identifier" (Frans Saris)
    2016-04-19  a286b43  #75756          [BUGFIX] Create processed file object if file exists but reference doesn't (Arno Schoon)
    2016-04-19  04d6c52  #75778          [BUGFIX] Flush l10n cache after translation update (Christian Kuhn)
    2016-04-18  ed4e716  #75750          [BUGFIX] Set correct title and button text for create folder (Frans Saris)
    2016-04-18  1692e25  #66861          [BUGFIX] Do not append a "/" to the folder identifier (Sascha Egerer)
    2016-04-18  8d7cc6f  #75537          [BUGFIX] Overwrite thumbnail config for fluid_styled_content (Daniel Goerz)
    2016-04-18  fed1f72  #75496          [BUGFIX] Repair TCA thumbnail view (Stefan Froemken)
    2016-04-16  eb1ecb7  #75634          [TASK] Add translations to DateTimePicker (Wouter Wolters)
    2016-04-15  9edaf42  #75687          [BUGFIX] Add filelist extension to factory default (Sascha Egerer)
    2016-04-14  4de57ee  #75616          [TASK] Add tooltips to the permission icons (Georg Ringer)
    2016-04-13  4e1103b  #75531          [BUGFIX] Prevent fatal error when uploading file with invalid filename (Arjen Hoekema)
    2016-04-12  047d5a0                  [TASK] Set TYPO3 version to 7.6.6-dev (TYPO3 Release Team)


