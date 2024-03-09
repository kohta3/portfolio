FROM php:7.4-apache

# MySQLi拡張機能を有効にする
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli