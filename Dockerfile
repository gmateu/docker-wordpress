FROM wordpress:php7.1-apache
COPY themes /var/www/html/wp-content/themes/
COPY mu-plugins /var/www/html/wp-content/mu-plugins