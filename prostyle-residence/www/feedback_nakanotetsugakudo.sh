#!/bin/sh
rsync -v -rlptgoDz --exclude-from=excludes_wp php.intra.fudosan-king.jp:/var/www/prostyle-residence.com/nakanotetsugakudo ./nakanotetsugakudo
