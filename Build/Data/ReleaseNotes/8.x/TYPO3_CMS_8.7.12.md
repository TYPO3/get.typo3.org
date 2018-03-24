Release Notes for TYPO3 CMS 8.7.12
==================================

This document contains information about TYPO3 CMS 8.7.12 which was
released on March 22nd, 2018.

News
----

This version is a bugfix and maintenance release.

Download
--------

<https://typo3.org/download/>

Checksums
----------------

	e835f454229b1077c9042f1bae4d46c7  typo3_src-8.7.12.tar.gz
	e5736ca3b3725966a4528a0c53fc849f  typo3_src-8.7.12.zip
	185f3796751a903554a03378634a438beeef966e  typo3_src-8.7.12.tar.gz
	eba49b9033da52d98f48876e97ed090a0c5593e0  typo3_src-8.7.12.zip
	77c3589161bea9d2c30e5d3d944443ba64b56813314ac2511b830e37d3297881  typo3_src-8.7.12.tar.gz
	7aad3f5864256f3f989c0378cec8bb729e728b30adb25e55ae713d8e682ef72b  typo3_src-8.7.12.zip

Upgrading
---------

The [usual upgrading procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.\
It might be required to clear all caches; the “important actions”
section in the TYPO3 Install Tool offers the accordant possibility to do
so.

Changes
-------

Here is a list of what was fixed since
[8.7.11](TYPO3_CMS_8.7.11):


 * 2018-03-22 9e6040c33d [RELEASE] Release of TYPO3 8.7.12 (Oliver Hader)
 * 2018-03-22 00ff302556 Revert "[BUGFIX] Test ifBlank with strlen again" (Oliver Hader)
 * 2018-03-21 31075b95d3 Revert "[BUGFIX] Simulate submit button for rsaauth form submit" (Oliver Hader)
 * 2018-03-21 9500d1d580 Revert "[BUGFIX] Trigger submit of RSA encrypted form properly" (Oliver Hader)
 * 2018-03-20 65973b5edd [TASK] add missing "HTTP/1.1 308 Permanent Redirect" to HttpUtility (Stephan Jorek)
 * 2018-03-20 1cb45290d8 [BUGFIX] Rename sub-property thousand_sep of numberFormat (Stefan Froemken)
 * 2018-03-19 8bbc425d58 [BUGFIX] Fix typo in TCA of be_users (Georg Ringer)
 * 2018-03-19 c6a630bcd0 [BUGFIX] Move Doctrine custom type init back to ConnectionPool (Alexander Stehlik)
 * 2018-03-19 87aa901120 [BUGFIX] Respect automaticInstallation setting in extension manager (Nicole Cordes)
 * 2018-03-17 d4f1d55972 [BUGFIX] Make line height configurable for Gifbuilder (Tymoteusz Motylewski)
 * 2018-03-17 c12fe3c17c [BUGFIX] Test ifBlank with strlen again (Stefan Froemken)
 * 2018-03-17 99e81190f3 [TASK] Correct QuerySettingsInterface RespectSysLanguage comments (Tymoteusz Motylewski)
 * 2018-03-16 b2408cca82 [BUGFIX] Prevent type converters from being registered multiple times (Romain Canon)
 * 2018-03-16 a812bacc25 [TASK] Remove irc notification from travis.yml (Christian Kuhn)
 * 2018-03-16 309826dac9 [BUGFIX] Upgrade Wizard must work also on records marked as deleted (Christian Toffolo)
 * 2018-03-16 8bcd58a219 [BUGFIX] Trigger submit of RSA encrypted form properly (Andreas Fernandez)
 * 2018-03-15 3fbbae18cb [BUGFIX] checkIntegrityCsvFixtures.php displays error reason (Markus Klein)
 * 2018-03-15 733a40879d [BUGFIX] Cast return value of postProcessDatabaseInsert to integer (Susanne Moog)
 * 2018-03-15 284411c142 [BUGFIX] Restore getUrl support for list of headers (Felix Buenemann)
 * 2018-03-15 031dd2c77d [BUGFIX] Unbind load event after page tree refresh (Andreas Fernandez)
 * 2018-03-15 3f00395749 [BUGFIX] LinkHandler creates wrong TS configuration (Stefan Froemken)
 * 2018-03-15 360aa5082c [BUGFIX] Apply potential changes after form editor save operation (Ralf Zimmermann)
 * 2018-03-15 d1ad6e5dc2 [BUGFIX] Accept configuration for external plugins from presets in ckeditor (Marcus Schwemer)
 * 2018-03-15 9752c7b3ba [BUGFIX] Correct path to translation in ReplaceFile template (Wouter Wolters)
 * 2018-03-14 58e987e579 [BUGFIX] Correctly reference sys_file_metadata.language in TCA (Christian Heindl)
 * 2018-03-14 5b4110221a [BUGFIX] Make hidden records searchable in top search (Georg Ringer)
 * 2018-03-13 56df051a7e [TASK] Set TYPO3 version to 8.7.12-dev (Oliver Hader)

