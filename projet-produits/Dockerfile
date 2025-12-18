#Image pour Laravel avec PHP 8.3 alpine
FROM php:8.4-alpine

# 1. Installer les outils système nécessaires à Composer
RUN apk add --no-cache \
    git \
    unzip \
    libzip-dev \
    icu-dev \
    oniguruma-dev

# 2. Installer les extensions PHP recommandées
RUN docker-php-ext-install pdo pdo_mysql bcmath intl zip

# 3. Installer Composer proprement
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /laravel

# 4. Copier les fichiers avec les bons droits
COPY --chown=www-data:www-data . .
COPY --chown=www-data:www-data .env.example .env

# 5. Installer les dépendances (SANS update)
RUN composer install --no-interaction --optimize-autoloader --no-dev

# 6. Droits d'exécution sur l'entrypoint
RUN chmod +x docker-entrypoint.sh

# 7. Utiliser un user non-root
USER www-data

ENTRYPOINT [ "./docker-entrypoint.sh" ]
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
EXPOSE 8080
#qsdioqsjhdqsiodbgbdsiuodbDSIOUH
