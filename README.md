# Laravel Token Session

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-token-session
```

And then, if using Laravel 5, include the service provider within `app/config/app.php`.

``` php
BrianFaust\TokenSession\TokenSessionServiceProvider::class
```

And, for convenience, add a facade alias to this same file at the bottom:

``` php
'TokenSession' => BrianFaust\TokenSession\Facades\TokenSession
```

## Usage

``` php
...
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
