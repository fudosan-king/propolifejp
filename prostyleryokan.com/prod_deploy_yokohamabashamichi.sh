#!/bin/sh
rsync --delete -rlpcgz -v --exclude-from=exclude ./yokohamabashamichi/ websv-prod:/var/www/sources/prostyleryokan/yokohamabashamichi/wp-content/themes/bashamichi/
