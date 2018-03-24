TYPO3 CMS 7.0 Technical Release Notes
=====================================

This document contains information about TYPO3 CMS version 7.0 which was
released on December, 2nd 2014.

System Requirements
-------------------

The system requirements:

-   PHP &gt;5.5.0 up to 5.6
-   MySQL 5.1 up to 5.6 or compatible (no “strict mode”)

Note that MySQL “strict mode” is currently not supported by TYPO3. If
your MySQL server is configured with either STRICT\_TRANS\_TABLES or
STRICT\_ALL\_TABLES (especially true with MySQL 5.6, as this is a new
default), you need to configure setDBinit in the Install Tool.

Installing
----------

### Upgrading

Follow these steps to ensure a painless upgrade:

-   Uninstall all extensions (they might rely on the compatibility layer
    which has been removed in 7.0)
-   Go to the install tool
-   Upgrade as usual
-   Enable Extensions one by one and check, if the install tool finds
    errors
-   If so, consider installing “EXT:compatibility6”. Be aware that
    EXT:compatibility6 will not work forever.

### New installations

-   Install
-   Enjoy

### Compatibility

Changes and improvements
========================

Breaking Changes
----------------

#### Breaking: \#19737 - Prefer root templates for pages

##### Description

The Core now gives templates having set the root-flag precedence over
normal extension templates. This ignores the fact that normally the
first template of the current page is chosen, following their sorting.

This improves user experience as the user expects the root template to
be the one with highest priority.

##### Impact

Pages where multiple templates are present not having a root-template as
the topmost template in the list will encounter different results when
templates are evaluated.

##### Affected Installations

Installations with pages where multiple templates are present not having
a/the root-template as the topmost template.

##### Migration

Ensure the templates have correct flags set.

#### Breaking: \#33805 - ClickMenu Rewrite

##### Description

The ClickMenu has seen some major changes under the hood. This implies
some refactoring within JavaScript where existing functionality is
replaced by a AMD Module based on jQuery. The following JS methods are
now replaced by respective methods.

`   showClickmenu_raw()`\
`   Clickmenu.show()`\
`   Clickmenu.populateData()`

The new functionality is available via a global JavaScript object called
TYPO3.ClickMenu which has equal functions.

Additionally the ClickMenu is now used via AJAX completely, all non-AJAX
calls are not supported anymore.

##### Impact

All third-party extensions using alt\_clickmenu.php directly in the
backend, or using the above JavaScript calls directly.

##### Affected Installations

Any installation using extensions having Backend modules using
JavaScript functions for the ClickMenu inline and installations using
extensions using alt\_clickmenu.php directly.

##### Migration

Any use of “Clickmenu.show()” etc should be avoided and channelled
through the according DocumentTemplate methods.

`   DocumentTemplate->wrapClickMenuOnIcon()`\
`   DocumentTemplate->getContextMenuCode()`

If a backend module without a DocumentTemplate (with e.g. Extbase/Fluid)
is used, this is done with a separate class and according data
attribute:

`   a href=`“`#`”` class=`“`t3-js-clickmenutrigger`”` data-table=`“`be_users`”` data-uid=`“`{record.uid}`”` data-listframe=`“`1`”`>`

#### Breaking: \#42543 - Default TypoScript Removed

##### Description

The default TypoScript styles.insertContent was removed without
substitution.

##### Impact

Frontend output may change.

##### Affected Installations

A TYPO3 instance is affected if its TypoScript operates with
styles.insertContent. This is pretty unlikely since the styles segment
was hidden in the TypoScript Object Browser.

##### Migration

Either remove usage of styles.insertContent or add a snippet at an early
point in TypoScript for backwards compatibility.

:   

    :   

` styles.insertContent = CONTENT`\
` styles.insertContent {`\
`   table = tt_content`\
`   select {`\
`     orderBy = sorting`\
`     where = colPos=0`\
`     languageField = sys_language_uid`\
`   }`\
` }`

..

#### Breaking: \#62416 - Removal of deprecated code in sysext fluid

##### Description

ContainerViewHelper

------------------------------------------------------------------------

The following options have been removed from the ViewHelper:

-   enableJumpToUrl
-   addCssFile, use includeCssFiles instead
-   addJsFile, use includeJsFiles instead

AbstractBackendViewHelper

------------------------------------------------------------------------

The usage of \$GLOBALS\['SOBE'\] is removed for retrieving the
DocumentTemplate instance. Use -&gt;getDocInstance() instead.

TemplateView

------------------------------------------------------------------------

The following methods have been removed:

-   getTemplateRootPath() is removed, use getTemplateRootPaths() instead
-   getPartialRootPath() is removed, use setPartialRootPaths() instead
-   getLayoutRootPath() is removed, use getLayoutRootPaths() instead

##### Impact

A call to any of the aforementioned methods by third party code will
result in a fatal PHP error.

##### Affected Installations

Any installation which contains third party code still using these
deprecated methods.

##### Migration

Replace the calls with the suggestions outlined above.

#### Breaking: \#53568 - option alternateBgColors removed

##### Description

The PageTSConfig option mod.web\_list.alternateBgColors is removed
without substitution.

##### Impact

Extensions that extend the DatabaseRecordList and are using the property
alternateBgColors

The option in the TableListViewHelper has been deprecated and will be
removed in TYPO3 CMS 8.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension uses the removed
property.

##### Migration

Remove the call to the removed property.

#### Breaking: \#54409 - RTE “acronym” button was renamed “abbreviation”

##### Description

The “acronym” tag being deprecated, the RTE “acronym” button was renamed
“abbreviation”. Accordingly, the RTE Acronym plugin was renamed
Abbreviation.

##### Impact

The “abbreviation” button may not appear in the RTE toolbar, if
configured as “acronym” in Page TSconfig, TCA special configuration
options and/or User TSconfig. Possible undefined PHP class errors.
Possible Javascript or file not found errors.

##### Affected Installations

An installation is affected if the “acronym” button was configured in
Page TSconfig and/or User TSconfig. An installation is affected if a 3rd
party extension refers to the “acronym” button in TCA special
configuration options. An installation is affected if a 3rd party
extension refers to class TYPO3\\CMS\\Rtehtmlarea\\Extension\\Acronym An
installation is affected if a 3rd party extension loads the JavaScript
file of the Acronym plugin:
EXT:rtehtmlarea/Resources/Public/Javascript/Plugins/Acronym.js

##### Migration

There is no immediate impact on the RTE configuration in Page TSconfig
and TCA special configuration options until the automatic conversion of
existing references to “acronym” is removed in TYPO3 CMS 8.0.
Intallations may run the upgrade wizard of the Install tool to migrate
the contents of Page TSconfig, replacing “acronym” by “abbreviation”.
Note that this string replacement will apply to all contents of
PageTSconfig. The migration of PageTSconfig may also be done manually.

User TSconfig must be modified to refer to “abbreviation” instead of
“acronym”.

Any affected 3rd party extension must be modified to refer to the
“abbreviation” button rather than “acronym” in TCA special configuration
options. Any affected 3rd party extension must be modified to refer to
class TYPO3\\CMS\\Rtehtmlarea\\Extension\\Abbreviation rather than
TYPO3\\CMS\\Rtehtmlarea\\Extension\\Acronym Any affected 3rd party
extension must be modified to load
EXT:rtehtmlarea/Resources/Public/Javascript/Plugins/Abbreviation.js
rather than
EXT:rtehtmlarea/Resources/Public/Javascript/Plugins/Acronym.js

#### Breaking: \#57382 - Remove old flash message API

##### Description

The old flash message API is removed.

##### Impact

Extensions relying on the old (static) flash message queue API will not
work anymore. Extbase removes the protected old flashMessageContainer.

##### Affected Installations

Any installation that uses an extension relying on the old API.

##### Migration

Change the API calls to not be of static kind anymore. Extbase
extensions have to use getFlashMessageQueue() of the controllerContext

#### Breaking: \#57396 - Deprecated Extbase Property Mapper was removed

##### Description

A new Property Mapper that mapped request arguments to controller action
arguments was introduced in Extbase 1.4 and the old one was deprecated
at the same time. Along with the mapping, the validation API has also
been changed. The rewritten property mapper is turned on by default
since TYPO3 6.2

Now the old mapping and validation API is completely removed.

##### Impact

