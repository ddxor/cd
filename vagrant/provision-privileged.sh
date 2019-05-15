#!/usr/bin/env bash

# Update package lists
apt update

# Install system packages
apt install -y php7.2-cli php7.2-mysql php7.2-mbstring php7.2-xml php7.2-zip mysql-server composer

# Configure MySQL for development
echo "CREATE database cd;" | mysql --defaults-file=/etc/mysql/debian.cnf
echo "CREATE USER 'cd'@'localhost' IDENTIFIED BY 'cd';" | mysql --defaults-file=/etc/mysql/debian.cnf
echo "GRANT ALL PRIVILEGES ON cd.* TO 'cd'@'localhost';" | mysql --defaults-file=/etc/mysql/debian.cnf
echo "FLUSH PRIVILEGES;" | mysql --defaults-file=/etc/mysql/debian.cnf
