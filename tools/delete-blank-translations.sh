#!/bin/bash
# Quick and dirty script to delete blank translations

FILES=`grep "array();" */*.php | cut -d: -f1`
for i in $FILES; do
	temp=`echo $i | sed s/.php//g`
	LANG=`echo $temp | cut -d\/ -f1`
	FILE=`echo $temp | cut -d\/ -f2`
	echo "tx delete -l $LANG -r ushahidi-localizations.$FILE --force"
	tx delete -l $LANG -r "ushahidi-localizations.$FILE" --force
done
