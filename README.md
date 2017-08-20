Yii 2 Blank
===========

A simple Yii 2 project with Twig template engine.

#### Installation

##### 0) [Install Composer][0]

##### 1) Set [chmod][1] permissions - 0777 on folders:

- runtime
- web/assets

Or run this command:

```
composer make_chmod
```

##### 2) Cofigure web server, like:

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

##### 3) Install third party libraries

```
composer global require "fxp/composer-asset-plugin:v1.3.1"
composer install
```

##### 7) Done!

Configure app settings in ``config/params.php``.

[0]: https://getcomposer.org/download/
[1]: https://ru.wikipedia.org/wiki/Chmod
