TYPO3 CMS 6.2 LTS Technical Release Notes
=========================================

This document contains information about TYPO3 CMS version 6.2 which was
released on March, 25th 2014.

System Requirements
-------------------

The system requirements:

-   PHP &gt;5.3.7 up to 5.6 (PHP 5.4 or later recommended)
-   MySQL 5.1 up to 5.6 or compatible (no “strict mode”)

Note that MySQL “strict mode” is currently not supported by TYPO3. If
your MySQL server is configured with either STRICT\_TRANS\_TABLES or
STRICT\_ALL\_TABLES (especially true with MySQL 5.6, as this is a new
default), you need to configure setDBinit in the Install Tool.

Installing
----------

### Upgrading

Smooth migration from LTS to LTS

Many existing TYPO3 installations still run TYPO3 4.5, which will still
be supported until 2015. The CMS team has made an effort to make
migrating from 4.5 to 6.2 as easy as possible. The newly created Install
Tool provides several new Upgrade Wizards. A compatibility check
extension (smoothmigration) was created to allow integrators to check
their existing installations for compatibility issues and fix the most
common problems prior to upgrading. On top of that, the included
backwards compatibility layer provides smooth migration for extension
developers. Extensions which were built to work with 4.5 only need
little to no adaptation to work with both 4.5 and 6.2.

