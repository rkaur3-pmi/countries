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
$nominal_currency = Friskals\Countries\CountryLoader::country('ID')->format_currency(1000); 
```

- Format Nominal
```php
$nominal = Friskals\Countries\CountryLoader::country('ID')->format_nominal(1000);
```

- Validate Phone
```php
$is_validated = Friskals\Countries\CountryLoader::country('ID')->validate_phone('+6208120812081');
```

- Transform Phone
```php
$phone = Friskals\Countries\CountryLoader::country('ID')->transform_phone('+6208120812081');
```

