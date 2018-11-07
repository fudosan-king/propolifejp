#!/bin/sh
rsync -v -rlptgoDz --exclude-from=./var/shell/exclude blog.intra.fudosan-king.jp:/var/www/propolifejp/recruit/wordpress/wp-content/themes/ ./sources/recruit/wordpress/wp-content/themes
