#!/bin/sh
rsync -rlpcgoDvz --delete ./corporate/ staging.php.intra.fudosan-king.jp:/var/www/propolife/wp/wp-content/themes/corporate/
