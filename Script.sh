#!/bin/bash

echo "🚀 Starting deployment process..."

# Define variables
PROJECT_DIR="/home/weberqbot/orbits/stm.org"
CONTAINER_NAME="stm.weberq.in"
IMAGE_NAME="stm-image"

echo "🧹 Cleaning up old build (if any)..."
docker stop $CONTAINER_NAME 2>/dev/null || echo "No running container to stop."
docker rm $CONTAINER_NAME 2>/dev/null || echo "No container to remove."
docker rmi $IMAGE_NAME 2>/dev/null || echo "No old image to remove."

echo "📦 Pulling latest changes from Git..."
cd "$PROJECT_DIR" || { echo "❌ Failed to change directory."; exit 1; }

git pull || {
  echo "Git pull failed, attempting to add safe directory..."
  git config --global --add safe.directory "$PROJECT_DIR" && git pull || {
    echo "❌ Git pull failed again. Exiting."
    exit 1
  }
}

echo "🐳 Building Docker image..."
docker build -t $IMAGE_NAME . || { echo "❌ Docker build failed."; exit 1; }

echo "🚢 Starting new Docker container..."
docker run -d -p 8081:80 --name $CONTAINER_NAME $IMAGE_NAME || {
  echo "❌ Failed to start container."; exit 1
}

echo "✅ Deployment complete!"
