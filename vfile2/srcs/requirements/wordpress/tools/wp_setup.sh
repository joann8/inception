#!bin/bash
sed -i -e "s|MYSQL_DATABASE|'$MYSQL_DATABASE'|g" ./init_container/wp-config.php
sed -i -e "s|MYSQL_USER|'$MYSQL_USER'|g" ./init_container/wp-config.php
sed -i -e "s|MYSQL_PASSWORD|'$MYSQL_PASSWORD'|g" ./init_container/wp-config.php
sed -i -e "s|;daemonize = yes|daemonize = no|g" ./etc/php/7.3/fpm/php-fpm.conf
mv ./init_container/wp-config.php ./www/
mkdir -p /run/php/
/usr/sbin/php-fpm7.3
