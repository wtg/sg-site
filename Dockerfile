# RPI Student Senate website
#          #WTG
#
# - Keep all themes/plugins/etc 
#   in the dockerfile build, to 
#   update wordpress, rebuild the 
#   docker image
FROM wordpress:latest

COPY ./wp-config.php /var/www/html/wp-config.php

RUN ls /usr/src/wordpress

COPY copywp.sh .

RUN sh copywp.sh

COPY ./wp-content /var/www/html/wp-content
