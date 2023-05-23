#!/bin/bash

# Defaults to an app server
role=${CONTAINER_ROLE:-app}

if [ "$role" = "queue" ]; then
  # Run queue
  php artisan queue:work --verbose --tries=3 --timeout=90
elif [ "$role" = "app" ]; then
  composer install --no-dev
  exec php-fpm
else
  echo "Could not match the container role...."
  exit 1
fi
