#!/bin/sh
rsync --delete -rlpcgz -v --exclude-from=var/shell/excludes ./logrenove/ php.intra.fudosan-king.jp:/var/www/logrenove/wp-content/themes/logrenove/
