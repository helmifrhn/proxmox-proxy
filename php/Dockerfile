FROM php:7.4-fpm
RUN docker-php-ext-install tokenizer mysqli pdo_mysql && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y
RUN mkdir -p /usr/local/lib && curl -sSlL  -o /tmp/ioncube.tar.gz https://downloads.ioncube.com/loader_downloads/ioncube_loaders_lin_x86-64.tar.gz && tar -x --strip-components=1 -C /usr/local/lib -f /tmp/ioncube.tar.gz
RUN echo "zend_extension = /usr/local/lib/ioncube_loader_lin_7.4.so" > $PHP_INI_DIR/conf.d/00-ioncube.ini
