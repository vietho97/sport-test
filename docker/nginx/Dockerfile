FROM nginx:latest

COPY ./nginx.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www

EXPOSE 80 81 443
CMD ["nginx", "-g", "daemon off;"]