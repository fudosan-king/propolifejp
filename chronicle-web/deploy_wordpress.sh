#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp ./wordpress/wp-content/themes/ php.intra.fudosan-king.jp:/var/www/chronicle-web/wordpress/wp-content/themes/
