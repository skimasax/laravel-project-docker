# Use the official PHP image as the base image
FROM php:8.1-fpm

# Set the working directory inside the container
WORKDIR /var/www/html

# Install system dependencies and PHP extensions required by Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Install Composer (a PHP package manager)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the Laravel application files to the container
COPY . /var/www/html

# Install application dependencies using Composer
RUN composer install --optimize-autoloader --no-dev

# Generate the Laravel application key
# RUN php artisan key:generate

# Set Laravel permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose the port that Laravel's built-in server runs on
EXPOSE 9000

# Start the PHP-FPM server
CMD ["php-fpm"]

# (Optional) If you want to run a Laravel queue worker as well, you can add the following lines:
# CMD ["php", "artisan"]

