RELEASE NOTES FOR TYPO3 3.8.1
=============================

This page contains all important 3.8.1 specific information.

### Trouble with showpic.php

Important notice for all sites that use click-enlarge image popups:
Because of a change in showpic.php, all temporary images need to be
cleared. You will need to delete all files inside typo3temp/ after the
upgrade, otherwise you will get a “wrong parameters” error in the popup
window.

### Using config.baseURL

In previous versions it was possible to set “config.baseURL = 1” so the
&lt;base href=“...”&gt; tag was set automatically. Due to security
issues this behaviour is disabled since version 3.8.1. Setting
config.baseURL to a correct URL is absolutely necessary now to make
relative links work. If you have used this feature to serve content for
different domains it's possible to use
[conditions](https://docs.typo3.org/typo3cms/TyposcriptReference/Conditions/Index.html)
instead.

Example:

`config.baseURL = my.domain.tld`\
`[globalString = ENV:HTTP_HOST=sub1.domain.tld]`\
`config.baseURL = `[`http://sub1.domain.tld/`](http://sub1.domain.tld/)\
`[global]`\
`[globalString = ENV:HTTP_HOST=sub2.domain.tld]`\
`config.baseURL = `[`http://sub2.domain.tld/`](http://sub2.domain.tld/)\
`[global]`
