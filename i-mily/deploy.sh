#!/bin/sh
rsync --delete -rlpcgz -v --exclude-from=excludes www/wordpress/i-mily/ blog.intra.fudosan-king.jp:/var/www/i-mily/
