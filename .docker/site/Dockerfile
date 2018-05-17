FROM php:7.2-apache
RUN apt-get update
RUN apt-get install -y curl libmcrypt-dev libc6 libstdc++6
RUN apt-get update
RUN apt-get install -y libcurl4-gnutls-dev libexpat1-dev gettext libz-dev libssl-dev git

RUN pecl install xdebug-2.6.0 && docker-php-ext-enable xdebug

RUN apt-get install -y locales \
        && echo "en_US.UTF-8 UTF-8" > /etc/locale.gen \
        && locale-gen

# Install Heroku CLI
RUN apt-get install -y gnupg gnupg2 gnupg1 wget
RUN wget -qO- https://cli-assets.heroku.com/install-ubuntu.sh | sh

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_DISABLE_XDEBUG_WARN 1

WORKDIR /var/www/sdk

CMD ["apache2-foreground"]