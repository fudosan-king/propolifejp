#!/bin/sh
rsync --delete -rlpcgz -v --exclude-from=exclude ./yokohamabashamichi/ dev.php.intra.fudosan-king.jp:~/www/prostyleryokan/yokohamabashamichi/wp-content/themes/bashamichi/
