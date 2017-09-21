TYPO3 4.7 Release Notes
=======================

This document contains information about TYPO3 version 4.7 which was
released on April 24th 2012
[Roadmap](https://forge.typo3.org/projects/typo3v47-projects/wiki)

System Requirements
-------------------

The system requirements are **NOT** the same as for TYPO3 4.5, but equal
to TYPO3 4.6:

-   PHP 5.3.x
-   MySQL 5.0.x-5.1.x

Installing
----------

### Upgrading

Download the packages from the [download package page at
typo3.org](https://typo3.org/download/).

To upgrade an existing installation of to 4.7, please follow these
steps:

-   check your deprecation log if you are using deprecated stuff, which
    might be removed in 4.7
-   check if you use XHTML frontend output with a special condition for
    IE6 using xmlprologue = none: see Upgrading issues
-   **check you database if it is utf-8 encoded - TYPO3 4.7 only will
    work with utf-8**.

There will be a converter script by the time of the final release, which
is kindly provided by Jigal van Hemert

-   link the new sources from TYPO3
-   edit your localconf file if you have settings for setDBinit or
    forceCharset on settings any other than utf-8
    -   remove the line \$TYPO3\_CONF\_VARS\['BE'\]\['forceCharset'\]
    -   remove the line \$TYPO3\_CONF\_VARS\['SYS'\]\['setDBinit'\]
-   Visit the Install Tool:
    -   Run through “Update wizards” which are new in 4.6 (you can now
        go through them using the “Next” button)
    -   Use the “Database COMPARE” section and apply all database schema
        changes

#### Upgrading issues

-   If you get an exception telling that a class could not be found,
    consider clearing the autoloader cache manually. To do so, delete
    the folder typo3temp/Cache/code/php\_code.
-   If the backend stays “white” on login, if you have about and about
    modules installed, but missed to install extbase and fluid
-   If you are working with “config.xmlprologue = none” to get IE6 using
    standards mode on XHTML webpage output, this as of now will disable
    XHTML cleaning. There is an extra option for this purpose called
    “config.doctype\_switch”, which switches XML and Doctype declaration
    which enables IE6 to be used in standard mode, too. Please use this
    one instead.
-   In case you have extensions that restructured the TypoScript Code of
    CSS Styled Content to adapt output rendering or customized it
    yourself, you might encounter a weird frontend-output. This is due
    to an overworked CSS Styled Content Frontend Rendering. Please
    contact the extension owner to adapt his extension, and get in
    contact with us via Twitter, Newsgroup or steffen.ritter@typo3.org
    to create a list of incompatible extensions. **Most likely some
    Lightbox-Extensions will break.**
-   Be aware, that the old HTML-Mailing Engine, which has been included
    in TYPO3 for many years finally got removed. Many Extensions may
    rely on that and therefore throw an ClassNotFound Exception. In that
    cacse, please contact the extension owner to adapt his extension and
    get in contact with us via Twitter, Newsgroup or
    steffen.ritter@typo3.org to extend the list of incompatible
    extensions.

#### List of known, incompatible Extensions

  Extension                            versions                                reason                                                                                                                    status
  ------------------------------------ --------------------------------------- ------------------------------------------------------------------------------------------------------------------------- ------------------------------------------------------------------------------------------------------------------------
  direct\_mail                         all (&lt;=2.7.0) fixed in 3.0.0         uses t3lib\_htmlmail                                                                                                      fixed, Version 3.0.0 and higher are based on Swiftmailer
  powermail                            versions &lt;=1.6.5 1.6.6 works again   | uses t3lib\_htmlmail                                                                                                    fixed
  tt\_news                             &lt; 3.2.0 3.2.0 works again            | uses t3lib\_htmlmail                                                                                                    fixed
  dam\_ttcontent                       &lt;= 1.2 1.3 will work again           | doesn't work with changes made in CSC (BLE accessibility)                                                               change pending for dam\_ttcontent master (https://review.typo3.org/\#/c/10544/), more beautiful solution in discussion
  Improved t3skin (t3skin\_improved)   all &lt;= 1.7.1                         causes blank page problem on BE login                                                                                     author Kirill Klimov informed \[kirill@goldenplanet.com\]
  Meta tags, extended (metatags)       all &lt;= 1.0.4                         causes blank page problem on FE and PHP Fatal error -&gt; Call to undefined method tslib\_content\_PhpScript::stdWrap()   mail sending at “Steffen Ritter, Relase Manager TYPO3 4.7” &lt;steffen.ritter@typo3.org&gt;
  sr\_feuser\_register                 all                                     uses t3lib\_htmlmail                                                                                                      fixed (3.0.0+)
  oneclicklogin                        all                                     uses \$TYPO3\_CONF\_VARS\['BE'\]\['loginNews'\]                                                                           author informed
  maja\_tscondition                    all                                     uses t3lib\_matchCondition                                                                                                author informed
  dmmjobcontrol                        all &lt;= 2.5.1, fixed in 2.5.2         uses t3lib\_htmlmail                                                                                                      fixed
  ics\_awstats                         all &lt;= 0.5.3, fixed in 0.5.4         uses template-&gt;middle()                                                                                                fixed
  commerce\_ext                        all                                     uses t3lib\_htmlmail                                                                                                      author informed, author says extension will not be maintained anymore
  advanced\_feedit                     all &lt;= 1.5.0                         uses t3lib\_tceforms-&gt;helpText and t3lib\_tceforms-&gt;helpTextIcon which were removed in 4.7                          author informed
  masi\_metatags\_nav                  all &lt;= 0.1.0                         PHP Fatal error: Call to undefined method tslib\_content\_PhpScript::typolink\_URL()                                      author not informed

### New installations

Try out the **introduction package** which provides a very easy way of
installing TYPO3 and having some example setup already in place. In
addition starting as of TYPO3 4.7 there will be an additional
**government package** aiming to tackle the issues governmental or
public organisations have to deal while creating websites. Currently
this government package is only available in german.

Changes and improvements
========================

This will list all changes and improvements between TYPO3 4.6 and 4.7.
For technical details see ChangeLog included in the typo3\_src package
or the end of the page.

### HTML5 frontend rendering

One of the biggest steps forward in modern content-rendering and
accessibility is the HTML5 standard. Thanks to the sponsoring received
from the “Bundesanstalt für Landwirtschaft und Ernährung” we were able
to refactor and enhance TYPO3's content rendering (CSS Styled Content)
in order to generate clean, valid, and accessible output. In more than
40 single tasks, CSS Styled Content has been enabled to produce non-XML
HTML code, which also re-enables TYPO3 to generate clean HTML 4.0.
Within CSS Styled Content for example image rendering, table rendering,
as well as semantically annotated headlines and menus or sitemaps got
reworked. For further information about general accessibility and its
usage within TYPO3, see the “Accessibility Documentation”\[1\] which
also has been created with thankful sponsoring from the BLE.

### General

-   For TYPO3 version 4.7, we upgraded two external libraries. By
    raising SwiftMailer API to version 4.1.3\[2\] we brought more
    possibilities for email handling to you.Furthermore ADOdb was
    updated to version 5.14\[3\]. This version now also supports the
    native MSSQL driver for Linux, which brings improved performance for
    MSSQL + DBAL users.

<!-- -->

-   The forceCharset option has been deprecated in version 4.5. UTF-8 is
    now enforced. Even though other values than “utf-8” have not been
    possible anymore for some time, the option's value has been queried
    at plenty of places within the whole core. These references, the
    option in the Install Tool, as well as many defaults with charset
    “iso-8859-1” in several classes have been changed, so TYPO3 now
    works UTF-8-only internally.

<!-- -->

-   The Backend modules “about” and “aboutmodules” have been migrated to
    Extbase in order to show, how to build simple backend modules with
    extbase and in addition to clean up the codebase.

### Backend / Backend UI

-   Many small fixes have been applied to the Backend UI, in order to
    streamline Backend modules not following or implementing the
    concepts the TYPO3 UX/UI team. In addition there have been some
    usability improvements in admin related parts of the Backend.

<!-- -->

-   Editors uploading data within TCEforms will be pleased that the
    HTML5 multi-upload feature has been implemented for file uploads.

<!-- -->

-   Editors will see the same “root” of the page tree like admins. The
    TYPO3 soul has been placed as id 0 on the top of the editor's mount
    points. This especially enables editors working in workspaces to see
    all changes across all mount points when klicking on the tree-root.

<!-- -->

-   In addition TYPO3 does now support an additional backend language:
    Afrikaans. The new language is available on the translation server
    and needs your help getting core and extensions translated.

### htmlArea Rich-Text-Editor

As the RTE is the main entry point for editors bringing their content to
the user, the RTE has undergone many improvements. Especially to support
the many great possibilities HTML5 offers, htmlArea RTE has been
extended. The custom attributes used by the RTE internally handle some
states now HTML5 compliant using the data-\* attributes. In the same
matter, the RTE preserves the data-\* micro data attributes, if entered
by the editor. Further possibilities like a button to insert a
soft-hyphen to predefine a line-break, as well as configuration options
for the “Insert image” dialog have been integrated to grant a greater
and more individual experience to the editor.

### Security

The authentication service chain has been overworked to detach secure
password transmission via the system extension rsaauth from the actual
authentication. As a result, auth-services do not need to instantiate
and call rsaauth themselves anymore, but can directly access the already
decoded plain-password.

### TypoScript / Frontend

Attempting to yield a better experience new possibilities have been
introduced helping integrators to fulfill their daily tasks. For those
using the default page title mechanism (outputted in the

<title>
tag) the separation char “:” can now be customized via TypoScript. The
mighty stdWrap construct has been extended to be more flexible, too. On
one hand you now can execute multiple stdWrap runs in a pre-defined
order on the same object. Furthermore new places got stdWrap-enabled.
Looking at the details you will find more small enhancements like
configurable icons of file-links, http-equiv meta-tags, and others.

### System Extension “Frontend Login”

The system extension “felogin” acting as a central point for building
closed user-groups got enhanced with new features. Due to many new
stdWrap possibilities and template markers, integrators have more
flexible possibilities to customize the look and feel of felogin. If you
ever worried about the password-forgot email send out to the user, a new
hook now enables you to adapt and customize the message and its subject.
Furthermore you may provide a better experience to your users, as you
can enable a feature that discloses whether the username or password was
incorrect (instead of just showing that something went wrong). More
detailed information can be found in the updated felogin extension's
manual.

### Development

Several new improvements for developers have been added: Starting from
new hooks, new TCA options, or an additional way to create [backend
modules as ExtJS
cards](Extension_Development,_native_ExtJS_Modules "wikilink") to new
interfaces and classes for collection handling have been integrated. A
detailed overview over all these possibilities will be published on
wiki.typo3.org soon.

### Performance

The TYPO3 default search engine “indexed\_search” could run into massive
performance issues on bigger sites. TYPO3 4.7 ships with an addition to
indexed\_search which allows using MySQL full text index natively
resulting in a massive performance boost. Tagging of TypoScript elements
via stdWrap is now possible, too. As a result, these tags are added to
the page-cache and TCEmain.clearCacheCmd is enabled to drop page cache
by these tags. This allows to set up versatile and performing caching
behavior for high-performance websites.

### Cleanup

As the community always aims to clean up the old code base step by step
many improvements have been introduced in version 4.7. As always
deprecated code has been removed. In addition old references to
extensions were removed and unused classes and files were deleted.

### Bugs

Besides all the amazing new stuff already about 200 bugs have been fixed
since the release of 4.6 in October 2011.

Download
--------

<https://typo3.org/download/>

**MD5 checksums**

    849445ad455cd8b99cf16336cfd6ea42  blankpackage-4.7.0.tar.gz
    f761ae06eb10b3c78e864c02ff8e5dee  blankpackage-4.7.0.zip
    4dfbb48315620ead950467716b643df6  dummy-4.7.0.tar.gz
    432a72095123a890a27bd8abf67d69a0  dummy-4.7.0.zip
    4d12f77c7c23a7ad933f197382110244  governmentpackage-4.7.0.tar.gz
    26d047f7cdf504e7729a991b83c3e52a  governmentpackage-4.7.0.zip
    a80bf051234ba775e3ee163428a0436f  introductionpackage-4.7.0.tar.gz
    b6bccd01c7f99eb181cdd9ccbfd064c6  introductionpackage-4.7.0.zip
    db91d285ee79a8c68ebad3eeefa0e143  typo3_src+dummy-4.7.0.zip
    b030bce602f1ab7b7d15f35dcc93da66  typo3_src-4.7.0.tar.gz
    42baed6db65d6cb538049dc5718a0592  typo3_src-4.7.0.zip

Changelog
---------

Changes since TYPO3 4.6.0

### Features, Tasks and Cleanup

-   \[TASK\] Update NEWS.txt and INSTALL.txt
-   \[SECURITY\] XSS in exception handler
-   \[TASK\] Raise submodule pointer
-   \[TASK\] Change hardcoded URL to constant
-   \[TASK\] CGL violoation in tslib\_content\_Media
-   \[TASK\] Raise submodule pointer
-   \[TASK\] Move unit test to logical places
-   \[TASK\] Add update-wizard for Media Flexform
-   \[TASK\] Streamline disposal of Signal Slot
-   \[TASK\] Error reporting is set twice in bootstrap
-   \[TASK\] PATH\_thisScript is defined twice in bootstrap
-   \[TASK\] Restore old Content Object SWFOBJECT
-   \[TASK\] PATH\_site is defined twice in bootstrap
-   \[TASK\] PATH\_tslib is defined twice in bootstrap
-   \[TASK\] Remove Code Duplication in tslib\_content\_Media
-   \[TASK\] Scheduler: move 'Save' button to docHeader
-   \[TASK\] Raise submodule pointer
-   \[TASK\] Introduce processDatamap\_beforeStart hook
    ([\#35161](https://forge.typo3.org/issues/35161))
-   \[TASK\] Add missing sql\_free\_result in alt\_doc.php
    ([\#34771](https://forge.typo3.org/issues/34771))
-   \[TASK\] Code clean-up in t3lib\_PageRenderer
    ([\#35160](https://forge.typo3.org/issues/35160))
-   \[TASK\] Update submodule pointer for TYPO3\_4-7
    ([\#35155](https://forge.typo3.org/issues/35155))
-   Revert “\[BUGFIX\] showAccessRestrictedPages doesn't replace links
    to restricted subpages”
    ([\#32756](https://forge.typo3.org/issues/32756))
-   \[TASK\] Integrate signal-slot-handling in Grid Data Service
    ([\#35166](https://forge.typo3.org/issues/35166))
-   \[TASK\] Code clean-up in Grid Data Service
    ([\#35162](https://forge.typo3.org/issues/35162))
-   \[FEATURE\] Add hook to tslib\_fe-&gt;get\_cache\_timeout()
    ([\#34346](https://forge.typo3.org/issues/34346))
-   \[TASK\] PHP 5.4 adjustments
    ([\#34685](https://forge.typo3.org/issues/34685))
-   \[FEATURE\] Add hook to stdWrap\_cacheStore
    ([\#34343](https://forge.typo3.org/issues/34343))
-   \[TASK\] RTE: Update version to 2.3.0
-   \[TASK\] Change typo3.com to typo3.org
    ([\#34441](https://forge.typo3.org/issues/34441))
-   \[TASK\] Remove obsolete sysext/cms/doc
    ([\#34567](https://forge.typo3.org/issues/34567))
-   \[TASK\] Update copyright year to 2012
    ([\#34600](https://forge.typo3.org/issues/34600))
-   \[TASK\] Remove clear cache by id from clearCacheCMD
    ([\#34474](https://forge.typo3.org/issues/34474))
-   \[TASK\] Remove typo3/logomenu.php
    ([\#34427](https://forge.typo3.org/issues/34427))
-   \[TASK\] Fix setDBinit regression
    ([\#34369](https://forge.typo3.org/issues/34369))
-   \[FEATURE\] Add clearing cache by tag and by identifier
    clearCacheCMD ([\#34352](https://forge.typo3.org/issues/34352))
-   \[CLEANUP\] RTE: Remove useless code when BE is only utf-8
    ([\#34370](https://forge.typo3.org/issues/34370))
-   \[FEATURE\] Flexible cHash Calculation
    ([\#29365](https://forge.typo3.org/issues/29365))
-   \[FEATURE\] RTE: Use HTML5-compliant custom attribute for external
    url's ([\#34114](https://forge.typo3.org/issues/34114))
-   \[FEATURE\] Default active tab to first in allowedItems-list
    ([\#34028](https://forge.typo3.org/issues/34028))
-   \[FEATURE\] Allow to order tabs of “Insert/modify image” in Page
    TSConfig ([\#34027](https://forge.typo3.org/issues/34027))
-   \[TASK\] Set X-UA-Compatible to IE=9 for Backend
    ([\#30664](https://forge.typo3.org/issues/30664))
-   \[FEATURE\] stdWrap caching
    ([\#34299](https://forge.typo3.org/issues/34299))
-   \[FEATURE\] Integrate possibility to overrule types array in
    TCEforms ([\#34281](https://forge.typo3.org/issues/34281))
-   \[FEATURE\] IRRE - Possibility to render custom header controls
    ([\#34283](https://forge.typo3.org/issues/34283))
-   \[FEATURE\] Add a “virtual root” to pagetree (for mountpoints)
    ([\#33852](https://forge.typo3.org/issues/33852))
-   \[TASK\] Remove useless code after utf-8 code conversion
    ([\#34106](https://forge.typo3.org/issues/34106))
-   \[TASK\] Change various functions to use utf-8 by default
    ([\#34094](https://forge.typo3.org/issues/34094))
-   \[CLEANUP\]\[CONF!!!\] Remove forceCharset option and references
    ([\#34092](https://forge.typo3.org/issues/34092))
-   \[FEATURE\] IRRE - Possibility to avoid rendering of
    foreign\_selector ([\#34282](https://forge.typo3.org/issues/34282))
-   \[TASK\] Clean-up several whitespaces and PHPdoc comments
-   \[TASK\] Update manual with new hook
    ([\#34234](https://forge.typo3.org/issues/34234))
-   \[FEATURE\] Add hook to process forgot password mail
    ([\#17055](https://forge.typo3.org/issues/17055))
-   \[TASK\] Migrate EXT:about to extbase
    ([\#34096](https://forge.typo3.org/issues/34096))
-   \[TASK\] Remove old code related to the extension tstemplate\_styler
    ([\#26090](https://forge.typo3.org/issues/26090))
-   \[TASK\] Group excludefields by table
    ([\#34098](https://forge.typo3.org/issues/34098))
-   \[FEATURE\] Link errors in Template Object Browser to Template
    Analyzer ([\#34099](https://forge.typo3.org/issues/34099))
-   \[FEATURE\] Log to sys\_log when changes are made to scheduler tasks
    ([\#34056](https://forge.typo3.org/issues/34056))
-   \[FEATURE\] Unit test for t3lib\_befunc::getCommonSelectFields
    ([\#34039](https://forge.typo3.org/issues/34039))
-   \[TASK\] Migrate aboutmodules to extbase
    ([\#34086](https://forge.typo3.org/issues/34086))
-   \[TASK\] Move tslib\_content classes to own files
    ([\#34058](https://forge.typo3.org/issues/34058))
-   \[FEATURE\] RTE: Use HTML5-compliant custom attribute for
    click-enlarge ([\#34053](https://forge.typo3.org/issues/34053))
-   \[FEATURE\] HTML5 multiple file upload in TCEforms
    ([\#33422](https://forge.typo3.org/issues/33422))
-   \[TASK\] Update felogin manual and raise version
    ([\#33927](https://forge.typo3.org/issues/33927))
-   \[FEATURE\] Unset parts in
    t3lib\_div::array\_merge\_recursive\_overrule()
    ([\#33941](https://forge.typo3.org/issues/33941))
-   \[FEATURE\] Set exit status in CLI scripts
    ([\#28700](https://forge.typo3.org/issues/28700))
-   \[FEATURE\] Add a download method to t3lib\_http\_Request
    ([\#28495](https://forge.typo3.org/issues/28495))
-   \[FEATURE\] add option to select recursively in tcaTree
    ([\#25061](https://forge.typo3.org/issues/25061))
-   \[TASK\] EM: Move Upload button to top button menu
    ([\#33868](https://forge.typo3.org/issues/33868))
-   \[FEATURE\] Add subjectField to Form Wizard TS
    ([\#32132](https://forge.typo3.org/issues/32132))
-   \[TASK\] Rework t3lib\_utility\_Mail::breakLinesForEmail to drop
    ([\#28039](https://forge.typo3.org/issues/28039))
-   \[FEATURE\] Reports interface standardize
    ([\#33695](https://forge.typo3.org/issues/33695))
-   \[FEATURE\] Add error message for missing TCA
    ([\#17961](https://forge.typo3.org/issues/17961))
-   \[FEATURE\] More detailed felogin password reset error messages
    ([\#23199](https://forge.typo3.org/issues/23199))
-   \[FEATURE\]\[CONF\] Various messages in felogin need own stdWrap
    ([\#29577](https://forge.typo3.org/issues/29577))
-   \[FEATURE\] felogin: Introduce new label for the legend marker
    ([\#24185](https://forge.typo3.org/issues/24185))
-   \[FEATURE\] Show History csh and spacer
    ([\#33827](https://forge.typo3.org/issues/33827))
-   \[FEATURE\] Toolbar Separator
    ([\#32450](https://forge.typo3.org/issues/32450))
-   \[FEATURE\] Add hooks to extend browse\_links.php
    ([\#32809](https://forge.typo3.org/issues/32809))
-   \[TASK\] Adapt unit-tests to new mail-adapter-hook
-   \[TASK\] Move FEworkspace code into versioning / part 2
    ([\#30682](https://forge.typo3.org/issues/30682))
-   \[FEATURE\] Add hook to tslib\_fe-&gt;getHash()
    ([\#28299](https://forge.typo3.org/issues/28299))
-   \[FEATURE\] Allow native ExtJS3 Modules in ContentArea
    ([\#32309](https://forge.typo3.org/issues/32309))
-   \[FEATURE\] Allow authentication with partial OpenID identifier
    ([\#33518](https://forge.typo3.org/issues/33518))
-   \[FEATURE\] Extend collection handling by repository
    ([\#33755](https://forge.typo3.org/issues/33755))
-   \[FEATURE\] Move redirect fields from Extended tab
    ([\#19847](https://forge.typo3.org/issues/19847))
-   \[FEATURE\] Error level as the first column in BE Log module
    ([\#33816](https://forge.typo3.org/issues/33816))
-   \[TASK\] Improve error message of “broken rootline”
    ([\#33082](https://forge.typo3.org/issues/33082))
-   \[FEATURE\] Move Element form visual cleanup
    ([\#33692](https://forge.typo3.org/issues/33692))
-   \[FEATURE\] Multiple stdWrap executed in numeric order
    ([\#28601](https://forge.typo3.org/issues/28601))
-   \[TASK\] Remove unsupported functionality related to workspaces
    ([\#30604](https://forge.typo3.org/issues/30604))
-   \[FEATURE\] Add “if” function to includeCSS and includeJS
    ([\#29423](https://forge.typo3.org/issues/29423))
-   \[FEATURE\] Integrate possibility to resolve relative path walks
    ([\#33753](https://forge.typo3.org/issues/33753))
-   \[FEATURE\] Integrate possibility to build URL
    ([\#33767](https://forge.typo3.org/issues/33767))
-   \[FEATURE\] Integrate Signal Slot Handling
    ([\#33748](https://forge.typo3.org/issues/33748))
-   \[TASK\] remove obsolete check for media/scripts/
    ([\#25985](https://forge.typo3.org/issues/25985))
-   \[FEATURE\] htmlArea RTE: Edit HTML5 microdata items
    ([\#33609](https://forge.typo3.org/issues/33609))
-   \[FEATURE\] Placeholder for TCEForm fields
    ([\#33235](https://forge.typo3.org/issues/33235))
-   \[FEATURE\] Enable TCA type field to depend on field of foreign
    table ([\#33045](https://forge.typo3.org/issues/33045))
-   \[FEATURE\] htmlArea RTE: Enable HTML5 block elements in the RTE
    ([\#33480](https://forge.typo3.org/issues/33480))
-   \[FEATURE\] Enabling displayCond for sheets in flexforms
    ([\#33390](https://forge.typo3.org/issues/33390))
-   \[FEATURE\] New core language: Afrikaans
    ([\#33479](https://forge.typo3.org/issues/33479))
-   \[TASK\] Improve username information in top toolbar
    ([\#32450](https://forge.typo3.org/issues/32450))
-   \[TASK\] Unify backend: header/section
    ([\#30263](https://forge.typo3.org/issues/30263))
-   \[FEATURE\] htmlArea RTE: Add context-sensitive help to table
    operations ([\#33451](https://forge.typo3.org/issues/33451))
-   \[TASK\] Additional unit tests for t3lib\_div::mkdir and mkdir\_deep
-   \[FEATURE\] htmlArea RTE: Preserve microdata attributes
    ([\#33418](https://forge.typo3.org/issues/33418))
-   \[FEATURE\] felogin Content Element Suggest Wizard
    ([\#32767](https://forge.typo3.org/issues/32767))
-   \[TASK\] Raise submodule pointer
-   \[FEATURE\] RTE: Restructure methods dealing with nodes and
    selections ([\#33372](https://forge.typo3.org/issues/33372))
-   \[TASK\] Add note on modified authentication services to NEWS.txt
    ([\#32864](https://forge.typo3.org/issues/32864))
-   \[TASK\] Add note on modified authentication services to NEWS.txt
    ([\#32864](https://forge.typo3.org/issues/32864))
-   \[TASK\] Clean-up NEWS.txt for TYPO3 4.7
-   \[FEATURE\] Separate password transmission from password comparison
    ([\#30271](https://forge.typo3.org/issues/30271))
-   \[TASK\] Use t3lib\_BEfunc instead of date()
    ([\#23055](https://forge.typo3.org/issues/23055))
-   \[FEATURE\] Hidden palettes in TCEForms
    ([\#33044](https://forge.typo3.org/issues/33044))
-   \[TASK\] User settings: move flashMessage notice
    ([\#32891](https://forge.typo3.org/issues/32891))
-   \[FEATURE\] Add hook to pagerenderer after compress/concatenate
    ([\#33234](https://forge.typo3.org/issues/33234))
-   \[FEATURE\] htmlArea RTE: Cleanup some deprecated methods
    ([\#33238](https://forge.typo3.org/issues/33238))
-   \[FEATURE\] htmlArea RTE: Remove RTE cache
    ([\#33207](https://forge.typo3.org/issues/33207))
-   \[FEATURE\] htmlArea RTE: Move RTE scripts to head
    ([\#33206](https://forge.typo3.org/issues/33206))
-   \[FEATURE\] Add possibility to define foreign\_match\_fields for
    IRRE inline relations.
    ([\#29296](https://forge.typo3.org/issues/29296))
-   \[TASK\] Improve debugTrail() to better handle includes
    ([\#31300](https://forge.typo3.org/issues/31300))
-   \[FEATURE\] htmlArea RTE: Add button to insert soft hyphen
    ([\#33184](https://forge.typo3.org/issues/33184))
-   \[TASK\] Raise submodule pointer of workspaces system extension
-   \[TASK\] Regenerate core\_autoload.php
    ([\#33047](https://forge.typo3.org/issues/33047))
-   \[TASK\] Rebuild t3lib/core\_autoload.php
-   \[FEATURE\] Show thumbnails in page/list by default
    ([\#32893](https://forge.typo3.org/issues/32893))
-   \[CLEANUP\] Core has a XML syntax dependency on templavoila
    ([\#32946](https://forge.typo3.org/issues/32946))
-   \[TASK\] Remove Thumbs.db
    ([\#32899](https://forge.typo3.org/issues/32899))
-   \[TASK\] Scheduler: Add “Add Task” button to header
    ([\#32753](https://forge.typo3.org/issues/32753))
-   \[FEATURE\] Add a link to delete the deprecation log file
    ([\#23387](https://forge.typo3.org/issues/23387))
-   \[FEATURE\] Allow anonymous logging
    ([\#25404](https://forge.typo3.org/issues/25404))
-   \[FEATURE\] TCA-record-collection based on collection interfaces
    ([\#32147](https://forge.typo3.org/issues/32147))
-   \[FEATURE\] Add stdWrap to HMENU-properties min/maxItems and begin
    ([\#18618](https://forge.typo3.org/issues/18618))
-   \[FEATURE\] Indexed Search: Add additional extbase plugin
    ([\#28612](https://forge.typo3.org/issues/28612))
-   \[FEATURE\] Custom MailTransport
    ([\#24841](https://forge.typo3.org/issues/24841))
-   \[FEATURE\]\[API\] Add PostProcessing Hook after inclusion of
    extTables ([\#31615](https://forge.typo3.org/issues/31615))
-   \[TASK\] Invalid SQL and bad code in tslib\_fe
    ([\#32159](https://forge.typo3.org/issues/32159))
-   \[FEATURE\] Disable Page Information option
    ([\#32086](https://forge.typo3.org/issues/32086))
-   \[FEATURE\] Integrate config.pageTitleSeparator
    ([\#17030](https://forge.typo3.org/issues/17030))
-   \[TASK\] Add clear l10n cache when the user clear all cache
    ([\#32600](https://forge.typo3.org/issues/32600))
-   \[TASK\] Reports module uses internal data of salted passwords
    ([\#32136](https://forge.typo3.org/issues/32136))
-   \[FEATURE\] Add possibility to define http-equiv in meta tags
    ([\#31936](https://forge.typo3.org/issues/31936))
-   \[TASK\]\[DB\] Increase length of tt\_content list\_type
    ([\#32471](https://forge.typo3.org/issues/32471))
-   \[TASK\] Clean up about modules extension
    ([\#31296](https://forge.typo3.org/issues/31296))
-   \[FEATURE\] Add two hooks to tx\_sysaction\_task
    ([\#32055](https://forge.typo3.org/issues/32055))
-   \[TASK\] swift mailer update to version 4.1.3
    ([\#32062](https://forge.typo3.org/issues/32062))
-   \[TASK\] Create CSS Styled Content TypoScript configuration for v4.6
    ([\#32160](https://forge.typo3.org/issues/32160))
-   \[FEATURE\] Integrate Flowplayer and videoJS for accessible media
    rendering ([\#31770](https://forge.typo3.org/issues/31770))
-   \[TASK\] Improve cache performance
    ([\#30605](https://forge.typo3.org/issues/30605))
-   \[FEATURE\] Integrate accessible content rendering
    ([\#31767](https://forge.typo3.org/issues/31767))
-   \[TASK\] Add CSS Class to special input types in FORM
    ([\#30851](https://forge.typo3.org/issues/30851))
-   \[TASK\] Integrate system extension linkvalidator as submodule
    ([\#32075](https://forge.typo3.org/issues/32075))
-   \[TASK\] Add a set of interfaces for collection
    ([\#32146](https://forge.typo3.org/issues/32146))
-   \[!!!\]\[TASK\]\[CONF\] Remove deprecated code for 4.7
    ([\#32108](https://forge.typo3.org/issues/32108))
-   \[FEATURE\] Make filelinks icons configurable
    ([\#23624](https://forge.typo3.org/issues/23624))
-   \[TASK\] Remove a message about non-existing TypoScript error
    ([\#32012](https://forge.typo3.org/issues/32012))
-   \[FEATURE\] Add a rel=“nofollow” on the “Forgot your password” link
    ([\#22025](https://forge.typo3.org/issues/22025))
-   \[TASK\] Use master branch in submodules
    ([\#31989](https://forge.typo3.org/issues/31989))
-   \[TASK\] Update ADOdb library to version 5.14
    ([\#31486](https://forge.typo3.org/issues/31486))
-   \[FEATURE\] Indexed Search: add mySQL fulltext support
    ([\#28613](https://forge.typo3.org/issues/28613))
-   \[!!!\]\[FEATURE\] Remove typo3/index.html (and more)
    ([\#31614](https://forge.typo3.org/issues/31614))
-   \[TASK\] deprecate userAuthGroup:inList
    ([\#31068](https://forge.typo3.org/issues/31068))
-   \[TASK\] Add missing tslib\_content\_abstract::getContentObject()
    ([\#30994](https://forge.typo3.org/issues/30994))
-   \[TASK\] Remove unused typo3/alt\_\* files
    ([\#31298](https://forge.typo3.org/issues/31298))
-   \[TASK\] Remove t3lib\_superadmin
    ([\#31299](https://forge.typo3.org/issues/31299))
-   \[FEATURE\] Unify page/list module title
    ([\#23828](https://forge.typo3.org/issues/23828))
-   \[FEATURE\]\[INSTALL\] Check MySQL privileges to create new
    databases ([\#27194](https://forge.typo3.org/issues/27194))

### Bugfixes

-   \[BUGFIX\] t3lib\_div: adjust substUrlsInPlainText to also work on
    URLs at end of sentence
-   \[BUGFIX\] Media element cannot handle plain external URL
-   \[BUGFIX\] Hardcoded variable in CookieJar.php
-   \[BUGFIX\] t3lib\_http\_Request can not be loaded in frontend
-   \[BUGFIX\] rsaauth PHP backend calls key generation on every request
-   \[BUGFIX\] Send no-cache headers in t3lib\_userauth
-   \[BUGFIX\] Localisation update doesn't work
-   \[BUGFIX\] Usability improvements for Media Element
-   \[BUGFIX\] Slider doesn't work in IE9
-   \[BUGFIX\] Fix the unit tests to work with PHPUnit 3.6
-   \[BUGFIX\] Results from live search and opendocs can't be opened
-   \[BUGFIX\] Failing test in autoloader with phpunit 3.6
-   \[BUGFIX\] Failing charset related test in page renderer
-   \[BUGFIX\] Failing test in caching framework memcache backend
-   \[BUGFIX\] Media Element does not play videos with own player
    anymore
-   \[BUGFIX\] Centering images with text is not working in some cases
-   \[BUGFIX\] t3lib\_div::getUrl() providing wrong error information
-   \[BUGFIX\] Enable XClassing of t3lib\_install by replacing new
-   \[BUGFIX\] Use state “excludeFromUpdates” in update check
-   \[BUGFIX\] follow up to “Improve usability of new Media element
    flexform”
-   \[BUGFIX\] Validation problem in forgot and change password form
-   \[BUGFIX\] EXT: setup relocate 'Save' button
-   \[BUGFIX\] ext\_icon.gif for EXT:impexp
-   \[BUGFIX\] Improve usability of new Media element flexform
-   \[BUGFIX\] missing parameter for implode
-   \[BUGFIX\] displayCondition on FlexForm Sheets broken
-   \[BUGFIX\] No tab selected by default in User Settings
-   \[BUGFIX\] t3editor: \$TCA for tt\_content is not loaded in
    ext\_tables.php
-   \[SECURITY\] XSS in be\_layouts
-   \[SECURITY\] XSS possibility in RemoveXSS
-   \[SECURITY\] XSS in BE file list
-   \[SECURITY\] Missing escaping in scheduler
-   \[SECURITY\] Missing escaping for sys\_notes
-   \[SECURITY\] XSS in show item
-   \[SECURITY\] Information disclosure showing DB name
-   \[!!!\]\[SECURITY\] XSS in filelink element
-   \[BUGFIX\] Missing column in
    t3lib\_TCEmain::getPreviousLocalizedRecordUid
-   \[BUGFIX\] Unused argument in getItemUidList()
    ([\#35277](https://forge.typo3.org/issues/35277))
-   \[BUGFIX\] Unknown t3lib\_TcaRelationService in
    StaticRecordCollection
    ([\#33942](https://forge.typo3.org/issues/33942))
-   \[BUGFIX\] Livesearch toolbar should close others
    ([\#32890](https://forge.typo3.org/issues/32890))
-   \[BUGFIX\] Remove menu type special.userdefined
    ([\#25100](https://forge.typo3.org/issues/25100))
-   \[BUGFIX\] RTE: function compareLabel incorrectly declared
    ([\#34708](https://forge.typo3.org/issues/34708))
-   \[BUGFIX\] Backend: Fetch correct overlay-version of page inside
    workspace ([\#27811](https://forge.typo3.org/issues/27811))
-   \[BUGFIX\] t3lib\_iconWorks must check if array exists before using
    it ([\#24248](https://forge.typo3.org/issues/24248))
-   \[BUGFIX\] Creating new pages via drag'n'drop respects page TS
    ([\#25021](https://forge.typo3.org/issues/25021))
-   \[BUGFIX\] Tooltips for items in groupfields are not moved
    ([\#35176](https://forge.typo3.org/issues/35176))
-   \[BUGFIX\] Fatal error function posix\_getgroups is not available
    ([\#33718](https://forge.typo3.org/issues/33718))
-   \[BUGFIX\] Blank page after Save+Close in page settings
    ([\#33791](https://forge.typo3.org/issues/33791))
-   \[BUGFIX\] Fix baseurl handling of IE with RTE htmlArea in FE and
    realurl ([\#30847](https://forge.typo3.org/issues/30847))
-   \[BUGFIX\] Fatal error 't3lib\_lock' does not exist
    ([\#34662](https://forge.typo3.org/issues/34662))
-   \[BUGFIX\] Custom validators may be overriden by default validators
    ([\#34566](https://forge.typo3.org/issues/34566))
-   \[BUGFIX\] Code cleanup tx\_linkvalidator\_processor
    ([\#35058](https://forge.typo3.org/issues/35058))
-   \[BUGFIX\] Hook must use unset \$params not reset
    ([\#35021](https://forge.typo3.org/issues/35021))
-   \[BUGFIX\] unlink issues warnings for lock files
    ([\#32282](https://forge.typo3.org/issues/32282))
-   \[BUGFIX\] Properly check disabled versioning within tcemain
    ([\#33625](https://forge.typo3.org/issues/33625))
-   \[BUGFIX\] html5 rendering does handle non-xml documents
    ([\#34730](https://forge.typo3.org/issues/34730))
-   \[BUGFIX\] imagecopyresized: correct invalid parameters
    ([\#26660](https://forge.typo3.org/issues/26660))
-   \[BUGFIX\] Mail sending fails with quoted&encoded e-mail addresses
    ([\#34526](https://forge.typo3.org/issues/34526))
-   \[BUGFIX\] Fatal error if xlf file has wrong format
    ([\#34473](https://forge.typo3.org/issues/34473))
-   \[BUGFIX\] process\_datamap doesn't handle existing versions by
    itself ([\#32780](https://forge.typo3.org/issues/32780))
-   \[BUGFIX\] RTE: Adapt clickenlarge to rendering of custom attributes
    ([\#34764](https://forge.typo3.org/issues/34764))
-   \[BUGFIX\] Multi-table relationship not recognized in
    t3lib\_loadDBGroup ([\#34148](https://forge.typo3.org/issues/34148))
-   \[BUGFIX\] Keep hyphens in custom HTML5 attributes
    ([\#34371](https://forge.typo3.org/issues/34371))
-   \[BUGFIX\] Suggest Wizard crashes in Frontend Editing
    ([\#25079](https://forge.typo3.org/issues/25079))
-   \[BUGFIX\] redirect to referrer when changing password
    ([\#21943](https://forge.typo3.org/issues/21943))
-   \[BUGFIX\] Resolving the correct preview domain
    ([\#34698](https://forge.typo3.org/issues/34698))
-   \[BUGFIX\] Page within a mountpoint using Show Content from Page
    results in 503 header
    ([\#32292](https://forge.typo3.org/issues/32292))
-   \[BUGFIX\] undefined variable imgExt
    ([\#34446](https://forge.typo3.org/issues/34446))
-   \[BUGFIX\] Excludefieds must exclude admin only tables
    ([\#34460](https://forge.typo3.org/issues/34460))
-   \[BUGFIX\] Toolbar Separator IE8 and FF3.6
    ([\#34020](https://forge.typo3.org/issues/34020))
-   \[BUGFIX\] Shell command arguments are not escaped
    ([\#31278](https://forge.typo3.org/issues/31278))
-   \[BUGFIX\] RTE: Context menu looses current selection in IE9
    ([\#34658](https://forge.typo3.org/issues/34658))
-   \[BUGFIX\] Fix translation moving in workspaces
    ([\#33592](https://forge.typo3.org/issues/33592))
-   \[BUGFIX\] RTE: deprecated call-time pass-by-reference
    ([\#34601](https://forge.typo3.org/issues/34601))
-   \[BUGFIX\] Make generated thumbnails browser-cachable
    ([\#21481](https://forge.typo3.org/issues/21481))
-   \[BUGFIX\] PHP warnings may show up in the List module
    ([\#22152](https://forge.typo3.org/issues/22152))
-   \[BUGFIX\] Set filename to downloaded resource in t3lib\_compressor
    ([\#32517](https://forge.typo3.org/issues/32517))
-   \[BUGFIX\] Fix idna\_convert.class not found
    ([\#34627](https://forge.typo3.org/issues/34627))
-   \[BUGFIX\] “Allowed excludefields” misses non-tt\_content FlexForms
    ([\#31831](https://forge.typo3.org/issues/31831))
-   \[BUGFIX\] Images from TER hosters break SSL
    ([\#34203](https://forge.typo3.org/issues/34203))
-   \[BUGFIX\] Validation of umlaut URLs and mail addresses
    ([\#30311](https://forge.typo3.org/issues/30311))
-   \[BUGFIX\] Media element does not recognize short YouTube links
    ([\#33089](https://forge.typo3.org/issues/33089))
-   \[BUGFIX\] Misleading error with empty USER\_INT
    ([\#23347](https://forge.typo3.org/issues/23347))
-   \[BUGFIX\] tslib\_pibase: Outdated PHPDoc comment for pi\_loadLL()
    ([\#33160](https://forge.typo3.org/issues/33160))
-   \[BUGFIX\] OpenID login fails if trailing slash is missing
    ([\#34439](https://forge.typo3.org/issues/34439))

<!-- -->

-   \[BUGFIX\] Media element does not recognize short YouTube links
    ([\#33089](https://forge.typo3.org/issues/33089))
-   \[BUGFIX\] Misleading error with empty USER\_INT
    ([\#23347](https://forge.typo3.org/issues/23347))
-   \[BUGFIX\] tslib\_pibase: Outdated PHPDoc comment for pi\_loadLL()
    ([\#33160](https://forge.typo3.org/issues/33160))
-   \[BUGFIX\] OpenID login fails if trailing slash is missing
    ([\#34439](https://forge.typo3.org/issues/34439))
-   \[BUGFIX\] previewLink generation is broken without domain-record
    ([\#34396](https://forge.typo3.org/issues/34396))
-   \[BUGFIX\] PHP Warning when moving a record
    ([\#34135](https://forge.typo3.org/issues/34135))
-   \[BUGFIX\] TCE: error message if no label has been set in TCA
    ([\#17947](https://forge.typo3.org/issues/17947))
-   \[BUGFIX\] getAllowedItems called with one parameter too much
    ([\#34030](https://forge.typo3.org/issues/34030))
-   \[BUGFIX\] Content rendering: Definition lists in RTE are wrapped in
    p ([\#25083](https://forge.typo3.org/issues/25083))
-   \[BUGFIX\] Update extension must invalidate autoloader cache
    ([\#33895](https://forge.typo3.org/issues/33895))
-   \[BUGFIX\] RTE: Consistent naming for menutabs at “Insert image”
    ([\#34026](https://forge.typo3.org/issues/34026))
-   \[BUGFIX\] TypoLink: absolute urls when installed in subfolder
    ([\#33214](https://forge.typo3.org/issues/33214))
-   \[BUGFIX\] Unify Template Backend Modules
    ([\#33963](https://forge.typo3.org/issues/33963))
-   \[BUGFIX\] Unknown record collection type in
    RecordCollectionRepository
    ([\#33938](https://forge.typo3.org/issues/33938))
-   \[BUGFIX\] Warnings in tcemain on iterating over unset columns
    ([\#32467](https://forge.typo3.org/issues/32467))
-   \[BUGFIX\] htmlArea RTE: Target of localized string may be empty
    ([\#33897](https://forge.typo3.org/issues/33897))
-   \[BUGFIX\]\[t3editor\] (De-)Activating does not work in Chrome
    ([\#33515](https://forge.typo3.org/issues/33515))
-   \[BUGFIX\] htmlArea RTE: Default skin inconsistent with ExtJS
    xtheme-blue ([\#33889](https://forge.typo3.org/issues/33889))
-   \[BUGFIX\] show uid of reference in show\_item.php
    ([\#33866](https://forge.typo3.org/issues/33866))
-   \[BUGFIX\] Check minitems for TCAtree
    ([\#25003](https://forge.typo3.org/issues/25003))
-   \[BUGFIX\] Add the title and increase width of the multiple select
    boxes ([\#32732](https://forge.typo3.org/issues/32732))
-   \[BUGFIX\] TYPO3 Backend is too slow if sys\_log table is large
    ([\#33532](https://forge.typo3.org/issues/33532))
-   \[BUGFIX\] Wizard in HTML element moved to t3editor
    ([\#33813](https://forge.typo3.org/issues/33813))
-   \[BUGFIX\] Resetting of input field to default when having a range
    fails ([\#28298](https://forge.typo3.org/issues/28298))
-   \[BUGFIX\] Translated mailform should use localized email
    ([\#17061](https://forge.typo3.org/issues/17061))
-   \[BUGFIX\] IRRE: Selected items remain in selector with
    foreign\_unique ([\#21102](https://forge.typo3.org/issues/21102))
-   \[BUGFIX\] Remove early return in PageTreeDataProvider
    ([\#33761](https://forge.typo3.org/issues/33761))
-   \[BUGFIX\] RTE transformation transforms LF/CR between div and hr
    into space ([\#26815](https://forge.typo3.org/issues/26815))
-   \[BUGFIX\] RTE: Removing div from block format select box may not
    work ([\#33457](https://forge.typo3.org/issues/33457))
-   \[BUGFIX\] htmlArea RTE: CSS class names are lowercase in WebKit
    ([\#32408](https://forge.typo3.org/issues/32408))
-   \[BUGFIX\] Unset stdWrap of select.pidInList
    ([\#28526](https://forge.typo3.org/issues/28526))
-   \[BUGFIX\] \*IFSUB ignores l18n\_cfg field
    ([\#19925](https://forge.typo3.org/issues/19925))
-   \[BUGFIX\] saltedpasswords update task only updates 42 records
    ([\#31252](https://forge.typo3.org/issues/31252))
-   \[BUGFIX\] Loading of an IRRE element with subtabs freezes and
    breaks browsers ([\#33448](https://forge.typo3.org/issues/33448))
-   \[BUGFIX\] Shortcut redirect ignores linkVars syntax
    ([\#32253](https://forge.typo3.org/issues/32253))
-   \[BUGFIX\] Validation for multiple forms on one page
    ([\#31711](https://forge.typo3.org/issues/31711))
-   \[BUGFIX\] TSconfig option hides table pages\_language\_overlay
    ([\#32693](https://forge.typo3.org/issues/32693))
-   \[BUGFIX\] Remove early return in PageTreeDataProvider
    ([\#33761](https://forge.typo3.org/issues/33761))
-   \[BUGFIX\] SQL error in extension manager
    ([\#33697](https://forge.typo3.org/issues/33697))
-   \[BUGFIX\] Scheduler BE module fails to load due to autoloader
    issues ([\#33116](https://forge.typo3.org/issues/33116))
-   \[BUGFIX\] Confusing error message in reports module
    ([\#32650](https://forge.typo3.org/issues/32650))
-   \[BUGFIX\] IRRE translation links shouldn't be shown if no parent
    ([\#32073](https://forge.typo3.org/issues/32073))
-   \[BUGFIX\] .inc files still call cObj-&gt;checkEmail
    ([\#31573](https://forge.typo3.org/issues/31573))
-   \[BUGFIX\] Release locked records during logout
    ([\#20211](https://forge.typo3.org/issues/20211))
-   \[BUGFIX\] Formmail doesn't always use correct character set
    ([\#28684](https://forge.typo3.org/issues/28684))
-   \[BUGFIX\] Don't save form protection error messages in session
    ([\#30272](https://forge.typo3.org/issues/30272))
-   \[BUGFIX\] Live search must implement search properties
    ([\#31761](https://forge.typo3.org/issues/31761))
-   \[BUGFIX\] Prevent compression of scripts that use ajax.php
    ([\#24274](https://forge.typo3.org/issues/24274))
-   \[BUGFIX\] SQL parser does not support NULL as default value
    ([\#33704](https://forge.typo3.org/issues/33704))
-   \[BUGFIX\] RTE: Some toolbar elements may not be correctly
    initialized ([\#33637](https://forge.typo3.org/issues/33637))
-   \[BUGFIX\] Update felogin manual
    ([\#18992](https://forge.typo3.org/issues/18992))
-   \[BUGFIX\] Encoding error in TCEforms inline JavaScript
    ([\#32422](https://forge.typo3.org/issues/32422))
-   \[BUGFIX\] Bookmarks to pages don't work
    ([\#30352](https://forge.typo3.org/issues/30352))
-   \[BUGFIX\] Fatal error if pear package http\_request2 is installed
    ([\#32013](https://forge.typo3.org/issues/32013))
-   \[BUGFIX\] htmlArea RTE: Changing the text color to black does not
    work ([\#32877](https://forge.typo3.org/issues/32877))
-   \[BUGFIX\] htmlArea RTE: Firefox may report error when setting a
    color ([\#33644](https://forge.typo3.org/issues/33644))
-   \[BUGFIX\] RTE: Some toolbar elements may not be correctly
    initialized ([\#33637](https://forge.typo3.org/issues/33637))
-   \[BUGFIX\] RTE: Some toolbar elements may not be correctly
    initialized ([\#33637](https://forge.typo3.org/issues/33637))
-   \[BUGFIX\] Install Tool: Settings added by extensions can be edited
    (duplicating them) ([\#25213](https://forge.typo3.org/issues/25213))
-   \[BUGFIX\] Reports module shows unnecessary info text
    ([\#32580](https://forge.typo3.org/issues/32580))
-   \[BUGFIX\] Scheduler BE module fails to load due to autoloader
    issues ([\#33116](https://forge.typo3.org/issues/33116))
-   \[BUGFIX\] t3lib\_BEfunc::getViewDomain() returns wrong or no domain
    ([\#30892](https://forge.typo3.org/issues/30892))
-   \[BUGFIX\] Broken datepicker on unsaved flexform sections
    ([\#23843](https://forge.typo3.org/issues/23843))
-   \[BUGFIX\] Invalid “unequal”-statement and string-quoting in SQL
    ([\#32161](https://forge.typo3.org/issues/32161))
-   \[BUGFIX\] canBeInterpretedAsInteger fatals if given an object
    ([\#33446](https://forge.typo3.org/issues/33446))
-   \[BUGFIX\] htmlArea RTE: Some attributes wrongly unset by “Edit
    element” ([\#33466](https://forge.typo3.org/issues/33466))
-   \[BUGFIX\] Misinterpretaion of memory\_limit setting in install tool
    ([\#20069](https://forge.typo3.org/issues/20069))
-   \[BUGFIX\] Marker not removed from file module
    ([\#33455](https://forge.typo3.org/issues/33455))
-   \[BUGFIX\] Sorting of localized records is wrong after copying
    ([\#30469](https://forge.typo3.org/issues/30469))
-   \[BUGFIX\] Warnings in BE when using “Find filename”
    ([\#21591](https://forge.typo3.org/issues/21591))
-   \[BUGFIX\] Fix permissions and create group in mkdir\_deep
    ([\#32261](https://forge.typo3.org/issues/32261))
-   \[BUGFIX\] htmlArea RTE: magic image maxWidth is not working as
    expected ([\#32301](https://forge.typo3.org/issues/32301))
-   \[BUGFIX\] htmlArea RTE : Adding link problem with IE
    ([\#31763](https://forge.typo3.org/issues/31763))
-   \[BUGFIX\] User settings don't remember that default language is
    selected ([\#31943](https://forge.typo3.org/issues/31943))
-   \[BUGFIX\] Regression in language handling
    ([\#33227](https://forge.typo3.org/issues/33227))
-   \[BUGFIX\] MENU special = updated does not work anymore
    ([\#32374](https://forge.typo3.org/issues/32374))
-   \[BUGFIX\] HTML entity   is inserted before and after inline element
    ([\#32263](https://forge.typo3.org/issues/32263))
-   \[BUGFIX\] BE user switch impossible when in adminOnly mode
    ([\#32686](https://forge.typo3.org/issues/32686))
-   \[BUGFIX\] Page renderer provides files to compressor incorrectly
    ([\#32397](https://forge.typo3.org/issues/32397))
-   \[BUGFIX\] Proper cursor icon in access module
    ([\#33230](https://forge.typo3.org/issues/33230))
-   \[BUGFIX\] Usage of custom caching backends
    ([\#32986](https://forge.typo3.org/issues/32986))
-   \[BUGFIX\] fe\_adminLib.inc uses undefined function
    ([\#32773](https://forge.typo3.org/issues/32773))
-   \[BUGFIX\] Shortcut page does not keep 'type' parameter
    ([\#31333](https://forge.typo3.org/issues/31333))
-   \[BUGFIX\] TCEmain::clear\_cacheCmd relies on active BE\_USER
    ([\#28007](https://forge.typo3.org/issues/28007))
-   \[BUGFIX\] TYPO3 prompts to select position when there are no pages
    ([\#32111](https://forge.typo3.org/issues/32111))
-   \[BUGFIX\] t3lib\_div::validPathStr() fails on certain file names
    ([\#32046](https://forge.typo3.org/issues/32046))
-   \[BUGFIX\] Unlimited memory limit handling in system status report
    ([\#32231](https://forge.typo3.org/issues/32231))
-   \[BUGFIX\] Link to mounted shortcut page lacks &MP parameter
    ([\#32938](https://forge.typo3.org/issues/32938))
-   \[BUGFIX\] Typo in Install Tool
    ([\#32970](https://forge.typo3.org/issues/32970))
-   \[BUGFIX\] User Admin: Move “Add” button to docheader
    ([\#32855](https://forge.typo3.org/issues/32855))
-   \[BUGFIX\] Vague error message in t3lib\_div
    ([\#18545](https://forge.typo3.org/issues/18545))
-   \[BUGFIX\] flock() calls in TYPO3 prevent NFS hosting
    ([\#31460](https://forge.typo3.org/issues/31460))
-   \[BUGFIX\] Reports are called twice
    ([\#32768](https://forge.typo3.org/issues/32768))
-   \[BUGFIX\] Adjust shortcut mode labels for selected/current page
    ([\#26690](https://forge.typo3.org/issues/26690))
-   \[BUGFIX\] locallangXMLOverride is broken since the switch to XLIFF
    ([\#32573](https://forge.typo3.org/issues/32573))
-   \[BUGFIX\] Add SQL-comparator &lt;&gt; to SQL parser
    ([\#32626](https://forge.typo3.org/issues/32626))
-   \[BUGFIX\] Fix permissions of downloaded translations into l10n
    folder ([\#31964](https://forge.typo3.org/issues/31964))
-   \[BUGFIX\] Module menu link wrap
    ([\#32448](https://forge.typo3.org/issues/32448))
-   \[BUGFIX\] Backend loops in Page module
    ([\#32664](https://forge.typo3.org/issues/32664))
-   \[BUGFIX\] Missing renames of addClass and removeClass
    ([\#32673](https://forge.typo3.org/issues/32673))
-   \[BUGFIX\] ModuleMenu has changed resizing/collapse behaviour
    ([\#32670](https://forge.typo3.org/issues/32670))
-   \[BUGFIX\] Showing/Hiding toolbars of CE's in PageModule broken
    ([\#32669](https://forge.typo3.org/issues/32669))
-   \[BUGFIX\] Fatal error during install process
    ([\#32666](https://forge.typo3.org/issues/32666))
-   \[BUGFIX\] TCEforms reference non-existant CSS file resize.css
    ([\#32659](https://forge.typo3.org/issues/32659))
-   \[BUGFIX\] PHP warning if open\_basedir is enabled
    ([\#32109](https://forge.typo3.org/issues/32109))
-   \[BUGFIX\] Set currentVal in 2nd rendering loop of IMGTEXT
    ([\#28794](https://forge.typo3.org/issues/28794))
-   \[BUGFIX\] typolink prepends wrong domain when using url scheme
    ([\#31771](https://forge.typo3.org/issues/31771))
-   \[BUGFIX\] Fatal error on clearing all caches in backend
    ([\#32658](https://forge.typo3.org/issues/32658))
-   \[BUGFIX\] ENABLE\_INSTALL\_TOOL does not respect fileCreateMask
    ([\#21740](https://forge.typo3.org/issues/21740))
-   \[BUGFIX\] Checkbox-array space
    ([\#32088](https://forge.typo3.org/issues/32088))
-   \[BUGFIX\] @charset must be lowercase in CSS
    ([\#32163](https://forge.typo3.org/issues/32163))
-   \[BUGFIX\] sessionTimeout for BE does not work
    ([\#32274](https://forge.typo3.org/issues/32274))
-   \[BUGFIX\] Fix path check for custom RTE styles
    ([\#32625](https://forge.typo3.org/issues/32625))
-   \[BUGFIX\]\[reports\] Missing check for SOAP extension
    ([\#11806](https://forge.typo3.org/issues/11806))
-   \[BUGFIX\] Ambiguous XCLASS naming
    tx\_em\_Connection\_ExtDirectServer
    ([\#32596](https://forge.typo3.org/issues/32596))
-   \[BUGFIX\] Sporadic memcache error on server load
    ([\#30162](https://forge.typo3.org/issues/30162))
-   \[BUGFIX\] “Show page” does not use a proper URL scheme
    ([\#31959](https://forge.typo3.org/issues/31959))
-   \[BUGFIX\] Multiple values not displayed for simple items lists
    ([\#31374](https://forge.typo3.org/issues/31374))
-   \[BUGFIX\] RTE not loading in IE when content css file does not
    exist ([\#29899](https://forge.typo3.org/issues/29899))
-   \[BUGFIX\] Disabled ImageMagick throws Exception
    ([\#32433](https://forge.typo3.org/issues/32433))
-   \[BUGFIX\] Menus using sectionIndex is broken
    ([\#32375](https://forge.typo3.org/issues/32375))
-   \[BUGFIX\] Add possibility to use Wizards-&gt;Suggest in FlexForms
    ([\#22231](https://forge.typo3.org/issues/22231))
-   \[BUGFIX\] Page module: language table width
    ([\#30206](https://forge.typo3.org/issues/30206))
-   \[BUGFIX\] Install Tool shows internal MySQL databases
    ([\#19278](https://forge.typo3.org/issues/19278))
-   \[BUGFIX\] RTE doesn't allow to create links around images in IE8
    ([\#30631](https://forge.typo3.org/issues/30631))
-   \[BUGFIX\] Form: Confirmation value relies on label value
    ([\#31560](https://forge.typo3.org/issues/31560))
-   \[BUGFIX\] Form: Add more more semantic classes for elements
    ([\#31561](https://forge.typo3.org/issues/31561))
-   \[BUGFIX\] Warnings in BE when using “Update reference index”
    ([\#21590](https://forge.typo3.org/issues/21590))
-   \[BUGFIX\] Invalid query part on menu rendering
    ([\#31622](https://forge.typo3.org/issues/31622))
-   \[BUGFIX\] Respect linkVars for generating the cHash
    ([\#32025](https://forge.typo3.org/issues/32025))
-   \[BUGFIX\] Log password attempt with empty password
    ([\#18176](https://forge.typo3.org/issues/18176))
-   \[BUGFIX\]\[SECURITY\] XSS vulnerability in BE-User Admin module
    ([\#32040](https://forge.typo3.org/issues/32040))
-   \[BUGFIX\] Error in the pageNotFound\_handling with USER\_FUNCTION
    ([\#31839](https://forge.typo3.org/issues/31839))
-   \[BUGFIX\] Install Tool: Improper check of PHP session.auto\_start
    ([\#31404](https://forge.typo3.org/issues/31404))
-   \[BUGFIX\] Vimeo mediawizardprovider needs new syntax
    ([\#31661](https://forge.typo3.org/issues/31661))
-   \[BUGFIX\] magic\_quotes\_gpc does not exist anymore in PHP 5.4
    ([\#30083](https://forge.typo3.org/issues/30083))
-   \[BUGFIX\] Fatal error when exporting from root
    ([\#31350](https://forge.typo3.org/issues/31350))
-   \[BUGFIX\] checkstyle/CGL errors in indexed search
    ([\#31904](https://forge.typo3.org/issues/31904))
-   \[BUGFIX\] Core calls deprecated ADMCMD\_preview()
    ([\#31290](https://forge.typo3.org/issues/31290))
-   \[BUGFIX\]\[!!!\] Slider wizard misuses “max” property
    ([\#31724](https://forge.typo3.org/issues/31724))
-   \[BUGFIX\] Log date picker broken
    ([\#31450](https://forge.typo3.org/issues/31450))
-   \[BUGFIX\] Disambiguate labels in exclude fields list
    ([\#25236](https://forge.typo3.org/issues/25236))
-   \[BUGFIX\] Handling file upload fields is broken
    ([\#31085](https://forge.typo3.org/issues/31085))
-   \[BUGFIX\] Error after hide/show element in list module
    ([\#20598](https://forge.typo3.org/issues/20598))
-   \[BUGFIX\] Options checkboxes are hidden in BE admin user form
    ([\#30492](https://forge.typo3.org/issues/30492))
-   \[BUGFIX\] alt\_doc.php uses deleted alternative page languages for
    translations ([\#31379](https://forge.typo3.org/issues/31379))
-   \[BUGFIX\] JS error on initialization of RTE extension plugin
    ([\#31498](https://forge.typo3.org/issues/31498))
-   \[BUGFIX\] XLIFF: Invalid handling of overlays for unavailable
    language ([\#31353](https://forge.typo3.org/issues/31353))
-   \[BUGFIX\] Add check for salted default admin password
    ([\#31397](https://forge.typo3.org/issues/31397))
-   \[BUGFIX\] Empty text with non-localizable label key
    ([\#31347](https://forge.typo3.org/issues/31347))
-   \[BUGFIX\] Install tool stays open if ENABLE\_INSTALL\_TOOL is not
    writable ([\#29674](https://forge.typo3.org/issues/29674))
-   \[BUGFIX\] EM: Confusing error message when uploading an extension
    to TER that is not registered
    ([\#31309](https://forge.typo3.org/issues/31309))

<Category:ReleaseNotes/TYPO3_4.7.x> [Category:TYPO3
4.7](Category:TYPO3_4.7 "wikilink") <Category:2012>
