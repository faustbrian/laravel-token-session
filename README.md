# Laravel Token Session

## Installation

First, pull in the package through Composer.

```js
composer require draperstudio/laravel-token-session:1.0.*@dev
```

And then, if using Laravel 5, include the service provider within `app/config/app.php`.

```php
'providers' => [
    // ... Illuminate Providers
    // ... App Providers
    DraperStudio\TokenSession\ServiceProvider::class
];
```

And, for convenience, add a facade alias to this same file at the bottom:

```php
'aliases' => [
    // ... Illuminate Facades
    'TokenSession' => DraperStudio\TokenSession\Facades\TokenSession::class
];
```

## License

Laravel Token Session is licensed under [The MIT License (MIT)](LICENSE).
