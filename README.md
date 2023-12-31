# Monitor metrics of Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ibrahim-shuttlebd/laravel-disk-monitor.svg?style=flat-square)](https://packagist.org/packages/ibrahim-shuttlebd/laravel-disk-monitor)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ibrahim-shuttlebd/laravel-disk-monitor/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ibrahim-shuttlebd/laravel-disk-monitor/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ibrahim-shuttlebd/laravel-disk-monitor/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ibrahim-shuttlebd/laravel-disk-monitor/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ibrahim-shuttlebd/laravel-disk-monitor.svg?style=flat-square)](https://packagist.org/packages/ibrahim-shuttlebd/laravel-disk-monitor)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require ibrahim-shuttlebd/laravel-disk-monitor
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-disk-monitor-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-disk-monitor-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-disk-monitor-views"
```

## Usage

```php
$laravelDiskMonitor = new Ibrahimshuttlebd\LaravelDiskMonitor();
echo $laravelDiskMonitor->echoPhrase('Hello, Ibrahimshuttlebd!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [mahmud ibrahim](https://github.com/ibrahim-shuttlebd)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
