#!/bin/sh
rsync -v -rlptgoDz --exclude-from=./var/shell/exclude blog.intra.fudosan-king.jp:/var/www/propolifejp/recruit/wordpress/ ./sources/recruit/wordpress
