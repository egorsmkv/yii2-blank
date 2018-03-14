Yii 2 Blank
===========

A simple Yii 2 project with Twig template engine.

#### Installation

If you don't have the Composer on your system, you must [install][0] it.

##### 1) Set [chmod][1] permissions (0777 mode) on folders:

- runtime
- web/assets

##### 2) Install third party libraries

```
composer global require "fxp/composer-asset-plugin:v1.3.1"
composer install
```

##### 3) Configure a web server, e.g.:

Apache:

```
<VirtualHost 127.0.0.1:80>
    DocumentRoot "/srv/www/example.com/web"
    ServerName example.com

    ErrorLog "/var/log/example.com-error.log"
    CustomLog "/var/log/example.com-access.log" combined

    <Directory "/srv/www/example.com/web">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

Or run the Yii's internal web server:

```
php ./yii serve
```

##### 4) Done!

Configure app settings in ``config/params.php`` file.

[0]: https://getcomposer.org/download/
[1]: https://ru.wikipedia.org/wiki/Chmod
