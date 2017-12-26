FROM php:7.2-apache

RUN apt-get update && apt upgrade -y
RUN apt install -y libxml2-dev
RUN docker-php-ext-install pdo pdo_mysql
RUN a2enmod rewrite

# SSL
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/ssl-cert-snakeoil.key -out /etc/ssl/certs/ssl-cert-snakeoil.pem -subj "/C=AT/ST=Vienna/L=Vienna/O=Security/OU=Development/CN=example.com"

RUN a2enmod ssl
RUN a2ensite default-ssl

EXPOSE 80
EXPOSE 443

CMD /usr/sbin/apache2ctl -D FOREGROUND
