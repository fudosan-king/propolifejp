#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes_nakano nakanotetsugakudo/ websv-prod:/var/www/sources/prostyle-residence/nakanotetsugakudo/
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp nakanotetsugakudo/wordpress/wp-content/themes/ websv-prod:/var/www/sources/prostyle-residence/nakanotetsugakudo/wordpress/wp-content/themes/