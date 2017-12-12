Release Notes for TYPO3 CMS 7.6.20
==================================

This document contains information about TYPO3 CMS 7.6.20 which was
released on July 4th, 2017.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

SHA256 checksums
----------------

    7c930d86f5fa8d8a97b562dc9b90c8a1a486f1be7b4a91188c8aab3fe40dae17  typo3_src-7.6.20.tar.gz
    198aa0aeaa82a3b56ac0eff2a88fd537a5791394584c1e5f0a0a9e2289170410  typo3_src-7.6.20.zip

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
[7.6.19](TYPO3_CMS_7.6.19 "wikilink"):

`* ecb6538c23 [RELEASE] Release of TYPO3 7.6.20`\
`* 3f2227d233 [BUGFIX] Correct the replace section of sysext:lang`\
`* a928f30c02 [BUGFIX] Fully initialize ContentObjectRenderer in HtmlViewHelper`\
`* 2ed9d0b71e [BUGFIX] Validate FormEngine fields on load`\
`* 4980a61478 [TASK] bamboo 7.6 test specs and pgsql install test`\
`` * e4c0a1b726 [BUGFIX] Fix namespace of `SaltedPasswordsUtility` in documentation ``\
`* 5fcc996dfd [TASK] Set TYPO3 version to 7.6.20-dev`


