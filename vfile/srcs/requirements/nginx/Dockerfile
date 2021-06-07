FROM debian:buster

MAINTAINER jacher

RUN apt-get update && apt-get -y install -y wget nginx 
RUN apt-get install -y dumb-init 

ADD conf/ init_container/
RUN mkdir -p /var/www/jacher_inc

#---set up nginx---
#remplace default par notre propre config + update liens symboliques
RUN mv ./init_container/nginx_config /etc/nginx/sites-available/jacher_inc
RUN ln -s /etc/nginx/sites-available/jacher_inc /etc/nginx/sites-enabled/
RUN rm /etc/nginx/sites-enabled/default
#--------------end

#---SSL Certificate settings
RUN mkdir -p /etc/nginx/ssl
RUN openssl req -newkey rsa:4096 -x509 -sha256 \
	-keyout /etc/ssl/jacher_inc.key -out /etc/ssl/jacher_inc.pem \
	-nodes -days 365 \
	-subj "/C=FR/ST=Valdoise/L=Margency/O=Pineapple_inc/OU=IT/CN=localhost"
#------------------------end

ENTRYPOINT ["dumb-init", "--"]

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
