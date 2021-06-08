mkdir /var/www/localhost
chown -R www-data:www-data /var/www/localhost

cd /root
cp /root/nginx.conf /etc/nginx/sites-available/default

# Install phpMyAdmin and wordpress
tar -xzvf phpMyAdmin-5.0.4-all-languages.tar.zip
rm -rf  phpMyAdmin-5.0.4-all-languages.tar.zip
mv  phpMyAdmin-5.0.4-all-languages /var/www/localhost/phpmyadmin
cp /root/config.inc.php /var/www/localhost/phpmyadmin/config.inc.php

tar -xzvf wordpress-5.6.tar.zip
rm -rf wordpress-5.6.tar.zip
mv wordpress /var/www/localhost/wordpress
cp wp-config.php /var/www/localhost/wordpress

# Configure SSL
openssl req -newkey rsa:4096 -days 365 -nodes -x509 \
-subj "/C=RU/ST=Moscow/L=Moscow /O=21school/OU=mvirgina/CN=localhost/emailAddress=mvirgina@student.21-school.ru" \
-keyout /etc/ssl/private/nginx-selfsigned.key \
-out /etc/ssl/certs/nginx-selfsigned.crt 2>> /dev/null
chmod 600 /etc/ssl/certs/nginx-selfsigned.crt /etc/ssl/private/nginx-selfsigned.key

# Start nginx, mysql and php
service nginx start
service mysql start
echo "CREATE DATABASE test;" | mysql -u root
echo "GRANT ALL PRIVILEGES ON test.* TO 'mvirgina'@'localhost' IDENTIFIED BY 'GOLD' WITH GRANT OPTION;" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root
service php7.3-fpm start

bash
