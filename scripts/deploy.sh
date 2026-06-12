#!/bin/bash
set -euo pipefail

# リポジトリルートから実行することを保証する
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
  --exclude ".DS_Store" \
  --exclude "scripts/" \
  --exclude ".env" \
  ./ "$REMOTE"

echo "STYLE deploy done."
