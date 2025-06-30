#!/bin/bash

# Lokala källmappen (ändra efter din setup)
LOCAL_DIR="/mnt/c/xampp/htdocs/Portfolio/"

# Fjärrmapp på servern (ändra efter din setup)
REMOTE_DIR="s137149@keshti.se:/home/s137149/domains/keshti.se/public_html/"

# SSH-port
SSH_PORT=2020

# Fil med mappar/filer som ska ignoreras
EXCLUDE_FILE=".rsync-exclude"

# Kör rsync med exclusions, delete och rätt port
rsync -avz --progress --delete --exclude-from="$EXCLUDE_FILE" -e "ssh -p $SSH_PORT" "$LOCAL_DIR" "$REMOTE_DIR"
