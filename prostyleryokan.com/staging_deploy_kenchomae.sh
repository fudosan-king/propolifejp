#!/bin/sh
rsync --delete --exclude-from=exclude -rlpcgz -v ./kenchomae/ dev.php.intra.fudosan-king.jp:~/www/prostyleryokan/okinawa/kenchomae/wp-content/themes/uniquek/