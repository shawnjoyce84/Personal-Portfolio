FROM php:8.1-apache
WORKDIR /var/www/html
RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install pdo pdo_mysql