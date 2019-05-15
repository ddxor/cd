#!/usr/bin/env bash

# Install composer packages
cd /vagrant
composer install

# Run DB migrations
php artisan migrate

# Publish adminlte assets
php artisan vendor:publish --provider="JeroenNoten\LaravelAdminLte\ServiceProvider" --tag=assets