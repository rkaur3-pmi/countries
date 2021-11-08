# Countries
Format number for Laravel Framework

## Description
This package will set the nominal and currency format of a number based on the country

## How to Install
- Install with composer
```bash
composer require friskals/countries
```

## Available Method
- Format Currency
```php
(new Friskals\Countries\Helper())->getCountry('ID')->format_currency(1000);// ex: the given country is ID with value 1000
```

- Format Nominal
```php
(new Friskals\Countries\Helper())->getCountry('ID')->format_nominal(1000);
```