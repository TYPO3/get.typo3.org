Release Notes for TYPO3 CMS 6.1.8
=================================

This document contains information about TYPO3 CMS 6.1.8 which was
released on April 16th, 2014.

News
----

This release is a bug fix release.

Notes
-----

This is part of a combined release of TYPO3 CMS 4.5.33, 4.7.18, 6.0.13,
6.1.8 and 6.2.1.

Download
--------

<https://typo3.org/download/>

MD5 checksums
-------------

    67b770048b7e4618b1211bc2a2ee4748  blankpackage-6.1.8.tar.gz
    78184aa9a2f2a371184928df20e7deb4  blankpackage-6.1.8.zip
    b9d3db34fec2a465e26c94cd05851177  dummy-6.1.8.tar.gz
    406e2bec8aeda2c85394639915852b5e  dummy-6.1.8.zip
    1581b336026f78eabb494120fcf50ae9  governmentpackage-6.1.8.tar.gz
    83e30785e1371d66c60aee1f3fac957a  governmentpackage-6.1.8.zip
    b3d9ebd52b4745a034eadb65d9d7af95  introductionpackage-6.1.8.tar.gz
    54a4e580723c64c5ed8907c88a74e936  introductionpackage-6.1.8.zip
    1952a3a3da799b976642089bb9969f1b  typo3_src+dummy-6.1.8.zip
    831bd2fd445bd50ac4a22d69114578a0  typo3_src-6.1.8.tar.gz
    7778d232c458cdbdbe316d020009bab4  typo3_src-6.1.8.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since [6.1.7](TYPO3_6.1.7 "wikilink"):

