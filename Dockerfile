# Download Debian buster image from Docker hub
FROM debian:buster

MAINTAINER Marilynn Virgina

# Copy the host srcs folder to the container root folder
COPY /srcs /root

# Install and update apt, nginx, mariadb, php packages
RUN apt-get update && \
    apt-get -y upgrade && \
    apt-get install -y wget nginx mariadb-server php-cli php-fpm php7.3 php-mysql php-mbstring openssl zip

# Run the container
CMD bash /root/server-config.sh
