FROM debian:buster

ADD ./conf /init_container
ADD ./tools /init_setup

RUN apt-get update

RUN apt install -y \
	php7.3-fpm \
	hp7.3-mysql \
	curl \
	dumb-init

RUN echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf

RUN curl -LO https://wordpress.org/latest.tar.gz \
		&& tar xzvf latest.tar.gz

ENTRYPOINT ["usr/bin/dumb-init"]

EXPOSE 9000

CMD ["bash", "./init_setup/wp_setup.sh"]
