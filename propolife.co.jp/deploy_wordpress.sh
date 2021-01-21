#!/bin/sh
rsync -rlpcgoDvz --delete ./propolife2015/ websv-prod:/var/www/sources/propolife-group/wordpress/wp-content/themes/propolife2015/
