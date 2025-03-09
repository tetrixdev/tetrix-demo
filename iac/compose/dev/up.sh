#!/bin/bash

internal_traversetoartisanfile && \
internal_npminstall
docker compose up --wait -d --build --force-recreate
internal_composer install
internal_composer dump-autoload -o
internal_artisan migrate --force
internal_artisan optimize:clear
internal_artisan config:cache
#internal_artisan cachebuster:bust && \
#internal_artisan translator:load && \
#internal_artisan translator:flush && \
internal_artisan queue:restart