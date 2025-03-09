# MariaDBVersion | The value here should be updated if a different MariaDBVersion should be used.
FROM mariadb:11.4@sha256:fdc72e8f2960d758aa77ebac9ea65028ca195d4cba854a14e4afae703f5f6a22

# Installing Tools which we like to use in the container
RUN apt-get update && \
    apt-get install -y nano ncdu

#Copy over the necessary files
COPY iac/containers/mariadb/shared/mariadb.conf.d/overwrite.cnf /etc/mysql/mariadb.conf.d/overwrite.cnf
COPY --chown=root:crontab iac/containers/mariadb/build/crontabs/root /var/spool/cron/crontabs/root
COPY iac/containers/mariadb/build/create_backup.sh /create_backup.sh

# Install cron to automate the renewal of the certificates.
RUN apt update \
&& apt install cron -y

# Overwrite the original docker-entrypoint so we can start the cron service
COPY iac/containers/mariadb/build/docker-entrypoint-mariadb-custom /usr/local/bin/docker-entrypoint-mariadb-custom
RUN chmod +x /usr/local/bin/docker-entrypoint-mariadb-custom
ENTRYPOINT ["docker-entrypoint-mariadb-custom"]
CMD ["mariadbd"]