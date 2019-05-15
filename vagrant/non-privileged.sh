#!/usr/bin/env bash

# Install composer packages
cd /vagrant
composer install

# Run the app using the in-built PHP webserver
php artisan serve --host=0.0.0.0 --port=8000
