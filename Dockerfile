#Image pour Laravel avec PHP 8.4 alpine
FROM php:8.4-alpine
# Installer les dépendances système nécessaires
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /var/www/html
COPY . /var/www/html
COPY .env .env
RUN docker-php-ext-install pdo pdo_mysql
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
EXPOSE 8080
