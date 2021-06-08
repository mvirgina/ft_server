#!/bin/bash

nginx_file='/etc/nginx/sites-available/default'

if grep "autoindex on;" "$nginx_file"; then
	echo "Current autoindex status: ON"
	sed -i 's/autoindex on/autoindex off/' "$nginx_file"
	autoindex="OFF";
else
	echo "Current autoindex status: OFF"
	sed -i "s/autoindex off/autoindex on/" "$nginx_file"
	autoindex="ON";
fi
echo "Restarting the server"
service nginx restart
echo "Autoindex status: $autoindex"
