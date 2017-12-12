Release Notes for TYPO3 CMS 6.0.13
==================================

This document contains information about TYPO3 CMS 6.0.13 which was
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

    8973034f803ddca444f735fb43954fdb  blankpackage-6.0.13.tar.gz
    89ac3036e26217912232f08629b66841  blankpackage-6.0.13.zip
    372b651e90dba88770131d917d8fa933  dummy-6.0.13.tar.gz
    3412df8dc52ca28c95338843cefaea27  dummy-6.0.13.zip
    1a7fcac021d56f423d274ec8c82daf4d  typo3_src+dummy-6.0.13.zip
    4d21cced41dcc9719e59262e6cf32686  typo3_src-6.0.13.tar.gz
    6394671abd7a2b3a4098f618666633a6  typo3_src-6.0.13.zip

Upgrading
---------

The [usual upgrading
procedure](https://docs.typo3.org/typo3cms/InstallationGuide/) applies.
No database updates are necessary.

Changes
-------

Here is a list of what was fixed since
[6.0.12](TYPO3_6.0.12 "wikilink"):

-   \[TASK\] Updates prototype and scriptaculous, fixing IE9+ issues
    ([\#51768](https://forge.typo3.org/issues/51768))
-   \[BUGFIX\] SoftReferenceIndex typolink lacks support for title
    attributes ([\#56580](https://forge.typo3.org/issues/56580))
-   \[BUGFIX\] Fix refindex for FlexForm fields type group
    file\_reference ([\#56991](https://forge.typo3.org/issues/56991))
-   \[BUGFIX\] Fields of type group file are not properly indexed
    ([\#56353](https://forge.typo3.org/issues/56353))
-   \[BUGFIX\] Add SoftIndex parser typolink to link in
    sys\_file\_reference
    ([\#57010](https://forge.typo3.org/issues/57010))
-   \[TASK\] Integrate default README.txt
    ([\#57656](https://forge.typo3.org/issues/57656))
-   \[SECURITY\] Prevent XSS in scheduler form
    ([\#57603](https://forge.typo3.org/issues/57603))
-   \[BUGFIX\] Test typeof TBE\_EDITOR for object not function
    ([\#57296](https://forge.typo3.org/issues/57296))
-   \[BUGFIX\] Typo in Extbase localization file
    ([\#57238](https://forge.typo3.org/issues/57238))
-   \[BUGFIX\] Extbase tries to overlay pages\_language\_overlay records
    ([\#56855](https://forge.typo3.org/issues/56855))
-   \[BUGFIX\] Temporary DB tree mount notice missing in ElementBrowser
    ([\#43885](https://forge.typo3.org/issues/43885))
-   \[BUGFIX\] IdentityProperties were not set
    ([\#46185](https://forge.typo3.org/issues/46185))
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
-   \[BUGFIX\] Use count on storage after initialization of
    LazyObjectStorage ([\#54724](https://forge.typo3.org/issues/54724))
-   \[BUGFIX\] Fix possible language handling issue
    ([\#49499](https://forge.typo3.org/issues/49499))
-   \[BUGFIX\] DatabaseConnection::listQuery wrong usage of strpos()
    ([\#56135](https://forge.typo3.org/issues/56135))
-   \[BUGFIX\] Various static calls to non-static functions
    ([\#56067](https://forge.typo3.org/issues/56067))
-   \[BUGFIX\] Missing encoding in flexforms IRRE javascript
    ([\#54304](https://forge.typo3.org/issues/54304))
-   \[BUGFIX\] addToAllTCAtypes() doesn't add new field
    ([\#52527](https://forge.typo3.org/issues/52527))
-   \[BUGFIX\] Usage of undefined variables in ShortcutToolbarItem
    ([\#55998](https://forge.typo3.org/issues/55998))
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
-   \[BUGFIX\] Missing namespace in ContentObjectRenderer
    ([\#55713](https://forge.typo3.org/issues/55713))
-   \[BUGFIX\] Set missing markers to empty string
    ([\#54112](https://forge.typo3.org/issues/54112))
-   \[BUGFIX\] Add stdWrap on value property of TEXT
    ([\#54371](https://forge.typo3.org/issues/54371))
-   \[BUGFIX\] Locker throws exception if semaphore can not be acquired
    ([\#52048](https://forge.typo3.org/issues/52048))
-   \[BUGFIX\] Regression in DataHandler
    ([\#55475](https://forge.typo3.org/issues/55475))
-   \[BUGFIX\] Handle empty tags in language pack index files
    ([\#41450](https://forge.typo3.org/issues/41450))
-   \[BUGFIX\] ClickMenu does not show destination-foldername
    ([\#55407](https://forge.typo3.org/issues/55407))
-   \[BUGFIX\] Invalid constant in the domain redirect function
    ([\#55350](https://forge.typo3.org/issues/55350))
-   \[TASK\] Change phpunit repository url for travis
    ([\#55366](https://forge.typo3.org/issues/55366))
-   \[BUGFIX\] Simulate time in TYPO3 admin panel broken
    ([\#55093](https://forge.typo3.org/issues/55093))
-   \[BUGFIX\] CLI context cannot write to backend log
    ([\#54849](https://forge.typo3.org/issues/54849))
-   \[BUGFIX\] Create valid file reference index data
    ([\#53712](https://forge.typo3.org/issues/53712))
-   \[BUGFIX\] File browser fails on inexistent expandFolder
    ([\#50266](https://forge.typo3.org/issues/50266))
-   \[BUGFIX\] Show correct record title for be\_groups and be\_users
    ([\#34631](https://forge.typo3.org/issues/34631))
-   \[BUGFIX\] Folder tree in popup throws JS error
    ([\#53826](https://forge.typo3.org/issues/53826))
-   \[BUGFIX\] Add defaultTypoScript to hierachyInfo
    ([\#53352](https://forge.typo3.org/issues/53352))
-   \[BUGFIX\] isValidUrl() idna converts whole URI
    ([\#53862](https://forge.typo3.org/issues/53862))
-   \[TASK\] Change list view delete icon if record is deleted in WS
    ([\#52554](https://forge.typo3.org/issues/52554))
-   \[BUGFIX\] Only create one keypair in rsaauth
    ([\#24877](https://forge.typo3.org/issues/24877))
-   \[BUGFIX\] use search word(s) for ordering search results (again)
    ([\#38767](https://forge.typo3.org/issues/38767))
-   \[BUGFIX\] l10n\_mode for “pages” table and group fields.
    ([\#38766](https://forge.typo3.org/issues/38766))
-   \[BUGFIX\] Form Wizard saving destroys Radio Buttons
    ([\#53727](https://forge.typo3.org/issues/53727))
-   \[BUGFIX\] Display relations' titles when TCA label field is type
    inline ([\#52133](https://forge.typo3.org/issues/52133))
-   \[BUGFIX\] Allow NULL values in INSERT queries
    ([\#53662](https://forge.typo3.org/issues/53662))
-   \[TASK\] Optimize speed for instantiating class with arguments
    ([\#53682](https://forge.typo3.org/issues/53682))
-   \[BUGFIX\] ClassAliasMap, Tx\_ VH namespace and closing tag throws
    Exception ([\#54115](https://forge.typo3.org/issues/54115))
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


