<?php

namespace Friskals\Countries;

use Friskals\Countries\Libraries\Country;
use Illuminate\Support\Facades\App;

class CountryLoader
{
    public static function country($country_code)
    {
        $country = config("country.{$country_code}.class");
        
        App::bind(Country::class, $country);

        return App::make(Country::class);
    }
}
