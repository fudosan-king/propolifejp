#!/bin/sh
rsync -rlpcDvz --exclude-from=excludes blog.intra.fudosan-king.jp:/var/www/land-creation/wp-content/themes/ ./www/wordpress/land-creation/wp-content/themes/
