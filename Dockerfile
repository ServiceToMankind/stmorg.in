FROM php:8.2-apache

# Install dependencies FIRST (rarely changes)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip unzip git curl \
    && docker-php-ext-install pdo_mysql mysqli mbstring exif pcntl bcmath gd \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN a2enmod rewrite

WORKDIR /var/www/html

# Copy only composer files first (if using composer)
# COPY composer.json composer.lock ./
# RUN composer install --no-dev --optimize-autoloader

# THEN copy app code (changes often)
COPY . .

RUN chown -R www-data:www-data /var/www/html
