FROM debian:buster
LABEL org.opencontainers.image.authors="suahn@student.42.fr"
LABEL description="Nginx Server"
#INSTALL NGINX & OPENSSL
RUN apt-get update \
    && apt-get upgrade -y \
    && apt-get install -y nginx \
    && apt-get install -y openssl
#CONFIG NGINX & SSL
COPY conf/nginx.conf /etc/nginx/
RUN rm /etc/nginx/sites-enabled/default
COPY conf/suahn.42.fr /etc/nginx/sites-enabled/
RUN mkdir -p /etc/nginx/ssl \
    && openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout \
    /etc/nginx/ssl/ssl_cert.key -out /etc/nginx/ssl/ssl_cert.crt \
    -subj "/C=FR/ST=Paris/L=Paris/O=42 School/OU=Suahn/CN=localhost/EA=suahn@student.42.fr"

EXPOSE 443/tcp

#TEST CONFIG SYNTAX
#RUN nginx -t

#The web server can access any file that www-data can access.
WORKDIR /var/www/html
RUN chown -R www-data:www-data *
RUN chmod -R 755 *

WORKDIR /etc/nginx/sites-enabled

#run in debug mode (foreground)
CMD ["/usr/sbin/nginx", "-g", "daemon off;"]