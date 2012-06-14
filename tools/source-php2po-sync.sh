#!/bin/bash
# Run php2po conversion on en_US and then sync the generated po file to github for transifex to pick it up

cd `dirname $0`/..

echo "Pulling in latest changes from github..."
git pull

# generate the pot files for en_US so transifex can pick it up
echo "Generating po files for en_US..."
php2po -P -t en_US/ en_US/ po/po-en_US

# add any new file generated
git add po/po-en_US

echo "Commiting changes..."
git commit -m 'Generate daily po for en_US'

echo "Pushing changes to github repo..."
git push

# Push changes to transifex
# Don't need to specify language here, transifex knows the source language is english
echo "Pushing changes to transifex"
tx push -s --skip

echo "Done!"
