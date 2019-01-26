#!/bin/sh

rsync -v -rlptgoDz blog.intra.fudosan-king.jp:/var/www/propolifejp/form_spiral ./
rsync -v -rlptgoDz blog.intra.fudosan-king.jp:/var/www/propolifejp/wp/wp-content/themes/corporate ./
rsync -v -rlptgoDz blog.intra.fudosan-king.jp:/var/www/propolifejp/wordpress/wp-content/themes/propolife2015 ./
rsync -v -rlptgoDz blog.intra.fudosan-king.jp:/var/www/propolifejp/recruit/wordpress/wp-content/themes/propolife_recruit ./
