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

```
 * 9e6040c33d [RELEASE] Release of TYPO3 8.7.12
 * 00ff302556 Revert "[BUGFIX] Test ifBlank with strlen again"
 * 31075b95d3 Revert "[BUGFIX] Simulate submit button for rsaauth form submit"
 * 9500d1d580 Revert "[BUGFIX] Trigger submit of RSA encrypted form properly"
 * 65973b5edd [TASK] add missing "HTTP/1.1 308 Permanent Redirect" to HttpUtility
 * 1cb45290d8 [BUGFIX] Rename sub-property thousand_sep of numberFormat
 * 8bbc425d58 [BUGFIX] Fix typo in TCA of be_users
 * c6a630bcd0 [BUGFIX] Move Doctrine custom type init back to ConnectionPool
 * 87aa901120 [BUGFIX] Respect automaticInstallation setting in extension manager
 * d4f1d55972 [BUGFIX] Make line height configurable for Gifbuilder
 * c12fe3c17c [BUGFIX] Test ifBlank with strlen again
 * 99e81190f3 [TASK] Correct QuerySettingsInterface RespectSysLanguage comments
 * b2408cca82 [BUGFIX] Prevent type converters from being registered multiple times
 * a812bacc25 [TASK] Remove irc notification from travis.yml
 * 309826dac9 [BUGFIX] Upgrade Wizard must work also on records marked as deleted
 * 8bcd58a219 [BUGFIX] Trigger submit of RSA encrypted form properly
 * 3fbbae18cb [BUGFIX] checkIntegrityCsvFixtures.php displays error reason
 * 733a40879d [BUGFIX] Cast return value of postProcessDatabaseInsert to integer
 * 284411c142 [BUGFIX] Restore getUrl support for list of headers
 * 031dd2c77d [BUGFIX] Unbind load event after page tree refresh
 * 3f00395749 [BUGFIX] LinkHandler creates wrong TS configuration
 * 360aa5082c [BUGFIX] Apply potential changes after form editor save operation
 * d1ad6e5dc2 [BUGFIX] Accept configuration for external plugins from presets in ckeditor
 * 9752c7b3ba [BUGFIX] Correct path to translation in ReplaceFile template
 * 58e987e579 [BUGFIX] Correctly reference sys_file_metadata.language in TCA
 * 5b4110221a [BUGFIX] Make hidden records searchable in top search
 * 56df051a7e [TASK] Set TYPO3 version to 8.7.12-dev
```
