# Utiliser l'image officielle de PHP avec les extensions nécessaires
FROM php:8.1.2-fpm-alpine

# Installer les extensions PHP nécessaires
RUN apk add --no-cache \
    libpng libpng-dev \
    libjpeg-turbo libjpeg-turbo-dev \
    libwebp libwebp-dev \
    zlib zlib-dev \
    libxml2 libxml2-dev \
    curl \
    && docker-php-ext-configure gd \
    && docker-php-ext-install gd \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install pdo pdo_mysql

# Installer Composer pour gérer les dépendances Laravel
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# Copier le code source du projet dans le conteneur
COPY . /var/www/html

# Définir le répertoire de travail
WORKDIR /var/www/html

# Exposer le port 9000 pour PHP-FPM
EXPOSE 9000

# Commande par défaut pour démarrer PHP-FPM
CMD ["php-fpm"]
