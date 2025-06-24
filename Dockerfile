FROM php:8.2-apache

# 1) Устанавливаем mysqli и включаем rewrite
RUN docker-php-ext-install mysqli \
 && docker-php-ext-enable mysqli \
 && a2enmod rewrite

# 2) Копируем наш дефолтный VirtualHost
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# (опционально) задаём ServerName, чтобы убрать предупреждение
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# 3) Правим права
RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 755 /var/www/html
