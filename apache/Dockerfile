FROM php:7.4-apache
COPY . .
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli
EXPOSE 8080
CMD ["php","index.php"]