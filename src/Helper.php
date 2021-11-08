<?php

namespace Friskals\Countries;

use Friskals\Countries\Country;
use Illuminate\Support\Facades\App;

class Helper
{
    public function getCountry($country_code)
    {
        $country = config("country.{$country_code}.class");
    
        App::bind(Country::class, $country);

        return App::make(Country::class);
    }
}
