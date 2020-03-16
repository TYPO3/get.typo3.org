#!/bin/bash

if [ -f ~/.force-cache-warmup ]; then
    rm ~/.force-cache-warmup
    php ~/site/mage/current/bin/console cache:warmup
fi
