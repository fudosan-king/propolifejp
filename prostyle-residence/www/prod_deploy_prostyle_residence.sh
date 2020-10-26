#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp prostyledata/ websv-prod:/var/www/sources/prostyle-residence/main/wp-content/themes/prostyledata/
