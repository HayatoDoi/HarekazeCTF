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

WORKDIR /var/www/html/

CMD php artisan key:generate

CMD php artisan migrate