#!/bin/sh
rsync -rlpcDvz --exclude-from=exclude dev.php.intra.fudosan-king.jp:~/www/prostyleryokan/yokohamabashamichi/wp-content/themes/bashamichi/ ./yokohamabashamichi/
