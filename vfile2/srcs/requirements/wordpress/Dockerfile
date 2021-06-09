FROM debian:buster

ADD ./conf /init_container
ADD ./tools /init_setup

RUN apt-get update

RUN apt install -y \
	php7.3-fpm \
	php7.3-common \
	hp7.3-mysql \
	php7.3-gmp \
	php7.3-curl \
	php7.3-intl \
	php7.3-mbstring \
	php7.3-xmlrpc \
	php7.3-gd \
	php7.3-xml \
	php7.3-cli \
	php7.3-zip \
	php7.3-soap \
	php7.3-imap
RUN apt install sudo
RUN mkdir -p /www
RUN chown -R www-data:www-data /www
RUN chmod -R 755 /www
RUN chmod +x ./init_setup/wp_setup.sh
RUN rm /etc/php/7.3/fpm/pool.d/www.conf && mv /init_container/www.conf /etc/php/7.3/fpm/pool.d/www.conf

ENTRYPOINT ./init_setup/wp_setup.sh

EXPOSE 9000
