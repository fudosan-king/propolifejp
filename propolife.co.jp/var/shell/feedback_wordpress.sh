#!/bin/sh
rsync -v -rlptgoDz --exclude-from=exclude blog.intra.fudosan-king.jp:/var/www/propolifejp/wordpress/ ./sources/wordpress/
