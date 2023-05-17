FROM php:8.1-apache
RUN yum update -y 
RUN yum install -y zip unzip
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer

COPY src/ /var/www/html
WORKDIR /var/www/html

RUN composer require sentry/sdk

EXPOSE 80
