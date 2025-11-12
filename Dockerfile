# -----------------------------
#  Laravel + PHP + Apache Setup
# -----------------------------
FROM php:8.2-apache

# Enable Apache mod_rewrite (for pretty URLs)
RUN a2enmod rewrite

# Install required system packages & PHP extensions
RUN apt-get update && apt-get install -y \
    git zip unzip libpq-dev libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Copy app code to container
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Copy Composer from the official Composer image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install PHP dependencies (production mode)
RUN composer install --no-dev --optimize-autoloader

# Set proper permissions for Laravel storage and cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80 to the web
EXPOSE 80

# Start Apache web server
CMD ["apache2-foreground"]
