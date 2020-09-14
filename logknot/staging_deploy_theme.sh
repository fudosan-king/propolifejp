#!/bin/sh
rsync --delete -rlpcgz -v ./logknot/ staging.php.intra.fudosan-king.jp:/var/www/logknot/wp-content/themes/logknot/
