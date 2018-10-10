#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=./var/shell/exclude ./sources/ blog.intra.fudosan-king.jp:/var/www/propolifejp/


