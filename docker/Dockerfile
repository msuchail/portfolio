FROM node:22.9 as nodebuilder

WORKDIR /app
COPY . .

RUN npm install
RUN npm run build

FROM serversideup/php:8.3-fpm-nginx as runner

USER root

RUN apt update

COPY  --chown=www-data:www-data --from=nodebuilder /app/ /var/www/html/
RUN composer install

USER www-data


