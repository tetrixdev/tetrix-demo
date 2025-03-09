#!/bin/sh

# Generate the backup filename with timestamp
filename="/backups/backup_$(date +'%Y%m%d_%H%M').sql"

# Dump the database to an SQL file
mariadb-dump "$(cat /root/.my.cnf | grep -oP '(?<=#database=)\S*')" > "$filename"

# Compress the SQL file
gzip "$filename"

# Remove backups older than 1 day
find /backups -type f -mtime +1 -delete