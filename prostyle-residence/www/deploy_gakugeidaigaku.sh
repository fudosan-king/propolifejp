#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp gakugeidaigaku/ php.intra.fudosan-king.jp:/var/www/prostyle-residence.com/gakugeidaigaku
