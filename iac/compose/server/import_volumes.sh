#!/bin/bash

# Set your project name here
PROJECT_NAME="tetrix-demo"

# Check if any containers with the project name are currently running
check_containers_running() {
    local running_containers
    running_containers=$(docker ps --filter "name=${PROJECT_NAME}" --format "{{.Names}}")

    if [ -n "$running_containers" ]; then
        echo "Error: Containers with the project name are still running:"
        echo "$running_containers"
        exit 1
    fi
}

# Function to restore a specific volume from a backup
restore_volume() {
    local volume_name="${PROJECT_NAME}-$1"
    local backup_file="${PROJECT_NAME}_$1.tar.gz"

    if [ ! -f "$backup_file" ]; then
        echo "Error: Backup file $backup_file not found."
        exit 1
    fi

    docker run --rm -v "${volume_name}":/data -v "$(pwd)":/backup busybox sh -c "rm -rf /data/* && tar xzvf /backup/${backup_file} -C /data"
}

# Check if containers are running
check_containers_running

# Restore each fixed volume
restore_volume "mariadb"
restore_volume "redis"
restore_volume "storage"

echo "Restoration completed."
