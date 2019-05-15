#!/usr/bin/env bash

# Install composer packages
cd /vagrant
composer install

# Run DB migrations
php artisan migrate