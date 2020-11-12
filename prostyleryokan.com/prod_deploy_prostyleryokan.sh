#!/bin/sh
rsync --delete -rlpcgz -v ./prostyleryokan/ websv-prod:/var/www/sources/prostyleryokan/main/wp-content/themes/kpropvn/
