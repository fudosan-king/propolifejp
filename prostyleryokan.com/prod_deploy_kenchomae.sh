#!/bin/sh
rsync --delete --exclude-from=exclude -rlpcgz -v ./kenchomae/ websv-prod:/var/www/sources/prostyleryokan/okinawa/kenchomae/wp-content/themes/kenchomae/