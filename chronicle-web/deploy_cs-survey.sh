#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes_wp ./cs-survey/ php.intra.fudosan-king.jp:/var/www/chronicle-web/cs-survey/
