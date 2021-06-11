FROM debian:buster

ADD ./conf /init_container/
ADD ./tools /init_setup/

RUN apt-get update && apt-get install -y mariadb-server mariadb-client dumb-init

RUN chmod 111 ./init_setup/db_setup.sh
RUN rm /etc/mysql/my.cnf 
RUN mv /init_container/my.cnf /etc/mysql/
RUN chmod 0444 /etc/mysql/my.cnf

ENTRYPOINT ["/usr/bin/dumb-init"]

EXPOSE 3306

CMD ["./init_setup/db_setup.sh"]
