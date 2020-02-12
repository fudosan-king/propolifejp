#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp ./lp02/ php.intra.fudosan-king.jp:/var/www/chronicle-web/lp02/
