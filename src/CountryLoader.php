<?php

namespace Friskals\Countries;

use Friskals\Countries\Libraries\Country;
use Illuminate\Support\Facades\App;

class CountryLoader
{
    public static function country($country_code)
    {
        $country = config("country.{$country_code}.class");
        
        if(!$country){
            $country = config("country.ID.class");
        }
        
        App::bind(Country::class, $country);

        return App::make(Country::class);
    }
}
