#!/bin/bash

echo "🚀 Starting deployment process..."

CONFIG_REPO_PATH="/home/weberqbot/infra-config"
CONFIG_REPO_URL="git@github.com:weberq/infra-config.git"

# Clone or update the infra-config repo
if [ ! -d "$CONFIG_REPO_PATH/.git" ]; then
  echo "📥 Cloning infra-config repo..."
  git clone "$CONFIG_REPO_URL" "$CONFIG_REPO_PATH"
else
  echo "📦 Updating infra-config repo..."
  cd "$CONFIG_REPO_PATH" && git pull
fi

# Define environment and project
ENVIRONMENT="dev1"  # Change this per server
PROJECT_NAME="stm.weberq.in"

# Path to port registry
PORT_REGISTRY="$CONFIG_REPO_PATH/$ENVIRONMENT/port_registry.txt"

# Load the assigned port for this project
PORT=$(grep "^$PROJECT_NAME=" "$PORT_REGISTRY" | cut -d'=' -f2)

if [ -z "$PORT" ]; then
  echo "❌ Port not defined for $PROJECT_NAME in $PORT_REGISTRY. Exiting."
  exit 1
fi

echo "ℹ️ Using port $PORT for $PROJECT_NAME..."

# Define project details
PROJECT_DIR="/home/weberqbot/orbits/stm.org"
CONTAINER_NAME="$PROJECT_NAME"
IMAGE_NAME="${PROJECT_NAME//./-}-image"

echo "📁 Navigating to project directory..."
cd "$PROJECT_DIR" || { echo "❌ Failed to change directory."; exit 1; }

echo "📦 Pulling latest changes from Git..."
git pull || {
  echo "Git pull failed, attempting to add safe directory..."
  git config --global --add safe.directory "$PROJECT_DIR" && git pull || {
    echo "❌ Git pull failed again. Exiting."
    exit 1
  }
}

# Check for rebuild necessity
CHANGED_FILES=$(git diff --name-only HEAD@{1} HEAD)
if echo "$CHANGED_FILES" | grep -qE 'Dockerfile|composer.json|composer.lock'; then
  echo "📦 Changes detected that require Docker rebuild."

  echo "🧹 Stopping and cleaning old container/image..."
  docker stop $CONTAINER_NAME 2>/dev/null || echo "No running container to stop."
  docker rm $CONTAINER_NAME 2>/dev/null || echo "No container to remove."
  docker rmi $IMAGE_NAME 2>/dev/null || echo "No image to remove."

  echo "🐳 Building Docker image..."
  docker build -t $IMAGE_NAME . || { echo "❌ Docker build failed."; exit 1; }

  echo "🚢 Starting new Docker container on port $PORT..."
  docker run -d -p $PORT:80 --name $CONTAINER_NAME $IMAGE_NAME || {
    echo "❌ Failed to start container."; exit 1
  }

else
  echo "✅ No rebuild required. Syncing code..."

  # Sync code into the container
  docker cp . $CONTAINER_NAME:/var/www/html || {
    echo "❌ Failed to copy updated files to container."; exit 1;
  }

  echo "🔁 Restarting container to apply changes..."
  docker restart $CONTAINER_NAME || {
    echo "❌ Failed to restart container."; exit 1;
  }
fi

echo "✅ Deployment complete!"
