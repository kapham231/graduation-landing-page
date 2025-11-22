# Use official FrankenPHP image (PHP 8.2)
FROM dunglas/frankenphp:1.1-php8.2

WORKDIR /app

# Install system deps
RUN apt-get update && apt-get install -y \
    git curl zip unzip && \
    rm -rf /var/lib/apt/lists/*

# Copy composer files
COPY composer.json composer.lock ./

# Install dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Copy entire project
COPY . .

# Expose default port
EXPOSE 8000

# Start FrankenPHP with dynamic Railway PORT
CMD ["frankenphp", "php-server", "public", "--port", "${PORT}", "--workers", "2"]