#!/bin/bash
touch app/database/production.sqlite
php composer install
php artisan migrate --force
php artisan db:seed --force
