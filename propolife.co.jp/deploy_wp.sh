#!/bin/sh
rsync -rlpcgoDvz --delete ./corporate/ websv-prod:/var/www/sources/propolife-group/wp/wp-content/themes/corporate/
