#!/usr/bin/env bash

# Update package lists
apt update

# Install system packages
apt install -y php7.2-cli php7.2-mysql php7.2-mbstring php7.2-xml php7.2-zip mysql-server composer
