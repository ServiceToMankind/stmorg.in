#!/bin/bash

# Print starting message
echo "I am starting the game now"

mkdir changes

# Check if the directory exists
cd /home/weberqbot/orbits/stm.org || { echo "Error: Failed to change directory. Directory does not exist."; exit 1; }

# mkdir passing-working-fine
# Pull latest changes from git repository with sudo permissions
git pull || {
  echo "Git pull failed due to ownership issues. Adding the directory to safe directories..."
  git config --global --add safe.directory /home/weberqbot/orbits/stm.org || { echo "Error: Failed to add directory to safe list."; exit 1; }
  echo "Retrying git pull..."
  git pull || { echo "Git pull failed again. Please check the repository settings."; exit 1; }
}

