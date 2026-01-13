FROM php:8.2-fpm

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    git zip unzip curl libpng-dev \
    && docker-php-ext-install pdo pdo_mysql

# Copy Laravel project from backend folder into container
COPY backend/ /var/www

RUN chown -R www-data:www-data /var/www

EXPOSE 9000

CMD ["php-fpm"]
