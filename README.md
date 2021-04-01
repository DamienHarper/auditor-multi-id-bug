# Single id is not allowed on composite primary key in entity EntityName

How to reproduce
```shell
composer install
php bin/console doctrine:database:create
php bin/console doctrine:schema:create
 vendor/bin/phpunit
```