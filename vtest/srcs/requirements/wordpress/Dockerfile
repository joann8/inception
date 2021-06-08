FROM debian:buster

MAINTAINER jacher

RUN apt-get update && apt-get -y install -y \
	wget \
	openssl \
	php-curl \
	php-mysql \
	php-fpm \
	php-gd \
	php-mbstring \
	php-intl \
	php-zip \
	php-xml \
	php-xmlrpc \
	php-soap

RUN wget https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-all-languages.tar.gz

RUN wget https://wordpress.org/latest.tar.gz

ADD conf/ init_wpc/

#---Activate PHP
RUN service php7.3-fpm start
#------------end

#---WordPress
RUN mkdir -p /var/www/inception/wordpress
RUN tar -xzf latest.tar.gz --strip-components 1 -C /var/www/inception/wordpress
RUN rm latest.tar.gz
RUN mv /init_wpc/wp-config.php /var/www/inception/wordpress

#ajout de mon contenu
#RUN mysql -u root < /init_wpc/localsite.sql
#RUN mkdir -p /var/www/inception/wordpress/wp-content/uploads/2021/06
#RUN mv /init_wpc/giphy.gif /var/www/inception/wordpress/wp-content/uploads/2021/06/
#--------end

#----Php
RUN mkdir -p /var/www/inception/phpMyAdmin
RUN tar -xzf phpMyAdmin-latest-all-languages.tar.gz --strip-components 1 -C /var/www/inception/phpMyAdmin
RUN rm phpMyAdmin-latest-all-languages.tar.gz
RUn mv ./init_wpc/config.inc.php /var/www/inception/phpMyAdmin
#---end

RUN userdel www-data
RUN useradd -u 82 www-data
RUN mkdir -p /data/html
RUN chown -R www-data:www-data /data/html

EXPOSE 9000
EXPOSE 3306

CMD ["bash"]
