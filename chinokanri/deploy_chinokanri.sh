#!/bin/sh
rsync -rlpcgoDvz --delete ./html/ php.intra.fudosan-king.jp:/var/www/chinokanri.co.jp/
