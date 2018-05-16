#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=exclude ./wordpress/ php.intra.fudosan-king.jp:/home/khanhnp
