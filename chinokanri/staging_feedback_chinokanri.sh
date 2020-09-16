#!/bin/sh
rsync -v -rlptgoDz --exclude-from=excludes staging.php.intra.fudosan-king.jp:/var/www/chinokanri/assets/ ./src/assets/
rsync -v -rlptgoDz --exclude-from=excludes staging.php.intra.fudosan-king.jp:/var/www/chinokanri/application/controllers/ ./src/controllers/
rsync -v -rlptgoDz --exclude-from=excludes staging.php.intra.fudosan-king.jp:/var/www/chinokanri/application/views/ ./src/views/