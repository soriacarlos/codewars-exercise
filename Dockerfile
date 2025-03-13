# Usar imagen base de PHP 8.3 FPM
FROM php:8.3-fpm
LABEL authors="Carlos Soria"

ENV PATH="/var/www/html/vendor/bin:$PATH"

# Actualizar repositorios e instalar dependencias
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    zip \
    && docker-php-ext-install zip

# Instalar Composer globalmente y permitir uso como SU
RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin --filename=composer \
    && composer --version \
    && export COMPOSER_ALLOW_SUPERUSER=1

WORKDIR /var/www/html

COPY . .
