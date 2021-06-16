#!/bin/bash

#service mysql start

#sleep 5

#
#echo "CREATE DATABASE IF NOT EXISTS $MYSQL_DATABASE DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci" | mysql -u root -p newpass
#echo "CREATE USER IF NOT EXISTS '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD'" | mysql -u root
#echo "GRANT ALL ON $MYSQL_DATABASE .* TO '$MYSQL_USER'@'%'" | mysql -u root
#echo "CREATE USER IF NOT EXISTS 'jacher'@'%' IDENTIFIED BY 'jacher_password'" | mysql -u root 

#service mysql stop

exec /usr/bin/mysqld_safe 
#exec /usr/bin/mysqld 
