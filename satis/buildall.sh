#!/bin/bash

# Output options
if [ "$1" == '-q' ]; then
    DEBUG=
else
    DEBUG=yes
fi

if [ -n "$DEBUG" ]; then
    set -x
fi

# Calculate directories
APP_DIR="`dirname \"$0\"`"
APP_DIR="`( cd \"$APP_DIR\" && pwd )`"
LOCKFILE=$APP_DIR/build.lock

if [ -n "$IS_DDEV_PROJECT" ]; then
    WEB_DIR="`dirname \"$0\"`/../public"
else
    WEB_DIR="`dirname \"$0\"`/../../../../shared/public"
fi

WEB_DIR="`( cd \"$WEB_DIR\" && pwd )`"

# Check for already running processes
CURPID=$(pgrep -n -f ${0##*/})

if [ -f "$LOCKFILE" ]; then
    # Check if the process is more than 1 hour old.
    if [ -n "$(find $LOCKFILE -mmin +60)" ]; then
        OLDPID=$(pgrep -o -f ${0##*/})

        if [ ! $CURPID -eq $OLDPID ]; then
            # In this case we assume that it's hanging, the task will be killed.
            echo "Process $OLDPID seems to be hanging. Killing it." >&2
            kill $OLDPID
        fi
    else
        echo "Lockfile $LOCKFILE present, skipping…"
        exit 0
    fi
fi

# Create lock file
touch $LOCKFILE

# Start repository creation
BIN_DIR=$APP_DIR/bin

cd $WEB_DIR/../satis

# Run full build once a day only at 5am
CURRENT_TIME=$(date +%H:%M)
if [[ "$CURRENT_TIME" > "05:00" ]] && [[ "$CURRENT_TIME" < "05:05" ]]; then
    BUILD_PARAM=--all
else
    BUILD_PARAM=
fi

if [ -n "$DEBUG" ]; then
    php -d memory_limit=-1 $BIN_DIR/typo3-cms-package-generator satis:build $WEB_DIR $BUILD_PARAM
    #$BIN_DIR/typo3-cms-package-generator extensions:ter:json:create
    #$BIN_DIR/typo3-cms-package-generator satis:json:create
    #php -d memory_limit=-1 $BIN_DIR/satis build ./satis.json $WEB_DIR --skip-errors
else
    php -d memory_limit=-1 $BIN_DIR/typo3-cms-package-generator satis:build $WEB_DIR $BUILD_PARAM > /dev/null
    #$BIN_DIR/typo3-cms-package-generator extensions:ter:json:create > /dev/null
    #$BIN_DIR/typo3-cms-package-generator satis:json:create > /dev/null
    #php -d memory_limit=-1 $BIN_DIR/satis build ./satis.json $WEB_DIR --skip-errors > /dev/null
fi

# Rename Satis index
#mv $WEB_DIR/index.html $WEB_DIR/satis.html

# Remove lock file
rm -f $LOCKFILE

if [ -n "$DEBUG" ]; then
    set -x
fi
