#!/bin/sh
rsync -v -rlptgoDz  blog.intra.fudosan-king.jp:/var/www/propolifejp/wp/wp-content/ ./sources/wp/wp-content
