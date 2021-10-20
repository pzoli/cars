# Car MVC

## Description
This project's goal is to store car usage and general services.

## Requirements
PHP >=7.4.3

MySQL >= 8.0.26

Apache2 >= 2.4.41

## Tested on 
Ubuntu 20.04.3 LTS, PHP 7.4.3, Apache2.4.41, MySQL 8.0.26

## Installation

Edit php.ini at /etc/php/7.4/apache2/php.ini uncomment (delete ';' from start of the line)

```
;extension=pdo_mysql
```

Add /etc/apache2/conf-enabled/cars.conf

Set "AllowOverride All" for enable .htaccess rewrite

```
Alias /carassist /home/pzoli/git/cars

<Directory /home/pzoli/git/cars>
    Options SymLinksIfOwnerMatch
    DirectoryIndex index.php

    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>
```

Make destination folder /home/pzoli/git and clone git repository here. 

```
git clone http://github.com/pzoli/cars.git
```

(**node** if you choose different document root directory, please modify it at /etc/apache2/conf-enabled/cars.conf ,too)

Enable rewrite mod for apache2

```
sudo a2enmod rewrite
```

Restart apache2.

```
sudo service apache2 restart
```

## Configure project

Edit config.php

- *URL_SUBFOLDER*: project request subfolder from root dir (equals with alias in cars.conf)
- *DB_HOST*: database hostname
- *DB_USER*: database user name
- *DB_PASS*: database password
- *DB_NAME*: database name

## Import SQL files

From the sql subfolder import structure.sql and test-content.sql to your database:

```
mysql -u username -p database_name < structure.sql
mysql -u username -p database_name < test-content.sql
```

## Start app

Now you can open http://localhost/carassist in your browser.

## TODOs

- Alert SQL exception on client side (at delete referenced manufacturer and model)
- Routes import from external file (YaML or JSON)
- Select2 search for name with ajax (recuire new route)

## References

- https://github.com/pzoli/cars (**this project**)
- https://github.com/gmaccario/simple-mvc-php-framework
