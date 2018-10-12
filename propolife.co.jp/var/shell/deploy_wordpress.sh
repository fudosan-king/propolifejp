#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=./var/shell/exclude_wp ./sources/wordpress/ blog.intra.fudosan-king.jp:/var/www/propolifejp/wordpress
