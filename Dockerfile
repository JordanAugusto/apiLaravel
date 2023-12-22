FROM php:8.3-apache

COPY . /var/www/html/

RUN apt-get update && \
    apt-get install -y libzip-dev zip && \
    docker-php-ext-install zip

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-scripts --no-autoloader

RUN php artisan key:generate

RUN composer dump-autoload

RUN php artisan config:cache
RUN php artisan route:cache

EXPOSE 8000

CMD ["apache2-foreground"]
