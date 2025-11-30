#!/bin/bash
set -e

# If .env doesn't exist copy .env.docker (useful for Codespaces)
if [ -f /var/www/html/.env.docker ] && [ ! -f /var/www/html/.env ]; then
  echo "Using .env.docker to create .env"
  cp /var/www/html/.env.docker /var/www/html/.env
  chown www-data:www-data /var/www/html/.env
fi

# Ensure storage and bootstrap/cache permissions
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache || true

# Run composer install if vendor missing (fast path)
if [ ! -d /var/www/html/vendor ] || [ -z "$(ls -A /var/www/html/vendor 2>/dev/null)" ]; then
  echo "Installing composer dependencies (container)..."
  su -s /bin/sh www-data -c "composer install --no-interaction --prefer-dist --optimize-autoloader"
fi

# Start php-fpm (daemon off managed by container runtime)
exec php-fpm
