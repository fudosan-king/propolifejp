#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes ./static/ php.intra.fudosan-king.jp:/var/www/chro-reform.com/static/
rsync -rlpcgoDvz --delete --exclude-from=excludes ./shindan/ php.intra.fudosan-king.jp:/var/www/chro-reform.com/shindan/