-   \[BUGFIX\] Mandatory for Selectbox with TCA not possible
    ([\#24925](https://forge.typo3.org/issues/24925))
-   \[BUGFIX\] SoftReferenceIndex typolink lacks support for title
    attributes ([\#56580](https://forge.typo3.org/issues/56580))
-   \[BUGFIX\] Fix refindex for FlexForm fields type group
    file\_reference ([\#56991](https://forge.typo3.org/issues/56991))
-   \[BUGFIX\] Fields of type group file are not properly indexed
    ([\#56353](https://forge.typo3.org/issues/56353))
-   \[BUGFIX\] Add SoftIndex parser typolink to link in
    sys\_file\_reference
    ([\#57010](https://forge.typo3.org/issues/57010))
-   \[TASK\] Updates prototype and scriptaculous, fixing IE9+ issues
    ([\#51768](https://forge.typo3.org/issues/51768))
-   \[BUGFIX\] sql\_free\_result does not work with all allowed types
    ([\#50378](https://forge.typo3.org/issues/50378))
-   \[BUGFIX\] User settings do not obey setup.override
    ([\#57690](https://forge.typo3.org/issues/57690))
-   \[BUGFIX\] ClickMenu: Visibility-options only if fields allowed
    ([\#55683](https://forge.typo3.org/issues/55683))
-   \[TASK\] Integrate default README.txt
    ([\#57656](https://forge.typo3.org/issues/57656))
-   \[SECURITY\] Prevent XSS in scheduler form
    ([\#57603](https://forge.typo3.org/issues/57603))
-   \[BUGFIX\] Make Extbase EnvironmentService a Singleton
    ([\#57518](https://forge.typo3.org/issues/57518))
-   \[BUGFIX\] Test typeof TBE\_EDITOR for object not function
    ([\#57296](https://forge.typo3.org/issues/57296))
-   \[BUGFIX\] Exception if thumbnail does not exist
    ([\#54394](https://forge.typo3.org/issues/54394))
-   \[BUGFIX\] Typo in Extbase localization file
    ([\#57238](https://forge.typo3.org/issues/57238))
-   \[BUGFIX\] Module Menu throws PHP warning for top level menu items
    ([\#57179](https://forge.typo3.org/issues/57179))
-   \[BUGFIX\] Parsetime: config.debug should override
    LocalConfiguration ([\#57202](https://forge.typo3.org/issues/57202))
-   \[BUGFIX\] Several typos in Page Browsing ViewHelper
    ([\#55340](https://forge.typo3.org/issues/55340))
-   \[BUGFIX\] Cannot use contain with multivalued static enumeration
    column ([\#56205](https://forge.typo3.org/issues/56205))
-   \[BUGFIX\] RootlineUtility does not consider disablefield
    ([\#56150](https://forge.typo3.org/issues/56150))
-   \[BUGFIX\] Extbase tries to overlay pages\_language\_overlay records
    ([\#56855](https://forge.typo3.org/issues/56855))
-   \[BUGFIX\] Alignment of button “add a new element at this place”
    ([\#56720](https://forge.typo3.org/issues/56720))
-   \[BUGFIX\] Show thumbnails in list module
    ([\#56830](https://forge.typo3.org/issues/56830))
-   \[BUGFIX\] Followup: Ajax handler TYPO3\_tcefile::process is broken
    ([\#56084](https://forge.typo3.org/issues/56084))
-   \[BUGFIX\] Correctly validate New Content Element entries
    ([\#23864](https://forge.typo3.org/issues/23864))
-   \[BUGFIX\] Allow record insert on rootlevel
    ([\#52386](https://forge.typo3.org/issues/52386))
-   \[BUGFIX\] Temporary DB tree mount notice missing in ElementBrowser
    ([\#43885](https://forge.typo3.org/issues/43885))
-   \[BUGFIX\] RTE on first new IRRE record keeps loading in IE
    ([\#55457](https://forge.typo3.org/issues/55457))
-   \[BUGFIX\] Default size for group-type fields
    ([\#23552](https://forge.typo3.org/issues/23552))
-   \[BUGFIX\] IdentityProperties were not set
    ([\#46185](https://forge.typo3.org/issues/46185))
-   \[BUGFIX\] Catch all errors while starting installer
    ([\#11771](https://forge.typo3.org/issues/11771))
-   \[BUGFIX\] Double escape of title in indexed search
    ([\#56262](https://forge.typo3.org/issues/56262))
-   \[BUGFIX\] Do not log with severity 1320177676
    ([\#56378](https://forge.typo3.org/issues/56378))
-   \[BUGFIX\] @return for
    TYPO3\\CMS\\Sv\\AuthenticationService::authUser
    ([\#56421](https://forge.typo3.org/issues/56421))
-   \[BUGFIX\] URL-encoded title in link wizard
    ([\#41413](https://forge.typo3.org/issues/41413))
-   \[BUGFIX\] Revert “\[TASK\] Use a 401 header if login is not
    successful” ([\#55966](https://forge.typo3.org/issues/55966))
-   \[BUGFIX\] Paginator in TER list not using ajax
    ([\#56184](https://forge.typo3.org/issues/56184))
-   \[BUGFIX\] felogin reset password links not clickable
    ([\#23984](https://forge.typo3.org/issues/23984))
-   \[BUGFIX\] Fix JS concat if first file is forced on top
    ([\#56242](https://forge.typo3.org/issues/56242))
-   \[BUGFIX\] Use count on storage after initialization of
    LazyObjectStorage ([\#54724](https://forge.typo3.org/issues/54724))
-   \[BUGFIX\] Fix possible language handling issue
    ([\#49499](https://forge.typo3.org/issues/49499))
-   \[BUGFIX\] Rendering inline TCEforms without AJAX is broken
    ([\#39048](https://forge.typo3.org/issues/39048))
-   \[BUGFIX\] concatenateJs/Css does not consider forceOnTop
    ([\#53116](https://forge.typo3.org/issues/53116))
-   \[BUGFIX\] DatabaseConnection::listQuery wrong usage of strpos()
    ([\#56135](https://forge.typo3.org/issues/56135))
-   \[BUGFIX\] Suppress EXIF warnings indexing images
    ([\#55286](https://forge.typo3.org/issues/55286))
-   \[BUGFIX\] Various static calls to non-static functions
    ([\#56067](https://forge.typo3.org/issues/56067))
-   \[BUGFIX\] Add missing htmlspecialchars for thumbnail URL
    ([\#56057](https://forge.typo3.org/issues/56057))
-   \[BUGFIX\] Show labels of additional doktypes in new page drag area
    ([\#52955](https://forge.typo3.org/issues/52955))
-   \[BUGFIX\] Missing encoding in flexforms IRRE javascript
    ([\#54304](https://forge.typo3.org/issues/54304))
-   \[BUGFIX\] addToAllTCAtypes() doesn't add new field
    ([\#52527](https://forge.typo3.org/issues/52527))
-   \[BUGFIX\] Fix clipboard thumbnail rendering
    ([\#56037](https://forge.typo3.org/issues/56037))
-   \[BUGFIX\] Usage of undefined variables in ShortcutToolbarItem
    ([\#55998](https://forge.typo3.org/issues/55998))
-   \[BUGFIX\] CommandController is not executed at same time
    ([\#55362](https://forge.typo3.org/issues/55362))
-   \[BUGFIX\] Missing label felogin\_forgotHash
    ([\#49440](https://forge.typo3.org/issues/49440))
-   \[BUGFIX\] cache\_clearAtMidnight conflicts with content
    start/endtime ([\#53028](https://forge.typo3.org/issues/53028))
-   \[TASK\] Execute lint in parallel
-   \[BUGFIX\] Allow to render the same TS object twice
    ([\#53768](https://forge.typo3.org/issues/53768))
-   \[BUGFIX\] Tests: Remove unstable GeneralUtilityTest::getUrl\*
    ([\#55821](https://forge.typo3.org/issues/55821))
-   \[BUGFIX\] “New page” wizard discloses existence of pages outside DB
    mount ([\#18797](https://forge.typo3.org/issues/18797))
-   \[TASK\] Add possibility creating accessible mock for abstract
    classes ([\#53564](https://forge.typo3.org/issues/53564))
-   \[BUGFIX\] CSV-Download not working in IE and HTTPS backend
    ([\#16491](https://forge.typo3.org/issues/16491))
-   \[BUGFIX\] Fix “action” labels in BE log
    ([\#55698](https://forge.typo3.org/issues/55698))
-   \[TASK\] Move cursor::pointer to complete header area in IRRE
    ([\#55611](https://forge.typo3.org/issues/55611))
-   \[BUGFIX\] Followup to \#54131
    ([\#54131](https://forge.typo3.org/issues/54131))
-   \[BUGFIX\] Missing namespace in ContentObjectRenderer
    ([\#55713](https://forge.typo3.org/issues/55713))
-   \[BUGFIX\] Set missing markers to empty string
    ([\#54112](https://forge.typo3.org/issues/54112))
-   \[BUGFIX\] Various PHP Warnings with invalid credentials
    ([\#55434](https://forge.typo3.org/issues/55434))
-   \[BUGFIX\] TSFE-&gt;altPageTitle can not be set in extensions
    ([\#54467](https://forge.typo3.org/issues/54467))
-   \[BUGFIX\] Add stdWrap on value property of TEXT
    ([\#54371](https://forge.typo3.org/issues/54371))
-   \[BUGFIX\] Locker throws exception if semaphore can not be acquired
    ([\#52048](https://forge.typo3.org/issues/52048))
-   \[BUGFIX\] PropertyMapper does not work with class aliasses
    ([\#54289](https://forge.typo3.org/issues/54289))
-   \[BUGFIX\] getLabelsFromItemsList() retuns no value when no item
    found ([\#54131](https://forge.typo3.org/issues/54131))
-   \[BUGFIX\] Regression in DataHandler
    ([\#55475](https://forge.typo3.org/issues/55475))
-   \[BUGFIX\] DocumentTemplate class inserts inDocStyles twice
    ([\#55458](https://forge.typo3.org/issues/55458))
-   \[BUGFIX\] Handle empty tags in language pack index files
    ([\#41450](https://forge.typo3.org/issues/41450))
-   \[BUGFIX\] ClickMenu does not show destination-foldername
    ([\#55407](https://forge.typo3.org/issues/55407))
-   \[BUGFIX\] Invalid constant in the domain redirect function
    ([\#55350](https://forge.typo3.org/issues/55350))
-   \[TASK\] Change repository url for introduction package
    ([\#55377](https://forge.typo3.org/issues/55377))
-   \[TASK\] Change phpunit repository url for travis
    ([\#55366](https://forge.typo3.org/issues/55366))
-   \[BUGFIX\] Better description of
    \[BE\]\[unzip\_path\]/\[BE\]\[diff\_path\]
    ([\#53964](https://forge.typo3.org/issues/53964))
-   \[BUGFIX\] Simulate time in TYPO3 admin panel broken
    ([\#55093](https://forge.typo3.org/issues/55093))
-   \[BUGFIX\] sys\_category table not listed in allowed excludefields
    ([\#53201](https://forge.typo3.org/issues/53201))
-   \[BUGFIX\] Removing single category item not possible
    ([\#53665](https://forge.typo3.org/issues/53665))
-   \[BUGFIX\] CLI context cannot write to backend log
    ([\#54849](https://forge.typo3.org/issues/54849))
-   \[BUGFIX\] Class 'TYPO3\\CMS\\Recordlist\\Browser\\GeneralUtility'
    not found ([\#55246](https://forge.typo3.org/issues/55246))
-   \[BUGFIX\] Static method cannot be abstract
    ([\#37539](https://forge.typo3.org/issues/37539))
-   \[BUGFIX\] RootlineUtility does not consider foreign\_sorting
    ([\#54884](https://forge.typo3.org/issues/54884))
-   \[BUGFIX\] Create valid file reference index data
    ([\#53712](https://forge.typo3.org/issues/53712))
-   \[BUGFIX\] File browser fails on inexistent expandFolder
    ([\#50266](https://forge.typo3.org/issues/50266))
-   \[BUGFIX\] Show correct record title for be\_groups and be\_users
    ([\#34631](https://forge.typo3.org/issues/34631))
-   \[BUGFIX\] PHP warnings in ElementBrowser
    ([\#54995](https://forge.typo3.org/issues/54995))
-   \[TASK\] Speedup typolink root-line handling
    ([\#54959](https://forge.typo3.org/issues/54959))
-   \[BUGFIX\] Folder tree in popup throws JS error
    ([\#53826](https://forge.typo3.org/issues/53826))
-   \[BUGFIX\] Add defaultTypoScript to hierachyInfo
    ([\#53352](https://forge.typo3.org/issues/53352))
-   \[BUGFIX\] Template dropdown doesn't refresh template title after
    save ([\#51805](https://forge.typo3.org/issues/51805))
-   \[BUGFIX\] Add missing logger names
    ([\#54909](https://forge.typo3.org/issues/54909))
-   \[BUGFIX\] Allow empty values in start/stop filter of belog
    ([\#53975](https://forge.typo3.org/issues/53975))
-   \[BUGFIX\] isValidUrl() idna converts whole URI
    ([\#53862](https://forge.typo3.org/issues/53862))
-   \[TASK\] Change list view delete icon if record is deleted in WS
    ([\#52554](https://forge.typo3.org/issues/52554))
-   \[BUGFIX\] Properly escape the ImageMagick frame selector
    ([\#31797](https://forge.typo3.org/issues/31797))
-   \[BUGFIX\] Only create one keypair in rsaauth
    ([\#24877](https://forge.typo3.org/issues/24877))
-   \[BUGFIX\] use search word(s) for ordering search results (again)
    ([\#38767](https://forge.typo3.org/issues/38767))
-   \[BUGFIX\] foreign\_match\_fields not fully supported
    ([\#47694](https://forge.typo3.org/issues/47694))
-   \[BUGFIX\] Form Wizard saving destroys Radio Buttons
    ([\#53727](https://forge.typo3.org/issues/53727))
-   \[BUGFIX\] Display relations' titles when TCA label field is type
    inline ([\#52133](https://forge.typo3.org/issues/52133))
-   \[BUGFIX\] PageBrowsing ViewHelper defines unused method argument
    ([\#54807](https://forge.typo3.org/issues/54807))
-   \[BUGFIX\] Repository uses wrong property to calc current result
    page ([\#54808](https://forge.typo3.org/issues/54808))
-   \[BUGFIX\] Allow NULL values in INSERT queries
    ([\#53662](https://forge.typo3.org/issues/53662))
-   \[TASK\] Optimize speed for instantiating class with arguments
    ([\#53682](https://forge.typo3.org/issues/53682))
-   \[BUGFIX\] ClassAliasMap, Tx\_ VH namespace and closing tag throws
    Exception ([\#54115](https://forge.typo3.org/issues/54115))
-   \[BUGFIX\] Fix message for install tool warning
    ([\#54531](https://forge.typo3.org/issues/54531))
-   \[TASK\] Fix travis builds
    ([\#54369](https://forge.typo3.org/issues/54369))
-   \[BUGFIX\] ArrayIterator::seek() warning in ElementBrowser
    ([\#51752](https://forge.typo3.org/issues/51752))
-   \[BUGFIX\] felogin: Unknown modifier in regular expression
    ([\#52059](https://forge.typo3.org/issues/52059))
-   \[BUGFIX\] Remove ElementBrowser::isReadOnlyFolder
    ([\#47648](https://forge.typo3.org/issues/47648))
-   \[BUGFIX\] No double htmlspecialchars for filemount select
    ([\#54027](https://forge.typo3.org/issues/54027))
-   \[BUGFIX\] Cleanly unset cookies on login in cookie-check
    ([\#53818](https://forge.typo3.org/issues/53818))


