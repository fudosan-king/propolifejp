#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=./www/excludes_nakano ./www/nakanotetsugakudo/ dev.php.intra.fudosan-king.jp:/var/www/prostyle-residence/nakanotetsugakudo/
rsync -rlpcgoDvz --delete --exclude-from=./www/excludes_wp ./www/nakanotetsugakudo/wordpress/wp-content/themes/ dev.php.intra.fudosan-king.jp:/var/www/prostyle-residence/nakanotetsugakudo/wordpress/wp-content/themes/