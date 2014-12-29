#!/usr/bin/env bash
# From Creating a Vagrant Box
cat << EOF | sudo tee -a /etc/motd.tail
***************************************

Welcome to ubuntu/trusty32 Vagrant Box

For blog

***************************************
EOF

### From Installing npm & bower
sudo apt-get install -y npm
sudo npm install -g bower
sudo ln -s /usr/bin/nodejs /usr/bin/node

### From Installing Git
sudo apt-get install -y git

### From Installing PHP5
sudo apt-get install -y php5-common php5 php5-cli php5-cgi php5-mysql php5-mcrypt
sudo php5enmod mcrypt

### From Installing Composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

### From Installing MySQL
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password root'
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password root'
sudo apt-get install -y php5-mysql mysql-server mysql-client

### From Installing Apache
sudo apt-get install -y apache2 libapache2-mod-php5
sudo a2enmod rewrite
sudo service apache2 restart

echo "You've been provisioned"