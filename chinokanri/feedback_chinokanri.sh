#!/bin/sh
rsync -v -rlptgoDz --exclude-from=excludes php.intra.fudosan-king.jp:/var/www/chinokanri.co.jp/src/assets/ ./src/assets/
rsync -v -rlptgoDz --exclude-from=excludes php.intra.fudosan-king.jp:/var/www/chinokanri.co.jp/src/application/controllers/ ./src/controllers/ 
rsync -v -rlptgoDz --exclude-from=excludes php.intra.fudosan-king.jp:/var/www/chinokanri.co.jp/src/application/views/ ./src/views/ 
