# This package is in production PLEASE DO NOT USE WIP.


# This package create SAP Models in Laravel app.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alixcan/laravelsapmodels.svg?style=flat-square)](https://packagist.org/packages/alixcan/laravelsapmodels)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/alixcan/laravelsapmodels/run-tests?label=tests)](https://github.com/alixcan/laravelsapmodels/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/alixcan/laravelsapmodels/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/alixcan/laravelsapmodels/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/alixcan/laravelsapmodels.svg?style=flat-square)](https://packagist.org/packages/alixcan/laravelsapmodels)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/LaravelSAPModels.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/LaravelSAPModels)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require alixcan/laravelsapmodels
```

You can publish and use the models with:

```bash
 php artisan laravelsapmodels:generate --module=HumanResources
```

Aviable Modules
HumanResources
MRP
Reports
SalesOpportunities
Banking
Finance
General
Service
Business Partners
Inventory and Production
Marketing Documents
Administration
all

This is the contents of the published config file:

```php
return [
    'driver' => env('SAP_DATABASE_DRIVER', 'SAP'),
];
```

## Usage

```php
$laravelSAPModels = new Alixcan\LaravelSAPModels();
echo $laravelSAPModels->echoPhrase('Hello, Alixcan!');
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

- [AlixcaN](https://github.com/alixcan)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
