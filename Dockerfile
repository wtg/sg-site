# RPI Student Senate website
#          #WTG
#
# - Keep all themes/plugins/etc 
#   in the dockerfile build, to 
#   update wordpress, rebuild the 
#   docker image
FROM wordpress:latest

COPY ./wp-content /var/ww/html/wp-content

COPY ./wp-config.php /var/www/html/wp-config.php