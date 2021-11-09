# Countries
Nominal and currency formatting for Laravel Framework

## Description
This package will set the nominal and currency format of a value based on the given 
country

## How to Install
- Install with composer
```bash
composer require friskals/countries
```
## How to use
- Format Currency
```php
$country = Friskals\Countries\CountryLoader::country('ID'); // the given country is Indonesia(ID)
$formatted_value = $country->format_currency(1000); //the value is 1000
```

- Format Nominal
```php
$country = Friskals\Countries\CountryLoader::country('ID'); 
$formatted_value = $country->format_nominal(1000);
```