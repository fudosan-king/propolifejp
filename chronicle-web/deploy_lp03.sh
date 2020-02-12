#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp ./lp03/ php.intra.fudosan-king.jp:/var/www/chronicle-web/lp03/
