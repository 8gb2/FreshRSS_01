#!/bin/sh

if [[ -z $1 ]]; then
    D=40
else
    D=$1
fi

echo Deleting all Favicons in the cashe that are over $D days old
find /var/www/FreshRSS/data/favicons/* -name '*.txt' -mtime +$D -delete
find /var/www/FreshRSS/data/favicons/* -name '*.ico' -mtime +$D -delete
echo Cashe pruned