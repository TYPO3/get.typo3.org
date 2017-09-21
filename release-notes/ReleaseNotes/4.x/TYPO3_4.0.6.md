RELEASE NOTES FOR TYPO3 4.0.6
=============================

This document contains information about TYPO3 version 4.0.6 which was
released on April 3, 2007.

Download
--------

<https://typo3.org/download/>
<http://sourceforge.net/project/showfiles.php?group_id=20391&package_id=14557&release_id=498431>

MD5 checksums
-------------

    a50e5a024563d5451a756ee025227004  dummy-4.0.6.tar.gz
    2d1552296e3bd1935cf9f4fd0e5b6761  dummy-4.0.6.zip
    383d5401d139e51b970622e2c68ec023  typo3_src+dummy-4.0.6.zip
    d4e784f69d97c704f46635e8afc6ec7d  typo3_src-4.0.6.tar.gz
    9bcb5989536ef3d05e862fa220347b6c  typo3_src-4.0.6.zip

Source:
<http://sourceforge.net/project/shownotes.php?release_id=498431&group_id=20391>

Upgrading
---------

This version contains a fix that makes the TYPO3 Rich Text Editor
(rtehtmlarea) work again in Mozilla Firefox 2.0.0.3. To ensure that this
will work, you need to remove all \*.js files inside the typo3temp/
directory!

Changelog
---------

<changelog>2007-04-03 Michael Stucki michael@typo3.org

`       * Release of TYPO3 4.0.6`

2007-03-28 Patrick Broens patrick@patrickbroens.nl

`       * Fixed bug #5266: WamCom browser check in htmlarea.js conflicted with Firefox 2.0.0.3`

2007-03-01 Karsten Dambekalns karsten@typo3.org

`       * typo3/sysext/indexed_search: DBAL compliancy patch`

2007-02-27 Oliver Hader oh@inpublica.de

`       * Fixed bug: #5052: Form action URL is not htmlspecialchared (patch by Michael Stucki)`

2007-02-27 Martin Kutschker martin.t.kutschker@blackbox.net

`       * Fixed bug #3666: permissions of versioned pages are not changed in draft workspace (patch by Andreas Wolf)`

</changelog>

<Category:ReleaseNotes/TYPO3_4.0.x> [Category:TYPO3
4.0](Category:TYPO3_4.0 "wikilink") <Category:2007>
