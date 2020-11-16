#!/bin/sh
rsync --delete --exclude-from=exclude -rlpcgz -v ./kenchomae/ staging.php.intra.fudosan-king.jp:/var/www/prostyleryokan/okinawa/kenchomae/wp-content/themes/uniquek/