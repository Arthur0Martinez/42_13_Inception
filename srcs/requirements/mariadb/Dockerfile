FROM debian:11

RUN apt update -y
RUN apt upgrade -y
RUN apt-get install mariadb-server -y
RUN apt install iputils-ping -y

RUN echo "127.0.0.1   artmarti.42.fr" | tee -a /etc/hosts > /dev/null

COPY ./tools/mysql_creation.sh .
COPY ./conf/50-server.cnf ./etc/mysql/mariadb.conf.d/
RUN ls -la /etc/mysql/mariadb.conf.d/
RUN chmod 755 /mysql_creation.sh
RUN chown mysql:mysql /var/lib/mysql
RUN chown root:root /var/lib/mysql
RUN chmod -R 755 /var/lib/mysql

EXPOSE 3306

ENTRYPOINT [ "./mysql_creation.sh" ] 
CMD [ "mysqld_safe" ]