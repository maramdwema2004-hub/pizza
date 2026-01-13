
FROM php:8.2-cli


RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*


COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www


COPY backend/ /var/www


RUN composer install --no-dev --optimize-autoloader

RUN mkdir -p \
    storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    bootstrap/cache

RUN chmod -R 777 storage bootstrap/cache

RUN cp .env.example .env || true
RUN sed -i 's/^CACHE_DRIVER=.*/CACHE_DRIVER=file/' .env || echo "CACHE_DRIVER=file" >> .env
RUN sed -i 's/^SESSION_DRIVER=.*/SESSION_DRIVER=file/' .env || echo "SESSION_DRIVER=file" >> .env
RUN sed -i 's/^VIEW_COMPILED_PATH=.*/VIEW_COMPILED_PATH=\/var\/www\/storage\/framework\/views/' .env || echo "VIEW_COMPILED_PATH=/var/www/storage/framework/views" >> .env
RUN php artisan key:generate || true

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
