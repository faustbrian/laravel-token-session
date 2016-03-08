# Laravel Token Session

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

## Install

Via Composer

``` bash
$ composer require draperstudio/laravel-token-session
```

And then, if using Laravel 5, include the service provider within `app/config/app.php`.

``` php
'providers' => [
    // ... Illuminate Providers
    // ... App Providers
    DraperStudio\TokenSession\ServiceProvider::class
];
```

And, for convenience, add a facade alias to this same file at the bottom:

``` php
'aliases' => [
    // ... Illuminate Facades
    'TokenSession' => DraperStudio\TokenSession\Facades\TokenSession::class
];
```

## Usage

``` php
$skeleton = new League\Skeleton();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email hello@draperstudio.tech instead of using the issue tracker.

## Credits

- [DraperStudio][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/DraperStudio/laravel-token-session.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/DraperStudio/Laravel-Token-Session/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/DraperStudio/laravel-token-session.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/DraperStudio/laravel-token-session.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/DraperStudio/laravel-token-session.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/DraperStudio/laravel-token-session
[link-travis]: https://travis-ci.org/DraperStudio/Laravel-Token-Session
[link-scrutinizer]: https://scrutinizer-ci.com/g/DraperStudio/laravel-token-session/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/DraperStudio/laravel-token-session
[link-downloads]: https://packagist.org/packages/DraperStudio/laravel-token-session
[link-author]: https://github.com/DraperStudio
[link-contributors]: ../../contributors
