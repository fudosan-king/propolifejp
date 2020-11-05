#!/bin/sh
rsync -rlpcgoDvz --delete --no-p ./sapporo/themes/miyanomori/ staging.php.intra.fudosan-king.jp:/data/sources/prostyle-residence/sapporo/miyanomori/wp-content/themes/miyanomori/

rsync -rlpcgoDvz --delete --no-p ./sapporo/plugins/ppl_plan/ staging.php.intra.fudosan-king.jp:/data/sources/prostyle-residence/sapporo/miyanomori/wp-content/plugins/ppl_plan/
