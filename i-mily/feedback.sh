#!/bin/sh
rsync -rlpcDvz --exclude-from=excludes blog.intra.fudosan-king.jp:/var/www/i-mily/ ./www/wordpress/i-mily
