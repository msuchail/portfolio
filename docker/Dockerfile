FROM node:22.9 as nodebuilder

WORKDIR /app
COPY . .
RUN rm -rf node_modules

RUN npm install
RUN npm run build

