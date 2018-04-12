#!/bin/sh
rsync --delete -e 'ssh -i ../../../deployment/fdk-production.pem' -rlpcgz -v --exclude-from=excludes wordpress/ ec2-user@54.199.206.243:/var/www/order-renove/
