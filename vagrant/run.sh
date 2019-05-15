#!/usr/bin/env bash

# Run the app using the in-built PHP webserver
cd /vagrant
php artisan serve --host=0.0.0.0 --port=8000
