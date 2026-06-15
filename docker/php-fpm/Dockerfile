FROM php:8.4-fpm

RUN apt-get update -y && \
    apt-get install -y -q --no-install-recommends zlib1g-dev default-mysql-client curl gnupg procps vim git unzip libzip-dev libpq-dev && \
    docker-php-ext-install zip mysqli pdo pdo_mysql && \
    apt-get clean -y  && \
    docker-php-ext-enable pdo_mysql && \
    rm -rf \
       /var/cache/debconf/* \
       /var/lib/apt/lists/* \
       /var/log/* \
       /tmp/*

RUN docker-php-ext-install exif



COPY ./docker/php-fpm/php-fpm.conf /usr/local/etc/php-fpm.d/www.conf

COPY ./src /app

WORKDIR /app

#RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
#RUN php composer-setup.php
#RUN php -r "unlink('composer-setup.php');"
#RUN mv composer.phar /usr/local/bin/composer

#RUN composer install