Extbase extensions that relied on the internal behaviour of the
deprecated property mapper or make use of the old validation API will
stop working or may not work as expected any more.

##### Affected Installations

Extbase extensions that turned off the introduced feature switch with
the TypoScript setting features.rewrittenPropertyMapper = 0 because they
relied on internal behavior of the old property mapper will stop
working.

##### Migration

Manual migration of extension code might be required, especially when
own validators using the old validation API were used.

#### Breaking: \#59659 - Removal of deprecated code in sysext backend

##### Description

Flexforms

------------------------------------------------------------------------

Flexform xml that still contains the old "<tx_templavoila>

<title>
" code has to be adapted. The “<tx_templavoila>” elements needs to be
removed.

Wizard registration

------------------------------------------------------------------------

Wizard registration in TCA must not contain the
“script=some/path/script.php” definition anymore. The new API for
registering wizards is to set “module\[name\]=module\_name”.

Removed PHP methods

------------------------------------------------------------------------

-   FormEngine::dbFileCon() is removed without replacement. The
    functionality is not needed anymore.
-   AbstractRecordList::writeBottom() is removed without replacement.
    The functionality is not needed anymore.
-   SpriteGenerator::setOmmitSpriteNameInIconName() is removed in favor
    of setOmitSpriteNameInIconName()
-   DocumentTemplate::isCMlayers() is removed without replacement. The
    functionality is obsolete.
-   DocumentTemplate::getFileheader() is removed. Use
    getResourceHeader() instead.
-   BackendUtility::displayWarningMessages() is removed without
    replacement. The functionality was moved to ext:aboutmodules.
-   IconUtility::getIconImage() is removed without replacement. Use
    sprite icon API instead.
-   PageLayoutView::getSelectedBackendLayoutUid() is removed. Use
    BackendLayoutView::getSelectedCombinedIdentifier() instead.
-   ClickMenu::menuItemsForClickMenu() is removed without replacement.
    The functionality is obsolete.

Removed JS functions

------------------------------------------------------------------------

-   showClickmenu\_noajax() is removed. Use Clickmenu.ajax = false;
    showClickmenu\_raw(); instead.
-   setLayerObj() is replaced with Clickmenu.populateData().
-   hideEmpty() is replaced with Clickmenu.hideAll().
-   hideSpecific() is replaced with Clickmenu.hide(). E.g.
    Clickmenu.hide('contentMenu1');
-   showHideSelectorBoxes() is replaced with toggleSelectorBoxes().

##### Impact

A call to any of the aforementioned methods by third party code will
result in a fatal PHP error.

##### Affected Installations

Any installation which contains third party code still using these
deprecated methods.

##### Migration

Replace the calls with the suggestions outlined above.

#### Breaking: \#59966 - Extension Configuration cache-flushing changed

##### Description

On saving the configuration of an extension, the system cache group has
been flushed. This is inefficient as this includes also the classes
cache, but most changes will never need this cache to be cleared. We
optimize this for the common case and stop flushing caches after
configuration changes completely.

##### Impact

Extensions which relied on cache-clearing after configuration changes
may require a manual cache flush.

##### Affected Installations

Any installation that uses extensions relying on automatic cache flush
after extension configuration changes.

##### Migration

Extensions requiring a cache flush after configuration changes need to
implement a slot for the afterExtensionConfigurationWrite signal which
allows individual cache flush actions.

#### Breaking: \#60063 - Felogin Plugin Removed

##### Description

File EXT:felogin/pi1/class.tx\_felogin\_pi1.php was removed.

##### Impact

`- A require in PHP of this file throws a fatal error.`

`- An includeLibs TypoScript setting to this file raises a warning.`

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension requires
EXT:felogin/pi1/class.tx\_felogin\_pi1.php or if an includeLibs
TypoScript setting to this file is set.

##### Migration

Remove the require line in PHP and includeLibs line in TypoScript, they
are obsolete.

#### Breaking: \#60135 - Recursive stdWrap is now only called once

##### Description

If recursive stdWrap configuration was used, the stdWrap method was
called twice, although the content was only rendered once. This
performance overhead is now removed.

##### Impact

If a recursive stdWrap configuration is used, which sets or acts on a
global state like registers, the resulting rendering can now be
different because the global state is now modified only once.

##### Affected Installations

A TYPO3 instance is affected if there is TypoScript code like:

:   

    :   

` page.1 = TEXT`\
` page.1 {`\
`   value = Counter:`\
`   append = TEXT`\
`   append.data = register:Counter`\
`   stdWrap.append = LOAD_REGISTER`\
`   stdWrap.append {`\
`     Counter.cObject = TEXT`\
`     Counter.cObject.data = register:Counter`\
`     Counter.cObject.wrap = |+1`\
`     Counter.prioriCalc = 1`\
`   }`\
` }`

..

This now correctly outputs Counter:1 instead of Counter:2

##### Migration

The usage of recursive stdWrap TypoScript configuration needs to be
checked and probably adapted to fit the fixed behavior.

#### Breaking: \#60152 - GeneralUtility::formatSize is now locale aware

##### Description

The GeneralUtility::formatSize() method now adheres to the currently set
locale and selects the correct decimal separator symbol. This also
applies to the TypoScript option stdWrap.bytes, which uses the method
internally, as well as the Filelist content element type.

##### Impact

All output generated for locales, where the decimal separator is not a
dot, will change to use the correct symbol. e.g. comma for German.

##### Affected Installations

Any installation that uses the formatSize() method in one of the ways
mentioned.

##### Migration

If you think you get the wrong decimal separator, ensure the locale is
configured correctly and the locale really exists on the server.

TypoScript option: config.locale Commandline: locale -a

#### Breaking: \#60559 - Dropped Backend Login Options

##### Description

Handling of
\$GLOBALS\['TBE\_STYLES'\]\['loginBoxImage\_rotationFolder'\] and
\$GLOBALS\['TBE\_STYLES'\]\['loginBoxImage\_author'\] was dropped.

##### Impact

Setting those options has no effect anymore.

##### Affected Installations

These options had no effect with standard core internal login screen
based on t3skin for a long time already. Instances are only affected if
a 3rd party extension is loaded that changes the backend login screen
and operates with these settings.

##### Migration

Remove these options and their usage from the affected 3rd party
extension or unload the extension.

#### Breaking: \#60559 - T3skin Backend Login Javascript File Moved

##### Description

Javascript files of the backend login form moved from EXT:t3skin to
EXT:backend.

##### Impact

Javascript or file not found errors.

##### Affected Installations

An installation is affected if a 3rd party extension includes
EXT:t3skin/Resources/Public/JavaScript/login.js

##### Migration

Include EXT:backend/Resources/Public/JavaScript/login.js instead or
refactor the affected extension to free it from the dependency to this
core internal file.

#### Breaking: \#60559 - T3skin Backend Login Template File Moved

##### Description

The HTML template file for the backend login screen was moved from
EXT:t3skin to EXT:backend.

##### Impact

Broken login screen.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension uses file
EXT:t3skin/Resources/Private/Templates/login.html

##### Migration

Use file EXT:backend/Resources/Private/Templates/login.html instead or
refactor the affected extension to free it from the dependency to this
core internal file.

#### Breaking: \#60561 - Default TypoScript Constants Removed

##### Description

These default TypoScript constants were dropped:

`- {$_clear}`\
`- {$_blackBorderWrap}`\
`- {$_tableWrap}`\
`- {$_tableWrap_DEBUG}`\
`- {$_stdFrameParams}`\
`- {$_stdFramesetParams}`

##### Impact

Frontend output may change.

##### Affected Installations

A TYPO3 instance is affected if own TypoScript uses the above mentioned
TypoScript constants.

##### Migration

Either remove usage of the above constants or add a snippet at an early
point in TypoScript for backwards compatibility.

      _clear = <img src="clear.gif" width="1" height="1" alt="" />
      _blackBorderWrap = <table border="0" bgcolor="black" cellspacing="0" cellpadding="1"><tr><td> | </td></tr></table>
      _tableWrap = <table border="0" cellspacing="0" cellpadding="0"> | </table>
      _tableWrap_DEBUG = <table border="1" cellspacing="0" cellpadding="0"> | </table>
      _stdFrameParams = frameborder="no" marginheight="0" marginwidth="0" noresize="noresize"
      _stdFramesetParams = 'border="0" framespacing="0" frameborder="no"

