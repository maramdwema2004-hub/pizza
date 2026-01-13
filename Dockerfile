
FROM php:8.2-cli

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    git zip unzip curl libpng-dev libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY backend/ /var/www

RUN composer install --no-dev --optimize-autoloader || true

RUN if [ ! -f .env ]; then cp .env.example .env; fi


RUN php artisan key:generate --force || true

EXPOSE 8080

CMD php -S 0.0.0.0:8080 -t public
