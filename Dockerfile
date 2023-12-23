FROM php:8.3-apache

COPY . /var/www/html/

RUN apt-get update && \
    apt-get install -y libzip-dev zip && \
    docker-php-ext-install zip && \
    chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    echo "DefaultRuntimeDir /var/run/apache2" >> /etc/apache2/apache2.conf && \
    service apache2 restart && \
    composer install --no-scripts --no-autoloader && \
    php artisan key:generate && \
    composer dump-autoload && \
    php artisan config:cache && \
    php artisan route:cache

EXPOSE 8000

CMD ["apache2-foreground"]
