#!/bin/sh
rsync -rlpcgoDvz --delete ./oki-ig/ staging.php.intra.fudosan-king.jp:/var/www/oki-ig/wp-content/themes/oki-ig/
