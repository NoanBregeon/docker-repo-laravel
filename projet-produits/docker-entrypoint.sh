
#!/bin/sh
# Met à jour les images Docker avant de démarrer
docker-compose pull

# On attend que le service "mysql" réponde sur le port 3306
while ! nc -z mysql 3306; do
	echo "Attente de MySQL..."
	sleep 1
done

# Nettoyer les vieux fichiers de cache qui pourraient être restés dans l'image
php artisan config:clear
php artisan cache:clear

# Migrer et remplir la base
php artisan migrate:fresh --force # Utilise :fresh pour être CERTAIN d'écraser l'existant
php artisan db:seed --force

exec "$@"
