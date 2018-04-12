#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes ./wordpress/  php.intra.fudosan-king.jp:/var/www/chro-reform.com/wordpress/
