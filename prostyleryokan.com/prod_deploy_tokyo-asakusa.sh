#!/bin/sh
rsync --delete --exclude-from=exclude -rlpcgz -v ./tokyo-asakusa/ websv-prod:/var/www/sources/prostyleryokan/tokyo-asakusa/wp-content/themes/uniquek/