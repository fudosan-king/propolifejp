#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes nakanotetsugakudo/ websv-prod:/var/www/sources/prostyle-residence/nakanotetsugakudo/
