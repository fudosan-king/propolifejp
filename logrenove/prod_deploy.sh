#!/bin/sh
rsync --delete -rlpcgz -v ./logrenove/ websv-prod:/var/www/sources/logrenove/wp-content/themes/logrenove/
