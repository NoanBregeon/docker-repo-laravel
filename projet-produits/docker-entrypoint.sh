#!/bin/sh
# Nettoyer les vieux fichiers de cache qui pourraient être restés dans l'image
php artisan config:clear
php artisan cache:clear

echo "Waiting for database..."
sleep 5

php artisan migrate:fresh --force # Utilise :fresh pour être CERTAIN d'écraser l'existant
php artisan db:seed --force

exec "$@"
