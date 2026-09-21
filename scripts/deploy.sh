#!/bin/bash
set -euo pipefail

cd "$(dirname "$0")/.."

REMOTE="style-deploy:/home/kubokuboben/okayama-style.com/public_html/"

echo "Deploy STYLE to ${REMOTE}"

if [ "$#" -gt 0 ]; then
  for file in "$@"; do
    case "$file" in
      index.html|recruit.html|assets/*) ;;
      *) echo "Unsupported deploy path: $file" >&2; exit 1 ;;
    esac
    case "/$file/" in
      */../*|*/./*) echo "Invalid deploy path: $file" >&2; exit 1 ;;
    esac
    test -f "$file"
    git ls-files --error-unmatch -- "$file" > /dev/null
  done
  printf 'Deploy selected file: %s\n' "$@"
fi

read -p "Type STYLE to continue: " CONFIRM

if [ "$CONFIRM" != "STYLE" ]; then
  echo "Cancelled."
  exit 1
fi

if [ "$#" -gt 0 ]; then
  rsync -avzR -- "$@" "$REMOTE"
  echo "STYLE selected-file deploy done."
  exit 0
fi

rsync -avz --delete \
  --exclude ".git/" \
  --exclude ".claude/" \
  --exclude ".playwright-cli/" \
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
