#!/bin/bash

git checkout main

git pull

sudo chmod -R 775 storage

sudo chmod -R ugo+rw storage

php artisan migrate --force

composer install --optimize-autoloader --no-dev

php artisan config:cache

php artisan route:cache

php artisan view:cache