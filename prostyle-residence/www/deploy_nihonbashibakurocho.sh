#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes_nihonbashibakurocho nihonbashibakurocho/ php.intra.fudosan-king.jp:/var/www/prostyle-residence.com/nihonbashibakurocho/
