FROM debian:buster

ADD ./conf /init_conf
ADD ./tools /init_tools

RUN apt-get update

RUN apt install -y \
	php-fpm \
	php-mysql \
	curl \
	dumb-init \
	tar

RUN echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf

RUN curl -LO https://wordpress.org/latest.tar.gz \
		&& tar xzf latest.tar.gz

ENTRYPOINT ["usr/bin/dumb-init"]

EXPOSE 9000

CMD ["bash", "./init_tools/wp_setup.sh"]
