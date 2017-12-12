RELEASE NOTES FOR TYPO3 4.2.5
=============================

This document contains information about TYPO3 version 4.2.5 which was
released on January 24, 2009.

News
----

to be completed...

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    64d53b1d5be9dd94d204e4e66fb34771  dummy-4.2.5.tar.gz
    23ed56626ae13a6e328af1362862720e  dummy-4.2.5.zip
    75b2e5db6ac586fb6176f329be452159  typo3_src-4.2.5.tar.gz
    c1e78b8d648476448730c184a35c0bd7  typo3_src-4.2.5.zip
    5d313dc15e13292d250c30fd4369ff41  typo3_src+dummy-4.2.5.zip

Source:
<http://sourceforge.net/project/shownotes.php?group_id=20391&release_id=655060>

Upgrading
---------

If you have used TYPO3 4.2.4 before and have already created a new
encryption-key with TYPO3 4.2.4, you don't have to do anything special.
Just do the update as usual.

If you have not: You will need to create a **new encryption key**! See
[TYPO3 Security
Bulletin](https://typo3.org/teams/security/security-bulletins/typo3-sa-2009-001/),
section “Vulnerable subcomponent \#1” for instructions.

Again, if you have not already followed the instructions found in the
4.2.4 Release Notes, **please read the following carefully**:

If you use Firefox 3 or Epiphany 2 you have to be careful:

Clear the configuration cache **before** you start with the update (if
you don't you can still physically delete the
*typo3conf/temp\_CACHED\_\** files). And you must delete the cookies of
the TYPO3 BE in your browsers. Otherwise you won't be able to login into
the backend any more, because you get logged out by a timeout
immediately. You must not only delete the cookies for your specific
domain (say www.domain.com), but also the “wildcard” cookies (e.g.
“.domain.com” or “\*.domain.com”).

------------------------------------------------------------------------

Database-updates are not necessary.

\

Changelog
---------

    2009-01-24  Ingmar Schlecht  ingmar@typo3.org

        * Release of TYPO3 4.2.5

    2009-01-24  Ingmar Schlecht  ingmar@typo3.org

        * Fixed bug #10205: DB session record is only created when user is authenticated (thanks also to Michael Stucki)

    2009-01-20  Steffen Kamper  info@sk-typo3.de

        * Fixed bug #9345: Bug: CSV export includes _CLIPBOARD_ in header row (thanks to Christian Kuhn)

[Category:ReleaseNotes/TYPO3
4.2.x](Category:ReleaseNotes/TYPO3_4.2.x "wikilink") [Category:TYPO3
4.2](Category:TYPO3_4.2 "wikilink") <Category:2009>
