#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes ./src/ staging.php.intra.fudosan-king.jp:/var/www/chronicle-kensetsu/
