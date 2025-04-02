#!/bin/bash

echo "🚀 Starting deployment process..."

# Define variables
PROJECT_DIR="/home/weberqbot/orbits/stm.org"
CONTAINER_NAME="stm.weberq.in"
IMAGE_NAME="stm-image"

echo "📁 Changing to project directory..."
cd "$PROJECT_DIR" || { echo "❌ Failed to change directory."; exit 1; }

echo "📦 Pulling latest changes from Git..."
git pull || {
  echo "Git pull failed, attempting to add safe directory..."
  git config --global --add safe.directory "$PROJECT_DIR" && git pull || {
    echo "❌ Git pull failed again. Exiting."
    exit 1
  }
}

# Detect changes that require a Docker rebuild
echo "🔍 Checking for changes that require a Docker rebuild..."
CHANGED_FILES=$(git diff --name-only HEAD@{1} HEAD)

if echo "$CHANGED_FILES" | grep -qE 'Dockerfile|composer.json|composer.lock'; then
  echo "📦 Changes detected in Dockerfile or composer files. Rebuilding image..."

  echo "🧹 Cleaning up old Docker container and image (if any)..."
  docker stop $CONTAINER_NAME 2>/dev/null || echo "No running container to stop."
  docker rm $CONTAINER_NAME 2>/dev/null || echo "No container to remove."
  docker rmi $IMAGE_NAME 2>/dev/null || echo "No old image to remove."

  echo "🐳 Building Docker image..."
  docker build -t $IMAGE_NAME . || { echo "❌ Docker build failed."; exit 1; }

  echo "🚢 Starting Docker container..."
  docker run -d -p 8081:80 --name $CONTAINER_NAME $IMAGE_NAME || {
    echo "❌ Failed to start container."; exit 1
  }

  echo "✅ Deployment complete with full rebuild!"
else
  echo "✅ No changes requiring Docker rebuild. Syncing updated code into container..."

  echo "📦 Copying updated code into running container..."
  docker cp . $CONTAINER_NAME:/var/www/html || {
    echo "❌ Failed to copy updated files to container."; exit 1;
  }

  echo "🔁 Restarting container to reflect changes..."
  docker restart $CONTAINER_NAME || {
    echo "❌ Failed to restart container."; exit 1;
  }

  echo "✅ Code sync complete without rebuild!"
fi
