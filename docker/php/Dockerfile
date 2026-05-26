FROM php:8.4-fpm-alpine

RUN apk add --no-cache \
    libpng-dev \
    libxml2-dev \
    libzip-dev \
    oniguruma-dev \
    zip \
    unzip \
    git

RUN docker-php-ext-install pdo_mysql mbstring bcmath gd zip

RUN apk add --no-cache nodejs npm

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html