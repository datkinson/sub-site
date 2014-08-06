#!/bin/bash
touch app/database/production.sh
php composer install
php artisan migrate --force
php artisan db:seed --force
