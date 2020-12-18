# laravel-icepay

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kallencode/laravel-icepay.svg?style=flat-square)](https://packagist.org/packages/kallencode/laravel-icepay)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/kallencode/laravel-icepay/run-tests?label=tests)](https://github.com/kallencode/laravel-icepay/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/kallencode/laravel-icepay.svg?style=flat-square)](https://packagist.org/packages/kallencode/laravel-icepay)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require kallencode/laravel-icepay
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Kallencode\Icepay\IcepayServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
    'api_key' => env('ICEPAY_API_KEY', 'xxxxx'),
    'api_secret' => env('ICEPAY_API_SECRET', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'),

    'completed_url' => env('ICEPAY_COMPLETED_URL', 'http://example.local/payment.php'),
    'error_url' => env('ICEPAY_ERROR_URL', 'http://example.local/payment.php'),
];
```

## Usage

```php
$licepay = new Kallencode\Icepay();
echo $licepay->echoPhrase('Hello, Kallencode!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Roelof Kallenkoot](https://github.com/rkallencode)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
