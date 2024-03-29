FROM php:7.3-apache
SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

# timezone environment
ENV TZ=UTC \
  # locale
  LANG=en_US.UTF-8 \
  LANGUAGE=en_US:en \
  LC_ALL=en_US.UTF-8 \
  # composer environment
  COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=/composer

# cake bake command
ENV PATH /work/backend/bin:$PATH

# composer command
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

RUN apt-get update && \
  apt-get -y install libmcrypt-dev git libicu-dev libonig-dev libzip-dev unzip locales && \
  pecl install mcrypt-1.0.3 && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/* && \
  locale-gen en_US.UTF-8 && \
  localedef -f UTF-8 -i en_US en_US.UTF-8 && \
  a2enmod rewrite && \
  docker-php-ext-install intl pdo_mysql zip bcmath && \
  composer config -g process-timeout 3600 && \
  composer config -g repos.packagist composer https://packagist.org

COPY ./infra/docker/php/php.ini /usr/local/etc/php/php.ini
COPY ./infra/docker/apache/httpd.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /work/backend
