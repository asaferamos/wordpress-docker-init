FROM php:8.0.0rc1-fpm

RUN apt-get update && apt-get install -y git vim curl zip

RUN docker-php-ext-install mysqli pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# COPY composer.json composer.json

# RUN composer install

# ENTRYPOINT [ "tail", "-f", "/dev/null" ]
