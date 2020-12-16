#!/bin/sh
rsync -rlpcgoDvz --delete ./oki-ig/ websv-prod:/var/www/sources/igeto/wp-content/themes/oki-ig/
