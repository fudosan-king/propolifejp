#!/bin/sh
rsync -v -rlptgoDz --exclude-from=excludes php.intra.fudosan-king.jp:/var/www/survey-ustrust-home/ ./
