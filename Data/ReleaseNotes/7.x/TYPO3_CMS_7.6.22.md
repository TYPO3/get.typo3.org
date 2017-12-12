Release Notes for TYPO3 CMS 7.6.22
==================================

This document contains information about TYPO3 CMS 7.6.22 which was
released on September 5th, 2017.

News
----

This release is a combined bug fix and security release.

Notes
-----

Find more details in the security bulletins:

-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2017-005/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2017-006/>
-   <https://typo3.org/teams/security/security-bulletins/typo3-core/typo3-core-sa-2017-007/>

Download
--------

<https://typo3.org/download/>

SHA256 checksums
----------------

    b9b9332cdfd7a51c815aa7c58f606b446bb1653d0e851a57e2c5f693aa87b4a8  typo3_src-7.6.22.tar.gz
    33917e6680d366775321f52681052908e908a9bf600a5df597f2528fcdb97ddd  typo3_src-7.6.22.zip

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
[7.6.21](TYPO3_CMS_7.6.21 "wikilink"):

`* ce56e13bf3 [RELEASE] Release of TYPO3 7.6.22`\
`* 82774856e9 [TASK] Apply CGL fixes`\
`* 9c18546e58 [SECURITY] Disallow pht as file extension`\
`* b979433972 [SECURITY] Remove version from default User-Agent`\
`* 9d429b0a15 [SECURITY] Respect permissions of storages in a file collection`\
`* e08b48fcf7 [SECURITY] Update moment.js and moment-timezone.js`\
`* 43b1d7a8b2 [SECURITY] Patch jQuery core to mitigate XSS possibility`\
`* 7d6354d9a0 [BUGFIX] Check if LocalConfiguration.php is writable`\
`* d8b99acfb2 [BUGFIX] Prevent command exit status overflow to non-error status`\
`* 27f9631eb8 [TASK] Functional tests for translated tt_content rendering in Extbase`\
`* f95c5c6105 [BUGFIX] Throw exception if encryption key is not set`\
`* 3b18631236 [TASK] travis-ci: Less parallel jobs`\
`* a548b360de [TASK] travis-ci: Split functional tests into more parts`\
`* 79ced4a452 [BUGFIX] Fix SQL error when bookmarking a sys_file_metadata record`\
`* bed4ceb6ad [BUGFIX] Prevent XSS in scheduler extension`\
`* 68a178816e [BUGFIX] Prevent XSS in PageLayoutController`\
`* 38eb30d6dc [BUGFIX] Use DriverInterface instead AbstractDriver for method signature`\
`* 0137bc561d [BUGFIX] Changes indentation in new page wizard`\
`* 9d3aa8618b [BUGFIX] Set language uid for inline children by default`\
`* e60db69d10 [BUGFIX] YouTubeRenderer "controls" option`\
`* 654ff849eb [TASK] Cover rendering of hidden tt_content with functional tests`\
`* 6d258d9767 [BUGFIX] Readd used fields in css_styled_content`\
`* 7059448b24 [BUGFIX] Update FAL metadata if file is added with REPLACE method`\
`* 1b4d3184c5 [TASK] Functional test for tt_content rendering`\
`* 2a618d4754 [BUGFIX] Fix folder element browser expand/collapse`\
`* 7e7498364b [TASK] Fix reST syntax in core 7.6 changelogs`\
`* ab2cd1fa43 [BUGFIX] Catch error in GeneralUtility::validEmail and GeneralUtility:isValidUrl`\
`* 442b1e1bad [TASK] Set TYPO3 version to 7.6.22-dev`