..

#### Breaking: \#60582 - Rsaauth Javascript Files Moved

##### Description

Javascript files from EXT:rsaauth were moved from resources/ to
Resources/Public/JavaScript.

##### Impact

Javascript or file not found errors.

##### Affected Installations

An installation is affected if a 3rd party extension includes Javascript
files from rsaauth.

##### Migration

Change affected extension to include Javascript files from resources/ to
Resources/Public/JavaScript/.

#### Breaking: \#60609 - Configuration Manager Signal Changed

##### Description

The extension for which the configuration was written was added to the
signal emitted in the ConfigurationManager of the ExtensionManager as
first parameter as the whole signal was unusable without this
information.

##### Impact

The arguments for a method listening to this signal have changed.

##### Affected Installations

A TYPO3 instance is affected if there is code using the signal
“afterExtensionConfigurationWrite”.

##### Migration

Rewrite the listening function to use the extension key as first
parameter.

#### Breaking: \#60630 - Scheduler Javascript File Moved

##### Description

Javascript files of the scheduler module moved from
EXT:scheduler/res/tx\_scheduler\_be.js to
EXT:scheduler/Resources/Public/JavaScript/Scheduler.js

##### Impact

Javascript or file not found errors.

##### Affected Installations

An installation is affected if a 3rd party extension includes
EXT:scheduler/res/tx\_scheduler\_be.js

##### Migration

Include EXT:scheduler/Resources/Public/JavaScript/Scheduler.js instead
or refactor the affected extension to free it from the dependency to
this scheduler internal file.

#### Breaking: \#60630 - Scheduler Language Files Moved

##### Description

The language files of the scheduler extension are moved to
EXT:scheduler/Resources/Private/Language/

##### Impact

Labels are not translated when being fetched from old file location.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension uses a language
file from EXT:scheduler or if localization overrides of these files are
registered. Those overridden labels may not work anymore.

##### Migration

Use new path to language file instead or create/copy the labels to an
own language file and adapt existing overrides to the new file
locations.

#### Breaking: \#60630 - Scheduler Module Template File Moved

##### Description

The HTML template file for the scheduler module was moved from
EXT:scheduler/mod1/mod\_template.html to
EXT:scheduler/Resources/Private/Templates/Module.html.

##### Impact

Broken module screen.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension uses file
EXT:scheduler/mod1/mod\_template.html

##### Migration

Use file EXT:scheduler/Resources/Private/Templates/Module.html instead
or refactor the affected extension to free it from the dependency to
this scheduler internal file.

#### Breaking: \#61459 - Removal of tslib directory and constant

##### Description

The tslib/ directory and the constant PATH\_tslib were removed.

##### Impact

Extensions that still use PATH\_tslib constant, and reference
typo/sysext/cms/tslib/index\_ts.php directly won't work.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension uses index\_ts.php
directly, or if the main index.php is not replaced with the TYPO3 Update
(used on certain install types). The index.php file must be replaced
with the current version from the TYPO3 CMS Core.

Besides scripts are affected that access the time tracking (\$TT) or
typoscript frontend controller (\$TSFE) objects instead of using
\$GLOBALS\['TT'\] respectively \$GLOBALS\['TSFE'\].

##### Migration

Remove the constant PATH\_tslib from the 3rd party extension, use a
current version of index.php and use \$GLOBALS\['TT'\] and
\$GLOBALS\['TSFE'\] where necessary.

#### Breaking: \#61471 - EXT:t3skin CSS files moved to less

##### Description

All CSS files in EXT:t3skin are moved to less files and handled by less
CSS pre processor and merged to a single CSS file.

##### Impact

Single CSS files can not be included anymore. This may result in broken
layouts.

##### Affected Installations

A TYPO3 instance is affected if an extension loads single CSS files from
EXT:t3skin. Backend modules of extensions usually get CSS core stuff
loaded by default, which will not be a problem. An extension is only
affected if single CSS files are explicitly referenced. This should be a
rare case.

##### Migration

Most simple solution is to copy over the “old” CSS file from an older
instance. Directly including those files from t3skin is discouraged. A
better solution is to refactor the extension to use the full t3skin CSS
file and to overlay it with required changes in an own file.

#### Breaking: \#61781 - include\_once array in ClickMenuController removed

##### Description

The include\_once array of the ClickMenuController, which is filled with
paths from the
\$GLOBALS\['TBE\_MODULES\_EXT'\]\['xMOD\_alt\_clickmenu'\]\['extendCMclasses'\]\['path'\]
setting, has been removed.

##### Impact

Extension classes relying on the
\$GLOBALS\['TBE\_MODULES\_EXT'\]\['xMOD\_alt\_clickmenu'\]\['extendCMclasses'\]\['path'\]registration
for autoloading will not be loaded anymore.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension uses the removed
class loading registration method.

##### Migration

All classes are autoloaded automatically by TYPO3 CMS Core.

#### Breaking: \#61782 - deprecated DocumentTemplate classes removed

##### Description

The following deprecated classes have been removed:

\\TYPO3\\CMS\\Backend\\Template\\MediumDocumentTemplate

\\TYPO3\\CMS\\Backend\\Template\\SmallDocumentTemplate

\\TYPO3\\CMS\\Backend\\Template\\StandardDocumentTemplate

##### Impact

Extensions that still use one of the removed classes for their backend
module won't work.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension uses one of the
removed classes.

##### Migration

Use \\TYPO3\\CMS\\Backend\\Template\\DocumentTemplate instead.

#### Breaking: \#75942 - BigDocumentTemplate class removed

##### Description

The following class has been removed:

\\TYPO3\\CMS\\Backend\\Template\\BigDocumentTemplate

##### Impact

Extensions that still use the removed class for their backend module
won't work.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension uses the removed
class.

##### Migration

