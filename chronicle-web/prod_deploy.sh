#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp ./cs-survey/ websv-prod:/var/www/sources/chronicle-web/cs-survey/
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp ./lp01/ websv-prod:/var/www/sources/chronicle-web/lp01/
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp ./lp02/ websv-prod:/var/www/sources/chronicle-web/lp02/
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp ./lp03/ websv-prod:/var/www/sources/chronicle-web/lp03/
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp ./online/ websv-prod:/var/www/sources/chronicle-web/online/
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp ./ps-survey/ websv-prod:/var/www/sources/chronicle-web/ps-survey/
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp ./reservation/ websv-prod:/var/www/sources/chronicle-web/reservation/
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp ./survey/ websv-prod:/var/www/sources/chronicle-web/survey/

rsync -rlpcgoDvz --delete --exclude-from=excludes_wp ./propolife2015/ websv-prod:/var/www/sources/chronicle-web/wordpress/wp-content/themes/propolife2015/