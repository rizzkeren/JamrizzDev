FROM php:8.2-apache

# Instal dependensi sistem yang dibutuhkan Railway
RUN apt-get update && apt-get install -y \
    libpng-dev \
    zlib1g-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install gd pdo_mysql zip

# Aktifkan Apache Rewrite untuk Laravel
RUN a2enmod rewrite

# Salin semua file proyek ke folder server
COPY . /var/www/html

# Setel izin folder storage (Penting!)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Sesuaikan DocumentRoot Apache ke folder public Laravel
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf

# Instal Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

EXPOSE 80