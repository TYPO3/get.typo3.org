Release Notes for TYPO3 4.1.12
==============================

This document contains information about TYPO3 version 4.1.12 which was
released on July 3, 2009.

News
----

This release is a bugfix release.

Notes
-----

Due to upload problems at SourceForge, the dummy-4.1.12.tar.gz file is
missing in this release. However, you can just pick any other dummy
archive like e.g. dummy-4.0.12.tar.gz which is identical with this file.

Due to a bug which was reported to us short after the release of TYPO3
versions 4.1.11 and 4.2.7, we stopped the release of the announcement
and prepared new versions that fix this (minor) issue. TYPO3 4.0.13
which was already released yesterday was not affected by this bug.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    7121a82c1aced5d92623a56e27ee4bb5  dummy-4.1.12.tar.gz
    5db7d1e35675cabb97cd5d7b84f4e24d  dummy-4.1.12.zip
    2d39d05638ae65a4e1d0a49b11bf0737  typo3_src-4.1.12.tar.gz
    136020c3a3ce91e8982f89ae3861f8c6  typo3_src-4.1.12.zip
    62ad33c9e1f9bf2b8bc39339366e8397  typo3_src+dummy-4.1.12.zip

Upgrading
---------

The usual upgrading procedure applies; no database updates are
necessary.

Changelog
---------

<changelog> 2009-07-03 Michael Stucki &lt;michael@typo3.org&gt;

`   * Release of TYPO3 4.1.12`\
`   * Follow-up to issue #11391: Backport of the admin button was only half-way finished, in fact it was never visible due to a missing variable`

2009-07-03 Oliver Hader &lt;oliver@typo3.org&gt;

`   * Fixed issue #10656: htmlArea RTE: Initialization fails in presence of Firefox extension Ant.com Toolbar 1.3 (patch by Stanislas Rolland)`

2009-07-02 Ingmar Schlecht &lt;ingmar@typo3.org&gt;

`   * Release of TYPO3 4.1.11`

2009-07-01 Stanislas Rolland &lt;typo3@sjbr.ca&gt;

`   * Follow-up to issue #11009: External links get prepended with base url in RTE htmlArea in Firefox 3.0.11/3.5b4`

2009-06-29 Michael Stucki &lt;michael@typo3.org&gt;

`   * Added feature #11391: Add a button to let admins create the file ENABLE_INSTALL_TOOL from the backend (since it is automatically removed after 1 hour since this version) - thanks to Steffen Kamper who wrote this code!`

2009-06-28 Benjamin Mack &lt;benni@typo3.org&gt;

`   * Fixed #10136: tslib_pibase page browser may hurt search engines by the incorrect `“`Next`”` link (On behalf of Dmitry Dulepov)`

2009-06-23 Michael Stucki &lt;michael@typo3.org&gt;

`   * Fixed bug #11369: jumpUrl should only allow files matching fileDenyPattern (thanks to Ingmar Schlecht)`\
`   * Fixed bug #11368: Ignore ENABLE_INSTALL_TOOL file if it is older than one hour`

2009-05-18 Oliver Hader &lt;oliver@typo3.org&gt;

`   * Fixed bug #11009: External Links get prepended with `[`http://typo3`](http://typo3)` in the RTEhtmlarea in Firefox 3.0.11/3.5b4`

2009-05-16 Oliver Hader &lt;oliver@typo3.org&gt;

`   * Fixed bug #10165: FlexForms: wrong mm-relations after copy and localize (thanks to Peter Kuehn)`

2009-05-08 Steffen Kamper &lt;info@sk-typo3.de&gt;

`   * Fixed bug #11040: ENGINE modifier in ext_tables.sql cannot be parsed`

2009-04-24 Christian Kuhn &lt;lolli@schwarzbu.ch&gt;

`   * Fixed bug #10977: Copyright in TYPO3 comment still 2006 (Thanks to Johannes Feustel)`

2009-04-21 Patrick Broens &lt;patrick@patrickbroens.nl&gt;

`   * Fixed bug #10939: Wrong nesting of `

<li>
tags in expanded mount root in module file &gt; filelist

2009-04-09 Stanislas Rolland &lt;typo3@sjbr.ca&gt;

`   * Follow-up for issue #10844: htmlArea RTE: IE8 creates erroneous ranges when selection is empty`

2009-04-08 Christian Kuhn &lt;lolli@schwarzbu.ch&gt;

`   * Fixed bug #10266: No user authentication for >1 TYPO3 installation under one domain (Thanks to Marcus Krause)`

2009-04-06 Stanislas Rolland &lt;typo3@sjbr.ca&gt;

`   * Fixed issue #10834: htmlArea RTE: IE8 now uses standard name for DOM class attribute`\
`   * Updated htmlArea RTE version to 1.5.8 for TYPO3 4.1.11`\
`   * Fixed issue #10837: htmlArea RTE: IE8 reports unknown `“`complete`”` attribute on img nodes`\
`   * Fixed bug #10844: htmlArea RTE: IE8 creates erroneous ranges when selection is empty`

2009-04-03 Ingo Renner &lt;ingo@typo3.org&gt;

`   * Fixed bug #10838: t3lib_cs->utf8_decode() does not check whether the target charset is utf8`

2009-03-31 Benjamin Mack &lt;benni@typo3.org&gt;

`   * Fixed bug #10567: Added IE8+ support / Get rid of browser version dependent t3lib_div::clientInfo() (Thanks to Steffen Gebert)`

2009-03-23 Jeff Segars &lt;jeff@webempoweredchurch.org&gt;

`   * Fixed bug #10410: Generation of encryption key does not work in IE7 (thanks to Steffen Mueller)`

2009-02-27 Michael Stucki &lt;michael@typo3.org&gt;

`   * Follow-up to #10083: Constant styles.content.imgtext.separateRows has a wrong default value. This was changed accidentally during a bugfix on 2009-01-09. Reverting back to the old bahaviour (4.1.7 and before). Thanks to Adrian Fischer for pointing this out!`

2009-02-27 Francois Suter &lt;francois@typo3.org&gt;

`   * Fixed bug #10313: Fileadmin-module wrongly allows creation of trailing dot directories on UTF8 FS (Thanks to Steffen Gebert)`\
`   * Fixed bug #10417: Remove debugging code from sysext t3skin (thanks to Markus Krause)`

</changelog>
