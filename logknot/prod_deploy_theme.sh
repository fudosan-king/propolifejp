#!/bin/sh
rsync --delete -rlpcgz -v ./logknot/ websv-prod:/var/www/sources/logknot/wp-content/themes/logknot/
