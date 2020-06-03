#!/bin/sh
rsync --delete -rlpcgz -v ./logrenove/ php.intra.fudosan-king.jp:/var/www/logrenove/wp-content/themes/logrenove/
