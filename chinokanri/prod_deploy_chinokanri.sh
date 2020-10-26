#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes ./src/assets/ websv-prod:/var/www/sources/chinokanri/assets/
rsync -rlpcgoDvz --delete --exclude-from=excludes ./src/controllers/ websv-prod:/var/www/sources/chinokanri/application/controllers/
rsync -rlpcgoDvz --delete --exclude-from=excludes ./src/views/ websv-prod:/var/www/sources/chinokanri/application/views/
