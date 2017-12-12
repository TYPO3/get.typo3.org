Release Notes for TYPO3 CMS 7.6.13
==================================

This document contains information about TYPO3 CMS 7.6.13 which was
released on November 22nd, 2016.

News
----

This release is a combined bug fix and security release.

Notes
-----

Find more details in the security bulletins:

-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-023/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2016-024/>

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    4bc2bddc9f4a75480ff9e8cb7cf68d7a  typo3_src-7.6.13.tar.gz
    ac939f17c48791e7a5e9493fe562b3dc  typo3_src-7.6.13.zip

SHA256 checksums
----------------

    01bba6656e04af18cfbb81e537d1958e0821511500ac7a3a6ad31593092a6b90  typo3_src-7.6.13.tar.gz
    14eff54f0fde3f1102f0409c7e1da3f387c707e220e8a4ffc1025b2f5d7a91ce  typo3_src-7.6.13.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.\
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
[7.6.12](TYPO3_CMS_7.6.12 "wikilink"):

    2016-11-22  c191906                  [RELEASE] Release of TYPO3 7.6.13 (TYPO3 Release Team)
    2016-11-22  85f2ed3  #78557          [SECURITY] Prevent unnecessary unserialize in SuggestWizard (Nicole Cordes)
    2016-11-22  1fa900f  #73453          [SECURITY] Disallow invalid encoding in GeneralUtility::validPathStr (Benni Mack)
    2016-11-20  9e5a190  #78727          [BUGFIX] indexed_search/template_css: Remove useless &nbsp; (Benjamin Franzke)
    2016-11-20  b6f75aa  #78752          [BUGFIX] Trim input into xml2array (Anja Leichsenring)
    2016-11-18  efdb548  #78664          [BUGFIX] Do not serialize variables for TransientMemoryBackend (Claus Due)
    2016-11-18  a2f2a4b  #78728          [BUGFIX] YouTubeRenderer: urlencode the origin parameter (Benjamin Franzke)
    2016-11-18  de9fd09  #78737          [BUGFIX] Add check for valid directory name for TCA select fileFolder (Anja Leichsenring)
    2016-11-18  988f810  #78748          [BUGFIX] Generate correct syntax in new VH compiling Traits (Claus Due)
    2016-11-18  99133d7  #78718          [TASK] Import forward-compatible Fluid compiling Traits (Claus Due)
    2016-11-18  9a0d485  #78739          [BUGFIX] Update session id in user property (Helmut Hummel)
    2016-11-18  400e200  #78703          [BUGFIX] Use GeneralUtility::getUrl in DocumentationService->fetchDocument (Claus Due)
    2016-11-18  47f89a0  #67838          [TASK] Update pear/http_request2 dependency to version 2.3.0 (Claus Due)
    2016-11-17  9645a32  #69763          [FOLLOWUP][BUGFIX] Redirect BE user to login on invalid module/route token (Markus Klein)
    2016-11-17  7882227  #69763          [BUGFIX] Redirect BE user to login on invalid module/route token (Frans Saris)
    2016-11-16  b110c78  #78719          [BUGFIX] Fix login redirect_url for fresh logins (Benjamin Franzke)
    2016-11-16  aec2c0a  #78699          [BUGFIX] Use scheme from EnvironmentVariables for forceAbsoluteUrl (Frans Saris)
    2016-11-16  9564e3e  #78637          [TASK] Cover t3_origuid in functional tests for Workspaces/Regular/PublishAll (Tymoteusz Motylewski)
    2016-11-15  7ad9178  #76153          [BUGFIX] Catch exceptions while dumping a file (Wouter Wolters)
    2016-11-13  efe1d73  #78678          [TASK] Add correct parameter phpDoc types in LocalizationRepository (Wouter Wolters)
    2016-11-13  4473658  #78631          [BUGFIX] Let Extension Manager API also create folders (Helmut Hummel)
    2016-11-13  c8037d3  #75743          [BUGFIX] Do not add empty alert fieldChangeFunc to link browser URL (Markus Klein)
    2016-11-13  eb1ff54  #78608          [TASK] Use HTML5 input type number for backend pagination (Georg Ringer)
    2016-11-13  adf40db  #77983,#76118   [TASK] Use semver for Symfony versions (Patrik Karisch)
    2016-11-13  c33d526  #78666          [BUGFIX] Resolves extension dependencies recursively (Nicole Cordes)
    2016-11-13  51bfde1  #78238          [BUGFIX] Bind the cHash to the id of the "real" page (Helmut Hummel)
    2016-11-13  355772e  #78306          [BUGFIX] EM must treat line breaks correctly in extension data (Markus Klein)
    2016-11-13  6ab8273  #78553          [BUGFIX] Provide addQueryStringMethod for ViewHelper f:form (Georg Ringer)
    2016-11-12  cdcbbc1  #78545          [TASK] Close document by clicking "Save and create new one" (Markus Hoelzle)
    2016-11-12  3b7e604  #78250          [BUGFIX] Handle different result types in dbal (Nicole Cordes)
    2016-11-12  2f45584  #78645          [TASK] Remove typo3/.htaccess (Markus Klein)
    2016-11-12  3f8f2c4  #78376          [TASK] Streamline and optimize JavaScript in install tool (Frank Naegler)
    2016-11-10  e74de94  #76277          [BUGFIX] Fix double escaping of icon and title in EXT:impexp (Wouter Wolters)
    2016-11-10  d9ee0e4  #78526          [BUGFIX] Use page uid instead of alias for cHash calculation (Helmut Hummel)
    2016-11-08  21465ac  #72797          [BUGFIX] Hide language switcher if record has no default translation (Christina Hauk)
    2016-11-08  692f439  #78457          [BUGFIX] Continue searching after empty result in suggest wizard (Wouter Wolters)
    2016-11-08  9e245ce  #78597          [TASK] Cover t3_origuid in functional tests for Wokspaces/Regular/Publish (Tymoteusz Motylewski)
    2016-11-07  e050098  #78595          [TASK] Remove Documentation/Settings.yml (Christian Kuhn)
    2016-11-07  ca6e087  #72311          [BUGFIX] Listview: Display parent field of categories (Michael Oehlhof)
    2016-11-07  21163a0  #78574          [BUGFIX] ElementBrowser does not highlight selected file in file list view (Jörg Bösche)
    2016-11-05  18792c9  #78579          [DOC] Clarify phpdoc of SimpleFileBackend that lifetime is unsupported (Markus Klein)
    2016-11-04  744aebb  #78540          [BUGFIX] Load ext_emconf information in extension installation (Nicole Cordes)
    2016-11-01  255a973  #78519          [TASK] Allow multiple search words for file search (Markus Klein)
    2016-11-01  a35745e  #78517          [BUGFIX] Always log exception data if file handling fails (Markus Klein)
    2016-11-01  74b0865                  [TASK] Set TYPO3 version to 7.6.13-dev (TYPO3 Release Team)


