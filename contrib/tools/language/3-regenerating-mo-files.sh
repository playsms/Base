#!/bin/bash

PLAYSMS=$1

if [ -z "$PLAYSMS" ]; then
	PLAYSMS=../../..
fi

if [ ! -d "$PLAYSMS/web" ]; then
	echo "Error. Usage: $(basename $0) <playSMS source dir>"
	exit 1
fi

set -e

rm -f /tmp/.lang_folders >/dev/null 2>&1
touch /tmp/.lang_folders

find $PLAYSMS/storage/application/plugin/core/ -type d -name "language" | grep -v "grep" | sed -e "s/\/[^\/]*$//" >> /tmp/.lang_folders
find $PLAYSMS/storage/application/plugin/feature/ -type d -name "language" | grep -v "grep" | sed -e "s/\/[^\/]*$//" >> /tmp/.lang_folders
find $PLAYSMS/storage/application/plugin/gateway/ -type d -name "language" | grep -v "grep" | sed -e "s/\/[^\/]*$//" >> /tmp/.lang_folders
find $PLAYSMS/storage/application/plugin/themes/ -type d -name "language" | grep -v "grep" | sed -e "s/\/[^\/]*$//" >> /tmp/.lang_folders

for i in `cat /tmp/.lang_folders` ; do
	for j in `ls -1 "$i/language/" | grep '_'` ; do
		mkdir -p "$i/language/$j/LC_MESSAGES"
		touch "$i/language/$j/LC_MESSAGES/messages.po"
		msgfmt -vv "$i/language/$j/LC_MESSAGES/messages.po" -o "$i/language/$j/LC_MESSAGES/messages.mo"
	done
done

rm -f /tmp/.lang_folders >/dev/null 2>&1

exit 0