Use :code:\`\\TYPO3\\CMS\\Backend\\Template\\DocumentTemplate\` instead.

#### Breaking: \#61783 - Removed deprecated mailing API

##### Description

The deprecated methods to send email are removed. This includes the
MailUtility::mail() method, the mail delivery substitution API and the
plainMailEncoded() methods.

##### Impact

Any call to MailUtility::mail() or GeneralUtility::plainMailEncoded()
will result in a fatal error. The option
\$GLOBALS\['TYPO3\_CONF\_VARS'\]\['SC\_OPTIONS'\]\['t3lib/utility/class.t3lib\_utility\_mail.php'\]\['substituteMailDelivery'\]
does not have any effect.

##### Affected Installations

Any installation using an extension still using the deprecated API will
fail.

##### Migration

Use the \\TYPO3\\CMS\\Core\\Mail\\Mailer API for sending email.

#### Breaking: \#61785 - getCompressedTCarray and includeTCA from TypoScriptFrontendController removed

##### Description

Methods getCompressedTCarray() and includeTCA() from
\\TYPO3\\CMS\\Frontend\\Controller\\TypoScriptFrontendController have
been removed.

##### Impact

Extensions that still use
\\TYPO3\\CMS\\Frontend\\Controller\\TypoScriptFrontendController::getCompressedTCarray()
or
\\TYPO3\\CMS\\Frontend\\Controller\\TypoScriptFrontendController::includeTCA()
will trigger a fatal error.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension uses one of the
removed functions.

##### Migration

Full TCA is always loaded during bootstrap in FE, the methods are
obsolete. If an eid script calls this method to load TCA, use
\\TYPO3\\CMS\\Frontend\\Utility\\EidUtility::initTCA() instead.

#### Breaking: \#61785 - loadTCA function in GeneralUtility removed

##### Description

Method loadTCA() from \\TYPO3\\CMS\\Core\\Utility\\GeneralUtility is
removed.

##### Impact

Extensions that still use
\\TYPO3\\CMS\\Core\\Utility\\GeneralUtility::loadTCA() will trigger a
fatal error.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension still calls
loadTCA.

##### Migration

The method is obsolete, full TCA is always loaded in all context except
eID. It is safe to remove the method call.

#### Breaking: \#61786 - remove deprecated TypeHandlingService in extbase

##### Description

The TypeHandlingService class is removed from the extbase extension.

##### Impact

Extensions that still use
\\TYPO3\\CMS\\Extbase\\Service\\TypeHandlingService won't work.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension uses the removed
class \\TYPO3\\CMS\\Extbase\\Service\\TypeHandlingService.

##### Migration

Replace all calls to \\TYPO3\\CMS\\Extbase\\Service\\TypeHandlingService
functions to their new static functions in
\\TYPO3\\CMS\\Extbase\\Utility\\TypeHandlingUtility

#### Breaking: \#61802 - deprecated isLocalconfWritable function removed

##### Description

The function isLocalconfWritable() from
\\TYPO3\\CMS\\Core\\Utility\\ExtensionManagementUtility has been
removed. The boostrap now just checks for the existence of the file and
redirects to the install tool if it doesn't exist.

##### Impact

Extensions that still use the function isLocalconfWritable() won't work.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension uses the removed
function.

##### Migration

Remove the call to this function. The bootstrap takes care to check the
existence of the file.

#### Breaking: \#61820 - deprecated PhpOptionsUtility functions removed

##### Description

The \\TYPO3\\CMS\\Core\\Utility\\PhpOptionsUtility functions
isSafeModeEnabled and isMagicQuotesGpcEnabled are removed.

##### Impact

Extensions that still use one of the removed funtions won't work.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension uses one of the
removed functions.

##### Migration

Remove the call to
\\TYPO3\\CMS\\Core\\Utility\\PhpOptionsUtility::isSafeModeEnabled() or
\\TYPO3\\CMS\\Core\\Utility\\PhpOptionsUtility::isMagicQuotesGpcEnabled()
functions. The Install Tool takes care of the removed checks now.

#### Breaking: \#61821 - classFile option in makeInstanceService removed

##### Description

The option “classFile” in
\\TYPO3\\CMS\\Core\\Utility\\GeneralUtility\\makeInstanceService() is
removed. This should now be done by the respective ext\_autoload.php of
each extension.

##### Impact

Extension classes relying on the “classFile” registration for
autoloading will not be loaded anymore.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension uses the removed
class loading registration method.

##### Migration

Use the ext\_autoload.php file to autoload the class.

#### Breaking: \#61822 - deprecated function getUniqueFields() removed

##### Description

The function getUniqueFields() from
\\TYPO3\\CMS\\Core\\DataHandling\\DataHandler has been removed. The
function is available in \\TYPO3\\CMS\\Version\\Hook\\DataHandlerHook.

##### Impact

Extensions that still use the function getUniqueFields() won't work.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension uses the removed
function.

##### Migration

Replace all calls to
\\TYPO3\\CMS\\Core\\DataHandling\\DataHandler::getUniqueFields() with
calls to \\TYPO3\\CMS\\Version\\Hook\\DataHandlerHook::getUniqueFields()

#### Breaking: \#61823 - Remove magic setter for \$fromTC

##### Description

The magic setter for \$fromTC in
\\TYPO3\\CMS\\Core\\Database\\RelationHandler is removed.

##### Impact

Directly setting the protected property \$fromTC will trigger a PHP
warning.

##### Affected Installations

Any installation using an extension that sets \$fromTC property
directly.

##### Migration

Use \\TYPO3\\CMS\\Core\\Database\\RelationHandler::setFetchAllFields()
instead.

#### Breaking: \#61828 - deprecated isDisplayCondition function from FormEngine removed

##### Description

Method isDisplayCondition() from \\TYPO3\\CMS\\Backend\\Form\\FormEngine
has been removed.

##### Impact

Extensions that still use the function isDisplayCondition() will trigger
a fatal PHP error when records are edited in the backend.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension uses the removed
function.

##### Migration

Use \\TYPO3\\CMS\\Backend\\Form\\ElementConditionMatcher instead.

/\*\* @var \$elementConditionMatcher
\\TYPO3\\CMS\\Backend\\Form\\ElementConditionMatcher \*/
\$elementConditionMatcher =
\\TYPO3\\CMS\\Core\\Utility\\GeneralUtility::makeInstance(\\TYPO3\\CMS\\Backend\\Form\\ElementConditionMatcher::class);
\$elementConditionMatcher-&gt;match(\$displayCond, \$row, \$ffValueKey);

#### Breaking: \#61859 - deprecated file type FILETYPE\_SOFTWARE removed

##### Description

The constant
\\TYPO3\\CMS\\Core\\Resource\\AbstractFile::FILETYPE\_SOFTWARE has been
removed.

##### Impact

Using the removed constant will result in a fatal error.

##### Affected Installations

Any installation using an extension that uses the constant
\\TYPO3\\CMS\\Core\\Resource\\AbstractFile::FILETYPE\_SOFTWARE.

##### Migration

Use \\TYPO3\\CMS\\Core\\Resource\\AbstractFile::FILETYPE\_APPLICATION
instead, which matches the Iana standard.

#### Breaking: \#61860 - deprecated function int\_from\_ver removed

##### Description

Function int\_from\_ver() from
\\TYPO3\\CMS\\Core\\Utility\\GeneralUtility has been removed.

##### Impact

Extensions that still use the function int\_from\_ver() won't work.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension uses the removed
function.

##### Migration

Replace the usage of the removed function with
\\TYPO3\\CMS\\Core\\Utility\\VersionNumberUtility::convertVersionNumberToInteger()

#### Breaking: \#61863 - deprecated connectDB from EidUtility removed

##### Description

Method connectDB() from \\TYPO3\\CMS\\Frontend\\Utility\\EidUtility has
been removed.

##### Impact

Extensions that still use the function connectDB() will trigger a fatal
PHP error when an eID script is called.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension uses the removed
function.

##### Migration

The function can be removed safely. The database will connect itself if
needed.

#### Breaking: \#61890 - TBE Styling removed from FormEngine and TCA

##### Description

The styling functionality of FormEngine was based on a mixture of loose
variables within \$GLOBALS\['TBE\_STYLES'\] overridden by hardcoded
values in various Backend PHP classes. This setup, additionally mixed
with CSS classes that followed a very complicated syntax to render
certain fields differently, has been removed in order to allow Backend
styling for FormEngine completely based on CSS/LESS.

##### Impact

Using the following CSS classes within FormEngine don't have any effect
anymore:

-   class-main
-   class-main1
-   class-main2
-   class-main3
-   class-main4
-   class-main5
-   class-main11
-   class-main12
-   class-main13
-   class-main14
-   class-main15
-   class-main21
-   class-main22
-   class-main23
-   class-main24
-   class-main25
-   class-main31
-   class-main32
-   class-main33
-   class-main34
-   class-main35
-   class-main41
-   class-main42
-   class-main43
-   class-main44
-   class-main45
-   class-main51
-   class-main52
-   class-main53
-   class-main54
-   class-main55
-   wrapperTable
-   wrapperTable1
-   wrapperTable2
-   wrapperTable3
-   wrapperTable4
-   wrapperTable5
-   formField
-   formField1
-   formField2
-   formField3
-   formField4
-   formField5

Additionally, the following keys of \$TBE\_STYLES have no effect
anymore:

-   \$TBE\_STYLES\['colorschemes'\]
-   \$TBE\_STYLES\['styleschemes'\]
-   \$TBE\_STYLES\['borderschemes'\]

They can safely removed from any third party extension.

The 5th parameter defining custom styleschemes in any field defined in
\$TCA\[mytable\]\[types\]\[mytype\]\[showitem\] or
\$TCA\[mytable\]\[palettes\]\[mypalette\]\[showitem\] has no effect
anymore and can be removed from any third party extension (e.g.
myfield;mylabel;usedpalette;extraDefinition;stylescheme).

Any styling is now done solely via LESS.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension uses the CSS
classes for styling or dynamic HTML via JavaScript.

##### Migration

Use the available CSS classes for custom styling and modifying
FormEngine. Clean up any custom TCA definitions with a stylescheme in
3rd party extensions, where the fifth parameter of a field definition in
\$TCA\[mytable\]\[types\]\[mytype\]\[showitem\] or
\$TCA\[mytable\]\[palettes\]\[mypalette\]\[showitem\] is used.

#### Breaking: \#61959 - Move flash message output to alerts

##### Description

Flash messages are now styled by using the native CSS classes of Twitter
Bootstrap. The changed classes are:

-   “typo3-message message-notice” =&gt; “alert alert-notice”
-   “typo3-message message-information” =&gt; “alert alert-info”
-   “typo3-message message-ok” =&gt; “alert alert-success”
-   “typo3-message message-warning” =&gt; “alert alert-warning”
-   “typo3-message message-error” =&gt; “alert alert-danger”

##### Impact

Extensions which use the old classes like “typo3-message
message-information” rely on deprecated CSS classes which might lead to
non styled output.

##### Affected Installations

Any installation that uses the HTML of flash messages without calling
the API.

##### Migration

Change the used CSS classes to the new ones.

#### Breaking: \#62038 - Deprecated DocumentTemplate functionality

##### Description

The Backend/DocumentTemplate class contains various options that have no
effect in the core anymore:

\$doc-&gt;JScodeLibArray \$doc-&gt;docType (as rendering is always as
HTML5 by default) \$doc-&gt;inDocStyles (use inDocStylesArray)
\$doc-&gt;inDocStyles\_TBEstyle (now used as
inDocStylesArray\[tbeStyle\] \$doc-&gt;charset (always utf-8)

The methods \$doc-&gt;formatTime() and \$doc-&gt;menuTable() have also
been deprecated as they are not used anymore.

##### Impact

Extensions that still use the properties of DocumentTemplate will not
see any changes in the output of the code anymore.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension uses the unused
variables.

##### Migration

The variables can be removed safely, any modifications is possible via
hooks in DocumentTemplate.

#### Breaking: \#62039 - Removed TBE\_STYLES\[mainColors\]

##### Description

The values within \$TBE\_STYLES\[mainColors\] are redundant and can be
completely defined via CSS nowadays. The corresponding PHP leftovers are
removed from the core and have no effect anymore.

##### Impact

Setting the variables within \$TBE\_STYLES\[mainColors\] and using the
\$doc-&gt;bgColor\* and \$doc-&gt;hoverColor properties of
DocumentTemplate have no effect anymore.

##### Affected Installations

Any installation using an extension that is overriding skin info via
\$TBE\_STYLES\[mainColors\].

##### Migration

Use CSS directly to modify the appearance of the Backend.

#### Breaking: \#62291 - RTE Deprecated JavaScript methods removed

##### Description

The following RTE JavaScript methods, deprecated since TYPO3 4.7, have
been removed:

HTMLArea.Editor.forceRedraw: use HTMLArea.Framework.doLayout instead

HTMLArea.Editor.convertNode: use HTMLArea.DOM.convertNode instead
HTMLArea.Editor.getBlockAncestors: use HTMLArea.DOM.getBlockAncestors
instead HTMLArea.getInnerText: use HTMLArea.DOM.getInnerText instead
HTMLArea.hasAllowedAttributes: use HTMLArea.DOM.hasAllowedAttributes
instead HTMLArea.isBlockElement: use HTMLArea.DOM.isBlockElement instead
HTMLArea.needsClosingTag: use HTMLArea.DOM.needsClosingTag instead
HTMLArea.Editor.rangeIntersectsNode: use
HTMLArea.DOM.rangeIntersectsNode instead HTMLArea.removeFromParent: use
HTMLArea.DOM.removeFromParent instead

HTMLArea.Editor.cleanAppleStyleSpans: use
HTMLArea.DOM.Node.cleanAppleStyleSpans instead
HTMLArea.Editor.removeMarkup: use HTMLArea.DOM.Node.removeMarkup instead
HTMLArea.Editor.wrapWithInlineElement: use
HTMLArea.DOM.Node.wrapWithInlineElement instead

HTMLArea.Editor.addRangeToSelection: use HTMLArea.DOM.Selection.addRange
instead HTMLArea.Editor.\_createRange: use
HTMLArea.DOM.Selection.createRange instead
HTMLArea.Editor.emptySelection: use HTMLArea.DOM.Selection.empty instead
HTMLArea.Editor.endPointsInSameBlock: use
HTMLArea.DOM.Selection.endPointsInSameBlock instead
HTMLArea.Editor.execCommand: use HTMLArea.DOM.Selection.execCommand
instead HTMLArea.Editor.\_getSelection: use HTMLArea.DOM.Selection.get
instead HTMLArea.Editor.getAllAncestors: use
HTMLArea.DOM.Selection.getAllAncestors instead
HTMLArea.Editor.getSelectedElement: use
HTMLArea.DOM.Selection.getElement instead HTMLArea.Editor.getEndBlocks:
use HTMLArea.DOM.Selection.getEndBlocks instead
HTMLArea.Editor.\_getFirstAncestor: use
HTMLArea.DOM.Selection.getFirstAncestorOfType instead
HTMLArea.Editor.getFullySelectedNode: use
HTMLArea.DOM.Selection.getFullySelectedNode instead
HTMLArea.Editor.getSelectedHTML: use HTMLArea.DOM.Selection.getHtml
instead HTMLArea.Editor.getSelectedHTMLContents: use
HTMLArea.DOM.Selection.getHtml instead HTMLArea.Editor.getParentElement:
use HTMLArea.DOM.Selection.getParentElement instead
HTMLArea.Editor.getSelectionRanges: use HTMLArea.DOM.Selection.getRanges
instead HTMLArea.Editor.getSelectionType: use
HTMLArea.DOM.Selection.getType instead HTMLArea.Editor.insertHTML: use
HTMLArea.DOM.Selection.insertHtml instead
HTMLArea.Editor.insertNodeAtSelection: use
HTMLArea.DOM.Selection.insertNode instead
HTMLArea.Editor.\_selectionEmpty: use HTMLArea.DOM.Selection.isEmpty
instead HTMLArea.Editor.hasSelectedText: use
!HTMLArea.DOM.Selection.isEmpty instead HTMLArea.Editor.selectNode: use
HTMLArea.DOM.Selection.selectNode instead
HTMLArea.Editor.selectNodeContents: use
HTMLArea.DOM.Selection.selectNodeContents instead
HTMLArea.Editor.selectRange: use HTMLArea.DOM.Selection.selectRange
instead HTMLArea.Editor.setSelectionRanges: use
HTMLArea.DOM.Selection.setRanges instead HTMLArea.Editor.surroundHTML:
use HTMLArea.DOM.Selection.surroundHtml instead

HTMLArea.Editor.getBookmark: use HTMLArea.DOM.BookMark.get instead
HTMLArea.Editor.getBookmarkNode: use HTMLArea.DOM.BookMark.getEndPoint
instead HTMLArea.Editor.moveToBookmark: use HTMLArea.DOM.BookMark.moveTo
instead

HTMLArea.htmlDecode: use HTMLArea.util.htmlDecode instead
HTMLArea.htmlEncode: use HTMLArea.util.htmlEncode instead

##### Impact

3rd party extensions adding plugins to the RTE and using the removed
methods will fail.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension of the RTE refers
to the removed methods.

##### Migration

The affected 3rd party extensions must be modified to use the
replacement methods.

#### Breaking: \#62339 - Move EXT:perm into EXT:beuser and remove EXT:perm

##### Description

The extension EXT:perm is removed from core, the perms module is moved
into EXT:beuser. The BE module moved from “Web Access” to “System
Access”

##### Impact

Extensions that use EXT:perm or maybe depends on it will cause problems

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension uses parts the
removed extension.

##### Migration

The logic is moved into EXT:beuser. No special migration is necessary.

#### Breaking: \#62416 - Removal of deprecated code in sysext core

##### Description

DataHandler

------------------------------------------------------------------------

DataHandler::clear\_cache() has been removed. Use -&gt;clear\_cacheCmd()
instead. Alternatively you can call -&gt;registerPageCacheClearing()
from a hook to not immediately clear the cache but register clearing
after DataHandler operation finishes.

DataHandler::internal\_clearPageCache() has been removed, please use the
cache manager directly.

The hook
\['t3lib/class.t3lib\_tcemain.php'\]\['clearAllCache\_additionalTables'\]
has been removed, use the caching framework with database backend
instead.

DatabaseConnection

------------------------------------------------------------------------

All connection parameters (host, username, password, db) for methods
sql\_connect(), sql\_select\_db() and connectDB() have been removed.

PackageManager

------------------------------------------------------------------------

The globally defined REQUIRED\_EXTENSIONS constant has been removed.

ExtensionManagementUtility

------------------------------------------------------------------------

Parameter classPath of insertModuleFunction() is now unused. Leverage
autoloading instead.

Removed PHP classes

------------------------------------------------------------------------

-   TYPO3\\CMS\\Core\\Resource\\Service\\IndexerService has been removed
    without replacement. Indexing is done internally.
-   TYPO3\\CMS\\Core\\Compatibility\\GlobalObjectDeprecationDecorator
    has been removed without replacement.

` Do not use $GLOBALS['typo3CacheManager'] and $GLOBALS['typo3CacheFactory'] anymore, use GeneralUtility::makeInstance() instead.`

Removed PHP class members

------------------------------------------------------------------------

-   AbstractUserAuthentication::\$cookieId has been removed. Use
    isCookieSet() instead.

Removed PHP methods

------------------------------------------------------------------------

-   GeneralUtility::array\_merge\_recursive\_overrule() has been
    removed. Use ArrayUtility::mergeRecursiveWithOverrule() instead.

` WARNING: The new method changed its signature and does not return the first parameter anymore.`

-   GeneralUtility::htmlspecialchars\_decode() has been removed in favor
    of the native PHP htmlspecialchars\_decode() function.
-   CategoryRegistry::get() has been removed. Use isRegistered()
    instead.
-   CategoryRegistry::applyTca() has been removed. The functionality is
    obsolete.
-   DataHandler::clear\_cache() has been removed. Use
    -&gt;clear\_cacheCmd instead. Alternatively you can

` call ->registerPageCacheClearing() from a hook to not immediately clear the cache but register clearing after DataHandler operation finishes.`

-   DataHandler::internal\_clearPageCache() has been removed, use the
    cache manager directly.
-   FileRepository::findByUid() has been removed without replacement.
-   FileRepository::addToIndex() has been removed without replacement.
    Indexing is done transparently.
-   FileRepository::getFileIndexRecordsForFolder() has been removed. Use
    FileIndexRepository::findByFolder() instead.
-   FileRepository::getFileIndexRecord() has been removed. Use
    FileIndexRepository::findOneByFileObject() instead.
-   FileRepository::findBySha1Hash() has been removed. Use
    FileIndexRepository::findByContentHash() instead.
-   FileRepository::update() has been removed. Use
    FileIndexRepository::update() instead.
-   ResourceStorage::getFolderByIdentifier() is replaced by getFolder().
-   ResourceStorage::getFileByIdentifier() is replaced by
    getFileInfoByIdentifier().
-   ResourceStorage::getFileList() is replaced by getFilesInFolder().
-   ResourceStorage::getFolderList() has been removed. Use
    getFoldersInFolder() instead.
-   ResourceStorage::fetchFolderListFromDriver() has been removed. Use
    getFoldersInFolder() instead.
-   BasicFileUtility::getTotalFileInfo() has been removed. Use
    ResourceStorage instead via
    \$GLOBALS\['BE\_USER'\]-&gt;getFileStorages()
-   BasicFileUtility::checkFileNameLen() has been removed. Use
    ResourceStorage instead via
    \$GLOBALS\['BE\_USER'\]-&gt;getFileStorages()
-   BasicFileUtility::isPathValid() has been removed in favor of
    GeneralUtility::validPathStr().
-   BasicFileUtility::blindPath() has been removed without replacement.
-   BasicFileUtility::findTempFolder() has been removed without
    replacement.
-   BasicFileUtility::rmDoubleSlash() has been removed without
    replacement.
-   BasicFileUtility::cleanDirectoryName() has been removed. Use
    PathUtility::getCanonicalPath() instead.
-   ExtendedFileUtility::init\_actionPerms() is replaced with
    setActionPermissions().
-   ExtendedFileUtility::printLogErrorMessages() is replaced with
    pushErrorMessagesToFlashMessageQueue().
-   ExtendedFileUtility::findRecycler() has been removed. Use
    ResourceStorage instead.
-   RteHtmlParser::rteImageStorageDir() and
    SelectImage::getRTEImageStorageDir() are removed.

` Use $fileFactory->getFolderObjectFromCombinedIdentifier($GLOBALS['TYPO3_CONF_VARS']['BE']['RTE_imageStorageDir']); instead.`

-   Locales::getTerLocales() has been removed without replacement.
-   Locales::getTerLocaleDependencies() has been removed without
    replacement.
-   ExtensionManagementUtility::getRequiredExtensionListArray() has been
    removed without replacement.
-   ExtensionManagementUtility::writeNewExtensionList() has been removed
    without replacement.
-   PhpOptionsUtility::isSqlSafeModeEnabled() has been removed without
    replacement.
-   ClassLoader::getAliasForClassName() is replaced with
    getAliasesForClassName().

##### Impact

A call to any of the aforementioned methods by third party code will
result in a fatal PHP error.

##### Affected Installations

Any installation which contains third party code still using these
deprecated methods.

##### Migration

Replace the calls with the suggestions outlined above.

#### Breaking: \#62595 - Remove SU change-to mode

##### Description

The permanent user switch has been removed from backend user list for a
better UX.

##### Impact

The parameter “emulate” in the view helper “SwitchUser” is dropped.
Using the argument causes an error "Argument “emulate” was not
registered".

##### Affected Installations

Any installation using an extension that uses the view helper
“SwitchUser” with “emulate” argument.

##### Migration

Drop the “emulate” argument in the view helper call.

#### Breaking: \#62670 - Removal of deprecated code in multiple sysexts

##### Description

DBAL DatabaseConnection

------------------------------------------------------------------------

All connection parameters (host, username, password, db) for methods
sql\_connect() and sql\_select\_db() are removed.

CSS Styled Content

------------------------------------------------------------------------

The old frontend plugin file pi1/class.tx\_cssstyledcontent\_pi1.php is
removed. Refer to Classes/Controller/CssStyledContentController.php
instead.

Install Tool

------------------------------------------------------------------------

The check for PHP's magic\_quotes\_gpc settings is removed, as the
feature is disabled since PHP 5.4.

Removed files

------------------------------------------------------------------------

-   lang/lang.php is removed. You don't need to include this file
    anymore, just use \\TYPO3\\CMS\\Lang\\LanguageService directly.
-   rtehtmlarea/htmlarea/plugins/DynamicCSS/dynamiccss.css is removed.
    The file was not used.

Removed PHP classes

------------------------------------------------------------------------

-   TYPO3\\CMS\\Scheduler\\Task\\FileIndexingTask is removed without
    replacement.

Removed PHP class members

------------------------------------------------------------------------

-   TypoScriptFrontendController::\$absRefPrefix\_force is removed
    without replacement.

Removed PHP methods

------------------------------------------------------------------------

-   LanguageService::JScharCode is removed, use
    GeneralUtility::quoteJSvalue instead.
-   ContentObjectRenderer::joinTSarrays is removed without replacement.
-   TypoScriptFrontendController::tidyHTML is removed without
    replacement. You may use the tidy extension from TER.
-   ElementBrowser::isWebFolder is removed without replacement.
-   ElementBrowser::checkFolder is removed without replacement.
-   AbstractDatabaseRecordList::getTreeObject is removed without
    replacement.
-   FileList::dirData is removed without replacement.
-   FilesContentObject::stdWrapValue is removed, use
    ContentObjectRenderer::stdWrapValue instead.
-   ImportExportController::userTempFolder is removed, use
    getDefaultImportExportFolder instead.
-   ImportExportController::userSaveFolder is removed, use
    getDefaultImportExportFolder instead.
-   CrawlerHook::loadIndexerClass is removed without replacement.
-   DatabaseIntegrityView::func\_filesearch is removed without
    replacement.
-   DatabaseIntegrityView::findFile is removed without replacement.
-   RteHtmlAreaBase::buildStyleSheet is removed without replacement.
-   RteHtmlAreaBase::loremIpsumInsert is removed without replacement.
-   StagesService::checkCustomStagingForWS is removed without
    replacement.

Removed JS functions

------------------------------------------------------------------------

-   tx\_rsaauth\_encrypt is removed without replacement.
-   tx\_rsaauth\_feencrypt is removed without replacement.

##### Impact

A call to any of the aforementioned methods by third party code will
result in a fatal PHP error.

##### Affected Installations

Any installation which contains third party code still using these
deprecated methods.

##### Migration

Replace the calls with the suggestions outlined above.

#### Breaking: \#62673 - Deprecated extbase code is removed

##### Description

Generic\\Qom\\Statement

------------------------------------------------------------------------

You may no longer use bound variables without using a prepared
statement.

ActionController

------------------------------------------------------------------------

Support for old view configuration options templateRootPath,
layoutRootPath and partialRootPath is dropped. Use the new options with
fallback mechanism.

Removed PHP classes

------------------------------------------------------------------------

-   QueryObjectModelConstantsInterface
-   QueryObjectModelFactoryInterface

Removed PHP class members

------------------------------------------------------------------------

-   ActionController::\$viewObjectNamePattern is removed without
    replacement
-   Repository::\$backend is removed, use persistence manager instead

Removed PHP methods

------------------------------------------------------------------------

-   ObjectManager::create() is removed, use ObjectManager::get() instead
-   ObjectManagerInterface::create() is removed
-   Persistence\\Generic\\Backend::replaceObject() is removed without
    replacement
-   QuerySettingsInterface::setReturnRawQueryResult() is removed without
    replacement
-   QuerySettingsInterface::getReturnRawQueryResult() is removed, use
    the parameter on \$query-&gt;execute() directly
-   Typo3QuerySettings::setSysLanguageUid() is removed, use
    setLanguageUid() instead
-   Typo3QuerySettings::getSysLanguageUid() is removed, use
    getLanguageUid() instead

##### Impact

A call to any of the aforementioned methods by third party code will
result in a fatal PHP error.

##### Affected Installations

Any installation which contains third party code still using these
deprecated methods.

##### Migration

Replace the calls with the suggestions outlined above.

#### Breaking: \#62291 - RTE wizard classes renamed

##### Description

The following two RTE classes were renamed:

TYPO3\\CMS\\Rtehtmlarea\\ContentParser renamed to
TYPO3\\CMS\\Rtehtmlarea\\Controller\\ParseHtmlController
TYPO3\\CMS\\Rtehtmlarea\\User renamed to
TYPO3\\CMS\\Rtehtmlarea\\Controller\\UserElementsController

##### Impact

3rd party extensions referring to an old class name will fail.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension refers to a
renamed class by its old name.

##### Migration

The affected 3rd party extensions must be modified to use the new names
of these classes.

#### Breaking: \#62733 - RTE Javascript Files Moved

##### Description

Javascript files of the rtehtmlarea extension were moved from
EXT:rtehtmlarea/htmlarea/ to
EXT:rtehtmlarea/Resources/Public/JavaScript/

##### Impact

Javascript or file not found errors.

##### Affected Installations

An installation is affected if a 3rd party extension loads any
JavaScript file from EXT:rtehtmlarea/htmlarea/

##### Migration

Any affected 3rd party extension must be modified to load any JavaScript
file from EXT:rtehtmlarea/Resources/Public/JavaScript/ instead.

#### Breaking: \#62793 - TypoScript config.notification\_\* removed

##### Description

The following TypoScript options were removed:

config.notification\_email\_charset config.notification\_email\_encoding
config.notification\_email\_urlmode

##### Impact

Using those options have no effect anymore.

##### Affected Installations

Instances that set these options in FE TypoScript.

##### Migration

Those options can be safely removed. They were used with old mail
handling and are substituted with a different engine that rendered those
useless.

#### Breaking: \#62804 - RTE JavaScript method HTMLArea.Editor::getNodeByPosition was moved

##### Description

RTE JavaScript method getNodeByPosition() was moved from HTMLArea.Editor
to HTMLArea.DOM.Node where it belongs.

##### Impact

3rd party extensions referring to HTMLArea.Editor::getNodeByPosition()
will fail.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension refers to the
method HTMLArea.Editor::getNodeByPosition().

##### Migration

The affected 3rd party extensions must be modified to use method
HTMLArea.DOM.Node::getNodeByPosition() instead.

#### Breaking: \#62819 - Remove php Localization Support

##### Description

The support for php files in localization, e.g. locallang.php files was
deprecated with TYPO3 CMS 4.6. All translations are done with XLF in the
core, XML files are still supported.

The parsing of PHP localization files is now disabled by default, the
parsing class is now deprecated.

##### Impact

Extensions using locallang.php files for translation will not show
labels anymore.

##### Affected Installations

All installations with third-party extensions using locallang.php
translation files.

##### Migration

Third-party extensions should migrate their translation files to the
XLIFF format (XLF file extension). The extension development extension
(Extension Key “extdeveval”) can be used to transform locallang.php
files to according XLF files.

Until this is done, it is possible to enable this option again by adding
the following lines to typo3conf/AdditionalConfiguration.php:

.. code-block:: php

`   $GLOBALS['TYPO3_CONF_VARS']['SYS']['lang']['format']['priority'] = 'xlf,xml,php';`\
`   $GLOBALS['TYPO3_CONF_VARS']['SYS']['lang']['format']['parser']['php'] = 'TYPO3\\CMS\\Core\\Localization\\Parser\\LocallangArrayParser';`

#### Breaking: \#62833 - Removed dividers2tabs functionality

##### Description

The “dividers2tabs” option in the ctrl section of TCA allows to show
tabs in FormEngine while editing records, instead of showing all fields
in one long column. This behaviour is the default since some TYPO3
versions.

This option has no effect anymore, as “dividers2tabs” is removed for
TYPO3 CMS Core. The option can also be safely removed from any extension
that adds TCA data.

##### Impact

A third-party extension that overrides the dividers2tabs option for an
existing table or that adds a TCA table with this option disabled will
have a record editing with tabs from now on.

#### Breaking: \#62859 - Removal of doc:link.action view helper

##### Description

The view helper \\TYPO3\\CMS\\Documentation\\ViewHelpers\\Link\\Action
has been removed.

##### Impact

Extensions that rely on existence of
\\TYPO3\\CMS\\Documentation\\ViewHelpers\\Link\\Action won't work.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension uses the removed
view helper.

##### Migration

Either use f:be.buttons.icon or any of f:uri.\* view helpers.

#### Breaking: \#62888 - Remove config.uniqueLinkVars

##### Migration

Remove the setting config.uniqueLinkVars from the TypoScript.

#### Breaking: \#62914 - Early check for PHP 5.5 in Install Tool

##### Description

PHP 5.5 or above is a requirement for TYPO3 CMS7. As code is using
specific PHP 5.5 features, an early check is required in Install Tool.

##### Impact

Install Tool will throw an exception if PHP 5.5 or above is not
detected.

##### Affected Installations

Any installation without at least PHP 5.5.0.

##### Migration

Upgrade to PHP 5.5 or above.

#### Breaking: \#62987 - Remove CSH Glossary

##### Description

Early TYPO3 versions featured a glossary functionality, served by an
extension, with built in switches in the core. Those switches are now
removed.

##### Impact

The functionality is no longer available.

#### Breaking: \#63056 - Remove Template Selection Hack

##### Description

There has been an ancient hack for the former “freesite” extension,
which enabled selection of the template via GET variable. This technique
is outdated and has been removed.

##### Impact

Any extension using this hack will not be able to select the template
this way anymore.

##### Affected Installations

Installations with third party extensions using the hack.

##### Migration

No migration path intended.

#### Breaking: \#63069 - Removed compatibility layer for submodules of func and info modules

##### Description

The web\_info and web\_func modules use the module dispatcher now and do
not have their own index scripts. Therefore any submodule for those
modules need to adjust links accordingly.

##### Migration

Use BackendUtility::getModuleUrl() instead to get the correct target for
your links.

#### Breaking: \#63110 - alt\_doc\_nodoc.php removed

##### Description

Script entry point typo3/alt\_doc\_nodoc.php and
NoDocumentsOpenController class are removed without substitution.

##### Impact

A script pointing to this file resource will trigger a 404 server
response and a script instantiating the class will cause a fatal error.

##### Affected Installations

An extension needs to be adapted in the unlikely case that it uses this
code.

##### Migration

Redirecting to typo3/dummy.php instead.

Deprecation
-----------

#### Deprecation: \#60574 - Client Related Conditions

##### Description

Conditions that depend on client details are unlovely for a number of
reasons:

-   Per condition or permutation of conditions that matches, the
    frontend

` creates a different cache entry. This can lead to a very high number`\
` of cache entrys per page`

-   Conditions based on browser or clients on server side are bad
    practice.
-   The device information in the core is outdated (for example it is
    possible to match “AMIGA”)
-   Setups like reverse proxies give additional headaches with these
    types of conditions
-   All client related condition types are deprecated with this patch.

##### Impact

Usage of client related TypoScript conditions will result in a
deprecation log message. Client related conditions are browser, version,
system and useragent.

#### Deprecation: \#61513 - Use native htmlspecialchars in ExtendedTemplateService

##### Description

In previous versions the ExtendedTemplateService used a conditional
wrapper method to apply htmlspecialchars() for rendering TypoScript
search labels, keys and comments in the backend. This option was never
used, so htmlspecialchars() was always activated rendering the option
and method redundant and not necessary. Calls to the method are removed.
The ExtendedTemplateServer method and property are now marked as
deprecated for removal with CMS 8.

##### Impact

Custom extensions using the flag
ExtendedTemplateService-&gt;ext\_noSpecialCharsOnLabels or a custom
implementation of ExtendedTemplateService might get different results
when using this switch within the class.

#### Deprecation: \#61958 - TCA rendering methods

##### Description

The following methods of the class
\\TYPO3\\CMS\\Backend\\Form\\FormEngine have been marked as deprecated:

`* getSingleField_typeInput`\
`* getSingleField_typeText`\
`* getSingleField_typeCheck`\
`* getSingleField_typeRadio`\
`* getSingleField_typeSelect`\
`* getSingleField_typeGroup`\
`* getSingleField_typeNone`\
`* getSingleField_typeFlex`\
`* getSingleField_typeUnknown`\
`* getSingleField_typeUser`

Each method is moved into a designated class inside
\\TYPO3\\CMS\\Backend\\Form\\Element to clean up the FormEngine class.

##### Impact

If a 3rd party extension calls the mentioned methods directly, a
deprecation log entry will be created.

##### Affected Installations

All installations which call the mentioned methods.

##### Migration

Every call of a 3rd party extension to the mentioned method must be
changed to use the new classes.

#### Deprecation: \#62363 - TSFE-&gt;JSeventFuncCalls disabled

##### Description

TYPO3 CMS provides a way to register direct JS calls to be added to the
body tag of the frontend output to allow several functions to register
for e.g. “onload”. Nowadays this is done via JS frameworks directly, or
via JS variables.

The functionality has been marked as deprecated.

##### Impact

The core does not use this functionality anymore. Installations with
menus using “GMENU\_LAYERS”, which has been removed from the core a
while ago, but still use it via third-party extensions, might not work
anymore as expected.

##### Affected Installations

All installations which use the \$TSFE-&gt;JSeventFuncCalls option, e.g.
like GMENU\_LAYERS.

##### Migration

Every call of a 3rd party extension to the mentioned method must be
changed to use their own JS function registration.

#### Deprecation: \#62667 Additional “WrapBorder” Table In FormEngine

##### Description

In previous versions the FormEngine always wrapped fields around an
additional HTML table element. This was done in a separate method called
wrapBorder() utilizing the SECTION\_WRAP subpart of the FormEngine
template. As styling is now done completely via LESS/CSS, all calls to
the method have been removed. The wrapBorder method and sectionWrap
property of FormEngine are now marked as deprecated for removal with CMS
8.

##### Impact

Custom extensions using the wrapBorder() method will not get the
additional table wrap.

#### Deprecation: \#62794 - Mail methods in GeneralUtility

##### Description

The following methods of the class
\\TYPO3\\CMS\\Core\\Utility\\GeneralUtility have been marked as
deprecated:

`* quoted_printable()`\
`* encodeHeader()`\
`* substUrlsInPlainText()`

##### Impact

The methods were used together with the old mail API and are now
obsolete. Deprecation warnings will be triggered if used.

##### Affected Installations

Installations that still use those methods will trigger deprecations
warnings.

##### Migration

Code that still uses these methods should be refactored to the mail API
using TYPO3\\CMS\\Core\\Mail\\Mailer class.

#### Deprecation: \#62795 - DocumentTemplate-&gt;endPageJS()

##### Description

Method TYPO3\\CMS\\Backend\\Template\\DocumentTemplate::endPageJS() and
the according property endJS have been marked as deprecated.

##### Impact

None, as it isn't in use anymore since TYPO3 CMS 4.5 and was responsible
for notifying the browser that the session is still active.

#### Deprecation: \#62800 - Workspaces ToolbarItem via ExtDirect

##### Description

The PHP functionality for switching a workspace was done with the
ExtDirect call TYPO3.Ajax.ExtDirect.ToolbarMenu until now. This has been
replaced by a simple AJAX JSON call, based on jQuery and the refactored
ToolbarItem Menu for the workspaces module.

##### Impact

The core does not use this functionality anymore, and also removed the
ExtDirect registration for this class.

##### Affected Installations

All installations which directly used the ExtDirect
TYPO3.Ajax.ExtDirect.ToolbarMenu to fetch the data.

##### Migration

Use the new AjaxHandler Workspaces::setWorkspace() directly instead.

#### Deprecation: \#62854 - Abstractplugin-&gt;pi\_list\_searchBox()

##### Description

Method pi\_list\_searchBox() of AbstractPlugin (aka pibase) was used
with very old search solutions and is hopelessly outdated. It is now
discouraged to be used and will be removed with next major version.

##### Impact

Extensions still using pi\_list\_searchBox() will throw a deprecation
warning.

#### Deprecation: \#62864 - BackendUtility-&gt;helpTextIcon deprecated

##### Description

The function helpTextIcon() in BackendUtility has been marked as
deprecated.

##### Impact

The core does not use this functionality anymore.

##### Affected Installations

All installations which use the function helpTextIcon().

##### Migration

Use BackendUtility::cshItem() instead.

#### Deprecation: \#62893 - Flashmessage JavaScript object TYPO3.Flashmessages was moved

##### Description

Flashmessages JavaScript object has been moved from TYPO3.Flashmessages
to top.TYPO3.Flashmessages. The severity constant values has been
changed to correspond to the same values (-2,-1,0,1,2) of the constants
as in PHP. The constants TYPO3.Severity.information have been marked as
deprecated. 3rd party extensions referring to TYPO3.Severity.information
will work until CMS 9. A compatibility file was introduced to map
TYPO3.Flashmessages to top.TYPO3.Flashmessages, will also work until CMS
9.

##### Impact

If a 3rd party extension calls the mentioned methods directly, a
deprecation log will be written to the browser console.

##### Affected Installations

A TYPO3 instance is affected if a 3rd party extension refers to the
method TYPO3.Flashmessages.display() or uses TYPO3.Severity.information
constants.

##### Migration

The affected 3rd party extensions must be modified to use
top.TYPO3.Flashmessages instead of TYPO3.Flashmessages.

Example:

`   .. code-block:: javascript`

`   // Old and deprecated:`\
`   TYPO3.Flashmessages.display(TYPO3.Severity.notice)`

