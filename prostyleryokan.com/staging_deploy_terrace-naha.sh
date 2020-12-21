#!/bin/sh
rsync --delete --exclude-from=exclude -rlpcgz -v ./terrace-naha/ dev.php.intra.fudosan-king.jp:~/www/prostyleryokan/terrace-naha/wp-content/themes/terrace-naha/