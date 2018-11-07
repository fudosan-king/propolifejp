#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=./var/shell/exclude_wp ./sources/wp/wp-content/themes/ blog.intra.fudosan-king.jp:/var/www/propolifejp/wp/wp-content/themes
