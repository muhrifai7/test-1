FROM php:7.3.0-apache

RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
RUN apachectl restart