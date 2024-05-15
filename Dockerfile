# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Install PDO extension for MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Copy the current directory contents into the container at /var/www/html
#COPY . /var/www/html
