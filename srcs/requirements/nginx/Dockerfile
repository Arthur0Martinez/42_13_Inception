FROM debian:11

RUN apt update -y
RUN apt upgrade -y
RUN apt install nginx -y
RUN apt install openssl -y
RUN apt install iputils-ping -y

RUN echo "127.0.0.1    artmarti.42.fr" | tee -a /etc/hosts > /dev/null

RUN mkdir /etc/certs && mkdir /etc/certs/tls
RUN openssl req -new -newkey rsa:4096 -x509 -nodes -keyout \
    etc/certs/tls/inception.key -out etc/certs/tls/inception.csr \
    -subj "/C=FR/ST=PO/L=Perpignan/O=42/OU=42Perpignan/CN=artmarti.42.fr/UID=login"

RUN chmod 755 /var/www/html
RUN chown -R www-data:www-data /var/www/html
COPY ./conf/default.conf /etc/nginx/sites-available/default

EXPOSE 443

CMD [ "nginx", "-g", "daemon off;" ]