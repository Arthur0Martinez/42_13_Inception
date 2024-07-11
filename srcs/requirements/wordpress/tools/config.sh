#!/bin/bash

echo "File started normally"

sleep 25

echo "Connecting to database..."

sed -i "s/database_name_here/$MYSQL_DATABASE/g" /var/www/wordpress/wp-config-sample.php
sed -i "s/localhost/$MYSQL_HOSTNAME/g" /var/www/wordpress/wp-config-sample.php
sed -i "s/username_here/$MYSQL_ROOT_USER/g" /var/www/wordpress/wp-config-sample.php
sed -i "s/password_here/$MYSQL_ROOT_PASSWORD/g" /var/www/wordpress/wp-config-sample.php
cp /var/www/wordpress/wp-config-sample.php /var/www/wordpress/wp-config.php
cp /var/www/wordpress/wp-config.php wp-config.php

cd /var/www/wordpress

echo "Done."

echo "Creating users..."
sleep 2

wp user create $WP_ROOT_USER $WP_ROOT_MAIL --role=administrator --user_pass=$WP_ROOT_PASSWORD --allow-root
wp user create $WP_USER $WP_MAIL --role=author --user_pass=$WP_PASSWORD --allow-root

echo "Done."

echo "All command executed, starting php"

/usr/sbin/php-fpm7.4 -F

echo "Done."