A [documentation about the LTS to LTS
migration](https://docs.typo3.org/typo3cms/InstallationGuide/UpgradeLTS/Index.html)
is available online. Expect other tips and information to be added and
linked through this Wiki during the next future.

### New installations

### Compatibility

Since TYPO3 6.0, the core makes use of namespaces. To keep compatibility
with older extensions, a compatibility layer is in place. Calls for Core
classes like t3lib\_div will still work exactly the same as before, as
the compatibility layer makes sure that old class names are aliased to
the new namespaced ones. Extension developers that do not need to
support TYPO3 4.x anymore are highly encouraged to use the namespaced
classes from now on. Extension that still support TYPO3 4.x can use the
old class names, but should remove all “requires” (for core classes) in
their code. The autoloading (available since 4.3) will load the required
classes.

We removed some long obsolete and not supported settings and also it's
usage: GFX/im\_mask\_temp\_ext\_noloss (\#52012),
GFX/im\_combine\_filename (\#52011), BE/TSconfigConditions (\#52013),
GFX/im\_no\_effects (\#52010), GFX/im\_imvMaskState and
GFX/im\_negate\_mask (\#52088). With this, we also officially removed
support for ImageMagick 4 and 5 in the code.

-   PHP warnings now by default are “exceptional errors”, so in Dev Mode
    they throw an Exception!
-   Directories t3lib and tslib have been removed.
-   Removed PHP constant PATH\_t3lib.
-   Moved ExtJS- & JavaScript files from t3lib to typo3.

#### Smooth Migration Extension

-   Extension in TER:
    <https://extensions.typo3.org/extension/smoothmigration/>
-   Project page:
    <https://forge.typo3.org/projects/typo3cms-smoothmigration>

Changes and improvements
========================

This will list all changes and improvements between TYPO3 6.1 and 6.2.
For changes until 6.1, consult the previous
[:Category:ReleaseNotes](:Category:ReleaseNotes "wikilink").

File Abstraction Layer 2.0
--------------------------

The File Abstraction Layer (FAL) which was introduced with TYPO3 6.0
provides a unified interface for the core and extensions to handle
files, regardless of where they are stored (locally or in the cloud,
i.e. on Amazon S3 or Dropbox). FAL was improved for the latest release,
in order to provide the missing features and stability.

Working with files in the backend was never easier: a new drag & drop
upload functionality makes it easy to upload files to the file list or
attach them directly to content elements.

-   drag & drop upload in filelist and content elements
-   filemetadata extension for common meta data fields
-   translatable meta data
-   missing files handling (in content elements and report module)
-   fine grained file/directory permissions for BE users

### Breaking Changes

-   The Driver API was improved and is not compatible with 6.0 and 6.1.
    Check out the [new Driver
    Interface](https://git.typo3.org/Packages/TYPO3.CMS.git/blob/HEAD:/typo3/sysext/core/Classes/Resource/Driver/DriverInterface.php).
-   The available signal slots were improved and reworked for a
    consistent and complete coverage. Classname is \`\`
    TYPO3\\\\CMS\\\\Core\\\\Resource\\\\ResourceStorage\`\`, and check
    out the [list of available FAL
    signals](https://git.typo3.org/Packages/TYPO3.CMS.git/blob/HEAD:/typo3/sysext/core/Classes/Resource/ResourceStorageInterface.php).

Distribution Management
-----------------------

TYPO3 6.2 introduces the concept of Distributions. The core now is
shipped only as a blank installation. The user can post-install a
configured distribution through the newly introduced distribution
management. The official Introduction Package will be shipped using this
technique. It also allows third party developers, agencies or hosting
companies to create and share their own distributions with the
community.

-   See <https://wiki.typo3.org/Blueprints/DistributionManagement>

Backend / Admin
---------------

### Documentation Module

Now all TYPO3 documentation (from the Core, Extensions and optionally
for third party documentation, can be centrally managed by the new
documentation module.

### Scheduler

-   Introduction of task groups
-   Allow to describe tasks

### Workspaces

-   Editors/users can define who to notify about a change
-   Tab “All” is now visible to all users
-   Several fixes in regard of versioning inline relational records
    (IRRE) and Many to Many (MM) relation records.

### Other improvements

-   Doc types can be excluded per BE user in the page tree
    (options.pageTree.excludeDoktypes = 254)
-   Modules can be hidden in backend (options.hideModules = file, help)
-   Alternative domain for backend preview can be configured:
    TCEMAIN.viewDomain = example.com
-   A new CLI command to install and uninstall extensions by key
    (\#51629), i.e.

<!-- -->

    php typo3/cli_dispatch.phpsh extbase extension:install news

Frontend / Integrator
---------------------

### Responsive Image Rendering

-   <https://typo3.org/news/article/responsive-image-rendering-in-typo3-cms-62/>

### Backend Mobile Preview

-   Configuration through
    [mod.web\_view.previewFrameWidths](https://docs.typo3.org/typo3cms/TSconfigReference/latest/PageTsconfig/Mod/Index.html#pagewebview).

### Backend Layouts

Backend layout data provider interface allows extensions to provide
their own backend layout. See [an example from Georg on how this can be
used](https://github.com/georgringer/belayout_fileprovider). Data
providers need to be implement
\`\`TYPO3\\CMS\\Backend\\View\\BackendLayout\\DataProviderInterface\`\`
and are registered with:

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['BackendLayoutDataProvider'][$_EXTKEY] = 'Classname';

A \`\`DataProviderContext\`\` object is used to transport submitted data
(e.g. table or field name) to the accordant data providers.

-   Backend layouts now support conditions

### Form Wizard

-   Form wizard now got a redirect processor

### Categories

-   Category based HMENU
    -   menu of pages
    -   menu of content elements
-   Categories are now sortable in the backend
-   It is now possible to restrict visibility of categories for BE users
    and groups

### TypoScript

-   Recursive INCLUDE\_TYPOSCRIPT
-   Relative paths in INCLUDE\_TYPOSCRIPT files possible
-   New strPad method to stdWrap
-   \_DEFAULT\_PI\_VARS now has stdWrap power
-   New getData functionality debug:register and debug:page to dump the
    values from TSFE in the frontend
-   stdWrap's “replacement” method now supports optionSplit
-   File links file metadata can be accessed through
    register:description, register:titleText and register:altText
-   Two registers added to cObject FILES: FILE\_NUM\_CURRENT and
    FILES\_COUNT
-   FILES now supports .begin and .maxItems properties
-   HMENU of type “category” added
-   Property “categories” allows the access to categories for the
    cObject RECORDS
-   Condition userFunc accepts multiple arguments now. I.e. \[userFunc =
    user\_function(argument1, argument2, ...)\]
-   Application Context can be used in conditions (\[applicationContext
    = Development/Debugging, Development/Profiling\])
-   Condition to check for devIP: \[IP = devIP\]
-   .select new property .includeRecordsWithoutDefaultTranslation
-   CONTENT.table any table could be used, instead of only prefixed ones
    with “pages\_”, “tt\_”, “tx\_”, “ttx\_”, “fe\_”, “user\_” or
    “static\_”.

### Frontend

-   HTTP response includes header Content-length by default now
-   felogin: New option “showForgotPassword” to disable/enable “forgot
    password” option per plugin instance
-   indexed\_search: Result list has stdWrap-properties (option:
    plugin.tx\_indexedsearch.resultlist\_stdWrap)

For Developers
--------------

### Package Management

Introducing the concept of Package Management brings interoperability
with the whole world of Composer based PHP libraries and TYPO3 Flow
packages to the TYPO3 CMS eco-system. The Package Management implements
PSR-0 auto-loading, supports Vendor Namespaces and allows TYPO3 CMS
installations to load and make use of native TYPO3 Flow packages. On top
of that, it is now possible to natively load Composer based libraries.
This means that TYPO3 CMS 6.2 provides a base for creating PHP
applications of the future. The feature-set of the Package Management
will be further improved in the next releases of TYPO3 CMS.

See <https://wiki.typo3.org/Blueprints/Packagemanager>.

-   \`\`\$TYPO3\_CONF\['EXT'\]\['extListArray'\]\`\` was removed from
    \`\`typo3conf/LocalConfiguration.php\`\`
-   Upon first hit, content of file
    \`\`typo3conf/LocalConfiguration.php\`\` is copied to
    \`\`typo3conf/LocalConfiguration.beforePackageStatesMigration.php\`\`
    as a backup and can be deleted savely after successful upgrade.
-   New file \`\`typo3conf/PackageStates.php\`\` contains:
    -   status of package (active/inactive)
    -   extension location in filesystem
-   If file \`\`PackageStates.php\`\` is missing, it will be
    (re-)created, containing all extensions, and only activated those
    with “protected” flag in \`\`composer.json\`\`
-   Extensions in the following directories are automatically detected:
    -   typo3/sysext/
    -   typo3/ext/
    -   typo3/contrib/
    -   typo3conf/ext/
    -   Packages/ (recursive)

Logging API is now fully compatible with
[PSR-3](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md).
This means that integrating third party components which require
Psr\\Log\\LoggerInterface is now fully supported.

-   TCA: displayCond new options BIT and !BIT to check bitwise in
    multi-valued fields
-   On the API side, we now allow multiple category fields per table
    (\#51921)
-   PHP warnings now by default are “exceptional errors”, so in Dev Mode
    they throw an Exception!

### Extbase

See a [list of breaking Extbase
changes](https://forge.typo3.org/projects/typo3v4-mvc/wiki/Breaking_Changes).

-   Extbase allows recursive validation (\#6893). Note that in certain
    situations this can be a breaking change, please stay up to date by
    following the list of Extbase/Fluid breaking changes, maintained by
    the Extbase team.
-   The team also improved some ViewHelpers: The BE module ViewHelper
    was improved to allow loading more than one CSS/JS files and other
    new goodies (\#49749). Already in use by the Extension Manager,
    Language and Reports Module. There is now a new Switch-ViewHelper
    (\#48653) and one to display file sizes (\#49139).

### Deprecation

We continue to clean up the core by removing deprecated methods,
finishing the move to namespaces and tweaking the core to be
maintainable for the long support period that we will offer with 6.2.

-   Removed all deprecated “dummy” files in t3lib/\*.php and other
    places.

#### Adapting to empty t3lib / tslib

Note that removing the \*.php files from t3lib and tslib (and others,
i.e. typo3/template.php) is a major breaking change! The files were
deprecated in 6.0 (with the move to namespaced versions) and removing
them now will force many extensions to be adapted. We will provide
detailed upgrade information and “checklists” soon - through the project
“LTS Smooth Upgrade”.

The recommended way of loading TYPO3 Core files is to use
“auto-loading”. It can easily be solved by removing all “require” and
“require\_once” for Core files (in t3lib or tslib). Note that this works
with TYPO3 as low as TYPO3 4.3, so you don't have to worry about
compatibility with older TYPO3 versions.

The compatibility class alias layer will still be included in 6.2 LTS,
meaning there will still be a classes with the old names (i.e.
“t3lib\_div”). The only difference is that it's no longer supported to
require the file (in that case t3lib/class.t3lib\_div.php) anymore,
because the file has been deleted.

#### Adapting to removed typo3/browse\_links.php

This script has been replaced with the wizard\_element\_browser wizard.
You will need to adapt your URL and replace :
<PHP>'browse\_links.php?var1=data1&var2=data2&...'</PHP> with :
<PHP>\\TYPO3\\CMS\\Backend\\Utility\\BackendUtility::getModuleUrl('wizard\_element\_browser')
. '&var1=data1&var2=data2&...'</PHP>

#### Other removals

-   Dropped unmaintained extension tsconfig\_help
-   Moved template files from typo3/templates/ to their final
    destination inside the respective system extensions

Security
--------

The former optional extension saltedpasswords is now installed by
default, securing the passwords of backend users and the Install Tool.
Improved protection against cross-site request forgery (CSRF) was
implemented in nearly all backend modules.

-   OpenID improvements: Wizard to configure URL

<Category:ReleaseNotes/TYPO3_6.2.x> [Category:TYPO3
6.2](Category:TYPO3_6.2 "wikilink") <Category:2014>
