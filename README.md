# Cyber-duck technical challenge

## Introduction

A technical test for cyber-duck.co.uk. Written using PHP as the primary language and Laravel as the backend framework of choice.

## Technology

1) PHP 7.2 + Laravel
1) MySQL
1) Composer
1) Vagrant

## Getting started

To get started with this project:

1) Install vagrant & virtualbox (e.g. `brew install vagrant virtualbox`)
1) From the projects' root, execute `vagrant up`
1) Visit `http://localhost:8000` in your browser

### Development

1) To access the guest VM - for example to run composer commands - execute `vagrant ssh`
1) Files are synchronised bi-directionally from the projects' root directory

### Tests

1) Access the guest VM via the `vagrant ssh` command
1) Move into the `/vagrant` directory (i.e. `cd /vagrant`)
1) Run the test suite by executing `vendor/bin/phpunit`

## To-do

The following is a (non-exhaustive) list of items that would enhance this project:

1) Enhance the portable development environment (E.g. containerisation, ansible provisioner rather than shell, etc)
1) Enhance EmployeesTableTest to test companies cascade delete
1) Extend and enhance the LoginRequiredForDashboardTest feature test to check all private areas
1) Write unit and feature tests to test input validation (I.e. StoreUpdateCompany)
1) Modularise/de-couple edit & create views - better code re-use
1) Add feature tests for Company & Employee CRUD
1) Add breadcrumb navigation and/or descriptive page titles
1) Caching in general (E.g. storage results, files, routes, etc)
1) Frontend tests (E.g. Selenium/Behat)
1) Enhance frontend assets (E.g. minification, sprites, compression)