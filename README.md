# Laravel Chilkat

[![Latest Version on Packagist](https://img.shields.io/packagist/v/honlapbirodalom/laravel-chilkat.svg?style=flat-square)](https://packagist.org/packages/honlapbirodalom/laravel-chilkat)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/honlapbirodalom/laravel-chilkat/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/honlapbirodalom/laravel-chilkat/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/honlapbirodalom/laravel-chilkat/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/honlapbirodalom/laravel-chilkat/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/honlapbirodalom/laravel-chilkat.svg?style=flat-square)](https://packagist.org/packages/honlapbirodalom/laravel-chilkat)

This package helps you to implement [Chilkat Software](https://www.chilkatsoft.com/) PHP libraries.

## Installation

### Chilkat PHP

__Complatibility:__ v9.5.0.94

Required library install instructions are at:  https://www.chilkatsoft.com/installPhpExtension.asp also
see https://www.chilkatsoft.com/php.asp#debianInstall for apt-get installs for Debian/Ubuntu.

### Laravel

You can install the package via composer:

```bash
composer require honlapbirodalom/laravel-chilkat
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="chilkat-config"
```

This is the contents of the published config file:

```php
return [

    'license' => ... // Your Chilkat Software lisense.
];
```

## Usage

```php
use HonlapBirodalom\Chilkat\Facades\Chilkat;

Chilkat::initialize();
```

Reference Documentation: https://www.chilkatsoft.com/refdoc/php.asp <br>
Samples: https://www.example-code.com/php/default.asp

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Gábor Szentpéteri](https://github.com/StpGabriel)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
