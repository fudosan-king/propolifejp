#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes ./wordpress/wp-content/themes/chroniclereform/  php.intra.fudosan-king.jp:/var/www/chro-reform.com/wordpress/wp-content/themes/chroniclereform/
