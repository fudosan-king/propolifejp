#!/bin/sh
rsync -v -rlptgoDz --exclude-from=excludes_nakano php.intra.fudosan-king.jp:/var/www/prostyle-residence.com/nakanotetsugakudo/ ./nakanotetsugakudo/
rsync -v -rlptgoDz php.intra.fudosan-king.jp:/var/www/prostyle-residence.com/nakanotetsugakudo/wordpress/wp-content/themes/ ./nakanotetsugakudo/wordpress/wp-content/themes/
