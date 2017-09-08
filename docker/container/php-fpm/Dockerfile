FROM php:fpm

ADD php.ini /usr/local/etc/php/conf.d/php.ini

# Installation of required package
RUN apt-get update && \
	apt-get install -y \
# # If you need the package, add it here.
	git \
	zip \
	unzip \
	gcc \
	zlib1g-dev \
	openssl \
	libxml2 \
	libxml2-dev \
	&& docker-php-ext-install mysqli pdo_mysql xml

RUN php -r "readfile('https://getcomposer.org/installer');" | php \
	&& mv composer.phar /usr/local/bin/composer

# RUN cd /var/www/html && composer install

WORKDIR /var/www/html/

RUN php artisan key:generate

RUN php artisan migrate