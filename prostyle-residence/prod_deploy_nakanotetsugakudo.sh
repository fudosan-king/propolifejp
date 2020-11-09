#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=./www/excludes_nakano ./www/nakanotetsugakudo/ websv-prod:/var/www/sources/prostyle-residence/nakanotetsugakudo/
rsync -rlpcgoDvz --delete --exclude-from=./www/excludes_wp ./www/nakanotetsugakudo/wordpress/wp-content/themes/ websv-prod:/var/www/sources/prostyle-residence/nakanotetsugakudo/wordpress/wp-content/themes/