`   // New and the only correct way:`\
`   top.TYPO3.Flashmessages.display(top.TYPO3.Severity.notice)`

`   ..`

The TYPO3.Severity object has been moved to top.TYPO3.Severity. Use
top.TYPO3.Severity.\* instead.

#### Deprecation: \#62988 - Deprecate unused/non-unified DocumentTemplate code

##### Description

Several functions within DocumentTemplate are not encouraged to be used
anymore.

The hard-coded background image setting via
\$TBE\_STYLES\['background'\] is removed and its usage is deprecated.

Additionally, the font-wrapping methods \*rfw()\* and \*dfw()\* are
deprecated. The according CSS was removed from the core.

The method \*collapseableSection()\*, which was used solely by the
reports module for ages in a buggy way, is also deprecated in favor of
Bootstrap collapseables and localstorage.

##### Impact

The core does not use this functionality anymore.

##### Affected Installations

All installations which use the setting
\$GLOBALS\['TBE\_STYLES'\]\['background'\] or any of the functions:

-   dfw()
-   rfw()
-   collapseableSection()

##### Migration

-   Use CSS directly instead of
    \$GLOBALS\['TBE\_STYLES'\]\['background'\]
-   Use the CSS class \*text-muted\* instead of the method dfw()
-   Use the CSS class \*text-danger\* instead of the method rfw()
-   Use HTML bootstrap classes, localStorage etc. instead of
    collapseableSection()

Security
--------


