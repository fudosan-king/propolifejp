#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp prostyle_wp/ php.intra.fudosan-king.jp:/var/www/prostyle-residence.com/prostyle_wp
