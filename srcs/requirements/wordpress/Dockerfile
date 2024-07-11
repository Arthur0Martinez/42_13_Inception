FROM debian:11

RUN apt update -y
RUN apt upgrade -y

RUN apt-get install php -y
RUN apt-get install php-fpm -y
RUN apt-get install php-cli -y
RUN apt-get install php-mysql -y
RUN apt-get install php-cgi -y
RUN apt-get install wget -y
RUN apt-get install w3m -y
RUN apt install iputils-ping -y


RUN wget https://fr.wordpress.org/wordpress-6.5.2-fr_FR.tar.gz -P /var/www
RUN cd /var/www && tar -xzf wordpress-6.5.2-fr_FR.tar.gz
RUN rm /var/www/wordpress-6.5.2-fr_FR.tar.gz
RUN chown -R www-data:www-data /var/www/wordpress
RUN mkdir /run/php
RUN chown www-data:www-data /run/php

RUN wget -O wp-cli.phar https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp
RUN chmod 755 /usr/local/bin/wp
RUN chmod 755 /usr/local/bin
RUN chmod 755 /usr/local
RUN chmod 755 /usr

RUN echo "127.0.0.1   artmarti.42.fr" | tee -a /etc/hosts > /dev/null

COPY ./conf/www.conf /etc/php/7.4/fpm/pool.d/www.conf
COPY ./conf/php.ini /etc/php/7.4/fpm/php.ini
RUN find . -name "wp-config*"
RUN chown -R www-data:www-data /var/www/
RUN chmod -R 755 /var/www/
RUN chown -R www-data:www-data /var/www/wordpress
RUN chmod -R 755 /var/www/wordpress

RUN usermod -aG www-data root 

RUN sleep 7

COPY ./tools/config.sh .
RUN chmod 755 /var
RUN chmod 755 /var/www
RUN chmod 755 /var/www/wordpress
RUN chmod 755 /var/www/wordpress/*
RUN ls /var/www/wordpress

EXPOSE 9000

CMD [ "bash", "config.sh" ]

