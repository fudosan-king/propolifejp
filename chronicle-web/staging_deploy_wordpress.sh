#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp ./wordpress/ staging.php.intra.fudosan-king.jp:/var/www/chronicle-web/wordpress/
