#!/bin/sh
rsync --delete -rlpcgz -v --exclude-from=exclude ./yokohamabashamichi/ php.intra.fudosan-king.jp:/var/www/prostyleryokan/yokohamabashamichi/wp-content/themes/bashamichi/
