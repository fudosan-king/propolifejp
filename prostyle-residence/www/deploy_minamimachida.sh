#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes minamimachida/ php.intra.fudosan-king.jp:/var/www/prostyle-residence.com/minamimachida
