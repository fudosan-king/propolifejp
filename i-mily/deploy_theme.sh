#!/bin/sh
rsync --delete -rlpcgz -v --exclude-from=excludes ./www/wordpress/i-mily/wp-content/themes/ blog.intra.fudosan-king.jp:/var/www/i-mily/wp-content/themes/
