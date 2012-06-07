#!/bin/bash
# Run php2po conversion on all languages

cd `dirname $0`/..
for dir in `find . -maxdepth 1 -mindepth 1 -type d ! -name tools ! -name po ! -name .tx ! -name .git ! -name en_US ! -name pr_US -exec basename '{}' \;`
do
	echo "Processing $dir"
	php2po -t en_US/ "$dir/" "po/po-$dir"
done