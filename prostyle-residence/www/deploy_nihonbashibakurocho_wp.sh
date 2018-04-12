#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp nihonbashibakurocho/wordpress php.intra.fudosan-king.jp:/var/www/prostyle-residence.com/nihonbashibakurocho
