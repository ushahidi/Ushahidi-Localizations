#!/bin/bash
# Run php2po conversion on en_US and then sync the generated po file to github for transifex to pick it up

cd `dirname $0`/..

echo "Pulling in latest changes from github..."
git pull rjmackay master

# generate the po files for en_US so transifex can pick it up
echo "Generating po files for en_US..."
php2po -P -t en_US/ en_US/ po/po-en_US

# add any new file generated
git add po/po-en_US

echo "Commiting changes..."
git commit -am 'Generate daily po for en_US'

echo "Pushing changes to github repo..."
git push rjmackay

echo "Pushing changes to transifex"
tx push -s -l en_US po/po-en_US

echo "Done!"
