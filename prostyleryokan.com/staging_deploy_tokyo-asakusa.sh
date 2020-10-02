#!/bin/sh
rsync --delete --exclude-from=exclude -rlpcgz -v ./tokyo-asakusa/ dev.php.intra.fudosan-king.jp:~/www/prostyleryokan/tokyo-asakusa/wp-content/themes/uniquek/