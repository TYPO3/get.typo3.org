Release Notes for TYPO3 4.4.8
=============================

This document contains information about TYPO3 version 4.4.8 which was
released on May 24th, 2011.

News
----

This version is a maintenance release and contains bugfixes only. All
users of previous 4.4 versions are strongly advised to upgrade.

Starting with this release, we will no longer supply an Introduction
Package for the old stable release (4.4). Introduction Package will be
build only for the current stable release (4.5) and the current
development version (4.6).

Download
--------

<https://typo3.org/download/>

### MD5 checksums

    d66dfb291914823879a01ccef59e0bdf  typo3_src-4.4.8.tar.gz
    a1d50452f005478cd7b94800cf85f762  typo3_src-4.4.8.zip
    b58eaa4b8afe02e06aff0fa3fc6fd7ac  blankpackage-4.4.8.tar.gz
    24cbaacda9e79eeadee8a638e4751f7f  blankpackage-4.4.8.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

### Scheduler tasks

If you use the Scheduler to have some tasks done automatically, you must
adjust the file rights of some files in the TYPO3 Core by hand.\
[For more information see here.](https://forge.typo3.org/issues/27029)

Changes
-------

Here is an ordered list of what was fixed since 4.4.7:

-   \[BUGFIX\] Display correct lost records count in record statistics
    (Susanne Moog) ([25863](https://forge.typo3.org/issues/25863))
-   \[TASK\] Remove file SVNreadme.txt (Steffen Gebert)
-   \[BUGFIX\] Wrong type hinting in interface
    tslib\_menu\_filterMenuPagesHook (Michael Birchler)
    ([25979](https://forge.typo3.org/issues/25979))
-   \[BUGFIX\] List module - Fix pointer issue in pagebrowser (Peter
    Beernink) ([20908](https://forge.typo3.org/issues/20908))
-   \[BUGFIX\] meaningfulTempFilePrefix generates bad file names in some
    cases (Dmitry Dulepov)
    ([25316](https://forge.typo3.org/issues/25316))
-   \[BUGFIX\] Missing sprite icons in module db check &gt; record
    statistics (Sven Juergens)
    ([24835](https://forge.typo3.org/issues/24835))
-   \[BUGFIX\] Flexformfield “Forgot Password Message” in felogin does
    not work (Steffen Mueller)
    ([23134](https://forge.typo3.org/issues/23134))
-   \[BUGFIX\] Save and view triggers preview of wrong page (Francois
    Suter) ([24376](https://forge.typo3.org/issues/24376))
-   \[BUGFIX\] Visibility of method tx\_sysaction\_task::fixUsername()
    (Oliver Hader) ([25219](https://forge.typo3.org/issues/25219))
-   \[BUGFIX\] Using datetime field with datepicker the time information
    gets lost (Steffen Kamper) (\#17596)
-   \[FEATURE\] add .gitignore for common file exclusions (Peter
    Niederlag(office))
-   \[BUGFIX\] Configuration Tool creates invalid extTables.php file
    (Markus Klein) ([25781](https://forge.typo3.org/issues/25781))
-   \[BUGFIX\] BE ajax request fails on some systems with php 5.3 (Joh.
    Feustel) (\#17250)
-   \[BUGFIX\] Wrong CSS definition for “submit” (Steffen Gebert)
    (\#18043)
-   \[BUGFIX\] link title with wrong encoded umlauts (Frederic Gaus,
    Flagbit GmbH & Co. KG) (\#17979)
-   \[BUGFIX\] Deleted overlay missing in overlay priorities (Francois
    Suter) (\#17815)
-   \[BUGFIX\] Drop the checks for the image file size from the install
    tool (Oliver Klee) (\#17849)
-   \[BUGFIX\] Install Tool doing Fatal error when APC PHP module is
    loaded (no session is stored) (baschny) (\#17732)
-   \[BUGFIX\] Flexform inputfields remain empty (Thanks to Andreas
    Kiessling) (steffenk) (\#16788)


