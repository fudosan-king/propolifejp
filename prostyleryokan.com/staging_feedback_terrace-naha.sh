#!/bin/sh
rsync -rlpcDvz --exclude-from=exclude dev.php.intra.fudosan-king.jp:~/www/prostyleryokan/terrace-naha/wp-content/themes/terrace-naha/ ./terrace-naha/
