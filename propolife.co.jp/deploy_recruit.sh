#!/bin/sh
rsync -rlpcgoDvz --delete ./propolife_recruit/ websv-prod:/var/www/sources/propolife-group/recruit/wordpress/wp-content/themes/propolife_recruit/
