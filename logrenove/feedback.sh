#!/bin/sh
rsync -rlpcDvz --exclude-from=var/shell/excludes_wp  php.intra.fudosan-king.jp:/var/www/logrenove/wp-content/themes/logrenove/ ./src/wp-content/themes/logrenove/