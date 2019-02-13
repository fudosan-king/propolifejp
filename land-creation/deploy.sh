#!/bin/sh
rsync --delete -rlpcgz -v --exclude-from=excludes www/wordpress/land-creation/wp-content/themes/ blog.intra.fudosan-king.jp:/var/www/land-creation/wp-content/themes/
