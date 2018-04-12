#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes www/ php.intra.fudosan-king.jp:/var/www/prostyle-residence.com/
