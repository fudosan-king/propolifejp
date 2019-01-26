#!/bin/sh
rsync -rlpcgoDvz --delete ./chronicle/ php.intra.fudosan-king.jp:/var/www/works-event/wp/wp-content/themes/chronicle/
