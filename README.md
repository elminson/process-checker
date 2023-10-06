# This is my package process-checker

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

## Installation

You can install the package via composer:

```bash
composer require elminson/process-checker
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="process-checker-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="process-checker-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="process-checker-views"
```

## Usage

```php
$processChecker = new Elminson\ProcessChecker();
echo $processChecker->echoPhrase('Hello, Elminson!');
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

- [Elminson De Oleo Baez](https://github.com/elminson)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
