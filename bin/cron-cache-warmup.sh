#!/bin/bash

LOCKFILE=~/cache-warmup.lock
STARTFILE=~/cache-warmup.run

if [ -f "$LOCKFILE" ]; then
    echo "Lockfile $LOCKFILE present, skipping…"
elif [ -f "$STARTFILE" ]; then
    touch $LOCKFILE
    rm -f $STARTFILE
    php ~/site/mage/current/bin/console cache:warmup
    rm -f $LOCKFILE
elif [ "$1" == 'start' ]; then
    touch $STARTFILE
fi
