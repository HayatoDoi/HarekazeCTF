FROM php:fpm

ADD php.ini /usr/local/etc/php/conf.d/php.ini

# Installation of required package
RUN apt-get update && \
	apt-get install -y \
	libxml2 \
	libxml2-dev

RUN docker-php-ext-install mysqli pdo_mysql xml

WORKDIR /var/www/html/
CMD php artisan key:generate
CMD php artisan migrate
CMD php /script/script.php