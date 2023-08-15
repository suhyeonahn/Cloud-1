FROM debian:buster
LABEL org.opencontainers.image.authors="suahn@student.42.fr"
LABEL description="phpMyAdmin"

RUN apt-get update \
    && apt-get upgrade -y \
    && apt-get install -y sudo wget unzip vim ca-certificates apt-transport-https gnupg lsb-release \
    && wget -q https://packages.sury.org/php/apt.gpg -O- | apt-key add - \
    && echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/php.list \
    && apt-get update \
    && apt-get install -y php8.2 php8.2-mysqli php8.2-mbstring

# Download and set up phpMyAdmin
RUN wget -P /var/www https://files.phpmyadmin.net/phpMyAdmin/5.2.1/phpMyAdmin-5.2.1-all-languages.zip \
    && unzip /var/www/phpMyAdmin-5.2.1-all-languages.zip -d /var/www/ \
    && ln -s /var/www/phpMyAdmin-5.2.1-all-languages /var/www/html/myadmin \
    && rm /var/www/html/myadmin/config.sample.inc.php

WORKDIR /var/www/html/myadmin

COPY config/config.inc.php .
COPY config/test.php .

# Expose port
EXPOSE 8080/tcp

# Start phpMyAdmin server
CMD ["php", "-S", "0.0.0.0:8080", "-t", "/var/www/html"]
