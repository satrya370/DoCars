FROM php:8.3-fpm-alpine

# 1) System deps
RUN apk add --no-cache \
    git curl zip unzip \
    libpng-dev libxml2-dev oniguruma-dev libzip-dev \
    freetype-dev libjpeg-turbo-dev libwebp-dev \
    icu-dev icu-data-full

# 2) PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install -j"$(nproc)" \
    pdo_mysql mbstring exif pcntl bcmath gd zip intl opcache

# 3) Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1

WORKDIR /var/www/html
COPY composer.json composer.lock ./

# 4) Siapkan struktur cache SEBELUM composer install
RUN set -eux; \
    mkdir -p \
    storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    storage/clockwork \
    bootstrap/cache; \
    chown -R www-data:www-data storage bootstrap/cache; \
    chmod -R ug+rw storage bootstrap/cache


# 5) Install deps tanpa menjalankan artisan (no-scripts)
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader --no-scripts

# 6) Copy semua source (termasuk artisan)
COPY . .

# 7) php.ini
COPY docker/php/php.ini /usr/local/etc/php/conf.d/99-custom.ini

# 8) Permission akhir
RUN chown -R www-data:www-data /var/www/html \
    && find storage -type d -exec chmod 775 {} \; \
    && find storage -type f -exec chmod 664 {} \; \
    && find bootstrap/cache -type d -exec chmod 775 {} \; \
    && find bootstrap/cache -type f -exec chmod 664 {} \;

# 9) Init direktori saat start + (opsional) package:discover
CMD sh -lc '\
    mkdir -p \
    storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/views \
    storage/clockwork \
    storage/logs \
    bootstrap/cache && \
    chown -R www-data:www-data storage bootstrap/cache && \
    chmod -R ug+rw storage bootstrap/cache && \
    php-fpm'


EXPOSE 9000