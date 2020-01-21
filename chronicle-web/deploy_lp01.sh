#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp ./lp01/ php.intra.fudosan-king.jp:/var/www/chronicle-web/lp01/
