Release Notes for TYPO3 4.5.2
=============================

This document contains information about TYPO3 version 4.5.2 which was
released on February 25, 2011.

News
----

This version is a maintenance release and contains bugfixes only. It
solves some regressions which were introduced in 4.5.1. All users of
4.5.0 and 4.5.1 are strongly advised to upgrade.

Please note that since the release of 4.5.1, the development of the new
(and old) Extension Manager is done again in the current typo3\_src
branch (in the main TYPO3 repository) so that there is no longer an
external repository with the code. Also note that further issues with
the Extension Manager should be posted on the regular bug tracker
(https://forge.typo3.org/projects/typo3cms-core/issues &gt; Category
“Extension Manager”) instead of the external project on forge.

Download
--------

<https://typo3.org/download/>

### MD5 checksums

    cad7fa2b4a4169e25318ae7f9f1a3e31  dummy-4.5.2.tar.gz
    88d81c968fd22020cc808c7283286b8e  dummy-4.5.2.zip
    d9c8f325c9ad63437215792c17ac1676  typo3_src-4.5.2.tar.gz
    8b4ebd7129ea35b7b9d68f5d57e5cad6  typo3_src-4.5.2.zip
    d348caf3cc1e2b08ba71779a438a1873  typo3_src+dummy-4.5.2.zip
    bfa5024524a28fd5570f5b13b12045f9  introductionpackage-4.5.2.tar.gz
    adcd504551721d1189f771c00bc4d378  introductionpackage-4.5.2.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is an ordered list of what was fixed since 4.5.1:

### General Errors / Warnings

-   Fixed bug \#17728: PHP warning in page module (e.g. in TemplaVoila)
    with active open\_basedir
-   Fixed bug \#17732: Install Tool doing Fatal error when APC PHP
    module is loaded (no session is stored)

### Linkvalidator

-   Fixed bug [13340](https://forge.typo3.org/issues/13340): pid and uid
    database fields are always 0
-   Fixed bug [13318](https://forge.typo3.org/issues/13318): Regression
    in linkvalidator (Fatal Error)

### Backend

-   Fixed bug \#17431: “Show Page” in contextmenu results in new browser
    window (Thanks to Simon Schaufelberger)
-   Fixed bug \#16788: Flexform inputfields remain empty due to
    javascript error (Thanks to Andreas Kiessling)

### Extension Manager

-   Fixed bug \#17772: Repository update deletes description of
    repository
-   Fixed bug [13310](https://forge.typo3.org/issues/13310): PHP Warning
    “array\_merge(): Argument \#2 is not an array” in
    class.tx\_em\_settings.php
-   Fixed bug \#17692: Updating translations does not work anymore
-   Fixed bug \#17769: Wrong property for db updates
-   Fixed bug \#17735: Class 'tx\_em\_XmlException' not found when
    Retrieve / Update
-   Fixed bug \#17758: After update repository the info labels are not
    updated
-   Fixed bug [13309](https://forge.typo3.org/issues/13309): Text on
    “Settings” tab needs more space
-   Fixed bug \#17701: Regression: Generated t3x are corrupted


