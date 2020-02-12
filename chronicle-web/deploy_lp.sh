#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp ./lp01/ php.intra.fudosan-king.jp:/var/www/chronicle-web/lp01/
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp ./lp02/ php.intra.fudosan-king.jp:/var/www/chronicle-web/lp02/
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp ./lp03/ php.intra.fudosan-king.jp:/var/www/chronicle-web/lp03/
