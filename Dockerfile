FROM php:7.4-apache

# Устанавливаем расширения PHP (для MySQL)
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Включаем mod_rewrite если нужно
RUN a2enmod rewrite
