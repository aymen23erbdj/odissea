#!/bin/bash

# Exemple invocació: ./update_app_from_parent.sh

version=20.10.28

git clone https://github.com/projectestac/agora_moodle2.git moodle_new

pushd moodle_new
git checkout -b aws origin/aws
git submodule update --recursive --init
echo 'Submòduls actualitzats'
read -p "Continuar? <prem una tecla> " -n 1 -r
echo    # (optional) move to a new line
find . -name '\.git*' -exec rm -rf {} \;
popd

mv html html2
mv moodle_new html

cp html2/settings.php html/settings.php
cp html2/.htaccess html/.htaccess

cp html2/config.php html/config.php
cp html2/CHANGES.txt html/CHANGES.txt

cp -Rp html2/auth/odissea html/auth/odissea
cp -Rp html2/blocks/configurable_reports html/blocks/configurable_reports
cp -Rp html2/admin/tool/odisseagtafsync html/admin/tool/odisseagtafsync

rm html/site-config.php
rm html/config-mysql.php
rm html/config-pgsql.php

rm -Rf html2
