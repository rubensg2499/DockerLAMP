ARG PHP_APACHE_VERSION
FROM ${PHP_APACHE_VERSION}

RUN apt-get update --fix-missing
RUN apt-get install -y build-essential libssl-dev zlib1g-dev libpng-dev libjpeg-dev libfreetype6-dev

# install zip extension
RUN apt-get install -y libzip-dev && docker-php-ext-install zip

# install mysql extension
RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN a2enmod rewrite
RUN a2enmod headers