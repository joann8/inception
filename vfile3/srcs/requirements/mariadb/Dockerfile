FROM debian:buster

ADD ./conf /tmp/
ADD ./tools /init_tools/

RUN apt-get update && apt-get install -y mariadb-server mariadb-client dumb-init

RUN chmod 111 ./init_tools/db_setup.sh

#RUN mv ./tmp/my.cnf /etc/mysql/my.cnf 
#RUN chmod 0444 /etc/mysql/my.cnf

RUN	sed -i 's/\#port/port/' /etc/mysql/mariadb.conf.d/50-server.cnf
RUN sed -i 's/127.0.0.1/0.0.0.0/' /etc/mysql/mariadb.conf.d/50-server.cnf

ENTRYPOINT ["/usr/bin/dumb-init"]

EXPOSE 3306

CMD ["./init_tools/db_setup.sh"]
