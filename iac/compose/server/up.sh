#!/bin/bash

# Traverse down to root folder
internal_traversetoartisanfile

# Get the set version
sudo docker compose pull

# Get image name
full_image_name=$(grep -om 1 'image:\s*\S*' compose.yml | sed 's/image: //')
image_name=$(echo "$full_image_name" | sed -E 's|.*/([^:]+):.*|\1|')

# Check if container is running
if sudo docker ps --format '{{.Names}}' | grep -q "$image_name"; then
    echo "Containers are running, proceeding with maintenance mode check..."

    # Get the running PHP container's image version
    running_full_image_name=$(sudo docker inspect --format='{{.Config.Image}}' $image_name)

    # Check if the running container matches the specified version
    if [[ "$full_image_name" == "$running_full_image_name" ]]; then
        read -p "The running container version matches the specified version. Are you sure you want to reboot? (y/n): " confirm
        if [[ "$confirm" != "y" ]]; then
            echo "Aborting script as per user request."
            exit 0
        fi
    fi

    # Check maintenance mode
    if internal_artisan down | grep -q "Application is already down."; then
        echo "Already in maintenance mode, continuing..."
    else
        # Application is not in maintenance mode, put it down
        echo "Entering maintenance mode and sleeping for 10 seconds..."
        sleep 10 # Sleep for 10 seconds to wait for commands to finish
    fi
else
    echo "Containers is not running; skipping maintenance mode."
fi

sudo docker compose down
sudo docker compose up --wait -d --build --force-recreate && \
internal_artisan migrate --force && \
internal_artisan optimize:clear && \
internal_artisan config:cache && \
internal_artisan clear-compiled && \
#internal_artisan cachebuster:bust && \
#internal_artisan translator:load && \
#internal_artisan translator:flush && \
internal_artisan queue:restart && \
internal_artisan up

# Cleaning up older images so they don't claim disk space
sudo docker system prune -af