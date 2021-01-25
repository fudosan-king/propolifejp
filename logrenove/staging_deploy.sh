#!/bin/sh
rsync --delete -rlpcgz --exclude-from=excludes -v ./logrenove/ dev.php.intra.fudosan-king.jp:~/www/logrenove/wp-content/themes/logrenove/
