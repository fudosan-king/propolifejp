#!/bin/sh
rsync --delete -rlpcgz -v ./logrenove/ webapp-staging.intra.fudosan-king.jp:/var/www/html/logrenove/wp-content/themes/logrenove/
