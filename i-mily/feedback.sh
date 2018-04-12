#!/bin/sh
rsync -e 'ssh -i ../../../deployment/fdk-production.pem' -rlpcDvz --exclude-from=excludes ec2-user@54.199.206.243:/var/www/i-mily www/wordpress
