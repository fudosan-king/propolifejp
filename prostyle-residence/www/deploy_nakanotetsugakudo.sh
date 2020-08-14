#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes_nakano nakanotetsugakudo/ php.intra.fudosan-king.jp:/var/www/prostyle-residence.com/nakanotetsugakudo/
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp nakanotetsugakudo/wordpress/wp-content/themes/ php.intra.fudosan-king.jp:/var/www/prostyle-residence.com/nakanotetsugakudo/wordpress/wp-content/themes/