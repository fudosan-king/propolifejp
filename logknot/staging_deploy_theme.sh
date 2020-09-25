#!/bin/sh
rsync --delete -rlpcgz -v ./logknot/ dev.php.intra.fudosan-king.jp:~/www/logknot/wp-content/themes/logknot/
