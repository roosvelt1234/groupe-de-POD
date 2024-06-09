# Utilisez une image de base (par exemple, php:apache)
FROM php:apache

# Copiez les fichiers de votre projet dans le r?pertoire /var/www/html
COPY projet /var/www/html

# Exposez le port 80 (port par d?faut pour Apache)
EXPOSE 80
