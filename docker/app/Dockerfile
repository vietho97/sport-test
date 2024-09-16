# Sử dụng image PHP 8.1 với Apache
FROM php:8.1-fpm

# Cài đặt các extension cần thiết cho Laravel
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql zip bcmath

# Cài đặt Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Tạo thư mục làm việc và copy project vào container
WORKDIR /var/www

# Copy toàn bộ source vào container
COPY . .

# Cấp quyền cho các thư mục storage và bootstrap/cache
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Expose cổng 9000 (cho PHP-FPM)
EXPOSE 9000
