#!/bin/sh
rsync -v -rlptgoDz --exclude-from=excludes_wp php.intra.fudosan-king.jp:/var/www/chronicle-web/lp01/ ./lp01/
