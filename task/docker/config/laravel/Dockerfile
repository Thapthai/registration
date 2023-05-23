FROM php:8.2-fpm-alpine

#update timezone
RUN ln -sf /usr/share/zoneinfo/Asia/Bangkok /etc/localtime

RUN apk update
RUN apk add --no-cache \
    curl git zip libzip-dev \
    libpq libpq-dev \
    libjpeg-turbo-dev libpng libpng-dev

RUN docker-php-ext-configure gd --with-jpeg
RUN docker-php-ext-install pdo pdo_pgsql gd zip

#RUN pecl install -o -f redis \
#    &&  rm -rf /tmp/pear \
#    &&  docker-php-ext-enable redis

#####################################
# Composer:
#####################################
COPY --from=composer /usr/bin/composer /usr/bin/composer

#RUN usermod -u 1000 www-data
WORKDIR /var/www

#####################################
# custom start command
#####################################
COPY start.sh /usr/local/bin/start
RUN chmod u+x /usr/local/bin/start

#####################################
# Other php ini config:
#####################################
COPY custom_config.ini /usr/local/etc/php/conf.d/custom_config.ini

EXPOSE 9000

CMD [ "sh", "/usr/local/bin/start" ]
