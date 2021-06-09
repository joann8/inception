FROM debian:buster

ADD ./conf /init_container/
ADD ./tools /init_setup/

RUN apt-get update && apt-get install -y mariadb-server mariadb-client

RUN chmod +x ./init_setup/db_setup.sh
RUN rm /etc/mysql/my.cnf 
RUN mv /init_container/my.cnf /etc/mysql/my.cnf
RUN chmod 0444 /etc/mysql/my.cnf

ENTRYPOINT ["./init_setup/db_setup.sh"]

EXPOSE 3306
