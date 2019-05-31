#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes nakanotetsugakudo/ php.intra.fudosan-king.jp:/var/www/prostyle-residence.com/nakanotetsugakudo/
