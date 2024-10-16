FROM php:8.1-apache

COPY . /var/www/html/

COPY apache.conf /etc/apache2/sites-available/000-default.conf

RUN chmod -R 755 /var/www/html

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
