#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp ./ php.intra.fudosan-king.jp:/var/www/chronicle-web
