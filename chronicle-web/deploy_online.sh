#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp ./online/ php.intra.fudosan-king.jp:/var/www/chronicle-web/online/
