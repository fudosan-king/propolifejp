#!/bin/sh
rsync --delete -rlpcgz -v ./logrenove/ dev.php.intra.fudosan-king.jp:~/www/logrenove/wp-content/themes/logrenove/
