# This package is in production PLEASE DO NOT USE WIP.


# This package create SAP Models in Laravel app.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alixcan/laravelsapmodels.svg?style=flat-square)](https://packagist.org/packages/alixcan/laravelsapmodels)
[![Total Downloads](https://img.shields.io/packagist/dt/alixcan/laravelsapmodels.svg?style=flat-square)](https://packagist.org/packages/alixcan/laravelsapmodels)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require alixcan/laravelsapmodels
```

Publish the config file with:

```bash
php artisan vendor:publish --tag="laravelsapmodels-config"
```

This is the contents of the published config file:

```php
return [
    'driver' => env('SAP_DATABASE_DRIVER', 'SAP'),
];
```


Edit `config/database.php` file 

```php
 'connections' => [
    ...
        'sapConnectionDriver' => [
                'driver' => 'sqlsrv',
                'url' => env('DATABASE_URL'),
                'port' => 1433,
                'database' => env('SAP_DATABASE_DATABASE'),
                'username' => env('SAP_DATABASE_USERNAME'),
                'password' => env('SAP_DATABASE_PASSWORD'),
                'charset' => 'utf8',
                'prefix' => '',
                'prefix_indexes' => true,
                //'read' => [
                //    'host' => env('SAP_DATABASE_HOST'),
                //],
                //'write' => [
                //    'host' => env('SAP_DATABASE_HOST'),
                //]
                'host' => env('SAP_DATABASE_HOST'),
                //'encrypt' => 'yes', // alternatively, defer to an env variable
                //'trust_server_certificate' => 'true', // alternatively, defer to an env variable
        
            ],
    ...
],
```



Create your `.env` variables
```dotenv
SAP_DATABASE_DRIVER=
SAP_DATABASE_DATABASE=
SAP_DATABASE_USERNAME=
SAP_DATABASE_PASSWORD=
SAP_DATABASE_HOST=
```

You can publish and use the models with:

```bash
 php artisan laravelsapmodels:generate --module=HumanResources
```

### Aviable Modules

- HumanResources
- MRP
- Reports
- SalesOpportunities
- Banking
- Finance
- General
- Service
- Business Partners
- Inventory and Production
- Marketing Documents
- Administration
- all



## Usage

```php

return \App\Models\SAP\HumanResources\OHTR::all();

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
