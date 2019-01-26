#!/bin/sh
rsync -rlpcgoDvz --delete ./form_spiral/ blog.intra.fudosan-king.jp:/var/www/propolifejp/form_spiral/
rsync -rlpcgoDvz --delete ./corporate/ blog.intra.fudosan-king.jp:/var/www/propolifejp/wp/wp-content/themes/corporate/
rsync -rlpcgoDvz --delete ./propolife2015/ blog.intra.fudosan-king.jp:/var/www/propolifejp/wordpress/wp-content/themes/propolife2015/
rsync -rlpcgoDvz --delete ./propolife_recruit/ blog.intra.fudosan-king.jp:/var/www/propolifejp/recruit/wordpress/wp-content/themes/propolife_recruit/


