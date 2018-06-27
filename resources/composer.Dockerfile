FROM php:5.4-cli

RUN apt-get update -y && apt-get install curl git -y \
 && curl -sS https://getcomposer.org/installer \
   | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /root