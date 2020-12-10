#!/bin/sh
rsync -v -rlptgoDz --exclude-from=excludes_wp websv-prod:/var/www/sources/chronicle-web/cs-survey/ ./cs-survey/
rsync -v -rlptgoDz --exclude-from=excludes_wp websv-prod:/var/www/sources/chronicle-web/lp01/ ./lp01/
rsync -v -rlptgoDz --exclude-from=excludes_wp websv-prod:/var/www/sources/chronicle-web/lp02/ ./lp02/
rsync -v -rlptgoDz --exclude-from=excludes_wp websv-prod:/var/www/sources/chronicle-web/lp03/ ./lp03/
rsync -v -rlptgoDz --exclude-from=excludes_wp websv-prod:/var/www/sources/chronicle-web/online/ ./online/
rsync -v -rlptgoDz --exclude-from=excludes_wp websv-prod:/var/www/sources/chronicle-web/ps-survey/ ./ps-survey/
rsync -v -rlptgoDz --exclude-from=excludes_wp websv-prod:/var/www/sources/chronicle-web/reservation/ ./reservation/
rsync -v -rlptgoDz --exclude-from=excludes_wp websv-prod:/var/www/sources/chronicle-web/survey/ ./survey/

rsync -v -rlptgoDz --exclude-from=excludes_wp websv-prod:/var/www/sources/chronicle-web/wordpress/wp-content/themes/propolife2015/ ./propolife2015/
