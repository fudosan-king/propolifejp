#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes php.intra.fudosan-king.jp:/var/www/chro-reform.com/wordpress/wp-content/themes/chroniclereform/ ./wordpress/wp-content/themes/chroniclereform/
