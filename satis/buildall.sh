#!/bin/bash
DEBUG=yes
if [ "$1" == '-q' ]
then
	DEBUG=
fi
if [ -n "$DEBUG" ]
then
	set -x
fi

if [ -n "$I1S_DDEV_PROJECT" ] ; then
    APP_DIR=/home/composer/application
fi

APP_DIR="`dirname \"$0\"`"
APP_DIR="`( cd \"$APP_DIR\" && pwd )`"
LOCKFILE=$APP_DIR/lock
WEB_DIR="`dirname \"$0\"`/../public"
WEB_DIR="`( cd \"$WEB_DIR\" && pwd )`"

if [ -f "$LOCKFILE" ]; then
	# Find out if the process is more than 1 hour old.
	if [ -n "$(find $LOCKFILE -mmin +60)" ]; then
		OLDPID=$(pgrep -o -f "buildall.sh")
		# In this case we assume that it's hanging, the task will be killed.
		echo "Process $OLDPID seems to be hanging. Killing it." >&2
		kill $OLDPID
	else
		echo "Lockfile $LOCKFILE present, skipping…"
		exit 0
	fi
fi
touch $LOCKFILE
cd $APP_DIR/package-generator
$APP_DIR/package-generator/Build.sh
if [ -n "$DEBUG" ]
then
	$APP_DIR/package-generator/bin/typo3-cms-package-generator satis:json:create
else
	$APP_DIR/package-generator/bin/typo3-cms-package-generator satis:json:create > /dev/null
fi
if [ -n "$DEBUG" ]
then
	/usr/bin/php -d memory_limit=-1 $APP_DIR/package-generator/bin/satis build $APP_DIR/package-generator/satis.json $WEB_DIR --skip-errors
else
	/usr/bin/php -d memory_limit=-1 $APP_DIR/package-generator/bin/satis build $APP_DIR/package-generator/satis.json $WEB_DIR --skip-errors > /dev/null 2>&1
fi
# Exchange index
mv $WEB_DIR/index.html $WEB_DIR/satis.html
#php $APP_DIR/site/index.php > $WEB_DIR/index.html 2> /dev/null
rm -f $LOCKFILE
if [ -n "$DEBUG" ]
then
	set -x
fi
