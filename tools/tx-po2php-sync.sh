#!/bin/bash
# Get latest translations from transifex, run po2php conversion on translations and push to github

cd `dirname $0`/..

echo "Pulling in latest changes from github..."
git pull

echo "Pulling changes from transifex"
# might need --force and --skip
tx pull

# generate the php files from transifex po files
echo "Generating php files from translations..."
tools/run-all-po2php.sh

# add any new file generated
git add .

echo "Commiting changes..."
git commit -am 'Daily update from transifex'

echo "Pushing changes to github repo..."
git push

echo "Done!"
