#!/bin/sh
rsync -rlpcgoDvz --delete ./corporate/ blog.intra.fudosan-king.jp:/var/www/propolifejp/wp/wp-content/themes/corporate/
