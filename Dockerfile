# use the image from docker
FROM php:8.2.5-fpm-alpine

# set working directory to /var/www, in Windows this is htdocs
WORKDIR /var/www

# open port 8000 to be mapped outside
EXPOSE 8000

# run application
CMD php artisan serve --host=0.0.0.0 --port=8000
