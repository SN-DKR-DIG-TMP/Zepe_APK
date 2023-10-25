FROM php:7.2-apache
COPY . /var/www/html/
RUN chown www-data:www-data -R /var/www/html/
RUN sed -i 's/post_max_size \= .M/post_max_size \= 65M/g' /usr/local/etc/php/php.ini-development;\
 sed -i 's/upload_max_filesize \= .M/upload_max_filesize \= 65M/g' /usr/local/etc/php/php.ini-development
RUN sed -i 's/post_max_size \= .M/post_max_size \= 65M/g' /usr/local/etc/php/php.ini-production; \
    sed -i 's/upload_max_filesize \= .M/upload_max_filesize \= 65M/g' /usr/local/etc/php/php.ini-production
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"