#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes ./ php.intra.fudosan-king.jp:/var/www/chronicle-kensetsu/
