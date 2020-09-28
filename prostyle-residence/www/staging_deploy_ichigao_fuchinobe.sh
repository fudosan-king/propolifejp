#!/bin/sh
rsync -rlpcgoDvz --delete ./ichigao/ dev.php.intra.fudosan-king.jp:~/www/prostyle-residence/ichigao/wp-content/themes/ichigao/
rsync -rlpcgoDvz --delete ./fuchinobe/ dev.php.intra.fudosan-king.jp:~/www/prostyle-residence/fuchinobe/wp-content/themes/fuchinobe/