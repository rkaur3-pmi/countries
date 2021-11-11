# Countries

This package allow you 
- Set the nominal and currency format of a value based on the given 
country.
- Validate and transform  phone number of a particular country.

## Instalation
- Install with composer
```bash
composer require friskals/countries
``` 
For Laravel >=5.5 that's all. You don't need any configurations since it's already handled by `Laravel Package Discovery` but for Lumen you need a simple configuration.
## Configuration
The default are set in `config/country.php`. 
#### Lumen 
- Load your configuration file in `bootstrap/app.php`
	```php
    $app->configure('country');
    ```
- And register your provider at `bootstrap/app.php`
    ```php 
    $app->register(Friskals\Countries\Providers\CountryServiceProvider::class);
    ```
## Usage
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

- Validate Phone
```php
$country = Friskals\Countries\CountryLoader::country('ID'); 
$formatted_value = $country->validate_phone('+6208120812081');
```

- Transform Phone
```php
$country = Friskals\Countries\CountryLoader::country('ID'); 
$formatted_value = $country->transform_phone('+6208120812081');
```

