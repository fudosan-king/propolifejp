#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes ./src/ websv-prod:/var/www/sources/chronicle-kensetsu/
