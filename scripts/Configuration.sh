#!/bin/bash
#sudo sh -c "echo 'Include /etc/phpmyadmin/apache.conf' >> /etc/apache2/apache2.conf"
sudo sh -c "echo 'ServerName vagrant' >> /etc/apache2/apache2.conf"
<<<<<<< HEAD
cat > /etc/apache2/sites-available/001-php-prototype.conf << EOF
<VirtualHost *:80>
    ServerName php-prototype
=======
cat > /etc/apache2/sites-available/001-blog.conf << EOF
<VirtualHost *:80>
    ServerName blog.com
>>>>>>> comments
    DocumentRoot /vagrant/public

    DirectoryIndex index.php

    <Directory "/vagrant/public">
        Require all granted
        AllowOverride All
    </Directory>

</VirtualHost>
EOF
<<<<<<< HEAD
sudo a2ensite 001-php-prototype.conf
=======
sudo a2ensite 001-blog.conf
>>>>>>> comments
sudo service apache2 restart