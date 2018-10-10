#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=./var/shell/exclude_wp ./sources/recruit/wordpress/ blog.intra.fudosan-king.jp:/var/www/propolifejp/recruit/wordpress