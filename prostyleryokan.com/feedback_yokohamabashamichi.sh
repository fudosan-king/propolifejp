#!/bin/sh
rsync -rlpcDvz --exclude-from=exclude php.intra.fudosan-king.jp:/var/www/prostyleryokan/yokohamabashamichi/wp-content/themes/bashamichi/ ./yokohamabashamichi/
