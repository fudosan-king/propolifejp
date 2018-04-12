#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes prostyle/ php.intra.fudosan-king.jp:/var/www/prostyle-residence.com/prostyle
