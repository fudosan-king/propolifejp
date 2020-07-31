#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp prostyledata/ php.intra.fudosan-king.jp:/var/www/prostyle-residence.com/wordpress/wp-content/themes/prostyledata
