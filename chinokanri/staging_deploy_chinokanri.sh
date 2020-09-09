#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes ./src/assets/ staging.php.intra.fudosan-king.jp:/var/www/chinokanri/assets/
rsync -rlpcgoDvz --delete --exclude-from=excludes ./src/controllers/ staging.php.intra.fudosan-king.jp:/var/www/chinokanri/application/controllers/
rsync -rlpcgoDvz --delete --exclude-from=excludes ./src/views/ staging.php.intra.fudosan-king.jp:/var/www/chinokanri/application/views/
