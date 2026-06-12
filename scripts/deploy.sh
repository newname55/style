#!/bin/bash
set -euo pipefail

cd "$(dirname "$0")/.."

REMOTE="style-deploy:/home/kubokuboben/okayama-style.com/public_html/"

echo "Deploy STYLE to ${REMOTE}"

read -p "Type STYLE to continue: " CONFIRM

if [ "$CONFIRM" != "STYLE" ]; then
  echo "Cancelled."
  exit 1
fi

rsync -avz --delete \
  --exclude ".git/" \
  --exclude ".claude/" \
  --exclude "CLAUDE.md" \
  --exclude "README.md" \
  --exclude ".gitignore" \
  --exclude ".DS_Store" \
  --exclude "scripts/" \
  --exclude ".env" \
  --exclude ".htaccess" \
  --exclude ".user.ini" \
  ./ "$REMOTE"

echo "STYLE deploy done."
