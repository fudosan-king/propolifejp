#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes ./src/assets/ php.intra.fudosan-king.jp:/var/www/chinokanri.co.jp/src/assets/
rsync -rlpcgoDvz --delete --exclude-from=excludes ./src/controllers/ php.intra.fudosan-king.jp:/var/www/chinokanri.co.jp/src/application/controllers/
rsync -rlpcgoDvz --delete --exclude-from=excludes ./src/views/ php.intra.fudosan-king.jp:/var/www/chinokanri.co.jp/src/application/views/
