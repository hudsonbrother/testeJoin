# Test Join

> This test was developed with php, Laravel, mysql and the bootstrap css.

This Project is running with Laravel version 8.5

## Getting started

Assuming you've already installed on your machine: PHP (>= 7.3.0), [Laravel](https://laravel.com), [Composer](https://getcomposer.org) and [Mysql](https://www.mysql.com/de/downloads/).

``` bash
# install dependencies
composer install

# create .env file
cp .env.example .env
```

Configure ```.env``` with mysql data:
``` code
DB_CONNECTION=mysql             * type database
DB_HOST=127.0.0.1               * host database
DB_PORT=3306                    * Port 
DB_DATABASE=testJoin            * name database
DB_USERNAME=root                * username 
DB_PASSWORD=                    * password
```
``` bash
# generate the application key
php artisan key:generate

#Then launch the server:
php artisan serve
```

The Laravel sample project is now up and running! Access it at http://localhost:8000.