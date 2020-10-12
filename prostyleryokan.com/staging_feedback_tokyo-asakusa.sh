#!/bin/sh
rsync -rlpcDvz --exclude-from=exclude dev.php.intra.fudosan-king.jp:~/www/prostyleryokan/tokyo-asakusa/wp-content/themes/uniquek/ ./tokyo-asakusa/
