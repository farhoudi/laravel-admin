# Laravel Admin
Laravel Admin (for Laravel 5+).

## Installation

Require via composer:

```
composer require farhoudi/laravel-admin
```

Register service provider to the `providers` array in `config/app.php`

```php
Farhoudi\Admin\AdminServiceProvider::class,
```

Publish migration files

```
$ php artisan vendor:publish --provider="Farhoudi\Admin\AdminServiceProvider"
```

Run migrations

```
$ php artisan migrate
```

Add your models to config file

## License

Laravel Admin is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
