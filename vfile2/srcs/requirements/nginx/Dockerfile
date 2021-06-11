FROM debian:buster

ADD conf/ init_container/

RUN apt-get update && apt-get install -y wget nginx openssl dumb-init 

RUN mv ./init_container/nginx.conf ./etc/nginx/

#---SSL Certificate settings
RUN mkdir -p /etc/nginx/ssl
RUN openssl req -newkey rsa:4096 -x509 -sha256 \
	-keyout /etc/ssl/jacher42fr.key -out /etc/ssl/jacher42fr.pem \
	-nodes -days 365 \
	-subj "/C=FR/ST=Valdoise/L=Margency/O=Pineapple_inc/OU=IT/CN=localhost"
#------------------------end

RUN cp ./init_container/hosts /etc/

ENTRYPOINT ["dumb-init", "--"]

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
