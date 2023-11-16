# Seed your database using a migration-like system in order to seed only the application defaults added while development

[![Latest Version on Packagist](https://img.shields.io/packagist/v/hydrat/partial-seeder.svg?style=flat-square)](https://packagist.org/packages/hydrat/partial-seeder)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/hydrat/partial-seeder/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/hydrat/partial-seeder/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/hydrat/partial-seeder/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/hydrat/partial-seeder/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/hydrat/partial-seeder.svg?style=flat-square)](https://packagist.org/packages/hydrat/partial-seeder)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require hydrat/partial-seeder
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="partial-seeder-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="partial-seeder-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="partial-seeder-views"
```

## Usage

```php
$partialSeeder = new Hydrat\PartialSeeder();
echo $partialSeeder->echoPhrase('Hello, Hydrat!');
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

- [Thomas Georgel](https://github.com/tgeorgel)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
