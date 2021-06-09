FROM debian:buster

ADD conf/ init_container/
ADD tools/ init_setup/

RUN apt-get update && apt-get -y install -y wget nginx 
RUN apt-get install -y openssl
RUN apt-get install -y dumb-init 

RUN adduser --disabled-password 'www'
RUN mkdir www
RUN chown -R www:www /var/lib/nginx
RUN chown -R www:www /www
RUN mkdir -p /run/nginx
RUN mv ./init_container/nginx.conf ./etc/nginx/nginx.conf


#---SSL Certificate settings
RUN mkdir -p /etc/nginx/ssl
RUN openssl req -newkey rsa:4096 -x509 -sha256 \
	-keyout /etc/ssl/jacher42fr.key -out /etc/ssl/jacher42fr.pem \
	-nodes -days 365 \
	-subj "/C=FR/ST=Valdoise/L=Margency/O=Pineapple_inc/OU=IT/CN=localhost"
#------------------------end

ENTRYPOINT ["dumb-init", "--"]

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
