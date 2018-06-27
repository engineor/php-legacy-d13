FROM php:5.4-apache

RUN docker-php-ext-install pdo pdo_mysql mysql \
 && echo 'date.timezone=Europe/Paris' > /usr/local/etc/php/conf.d/timezone.ini \
 && sed -i 's!/var/www/html!/root!g' /etc/apache2/apache2.conf \
 && sed -i 's!/var/www/!/root/!g' /etc/apache2/apache2.conf

WORKDIR /root