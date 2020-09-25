#!/bin/sh
rsync --delete -rlpcgz -v ./demo/ php.intra.fudosan-king.jp:/var/www/logknot/
