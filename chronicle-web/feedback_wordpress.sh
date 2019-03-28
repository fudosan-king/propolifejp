#!/bin/sh
rsync -v -rlptgoDz --exclude-from=excludes_wp php.intra.fudosan-king.jp:/var/www/chronicle-web/wordpress/wp-content/themes/ ./wordpress/wp-content/themes/
