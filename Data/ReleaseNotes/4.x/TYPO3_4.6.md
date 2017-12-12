TYPO3 4.6 Release Notes
=======================

This document contains information about TYPO3 version 4.6.0 which was
released on October, 25th 2011.

System Requirements
-------------------

The system requirements are **NOT** the same as for TYPO3 4.5:

-   PHP 5.3.x
-   MySQL 5.0.x-5.1.x

Installing
----------

### Upgrading

Download the packages from the [download package page at
typo3.org](https://typo3.org/download/).

To upgrade an existing installation of 4.5 to 4.6, please follow these
steps:

-   Upgrade PHP to PHP 5.3 if needed
    -   SOAP extension is needed
    -   Safe mode is no more supported, you should consider getting rid
        of the corresponding configuration
    -   magic\_quotes\_gpc is deprecated but still defaults to “On”, you
        should not rely on this option anymore and thus should
        explicitly set its value to “Off”
    -   Make sure to set memory\_limit to at least 64M in php.ini
-   When using ImageMagick, upgrade it to version 6
-   Visit the Install Tool:
    -   Run through “Update wizards” which are new in 4.6 (you can now
        go through them using the “Next” button)
    -   Use the “Database COMPARE” section and apply all database schema
        changes.
-   Update your `localconf.php` configuration:
    -   `$TYPO3_CONF_VARS['SYS']['useCachingFramework'] = `*`TRUE|FALSE`*
        is deprecated as caching framework is now always activated.
        Remove this line.

#### Possible upgrade issues

If updating TYPO3 to version 4.6 or above it might happen that a fatal
php error is thrown:

`Fatal error: Uncaught exception 't3lib_cache_exception_NoSuchCache' with message 'A cache with identifier `“`cache_phpcode`”` does not exist.' `

This happens if localconf.php (or some ext\_localconf.php file of some
extension) contains a line that resets the whole cache configuration. A
typical example is a line of the form:

`$TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations'] = array(...)`

This was recommended by some blog posts but is highly discouraged and
must be fixed! Always change specific configuration options only and
never the whole sub array. The core must have a chance to come with a
sane default configuration and to set up new configuration with new
versions.

### New installations

Try out the **introduction package
([TAR.GZ](http://sourceforge.net/projects/typo3/files/TYPO3%20Source%20and%20Dummy/TYPO3%204.6.0/introductionpackage-4.6.0.tar.gz/download))
([ZIP](http://sourceforge.net/projects/typo3/files/TYPO3%20Source%20and%20Dummy/TYPO3%204.6.0/introductionpackage-4.6.0.zip/download))**
which provides a very easy way of installing TYPO3 and having some
example setup already in place.

### Compatibility

**Internet Explorer 6**

Support for Internet Explorer 6 has been dropped in the Backend.
Extended support for MS Windows XP (and thus Internet Explorer 6) is
still available through TYPO3 4.5 LTS until its end of life in April
2014.

**safe\_mode**

PHP 5.3 is required and safe mode is not supported anymore. If this is a
problem for you, please stick to 4.5 LTS which will still be supported
for the next 2-3 years.

**PHP \_\_constructor() methods**

The old PHP 4 style class constructors, which have been the same as the
class name have been changed to use the PHP 5 \_\_constructor() syntax.
This is considered as breaking change, if extension called the old
constructor of an object directly.

Changes and improvements
========================

This will list all changes and improvements between TYPO3 4.5 and 4.6.
For technical details see ChangeLog included in the typo3\_src package.

General
-------

### XLIFF support

XLIFF language files (.xlf) are now the official format for locallang
files. These files are generated from our translation server
[1](http://translation.typo3.org). You are encouraged to use your
typo3.org user account to log into the translation server and suggest
corrections.

Your JavaScript files using `TYPO3.lang` to retrieve localization labels
should be updated to use the new `TYPO3.l10n` API instead:

`TYPO3.lang.KEY => TYPO3.l10n.localize('KEY')`\
`TYPO3.lang['KEY.SUBKEY'] => TYPO3.l10n.localize('KEY.SUBKEY')`

Please note that you must add the typo3lang.js script into your own
modules and plugins or the TYPO3.l10n object is missing.

`$pageRenderer->addJsFile(t3lib_extMgm::extRelPath('lang') . 'res/js/be/typo3lang.js');`

Additionally, a user-defined hierarchy of languages may now be
specified. By default, locales composed of a language code and a country
code (e.g., fr\_CA) now fall back to the main language (fr) before using
English (default). This means that if fr\_CA is being used (French
Canada), a missing label will be searched within French localization
files before being searched within the default, English, localization
files. This behaviour may be changed by specifying arbitrary
dependencies:

`$TYPO3_CONF_VARS['SYS']['localization']['locales']['dependencies'] = array(`\
`   'de_CH' => array('de_AT', 'de'),`\
`);`

Swiss German (de\_CH) will first use Austrian German (de\_AT), then
German (de) and only using English as a final option (as usual).

### Form

The new Form content element, available as a system extension, makes it
easy to generate forms to be used as content elements. It provides a
Form wizard based on ExtJS to allow editors to construct forms very
efficiently with intuitive drag & drop functionality and sorting methods
to add and replace form elements. While working in the wizard, the
editor sees exactly how the form will be displayed in the website.

This is a complete rewrite and enhancement of the Form content element
you may have used in the past. It paves the way for future enhancements
such as storing data in the database instead of sending an email or
having AJAX validation to show an error immediately after filling in a
single field without submitting the whole form.

**NOTE**: If you upgrade from a previous version of TYPO3, you have to
manually load the Form project using the Extension Manager. For new
TYPO3 installations based on the introduction package or the blank
package, the Form project is loaded by default.

**BEWARE**: Loading the Form project deactivates the old Form content
element. No upgrade wizard is available so you have to manually upgrade
your old form definitions to use the new feature set of this extension.

### Other General Improvements

**Precise Publishing Dates**

Editors can now set the publishing date for pages and elements using
both date and time values, all the way down to the minute. This was
previously not possible due to caching issues and required work-arounds.

**New Scheduler task to delete old data from tables**

The Scheduler task 'Table garbage collection' can be used to delete old
data from growing tables like log tables on a regular basis. Additional
tables that can be cleaned up must be registered in
\$TYPO3\_CONF\_VARS\['SC\_OPTIONS'\]\['scheduler'\]\['tasks'\]\['tx\_scheduler\_TableGarbageCollection'\]\['options'\]\['tables'\]
with its table name and a field. After that they can be selected in the
Scheduler task.

**New Scheduler task to delete old files from fileadmin trash
directories**

The Scheduler task 'Fileadmin recycler garbage collection' can be used
to definitely delete old files from \_recycler\_ directories. When a
\_recycler\_ directory exists within the path of a file to delete via
the File module, the file is not actually deleted, but stored in the
\_recycler\_ folder. This new task now deletes all files insider
\_recycler\_ folders that have been moved there for longer than a given
number of days.

**New option to customize the cookie names used by TYPO3**

It is now possible to customize the cookie names used by TYPO3 to avoid
clashes when running more installations on the same domain. The names
used can be configured with:

`$TYPO3_CONF_VARS['FE']['cookieName']`\
`$TYPO3_CONF_VARS['BE']['cookieName']`

**Moved t3d exports to fileadmin/\_temp\_ directory**

Packages in a .t3d format exported by the import/export extension are
now stored in fileadmin/\_temp\_ by default. Access to this directory is
automatically restricted by default .htaccess rules.

**Added “IDNA Convert” libray for Internationalized Domain Names (IDN)**

The new library can be found in typo3/contrib/idna/ and is used to
encode and decode internationalized domain names (containing special
characters like umlauts) from and to punycode.

Security
--------

For new installations, extensions saltedpasswords and rsaauth are now
automatically activated and used if the necessary server requirements
are met. This includes a non-broken OpenSSL configuration.

Users upgrading to TYPO3 4.6 are strongly advised to manually enable
these extensions in order to strengthen the security of their website.

If extension rsaauth is enabled, the password transmission when saving
the user settings is now encrypted.

Backend
-------

### Live Search

In previous TYPO3 versions, there were several problems with Backend
search:

-   it searched far more fields than necessary (for example, TSConfig)
-   it searched “uid” and other numeric fields even if the value was not
    numeric
-   it used LIKE x search on numeric fields
-   it searched all tables even if they did not make sense to be
    searched
-   it was too slow
-   it searched only first four levels deep in the page tree

All these problems came from the (wrong) idea that TYPO3 could detect
where it could search. With the new backend search, tables need to be
marked as “searchable” and provide a list of fields that make sense to
search for. In addition, some fields are searched without case
sensitivity.

Basically, the 'ctrl' section of TCA is extended with a new option:

`'searchFields' => 'username,email,realName'`

### Extension Manager

The old Extension Manager has now been officially declared obsolete and
the ExtJS-based one will be used regardless of your previous
preferences.

If you still want to use the old Extension Manager you may explicitly
enable it with:

`$GLOBALS['TYPO3_CONF_VARS']['EXT']['showOldModules'] = TRUE;`

But keep in mind that this is totally unsupported and that the old
Extension Manager may be removed or break at any time without further
notice.

Administration / Customization
------------------------------

### User-Defined Languages

The Backend now supports user-defined languages. This allows dialects to
be added or new languages to be prepared before official inclusion
within TYPO3.

New languages can be added by declaring them within
typo3conf/localconf.php:

`$TYPO3_CONF_VARS['SYS']['localization']['locales']['user'] = array(`\
`    'de_CH' => 'Swiss German',`\
`    ...`\
`    '`<language_key>`' => '`<English Name>`',`\
`);`

Localization files should then be prepared as usual within
typo3conf/l10n/<language_key>/ just as with localization files retrieved
from TER.

### ENABLE\_INSTALL\_TOOL

This special file, used in the past to grant access to the Install Tool,
does not need to be generated manually any longer. The command to create
it from the administrator's User Settings has now been moved to the
Install Tool module itself. In fact, opening this module in the Backend
as an administrator now automatically triggers the creation of this
file, which saves administrators a few clicks.

Development
-----------

### Extbase

Extbase, the MVC bridge between TYPO3 Phoenix' framework FLOW3 and TYPO3
v4 as well as the new templating engine Fluid are steadily improved with
every new version of TYPO3 4.x.

**New Property Mapper**: The Property Mapper has been completely
rewritten in FLOW3, and this has also been backported to Extbase. The
new property mapper is very configurable and extensible. Furthermore,
the MVC stack has been adjusted to be in sync with FLOW3 again. However,
the new behavior is ONLY ACTIVATED MANUALLY. We suggest that you
activate it for your new extensions by inserting:

`plugin.tx_[yourExtensionName].features.rewrittenPropertyMapper = 1`

The documentation for the new property mapper can be found at
<http://flow.typo3.org/documentation/guide/partiii/propertymapping.html>

**Validation API**: The Validation API has changed, but this is only a
breaking change if you do NOT subclass **AbstractValidator**, but
implement **ValidatorInterface** yourself. In this case, you need to
adjust your custom validator to support the new API.

**Dependency Injection**: Dependency Injection is now also possible for
reconstituted Domain Objects.

**Signal / Slot**: The “Signal / Slot” feature has been backported from
FLOW3, implementing a future-proof alternative to hooks.

Please read the
[ChangeLog](https://git.typo3.org/TYPO3v4/CoreProjects/MVC/extbase.git?a=blob;f=ChangeLog.txt)
for further details.

### Fluid

**Compiled Fluid templates**: Fluid templates are now compiled to PHP
files. This drastically speeds up the rendering process by a factor 2-5X
and reduces memory consumption as well.

**\$this-&gt;arguments-&gt;hasArgument() removed**:
AbstractViewHelper::\$arguments are no longer an object but an array.

If you used \$this-&gt;arguments-&gt;hasArgument() in your custom
ViewHelpers, you'll have to replace this with \$this-&gt;hasArgument().

**Introduction of {\_all} Variable**: You can now use {\_all} inside
your template to access all variables available right now. This is
especially helpful for debugging:

`{_all -> f:debug()}`

or for passing all currently available variables to a partial:

<f:render partial="..." arguments="{_all}" />

This is a breaking change if you used a variable \_all inside your own
templates.

**Widgets & templateRootPath**: It is now possible to override the
widget template root path via the framework configuration, for example:

`plugin.tx_extension.view {`\
`    widget.`<WidgetViewHelperClassName>`.templateRootPath = ...`\
`}`

**<f:render optional/>**: The RenderViewHelper [got an additional
parameter](https://git.typo3.org/TYPO3v4/CoreProjects/MVC/fluid.git/commitdiff/d90dd7fc084fc93ca8ff2cdfadcb68311ae6a836?hp=ff66cfd8e83de49e5451cf5aa115aeb30ceb84b1)
to allow optional sections that will be rendered as an empty string if
they were not defined by a template:

<f:render section="someOptionalSection" optional="true" />

Please read the
[ChangeLog](https://git.typo3.org/TYPO3v4/CoreProjects/MVC/fluid.git/blob/3565d69628314b59503d0381e2f3c3acd722a4a5:/ChangeLog.txt)
for further details.

### Backend Development

**Language files**: Localization parsing is now cached within
`typo3temp/Cache/Data/t3lib_l10n`. This speeds up TYPO3 but may lead to
weird behaviour when you add a new language label in a locallang file
and it seems not to “exist” at all. Instead of clearing the
aforementioned cache directory, you may add an item in the clear cache
menu by adding enabling it in `typo3conf/localconf.php`:

`$TYPO3_CONF_VARS['SYS']['lang']['cache']['clear_menu'] = 'TRUE';`

Generally, you may disable caches by using a NULL backend as described
in this wiki:
[2](https://wiki.typo3.org/Caching_framework#How_to_disable_specific_caches).

**xtype:modulepanel**: This new ExtJS panel type allows creation of pure
ExtJS modules which fit the TYPO3 look 'n' feel.

**Marker-based templates**: A new method
substituteMarkerAndSubpartArrayRecursive() has been added to
t3lib\_parsehtml. A wrapper for this method is present in tslib\_cObj as
well. Instead of manually looping over nested subparts in a template,
developers can now prepare a nested array of markers and subparts and
let TYPO3 do the nested replacements in a single operation. Example:

`$template = <<`<EOT
     <nowiki>

<h1>
Test template

</h1>
</nowiki>

`    <!-- ###BOOK### begin -->`\
`    <h2>###TITLE###</h2>`\
`    <div class="authors">`\
`        <!-- ###AUTHOR### begin -->`\
`        <span class="author">###NAME###</span>`\
`        <!-- ###AUTHOR### end -->`\
`         `\
`        <div class="abstract">###ABSTRACT###</div>`\
`    </div>`\
`    <!-- ###BOOK### end -->`\
`EOT;`\
\
`$data = array(`\
`    'BOOK' => array(`\
`        0 => array(`\
`            'TITLE' => 'A brief history of TYPO3',`\
`            'AUTHOR' => array(`\
`                0 => array(`\
`                    'NAME' => 'Jones',`\
`                ),`\
`                1 => array(`\
`                    'NAME' => 'Smith'`\
`                )`\
`            ),`\
`            'ABSTRACT' => 'It was created, it was improved.'`\
`        ),`\
`        1 => array(`\
`            'TITLE' => 'Templates made easy',`\
`            'AUTHOR' => array(`\
`                0 => array(`\
`                    'NAME' => 'M. Arker',`\
`                ),`\
`            ),`\
`            'ABSTRACT' => 'Templates are now easier to use.'`\
`        ),`\
`    )`\
`);`\
\
`$content = t3lib_parsehtml::substituteMarkerAndSubpartArrayRecursive($template, $data, '###|###', TRUE, FALSE);`

### TypoScript/Frontend

New TypoScript features:

-   stdWrap has new properties:
    -   **.round**: Round floating numbers
    -   **.hash**: Hash content with md5/sha1/...
    -   **.capitalize**: Make first character of each word uppercase
    -   **.replacement**: Replace part of the content
    -   **.expandList**: Expand a comma-separated list of integers
    -   **listNum = rand**: Random item out of the list
-   **select.where** now supports stdWrap
-   IMAGE and IMG\_RESOURCE support stdWrap on **file.params**

### TCA

-   **parameters for userFunc**: When using a userFunc as field type,
    additional parameters may be provided.
-   **slider**: New wizard for select fields as well as input fields for
    times, integers and doubles.
-   **groupName** (section \[ctrl\]): New option that can be used to
    group records in the new record wizard.

Removed Functionality
---------------------

### Deprecated Methods

Deprecated methods that were initially targeted to be removed in TYPO3
4.5 have finally been removed. Starting from TYPO3 4.6, removal of
deprecated methods will follow as announced in the deprecation log.

### Static Published Pages

The feature to statically publish a page from the Admin Panel has been
dropped. There are better ways to achieve such a functionality, like
e.g. EXT:nc\_staticfilecache.

=== extCache=2 ===

The cache files in typo3conf/temp\_CACHED\_\* were by default set to a
hash that was based on the extensionlist, but this is quite unnecessary,
so the extCache option was removed to be only used once in the
typo3conf/ directory in order to prevent hundreds of temp\_CACHED\_\*
files that don't get cleaned up automatically. From now on the option
\$TYPO3\_CONF\_VARS\['EXT'\]\['extCache'\] can only be set to 0 or 1.

Performance
-----------

### Caching Framework

Before TYPO3 4.6, the caching framework was an alternative cache
solution that coexisted with the old core cache mechanism. It could be
enabled with a setting in localconf.php, but was not enabled by default
for core caches. Even though the TYPO3 core did not use the caching
framework, extensions were free to do so. Since TYPO3 4.6, the caching
framework is always enabled.

Please read the [official wiki
page](https://wiki.typo3.org/Caching_framework) for further
documentation and hints how to upgrade your extensions.

### JS/CSS Compression

Built-in minification routines can now be used with config.compressCss
to reduce the size of all files configured in page.includeCSS. With
compressCss and/or compressJs enabled, CSS files and JavaScript files
(included using page.includeJS) can be saved and delivered with GZIP
compression in the Frontend, assuming
\$TYPO3\_CONF\_VARS\['FE'\]\['compressionLevel'\] is set.

Similar to \$TYPO3\_CONF\_VARS\['BE'\]\['compressionLevel'\] (available
since TYPO3 4.4), the following options must be set in .htaccess:

<FilesMatch "\.js\.gzip$">\
`    AddType `“`text/javascript`”` .gzip`\
</FilesMatch>\
<FilesMatch "\.css\.gzip$">\
`    AddType `“`text/css`”` .gzip`\
</FilesMatch>\
`AddEncoding gzip .gzip`

Single files can be excluded from compression using the new option
disableCompression. Additionally, files can be concatenated into a
single file using config.concatenateCss and config.concatenateJs. Please
note that there is only limited support for @charset, @import and
@namespace statements in concatenated CSS files.

Together with

`config.removeDefaultJS = external`

these routines will significantly increase your website speed!

You may disable compression and/or concatenation for CSS and JavaScript
included with the PAGE object. Example:

`page.includeJSlibs { `\
`    jquery = `[`http://code.jquery.com/jquery-1.6.1.min.js`](http://code.jquery.com/jquery-1.6.1.min.js)\
`    jquery.external = 1`\
`    jquery.`**`disableCompression`` ``=`` ``1`**\
`    jquery.`**`excludeFromConcatenation`` ``=`` ``1`**\
`}`

The same options apply for `includeCSS`.

Please note that compression and concatenation apply for external
resources as well. If activated, external resources will be dynamically
retrieved, processed, and served locally.

**Notes:**

-   `config.compressJs` is the new name for `config.minifyJS` which has
    been deprecated.
-   `config.compressCss` is the new name for `config.minifyCSS` which
    has been deprecated as well.

Download
--------

<https://typo3.org/download/>

**MD5 checksums**

`ad7a02ba8f0f51b932defaa25920e80f  blankpackage-4.6.0.tar.gz`\
`d1e705210d222067f9c982007888475d  blankpackage-4.6.0.zip`\
`6a3c2db22b42b6511ba55f03e5d21834  dummy-4.6.0.tar.gz`\
`04748ecd3fdfa451c8d01e78dbe3c1ae  dummy-4.6.0.zip`\
`e35f69d8b198913f12dd3cbf699139af  introductionpackage-4.6.0.tar.gz`\
`2aa52757d17ff7ded240f4461b374db8  introductionpackage-4.6.0.zip`\
`7ed96a873778358a96e344a5bc851aad  typo3_src+dummy-4.6.0.zip`\
`9959cacc6ff08ae9c5d12670ec7feaca  typo3_src-4.6.0.tar.gz`\
`20b8e24316abb0386689b228c9a776ed  typo3_src-4.6.0.zip`

<Category:ReleaseNotes/TYPO3_4.6.x> [Category:TYPO3
4.6](Category:TYPO3_4.6 "wikilink") <Category:2011>
