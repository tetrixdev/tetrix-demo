#NginxVersion | The value here should be updated if a different NginxVersion should be used, not extra comment is needed in this case.
FROM nginx:1.27@sha256:baa881b012a49e3c2cd6ab9d80f9fcd2962a98af8ede947d0ef930a427b28afc

# Installing Tools which we like to use in the container
RUN apt-get update && \
    apt-get install -y nano ncdu

# Copy over the necessary files
COPY iac/containers/nginx/shared/conf.d/default.conf /etc/nginx/conf.d/default.conf
COPY --chown=www-data:www-data ./public /var/www/public

RUN ln -s /mnt/docker/storage/app/public /var/www/public/storage