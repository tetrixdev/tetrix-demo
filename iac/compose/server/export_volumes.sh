#!/bin/bash

# Set your project name here
PROJECT_NAME="tetrix-demo"

# Check if any containers with the project name are still running
check_containers_running() {
    local running_containers
    running_containers=$(docker ps --filter "name=${PROJECT_NAME}" --format "{{.Names}}")

    if [ -n "$running_containers" ]; then
        echo "Error: Containers with the project name are still running:"
        echo "$running_containers"
        exit 1
    fi
}

# Function to create a backup for a specific volume
backup_volume() {
    local volume_name="${PROJECT_NAME}-$1"
    local backup_file="${PROJECT_NAME}_$1.tar.gz"

    docker run --rm -v "${volume_name}":/data -v "$(pwd)":/backup busybox tar czvf "/backup/${backup_file}" -C /data .
}

# Check if containers are running
check_containers_running

# Backup each fixed volume
backup_volume "mariadb"
backup_volume "redis"
backup_volume "storage"

echo "Backups completed."
