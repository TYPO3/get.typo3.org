# Get.typo3.org

## Generating new release notes HTML

- Write release notes as .md file
- have pandoc installed
- add pandoc path to .env file
- do composer install in Build/MdConverter 
- call php Build/MdConverter/ConvertReleaseNotes


## Release-Notes sub-sites

- silex application in release-notes
- add web server config to redirect release-notes/* to release-notes/index.php
- do a composer install in release-notes/
- enjoy