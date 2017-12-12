Release Notes for TYPO3 4.6.1
=============================

This document contains information about TYPO3 version 4.6.1 which was
released on November 22th 2011.

News
----

This version is a maintenance release and contains bug fixes only.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    d93b40429a4f1d465d3d170088144484  blankpackage-4.6.1.tar.gz                                                         
    e8fae19cb7370315c3014689a58afcb9  blankpackage-4.6.1.zip                                                            
    bce779dd5d503bb40013ad6459234b31  dummy-4.6.1.tar.gz                                                                
    27e431a1171688f363a6ea13c09c86b2  dummy-4.6.1.zip                                                                   
    7ad19e71cc342a0ce22298c77c0904d1  introductionpackage-4.6.1.tar.gz                                                  
    d083eed933c394b758b749e956db5aa1  introductionpackage-4.6.1.zip                                                     
    f4be286a12ace6783001835d7a600e94  typo3_src+dummy-4.6.1.zip                                                         
    10a14728a3d50971fce6b304521ba6a1  typo3_src-4.6.1.tar.gz                                                            
    2088caa4357cd823ec143e52714d1c50  typo3_src-4.6.1.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since 4.6.0:

### Backend

-   \[BUGFIX\] Log date picker broken
    ([\#31450](https://forge.typo3.org/issues/31450))
-   \[BUGFIX\] Options checkboxes are hidden in BE admin user form
    ([\#30492](https://forge.typo3.org/issues/30492))

### DBAL

-   \[TASK\] Update ADOdb library to version 5.14
    ([\#31486](https://forge.typo3.org/issues/31486))
-   \[TASK\]\[!!!\] Replaces die() calls with RuntimeException
    ([\#31826](https://forge.typo3.org/issues/31826))

### Extbase

-   \[BUGFIX\] Make SignalSlot Dispatcher a singleton
    ([\#31950](https://forge.typo3.org/issues/31950))
-   \[BUGFIX\] DateTime properties are not mapped correctly
    ([\#31345](https://forge.typo3.org/issues/31345))
-   \[BUGFIX\] Make changed action resolving backwards compatible
    ([\#31322](https://forge.typo3.org/issues/31322))

Further reading: [Extension's
ChangeLog](https://git.typo3.org/TYPO3v4/CoreProjects/MVC/extbase.git?a=blob;f=ChangeLog.txt;hb=extbase_1-4)

### Extension Manager

-   \[BUGFIX\] EM: Confusing error message when uploading an extension
    to TER that is not registered
    ([\#31309](https://forge.typo3.org/issues/31309))

### Fluid

-   \[BUGFIX\] TextboxViewHelper does not return anything
    ([\#31331](https://forge.typo3.org/issues/31331))
-   \[BUGFIX\] Fix version dependency for extbase
-   \[BUGFIX\] Fix PHP Warnings in Unit Tests

Further reading: [Extension's
ChangeLog](https://git.typo3.org/TYPO3v4/CoreProjects/MVC/fluid.git?a=blob;f=ChangeLog.txt;hb=fluid_1-4)

### Form

-   \[BUGFIX\] Handling file upload fields is broken
    ([\#31085](https://forge.typo3.org/issues/31085))

### Install Tool

-   \[BUGFIX\] Install tool stays open if ENABLE\_INSTALL\_TOOL is not
    writable ([\#29674](https://forge.typo3.org/issues/29674))

### Labels/Localization

-   \[BUGFIX\] alt\_doc.php uses deleted alternative page languages for
    translations ([\#31379](https://forge.typo3.org/issues/31379))
-   \[BUGFIX\] Disambiguate labels in exclude fields list
    ([\#25236](https://forge.typo3.org/issues/25236))
-   \[BUGFIX\] XLIFF: Invalid handling of overlays for unavailable
    language ([\#31353](https://forge.typo3.org/issues/31353))
-   \[BUGFIX\] Empty text with non-localizable label key
    ([\#31347](https://forge.typo3.org/issues/31347))

### TCA

-   \[BUGFIX\]\[!!!\] Slider wizard misuses “max” property
    ([\#31724](https://forge.typo3.org/issues/31724))

### Workspaces & Versioning

-   \[BUGFIX\] Error after hide/show element in list module
    ([\#20598](https://forge.typo3.org/issues/20598))

### Other Bugs/Tasks

-   \[BUGFIX\] Error in the pageNotFound\_handling with USER\_FUNCTION
    ([\#31839](https://forge.typo3.org/issues/31839))
-   \[BUGFIX\] Vimeo mediawizardprovider needs new syntax
    ([\#31661](https://forge.typo3.org/issues/31661))
-   \[BUGFIX\] magic\_quotes\_gpc does not exist anymore in PHP 5.4
    ([\#30083](https://forge.typo3.org/issues/30083))
-   \[TASK\] Add missing tslib\_content\_abstract::getContentObject()
    ([\#30994](https://forge.typo3.org/issues/30994))
-   \[BUGFIX\] JS error on initialization of RTE extension plugin
    ([\#31498](https://forge.typo3.org/issues/31498))

<Category:ReleaseNotes/TYPO3_4.6.x> [Category:TYPO3
4.6](Category:TYPO3_4.6 "wikilink") <Category:2011>
