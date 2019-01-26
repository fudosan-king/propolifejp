# WORKS EVENT - Worpdress Site

## VPS Info

```

Domain : http://works-event.chronicle-web.com/
Host Domain: 54.238.241.8

MySQL : root
Pass : dasp13*dran

```

## Wordpress Info

```
Domain : http://works-event.chronicle-web.com/
WP Admin URL: Domain : http://works-event.chronicle-web.com/wp-admin
WP Acc: admin
WP Pass: 7eADL5rW6QidwmK8yRMC)q8O
DB Name: ae160g8cwm_cwp

```

## Nginx Config

```
server {
    listen 80;
    server_name works-event.chronicle-web.com;

    location / {
        rewrite     ^(.*)   https://works-event.chronicle-web.com$1 permanent;
    }
}

server {
    listen 443 ssl;
    #listen 80;

    server_name works-event.chronicle-web.com;
    root /var/www/works-event/wp;
    access_log /var/log/nginx/works-event/access.log;
    error_log /var/log/nginx/works-event/error.log;
    index index.php;

    ssl on;
    ssl_certificate /var/www/works-event/letsencrypt/live/works-event.chronicle-web.com/fullchain.pem;
    ssl_certificate_key /var/www/works-event/letsencrypt/live/works-event.chronicle-web.com/private.pem;

    gzip on;
    gzip_vary on;
    gzip_proxied any;
    gzip_min_length 1024;
    gzip_disable "MSIE [1-6]\.";
    gzip_types text/plain text/css application/javascript;
    try_files $uri $uri/ /index.php?$args;

    location / {
        root   /var/www/works-event/wp/;
        try_files $uri $uri/ /index.php?$args;
    }

    location ~ \.php$ {
       if ($request_method ~* "(GET|POST)") {
          add_header "Access-Control-Allow-Origin"  *;
       }
       fastcgi_pass   127.0.0.1:9000;
       fastcgi_index  index.php;
       fastcgi_param  SCRIPT_FILENAME  /var/www/works-event/wp$fastcgi_script_name;
       include        fastcgi_params;
    }
}

```

## DEVELOP MODE

```
    cd ../works-event/wp
    ./change-env dev
    cd ../works-event/wp/wp-content/plugin
    mv really-simple-ssl to really-simple-ssl-disabled
```
