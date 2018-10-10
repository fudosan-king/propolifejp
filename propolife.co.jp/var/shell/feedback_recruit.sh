#!/bin/sh
rsync -v -rlptgoDz --exclude-from=exclude blog.intra.fudosan-king.jp:/var/www/propolifejp/recruit/wordpress/ ./sources/recruit/wordpress/
