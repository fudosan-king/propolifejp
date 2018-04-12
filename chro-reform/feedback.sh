#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes php.intra.fudosan-king.jp:/var/www/chro-reform.com/static/ ./static/
rsync -rlpcgoDvz --delete --exclude-from=excludes php.intra.fudosan-king.jp:/var/www/chro-reform.com/wordpress/ ./wordpress/
rsync -rlpcgoDvz --delete --exclude-from=excludes php.intra.fudosan-king.jp:/var/www/chro-reform.com/shindan/ ./shindan/
