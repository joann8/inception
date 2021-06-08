FROM debian:buster

MAINTAINER jacher

RUN apt-get update && apt-get install -y mariadb-server 

EXPOSE 3306

LABEL version="1.0"
LABEL description="MariaDB Server"

RUN userdel mysql
RUN useradd -u 999 mysql
RUN mkdir -p /data/mysql
RUN chown -R mysql:mysql  /data/mysql


CMD ["mysqld"]
