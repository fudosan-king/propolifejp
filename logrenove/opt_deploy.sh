#!/bin/sh
rsync --delete -rlpcgz -v ./logrenove/ websv-prod:/var/www/sources/logrenove_opt/wp-content/themes/logrenove/
