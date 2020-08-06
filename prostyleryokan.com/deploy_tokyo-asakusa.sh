#!/bin/sh
rsync --delete --exclude-from=exclude -rlpcgz -v ./tokyo-asakusa/ php.intra.fudosan-king.jp:/var/www/prostyleryokan/tokyo-asakusa/wp-content/themes/uniquek/