#!/bin/bash
# Run po2php conversion on all languages

cd `dirname $0`/..
for dir in `find . -maxdepth 1 -mindepth 1 -type d ! -name tools ! -name po ! -name .tx ! -name .git ! -name en_US ! -name pr_US -exec basename '{}' \;`
do
	echo "Processing $dir"
	po2php -t en_US/ "po/po-$dir" "$dir/"
done