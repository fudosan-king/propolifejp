#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes propolifehotels/ php.intra.fudosan-king.jp:/var/www/propolifejp/propolifehotels
