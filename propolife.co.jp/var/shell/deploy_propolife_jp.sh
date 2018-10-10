#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=./var/shell/exclude_wp ./sources/wp/ blog.intra.fudosan-king.jp:/var/www/propolifejp/wp
