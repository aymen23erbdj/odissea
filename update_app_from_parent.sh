#!/bin/bash

# Exemple invocació: ./update_app_from_parent.sh

version=20.10.28

git clone https://github.com/projectestac/agora_moodle2.git html_new

pushd html_new
git checkout -b aws origin/aws
git submodule update --recursive --init
echo 'Submòduls actualitzats'
read -p "Continuar? <prem una tecla> " -n 1 -r
echo    # (optional) move to a new line
find . -name '\.git*' -exec rm -rf {} \;
popd

mv html html_old
mv html_new html

cp html_old/settings.php html/settings.php
cp html_old/.htaccess html/.htaccess

cp html_old/config.php html/config.php
cp html_old/CHANGES.txt html/CHANGES.txt

cp -Rp html_old/auth/saml2 html/auth/saml2
cp -Rp html_old/blocks/configurable_reports html/blocks/configurable_reports
cp -Rp html_old/admin/tool/odisseagtafsync html/admin/tool/odisseagtafsync

rm html/site-config.php
rm html/config-mysql.php
rm html/config-pgsql.php

rm -Rf html_old
